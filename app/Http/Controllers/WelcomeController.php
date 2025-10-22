<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tender;
use App\Models\PressRelease;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $news = News::active()->ordered()->limit(3)->get();
        $tenders = Tender::active()->ordered()->limit(5)->get();
        $pressReleases = PressRelease::active()->ordered()->limit(5)->get();
        return view('welcome', compact('news', 'tenders', 'pressReleases'));
    }
}
