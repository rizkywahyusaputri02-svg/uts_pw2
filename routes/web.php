<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\KontakController;

// ✅ Halaman login bisa diakses dari / dan /login
Route::get('/', [AuthController::class, 'showLogin'])->name('home');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// ✅ Proses login (POST)
Route::post('/login', [AuthController::class, 'login']);

// ✅ Halaman register dan prosesnya
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// ✅ Logout
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

// ✅ Halaman utama setelah login
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// ✅ Halaman tambahan
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/sertifikat', [SertifikatController::class, 'index'])->name('sertifikat');
Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');