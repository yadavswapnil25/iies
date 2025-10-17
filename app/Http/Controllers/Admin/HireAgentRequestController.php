<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HireAgentRequest;

class HireAgentRequestController extends Controller
{
    public function index(Request $request)
    {
        $query = HireAgentRequest::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('service_description', 'like', "%{$search}%")
                  ->orWhere('reference_id', 'like', "%{$search}%");
            });
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by agent category
        if ($request->filled('agent_category')) {
            $query->where('agent_category', $request->agent_category);
        }

        $hireAgentRequests = $query->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.hire-agent-requests.index', compact('hireAgentRequests'));
    }

    public function show(HireAgentRequest $hireAgentRequest)
    {
        // Mark as in_progress if it's new
        if ($hireAgentRequest->status === 'new') {
            $hireAgentRequest->update(['status' => 'in_progress']);
        }

        return view('admin.hire-agent-requests.show', compact('hireAgentRequest'));
    }

    public function update(Request $request, HireAgentRequest $hireAgentRequest)
    {
        $request->validate([
            'status' => 'required|in:new,in_progress,assigned,completed,cancelled',
            'assigned_agent' => 'nullable|string|max:255',
            'admin_notes' => 'nullable|string|max:1000',
        ]);

        $hireAgentRequest->update([
            'status' => $request->status,
            'assigned_agent' => $request->assigned_agent,
            'admin_notes' => $request->admin_notes,
        ]);

        // Update timestamps based on status
        if ($request->status === 'assigned' && !$hireAgentRequest->assigned_at) {
            $hireAgentRequest->markAsAssigned($request->assigned_agent);
        } elseif ($request->status === 'completed' && !$hireAgentRequest->completed_at) {
            $hireAgentRequest->markAsCompleted();
        }

        return redirect()->route('admin.hire-agent-requests.show', $hireAgentRequest)
            ->with('success', 'Hire agent request updated successfully.');
    }

    public function destroy(HireAgentRequest $hireAgentRequest)
    {
        $hireAgentRequest->delete();

        return redirect()->route('admin.hire-agent-requests.index')
            ->with('success', 'Hire agent request deleted successfully.');
    }
}
