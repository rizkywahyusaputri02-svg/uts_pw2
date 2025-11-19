<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranEvent;
use Illuminate\Support\Facades\Auth;

class PendaftaranEventController extends Controller
{
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'event_id' => 'required',
            'catatan' => 'nullable|string',
        ]);

        // Ambil data user yg login
        $user = Auth::user();

    PendaftaranEvent::create([
    'user_id'        => $user->id,
    // 'event_id'       => $request->event_id,
    'nama_lengkap'   => $user->name,
    'nim'            => $user->nim,
    'email'          => $user->email,
    'program_studi'  => $user->program_studi ?? $request->program_studi,
    'catatan'        => $request->catatan,
    'status'         => 'pending',
]);


        return back()->with('success', 'Pendaftaran berhasil dikirim!');
    }
}
