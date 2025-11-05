<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun - Event Kampus</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom right, rgba(37, 99, 235, 0.7), rgba(139, 92, 246, 0.7));
      z-index: 1;
    }
    .content { position: relative; z-index: 2; }
  </style>
</head>
<body class="h-screen flex">

  <!-- Kiri -->
  <div class="w-1/2 relative flex flex-col justify-center items-center text-white bg-cover bg-center"
       style="background-image: url('{{ asset('images/uin jambi.jpeg') }}');">
    <div class="overlay"></div>
    <div class="content text-center">
      <div class="text-5xl mb-4">🎓</div>
      <h1 class="text-2xl font-semibold">Pendaftaran Event Kampus</h1>
      <p class="mt-3 text-lg">Universitas Islam Negeri Sultan Thaha Saifuddin Jambi</p>
    </div>
  </div>

  <!-- Kanan -->
  <div class="w-1/2 flex flex-col justify-center items-center">
    <div class="w-96 bg-white shadow-lg rounded-xl p-8">
      <!-- Tombol atas -->
      <div class="flex justify-center mb-6 border-b">
        <a href="/login" class="px-6 py-2 text-gray-500 hover:text-blue-600">Masuk</a>
        <a href="/register" class="px-6 py-2 border-b-2 border-blue-600 text-blue-600 font-semibold">Daftar</a>
      </div>

      <h2 class="text-xl font-semibold mb-4 text-gray-800">Daftar Akun Baru</h2>

@if(session('success'))
  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 text-center">
    {{ session('success') }}
  </div>
@endif

@if ($errors->any())
  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
    <ul class="list-disc ml-5">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
    
      <form action="/register" method="POST">
        @csrf
        <label class="block mb-1 text-gray-700">Nama Lengkap</label>
        <input type="text" name="name" class="w-full border rounded p-2 mb-3" placeholder="Nama Lengkap" required>

        <label class="block mb-1 text-gray-700">NIM</label>
        <input type="text" name="nim" class="w-full border rounded p-2 mb-3" placeholder="NIM" required>

        <label class="block mb-1 text-gray-700">Email</label>
        <input type="email" name="email" class="w-full border rounded p-2 mb-3" placeholder="email@mahasiswa.ac.id" required>

        <label class="block mb-1 text-gray-700">No. Telepon</label>
        <input type="text" name="phone" class="w-full border rounded p-2 mb-3" placeholder="08xxxxxxxxxx" required>

  <label class="block mb-1 text-gray-700">Fakultas</label>
  <select name="fakultas" class="w-full border rounded p-2 mb-3" required>
    <option value="">Pilih Fakultas</option>
    <option value="Sains dan Teknologi">Sains dan Teknologi</option>
    <option value="Tarbiyah dan Keguruan">Tarbiyah dan Keguruan</option>
    <option value="Dakwah">Dakwah</option>
    <option value="Kedokteran">Kedokteran</option>
    <option value="Syariah">Syariah</option>
    <option value="Adab dan Humaniora">Adab dan Humaniora</option>
    <option value="Ushuludin">Ushuludin</option>
    <option value="Ekonomi Bisnis Islam">Ekonomi Bisnis Islam</option>
  </select>

        <label class="block mb-1 text-gray-700">Password</label>
        <input type="password" name="password" class="w-full border rounded p-2 mb-3" placeholder="Minimal 6 karakter" required>

        <label class="block mb-1 text-gray-700">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="w-full border rounded p-2 mb-4" required>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Daftar Sekarang</button>
      </form>

      <p class="text-center text-sm mt-4 text-gray-600">Sudah punya akun?
        <a href="/login" class="text-blue-600 hover:underline">Masuk</a>
      </p>
    </div>
  </div>
</body>
</html>
