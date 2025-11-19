@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Event Kampus</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

  <!-- Navbar
  <nav class="bg-white shadow-sm p-4 flex justify-between items-center">
  <div class="flex items-center space-x-4">
    <span class="text-xl font-bold text-blue-600">Campus Event System</span>
    <a href="{{ route('dashboard') }}" class="text-blue-600 font-medium bg-blue-100 px-3 py-1 rounded">Event</a>
    <a href="{{ route('kategori') }}" class="text-gray-600 hover:text-blue-600">Kategori</a>
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
  </nav> -->

@if(session('login_success'))
  <div id="toast-login-success" 
       class="fixed top-8 left-1/2 transform -translate-x-1/2 bg-green-100 border-2 border-green-500 text-green-800 
              px-10 py-5 rounded-2xl shadow-2xl z-50 text-center font-semibold text-lg md:text-xl animate-fade-in-down">
    {{ session('login_success') }}
  </div>

  <script>
    // Hilangkan otomatis setelah 3 detik
    setTimeout(() => {
      const toast = document.getElementById('toast-login-success');
      if (toast) {
        toast.classList.add('opacity-0', 'translate-y-2');
        setTimeout(() => toast.remove(), 600);
      }
    }, 3000);
  </script>

  <style>
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translate(-50%, -20px);
      }
      to {
        opacity: 1;
        transform: translate(-50%, 0);
      }
    }
    .animate-fade-in-down {
      animation: fadeInDown 0.5s ease-out;
    }
    .opacity-0 {
      opacity: 0;
      transition: all 0.5s ease;
    }
    .translate-y-2 {
      transform: translate(-50%, -10px);
    }
  </style>
@endif


 <!-- Daftar Event -->
  <div class="max-w-7xl mx-auto px-6 py-10">
    <h1 class="text-2xl font-bold mb-2">Event Kampus</h1>
    <p class="text-gray-600 mb-6">Jelajahi berbagai kategori event yang tersedia di kampus</p>

    <!-- Pencarian -->
    <input type="text" placeholder="Cari event..." class="w-full border rounded-lg p-2 mb-6 focus:outline-none focus:ring-2 focus:ring-blue-500">


    <!-- Kartu Event -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

  <!-- Event 1 -->
  <div class="bg-white rounded-lg shadow p-4">
    <img src="https://tanyadigital.com/wp-content/uploads/2023/05/workshop-adalah.jpg" class="w-full h-48 object-cover rounded-lg mb-3">
    <span class="text-sm bg-blue-100 text-blue-600 px-2 py-0.5 rounded">Workshop</span>
    <h3 class="font-bold mt-2">Workshop</h3>
    <p class="text-gray-600 text-sm mt-1">Membangun keterampilan, membangun masa depan, Yuk ikuti workshop yang ada di kampus kami!</p>
    <div class="flex items-center space-x-2 text-sm text-gray-500 mt-3">
    </div>
  </div>

  <!-- Event 2 -->
  <div class="bg-white rounded-lg shadow p-4">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8canmLfWQJns5mmOddsqfnnFNMB2XCxrB9g&s" class="w-full h-48 object-cover rounded-lg mb-3">
    <span class="text-sm bg-yellow-100 text-yellow-600 px-2 py-0.5 rounded">Seminar</span>
    <h3 class="font-bold mt-2">Seminar Nasional dan Internasional</h3>
    <p class="text-gray-600 text-sm mt-1">Yuk, Ikuti Seminar Inspiratif 2025!”
Dapatkan ilmu baru, tips sukses, dan inspirasi langsung dari para ahli.
Jangan lewatkan kesempatan untuk memperluas wawasan dan jaringanmu!</p>
    <div class="flex items-center space-x-2 text-sm text-gray-500 mt-3">
    </div>
  </div>

  <!-- Event 3 -->
  <div class="bg-white rounded-lg shadow p-4">
    <img src="https://animasistudio.com/wp-content/uploads/2023/11/Video-Animasi-vs-Video-Biasa-Mana-yang-Lebih-Efektif-untuk-Pemasaran-1024x683.jpg" class="w-full h-48 object-cover rounded-lg mb-3">
    <span class="text-sm bg-green-100 text-green-600 px-2 py-0.5 rounded">Kompetisi</span>
    <h3 class="font-bold mt-2">Lomba Antar Mahasiswa</h3>
    <p class="text-gray-600 text-sm mt-1">Tunjukkan Potensimu, Wujudkan Prestasimu!
