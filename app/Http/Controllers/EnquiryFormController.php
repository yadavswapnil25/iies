<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnquiryForm;
use App\Models\User;
use App\Mail\EnquiryFormNotification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class EnquiryFormController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:500',
            'organization' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'enquiryType' => 'required|in:noc,agent,procedure,fee,technical,general,complaint,other',
            'enquirySubject' => 'required|string|max:255',
            'enquiryDescription' => 'required|string|max:2000',
            'priority' => 'required|in:normal,high,urgent',
            'referenceNumber' => 'nullable|string|max:100',
            'documents' => 'nullable|array',
            'documents.*' => 'file|max:5120|mimes:pdf,doc,docx,jpg,jpeg,png',
            'emailUpdates' => 'nullable',
            'smsUpdates' => 'nullable',
            'terms' => 'required|accepted',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Handle file uploads
        $documentPaths = [];
        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $file) {
                $path = $file->store('enquiry-documents', 'public');
                $documentPaths[] = $path;
            }
        }

        // Create enquiry form
        $enquiryForm = EnquiryForm::create([
            'full_name' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'organization' => $request->organization,
            'designation' => $request->designation,
            'enquiry_type' => $request->enquiryType,
            'enquiry_subject' => $request->enquirySubject,
            'enquiry_description' => $request->enquiryDescription,
            'priority' => $request->priority,
            'reference_number' => $request->referenceNumber,
            'documents' => $documentPaths,
            'email_updates' => $request->has('emailUpdates'),
            'sms_updates' => $request->has('smsUpdates'),
            'reference_id' => EnquiryForm::generateReferenceId(),
        ]);

        // Send email notification to all admin users
        try {
            $adminUsers = User::where('is_admin', true)->get();
            foreach ($adminUsers as $admin) {
                Mail::to($admin->email)->send(new EnquiryFormNotification($enquiryForm));
            }
        } catch (\Exception $e) {
            // Log the error but don't fail the request
            \Log::error('Failed to send enquiry form notification: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Your enquiry has been submitted successfully!',
            'reference_id' => $enquiryForm->reference_id,
            'data' => $enquiryForm
        ]);
    }
}
