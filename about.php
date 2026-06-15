<?php
$currentPage = 'about';
$pageTitle = 'About Us - SVS & Co. - Leadership & Expertise';
$pageDesc = 'Learn about CA Saurabh Vanya Sharma & Co. (SVS), our mission, vision, and meet our team of expert Chartered Accountants, CMAs, and Company Secretaries.';

$pageSchema = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "AboutPage",
      "@id": "https://www.casaurabhvanyasharma.com/about.php",
      "url": "https://www.casaurabhvanyasharma.com/about.php",
      "name": "About SVS & Co. - Leadership and Heritage",
      "isPartOf": {
        "@type": "WebSite",
        "@id": "https://www.casaurabhvanyasharma.com/#website",
        "url": "https://www.casaurabhvanyasharma.com/",
        "name": "CA Saurabh Vanya Sharma & Co."
      },
      "description": "Saurabh Vanya Sharma & Co. is a leading Chartered Accountancy firm in Delhi, providing audit, tax, and consulting services under the leadership of CA Saurabh Sharma."
    },
    {
      "@type": "Organization",
      "@id": "https://www.casaurabhvanyasharma.com/#organization",
      "name": "CA Saurabh Vanya Sharma & Co.",
      "url": "https://www.casaurabhvanyasharma.com/",
      "logo": "https://www.casaurabhvanyasharma.com/assets/images/logo.png",
      "employee": [
        {
          "@type": "Person",
          "name": "Saurabh Sharma",
          "jobTitle": "Founder & Partner (FCA, LL.B)"
        },
        {
          "@type": "Person",
          "name": "Subramanian Narayanan",
          "jobTitle": "Partner (FCA)"
        },
        {
          "@type": "Person",
          "name": "Ashish Sharma",
          "jobTitle": "ACA Partner"
        },
        {
          "@type": "Person",
          "name": "Puneet Sharma",
          "jobTitle": "Partner (FCA, PGDM)"
        },
        {
          "@type": "Person",
          "name": "Pankaj Suryan",
          "jobTitle": "Partner (FCA, CMA-Final)"
        },
        {
          "@type": "Person",
          "name": "Shalini Sharma",
          "jobTitle": "CS & Legal Associate"
        }
      ]
    }
  ]
}
JSON;

include 'includes/header.php';
?>

<!-- Breadcrumb Title Banner -->
<div class="breadcrumb-banner">
  <div class="container breadcrumb-container">
    <div class="breadcrumb-title">
      <h2>About Us</h2>
    </div>
    <div class="breadcrumb-list">
      <a href="https://www.casaurabhvanyasharma.com/index.php">Home</a>
      <span class="breadcrumb-separator">/</span>
      <span class="breadcrumb-active">About Us</span>
    </div>
  </div>
</div>

<!-- Main Firm Intro Section -->
<section class="section section-bg-white">
  <div class="container">
    <div class="overview-grid">
      <!-- Left side photo -->
      <div>
        <img src="assets/images/about-team.png" alt="SVS & Co. Professional Partners Team" width="1024" height="1024" style="border-radius: var(--border-radius); box-shadow: var(--shadow-lg); width: 100%; height: auto;" fetchpriority="high">
      </div>
      
      <!-- Right side details -->
      <div class="overview-text">
        <span class="section-label">Our Heritage</span>
        <h3 class="section-title">Trusted Financial Partners. <br>Proven Business Advisors.</h3>
        <p>
          At Saurabh Vanya Sharma &amp; Co (SVS), we stand at the intersection of experience, insight, and integrity. Founded by CA Saurabh Sharma, SVS is a professionally managed Chartered Accountancy firm with a strong track record of delivering high-quality <a href="https://www.casaurabhvanyasharma.com/audit-assurance.php">audit &amp; assurance</a>, <a href="https://www.casaurabhvanyasharma.com/taxation.php">tax</a>, and advisory services for over 25 years.
        </p>
        <p>
          We're more than just accountants — we're strategic advisors dedicated to helping businesses navigate complexity, manage compliance, and unlock growth opportunities. Our team comprises seasoned Chartered Accountants, <a href="https://www.casaurabhvanyasharma.com/corporate-advisory.php">Company Secretaries</a>, CMAs, and legal professionals, each committed to delivering solutions that are technically sound, industry-specific, and results-driven. <a href="https://www.casaurabhvanyasharma.com/contact.php">Contact our team →</a>
        </p>
      </div>
    </div>

    <!-- Twin Mission & Vision Panels in a single dark container -->
    <div class="mission-vision-wrapper">
      <div class="mission-vision-grid">
        <!-- Mission -->
        <div class="m-v-card">
          <h3>Our Mission</h3>
          <p>
            To empower businesses with accurate, timely, and practical financial solutions that help them grow responsibly and remain compliant, in a changing regulatory landscape.
          </p>
        </div>

        <!-- Vision -->
        <div class="m-v-card vision">
          <h3>Our Vision</h3>
          <p>
            To be recognized as a trusted and forward-thinking advisory firm, known for our professional integrity, deep expertise, and client-first approach.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Founder Section -->
