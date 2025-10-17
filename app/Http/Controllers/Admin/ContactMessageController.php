<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function index(Request $request)
    {
        $query = ContactMessage::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $contactMessages = $query->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.contact-messages.index', compact('contactMessages'));
    }

    public function show(ContactMessage $contactMessage)
    {
        // Mark as read if it's new
        if ($contactMessage->status === 'new') {
            $contactMessage->markAsRead();
        }

        return view('admin.contact-messages.show', compact('contactMessage'));
    }

    public function update(Request $request, ContactMessage $contactMessage)
    {
        $request->validate([
            'status' => 'required|in:new,read,replied,closed',
            'admin_notes' => 'nullable|string|max:1000',
        ]);

        $contactMessage->update([
            'status' => $request->status,
            'admin_notes' => $request->admin_notes,
        ]);

        // Update timestamps based on status
        if ($request->status === 'replied' && !$contactMessage->replied_at) {
            $contactMessage->markAsReplied();
        }

        return redirect()->route('admin.contact-messages.show', $contactMessage)
            ->with('success', 'Contact message updated successfully.');
    }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();

        return redirect()->route('admin.contact-messages.index')
            ->with('success', 'Contact message deleted successfully.');
    }
}
