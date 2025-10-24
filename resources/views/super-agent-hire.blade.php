<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hire An Agent for Yourself</title>

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
          <h1>Engage a Registered Facilitation Agent</h1>

          <div class="hero-tabs">
            <a href="/super-agent-role" class="hero-tab "
              >
Role of Registered Facilitation Agent</a
            >
            <a href="/super-agent-list" class="hero-tab"
              >List of Registered Facilitation Agent</a
            >
            <a href="/super-agent-hire" class="hero-tab active"
              >Engage a Registered Facilitation Agent</a
            >
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
          <a href="#">Registered Facilitation Agent</a>
          <span class="separator">/</span>
          <span>Engage a Registered Facilitation Agent</span>
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
                <h2>Hire An Agent for Yourself</h2>
                <h3>Requirement of a Support Agent for Obtaining No Objection Certificate (NOC) from Indian International Economic Service (IIES)</h3>
              
              <p>A Support Agent (Assistant Representative) is required to obtain any type of No Objection Certificate (NOC) from the Indian International Economic Service (IIES). This agent plays a crucial role in the process of obtaining the NOC. The NOC is not issued to any large firm, group, proprietorship, or individual client without an agent.</p>
              
            <p>There are five main categories in the Indian International Economic Service under which an agent can be hired for an NOC:</p>
            </section>
            </div>
          </div>

        
          <button id="hireAgentBtn" class="hire-agent-btn">
            Click here for hire a Support Agent
          </button>

          <!-- Agent Categories Section -->
          <div class="agent-categories">
            <h3>Agent Categories</h3>
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
                <h2>Hire a Support Agent</h2>
                <span class="close-btn">&times;</span>
              </div>
              <div class="modal-body">
                <form id="hireAgentForm" class="agent-form" action="{{ route('hire-agent.store') }}" method="POST">
                  @csrf
                  <div class="form-section">
                    <h3>Personal Information</h3>
                    <div class="form-row">
                      <div class="form-group">
                        <label for="fullName">Full Name *</label>
                        <input
                          type="text"
                          id="fullName"
                          name="fullName"
                          required
                        />
                      </div>
                      <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required />
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required />
                      </div>
                      <div class="form-group">
                        <label for="organization">Organization</label>
                        <input
                          type="text"
                          id="organization"
                          name="organization"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="form-section">
                    <h3>Agent Requirements</h3>
                    <div class="form-group">
                      <label for="agentCategory">Select Agent Category *</label>
                      <select id="agentCategory" name="agentCategory" required>
                        <option value="">Select a category</option>
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
                      <label for="preferredAgent"
                        >Preferred Agent (Optional)</label
                      >
                      <input
                        type="text"
                        id="preferredAgent"
                        name="preferredAgent"
                        placeholder="Enter Agent Code or Name"
                      />
                    </div>
                    <div class="form-group">
                      <label for="serviceDescription"
                        >Service Description *</label
                      >
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
                    <h3>Additional Information</h3>
                    <div class="form-group">
                      <label for="budget">Estimated Budget (INR)</label>
                      <input
                        type="number"
                        id="budget"
                        name="budget"
                        placeholder="Enter amount in INR"
                      />
                    </div>
                    <div class="form-group">
                      <label for="timeline">Preferred Timeline</label>
                      <select id="timeline" name="timeline">
                        <option value="">Select timeline</option>
                        <option value="urgent">Urgent (Within 1 week)</option>
                        <option value="standard">Standard (2-4 weeks)</option>
                        <option value="flexible">Flexible (1-2 months)</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-section">
                    <div class="form-group checkbox-group">
                      <input type="checkbox" id="terms" name="terms" required />
                      <label for="terms"
                        >I agree to the <a href="#">terms and conditions</a> and
                        understand that all payments will be made through the
                        official SBI professional account only *</label
                      >
                    </div>
                  </div>

                  <div class="form-actions">
                    <button type="button" class="btn-secondary" id="cancelBtn">
                      Cancel
                    </button>
                    <button type="submit" class="btn-primary">
                      Submit Request
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Success Message -->
          <div id="successMessage" class="success-message">
            <div class="success-content">
              <div class="success-icon">✓</div>
              <h3>Request Submitted Successfully!</h3>
              <p>
                Your request to hire a support agent has been received. Our team
                will contact you within 24 hours.
              </p>
              <button class="btn-primary" id="closeSuccess">Close</button>
            </div>
          </div>
          <!-- form end -->
          <p>
            If your work falls under any of the above categories, you may hire
            an agent.
          </p>
          <p>
            To hire an agent, please fill and submit the form provided below.
            The client may select any agent as per their own discretion (will).
          </p>
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
