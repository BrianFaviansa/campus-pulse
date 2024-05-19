<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function about()
    {
        return view('landing.about');
    }

    public function community()
    {
        return view('landing.community');
    }

    public function competitions()
    {
        return view('landing.competitions');
    }

    public function scholarships()
    {
        return view('landing.scholarships');
    }

    public function internships()
    {
        return view('landing.internships');
    }
}
