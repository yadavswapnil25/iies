<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>NOC Process</title>

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
        <h1>NOC Process</h1>

                    
          <div class="hero-tabs">
            <a href="/noc-process" class="hero-tab active">NOC Process</a>
            <a href="/proc-guide" class="hero-tab">Procedure &amp; Guidelines</a>
            <a href="/object-certificate" class="hero-tab">Fee of No Objection Certificate</a>
           
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
          <span>Services</span>
          <span class="separator">/</span>
          <span>NOC Process</span>
        </div>
      </div>
    </div>

    <!-- MAIN CONTENT -->
    <main id="maincontent" class="page-content" role="main">
      <div class="page-container">

        <div class="page-main otherpage">
          <div class="officials-content">
            <h2>Procedure for Issuance of NOC</h2>

            <div class="preamble-section">
              <h3>Procedure for Issuance of No Objection Certificate (NOC) for International Funds by the Indian International Economic Service (IIES)</h3>
              <p>
                As per the directives of the Ministry of Finance, Government of India, the Indian International Economic Service (IIES) has been authorized to issue a No Objection Certificate (NOC) to both Indian citizens and Persons of Indian Origin (PIOs) in respect of their international or foreign funds. This certificate serves as an official document certifying that there are no financial, legal, or regulatory objections from the Government of India or any financial authority regarding the said international amount, and that all statutory formalities have been duly completed for its withdrawal or utilization.
              </p>
            </div>

           

            <!-- Initial Application Procedure for International Funds -->
            <div class="role-section">
              <h3>Initial Application Procedure for International Funds</h3>
              <p>For any form of international fund — whether received as investment, donation, grant, foreign aid, or inheritance — the owner or recipient of the amount must first obtain a Payment Ledger Book from the Indian International Finance Commission (IIFC).</p>
              <p>This ledger must include full details of the received international funds, such as:</p>
              <ol class="numbered-list">
                <li>The total amount received,
                </li>
                <li>
                 Name of the source country,
                </li>
                <li>
                  Transaction ID,
                </li>
                <li>
                  Date of receipt,
                </li>
                <li>Beneficiary’s banking details. Purpose or nature of the fund,</li>
              </ol>
            </div>

            <div class="role-section role-senior">
              <h3>International Revenue Accounting and Certification</h3>
              <p>In all cases of international monetary transactions, accounting and verification of the received funds shall be conducted by the National Financial Reporting Authority (NFRA) — a statutory body under the Government of India.</p>
              <p>The NFRA ensures that all foreign funds received within India comply with the provisions of the Foreign Contribution Regulation Act (FCRA) and the established Indian financial transparency standards.</p>
              <p>The NFRA examines whether the source of funds is legitimate and that the purpose of utilization aligns with India’s lawful economic and social interests. Upon successful verification, the applicant is issued a Certificate of International Revenue Accounting and Financial Compliance by the NFRA.</p>
            </div>

            <div class="role-section role-mid">
              <h3>Obtaining the Form-28 Certificate from the International Finance Commission</h3>
             <p>After receiving certification from the NFRA, the applicant must apply to the Indian International Finance Commission (IIFC) for issuance of the Form-28 Certificate. This certificate officially confirms that the international funds have been duly approved under the financial guidelines of the Government of India and that there are no existing legal or administrative restrictions on their use or transfer.</p>
            </div>

            <div class="role-section role-junior">
              <h3>Payment and Regulation of NOC Fees</h3>
              <p>Once the Form-28 Certificate has been obtained, the applicant is required to pay the No Objection Certificate (NOC) Fee. This fee is determined annually based on the total value and category of the international funds (such as donation, grant, investment, etc.). The rate of NOC fee is revised periodically as per notifications published in the Gazette of the Ministry of Finance. The fee can be paid through the official portal of the Indian International Economic Service or directly via the IIFC Treasury Department.</p>
            </div>

              <div class="role-section role-junior">
              <h3>Issuance of the Final No Objection Certificate (Form 28-B)</h3>
              <p>Upon successful payment of the NOC fee, the applicant is issued the Final No Objection Certificate (Form 28-B). This certificate, issued by the Indian International Economic Service, serves as the final and legally valid document confirming that there are no pending objections or restrictions by the Government of India on the said international funds.</p>
            </div>

            <div class="role-section role-group">
              <h3>Once Form 28-B is issued:</h3>
              <ol class="numbered-list">
                <li>
                  All temporary or permanent restrictions imposed on the international funds are permanently lifted,
                </li>
                <li>
                  The process of withdrawal, transfer, or investment of the funds can officially begin, and The funds can be utilized lawfully in accordance with the applicable financial and statutory provisions.
                </li>
               
              </ol>
            </div>


            <div class="final-note">
              <h3>Conclusion</h3>
              <p>
                The entire procedure aims to ensure that every international fund received in India adheres to the highest standards of financial transparency, legal compliance, and economic integrity. The Indian International Economic Service, under the supervision of the Ministry of Finance, continues to work diligently to strengthen, secure, and regulate international financial transactions in alignment with the economic policies of the Government of India.
              </p>
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
  </body>
</html>
