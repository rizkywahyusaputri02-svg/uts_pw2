@extends('layouts.app')

@section('content')
<div 
    x-data="{
        search: '',
        selectedCategory: null,
        openIndex: null
    }"
    class="max-w-6xl mx-auto px-6 py-10"
>

    <!-- HEADER -->
    <div class="text-center mb-12">
        <div class="w-24 h-24 mx-auto flex items-center justify-center bg-blue-100 rounded-full">
            <span class="text-5xl text-blue-600">❓</span>
        </div>

        <h1 class="text-3xl font-semibold text-gray-800 mt-6">
            Frequently Asked Questions
        </h1>

        <p class="text-gray-600 mt-2 text-lg">
            Temukan jawaban untuk pertanyaan yang sering ditanyakan
        </p>
    </div>

    <!-- SEARCH -->
    <div class="mb-10">
        <div class="bg-white shadow-md rounded-2xl p-4">
            <div class="flex items-center gap-3">
                <span class="text-2xl text-gray-500">🔍</span>
                <input
                    type="text"
                    placeholder="Cari pertanyaan..."
                    x-model="search"
                    class="w-full text-gray-700 text-lg border-none focus:ring-0 focus:outline-none"
                >
            </div>
        </div>
    </div>

    @php
        $kategoriCounts = collect($faqs)->groupBy('kategori')->map->count();
    @endphp

    <!-- KATEGORI -->
    <div class="mb-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-3">Kategori</h2>

        <div class="flex gap-3 flex-wrap">
            <button 
                x-on:click="selectedCategory = null"
                class="px-5 py-2 rounded-full border text-sm transition font-medium"
                :class="selectedCategory === null ? 'bg-blue-600 text-white' : 'bg-white text-gray-700'"
            >
                Semua
            </button>

            @foreach($kategoriCounts as $kategori => $jumlah)
                <button 
                    x-on:click="selectedCategory = '{{ $kategori }}'"
                    class="px-5 py-2 rounded-full border text-sm transition font-medium"
                    :class="selectedCategory === '{{ $kategori }}'
                        ? 'bg-blue-600 text-white'
                        : 'bg-white text-gray-700'">
                    {{ $kategori }} ({{ $jumlah }})
                </button>
            @endforeach
        </div>
    </div>

    <!-- FAQ LIST -->
    <div class="space-y-4 mt-8">
        @foreach($faqs as $index => $item)
        
            <div 
                x-show="
                    (!selectedCategory || selectedCategory === '{{ $item['kategori'] }}') &&
                    ('{{ strtolower($item['pertanyaan']) }}'.includes(search.toLowerCase()))
                "
                class="bg-white border shadow-sm rounded-2xl p-5 transition hover:shadow-md"
            >
                <!-- Header -->
                <button 
                    class="w-full flex justify-between items-center text-left"
                    x-on:click="openIndex = openIndex === {{ $index }} ? null : {{ $index }}"
                >
                    <div>
                        <span class="px-4 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">
                            {{ $item['kategori'] }}
                        </span>
                        <p class="mt-3 font-semibold text-gray-900 text-lg leading-snug">
                            {{ $item['pertanyaan'] }}
                        </p>
                    </div>

                    <span 
                        class="text-2xl text-gray-400 transition"
                        x-text="openIndex === {{ $index }} ? '▾' : '▸'"
                    ></span>
                </button>

                <!-- Jawaban -->
                <div 
                    x-show="openIndex === {{ $index }}"
                    x-transition
                    class="mt-3 text-gray-700 pl-3 border-l-4 border-blue-300 leading-relaxed"
                >
                    {{ $item['jawaban'] }}
                </div>
            </div>

        @endforeach
    </div>

</div>
@endsection
