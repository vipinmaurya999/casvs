<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Dynamic Title for SEO -->
  <title><?php echo isset($pageTitle) ? $pageTitle . " - SVS & Co." : "CA Saurabh Vanya Sharma & Co. - SVS"; ?></title>

  <!-- SEO Meta Description -->
  <meta name="description"
    content="<?php echo isset($pageDesc) ? $pageDesc : 'Saurabh Vanya Sharma & Co. (SVS) is a leading Chartered Accountancy firm in Delhi, offering premier services in Audit & Assurance, Taxation, Business Advisory, and Financial Consulting.'; ?>">

  <!-- Robots Crawler Directives -->
  <?php if (isset($noIndex) && $noIndex): ?>
    <meta name="robots" content="noindex, nofollow">
  <?php else: ?>
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <?php endif; ?>

  <!-- Canonical URL -->
  <?php
  $scriptName = basename($_SERVER['SCRIPT_NAME']);
  if ($scriptName == 'index.php') {
    $canonicalUrl = "https://www.casaurabhvanyasharma.com/";
  } else {
    $canonicalUrl = "https://www.casaurabhvanyasharma.com/" . $scriptName;
  }
  ?>
  <link rel="canonical" href="<?php echo $canonicalUrl; ?>">

  <!-- =====================================================================
       OPEN GRAPH (Facebook, LinkedIn, WhatsApp previews)
  ====================================================================== -->
  <?php
  $ogTitle = isset($pageTitle) ? $pageTitle . " - SVS & Co." : "CA Saurabh Vanya Sharma & Co. - SVS";
  $ogDesc = isset($pageDesc) ? $pageDesc : "Saurabh Vanya Sharma & Co. (SVS) is a leading Chartered Accountancy firm in Delhi, offering premier services in Audit & Assurance, Taxation, Business Advisory, and Financial Consulting.";
  $ogImage = "https://www.casaurabhvanyasharma.com/assets/images/og-image.png";
  $ogType = isset($ogPageType) ? $ogPageType : "website";
  ?>
  <meta property="og:type" content="<?php echo $ogType; ?>">
  <meta property="og:site_name" content="CA Saurabh Vanya Sharma & Co.">
  <meta property="og:url" content="<?php echo $canonicalUrl; ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($ogTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($ogDesc); ?>">
  <meta property="og:image" content="<?php echo $ogImage; ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="CA Saurabh Vanya Sharma & Co. - Chartered Accountancy Firm">
  <meta property="og:locale" content="en_IN">

  <!-- =====================================================================
       TWITTER CARD
  ====================================================================== -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@casvs">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($ogTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($ogDesc); ?>">
  <meta name="twitter:image" content="<?php echo $ogImage; ?>">
  <meta name="twitter:image:alt" content="CA Saurabh Vanya Sharma & Co.">

  <!-- =====================================================================
       ADDITIONAL SEO & BRANDING
  ====================================================================== -->
  <meta name="author" content="CA Saurabh Vanya Sharma & Co.">
  <meta name="geo.region" content="IN-DL">
  <meta name="geo.placename" content="New Delhi">
  <meta name="geo.position" content="28.5683;77.1887">
  <meta name="ICBM" content="28.5683, 77.1887">
  <meta name="theme-color" content="#0b2d6e">

  <!-- JSON-LD Structured Data Schema -->
  <?php if (isset($pageSchema) && $pageSchema): ?>
    <script type="application/ld+json">
        <?php echo $pageSchema; ?>
      </script>
  <?php endif; ?>

  <!-- =====================================================================
       PERFORMANCE — DNS Prefetch & Preconnect
  ====================================================================== -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="https://www.casaurabhvanyasharma.com/assets/images/logo.png">
  <link rel="apple-touch-icon" sizes="180x180" href="https://www.casaurabhvanyasharma.com/assets/images/logo.png">

  <!-- Theme Stylesheet -->
  <link rel="stylesheet" href="https://www.casaurabhvanyasharma.com/assets/css/style.css">

</head>

