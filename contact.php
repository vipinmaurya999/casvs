<?php
$currentPage = 'contact';
$pageTitle = 'Contact Us - Get in Touch with SVS & Co.';
$pageDesc = 'Get in touch with Saurabh Vanya Sharma & Co. (SVS) for auditing, direct and indirect taxation, corporate advisory, and compliance services in Delhi.';

$pageSchema = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ContactPage",
      "@id": "https://casaurabhvanyasharma.com/contact.php",
      "url": "https://casaurabhvanyasharma.com/contact.php",
      "name": "Contact SVS & Co. - Tax, Audit & Advisory Services",
      "description": "Reach out to CA Saurabh Vanya Sharma & Co. in Bhikaji Cama Place, Delhi. Submit your audit, GST, or corporate consulting queries."
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
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "28.5683",
        "longitude": "77.1887"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-11-41643838",
        "contactType": "customer support",
        "email": "info@casvs.in",
        "availableLanguage": ["English", "Hindi"]
      }
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
      <h2>Contact Us</h2>
    </div>
    <div class="breadcrumb-list">
      <a href="https://casaurabhvanyasharma.com/index.php">Home</a>
      <span class="breadcrumb-separator">/</span>
      <span class="breadcrumb-active">Contact Us</span>
    </div>
  </div>
</div>

<!-- Contact Content Section -->
<section class="section section-bg-white">
  <div class="container contact-layout">
    <!-- Left Column: Contact details -->
    <div class="contact-info-panel">
      <div class="contact-title-group">
        <span class="section-label">Get in Touch</span>
        <h3>Your Reliable CA Firm in Delhi for Tax, Audit & Advisory Services</h3>
        <p>
          You may contact us using the details provided below or submit your query through the contact form. Our team of financial and compliance experts will respond at the earliest.
        </p>
      </div>

      <div class="contact-details-grid">
        <!-- Address Card -->
        <div class="contact-detail-card" id="contactAddr">
          <div class="detail-icon-box">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
          </div>
          <div class="detail-text-box">
            <p>B 407, Ansal Chamber 1,<br> Bhikaji Cama Place,<br> New Delhi -110066</p>
          </div>
        </div>

        <!-- Email Card -->
        <div class="contact-detail-card" id="contactEmail">
          <div class="detail-icon-box">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <div class="detail-text-box">
            <p><a href="mailto:saurabh@casvs.in">saurabh@casvs.in</a></p>
          </div>
        </div>

        <!-- Mobile/WhatsApp Card -->
        <div class="contact-detail-card" id="contactWhatsapp">
          <div class="detail-icon-box">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
            </svg>
          </div>
          <div class="detail-text-box">
            <p><a href="tel:+919910233919">9910233919</a></p>
          </div>
        </div>

        <!-- Phone Card -->
        <div class="contact-detail-card" id="contactPhone">
          <div class="detail-icon-box">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
          </div>
          <div class="detail-text-box">
            <p><a href="tel:+911141643838">+91 11 41643838</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Column: Share Your Query Form -->
    <div class="contact-form-panel">
      <h3 class="form-panel-title">Share Your Query</h3>
      
      <form class="query-form" id="queryForm" novalidate>
        <!-- Form Feedback Alerts -->
        <div class="alert alert-success" id="formSuccess"></div>
        <div class="alert alert-error" id="formError"></div>

        <!-- First Name -->
        <div class="form-group">
          <label class="form-label" for="firstName">First name</label>
          <input type="text" class="form-input" id="firstName" required placeholder="First name">
        </div>

        <!-- Last Name -->
        <div class="form-group">
          <label class="form-label" for="lastName">Last name</label>
          <input type="text" class="form-input" id="lastName" required placeholder="Last name">
        </div>

        <!-- Email -->
        <div class="form-group form-group-full">
          <label class="form-label" for="email">Email<span>*</span></label>
          <input type="email" class="form-input" id="email" required placeholder="Email">
        </div>

        <!-- Contact Number -->
        <div class="form-group form-group-full">
          <label class="form-label" for="contactNumber">Contact number</label>
          <input type="tel" class="form-input" id="contactNumber" placeholder="Contact number">
        </div>

        <!-- Company Name -->
        <div class="form-group form-group-full">
          <label class="form-label" for="companyName">Company name</label>
          <input type="text" class="form-input" id="companyName" placeholder="Company name">
        </div>

        <!-- Message -->
        <div class="form-group form-group-full">
          <label class="form-label" for="message">Message</label>
          <textarea class="form-input" id="message" required placeholder="Message"></textarea>
        </div>

        <!-- Simulated reCAPTCHA Widget -->
        <div class="recaptcha-wrapper" id="captchaWidget">
          <div class="recaptcha-widget">
            <div class="recaptcha-checkbox" id="recaptchaCheckbox" tabindex="0" role="checkbox" aria-checked="false"></div>
            <span class="recaptcha-label">I'm not a robot</span>
          </div>
          <div class="recaptcha-brand">
            <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='24' height='24' loading="lazy"><path fill='%234285f4' d='M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10 10 10 0 0 0 10-10A10 10 0 0 0 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z'/></svg>" alt="reCAPTCHA logo">
            <p>reCAPTCHA</p>
            <p style="font-size: 0.45rem; line-height: 1;"><a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noreferrer" style="color: #9b9b9b;">Privacy</a> - <a href="https://www.google.com/intl/en/policies/terms/" target="_blank" rel="noreferrer" style="color: #9b9b9b;">Terms</a></p>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="submit-wrapper">
          <button type="submit" class="btn btn-primary" id="btnSubmitForm" style="width: 100%; border-radius: var(--border-radius-sm);">Submit</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
