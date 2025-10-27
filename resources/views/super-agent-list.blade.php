<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>List of Support Agent</title>

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
          <h1>List of Registered Facilitation Agent</h1>

          <div class="hero-tabs">
            <a href="/register-fac-agent/super-agent-role" class="hero-tab "
              >
Role of Registered Facilitation Agent</a
            >
            <a href="/register-fac-agent/super-agent-list" class="hero-tab active"
              >List of Registered Facilitation Agent</a
            >
            <a href="/register-fac-agent/super-agent-hire" class="hero-tab"
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
          <span>List of Registered Facilitation Agent</span>
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
                <h2>List of Support Agent</h2>
                <h3>Requirement and Procedure of Registered Agent</h3>
                <p>To obtain a No Objection Certificate (NOC) for any type of foreign fund through the Indian International Economic Service (IIES), it is mandatory to apply through an agent registered under the Department of Economic Affairs (DEA).</p>
                <p>
                    Applications submitted without a registered agent will not be accepted, as these agents are well-versed in all NOC-related procedures, documentation, and regulations. They also possess prior experience in handling such cases, ensuring transparency and efficiency throughout the process.
                </p>
                <p>Any registered agent is permitted to charge a maximum service fee of up to 2% of the total foreign fund amount or a daily professional fee ranging from ₹3,500 to ₹10,000.</p>
                <p>If any agent demands an amount beyond the prescribed limit, a formal complaint can be filed with the Department of Economic Affairs (DEA).</p>
             
             <p>All payments related to NOC services must not be transferred to the agent’s personal account. Instead, the payment should be made only to the State Bank of India (SBI) professional account issued by the Ministry specifically for registered agents.</p>
              </section>
            </div>
          </div>

          <!-- This account number is a 13-digit alphanumeric code, for example: -->
          <h2>
            This account number is a 13-digit alphanumeric code, for example:
          </h2>
          <h3 style="color: red">Example - DEA1234567890</h3>
          <p>
            This system ensures that all financial transactions are secure,
            transparent, and fully compliant with government guidelines.
          </p>

          <!-- Agents Directory Table -->
          <div class="agents-directory-container">
            <div class="table-header">
              <h2>Agents Directory — 292 Records</h2>
              <div class="search-container">
                <input
                  type="text"
                  id="agentSearch"
                  placeholder="Search by Name, Code, or Experience (e.g., 'Anand' or '45783220' or '8')"
                />
              </div>
            </div>

            <div class="table-responsive">
              <table class="agents-table" id="agentsTable">
                <thead>
                  <tr>
                    <th>SLNo.</th>
                    <th>Agent Name</th>
                    <th>Agent Code</th>
                    <th>Experience (Years)</th>
                  </tr>
                </thead>
                <tbody id="agentsTableBody">
                  <!-- Table rows will be populated by JavaScript -->
                </tbody>
              </table>
            </div>

            <div class="table-footer">
              <div class="pagination-info" id="paginationInfo"></div>
              <div class="pagination-controls">
                <button id="prevPage" class="pagination-btn">Previous</button>
                <div id="paginationNumbers" class="pagination-numbers"></div>
                <button id="nextPage" class="pagination-btn">Next</button>
              </div>
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

      // Agents Directory Table Functionality
      document.addEventListener("DOMContentLoaded", function () {
        // Dynamic data from API
        let agentsData = [];

        const tableBody = document.getElementById("agentsTableBody");
        const searchInput = document.getElementById("agentSearch");
        const prevBtn = document.getElementById("prevPage");
        const nextBtn = document.getElementById("nextPage");
        const paginationNumbers = document.getElementById("paginationNumbers");
        const paginationInfo = document.getElementById("paginationInfo");

        let currentPage = 1;
        const recordsPerPage = 20;
        let filteredData = [];

        // Load agents data from API
        async function loadAgentsData() {
          try {
            const response = await fetch('/api/agents');
            const data = await response.json();
            agentsData = data.agents;
            filteredData = [...agentsData];
            initTable();
          } catch (error) {
            console.error('Error loading agents data:', error);
            // Fallback to empty state
            initTable();
          }
        }

        // Initialize the table
        function initTable() {
          renderTable();
          setupPagination();
          updatePaginationInfo();
        }

        // Render table rows
        function renderTable() {
          tableBody.innerHTML = "";

          const startIndex = (currentPage - 1) * recordsPerPage;
          const endIndex = startIndex + recordsPerPage;
          const pageData = filteredData.slice(startIndex, endIndex);

          pageData.forEach((agent) => {
            const row = document.createElement("tr");
            row.innerHTML = `
        <td>${agent.slNo}</td>
        <td>${agent.name}</td>
        <td>${agent.code}</td>
        <td>${agent.experience}</td>
      `;
            tableBody.appendChild(row);
          });
        }

        // Setup pagination controls
        function setupPagination() {
          const totalPages = Math.ceil(filteredData.length / recordsPerPage);
          paginationNumbers.innerHTML = "";

          // Show limited page numbers for better UX
          const maxVisiblePages = 5;
          let startPage = Math.max(
            1,
            currentPage - Math.floor(maxVisiblePages / 2)
          );
          let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

          // Adjust if we're near the beginning
          if (endPage - startPage + 1 < maxVisiblePages) {
            startPage = Math.max(1, endPage - maxVisiblePages + 1);
          }

          // First page button if needed
          if (startPage > 1) {
            const firstPageBtn = document.createElement("span");
            firstPageBtn.className = "page-number";
            firstPageBtn.textContent = "1";
            firstPageBtn.addEventListener("click", () => goToPage(1));
            paginationNumbers.appendChild(firstPageBtn);

            if (startPage > 2) {
              const ellipsis = document.createElement("span");
              ellipsis.textContent = "...";
              ellipsis.style.padding = "8px 12px";
              paginationNumbers.appendChild(ellipsis);
            }
          }

          // Page number buttons
          for (let i = startPage; i <= endPage; i++) {
            const pageBtn = document.createElement("span");
            pageBtn.className = `page-number ${
              i === currentPage ? "active" : ""
            }`;
            pageBtn.textContent = i;
            pageBtn.addEventListener("click", () => goToPage(i));
            paginationNumbers.appendChild(pageBtn);
          }

          // Last page button if needed
          if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
              const ellipsis = document.createElement("span");
              ellipsis.textContent = "...";
              ellipsis.style.padding = "8px 12px";
              paginationNumbers.appendChild(ellipsis);
            }

            const lastPageBtn = document.createElement("span");
            lastPageBtn.className = "page-number";
            lastPageBtn.textContent = totalPages;
            lastPageBtn.addEventListener("click", () => goToPage(totalPages));
            paginationNumbers.appendChild(lastPageBtn);
          }

          // Update button states
          prevBtn.disabled = currentPage === 1;
          nextBtn.disabled = currentPage === totalPages || totalPages === 0;
        }

        // Update pagination info text
        function updatePaginationInfo() {
          const totalRecords = filteredData.length;
          const startRecord =
            totalRecords > 0 ? (currentPage - 1) * recordsPerPage + 1 : 0;
          const endRecord = Math.min(
            currentPage * recordsPerPage,
            totalRecords
          );

          paginationInfo.textContent = `Showing ${startRecord} to ${endRecord} of ${totalRecords} entries`;
        }

        // Go to specific page
        function goToPage(page) {
          currentPage = page;
          renderTable();
          setupPagination();
          updatePaginationInfo();
        }

        // Search functionality
        function handleSearch() {
          const searchTerm = searchInput.value.toLowerCase();

          if (searchTerm === "") {
            filteredData = [...agentsData];
          } else {
            filteredData = agentsData.filter(
              (agent) =>
                agent.name.toLowerCase().includes(searchTerm) ||
                agent.code.includes(searchTerm) ||
                agent.experience.toString().includes(searchTerm)
            );
          }

          currentPage = 1;
          renderTable();
          setupPagination();
          updatePaginationInfo();
        }

        // Event listeners
        searchInput.addEventListener("input", handleSearch);
        prevBtn.addEventListener("click", () => goToPage(currentPage - 1));
        nextBtn.addEventListener("click", () => goToPage(currentPage + 1));

        // Load agents data and initialize the table
        loadAgentsData();
      });
    </script>
  </body>
</html>