<body>

  <!-- Site Header -->
  <header>
    <!-- White Header Top Area (Logo, Timings, Tagline) -->
    <div class="header-top-area">
      <div class="container header-top-container">


        <!-- Contact details -->
        <div class="contact-info-list">
          <div class="contact-info-item">
            <svg class="contact-svg-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" aria-hidden="true" width="24" height="24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <div>
              <span>+91 11 41643838</span>
              <p>Weekdays 10 AM - 6.30 PM</p>
            </div>
          </div>
          <div class="contact-info-item">
            <svg class="contact-svg-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" aria-hidden="true" width="24" height="24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
            </svg>
            <div>
              <span>info@casvs.in</span>
              <p>24X 7 Support Email</p>
            </div>
          </div>
        </div>
      </div>

      <a href="https://www.casaurabhvanyasharma.com/" class="header-logo-link" id="navLogo">
        <img src="https://www.casaurabhvanyasharma.com/assets/images/logo.png" alt="CA Saurabh Vanya Sharma & Co. Logo"
          width="300" height="200" fetchpriority="high">
      </a>
      <!-- Tagline -->
      <div class="tagline-text-centered">
        Driven by Ethics. Defined by Expertise. Dedicated to Your Growth.
      </div>
    </div>

    <!-- Solid Blue Navigation Bar -->
    <div class="nav-section" id="navSection">
      <div class="container nav-container">
        <!-- Hamburger Toggle (Mobile View) -->
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation Menu" aria-expanded="false"
          aria-controls="navMenu">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <!-- Nav Links (Centered) -->
        <nav class="nav-menu" id="navMenu" role="navigation" aria-label="Main Navigation">
          <a href="https://www.casaurabhvanyasharma.com/index.php"
            class="nav-link <?php echo (isset($currentPage) && $currentPage == 'home') ? 'active' : ''; ?>"
            id="navLinkHome">HOME</a>
          <a href="https://www.casaurabhvanyasharma.com/about.php"
            class="nav-link <?php echo (isset($currentPage) && $currentPage == 'about') ? 'active' : ''; ?>"
            id="navLinkAbout">ABOUT US</a>
          <div
            class="nav-dropdown <?php echo (isset($currentCategory) && $currentCategory == 'services') ? 'active' : ''; ?>">
            <a href="#" class="nav-link nav-dropdown-toggle" id="navLinkServices" aria-haspopup="true"
              aria-expanded="false">SERVICES <span class="arrow" aria-hidden="true">&#9662;</span></a>
            <div class="nav-dropdown-menu" role="menu">
              <a href="https://www.casaurabhvanyasharma.com/audit-assurance.php"
                class="dropdown-item <?php echo (isset($currentPage) && $currentPage == 'audit-assurance') ? 'active' : ''; ?>"
                role="menuitem">Audit &amp; Assurance</a>
              <a href="https://www.casaurabhvanyasharma.com/taxation.php"
                class="dropdown-item <?php echo (isset($currentPage) && $currentPage == 'taxation') ? 'active' : ''; ?>"
                role="menuitem">Direct &amp; Indirect Taxation</a>
              <a href="https://www.casaurabhvanyasharma.com/corporate-advisory.php"
                class="dropdown-item <?php echo (isset($currentPage) && $currentPage == 'corporate-advisory') ? 'active' : ''; ?>"
                role="menuitem">Business Consulting &amp; Advisory</a>
              <a href="https://www.casaurabhvanyasharma.com/international-tax.php"
                class="dropdown-item <?php echo (isset($currentPage) && $currentPage == 'international-tax') ? 'active' : ''; ?>"
                role="menuitem">International Tax &amp; Structuring</a>
              <a href="https://www.casaurabhvanyasharma.com/accounting-advisory.php"
                class="dropdown-item <?php echo (isset($currentPage) && $currentPage == 'accounting-advisory') ? 'active' : ''; ?>"
                role="menuitem">Accounting &amp; GAAP Advisory</a>
              <a href="https://www.casaurabhvanyasharma.com/bpo-outsourcing.php"
                class="dropdown-item <?php echo (isset($currentPage) && $currentPage == 'bpo-outsourcing') ? 'active' : ''; ?>"
                role="menuitem">Business Process Outsourcing</a>
            </div>
          </div>
          <a href="https://www.casaurabhvanyasharma.com/industries.php"
            class="nav-link <?php echo (isset($currentPage) && $currentPage == 'industries') ? 'active' : ''; ?>"
            id="navLinkIndustries">INDUSTRIES</a>

          <a href="https://www.casaurabhvanyasharma.com/contact.php"
            class="nav-link <?php echo (isset($currentPage) && $currentPage == 'contact') ? 'active' : ''; ?>"
            id="navLinkContact">CONTACT US</a>
        </nav>
      </div>
    </div>
  </header>