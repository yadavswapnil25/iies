<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;

class AgentController extends Controller
{
    public function index(Request $request)
    {
        $query = Agent::query();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('agent_code', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_active', $request->status === 'active');
        }

        $agents = $query->orderBy('name', 'asc')->paginate(15);

        return view('admin.agents.index', compact('agents'));
    }

    public function create()
    {
        return view('admin.agents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'agent_code' => 'required|string|max:255|unique:agents,agent_code',
            'experience_years' => 'required|integer|min:0',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:500',
            'category' => 'required|in:category-a,category-b,category-c,category-d,category-e',
            'specialization' => 'nullable|string|max:500',
            'service_fee_percentage' => 'nullable|numeric|min:0|max:100',
            'daily_fee_min' => 'nullable|numeric|min:0',
            'daily_fee_max' => 'nullable|numeric|min:0',
            'sbi_account_number' => 'nullable|string|max:50',
            'is_active' => 'boolean',
            'notes' => 'nullable|string|max:1000',
        ]);

        Agent::create($request->all());

        return redirect()->route('admin.agents.index')
            ->with('success', 'Agent created successfully.');
    }

    public function show(Agent $agent)
    {
        return view('admin.agents.show', compact('agent'));
    }

    public function edit(Agent $agent)
    {
        return view('admin.agents.edit', compact('agent'));
    }

    public function update(Request $request, Agent $agent)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'agent_code' => 'required|string|max:255|unique:agents,agent_code,' . $agent->id,
            'experience_years' => 'required|integer|min:0',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:500',
            'category' => 'required|in:category-a,category-b,category-c,category-d,category-e',
            'specialization' => 'nullable|string|max:500',
            'service_fee_percentage' => 'nullable|numeric|min:0|max:100',
            'daily_fee_min' => 'nullable|numeric|min:0',
            'daily_fee_max' => 'nullable|numeric|min:0',
            'sbi_account_number' => 'nullable|string|max:50',
            'is_active' => 'boolean',
            'notes' => 'nullable|string|max:1000',
        ]);

        $agent->update($request->all());

        return redirect()->route('admin.agents.index')
            ->with('success', 'Agent updated successfully.');
    }

    public function destroy(Agent $agent)
    {
        $agent->delete();

        return redirect()->route('admin.agents.index')
            ->with('success', 'Agent deleted successfully.');
    }
}
