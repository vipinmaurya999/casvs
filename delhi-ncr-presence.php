<?php
$currentPage = 'delhi-ncr-presence';
$pageTitle = 'Chartered Accountant in Delhi NCR - Services in Noida, Gurgaon & Faridabad';
$pageDesc = 'SVS & Co. provides premium statutory audits, taxation, and corporate advisory services across Delhi NCR, with dedicated regional support in Noida, Gurgaon, and Faridabad.';

$pageSchema = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://casaurabhvanyasharma.com/delhi-ncr-presence.php",
      "url": "https://casaurabhvanyasharma.com/delhi-ncr-presence.php",
      "name": "CA Firm in Delhi NCR - Regional Auditing & Taxation Services",
      "description": "Local presence page of SVS & Co., Chartered Accountants, providing statutory compliance support across Delhi, Noida, Gurgaon, and Faridabad."
    },
    {
      "@type": "AccountingService",
      "name": "CA Saurabh Vanya Sharma & Co.",
      "url": "https://casaurabhvanyasharma.com/",
      "logo": "https://casaurabhvanyasharma.com/assets/images/logo.png",
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
      "areaServed": [
        {
          "@type": "AdministrativeArea",
          "name": "Delhi"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Noida"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Gurgaon"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Faridabad"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Delhi NCR"
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
      <h2>Delhi NCR Regional Presence</h2>
    </div>
    <div class="breadcrumb-list">
      <a href="https://casaurabhvanyasharma.com/index.php">Home</a>
      <span class="breadcrumb-separator">/</span>
      <span class="breadcrumb-active">Delhi NCR Presence</span>
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
        <h3>Chartered Accountancy Services Across Delhi NCR</h3>
        <p>
          As businesses in the National Capital Region (NCR) grow and diversify, they require a local CA partner who understands the local regulatory landscape, state tax structures, and specific industry dynamics. Saurabh Vanya Sharma & Co. (SVS) provides comprehensive audit, tax planning, GST filings, and company secretarial support to clients across Delhi, Noida, Gurgaon, and Faridabad.
        </p>
        <p>
          Whether you are a technology startup in Gurgaon, an exporter in Noida, an industrial manufacturer in Faridabad, or a corporate house in South Delhi, we provide personalized financial counsel to keep your enterprise compliant and audit-ready.
        </p>

        <h4>Supporting Key Industry Hubs in Delhi NCR</h4>
        
        <!-- Regional Info Cards -->
        <div style="display: flex; flex-direction: column; gap: 2.5rem; margin-top: 1.5rem;">
          
          <!-- Delhi Card -->
          <div style="border-left: 4px solid var(--color-primary); padding-left: 1.5rem; display: flex; flex-direction: column; gap: 0.6rem;">
            <h4 style="margin: 0; color: var(--color-primary-dark); font-weight: 800;">Corporate Head Office - Delhi</h4>
            <p style="margin: 0; font-size: 0.98rem; color: var(--color-gray-500);">
              Located at <strong>Bhikaji Cama Place</strong>, our head office caters to businesses in Connaught Place, Nehru Place, Okhla, and Delhi industrial areas. We specialize in <strong>statutory audits</strong> under the Companies Act 2013, complex **income tax litigation representation**, and corporate tax structuring for private limited firms and PSUs.
            </p>
            <p style="margin: 0; font-size: 0.88rem; color: var(--color-primary); font-weight: 700;">
              Key Services: Statutory Audits | Tax litigation representation | GST consulting Delhi
            </p>
          </div>

          <!-- Noida Card -->
          <div style="border-left: 4px solid var(--color-accent); padding-left: 1.5rem; display: flex; flex-direction: column; gap: 0.6rem;">
            <h4 style="margin: 0; color: var(--color-primary-dark); font-weight: 800;">IT & SEZ Audits - Noida</h4>
            <p style="margin: 0; font-size: 0.98rem; color: var(--color-gray-500);">
              Serving technology businesses, BPO providers, and exporters in Sector 62, Sector 63, and the Noida Expressway Special Economic Zones (SEZs). We provide specialized guidance on **STPI / SEZ tax compliance**, monthly outsourced bookkeeping, GST refund processing, and monthly payroll calculations.
            </p>
            <p style="margin: 0; font-size: 0.88rem; color: var(--color-accent); font-weight: 700;">
              Key Services: SEZ/STPI Tax compliance | Bookkeeping BPO | GST refunds Noida
            </p>
          </div>

          <!-- Gurgaon Card -->
          <div style="border-left: 4px solid var(--color-primary); padding-left: 1.5rem; display: flex; flex-direction: column; gap: 0.6rem;">
            <h4 style="margin: 0; color: var(--color-primary-dark); font-weight: 800;">MNC & International Tax Hub - Gurgaon (Gurugram)</h4>
            <p style="margin: 0; font-size: 0.98rem; color: var(--color-gray-500);">
              Catering to global subsidiaries, MNCs, and corporate houses in Cyber City, Golf Course Road, and Udyog Vihar. Our Gurgaon division handles high-value **transfer pricing audits (Form 3CEB)**, FEMA compliances, RBI filings for foreign inflows, and conversions of financial books to **Ind-AS and IFRS**.
            </p>
            <p style="margin: 0; font-size: 0.88rem; color: var(--color-primary); font-weight: 700;">
              Key Services: Transfer Pricing (3CEB) | FEMA RBI filings | Ind-AS conversions Gurgaon
            </p>
          </div>

          <!-- Faridabad Card -->
          <div style="border-left: 4px solid var(--color-accent); padding-left: 1.5rem; display: flex; flex-direction: column; gap: 0.6rem;">
            <h4 style="margin: 0; color: var(--color-primary-dark); font-weight: 800;">Industrial & Steel Manufacturing Audits - Faridabad</h4>
            <p style="margin: 0; font-size: 0.98rem; color: var(--color-gray-500);">
              Supporting heavy engineering, steel manufacturing, and auto-ancillary factories in the Faridabad industrial sectors. We provide rigorous **tax audits under Section 44AB**, physical stock audits, inventory control verification, and GST audit reconciliations.
            </p>
            <p style="margin: 0; font-size: 0.88rem; color: var(--color-accent); font-weight: 700;">
              Key Services: Industrial Tax Audits | Stock Audits | GST reconciliation Faridabad
            </p>
          </div>

        </div>

        <!-- FAQ Section -->
        <h4 style="margin-top: 3rem;">Frequently Asked Questions</h4>
        <div class="faq-container">
          <!-- FAQ 1 -->
          <div class="faq-item">
            <button class="faq-question">Can SVS & Co. handle state-level tax filings (like Haryana GST vs. Delhi GST)?</button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Yes. Since GST is a destination-based consumption tax divided into CGST, SGST, and IGST, our taxation division is fully equipped to handle multi-state registrations and state-specific SGST filing requirements across Delhi, Uttar Pradesh (Noida), and Haryana (Gurgaon/Faridabad).
              </div>
            </div>
          </div>
          <!-- FAQ 2 -->
          <div class="faq-item">
            <button class="faq-question">How does SVS coordinate audits for corporate branches located across the NCR?</button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Our central team at Bhikaji Cama Place manages the audit calendar. We send dedicated partner-led teams to client offices in Noida, Gurgaon, or Faridabad to execute physical audits, perform stock verifications, and coordinate reporting processes efficiently.
              </div>
            </div>
          </div>
        </div>

        <!-- Service Call to Action -->
        <div class="service-cta-box">
          <div class="service-cta-text">
            <h4>Operating Across Delhi NCR?</h4>
            <p>Connect with our senior partners to arrange a consultation at your convenience.</p>
          </div>
          <a href="https://casaurabhvanyasharma.com/contact.php" class="btn btn-primary" style="background-color: var(--color-accent); border-radius: var(--border-radius-sm);">Contact Our Team</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
