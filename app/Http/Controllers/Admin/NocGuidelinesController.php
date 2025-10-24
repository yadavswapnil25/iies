<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NocGuidelinesController extends Controller
{
    /**
     * Display the NOC Guidelines page
     */
    public function index()
    {
        return view('admin.noc-guidelines.index');
    }
}