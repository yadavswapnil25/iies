<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EnquiryForm;

class EnquiryFormController extends Controller
{
    public function index(Request $request)
    {
        $query = EnquiryForm::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('enquiry_subject', 'like', "%{$search}%")
                  ->orWhere('reference_id', 'like', "%{$search}%");
            });
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by priority
        if ($request->filled('priority')) {
            $query->where('priority', $request->priority);
        }

        // Filter by enquiry type
        if ($request->filled('enquiry_type')) {
            $query->where('enquiry_type', $request->enquiry_type);
        }

        $enquiryForms = $query->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.enquiry-forms.index', compact('enquiryForms'));
    }

    public function show(EnquiryForm $enquiryForm)
    {
        // Mark as in_progress if it's new
        if ($enquiryForm->status === 'new') {
            $enquiryForm->update(['status' => 'in_progress']);
        }

        return view('admin.enquiry-forms.show', compact('enquiryForm'));
    }

    public function update(Request $request, EnquiryForm $enquiryForm)
    {
        $request->validate([
            'status' => 'required|in:new,in_progress,resolved,closed',
            'priority' => 'required|in:normal,high,urgent',
            'admin_notes' => 'nullable|string|max:1000',
        ]);

        $enquiryForm->update([
            'status' => $request->status,
            'priority' => $request->priority,
            'admin_notes' => $request->admin_notes,
        ]);

        // Update resolved_at if status is resolved
        if ($request->status === 'resolved' && !$enquiryForm->resolved_at) {
            $enquiryForm->markAsResolved();
        }

        return redirect()->route('admin.enquiry-forms.show', $enquiryForm)
            ->with('success', 'Enquiry form updated successfully.');
    }

    public function destroy(EnquiryForm $enquiryForm)
    {
        $enquiryForm->delete();

        return redirect()->route('admin.enquiry-forms.index')
            ->with('success', 'Enquiry form deleted successfully.');
    }
}
