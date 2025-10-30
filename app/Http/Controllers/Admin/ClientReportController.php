<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClientReport;
use Illuminate\Http\Request;

class ClientReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = ClientReport::query();

        // Search functionality
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('unique_id', 'like', "%{$search}%")
                  ->orWhere('full_name', 'like', "%{$search}%")
                  ->orWhere('file_no', 'like', "%{$search}%");
            });
        }

        // Filter by status
        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        $reports = $query->latest()->paginate(15);

        return view('admin.client-reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $uniqueId = ClientReport::generateUniqueId();
        $clientReport = new ClientReport(); // Empty object for form
        return view('admin.client-reports.create', compact('uniqueId', 'clientReport'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'unique_id' => 'required|unique:client_reports',
                'full_name' => 'required|string|max:255',
                'date_of_birth' => 'nullable|date',
                'contact_number' => 'nullable|string|max:20',
                'email_id' => 'nullable|email|max:255',
                'permanent_address' => 'nullable|string',
                'pan_number' => 'nullable|string|max:10|regex:/^[A-Z]{5}[0-9]{3,4}[A-Z]{1,2}$/',
                'aadhar_number' => 'nullable|string|max:12|regex:/^[0-9]{12}$/',
                'passport_number' => 'nullable|string|max:20',
                'application_type' => 'nullable|string|max:50',
                'submission_date' => 'nullable|date',
                'reference_application_no' => 'nullable|string|max:100',
                'nature_of_work' => 'nullable|string',
                'verification_level' => 'nullable|string|max:20',
                'kyc_compliance_notes' => 'nullable|string',
                'bank_verification_notes' => 'nullable|string',
                'departmental_approval_notes' => 'nullable|string',
                'noc_draft_notes' => 'nullable|string',
                'noc_issuance_notes' => 'nullable|string',
                'information_grant_notes' => 'nullable|string',
                'followup_closure_notes' => 'nullable|string',
                'amount' => 'nullable|numeric',
                'total_amount' => 'nullable|numeric',
                'noc_fee' => 'nullable|string|in:paid,not_paid,payment_not_received',
                'noc_fee_notes' => 'nullable|string',
                'cbdt_approval_status' => 'nullable|string|in:pending,approved,rejected',
                'pfms_approval_status' => 'nullable|string|in:approved,rejected,pending',
                'security_fee_deposit' => 'nullable|string|in:paid,not_paid,payment_not_received',
                'cbdt_approval_notes' => 'nullable|string',
                'pfms_approval_notes' => 'nullable|string',
                'security_fee_deposit_notes' => 'nullable|string',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('Validation failed:', $e->errors());
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        }
        
        $report = ClientReport::create($request->all());

        return redirect()
            ->route('admin.client-reports.show', $report)
            ->with('success', 'Client report created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClientReport $clientReport)
    {
        return view('admin.client-reports.show', compact('clientReport'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientReport $clientReport)
    {
        return view('admin.client-reports.edit', compact('clientReport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClientReport $clientReport)
    {
        $validated = $request->validate([
            'unique_id' => 'required|unique:client_reports,unique_id,' . $clientReport->id,
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'nullable|date',
            'contact_number' => 'nullable|string|max:20',
            'email_id' => 'nullable|email|max:255',
            'permanent_address' => 'nullable|string',
            'pan_number' => 'nullable|string|max:10|regex:/^[A-Z]{5}[0-9]{3,4}[A-Z]{1,2}$/',
            'aadhar_number' => 'nullable|string|max:12|regex:/^[0-9]{12}$/',
            'passport_number' => 'nullable|string|max:20',
            'application_type' => 'nullable|string|max:50',
            'submission_date' => 'nullable|date',
            'reference_application_no' => 'nullable|string|max:100',
            'nature_of_work' => 'nullable|string',
            'verification_level' => 'nullable|string|max:20',
            'kyc_compliance_notes' => 'nullable|string',
            'bank_verification_notes' => 'nullable|string',
            'departmental_approval_notes' => 'nullable|string',
            'noc_draft_notes' => 'nullable|string',
            'noc_issuance_notes' => 'nullable|string',
            'information_grant_notes' => 'nullable|string',
            'followup_closure_notes' => 'nullable|string',
            'amount' => 'nullable|numeric',
            'total_amount' => 'nullable|numeric',
            'cbdt_approval_status' => 'nullable|string|in:pending,approved,rejected',
            'pfms_approval_status' => 'nullable|string|in:approved,rejected,pending',
            'security_fee_deposit' => 'nullable|string|in:paid,not_paid,payment_not_received',
            'cbdt_approval_notes' => 'nullable|string',
            'pfms_approval_notes' => 'nullable|string',
            'security_fee_deposit_notes' => 'nullable|string',
        ]);

        $clientReport->update($request->all());

        return redirect()
            ->route('admin.client-reports.show', $clientReport)
            ->with('success', 'Client report updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientReport $clientReport)
    {
        $clientReport->delete();

        return redirect()
            ->route('admin.client-reports.index')
            ->with('success', 'Client report deleted successfully!');
    }
}
