<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }
    

    public function showRegister()
    {
        return view('auth.register');
    }
    

   public function register(Request $request)
{
    $request->validate([
        'name' => 'required',
        'nim' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'phone' => 'required',
        'fakultas' => 'required',
        'password' => 'required|confirmed|min:6',
    ]);

    User::create([
    'name' => $request->name,
    'nim' => $request->nim,
    'email' => $request->email,
    'phone' => $request->phone,
    'fakultas' => $request->fakultas,
    'password' => Hash::make($request->password),
]);

    // ✅ Tetap di halaman register dan munculkan notifikasi sukses
    return back()->with('success', 'Akun berhasil dibuat! Silakan login di halaman utama.');
}

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
    return redirect()->route('dashboard')->with('login_success', 'Berhasil login!');
}


    // ⚠️ Kalau gagal login
    return back()->with('error', 'Email atau password salah');
}


   public function dashboard()
{
    $user = Auth::user(); // Ambil data user yang sedang login
    return view('dashboard', compact('user'));
}


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}



