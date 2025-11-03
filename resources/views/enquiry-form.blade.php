<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Enquiry form</title>
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
    <script src="/js/language-switcher.js"></script>
  </body>
</html>
