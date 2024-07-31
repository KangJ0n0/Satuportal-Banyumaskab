<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Banyumas Carousel</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .swiper-button-next,
        .swiper-button-prev {
            color: #2c7a7b;
        }

        .swiper-container {
            padding: 1rem;
        }

        .text-bawah {
            font-size: 12px;
            font-weight: 200;
        }
    </style>
</head>

<body class="bg-gray-100">

<section class="container mx-auto p-6">
    <div class="mb-8 bg-teal-600 text-white rounded-lg p-4">
        <div class="flex justify-between items-center border-b border-white pb-2">
            <h2 class="text-xl font-bold">PRODUK BANYUMAS</h2>
            <a href="#" class="text-sm text-teal-600 bg-white px-4 py-2 rounded">Selengkapnya</a>
        </div>
        <p class="text-sm text-gray-200">Lihat produk Usaha Kecil Menengah di Kabupaten Banyumas, sumber (sistem informasi desa)</p>
        <div class="relative mt-4">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Card 1 -->
                    <div class="swiper-slide bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="storage/produksumur.jpeg" alt="Produk Unggulan" class="w-full">
                        <div class="p-4">
                            <h3 class="text-md font-semibold text-gray-600">Jasa Pembuatan Sumur</h3>
                            <p class="text-sm text-teal-600">Potensi dan Produk Desa</p>
                            <p class="text-bawah" style="color: black;">Pemerintah Desa Kecila</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="swiper-slide bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="storage/produk.jpeg" alt="Wisata Budaya" class="w-full">
                        <div class="p-4">
                            <h3 class="text-md font-semibold text-teal-600">Produsen Gembus Marjoko</h3>
                            <p class="text-sm text-gray-600">Potensi dan Produk Desa</p>
                            <p class="text-bawah" style="color: black;">Pemerintah Desa Prembun</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="swiper-slide bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="storage/wisata.jpg" alt="daun" class="w-full">
                        <div class="p-4">
                            <h3 class="text-md font-semibold text-teal-600">Wisata dan Budaya</h3>
                            <p class="text-sm text-gray-600">Potensi dan Produk Desa</p>
                            <p class="text-bawah" style="color: black;">Pemerintah Desa Sudagaran</p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="swiper-slide bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="storage/tempe.jpeg" alt="Wisata Kuliner" class="w-full">
                        <div class="p-4">
                            <h3 class="text-md font-semibold text-teal-600">Keripik Tempe</h3>
                            <p class="text-sm text-gray-600">Potensi dan Produk Desa</p>
                            <p class="text-bawah" style="color: black;">Pemerintah Desa Kecila</p>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="swiper-slide bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="storage/brambang.jpeg" alt="Wisata Kuliner" class="w-full">
                        <div class="p-4">
                            <h3 class="text-md font-semibold text-teal-600">Brambang Goreng Tantene</h3>
                            <p class="text-sm text-gray-600">Potensi dan Produk Desa</p>
                            <p class="text-bawah" style="color: black;">Pemerintah Desa Sudagaran</p>
                        </div>
                    </div>
                </div>
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1,
            spaceBetween: 10,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            },
        });
    });
</script>

</body>
</html>
