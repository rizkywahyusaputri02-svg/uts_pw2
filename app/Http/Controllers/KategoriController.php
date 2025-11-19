<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        // Data dummy kategori
        $kategori = [
            [
                'nama' => 'Workshop',
                'jumlah_event' => 24,
                'icon' => '📘',
                'deskripsi' => 'Program pelatihan intensif dengan praktik langsung untuk mengembangkan skill teknis.',
                'event_populer' => ['Web Development Workshop', 'UI/UX Bootcamp', 'Data Science Training'],
                'gambar' => 'https://tanyadigital.com/wp-content/uploads/2023/05/workshop-adalah.jpg'
            ],
            [
                'nama' => 'Seminar',
                'jumlah_event' => 18,
                'icon' => '🎤',
                'deskripsi' => 'Acara edukatif dengan pembicara expert untuk memperluas wawasan dan networking.',
                'event_populer' => ['Career Seminar', 'Tech Innovation Talk'],
                'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8canmLfWQJns5mmOddsqfnnFNMB2XCxrB9g&s'
            ],
            [
                'nama' => 'Kompetisi',
                'jumlah_event' => 12,
                'icon' => '🏆',
                'deskripsi' => 'Ajang lomba untuk mengasah kemampuan dan menunjukkan kreativitas mahasiswa.',
                'event_populer' => ['Hackathon 2025', 'Design Challenge'],
                'gambar' => 'https://animasistudio.com/wp-content/uploads/2023/11/Video-Animasi-vs-Video-Biasa-Mana-yang-Lebih-Efektif-untuk-Pemasaran-1024x683.jpg'
            ],
            [
                'nama' => 'Hiburan',
                'jumlah_event' => 15,
                'icon' => '🎵',
                'deskripsi' => 'Event seru dan menghibur untuk refreshing dan membangun komunitas.',
                'event_populer' => ['Music Festival', 'Stand Up Comedy Night'],
                'gambar' => 'https://pophariini.com/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-14-at-20.33.13.jpeg'
            ],
            [
                'nama' => 'Sosial',
                'jumlah_event' => 10,
                'icon' => '💚',
                'deskripsi' => 'Kegiatan pengabdian masyarakat dan volunteer untuk berkontribusi kepada sesama.',
                'event_populer' => ['Teaching Village Kids', 'Blood Donation'],
                'gambar' => 'https://cdn.rri.co.id/berita/Ternate/o/1718345904482-dddooooo/b4ngrx7lsnpbbbt.avif'
            ],
            [
                'nama' => 'Olahraga',
                'jumlah_event' => 16,
                'icon' => '⚽',
                'deskripsi' => 'Kompetisi olahraga untuk menjaga kesehatan dan sportivitas.',
                'event_populer' => ['E-Sports Tournament', 'Futsal Championship'],
                'gambar' => 'https://cdn.rri.co.id/berita/Atambua/o/1739468905663-bc6d82075c1a31c5bc266b26b4cf0c5e/h4fkdetws4n9097.jpeg'
            ],
        ];

        return view('kategori.index', compact('kategori'));
    }
}
