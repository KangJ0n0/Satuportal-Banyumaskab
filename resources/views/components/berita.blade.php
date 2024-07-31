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
    </style>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto py-8 px-4">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">BERITA UTAMA</h1>
            <p class="text-gray-600">Update kabar seputar Kabupaten Banyumas</p>
        </div>
        <div class="flex flex-col md:flex-row justify-between items-center mt-6">
            <button class="hidden md:inline-block text-white bg-blue-500 rounded-full p-2 md:mr-4">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="flex overflow-x-auto space-x-4 py-4 md:py-0">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden w-72 md:w-80 flex-shrink-0 news-card">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/320x180" alt="Gambar Berita 1">
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
                <div class="bg-white shadow-lg rounded-lg overflow-hidden w-72 md:w-80 flex-shrink-0 news-card">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/320x180" alt="Gambar Berita 2">
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
                <div class="bg-white shadow-lg rounded-lg overflow-hidden w-72 md:w-80 flex-shrink-0 news-card">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/320x180" alt="Gambar Berita 3">
                    <div class="p-4">
                        <div class="text-sm text-gray-500 mb-1">
                            <i class="fas fa-calendar-alt mr-1"></i> Kamis, 27 Juni 2024
                        </div>
                        <h2 class="font-semibold text-lg text-gray-800 mb-2">
                            HARI LINGKUNGAN HIDUP: PJ GUBERNUR JATE...
                        </h2>
                        <p class="text-gray-600">
                            BANYUMAS - Pemerintah Provinsi Jawa Tengah melalui Dinas Lingkungan Hidup dan Kehutanan, menggelar kegiatan...
                        </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden w-72 md:w-80 flex-shrink-0 news-card">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/320x180" alt="Gambar Berita 4">
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
            </div>
            <button class="hidden md:inline-block text-white bg-blue-500 rounded-full p-2 md:ml-4">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="text-center mt-6">
            <button class="bg-teal-500 text-white px-4 py-2 rounded-full">
                Lihat Selengkapnya Berita OPD, Kecamatan, Desa, Pengumuman dll
            </button>
        </div>
    </div>

</body>

</html>
