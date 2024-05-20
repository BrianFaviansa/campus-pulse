<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Category;
use App\Models\Forum;
use App\Models\Partnership;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $title = "Admin Dashboard";
        $user = auth()->user();
        $users = User::where('role', 'user')->count();
        $categories = Category::count();
        $events = Event::count();
        $partnerships = Partnership::count();

        return view('dashboard.admin.index', compact('title', 'user', 'users', 'categories', 'events', 'partnerships'));
    }

    public function members()
    {
        $title = "Members";
        $user = auth()->user();
        $users = User::where('role', 'user')->get();

        return view('dashboard.admin.members.index', compact('title', 'user', 'users'));
    }

    public function categories()
    {
        $title = "Categories";
        $user = auth()->user();
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('dashboard.admin.categories.index', compact('title', 'user', 'categories'));
    }

    public function events()
    {
        $title = "Events";
        $user = auth()->user();
        $events = Event::orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('nama', 'asc')->get();

        return view('dashboard.admin.events.index', compact('title', 'user', 'events', 'categories'));
    }

    public function partnerships()
    {
        $title = "Partnerships";
        $user = auth()->user();
        $partnerships = Partnership::orderBy('created_at', 'desc')->get();

        return view('dashboard.admin.partnerships.index', compact('title', 'user', 'partnerships'));
    }

    public function profile()
    {
        $title = "Profile";
        $user = auth()->user();

        return view('dashboard.admin.profile.index', compact('title', 'user'));
    }

    public function forums()
    {
        $title = "Forums";
        $user = auth()->user();
        $forums = Forum::with('user')->orderBy('created_at', 'desc')->paginate(4);

        return view('dashboard.admin.forums.index', compact('title', 'user', 'forums'));
    }
}
