<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>NOC Progress Report - {{ $clientReport->full_name }}</title>
    @include('partials.favicons')
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        main#maincontent {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 20px;
        }
        
        .dashboard-container {
            max-width: 1200px;
            width: 100%;
            margin: 0;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #e2e8f0;
        }
        .dashboard-title h1 {
            color: #1a365d;
            margin: 0;
        }
        .dashboard-title p {
            color: #666;
            margin: 5px 0 0 0;
        }
        .dashboard-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .print-btn {
            background: #1a365d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 14px;
            font-weight: 500;
        }
        .print-btn:hover {
            background: #2c5282;
        }
        
        .logout-btn {
            background: #e53e3e;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .logout-btn:hover {
            background: #c53030;
        }
        .report-section {
            margin-bottom: 30px;
        }
        .section-title {
            background: #1a365d;
            color: white;
            padding: 15px;
            margin: 0 0 20px 0;
            border-radius: 5px;
            font-size: 18px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }
        .info-item {
            background: #f7fafc;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #1a365d;
        }
        .info-label {
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 5px;
        }
        .info-value {
            color: #4a5568;
        }
        .status-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }
        .status-draft { background: #fed7d7; color: #c53030; }
        .status-in-progress { background: #bee3f8; color: #2b6cb0; }
        .status-completed { background: #c6f6d5; color: #22543d; }
        .status-on-hold { background: #faf089; color: #744210; }
        .status-rejected { background: #fed7d7; color: #c53030; }
        .progress-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .progress-table th,
        .progress-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        .progress-table th {
            background: #f7fafc;
            font-weight: 600;
            color: #2d3748;
        }
        .progress-table tr:hover {
            background: #f7fafc;
        }
        .no-data {
            text-align: center;
            color: #666;
            padding: 40px;
            background: #f7fafc;
            border-radius: 5px;
        }
        
        /* Print-specific styles - Match PDF Layout */
        @media print {
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                background: white !important;
                font-size: 9px;
                line-height: 1.2;
                color: #000 !important;
                padding: 0;
                margin: 0;
                height: auto !important;
                max-height: none !important;
                overflow: visible !important;
            }
            
            main#maincontent {
                display: block !important;
                padding: 0 !important;
                margin: 0 !important;
                height: auto !important;
                max-height: none !important;
                overflow: visible !important;
            }
            
            .dashboard-container {
                max-width: none !important;
                width: 100% !important;
                margin: 0 !important;
                padding: 10px !important;
                box-shadow: none !important;
                border-radius: 0 !important;
                background: white !important;
                height: auto !important;
                max-height: none !important;
                overflow: visible !important;
                page-break-inside: auto !important;
            }

            /* Hide dashboard header and buttons */
            .dashboard-header,
            .dashboard-actions,
            .print-btn,
            .logout-btn {
                display: none !important;
            }

            /* Show print header with logo */
            .print-header {
                display: block !important;
                page-break-after: avoid;
                margin-bottom: 8px;
            }

            .form-header-logo {
                text-align: center !important;
                padding: 8px 0 !important;
                margin-bottom: 8px !important;
                border-bottom: 1px solid #000 !important;
            }

            .form-logo {
                max-width: 100px !important;
                height: auto !important;
            }

            .form-brand-title {
                font-size: 14px !important;
                font-weight: 700 !important;
                color: #000 !important;
                margin: 0 0 2px 0 !important;
                line-height: 1.3 !important;
            }

            .form-brand-title .english-text {
                font-size: 12px !important;
            }

            .form-brand-subtitle {
                font-size: 10px !important;
                margin: 1px 0 !important;
                color: #000 !important;
            }

            /* Report Title */
            .dashboard-title {
                text-align: center;
                margin-bottom: 8px;
                page-break-after: avoid;
            }

            .dashboard-title h1 {
                font-size: 14px !important;
                font-weight: 700;
                color: #000 !important;
                margin: 0 0 4px 0;
            }

            .dashboard-title p {
                font-size: 10px !important;
                color: #000 !important;
                margin: 0;
            }
            
            /* Section Titles */
            .section-title {
                background: transparent !important;
                color: #000 !important;
                padding: 6px 0 !important;
                margin: 0 0 6px 0 !important;
                border-radius: 0 !important;
                font-size: 11px !important;
                font-weight: 700;
                border-bottom: 1px solid #000 !important;
                page-break-after: avoid;
            }

            /* Report Sections */
            .report-section {
                margin-bottom: 12px !important;
                page-break-inside: avoid;
            }

            /* Info Grid - Convert to Table Format for Sections 1-7 */
            .report-section:nth-of-type(1) .info-grid,
            .report-section:nth-of-type(2) .info-grid,
            .report-section:nth-of-type(3) .info-grid,
            .report-section:nth-of-type(4) .info-grid,
            .report-section:nth-of-type(5) .info-grid,
            .report-section:nth-of-type(6) .info-grid,
            .report-section:nth-of-type(7) .info-grid {
                display: table !important;
                width: 100% !important;
                border-collapse: collapse !important;
                margin-bottom: 6px !important;
                font-size: 8px !important;
                border: 1px solid #000 !important;
            }
            
            .report-section:nth-of-type(1) .info-item,
            .report-section:nth-of-type(2) .info-item,
            .report-section:nth-of-type(3) .info-item,
            .report-section:nth-of-type(4) .info-item,
            .report-section:nth-of-type(5) .info-item,
            .report-section:nth-of-type(6) .info-item,
            .report-section:nth-of-type(7) .info-item {
                display: table-row !important;
                margin-bottom: 0 !important;
                padding: 0 !important;
                border: none !important;
                border-bottom: 1px solid #000 !important;
                page-break-inside: avoid;
            }

            .report-section:nth-of-type(1) .info-item:last-child,
            .report-section:nth-of-type(2) .info-item:last-child,
            .report-section:nth-of-type(3) .info-item:last-child,
            .report-section:nth-of-type(4) .info-item:last-child,
            .report-section:nth-of-type(5) .info-item:last-child,
            .report-section:nth-of-type(6) .info-item:last-child,
            .report-section:nth-of-type(7) .info-item:last-child {
                border-bottom: none !important;
            }

            .report-section:nth-of-type(1) .info-label,
            .report-section:nth-of-type(2) .info-label,
            .report-section:nth-of-type(3) .info-label,
            .report-section:nth-of-type(4) .info-label,
            .report-section:nth-of-type(5) .info-label,
            .report-section:nth-of-type(6) .info-label,
            .report-section:nth-of-type(7) .info-label {
                display: table-cell !important;
                font-size: 7px !important;
                font-weight: 700;
                color: #000 !important;
                padding: 2px 4px !important;
                border-right: 1px solid #000 !important;
                width: 35% !important;
                vertical-align: middle;
                background: #f9f9f9 !important;
            }

            .report-section:nth-of-type(1) .info-value,
            .report-section:nth-of-type(2) .info-value,
            .report-section:nth-of-type(3) .info-value,
            .report-section:nth-of-type(4) .info-value,
            .report-section:nth-of-type(5) .info-value,
            .report-section:nth-of-type(6) .info-value,
            .report-section:nth-of-type(7) .info-value {
                display: table-cell !important;
                font-size: 8px !important;
                color: #000 !important;
                padding: 2px 4px !important;
                width: 65% !important;
                vertical-align: middle;
            }

            /* Optimize Sections 6 and 7 specifically */
            .report-section:nth-of-type(6) .info-grid,
            .report-section:nth-of-type(7) .info-grid {
                margin-bottom: 4px !important;
                font-size: 7px !important;
            }

            .report-section:nth-of-type(6) .info-label,
            .report-section:nth-of-type(7) .info-label {
                font-size: 7px !important;
                padding: 2px 3px !important;
                width: 38% !important;
            }

            .report-section:nth-of-type(6) .info-value,
            .report-section:nth-of-type(7) .info-value {
                font-size: 7px !important;
                padding: 2px 3px !important;
                width: 62% !important;
            }

            /* Full-width items (spanning both columns) */
            .report-section:nth-of-type(1) .info-item[style*="grid-column: 1 / -1"],
            .report-section:nth-of-type(2) .info-item[style*="grid-column: 1 / -1"],
            .report-section:nth-of-type(3) .info-item[style*="grid-column: 1 / -1"],
            .report-section:nth-of-type(4) .info-item[style*="grid-column: 1 / -1"],
            .report-section:nth-of-type(5) .info-item[style*="grid-column: 1 / -1"],
            .report-section:nth-of-type(6) .info-item[style*="grid-column: 1 / -1"],
            .report-section:nth-of-type(7) .info-item[style*="grid-column: 1 / -1"] {
                display: table-row !important;
            }

            .report-section:nth-of-type(1) .info-item[style*="grid-column: 1 / -1"] .info-label,
            .report-section:nth-of-type(2) .info-item[style*="grid-column: 1 / -1"] .info-label,
            .report-section:nth-of-type(3) .info-item[style*="grid-column: 1 / -1"] .info-label,
            .report-section:nth-of-type(4) .info-item[style*="grid-column: 1 / -1"] .info-label,
            .report-section:nth-of-type(5) .info-item[style*="grid-column: 1 / -1"] .info-label,
            .report-section:nth-of-type(6) .info-item[style*="grid-column: 1 / -1"] .info-label,
            .report-section:nth-of-type(7) .info-item[style*="grid-column: 1 / -1"] .info-label {
                width: 35% !important;
            }

            .report-section:nth-of-type(1) .info-item[style*="grid-column: 1 / -1"] .info-value,
            .report-section:nth-of-type(2) .info-item[style*="grid-column: 1 / -1"] .info-value,
            .report-section:nth-of-type(3) .info-item[style*="grid-column: 1 / -1"] .info-value,
            .report-section:nth-of-type(4) .info-item[style*="grid-column: 1 / -1"] .info-value,
            .report-section:nth-of-type(5) .info-item[style*="grid-column: 1 / -1"] .info-value,
            .report-section:nth-of-type(6) .info-item[style*="grid-column: 1 / -1"] .info-value,
            .report-section:nth-of-type(7) .info-item[style*="grid-column: 1 / -1"] .info-value {
                width: 65% !important;
            }

            /* Remove extra spacing in sections 6 and 7 */
            .report-section:nth-of-type(6),
            .report-section:nth-of-type(7) {
                margin-bottom: 8px !important;
                padding-bottom: 4px !important;
            }

            .report-section:nth-of-type(6) .section-title,
            .report-section:nth-of-type(7) .section-title {
                margin-bottom: 4px !important;
                padding-bottom: 2px !important;
            }

            /* Sections 10 and 11 - Convert to Table Format */
            .report-section:nth-of-type(10) .info-grid,
            .report-section:nth-of-type(11) .info-grid {
                display: table !important;
                width: 100% !important;
                border-collapse: collapse !important;
                margin-bottom: 6px !important;
                font-size: 7px !important;
                border: 1px solid #000 !important;
            }

            .report-section:nth-of-type(10) .info-item,
            .report-section:nth-of-type(11) .info-item {
                display: table-row !important;
                margin-bottom: 0 !important;
                padding: 0 !important;
                border: none !important;
                border-bottom: 1px solid #000 !important;
                page-break-inside: avoid;
            }

            .report-section:nth-of-type(10) .info-item:last-child,
            .report-section:nth-of-type(11) .info-item:last-child {
                border-bottom: none !important;
            }

            /* Section 10 - Status Codes (has label and value) */
            .report-section:nth-of-type(10) .info-label {
                display: table-cell !important;
                font-size: 7px !important;
                font-weight: 700;
                color: #000 !important;
                padding: 2px 4px !important;
                border-right: 1px solid #000 !important;
                width: 30% !important;
                vertical-align: middle;
                background: white !important;
            }

            .report-section:nth-of-type(10) .info-value {
                display: table-cell !important;
                font-size: 7px !important;
                color: #000 !important;
                padding: 2px 4px !important;
                width: 70% !important;
                vertical-align: middle;
            }

            /* Section 11 - Document Checklist (only value, no label) */
            .report-section:nth-of-type(11) .info-item {
                display: table-row !important;
            }

            .report-section:nth-of-type(11) .info-value {
                display: table-cell !important;
                font-size: 7px !important;
                color: #000 !important;
                padding: 2px 4px !important;
                width: 100% !important;
                vertical-align: middle;
            }

            /* Override inline styles for sections 10 and 11 */
            .report-section:nth-of-type(10) .info-item[style*="border-left"],
            .report-section:nth-of-type(11) .info-item[style*="border-left"] {
                border-left: none !important;
            }

            .report-section:nth-of-type(10) .info-item[style*="padding"],
            .report-section:nth-of-type(11) .info-item[style*="padding"] {
                padding: 0 !important;
            }

            .report-section:nth-of-type(10) .info-value[style*="font-size"],
            .report-section:nth-of-type(11) .info-value[style*="font-size"] {
                font-size: 7px !important;
            }

            .report-section:nth-of-type(10) .info-label[style*="font-weight"],
            .report-section:nth-of-type(10) .info-label[style*="margin-bottom"] {
                font-weight: 700 !important;
                margin-bottom: 0 !important;
            }

            /* Remove extra spacing in sections 10 and 11 */
            .report-section:nth-of-type(10),
            .report-section:nth-of-type(11) {
                margin-bottom: 8px !important;
                padding-bottom: 4px !important;
            }

            .report-section:nth-of-type(10) .section-title,
            .report-section:nth-of-type(11) .section-title {
                margin-bottom: 4px !important;
                padding-bottom: 2px !important;
            }

            /* Status Badges - Print as text */
            .status-badge {
                background: transparent !important;
                border: none !important;
                padding: 0 !important;
                border-radius: 0 !important;
                color: #000 !important;
                font-size: 9px !important;
                font-weight: normal !important;
            }
            
            /* Progress Tables */
            .progress-table {
                border-collapse: collapse !important;
                width: 100% !important;
                margin-bottom: 8px !important;
                font-size: 8px !important;
                page-break-inside: avoid;
            }
            
            .progress-table th,
            .progress-table td {
                border: 1px solid #000 !important;
                padding: 4px 6px !important;
                text-align: left !important;
                color: #000 !important;
                font-size: 8px !important;
            }
            
            .progress-table th {
                background: white !important;
                font-weight: 700;
                color: #000 !important;
            }

            .progress-table td {
                font-weight: normal;
            }

            .progress-table tr {
                page-break-inside: avoid;
            }
            
            /* Remove all colors in print - except table headers */
            * {
                background: white !important;
                color: #000 !important;
            }

            /* Ensure table backgrounds are white */
            .report-section:nth-of-type(1) .info-label,
            .report-section:nth-of-type(2) .info-label,
            .report-section:nth-of-type(3) .info-label,
            .report-section:nth-of-type(4) .info-label,
            .report-section:nth-of-type(5) .info-label,
            .report-section:nth-of-type(6) .info-label,
            .report-section:nth-of-type(7) .info-label {
                background: white !important;
            }

            /* Page Setup - Allow multiple pages */
            @page {
                margin: 0.5cm;
                size: A4;
                orphans: 3;
                widows: 3;
            }

            /* Remove any height restrictions */
            html,
            body,
            main,
            .dashboard-container,
            .report-section {
                height: auto !important;
                max-height: none !important;
                min-height: 0 !important;
                overflow: visible !important;
            }

            /* Ensure content flows across pages */
            * {
                page-break-inside: auto !important;
                page-break-after: auto !important;
            }

            .report-section {
                page-break-inside: avoid !important;
                page-break-after: auto !important;
            }

            /* Allow tables to break across pages */
            .progress-table {
                page-break-inside: auto !important;
            }

            .progress-table tr {
                page-break-inside: avoid !important;
            }

            /* Hide unnecessary elements */
            .info-item:empty,
            br + br {
                display: none !important;
            }

            /* Optimize spacing */
            br {
                line-height: 1;
            }

            /* Last updated footer */
            div[style*="text-align: center"] {
                margin-top: 12px !important;
                padding-top: 8px !important;
                border-top: 1px solid #000 !important;
                font-size: 8px !important;
                color: #000 !important;
            }

            /* Ensure all data fits */
            .dashboard-container > *:last-child {
                margin-bottom: 0 !important;
            }
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            main#maincontent {
                padding: 10px;
            }
            
            .dashboard-container {
                padding: 15px;
            }
            
            .dashboard-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .dashboard-actions {
                width: 100%;
                justify-content: space-between;
            }
            
            .progress-table {
                font-size: 14px;
            }
            
            .progress-table th,
            .progress-table td {
                padding: 8px 4px;
            }
        }
        
        @media (max-width: 480px) {
            .dashboard-container {
                padding: 10px;
            }
            
            .dashboard-title h1 {
                font-size: 24px;
            }
            
            .section-title {
                font-size: 16px;
                padding: 10px;
            }
            
            .progress-table {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>

    <main id="maincontent" class="page-main" role="main">
        <div class="dashboard-container">
            <!-- Print Header - Logo Section (hidden in screen, visible in print) -->
            <div class="print-header" style="display: none;">
                <div class="form-header-logo" style="text-align: center; padding: 8px 0; margin-bottom: 8px; border-bottom: 1px solid #000;">
                    <div class="form-logo-container">
                        <img src="/uploads/main-logo.jpg" alt="IIES Logo" class="form-logo" style="max-width: 100px; height: auto;" onerror="this.style.display='none'">
                    </div>
                    <div class="form-brand-text">
                        <h1 class="form-brand-title" style="font-size: 14px; font-weight: 700; margin: 0; line-height: 1.3;">
                            <span class="hindi-text">भारतीय अंतर्राष्ट्रीय आर्थिक सेवा</span><br>
                            <span class="english-text" style="font-size: 12px;">Indian International Economic Service</span>
                        </h1>
                        <p class="form-brand-subtitle hindi-text" style="font-size: 10px; margin: 2px 0; color: #000;">वित्त मंत्रालय, भारत सरकार</p>
                        <p class="form-brand-subtitle english-text" style="font-size: 10px; margin: 2px 0; color: #000;">IIES, Government of India</p>
                    </div>
                </div>
                <div style="text-align: center; margin-bottom: 8px;">
                    <h2 style="font-size: 14px; font-weight: 700; margin: 0; color: #000;">NOC Progress Report</h2>
                </div>
            </div>

            <div class="dashboard-header">
                <div class="dashboard-title">
                    <h1>NOC Progress Report</h1>
                    <p>Application ID: {{ $clientReport->unique_id }}</p>
                </div>
                <div class="dashboard-actions">
                    <button onclick="window.print()" class="print-btn">
                        <i class="fas fa-print"></i> Print Report
                    </button>
                    <a href="{{ route('user.logout') }}" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </div>

            <!-- Section 1: File Information -->
            <div class="report-section">
                <h2 class="section-title">1) File Information</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Unique ID</div>
                        <div class="info-value">{{ $clientReport->unique_id ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">File No.</div>
                        <div class="info-value">{{ $clientReport->file_no ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Acknowledgement No.</div>
                        <div class="info-value">{{ $clientReport->acknowledgement_no ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Prepared By (Officer / Department)</div>
                        <div class="info-value">{{ $clientReport->prepared_by ?: '-' }}</div>
                    </div>
                </div>
            </div>

            <!-- Section 2: Client Information -->
            <div class="report-section">
                <h2 class="section-title">2) Client Information</h2>
                <div class="info-grid">
                    <div class="info-item" style="grid-column: 1 / -1;">
                        <div class="info-label">Full Name (First + Last)</div>
                        <div class="info-value">{{ $clientReport->full_name ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Father / Husband Name</div>
                        <div class="info-value">{{ $clientReport->father_husband_name ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Date of Birth</div>
                        <div class="info-value">{{ $clientReport->date_of_birth ? $clientReport->date_of_birth->format('d/m/Y') : '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Contact Number</div>
                        <div class="info-value">{{ $clientReport->contact_number ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Email Id</div>
                        <div class="info-value">{{ $clientReport->email_id ?: '-' }}</div>
                    </div>
                    <div class="info-item" style="grid-column: 1 / -1;">
                        <div class="info-label">Permanent Address</div>
                        <div class="info-value">{{ $clientReport->permanent_address ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">PAN Number</div>
                        <div class="info-value">{{ $clientReport->pan_number ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Aadhar Number</div>
                        <div class="info-value">{{ $clientReport->aadhar_number ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Passport Number</div>
                        <div class="info-value">{{ $clientReport->passport_number ?: '-' }}</div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Application & Work Details -->
            <div class="report-section">
                <h2 class="section-title">3) Application & Work Details</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Application Type / Service</div>
                        <div class="info-value">{{ $clientReport->application_type ? ucfirst(str_replace('_', ' ', $clientReport->application_type)) : '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Submission Date</div>
                        <div class="info-value">{{ $clientReport->submission_date ? $clientReport->submission_date->format('d/m/Y') : '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Reference / Application No.</div>
                        <div class="info-value">{{ $clientReport->reference_application_no ?: '-' }}</div>
                    </div>
                    <div class="info-item" style="grid-column: 1 / -1;">
                        <div class="info-label">Nature of Work (Description)</div>
                        <div class="info-value">{{ $clientReport->nature_of_work ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Verification Level</div>
                        <div class="info-value">{{ $clientReport->verification_level ? ucfirst($clientReport->verification_level) : '-' }}</div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Fund & NOC Details -->
            <div class="report-section">
                <h2 class="section-title">4) Fund & NOC Details</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Fund Type</div>
                        <div class="info-value">{{ $clientReport->fund_type ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Amount</div>
                        <div class="info-value">{{ $clientReport->amount ? number_format($clientReport->amount, 2) : '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Currency</div>
                        <div class="info-value">{{ $clientReport->currency ?: '-' }}</div>
                    </div>
                    <div class="info-item" style="grid-column: 1 / -1;">
                        <div class="info-label">Purpose of Funds</div>
                        <div class="info-value">{{ $clientReport->purpose_of_funds ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">NOC Type</div>
                        <div class="info-value">{{ $clientReport->noc_type ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">NOC Reference No.</div>
                        <div class="info-value">{{ $clientReport->noc_reference_no ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">NOC Deed No.</div>
                        <div class="info-value">{{ $clientReport->noc_deed_no ?: '-' }}</div>
                    </div>
                    <div class="info-item" style="grid-column: 1 / -1;">
                        <div class="info-label">Conditions on NOC</div>
                        <div class="info-value">{{ $clientReport->conditions_on_noc ?: '-' }}</div>
                    </div>
                </div>
            </div>

            <!-- Section 5: Beneficiary Bank & Payment Details -->
            <div class="report-section">
                <h2 class="section-title">5) Beneficiary Bank & Payment Details</h2>
                <div class="info-grid">
                    <div class="info-item" style="grid-column: 1 / -1;">
                        <div class="info-label">Beneficiary Bank Name</div>
                        <div class="info-value">{{ $clientReport->beneficiary_bank_name ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">IFSC Code</div>
                        <div class="info-value">{{ $clientReport->ifsc_code ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">SWIFT Code</div>
                        <div class="info-value">{{ $clientReport->swift_code ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Bank Account Number</div>
                        <div class="info-value">{{ $clientReport->bank_account_number ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Bank Email ID</div>
                        <div class="info-value">{{ $clientReport->bank_email ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Account Type</div>
                        <div class="info-value">{{ $clientReport->account_type ?: '-' }}</div>
                    </div>
                </div>
            </div>

            <!-- Section 6: Origin/Sender Details -->
            <div class="report-section">
                <h2 class="section-title">6) Origin/Sender Details</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Origin Country</div>
                        <div class="info-value">{{ $clientReport->origin_country ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Sender Name / Institution</div>
                        <div class="info-value">{{ $clientReport->sender_name ?: '-' }}</div>
                    </div>
                    <div class="info-item full-width">
                        <div class="info-label">Sender Individual / Institution Address</div>
                        <div class="info-value">{{ $clientReport->sender_address ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Remitting Bank Name</div>
                        <div class="info-value">{{ $clientReport->remitting_bank_name ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">SWIFT Code / BIC</div>
                        <div class="info-value">{{ $clientReport->sender_swift_code ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Transaction Reference / Transfer Trace</div>
                        <div class="info-value">{{ $clientReport->transaction_reference ?: '-' }}</div>
                    </div>
                    @if($clientReport->sender_email)
                    <div class="info-item">
                        <div class="info-label">Sender Email</div>
                        <div class="info-value">{{ $clientReport->sender_email }}</div>
                    </div>
                    @endif
                    @if($clientReport->sender_contact)
                    <div class="info-item">
                        <div class="info-label">Sender Contact</div>
                        <div class="info-value">{{ $clientReport->sender_contact }}</div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Section 7: Work Information of Client -->
            <div class="report-section">
                <h2 class="section-title">7) Work Information of Client</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Type of Work</div>
                        <div class="info-value">{{ $clientReport->type_of_work ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">HSN Code</div>
                        <div class="info-value">{{ $clientReport->hsn_code ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Broker/Agent's Name</div>
                        <div class="info-value">{{ $clientReport->broker_agent_name ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Banking Partner</div>
                        <div class="info-value">{{ $clientReport->banking_partner ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Total Amount</div>
                        <div class="info-value">{{ $clientReport->total_amount ? number_format($clientReport->total_amount, 2) : '-' }}</div>
                    </div>
                </div>
            </div>

            <!-- Section 8: File Processing / File Movement -->
            <div class="report-section">
                <h2 class="section-title">8) File Processing / File Movement</h2>
                <table class="progress-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Stage</th>
                            <th>Status</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Payment Book</td>
                            <td>
                                @if($clientReport->payment_book_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->payment_book_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->payment_book_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->payment_book_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Payment Book Approval</td>
                            <td>
                                @if($clientReport->payment_book_status_approval)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->payment_book_status_approval) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->payment_book_status_approval)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->payment_book_status_approval_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>NFRA Application Processing</td>
                            <td>
                                @if($clientReport->nfra_application_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->nfra_application_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->nfra_application_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->nfra_application_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>NFRA Approval</td>
                            <td>
                                @if($clientReport->nfra_approval_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->nfra_approval_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->nfra_approval_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->nfra_approval_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Form 28 Application Processing</td>
                            <td>
                                @if($clientReport->form_28_application_processing)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->form_28_application_processing) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->form_28_application_processing)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->form_28_application_processing_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>06</td>
                            <td>CBDT Approval</td>
                            <td>
                                @if($clientReport->cbdt_approval_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->cbdt_approval_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->cbdt_approval_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->cbdt_approval_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>07</td>
                            <td>PFMS Approval</td>
                            <td>
                                @if($clientReport->pfms_approval_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->pfms_approval_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->pfms_approval_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->pfms_approval_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>08</td>
                            <td>Security Fee Deposit</td>
                            <td>
                                @if($clientReport->security_fee_deposit)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->security_fee_deposit) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->security_fee_deposit)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->security_fee_deposit_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>09</td>
                            <td>FORM 28 Approval</td>
                            <td>
                                @if($clientReport->form_28_approval)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->form_28_approval) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->form_28_approval)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->form_28_approval_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>NOC Fee</td>
                            <td>
                                @if($clientReport->noc_fee)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->noc_fee) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->noc_fee)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->noc_fee_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Form 28B Application Processing</td>
                            <td>
                                @if($clientReport->form_28b_application_processing)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->form_28b_application_processing) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->form_28b_application_processing)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->form_28b_application_processing_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Form 28 B Approval</td>
                            <td>
                                @if($clientReport->form_28b_approval)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->form_28b_approval) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->form_28b_approval)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->form_28b_approval_notes ?: '-' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Section 9: Progress Tracker -->
            <div class="report-section">
                <h2 class="section-title">9) Progress Tracker</h2>
                <table class="progress-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Stage</th>
                            <th>Status</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>FEMA Application</td>
                            <td>
                                @if($clientReport->fema_application_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->fema_application_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->fema_application_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->fema_application_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Preliminary Check</td>
                            <td>
                                @if($clientReport->preliminary_check_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->preliminary_check_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->preliminary_check_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->preliminary_check_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>KYC / Compliance Review</td>
                            <td>
                                @if($clientReport->kyc_compliance_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->kyc_compliance_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->kyc_compliance_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->kyc_compliance_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Bank Verification</td>
                            <td>
                                @if($clientReport->bank_verification_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->bank_verification_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->bank_verification_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->bank_verification_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Departmental Approval</td>
                            <td>
                                @if($clientReport->departmental_approval_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->departmental_approval_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->departmental_approval_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->departmental_approval_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>06</td>
                            <td>NOC Draft & Conditions</td>
                            <td>
                                @if($clientReport->noc_draft_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->noc_draft_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->noc_draft_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->noc_draft_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>07</td>
                            <td>NOC Issuance</td>
                            <td>
                                @if($clientReport->noc_issuance_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->noc_issuance_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->noc_issuance_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->noc_issuance_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>08</td>
                            <td>Information Grant</td>
                            <td>
                                @if($clientReport->information_grant_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->information_grant_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->information_grant_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->information_grant_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>09</td>
                            <td>Follow-up / Closure</td>
                            <td>
                                @if($clientReport->followup_closure_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->followup_closure_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->followup_closure_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->followup_closure_notes ?: '-' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Section 10: Status Codes & Definitions -->
            <div class="report-section">
                <h2 class="section-title">10) Status Codes & Definitions</h2>
                <div class="info-grid" style="grid-template-columns: 1fr;">
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: 1px solid #e2e8f0; padding: 10px 0;">
                        <div class="info-label" style="font-weight: 600; margin-bottom: 5px;">Received</div>
                        <div class="info-value" style="font-size: 14px;">Application has been received and registered.</div>
                    </div>
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: 1px solid #e2e8f0; padding: 10px 0;">
                        <div class="info-label" style="font-weight: 600; margin-bottom: 5px;">Pending Documents</div>
                        <div class="info-value" style="font-size: 14px;">Required documents are missing from the applicant.</div>
                    </div>
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: 1px solid #e2e8f0; padding: 10px 0;">
                        <div class="info-label" style="font-weight: 600; margin-bottom: 5px;">In Progress / Under Review</div>
                        <div class="info-value" style="font-size: 14px;">Processing is ongoing.</div>
                    </div>
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: 1px solid #e2e8f0; padding: 10px 0;">
                        <div class="info-label" style="font-weight: 600; margin-bottom: 5px;">Hold</div>
                        <div class="info-value" style="font-size: 14px;">Process is paused due to policy/technical reasons.</div>
                    </div>
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: 1px solid #e2e8f0; padding: 10px 0;">
                        <div class="info-label" style="font-weight: 600; margin-bottom: 5px;">Approved</div>
                        <div class="info-value" style="font-size: 14px;">Necessary approvals obtained (before NOC issuance).</div>
                    </div>
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: 1px solid #e2e8f0; padding: 10px 0;">
                        <div class="info-label" style="font-weight: 600; margin-bottom: 5px;">NOC Issued</div>
                        <div class="info-value" style="font-size: 14px;">NOC has been successfully issued.</div>
                    </div>
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: 1px solid #e2e8f0; padding: 10px 0;">
                        <div class="info-label" style="font-weight: 600; margin-bottom: 5px;">Rejected</div>
                        <div class="info-value" style="font-size: 14px;">Application invalid or rejected.</div>
                    </div>
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: none; padding: 10px 0;">
                        <div class="info-label" style="font-weight: 600; margin-bottom: 5px;">Closed</div>
                        <div class="info-value" style="font-size: 14px;">Process completed and closed.</div>
                    </div>
                </div>
            </div>

            <!-- Section 11: Document Checklist -->
            <div class="report-section">
                <h2 class="section-title">11) Document Checklist</h2>
                <div class="info-grid" style="grid-template-columns: 1fr;">
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: 1px solid #e2e8f0; padding: 10px 0;">
                        <div class="info-value" style="font-size: 14px;">Signed Application Form</div>
                    </div>
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: 1px solid #e2e8f0; padding: 10px 0;">
                        <div class="info-value" style="font-size: 14px;">ID Proof (Passport / Aadhaar / PAN)</div>
                    </div>
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: 1px solid #e2e8f0; padding: 10px 0;">
                        <div class="info-value" style="font-size: 14px;">Bank Statement / Transaction Proof</div>
                    </div>
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: 1px solid #e2e8f0; padding: 10px 0;">
                        <div class="info-value" style="font-size: 14px;">Source of Funds Documents</div>
                    </div>
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: 1px solid #e2e8f0; padding: 10px 0;">
                        <div class="info-value" style="font-size: 14px;">Company / Organization Registration (if applicable)</div>
                    </div>
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: 1px solid #e2e8f0; padding: 10px 0;">
                        <div class="info-value" style="font-size: 14px;">KYC / AML Related Documents</div>
                    </div>
                    <div class="info-item" style="grid-column: 1; border-left: none; border-bottom: none; padding: 10px 0;">
                        <div class="info-value" style="font-size: 14px;">Any Other Statutory Approvals (if applicable)</div>
                    </div>
                </div>
            </div>

            <!-- Section 12: Risks & Special Conditions -->
            <div class="report-section">
                <h2 class="section-title">12) Risks & Special Conditions</h2>
                <div class="info-item" style="background: #f9fafb; padding: 15px; border: 1px solid #e5e7eb; border-radius: 6px;">
                    <div class="info-value" style="font-size: 14px; line-height: 1.6; color: #374151;">
                        Notes about any regulatory constraints or banking restrictions. If the NOC is conditional upon specific requirements (e.g., escrow arrangement, tax clearance), list those conditions here.
                    </div>
                </div>
            </div>

            <!-- Section 13: Officer Remarks -->
            <div class="report-section">
                <h2 class="section-title">13) Officer Remarks</h2>
                <div class="info-grid">
                    @if($clientReport->general_notes)
                    <div class="info-item" style="grid-column: 1 / -1;">
                        <div class="info-label">General Notes</div>
                        <div class="info-value">{{ $clientReport->general_notes }}</div>
                    </div>
                    @endif
                    @if($clientReport->officer_remarks)
                    <div class="info-item" style="grid-column: 1 / -1;">
                        <div class="info-label">Officer Remarks</div>
                        <div class="info-value">{{ $clientReport->officer_remarks }}</div>
                    </div>
                    @endif
                    @if(!$clientReport->general_notes && !$clientReport->officer_remarks)
                    <div class="info-item" style="grid-column: 1 / -1;">
                        <div class="info-value" style="color: #666; font-style: italic;">(Officer to provide concise remarks about the particular stages, missing documents, or any additional conditions required.)</div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Section 14: Approval & Signature -->
            <div class="report-section">
                <h2 class="section-title">14) Approval & Signature</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Technical Team</div>
                        <div class="info-value">{{ $clientReport->technical_team_approval ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Legal Compliance Team</div>
                        <div class="info-value">{{ $clientReport->legal_compliance_approval ?: '-' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Final Authoriser</div>
                        <div class="info-value">{{ $clientReport->final_authoriser_approval ?: '-' }}</div>
                    </div>
                </div>
            </div>

            <!-- Section 15: General Notes -->
            <div class="report-section">
                <h2 class="section-title">15) General Notes</h2>
                <div class="info-item" style="grid-column: 1 / -1; background: #f9fafb; padding: 15px; border: 1px solid #e5e7eb; border-radius: 6px;">
                    <div class="info-value" style="font-size: 14px; line-height: 1.6; color: #374151;">
                        Group applications may require additional time (1-2 months) for review when applicable. Sensitive information should only be shared with authorised personnel.
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #e2e8f0;">
                <p style="color: #666; margin: 0;">
                    Last updated: {{ $clientReport->updated_at->format('d/m/Y H:i') }}
                </p>
            </div>
        </div>
    </main>

    <script src="/js/language-switcher.js"></script>
</body>
</html>
