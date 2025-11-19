<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $kategori = [
            [
                'nama' => 'Workshop',
                'icon' => '🧠',
                'deskripsi' => 'Pelatihan skill baru dengan mentor profesional.',
                'gambar' => 'https://images.unsplash.com/photo-1581090700227-1e37b190418e?w=400',
                'jumlah_event' => 6,
            ],
            [
                'nama' => 'Seminar',
                'icon' => '🎓',
                'deskripsi' => 'Diskusi dan wawasan terbaru dari para ahli.',
                'gambar' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=400',
                'jumlah_event' => 6,
            ],
            [
                'nama' => 'Kompetisi',
                'icon' => '🏆',
                'deskripsi' => 'Adu ide dan kreativitas antar mahasiswa.',
                'gambar' => 'https://images.unsplash.com/photo-1521412644187-c49fa049e84d?w=400',
                'jumlah_event' => 6,
            ],
            [
                'nama' => 'Hiburan',
                'icon' => '🎤',
                'deskripsi' => 'Konser, pentas seni, dan kegiatan santai kampus.',
                'gambar' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=400',
                'jumlah_event' => 6,
            ],
            [
                'nama' => 'Sosial',
                'icon' => '🤝',
                'deskripsi' => 'Kegiatan sosial untuk membantu masyarakat sekitar.',
                'gambar' => 'https://images.unsplash.com/photo-1509099836639-18ba1795216d?w=400',
                'jumlah_event' => 6,
            ],
            [
                'nama' => 'Olahraga',
                'icon' => '⚽',
                'deskripsi' => 'Turnamen dan kegiatan kebugaran kampus.',
                'gambar' => 'https://images.unsplash.com/photo-1598970434795-0c54fe7c0648?w=400',
                'jumlah_event' => 6,
            ],
        ];

        // 36 event dummy (6 per kategori)
        $events = [];
        foreach ($kategori as $k) {
            for ($i = 1; $i <= 6; $i++) {
                $events[] = [
                    'judul' => "{$k['nama']} Event {$i}",
                    'kategori' => $k['nama'],
                    'deskripsi' => "Deskripsi menarik untuk {$k['nama']} Event {$i}. Dapatkan pengalaman tak terlupakan.",
                    'tanggal' => now()->addDays(rand(3, 30))->format('Y-m-d'),
                    'lokasi' => "Aula Kampus " . chr(64 + $i),
                    'gambar' => $k['gambar'],
                ];
            }
        }

        return view('dashboard', compact('kategori', 'events'));
    }
}
