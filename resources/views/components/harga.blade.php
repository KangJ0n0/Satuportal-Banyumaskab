<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infografis dan Harga Bahan Pokok</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100 p-6">
    <div class="flex flex-wrap md:flex-nowrap justify-center gap-6">
        <!-- Left Card: Infografis -->
        <section class="w-full md:w-1/2 flex flex-col items-center">
            <div class="bg-white shadow-md rounded-lg p-6 w-full">
                <h2 class="text-xl font-bold mb-2">INFOGRAFIS SATU DATA KABUPATEN BANYUMAS</h2>
                <div class="h-1 w-1/4 bg-blue-800 mb-4"></div>
                <p class="text-gray-700 mb-6">Berisikan Informasi terkait satu data di Kabupaten Banyumas (sumber : dimassatira.banyumaskab.go.id)</p>
                <div class="grid grid-cols-2 gap-6">
                    <a href="https://dimassatria.banyumaskab.go.id/gerbangdata/stdasar" class="flex flex-col items-center hover:scale-110">
                        <div>
                            <img src="storage/statistikdasar.png" alt="Data Statistik Dasar" class="mb-2">
                        </div>
                        <p class="text-center text-blue-800 font-bold">DATA STATISTIK DASAR</p>
                    </a>
                    <a href="#" class="flex flex-col items-center hover:scale-110">
                        <div>
                            <img src="storage/statistiksektoral.png" alt="Data Statistik Sektoral" class="mb-2">
                        </div>
                        <p class="text-center text-blue-800 font-bold">DATA STATISTIK SEKTORAL</p>
                    </a>
                    <a href="#" class="flex flex-col items-center hover:scale-110">
                        <div>
                            <img src="storage/spasial.png" alt="Data Spasial" class="mb-2">
                        </div>
                        <p class="text-center text-blue-800 font-bold">DATA SPASIAL</p>
                    </a>
                    <a href="#" class="flex flex-col items-center hover:scale-110">
                        <div>
                            <img src="storage/tematik.png" alt="Data Tematik" class="mb-2">
                        </div>
                        <p class="text-center text-blue-800 font-bold">DATA TEMATIK</p>
                    </a>
                    <a href="#" class="flex flex-col items-center hover:scale-110">
                        <div>
                            <img src="storage/realtime.png" alt="Data Realtime" class="mb-2">
                        </div>
                        <p class="text-center text-blue-800 font-bold">DATA REALTIME</p>
                    </a>
                    <a href="#" class="flex flex-col items-center hover:scale-110">
                        <div>
                            <img src="storage/prioritas.png" alt="Data Prioritas" class="mb-2">
                        </div>
                        <p class="text-center text-blue-800 font-bold">DATA PRIORITAS</p>
                    </a>
                    <a href="#" class="flex flex-col items-center hover:scale-110">
                        <div>
                            <img src="storage/pembangunan.png" alt="Perencanaan Pembangunan" class="mb-2">
                        </div>
                        <p class="text-center text-blue-800 font-bold">PERENCANAAN PEMBANGUNAN</p>
                    </a>
                    <a href="#" class="flex flex-col items-center hover:scale-110">
                        <div>
                            <img src="storage/metadata.png" alt="Metadata" class="mb-2">
                        </div>
                        <p class="text-center text-blue-800 font-bold">METADATA</p>
                    </a>
                </div>
            </div>
        </section>
        <!-- Right Card: Harga Bahan Pokok -->
        <section class="w-full md:w-1/2 flex flex-col items-center">
            <div class="bg-white shadow-md rounded-lg p-6 w-full">
                <h2 class="text-xl font-bold mb-2">HARGA BAHAN POKOK KABUPATEN BANYUMAS</h2>
                <div class="h-1 w-1/4 bg-blue-800 mb-4"></div>
                <p class="text-gray-700 mb-2">data tanggal 31 Juli 2024</p>
                <p class="text-gray-700 mb-6">Rataan Harga Bahan Pokok Seluruh Pasar di Kabupaten Banyumas (sumber : sigaokmas.banyumaskab.go.id)</p>
                <table class="min-w-full bg-white border border-gray-300">
                    <thead class="bg-gray-200">
                        <tr class="bg-gray-600 text-white">
                            <th class="py-2 px-4 border-b border-gray-300">Nama</th>
                            <th class="py-2 px-4 border-b border-gray-300">Harga Kemarin</th>
                            <th class="py-2 px-4 border-b border-gray-300">Harga Sekarang</th>
                            <th class="py-2 px-4 border-b border-gray-300">Perubahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Beras IR 64 Super</td>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Rp 14.050/Kg</td>
                            <td class="py-2 px-4 border-b border-gray-300"><span class="text-red-500">Rp 14.250/Kg</span></td>
                            <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-up text-red-500"></i></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Beras Pandan Wangi</td>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Rp 16.650/Kg</td>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Rp 16.500/Kg</td>
                            <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-down text-green-500"></i></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Beras Cap Maknyuss (Premium)</td>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Rp 15.556/Kg</td>
                            <td class="py-2 px-4 border-b border-gray-300"><span class="text-red-500">Rp 15.667/Kg</span></td>
                            <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-up text-red-500"></i></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Jeruk, Lokal</td>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Rp 19.112/Kg</td>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Rp 19.000/Kg</td>
                            <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-down text-green-500"></i></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Garam Yodium, Halus</td>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Rp 9.766/Kg</td>
                            <td class="py-2 px-4 border-b border-gray-300"><span class="text-red-500">Rp 9.857/Kg</span></td>
                            <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-up text-red-500"></i></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Udang Basah, Ukuran Sedang</td>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Rp 63.001/Kg</td>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Rp 62.857/Kg</td>
                            <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-down text-green-500"></i></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Pisang, Ambon</td>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Rp 17.785/Kg</td>
                            <td class="py-2 px-4 border-b border-gray-300"><span class="text-red-500">Rp 17.857/Kg</span></td>
                            <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-up text-red-500"></i></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Ikan Laut, Cakalang</td>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Rp 28.860/Kg</td>
                            <td class="py-2 px-4 border-b border-gray-300" style="color: #4C99AA;">Rp 28.600/Kg</td>
                            <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-down text-green-500"></i></td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-center mt-4">
                    <a href="https://sigaokmas.banyumaskab.go.id/">
                        <button class="text-white px-4 py-2 rounded" style="background-color: #4287A0;">Lihat Lebih Detail</button>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <br>
</body>
</html>
