@extends('layouts.app')

@section('content')
<div class="p-8 bg-gray-50 min-h-screen">

  <!-- Header -->
  <div class="text-center mb-10">
    <div class="flex justify-center mb-4">
      <div class="bg-blue-100 p-4 rounded-full">
        <i class="fa-solid fa-graduation-cap text-3xl text-blue-600"></i>
      </div>
    </div>
    <h2 class="text-2xl font-semibold mb-2">Tentang Campus Event System</h2>
    <p class="text-gray-600 max-w-2xl mx-auto">
      Platform digital terpadu untuk mengelola dan mendaftarkan berbagai kegiatan kampus dengan mudah dan efisien
    </p>
  </div>

  <!-- Statistik -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
    <div class="bg-white rounded-xl shadow p-6 text-center">
      <p class="text-3xl font-bold text-blue-600">5000+</p>
      <p class="text-gray-600">Mahasiswa Aktif</p>
    </div>
    <div class="bg-white rounded-xl shadow p-6 text-center">
      <p class="text-3xl font-bold text-blue-600">100+</p>
      <p class="text-gray-600">Event per Tahun</p>
    </div>
    <div class="bg-white rounded-xl shadow p-6 text-center">
      <p class="text-3xl font-bold text-blue-600">50+</p>
      <p class="text-gray-600">Organisasi Terdaftar</p>
    </div>
    <div class="bg-white rounded-xl shadow p-6 text-center">
      <p class="text-3xl font-bold text-blue-600">95%</p>
      <p class="text-gray-600">Tingkat Kepuasan</p>
    </div>
  </div>

  <!-- Visi & Misi -->
  <div class="bg-white rounded-xl shadow p-6 mb-12 grid md:grid-cols-2 gap-6 items-center">
    <div>
      <h3 class="text-lg font-semibold mb-2 flex items-center gap-2 text-blue-600">
        <i class="fa-regular fa-lightbulb"></i> Visi & Misi
      </h3>

      <h4 class="font-semibold text-gray-800">Visi</h4>
      <p class="text-gray-600 mb-3">
        Menjadi platform event kampus terdepan yang memfasilitasi pengembangan soft skills, networking, dan pengalaman mahasiswa melalui kegiatan yang berkualitas dan beragam.
      </p>

      <h4 class="font-semibold text-gray-800">Misi</h4>
      <ul class="list-disc pl-5 text-gray-600 space-y-1">
        <li>Memudahkan akses mahasiswa terhadap informasi event kampus</li>
        <li>Menyediakan sistem pendaftaran yang efisien dan transparan</li>
        <li>Mendorong partisipasi aktif mahasiswa dalam kegiatan kampus</li>
        <li>Membangun ekosistem event yang inklusif dan berkelanjutan</li>
      </ul>
    </div>

    <div>
      <img src="https://i.pinimg.com/736x/b9/41/d1/b941d1568117ff5b7e9e5c02f6d97dfa.jpg"
           alt="Teamwork" class="rounded-xl shadow">
    </div>
  </div>

  <!-- Keunggulan Platform -->
  <div class="text-center mb-10">
    <h3 class="text-lg font-semibold text-gray-800 mb-6">Keunggulan Platform Kami</h3>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <div class="bg-white rounded-xl shadow p-6">
        <i class="fa-solid fa-bullseye text-blue-600 text-3xl mb-2"></i>
        <h4 class="font-semibold mb-1">Misi Kami</h4>
        <p class="text-gray-600 text-sm">Menyediakan platform terpadu untuk memudahkan mahasiswa mengakses berbagai kegiatan kampus.</p>
      </div>
      <div class="bg-white rounded-xl shadow p-6">
        <i class="fa-solid fa-users text-blue-600 text-3xl mb-2"></i>
        <h4 class="font-semibold mb-1">Komunitas Aktif</h4>
        <p class="text-gray-600 text-sm">Lebih dari 5000+ mahasiswa aktif berpartisipasi dalam event kampus setiap semester.</p>
      </div>
      <div class="bg-white rounded-xl shadow p-6">
        <i class="fa-solid fa-trophy text-blue-600 text-3xl mb-2"></i>
        <h4 class="font-semibold mb-1">Event Berkualitas</h4>
        <p class="text-gray-600 text-sm">Kami menyelenggarakan 100+ event setiap tahun dengan berbagai kategori menarik.</p>
      </div>
      <div class="bg-white rounded-xl shadow p-6">
        <i class="fa-regular fa-heart text-blue-600 text-3xl mb-2"></i>
        <h4 class="font-semibold mb-1">Pengalaman Terbaik</h4>
        <p class="text-gray-600 text-sm">Memberikan pengalaman pendaftaran yang cepat dan user-friendly untuk semua mahasiswa.</p>
      </div>
    </div>
  </div>

  <!-- Tim Kami -->
  <div class="text-center mb-12">
    <h3 class="text-lg font-semibold text-gray-800 mb-6">Tim Kami</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 justify-items-center">
      <div class="bg-white p-6 rounded-xl shadow text-center">
        <img src="images/pas foto.jpg"
             alt="Tim 1" class="w-24 h-24 rounded-full mx-auto mb-3 object-cover">
        <h4 class="font-semibold">Rizky Wahyu Saputri</h4>
        <p class="text-gray-600 text-sm">701240079</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow text-center">
        <img src="images/aura.jpg"
             alt="Tim 2" class="w-24 h-24 rounded-full mx-auto mb-3 object-cover">
        <h4 class="font-semibold">Aura Mugniyyah Syanti</h4>
        <p class="text-gray-600 text-sm">701240074</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow text-center">
        <img src="images/dian.jpg"
             alt="Tim 3" class="w-24 h-24 rounded-full mx-auto mb-3 object-cover">
        <h4 class="font-semibold">Dian Nughraini Syafitri</h4>
        <p class="text-gray-600 text-sm">701240085</p>
      </div>
    </div>
  </div>

  <!-- Hubungi Kami -->
  <div class="bg-white rounded-xl shadow p-6">
    <h3 class="text-lg font-semibold mb-4">Hubungi Kami</h3>
    <p class="text-gray-600 mb-4">Ada pertanyaan? Jangan ragu untuk menghubungi tim kami.</p>
    <div class="grid md:grid-cols-3 gap-6">
      <div>
        <h4 class="font-semibold">Email</h4>
        <p class="text-gray-600">EventKampus@ac.id</p>
      </div>
      <div>
        <h4 class="font-semibold">Telepon</h4>
        <p class="text-gray-600">+62 831 7763 0931</p>
      </div>
      <div>
        <h4 class="font-semibold">Alamat</h4>
        <p class="text-gray-600">Gedung Rektorat Lt. 2</p>
      </div>
    </div>
  </div>
</div>
@endsection
