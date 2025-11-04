<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'IIES Admin Panel')</title>
    @include('partials.favicons')
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        /* Header */
        .header {
            background: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            height: 64px;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100%;
            padding: 0 30px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 24px;
            font-weight: 700;
            color: #1a365d;
        }

        .logo img {
            height: 40px;
            width: auto;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        .logo-main {
            font-size: 20px;
            font-weight: 700;
            color: #1a365d;
        }

        .logo-sub {
            font-size: 12px;
            font-weight: 500;
            color: #4a5568;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-name {
            font-weight: 500;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #4f46e5;
            color: white;
        }

        .btn-primary:hover {
            background: #4338ca;
        }

        .btn-secondary {
            background: #e5e7eb;
            color: #374151;
        }

        .btn-secondary:hover {
            background: #d1d5db;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            left: 0;
            top: 64px;
            bottom: 0;
            width: 250px;
            background: #fff;
            box-shadow: 2px 0 4px rgba(0,0,0,0.1);
            overflow-y: auto;
        }

        .nav-menu {
            padding: 20px 0;
        }

        .nav-item {
            padding: 12px 30px;
            color: #6b7280;
            text-decoration: none;
            display: block;
            transition: all 0.3s ease;
        }

        .nav-item:hover {
            background: #f9fafb;
            color: #4f46e5;
        }

        .nav-item.active {
            background: #eef2ff;
            color: #4f46e5;
            border-right: 3px solid #4f46e5;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            margin-top: 64px;
            padding: 30px;
            min-height: calc(100vh - 64px);
        }

        .page-header {
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #111827;
        }

        /* Alert Messages */
        .alert {
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-success {
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #6ee7b7;
        }

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fca5a5;
        }

        /* Cards */
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #111827;
        }

        /* Form Logo and Brand Styling */
        .form-header-logo {
            text-align: center;
            padding: 30px 20px;
            margin-bottom: 30px;
            border-bottom: 2px solid #e5e7eb;
        }

        .form-logo-container {
            margin-bottom: 20px;
        }

        .form-logo {
            max-width: 180px;
            height: auto;
            object-fit: contain;
            margin: 0 auto;
            display: block;
        }

        .form-brand-text {
            text-align: center;
        }

        .form-brand-title {
            font-size: 24px;
            font-weight: 700;
            color: #1a365d;
            margin: 0 0 8px 0;
            line-height: 1.4;
        }

        .form-brand-title .hindi-text {
            display: block;
            margin-bottom: 4px;
        }

        .form-brand-title .english-text {
            display: block;
            font-size: 20px;
            color: #2c5282;
        }

        .form-brand-subtitle {
            font-size: 14px;
            color: #4a5568;
            margin: 4px 0;
            line-height: 1.5;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            padding: 25px;
        }

        .stat-label {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 8px;
        }

        .stat-value {
            font-size: 32px;
            font-weight: 700;
            color: #111827;
        }

        /* Table */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th {
            background: #f9fafb;
            padding: 12px;
            text-align: left;
            font-weight: 600;
            color: #374151;
            border-bottom: 2px solid #e5e7eb;
        }

        .table td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
        }

        .table tbody tr:hover {
            background: #f9fafb;
        }

        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-success {
            background: #d1fae5;
            color: #065f46;
        }

        .badge-secondary {
            background: #e5e7eb;
            color: #374151;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                padding: 0 15px;
            }
            
            .logo {
                gap: 8px;
            }
            
            .logo img {
                height: 32px;
            }
            
            .logo-main {
                font-size: 18px;
            }
            
            .logo-sub {
                font-size: 10px;
            }
            
            .user-menu {
                gap: 10px;
            }
            
            .user-name {
                display: none;
            }
        }

        /* Print Styles - Match PDF Layout */
        @media print {
            /* Hide admin elements */
            .header,
            .sidebar,
            .user-menu,
            .page-header,
            .btn,
            button,
            form[method="POST"] button,
            .alert {
                display: none !important;
            }

            /* Reset margins and padding - allow multi-page */
            body {
                background: white !important;
                font-size: 10px !important;
                line-height: 1.2 !important;
                color: #000 !important;
                padding: 0 !important;
                margin: 0 !important;
                height: auto !important;
                max-height: none !important;
                overflow: visible !important;
            }

            .main-content {
                margin: 0 !important;
                padding: 10px !important;
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                max-height: none !important;
                overflow: visible !important;
                page-break-inside: auto !important;
            }

            /* Card styling for print - allow multi-page */
            .card {
                background: white !important;
                border: none !important;
                box-shadow: none !important;
                padding: 8px !important;
                margin: 0 !important;
                page-break-inside: auto !important;
                height: auto !important;
                max-height: none !important;
                overflow: visible !important;
                page-break-after: auto !important;
            }

            /* Header Logo Section */
            .form-header-logo {
                text-align: center;
                padding: 8px 0;
                margin-bottom: 8px;
                border-bottom: 1px solid #000;
                page-break-after: avoid;
            }

            .form-logo-container {
                margin-bottom: 6px;
            }

            .form-logo {
                max-width: 100px;
                height: auto;
            }

            .form-brand-text {
                text-align: center;
            }

            .form-brand-title {
                font-size: 14px;
                font-weight: 700;
                margin-bottom: 2px;
                line-height: 1.3;
            }

            .form-brand-title .hindi-text {
                font-size: 14px;
            }

            .form-brand-title .english-text {
                font-size: 12px;
            }

            .form-brand-subtitle {
                font-size: 10px;
                margin: 1px 0;
            }

            .card-title {
                font-size: 14px;
                font-weight: 700;
                text-align: center;
                margin: 8px 0;
            }

            /* Form Sections - Allow page breaks between sections */
            .form-section {
                margin-bottom: 12px !important;
                padding-bottom: 8px !important;
                page-break-inside: avoid !important;
                page-break-after: auto !important;
                display: block !important;
                visibility: visible !important;
                height: auto !important;
                max-height: none !important;
                overflow: visible !important;
                border-bottom: 1px solid #ddd !important;
                orphans: 3 !important;
                widows: 3 !important;
            }

            .section-title {
                font-size: 11px !important;
                font-weight: 700 !important;
                margin-bottom: 6px !important;
                padding-bottom: 3px !important;
                border-bottom: 1px solid #000 !important;
                color: #000 !important;
                display: block !important;
                visibility: visible !important;
            }

            /* Form Grid */
            .form-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 8px;
                margin-bottom: 8px;
            }

            .form-group {
                margin-bottom: 6px;
            }

            .form-group.full-width {
                grid-column: 1 / -1;
            }

            /* Labels */
            .form-label {
                font-size: 9px;
                font-weight: 600;
                margin-bottom: 2px;
                color: #000;
                display: block;
            }

            .required {
                color: #000;
            }

            /* Input fields - print as text */
            .form-input,
            input[type="text"],
            input[type="date"],
            input[type="email"],
            input[type="tel"],
            input[type="number"],
            select,
            textarea {
                width: 100%;
                border: none;
                border-bottom: 1px solid #000;
                background: transparent;
                font-size: 9px;
                padding: 2px 0;
                margin: 0;
                color: #000;
                page-break-inside: avoid;
            }

            /* Hide placeholders in print */
            ::placeholder {
                color: transparent;
            }

            /* Select dropdowns - show selected value */
            select {
                appearance: none;
                -webkit-appearance: none;
                -moz-appearance: none;
                text-indent: 0;
            }

            /* Textareas */
            textarea {
                border: 1px solid #000;
                min-height: 30px;
                resize: none;
            }

            /* Error messages - hide in print */
            .error-message,
            .error {
                display: none;
            }

            /* Static content sections - Status Codes, Document Checklist, etc. */
            .status-codes,
            .document-checklist,
            .risks-conditions {
                display: block !important;
                visibility: visible !important;
                page-break-inside: avoid !important;
                margin-bottom: 8px !important;
            }

            .status-codes ul,
            .document-checklist ul {
                list-style: disc !important;
                padding-left: 20px !important;
                margin: 8px 0 !important;
                display: block !important;
            }

            .status-codes li,
            .document-checklist li {
                font-size: 9px !important;
                color: #000 !important;
                margin-bottom: 4px !important;
                padding: 2px 0 !important;
                display: list-item !important;
                line-height: 1.3 !important;
            }

            .status-codes strong,
            .document-checklist strong {
                font-weight: 600 !important;
                color: #000 !important;
            }

            .risks-conditions p {
                font-size: 9px !important;
                color: #000 !important;
                padding: 6px !important;
                margin: 0 !important;
                background: white !important;
                border: 1px solid #000 !important;
                border-radius: 0 !important;
                line-height: 1.4 !important;
                display: block !important;
            }

            /* Container and other elements */
            .container {
                display: block !important;
                visibility: visible !important;
                page-break-inside: avoid !important;
                margin-bottom: 12px !important;
            }

            .container p {
                font-size: 9px !important;
                color: #000 !important;
                margin-bottom: 6px !important;
                line-height: 1.4 !important;
                display: block !important;
            }

            .container strong {
                font-weight: 600 !important;
                color: #000 !important;
            }

            .container em {
                font-style: italic !important;
            }

            /* Ensure all form elements are visible */
            input,
            select,
            textarea,
            label,
            .form-group {
                display: block !important;
                visibility: visible !important;
            }

            /* Page break optimization */
            .form-section:nth-of-type(even) {
                page-break-after: auto !important;
            }

            /* Allow page breaks between sections if needed */
            .form-section {
                page-break-before: auto !important;
            }

            /* Remove background colors */
            * {
                background: white !important;
                color: #000 !important;
            }

            /* Optimize spacing */
            br {
                line-height: 1;
            }

            /* Page setup for print - allow multiple pages */
            @page {
                margin: 0.5cm;
                size: A4;
                orphans: 3;
                widows: 3;
            }

            /* Remove any height restrictions */
            html,
            body,
            .main-content,
            .card,
            .form-section,
            div {
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

            /* Override any viewport height restrictions */
            .main-content,
            .card,
            body,
            html {
                min-height: 0 !important;
                height: auto !important;
            }

            /* Ensure tables and grids can break across pages */
            table,
            .form-grid,
            .info-grid {
                page-break-inside: auto !important;
            }

            /* Allow rows to break but keep header with first row */
            tr {
                page-break-inside: avoid !important;
            }

            /* Show form values clearly */
            input[readonly],
            input[disabled] {
                border-bottom: 1px solid #000;
                color: #000;
            }

            /* Ensure select values are visible */
            select option:checked {
                font-weight: bold;
            }

            /* Hide only UI elements, not form sections */
            .error-message,
            .alert,
            .btn,
            button[type="submit"],
            button[type="button"],
            a[href].btn,
            a[href]:after,
            div[style*="display: flex"][style*="gap: 15px"] {
                display: none !important;
            }

            /* Ensure all sections print */
            .card > * {
                display: block !important;
            }

            /* Ensure form header logo prints */
            .form-header-logo {
                display: block !important;
                visibility: visible !important;
            }
        }
    </style>

    @stack('styles')
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="logo">
                <img src="{{ asset('uploads/main-logo.png') }}" alt="IIES Logo" onerror="this.style.display='none'">
                <div class="logo-text">
                    <div class="logo-main">IIES</div>
                    <div class="logo-sub">Admin Panel</div>
                </div>
            </div>
            <div class="user-menu">
                <span class="user-name">{{ auth()->user()->name }}</span>
                <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-secondary">Logout</button>
                </form>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar">
        <nav class="nav-menu">
            <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                📊 Dashboard
            </a>
            <a href="{{ route('admin.client-reports.index') }}" class="nav-item {{ request()->routeIs('admin.client-reports.*') ? 'active' : '' }}">
                📄 NOC Progress Reports
            </a>
            <a href="{{ route('admin.contact-messages.index') }}" class="nav-item {{ request()->routeIs('admin.contact-messages.*') ? 'active' : '' }}">
                💬 Contact Messages
            </a>
            <a href="{{ route('admin.enquiry-forms.index') }}" class="nav-item {{ request()->routeIs('admin.enquiry-forms.*') ? 'active' : '' }}">
                📋 Enquiry Forms
            </a>
            <a href="{{ route('admin.hire-agent-requests.index') }}" class="nav-item {{ request()->routeIs('admin.hire-agent-requests.*') ? 'active' : '' }}">
                🤝 Hire Agent Requests
            </a>
            <a href="{{ route('admin.agents.index') }}" class="nav-item {{ request()->routeIs('admin.agents.*') ? 'active' : '' }}">
                👥 Agents Management
            </a>
            <a href="{{ route('admin.news.index') }}" class="nav-item {{ request()->routeIs('admin.news.*') ? 'active' : '' }}">
                📰 News Management
            </a>
            <a href="{{ route('admin.tenders.index') }}" class="nav-item {{ request()->routeIs('admin.tenders.*') ? 'active' : '' }}">
                📋 Tender Management
            </a>
            <a href="{{ route('admin.press-releases.index') }}" class="nav-item {{ request()->routeIs('admin.press-releases.*') ? 'active' : '' }}">
                📰 Press Release Management
            </a>
            <a href="{{ route('admin.announcements.index') }}" class="nav-item {{ request()->routeIs('admin.announcements.*') ? 'active' : '' }}">
                📢 Announcements Management
            </a>
            <a href="{{ route('admin.order-notices.index') }}" class="nav-item {{ request()->routeIs('admin.order-notices.*') ? 'active' : '' }}">
                🔔 Orders / Notices / Notifications
            </a>
            <a href="{{ route('admin.vacancies.index') }}" class="nav-item {{ request()->routeIs('admin.vacancies.*') ? 'active' : '' }}">
                💼 Vacancies Management
            </a>
            <a href="{{ route('admin.events.index') }}" class="nav-item {{ request()->routeIs('admin.events.*') ? 'active' : '' }}">
                📅 Events Management
            </a>
            <a href="{{ route('admin.banners.index') }}" class="nav-item {{ request()->routeIs('admin.banners.*') ? 'active' : '' }}">
                🖼️ Banners Management
            </a>
            <a href="{{ route('admin.enforcements.index') }}" class="nav-item {{ request()->routeIs('admin.enforcements.*') ? 'active' : '' }}">
                ⚖️ Enforcement Directorate
            </a>
            <a href="{{ route('admin.finance-ministers.index') }}" class="nav-item {{ request()->routeIs('admin.finance-ministers.*') ? 'active' : '' }}">
                👤 Finance Ministers
            </a>
            <a href="{{ route('admin.our-minister-links.edit') }}" class="nav-item {{ request()->routeIs('admin.our-minister-links.*') ? 'active' : '' }}">
                🔗 Our Minister Document Links
            </a>
            <a href="{{ route('admin.our-minister-about.edit') }}" class="nav-item {{ request()->routeIs('admin.our-minister-about.*') ? 'active' : '' }}">
                🏛️ Our Minister About Section
            </a>
            <a href="{{ route('admin.international-taxations.index') }}" class="nav-item {{ request()->routeIs('admin.international-taxations.*') ? 'active' : '' }}">
                🌍 International Taxation Management
            </a>
            <a href="{{ route('admin.maintenance.clear-all') }}" class="nav-item">
                🧹 Clear All Cache
            </a>
        </nav>
    </aside>
    <!-- Main Content -->
    <main class="main-content">
        @if(session('success'))
            <div class="alert alert-success">
                ✓ {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">
                ✕ {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>

