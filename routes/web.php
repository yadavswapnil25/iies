<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MaintenanceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NocGuidelinesController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\EnquiryFormController;
use App\Http\Controllers\Admin\EnquiryFormController as AdminEnquiryFormController;
use App\Http\Controllers\HireAgentRequestController;
use App\Http\Controllers\Admin\HireAgentRequestController as AdminHireAgentRequestController;
use App\Http\Controllers\AgentListController;
use App\Http\Controllers\Admin\AgentController as AdminAgentController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\SiteMapController;
use App\Http\Controllers\PrivacyPolicyController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/sitemap', [\App\Http\Controllers\SiteMapController::class, 'index'])->name('sitemap');
Route::get('/privacy-policy', [\App\Http\Controllers\PrivacyPolicyController::class, 'index'])->name('privacy-policy');
Route::get('/guidelines/noc-guidelines', [\App\Http\Controllers\NocGuidelinesController::class, 'index']);
Route::get('/about/iies', function () {
    return view('about');
});
Route::get('/about/our-minister', function () {
    return view('our-minister');
});
Route::get('/about/our-performance', function () {
    return view('our-performance');
});
Route::get('/services/noc-process', function () {
    return view('noc-process');
});
Route::get('/about/our-fin-min', function () {
    return view('our-fin-min');
});
Route::get('/services/proc-guide', function () {
    return view('proc-guide');
});
Route::get('/services/object-certificate', function () {
    return view('object-certificate');
});
Route::get('/guidelines/issuance-noc', function () {
    return view('issuance-noc');
});
Route::get('/guidelines/iies-officials', function () {
    return view('iies-officials');
});
Route::get('/guidelines/super-agent', function () {
    return view('super-agent');
});
Route::get('/register-fac-agent/super-agent-role', function () {
    return view('super-agent-role');
});
Route::get('/register-fac-agent/super-agent-list', function () {
    return view('super-agent-list');
});
Route::get('/register-fac-agent/super-agent-hire', function () {
    return view('super-agent-hire');
});
Route::get('/law-act-policy', function () {
    return view('law-act-policy');
});
Route::get('/law-issue-noc', function () {
    return view('law-issue-noc');
});
Route::get('/penalty', function () {
    return view('penalty');
});
Route::get('/enquiry-form', function () {
    return view('enquiry-form');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/enquiry', [EnquiryFormController::class, 'store'])->name('enquiry.store');
Route::post('/hire-agent', [HireAgentRequestController::class, 'store'])->name('hire-agent.store');
Route::get('/api/agents', [AgentListController::class, 'index'])->name('agents.api');
Route::get('/clear-all', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest routes (not authenticated)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login.post');
    });

    // Authenticated admin routes
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
        
        // Client Reports CRUD
        Route::resource('client-reports', \App\Http\Controllers\Admin\ClientReportController::class);

        // Contact Messages Management
        Route::resource('contact-messages', ContactMessageController::class);

        // Enquiry Forms Management
        Route::resource('enquiry-forms', AdminEnquiryFormController::class);

        // Hire Agent Requests Management
        Route::resource('hire-agent-requests', AdminHireAgentRequestController::class);

        // Agents Management
        Route::resource('agents', AdminAgentController::class);

        // News Management
        Route::resource('news', \App\Http\Controllers\Admin\NewsController::class);

        // Tender Management
        Route::resource('tenders', \App\Http\Controllers\Admin\TenderController::class);

        // Press Release Management
        Route::resource('press-releases', \App\Http\Controllers\Admin\PressReleaseController::class);

        // Announcement Management
        Route::resource('announcements', \App\Http\Controllers\Admin\AnnouncementController::class);

        // Vacancy Management
        Route::resource('vacancies', \App\Http\Controllers\Admin\VacancyController::class);

        // Event Management
        Route::resource('events', \App\Http\Controllers\Admin\EventController::class);

        // Banner Management
        Route::resource('banners', \App\Http\Controllers\Admin\BannerController::class);

        // Enforcement Directorate Management
        Route::resource('enforcements', \App\Http\Controllers\Admin\EnforcementController::class);
        
        // Finance Ministers Management
        Route::resource('finance-ministers', \App\Http\Controllers\Admin\FinanceMinisterController::class);

        // International Taxation Management
        Route::resource('international-taxations', \App\Http\Controllers\Admin\InternationalTaxationController::class);

        // Maintenance - single route to clear all caches
        Route::get('/maintenance/clear-all', [MaintenanceController::class, 'clearAll'])
            ->name('maintenance.clear-all');
    });
});

// User Login Routes for NOC Application Tracking
Route::get('/user/login', [UserLoginController::class, 'showLoginForm'])->name('user.login');
Route::post('/user/login', [UserLoginController::class, 'login'])->name('user.login');
Route::get('/user/dashboard', [UserLoginController::class, 'dashboard'])->name('user.dashboard');
Route::get('/user/logout', [UserLoginController::class, 'logout'])->name('user.logout');
