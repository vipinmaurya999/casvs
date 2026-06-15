<?php
$currentPage = 'taxation';
$currentCategory = 'services';
$pageTitle = 'Direct & Indirect Taxation, GST Consulting & Tax Litigation Representation';
$pageDesc = 'SVS & Co. delivers premium tax planning, income tax filings, GST returns and audits, and representation in tax litigation before authorities in Delhi.';

$pageSchema = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Direct & Indirect Taxation Services",
      "description": "Tax Advisory and Compliance services, GST registration and returns, Income Tax planning, Corporate assessments, withholding tax (TDS), and Tax litigation representation before ITAT & Commissioner Appeals.",
      "provider": {
        "@type": "AccountingService",
        "name": "CA Saurabh Vanya Sharma & Co.",
        "url": "https://www.casaurabhvanyasharma.com/"
      },
      "serviceType": "Taxation Services",
      "areaServed": "India"
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What GST returns do businesses have to file regularly in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Regular taxpayers must file GSTR-1 (statement of outward supplies) monthly or quarterly depending on turnover, and GSTR-3B (monthly summary return detailing tax liability and input tax credit claimed) monthly. Additionally, an Annual Return (GSTR-9) and a reconciliation statement (GSTR-9C) must be filed by businesses crossing specific turnover thresholds."
          }
        },
        {
          "@type": "Question",
          "name": "How does SVS & Co. assist with Income Tax scrutiny notices?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We review the notices, identify the queries raised, compile the necessary supporting document dossiers, draft legal arguments, and represent the case electronically or in-person before the Assessing Officer. Our team ensures all facts are presented accurately to prevent arbitrary additions to income."
          }
        },
        {
          "@type": "Question",
          "name": "What is the distinction between tax planning and tax evasion?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tax planning is the lawful arrangement of financial affairs using provisions of the law (exemptions, deductions, rebates) to reduce tax liability. Tax evasion is illegal and involves hiding income, inflating expenses, or falsifying transactions to avoid tax. SVS & Co. strictly provides compliance-safe, legally sound tax planning services."
          }
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
      <h2>Direct & Indirect Taxation</h2>
    </div>
    <div class="breadcrumb-list">
      <a href="https://www.casaurabhvanyasharma.com/index.php">Home</a>
      <span class="breadcrumb-separator">/</span>
      <span class="breadcrumb-active">Taxation</span>
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
          <a href="https://www.casaurabhvanyasharma.com/audit-assurance.php" class="sidebar-link">Audit & Assurance</a>
          <a href="https://www.casaurabhvanyasharma.com/taxation.php" class="sidebar-link active">Direct & Indirect Taxation</a>
          <a href="https://www.casaurabhvanyasharma.com/corporate-advisory.php" class="sidebar-link">Business Consulting & Advisory</a>
          <a href="https://www.casaurabhvanyasharma.com/international-tax.php" class="sidebar-link">International Tax & Structuring</a>
          <a href="https://www.casaurabhvanyasharma.com/accounting-advisory.php" class="sidebar-link">Accounting & GAAP Advisory</a>
          <a href="https://www.casaurabhvanyasharma.com/bpo-outsourcing.php" class="sidebar-link">Business Process Outsourcing</a>
        </div>
      </aside>

      <!-- Right Column: Main Content -->
      <div class="service-main-content">
        <h3>Strategic Tax Planning and Rigorous Compliance Management</h3>
        <p>
          Navigating the ever-evolving landscape of direct and indirect taxes in India requires deep technical expertise, constant vigilance, and proactive planning. At Saurabh Vanya Sharma & Co. (SVS), we help corporate clients and individuals optimize their tax structures, manage compliance cycles, and resolve disputes efficiently.
        </p>
        <p>
          We provide clear, practical tax advice based on a detailed analysis of your operational model and the relevant tax statutes. Our objective is to ensure you meet all regulatory timelines while utilizing statutory incentives to minimize your overall tax burden. For businesses with cross-border operations, see our <a href="https://www.casaurabhvanyasharma.com/international-tax.php">International Tax & Structuring</a> services.
        </p>

        <h4>Our Taxation & Litigation Capabilities</h4>
        <div class="service-checklist">
          <!-- Item 1 -->
          <div class="checklist-item">
            <span class="checklist-icon">✓</span>
            <div>
              <strong>GST Compliance & Filing</strong>
              <p style="font-size: 0.88rem; margin-top: 0.3rem;">End-to-end GST support: registration, monthly/quarterly filings (GSTR-1, 3B), input tax credit reconciliation, refund processing, and annual returns (GSTR-9/9C).</p>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="checklist-item">
            <span class="checklist-icon">✓</span>
            <div>
              <strong>Corporate Tax Planning & Returns</strong>
              <p style="font-size: 0.88rem; margin-top: 0.3rem;">Preparation and filing of corporate income tax returns, computation of advance tax liability, and assessment of Minimum Alternate Tax (MAT).</p>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="checklist-item">
            <span class="checklist-icon">✓</span>
            <div>
              <strong>Tax Litigation & Representation</strong>
              <p style="font-size: 0.88rem; margin-top: 0.3rem;">Drafting legal submissions and representing clients in tax assessments, appeals, and search/seizure disputes before Income Tax and GST authorities.</p>
            </div>
          </div>
          <!-- Item 4 -->
          <div class="checklist-item">
            <span class="checklist-icon">✓</span>
            <div>
              <strong>TDS & TCS Advisory</strong>
              <p style="font-size: 0.88rem; margin-top: 0.3rem;">Guidance on withholding tax provisions, monthly TDS compliance, quarterly return filings, and verification of form 16/16A certifications.</p>
            </div>
          </div>
        </div>

        <h4>Tax Dispute Resolution Services</h4>
        <p>
          Receiving a notice from the tax department can be challenging for any business. SVS offers robust representation services, assisting in tax audits initiated by the department, preparing detailed factual and legal submissions, and representing clients before the Commissioner of Income Tax (Appeals) and the Income Tax Appellate Tribunal (ITAT). Our senior tax partners bring decades of negotiation and litigation experience to protect client interests. For routine monthly GST and TDS filings, consider our <a href="https://www.casaurabhvanyasharma.com/bpo-outsourcing.php">BPO &amp; Outsourcing services</a>. For corporate restructuring tied to tax transactions, see <a href="https://www.casaurabhvanyasharma.com/corporate-advisory.php">Business Consulting &amp; Advisory</a>.
        </p>

        <!-- FAQ Section -->
        <h4 style="margin-top: 1.5rem;">Frequently Asked Questions</h4>
        <div class="faq-container">
          <!-- FAQ 1 -->
          <div class="faq-item">
            <button class="faq-question">What GST returns do businesses have to file regularly in India?</button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Regular taxpayers must file GSTR-1 (statement of outward supplies) monthly or quarterly depending on turnover, and GSTR-3B (monthly summary return detailing tax liability and input tax credit claimed) monthly. Additionally, an Annual Return (GSTR-9) and a reconciliation statement (GSTR-9C) must be filed by businesses crossing specific turnover thresholds.
              </div>
            </div>
          </div>
          <!-- FAQ 2 -->
          <div class="faq-item">
            <button class="faq-question">How does SVS & Co. assist with Income Tax scrutiny notices?</button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                We review the notices, identify the queries raised, compile the necessary supporting document dossiers, draft legal arguments, and represent the case electronically or in-person before the Assessing Officer. Our team ensures all facts are presented accurately to prevent arbitrary additions to income.
              </div>
            </div>
          </div>
          <!-- FAQ 3 -->
          <div class="faq-item">
            <button class="faq-question">What is the distinction between tax planning and tax evasion?</button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Tax planning is the lawful arrangement of financial affairs using provisions of the law (exemptions, deductions, rebates) to reduce tax liability. Tax evasion is illegal and involves hiding income, inflating expenses, or falsifying transactions to avoid tax. SVS & Co. strictly provides compliance-safe, legally sound tax planning services.
              </div>
            </div>
          </div>
        </div>

        <!-- Service Call to Action -->
        <div class="service-cta-box">
          <div class="service-cta-text">
            <h4>Optimize Your Corporate Tax Position</h4>
            <p>Consult with our tax experts to identify legal tax efficiencies and secure compliance.</p>
          </div>
          <a href="https://www.casaurabhvanyasharma.com/contact.php" class="btn btn-primary" style="background-color: var(--color-accent); border-radius: var(--border-radius-sm);">Contact Our Team</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