<section class="section section-bg-white" id="founder-section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">The Visionary Behind SVS &amp; Co.</span>
      <h3 class="section-title">Meet Our Founder</h3>
    </div>

    <div class="founder-grid">
      <!-- Photo Column -->
      <div class="founder-photo-col">
        <div class="founder-photo-wrap">
          <img src="team-members-headshot/CA-Saurabh-Sharma.webp"
               alt="CA Saurabh Sharma - Founder & Partner, SVS & Co."
               class="founder-photo" width="200" height="275" loading="lazy">
          <div class="founder-badge">Founder &amp; Managing Partner</div>
        </div>
      </div>

      <!-- Bio Column -->
      <div class="founder-bio-col">
        <div class="founder-name-block">
          <h2 class="founder-name">CA Saurabh Sharma</h2>
          <span class="founder-credentials-badge">FCA &nbsp;|&nbsp; LL.B &nbsp;|&nbsp; PGDIRPM</span>
        </div>

        <p class="founder-bio">
          CA Saurabh Sharma is a distinguished Chartered Accountant and the founding partner of Saurabh Vanya Sharma &amp; Co. (SVS). With over <strong>25 years of hands-on experience</strong> across <a href="https://www.casaurabhvanyasharma.com/audit-assurance.php">audit &amp; assurance</a>, <a href="https://www.casaurabhvanyasharma.com/taxation.php">taxation</a>, risk advisory, and management consulting, he has built the firm into a trusted name in the financial services landscape of Delhi-NCR and beyond.
        </p>
        <p class="founder-bio">
          Educated at Aligarh Muslim University and a Fellow Member of the <strong>Institute of Chartered Accountants of India (ICAI)</strong>, CA Saurabh has led complex engagements spanning management consulting, <a href="https://www.casaurabhvanyasharma.com/audit-assurance.php">assurance &amp; internal audit</a>, risk advisory, and <a href="https://www.casaurabhvanyasharma.com/international-tax.php">international tax</a>. His sharp legal acumen — backed by his LL.B qualification — gives him a rare edge in providing holistic, compliance-driven counsel to businesses across industries.
        </p>
        <p class="founder-bio">
          He is deeply committed to client-first advisory, combining technical depth with practical judgment to help businesses navigate regulatory complexity and unlock sustainable growth.
        </p>

        <div class="founder-highlights">
          <div class="founder-highlight-item">
            <span class="highlight-number">25+</span>
            <span class="highlight-label">Years of Experience</span>
          </div>
          <div class="founder-highlight-item">
            <span class="highlight-number">FCA</span>
            <span class="highlight-label">Fellow Chartered Accountant</span>
          </div>
          <div class="founder-highlight-item">
            <span class="highlight-number">LL.B</span>
            <span class="highlight-label">Legal Qualification</span>
          </div>
          <div class="founder-highlight-item">
            <span class="highlight-number">Pan-India</span>
            <span class="highlight-label">Client Presence</span>
          </div>
        </div>

        <div class="founder-expertise-tags">
          <a href="https://www.casaurabhvanyasharma.com/audit-assurance.php" class="expertise-tag">Audit &amp; Assurance</a>
          <a href="https://www.casaurabhvanyasharma.com/audit-assurance.php" class="expertise-tag">Risk Advisory</a>
          <a href="https://www.casaurabhvanyasharma.com/corporate-advisory.php" class="expertise-tag">Management Consulting</a>
          <a href="https://www.casaurabhvanyasharma.com/international-tax.php" class="expertise-tag">International Taxation</a>
          <a href="https://www.casaurabhvanyasharma.com/corporate-advisory.php" class="expertise-tag">Corporate Compliance</a>
          <a href="https://www.casaurabhvanyasharma.com/taxation.php" class="expertise-tag">Personal Property Tax</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Meet Our Leadership Section -->
