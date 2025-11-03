<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Law & Act</title>
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
          <h1>Law & Act</h1>

          <div class="hero-tabs">
            <a href="/law-act-policy" class="hero-tab active"
              >Act & Policy</a
            >
            <a href="/law-issue-noc" class="hero-tab"
              >Law Before Issuing NOC</a
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
          <a href="#">Law & Act</a>
          <span class="separator">/</span>
          <span>Act & Policy</span>
        </div>
      </div>
    </div>
    <!-- MAIN CONTENT -->
    <main id="maincontent" class="page-content" role="main">
      <div class="page-container">
        <div class="page-main otherpage">
          <div class="acts-policy-page">
            <div class="acts-policy-header">
              <div class="header-inner">
                <h1>Act & Policy Framework</h1>
                <p>
                  Comprehensive regulatory framework governing the Indian
                  International Economic Service (IIES) operations and
                  international financial transactions
                </p>
              </div>
            </div>

            <div class="acts-policy-content">
              <!-- Introduction Section -->
              <section class="intro-section">
                <h2>Act & Policy</h2>
                <p>
                  The Indian International Economic Service (IIES) functions
                  under the regulatory framework established by the Government
                  of India, primarily guided by policies related to foreign
                  exchange, international financial transactions, and economic
                  governance.
                </p>
                <p>
                  The key acts and policies relevant to IIES include the Foreign
                  Exchange Management Act (FEMA), 1999, which regulates
                  cross-border financial flows and ensures that foreign
                  transactions comply with India's legal and economic policies.
                  Additionally, IIES aligns its operations with directives from
                  the Reserve Bank of India (RBI), IIES,
                  Department of Economic Affairs (DEA), and other related
                  authorities, ensuring transparency, legality, and
                  accountability in international financial dealings.
                </p>
                <p>
                  The institution also adheres to Income Tax Act provisions,
                  Companies Act, and guidelines from bodies like the Central
                  Board of Direct Taxes (CBDT) for auditing and reporting
                  foreign remittances.
                </p>
              </section>

              <!-- Practice Section -->
              <section class="practice-section">
                <h2>Operational Practice</h2>
                <p>
                  In practice, IIES issues No Objection Certificates (NOCs) and
                  other authorizations for international fund transfers only
                  after confirming compliance with these laws and policies. This
                  ensures that all foreign currency transactions handled by the
                  service are legal, transparent, and in line with India's
                  international financial commitments.
                </p>
              </section>

              <!-- Acts & Policies Grid -->
              <section class="acts-section">
                <h2
                  style="
                    color: var(--brand-dark);
                    font-size: 2rem;
                    margin-bottom: 30px;
                    text-align: center;
                  "
                >
                  Legal Acts and Policies Governing IIES
                </h2>

                <div class="acts-grid">
                  <!-- Act 1 -->
                  <div class="act-card">
                    <span class="act-number">Act 1</span>
                    <h3>Foreign Exchange Management Act (FEMA), 1999</h3>
                    <p>
                      Governs cross-border financial transactions and ensures
                      all foreign remittances comply with Indian law. Provides
                      the legal framework for foreign exchange management in
                      India.
                    </p>
                  </div>

                  <!-- Act 2 -->
                  <div class="act-card">
                    <span class="act-number">Act 2</span>
                    <h3>Reserve Bank of India (RBI) Guidelines</h3>
                    <p>
                      Provides directives for international fund transfers and
                      monitors compliance of NOC issuance with banking
                      regulations. Ensures financial stability and regulatory
                      compliance.
                    </p>
                  </div>

                  <!-- Act 3 -->
                  <div class="act-card">
                    <span class="act-number">Act 3</span>
                    <h3>Department of Economic Affairs (DEA) Regulations</h3>
                    <p>
                      Approves international economic transactions and
                      coordinates with IIES for processing NOC applications.
                      Facilitates economic policy implementation.
                    </p>
                  </div>

                  <!-- Act 4 -->
                  <div class="act-card">
                    <span class="act-number">Act 4</span>
                    <h3>IIES Policies</h3>
                    <p>
                      Ensures transparency and legality in handling
                      international funds. Sets limits and procedures for fund
                      approvals and audits to maintain financial integrity.
                    </p>
                  </div>

                  <!-- Act 5 -->
                  <div class="act-card">
                    <span class="act-number">Act 5</span>
                    <h3>Income Tax Act & CBDT Guidelines</h3>
                    <p>
                      Audits foreign fund inflows and outflows, ensuring tax
                      compliance for both Indian and non-Indian entities.
                      Maintains tax discipline in international transactions.
                    </p>
                  </div>

                  <!-- Act 6 -->
                  <div class="act-card">
                    <span class="act-number">Act 6</span>
                    <h3>Companies Act and Corporate Regulations</h3>
                    <p>
                      Governs corporate entities involved in international
                      transactions and provides reporting frameworks for foreign
                      remittances. Ensures corporate compliance.
                    </p>
                  </div>

                  <!-- Act 7 -->
                  <div class="act-card">
                    <span class="act-number">Act 7</span>
                    <h3>
                      National Financial Reporting Authority (NFRA) Oversight
                    </h3>
                    <p>
                      Conducts audits of funds processed by IIES and ensures
                      proper financial reporting and accountability. Maintains
                      financial transparency standards.
                    </p>
                  </div>
                </div>
              </section>

              <!-- Key Features Section -->
              <!-- <section class="key-features">
                <h2>Key Features of Our Regulatory Framework</h2>
                <div class="features-grid">
                  <div class="feature-item">
                    <span class="feature-icon">🔒</span>
                    <h3>Legal Compliance</h3>
                    <p>
                      All transactions strictly adhere to Indian legal
                      frameworks and international standards
                    </p>
                  </div>
                  <div class="feature-item">
                    <span class="feature-icon">🌐</span>
                    <h3>International Standards</h3>
                    <p>
                      Alignment with global financial regulations and best
                      practices
                    </p>
                  </div>
                  <div class="feature-item">
                    <span class="feature-icon">📊</span>
                    <h3>Transparency</h3>
                    <p>
                      Complete visibility and accountability in all financial
                      operations
                    </p>
                  </div>
                  <div class="feature-item">
                    <span class="feature-icon">⚖️</span>
                    <h3>Accountability</h3>
                    <p>
                      Robust monitoring and reporting mechanisms for all
                      transactions
                    </p>
                  </div>
                </div>
              </section> -->

              <!-- Compliance Section -->
              <!-- <section class="compliance-section">
                <h2>Compliance & Implementation</h2>
                <div class="compliance-content">
                  <div class="compliance-item">
                    <h3>Regular Audits</h3>
                    <p>
                      Comprehensive audits conducted periodically to ensure
                      adherence to all regulatory requirements
                    </p>
                  </div>
                  <div class="compliance-item">
                    <h3>Training Programs</h3>
                    <p>
                      Regular training for IIES officials on latest regulatory
                      changes and compliance requirements
                    </p>
                  </div>
                  <div class="compliance-item">
                    <h3>Documentation</h3>
                    <p>
                      Maintenance of detailed records and documentation for all
                      international transactions
                    </p>
                  </div>
                </div>
              </section> -->
            </div>
          </div>
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
    </script>
  </body>
</html>
