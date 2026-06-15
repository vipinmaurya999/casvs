"""
deploy.py — Deploy SVS & Co. site to production server.
Replaces existing WordPress installation.
"""

import paramiko
import os
import sys
import stat
import time

# Try to load local .env if it exists
env_path = os.path.join(os.path.dirname(os.path.abspath(__file__)), ".env")
if os.path.exists(env_path):
    with open(env_path, "r", encoding="utf-8") as f:
        for line in f:
            line = line.strip()
            if line and not line.startswith("#") and "=" in line:
                key, val = line.split("=", 1)
                os.environ[key.strip()] = val.strip()

# ── Connection config ──────────────────────────────────────────────────────────
HOST     = os.environ.get("SSH_HOST", "46.202.161.51")
PORT     = int(os.environ.get("SSH_PORT", "65002"))
USERNAME = os.environ.get("SSH_USER", "u176146172")
PASSWORD = os.environ.get("SSH_PASS")  # Loaded from env/GitHub secrets
LOCAL_DIR = os.environ.get("LOCAL_DIR", os.path.dirname(os.path.abspath(__file__)))


# Files/dirs to exclude from upload
EXCLUDE = {
    ".git", "__pycache__", ".DS_Store", "Thumbs.db",
    "deploy.py", "deploy.log", ".env", ".github",
}

# ── Helpers ────────────────────────────────────────────────────────────────────
def log(msg):
    print(msg, flush=True)

def run_ssh(client, cmd, timeout=30):
    """Run a command via SSH and return (stdout, stderr, exit_code)."""
    stdin, stdout, stderr = client.exec_command(cmd, timeout=timeout)
    out = stdout.read().decode("utf-8", errors="replace").strip()
    err = stderr.read().decode("utf-8", errors="replace").strip()
    code = stdout.channel.recv_exit_status()
    return out, err, code

def mkdir_p(sftp, remote_path):
    """Recursively create remote directories."""
    dirs = []
    path = remote_path
    while True:
        try:
            sftp.stat(path)
            break
        except FileNotFoundError:
            dirs.append(path)
            path = posixpath_dirname(path)
    for d in reversed(dirs):
        try:
            sftp.mkdir(d)
        except Exception:
            pass  # already exists

def posixpath_dirname(p):
    parts = p.rsplit("/", 1)
    return parts[0] if len(parts) > 1 else "/"

def upload_dir(sftp, local_path, remote_path):
    """Recursively upload a local directory to a remote path."""
    total = 0
    for root, dirs, files in os.walk(local_path):
        # Filter out excluded dirs
        dirs[:] = [d for d in dirs if d not in EXCLUDE]

        # Compute relative path
        rel = os.path.relpath(root, local_path).replace("\\", "/")
        remote_root = remote_path if rel == "." else f"{remote_path}/{rel}"

        # Create remote directory
        try:
            sftp.stat(remote_root)
        except FileNotFoundError:
            try:
                sftp.mkdir(remote_root)
                log(f"  [MKDIR] {remote_root}")
            except Exception as e:
                log(f"  [WARN]  Could not mkdir {remote_root}: {e}")

        for fname in files:
            if fname in EXCLUDE:
                continue
            local_file  = os.path.join(root, fname)
            remote_file = f"{remote_root}/{fname}"
            try:
                sftp.put(local_file, remote_file)
                total += 1
                log(f"  [UP]    {remote_file}")
            except Exception as e:
                log(f"  [ERR]   {remote_file}: {e}")

    return total


# ── Main ───────────────────────────────────────────────────────────────────────
def main():
    log("=" * 62)
    log("  SVS & Co. — Production Deployment")
    log(f"  Target: {USERNAME}@{HOST}:{PORT}")
    log("=" * 62)

    # 1. Connect
    log("\n[1/6] Connecting via SSH…")
    client = paramiko.SSHClient()
    client.set_missing_host_key_policy(paramiko.AutoAddPolicy())
    try:
        client.connect(HOST, port=PORT, username=USERNAME, password=PASSWORD,
                       timeout=30, allow_agent=False, look_for_keys=False)
        log("      Connected.")
    except Exception as e:
        log(f"      FAILED: {e}")
        sys.exit(1)

    # 2. Find web root
    log("\n[2/6] Locating web root…")
    candidates = ["~/domains/casaurabhvanyasharma.com/public_html", "~/public_html", "~/www", "~/htdocs", "~/html"]
    web_root = None
    for c in candidates:
        out, _, code = run_ssh(client, f"test -d {c} && echo YES || echo NO")
        if out == "YES":
            # Get absolute path
            abs_out, _, _ = run_ssh(client, f"realpath {c}")
            web_root = abs_out
            log(f"      Found: {web_root}")
            break

    if not web_root:
        # Fallback: ask the server
        out, _, _ = run_ssh(client, "echo $HOME")
        web_root = out + "/public_html"
        log(f"      Defaulting to: {web_root}")

    # 3. Inspect existing content
    log("\n[3/6] Inspecting existing WordPress installation…")
    out, _, _ = run_ssh(client, f"ls {web_root}/ 2>/dev/null | head -30")
    log(f"      Current files:\n{'      ' + out.replace(chr(10), chr(10) + '      ')}")

    # 4. Backup WordPress wp-config.php and database info (just in case)
    log("\n[4/6] Backing up WordPress config before removal…")
    bk_cmd = (
        f"if [ -f {web_root}/wp-config.php ]; then "
        f"cp {web_root}/wp-config.php ~/wp-config.backup.php && echo 'Backed up'; "
        f"else echo 'No wp-config found'; fi"
    )
    out, _, _ = run_ssh(client, bk_cmd)
    log(f"      {out}")

    # 5. Clear web root (remove WordPress files, keep .htaccess temporarily)
    log("\n[5/6] Clearing web root of WordPress files…")
    # Remove everything except the directory itself
    clear_cmd = (
        f"find {web_root} -mindepth 1 -maxdepth 1 "
        f"! -name '.htaccess' "
        f"-exec rm -rf {{}} + && echo 'Cleared'"
    )
    out, err, code = run_ssh(client, clear_cmd, timeout=60)
    log(f"      {out or err}")

    # 6. Upload new site
    log("\n[6/6] Uploading SVS & Co. site files…")
    sftp = client.open_sftp()
    total = upload_dir(sftp, LOCAL_DIR, web_root)
    sftp.close()
    log(f"\n      Upload complete — {total} files uploaded.")

    # 7. Set file permissions
    log("\n[+]   Setting permissions (dirs 755, files 644)…")
    perm_cmd = (
        f"find {web_root} -type d -exec chmod 755 {{}} + && "
        f"find {web_root} -type f -exec chmod 644 {{}} + && "
        f"echo 'Permissions set'"
    )
    out, err, _ = run_ssh(client, perm_cmd, timeout=60)
    log(f"      {out or err}")

    # 8. Verify index.php is present
    log("\n[+]   Verifying deployment…")
    out, _, _ = run_ssh(client, f"ls {web_root}/index.php {web_root}/.htaccess {web_root}/sitemap.xml 2>&1")
    log(f"      {out}")

    # 9. Done
    client.close()
    log("\n" + "=" * 62)
    log("  DEPLOYMENT COMPLETE!")
    log(f"  Site is live at: https://casaurabhvanyasharma.com/")
    log("=" * 62)

if __name__ == "__main__":
    main()
