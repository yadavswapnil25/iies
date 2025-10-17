<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Guidelines for IIES Officials</title>

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
          <h1>Documents</h1>

          <div class="hero-tabs">
            <a href="/issuance-noc" class="hero-tab"
              >Guideline for Issuance NOC</a
            >
            <a href="/iies-officials" class="hero-tab"
              >Guidelines for IIES Officials</a
            >
            <a href="/super-agent" class="hero-tab active"
              >Guideline for Support Agent</a
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
          <a href="#">Documents</a>
          <span class="separator">/</span>
          <span>Guideline for Support Agent</span>
        </div>
      </div>
    </div>

    <!-- MAIN CONTENT -->
    <main id="maincontent" class="page-content" role="main">
      <div class="page-container">
        <div class="page-main otherpage">
          <div class="officials-content">
            <h2>Guideline for Support Agent</h2>

            <!-- Code of Conduct Sections -->
            <div class="conduct-section">
              <h3>Indian International Economic Service (IIES) Agent</h3>
              Agents play a vital role in the Indian International Economic
              Service (IIES). These agents are registered under the
              <strong>Department of Economic Affairs</strong> and their main
              task is to assist clients in obtaining a No Objection Certificate
              (NOC) for their foreign funds. The agent not only compiles and
              verifies all the client's documents but also performs the duty of
              presenting the client's fund details to the authorities and acting
              as the primary identifier for the process. Furthermore, the agent
              handles responsibilities like preparing the NOC application,
              filing, monitoring the approval, and guiding the client after the
              NOC is received. Without them, completing the NOC process becomes
              difficult and complicated.
            </div>

            <!-- IIES Agent Guidelines -->
            <h3>IIES Agent Guidelines</h3>

            <div class="role-section">
              <h3>Registration and Qualification</h3>
              <ol class="numbered-list">
                <li>
                  The agent must be registered only with the Department of
                  Economic Affairs.
                </li>
                <li>
                  The agent's qualification and experience must be according to
                  the standards set by the IIES.
                </li>
                <li>
                  The agent's function is only to represent the client and
                  verify documents in the NOC process.
                </li>
              </ol>
            </div>

            <div class="role-section role-senior">
              <h3>Document Collection and Verification</h3>
              <ol class="numbered-list">
                <li>
                  Collecting all necessary documents from the client, such as:
                  bank statements, source of foreign funds, identity proof, tax
                  returns, etc.
                </li>
                <li>
                  Identifying any error or deficiency and ensuring its immediate
                  correction.
                </li>
              </ol>
            </div>

            <div class="role-section role-mid">
              <h3>NOC Application Preparation and Filing</h3>
              <ol class="numbered-list">
                <li>
                  Filling the NOC application and submitting it to the IIES on
                  time, attaching all documents.
                </li>
                <li>
                  Preparing the application in accordance with the rules of the
                  IIES and the Department of Economic Affairs.
                </li>
                <li>Ensuring that there are no errors in the application.</li>
              </ol>
            </div>

            <div class="role-section role-junior">
              <h3>Client Representation</h3>
              <ol class="numbered-list">
                <li>
                  Becoming the client's official representative in the
                  application process.
                </li>
                <li>
                  Providing clear and verified answers to the authorities'
                  questions.
                </li>
                <li>
                  Confirming the legitimacy and source of the client's funds.
                </li>
              </ol>
            </div>

            <div class="role-section role-group">
              <h3>Approval and Follow-up</h3>
              <ol class="numbered-list">
                <li>Monitoring every stage of the application.</li>
                <li>
                  Immediately providing any required documents or corrections.
                </li>
                <li>
                  Ensuring the NOC process is completed on time and without
                  error.
                </li>
              </ol>
            </div>

            <div class="role-section role-training">
              <h3>Responsibilities After NOC Receipt</h3>
              <ol class="numbered-list">
                <li>
                  Ensuring that all details in the NOC are correct and complete.
                </li>
                <li>
                  Explaining the correct usage of the NOC and the further
                  process to the client.
                </li>
              </ol>
            </div>

            <div class="role-section">
              <h3>Other Responsibilities</h3>
              <ol class="numbered-list">
                <li>Providing financial and legal advice to the client.</li>
                <li>
                  Informing the client about new guidelines and rules of the
                  IIES..
                </li>
                <li>
                  Acting as an intermediary between the client and the
                  authorities.
                </li>
              </ol>
            </div>
            <div class="role-section role-group">
              <h3>Rules and Discipline</h3>
              <ol class="numbered-list">
                <li>Not presenting false or misleading documents.</li>
                <li>
                  Ensuring complete attention to the security and
                  confidentiality of the client's funds.
                </li>
                <li>
                  Registration may be cancelled if a violation of rules or
                  irregularity is found.
                </li>
              </ol>
            </div>
            <div class="final-note">
              <h3>Conclusion</h3>
              <p>
                The agent is not just an assistant in the NOC process but also
                the client's guardian, representative, and guide. A correct and
                honest agent makes the NOC process smooth and fast.
              </p>
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