Ayo ikut serta dalam Event Lomba Mahasiswa 2025!
Beragam kategori lomba seru siap menantang kreativitas, sportivitas, dan semangat juangmu.</p>
    <div class="flex items-center space-x-2 text-sm text-gray-500 mt-3">
    </div>
  </div>

  <!-- Event 4 -->
  <div class="bg-white rounded-lg shadow p-4">
    <img src="https://pophariini.com/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-14-at-20.33.13.jpeg" class="w-full h-48 object-cover rounded-lg mb-3">
    <span class="text-sm bg-pink-100 text-pink-600 px-2 py-0.5 rounded">Hiburan</span>
    <h3 class="font-bold mt-2">Music Fest Kampus 2025</h3>
    <p class="text-gray-600 text-sm mt-1">Yuk, Ikuti Music Fest Kampus 2025!
Nikmati penampilan band kampus, solo akustik, dan musik seru lainnya.
Kesempatan seru untuk bersantai, berkumpul, dan menikmati musik bareng teman-teman!</p>
    <div class="flex items-center space-x-2 text-sm text-gray-500 mt-3">
    </div>
  </div>

  <!-- Event 5 -->
  <div class="bg-white rounded-lg shadow p-4">
    <img src="https://cdn.rri.co.id/berita/Ternate/o/1718345904482-dddooooo/b4ngrx7lsnpbbbt.avif" class="w-full h-48 object-cover rounded-lg mb-3">
    <span class="text-sm bg-red-100 text-red-600 px-2 py-0.5 rounded">Sosial</span>
    <h3 class="font-bold mt-2">Aksi Kegiatan Sosial dan Masyarakat</h3>
    <p class="text-gray-600 text-sm mt-1">Aksi Sosial Mahasiswa – Bersama Peduli Sesama!
Bergabunglah dalam kegiatan yang membawa dampak nyata bagi masyarakat.
Satu langkah kecil dari kita, berarti harapan besar bagi mereka yang membutuhkan.</p>
    <div class="flex items-center space-x-2 text-sm text-gray-500 mt-3">
    </div>
  </div>

  <!-- Event 6 -->
  <div class="bg-white rounded-lg shadow p-4">
    <img src="https://cdn.rri.co.id/berita/Atambua/o/1739468905663-bc6d82075c1a31c5bc266b26b4cf0c5e/h4fkdetws4n9097.jpeg" class="w-full h-48 object-cover rounded-lg mb-3">
    <span class="text-sm bg-purple-100 text-purple-600 px-2 py-0.5 rounded">Olahraga</span>
    <h3 class="font-bold mt-2">Turnamen Antar Prodi dan Fakultas</h3>
    <p class="text-gray-600 text-sm mt-1">Bersaing, Berkarya, Menang Bersama!
Turnamen antar fakultas hadir untuk mengasah skill, sportivitas, dan kerja tim.
Tunjukkan semangat fakultasmu dan jadilah yang terbaik di setiap pertandingan!</p>
    <div class="flex items-center space-x-2 text-sm text-gray-500 mt-3">
    </div>
  </div>

</div>


<script>
  // Hilangkan notifikasi otomatis setelah 4 detik
  setTimeout(() => {
    const alert = document.querySelector('.alert-fade');
    if (alert) {
      alert.style.transition = "opacity 0.5s ease";
      alert.style.opacity = "0";
      setTimeout(() => alert.remove(), 500);
    }
  }, 4000);
</script>

<!-- Modal Detail Event -->
<div id="eventModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center z-50">
  <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/2 p-6 relative">
    <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">✕</button>

    <h2 id="eventTitle" class="text-2xl font-bold text-blue-600 mb-2"></h2>
    <p id="eventOrganizer" class="text-gray-500 mb-4">Diselenggarakan oleh Himpunan Mahasiswa Teknik Informatika</p>

    <h3 class="font-semibold mb-1">Deskripsi</h3>
    <p id="eventDescription" class="text-gray-700 mb-4"></p>

    <div class="grid grid-cols-2 gap-3 text-sm text-gray-700">
      <div>
        <p class="font-semibold">Tanggal</p>
        <p id="eventDate"></p>
      </div>
      <div>
        <p class="font-semibold">Waktu</p>
        <p id="eventTime"></p>
      </div>
      <div>
        <p class="font-semibold">Lokasi</p>
        <p id="eventLocation"></p>
      </div>
      <div>
        <p class="font-semibold">Kapasitas</p>
        <p id="eventCapacity"></p>
      </div>
      <div class="col-span-2">
        <p class="font-semibold">Persyaratan</p>
        <p id="eventRequirement"></p>
      </div>
    </div>

  </div>
</div>

