<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InternationalTaxation;
use Illuminate\Http\Request;

class InternationalTaxationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internationalTaxations = InternationalTaxation::ordered()->paginate(15);
        return view('admin.international-taxations.index', compact('internationalTaxations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.international-taxations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:500',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        InternationalTaxation::create($validated);

        return redirect()
            ->route('admin.international-taxations.index')
            ->with('success', 'International Taxation item created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(InternationalTaxation $internationalTaxation)
    {
        return view('admin.international-taxations.show', compact('internationalTaxation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InternationalTaxation $internationalTaxation)
    {
        return view('admin.international-taxations.edit', compact('internationalTaxation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InternationalTaxation $internationalTaxation)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:500',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $internationalTaxation->update($validated);

        return redirect()
            ->route('admin.international-taxations.index')
            ->with('success', 'International Taxation item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InternationalTaxation $internationalTaxation)
    {
        $internationalTaxation->delete();

        return redirect()
            ->route('admin.international-taxations.index')
            ->with('success', 'International Taxation item deleted successfully!');
    }
}