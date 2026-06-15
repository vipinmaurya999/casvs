<?php
$currentPage = 'industries';
$pageTitle = 'Industries We Serve - Specialized Accounting & Audit Sectors';
$pageDesc = 'SVS & Co. provides statutory auditing, tax compliance, and advisory services across major industries: PSUs, banking, manufacturing, IT, and real estate.';

$pageSchema = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://casaurabhvanyasharma.com/industries.php",
      "url": "https://casaurabhvanyasharma.com/industries.php",
      "name": "Industries We Serve - SVS & Co. Chartered Accountants",
      "description": "Sector-specific financial auditing, tax consulting, and business advisory services for corporate enterprise verticals in India."
    },
    {
      "@type": "AccountingService",
      "name": "CA Saurabh Vanya Sharma & Co.",
      "url": "https://casaurabhvanyasharma.com/",
      "logo": "https://casaurabhvanyasharma.com/assets/images/logo.png",
      "areaServed": "India",
      "knowsAbout": [
        "Banking & Financial Services",
        "Public Sector Undertakings (PSUs)",
        "Engineering & Manufacturing",
        "Steel & Metals",
        "Real Estate & Infrastructure",
        "Consulting, IT & SEZ Services",
        "Retail & FMCG"
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
      <h2>Industries We Serve</h2>
    </div>
    <div class="breadcrumb-list">
      <a href="https://casaurabhvanyasharma.com/index.php">Home</a>
      <span class="breadcrumb-separator">/</span>
      <span class="breadcrumb-active">Industries</span>
    </div>
  </div>
</div>

<!-- Service Details Section -->
<section class="section section-bg-white">
  <div class="container">
    <div class="service-details-grid">
      <!-- Left Column: Sidebar -->
      <aside class="service-sidebar">
        <h4 class="sidebar-title">Our Capabilities</h4>
        <div class="sidebar-links">
          <a href="https://casaurabhvanyasharma.com/audit-assurance.php" class="sidebar-link">Audit & Assurance</a>
          <a href="https://casaurabhvanyasharma.com/taxation.php" class="sidebar-link">Direct & Indirect Taxation</a>
          <a href="https://casaurabhvanyasharma.com/corporate-advisory.php" class="sidebar-link">Business Consulting & Advisory</a>
          <a href="https://casaurabhvanyasharma.com/international-tax.php" class="sidebar-link">International Tax & Structuring</a>
          <a href="https://casaurabhvanyasharma.com/accounting-advisory.php" class="sidebar-link">Accounting & GAAP Advisory</a>
          <a href="https://casaurabhvanyasharma.com/bpo-outsourcing.php" class="sidebar-link">Business Process Outsourcing</a>
        </div>
      </aside>

      <!-- Right Column: Main Content -->
      <div class="service-main-content">
        <h3>Sector-Specific Financial Insight and Regulatory Management</h3>
        <p>
          Different industries face unique operational challenges, tax rules, and compliance standards. A one-size-fits-all approach to accounting and auditing is insufficient for modern enterprises. With over 25 years of experience, Saurabh Vanya Sharma & Co. (SVS) has developed deep capabilities across key commercial verticals.
        </p>
        <p>
          Our teams are organized by industry specializations. We bring sector-specific compliance understanding (such as RBI mandates, C&AG audit guidelines, STPI / SEZ regulations, and RERA rules) to help your business manage regulatory risks.
        </p>

        <h4>Our Core Sector Focus</h4>
        
        <!-- Industry Segments Breakdown -->
        <div style="display: flex; flex-direction: column; gap: 2.5rem; margin-top: 1.5rem;">
          
          <!-- Segment 1 -->
          <div style="border-left: 4px solid var(--color-primary); padding-left: 1.5rem;">
            <h4 style="margin: 0 0 0.4rem 0; color: var(--color-primary-dark); font-weight: 800;">Banking, Financial Services &amp; PSUs</h4>
            <p style="margin: 0; font-size: 0.98rem; color: var(--color-gray-500); line-height: 1.6;">
              We provide <a href="https://casaurabhvanyasharma.com/audit-assurance.php">statutory bank branch audits, concurrent audits, and stock audits</a> under RBI guidelines. SVS is also empanelled with the C&amp;AG of India, conducting independent audits for State Public Sector Undertakings (PSUs) and autonomous government boards.
            </p>
          </div>

          <!-- Segment 2 -->
          <div style="border-left: 4px solid var(--color-accent); padding-left: 1.5rem;">
            <h4 style="margin: 0 0 0.4rem 0; color: var(--color-primary-dark); font-weight: 800;">Engineering, Manufacturing & Steel Industries</h4>
            <p style="margin: 0; font-size: 0.98rem; color: var(--color-gray-500); line-height: 1.6;">
              Manufacturing operations deal with complex supply chains, inventory valuations, and excise/GST reconciliations. We provide comprehensive physical stock audits, cost-flow reviews, corporate tax audits (Section 44AB), and input tax credit (ITC) reconciliations.
            </p>
          </div>

          <!-- Segment 3 -->
          <div style="border-left: 4px solid var(--color-primary); padding-left: 1.5rem;">
            <h4 style="margin: 0 0 0.4rem 0; color: var(--color-primary-dark); font-weight: 800;">IT, Consulting, SEZ &amp; Professional Services</h4>
            <p style="margin: 0; font-size: 0.98rem; color: var(--color-gray-500); line-height: 1.6;">
              IT and service companies operate globally, requiring adherence to STPI / SEZ regulations, international tax treaties, and transfer pricing guidelines. We provide <a href="https://casaurabhvanyasharma.com/international-tax.php">transfer pricing audits (Form 3CEB) &amp; FEMA RBI compliance</a>, and <a href="https://casaurabhvanyasharma.com/bpo-outsourcing.php">monthly outsourced bookkeeping/payroll</a>.
            </p>
          </div>

          <!-- Segment 4 -->
          <div style="border-left: 4px solid var(--color-accent); padding-left: 1.5rem;">
            <h4 style="margin: 0 0 0.4rem 0; color: var(--color-primary-dark); font-weight: 800;">Real Estate, Infrastructure &amp; Hospitality</h4>
            <p style="margin: 0; font-size: 0.98rem; color: var(--color-gray-500); line-height: 1.6;">
              Real estate and infrastructure projects face complex accounting standards and regulatory reviews under RERA. We provide project compliance reviews, <a href="https://casaurabhvanyasharma.com/taxation.php">tax planning for Joint Development Agreements (JDAs)</a>, and audit support for RERA compliance.
            </p>
          </div>

          <!-- Segment 5 -->
          <div style="border-left: 4px solid var(--color-primary); padding-left: 1.5rem;">
            <h4 style="margin: 0 0 0.4rem 0; color: var(--color-primary-dark); font-weight: 800;">Retail, Consumer Goods & FMCG</h4>
            <p style="margin: 0; font-size: 0.98rem; color: var(--color-gray-500); line-height: 1.6;">
              High-volume retail requires strong internal financial controls (IFC), regular cash reconciliations, and prompt GST return filings. We provide audit checks for retail chains, payroll management support, and tax compliance.
            </p>
          </div>

        </div>

        <!-- FAQ Section -->
        <h4 style="margin-top: 3rem;">Frequently Asked Questions</h4>
        <div class="faq-container">
          <!-- FAQ 1 -->
          <div class="faq-item">
            <button class="faq-question">What is a C&AG Audit and does SVS & Co. execute them?</button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                The Comptroller and Auditor General (C&AG) of India directs audits of government companies and public sector undertakings (PSUs). As an empanelled CA firm, SVS & Co. is appointed by the C&AG office to conduct statutory financial audits for these entities.
              </div>
            </div>
          </div>
          <!-- FAQ 2 -->
          <div class="faq-item">
            <button class="faq-question">What GST rules apply to Joint Development Agreements (JDAs) in Real Estate?</button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                JDAs involve the transfer of development rights by land owners in exchange for constructed flats. Under GST rules, the transfer of development rights is taxable, and specific rules govern the time of supply and valuation of construction services. SVS provides tax structuring to help developers manage these liabilities.
              </div>
            </div>
          </div>
        </div>

        <!-- Service Call to Action -->
        <div class="service-cta-box">
          <div class="service-cta-text">
            <h4>Need Industry-Specific Auditing Support?</h4>
            <p>Consult with our sector specialists to plan your compliance strategy.</p>
          </div>
          <a href="https://casaurabhvanyasharma.com/contact.php" class="btn btn-primary" style="background-color: var(--color-accent); border-radius: var(--border-radius-sm);">Contact Our Partners</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
