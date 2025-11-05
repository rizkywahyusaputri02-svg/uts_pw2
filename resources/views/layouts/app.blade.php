<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Campus Event System</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  
<nav class="bg-white shadow p-4 flex justify-between items-center">
  <div class="flex items-center space-x-4">
    <h1 class="text-xl font-bold text-blue-600">Campus Event System</h1>
    <div class="space-x-4">
      <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-600 font-medium px-3 py-1 rounded' : 'text-gray-700 hover:text-blue-600' }}">Event</a>
      <a href="{{ route('kategori') }}" class="{{ request()->routeIs('kategori') ? 'bg-blue-100 text-blue-600 font-medium px-3 py-1 rounded' : 'text-gray-700 hover:text-blue-600' }}">Kategori</a>
      <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'bg-blue-100 text-blue-600 font-medium px-3 py-1 rounded' : 'text-gray-700 hover:text-blue-600' }}">Profile</a>
      <a href="{{ route('sertifikat') }}" class="{{ request()->routeIs('sertifikat') ? 'bg-blue-100 text-blue-600 font-medium px-3 py-1 rounded' : 'text-gray-700 hover:text-blue-600' }}">Sertifikat</a>
      <a href="{{ route('riwayat') }}" class="{{ request()->routeIs('riwayat') ? 'bg-blue-100 text-blue-600 font-medium px-3 py-1 rounded' : 'text-gray-700 hover:text-blue-600' }}">Riwayat</a>
      <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'bg-blue-100 text-blue-600 font-medium px-3 py-1 rounded' : 'text-gray-700 hover:text-blue-600' }}">Tentang</a>
      <a href="{{ route('faq') }}" class="{{ request()->routeIs('faq') ? 'bg-blue-100 text-blue-600 font-medium px-3 py-1 rounded' : 'text-gray-700 hover:text-blue-600' }}">FAQ</a>
      <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'bg-blue-100 text-blue-600 font-medium px-3 py-1 rounded' : 'text-gray-700 hover:text-blue-600' }}">Kontak</a>
    </div>
  </div>
  <div class="flex items-center space-x-4">
    <div class="text-right">
      <p class="font-semibold text-gray-800">{{ Auth::user()->name ?? 'Nama User' }}</p>
      <p class="text-sm text-gray-500">{{ Auth::user()->nim ?? 'NIM' }}</p>
    </div>
    <a href="{{ route('logout') }}" class="text-red-600 hover:underline">Keluar</a>
  </div>
</nav>

  <main class="max-w-6xl mx-auto mt-8">
    @yield('content')
  </main>

  <footer class="text-center text-gray-500 text-sm py-4 mt-12">
    &copy; {{ date('Y') }} Campus Event System. All rights reserved.
  </footer>

</body>
</html>
