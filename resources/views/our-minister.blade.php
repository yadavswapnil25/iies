<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Our Minister</title>
    @include('partials.favicons')

    <!-- External CSS -->
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
        crossorigin="anonymous" />
    <style>
        /* Hindi language specific styling */
        .hindi-text {
            display: none;
        }

        body.hindi .hindi-text {
            display: block;
        }

        body.hindi .english-text {
            display: none;
        }

        /* Language toggle button styling */
        .language-dropdown {
            position: relative;
            display: inline-block;
        }

        .language-menu {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            right: 0;
        }

        .language-menu div {
            padding: 8px 12px;
            cursor: pointer;
        }

        .language-menu div:hover {
            background-color: #f1f1f1;
        }

        .language-dropdown.show .language-menu {
            display: block;
        }
    </style>
</head>

<body>
    @include('partials.header')
    <!-- HERO SECTION -->
    <section class="page-hero">
        <div class="hero-inner">
            <div class="hero-content">
                <h1>
                    <span class="english-text" style="font-size: 2.5rem">Our Minister</span>
                    <span class="hindi-text" style="font-size: 2.5rem">हमारे मंत्री</span>
                </h1>
                <div class="hero-tabs">
                    <a href="/about/iies" class="hero-tab">
                        <span class="english-text">About IIES</span>
                        <span class="hindi-text">आईआईईएस के बारे में</span>
                    </a>
                    <a href="/about/our-minister" class="hero-tab active">
                        <span class="english-text">Our Minister</span>
                        <span class="hindi-text">हमारे मंत्री</span>
                    </a>
                    <a href="/about/our-performance" class="hero-tab">
                        <span class="english-text">Our Performance</span>
                        <span class="hindi-text">हमारा प्रदर्शन</span>
                    </a>
                    <a href="/about/our-fin-min" class="hero-tab">
                        <span class="english-text">Office of The Finance Minister</span>
                        <span class="hindi-text">वित्त मंत्री का कार्यालय</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <div class="breadcrumb-section">
        <div class="breadcrumb-inner">
            <div class="breadcrumb">
                <a href="/">
                    <span class="english-text">Home</span>
                    <span class="hindi-text">मुखपृष्ठ</span>
                </a>
                <span class="separator">/</span>
                <span>
                    <span class="english-text">Our Minister</span>
                    <span class="hindi-text">हमारे मंत्री</span>
                </span>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main id="maincontent" class="page-content" role="main">
        <div class="page-container">
            <div class="page-main otherpage">
                <!-- About the Institution -->
                <h2>
                    <span class="english-text">About the Institution</span>
                    <span class="hindi-text">संस्था के बारे में</span>
                </h2>
                <p>
                    <span class="english-text">
                        {{ optional($about)->about_en ?: 'The Indian International Economic Service (IIES) functions under the IIES, Government of India. Although it is a voluntary organization, it operates under the leadership of Finance Minister Smt. Nirmala Sitharaman and Minister of State Shri Pankaj Chaudhary.' }}
                    </span>
                    <span class="hindi-text">
                        {{ optional($about)->about_hi ?: 'भारतीय अंतर्राष्ट्रीय आर्थिक सेवा (आईआईईएस) वित्त मंत्रालय, भारत सरकार के अधीन कार्य करती है। हालाँकि यह एक स्वैच्छिक संगठन है, यह वित्त मंत्री श्रीमती निर्मला सीतारमण और राज्य मंत्री श्री पंकज चौधरी के नेतृत्व में संचालित होती है।' }}
                    </span>
                </p>

                <!-- Minister Cards Section -->
                <div class="minister-cards-section">
                    <div class="minister-cards-grid">
                        @forelse($ministers as $minister)
                        <div class="minister-card-full">
                            <div class="minister-image">
                                <img src="{{ $minister->image_url }}" alt="{{ $minister->name }}" />
                            </div>
                            <div class="minister-details">
                                <h3>
                                    <span class="english-text">{{ $minister->name }}</span>
                                    @if($minister->hindi_name)
                                    <span class="hindi-text">{{ $minister->hindi_name }}</span>
                                    @endif
                                </h3>
                                <p class="minister-designation">
                                    <span class="english-text">{{ $minister->designation }}</span>
                                    @if($minister->hindi_designation)
                                    <span class="hindi-text">{{ $minister->hindi_designation }}</span>
                                    @endif
                                </p>
                                @if($minister->bio || $minister->hindi_bio)
                                <div class="minister-bio">
                                    <p>
                                        @if($minister->bio)
                                        <span class="english-text">{{ $minister->bio }}</span>
                                        @endif
                                        @if($minister->hindi_bio)
                                        <span class="hindi-text">{{ $minister->hindi_bio }}</span>
                                        @endif
                                    </p>
                                </div>
                                @endif
                            </div>
                        </div>
                        @empty
                        <!-- Fallback static content if no ministers configured -->
                        <div class="minister-card-full">
                            <div class="minister-image">
                                <img src="/uploads/nirmal-sitaraman-finance-minister_0.jpg" alt="Smt. Nirmala Sitharaman" />
                            </div>
                            <div class="minister-details">
                                <h3>
                                    <span class="english-text">Smt. Nirmala Sitharaman</span>
                                    <span class="hindi-text">श्रीमती निर्मला सीतारमण</span>
                                </h3>
                                <p class="minister-designation">
                                    <span class="english-text">Minister of Finance and Corporate Affairs</span>
                                    <span class="hindi-text">वित्त और कॉर्पोरेट मामलों की मंत्री</span>
                                </p>
                            </div>
                        </div>
                        <div class="minister-card-full">
                            <div class="minister-image">
                                <img src="/uploads/pankaj-chaudhary.png" alt="Shri Pankaj Chaudhary" />
                            </div>
                            <div class="minister-details">
                                <h3>
                                    <span class="english-text">Shri Pankaj Chaudhary</span>
                                    <span class="hindi-text">श्री पंकज चौधरी</span>
                                </h3>
                                <p class="minister-designation">
                                    <span class="english-text">Minister of State for Finance</span>
                                    <span class="hindi-text">वित्त राज्य मंत्री</span>
                                </p>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>

                <!-- PDF Download Buttons Section -->
                <div class="pdf-buttons-section">
                    <h2>
                        <span class="english-text">Related Documents</span>
                        <span class="hindi-text">संबंधित दस्तावेज़</span>
                    </h2>
                    <div class="pdf-buttons-grid">
                        <!-- PDF Button 1 -->
                        <a
                            href="{{ optional($links)->url1 ?: 'https://dea.gov.in/files/inline-documents/ListMinisters.pdf' }}"
                            class="pdf-button pdf-button-1"
                            target="_blank">
                            <span class="english-text">FORMER MINISTER </span>
                            <span class="hindi-text">बजट भाषण 2023-24</span>
                        </a>

                        <!-- PDF Button 2 -->
                        <a
                            href="{{ optional($links)->url2 ?: 'https://dea.gov.in/files/inline-documents/02-list-of-council-minister.pdf' }}"
                            class="pdf-button pdf-button-2"
                            target="_blank">
                            <span class="english-text">LIST OF COUNCIL OF MINISTER</span>
                            <span class="hindi-text">आर्थिक समीक्षा 2022-23</span>
                        </a>

                        <!-- PDF Button 3 -->
                        <a
                            href="{{ optional($links)->url3 ?: 'https://dea.gov.in/files/inline-documents/List_Employees_MINISTRY_FINANCE.pdf' }}"
                            class="pdf-button pdf-button-3"
                            target="_blank">
                            <span class="english-text">LIST OF OFFICER / STAFF</span>
                            <span class="hindi-text">वार्षिक रिपोर्ट 2022-23</span>
                        </a>

                        <!-- PDF Button 4 -->
                        <a
                            href="{{ optional($links)->url4 ?: 'https://dea.gov.in/files/inline-documents/foreign_visit_details_2025-26_1st_quarter.pdf' }}"
                            class="pdf-button pdf-button-4"
                            target="_blank">
                            <span class="english-text">FOREIGN DEPUTATION JS LEVEL & ABOVE</span>
                            <span class="hindi-text">आईआईईएस दिशानिर्देश</span>
                        </a>
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

        // Language functionality is handled by common language-switcher.js

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
    <script src="/js/language-switcher.js"></script>
</body>

</html>