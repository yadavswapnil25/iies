<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FinanceMinister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FinanceMinisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ministers = FinanceMinister::ordered()->paginate(15);
        return view('admin.finance-ministers.index', compact('ministers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.finance-ministers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'hindi_name' => 'nullable|string|max:255',
            'designation' => 'required|string|max:255',
            'hindi_designation' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'nullable|string|max:1000',
            'hindi_bio' => 'nullable|string|max:1000',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('finance-ministers', 'public');
        }

        FinanceMinister::create($validated);

        return redirect()
            ->route('admin.finance-ministers.index')
            ->with('success', 'Finance Minister created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(FinanceMinister $financeMinister)
    {
        return view('admin.finance-ministers.show', compact('financeMinister'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FinanceMinister $financeMinister)
    {
        return view('admin.finance-ministers.edit', compact('financeMinister'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FinanceMinister $financeMinister)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'hindi_name' => 'nullable|string|max:255',
            'designation' => 'required|string|max:255',
            'hindi_designation' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'nullable|string|max:1000',
            'hindi_bio' => 'nullable|string|max:1000',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($financeMinister->image_path) {
                Storage::disk('public')->delete($financeMinister->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('finance-ministers', 'public');
        }

        $financeMinister->update($validated);

        return redirect()
            ->route('admin.finance-ministers.index')
            ->with('success', 'Finance Minister updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FinanceMinister $financeMinister)
    {
        // Delete image if exists
        if ($financeMinister->image_path) {
            Storage::disk('public')->delete($financeMinister->image_path);
        }

        $financeMinister->delete();

        return redirect()
            ->route('admin.finance-ministers.index')
            ->with('success', 'Finance Minister deleted successfully!');
    }
}
