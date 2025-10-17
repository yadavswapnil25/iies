<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HireAgentRequest;
use App\Models\User;
use App\Mail\HireAgentRequestNotification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class HireAgentRequestController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'organization' => 'nullable|string|max:255',
            'agentCategory' => 'required|in:category-a,category-b,category-c,category-d,category-e',
            'preferredAgent' => 'nullable|string|max:255',
            'serviceDescription' => 'required|string|max:2000',
            'budget' => 'nullable|numeric|min:0',
            'timeline' => 'nullable|in:urgent,standard,flexible',
            'terms' => 'required|accepted',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Create hire agent request
        $hireAgentRequest = HireAgentRequest::create([
            'full_name' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'organization' => $request->organization,
            'agent_category' => $request->agentCategory,
            'preferred_agent' => $request->preferredAgent,
            'service_description' => $request->serviceDescription,
            'budget' => $request->budget,
            'timeline' => $request->timeline,
            'reference_id' => HireAgentRequest::generateReferenceId(),
        ]);

        // Send email notification to all admin users
        try {
            $adminUsers = User::where('is_admin', true)->get();
            foreach ($adminUsers as $admin) {
                Mail::to($admin->email)->send(new HireAgentRequestNotification($hireAgentRequest));
            }
        } catch (\Exception $e) {
            // Log the error but don't fail the request
            \Log::error('Failed to send hire agent request notification: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Your request to hire a support agent has been submitted successfully!',
            'reference_id' => $hireAgentRequest->reference_id,
            'data' => $hireAgentRequest
        ]);
    }
}
