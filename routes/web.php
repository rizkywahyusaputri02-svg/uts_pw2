<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PendaftaranEventController;


// HALAMAN UTAMA = LOGIN
Route::get('/', [AuthController::class, 'showLogin'])->name('home');

// LOGIN
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// REGISTER
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// LOGOUT (POST)
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');


// DASHBOARD SETELAH LOGIN
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// FITUR TAMBAHAN
Route::post('/pendaftaran', [PendaftaranEventController::class, 'store'])->name('pendaftaran.store');
// Route::post('/pendaftaran', [PendaftaranEventController::class, 'create'])->name('pendaftaran.store');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

// DETAIL EVENT
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
