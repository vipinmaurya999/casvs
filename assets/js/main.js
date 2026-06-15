document.addEventListener('DOMContentLoaded', () => {
  // --- Mobile Menu Toggle ---
  const menuToggle = document.getElementById('menuToggle');
  const navMenu = document.getElementById('navMenu');

  if (menuToggle && navMenu) {
    menuToggle.addEventListener('click', () => {
      navMenu.classList.toggle('active');
      
      // Animate hamburger lines
      const spans = menuToggle.querySelectorAll('span');
      if (navMenu.classList.contains('active')) {
        spans[0].style.transform = 'rotate(45deg) translate(6px, 6px)';
        spans[1].style.opacity = '0';
        spans[2].style.transform = 'rotate(-45deg) translate(6px, -6px)';
      } else {
        spans[0].style.transform = 'none';
        spans[1].style.opacity = '1';
        spans[2].style.transform = 'none';
      }
    });
  }

  // --- Mobile Dropdown Toggle ---
  const dropdownToggle = document.getElementById('navLinkServices');
  if (dropdownToggle) {
    dropdownToggle.addEventListener('click', (e) => {
      if (window.innerWidth <= 991) {
        e.preventDefault();
        const parent = dropdownToggle.closest('.nav-dropdown');
        if (parent) {
          parent.classList.toggle('open');
        }
      }
    });
  }
  // --- Sticky Header on Scroll ---
  const navSection = document.getElementById('navSection');
  const header = document.querySelector('header');
  if (navSection && header) {
    const topBarHeight = document.querySelector('.top-bar')?.offsetHeight || 50;
    let navSectionHeight = navSection.offsetHeight;
    let isSticky = false;

    // Recalculate height on window resize
    window.addEventListener('resize', () => {
      navSectionHeight = navSection.offsetHeight;
    });
    
    window.addEventListener('scroll', () => {
      const shouldBeSticky = window.scrollY > topBarHeight;
      if (shouldBeSticky !== isSticky) {
        isSticky = shouldBeSticky;
        if (isSticky) {
          navSection.classList.add('sticky');
          header.style.paddingBottom = `${navSectionHeight}px`;
        } else {
          navSection.classList.remove('sticky');
          header.style.paddingBottom = '0';
        }
      }
    });
  }

  // --- Scroll to Top ---
  const scrollTopBtn = document.getElementById('scrollTopBtn');
  if (scrollTopBtn) {
    let btnVisible = false;
    window.addEventListener('scroll', () => {
      const shouldBeVisible = window.scrollY > 400;
      if (shouldBeVisible !== btnVisible) {
        btnVisible = shouldBeVisible;
        scrollTopBtn.style.opacity = btnVisible ? '1' : '0';
        scrollTopBtn.style.pointerEvents = btnVisible ? 'auto' : 'none';
      }
    });

    scrollTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // --- reCAPTCHA Simulation ---
  const recaptchaCheckbox = document.getElementById('recaptchaCheckbox');
  if (recaptchaCheckbox) {
    recaptchaCheckbox.addEventListener('click', () => {
      recaptchaCheckbox.classList.toggle('checked');
    });
  }

  // --- Contact Form Submission & Validation ---
  const queryForm = document.getElementById('queryForm');
  const formSuccess = document.getElementById('formSuccess');
  const formError = document.getElementById('formError');

  if (queryForm) {
    queryForm.addEventListener('submit', (e) => {
      e.preventDefault();

      // Reset alert displays
      formSuccess.style.display = 'none';
      formError.style.display = 'none';

      // Gather input values
      const firstName = document.getElementById('firstName').value.trim();
      const lastName = document.getElementById('lastName').value.trim();
      const email = document.getElementById('email').value.trim();
      const contactNumber = document.getElementById('contactNumber').value.trim();
      const message = document.getElementById('message').value.trim();

      // Validate inputs
      if (!firstName || !lastName || !email || !message) {
        showError('Please fill out all required fields.');
        return;
      }

      if (!validateEmail(email)) {
        showError('Please provide a valid email address.');
        return;
      }

      // Validate CAPTCHA
      if (recaptchaCheckbox && !recaptchaCheckbox.classList.contains('checked')) {
        showError('Please check the CAPTCHA verification box.');
        return;
      }

      // Simulate API submit call
      const submitBtn = queryForm.querySelector('button[type="submit"]');
      const originalBtnText = submitBtn.innerText;
      submitBtn.disabled = true;
      submitBtn.innerText = 'Sending Query...';

      setTimeout(() => {
        submitBtn.disabled = false;
        submitBtn.innerText = originalBtnText;

        // Display Success Notification
        formSuccess.innerText = `Thank you, ${firstName}! Your query has been successfully submitted. Our team will get back to you shortly.`;
        formSuccess.style.display = 'block';
        
        // Scroll to form notification
        formSuccess.scrollIntoView({ behavior: 'smooth', block: 'center' });

        // Reset form fields
        queryForm.reset();
        if (recaptchaCheckbox) {
          recaptchaCheckbox.classList.remove('checked');
        }
      }, 1500);
    });
  }

  function showError(msg) {
    if (formError) {
      formError.innerText = msg;
      formError.style.display = 'block';
      formError.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
  }

  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

  // --- FAQ Accordion Toggle ---
  const faqQuestions = document.querySelectorAll('.faq-question');
  faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
      const item = question.parentElement;
      const answer = question.nextElementSibling;
      const isOpen = item.classList.contains('active');
      
      if (isOpen) {
        item.classList.remove('active');
        answer.style.maxHeight = '0px';
      } else {
        // Close other active FAQs
        document.querySelectorAll('.faq-item.active').forEach(activeItem => {
          activeItem.classList.remove('active');
          activeItem.querySelector('.faq-answer').style.maxHeight = '0px';
        });
        
        item.classList.add('active');
        answer.style.maxHeight = `${answer.scrollHeight}px`;
      }
    });
  });
});
