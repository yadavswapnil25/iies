<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>IIES</title>
    @include('partials.favicons')
    <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous" />
  <style>
    /* Enhanced PM section styles */
    .pm-quotes-section { padding: 40px 0; background: #f5f7fb; }
    .pm-quotes-container { max-width: var(--maxw); margin: 0 auto; padding: 0 20px; }
    .pm-quotes-content { display: grid; grid-template-columns: 380px 1fr; gap: 36px; align-items: center; }
    .pm-image img { width: 100%; height: auto; filter: drop-shadow(0 8px 18px rgba(0,0,0,.15)); }
    .quote-text p { font-size: 1.35rem; line-height: 1.6; color: #142b4d; }
    .event-header-wrapper { display: flex; align-items: flex-start; justify-content: space-between; gap: 20px; }
    .event-header { flex: 1; }
    .event-header h4 { font-size: 1.05rem; color: #3e4b63; margin-bottom: 10px; }
    .event-date { color: #1a237e; font-size: 0.95rem; margin-top: 8px; }
    .event-cta { flex-shrink: 0; align-self: flex-start; }
    .event-cta-btn { display: inline-flex; align-items: center; gap: 6px; background: transparent; color: #1a365d; border: 2px solid #1a365d; padding: 10px 18px; border-radius: 6px; text-decoration: none; font-weight: 600; font-size: 0.9rem; transition: all .2s ease; }
    .event-cta-btn:hover { background: #1a365d; color: #fff; transform: translateY(-1px); }
    .event-cta-btn i { font-size: 0.85rem; }
    @media (max-width: 900px) { .pm-quotes-content { grid-template-columns: 1fr; } .quote-text p { font-size: 1.1rem; } .event-header-wrapper { flex-direction: column; gap: 15px; } .event-cta { align-self: flex-start; } }
  </style>

  </head>
  <body lang="en">
    <a class="skip-link" href="#maincontent">Skip to main content</a>
    <!-- TOP GOVERNMENT STRIP -->
    @include('partials.header')

    <!-- SLIDER -->
    <section class="hero-slider" aria-label="Homepage carousel">
      <div class="slider-track" id="sliderTrack">
        @forelse($banners as $banner)
          <div class="slide">
            @if($banner->url)
              <a href="{{ $banner->url }}" target="_blank">
                <img src="{{ $banner->image_url }}" alt="{{ $banner->alt_text ?: $banner->title }}" />
              </a>
            @else
              <img src="{{ $banner->image_url }}" alt="{{ $banner->alt_text ?: $banner->title }}" />
            @endif
          </div>
        @empty
          <!-- Default banners when no dynamic banners exist -->
          <div class="slide">
            <img src="uploads/logo-1600x400-01.png" alt="Slider 1" />
          </div>
          <div class="slide">
            <img src="uploads/slider1.png" alt="Slider 2" />
          </div>
          <div class="slide">
            <img src="uploads/slider2.png" alt="Slider 3" />
          </div>
        @endforelse
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
        @forelse($banners as $index => $banner)
          <span class="pager-dot {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}"></span>
        @empty
          <span class="pager-dot active" data-index="0"></span>
          <span class="pager-dot" data-index="1"></span>
          <span class="pager-dot" data-index="2"></span>
        @endforelse
      </div>
    </section>

    <!-- LATEST MARQUEE -->
    <div class="latest-wrap">
      <div class="latest" role="region" aria-label="Latest updates">
        <strong class="english-text">Announcements
        :</strong>
        <strong class="hindi-text">मुख्य आकर्षण:</strong>
        <div class="marquee" aria-hidden="false">
          <div class="items" id="marqueeItems">
            @forelse($announcements as $announcement)
              <a href="{{ $announcement->url }}" 
                 class="marquee-link" 
                 title="{{ $announcement->title }}" 
                 target="_blank">
                {{ $announcement->title }}
              </a>
              @if(!$loop->last)
                <span class="marquee-separator">•</span>
              @endif
            @empty
            @endforelse
          </div>
        </div>
      </div>
    </div>

    <!-- PM MODI QUOTES SECTION -->
    <section class="pm-quotes-section" role="region" aria-label="PM Modi Quotes and Events">
      <div class="pm-quotes-container">
        <div class="pm-quotes-content">
          <div class="pm-image-section">
            <div class="pm-image">
              <img src="uploads/narendra-modi-prime-minister.png" alt="Prime Minister Narendra Modi" />
            </div>
          </div>
          
          <div class="quote-event-section">
            <div class="quote-content">
              <div class="quote-icon"><img src="uploads/upper-quote.svg" alt="Quote" /></div>
              <div class="quote-text">
                <p class="english-text">
                This year's Union Budget paves the way for a stronger workforce and a growing economy.
                </p>
                <p class="hindi-text">
                  इस वर्ष का केंद्रीय बजट एक मजबूत कार्यबल और बढ़ती अर्थव्यवस्था के लिए रास्ता प्रशस्त करता है।
                </p>
              </div>
            </div>
            
            <div class="event-details">
              <div class="event-header-wrapper">
                <div class="event-header">
                 &nbsp; <h4 class="english-text">ADDRESSING A POST-BUDGET WEBINAR ON BOOSTING JOB CREATION.</h4>
                  <h4 class="hindi-text">रोजगार सृजन को बढ़ावा देने पर बजटोत्तर वेबिनार को संबोधित करना।</h4>
                  <div >
                  &nbsp; <span>05.03.2025</span>
                  </div>
                </div>
                <div class="event-cta">
                  <a href="https://www.pib.gov.in/PressReleasePage.aspx?PRID=2108407" target="_blank" rel="noopener" class="event-cta-btn">
                    <i class="fas fa-external-link-alt"></i> View Event
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
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

        <!-- Dynamic Finance Ministers Section -->
        @forelse($financeMinisters as $minister)
        <div class="about-image">
          <img
            src="{{ $minister->image_url }}"
            alt="{{ $minister->name }}"
            onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2Y0ZjZmNyIvPjx0ZXh0IHg9IjE1MCIgeT0iMTAwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTYiIGZpbGw9IiM2YjZiNmIiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGR5PSIuM2VtIj5EZXBhcnRtZW50IG9mIEV4cGVuZGl0dXJlPC90ZXh0Pjwvc3ZnPg=='"
          />
       
          <h4 class="english-text">{{ $minister->name }}</h4>
          @if($minister->hindi_name)
            <h4 class="hindi-text">{{ $minister->hindi_name }}</h4>
          @endif
      
          <p class="english-text">{{ $minister->designation }} for Finance</p>
          @if($minister->hindi_designation)
            <p class="hindi-text">{{ $minister->hindi_designation }} for Finance</p>
          @endif
        </div>
        @empty
        <!-- Fallback static content if no ministers are configured -->
        <div class="about-image">
          <img
            src="uploads/nirmal-sitaraman-finance-minister_0 (1).jpg"
            alt="Department of Expenditure"
            onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2Y0ZjZmNyIvPjx0ZXh0IHg9IjE1MCIgeT0iMTAwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTYiIGZpbGw9IiM2YjZiNmIiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGR5PSIuM2VtIj5EZXBhcnRtZW50IG9mIEV4cGVuZGl0dXJlPC90ZXh0Pjwvc3ZnPg=='"
          />
       
          <h4 class="english-text">Smt. Nirmala Sitharaman</h4>
          <h4 class="hindi-text">भारतीय अंतर्राष्ट्रीय आर्थिक सेवा विभाग</h4>
          <p class="english-text">Finance Minister (Government of India)</p>
          <p class="hindi-text">सार्वजनिक वित्तीय प्रबंधन प्रणाली और राज्य वित्त का पर्यवेक्षण</p>
        </div>
        <div class="about-image">
          <img
            src="uploads/pankaj-chaudhary.png"
            alt="Department of Expenditure"
            onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMzAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2Y0ZjZmNyIvPjx0ZXh0IHg9IjE1MCIgeT0iMTAwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTYiIGZpbGw9IiM2YjZiNmIiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGR5PSIuM2VtIj5EZXBhcnRtZW50IG9mIEV4cGVuZGl0dXJlPC90ZXh0Pjwvc3ZnPg=='"
          />
          <h4 class="english-text">Sri Pankaj Kumar</h4>
          <h4 class="hindi-text">भारतीय अंतर्राष्ट्रीय आर्थिक सेवा विभाग</h4>
          <p class="english-text">Minister of State for Finance (Government of India)</p>
          <p class="hindi-text">सार्वजनिक वित्तीय प्रबंधन प्रणाली और राज्य वित्त का पर्यवेक्षण</p>
        </div>
        @endforelse
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
              href="https://www.indiabudget.gov.in/economicsurvey/index.php"
              target="_blank"
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
              href="https://www.indiabudget.gov.in/economicsurvey/allpes.php"
              target="_blank"
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
              href="https://www.indiabudget.gov.in/previous_union_budget.php"
              target="_blank"
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
              href="https://www.indiabudget.gov.in/bspeech.php"
              target="_blank"
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
          <a href="https://www.indiabudget.gov.in/doc/bh1.pdf" target="_blank">  <li class="english-text">Budget Highlights (Key Features) - PDF</li></a>
          <a href="https://www.indiabudget.gov.in/doc/bh1.pdf" target="_blank">  <li class="hindi-text">बजट मुख्य बिंदु (की फीचर्स) - PDF</li></a>
        
          </ul>
        </div>
        <div class="aside-box">
          <h4 style="color: var(--brand-dark); margin-bottom: 8px">
            <span class="english-text">Important Links</span>
            <span class="hindi-text">महत्वपूर्ण डाउनलोड</span>
          </h4>
          <ul style="padding-left: 18px; color: #333">
                  <!-- Login Button -->
             <a href="{{ route('user.login') }}" class="login-btn" style="display: inline-block; text-decoration: none;">
    <span class="english-text">Track NOC Application</span>
    <span class="hindi-text">एन ओ सी आवेदन ट्रैकिंग</span>
  </a>
            <!-- <li class="english-text">NOC Progress Details </li>
            <li class="hindi-text"></li> -->
          </ul>
        </div>

          <!-- Login Button -->
 
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
              <h4 id="d1" class="hindi-text">अंतर्राष्ट्रीय कराधान</h4>
              <ul>
                @forelse($internationalTaxations as $taxation)
                  <li>
                    <a href="{{ $taxation->url }}" target="_blank">
                      <span class="english-text">{{ $taxation->title }}</span>
                      <span class="hindi-text">{{ $taxation->title }}</span>
                    </a>
                  </li>
                @empty
                  <li>
                    <a href="https://incometaxindia.gov.in/Pages/international-taxation/dtaa.aspx" target="_blank">
                      <span class="english-text">Tax Treaties | </span>
                      <span class="hindi-text"
                        >मंत्रिमंडल ने कम मूल्य की भीम-यूपीआई लेनदेन (पी2एम) को
                        बढ़ावा देने के लिए प्रोत्साहन योजना को मंजूरी दी</span
                      >
                    </a>
                  </li>
                  <li>
                    <a href="https://incometaxindia.gov.in/Pages/international-taxation/treaty-comparison.aspx" target="_blank">
                      <span class="english-text">Treaty Comparison | </span>
                      <span class="hindi-text"
                        >वित्तीय सेवा विभाग (डीएफएस) ने "विनियामक, निवेश, और
                        व्यवसाय में आसानी (ईओडीबी) सुधार" विषय पर बजटोत्तर वेबिनार
                        की मेजबानी की</span
                      >
                    </a>
                  </li>
                  <li>
                    <a href="https://incometaxindia.gov.in/Pages/international-taxation/transfer-pricing.aspx" target="_blank">
                      <span class="english-text">Transfer Pricing |</span>
                      <span class="hindi-text"
                        >सरकार ने सूक्ष्म, लघु और मध्यम उद्यम (एमएसएमई) विनिर्माण
                        क्षेत्र को मजबूत करने के लिए आपसी क्रेडिट गारंटी योजना को
                        मंजूरी दी, जो 2024-25 की बजट घोषणा को पूरा करती है</span
                      >
                    </a>
                  </li>
                @endforelse
              </ul>
            </div>
          </article>

          <!-- Department Card 2 -->
          <article class="dept-card" aria-labelledby="d2">
            <div class="dept-thumb">
              <img
                src="uploads/Enforcement-Directorate1.png"
                alt="Enforcement Directorate"
                style="
    width: auto;
"
              />
            </div>
            <div class="dept-body">
              <h4 id="d2" class="english-text">Enforcement Directorate</h4>
              <h4 id="d2" class="hindi-text">निविदा</h4>
              <ul>
                @forelse($enforcements as $enforcement)
                  <li>
                    <a href="{{ $enforcement->url }}" target="_blank">
                      <span class="english-text">{{ $enforcement->title }}</span>
                      <span class="hindi-text">{{ $enforcement->hindi_text ?: $enforcement->title }}</span>
                    </a>
                  </li>
                @empty
                  <li>
                    <a href="https://enforcementdirectorate.gov.in/red-corner-notice" target="_blank">
                      <span class="english-text">Red Corner Notice</span>
                      <span class="hindi-text">निविदा के लिए इन वेबसाइट पर लॉगिन करें</span>
                    </a>
                  </li>
                  <li>
                    <a href="https://enforcementdirectorate.gov.in/fema" target="_blank">
                      <span class="english-text">FEMA Rule</span>
                      <span class="hindi-text">अधिनियम और नियम</span>
                    </a>
                  </li>
                @endforelse
              </ul>
            </div>
          </article>

          <!-- Department Card 3 - News -->
                <article class="dept-card" aria-labelledby="d3">
                <div class="tenders-list">
                <h4 id="d3" class="english-text">What's News</h4>
                <h4 id="d3" class="hindi-text">समाचार</h4>
                @forelse($news as $newsItem)
              <a href="{{ $newsItem->url }}" target="_blank">{{ $newsItem->title }} <i class="fas fa-chevron-right"></i></a>
            @empty
            <li>
              <a href="https://financialservices.gov.in/beta/sites/default/files/Advertisment-English-DG-RBI.pdf" target="_blank">
                <span class="english-text">APPLICATIONS INVITED FOR THE POST OF DEPUTY GOVERNOR, RESERVE BANK OF INDIA</span>
                <span class="hindi-text">रिजर्व बैंक ऑफ इंडिया के डिप्टी गवर्नर पद के लिए आवेदन आमंत्रित</span>
              </a>
            </li>
            <li>
              <a href="https://financialservices.gov.in/beta/en/events" target="_blank">
                <span class="english-text">Upcoming Events of the Department</span>
                <span class="hindi-text">विभाग के आगामी कार्यक्रम</span>
              </a>
            </li>
            @endforelse
          </div>
          </article>
          <!-- Department Card 5 -->
          <article class="dept-card" aria-labelledby="d3">
            <div class="tenders-list">
              <h4 id="d4" class="english-text">Vacancies</h4>
              <h4 id="d4" class="hindi-text">रिक्तियां</h4>
              <ul>
                @forelse($vacancies as $vacancy)
                  <!-- <li>
                    <a href="{{ $vacancy->url }}" target="_blank">
                      <span class="english-text">{{ $vacancy->title }}</span>
                      <span class="hindi-text">{{ $vacancy->title }}</span>
                    </a>
                  </li> -->
                  <a href="{{ $vacancy->url }}" target="_blank">{{ $vacancy->title }} <i class="fas fa-chevron-right"></i></a>

                @empty
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
                @endforelse
              </ul>
            </div>
          </article>
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
      @forelse($tenders as $tender)
        <a href="{{ $tender->url }}" target="_blank">{{ $tender->title }} <i class="fas fa-chevron-right"></i></a>
      @empty
        <a href="#">Bid Document for Automatic Box Strapping Machine <i class="fas fa-chevron-right"></i></a>
        <a href="#">Bid Document For Printing Machine and Equipment <i class="fas fa-chevron-right"></i></a>
        <a href="#">Tender for Page Setting And Printing of Economic Survey 2023-24 <i class="fas fa-chevron-right"></i></a>
        <a href="#">Tender for Supply of Binding Material and Paper <i class="fas fa-chevron-right"></i></a>
        <a href="#">E-Tender for Office Stationery Supply <i class="fas fa-chevron-right"></i></a>
      @endforelse
    </div>
  </div>

  <!-- RIGHT COLUMN: Press Release -->
  <div class="press-release">
    <h3><i class="fas fa-star"></i> Press Release</h3>
    <div class="press-list">
      <div class="press-list-inner">
        @forelse($pressReleases as $pressRelease)
          <div class="press-item">
            <span class="date"><i class="far fa-calendar-alt"></i> {{ $pressRelease->created_at->format('d/m/Y') }}</span><br>
            <a href="{{ $pressRelease->url }}" target="_blank">{{ $pressRelease->title }}</a>
          </div>
        @empty
          <div class="press-item">
            <span class="date"><i class="far fa-calendar-alt"></i> 26/09/2025</span><br>
            <a href="#">Press Communique: Government's Borrowing Plan for the Second Half of FY 2025-26</a>
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
        @endforelse
      </div>
    </div>
  </div>
</section>



    <!-- press release end -->
    <!-- UPCOMING EVENTS SECTION -->
    <section
      class="events-cta-section"
      role="region"
      aria-label="Events"
    >
      <div class="events-container">
        <div class="events-header">
          <h2 class="english-text">Events</h2>
          <h2 class="hindi-text">आगामी कार्यक्रम</h2>
          <!-- <p class="english-text">
            Stay updated with important financial events and conferences
          </p>
          <p class="hindi-text">
            महत्वपूर्ण वित्तीय कार्यक्रमों और सम्मेलनों के साथ अपडेटेड रहें
          </p> -->
        </div>

        <div class="events-grid">
          @forelse($events as $event)
            <div class="event-card">
              <div class="event-date">
                <div class="date-day" style="color:#fff;">{{ $event->event_date->format('d') }}</div>
                <div class="date-month english-text" style="color:#fff;">{{ $event->event_date->format('M') }}</div>
                <div class="date-month hindi-text" style="color:#fff;">{{ $event->event_date->format('M') }}</div>
                <div class="date-year" style="color:#fff;">{{ $event->event_date->format('Y') }}</div>
              </div>
              <div class="event-content">
                <h3 class="english-text" style="color:#1a365d;">{{ $event->title }}</h3>
                <h3 class="hindi-text" style="color:#1a365d;">{{ $event->title }}</h3>
                @if($event->description)
                  <p class="english-text">{{ $event->description }}</p>
                  <p class="hindi-text">{{ $event->description }}</p>
                @endif
                <div class="event-meta" style="display:flex;flex-direction:column;align-items:flex-start;gap:6px;margin:8px 0 0 0;padding:0;">
                  @if($event->event_time)
                    <span class="event-time">🕒 {{ $event->event_time }}</span>
                  @endif
                  @if($event->location)
                    <span class="event-location english-text"><i class="fas fa-map-marker-alt"></i> {{ $event->location }}</span>
                    <span class="event-location hindi-text"><i class="fas fa-map-marker-alt"></i> {{ $event->location }}</span>
                  @endif
                </div>

              </div>
            </div>
          @empty
            <!-- Default Event 1 -->
            <div class="event-card">
              <div class="event-date">
                <div class="date-day" style="color:#fff;">15</div>
                <div class="date-month english-text" style="color:#fff;">JAN</div>
                <div class="date-month hindi-text" style="color:#fff;">जनवरी</div>
                <div class="date-year" style="color:#fff;">2025</div>
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
                <div class="event-meta" style="display:flex;flex-direction:column;align-items:flex-start;gap:6px;margin:8px 0 0 0;padding:0;">
                  <span class="event-time">🕒 11:00 AM</span>
                  <span class="event-location english-text"><i class="fas fa-map-marker-alt"></i> Parliament House, New Delhi</span>
                  <span class="event-location hindi-text"><i class="fas fa-map-marker-alt"></i> संसद भवन, नई दिल्ली</span>
                </div>
                <button class="event-reminder-btn">
                  <span class="english-text">Set Reminder</span>
                  <span class="hindi-text">अनुस्मारक सेट करें</span>
                </button>
              </div>
            </div>

            <!-- Default Event 2 -->
            <div class="event-card">
              <div class="event-date">
                <div class="date-day" style="color:#fff;">28</div>
                <div class="date-month english-text" style="color:#fff;">JAN</div>
                <div class="date-month hindi-text" style="color:#fff;">जनवरी</div>
                <div class="date-year" style="color:#fff;">2025</div>
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
                <div class="event-meta" style="display:flex;flex-direction:column;align-items:flex-start;gap:6px;margin:8px 0 0 0;padding:0;">
                  <span class="event-time">🕒 2:00 PM</span>
                  <span class="event-location english-text"><i class="fas fa-map-marker-alt"></i> North Block, Finance Ministry</span>
                  <span class="event-location hindi-text"><i class="fas fa-map-marker-alt"></i> नॉर्थ ब्लॉक, वित्त मंत्रालय</span>
                </div>
                <button class="event-reminder-btn">
                  <span class="english-text">Set Reminder</span>
                  <span class="hindi-text">अनुस्मारक सेट करें</span>
                </button>
              </div>
            </div>
          @endforelse
        </div>

        <div class="events-cta-footer">
          <div class="cta-content">
          </div>
          <div class="cta-buttons">
           
            <a href="/events" class="cta-btn secondary" style="display:inline-block;text-decoration:none;">
        <span class="english-text">View All Events</span>
        <span class="hindi-text">सभी कार्यक्रम देखें</span>
     </a>
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
         <a href="/object-certificate">
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
         <a href="https://ceib.gov.in/" target="_blank">
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
            <div class="social-links-container" style="height: 670px;">
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
                    <a href="https://www.facebook.com/finmin.goi/" class="social-platform-card" target="_blank" rel="noopener">
                        <div class="platform-icon facebook-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </div>
                        <div class="platform-info">
                            <h3 class="english-text">Facebook</h3>
                            <h3 class="hindi-text">फेसबुक</h3>
                            <p class="english-text">finmin.goi</p>
                            <p class="hindi-text">finmin.goi</p>
                        </div>
                        <div class="follow-btn">
                            <span class="english-text">Like</span>
                            <span class="hindi-text">लाइक करें</span>
                        </div>
                    </a>

                    <!-- YouTube -->
                    <a href="https://www.youtube.com/c/MinistryofFinanceGovernmentofIndia" class="social-platform-card" target="_blank" rel="noopener">
                        <div class="platform-icon youtube-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </div>
                        <div class="platform-info">
                            <h3 class="english-text">YouTube</h3>
                            <h3 class="hindi-text">यूट्यूब</h3>
                            <p class="english-text">MinistryofFinanceGovernmentofIndia</p>
                            <p class="hindi-text">वित्त मंत्रालय</p>
                        </div>
                        <div class="follow-btn">
                            <span class="english-text">Subscribe</span>
                            <span class="hindi-text">सब्सक्राइब</span>
                        </div>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/finminindia/" class="social-platform-card" target="_blank" rel="noopener">
                        <div class="platform-icon instagram-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </div>
                        <div class="platform-info">
                            <h3 class="english-text">Instagram</h3>
                            <h3 class="hindi-text">इंस्टाग्राम</h3>
                            <p class="english-text">@finminindia</p>
                            <p class="hindi-text">@finminindia</p>
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
                    <div id="xTimeline" style="min-height: 520px;"></div>
                </div>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <script>
                  (function initXTimeline(){
                    const mount = document.getElementById('xTimeline');
                    if (!mount) return;
                    const handle = 'FinMinIndia'; // change to desired handle
                    function tryRender(attempt){
                      if (!window.twttr || !window.twttr.widgets) {
                        if (attempt < 20) return setTimeout(() => tryRender(attempt + 1), 300);
                        mount.innerHTML = '<a href="https://twitter.com/'+handle+'">Tweets by '+handle+'</a>';
                        return;
                      }
                      window.twttr.widgets.createTimeline(
                        { sourceType: 'profile', screenName: handle },
                        mount,
                        { chrome: 'noheader nofooter noborders', tweetLimit: 5, height: 520 }
                      ).catch(() => {
                        mount.innerHTML = '<a href="https://twitter.com/'+handle+'">Tweets by '+handle+'</a>';
                      });
                    }
                    tryRender(0);
                  })();
                </script>
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
  
  <div class="logo-inner" id="logoSlider">
    <div class="logo-item"><img src="uploads/02-my-gov-in.jpg" alt="MyGov" /></div>
    <!-- <div class="logo-item"><img src="uploads/india-gov-in.png" alt="India.gov.in" /></div> -->
    <div class="logo-item"><img src="uploads/01-national-portal-of-india.jpg" alt="India.gov.in" /></div>
    <div class="logo-item"><img src="uploads/06-make-in-india.jpg" alt="Make in India" /></div>
    <div class="logo-item"><img src="uploads/data-gov.png" alt="Data.gov.in" /></div>
    <div class="logo-item"><img src="uploads/eci.png" alt="Election Commission" /></div>
    <div class="logo-item"><img src="uploads/digital-india-logo1.png" alt="Digital India" /></div>
  </div>

</div>


    <!-- FOOTER -->
   @include('partials.footer')

    <script>
      // Font size dropdown functionality (guarded for pages where controls may be absent)
      const fontBtn = document.getElementById("fontSizeBtn");
      const fontMenu = document.getElementById("fontSizeMenu");

      if (fontBtn && fontMenu && fontMenu.parentElement) {
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
      }

      // Language dropdown logic is centralized in /js/language-switcher.js

    // Function to update dynamic content (like marquee, etc.)
function updateDynamicContent(lang) {
  // Keep server-rendered announcements; do not overwrite with static content.
  // Only (re)apply marquee hover behavior if needed.
  setupMarqueeHover();
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
      // Language initialization handled by /js/language-switcher.js

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


// Login functionality removed - now redirects to separate login page
      
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
<script src="/js/language-switcher.js"></script>
  </body>
</html>
