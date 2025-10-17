<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Our Performance</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" />
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
          <h1>Our Performance</h1>
          <div class="hero-tabs">
            <a href="/about" class="hero-tab "> About IIES</a>
            <a href="/our-minister" class="hero-tab">Our Minister</a>
            <a href="/our-performance" class="hero-tab active">Our Performance</a>
            <a href="/our-fin-min" class="hero-tab"
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
          <span>Our Performance</span>
        </div>
      </div>
    </div>

    <!-- MAIN CONTENT -->
    <main id="maincontent" class="page-content" role="main">
      <div class="page-container">

        <div class="page-main otherpage">

           <div class="law-content">
            <!-- Summary (Paragraph): -->
            <div class="regulation-section">
              <h3>Summary (Paragraph):</h3>
              <p>The Indian International Economic Service (IIES), operating under the supervision of the Ministry of Finance, has played a crucial role in managing and issuing NOCs (No Objection Certificates) for foreign funds between the years 2017 and 2025–26. During this period, IIES has issued NOCs for foreign funds amounting to approximately ₹12 lakh crore (1.2 trillion rupees). In recognition of its transparent and efficient functioning, officers of IIES have been honored by the Ministry of Finance. Additionally, any illegal or suspicious funds identified during investigations were seized and handed over to the Government of India, ensuring compliance with financial regulations and contributing to national financial security.</p>
              <h3>Major Achievements:</h3>
              <ul>
                <li>
                  Total NOC Value Issued: Approximately ₹12,00,000 crore between 2017 and 2025/26 (as per your information).
                </li>
                <li>
                  Countries Involved: NOCs were granted for funds originating from major countries including the United States, China, England, Russia, the UAE, Kuwait, Sri Lanka, France, and Germany, among others.
                </li>
                <li>
                  Official Recognition: Officers of IIES have been honored by the Ministry of Finance for their exemplary contribution in managing foreign fund compliance.
                </li>
                <li>
                  Action Against Illegal Funds: Any funds found to be illegitimate or non-compliant were confiscated and handed over to the government, strengthening anti-money laundering measures.
                </li>
              </ul>
            </div>


                  <!-- Impact and Significance:-->
                  <div class="regulation-section">
                    <h3>Impact and Significance:</h3>
            
                    <ul>
                      <li>
                        <strong>Economic Oversight:</strong> The issuance of NOCs for large-scale foreign funds ensured government supervision and legitimacy in the flow of capital.


                      </li>
                      <li>
                        <strong>Credibility Growth:</strong> Approval of funds from major countries and the Ministry’s recognition enhanced the institution’s credibility both nationally and internationally.
                      </li>
                      <li>
                        <strong>Legal Compliance:</strong>
                        By seizing illegal funds, IIES demonstrated its commitment not only to approval but also to strict enforcement of regulations.
                      </li>
                      <li>
                        <strong>Transparency & Auditability:</strong>
                        Managing such a large volume of funds required transparency and audit mechanisms, which helped in maintaining reliable data for policy decisions.


                      </li>
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
                         Official Recognition: Officers of IIES have been honored by the Ministry of Finance for their exemplary contribution in managing foreign fund compliance.
                        </li>
                       
                      </ul>
                    </div>
            
              

                  
                 
                <!-- Conclusion: -->
                    <div class="conclusion-section">
                      <h3>Conclusion:</h3>
                      <p>Based on the details provided, IIES has shown remarkable performance between 2017 and 2025/26 by issuing NOCs worth ₹12 lakh crore in foreign funds. At the same time, by taking firm action against illegal inflows, the institution has helped protect national interests and maintain financial discipline. Its recognition by the Ministry of Finance highlights the institution’s credibility, efficiency, and regulatory alignment.</p>
                     
                     
                    </div>
                 
                  

            </div>  <!--law end-->
          </div> <!--main content end-->
        

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
  </body>
</html>
