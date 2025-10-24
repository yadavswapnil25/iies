<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enforcement;
use Illuminate\Http\Request;

class EnforcementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enforcements = Enforcement::ordered()->paginate(15);
        return view('admin.enforcements.index', compact('enforcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.enforcements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'hindi_title' => 'nullable|string|max:255',
            'url' => 'required|url|max:500',
            'hindi_text' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        Enforcement::create($validated);

        return redirect()
            ->route('admin.enforcements.index')
            ->with('success', 'Enforcement Directorate item created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enforcement $enforcement)
    {
        return view('admin.enforcements.show', compact('enforcement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enforcement $enforcement)
    {
        return view('admin.enforcements.edit', compact('enforcement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enforcement $enforcement)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'hindi_title' => 'nullable|string|max:255',
            'url' => 'required|url|max:500',
            'hindi_text' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $enforcement->update($validated);

        return redirect()
            ->route('admin.enforcements.index')
            ->with('success', 'Enforcement Directorate item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enforcement $enforcement)
    {
        $enforcement->delete();

        return redirect()
            ->route('admin.enforcements.index')
            ->with('success', 'Enforcement Directorate item deleted successfully!');
    }
}