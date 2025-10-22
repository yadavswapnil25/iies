<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PressRelease;
use Illuminate\Http\Request;

class PressReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pressReleases = PressRelease::ordered()->paginate(15);
        return view('admin.press-releases.index', compact('pressReleases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.press-releases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:500',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        PressRelease::create($validated);

        return redirect()
            ->route('admin.press-releases.index')
            ->with('success', 'Press Release created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PressRelease $pressRelease)
    {
        return view('admin.press-releases.show', compact('pressRelease'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PressRelease $pressRelease)
    {
        return view('admin.press-releases.edit', compact('pressRelease'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PressRelease $pressRelease)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:500',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $pressRelease->update($validated);

        return redirect()
            ->route('admin.press-releases.index')
            ->with('success', 'Press Release updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PressRelease $pressRelease)
    {
        $pressRelease->delete();

        return redirect()
            ->route('admin.press-releases.index')
            ->with('success', 'Press Release deleted successfully!');
    }
}
