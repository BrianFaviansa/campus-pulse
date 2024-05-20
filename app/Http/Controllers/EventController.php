<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'tanggal' => 'required',
            'benefit' => 'required',
            'deskripsi' => 'required',
        ]);

        $image = $request->file('poster');
        $imageName = $request->input('poster') . '_' . time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('event_posters', $imageName, 'public');
        $validatedData['poster'] = $imageName;

        Event::create($validatedData);
        if (auth()->user()->role == 'admin') return redirect()->route('dashboard.admin.events')->with('success', 'Event created successfully!');
        return redirect()->route('dashboard.user.events')->with('success', 'Event created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'tanggal' => 'required',
            'benefit' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($request->hasFile('poster')) {
            $image = $request->file('poster');
            $imageName = $request->input('poster') . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('event_posters', $imageName, 'public');
            Storage::disk('public')->delete('event_posters/' . $event->poster);
            $validatedData['poster'] = $imageName;
        } else {
            $validatedData['poster'] = $event->poster;
        }

        $event->update($validatedData);

        if (auth()->user()->role == 'admin') return redirect()->route('dashboard.admin.events')->with('success', 'Event updated successfully!');
        return redirect()->route('dashboard.user.events')->with('success', 'Event updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        Storage::disk('public')->delete('event_posters/' . $event->poster);
        $event->delete();

        if (auth()->user()->role == 'admin') return redirect()->route('dashboard.admin.events')->with('success', 'Event deleted successfully!');
        return redirect()->route('dashboard.user.events')->with('success', 'Event deleted successfully!');
    }
}
