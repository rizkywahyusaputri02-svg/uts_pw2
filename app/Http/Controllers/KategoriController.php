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
                'gambar' => 'https://cdn.pixabay.com/photo/2016/11/19/14/00/audience-1835431_960_720.jpg'
            ],
            [
                'nama' => 'Kompetisi',
                'jumlah_event' => 12,
                'icon' => '🏆',
                'deskripsi' => 'Ajang lomba untuk mengasah kemampuan dan menunjukkan kreativitas mahasiswa.',
                'event_populer' => ['Hackathon 2025', 'Design Challenge'],
                'gambar' => 'https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_960_720.jpg'
            ],
            [
                'nama' => 'Hiburan',
                'jumlah_event' => 15,
                'icon' => '🎵',
                'deskripsi' => 'Event seru dan menghibur untuk refreshing dan membangun komunitas.',
                'event_populer' => ['Music Festival', 'Stand Up Comedy Night'],
                'gambar' => 'https://cdn.pixabay.com/photo/2017/07/16/10/43/concert-2505542_960_720.jpg'
            ],
            [
                'nama' => 'Sosial',
                'jumlah_event' => 10,
                'icon' => '💚',
                'deskripsi' => 'Kegiatan pengabdian masyarakat dan volunteer untuk berkontribusi kepada sesama.',
                'event_populer' => ['Teaching Village Kids', 'Blood Donation'],
                'gambar' => 'https://cdn.pixabay.com/photo/2018/03/09/12/25/volunteer-3217286_960_720.jpg'
            ],
            [
                'nama' => 'Olahraga',
                'jumlah_event' => 16,
                'icon' => '⚽',
                'deskripsi' => 'Kompetisi olahraga untuk menjaga kesehatan dan sportivitas.',
                'event_populer' => ['E-Sports Tournament', 'Futsal Championship'],
                'gambar' => 'https://cdn.pixabay.com/photo/2016/06/29/09/38/soccer-1481866_960_720.jpg'
            ],
        ];

        return view('kategori.index', compact('kategori'));
    }
}
