<?php

namespace App\Http\Controllers;

use App\Models\Partnership;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'link' => 'required'
        ]);

        Partnership::create($validatedData);

        return redirect()->route('dashboard.admin.partnerships')->with('success', 'Partnership created successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partnership $partnership)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'link' => 'required'
        ]);

        $partnership->update($validatedData);

        return redirect()->route('dashboard.admin.partnerships')->with('success', 'Partnership updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partnership $partnership)
    {
        $partnership->delete();

        return redirect()->route('dashboard.admin.partnerships')->with('success', 'Partnership deleted successfully!');
    }
}
