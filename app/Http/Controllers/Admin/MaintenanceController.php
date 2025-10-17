<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MaintenanceController extends Controller
{
    /**
     * Clear application caches (config, route, view, app) in one go.
     */
    public function clearAll(Request $request)
    {
        // Run common cache clear commands
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');

        // Avoid rebuilding caches during a live request to prevent URL/route issues
        // Redirect explicitly to the dashboard with a success message
        return redirect()->route('admin.dashboard')
            ->with('success', 'All caches cleared successfully.');
    }
}
