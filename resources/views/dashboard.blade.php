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
<body class="bg-white">

<!-- Navbar -->
<x-navbar></x-navbar>

<!-- Hero Section -->
<section class="relative">
    <img src="storage/hero.png" alt="City illustration" class="w-full">
    <div class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center text-center text-white">
        <h1 class="text-4xl md:text-6xl font-bold">Banyumas</h1>
        <p class="text-lg md:text-2xl mt-4">Selamat Datang di Situs Resmi</p>
    </div>
</section>

<!-- Event Section -->
<section class="bg-gray-100 py-12">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold">Event Kabupaten Banyumas</h2>
        <div class="mt-8">
            <img src="storage/expo.jpg" alt="Event Image" class="mx-auto">
            <h3 class="text-xl mt-4">Purwokerto Wedding Expo 2024</h3>
            <p class="text-gray-600 mt-2">Purwokerto Wedding Expo 2024Mengusung tema 'Romance Journey', lebih dari 50 vendor-vendor pilihan</p>
            <button class="bg-blue-600 text-white px-4 py-2 mt-4">Lihat Event</button>
        </div>
    </div>
</section>

<!-- Public Services Section -->
<section class="py-12">
    <div class="container mx-auto">
        <h2 class="text-3xl font-semibold text-center">Informasi Pelayanan Publik</h2>
        <div class="mt-8 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div>
                <img src="https://placehold.co/100x100" alt="Service 1" class="mx-auto">
                <h3 class="text-xl mt-4">Service 1</h3>
            </div>
            <div>
                <img src="https://placehold.co/100x100" alt="Service 2" class="mx-auto">
                <h3 class="text-xl mt-4">Service 2</h3>
            </div>
            <!-- Add more services as needed -->
        </div>
    </div>
</section>

<!-- News Section -->
<section class="bg-gray-100 py-12">
    <div class="container mx-auto">
        <h2 class="text-3xl font-semibold text-center">Berita Utama</h2>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-4 shadow-md">
                <img src="https://placehold.co/300x200" alt="News Image" class="w-full">
                <h3 class="text-xl mt-4">News Title</h3>
                <p class="text-gray-600 mt-2">News description goes here.</p>
            </div>
            <!-- Add more news items as needed -->
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 PEMKAB BANYUMAS. All rights reserved.</p>
        <p>Jl. Jenderal Sudirman No. 123, Banyumas, Jawa Tengah</p>
    </div>
</footer>

</body>
</html>