<script>
  function showDetail(title, description, date, time, location, capacity, requirement) {
    document.getElementById('eventTitle').innerText = title;
    document.getElementById('eventDescription').innerText = description;
    document.getElementById('eventDate').innerText = date;
    document.getElementById('eventTime').innerText = time;
    document.getElementById('eventLocation').innerText = location;
    document.getElementById('eventCapacity').innerText = capacity;
    document.getElementById('eventRequirement').innerText = requirement;
    document.getElementById('eventModal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('eventModal').classList.add('hidden');
  }
</script>

<!-- Modal Pendaftaran Event -->
<div id="registerModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center z-50">
  <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/2 p-6 relative">
    <button onclick="closeRegisterModal()" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">✕</button>

    <h2 class="text-2xl font-bold mb-2">Pendaftaran Event</h2>
    <p id="registerEventTitle" class="text-gray-600 mb-4"></p>

    <form id="registerForm" class="space-y-3">
      <input type="text" id="nama" placeholder="Nama Lengkap" class="w-full border rounded p-2" required>
      <input type="text" id="nim" placeholder="NIM" class="w-full border rounded p-2" required>
      <input type="email" id="email" placeholder="Email" class="w-full border rounded p-2" required>
      <input type="text" id="prodi" placeholder="Program Studi" class="w-full border rounded p-2" required>
      <textarea id="catatan" placeholder="Catatan (opsional)" class="w-full border rounded p-2"></textarea>

      <div class="flex justify-end gap-2 pt-2">
        <button type="button" onclick="closeRegisterModal()" class="border px-4 py-1 rounded">Batal</button>
        <button type="submit" class="bg-black text-white px-4 py-1 rounded">Konfirmasi Pendaftaran</button>
      </div>
    </form>
  </div>
</div>
@endsection
<script>
  // deklarasi global
  let currentEventButton = null;

  // Buka form pendaftaran
  function openRegisterModal(button, eventTitle) {
    // debugging kecil (bisa dihapus nanti)
    console.log("openRegisterModal called for:", eventTitle, button);

    currentEventButton = button;
    const titleEl = document.getElementById("registerEventTitle");
    const modal = document.getElementById("registerModal");

    if (!titleEl || !modal) {
      console.error("Elemen registerEventTitle/registerModal tidak ditemukan!");
      return;
    }

    titleEl.innerText = eventTitle;
    modal.classList.remove("hidden");
  }

  // Tutup form
  function closeRegisterModal() {
    const modal = document.getElementById("registerModal");
    if (modal) modal.classList.add("hidden");
  }

  // Pastikan kode ini jalan setelah DOM siap
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("registerForm");
    if (!form) {
      console.error("Form registerForm tidak ditemukan — pastikan ID 'registerForm' ada di HTML.");
      return;
    }

    form.addEventListener("submit", function (e) {
      e.preventDefault();

      // Ambil data form
      const nama = document.getElementById("nama")?.value || "";
      const nim = document.getElementById("nim")?.value || "";
      const email = document.getElementById("email")?.value || "";
      const prodi = document.getElementById("prodi")?.value || "";
      const catatan = document.getElementById("catatan")?.value || "";

      console.log("Data pendaftaran:", { nama, nim, email, prodi, catatan });

      // Tutup modal
      closeRegisterModal();

      // Notifikasi berhasil (ganti dengan toast/SweetAlert kalau mau)
      Swal.fire({
  icon: 'success',
  title: 'Pendaftaran Berhasil!',
  text: 'Terima kasih telah mendaftar!',
  showConfirmButton: false,
  timer: 4000,
  timerProgressBar: true,
  position: 'center',
});


      // Reset form
      form.reset();
    });
  });

</script>
<script>
  // 🔍 Fitur Pencarian Event
  document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.querySelector('input[placeholder="Cari event..."]');
    const eventCards = document.querySelectorAll(".grid .bg-white.rounded-lg.shadow.p-4");

    searchInput.addEventListener("input", function () {
      const keyword = this.value.toLowerCase().trim();

      eventCards.forEach(card => {
        const title = card.querySelector("h3")?.innerText.toLowerCase() || "";
        const category = card.querySelector("span")?.innerText.toLowerCase() || "";
        const description = card.querySelector("p")?.innerText.toLowerCase() || "";

        // Cek apakah kata kunci cocok dengan judul, kategori, atau deskripsi
        const isMatch =
          title.includes(keyword) ||
          category.includes(keyword) ||
          description.includes(keyword);

        // Tampilkan hanya yang cocok
        if (isMatch) {
          card.classList.remove("hidden");
        } else {
          card.classList.add("hidden");
        }
      });
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html> 