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
<x-navbottom></x-navbottom>

<!-- Navbar -->
<x-navbar></x-navbar>


<!-- Hero Section -->
<x-hero></x-hero>

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
<x-profil></x-profil>

<!-- Aduan masyarakat -->
<x-aduanmasyarakat></x-aduanmasyarakat>

<!-- Produk Banyumas Section -->
<x-produkbanyumas></x-produkbanyumas>

<!-- Instagram Feeds Section -->
<x-instagram></x-instagram>


</body>
<x-footer></x-footer>
</html>
