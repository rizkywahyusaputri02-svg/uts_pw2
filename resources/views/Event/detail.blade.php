@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white shadow rounded-lg p-8 mt-8">
  <img src="{{ asset($event->gambar) }}" class="rounded-lg w-full h-64 object-cover mb-6">
  <h2 class="text-3xl font-bold mb-3">{{ $event->nama }}</h2>
  <p class="text-gray-600 mb-6">{{ $event->deskripsi }}</p>

  <div class="flex justify-end">
    <form action="{{ route('pendaftaran.store') }}" method="POST">
      @csrf
      <input type="hidden" name="event_id" value="{{ $event->id }}">
      <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
        Daftar Sekarang
      </button>
    </form>
  </div>
</div>
@endsection
