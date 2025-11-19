<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        // DATA FAQ ASLI
        $faqs = [
            // ========================
            //        PENDAFTARAN
            // ========================
            [
                'kategori'   => 'Pendaftaran',
                'pertanyaan' => 'Bagaimana cara saya mendaftar event kampus?',
                'jawaban'    => 'Anda dapat membuka halaman Event, memilih event yang ingin diikuti, lalu klik tombol "Daftar Sekarang".'
            ],
            [
                'kategori'   => 'Pendaftaran',
                'pertanyaan' => 'Apakah saya bisa mendaftar lebih dari satu event?',
                'jawaban'    => 'Ya, Anda bisa mendaftar beberapa event selama jadwal tidak bentrok.'
            ],
            [
                'kategori'   => 'Pendaftaran',
                'pertanyaan' => 'Bagaimana jika event yang saya daftarkan sudah penuh?',
                'jawaban'    => 'Jika event penuh, Anda tidak dapat mendaftar dan harus menunggu kuota dibuka kembali.'
            ],

            // ========================
            //         PEMBAYARAN
            // ========================
            [
                'kategori'   => 'Pembayaran',
                'pertanyaan' => 'Apa saja metode pembayaran yang tersedia?',
                'jawaban'    => 'Pembayaran dapat dilakukan melalui transfer bank, e-wallet, dan virtual account.'
            ],
            [
                'kategori'   => 'Pembayaran',
                'pertanyaan' => 'Bagaimana cara melakukan pembayaran?',
                'jawaban'    => 'Setelah mendaftar event, Anda akan mendapatkan instruksi pembayaran di halaman detail pendaftaran.'
            ],
            [
                'kategori'   => 'Pembayaran',
                'pertanyaan' => 'Apakah ada refund jika saya membatalkan?',
                'jawaban'    => 'Refund hanya tersedia untuk event tertentu dan mengikuti kebijakan masing-masing event.'
            ],

            // ========================
            //           EVENT
            // ========================
            [
                'kategori'   => 'Event',
                'pertanyaan' => 'Bagaimana cara mengetahui event yang akan datang?',
                'jawaban'    => 'Anda dapat melihat daftar event di menu Event pada dashboard sistem.'
            ],
            [
                'kategori'   => 'Event',
                'pertanyaan' => 'Apakah ada dress code untuk event?',
                'jawaban'    => 'Beberapa event memiliki dress code khusus, informasinya tertera di detail event.'
            ],
            [
                'kategori'   => 'Event',
                'pertanyaan' => 'Apa yang harus saya bawa saat mengikuti event?',
                'jawaban'    => 'Biasanya Anda cukup membawa identitas diri dan bukti pendaftaran, kecuali ada ketentuan tambahan.'
            ],

            // ========================
            //         SERTIFIKAT
            // ========================
            [
                'kategori'   => 'Sertifikat',
                'pertanyaan' => 'Apakah semua peserta mendapatkan sertifikat?',
                'jawaban'    => 'Sertifikat diberikan apabila peserta memenuhi syarat kehadiran dan ketentuan event.'
            ],
            [
                'kategori'   => 'Sertifikat',
                'pertanyaan' => 'Kapan saya bisa mengunduh sertifikat?',
                'jawaban'    => 'Sertifikat dapat diunduh setelah event selesai dan diverifikasi oleh panitia.'
            ],

            // ========================
            //           TEKNIS
            // ========================
            [
                'kategori'   => 'Teknis',
                'pertanyaan' => 'Mengapa saya tidak bisa login?',
                'jawaban'    => 'Pastikan NIM dan password benar. Jika tetap tidak bisa, coba reset password.'
            ],
            [
                'kategori'   => 'Teknis',
                'pertanyaan' => 'Bagaimana jika sistem error?',
                'jawaban'    => 'Coba refresh halaman atau bersihkan cache browser. Jika masih error, hubungi admin.'
            ],
        ];

        // ===== FILTER PENCARIAN =====
        $search = $request->search;
        $category = $request->category;

        $filteredFaqs = collect($faqs)->filter(function ($item) use ($search, $category) {
            $matchSearch = true;
            $matchCategory = true;

            // Filter search
            if ($search) {
                $searchLower = strtolower($search);
                $matchSearch =
                    str_contains(strtolower($item['pertanyaan']), $searchLower) ||
                    str_contains(strtolower($item['jawaban']), $searchLower);
            }

            // Filter kategori
            if ($category) {
                $matchCategory = strtolower($item['kategori']) === strtolower($category);
            }

            return $matchSearch && $matchCategory;
        })->values()->all();

        // Ambil daftar kategori unik untuk tombol kategori
        $kategoriList = collect($faqs)->pluck('kategori')->unique()->values();

        return view('faq.index', [
            'faqs' => $filteredFaqs,
            'kategoriList' => $kategoriList,
            'selectedCategory' => $category,
            'search' => $search,
        ]);
    }
}
