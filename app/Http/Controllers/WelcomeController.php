<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tender;
use App\Models\PressRelease;
use App\Models\Announcement;
use App\Models\Vacancy;
use App\Models\Event;
use App\Models\Banner;
use App\Models\Enforcement;
use App\Models\InternationalTaxation;
use App\Models\FinanceMinister;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $news = News::active()->ordered()->limit(3)->get();
        $tenders = Tender::active()->ordered()->limit(5)->get();
        $pressReleases = PressRelease::active()->ordered()->limit(5)->get();
        $announcements = Announcement::active()->ordered()->limit(10)->get();
        $vacancies = Vacancy::active()->ordered()->limit(5)->get();
        $events = Event::active()->upcoming()->ordered()->limit(4)->get();
        $banners = Banner::active()->ordered()->limit(10)->get();
        $enforcements = Enforcement::active()->ordered()->limit(5)->get();
        $internationalTaxations = InternationalTaxation::active()->ordered()->limit(5)->get();
        $financeMinisters = FinanceMinister::active()->ordered()->limit(2)->get();
        return view('welcome', compact('news', 'tenders', 'pressReleases', 'announcements', 'vacancies', 'events', 'banners', 'enforcements', 'internationalTaxations', 'financeMinisters'));
    }
}
