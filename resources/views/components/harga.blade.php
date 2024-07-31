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

    <div class="flex flex-wrap justify-center gap-6">
        <!-- Left Card: Infografis -->
        <div class="bg-white shadow-md rounded-lg p-6 w-full md:w-1/2">
            <h2 class="text-xl font-bold mb-2">INFOGRAFIS SATU DATA KABUPATEN BANYUMAS</h2>
            <div class="h-1 w-1/4 bg-blue-800 mb-4"></div>
            <p class="text-gray-700 mb-6">Berisikan Informasi terkait satu data di Kabupaten Banyumas (sumber : dimassatira.banyumaskab.go.id)</p>
            
            <div class="grid grid-cols-2 gap-6">
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/100x100" alt="Data Statistik Dasar" class="mb-2">
                    <p class="text-center text-blue-800 font-bold">DATA STATISTIK DASAR</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/100x100" alt="Data Statistik Sektoral" class="mb-2">
                    <p class="text-center text-blue-800 font-bold">DATA STATISTIK SEKTORAL</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/100x100" alt="Data Spasial" class="mb-2">
                    <p class="text-center text-blue-800 font-bold">DATA SPASIAL</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/100x100" alt="Data Tematik" class="mb-2">
                    <p class="text-center text-blue-800 font-bold">DATA TEMATIK</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/100x100" alt="Data Realtime" class="mb-2">
                    <p class="text-center text-blue-800 font-bold">DATA REALTIME</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/100x100" alt="Data Prioritas" class="mb-2">
                    <p class="text-center text-blue-800 font-bold">DATA PRIORITAS</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/100x100" alt="Perencanaan Pembangunan" class="mb-2">
                    <p class="text-center text-blue-800 font-bold">PERENCANAAN PEMBANGUNAN</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://placehold.co/100x100" alt="Metadata" class="mb-2">
                    <p class="text-center text-blue-800 font-bold">METADATA</p>
                </div>
            </div>
        </div>

        <!-- Right Card: Harga Bahan Pokok -->
        <div class="bg-white shadow-md rounded-lg p-6 w-full md:w-1/2">
            <h2 class="text-xl font-bold mb-2">HARGA BAHAN POKOK KABUPATEN BANYUMAS</h2>
            <div class="h-1 w-1/5 bg-blue-800 mb-4"></div>
            <p class="text-gray-700 mb-2">data tanggal 31 Juli 2024</p>
            <p class="text-gray-700 mb-6">Rataan Harga Bahan Pokok Seluruh Pasar di Kabupaten Banyumas (sumber : sigaokmas.banyumaskab.go.id)</p>
            
            <table class="min-w-full bg-white border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-300">Nama</th>
                        <th class="py-2 px-4 border-b border-gray-300">Harga Kemarin</th>
                        <th class="py-2 px-4 border-b border-gray-300">Harga Sekarang</th>
                        <th class="py-2 px-4 border-b border-gray-300">Perubahan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Beras IR 64 Super</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 0/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 14.250/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-up text-red-500"></i></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Beras Pandan Wangi</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 0/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 16.500/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-down text-green-500"></i></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Beras Cap Maknyuss (Premium)</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 0/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 15.667/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-up text-red-500"></i></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Jeruk, Lokal</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 0/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 19.000/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-down text-green-500"></i></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Garam Yodium, Halus</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 0/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 9.857/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-up text-red-500"></i></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Udang Basah, Ukuran Sedang</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 0/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 62.857/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-down text-green-500"></i></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Pisang, Ambon</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 0/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 17.857/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-up text-red-500"></i></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Ikan Laut, Cakalang</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 0/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300">Rp 28.600/Kg</td>
                        <td class="py-2 px-4 border-b border-gray-300"><i class="fas fa-arrow-down text-green-500"></i></td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-center mt-4">
                <button class="bg-blue-800 text-white px-4 py-2 rounded">Lihat Lebih Detail</button>
            </div>
        </div>
    </div>

</body>
</html>
