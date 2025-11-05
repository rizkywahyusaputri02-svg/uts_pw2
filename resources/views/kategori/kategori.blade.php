@extends('layouts.app')

@section('content')
<div class="text-center mb-10">
  <h1 class="text-3xl font-bold text-gray-800 mb-2">Kategori Event</h1>
  <p class="text-gray-600">Jelajahi berbagai kategori acara kampus yang menarik!</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
  @foreach($kategori as $item)
  <div class="bg-white shadow-md rounded-xl overflow-hidden hover:shadow-lg transition">
    <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}" class="h-48 w-full object-cover">
    <div class="p-5">
      <h2 class="text-xl font-semibold text-gray-800 mb-2">
        {{ $item['icon'] }} {{ $item['nama'] }}
      </h2>
      <p class="text-gray-600 text-sm mb-3">{{ $item['deskripsi'] }}</p>
      <p class="text-sm text-blue-600 font-semibold mb-2">
        {{ $item['jumlah_event'] }} Event Terdaftar
      </p>
      <p class="text-gray-700 text-sm"><strong>Event Populer:</strong></p>
      <ul class="list-disc list-inside text-gray-600 text-sm">
        @foreach($item['event_populer'] as $event)
        <li>{{ $event }}</li>
        @endforeach
      </ul>
    </div>
  </div>
  @endforeach
</div>
@endsection
