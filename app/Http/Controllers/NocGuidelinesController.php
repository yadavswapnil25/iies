<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NocGuidelinesController extends Controller
{
    /**
     * Display the NOC Guidelines page
     */
    public function index()
    {
        return view('noc-guidelines');
    }
}