<section class="section section-bg-light" id="leadership-section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">A Team of Experts Committed to Your Success</span>
      <h3 class="section-title">Meet Our Leadership</h3>
    </div>

    <div class="leadership-grid">
      <!-- Leader 1 -->
      <div class="leader-card" id="leaderSubramanian">
        <div class="leader-image">
          <img src="team-members-headshot/CA-Subramanian-Narayanan.webp" alt="CA Subramanian Narayanan - Partner FCA" width="200" height="275" style="width:100%;height:100%;object-fit:cover;display:block;" loading="lazy">
        </div>
        <div class="leader-info">
          <h4 class="leader-name">Subramanian Narayanan</h4>
          <span class="leader-credentials">FCA, B.COM (H)</span>
        </div>
      </div>

      <!-- Leader 2 -->
      <div class="leader-card" id="leaderAshish">
        <div class="leader-image">
          <img src="team-members-headshot/Ashish-sharma.webp" alt="Ashish Sharma - ACA Partner" width="200" height="275" style="width:100%;height:100%;object-fit:cover;display:block;" loading="lazy">
        </div>
        <div class="leader-info">
          <h4 class="leader-name">Ashish Sharma</h4>
          <span class="leader-credentials">ACA, B.COM</span>
        </div>
      </div>

      <!-- Leader 3 -->
      <div class="leader-card" id="leaderSaurabh">
        <div class="leader-image">
          <img src="team-members-headshot/CA-Saurabh-Sharma.webp" alt="CA Saurabh Sharma - Founder & Partner FCA" width="200" height="275" style="width:100%;height:100%;object-fit:cover;display:block;" loading="lazy">
        </div>
        <div class="leader-info">
          <h4 class="leader-name">Saurabh Sharma</h4>
          <span class="leader-credentials">FCA, L.LB,<br>PGDIRPM</span>
        </div>
      </div>

      <!-- Leader 4 -->
      <div class="leader-card" id="leaderPuneet">
        <div class="leader-image">
          <img src="team-members-headshot/CA-Puneet-Sharma.webp" alt="CA Puneet Sharma - Partner FCA PGDM" width="200" height="275" style="width:100%;height:100%;object-fit:cover;display:block;" loading="lazy">
        </div>
        <div class="leader-info">
          <h4 class="leader-name">Puneet Sharma</h4>
          <span class="leader-credentials">FCA, B.COM,<br>PGDM</span>
        </div>
      </div>

      <!-- Leader 5 -->
      <div class="leader-card" id="leaderPankaj">
        <div class="leader-image">
          <img src="team-members-headshot/Pankaj-Suryan.webp" alt="Pankaj Suryan - Partner FCA CMA" width="200" height="275" style="width:100%;height:100%;object-fit:cover;display:block;" loading="lazy">
        </div>
        <div class="leader-info">
          <h4 class="leader-name">Pankaj Suryan</h4>
          <span class="leader-credentials">FCA, B.COM,<br>CMA - FINAL</span>
        </div>
      </div>

      <!-- Leader 6 -->
      <div class="leader-card" id="leaderShalini">
        <div class="leader-image">
          <img src="team-members-headshot/CS-Shalini-Sharma.webp" alt="CS Shalini Sharma - CS & Legal Associate" width="200" height="275" style="width:100%;height:100%;object-fit:cover;display:block;" loading="lazy">
        </div>
        <div class="leader-info">
          <h4 class="leader-name">Shalini Sharma</h4>
          <span class="leader-credentials">BA, LL.B, CS</span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
