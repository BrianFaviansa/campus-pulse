<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(Request $request, User $user) {
        $validatedData = $request->validate([
            'nama' => 'required|min:3|max:255',
            'email' => 'required|email|max:255',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required|min:3',
            'universitas' => 'required|min:3',
            'oldPassword' => 'nullable',
            'newPassword' => 'nullable|min:5',
        ]);
        
        if ($validatedData['oldPassword'] && $validatedData['newPassword']) {
            if (!Hash::check($request->oldPassword, $user->password)) {
                return back()->with('error', 'Old password wrong.');
            }
            $validatedData['password'] = Hash::make($request->newPassword);
        }

        $user->update($validatedData);

        return redirect()->route('dashboard.admin.profile', $user)->with('success', 'Profile updated successfully');
    }
}
