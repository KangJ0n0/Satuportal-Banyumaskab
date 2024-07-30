<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Banyumas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white'">

<!-- Navbar -->
<x-navbar></x-navbar>


<!-- Hero Section -->
<x-hero></x-hero>

<!-- Event Section -->


<section class="" style="background-image: url('storage/eventbg.png'); background-size: cover; background-position: center;">
    <div class="max-w-6xl mx-auto py-12">
    <h3 class="flex items-center w-full">
      <span class="flex-grow bg-gray-200 rounded h-1"></span>
      <span class="mx-3 text-lg font-medium">EVENT KABUPATEN BANYUMAS</span>
      <span class="flex-grow bg-gray-200 rounded h-1"></span>
    </h3>
    <div class="flex justify-between items-center mt-8">
      <button class="bg-blue-200 p-2 rounded-full">
        <i class="fas fa-arrow-left text-blue-700"></i>
      </button>

      <div class="w-full max-w-xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        @foreach ($events as $event)
        <div class="flex mb-8">
          <div class="">
            <img class="object-cover w-full h-48" src="{{ $event->gambar_event1 }}" alt="{{ $event->nama_event }} event poster featuring various artists">
          </div>
          <div class="w-1/2 p-4">
            <h2 class="text-lg font-semibold text-gray-800 truncate">{{ $event->nama_event }}</h2>
            <p class="text-gray-600">{{ \Carbon\Carbon::parse($event->tanggal)->format('d F Y') }}</p>
            <p class="mt-2 text-gray-600 overflow-hidden text-ellipsis">{{ $event->deskripsi }}</p>
            <p class="mt-2 text-gray-400">{{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}</p>
            <div class="mt-4 flex justify-between">
              <button class="bg-teal-500 text-white py-2 px-4 rounded hover:bg-teal-600">Detail Event</button>
              <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded hover:bg-gray-400">Jadwal Event Lainnya</button>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <button class="bg-blue-200 p-2 rounded-full">
        <i class="fas fa-arrow-right text-blue-700"></i>
      </button>
    </div>
  </div>
</section>







<!-- Lapak Aduan dan Lowongan -->
<x-lapakaduan></x-lapakaduan>

<!-- layanan publik -->
<x-layananpublik></x-layananpublik>
    
<!-- News Section -->
<section class="mb-6">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- News Item -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://placehold.co/400x200" alt="News Image" class="w-full h-48 object-cover border-8 border-white">
                <div class="p-4">
                    <p class="text-gray-500 text-sm mb-2">Kamis, 27 Juni 2024</p>
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">KADIVPAS: PENCANANGAN TUSI PEMASYARAKATAN DI RUT...</h2>
                    <p class="text-gray-700 text-sm">BANYUMAS - Divisi Pemasyarakatan Kantor Wilayah Kementerian Hukum dan HAM Jawa Tengah menyelenggarakan kegiatan...</p>
                </div>
            </div>
            <!-- Repeat similar blocks for other news items -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://placehold.co/400x200" alt="News Image" class="w-full h-48 object-cover border-8 border-white">
                <div class="p-4">
                    <p class="text-gray-500 text-sm mb-2">Kamis, 27 Juni 2024</p>
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">NYANTRIK, JLF PERTEMUAN KOLABORASI SENIM...</h2>
                    <p class="text-gray-700 text-sm">BANYUMAS - Kabupaten Banyumas di Provinsi Jawa Tengah menyelenggarakan kegiatan Nyantrik, sebuah pertemuan kolaborasi seni...</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://placehold.co/400x200" alt="News Image" class="w-full h-48 object-cover border-8 border-white">
                <div class="p-4">
                    <p class="text-gray-500 text-sm mb-2">Kamis, 27 Juni 2024</p>
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">HARI LINGKUNGAN HIDUP: PJ GUBERNUR JATE...</h2>
                    <p class="text-gray-700 text-sm">BANYUMAS - Pj Gubernur Jawa Tengah menghadiri peringatan Hari Lingkungan Hidup di Kabupaten Banyumas dengan tema...</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://placehold.co/400x200" alt="News Image" class="w-full h-48 object-cover border-8 border-white">
                <div class="p-4">
                    <p class="text-gray-500 text-sm mb-2">Kamis, 27 Juni 2024</p>
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">ACARA PENUTUPAN FESTIVAL BUDAYA 2024...</h2>
                    <p class="text-gray-700 text-sm">BANYUMAS - Festival Budaya 2024 di Banyumas telah resmi ditutup dengan acara yang meriah dan banyak penampilan seni...</p>
                </div>
            </div>
        </div>
        <div class="mt-4 text-center">
            <button class="px-4 py-2 bg-teal-500 text-white font-semibold rounded">Lihat Selengkapnya</button>
        </div>
    </div>
</section>


<!-- Infographic and Prices Section -->
<x-harga></x-harga>

<!-- Profile Section -->
<section class="mb-6">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="https://placehold.co/1200x400" alt="Profil Kabupaten Banyumas" class="w-full h-64 object-cover">
        <div class="p-6">
            <h2 class="text-2xl font-semibold text-gray-900 mb-2">PROFIL KABUPATEN BANYUMAS</h2>
        </div>
    </div>
</section>

<!-- Aduan masyarakat -->
<x-aduanmasyarakat></x-aduanmasyarakat>

<!-- Produk Banyumas Section -->
<x-produkbanyumas></x-produkbanyumas>

<!-- Instagram Feeds Section -->
<div class="mb-8">
<div class="flex justify-between items-center border-b border-gray-300 pb-2">
    <h2 class="text-xl font-bold">Instagram Feeds</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
    <!-- Instagram Feed Card -->
    <div class="bg-black shadow-md rounded-lg overflow-hidden">
        <img src="https://placehold.co/600x400" alt="Instagram Feed" class="w-full">
    </div>
    <!-- Repeat for each Instagram feed (2 total) -->
    <div class="bg-black shadow-md rounded-lg overflow-hidden">
        <img src="https://placehold.co/600x400" alt="Instagram Feed" class="w-full">
    </div>
</div>
<br><br>
</section>

</body>
<x-footer></x-footer>
</html>
