<?php

namespace App\Http\Controllers;

use App\Models\ClientReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserLoginController extends Controller
{
    /**
     * Show the login form
     */
    public function showLoginForm()
    {
        return view('user.login');
    }

    /**
     * Handle login authentication
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ]);

        $email = $request->email;
        $password = $request->password;

        // Find client report by email
        $clientReport = ClientReport::where('email_id', $email)->first();

        if (!$clientReport) {
            return back()->withErrors(['email' => 'No NOC application found with this email address.'])->withInput();
        }

        // Generate expected password: PAN + last 4 digits of Aadhar
        $panNumber = $clientReport->pan_number;
        $aadharNumber = $clientReport->aadhar_number;
        
        if (!$panNumber || !$aadharNumber) {
            return back()->withErrors(['password' => 'PAN Number or Aadhar Number not found in your application.'])->withInput();
        }

        $last4Aadhar = substr($aadharNumber, -4);
        $expectedPassword = $panNumber . $last4Aadhar;

        if ($password !== $expectedPassword) {
            return back()->withErrors(['password' => 'Invalid password. Password should be: PAN Number + Last 4 digits of Aadhar Number.'])->withInput();
        }

        // Store client report ID in session
        Session::put('user_client_report_id', $clientReport->id);
        Session::put('user_logged_in', true);

        return redirect()->route('user.dashboard');
    }

    /**
     * Show user dashboard with their NOC Progress Report
     */
    public function dashboard()
    {
        if (!Session::get('user_logged_in')) {
            return redirect()->route('user.login');
        }

        $clientReportId = Session::get('user_client_report_id');
        $clientReport = ClientReport::findOrFail($clientReportId);

        return view('user.dashboard', compact('clientReport'));
    }

    /**
     * Logout user
     */
    public function logout()
    {
        Session::forget(['user_logged_in', 'user_client_report_id']);
        return redirect()->route('user.login')->with('success', 'You have been logged out successfully.');
    }
}