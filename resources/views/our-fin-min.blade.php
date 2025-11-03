<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Office of The Finance Minister</title>
    @include('partials.favicons')

    <!-- External CSS -->
    <link rel="stylesheet" href="/css/style.css" />
      <link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous" />
  </head>
  <body>
  @include('partials.header')

    <!-- HERO SECTION -->
    <section class="page-hero">
      <div class="hero-inner">
        <div class="hero-content">
          <h1>Office of The Finance Minister</h1>
          <div class="hero-tabs">
            <a href="/about" class="hero-tab"> About IIES</a>
            <a href="/our-minister" class="hero-tab">Our Minister</a>
            <a href="/our-performance" class="hero-tab">Our Performance</a>
            <a href="/our-fin-min" class="hero-tab active"
              >Office of The Finance Minister</a
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
          <span>Office of The Finance Minister</span>
        </div>
      </div>
    </div>

     <!-- MAIN CONTENT -->
    <main id="maincontent" class="page-content" role="main">
      <div class="page-container">
        <div class="page-main otherpage">

           <div class="law-content">
            <!-- Indian International Economic Service (IIES): -->
            <div class="regulation-section">
              <h3>Indian International Economic Service (IIES)</h3>
              <p>The <strong>Office of the Finance Minister</strong>, under whose purview the <strong>Indian International Economic Service (IIES)</strong>operates, serves as the central authority for supervising and guiding all financial, economic, and international fund regulatory functions. This office ensures that every financial operation, including the issuance of No Objection Certificates (NOCs) for foreign funds, remains aligned with the fiscal policies and regulatory framework of the Government of India.</p>
              <p>The Finance Minister’s office plays a vital role in maintaining transparency, accountability, and financial integrity all economic activities connected with international fund movements. All key directives, approvals, and policy guidelines concerning IIES originate from this office.</p>
            </div>


                  <!-- The Finance Minister, along with the Minister of State for Finance, provides oversight on the following areas::-->
                  <div class="regulation-section">
                    <h3>The Finance Minister, along with the Minister of State for Finance, provides oversight on the following areas:</h3>
            
                    <ul>
                      <li>
                       Approval of major financial regulations related to international funding.


                      </li>
                      <li>
                       Monitoring the overall performance of IIES in compliance with government objectives.
                      </li>
                      <li>
                        Ensuring that foreign fund inflows are legitimate, traceable, and used for lawful purposes.

                      </li>
                      <li>
                        Encouraging transparency in the NOC issuance process.

                      </li>
                      <li>Reviewing annual financial progress and national revenue contributions made through IIES operations.</li>
                    </ul>
                  </div>

           
                    <!-- Challenges and Key Considerations: -->
                    <div class="regulation-section">
                      <h3>Challenges and Key Considerations:</h3>
                    
                      <ul>
                        <li>
                          Total NOC Value Issued: Approximately ₹12,00,000 crore between 2017 and 2025/26 (as per your information).
                        </li>
                        <li>
                          Countries Involved: NOCs were granted for funds originating from major countries including the United States, China, England, Russia, the UAE, Kuwait, Sri Lanka, France, and Germany, among others.
                        </li>
                        <li>
                         Official Recognition: Officers of IIES have been honored by the IIES for their exemplary contribution in managing foreign fund compliance.
                        </li>                       
                      </ul>
                      <p>In addition, the office works closely with the <strong>Department of Economic Affairs (DEA)</strong>, the <strong>Reserve Bank of India (RBI)</strong>, and other financial institutions to ensure proper implementation of foreign fund policies under IIES supervision.</p>
                      <p>Through this integrated system, the <strong>Office of the Finance Minister </strong> ensures that every NOC- related activity of IIES contributes effectively to the nation’s economic stability, fiscal discipline, and international credibility.</p>
                    </div>
            
                              
                  

            </div>  <!--law end-->
          </div> <!--main content end-->
        
    
        </div>
      </div>
    </main>
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
