@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">
    <h1 class="text-3xl font-semibold text-gray-800 mb-2">Hubungi Kami</h1>
    <p class="text-gray-600 mb-8">Ada pertanyaan atau butuh bantuan? Kami siap membantu Anda</p>

    <div class="grid md:grid-cols-3 gap-8">
        <!-- Form -->
        <div class="md:col-span-2 bg-white rounded-xl shadow p-6">
            <div class="flex items-center gap-2 mb-4">
                <div class="text-gray-700 text-xl">💬</div>
                <h2 class="text-xl font-semibold text-gray-800">Kirim Pesan</h2>
            </div>
            <p class="text-gray-600 mb-6">Isi formulir di bawah ini dan kami akan merespons secepat mungkin</p>

            @if(session('success'))
                <div class="mb-4 bg-green-100 text-green-700 p-3 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('kontak.store') }}" method="POST" class="space-y-5">
                @csrf
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Nama Lengkap *</label>
                        <input type="text" name="nama" placeholder="Masukkan Nama" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Email *</label>
                        <input type="email" name="email" placeholder="email@gmail.com" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Kategori *</label>
                        <select name="kategori" class="w-full border rounded-lg px-3 py-2 text-gray-600 focus:ring focus:ring-blue-200">
                            <option value="">Pilih kategori</option>
                            <option value="pendaftaran">Pendaftaran</option>
                            <option value="pembayaran">Pembayaran</option>
                            <option value="event">Event</option>
                            <option value="sertifikat">Sertifikat</option>
                            <option value="teknis">Teknis</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Subjek *</label>
                        <input type="text" name="subjek" placeholder="Subjek pesan Anda" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200">
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Pesan *</label>
                    <textarea name="pesan" rows="4" placeholder="Tuliskan pesan Anda di sini..." class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-200"></textarea>
                </div>

                <button type="submit" class="bg-black text-white px-5 py-2 rounded-lg hover:bg-gray-800 transition flex items-center gap-2">
                    ✈️ Kirim Pesan
                </button>
            </form>
        </div>

        <!-- Info Kontak -->
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Informasi Kontak</h2>

            <div class="space-y-4 text-gray-700">
                <div class="flex gap-3 items-start">
                    <div class="text-blue-600 text-xl">📍</div>
                    <div>
                        <p class="font-semibold">Alamat</p>
                        <p>Gedung Rektorat<br>Kampus Mendalo<br>UIN STS JAMBI</p>
                    </div>
                </div>

                <div class="flex gap-3 items-start">
                    <div class="text-blue-600 text-xl">📧</div>
                    <div>
                        <p class="font-semibold">Email</p>
                        <p>EventKampus@ac.id<br></p>
                    </div>
                </div>

                <div class="flex gap-3 items-start">
                    <div class="text-blue-600 text-xl">📞</div>
                    <div>
                        <p class="font-semibold">Telepon</p>
                        <p>+62 831 7763 0931<br></p>
                    </div>
                </div>

                <div class="flex gap-3 items-start">
                    <div class="text-blue-600 text-xl">⏰</div>
                    <div>
                        <p class="font-semibold">Jam Operasional</p>
                        <p>Senin – Jumat: 08.00 - 17.00<br>Sabtu: 08.00 - 13.00<br>Minggu & Libur: Tutup</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
