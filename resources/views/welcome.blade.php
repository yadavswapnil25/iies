<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ministry of Finance</title>
    <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous" />

  </head>
  <body lang="en">
    <!-- TOP GOVERNMENT STRIP -->
    @include('partials.header')

    <!-- SLIDER -->
    <section class="hero-slider" aria-label="Homepage carousel">
      <div class="slider-track" id="sliderTrack">
        <div class="slide">
          <img src="uploads/logo-1600x400-01.png" alt="Slider 1" />
        </div>
        <div class="slide">
          <img src="uploads/slider1.png" alt="Slider 2" />
        </div>
        <div class="slide">
          <img src="uploads/slider2.png" alt="Slider 3" />
        </div>
      </div>

      <button
        class="slider-arrow left"
        id="prevBtn"
        aria-label="Previous slide"
      >
        &#10094;
      </button>
      <button class="slider-arrow right" id="nextBtn" aria-label="Next slide">
        &#10095;
      </button>

      <div class="slider-pager" id="pager">
        <span class="pager-dot active" data-index="0"></span>
        <span class="pager-dot" data-index="1"></span>
        <span class="pager-dot" data-index="2"></span>
      </div>
    </section>

    <!-- LATEST MARQUEE -->
    <div class="latest-wrap">
      <div class="latest" role="region" aria-label="Latest updates">
        <strong class="english-text">Highlights:</strong>
        <strong class="hindi-text">मुख्य आकर्षण:</strong>
        <div class="marquee" aria-hidden="false">
          <div class="items" id="marqueeItems">
            <!-- Content will be updated by JavaScript based on language -->
          </div>
        </div>
      </div>
    </div>

    <!-- ABOUT SECTION -->
    <section
      class="about-section"
      role="region"
      aria-label="About Department of Expenditure"
    >
      <div class="about-container">
        <div class="about-content">
          <h2 class="english-text">Indian International Economic Service</h2>
          <br />
          <h2 class="hindi-text">भारतीय अंतर्राष्ट्रीय आर्थिक सेवा</h2>
          <br />
         
          <p class="english-text">
            The Indian International Economic Service (IIES) is a premier Group
            'A' Central Service of the Government of India, established in the
            year 1961 with the objective of developing professional expertise in
            the fields of economic policy formulation, analysis, and
            international financial cooperation within the government framework.
          </p>
          <p class="hindi-text">
            भारतीय अंतर्राष्ट्रीय आर्थिक सेवा (IIES) भारत सरकार की एक प्रमुख
            समूह 'ए' केंद्रीय सेवा है, जिसकी स्थापना वर्ष 1961 में सरकारी ढांचे
            के भीतर आर्थिक नीति निर्माण, विश्लेषण और अंतर्राष्ट्रीय वित्तीय
            सहयोग के क्षेत्रों में पेशेवर विशेषज्ञता विकसित करने के उद्देश्य से
            की गई थी।
          </p>
          <br />
          <br />
          <a href="about.html" class="read-more-btn">
            <span class="english-text">Read More</span>
            <span class="hindi-text">और पढ़ें</span>
          </a>
        </div>

        <div class="about-image">
          <img
            src="uploads/nirmal-sitaraman-finance-minister_0 (1).jpg"
            alt="Department of Expenditure"
            onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2Y0ZjZmNyIvPjx0ZXh0IHg9IjE1MCIgeT0iMTAwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTYiIGZpbGw9IiM2YjZiNmIiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGR5PSIuM2VtIj5EZXBhcnRtZW50IG9mIEV4cGVuZGl0dXJlPC90ZXh0Pjwvc3ZnPg=='"
          />
       
          <h4 class="english-text">Smt. Nirmala Sitharaman</h4>
    
          <h4 class="hindi-text">भारतीय अंतर्राष्ट्रीय आर्थिक सेवा विभाग</h4>
      
          <p class="english-text">
          Finance Minister(Government of India)
          </p>
          <p class="hindi-text">
            सार्वजनिक वित्तीय प्रबंधन प्रणाली और राज्य वित्त का पर्यवेक्षण
          </p>
        </div>
        <div class="about-image">
          <img
            src="uploads/pankaj-chaudhary.png"
            alt="Department of Expenditure"
            onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2Y0ZjZmNyIvPjx0ZXh0IHg9IjE1MCIgeT0iMTAwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTYiIGZpbGw9IiM2YjZiNmIiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGR5PSIuM2VtIj5EZXBhcnRtZW50IG9mIEV4cGVuZGl0dXJlPC90ZXh0Pjwvc3ZnPg=='"
          />
        
          <h4 class="english-text"> Sri Pankaj Kumar</h4>
  
          <h4 class="hindi-text">भारतीय अंतर्राष्ट्रीय आर्थिक सेवा विभाग</h4>
       
          <p class="english-text">
            Minister of State for Finance 

