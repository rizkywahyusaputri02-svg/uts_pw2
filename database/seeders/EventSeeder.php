<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    public function run()
    {
        $events = [
    // WORKSHOP
    [
    'kategori'    => 'Workshop',
    'judul'       => 'Workshop Pekan Lingkungan',
    'tanggal'     => '20-24 Oktober 2025',
    'lokasi'      => 'Teras Kedokteran UIN STS JAMBI',
    'kapasitas'   => 'Tidak ada batasan',
    'waktu'       => '08:00 - 13:00 WIB',
    'gambar'      => 'https://i.pinimg.com/736x/a7/af/2d/a7af2d624ae40047fd8c7931ff5db7fb.jpg',
    'persyaratan' => 'Mendaftar peserta, membawa botol minum sendiri, mengikuti semua sesi workshop',
    'deskripsi'   => 'Mempelajari cara membuat kombucha, teh, dan yogurt'
    ],

    [
    'kategori'    => 'Workshop',
    'judul'       => 'Workshop DIY Totebag',
    'tanggal'     => '15 Desember 2025',
    'lokasi'      => 'V Space Bakery & Cake',
    'kapasitas'   => '20-30',
    'waktu'       => '08:00 - 12:00 WIB',
    'gambar'      => 'https://i.pinimg.com/736x/21/3a/de/213ade1cb2e28878dfb9957747c7e276.jpg',
    'persyaratan' => 'Mendaftar peserta, membawa alat tulis, mengikuti semua sesi workshop',
    'deskripsi'   => 'Tips dan Trik dasar menyulam di totebag'
    ],

    [
    'kategori'    => 'Workshop',
    'judul'       => 'Workshop Paint Your Cake',
    'tanggal'     => '10 Desember 2025',
    'lokasi'      => 'Ogi Cafe',
    'kapasitas'   => '20',
    'waktu'       => '10:30 - 12:00 WIB',
    'gambar'      => 'https://i.pinimg.com/736x/fe/18/2c/fe182cdc62ebd3beab056313dcc1d33c.jpg',
    'persyaratan' => 'Mendaftar peserta, membawa apron, mengikuti semua sesi workshop',
    'deskripsi'   => 'Warnai, hias, dan ciptakan kuemu sendiri!'
    ],

    [
    'kategori'    => 'Workshop',
    'judul'       => 'Resin Art Workshop',
    'tanggal'     => '13 November 2025',
    'lokasi'      => 'Pegadaian Jambi',
    'kapasitas'   => 'Terbatas',
    'waktu'       => '09:30 - Selesai',
    'gambar'      => 'https://i.pinimg.com/736x/ef/28/88/ef28887f2b1ad303eef069ac450fafde.jpg',
    'persyaratan' => 'Mendaftar peserta, membawa alat tulis, mengikuti seluruh sesi workshop',
    'deskripsi'   => 'Belajar membuat hiasan resin cantik dan bawa pulang hasil kreasi unikmu.'
    ],

   [
    'kategori'    => 'Workshop',
    'judul'       => 'Flower Arrangement Experience',
    'tanggal'     => '28 November 2025',
    'lokasi'      => 'Kebun Handil',
    'kapasitas'   => 'Terbatas',
    'waktu'       => '10:00 - 13:30 WIB',
    'gambar'      => 'https://i.pinimg.com/1200x/20/bd/1a/20bd1a8689b5d519ab813c76542dfa03.jpg',
    'persyaratan' => 'Mendaftar peserta, membawa alat tulis dan gunting kecil, mengikuti semua sesi workshop',
    'deskripsi'   => 'Workshop Flower Arrangement ini mengajakmu merangkai bunga segar menjadi karya cantik sambil menikmati proses yang kreatif dan menenangkan'
   ],

   [
    'kategori'    => 'Workshop',
    'judul'       => 'Workshop Digital Marketing',
    'tanggal'     => '26 November 2025',
    'lokasi'      => 'Teras Mendalo',
    'kapasitas'   => 'Tidak ada batasan',
    'waktu'       => '10:00 - Selesai',
    'gambar'      => 'https://i.pinimg.com/1200x/ca/32/82/ca3282c4b57e67ae0d564278704b3227.jpg',
    'persyaratan' => 'Mendaftar peserta, membawa laptop, mengikuti seluruh sesi workshop',
    'deskripsi'   => 'Workshop Digital Marketing ini mengajarkan dasar promosi online dan cara membangun brand di dunia digital.'
   ],

    // SEMINAR
    [
    'kategori'    => 'Seminar',
    'judul'       => 'Seminar Nasional BSF 2025',
    'tanggal'     => '01 November 2025',
    'lokasi'      => 'Balairung Jambi',
    'kapasitas'   => 'Tidak ada batasan',
    'waktu'       => '08:00 - Selesai',
    'gambar'      => 'https://i.pinimg.com/1200x/80/0a/18/800a1887b70ea8fb0749500e61446b20.jpg',
    'persyaratan' => 'Mendaftar peserta, hadir tepat waktu, mengikuti seluruh sesi seminar',
    'deskripsi'   => '“Rimba Satwana : Menyulam Hijau Semesta”. Bersiaplah untuk menyelami inspirasi dari para pembicara luar biasa yang siap membakar semangatmu.',
    ],

    [
    'kategori'    => 'Seminar',
    'judul'       => 'Seminar Nasional Public Speaking',
    'tanggal'     => '03 November 2025',
    'lokasi'      => 'Auditorium UIN STS Jambi',
    'kapasitas'   => '200-300',
    'waktu'       => '09:00 - 13:00 WIB',
    'gambar'      => 'https://i.pinimg.com/736x/f5/ed/3d/f5ed3da9ea06f9a6648ae1741cb574a4.jpg',
    'persyaratan' => 'Mendaftar peserta, hadir tepat waktu, mengikuti seluruh sesi seminar',
    'deskripsi'   => 'Kamu mau berbicara di depan umum dengan percaya diri & powerfull? Yuk buruan join.',
    ],

    [
    'kategori'    => 'Seminar',
    'judul'       => 'Seminar Internasional di Kemah Bahasa Arab 2025',
    'tanggal'     => '17 November 2025',
    'lokasi'      => 'Auditorium UIN STS Jambi',
    'kapasitas'   => '150-250',
    'waktu'       => '08:30 - 12:30 WIB',
    'gambar'      => 'https://i.pinimg.com/736x/11/56/9c/11569c3e04b0feeca3bc0a73343abfdc.jpg',
    'persyaratan' => 'Mendaftar peserta, hadir tepat waktu, mengikuti seluruh sesi seminar',
    'deskripsi'   => 'Bahasa & Budaya : Eksplorasi Budaya dan Penulisan Bahasa Arab sebagai Jembatan Pemahaman Kultural.',

    ],

    [
    'kategori'    => 'Seminar',
    'judul'       => 'Seminar Nasional & Call for Paper 2025',
    'tanggal'     => '23 November 2025',
    'lokasi'      => 'Auditorium gedung Unifac Lt.1 Universitas Jambi',
    'kapasitas'   => 'Tidak ada batasan',
    'waktu'       => '08:30 - Selesai',
    'gambar'      => 'https://i.pinimg.com/736x/cd/d6/59/cdd6594d99c6cab51ea9279a5a756f0e.jpg',
    'persyaratan' => 'Mendaftar peserta, hadir tepat waktu, mengikuti seluruh sesi seminar',
    'deskripsi'   => 'Hukum Keadilan Lingkungan, dan Kebebasan Akademik.',
    ],

   [
    'kategori'    => 'Seminar',
    'judul'       => 'TALKSHOW DAN SEMINAR NASIONAL CARBON 7.0',
    'tanggal'     => '25 November 2025',
    'lokasi'      => 'Balairung Universitas Jambi',
    'kapasitas'   => '200-300',
    'waktu'       => '08:00 - Selesai',
    'gambar'      => 'https://i.pinimg.com/1200x/d3/be/93/d3be9353e994ff4d9abe2e9968f60971.jpg',
    'persyaratan' => 'Mendaftar peserta, hadir tepat waktu, mengikuti seluruh sesi seminar',
    'deskripsi'   => 'Chemistry For Change: Empowering Youth to Achieve the SDGs.',
   ],

    [
    'kategori'    => 'Seminar',
    'judul'       => 'Job Preparation 2025',
    'tanggal'     => '18 November 2025',
    'lokasi'      => 'Amphiteater Wing A UIN STS Jambi',
    'kapasitas'   => '50-80',
    'waktu'       => '09:00 - Selesai',
    'gambar'      => 'https://i.pinimg.com/736x/02/0d/0a/020d0ade0d36eef6fe0aa99a9fe5ab14.jpg',
    'persyaratan' => 'Mendaftar peserta, hadir tepat waktu, mengikuti seluruh sesi seminar',
    'deskripsi'   => 'Tes seleksi (CPNS, BUMN, Perusahaan Swasta, PCPM BI, Psikotes, Bahasa Inggris, dan Interview).',
    ],

    //KOMPETISI
    [
        'kategori'  => 'Kompetisi',
        'judul'     => 'Lomba Design Poster',
        'tanggal'   => '19-24 November 2025',
        'lokasi'    => 'Dilaksanakan Secara Online',
        'kapasitas' => '35 Orang',
        'gambar'    => 'https://i.pinimg.com/1200x/39/a2/09/39a209803999e37e0a06317582ffe814.jpg',
        'persyaratan'=>  '1.Lomba ini terbuka untuk umum.  2.Usia peserta minimal 15 tahun dan maksimal 25 tahun.  3.Biaya pendaftaran: Rp 30.000 (dibayarkan langsung ke panitia). ',
        'deskripsi' => 'Buat kalian yang berbakat dalam desain grafis atau ingin menantang kreativitas diri, saatnya unjuk kemampuan dalam Lomba Design Poster dengan tema:  
                        "Menuju Masa Depan Gemilang dengan Inovasi Digital".'
    ],
    [
        'kategori'  => 'Kompetisi',
        'judul'     => 'LOMBA CIPTA PUISI',
        'tanggal'   => '29 September - 14 Oktober 2025',
        'lokasi'    => 'Dilaksanakan Secara Online',
        'kapasitas' => '25-40 Orang',
        'gambar'    => 'https://i.pinimg.com/1200x/dd/84/9a/dd849a5349e86cc0239860cb30f95dab.jpg',
        'persyaratan'=> ' 1. Peserta usia 17-40 tahun, belum pernah menerbitkan buku antologi puisi 2. Karya asli bukan plagiat (termasuk penggunaan Al), bebas unsur SARA, pornografi dan ujaran kebencian 3. Puisi diketik di kertas A4, margin 3-3-3-3, huruf TNR ukuran 12 PT, 1 spasi, maksimal 2 halaman, dikirim dalam bentuk file Word dengan format judul file: Nama_Judul Puisi. Pendaftaran: Link http://sutha.link/lombapuisi2025
            .',
        'deskripsi' => '  Tema: Menjaga Lingkungan untuk Masa Depan Bumi Layak Huni GRATIS! TERBUKA UNTUK UMUM Juara 1: Rp. 1.250.000+ Sertifikat Juara 2: Rp. 1.000.000 Sertifikat Juara 3: Rp. 750.000 Sertifikat.'
    ],
    [
        'kategori'  => 'Kompetisi',
        'judul'     => 'Sutha Voice',
        'tanggal'   => '27 Oktober - 08 november 2025',
        'lokasi'    => 'Kampus UIN STS Jambi',
        'kapasitas' => '50 Orang',
        'gambar'    => 'https://i.pinimg.com/736x/7a/2a/9c/7a2a9c04b66be44cc442bd7604b84015.jpg',
        'persyaratan'=>'  1. Seluruh mahasiswa dan mahasiswi 2. Seluruh perguruan tinggi se-provinsi jambi 3. se-PTKIN seindonesia',
        'deskripsi' => 'Nasional se-PTKIN dan umum se-provinsi Jambi "Menjalin Nusantara, Merajut warisan budaya".'
    ],
    [
        'kategori'  => 'Kompetisi',
        'judul'     => 'Lomba Karikatur',
        'tanggal'   => '22 November 2025',
        'lokasi'    => 'Amphiteater Wing A UIN STS Jambi',
        'kapasitas' => '15-25 ',
        'waktu'     => '09:00 - 22:00 WIB',
        'gambar'    => 'https://i.pinimg.com/736x/08/88/10/088810d7b901429e4348e8b5cb2740e7.jpg',
        'persyaratan'=> ' 1. Seluruh mahasiswa dan mahasiswi 2. Seluruh perguruan tinggi se-provinsi jambi 3. se-PTKIN seindonesia',
        'deskripsi' => 'Tunjukkan Kreativitasmu! Ikuti Lomba Karikatur Tingkat Kampus dan buat karakter unik hasil imajinasimu!'
    ],
    [
        'kategori'  => 'Kompetisi',
        'judul'     => 'Lomba Esai Nasional',
        'tanggal'   => '15 November - 31 Desember 2025',
        'lokasi'    => 'Dilakukan secara online',
        'kapasitas' => 'Tidak ada batasan',
        'waktu'     => '08:00 - Selesai',
        'gambar'    => 'https://i.pinimg.com/1200x/7e/f2/3a/7ef23a616246c8cf714c360327070f97.jpg',
        'persyaratan'=> '  1. Seluruh mahasiswa dan mahasiswi se indonesia 2. Mengirimkan karya yang tidak pernah di lombakan sebelumnya',
        'deskripsi' => 'Lomba Esai Nasional ini mengajak peserta menulis karya kreatif dan kritis dengan tema terkini, 
        untuk menyalurkan ide dan gagasan yang inspiratif.'
    ],
    [
        'kategori'  => 'Kompetisi',
        'judul'     => 'Lomba Media Pembelajaran Matematika',
        'tanggal'   => '15 November - 30 November 2025',
        'lokasi'    => 'Dilakukan secara online',
        'kapasitas' => 'Membentuk kelompok yang terdiri dari 3 orang',
        'waktu'     => '09:00 - 15:00 WIB',
        'gambar'    => 'https://i.pinimg.com/736x/e2/72/88/e27288a2720e2707600dc43c9ea91513.jpg',
        'persyaratan'=> '1. Mahasiswa aktif program studi matematika, pendidikan guru dan pendidikan anak usia dini
                        2. karya bersifat orisinal dan belum pernah di publikasikan sebelumnya
                        3. Mengirimkan karya secara online',
        'deskripsi' => 'Tunjukkan kreativitasmu! Buat media pembelajaran matematika yang seru, interaktif, dan bikin belajar jadi lebih gampang!'
    ],
    // HIBURAN
    [
        'kategori'  => 'Hiburan',
        'judul'     => 'Talkshow dan Konser Musik',
        'tanggal'   => '16 November 2025',
        'lokasi'    => 'Auditorium Chatib Quzwan UIN STS Jambi',
        'kapasitas' => 'Kuota Terbatas',
        'waktu'     => '10:00 - Selesai',
        'gambar'    => 'https://i.pinimg.com/1200x/85/39/1c/85391c1d8bb8437c43fcd36b8742b5bd.jpg',
        'persyaratan'   => 'Mahasiswa aktif',
        'deskripsi' => 'Talkshow 2025 – Dapatkan wawasan, tips, dan inspirasi langsung dari para ahli dan pembicara berpengalaman!'
    ],
    [
        'kategori'  => 'Hiburan',
        'judul'     => 'Preloved Night Market',
        'tanggal'   => '30 Oktober 2025',
        'lokasi'    => 'Gedung Sutha Merchandise',
        'kapasitas' => 'Tidak Terbatas',
        'waktu'     => '19:00 - 22:00 WIB',
        'gambar'    => 'https://i.pinimg.com/736x/c7/11/cc/c711cc86266b2682e51ccf1e1b33fc04.jpg',
        'persyaratan'   => 'Mahasiswa aktif',
        'deskripsi' => 'Preloved Night Market – Temukan barang unik, keren, dan ramah kantong sambil seru-seruan di malam kampus!'
    ],
    [
        'kategori'  => 'Hiburan',
        'judul'     => 'Seminar dan Konser Musik',
        'tanggal'   => '21 November 2025',
        'lokasi'    => 'Auditorium Chatib Quzwan UIN STS Jambi',
        'kapasitas' => 'Kuota Terbatas',
        'waktu'     => '09:00 - Selesai',
        'gambar'    => 'https://i.pinimg.com/1200x/99/52/93/99529315ce39c9b81b7591b4ebce2c56.jpg',
        'persyaratan'   => 'Mahasiswa aktif',
        'deskripsi' => 'Konser Musik 2025 – Nikmati penampilan band kampus dan solo performer dengan musik seru yang memeriahkan kampus!'
    ],
    [
        'kategori'  => 'Hiburan',
        'judul'     => 'SI Fest X Geska Sutha',
        'tanggal'   => '20 Oktober 2025',
        'lokasi'    => 'Teras Kedokteran UIN STS Jambi',
        'kapasitas' => 'Kuota Terbatas',
        'waktu'     => '09:00 - 16:00 WIB',
        'gambar'    => 'https://i.pinimg.com/1200x/cf/cf/a1/cfcfa186047033edf30525f78d262183.jpg',
        'persyaratan' => 'Mahasiswa aktif',
        'deskripsi' => 'Rasakan energi seru di Konser Musik Kampus, seru-seruan dan nikmati alunan lagu favoritmu!'
    ],
    [
        'kategori'  => 'Hiburan',
        'judul'     => 'Seminar dan Festival Musik PBS Fest',
        'tanggal'   => '14 Desember 2025',
        'lokasi'    => 'Auditorium Chatib Quzwan UIN STS Jambi',
        'kapasitas' => 'Kuota Terbatas',
        'waktu'     => '09:00 - Selesai',
        'gambar'    => 'https://i.pinimg.com/736x/08/a2/a4/08a2a453d9930cee8a679dfcf726c7e7.jpg',
        'persyaratan'=> 'Terbuka untuk umum',
        'deskripsi' => 'PBS Fest 2025 – Dapatkan wawasan inspiratif dari seminar seru dan nikmati penampilan musik yang memeriahkan kampus!'
    ],
    [
        'kategori'  => 'Hiburan',
        'judul'     => 'Internasional Seminar & Mini Konser Religi Shalawat',
        'tanggal'   => '22 Oktober 2025',
        'lokasi'    => 'Auditorium Chatib Quzwan UIN STS Jambi',
        'kapasitas' => 'Kuota Terbatas',
        'waktu'     => '09:00 - Selesai',
        'gambar'    => 'https://i.pinimg.com/1200x/09/e2/7d/09e27d5db50f1edbb04bcf759787a9aa.jpg',
        'persyaratan' => 'Mahasiswa aktif',
        'deskripsi' => 'Satu acara, dua pengalaman: seminar internasional yang membuka wawasan dan mini konser shalawat yang menyejukkan hati!.'
    ],
    // SOSIAL
        [
    'kategori'    => 'Sosial',
    'judul'       => 'Donasi Panti Asuhan',
    'tanggal'     => '28 November 2025',
    'lokasi'      => 'Panti Asuhan Teratai Jambi',
    'kapasitas'   => 'Tidak Terbatas',
    'waktu'       => '09:00 - 14:00 WIB',
    'gambar'      => 'https://i.pinimg.com/736x/49/65/34/4965342c99ac27ceeb19c0f955841c9d.jpg',
    'persyaratan' => 'Mendaftar peserta, hadir tepat waktu, mengikuti arahan kegiatan',
    'deskripsi'   => 'Bergabung dalam aksi donasi panti asuhan, sebarkan kebaikan dan bahagiakan anak-anak dengan sumbanganmu.'
        ],

    [
    'kategori'    => 'Sosial',
    'judul'       => 'Volunteer Pendidikan',
    'tanggal'     => '15 Desember - 3 Januari 2026',
    'lokasi'      => 'Kota Jambi',
    'kapasitas'   => 'Kuota Terbatas',
    'waktu'       => '08:00 - 17:00 WIB',
    'gambar'      => 'https://i.pinimg.com/1200x/db/e2/45/dbe24512ca941cb7978b18194331f2f8.jpg',
    'persyaratan' => 'Mendaftar volunteer, hadir sesuai jadwal, aktif membantu kegiatan edukatif',
    'deskripsi'   => 'Bergabung sebagai Volunteer Pendidikan dan bantu anak-anak belajar, berkembang, dan meraih mimpi mereka melalui kegiatan edukatif yang menyenangkan'
    ],

    [
    'kategori'    => 'Sosial',
    'judul'       => 'Donasi Kertas',
    'tanggal'     => 'Senin - Kamis',
    'lokasi'      => 'Box penampungan kertas berada di setiap lantai gedung perkuliahan',
    'kapasitas'   => 'Tidak Terbatas',
    'waktu'       => '09:00 - 15:00 WIB',
    'gambar'      => 'https://i.pinimg.com/736x/19/b8/b1/19b8b151d1a99be8d98259338082fedd.jpg',
    'persyaratan' => 'Menyumbangkan kertas bekas, mengikuti jadwal yang ditentukan, menjaga kebersihan saat berdonasi',
    'deskripsi'   => 'Ayo berdonasi kertas bekas dan dukung program daur ulang untuk lingkungan yang lebih bersih dan berkelanjutan.'
    ],
[
    'kategori'    => 'Sosial',
    'judul'       => 'Donor Darah Bersama PMI',
    'tanggal'     => '28 November 2025',
    'lokasi'      => 'Teras Fakultas Kedokteran UIN STS Jambi',
    'kapasitas'   => 'Kuota Terbatas',
    'waktu'       => '08:00 - 12:00 WIB',
    'gambar'      => 'https://i.pinimg.com/736x/4f/61/bb/4f61bbca3a4868852c6192e1109a9df9.jpg',
    'persyaratan' => 'Mendaftar peserta, sehat secara medis, hadir tepat waktu',
    'deskripsi'   => 'Ayo ikut Donor Darah Bersama PMI! Satu kantong darahmu bisa menyelamatkan hingga 3 nyawa.'
],

   [
    'kategori'    => 'Sosial',
    'judul'       => 'Reuse Barang Bekas Berkualitas',
    'tanggal'     => '22 November 2026',
    'lokasi'      => 'Laboratorium FST UIN STS Jambi',
    'kapasitas'   => 'Tidak terbatas',
    'waktu'       => '10:00 - 14:00 WIB',
    'gambar'      => 'https://i.pinimg.com/1200x/19/c2/f6/19c2f6bf9cb4d837de5a5b32bc215ebc.jpg',
    'persyaratan' => 'Mendaftar peserta, hadir tepat waktu, mengikuti seluruh kegiatan',
    'deskripsi'   => 'Temukan dan gunakan kembali barang bekas berkualitas untuk gaya hidup hemat, kreatif, dan ramah lingkungan.'
   ],

   [
    'kategori'    => 'Sosial',
    'judul'       => 'Aksi Penanaman 2000 Bibit Pohon',
    'tanggal'     => '14 November 2025',
    'lokasi'      => 'TPA Talang Gulo',
    'kapasitas'   => 'Kuota Terbatas',
    'waktu'       => '09:00 - 17:00 WIB',
    'gambar'      => 'https://i.pinimg.com/1200x/a1/a4/2a/a1a42a9aaccdcf5e8be9ad25884d6789.jpg',
    'persyaratan' => 'Mendaftar peserta, hadir tepat waktu, aktif menanam bibit pohon',
    'deskripsi'   => 'Bergabung dalam aksi penanaman 2000 bibit pohon untuk menciptakan lingkungan kampus dan sekitar yang lebih hijau, sehat, dan sejuk'
   ],

    // OLAHRAGA
   [
    'kategori'    => 'Olahraga',
    'judul'       => 'Turnamen Futsal Mahasiswa',
    'tanggal'     => 'Minggu - 14 Desember 2025',
    'lokasi'      => 'Golden Futsal Jambi',
    'kapasitas'   => '20 tim',
    'waktu'       => '18:30 - Selesai',
    'gambar'      => 'https://i.pinimg.com/736x/00/00/61/0000611c1bd9b6261441bb9115e2f6d9.jpg',
    'persyaratan' => 'Mendaftar tim, hadir tepat waktu, mengikuti seluruh pertandingan',
    'deskripsi'   => 'Kompetisi futsal antar kelas dan organisasi.'
],
[
    'kategori'    => 'Olahraga',
    'judul'       => 'KOPRI CUP IV 2025 TOURNAMEN BADMINTON',
    'tanggal'     => '25 November 2025',
    'lokasi'      => 'Hall Badminton',
    'kapasitas'   => '50 Tim',
    'waktu'       => '08:00 - Selesai',
    'gambar'      => 'https://i.pinimg.com/736x/6e/d2/8e/6ed28ee21b15c0eb6b5ecdbf19f4c312.jpg',
    'persyaratan' => 'Mendaftar tim, hadir tepat waktu, mengikuti seluruh pertandingan',
    'deskripsi'   => 'Mengajak mahasiswa berkompetisi dalam turnamen badminton seru untuk menunjukkan skill, sportivitas, dan kekompakan tim.'
],
[
    'kategori'    => 'Olahraga',
    'judul'       => 'Badminton Friendly Match',
    'tanggal'     => '3 Desember 2026',
    'lokasi'      => 'Hall Badminton',
    'kapasitas'   => '20 Tim',
    'waktu'       => '11:00 - Selesai',
    'gambar'      => 'https://i.pinimg.com/1200x/88/2c/2c/882c2ca00380f7146308615ceef1a113.jpg',
    'persyaratan' => 'Mendaftar tim, hadir tepat waktu, mengikuti seluruh pertandingan',
    'deskripsi'   => 'Mengajak mahasiswa bermain dan bersenang-senang sambil mempererat kebersamaan antar peserta.'
],
[
    'kategori'    => 'Olahraga',
    'judul'       => 'Sutha Run 2025',
    'tanggal'     => '20 Oktober 2025',
    'lokasi'      => 'start di Teras Mendalo - UIN STS Jambi',
    'kapasitas'   => 'Tidak Terbatas',
    'waktu'       => '07:00 - Selesai',
    'gambar'      => 'https://i.pinimg.com/1200x/c3/8d/64/c38d649811e9064718d755da65a810ae.jpg',
    'persyaratan' => 'Mendaftar peserta, hadir tepat waktu, mengikuti seluruh jalur lari',
    'deskripsi'   => 'Mengajak peserta berlari seru sambil menantang diri dan menikmati pengalaman olahraga yang menyenangkan di kampus.'
],
[
    'kategori'    => 'Olahraga',
    'judul'       => 'Basket Competition',
    'tanggal'     => '19 November 2025',
    'lokasi'      => 'Lapangan Outdoor',
    'kapasitas'   => '14 / 16 tim',
    'waktu'       => '14:00 - 18:00 WIB',
    'gambar'      => 'https://i.pinimg.com/736x/8e/6e/9c/8e6e9c5134f758c4d37d993096cb5ee7.jpg',
    'persyaratan' => 'Mendaftar tim, hadir tepat waktu, mengikuti seluruh pertandingan',
    'deskripsi'   => 'Basket Competition mengajak mahasiswa bersaing secara seru dan sportif, menunjukkan skill, strategi, dan kerja sama tim di lapangan'
],
[
    'kategori'    => 'Olahraga',
    'judul'       => 'Catur FST',
    'tanggal'     => '5 November 2025',
    'lokasi'      => 'Amphitheater Wing C',
    'kapasitas'   => '20',
    'waktu'       => '09:00 - Selesai',
    'gambar'      => 'https://i.pinimg.com/736x/b9/66/e9/b966e9bfa2696140433fd02504545c05.jpg',
    'persyaratan' => 'Mendaftar peserta, hadir tepat waktu, mengikuti seluruh pertandingan',
    'deskripsi'   => 'Melatih logika, strategi, dan kemampuan analisis, meningkatkan fokus dan ketelitian, serta mengasah kemampuan berpikir kritis dan problem solving.'
],

];

        DB::table('events')->insert($events);
    }
}
