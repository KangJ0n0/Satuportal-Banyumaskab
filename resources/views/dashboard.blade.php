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

<x-event></x-event>

<!-- Lapak Aduan dan Lowongan -->
<x-lapakaduan></x-lapakaduan>

<!-- layanan publik -->
<x-layananpublik></x-layananpublik>
    
<!-- News Section -->
<x-berita></x-berita>

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
</section>

</body>
<x-footer></x-footer>
</html>
