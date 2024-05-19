<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request, User $user) {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email|max:255',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'universitas' => 'required',
        ]);

        $user->update($validatedData);

        return redirect()->route('dashboard.admin.profile')->with('success', 'Profile updated successfully');
    }
}
