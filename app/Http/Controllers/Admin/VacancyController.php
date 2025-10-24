<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = Vacancy::ordered()->paginate(15);
        return view('admin.vacancies.index', compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vacancies.create');
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
            'application_deadline' => 'nullable|date|after:today',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        Vacancy::create($validated);

        return redirect()
            ->route('admin.vacancies.index')
            ->with('success', 'Vacancy created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacancy $vacancy)
    {
        return view('admin.vacancies.show', compact('vacancy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {
        return view('admin.vacancies.edit', compact('vacancy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:500',
            'description' => 'nullable|string',
            'application_deadline' => 'nullable|date|after:today',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $vacancy->update($validated);

        return redirect()
            ->route('admin.vacancies.index')
            ->with('success', 'Vacancy updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();

        return redirect()
            ->route('admin.vacancies.index')
            ->with('success', 'Vacancy deleted successfully!');
    }
}