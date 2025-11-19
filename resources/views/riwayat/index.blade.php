@extends('layouts.app')

@section('content')
<div class="p-8">
  <h2 class="text-2xl font-semibold mb-2">Riwayat Pendaftaran</h2>
  <p class="text-gray-600 mb-6">Lihat semua event yang pernah Anda ikuti</p>

  <!-- Statistik -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
    <div class="bg-white p-5 rounded-lg shadow text-center">
      <h3 class="text-3xl font-bold text-blue-600">7</h3>
      <p class="text-gray-500 mt-1">Total Pendaftaran</p>
    </div>
    <div class="bg-white p-5 rounded-lg shadow text-center">
      <h3 class="text-3xl font-bold text-green-600">3</h3>
      <p class="text-gray-500 mt-1">Event Selesai</p>
    </div>
  </div>

  <!-- Daftar Riwayat -->
  <div class="bg-white rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold mb-2">Daftar Riwayat</h3>
    <p class="text-gray-500 text-sm mb-4">Menampilkan 7 dari 7 pendaftaran</p>

    <table class="w-full text-left border-t border-gray-200">
      <thead>
        <tr class="text-gray-600 border-b">
          <th class="py-2">Nama Event</th>
          <th class="py-2">Kategori</th>
          <th class="py-2">Tanggal Event</th>
          <th class="py-2">Tgl Daftar</th>
          <th class="py-2">Status</th>
        </tr>
      </thead>
      <tbody class="text-sm text-gray-700">
        @foreach ($riwayat as $r)
        <tr class="border-b hover:bg-gray-50">
          <td class="py-3">{{ $r['nama_event'] }}</td>
          <td class="py-3"><span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs">{{ $r['kategori'] }}</span></td>
          <td class="py-3"><i class="fa-regular fa-calendar mr-1"></i>{{ $r['tanggal_event'] }}</td>
          <td class="py-3">{{ $r['tanggal_daftar'] }}</td>
          <td class="py-3">
            @if($r['status'] === 'Selesai')
              <span class="px-3 py-1 rounded-full text-white text-xs bg-green-500">Terdaftar</span>
            @elseif($r['status'] === 'Ditolak')
              <span class="px-3 py-1 rounded-full text-white text-xs bg-red-500">Gagal Terdaftar</span>
            @else
              <span class="px-3 py-1 rounded-full text-white text-xs bg-yellow-500">Terdaftar</span>
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection