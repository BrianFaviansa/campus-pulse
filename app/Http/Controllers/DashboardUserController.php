<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Forum;
use App\Models\Category;
use App\Models\Partnership;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{

    public function index()
    {
        $title = "User Dashboard";
        $user = auth()->user();
        $users = User::where('role', 'user')->count();
        $categories = Category::count();
        $events = Event::count();
        $partnerships = Partnership::count();

        return view('dashboard.user.index', compact('title', 'user', 'users', 'categories', 'events', 'partnerships'));
    }

    public function events()
    {
        $title = "Events";
        $user = auth()->user();
        $events = Event::orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('nama', 'asc')->get();

        return view('dashboard.user.events.index', compact('title', 'user', 'events', 'categories'));
    }

    public function partnerships()
    {
        $title = "Partnerships";
        $user = auth()->user();
        $partnerships = Partnership::orderBy('created_at', 'desc')->get();

        return view('dashboard.user.partnerships.index', compact('title', 'user', 'partnerships'));
    }

    public function profile()
    {
        $title = "Profile";
        $user = auth()->user();

        return view('dashboard.user.profile.index', compact('title', 'user'));
    }

    public function forums()
    {
        $title = "Forums";
        $user = auth()->user();
        $forums = Forum::with('user')->orderBy('created_at', 'desc')->paginate(4);

        return view('dashboard.user.forums.index', compact('title', 'user', 'forums'));
    }
}
