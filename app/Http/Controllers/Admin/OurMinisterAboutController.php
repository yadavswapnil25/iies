<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurMinisterAbout;
use Illuminate\Http\Request;

class OurMinisterAboutController extends Controller
{
    public function edit()
    {
        $about = OurMinisterAbout::query()->first();
        if (!$about) {
            $about = OurMinisterAbout::create([]);
        }
        return view('admin.our-minister-about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'about_en' => 'nullable|string',
            'about_hi' => 'nullable|string',
        ]);

        $about = OurMinisterAbout::query()->first();
        if (!$about) {
            OurMinisterAbout::create($validated);
        } else {
            $about->update($validated);
        }

        return redirect()->route('admin.our-minister-about.edit')->with('success', 'About content updated successfully.');
    }
}


