<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak.index');
    }

    public function store(Request $request)
    {
        // validasi data
        $validated = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'kategori' => 'required|string',
            'subjek' => 'required|string',
            'pesan' => 'required|string',
        ]);

        // sementara tampilkan saja data (bisa disimpan ke database nanti)
        return back()->with('success', 'Pesan kamu sudah terkirim!');
    }
}
