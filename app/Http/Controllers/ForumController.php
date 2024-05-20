<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'pesan' => 'required',
            'user_id' => 'required'
        ]);

        Forum::create($validatedData);

        return redirect()->back()->with('success', 'New Discussion created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Forum $forum)
    {
        $user = auth()->user();
        $title = "Discussion";
        $comments = $forum->comments;

        if (auth()->user()->role == 'admin') return view('dashboard.admin.forums.show', compact('user', 'forum', 'title', 'comments'));
        return view('dashboard.user.forums.show', compact('user', 'forum', 'title', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'pesan' => 'required',
            'user_id' => 'required'
        ]);

        $forum->update($validatedData);

        return redirect()->back()->with('success', 'Discussion updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        $forum->delete();

        return redirect()->back()->with('success', 'Discussion deleted successfully!');
    }
}
