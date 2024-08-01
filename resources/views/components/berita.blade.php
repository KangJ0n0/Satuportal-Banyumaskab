<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Utama</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .news-card img {
            transition: transform 0.3s ease;
        }

        .news-card:hover img {
            transform: scale(1.05);
        }

        .news-card p {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;
        }

        @media (max-width: 768px) {
            .news-card {
                min-width: calc(100vw - 2rem); /* Full width minus padding */
            }
        }

        @media (min-width: 769px) {
            .news-card {
                width: 20rem; /* Fixed width for larger screens */
            }
        }
    </style>
</head>

<body class="bg-gray-100">
<section id="berita">
    <div class="container mx-auto py-8 px-4">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">BERITA UTAMA</h1>
            <p class="text-gray-600">Update kabar seputar Kabupaten Banyumas</p>
        </div>
        <div class="flex flex-col md:flex-row justify-between items-center mt-6">
            <button id="prevBtn" class="hidden md:inline-block text-white rounded-full p-2 md:mr-4" style="background-color: #4B97A9;">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div id="newsContainer" class="flex overflow-x-auto space-x-4 py-4 md:py-0">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden news-card flex-shrink-0">
                    <img class="w-full h-48 object-cover" src="storage/kadivpas.jpeg" alt="Gambar Berita 1">
                    <div class="p-4">
                        <div class="text-sm text-gray-500 mb-1">
                            <i class="fas fa-calendar-alt mr-1"></i> Kamis, 27 Juni 2024
                        </div>
                        <h2 class="font-semibold text-lg text-gray-800 mb-2">
                            KADIVPAS: PENGUATAN TUSI PEMASYARAKATAN DI RUT...
                        </h2>
                        <p class="text-gray-600">
                            BANYUMAS - Kepala Divisi Pemasyarakatan (Kadivpas) Kantor Wilayah Kementerian Hukum dan HAM Jawa Tengah...
                        </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden news-card flex-shrink-0">
                    <img class="w-full h-48 object-cover" src="storage/nyantrik.jpg" alt="Gambar Berita 2">
                    <div class="p-4">
                        <div class="text-sm text-gray-500 mb-1">
                            <i class="fas fa-calendar-alt mr-1"></i> Kamis, 27 Juni 2024
                        </div>
                        <h2 class="font-semibold text-lg text-gray-800 mb-2">
                            NYANTRIK, JLF PERTEMUKAN KOLABORASI SENIM...
                        </h2>
                        <p class="text-gray-600">
                            BANYUMAS - Dua penari lintas generasi berkolaborasi memadukan seni tradisi lengger dan ebeg dalam kegiatan...
                        </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden news-card flex-shrink-0">
                    <img class="w-full h-48 object-cover" src="storage/lingkungan.jpeg" alt="Gambar Berita 3">
                    <div class="p-4">
                        <div class="text-sm text-gray-500 mb-1">
                            <i class="fas fa-calendar-alt mr-1"></i> Kamis, 27 Juni 2024
                        </div>
                        <h2 class="font-semibold text-lg text-gray-800 mb-2">
                            HARI LINGKUNGAN HIDUP: PJ GUBERNUR JATENG...
                        </h2>
                        <p class="text-gray-600">
                            BANYUMAS - Pemerintah Provinsi Jawa Tengah melalui Dinas Lingkungan Hidup dan Kehutanan, menggelar kegiatan...
                        </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden news-card flex-shrink-0">
                    <img class="w-full h-48 object-cover" src="storage/10.000.jpeg" alt="Gambar Berita 4">
                    <div class="p-4">
                        <div class="text-sm text-gray-500 mb-1">
                            <i class="fas fa-calendar-alt mr-1"></i> Kamis, 27 Juni 2024
                        </div>
                        <h2 class="font-semibold text-lg text-gray-800 mb-2">
                            SAH "BANYUMAS 10.000 LENGGER BICARA" MAS...
                        </h2>
                        <p class="text-gray-600">
                            BANYUMAS - Pergelaran "Banyumas 10.000 Lengger Bicara" yang digelar di Gelanggang Olahraga (GOR) Satria...
                        </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden news-card flex-shrink-0">
                    <img class="w-full h-48 object-cover" src="storage/jokowi.jpeg" alt="Gambar Berita 4">
                    <div class="p-4">
                        <div class="text-sm text-gray-500 mb-1">
                            <i class="fas fa-calendar-alt mr-1"></i> Kamis, 27 Juni 2024
                        </div>
                        <h2 class="font-semibold text-lg text-gray-800 mb-2">
                            PRESIDEN JOKOWI TINJAU KEGIATAN TANAM PADI...
                        </h2>
                        <p class="text-gray-600">
                            BANYUMAS - Pergelaran "Banyumas 10.000 Lengger Bicara" yang digelar di Gelanggang Olahraga (GOR) Satria...
                        </p>
                    </div>
                </div>
            </div>
            <button id="nextBtn" class="hidden md:inline-block text-white  rounded-full p-2 md:ml-4" style="background-color: #4B97A9;">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="text-center mt-6">
            <button class="bg-teal-500 text-white px-4 py-2 rounded-full hover:bg-teal-600 transition-colors duration-300">
                Lihat Selengkapnya Berita OPD, Kecamatan, Desa, Pengumuman dll
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const newsContainer = document.getElementById('newsContainer');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            prevBtn.addEventListener('click', () => {
                newsContainer.scrollBy({
                    left: -300,
                    behavior: 'smooth'
                });
            });

            nextBtn.addEventListener('click', () => {
                newsContainer.scrollBy({
                    left: 300,
                    behavior: 'smooth'
                });
            });

            function autoScroll() {
                const maxScrollLeft = newsContainer.scrollWidth - newsContainer.clientWidth;
                if (newsContainer.scrollLeft >= maxScrollLeft) {
                    newsContainer.scrollTo({
                        left: 0,
                        behavior: 'smooth'
                    });
                } else {
                    newsContainer.scrollBy({
                        left: 300,
                        behavior: 'smooth'
                    });
                }
            }

            setInterval(autoScroll, 2000); 
        });
    </script>
    <br>
</section>
</body>

</html>