(Government of India)
          </p>
          <p class="hindi-text">
            सार्वजनिक वित्तीय प्रबंधन प्रणाली और राज्य वित्त का पर्यवेक्षण
          </p>
        </div>
      </div>
    </section>

    <!-- MAIN CONTENT -->
    <main id="maincontent" class="page-main" role="main">
      <!-- LEFT ASIDE - QUICK LINKS -->
      <aside class="left-aside" aria-label="Quick links and contact">
        <div class="aside-box">
          <h4 style="color: var(--brand-dark); margin-bottom: 8px">
            <span class="english-text">Quick Links</span>
            <span class="hindi-text">त्वरित लिंक</span>
          </h4>
          <div class="quick-links">
            <a
              href="#"
              class="quick-link budget"
              style="background-color: #4caf50"
            >
              <div class="quick-link-icon">
                <img
                  src="uploads/EconomicSurvey-removebg-preview.png"
                  alt="Economic Survey"
                />
              </div>
              <div class="quick-link-text">
                <span class="english-text">Economic Survey 2024 - 2025</span>
                <span class="hindi-text">आर्थिक सर्वेक्षण 2024 - 2025</span>
              </div>
            </a>

            <a
              href="#"
              class="quick-link acts"
              style="background-color: #2196f3"
            >
              <div class="quick-link-icon">
                <img
                  src="uploads/PreviousEconomic-removebg-preview.png"
                  alt="Previous Economic Survey"
                />
              </div>
              <div class="quick-link-text">
                <span class="english-text">Previous Economic Survey</span>
                <span class="hindi-text">पिछला आर्थिक सर्वेक्षण</span>
              </div>
            </a>

            <a
              href="#"
              class="quick-link circulars"
              style="background-color: #ff9800"
            >
              <div class="quick-link-icon">
                <img
                  src="uploads/PreviousUnion-removebg-preview.png"
                  alt="Previous Union Budget"
                />
              </div>
              <div class="quick-link-text">
                <span class="english-text">Previous Union Budget</span>
                <span class="hindi-text">पिछला केंद्रीय बजट</span>
              </div>
            </a>

            <a
              href="#"
              class="quick-link tenders"
              style="background-color: #03a9f4"
            >
              <div class="quick-link-icon">
                <img
                  src="uploads/PreviousBudget-removebg-preview.png"
                  alt="Previous Budget Speech"
                />
              </div>
              <div class="quick-link-text">
                <span class="english-text">Previous Budget Speech</span>
                <span class="hindi-text">पिछला बजट भाषण</span>
              </div>
            </a>
          </div>
        </div>

        <div class="aside-box">
          <h4 style="color: var(--brand-dark); margin-bottom: 8px">
            <span class="english-text">Important Downloads</span>
            <span class="hindi-text">महत्वपूर्ण डाउनलोड</span>
          </h4>
          <ul style="padding-left: 18px; color: #333">
            <li class="english-text">Budget Highlights (PDF)</li>
            <li class="hindi-text">बजट मुख्य बिंदु (PDF)</li>
            <li class="english-text">Annual Report (PDF)</li>
            <li class="hindi-text">वार्षिक रिपोर्ट (PDF)</li>
            <li class="english-text">Forms & Templates</li>
            <li class="hindi-text">फॉर्म और टेम्पलेट</li>
          </ul>
        </div>
        <div class="aside-box">
          <h4 style="color: var(--brand-dark); margin-bottom: 8px">
            <span class="english-text">Important Links</span>
            <span class="hindi-text">महत्वपूर्ण डाउनलोड</span>
          </h4>
          <ul style="padding-left: 18px; color: #333">
                  <!-- Login Button -->
             <button class="login-btn" id="loginBtn">
    <span class="english-text">NOC Progress Details</span>
    <span class="hindi-text">बजट मुख्य बिंदु (PDF)</span>
  </button>
            <!-- <li class="english-text">NOC Progress Details </li>
            <li class="hindi-text"></li> -->
          </ul>
        </div>

          <!-- Login Button -->
 
