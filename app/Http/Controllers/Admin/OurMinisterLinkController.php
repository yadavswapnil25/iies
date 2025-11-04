<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurMinisterLink;
use Illuminate\Http\Request;

class OurMinisterLinkController extends Controller
{
    public function edit()
    {
        $links = OurMinisterLink::query()->first();
        if (!$links) {
            $links = OurMinisterLink::create([]);
        }
        return view('admin.our-minister-links.edit', compact('links'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'url1' => 'nullable|url|max:2048',
            'url2' => 'nullable|url|max:2048',
            'url3' => 'nullable|url|max:2048',
            'url4' => 'nullable|url|max:2048',
        ]);

        $links = OurMinisterLink::query()->first();
        if (!$links) {
            $links = OurMinisterLink::create($validated);
        } else {
            $links->update($validated);
        }

        return redirect()
            ->route('admin.our-minister-links.edit')
            ->with('success', 'Links updated successfully.');
    }
}


