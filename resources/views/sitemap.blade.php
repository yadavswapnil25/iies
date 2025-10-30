<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Map - Indian International Economic Service</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
          crossorigin="anonymous">
    <style>
        .sitemap-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        
        .sitemap-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .sitemap-title {
            font-size: 2.5rem;
            color: #1a365d;
            margin-bottom: 10px;
        }
        
        .sitemap-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 20px;
        }
        
        .sitemap-description {
            font-size: 1rem;
            color: #777;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .sitemap-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .sitemap-section {
            background: #fff;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-left: 4px solid #1a365d;
        }
        
        .section-title {
            font-size: 1.4rem;
            color: #1a365d;
            margin-bottom: 20px;
            font-weight: bold;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        
        .page-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .page-item {
            margin-bottom: 15px;
            padding: 12px;
            background: #f8f9fa;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        
        .page-item:hover {
            background: #e2e8f0;
            transform: translateX(5px);
        }
        
        .page-link {
            display: block;
            text-decoration: none;
            color: #1a365d;
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 5px;
        }
        
        .page-link:hover {
            color: #2c5282;
        }
        
        .page-description {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.4;
        }
        
        .page-url {
            font-size: 0.8rem;
            color: #999;
            font-family: monospace;
            margin-top: 5px;
        }
        
        .sitemap-footer {
            text-align: center;
            margin-top: 50px;
            padding: 30px;
            background: #f8f9fa;
            border-radius: 8px;
        }
        
        .footer-text {
            color: #666;
            font-size: 1rem;
        }
        
        .back-to-home {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background: #1a365d;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: background 0.3s ease;
        }
        
        .back-to-home:hover {
            background: #2c5282;
        }
        
        @media (max-width: 768px) {
            .sitemap-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .sitemap-title {
                font-size: 2rem;
            }
            
            .sitemap-container {
                padding: 20px 15px;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')
    
    <main id="maincontent">
        <div class="sitemap-container">
            <div class="sitemap-header">
                <h1 class="sitemap-title">Site Map</h1>
                <p class="sitemap-subtitle">Indian International Economic Service</p>
                <p class="sitemap-description">
                    Navigate through all sections of our website. This comprehensive site map provides easy access to all pages, services, and information available on the IIES website.
                </p>
            </div>
            
            <div class="sitemap-grid">
                @foreach($siteMap as $section)
                <div class="sitemap-section">
                    <h2 class="section-title">{{ $section['title'] }}</h2>
                    <ul class="page-list">
                        @foreach($section['pages'] as $page)
                        <li class="page-item">
                            <a href="{{ $page['url'] }}" class="page-link">{{ $page['title'] }}</a>
                            <div class="page-description">{{ $page['description'] }}</div>
                            <div class="page-url">{{ $page['url'] }}</div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
            
            <div class="sitemap-footer">
                <p class="footer-text">
                    This site map is automatically generated and includes all public pages available on the Indian International Economic Service website.
                </p>
                <a href="/" class="back-to-home">← Back to Home</a>
            </div>
        </div>
    </main>
    
    @include('partials.footer')
    
    <script src="/js/language-switcher.js"></script>
</body>
</html>

