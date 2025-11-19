<nav class="bg-white shadow-sm p-4 flex justify-between items-center">
  <div class="flex items-center space-x-4">
    <span class="text-xl font-bold text-blue-600">Campus Event System</span>
    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'text-blue-600 font-medium bg-blue-100 px-3 py-1 rounded' : 'text-gray-600 hover:text-blue-600' }}">Event</a>
    <a href="{{ route('kategori') }}" class="{{ request()->routeIs('kategori') ? 'text-blue-600 font-medium bg-blue-100 px-3 py-1 rounded' : 'text-gray-600 hover:text-blue-600' }}">Kategori</a>
    <a href="{{ route('profile') }}" class="text-gray-600 hover:text-blue-600">Profile</a>
    <a href="{{ route('riwayat') }}" class="text-gray-600 hover:text-blue-600">Riwayat</a>
    <a href="{{ route('tentang') }}" class="text-gray-600 hover:text-blue-600">Tentang</a>
    <a href="{{ route('faq') }}" class="text-gray-600 hover:text-blue-600">FAQ</a>
    <a href="{{ route('kontak') }}" class="text-gray-600 hover:text-blue-600">Kontak</a>
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

    <script>
    function confirmLogout() {
        if (confirm('Apakah Anda Yakin Akan Keluar?')) {
            document.getElementById('logoutForm').submit();
        }
    }
</script>
  </div>
</nav>
