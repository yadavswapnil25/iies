<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsitePolicyController extends Controller
{
    public function index()
    {
        return view('website-domain-policy');
    }
}

