<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aduan Masyarakat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .card-image {
            height: 200px; /* Adjust height as needed */
            overflow: hidden;
            position: relative;
            cursor: pointer;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .card-image:hover img {
            opacity: 0.5;
        }

        .card-image:hover .overlay {
            opacity: 1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .overlay i {
            color: white;
            font-size: 2rem;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            align-items: center;
            justify-content: center;
            z-index: 50;
        }

        .modal img {
            max-width: 90%;
            max-height: 80%;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">
    <div class="max-w-6xl mx-auto px-2 lg:px-8 py-4">
        <!-- Header Section -->
        <div class="flex items-center space-x-4 mb-8">
            <h1 class="text-2xl font-bold relative" style="color: #022B55;">
                <span class="">ADUAN</span> MASYARAKAT
                <span class="absolute bottom-0 left-0 transform translate-y-2 h-1 w-1/2" style="background-color: #022B55;"></span>
            </h1>
            <span class="flex-grow border-t border-gray-400"></span>
        </div>
        <p class="text-gray-600 mb-4">Pantau Aduan Masyarakat. (sumber : lapakaduan.banyumaskab.go.id)</p>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md relative p-2 md:p-4">
                <div class="relative card-image" onclick="showModal('storage/jalan.jpg')">
                    <img src="storage/jalan.jpg" alt="Jl. Gerboe - damaged road with overgrown vegetation" class="rounded-t-lg mb-4">
                    <div class="overlay">
                        <i class="fas fa-eye"></i>
                    </div>
                    <span class="absolute top-2 left-2 bg-orange-500 text-white text-xs px-3 py-1 rounded-full">Dalam Proses</span>
                </div>
                <p class="text-green-900 mb-2">+62xxxx</p>
                <p class="text-gray-500 text-sm mb-2" style="font-weight: 200;"><i class="far fa-calendar-alt"></i> 2024-07-11 15:36:46</p>
                <p class="text-gray-500">Jl alternatif desa panusupan cilongok ke taman sari jlgerboe sepanjang jalan 500 meter cor rusak....</p>
            </div>

            <div class="bg-white rounded-lg shadow-md relative p-2 md:p-4">
                <div class="relative card-image" onclick="showModal('storage/jalan2.jpeg')">
                    <img src="storage/jalan2.jpeg" alt="Jl. Gerboe - damaged road with overgrown vegetation" class="rounded-t-lg mb-4">
                    <div class="overlay">
                        <i class="fas fa-eye"></i>
                    </div>
                    <span class="absolute top-2 left-2 bg-orange-500 text-white text-xs px-3 py-1 rounded-full">Dalam Proses</span>
                </div>
                <p class="text-green-900 mb-2">+62xxxx</p>
                <p class="text-gray-500 text-sm mb-2" style="font-weight: 200;"><i class="far fa-calendar-alt"></i> 2024-07-11 15:36:46</p>
                <p class="text-gray-500">Jalan utama Karanglewas kidul bolong bolong sejauh 500m, mohon segera diperoses karena menganggu </p>
            </div>

            <div class="bg-white rounded-lg shadow-md relative p-2 md:p-4">
                <div class="relative card-image" onclick="showModal('storage/jalan.jpeg')">
                    <img src="storage/jalan3.jpeg" alt="Jl. Gerboe - damaged road with overgrown vegetation" class="rounded-t-lg mb-4">
                    <div class="overlay">
                        <i class="fas fa-eye"></i>
                    </div>
                    <span class="absolute top-2 left-2 bg-orange-500 text-white text-xs px-3 py-1 rounded-full">Dalam Proses</span>
                </div>
                <p class="text-green-900 mb-2">+62xxxx</p>
                <p class="text-gray-500 text-sm mb-2" style="font-weight: 200;"><i class="far fa-calendar-alt"></i> 2024-07-11 15:36:46</p>
                <p class="text-gray-500">Astaga bolong bolong begini bisa dilaporin atau minta perbaiki tidak ya, ga nyaman banget diliat dan kadang buat kesandung?</p>
            </div>
            <!-- Repeat other cards similarly -->
        </div>

        <!-- Button Section -->
        <div class="flex justify-end mt-8">
            <a href ="https://lapakaduan.banyumaskab.go.id/">
            <button class="text-white py-2 px-4 rounded-md hover:bg-blue-700 hover:scale-110 transition-transform duration-300" style="background-color: #4C99AA; ">
                Selengkapnya <i class="fas fa-arrow-right"></i>
            </button>
        </a>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <img id="modal-image" src="" alt="Full Size Image">
        <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-3xl">&times;</button>
    </div>

    <script>
        function showModal(src) {
            document.getElementById('modal-image').src = src;
            document.getElementById('modal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>
</body>

</html>
