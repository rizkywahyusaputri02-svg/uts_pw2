<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function index()
    {
        // Data dummy (sementara belum dari database)
        $sertifikat = [
            [
                'gambar' => 'https://via.placeholder.com/400x250.png?text=Workshop+1',
                'judul' => 'Workshop Pengembangan Web dengan React & TypeScript',
                'nomor' => 'CERT/2025/WS/001234',
                'kategori' => 'Workshop',
                'warna_kategori' => 'blue',
            ],
            [
                'gambar' => 'https://via.placeholder.com/400x250.png?text=Kompetisi+UI%2FUX',
                'judul' => 'Kompetisi Desain UI/UX 2024',
                'nomor' => 'CERT/2025/KM/000987',
                'kategori' => 'Kompetisi',
                'warna_kategori' => 'red',
            ],
            [
                'gambar' => 'https://via.placeholder.com/400x250.png?text=Webinar+AI',
                'judul' => 'Webinar Artificial Intelligence & Machine Learning',
                'nomor' => 'CERT/2025/SM/002341',
                'kategori' => 'Seminar',
                'warna_kategori' => 'purple',
            ],

        ];

        return view('sertifikat.index', compact('sertifikat'));
    }

    public function create()
    {
        return view('sertifikat.index');
    }

    public function store(Request $request)
    {
        // nanti diisi untuk menyimpan data sertifikat baru
    }
}
