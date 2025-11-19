@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 flex">
  <!-- Panel kiri: Profil -->
  <div class="w-1/4 bg-white shadow-md p-5 flex flex-col items-center rounded-lg">
    <!-- Foto Profil -->
    <div class="w-24 h-24 rounded-full bg-blue-100 flex items-center justify-center mb-4 overflow-hidden">
      @if($user->profile_photo)
        <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Foto Profil" class="object-cover w-full h-full">
      @else
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A4 4 0 018 16h8a4 4 0 012.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      @endif
    </div>

    <h2 class="text-base font-semibold text-gray-800 mb-4 border-b pb-2 w-full text-center">Profil Saya</h2>

    <div class="space-y-2 w-full text-sm">
      <div>
        <p class="text-gray-500">Nama Lengkap</p>
        <p class="font-semibold text-gray-800">{{ $user->name ?? '-' }}</p>
      </div>
      <div>
        <p class="text-gray-500">NIM</p>
        <p class="font-semibold text-gray-800">{{ $user->nim ?? '-' }}</p>
      </div>
      <div>
        <p class="text-gray-500">Fakultas</p>
        <p class="font-semibold text-gray-800">{{ $user->fakultas ?? '-' }}</p>
      </div>
      <div>
        <p class="text-gray-500">Email</p>
        <p class="font-semibold text-gray-800">{{ $user->email ?? '-' }}</p>
      </div>
      <div>
        <p class="text-gray-500">No. Telepon</p>
        <p class="font-semibold text-gray-800">{{ $user->phone ?? '-' }}</p>
      </div>
    </div>

    <!-- Statistik -->
  
  </div>

  <!-- Panel kanan: Daftar Event -->
  <div class="flex-1 p-6">
    <div class="bg-white shadow-md rounded-lg p-6">
      <h2 class="text-lg font-semibold text-gray-800 mb-4">Event yang Diikuti</h2>


      <!-- Card 1 - Workshop -->
      <div class="bg-white border rounded-xl shadow-sm overflow-hidden flex hover:shadow-lg transition">
        <img src="https://tanyadigital.com/wp-content/uploads/2023/05/workshop-adalah.jpg" alt="Event" class="w-48 h-48 object-cover">
        <div class="flex-1 p-5">
          <div class="flex justify-between items-start">
            <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Workshop</span>
          </div>

          <h3 class="text-lg font-semibold text-gray-800 mt-3">Workshop Pengembangan Web dengan React & TypeScript</h3>
          <p class="text-gray-500 text-sm mt-1">Terdaftar: 20 Oktober 2025</p>

          <div class="mt-3 space-y-1 text-sm text-gray-600">
            <p>📅 15 November 2025</p>
            <p>⏰ 09:00 - 16:00 WIB</p>
            <p>📍 Lab Komputer Gedung A Lt. 3</p>
          </div>

          <div class="bg-blue-50 text-blue-700 text-sm p-2 rounded-md mt-3">Jangan lupa bawa laptop</div>

        </div>
      </div>

      <!-- Card 2 - Seminar -->
      <div class="bg-white border rounded-xl shadow-sm overflow-hidden flex hover:shadow-lg transition mt-6">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8canmLfWQJns5mmOddsqfnnFNMB2XCxrB9g&s" alt="Seminar Karir" class="w-48 h-48 object-cover">
        <div class="flex-1 p-5">
          <div class="flex justify-between items-start">
            <span class="bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">Seminar</span>
          </div>

          <h3 class="text-lg font-semibold text-gray-800 mt-3">Seminar Karir: Persiapan Masuk Dunia Kerja</h3>
          <p class="text-gray-500 text-sm mt-1">Terdaftar: 22 Oktober 2025</p>

          <div class="mt-3 space-y-1 text-sm text-gray-600">
            <p>📅 20 November 2025</p>
            <p>⏰ 13:00 - 17:00 WIB</p>
            <p>📍 Auditorium Kampus</p>
          </div>

          <div class="bg-blue-50 text-blue-700 text-sm p-2 rounded-md mt-3">Siapkan pertanyaan untuk sesi Q&A</div>

        </div>
      </div>

      <!-- Card 3 - Donor Darah -->
      <div class="bg-white border rounded-xl shadow-sm overflow-hidden flex hover:shadow-lg transition mt-6">
        <img src="https://cdn.rri.co.id/berita/Ternate/o/1718345904482-dddooooo/b4ngrx7lsnpbbbt.avif" alt="Donor Darah" class="w-48 h-48 object-cover">
        <div class="flex-1 p-5">
          <div class="flex justify-between items-start">
            <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Sosial</span>
          </div>

          <h3 class="text-lg font-semibold text-gray-800 mt-3">aksi donor darah</h3>
          <p class="text-gray-500 text-sm mt-1">Terdaftar: 25 Oktober 2025</p>

          <div class="mt-3 space-y-1 text-sm text-gray-600">
            <p>📅 18 November 2025</p>
            <p>⏰ 07:00 - 16:00 WIB</p>
            <p>📍 Desa Sukamaju (Meeting Point: Gerbang Kampus)</p>
          </div>

          <div class="bg-blue-50 text-blue-700 text-sm p-2 rounded-md mt-3">Menunggu konfirmasi panitia</div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
