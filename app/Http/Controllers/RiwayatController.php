<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        $riwayat = [
            [
                'nama_event' => 'Workshop Pengembangan Web dengan React & TypeScript',
                'kategori' => 'Workshop',
                'tanggal_event' => '15 Nov 2025',
                'tanggal_daftar' => '20 Okt 2025',
                'status' => 'Disetujui',
                'warna_status' => 'blue',
            ],
            [
                'nama_event' => 'Seminar Karir: Persiapan Masuk Dunia Kerja',
                'kategori' => 'Seminar',
                'tanggal_event' => '20 Nov 2025',
                'tanggal_daftar' => '22 Okt 2025',
                'status' => 'Disetujui',
                'warna_status' => 'blue',
            ],
            [
                'nama_event' => 'Kompetisi Desain UI/UX 2024',
                'kategori' => 'Kompetisi',
                'tanggal_event' => '15 Sep 2025',
                'tanggal_daftar' => '10 Agu 2025',
                'status' => 'Selesai',
                'warna_status' => 'green',
            ],
            [
                'nama_event' => 'Webinar Artificial Intelligence & Machine Learning',
                'kategori' => 'Seminar',
                'tanggal_event' => '20 Agu 2025',
                'tanggal_daftar' => '5 Agu 2025',
                'status' => 'Selesai',
                'warna_status' => 'green',
            ],
            [
                'nama_event' => 'Bakti Sosial: Mengajar Anak Desa',
                'kategori' => 'Sosial',
                'tanggal_event' => '18 Nov 2025',
                'tanggal_daftar' => '25 Okt 2025',
                'status' => 'Menunggu',
                'warna_status' => 'yellow',
            ],
            [
                'nama_event' => 'Festival Musik Kampus 2024',
                'kategori' => 'Hiburan',
                'tanggal_event' => '10 Jul 2025',
                'tanggal_daftar' => '15 Jun 2025',
                'status' => 'Selesai',
                'warna_status' => 'green',
            ],
            [
                'nama_event' => 'Pelatihan Kepemimpinan Mahasiswa',
                'kategori' => 'Workshop',
                'tanggal_event' => '25 Jun 2025',
                'tanggal_daftar' => '10 Jun 2025',
                'status' => 'Ditolak',
                'warna_status' => 'red',
            ],
        ];

        return view('riwayat.index', compact('riwayat'));
    }
}
