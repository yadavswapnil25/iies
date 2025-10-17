<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;

class AgentListController extends Controller
{
    public function index(Request $request)
    {
        $query = Agent::active();

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('agent_code', 'like', "%{$search}%")
                  ->orWhere('experience_years', 'like', "%{$search}%");
            });
        }

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $agents = $query->orderBy('name', 'asc')->get();

        return response()->json([
            'agents' => $agents->map(function ($agent) {
                return [
                    'slNo' => $agent->id,
                    'name' => $agent->name,
                    'code' => $agent->agent_code,
                    'experience' => $agent->experience_years,
                ];
            }),
            'total' => $agents->count()
        ]);
    }
}
