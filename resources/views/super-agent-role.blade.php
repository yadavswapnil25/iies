<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Support Agent Role</title>

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
          <h1>Role of Registered Facilitation Agent</h1>

          <div class="hero-tabs">
            <a href="/super-agent-role" class="hero-tab active"
              >
Role of Registered Facilitation Agent</a
            >
            <a href="/super-agent-list" class="hero-tab"
              >List of Registered Facilitation Agent</a
            >
            <a href="/super-agent-hire" class="hero-tab"
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
          <a href="index.html">Home</a>
          <span class="separator">/</span>
          <a href="#">Registered Facilitation Agent</a>
          <span class="separator">/</span>
          <span>Role of Registered Facilitation Agent</span>
        </div>
      </div>
    </div>
    <!-- MAIN CONTENT -->
    <main id="maincontent" class="page-content" role="main">
      <div class="page-container">
         <div class="page-main otherpage">
          <div class="acts-policy-page">
            <div class="acts-policy-content">
              <!-- Introduction Section -->
              <section class="intro-section">
                <h2>Support Agent Role</h2>
                <h3>The Crucial Role of Private Agents in the Indian International Economic Service (IIES)</h3>
                <p>
                  Private support agents play an extremely important role in the Indian International Economic Service (IIES). These agents are registered under the Department of Economic Affairs and their main function is to help clients obtain an NOC (No Objection Certificate) for their foreign funds. Without an agent, no individual can obtain an NOC for their foreign funds. The agent not only compiles and verifies all of the client's documents but also acts as the first identifier in the process, presenting the client's fund details to the authorities. Furthermore, the agent handles all responsibilities from preparing the NOC application, filing, monitoring the approval, and guiding the client after the NOC is received. Without them, completing the NOC process becomes difficult and complicated.
                </p>
                
              </section>


              <!-- Acts & Policies Grid -->
              <section class="acts-section">
                <h2
                  style="color: var(--brand-dark);
                    font-size: 2rem;
                    margin-bottom: 30px;
                    text-align: center;
                  "
                >
                  Detailed Roles and Responsibilities of the Agent
                </h2>

                <div class="acts-grid">
                  <!-- Act 1 -->
                  <div class="act-card">
             
                    <h3>Compilation and Scrutiny of Client Documents</h3>
                    <li>Collecting all necessary documents from the client, such as bank statements, source of foreign funds, tax returns, identity proof, etc.</li><br>
                    <li>Ensuring the accuracy and completeness of the documents.</li><br>
                    <li>Contacting the client to correct incomplete or incorrect documents.</li>

                  </div>

                  <!-- Act 2 -->
                  <div class="act-card">
           
                    <h3>Preparation and Filing of the NOC Application</h3>
                   <li>Preparing the NOC application along with all documents.</li><br>
                    <li>Ensuring the application conforms to the guidelines of the IIES and the Department of Economic Affairs.</li><br>
                    <li>Submitting the application on time and ensuring correct filing.</li>
                  </div>

                  <!-- Act 3 -->
                  <div class="act-card">
                  
                    <h3>Representation of the Client Before Authorities</h3>
                    <li>Becoming the client's first point of contact and representative during the application process.</li><br>
                    <li>Providing clear and verified answers to any questions from the authorities.</li><br>
                    <li>Confirming the source and legitimacy of the funds</li>
                  </div>

                  <!-- Act 4 -->
                  <div class="act-card">
           
                    <h3>Role as the First Identifier</h3>
                    <li>Confirming the validity and source of the client's funds.</li><br>
                    <li>Ensuring the funds have not come from any illegal or suspicious source.</li><br>
                   
                  </div>

                  <!-- Act 5 -->
                  <div class="act-card">
                   
                    <h3>Approval and Follow-up</h3>
                    <li>Monitoring every stage of the application.</li><br>
                    <li>Immediately fulfilling any requirement for additional documents or corrections.</li><br>
                    <li>Ensuring the NOC approval process is completed in a timely manner.</li>
                  </div>

                  <!-- Act 6 -->
                  <div class="act-card">
                    
                    <h3>Responsibilities After NOC Issuance</h3>
                     <li>Handing over the documents to the client after the NOC is received</li><br>
                    <li>Ensuring all details in the NOC are correct and complete.</li><br>
                    <li>Explaining the correct use of the NOC and the subsequent process to the client.</li>
                  </div>

                  <!-- Act 7 -->
                  <div class="act-card">
          
                    <h3>
                      Other Potential Roles
                    </h3>
                     <li>Providing financial and legal advice to the client.</li><br>
                    <li>Keeping the client informed of new IIES guidelines and rules.</li><br>
                    <li>Acting as an intermediary between the client and the authorities.</li>
                  </div>
                </div>
              </section>


            </div>
          </div>
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
    </script>
  </body>
</html>
