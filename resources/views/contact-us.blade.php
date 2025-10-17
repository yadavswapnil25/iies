<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us - IIES</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous" />
    <style>
      /* Additional CSS for Contact Page */
      .contact-container {
        max-width: var(--maxw);
        margin: 0 auto;
        padding: 0 20px 40px;
      }

      .contact-header {
        text-align: center;
        margin-bottom: 40px;
      }

      .contact-header h2 {
        color: var(--brand-dark);
        font-size: 2.2rem;
        margin-bottom: 15px;
        font-weight: 600;
      }

      .contact-header p {
        color: var(--muted);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.6;
      }

      .contact-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        margin-bottom: 50px;
      }

      @media (max-width: 768px) {
        .contact-content {
          grid-template-columns: 1fr;
        }
      }

      .contact-officials {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
      }

      .contact-officials-header {
        background: linear-gradient(135deg, var(--brand-dark) 0%, #0a366c 100%);
        color: white;
        padding: 20px 25px;
      }

      .contact-officials-header h3 {
        margin: 0;
        font-size: 1.5rem;
        font-weight: 600;
      }

      .official-card {
        padding: 25px;
        border-bottom: 1px solid var(--accent-gray);
      }

      .official-card:last-child {
        border-bottom: none;
      }

      .official-name {
        color: var(--brand-dark);
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 8px;
      }

      .official-designation {
        color: var(--brand);
        font-weight: 500;
        margin-bottom: 15px;
        font-size: 1rem;
      }

      .official-details {
        margin-bottom: 15px;
      }

      .official-detail {
        display: flex;
        align-items: flex-start;
        margin-bottom: 10px;
      }

      .detail-icon {
        margin-right: 10px;
        color: var(--brand);
        min-width: 20px;
      }

      .detail-text {
        color: #333;
        line-height: 1.5;
      }

      .contact-form-container {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
      }

      .contact-form-header {
        background: linear-gradient(135deg, var(--brand-dark) 0%, #0a366c 100%);
        color: white;
        padding: 20px 25px;
      }

      .contact-form-header h3 {
        margin: 0;
        font-size: 1.5rem;
        font-weight: 600;
      }

      .contact-form {
        padding: 25px;
      }

      .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
      }

      @media (max-width: 480px) {
        .form-row {
          grid-template-columns: 1fr;
          gap: 0;
        }
      }

      .form-group {
        margin-bottom: 20px;
      }

      .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
        font-size: 14px;
      }

      .form-group input,
      .form-group textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid var(--panel-border);
        border-radius: 4px;
        font-size: 15px;
        transition: all 0.3s ease;
        font-family: inherit;
      }

      .form-group input:focus,
      .form-group textarea:focus {
        outline: none;
        border-color: var(--brand);
        box-shadow: 0 0 0 2px rgba(11, 64, 121, 0.1);
      }

      .form-group textarea {
        resize: vertical;
        min-height: 120px;
      }

      .form-actions {
        display: flex;
        justify-content: flex-end;
        margin-top: 25px;
      }

      .btn-send {
        background: var(--brand);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 4px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s ease;
        font-size: 16px;
      }

      .btn-send:hover {
        background: var(--brand-dark);
      }

      .contact-info-section {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        padding: 30px;
        margin-top: 30px;
      }

      .contact-info-section h3 {
        color: var(--brand-dark);
        font-size: 1.5rem;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--accent-gray);
      }

      .contact-info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
      }

      .info-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
      }

      .info-icon {
        background: var(--brand);
        color: white;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
      }

      .info-content h4 {
        color: var(--brand-dark);
        margin: 0 0 8px 0;
        font-size: 1.1rem;
      }

      .info-content p {
        color: #333;
        margin: 0;
        line-height: 1.5;
      }

      .map-container {
        margin-top: 40px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      }

      .map-placeholder {
        background: var(--accent-gray);
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--muted);
        font-size: 1.1rem;
      }
    </style>
  </head>
  <body>
    <a class="skip-link" href="#maincontent">Skip to main content</a>

    <!-- TOP GOVERNMENT STRIP -->
    @include('partials.header')

    <!-- HERO SECTION -->
    <section class="page-hero">
      <div class="hero-inner">
        <div class="hero-content">
          <h1>Contact Us</h1>
          <div class="hero-tabs">
            <a href="/contact-us" class="hero-tab active"> Contact Us</a>
          </div>
        </div>
      </div>
    </section>

    <!-- BREADCRUMB -->
    <div class="breadcrumb-section">
      <div class="breadcrumb-inner">
        <div class="breadcrumb">
          <a href="/">Home</a>
          <span class="separator">/</span>
          <span>Contact US</span>
        </div>
      </div>
    </div>

    <!-- MAIN CONTENT -->
    <main id="maincontent" class="page-content" role="main">
      <div class="contact-container">
        <div class="contact-header">
          <h2>Get in Touch with IIES</h2>
          <p>
            We're here to assist you with any inquiries regarding the Indian
            International Economic Service. Please feel free to contact our
            officials or send us a message using the form below.
          </p>
        </div>

        <div class="contact-content">
          <!-- Contact Officials Section -->
          <div class="contact-officials">
            <div class="contact-officials-header">
              <h3>Key Contacts</h3>
            </div>

            <div class="official-card">
              <div class="official-name">Shri Rajiv Mishra</div>
              <div class="official-designation">Senior Adviser, IIES Cadre</div>

              <div class="official-details">
                <div class="official-detail">
                  <div class="detail-icon">📍</div>
                  <div class="detail-text">
                    Room No. 34-A, Department of Economic Affairs, North Block,
                    New Delhi-110001
                  </div>
                </div>

                <div class="official-detail">
                  <div class="detail-icon">📞</div>
                  <div class="detail-text">Ph. No. 011-23094526</div>
                </div>

                <div class="official-detail">
                  <div class="detail-icon">✉️</div>
                  <div class="detail-text">
                    Email: r[dot]mishra67[at]gov[dot]in
                  </div>
                </div>
              </div>
            </div>

            <div class="official-card">
              <div class="official-name">Ms. Seema Jain</div>
              <div class="official-designation">Joint Director, IIES Cadre</div>

              <div class="official-details">
                <div class="official-detail">
                  <div class="detail-icon">📍</div>
                  <div class="detail-text">
                    Room No. 33-A1, Department of Economic Affairs, North Block,
                    New Delhi-110001
                  </div>
                </div>

                <div class="official-detail">
                  <div class="detail-icon">📞</div>
                  <div class="detail-text">Ph. No. 011-23095100</div>
                </div>

                <div class="official-detail">
                  <div class="detail-icon">✉️</div>
                  <div class="detail-text">
                    Email: seema[dot]jain74[at]nic[dot]in
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact Form Section -->
          <div class="contact-form-container">
            <div class="contact-form-header">
              <h3>Send Us a Message</h3>
            </div>

            <form class="contact-form" id="contactForm" action="{{ route('contact.store') }}" method="POST">
              @csrf
              <div class="form-row">
                <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input type="text" id="firstName" name="first_name" required />
                </div>

                <div class="form-group">
                  <label for="lastName">Last Name</label>
                  <input type="text" id="lastName" name="last_name" required />
                </div>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />
              </div>

              <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn-send">Send Message</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Additional Contact Information -->
        <div class="contact-info-section">
          <h3>Additional Information</h3>

          <div class="contact-info-grid">
            <div class="info-item">
              <div class="info-icon">🏛️</div>
              <div class="info-content">
                <h4>Office Address</h4>
                <p>
                  Department of Economic Affairs, North Block, New Delhi-110001,
                  India
                </p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">🕒</div>
              <div class="info-content">
                <h4>Office Hours</h4>
                <p>
                  Monday to Friday: 9:00 AM - 5:30 PM<br />Closed on Saturdays,
                  Sundays and Public Holidays
                </p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">📋</div>
              <div class="info-content">
                <h4>General Inquiries</h4>
                <p>
                  For general information about IIES, please visit our
                  <a href="/about">About IIES</a> page or submit an
                  <a href="/enquiry-form">Enquiry Form</a>.
                </p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">🌐</div>
              <div class="info-content">
                <h4>Website Support</h4>
                <p>
                  For technical issues with the website, please contact the
                  webmaster at
                  <a href="mailto:webmaster@finance.gov.in"
                    >webmaster@finance.gov.in</a
                  >.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Map Section -->
        <div class="map-container">
          <div class="map-placeholder">Map: North Block, New Delhi-110001</div>
        </div>
      </div>
    </main>
     <!-- FOOTER -->
   @include('partials.footer')


    <script>
      // Font size dropdown functionality
      const fontBtn = document.getElementById("fontSizeBtn");
      const fontMenu = document.getElementById("fontSizeMenu");

      // Toggle dropdown
      fontBtn.addEventListener("click", () => {
        fontMenu.parentElement.classList.toggle("show");
      });

      // When user selects a font size
      fontMenu.querySelectorAll("div").forEach((item) => {
        item.addEventListener("click", () => {
          const scale = parseFloat(item.dataset.size);

          // Apply font size to entire page
          document.body.style.fontSize = scale * 1 + "em";

          // Close the dropdown
          fontMenu.parentElement.classList.remove("show");
        });
      });

      // Close dropdown if clicked outside
      document.addEventListener("click", (e) => {
        if (!fontMenu.parentElement.contains(e.target)) {
          fontMenu.parentElement.classList.remove("show");
        }
      });

      // Mobile menu toggle
      const menuToggle = document.getElementById("menuToggle");
      const mainMenu = document.getElementById("mainMenu");
      menuToggle.addEventListener("click", () => {
        mainMenu.classList.toggle("show");
      });

      // Dropdown open on mobile tap
      document.querySelectorAll("nav li.dropdown > a").forEach((link) => {
        link.addEventListener("click", (e) => {
          if (window.innerWidth <= 600) {
            e.preventDefault();
            const parent = link.parentElement;
            parent.classList.toggle("open");
            const submenu = parent.querySelector(".dropdown-menu");
            if (submenu)
              submenu.style.display =
                submenu.style.display === "block" ? "none" : "block";
          }
        });
      });

      // Contact form submission
      const contactForm = document.getElementById("contactForm");
      if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
          e.preventDefault();

          // Get form data
          const formData = new FormData(contactForm);
          
          // Show loading state
          const submitBtn = contactForm.querySelector('.btn-send');
          const originalText = submitBtn.textContent;
          submitBtn.textContent = 'Sending...';
          submitBtn.disabled = true;

          // Send data to server
          fetch(contactForm.action, {
            method: 'POST',
            body: formData,
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
            }
          })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              alert(data.message);
              contactForm.reset();
            } else {
              // Handle validation errors
              if (data.errors) {
                let errorMessage = 'Please fix the following errors:\n';
                Object.values(data.errors).forEach(error => {
                  errorMessage += '- ' + error[0] + '\n';
                });
                alert(errorMessage);
              } else {
                alert('An error occurred. Please try again.');
              }
            }
          })
          .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
          })
          .finally(() => {
            // Reset button state
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
          });
        });
      }
    </script>
  </body>
</html>
