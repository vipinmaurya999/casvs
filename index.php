<?php
$currentPage = 'home';
$pageTitle = 'Financial Clarity, Strategic Growth & Trusted Partnership';
$pageDesc = 'Saurabh Vanya Sharma & Co. (SVS) is a Chartered Accountancy firm delivering premium audit, tax, consulting, and advisory services for 25+ years.';

$pageSchema = <<<JSON
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "CA Saurabh Vanya Sharma & Co.",
  "alternateName": "SVS & Co.",
  "description": "Saurabh Vanya Sharma & Co. (SVS) is a premier Chartered Accountancy firm in Delhi, offering professional services in statutory audit, internal audit, taxation, transfer pricing, corporate advisory, and accounting BPO services for 25+ years.",
  "url": "https://www.casaurabhvanyasharma.com/",
  "logo": "https://www.casaurabhvanyasharma.com/assets/images/logo.png",
  "image": "https://www.casaurabhvanyasharma.com/assets/images/about-team.png",
  "telephone": "+91-11-41643838",
  "email": "info@casvs.in",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "B 407, Ansal Chamber 1, Bhikaji Cama Place",
    "addressLocality": "New Delhi",
    "addressRegion": "Delhi",
    "postalCode": "110066",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "28.5683",
    "longitude": "77.1887"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "10:00",
    "closes": "18:30"
  },
  "foundingDate": "1999",
  "founders": [
    {
      "@type": "Person",
      "name": "Saurabh Sharma"
    }
  ],
  "areaServed": [
    {
      "@type": "AdministrativeArea",
      "name": "Delhi NCR"
    },
    {
      "@type": "Country",
      "name": "India"
    }
  ],
  "priceRange": "$$$"
}
JSON;

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="section section-bg-white" id="hero-section">
  <div class="container hero-wrapper">
    <!-- Hero Left Text Column -->
    <div class="hero-content">
      <h2 class="hero-title">
        Financial Clarity.
        <span>Strategic Growth.</span>
        Trusted Partnership.
      </h2>
      <p class="hero-desc">
        A professionally managed Chartered Accountancy firm delivering high-quality, customized solutions in audit, taxation, business advisory, and corporate compliance for over 25 years.
      </p>
    </div>
    
    <!-- Hero Right Image Column -->
    <div class="hero-image-wrapper">
      <img src="assets/images/hero-ca.png" alt="CA Professional - Saurabh Vanya Sharma & Co." width="1024" height="1024" fetchpriority="high">
    </div>
  </div>
</section>

<!-- Empowering Businesses Section -->
<section class="section section-bg-light">
  <div class="container text-centered-container">
    <div class="overview-text-centered">
      <span class="section-label">Who We Are</span>
      <h3 class="section-title">Empowering Businesses With Insight & Integrity</h3>
      <p>
        Saurabh Vanya Sharma & Co (SVS) is a Chartered Accountancy firm delivering <a href="https://www.casaurabhvanyasharma.com/audit-assurance">audit & assurance</a>, <a href="https://www.casaurabhvanyasharma.com/taxation">taxation</a>, consulting, and advisory services for 25+ years. We help organizations stay compliant, improve controls, and make informed decisions.
      </p>
      <p>
        At SVS, we go beyond traditional bookkeeping. With a team of experienced professionals in <a href="https://www.casaurabhvanyasharma.com/audit-assurance">audit</a>, <a href="https://www.casaurabhvanyasharma.com/taxation">taxation</a>, <a href="https://www.casaurabhvanyasharma.com/corporate-advisory">corporate finance</a>, and compliance, we provide customized solutions that drive growth. Whether you are a startup, a growing business, or an established enterprise, we bring clarity, compliance, and confidence to your financial ecosystem. <a href="https://www.casaurabhvanyasharma.com/about">Learn more about us →</a>
      </p>
    </div>
  </div>
</section>

<!-- Industries We Serve Section -->
<section class="section industries-section">
  <div class="container">
    <div class="industries-layout">
      <!-- Industries List Left -->
      <div>
        <span class="section-label" style="color: var(--color-accent);">Market Verticals</span>
        <h3 class="section-title">Industries We Serve</h3>
        <p class="section-desc" style="margin-bottom: 2.5rem;">
          With decades of experience, SVS has served a diverse range of industries, bringing deep insight and practical solutions tailored to each sector.
        </p>
        
        <div class="industries-grid">
          <div class="industry-item">
            <svg class="industry-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="industry-name">Banking & Financial Services</span>
          </div>
          <div class="industry-item">
            <svg class="industry-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="industry-name">Public Sector Undertakings (PSUs)</span>
          </div>
          <div class="industry-item">
            <svg class="industry-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="industry-name">Retail, Consumer Goods & FMCG</span>
          </div>
          <div class="industry-item">
            <svg class="industry-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="industry-name">Engineering & Manufacturing</span>
          </div>
          <div class="industry-item">
            <svg class="industry-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="industry-name">Steel & Metals Industry</span>
          </div>
          <div class="industry-item">
            <svg class="industry-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="industry-name">Real Estate & Infrastructure</span>
          </div>
          <div class="industry-item">
            <svg class="industry-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="industry-name">Hospitality & Tourism</span>
          </div>
          <div class="industry-item">
            <svg class="industry-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="industry-name">Paper, Packaging & Printing</span>
          </div>
          <div class="industry-item">
            <svg class="industry-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="industry-name">Agro-based Industry</span>
          </div>
          <div class="industry-item">
            <svg class="industry-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="industry-name">Liaison & Project Office (India)</span>
          </div>
          <div class="industry-item">
            <svg class="industry-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="industry-name">Consulting, IT & Professional Services</span>
          </div>
        </div>
      </div>
      
      <!-- Overlapping visual cards Right -->
      <div class="industries-visuals">
        <div class="industry-visual-card">
          <img src="assets/images/about-team.png" alt="SVS Team collaboration" width="1024" height="1024" loading="lazy">
        </div>
        <div class="industry-visual-card" style="margin-top: 2rem;">
          <img src="assets/images/hero-ca.png" alt="SVS Partner review" width="1024" height="1024" loading="lazy">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Services Section -->
