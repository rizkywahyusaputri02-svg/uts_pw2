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
    <h1 class="text-xl font-bold text-blue-600">SYSTEM EVENT CAMPUS</h1>
    <div class="space-x-4">
      <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-600 font-medium px-3 py-1 rounded' : 'text-gray-700 hover:text-blue-600' }}">Event</a>
      <a href="{{ route('kategori') }}" class="{{ request()->routeIs('kategori') ? 'bg-blue-100 text-blue-600 font-medium px-3 py-1 rounded' : 'text-gray-700 hover:text-blue-600' }}">Kategori</a>
      <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'bg-blue-100 text-blue-600 font-medium px-3 py-1 rounded' : 'text-gray-700 hover:text-blue-600' }}">Profile</a>
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
    <form id="logoutForm" action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="button" class="text-red-600 hover:underline" onclick="confirmLogout()">
        Keluar
    </button>
</form>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function confirmLogout() {
    Swal.fire({
        title: 'Yakin ingin keluar?',
        text: "Kamu akan kembali ke halaman login.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Keluar',
        cancelButtonText: 'Batal',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logoutForm').submit();
        }
    });
}
</script>

  </div>
</nav>

<main class="max-w-6xl mx-auto mt-8">
  @yield('content')
</main>

<footer class="text-center text-gray-500 text-sm py-4 mt-12">
  &copy; {{ date('Y') }} Campus Event System. All rights reserved.
</footer>

@yield('scripts')

<!-- Alpine.js WAJIB -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


</body>
</html>
