<?php
$currentPage = 'audit-assurance';
$currentCategory = 'services';
$pageTitle = 'Statutory Audit, Tax Audit & Internal Financial Controls (IFC) Services';
$pageDesc = 'Establish financial transparency and regulatory compliance with SVS & Co. Statutory audit, internal audit, tax audit (44AB), and management audit services in Delhi NCR.';

$pageSchema = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Audit & Assurance Services",
      "description": "Statutory Audits under Companies Act 2013, Tax Audits under Section 44AB of the Income Tax Act 1961, Internal Financial Controls (IFC) audits, concurrent and management audits.",
      "provider": {
        "@type": "AccountingService",
        "name": "CA Saurabh Vanya Sharma & Co.",
        "url": "https://casaurabhvanyasharma.com/"
      },
      "serviceType": "Auditing and Financial Assurance",
      "areaServed": "India"
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a Statutory Audit and is it mandatory for all companies in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Section 139 of the Companies Act, 2013, every registered company in India—whether private limited, public limited, one-person company, or small business—must undergo a statutory audit annually. This audit evaluates whether the financial statements display a true and fair view of the company's financial status."
          }
        },
        {
          "@type": "Question",
          "name": "What are the thresholds for Tax Audits under Section 44AB?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under the Indian Income Tax Act 1961, a business must undergo a tax audit if its total sales or turnover exceeds ₹1 Crore (or ₹10 Crore if cash transactions are limited to 5% or less of total transactions). For professionals, the tax audit threshold is a gross receipt exceeding ₹50 Lakhs."
          }
        },
        {
          "@type": "Question",
          "name": "How does SVS & Co. ensure audit quality and independence?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We maintain absolute independence in accordance with the Code of Ethics issued by the ICAI. SVS & Co. employs strict peer-review checks, double-tier partner review policies, and regular professional training programs to keep our audit methodologies in step with evolving accounting standards (AS and Ind-AS)."
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
      <h2>Audit & Assurance</h2>
    </div>
    <div class="breadcrumb-list">
      <a href="https://casaurabhvanyasharma.com/index.php">Home</a>
      <span class="breadcrumb-separator">/</span>
      <span class="breadcrumb-active">Audit & Assurance</span>
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
          <a href="https://casaurabhvanyasharma.com/audit-assurance.php" class="sidebar-link active">Audit & Assurance</a>
          <a href="https://casaurabhvanyasharma.com/taxation.php" class="sidebar-link">Direct & Indirect Taxation</a>
          <a href="https://casaurabhvanyasharma.com/corporate-advisory.php" class="sidebar-link">Business Consulting & Advisory</a>
          <a href="https://casaurabhvanyasharma.com/international-tax.php" class="sidebar-link">International Tax & Structuring</a>
          <a href="https://casaurabhvanyasharma.com/accounting-advisory.php" class="sidebar-link">Accounting & GAAP Advisory</a>
          <a href="https://casaurabhvanyasharma.com/bpo-outsourcing.php" class="sidebar-link">Business Process Outsourcing</a>
        </div>
      </aside>

      <!-- Right Column: Main Content -->
      <div class="service-main-content">
        <h3>Building Financial Trust and Operational Integrity</h3>
        <p>
          In today's complex regulatory environment, independent audit and assurance services are essential for building trust among shareholders, financial institutions, and regulatory authorities. At Saurabh Vanya Sharma &amp; Co. (SVS), we view the audit process not as a mere compliance burden, but as a strategic tool to evaluate risk, identify system vulnerabilities, and strengthen <a href="https://casaurabhvanyasharma.com/accounting-advisory.php">internal financial controls</a>.
        </p>
        <p>
          Our audit methodology is risk-based and strictly adheres to the Standards on Auditing (SAs) issued by the Institute of Chartered Accountants of India (ICAI). By combining deep technical expertise with industry insights, we deliver transparent reports that accurately present your organization's financial position. Our firm's credentials include empanelments with the C&amp;AG and RBI.
        </p>

        <h4>Our Core Audit & Assurance Offerings</h4>
        <div class="service-checklist">
          <!-- Item 1 -->
          <div class="checklist-item">
            <span class="checklist-icon">✓</span>
            <div>
              <strong>Statutory Audits</strong>
              <p style="font-size: 0.88rem; margin-top: 0.3rem;">Comprehensive auditing of financial books and records under Section 139 of the Indian Companies Act, 2013 to verify true and fair view presentation.</p>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="checklist-item">
            <span class="checklist-icon">✓</span>
            <div>
              <strong>Tax Audits (Section 44AB)</strong>
              <p style="font-size: 0.88rem; margin-top: 0.3rem;">Verification of tax compliances, allowances, and disallowances under Section 44AB of the Income Tax Act, 1961 to validate tax computations.</p>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="checklist-item">
            <span class="checklist-icon">✓</span>
            <div>
              <strong>Internal & Management Audits</strong>
              <p style="font-size: 0.88rem; margin-top: 0.3rem;">Independent evaluation of operational efficiency, internal financial control (IFC) systems, risk-mitigation measures, and corporate governance.</p>
            </div>
          </div>
          <!-- Item 4 -->
          <div class="checklist-item">
            <span class="checklist-icon">✓</span>
            <div>
              <strong>Concurrent & Stock Audits</strong>
              <p style="font-size: 0.88rem; margin-top: 0.3rem;">Real-time continuous audit verification and physical stock and asset evaluation for banking institutions and credit facilitators.</p>
            </div>
          </div>
        </div>

        <h4>Evaluating Internal Financial Controls (IFC)</h4>
        <p>
          Under Section 134(5)(e) of the Companies Act 2013, directors and statutory auditors must state the adequacy and operational effectiveness of internal financial controls. SVS assists enterprises in documenting, testing, and rectifying control frameworks, ensuring robust protection against reporting errors, asset losses, or compliance slip-ups. Pair this with our <a href="https://casaurabhvanyasharma.com/accounting-advisory.php">Accounting &amp; GAAP Advisory</a> to build audit-proof SOPs and policies, or delegate your routine compliance to our <a href="https://casaurabhvanyasharma.com/bpo-outsourcing.php">BPO Outsourcing team</a>.
        </p>

        <!-- FAQ Section -->
        <h4 style="margin-top: 1.5rem;">Frequently Asked Questions</h4>
        <div class="faq-container">
          <!-- FAQ 1 -->
          <div class="faq-item">
            <button class="faq-question">What is a Statutory Audit and is it mandatory for all companies in India?</button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Yes. Under Section 139 of the Companies Act, 2013, every registered company in India—whether private limited, public limited, one-person company, or small business—must undergo a statutory audit annually. This audit evaluates whether the financial statements display a true and fair view of the company's financial status.
              </div>
            </div>
          </div>
          <!-- FAQ 2 -->
          <div class="faq-item">
            <button class="faq-question">What are the thresholds for Tax Audits under Section 44AB?</button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                Under the Indian Income Tax Act 1961, a business must undergo a tax audit if its total sales or turnover exceeds ₹1 Crore (or ₹10 Crore if cash transactions are limited to 5% or less of total transactions). For professionals, the tax audit threshold is a gross receipt exceeding ₹50 Lakhs.
              </div>
            </div>
          </div>
          <!-- FAQ 3 -->
          <div class="faq-item">
            <button class="faq-question">How does SVS & Co. ensure audit quality and independence?</button>
            <div class="faq-answer">
              <div class="faq-answer-inner">
                We maintain absolute independence in accordance with the Code of Ethics issued by the ICAI. SVS & Co. employs strict peer-review checks, double-tier partner review policies, and regular professional training programs to keep our audit methodologies in step with evolving accounting standards (AS and Ind-AS).
              </div>
            </div>
          </div>
        </div>

        <!-- Service Call to Action -->
        <div class="service-cta-box">
          <div class="service-cta-text">
            <h4>Need Audit or Assurance Support?</h4>
            <p>Speak with our senior audit partners to plan your statutory compliance calendar.</p>
          </div>
          <a href="https://casaurabhvanyasharma.com/contact.php" class="btn btn-primary" style="background-color: var(--color-accent); border-radius: var(--border-radius-sm);">Contact Our Team</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
