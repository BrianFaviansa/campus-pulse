<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Forum;
use Illuminate\Http\Request;

class CommentController extends Controller
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
    public function store(Request $request, Forum $forum)
    {
        $validatedData = $request->validate([
            'pesan' => 'required',
        ]);

        $validatedData['forum_id'] = $forum->id;
        $validatedData['user_id'] = auth()->user()->id;

        Comment::create($validatedData);

        if(auth()->user()->role == 'admin') return redirect()->route('admin.forum.show', $forum->id)->with('success', 'Comment created successfully!');
        return redirect()->route('user.forum.show')->with('success', 'Comment created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
