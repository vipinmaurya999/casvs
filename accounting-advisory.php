<?php
$currentPage = 'accounting-advisory';
$currentCategory = 'services';
$pageTitle = 'Ind-AS Conversion, IFRS Consolidation & Accounting Policy SOP Writing';
$pageDesc = 'SVS & Co. provides professional accounting advisory, Ind-AS / IFRS conversions, drafting of accounting manuals, and Standard Operating Procedures (SOP) design in Delhi.';

$pageSchema = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Accounting & GAAP Advisory Services",
      "description": "Transition from Indian GAAP to Ind-AS, international financial reporting standards (IFRS) consolidations, drafting Standard Operating Procedures (SOPs) for finance controls, and custom accounting manuals.",
      "provider": {
        "@type": "AccountingService",
        "name": "CA Saurabh Vanya Sharma & Co.",
        "url": "https://www.casaurabhvanyasharma.com/"
      },
      "serviceType": "Accounting and Standard Compliance",
      "areaServed": "India"
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the difference between Indian GAAP and Ind-AS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Indian GAAP is historically cost-based and rule-oriented. Ind-AS (which is converged with IFRS) is principal-based and relies heavily on \"fair value accounting.\" Key differences include policies around revenue recognition, accounting for financial instruments, leases, and deferred tax calculations."
          }
        },
        {
          "@type": "Question",
          "name": "Which companies are required to follow Ind-AS in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ind-AS is mandatory for all listed companies (on any Indian stock exchange) and all unlisted companies having a net worth of ₹250 Crore or more. It also applies to holding, subsidiary, joint venture, or associate companies of these entities. Other companies may voluntarily adopt Ind-AS."
          }
        },
        {
          "@type": "Question",
          "name": "How does drafting a Standard Operating Procedure (SOP) benefit a business?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SOPs define clear roles and guidelines for day-to-day operations, reducing dependence on key personnel. They ensure compliance with internal financial control standards, minimize process errors, speed up the training of new employees, and form the basis for internal audits."
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
      <h2>Accounting & GAAP Advisory</h2>
    </div>
    <div class="breadcrumb-list">
      <a href="https://www.casaurabhvanyasharma.com/index.php">Home</a>
      <span class="breadcrumb-separator">/</span>
      <span class="breadcrumb-active">Accounting Advisory</span>
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
          <a href="https://www.casaurabhvanyasharma.com/taxation.php" class="sidebar-link">Direct & Indirect Taxation</a>
          <a href="https://www.casaurabhvanyasharma.com/corporate-advisory.php" class="sidebar-link">Business Consulting & Advisory</a>
          <a href="https://www.casaurabhvanyasharma.com/international-tax.php" class="sidebar-link">International Tax & Structuring</a>
          <a href="https://www.casaurabhvanyasharma.com/accounting-advisory.php" class="sidebar-link active">Accounting & GAAP Advisory</a>
          <a href="https://www.casaurabhvanyasharma.com/bpo-outsourcing.php" class="sidebar-link">Business Process Outsourcing</a>
        </div>
      </aside>

      <!-- Right Column: Main Content -->
      <div class="service-main-content">
        <h3>Aligning Reporting Frameworks with Modern Standards and Best Practices</h3>
        <p>
          Accurate and transparent financial reporting is the language of business. As corporate governance codes strengthen, companies must present financial statements aligned with Indian Accounting Standards (Ind-AS), International Financial Reporting Standards (IFRS), or revised Indian GAAP.
        </p>
        <p>
          At Saurabh Vanya Sharma & Co. (SVS), we help companies transition from older reporting frameworks to modern accounting standards, coordinate multi-currency consolidation of group accounts, and document corporate financial controls. Our advisory services establish reporting policies that withstand audit inspections and validate corporate value.
        </p>

        <h4>Our Accounting & GAAP Advisory Capabilities</h4>
        <div class="service-checklist">
          <!-- Item 1 -->
          <div class="checklist-item">
            <span class="checklist-icon">✓</span>
            <div>
              <strong>Ind-AS Conversion Services</strong>
              <p style="font-size: 0.88rem; margin-top: 0.3rem;">End-to-end guidance mapping Indian GAAP to Ind-AS. We identify gap differences, calculate transitional adjustments, and draft compliant disclosures.</p>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="checklist-item">
            <span class="checklist-icon">✓</span>
            <div>
              <strong>IFRS Compliance & Consolidation</strong>
              <p style="font-size: 0.88rem; margin-top: 0.3rem;">Advisory on IFRS adjustments for multinational reporting, reconciliation reports, and group financial account consolidations.</p>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="checklist-item">
            <span class="checklist-icon">✓</span>
            <div>
              <strong>Standard Operating Procedures (SOP) Design</strong>
              <p style="font-size: 0.88rem; margin-top: 0.3rem;">Drafting operational workflows for finance processes like order-to-cash, procure-to-pay, inventory valuation, and payroll release.</p>
            </div>
          </div>
          <!-- Item 4 -->
          <div class="checklist-item">
            <span class="checklist-icon">✓</span>
            <div>
              <strong>Accounting Policy Manuals</strong>
              <p style="font-size: 0.88rem; margin-top: 0.3rem;">Formulating comprehensive policy documents detailing revenue recognition criteria, depreciation rates, and asset classifications to guide accounting teams.</p>
            </div>
          </div>
        </div>

        <h4>Establishing Internal Operational Controls through SOPs</h4>
        <p>
          Without structured workflows, businesses risk errors, duplicate payments, or fraudulent activities. SVS designs customized Standard Operating Procedures (SOPs) for corporate finance operations. By documenting process owners, control points, and approval matrices, we establish workflows that standardize accounting records and simplify <a href="https://www.casaurabhvanyasharma.com/audit-assurance.php">statutory and internal audits</a>. For ongoing day-to-day accounting support, see our <a href="https://www.casaurabhvanyasharma.com/bpo-outsourcing.php">BPO &amp; Outsourcing services</a>.
        </p>

        <!-- FAQ Section -->
        <h4 style="margin-top: 1.5rem;">Frequently Asked Questions</h4>
        <div class="faq-container">
          <!-- FAQ 1 -->
          <div class="faq-item">
            <button class="faq-question">What is the difference between Indian GAAP and Ind-AS?</button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Indian GAAP is historically cost-based and rule-oriented. Ind-AS (which is converged with IFRS) is principal-based and relies heavily on "fair value accounting." Key differences include policies around revenue recognition, accounting for financial instruments, leases, and deferred tax calculations.
              </div>
            </div>
          </div>
          <!-- FAQ 2 -->
          <div class="faq-item">
            <button class="faq-question">Which companies are required to follow Ind-AS in India?</button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Ind-AS is mandatory for all listed companies (on any Indian stock exchange) and all unlisted companies having a net worth of ₹250 Crore or more. It also applies to holding, subsidiary, joint venture, or associate companies of these entities. Other companies may voluntarily adopt Ind-AS.
              </div>
            </div>
          </div>
          <!-- FAQ 3 -->
          <div class="faq-item">
            <button class="faq-question">How does drafting a Standard Operating Procedure (SOP) benefit a business?</button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                SOPs define clear roles and guidelines for day-to-day operations, reducing dependence on key personnel. They ensure compliance with internal financial control standards, minimize process errors, speed up the training of new employees, and form the basis for internal audits.
              </div>
            </div>
          </div>
        </div>

        <!-- Service Call to Action -->
        <div class="service-cta-box">
          <div class="service-cta-text">
            <h4>Ready to Upgrade Your Financial Reporting?</h4>
            <p>Speak with our GAAP advisors to plan your Ind-AS conversion or write corporate SOPs.</p>
          </div>
          <a href="https://www.casaurabhvanyasharma.com/contact.php" class="btn btn-primary" style="background-color: var(--color-accent); border-radius: var(--border-radius-sm);">Contact Our Team</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
