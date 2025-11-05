<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Event Kampus</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

  <!-- Navbar -->
  <nav class="bg-white shadow-sm p-4 flex justify-between items-center">
  <div class="flex items-center space-x-4">
    <span class="text-xl font-bold text-blue-600">Campus Event System</span>
    <a href="{{ route('dashboard') }}" class="text-blue-600 font-medium bg-blue-100 px-3 py-1 rounded">Event</a>
    <a href="{{ route('kategori') }}" class="text-gray-600 hover:text-blue-600">Kategori</a>
    <a href="{{ route('profile') }}" class="text-gray-600 hover:text-blue-600">Profile</a>
    <a href="{{ route('sertifikat') }}" class="text-gray-600 hover:text-blue-600">Sertifikat</a>
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
    <a href="{{ route('logout') }}" class="text-red-600 hover:underline">Keluar</a>
  </div>
  </nav>

   @if(session('login_success'))
  <div class="max-w-md mx-auto mt-6 alert-fade">
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded text-center shadow">
      {{ session('login_success') }}
    </div>
  </div>
@endif


  <!-- Daftar Event -->
  <div class="max-w-7xl mx-auto px-6 py-10">
    <h1 class="text-2xl font-bold mb-2">Daftar Event Kampus</h1>
    <p class="text-gray-600 mb-6">Temukan dan daftar event yang sesuai dengan minatmu</p>

    <!-- Pencarian -->
    <input type="text" placeholder="Cari event..." class="w-full border rounded-lg p-2 mb-6 focus:outline-none focus:ring-2 focus:ring-blue-500">


    <!-- Kartu Event -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

  <!-- Event 1 -->
  <div class="bg-white rounded-lg shadow p-4">
    <img src="https://tanyadigital.com/wp-content/uploads/2023/05/workshop-adalah.jpg" class="w-full h-48 object-cover rounded-lg mb-3">
    <span class="text-sm bg-blue-100 text-blue-600 px-2 py-0.5 rounded">Workshop</span>
    <h3 class="font-bold mt-2">Workshop Pengembangan Web</h3>
    <p class="text-gray-600 text-sm mt-1">Pelajari cara membuat aplikasi web modern...</p>
    <div class="flex items-center space-x-2 text-sm text-gray-500 mt-3">
      <span>📅 15 Nov 2025</span>
      <span>⏰ 09:00 - 16:00</span>
    </div>
    <div class="mt-4 flex justify-between">
      <button onclick="showDetail('Workshop Pengembangan Web', 'Pelajari cara membuat aplikasi web modern menggunakan React dan TypeScript.', '15 November 2025', '09:00 - 16:00 WIB', 'Lab Komputer Gedung A Lt. 3', '28 / 40 peserta', 'Laptop, dasar programming')" class="border px-4 py-1 rounded">Detail</button>
      <button onclick="openRegisterModal(this, 'Workshop Pengembangan Web')" class="bg-black text-white px-4 py-1 rounded">Daftar</button>
    </div>
  </div>

  <!-- Event 2 -->
  <div class="bg-white rounded-lg shadow p-4">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8canmLfWQJns5mmOddsqfnnFNMB2XCxrB9g&s" class="w-full h-48 object-cover rounded-lg mb-3">
    <span class="text-sm bg-yellow-100 text-yellow-600 px-2 py-0.5 rounded">Seminar</span>
    <h3 class="font-bold mt-2">Seminar Kepemimpinan Mahasiswa</h3>
    <p class="text-gray-600 text-sm mt-1">Bangun karakter dan kepemimpinan yang inspiratif.</p>
    <div class="flex items-center space-x-2 text-sm text-gray-500 mt-3">
      <span>📅 20 Nov 2025</span>
      <span>⏰ 08:00 - 12:00</span>
    </div>
    <div class="mt-4 flex justify-between">
      <button onclick="showDetail('Seminar Kepemimpinan Mahasiswa', 'Bangun karakter dan kepemimpinan yang inspiratif dengan pembicara nasional.', '20 November 2025', '08:00 - 12:00 WIB', 'Aula Utama Kampus', '50 / 100 peserta', 'Mahasiswa aktif, berpakaian rapi')" class="border px-4 py-1 rounded">Detail</button>
      <button onclick="openRegisterModal(this, 'Seminar Kepemimpinan Mahasiswa')" class="bg-black text-white px-4 py-1 rounded">Daftar</button>
    </div>
  </div>

  <!-- Event 3 -->
  <div class="bg-white rounded-lg shadow p-4">
    <img src="https://animasistudio.com/wp-content/uploads/2023/11/Video-Animasi-vs-Video-Biasa-Mana-yang-Lebih-Efektif-untuk-Pemasaran-1024x683.jpg" class="w-full h-48 object-cover rounded-lg mb-3">
    <span class="text-sm bg-green-100 text-green-600 px-2 py-0.5 rounded">Kompetisi</span>
    <h3 class="font-bold mt-2">Lomba Desain Poster Nasional</h3>
    <p class="text-gray-600 text-sm mt-1">Tunjukkan kreativitasmu melalui karya visual terbaik!</p>
    <div class="flex items-center space-x-2 text-sm text-gray-500 mt-3">
      <span>📅 25 Nov 2025</span>
      <span>⏰ 10:00 - 17:00</span>
    </div>
    <div class="mt-4 flex justify-between">
      <button onclick="showDetail('Lomba Desain Poster Nasional', 'Kompetisi desain poster tingkat nasional bertema kreativitas digital mahasiswa.', '25 November 2025', '10:00 - 17:00 WIB', 'Auditorium Utama', '35 / 60 peserta', 'Membawa laptop dan software desain grafis')" class="border px-4 py-1 rounded">Detail</button>
      <button onclick="openRegisterModal(this, 'Lomba Desain Poster Nasional')" class="bg-black text-white px-4 py-1 rounded">Daftar</button>
    </div>
  </div>

  <!-- Event 4 -->
  <div class="bg-white rounded-lg shadow p-4">
    <img src="https://pophariini.com/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-14-at-20.33.13.jpeg" class="w-full h-48 object-cover rounded-lg mb-3">
    <span class="text-sm bg-pink-100 text-pink-600 px-2 py-0.5 rounded">Hiburan</span>
    <h3 class="font-bold mt-2">Music Fest Kampus 2025</h3>
    <p class="text-gray-600 text-sm mt-1">Nikmati malam penuh musik dan keceriaan!</p>
    <div class="flex items-center space-x-2 text-sm text-gray-500 mt-3">
      <span>📅 5 Des 2025</span>
      <span>⏰ 18:00 - 22:00</span>
    </div>
    <div class="mt-4 flex justify-between">
      <button onclick="showDetail('Music Fest Kampus 2025', 'Festival musik tahunan menampilkan band dan solois terbaik kampus.', '5 Desember 2025', '18:00 - 22:00 WIB', 'Lapangan Utama Kampus', '500 / 700 penonton', 'Tiket gratis untuk mahasiswa')" class="border px-4 py-1 rounded">Detail</button>
      <button onclick="openRegisterModal(this, 'Music Fest Kampus 2025')" class="bg-black text-white px-4 py-1 rounded">Daftar</button>
    </div>
  </div>

  <!-- Event 5 -->
  <div class="bg-white rounded-lg shadow p-4">
    <img src="https://cdn.rri.co.id/berita/Ternate/o/1718345904482-dddooooo/b4ngrx7lsnpbbbt.avif" class="w-full h-48 object-cover rounded-lg mb-3">
    <span class="text-sm bg-red-100 text-red-600 px-2 py-0.5 rounded">Sosial</span>
    <h3 class="font-bold mt-2">Aksi Donor Darah Mahasiswa</h3>
    <p class="text-gray-600 text-sm mt-1">Bersama kita bantu sesama dengan setetes darah.</p>
    <div class="flex items-center space-x-2 text-sm text-gray-500 mt-3">
      <span>📅 10 Des 2025</span>
      <span>⏰ 08:00 - 15:00</span>
    </div>
    <div class="mt-4 flex justify-between">
      <button onclick="showDetail('Aksi Donor Darah Mahasiswa', 'Kegiatan sosial untuk membantu PMI dalam memenuhi kebutuhan darah.', '10 Desember 2025', '08:00 - 15:00 WIB', 'Aula Rektorat Lt. 2', '60 / 100 peserta', 'Sehat jasmani dan sudah sarapan')" class="border px-4 py-1 rounded">Detail</button>
      <button onclick="openRegisterModal(this, 'Aksi Donor Darah Mahasiswa')" class="bg-black text-white px-4 py-1 rounded">Daftar</button>
    </div>
  </div>

  <!-- Event 6 -->
  <div class="bg-white rounded-lg shadow p-4">
    <img src="https://cdn.rri.co.id/berita/Atambua/o/1739468905663-bc6d82075c1a31c5bc266b26b4cf0c5e/h4fkdetws4n9097.jpeg" class="w-full h-48 object-cover rounded-lg mb-3">
    <span class="text-sm bg-purple-100 text-purple-600 px-2 py-0.5 rounded">Olahraga</span>
    <h3 class="font-bold mt-2">Turnamen Futsal Antar Fakultas</h3>
    <p class="text-gray-600 text-sm mt-1">Dukung fakultasmu meraih gelar juara kampus!</p>
    <div class="flex items-center space-x-2 text-sm text-gray-500 mt-3">
      <span>📅 12 Des 2025</span>
      <span>⏰ 13:00 - 17:00</span>
    </div>
    <div class="mt-4 flex justify-between">
      <button onclick="showDetail('Turnamen Futsal Antar Fakultas', 'Ajang kompetisi futsal antar fakultas untuk mempererat solidaritas mahasiswa.', '12 Desember 2025', '13:00 - 17:00 WIB', 'Lapangan Indoor Kampus', '10 / 12 tim', 'Setiap tim terdiri dari 7 pemain')" class="border px-4 py-1 rounded">Detail</button>
      <button onclick="openRegisterModal(this, 'Turnamen Futsal Antar Fakultas')" class="bg-black text-white px-4 py-1 rounded">Daftar</button>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




</body>
</html>