</div>

    <!-- Login Modal -->
    <div class="login-modal" id="loginModal">
      <div class="login-modal-content">
        <div class="login-modal-header">
          <h3>
            <span class="english-text">Login to IIES Portal</span>
            <span class="hindi-text">IIES पोर्टल में लॉगिन करें</span>
          </h3>
          <button class="close-btn" id="closeLoginModal">&times;</button>
        </div>
        <div class="login-modal-body">
          <form id="loginForm">
            <div class="form-group">
              <label for="email">
                <span class="english-text">Email / Unique ID</span>
                <span class="hindi-text">ईमेल / यूनिक आईडी</span>
              </label>
              <input 
                type="text" 
                id="email" 
                name="email" 
                required 
                placeholder="Enter your email or unique ID"
              >
            </div>
            
            <div class="form-group">
              <label for="password">
                <span class="english-text">Password</span>
                <span class="hindi-text">पासवर्ड</span>
              </label>
              <input 
                type="password" 
                id="password" 
                name="password" 
                required 
                placeholder="Enter your password"
              >
            </div>
            
            <div class="form-options">
              <label class="checkbox-group">
                <input type="checkbox" id="rememberMe">
                <span class="english-text">Remember me</span>
                <span class="hindi-text">मुझे याद रखें</span>
              </label>
              <a href="#" class="forgot-password">
                <span class="english-text">Forgot Password?</span>
                <span class="hindi-text">पासवर्ड भूल गए?</span>
              </a>
            </div>
            
            <button type="submit" class="submit-btn">
              <span class="english-text">Login</span>
              <span class="hindi-text">लॉगिन करें</span>
            </button>
          </form>
        </div>
      </div>
    </div>
      </aside>

      <!-- RIGHT: DEPARTMENTS / CARDS -->
      <div>
        <div
          class="cards-grid"
          role="region"
          aria-label="Departments and links"
        >
          <!-- Department Card 1 -->
          <article class="dept-card" aria-labelledby="d1">
            <div class="dept-thumb">
              <img
                src="uploads/International-Taxation1.png"
                alt="International Taxation"
              />
            </div>
            <div class="dept-body">
              <h4 id="d1" class="english-text">International Taxation</h4>
              <h4 id="d1" class="hindi-text">प्रेस विज्ञप्ति</h4>
              <ul>
                <li>
                  <a href="#" target="_blank">
                    <span class="english-text">Tax Treaties | </span>
                    <span class="hindi-text"
                      >मंत्रिमंडल ने कम मूल्य की भीम-यूपीआई लेनदेन (पी2एम) को
                      बढ़ावा देने के लिए प्रोत्साहन योजना को मंजूरी दी</span
                    >
                  </a>
                </li>
                <li>
                  <a href="#" target="_blank">
                    <span class="english-text">Treaty Comparison | </span>
                    <span class="hindi-text"
                      >वित्तीय सेवा विभाग (डीएफएस) ने "विनियामक, निवेश, और
                      व्यवसाय में आसानी (ईओडीबी) सुधार" विषय पर बजटोत्तर वेबिनार
                      की मेजबानी की</span
                    >
                  </a>
                </li>
                <li>
                  <a href="#" target="_blank">
                    <span class="english-text">Transfer Pricing |</span>
                    <span class="hindi-text"
                      >सरकार ने सूक्ष्म, लघु और मध्यम उद्यम (एमएसएमई) विनिर्माण
                      क्षेत्र को मजबूत करने के लिए आपसी क्रेडिट गारंटी योजना को
                      मंजूरी दी, जो 2024-25 की बजट घोषणा को पूरा करती है</span
                    >
                  </a>
                </li>
              </ul>
            </div>
          </article>

          <!-- Department Card 2 -->
          <article class="dept-card" aria-labelledby="d2">
            <div class="dept-thumb">
              <img
                src="uploads/Enforcement-Directorate1.png"
                alt="Enforcement Directorate"
              />
            </div>
            <div class="dept-body">
              <h4 id="d2" class="english-text">Enforcement Directorate</h4>
              <h4 id="d2" class="hindi-text">निविदा</h4>
              <ul>
                <li>
                  <a href="#" target="_blank">
                    <span class="english-text">Red Corner Notice</span>
                    <span class="hindi-text"
                      >निविदा के लिए इन वेबसाइट पर लॉगिन करें</span
                    >
                  </a>
                </li>
                <li>
                  <a href="#" target="_blank">
                    <span class="english-text">FEMA Rule</span>
                    <span class="hindi-text">अधिनियम और नियम</span>
                  </a>
                </li>
               
              </ul>
            </div>
          </article>

          <!-- Department Card 3 -->
          <article class="dept-card" aria-labelledby="d3">
            <div class="dept-body">
              <h4 id="d3" class="english-text">What's News</h4>
              <h4 id="d3" class="hindi-text">ताज़ा खबर</h4>
              <ul>
                <li>
                  <a
                    href="https://financialservices.gov.in/beta/sites/default/files/Advertisment-English-DG-RBI.pdf"
                    target="_blank"
                  >
                    <span class="english-text"
                      >APPLICATIONS INVITED FOR THE POST OF DEPUTY GOVERNOR,
                      RESERVE BANK OF INDIA</span
                    >
                    <span class="hindi-text"
                      >भारतीय रिजर्व बैंक में उप गवर्नर के पद के लिए आवेदन
                      आमंत्रित</span
                    >
                  </a>
                </li>
                <li>
                  <a
                    href="https://financialservices.gov.in/beta/en/events"
                    target="_blank"
                  >
                    <span class="english-text"
                      >Upcoming Events of the Department ​</span
                    >
                    <span class="hindi-text">विभाग की आगामी घटनाएँ</span>
                  </a>
                </li>
              </ul>
            </div>
          </article>

          <!-- Department Card 5 -->
          <article class="dept-card" aria-labelledby="d4">
            <div class="dept-body">
              <h4 id="d4" class="english-text">Vacancies</h4>
              <h4 id="d4" class="hindi-text">रिक्तियां</h4>
              <ul>
                <li>
                  <a href="#">
                    <span class="english-text"
                      >Indian International Economic Service vacancies will
                      start in August 2025</span
                    >
                    <span class="hindi-text"
                      >भारतीय अंतर्राष्ट्रीय आर्थिक सेवा की रिक्तियां अगस्त 2025
                      में शुरू होंगी</span
                    >
                  </a>
                </li>
              </ul>
            </div>
          </article>

          <!-- <article class="dept-card" aria-labelledby="d1">
            <div class="dept-body">
              <h4 id="d1" class="english-text">Press Release</h4>
              <h4 id="d1" class="hindi-text">प्रेस विज्ञप्ति</h4>
              <ul>
                <li>
                  <a
                    href="https://www.pib.gov.in/PressReleasePage.aspx?PRID=2112771"
                    target="_blank"
                  >
                    <span class="english-text"
                      >Cabinet approves Incentive scheme for promotion of
                      low-value BHIM-UPI transactions (P2M)</span
                    >
                    <span class="hindi-text"
                      >मंत्रिमंडल ने कम मूल्य की भीम-यूपीआई लेनदेन (पी2एम) को
                      बढ़ावा देने के लिए प्रोत्साहन योजना को मंजूरी दी</span
                    >
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.pib.gov.in/PressReleasePage.aspx?PRID=2108360"
                    target="_blank"
                  >
                    <span class="english-text"
                      >Department Of Financial Services (DFS) Hosts a Post
                      Budget Webinar On Theme "Regulatory, Investment, And Ease
                      Of Doing Business (EODB) Reforms"</span
                    >
                    <span class="hindi-text"
                      >वित्तीय सेवा विभाग (डीएफएस) ने "विनियामक, निवेश, और
                      व्यवसाय में आसानी (ईओडीबी) सुधार" विषय पर बजटोत्तर वेबिनार
                      की मेजबानी की</span
                    >
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.pib.gov.in/PressReleasePage.aspx?PRID=2097455"
                    target="_blank"
                  >
                    <span class="english-text"
                      >Government Approves Mutual Credit Guarantee Scheme to
                      Strengthen MSME Manufacturing Sector, fulfilling the
                      budget announcement of 2024-25</span
                    >
                    <span class="hindi-text"
                      >सरकार ने सूक्ष्म, लघु और मध्यम उद्यम (एमएसएमई) विनिर्माण
                      क्षेत्र को मजबूत करने के लिए आपसी क्रेडिट गारंटी योजना को
                      मंजूरी दी, जो 2024-25 की बजट घोषणा को पूरा करती है</span
                    >
                  </a>
                </li>
              </ul>
            </div>
          </article> -->

          <!-- Department Card 6 -->
          <!-- <article class="dept-card" aria-labelledby="d2">
            <div class="dept-body">
              <h4 id="d2" class="english-text">Tender</h4>
              <h4 id="d2" class="hindi-text">निविदा</h4>
              <ul>
                <li>
                  <a
                    href="https://www.pib.gov.in/PressReleasePage.aspx?PRID=2112771"
                    target="_blank"
                  >
                    <span class="english-text"
                      >For Tender Login to these website</span
                    >
                    <span class="hindi-text"
                      >निविदा के लिए इन वेबसाइट पर लॉगिन करें</span
                    >
                  </a>
                </li>
                <li>
                  <a
                    href="https://financialservices.gov.in/beta/index.php/en/tenders"
                    target="_blank"
                  >
                    <span class="english-text"
                      >https://financialservices.gov.in/beta/index.php/en/tenders</span
                    >
                    <span class="hindi-text">अधिनियम और नियम</span>
                  </a>
                </li>
              </ul>
            </div>
          </article> -->
        </div>
      </div>
    </main>

    <!-- press release -->
