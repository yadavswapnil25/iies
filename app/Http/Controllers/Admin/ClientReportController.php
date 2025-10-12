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
        $validated = $request->validate([
            'unique_id' => 'required|unique:client_reports',
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'nullable|date',
            'amount' => 'nullable|numeric',
            'total_amount' => 'nullable|numeric',
        ]);

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
            'amount' => 'nullable|numeric',
            'total_amount' => 'nullable|numeric',
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
