<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'IIES Admin Panel')</title>
    
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
                📄 Client Reports
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