<section class="section section-bg-white" id="services-section">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Core Capabilities</span>
      <h3 class="section-title">Our Services</h3>
      <p class="section-desc">
        We offer standard and customized solutions in auditing, taxation, consulting, and advisory fields to ensure complete regulatory compliance and business growth.
      </p>
    </div>

    <div class="services-grid">
      <!-- Service 1: Audit & Assurance -->
      <div class="service-card" id="serviceAudit">
        <div class="service-icon-wrapper">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
          </svg>
        </div>
        <h3>Audit & Assurance</h3>
        <p>
          Statutory Audits, Tax Audits, Internal Audits, Management Audits, Stock Audits, and evaluating Internal Financial Controls (IFC) to ensure robust compliance.
        </p>
        <a href="https://www.casaurabhvanyasharma.com/audit-assurance" class="service-link">Learn more</a>
      </div>

      <!-- Service 2: Business Consulting -->
      <div class="service-card" id="serviceConsulting">
        <div class="service-icon-wrapper">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
          </svg>
        </div>
        <h3>Business Consulting</h3>
        <p>
          Corporate & Commercial Advisory, M&A Transactions, Secretarial Services, Company Registrations, Business Restructuring, and Resolution of Stressed Assets.
        </p>
        <a href="https://www.casaurabhvanyasharma.com/corporate-advisory" class="service-link">Learn more</a>
      </div>

      <!-- Service 3: Taxation -->
      <div class="service-card" id="serviceTaxation">
        <div class="service-icon-wrapper">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
          </svg>
        </div>
        <h3>Taxation</h3>
        <p>
          Direct & Indirect Taxes, Income Tax Return filing, GST Compliance, Tax Planning, representation in litigations, and processing of refunds.
        </p>
        <a href="https://www.casaurabhvanyasharma.com/taxation" class="service-link">Learn more</a>
      </div>

      <!-- Service 4: International Tax -->
      <div class="service-card" id="serviceIntlTax">
        <div class="service-icon-wrapper">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
          </svg>
        </div>
        <h3>International Tax & Structuring</h3>
        <p>
          Cross-Border Transactions Advisory, FEMA/RBI Compliances, Transfer Pricing Audits & Documentation, and Joint Venture setup advisory.
        </p>
        <a href="https://www.casaurabhvanyasharma.com/international-tax" class="service-link">Learn more</a>
      </div>

      <!-- Service 5: Accounting & GAAP -->
      <div class="service-card" id="serviceAccounting">
        <div class="service-icon-wrapper">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
          </svg>
        </div>
        <h3>Accounting & GAAP Advisory</h3>
        <p>
          Conversion of financial statements to IND-AS & IFRS, writing Standard Operating Procedures (SOP), and drafting key accounting manuals.
        </p>
        <a href="https://www.casaurabhvanyasharma.com/accounting-advisory" class="service-link">Learn more</a>
      </div>

      <!-- Service 6: BPO Outsourcing -->
      <div class="service-card" id="serviceBpo">
        <div class="service-icon-wrapper">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        </div>
        <h3>Business Process Outsourcing</h3>
        <p>
          End-to-end accounting support, monthly Payroll processing, filing of GST & TDS returns, and coordinating with statutory auditors.
        </p>
        <a href="https://www.casaurabhvanyasharma.com/bpo-outsourcing" class="service-link">Learn more</a>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="section section-bg-light">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Our Philosophy</span>
      <h3 class="section-title">Why Choose Us</h3>
      <p class="section-desc">
        We combine professional capability with dedicated values to deliver consistent outcomes for all client ventures.
      </p>
    </div>

    <div class="why-grid">
      <!-- Feature 1 -->
      <div class="why-card" id="whyExpert">
        <div class="why-icon-circle">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
        </div>
        <h4>Expert-Led, Insight-Driven</h4>
        <p>
          Our team comprises senior CAs and legal advisors with multi-industry expertise, providing strategic inputs beyond compliance. <a href="https://www.casaurabhvanyasharma.com/about.php#leadership-section">Meet our leadership team →</a>
        </p>
      </div>

      <!-- Feature 2 -->
      <div class="why-card" id="whyEfficient">
        <div class="why-icon-circle">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h4>Efficient & Value-Focused</h4>
        <p>
          We optimize lead times and utilize streamlined workflows to render value-adding financial counseling cost-effectively.
        </p>
      </div>

      <!-- Feature 3 -->
      <div class="why-card" id="whyProven">
        <div class="why-icon-circle">
          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
          </svg>
        </div>
        <h4>Proven Best Practices</h4>
        <p>
          By applying rigorous regulatory compliance checks and risk audits, we shield your corporate enterprise from liabilities.
        </p>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
