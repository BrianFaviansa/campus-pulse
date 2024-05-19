<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view('landing.index', compact('title'));
    }

    public function about()
    {
        $title = 'About';
        return view('landing.about', compact('title'));
    }

    public function community()
    {
        $title = 'Community';
        return view('landing.community', compact('title'));
    }

    public function competitions()
    {
        $title = 'Competitions';
        return view('landing.competitions', compact('title'));
    }

    public function scholarships()
    {
        $title = 'Scholarships';
        return view('landing.scholarships', compact('title'));
    }

    public function internships()
    {
        $title = 'Internships';
        return view('landing.internships', compact('title'));
    }
}
