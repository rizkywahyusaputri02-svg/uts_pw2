@extends('layouts.app')

@section('content')
<div class="p-8">
  <h2 class="text-2xl font-semibold mb-2">Kategori Event</h2>
  <p class="text-gray-600 mb-6">Jelajahi berbagai kategori event yang tersedia di kampus</p>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($kategori as $k)
    <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition">
      <img src="{{ $k['gambar'] }}" class="rounded-lg mb-3 w-full h-48 object-cover">
      <div class="flex items-center justify-between">
        <span class="text-sm bg-blue-100 text-blue-600 px-2 py-0.5 rounded">{{ $k['nama'] }}</span>
        <span class="text-xl">{{ $k['icon'] }}</span>
      </div>
      <p class="text-gray-600 text-sm mt-2">{{ $k['deskripsi'] }}</p>
      <p class="text-sm text-gray-500 mt-3">{{ $k['jumlah_event'] }} Event</p>
      <button class="mt-3 border border-gray-300 px-4 py-1 rounded hover:bg-gray-100 w-full">Lihat Detail</button>
    </div>
    @endforeach
  </div>
</div>
@endsection
