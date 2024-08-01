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

        .swiper-button-next,
        .swiper-button-prev {
            background-color: white;
            border-radius: 30%;
            width: 44px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            color: #4287A0;
            /* Arrow color */
            font-size: 20px;
        }

        .swiper-button-next {
            right: 5px;
            /* Adjust the position */
        }

        .swiper-button-prev {
            left: 10px;
            /* Adjust the position */
        }
    </style>
</head>

<body class="bg-gray-100">

    <section class="w-full p-6 mx-auto"
        style="background: url('{{ asset('storage/bg produk banyumas.png') }}'); background-size: cover;">
        <div class="w-4/5 p-4 m-auto mb-8 overflow-hidden text-white bg-transparent rounded-lg">
            <div class="flex items-center justify-between pb-2 border-b border-white">
                <h2 class="text-xl font-bold">PRODUK BANYUMAS</h2>
                <a href="#" class="px-4 py-2 text-sm text-teal-600 bg-white rounded">Produk lainnya</a>
            </div>
            <p class="text-sm text-gray-200">Lihat produk Usaha Kecil Menengah di Kabupaten Banyumas, sumber (sistem
                informasi desa)</p>
            <div class="relative mt-4">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Card 1 -->
                        <div class="overflow-hidden bg-white rounded-lg shadow-md swiper-slide">
                            <img src="storage/produksumur.jpeg" alt="Produk Unggulan" class="w-full">
                            <div class="p-4">
                                <h3 class="font-semibold text-gray-600 text-md">Jasa Pembuatan Sumur</h3>
                                <p class="text-sm text-teal-600">Potensi dan Produk Desa</p>
                                <p class="text-bawah" style="color: black;">Pemerintah Desa Kecila</p>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="overflow-hidden bg-white rounded-lg shadow-md swiper-slide">
                            <img src="storage/produk.jpeg" alt="Wisata Budaya" class="w-full">
                            <div class="p-4">
                                <h3 class="font-semibold text-teal-600 text-md">Produsen Gembus Marjoko</h3>
                                <p class="text-sm text-gray-600">Potensi dan Produk Desa</p>
                                <p class="text-bawah" style="color: black;">Pemerintah Desa Prembun</p>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="overflow-hidden bg-white rounded-lg shadow-md swiper-slide">
                            <img src="storage/wisata.jpg" alt="daun" class="w-full">
                            <div class="p-4">
                                <h3 class="font-semibold text-teal-600 text-md">Wisata dan Budaya</h3>
                                <p class="text-sm text-gray-600">Potensi dan Produk Desa</p>
                                <p class="text-bawah" style="color: black;">Pemerintah Desa Sudagaran</p>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="overflow-hidden bg-white rounded-lg shadow-md swiper-slide">
                            <img src="storage/tempe.jpeg" alt="Wisata Kuliner" class="w-full">
                            <div class="p-4">
                                <h3 class="font-semibold text-teal-600 text-md">Keripik Tempe</h3>
                                <p class="text-sm text-gray-600">Potensi dan Produk Desa</p>
                                <p class="text-bawah" style="color: black;">Pemerintah Desa Kecila</p>
                            </div>
                        </div>
                        <!-- Card 5 -->
                        <div class="overflow-hidden bg-white rounded-lg shadow-md swiper-slide">
                            <img src="storage/brambang.jpeg" alt="Wisata Kuliner" class="w-full">
                            <div class="p-4">
                                <h3 class="font-semibold text-teal-600 text-md">Brambang Goreng Tantene</h3>
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
