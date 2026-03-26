<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    /**
     * Show the healthcare landing page.
     */
    public function index()
    {
        return view('landing');
    }
}


