<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\User;
use App\Mail\ContactFormNotification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $contactMessage = ContactMessage::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Send email notification to all admin users
        try {
            $adminUsers = User::where('is_admin', true)->get();
            foreach ($adminUsers as $admin) {
                Mail::to($admin->email)->send(new ContactFormNotification($contactMessage));
            }
        } catch (\Exception $e) {
            // Log the error but don't fail the request
            \Log::error('Failed to send contact form notification: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your message! We will get back to you soon.',
            'data' => $contactMessage
        ]);
    }
}
