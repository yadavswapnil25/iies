<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Track NOC Application - IIES</title>
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
            align-items: center;
            min-height: 70vh;
            padding: 20px;
        }
        .login-container {
            max-width: 500px;
            width: 100%;
            margin: 0;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-header h1 {
            color: #1a365d;
            margin-bottom: 10px;
        }
        .login-header p {
            color: #666;
            margin: 0;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            color: #333;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .form-group input:focus {
            outline: none;
            border-color: #1a365d;
            box-shadow: 0 0 0 2px rgba(26, 54, 93, 0.2);
        }
        .login-btn {
            width: 100%;
            padding: 12px;
            background: #1a365d;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .login-btn:hover {
            background: #2c5282;
        }
        .help-text {
            background: #f7fafc;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 14px;
            color: #4a5568;
        }
        .help-text h4 {
            margin: 0 0 10px 0;
            color: #1a365d;
        }
        .help-text ul {
            margin: 0;
            padding-left: 20px;
        }
        .error-message {
            color: #e53e3e;
            font-size: 14px;
            margin-top: 5px;
        }
        .back-link {
            text-align: center;
            margin-top: 20px;
        }
        .back-link a {
            color: #1a365d;
            text-decoration: none;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
        
        /* Additional styling to ensure proper appearance */
        .login-container {
            border: 1px solid #e2e8f0;
        }
        
        .login-header h1 {
            color: #1a365d;
            font-size: 28px;
            margin-bottom: 10px;
        }
        
        .login-header p {
            color: #4a5568;
            font-size: 16px;
        }
        
        .form-group label {
            font-size: 14px;
            font-weight: 600;
        }
        
        .login-btn {
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .help-text {
            border-left: 4px solid #1a365d;
        }
        
        .help-text h4 {
            font-size: 16px;
            margin-bottom: 10px;
        }
        
        .help-text ul {
            margin: 0;
            padding-left: 20px;
        }
        
        .help-text li {
            margin-bottom: 5px;
            line-height: 1.5;
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            main#maincontent {
                min-height: 60vh;
                padding: 10px;
            }
            
            .login-container {
                max-width: 100%;
                margin: 0;
                padding: 20px;
            }
        }
        
        @media (max-width: 480px) {
            .login-container {
                padding: 15px;
            }
            
            .login-header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <main id="maincontent" class="page-main" role="main">
        <div class="login-container">
            <div class="login-header">
                <h1>Track NOC Application</h1>
                <p>Enter your credentials to view your NOC Progress Report</p>
            </div>

            @if ($errors->any())
                <div style="background: #fed7d7; color: #c53030; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                    @foreach ($errors->all() as $error)
                        <p style="margin: 0;">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            @if (session('success'))
                <div style="background: #c6f6d5; color: #22543d; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('user.login') }}">
                @csrf
                
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter your email address">
                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="login-btn">
                    <i class="fas fa-sign-in-alt"></i> Login
                </button>
            </form>

            <div class="back-link">
                <a href="{{ url('/') }}">
                    <i class="fas fa-arrow-left"></i> Back to Home
                </a>
            </div>
        </div>
    </main>

    @include('partials.footer')

    <script src="/js/language-switcher.js"></script>
</body>
</html>