<section class="key-offerings">
  <!-- LEFT COLUMN: Tenders -->
  <div class="tenders-section">
    <div class="tenders-tabs">
           <button class="active">Tenders</button>
    </div>
    <div class="tenders-list">
      <a href="#">Bid Document for Automatic Box Strapping Machine <i class="fas fa-chevron-right"></i></a>
      <a href="#">Bid Document For Printing Machine and Equipment <i class="fas fa-chevron-right"></i></a>
      <a href="#">Tender for Page Setting And Printing of Economic Survey 2023-24 <i class="fas fa-chevron-right"></i></a>
      <a href="#">Tender for Supply of Binding Material and Paper <i class="fas fa-chevron-right"></i></a>
      <a href="#">E-Tender for Office Stationery Supply <i class="fas fa-chevron-right"></i></a>
    </div>
  </div>

  <!-- RIGHT COLUMN: Press Release -->
  <div class="press-release">
    <h3><i class="fas fa-star"></i> Press Release</h3>
    <div class="press-list">
      <div class="press-list-inner">
        <div class="press-item">
          <span class="date"><i class="far fa-calendar-alt"></i> 26/09/2025</span><br>
          <a href="#">Press Communique: Government’s Borrowing Plan for the Second Half of FY 2025-26</a>
        </div>
        <div class="press-item">
          <span class="date"><i class="far fa-calendar-alt"></i> 22/09/2025</span><br>
          <a href="#">Update on Fiscal Deficit and Economic Outlook Q3 FY 2025</a>
        </div>
        <div class="press-item">
          <span class="date"><i class="far fa-calendar-alt"></i> 18/09/2025</span><br>
          <a href="#">Government Launches Digital Finance Awareness Campaign</a>
        </div>
        <div class="press-item">
          <span class="date"><i class="far fa-calendar-alt"></i> 14/09/2025</span><br>
          <a href="#">Finance Ministry Introduces E-Payment Policy for MSMEs</a>
        </div>
        <div class="press-item">
          <span class="date"><i class="far fa-calendar-alt"></i> 10/09/2025</span><br>
          <a href="#">Union Budget Preparations Begin for FY 2026-27</a>
        </div>
      </div>
    </div>
  </div>
