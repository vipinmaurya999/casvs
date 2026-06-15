<?php
$currentPage = '';
$noIndex     = true;
$pageTitle   = 'Page Not Found (404)';
$pageDesc    = 'The page you are looking for could not be found. Please navigate back to the CA Saurabh Vanya Sharma & Co. homepage.';
include 'includes/header.php';
?>

<section style="min-height: 70vh; display: flex; align-items: center; justify-content: center; padding: 5rem 1rem; text-align: center; background: linear-gradient(135deg, #f0f4ff 0%, #fff 100%);">
  <div style="max-width: 560px; margin: 0 auto;">

    <!-- 404 Number -->
    <div style="font-size: clamp(6rem, 20vw, 10rem); font-weight: 900; line-height: 1; color: var(--color-primary); opacity: 0.15; letter-spacing: -0.04em; user-select: none;">
      404
    </div>

    <!-- Icon -->
    <div style="margin-top: -1.5rem; margin-bottom: 1.5rem;">
      <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="none" viewBox="0 0 24 24" stroke="var(--color-primary)" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
          d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    </div>

    <h1 style="font-size: 2rem; font-weight: 800; color: var(--color-primary-dark); margin-bottom: 1rem;">
      Page Not Found
    </h1>
    <p style="font-size: 1.05rem; color: var(--color-gray-500); line-height: 1.7; margin-bottom: 2.5rem;">
      The page you're looking for doesn't exist or may have been moved.
      Let us guide you back to the right place.
    </p>

    <!-- Navigation Links -->
    <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; margin-bottom: 3rem;">
      <a href="https://casaurabhvanyasharma.com/" 
         style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--color-primary); color: #fff; padding: 0.85rem 1.8rem; border-radius: 6px; font-weight: 700; font-size: 0.95rem; text-decoration: none; transition: background 0.2s;">
        ← Back to Homepage
      </a>
      <a href="https://casaurabhvanyasharma.com/contact.php"
         style="display: inline-flex; align-items: center; gap: 0.5rem; background: transparent; color: var(--color-primary); border: 2px solid var(--color-primary); padding: 0.85rem 1.8rem; border-radius: 6px; font-weight: 700; font-size: 0.95rem; text-decoration: none; transition: all 0.2s;">
        Contact Us
      </a>
    </div>

    <!-- Quick Service Links -->
    <p style="font-size: 0.85rem; color: var(--color-gray-400); margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 0.08em; font-weight: 600;">
      Our Services
    </p>
    <div style="display: flex; flex-wrap: wrap; gap: 0.6rem; justify-content: center;">
      <a href="https://casaurabhvanyasharma.com/audit-assurance.php"     style="font-size: 0.85rem; color: var(--color-primary); border: 1px solid var(--color-primary); border-radius: 20px; padding: 0.35rem 0.9rem; text-decoration: none;">Audit &amp; Assurance</a>
      <a href="https://casaurabhvanyasharma.com/taxation.php"            style="font-size: 0.85rem; color: var(--color-primary); border: 1px solid var(--color-primary); border-radius: 20px; padding: 0.35rem 0.9rem; text-decoration: none;">Taxation</a>
      <a href="https://casaurabhvanyasharma.com/corporate-advisory.php"  style="font-size: 0.85rem; color: var(--color-primary); border: 1px solid var(--color-primary); border-radius: 20px; padding: 0.35rem 0.9rem; text-decoration: none;">Corporate Advisory</a>
      <a href="https://casaurabhvanyasharma.com/international-tax.php"   style="font-size: 0.85rem; color: var(--color-primary); border: 1px solid var(--color-primary); border-radius: 20px; padding: 0.35rem 0.9rem; text-decoration: none;">International Tax</a>
      <a href="https://casaurabhvanyasharma.com/bpo-outsourcing.php"     style="font-size: 0.85rem; color: var(--color-primary); border: 1px solid var(--color-primary); border-radius: 20px; padding: 0.35rem 0.9rem; text-decoration: none;">BPO &amp; Outsourcing</a>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
