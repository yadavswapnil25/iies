<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Enquiry</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" />
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
          <h1>Enquiry</h1>

          <div class="hero-tabs">
            <a href="/super-agent-role" class="hero-tab active"
              >Enquiry Form</a
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
          <span>Enquiry-form </span>
        </div>
      </div>
    </div>
    <!-- MAIN CONTENT -->
    <main id="maincontent" class="page-content" role="main">
      <div class="page-container">
        <div class="page-main otherpage">
          <div class="enquiry-container">
            <div class="enquiry-header">
              <h2>Official Enquiry Form</h2>
              <p>
                Please fill out the form below to submit your enquiry. All
                fields marked with * are mandatory.
              </p>
            </div>

            <form
              id="enquiryForm"
              class="enquiry-form"
              action="{{ route('enquiry.store') }}"
              method="POST"
              enctype="multipart/form-data"
            >
              @csrf
              <!-- Personal Information Section -->
              <div class="form-section">
                <h3 class="section-title">Personal Information</h3>
                <div class="form-row">
                  <div class="form-group">
                    <label for="fullName">Full Name </label>
                    <input
                      type="text"
                      id="fullName"
                      name="fullName"
                      required
                      placeholder="Enter your full name"
                    />
                  </div>
                  <div class="form-group">
                    <label for="email">Email Address </label>
                    <input
                      type="email"
                      id="email"
                      name="email"
                      required
                      placeholder="Enter your email address"
                    />
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group">
                    <label for="phone">Phone Number </label>
                    <input
                      type="tel"
                      id="phone"
                      name="phone"
                      required
                      placeholder="Enter your phone number"
                    />
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input
                      type="text"
                      id="address"
                      name="address"
                      placeholder="Enter your complete address"
                    />
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group">
                    <label for="organization">Organization/Company</label>
                    <input
                      type="text"
                      id="organization"
                      name="organization"
                      placeholder="Enter organization name"
                    />
                  </div>
                  <div class="form-group">
                    <label for="designation">Designation</label>
                    <input
                      type="text"
                      id="designation"
                      name="designation"
                      placeholder="Enter your designation"
                    />
                  </div>
                </div>
              </div>

              <!-- Enquiry Details Section -->
              <div class="form-section">
                <h3 class="section-title">Enquiry Details</h3>
                <div class="form-group">
                  <label for="enquiryType">Type of Enquiry </label>
                  <select id="enquiryType" name="enquiryType" required>
                    <option value="">Select enquiry type</option>
                    <option value="noc">No Objection Certificate (NOC)</option>
                    <option value="agent">Support Agent Related</option>
                    <option value="procedure">Procedure & Guidelines</option>
                    <option value="fee">Fee Structure</option>
                    <option value="technical">Technical Issue</option>
                    <option value="general">General Information</option>
                    <option value="complaint">Complaint</option>
                    <option value="other">Other</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="enquirySubject">Enquiry Subject </label>
                  <input
                    type="text"
                    id="enquirySubject"
                    name="enquirySubject"
                    required
                    placeholder="Brief subject of your enquiry"
                  />
                </div>

                <div class="form-group">
                  <label for="enquiryDescription">Detailed Description </label>
                  <textarea
                    id="enquiryDescription"
                    name="enquiryDescription"
                    rows="6"
                    required
                    placeholder="Please provide detailed description of your enquiry..."
                  ></textarea>
                </div>

              </div>

              <!-- Document Upload Section -->
              <div class="form-section">
                <h3 class="section-title">Supporting Documents (Optional)</h3>
                <div class="form-group">
                  <label for="documents">Upload Supporting Documents</label>
                  <div class="file-upload-area">
                    <input
                      type="file"
                      id="documents"
                      name="documents"
                      multiple
                      accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
                    />
                    <div class="upload-placeholder">
                      <span class="upload-icon">📎</span>
                      <p>Click to upload or drag and drop</p>
                      <small
                        >Maximum file size: 5MB each (PDF, DOC, JPG, PNG)</small
                      >
                    </div>
                  </div>
                  <div id="fileList" class="file-list"></div>
                </div>
              </div>

              <!-- Communication Preferences -->
              <div class="form-section">
                <h3 class="section-title">Communication Preferences</h3>
                <div class="preferences-group">
                  <div class="checkbox-group">
                    <input
                      type="checkbox"
                      id="emailUpdates"
                      name="emailUpdates"
                      checked
                    />
                    <label for="emailUpdates"
                      >I wish to receive updates via email</label
                    >
                  </div>
                  <div class="checkbox-group">
                    <input type="checkbox" id="smsUpdates" name="smsUpdates" />
                    <label for="smsUpdates"
                      >I wish to receive updates via SMS</label
                    >
                  </div>
                </div>
              </div>

              <!-- Terms and Conditions -->
              <div class="form-section">
                <div class="terms-group">
                  <div class="checkbox-group">
                    <input type="checkbox" id="terms" name="terms" required />
                    <label for="terms"
                      >I hereby declare that the information provided is true
                      and correct to the best of my knowledge. I agree to the
                      <a href="#" target="_blank">terms and conditions</a> and
                      <a href="#" target="_blank">privacy policy</a>. *</label
                    >
                  </div>
                </div>
              </div>

              <!-- Form Actions -->
              <div class="form-actions">
                <button type="button" class="btn-secondary" id="resetBtn">
                  Reset Form
                </button>
                <button type="submit" class="btn-primary">
                  Submit Enquiry
                </button>
              </div>
            </form>

            <!-- Success Message -->
            <div id="successMessage" class="success-message">
              <div class="success-content">
                <div class="success-icon">✓</div>
                <h3>Enquiry Submitted Successfully!</h3>
                <p>
                  Your enquiry has been received. Reference Number:
                  <strong id="referenceDisplay"></strong>
                </p>
                <p>We will respond to your enquiry within 2-3 working days.</p>
                <button class="btn-primary" id="closeSuccess">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

     <!-- FOOTER -->
    <footer class="page-footer" role="contentinfo">
      <div class="footer-inner">
        <!-- Column 1: Ministry Info -->
        <div class="footer-col">
          <strong class="footer-title">Ministry of Finance</strong>
          <p class="footer-description">
            Official website of the Ministry of Finance. Website content managed
            by Ministry of Finance, Government of India. Designed, Developed and
            Hosted by NIC.
          </p>
          <div class="footer-updated">Last Updated: Oct 11, 2025</div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="footer-col">
          <strong class="footer-title">Quick Links</strong>
          <div class="footer-links">
            <a href="/">Home</a>
            <a href="/about">About IIES</a>
            <a href="/our-minister">Our Minister</a>
            <a href="/our-performance">Our Performance</a>
            <a href="/noc-process">NOC Process</a>
          </div>
        </div>

        <!-- Column 3: Navigation Links -->
        <div class="footer-col">
          <strong class="footer-title">Navigation</strong>
          <div class="footer-links">      
            <a href="/proc-guide">Procedure & Guidelines</a>
            <a href="/issuance-noc">Guideline for Issuance NOC</a>
            <a href="/penalty">Penalty</a>
            <a href="/enquiry-form">Enquiry</a>
            <a href="/contact-us">Contact IIES</a>  
          </div>
        </div>

        <!-- Column 4: Social Media & Contact -->
        <div class="footer-col">
          <strong class="footer-title">Follow Us</strong>
          <div class="social-icons-row">
            <a href="#" class="social-icon" aria-label="Twitter">
              <span class="social-icon-inner">
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                >
                  <path
                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"
                  />
                </svg>
              </span>
            </a>
            <a href="#" class="social-icon" aria-label="Facebook">
              <span class="social-icon-inner">
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                >
                  <path
                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                  />
                </svg>
              </span>
            </a>
            <a href="#" class="social-icon" aria-label="YouTube">
              <span class="social-icon-inner">
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                >
                  <path
                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                  />
                </svg>
              </span>
            </a>
            <a href="#" class="social-icon" aria-label="Instagram">
              <span class="social-icon-inner">
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                >
                  <path
                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                  />
                </svg>
              </span>
            </a>
          </div>

          <div class="contact-info">
            <strong class="footer-title">Contact Info</strong>
            <div class="contact-details">
              <p>Phone: +91-11-23095555</p>
              <p>Email: info@finance.gov.in</p>
              <p>Address: North Block, New Delhi-110001</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div class="footer-bottom-inner">
          <p>
            &copy; 2025 Ministry of Finance, Government of India. All Rights
            Reserved.
          </p>
        </div>
      </div>
    </footer>


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
    </script>
    <!-- form script -->
    <script>
      // Enquiry Form Functionality
      document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("enquiryForm");
        const resetBtn = document.getElementById("resetBtn");
        const successMessage = document.getElementById("successMessage");
        const closeSuccess = document.getElementById("closeSuccess");
        const fileInput = document.getElementById("documents");
        const fileList = document.getElementById("fileList");
        const referenceDisplay = document.getElementById("referenceDisplay");

        let uploadedFiles = [];

        // File upload handling
        fileInput.addEventListener("change", function (e) {
          handleFiles(e.target.files);
        });

        // Drag and drop functionality
        const uploadArea = document.querySelector(".file-upload-area");
        uploadArea.addEventListener("dragover", function (e) {
          e.preventDefault();
          this.style.borderColor = "var(--brand)";
          this.style.background = "rgba(11, 64, 121, 0.1)";
        });

        uploadArea.addEventListener("dragleave", function (e) {
          e.preventDefault();
          this.style.borderColor = "var(--panel-border)";
          this.style.background = "var(--accent-gray)";
        });

        uploadArea.addEventListener("drop", function (e) {
          e.preventDefault();
          this.style.borderColor = "var(--panel-border)";
          this.style.background = "var(--accent-gray)";

          if (e.dataTransfer.files.length) {
            handleFiles(e.dataTransfer.files);
          }
        });

        function handleFiles(files) {
          for (let file of files) {
            // Check file size (5MB max)
            if (file.size > 5 * 1024 * 1024) {
              alert(`File "${file.name}" is too large. Maximum size is 5MB.`);
              continue;
            }

            // Check file type
            const allowedTypes = [
              "application/pdf",
              "application/msword",
              "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
              "image/jpeg",
              "image/jpg",
              "image/png",
            ];

            if (!allowedTypes.includes(file.type)) {
              alert(`File "${file.name}" is not a supported format.`);
              continue;
            }

            uploadedFiles.push(file);
            displayFile(file);
          }

          // Reset file input to allow uploading same files again
          fileInput.value = "";
        }

        function displayFile(file) {
          const fileItem = document.createElement("div");
          fileItem.className = "file-item";

          const fileInfo = document.createElement("span");
          fileInfo.textContent = `${file.name} (${formatFileSize(file.size)})`;

          const removeBtn = document.createElement("button");
          removeBtn.className = "file-remove";
          removeBtn.innerHTML = "×";
          removeBtn.title = "Remove file";

          removeBtn.addEventListener("click", function () {
            fileItem.remove();
            uploadedFiles = uploadedFiles.filter((f) => f !== file);
          });

          fileItem.appendChild(fileInfo);
          fileItem.appendChild(removeBtn);
          fileList.appendChild(fileItem);
        }

        function formatFileSize(bytes) {
          if (bytes === 0) return "0 Bytes";
          const k = 1024;
          const sizes = ["Bytes", "KB", "MB", "GB"];
          const i = Math.floor(Math.log(bytes) / Math.log(k));
          return (
            parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + " " + sizes[i]
          );
        }

        // Form reset
        resetBtn.addEventListener("click", function () {
          if (
            confirm(
              "Are you sure you want to reset the form? All entered data will be lost."
            )
          ) {
            form.reset();
            uploadedFiles = [];
            fileList.innerHTML = "";
          }
        });

        // Form submission
        form.addEventListener("submit", function (event) {
          event.preventDefault();

          if (validateForm()) {
            // Generate reference number
            const referenceNumber = "ENQ-" + Date.now().toString().slice(-8);
            referenceDisplay.textContent = referenceNumber;

            // Here you would typically send the form data to a server
            // For demo purposes, we'll just show the success message

            successMessage.style.display = "flex";

            // Reset form after successful submission
            setTimeout(() => {
              form.reset();
              uploadedFiles = [];
              fileList.innerHTML = "";
            }, 1000);
          }
        });

        // Close success message
        closeSuccess.addEventListener("click", function () {
          successMessage.style.display = "none";
        });

        // Form validation
        function validateForm() {
          let isValid = true;
          const requiredFields = form.querySelectorAll("[required]");

          // Clear previous error states
          form.querySelectorAll(".error").forEach((el) => {
            el.classList.remove("error");
          });

          requiredFields.forEach((field) => {
            if (!field.value.trim()) {
              isValid = false;
              field.classList.add("error");

              // Add error styling
              field.style.borderColor = "#e74c3c";
              field.style.boxShadow = "0 0 0 2px rgba(231, 76, 60, 0.1)";
            } else {
              field.style.borderColor = "";
              field.style.boxShadow = "";
            }
          });

          // Email validation
          const emailField = document.getElementById("email");
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (emailField.value && !emailRegex.test(emailField.value)) {
            isValid = false;
            emailField.classList.add("error");
            emailField.style.borderColor = "#e74c3c";
            emailField.style.boxShadow = "0 0 0 2px rgba(231, 76, 60, 0.1)";
          }

          // Phone validation (basic)
          const phoneField = document.getElementById("phone");
          const phoneRegex = /^[0-9]{10}$/;
          if (
            phoneField.value &&
            !phoneRegex.test(phoneField.value.replace(/\D/g, ""))
          ) {
            isValid = false;
            phoneField.classList.add("error");
            phoneField.style.borderColor = "#e74c3c";
            phoneField.style.boxShadow = "0 0 0 2px rgba(231, 76, 60, 0.1)";
          }

          if (!isValid) {
            alert("Please fill all required fields correctly.");
            // Scroll to first error
            const firstError = form.querySelector(".error");
            if (firstError) {
              firstError.scrollIntoView({
                behavior: "smooth",
                block: "center",
              });
            }
          }

          return isValid;
        }

        // Real-time validation
        form.addEventListener("input", function (event) {
          const field = event.target;

          if (field.hasAttribute("required") && field.value.trim()) {
            field.classList.remove("error");
            field.style.borderColor = "";
            field.style.boxShadow = "";
          }

          // Specific field validations
          if (field.id === "email" && field.value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(field.value)) {
              field.classList.add("error");
              field.style.borderColor = "#e74c3c";
            } else {
              field.classList.remove("error");
              field.style.borderColor = "";
            }
          }

          if (field.id === "phone" && field.value) {
            const phoneRegex = /^[0-9]{10}$/;
            if (!phoneRegex.test(field.value.replace(/\D/g, ""))) {
              field.classList.add("error");
              field.style.borderColor = "#e74c3c";
            } else {
              field.classList.remove("error");
              field.style.borderColor = "";
            }
          }
        });
      });
    </script>
  </body>
</html>
