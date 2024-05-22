<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordMail;
use App\Models\PasswordResetToken;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email wajib diisi',
                'password.required' => 'Password wajib diisi',
            ]
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard.admin');
            } elseif (Auth::user()->role == 'user') {
                return redirect()->route('dashboard.user');
            }
        } else {
            return redirect('/login')->withErrors('Username dan Password tidak sesuai')->withInput();
        }
    }

    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    function showRegistrationForm()
    {
        return view('auth.register');
    }

    function register(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required|max:255',
                'email' => 'required|email:dns|max:255|unique:users',
                'password' => 'required|min:5|confirmed',
            ],
            [
                'nama.required' => 'Nama wajib diisi',
                'email.required' => 'Email wajib diisi',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password wajib diisi',
                'password.min' => 'Password minimal 8 karakter',
                'password.confirmed' => 'Konfirmasi password tidak sesuai',
            ]
        );

        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('dashboard.user')->with('success', 'Registrasi berhasil dilakukan! Silahkan login.');
    }

    public function forgot_password()
    {
        return view('auth.forgot-password');
    }
    public function forgot_password_act(Request $request)
    {
        $customMessage = [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email yang anda masukkan tidak valid',
            'email.exists' => 'Email yang anda masukkan tidak terdaftar'
        ];
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], $customMessage);

        $token = \Str::random(60);

        PasswordResetToken::updateOrCreate(
            [
                'email' => $request->email
            ],
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => now()
            ]
        );

        $email = $request->email;

        Mail::to($request->email)->send(new ResetPasswordMail($token, $email));


        return redirect()->route('forgot-password')->with('success', 'Kami telah mengirimkan link reset password ke email anda!');
    }

    public function validasi_forgot_password(Request $request, $token)
    {
        $getToken = PasswordResetToken::where('token', $token)->first();
        if (!$getToken) {
            return redirect('/')->with('failed', 'Token tidak valid!');
        }
        return view('auth.reset-password-token', compact('token'));
    }

    public function validasi_forgot_password_act(Request $request)
    {
        $customMessage = [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email yang anda masukkan tidak valid',
            'email.exists' => 'Email yang anda masukkan tidak terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 5 karakter',
        ];

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:5'
        ], $customMessage);

        $token = PasswordResetToken::where('token', $request->token)->first();

        if (!$token) {
            return redirect('/')->with('failed', 'Token tidak valid!');
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect('/')->with('failed', 'Email tidak terdaftar!');
        }

        $user->update([
            'password' => bcrypt($request->password)
        ]);

        $token->delete();

        return redirect()->route('login')->with('success', 'Password Berhasil Direset!');
    }
}