</section>



    <!-- press release end -->
    <!-- UPCOMING EVENTS CTA SECTION -->
    <section
      class="events-cta-section"
      role="region"
      aria-label="Upcoming Events"
    >
      <div class="events-container">
        <div class="events-header">
          <h2 class="english-text">Upcoming Events</h2>
          <h2 class="hindi-text">आगामी कार्यक्रम</h2>
          <!-- <p class="english-text">
            Stay updated with important financial events and conferences
          </p>
          <p class="hindi-text">
            महत्वपूर्ण वित्तीय कार्यक्रमों और सम्मेलनों के साथ अपडेटेड रहें
          </p> -->
        </div>

        <div class="events-grid">
          <!-- Event 1 -->
          <div class="event-card">
            <div class="event-date">
              <div class="date-day">15</div>
              <div class="date-month english-text">JAN</div>
              <div class="date-month hindi-text">जनवरी</div>
              <div class="date-year">2025</div>
            </div>
            <div class="event-content">
              <h3 class="english-text">Union Budget 2025-26 Presentation</h3>
              <h3 class="hindi-text">केंद्रीय बजट 2025-26 प्रस्तुति</h3>
              <p class="english-text">
                Presentation of Union Budget in Parliament by Finance Minister
              </p>
              <p class="hindi-text">
                वित्त मंत्री द्वारा संसद में केंद्रीय बजट की प्रस्तुति
              </p>
              <div class="event-meta">
                <span class="event-time">🕒 11:00 AM</span>
                <span class="event-location english-text"
                  >Parliament House, New Delhi</span
                >
                <span class="event-location hindi-text"
                  >संसद भवन, नई दिल्ली</span
                >
              </div>
              <button class="event-reminder-btn">
                <span class="english-text">Set Reminder</span>
                <span class="hindi-text">अनुस्मारक सेट करें</span>
              </button>
            </div>
          </div>

          <!-- Event 2 -->
          <div class="event-card">
            <div class="event-date">
              <div class="date-day">28</div>
              <div class="date-month english-text">JAN</div>
              <div class="date-month hindi-text">जनवरी</div>
              <div class="date-year">2025</div>
            </div>
            <div class="event-content">
              <h3 class="english-text">Economic Survey 2024-25 Release</h3>
              <h3 class="hindi-text">आर्थिक सर्वेक्षण 2024-25 जारी</h3>
              <p class="english-text">
                Official release of the Economic Survey document
              </p>
              <p class="hindi-text">
                आर्थिक सर्वेक्षण दस्तावेज की आधिकारिक रिलीज
              </p>
              <div class="event-meta">
                <span class="event-time">🕒 2:00 PM</span>
                <span class="event-location english-text"
                  >North Block, Finance Ministry</span
                >
                <span class="event-location hindi-text"
                  >नॉर्थ ब्लॉक, वित्त मंत्रालय</span
                >
              </div>
              <button class="event-reminder-btn">
                <span class="english-text">Set Reminder</span>
                <span class="hindi-text">अनुस्मारक सेट करें</span>
              </button>
            </div>
          </div>

          <!-- Event 3 -->
          <div class="event-card">
            <div class="event-date">
              <div class="date-day">05</div>
              <div class="date-month english-text">FEB</div>
              <div class="date-month hindi-text">फरवरी</div>
              <div class="date-year">2025</div>
            </div>
            <div class="event-content">
              <h3 class="english-text">G20 Finance Ministers Meeting</h3>
              <h3 class="hindi-text">G20 वित्त मंत्रियों की बैठक</h3>
              <p class="english-text">
                International meeting of G20 Finance Ministers and Central Bank
                Governors
              </p>
              <p class="hindi-text">
                G20 वित्त मंत्रियों और केंद्रीय बैंक गवर्नरों की अंतर्राष्ट्रीय
                बैठक
              </p>
              <div class="event-meta">
                <span class="event-time">🕒 9:30 AM</span>
                <span class="event-location english-text"
                  >Virtual Conference</span
                >
                <span class="event-location hindi-text"
                  >वर्चुअल कॉन्फ्रेंस</span
                >
              </div>
              <button class="event-reminder-btn">
                <span class="english-text">Join Event</span>
                <span class="hindi-text">कार्यक्रम में शामिल हों</span>
              </button>
            </div>
          </div>

          <!-- Event 4 -->
          <div class="event-card">
            <div class="event-date">
              <div class="date-day">20</div>
              <div class="date-month english-text">FEB</div>
              <div class="date-month hindi-text">फरवरी</div>
              <div class="date-year">2025</div>
            </div>
            <div class="event-content">
              <h3 class="english-text">Taxpayers Awareness Conference</h3>
              <h3 class="hindi-text">करदाता जागरूकता सम्मेलन</h3>
              <p class="english-text">
                National conference on taxpayer rights and new tax regulations
              </p>
              <p class="hindi-text">
                करदाता अधिकारों और नए कर विनियमों पर राष्ट्रीय सम्मेलन
              </p>
              <div class="event-meta">
                <span class="event-time">🕒 10:00 AM</span>
                <span class="event-location english-text"
                  >Vigyan Bhawan, New Delhi</span
                >
                <span class="event-location hindi-text"
                  >विज्ञान भवन, नई दिल्ली</span
                >
              </div>
              <button class="event-reminder-btn">
                <span class="english-text">Register Now</span>
                <span class="hindi-text">अभी पंजीकरण करें</span>
              </button>
            </div>
          </div>
        </div>

        <div class="events-cta-footer">
          <div class="cta-content">
            <h3 class="english-text">Never Miss an Important Event</h3>
            <br />
            <h3 class="hindi-text">कोई महत्वपूर्ण कार्यक्रम न चूकें</h3>
            <br />
            <!-- <p class="english-text">
              Subscribe to our events calendar and get notifications for all
              important financial events
            </p>
            <p class="hindi-text">
              हमारे इवेंट्स कैलेंडर को सब्सक्राइब करें और सभी महत्वपूर्ण वित्तीय
              कार्यक्रमों के लिए नोटिफिकेशन प्राप्त करें
            </p> -->
          </div>
          <div class="cta-buttons">
           
           <button class="cta-btn secondary" onclick="window.open('https://www.pib.gov.in/PressReleasePage.aspx?PRID=2108407', '_blank')">
        <span class="english-text">View All Events</span>
        <span class="hindi-text">सभी कार्यक्रम देखें</span>
    </button>
          </div>
        </div>
      </div>
    </section>
    <!-- SERVICES SECTION -->
    <section class="services-section" role="region" aria-label="Our Services">
      <div class="section-header">
        <h2 class="english-text">Our Services</h2>
        <h2 class="hindi-text">हमारी सेवाएं</h2>
        <!-- <p class="section-subtitle english-text">
          Comprehensive financial and regulatory services for citizens and
          businesses
        </p> -->
        <!-- <p class="section-subtitle hindi-text">
          नागरिकों और व्यवसायों के लिए व्यापक वित्तीय और नियामक सेवाएं
        </p> -->
      </div>

      <div class="services-grid">
        <!-- Service 1 -->
         <a href="https://www.indiacode.nic.in/bitstream/123456789/1988/1/A1999_42.pdf">
        <div class="service-card">
          <div class="service-icon">
            <img
              src="uploads/Foreign-Exchange-Management.png"
              alt="Foreign Exchange Management"
              target="_blank"
            />
          </div>
          <div class="service-content">
            <h3 class="english-text">Foreign Exchange Management</h3>
            <h3 class="hindi-text">विदेशी मुद्रा प्रबंधन</h3>
          </div>
        </div></a>

        <!-- Service 2 -->
         <a href="https://fiuindia.gov.in/">
        <div class="service-card">
          <div class="service-icon">
            <img
              src="uploads/Prevention-Money-Laundering.png"
              alt="Prevention Money Laundering"
              target="_blank"
            />
          </div>
          <div class="service-content" >
            <h3 class="english-text">Prevention Money Laundering</h3>
            <h3 class="hindi-text">मनी लॉन्ड्रिंग रोकथाम</h3>
          </div>
        </div></a>

        <!-- Service 3 -->
         <a href="">
        <div class="service-card">
          <div class="service-icon">
            <img
              src="uploads/No-objection-certificate.png"
              alt="No Objection Certificate"
              target="_blank"
            />
          </div>
          <div class="service-content">
            <h3 class="english-text">No Objection Certificate</h3>
            <h3 class="hindi-text">कोई आपत्ति प्रमाणपत्र</h3>
          </div>
        </div></a>

        <!-- Service 4 -->
         <a href="https://www.cbic.gov.in/">
        <div class="service-card">
          <div class="service-icon">
            <img src="uploads/Central-Tax.png" alt="Central Tax" target="_blank" />
          </div>
          <div class="service-content">
            <h3 class="english-text">Central Tax</h3>
            <h3 class="hindi-text">केंद्रीय कर</h3>
          </div>
        </div></a>

        <!-- Service 5 -->
         <a href="">
        <div class="service-card">
          <div class="service-icon">
            <img
              src="uploads/Central-Economic.png"
              alt="Central Economic Intelligence Bureau"
              target="_blank"
            />
          </div>
          <div class="service-content">
            <h3 class="english-text">Central Economic Intelligence Bureau</h3>
            <h3 class="hindi-text">केंद्रीय आर्थिक खुफिया ब्यूरो</h3>
          </div>
        </div></a>

      </div>
    </section>
    <!-- SOCIAL MEDIA & X SECTION -->
    <section class="social-media-section" role="region" aria-label="Social Media Updates">
        <div class="social-container">
            <!-- Social Media Links -->
            <div class="social-links-container">
                <div class="social-header">
                    <h2 class="english-text">Connect With Us</h2>
                    <h2 class="hindi-text">हमसे जुड़ें</h2>
                </div>

                <div class="social-platforms-grid">
                    <!-- X (formerly Twitter) -->
                    <a href="https://x.com/FinMinIndia" class="social-platform-card" target="_blank" rel="noopener">
                        <div class="platform-icon x-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </div>
                        <div class="platform-info">
                            <h3 class="english-text">X</h3>
                            <h3 class="hindi-text">एक्स</h3>
                            <p class="english-text">@FinMinIndia</p>
                            <p class="hindi-text">@FinMinIndia</p>
                        </div>
                        <div class="follow-btn">
                            <span class="english-text">Follow</span>
                            <span class="hindi-text">फॉलो करें</span>
                        </div>
                    </a>

                    <!-- Facebook -->
                    <a href="https://facebook.com/FinMinIndia" class="social-platform-card" target="_blank" rel="noopener">
                        <div class="platform-icon facebook-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </div>
                        <div class="platform-info">
                            <h3 class="english-text">Facebook</h3>
                            <h3 class="hindi-text">फेसबुक</h3>
                            <p class="english-text">FinMinIndia</p>
                            <p class="hindi-text">FinMinIndia</p>
                        </div>
                        <div class="follow-btn">
                            <span class="english-text">Like</span>
                            <span class="hindi-text">लाइक करें</span>
                        </div>
                    </a>

                    <!-- YouTube -->
                    <a href="https://youtube.com/FinMinIndia" class="social-platform-card" target="_blank" rel="noopener">
                        <div class="platform-icon youtube-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </div>
                        <div class="platform-info">
                            <h3 class="english-text">YouTube</h3>
                            <h3 class="hindi-text">यूट्यूब</h3>
                            <p class="english-text">Finance Ministry</p>
                            <p class="hindi-text">वित्त मंत्रालय</p>
                        </div>
                        <div class="follow-btn">
                            <span class="english-text">Subscribe</span>
                            <span class="hindi-text">सब्सक्राइब</span>
                        </div>
                    </a>

                    <!-- Instagram -->
                    <a href="https://instagram.com/FinMinIndia" class="social-platform-card" target="_blank" rel="noopener">
                        <div class="platform-icon instagram-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </div>
                        <div class="platform-info">
                            <h3 class="english-text">Instagram</h3>
                            <h3 class="hindi-text">इंस्टाग्राम</h3>
                            <p class="english-text">@FinMinIndia</p>
                            <p class="hindi-text">@FinMinIndia</p>
                        </div>
                        <div class="follow-btn">
                            <span class="english-text">Follow</span>
                            <span class="hindi-text">फॉलो करें</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Latest X Posts -->
            <div class="twitter-feed-container">
                <div class="twitter-header">
                    <div class="twitter-logo">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                        <h2 class="english-text">Latest from X</h2>
                        <h2 class="hindi-text">एक्स से नवीनतम</h2>
                    </div>
                    <a href="https://x.com/FinMinIndia" class="view-all-link" target="_blank" rel="noopener">
                        <span class="english-text">View All →</span>
                        <span class="hindi-text">सभी देखें →</span>
                    </a>
                </div>

                <div class="tweets-container">
                    <!-- Post 1 -->
                    <div class="tweet-card">
                        <div class="tweet-header">
                            <div class="tweet-avatar">
                                <div style="width:100%;height:100%;background-color:#1a365d;color:white;display:flex;align-items:center;justify-content:center;font-weight:bold"><img src="uploads/finmin-logo.jpg"></div>                           </div>
                            <div class="tweet-author">
                                <strong class="english-text">Finance Ministry India</strong>
                                <strong class="hindi-text">वित्त मंत्रालय भारत</strong>
                                <span>@FinMinIndia</span>
                            </div>
                        </div>
                        <div class="tweet-content">
                            <p class="english-text">
                                Budget 2025-26 focuses on sustainable growth, infrastructure
                                development, and welfare schemes for all sections of society.
                                #Budget2025 #AmritKaal
                            </p>
                            <p class="hindi-text">
                                बजट 2025-26 सतत विकास, बुनियादी ढांचे के विकास और समाज के सभी
                                वर्गों के लिए कल्याणकारी योजनाओं पर केंद्रित है। #Budget2025
                                #AmritKaal
                            </p>
                        </div>
                        <div class="tweet-meta">
                            <span class="tweet-time">2 hours ago</span>
                            <div class="tweet-stats">
                                <span>🔁 245</span>
                                <span>❤️ 1.2K</span>
                            </div>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="tweet-card">
                        <div class="tweet-header">
                            <div class="tweet-avatar">
                                <div style="width:100%;height:100%;background-color:#1a365d;color:white;display:flex;align-items:center;justify-content:center;font-weight:bold"><img src="uploads/finmin-logo.jpg"></div>
                            </div>
                            <div class="tweet-author">
                                <strong class="english-text">Finance Ministry India</strong>
                                <strong class="hindi-text">वित्त मंत्रालय भारत</strong>
                                <span>@FinMinIndia</span>
                            </div>
                        </div>
                        <div class="tweet-content">
                            <p class="english-text">
                                New circular released: Guidelines for foreign exchange
                                management and compliance procedures for international
                                transactions. #Forex #Compliance
                            </p>
                            <p class="hindi-text">
                                नया परिपत्र जारी: अंतर्राष्ट्रीय लेनदेन के लिए विदेशी मुद्रा
                                प्रबंधन और अनुपालन प्रक्रियाओं के दिशानिर्देश। #Forex
                                #Compliance
                            </p>
                        </div>
                        <div class="tweet-meta">
                            <span class="tweet-time">5 hours ago</span>
                            <div class="tweet-stats">
                                <span>🔁 189</span>
                                <span>❤️ 856</span>
                            </div>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="tweet-card">
                        <div class="tweet-header">
                            <div class="tweet-avatar">
                                <div style="width:100%;height:100%;background-color:#1a365d;color:white;display:flex;align-items:center;justify-content:center;font-weight:bold"><img src="uploads/finmin-logo.jpg"></div>
                            </div>
                            <div class="tweet-author">
                                <strong class="english-text">Finance Ministry India</strong>
                                <strong class="hindi-text">वित्त मंत्रालय भारत</strong>
                                <span>@FinMinIndia</span>
                            </div>
                        </div>
                        <div class="tweet-content">
                            <p class="english-text">
                                Economic Survey 2024-25 highlights India's robust growth
                                trajectory and fiscal consolidation efforts. Download the full
                                report from our website. #EconomicSurvey
                            </p>
                            <p class="hindi-text">
                                आर्थिक सर्वेक्षण 2024-25 भारत की मजबूत विकास प्रक्षेपवक्र और
                                राजकोषीय समेकन प्रयासों को उजागर करता है। हमारी वेबसाइट से
                                पूरी रिपोर्ट डाउनलोड करें। #EconomicSurvey
                            </p>
                        </div>
                        <div class="tweet-meta">
                            <span class="tweet-time">1 day ago</span>
                            <div class="tweet-stats">
                                <span>🔁 342</span>
                                <span>❤️ 1.5K</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner row -->
    <!-- <div class="banner-row" aria-hidden="true">
      <img src="uploads/e-coffee_table_book.jpg" alt="e-Coffee Table Book" />
      <img src="uploads/azadi_mahotsav.png" alt="Aazadi Ka Amrit Mahotsav" />
      <img src="uploads/par.png" alt="Union Budget & Economic Survey" />
      <img src="uploads/web-info-manager.png" alt="Web Information Manager" />
    </div> -->

    <!-- Logo Strip -->
