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
<section class="relative">
    <img src="storage/hero.png" alt="City illustration" class="w-full">
   
</section>

<!-- Event Section -->

    <section class="max-w-6xl mx-auto py-12">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold">EVENT KABUPATEN BANYUMAS</h2>
        </div>
        <div class="relative flex items-center">
            <!-- Left Button -->
            <button class="absolute left-0 bg-blue-600 text-white rounded-full p-2 hover:bg-blue-700">
                <i class="fas fa-arrow-left"></i>
            </button>

            <!-- Event Card -->
            <div class="bg-white rounded-lg shadow-lg p-6 mx-auto w-1/2">
                <img src="https://placehold.co/300x300" alt="Event Poster for FLAME Festival featuring various artists" class="w-full h-64 object-cover rounded-lg mb-4">
                <div class="text-gray-700">
                    <h3 class="text-xl font-bold mb-2">FLAME Festival</h3>
                    <p class="text-sm text-gray-500 mb-4">14 July 2024</p>
                    <p class="mb-4">The Biggest Music Festival On Tour<br>Purwokerto - 14 July 2024<br>Guest Star:<br>- JKT48<br>- For Revenge<br>- Rebellion Rose<br>- Perunggu<br>- Salma Salsabil<br>- Lomba Sihir<br>- Gildocustic dll....</p>
                    <p class="text-sm text-gray-500 mb-4">09 Jul 2024</p>
                    <div class="flex justify-between">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Detail Event</button>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Jadwal Event Lainnya</button>
                    </div>
                </div>
            </div>

            <!-- Right Button -->
            <button class="absolute right-0 bg-blue-600 text-white rounded-full p-2 hover:bg-blue-700">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </section>


<!-- Public Services Section -->
<header class="bg-blue-500 py-6">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-white text-3xl font-bold">LAPAK ADUAN BANYUMAS</h1>
        <div class="relative">
            <input type="text" class="px-4 py-2 rounded-full" placeholder="Cek Aduan">
            <i class="fas fa-search absolute top-0 right-0 mr-3 mt-2"></i>
        </div>
    </div>
</header>

<section class="container mx-auto py-12">
    <div class="bg-blue-300 p-6 rounded-lg shadow-lg mb-8">
        <div class="flex items-center">
            <img src="https://placehold.co/100x100" alt="Icon for Aduan" class="w-20 h-20 mr-4">
            <p class="text-white text-xl">
                Sampaikan keluhan dan saran anda melalui kanal Lapak Aduan dan Media Sosial Lapak Aduan di bawah!
            </p>
        </div>
        <div class="flex justify-center mt-4 space-x-4">
            <a href="#" class="text-white"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="#" class="text-white"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="#" class="text-white"><i class="fab fa-whatsapp fa-2x"></i></a>
            <a href="#" class="text-white"><i class="fab fa-x-twitter fa-2x"></i></a>
            <a href="#" class="text-white"><i class="fas fa-envelope fa-2x"></i></a>
        </div>
    </div>

    <div class="flex justify-center mb-8">
        <button class="bg-blue-600 text-white px-8 py-2 rounded-lg shadow-lg hover:bg-blue-700">
            LOWONGAN PEKERJAAN!
        </button>
    </div>

    <div>
        <h2 class="text-center text-2xl font-bold mb-6">INFORMASI PELAYANAN PUBLIK</h2>
        <div class="grid grid-cols-4 gap-6 mb-12">
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-user-friends fa-3x text-blue-500 mb-2"></i>
                <p>LAYANAN Umum</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-leaf fa-3x text-blue-500 mb-2"></i>
                <p>LAYANAN Lingkungan</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-heartbeat fa-3x text-blue-500 mb-2"></i>
                <p>LAYANAN Kesehatan</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-building fa-3x text-blue-500 mb-2"></i>
                <p>INFORMASI Pemerintahan</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-file-alt fa-3x text-blue-500 mb-2"></i>
                <p>INFORMASI Publik</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-calculator fa-3x text-blue-500 mb-2"></i>
                <p>LAYANAN Pelaporan Pajak Daerah</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-seedling fa-3x text-blue-500 mb-2"></i>
                <p>LAYANAN Pertanian dan Perikanan</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-bus fa-3x text-blue-500 mb-2"></i>
                <p>LAYANAN Transportasi</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-graduation-cap fa-3x text-blue-500 mb-2"></i>
                <p>LAYANAN Kependudukan dan Pendidikan</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-umbrella-beach fa-3x text-blue-500 mb-2"></i>
                <p>LAYANAN Wisata dan Budaya</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <i class="fas fa-exclamation-triangle fa-3x text-blue-500 mb-2"></i>
                <p>LAYANAN Gawat Darurat</p>
            </div>
        </div>
    </div>

    <div class="flex justify-between">
        <div class="bg-blue-100 p-4 rounded-lg shadow-lg text-center w-1/4">
            <p>Pojok Kampus</p>
        </div>
        <div class="bg-blue-100 p-4 rounded-lg shadow-lg text-center w-1/4">
            <p>Layanan BUMN & BUMD</p>
        </div>
        <div class="bg-blue-100 p-4 rounded-lg shadow-lg text-center w-1/4">
            <p>Pojok Pelatihan Masyarakat</p>
        </div>
        <div class="bg-blue-100 p-4 rounded-lg shadow-lg text-center w-1/4">
            <p>Pojok Kreatifitas Masyarakat</p>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="mb-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- News Item -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://placehold.co/400x200" alt="News Image 1" class="w-full h-48 object-cover">
            <div class="p-4">
                <p class="text-gray-500 text-sm mb-2">Kamis, 27 Juni 2024</p>
                <h2 class="text-xl font-semibold text-gray-900 mb-2">KADIVPAS: PENCANANGAN TUSI PEMASYARAKATAN DI RUT...</h2>
                <p class="text-gray-700 text-sm">BANYUMAS - Divisi Pemasyarakatan Kantor Wilayah Kementerian Hukum dan HAM Jawa Tengah menyelenggarakan kegiatan...</p>
            </div>
        </div>
        <!-- Repeat similar blocks for other news items -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://placehold.co/400x200" alt="News Image 2" class="w-full h-48 object-cover">
            <div class="p-4">
                <p class="text-gray-500 text-sm mb-2">Kamis, 27 Juni 2024</p>
                <h2 class="text-xl font-semibold text-gray-900 mb-2">NYANTRIK, JLF PERTEMUAN KOLABORASI SENIM...</h2>
                <p class="text-gray-700 text-sm">BANYUMAS - Kabupaten Banyumas di Provinsi Jawa Tengah menyelenggarakan kegiatan Nyantrik, sebuah pertemuan kolaborasi seni...</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://placehold.co/400x200" alt="News Image 3" class="w-full h-48 object-cover">
            <div class="p-4">
                <p class="text-gray-500 text-sm mb-2">Kamis, 27 Juni 2024</p>
                <h2 class="text-xl font-semibold text-gray-900 mb-2">HARI LINGKUNGAN HIDUP: PJ GUBERNUR JATE...</h2>
                <p class="text-gray-700 text-sm">BANYUMAS - Pj Gubernur Jawa Tengah menghadiri peringatan Hari Lingkungan Hidup di Kabupaten Banyumas dengan tema...</p>
            </div>
        </div>
    </div>
    <div class="mt-4 text-center">
        <button class="px-4 py-2 bg-teal-500 text-white font-semibold rounded">Lihat Selengkapnya</button>
    </div>
