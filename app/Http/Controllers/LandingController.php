<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    /**
     * Display main landing page
     *
     * @return View
     */
    public function index(): View
    {
        return view('landing');
    }

    /**
     * Display search box
     *
     * @param  Request  $request
     * @return View
     */
    public function search(Request $request): View
    {
        return view('landing');
    }
}
