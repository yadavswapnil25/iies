<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Engage a Registered Facilitation Agent</title>
    @include('partials.favicons')

    <!-- External CSS -->
    <link rel="stylesheet" href="/css/style.css" />
      <link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous" />
  </head>
  <body>
  
     <!-- TOP GOVERNMENT STRIP -->
   @include('partials.header')

    <!-- HERO SECTION -->
    <section class="page-hero">
      <div class="hero-inner">
        <div class="hero-content">
          <h1>
            <span class="english-text">Engage a Registered Facilitation Agent</span>
            <span class="hindi-text">पंजीकृत सुविधा एजेंट को संलग्न करें</span>
          </h1>

          <div class="hero-tabs">
            <a href="/register-fac-agent/role-of-registered-facilitation-agent" class="hero-tab "><span class="english-text">Role of Registered Facilitation Agent</span><span class="hindi-text">पंजीकृत सुविधा एजेंट की भूमिका</span></a>
            <a href="/register-fac-agent/list-of-registered-facilitation-agent" class="hero-tab"><span class="english-text">List of Registered Facilitation Agent</span><span class="hindi-text">पंजीकृत सुविधा एजेंटों की सूची</span></a>
            <a href="/register-fac-agent/engage-a-registered-facilitation-agent" class="hero-tab active"><span class="english-text">Engage a Registered Facilitation Agent</span><span class="hindi-text">पंजीकृत सुविधा एजेंट को संलग्न करें</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- BREADCRUMB -->
    <div class="breadcrumb-section">
      <div class="breadcrumb-inner">
        <div class="breadcrumb">
          <a href="/">
            <span class="english-text">Home</span>
            <span class="hindi-text">मुखपृष्ठ</span>
          </a>
          <span class="separator">/</span>
          <a href="#"><span class="english-text">Registered Facilitation Agent</span><span class="hindi-text">पंजीकृत सुविधा एजेंट</span></a>
          <span class="separator">/</span>
          <span><span class="english-text">Engage a Registered Facilitation Agent</span><span class="hindi-text">पंजीकृत सुविधा एजेंट को संलग्न करें</span></span>
        </div>
      </div>
    </div>
    <!-- MAIN CONTENT -->
    <main id="maincontent" class="page-content" role="main">
      <div class="page-container">
        <div class="page-main otherpage">

             <div class="acts-policy-page">
            <div class="acts-policy-content">
              <!-- Hire An Agent for Yourself -->
              <section class="intro-section">
                <h2>
                  <span class="english-text">Engage a Registered Facilitation Agent</span>
                  <span class="hindi-text">पंजीकृत सुविधा एजेंट को संलग्न करें</span>
                </h2>
                <h3>Requirement of a Support Agent for Obtaining No Objection Certificate (NOC) from Indian International Economic Service (IIES)</h3>
              
            <p class="english-text">A Support Agent (Assistant Representative) is required to obtain any type of No Objection Certificate (NOC) from the Indian International Economic Service (IIES). This agent plays a crucial role in the process of obtaining the NOC. The NOC is not issued to any large firm, group, proprietorship, or individual client without an agent.</p>
            <p class="hindi-text">भारतीय अंतर्राष्ट्रीय आर्थिक सेवा (IIES) से किसी भी प्रकार का अनापत्ति प्रमाणपत्र (NOC) प्राप्त करने हेतु एक सहायता एजेंट (सहायक प्रतिनिधि) आवश्यक होता है। यह एजेंट NOC प्राप्ति प्रक्रिया में महत्वपूर्ण भूमिका निभाता है। किसी भी बड़ी फर्म, समूह, प्रोप्राइटरशिप या व्यक्तिगत ग्राहक को एजेंट के बिना NOC जारी नहीं किया जाता।</p>
              
            <p class="english-text">There are five main categories in the Indian International Economic Service under which an agent can be hired for an NOC:</p>
            <p class="hindi-text">IIES में पाँच मुख्य श्रेणियाँ हैं जिनके अंतर्गत NOC हेतु एजेंट नियुक्त किया जा सकता है:</p>
            </section>
            </div>
          </div>

        
          <button id="hireAgentBtn" class="hire-agent-btn">
            <span class="english-text">Click here to hire a Support Agent</span>
            <span class="hindi-text">सहायता एजेंट नियुक्त करने के लिए यहाँ क्लिक करें</span>
          </button>

          <!-- Agent Categories Section -->
          <div class="agent-categories">
            <h3>
              <span class="english-text">Agent Categories</span>
              <span class="hindi-text">एजेंट श्रेणियाँ</span>
            </h3>
            <div class="categories-grid">
              <div class="category-card">
                <h4>Category A</h4>
                <p>Individual & Small Business NOC</p>
              </div>
              <div class="category-card">
                <h4>Category B</h4>
                <p>Corporate & Large Business NOC</p>
              </div>
              <div class="category-card">
                <h4>Category C</h4>
                <p>International Trade NOC</p>
              </div>
              <div class="category-card">
                <h4>Category D</h4>
                <p>Investment & Financial NOC</p>
              </div>
              <div class="category-card">
                <h4>Category E</h4>
                <p>Special Projects NOC</p>
              </div>
            </div>
          </div>

          <!-- Hire Agent Modal -->
          <div id="hireAgentModal" class="modal">
            <div class="modal-content">
              <div class="modal-header">
                <h2>
                  <span class="english-text">Hire a Support Agent</span>
                  <span class="hindi-text">सहायता एजेंट नियुक्त करें</span>
                </h2>
                <span class="close-btn">&times;</span>
              </div>
              <div class="modal-body">
                <form id="hireAgentForm" class="agent-form" action="{{ route('hire-agent.store') }}" method="POST">
                  @csrf
                  <div class="form-section">
                    <h3>
                      <span class="english-text">Personal Information</span>
                      <span class="hindi-text">व्यक्तिगत जानकारी</span>
                    </h3>
                    <div class="form-row">
                      <div class="form-group">
                        <label for="fullName"><span class="english-text">Full Name *</span><span class="hindi-text">पूरा नाम *</span></label>
                        <input
                          type="text"
                          id="fullName"
                          name="fullName"
                          required
                        />
                      </div>
                      <div class="form-group">
                        <label for="email"><span class="english-text">Email Address *</span><span class="hindi-text">ईमेल पता *</span></label>
                        <input type="email" id="email" name="email" required />
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group">
                        <label for="phone"><span class="english-text">Phone Number *</span><span class="hindi-text">फोन नंबर *</span></label>
                        <input type="tel" id="phone" name="phone" required />
                      </div>
                      <div class="form-group">
                        <label for="organization"><span class="english-text">Organization</span><span class="hindi-text">संगठन</span></label>
                        <input
                          type="text"
                          id="organization"
                          name="organization"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="form-section">
                    <h3>
                      <span class="english-text">Agent Requirements</span>
                      <span class="hindi-text">एजेंट आवश्यकताएँ</span>
                    </h3>
                    <div class="form-group">
                      <label for="agentCategory"><span class="english-text">Select Agent Category *</span><span class="hindi-text">एजेंट श्रेणी चुनें *</span></label>
                      <select id="agentCategory" name="agentCategory" required>
                        <option value=""><span class="english-text">Select a category</span><span class="hindi-text">श्रेणी चुनें</span></option>
                        <option value="category-a">
                          Category A - Individual & Small Business NOC
                        </option>
                        <option value="category-b">
                          Category B - Corporate & Large Business NOC
                        </option>
                        <option value="category-c">
                          Category C - International Trade NOC
                        </option>
                        <option value="category-d">
                          Category D - Investment & Financial NOC
                        </option>
                        <option value="category-e">
                          Category E - Special Projects NOC
                        </option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="preferredAgent"><span class="english-text">Preferred Agent (Optional)</span><span class="hindi-text">वांछित एजेंट (वैकल्पिक)</span></label>
                      <input
                        type="text"
                        id="preferredAgent"
                        name="preferredAgent"
                        placeholder="Enter Agent Code or Name / एजेंट कोड या नाम दर्ज करें"
                      />
                    </div>
                    <div class="form-group">
                      <label for="serviceDescription"><span class="english-text">Service Description *</span><span class="hindi-text">सेवा विवरण *</span></label>
                      <textarea
                        id="serviceDescription"
                        name="serviceDescription"
                        rows="4"
                        placeholder="Describe the service you need..."
                        required
                      ></textarea>
                    </div>
                  </div>

                  <div class="form-section">
                    <h3>
                      <span class="english-text">Additional Information</span>
                      <span class="hindi-text">अतिरिक्त जानकारी</span>
                    </h3>
                    <div class="form-group">
                      <label for="budget"><span class="english-text">Estimated Budget (INR)</span><span class="hindi-text">अनुमानित बजट (INR)</span></label>
                      <input
                        type="number"
                        id="budget"
                        name="budget"
                        placeholder="Enter amount in INR"
                      />
                    </div>
                    <div class="form-group">
                      <label for="timeline"><span class="english-text">Preferred Timeline</span><span class="hindi-text">वांछित समयसीमा</span></label>
                      <select id="timeline" name="timeline">
                        <option value=""><span class="english-text">Select timeline</span><span class="hindi-text">समयसीमा चुनें</span></option>
                        <option value="urgent"><span class="english-text">Urgent (Within 1 week)</span><span class="hindi-text">अत्यावश्यक (1 सप्ताह के भीतर)</span></option>
                        <option value="standard"><span class="english-text">Standard (2-4 weeks)</span><span class="hindi-text">मानक (2–4 सप्ताह)</span></option>
                        <option value="flexible"><span class="english-text">Flexible (1-2 months)</span><span class="hindi-text">लचीला (1–2 माह)</span></option>
                      </select>
                    </div>
                  </div>

                  <div class="form-section">
                    <div class="form-group checkbox-group">
                      <input type="checkbox" id="terms" name="terms" required />
                      <label for="terms"><span class="english-text">I agree to the <a href="#">terms and conditions</a> and understand that all payments will be made through the official SBI professional account only *</span><span class="hindi-text">मैं <a href="#">नियमों एवं शर्तों</a> से सहमत हूँ और समझता/समझती हूँ कि सभी भुगतान केवल आधिकारिक SBI प्रोफेशनल खाते के माध्यम से ही किए जाएँगे *</span></label>
                    </div>
                  </div>

                  <div class="form-actions">
                    <button type="button" class="btn-secondary" id="cancelBtn"><span class="english-text">Cancel</span><span class="hindi-text">रद्द करें</span></button>
                    <button type="submit" class="btn-primary"><span class="english-text">Submit Request</span><span class="hindi-text">अनुरोध जमा करें</span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Success Message -->
          <div id="successMessage" class="success-message">
            <div class="success-content">
              <div class="success-icon">✓</div>
              <h3>
                <span class="english-text">Request Submitted Successfully!</span>
                <span class="hindi-text">अनुरोध सफलतापूर्वक जमा हो गया!</span>
              </h3>
              <p class="english-text">Your request to hire a support agent has been received. Our team will contact you within 24 hours.</p>
              <p class="hindi-text">सहायता एजेंट नियुक्त करने का आपका अनुरोध प्राप्त हो गया है। हमारी टीम 24 घंटों के भीतर आपसे संपर्क करेगी।</p>
              <button class="btn-primary" id="closeSuccess"><span class="english-text">Close</span><span class="hindi-text">बंद करें</span></button>
            </div>
          </div>
          <!-- form end -->
          <p class="english-text">If your work falls under any of the above categories, you may hire an agent.</p>
          <p class="hindi-text">यदि आपका कार्य उपरोक्त किसी भी श्रेणी में आता है, तो आप एजेंट नियुक्त कर सकते हैं।</p>
          <p class="english-text">To hire an agent, please fill and submit the form provided below. The client may select any agent as per their own discretion (will).</p>
          <p class="hindi-text">एजेंट नियुक्त करने हेतु नीचे दिया गया फॉर्म भरकर जमा करें। ग्राहक अपनी इच्छानुसार किसी भी एजेंट का चयन कर सकता/सकती है।</p>
        </div>
      </div>
    </main>

     <!-- FOOTER -->
    @include('partials.footer')\n    <script src="/js/language-switcher.js"></script>


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

      //   form script start

      // Hire Agent Modal Functionality
      document.addEventListener("DOMContentLoaded", function () {
        const hireBtn = document.getElementById("hireAgentBtn");
        const modal = document.getElementById("hireAgentModal");
        const closeBtn = document.querySelector(".close-btn");
        const cancelBtn = document.getElementById("cancelBtn");
        const form = document.getElementById("hireAgentForm");
        const successMessage = document.getElementById("successMessage");
        const closeSuccess = document.getElementById("closeSuccess");

        // Open modal
        hireBtn.addEventListener("click", function () {
          modal.style.display = "block";
          document.body.style.overflow = "hidden"; // Prevent background scrolling
        });

        // Close modal functions
        function closeModal() {
          modal.style.display = "none";
          document.body.style.overflow = "auto"; // Re-enable scrolling
        }

        closeBtn.addEventListener("click", closeModal);
        cancelBtn.addEventListener("click", closeModal);

        // Close modal when clicking outside
        window.addEventListener("click", function (event) {
          if (event.target === modal) {
            closeModal();
          }
          if (event.target === successMessage) {
            successMessage.style.display = "none";
          }
        });

        // Close success message
        closeSuccess.addEventListener("click", function () {
          successMessage.style.display = "none";
        });

        // Form submission
        form.addEventListener("submit", function (event) {
          event.preventDefault();

          // Basic form validation
          if (validateForm()) {
            // Show loading state
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Submitting...';
            submitBtn.disabled = true;

            // Prepare form data
            const formData = new FormData(form);

            // Send data to server
            fetch(form.action, {
              method: 'POST',
              body: formData,
              headers: {
                'X-Requested-With': 'XMLHttpRequest',
              }
            })
            .then(response => response.json())
            .then(data => {
              if (data.success) {
                // Show success message
                closeModal();
                successMessage.style.display = "flex";
                
                // Reset form
                form.reset();
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
          }
        });

        // Form validation function
        function validateForm() {
          let isValid = true;
          const requiredFields = form.querySelectorAll("[required]");

          requiredFields.forEach((field) => {
            if (!field.value.trim()) {
              isValid = false;
              field.style.borderColor = "#e74c3c";
            } else {
              field.style.borderColor = "";
            }
          });

          // Email validation
          const emailField = document.getElementById("email");
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (emailField.value && !emailRegex.test(emailField.value)) {
            isValid = false;
            emailField.style.borderColor = "#e74c3c";
          }

          // Phone validation (basic)
          const phoneField = document.getElementById("phone");
          const phoneRegex = /^[0-9]{10}$/;
          if (
            phoneField.value &&
            !phoneRegex.test(phoneField.value.replace(/\D/g, ""))
          ) {
            isValid = false;
            phoneField.style.borderColor = "#e74c3c";
          }

          if (!isValid) {
            alert("Please fill all required fields correctly.");
          }

          return isValid;
        }

        // Real-time validation
        form.addEventListener("input", function (event) {
          if (event.target.hasAttribute("required")) {
            if (event.target.value.trim()) {
              event.target.style.borderColor = "";
            }
          }
        });
      });
      // form script end
    </script>
  </body>
</html>