</section>

<!-- Infographic and Prices Section -->
<section class="mb-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Infographic Section -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">INFOGRAFIS SATU DATA KABUPATEN BANYUMAS</h2>
            <p class="text-gray-700 mb-4">Berisikan Informasi terkait satu data di Kabupaten Banyumas (sumber: dinsosinfo.banyumaskab.go.id)</p>
            <div class="grid grid-cols-2 gap-4">
                <div class="text-center">
                    <img src="https://placehold.co/100x100" alt="Data Statistik Dasar" class="mx-auto mb-2">
                    <p class="text-gray-700 text-sm">DATA STATISTIK DASAR</p>
                </div>
                <div class="text-center">
                    <img src="https://placehold.co/100x100" alt="Data Statistik Sektoral" class="mx-auto mb-2">
                    <p class="text-gray-700 text-sm">DATA STATISTIK SEKTORAL</p>
                </div>
                <!-- Repeat similar blocks for other infographics -->
                <div class="text-center">
                    <img src="https://placehold.co/100x100" alt="Data Spasial" class="mx-auto mb-2">
                    <p class="text-gray-700 text-sm">DATA SPASIAL</p>
                </div>
                <div class="text-center">
                    <img src="https://placehold.co/100x100" alt="Data Tematik" class="mx-auto mb-2">
                    <p class="text-gray-700 text-sm">DATA TEMATIK</p>
                </div>
            </div>
        </div>
        <!-- Prices Section -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">HARGA BAHAN POKOK KABUPATEN BANYUMAS</h2>
            <p class="text-gray-700 mb-4">Rataan Harga Bahan Pokok Seluruh Pasar di Kabupaten Banyumas (sumber: sigadokas.banyumaskab.go.id)</p>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b">Nama</th>
                        <th class="px-4 py-2 border-b">Harga Kemarin</th>
                        <th class="px-4 py-2 border-b">Harga Sekarang</th>
                        <th class="px-4 py-2 border-b">Perubahan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 border-b">Beras IR 64 Siger</td>
                        <td class="px-4 py-2 border-b">Rp 13.500/Kg</td>
                        <td class="px-4 py-2 border-b">Rp 14.000/Kg</td>
                        <td class="px-4 py-2 border-b">Rp 500/Kg</td>
                    </tr>
                    <!-- Repeat similar rows for other price items -->
                    <tr>
                        <td class="px-4 py-2 border-b">Beras Pera Muncul</td>
                        <td class="px-4 py-2 border-b">Rp 16.500/Kg</td>
                        <td class="px-4 py-2 border-b">Rp 17.000/Kg</td>
                        <td class="px-4 py-2 border-b">Rp 500/Kg</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Profile Section -->
