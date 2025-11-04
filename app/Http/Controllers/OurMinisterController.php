<?php

namespace App\Http\Controllers;

use App\Models\FinanceMinister;
use App\Models\OurMinisterLink;
use App\Models\OurMinisterAbout;

class OurMinisterController extends Controller
{
    public function index()
    {
        $ministers = FinanceMinister::active()->ordered()->get();
        $links = OurMinisterLink::query()->first();
        $about = OurMinisterAbout::query()->first();
        return view('our-minister', compact('ministers', 'links', 'about'));
    }
}


