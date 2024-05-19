<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Category;
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
}