<section class="mb-6">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="https://placehold.co/1200x400" alt="Profil Kabupaten Banyumas" class="w-full h-64 object-cover">
        <div class="p-6">
            <h2 class="text-2xl font-semibold text-gray-900 mb-2">PROFIL KABUPATEN BANYUMAS</h2>
        </div>
    </div>
</section>

<section> <div class="flex justify-between items-center border-b border-gray-300 pb-2">
    <h2 class="text-xl font-bold">ADUAN MASYARAKAT</h2>
    <a href="#" class="text-sm text-white bg-teal-600 px-4 py-2 rounded">Selengkapnya</a>
</div>
<p class="text-sm text-gray-600">Pantau Aduan Masyarakat, sumber: lapakaduan.banyumaskab.go.id</p>
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
    <!-- Card -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="https://placehold.co/600x400" alt="Gambar Aduan Masyarakat" class="w-full">
        <div class="p-4">
            <h3 class="text-md font-semibold">+62xxxx</h3>
            <p class="text-sm text-gray-600">Jl. alternatif desa panusupan olongkio ke taman sari jeroan sepanjang jalan 500 meter cor rusak...</p>
        </div>
    </div>
    <!-- Repeat for each card (4 total) -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="https://placehold.co/600x400" alt="Gambar Aduan Masyarakat" class="w-full">
        <div class="p-4">
            <h3 class="text-md font-semibold">+62xxxx</h3>
            <p class="text-sm text-gray-600">Jl. alternatif desa panusupan olongkio ke taman sari jeroan sepanjang jalan 500 meter cor rusak...</p>
        </div>
    </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="https://placehold.co/600x400" alt="Gambar Aduan Masyarakat" class="w-full">
        <div class="p-4">
            <h3 class="text-md font-semibold">+62xxxx</h3>
            <p class="text-sm text-gray-600">Jl. alternatif desa panusupan olongkio ke taman sari jeroan sepanjang jalan 500 meter cor rusak...</p>
        </div>
    </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="https://placehold.co/600x400" alt="Gambar Aduan Masyarakat" class="w-full">
        <div class="p-4">
            <h3 class="text-md font-semibold">+62xxxx</h3>
            <p class="text-sm text-gray-600">Jl. alternatif desa panusupan olongkio ke taman sari jeroan sepanjang jalan 500 meter cor rusak...</p>
        </div>
    </div>
</div>
</div>

<!-- Produk Banyumas Section -->
<div class="mb-8 bg-teal-600 text-white rounded-lg p-4">
<div class="flex justify-between items-center border-b border-white pb-2">
    <h2 class="text-xl font-bold">PRODUK BANYUMAS</h2>
    <a href="#" class="text-sm text-teal-600 bg-white px-4 py-2 rounded">Selengkapnya</a>
</div>
<p class="text-sm text-gray-200">Lihat produk Usaha Kecil Menengah di Kabupaten Banyumas, sumber (sistem informasi desa)</p>
<div class="flex justify-between items-center mt-4">
    <button class="text-xl bg-white text-teal-600 rounded-full p-2"><i class="fas fa-chevron-left"></i></button>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 flex-grow mx-4">
        <!-- Card -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://placehold.co/600x400" alt="Produk Unggulan" class="w-full">
            <div class="p-4">
                <h3 class="text-md font-semibold text-teal-600">PRODUK UNGGULAN</h3>
                <p class="text-sm text-gray-600">Potensi dan Produk Desa</p>
            </div>
        </div>
        <!-- Repeat for each card (4 total) -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://placehold.co/600x400" alt="Wisata Budaya" class="w-full">
            <div class="p-4">
                <h3 class="text-md font-semibold text-teal-600">WISATA BUDAYA</h3>
                <p class="text-sm text-gray-600">Potensi dan Produk Desa</p>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://placehold.co/600x400" alt="Homestay & Penginapan" class="w-full">
            <div class="p-4">
                <h3 class="text-md font-semibold text-teal-600">HOMESTAY & PENGINAPAN</h3>
                <p class="text-sm text-gray-600">Potensi dan Produk Desa</p>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img src="https://placehold.co/600x400" alt="Wisata Kuliner" class="w-full">
            <div class="p-4">
                <h3 class="text-md font-semibold text-teal-600">WISATA KULINER</h3>
                <p class="text-sm text-gray-600">Potensi dan Produk Desa</p>
            </div>
        </div>
    </div>
    <button class="text-xl bg-white text-teal-600 rounded-full p-2"><i class="fas fa-chevron-right"></i></button>
</div>
</div>

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
</section>
<!-- Footer Section -->


</body>
<x-footer></x-footer>
</html>