<div class="logo-strip">
  <button class="logo-nav prev" aria-label="Previous">&#10094;</button>
  
  <div class="logo-inner" id="logoSlider">
    <div class="logo-item"><img src="uploads/02-my-gov-in.jpg" alt="MyGov" /></div>
    <!-- <div class="logo-item"><img src="uploads/india-gov-in.png" alt="India.gov.in" /></div> -->
    <div class="logo-item"><img src="uploads/01-national-portal-of-india.jpg" alt="India.gov.in" /></div>
    <div class="logo-item"><img src="uploads/06-make-in-india.jpg" alt="Make in India" /></div>
    <div class="logo-item"><img src="uploads/data-gov.png" alt="Data.gov.in" /></div>
    <div class="logo-item"><img src="uploads/eci.png" alt="Election Commission" /></div>
    <div class="logo-item"><img src="uploads/digital-india-logo1.png" alt="Digital India" /></div>
  </div>

  <button class="logo-nav next" aria-label="Next">&#10095;</button>
</div>


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

      // Language dropdown functionality
      const languageBtn = document.getElementById("languageBtn");
      const languageMenu = document.getElementById("languageMenu");

      // Toggle dropdown
      languageBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        languageMenu.classList.toggle("show");
      });

      // When user selects a language
      languageMenu.querySelectorAll("div").forEach((item) => {
        item.addEventListener("click", () => {
          const lang = item.dataset.lang;
          switchLanguage(lang);
          languageMenu.classList.remove("show");
        });
      });

      // Close dropdown if clicked outside
      document.addEventListener("click", (e) => {
        if (!languageMenu.parentElement.contains(e.target)) {
          languageMenu.classList.remove("show");
        }
      });

      // Function to switch language
      function switchLanguage(lang) {
        // Set the lang attribute on the body
        document.body.setAttribute("lang", lang);
        document.documentElement.lang = lang;

        // Update any dynamic content that needs translation
        updateDynamicContent(lang);

        // Save preference to localStorage
        localStorage.setItem("preferredLanguage", lang);
      }

    // Function to update dynamic content (like marquee, etc.)
function updateDynamicContent(lang) {
  const marqueeItems = document.getElementById("marqueeItems");
  if (marqueeItems) {
    if (lang === "hi") {
      marqueeItems.innerHTML = `
        <a href="/files/announcements_documents/Monthly%20Economic%20Review%20August%202025.pdf" 
           class="marquee-link" 
           title="Monthly Economic Review August 2025" 
           target="_blank">
          अगस्त 2025 की मासिक आर्थिक समीक्षा
        </a><span class="marquee-separator">•</span>
        <a href="/files/announcements_documents/WTM_vacancy.pdf" 
           class="marquee-link" 
           title="WTM vacancy circular dated 4th September, 2025-DEA website" 
           target="_blank">
          डब्ल्यूटीएम रिक्ति परिपत्र 4 सितंबर, 2025
        </a><span class="marquee-separator">•</span>
        <a href="/files/announcements_documents/ExDebtReport2024-25_Final.pdf" 
           class="marquee-link" 
           title="Indias External Debt: A Status Report 2024-25" 
           target="_blank">
          भारत का बाह्य ऋण: स्थिति रिपोर्ट 2024-25
        </a><span class="marquee-separator">•</span>
        <a href="/files/announcements_documents/GeM-Bidding-8206518.pdf" 
           class="marquee-link" 
           title="Bid Document for Automatic Box Strapping Machine" 
           target="_blank">
          स्वचालित बॉक्स स्ट्रैपिंग मशीन के लिए बोली दस्तावेज़
        </a><span class="marquee-separator">•</span>
        <a href="files/announcements_documents/GeM-Bidding-8206228.pdf" 
           class="marquee-link" 
           title="Bid Document For Printing Machine and Equipment" 
           target="_blank">
          मुद्रण मशीन और उपकरण के लिए बोली दस्तावेज़
        </a><span class="marquee-separator">•</span>
        <a href="files/announcements_documents/Budget_Circular202627.pdf" 
           class="marquee-link" 
           title="Budget Circular 2026-27" 
           target="_blank">
          बजट परिपत्र 2026-27
        </a><span class="marquee-separator">•</span>
        <a href="files/announcements_documents/FinalMER_July2025.pdf" 
           class="marquee-link" 
           title="Monthly Economic Review July 2025" 
           target="_blank">
          जुलाई 2025 की मासिक आर्थिक समीक्षा
        </a>
      `;
    } else {
      marqueeItems.innerHTML = `
        <a href="files/announcements_documents/Monthly%20Economic%20Review%20August%202025.pdf" 
           class="marquee-link" 
           title="Monthly Economic Review August 2025" 
           target="_blank">
          Monthly Economic Review August 2025
        </a><span class="marquee-separator">•</span>
        <a href="files/announcements_documents/WTM_vacancy.pdf" 
           class="marquee-link" 
           title="WTM vacancy circular dated 4th September, 2025-DEA website" 
           target="_blank">
          WTM vacancy circular dated 4th September, 2025
        </a><span class="marquee-separator">•</span>
        <a href="files/announcements_documents/ExDebtReport2024-25_Final.pdf" 
           class="marquee-link" 
           title="Indias External Debt: A Status Report 2024-25" 
           target="_blank">
          India's External Debt: A Status Report 2024-25
        </a><span class="marquee-separator">•</span>
        <a href="files/announcements_documents/GeM-Bidding-8206518.pdf" 
           class="marquee-link" 
           title="Bid Document for Automatic Box Strapping Machine" 
           target="_blank">
          Bid Document for Automatic Box Strapping Machine
        </a><span class="marquee-separator">•</span>
        <a href="files/announcements_documents/GeM-Bidding-8206228.pdf" 
           class="marquee-link" 
           title="Bid Document For Printing Machine and Equipment" 
           target="_blank">
          Bid Document For Printing Machine and Equipment
        </a><span class="marquee-separator">•</span>
        <a href="files/announcements_documents/Budget_Circular202627.pdf" 
           class="marquee-link" 
           title="Budget Circular 2026-27" 
           target="_blank">
          Budget Circular 2026-27
        </a><span class="marquee-separator">•</span>
        <a href="files/announcements_documents/FinalMER_July2025.pdf" 
           class="marquee-link" 
           title="Monthly Economic Review July 2025" 
           target="_blank">
          Monthly Economic Review July 2025
        </a>
      `;
    }

    // Add hover functionality to pause marquee
    setupMarqueeHover();
  }
}

// Function to setup marquee hover functionality
function setupMarqueeHover() {
  const marquee = document.querySelector('.marquee');
  const items = document.querySelector('.marquee .items');
  
  if (marquee && items) {
    // Pause on hover
    marquee.addEventListener('mouseenter', function() {
      items.classList.add('paused');
    });
    
    // Resume when mouse leaves
    marquee.addEventListener('mouseleave', function() {
      items.classList.remove('paused');
    });
    
    // Also pause when hovering over individual links for better UX
    const links = items.querySelectorAll('.marquee-link');
    links.forEach(link => {
      link.addEventListener('mouseenter', function() {
        items.classList.add('paused');
      });
    });
  }
}

// Initialize marquee functionality when page loads
document.addEventListener('DOMContentLoaded', function() {
  setupMarqueeHover();
});

// marquee function end
      // Initialize language on page load
      document.addEventListener("DOMContentLoaded", function () {
        const savedLanguage = localStorage.getItem("preferredLanguage") || "en";
        switchLanguage(savedLanguage);
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

      // Slider functionality
      (function () {
        const track = document.getElementById("sliderTrack");
        const slides = Array.from(track.children);
        const prev = document.getElementById("prevBtn");
        const next = document.getElementById("nextBtn");
        const pager = document.getElementById("pager");
        const dots = Array.from(document.querySelectorAll(".pager-dot"));
        let idx = 0;
        let anim;

        function goTo(i) {
          idx = (i + slides.length) % slides.length;
          track.style.transform = "translateX(" + -idx * 100 + "%)";
          dots.forEach((d) => d.classList.remove("active"));
          dots[idx].classList.add("active");
        }

        function nextSlide() {
          goTo(idx + 1);
        }
        function prevSlide() {
          goTo(idx - 1);
        }

        next.addEventListener("click", () => {
          nextSlide();
          restartAuto();
        });
        prev.addEventListener("click", () => {
          prevSlide();
          restartAuto();
        });
        dots.forEach((d) =>
          d.addEventListener("click", (e) => {
            goTo(Number(e.target.dataset.index));
            restartAuto();
          })
        );

        // auto play
        function startAuto() {
          anim = setInterval(nextSlide, 4500);
        }
        function stopAuto() {
          clearInterval(anim);
        }
        function restartAuto() {
          stopAuto();
          startAuto();
        }
        startAuto();

        // pause on hover
        const hero = document.querySelector(".hero-slider");
        hero.addEventListener("mouseenter", stopAuto);
        hero.addEventListener("mouseleave", startAuto);

        // make pager keyboard accessible
        dots.forEach((dot, i) => {
          dot.tabIndex = 0;
          dot.addEventListener("keydown", (e) => {
            if (e.key === "Enter" || e.key === " ") {
              goTo(i);
              restartAuto();
              e.preventDefault();
            }
          });
        });
      })();


// Login Modal Functionality
document.addEventListener('DOMContentLoaded', function() {
  const loginBtn = document.getElementById('loginBtn');
  const loginModal = document.getElementById('loginModal');
  const closeLoginModal = document.getElementById('closeLoginModal');
  const loginForm = document.getElementById('loginForm');

  // Open modal when login button is clicked
  if (loginBtn) {
    loginBtn.addEventListener('click', function() {
      if (loginModal) {
        loginModal.style.display = 'flex';
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
      }
    });
  }

  // Close modal when close button is clicked
  if (closeLoginModal) {
    closeLoginModal.addEventListener('click', function() {
      if (loginModal) {
        loginModal.style.display = 'none';
        document.body.style.overflow = ''; // Restore scrolling
      }
    });
  }

  // Close modal when clicking outside the modal content
  if (loginModal) {
    loginModal.addEventListener('click', function(e) {
      if (e.target === loginModal) {
        loginModal.style.display = 'none';
        document.body.style.overflow = ''; // Restore scrolling
      }
    });
  }

  // Handle form submission
  if (loginForm) {
    loginForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      
      // Basic validation
      if (!email || !password) {
        alert('Please fill in all required fields.');
        return;
      }
      
      // Here you would typically send the data to your server
      console.log('Login attempt:', { email, password });
      
      // Simulate login process
      alert('Login functionality would be implemented here. This is a demo.');
      
      // Close modal after "login"
      if (loginModal) {
        loginModal.style.display = 'none';
        document.body.style.overflow = '';
      }
    });
  }

  // Close modal with Escape key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && loginModal && loginModal.style.display === 'flex') {
      loginModal.style.display = 'none';
      document.body.style.overflow = '';
    }
  });
});
      
    </script>
    <script>
  const logoSlider = document.getElementById("logoSlider");
  const prevBtn = document.querySelector(".logo-nav.prev");
  const nextBtn = document.querySelector(".logo-nav.next");

  // Manual scroll
  nextBtn.addEventListener("click", () => {
    logoSlider.scrollBy({ left: 250, behavior: "smooth" });
  });
  prevBtn.addEventListener("click", () => {
    logoSlider.scrollBy({ left: -250, behavior: "smooth" });
  });

  // Auto-scroll
  let autoScroll = setInterval(() => {
    logoSlider.scrollBy({ left: 1, behavior: "smooth" });
    if (logoSlider.scrollLeft + logoSlider.clientWidth >= logoSlider.scrollWidth) {
      logoSlider.scrollTo({ left: 0, behavior: "smooth" });
    }
  }, 30);

  // Pause on hover
  logoSlider.addEventListener("mouseenter", () => clearInterval(autoScroll));
  logoSlider.addEventListener("mouseleave", () => {
    autoScroll = setInterval(() => {
      logoSlider.scrollBy({ left: 1, behavior: "smooth" });
      if (logoSlider.scrollLeft + logoSlider.clientWidth >= logoSlider.scrollWidth) {
        logoSlider.scrollTo({ left: 0, behavior: "smooth" });
      }
    }, 30);
  });
</script>
<!-- Auto-scroll duplicator script -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const pressList = document.querySelector(".press-list-inner");
    if (pressList) {
      const clone = pressList.cloneNode(true);
      pressList.parentElement.appendChild(clone);
    }
  });
</script>
  </body>
</html>
