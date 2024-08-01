<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Layanan Publik</title>
    <style>
        .badge {
            position: absolute;
            top: -15px;
            right: 10px;
            background-color: #ffffff;
            color: #4287A0;
            border-radius: 10%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-container {
            position: relative;
        }
    </style>

</head>

<body>
    <section id ="layananpublik">
    <section class="container py-12 mx-auto">
        <div>
            <h2 class="mb-6 text-2xl font-bold text-center">INFORMASI PELAYANAN PUBLIK</h2>
            <p class="text-center">Jelajahi aplikasi dan pelayanan di Kabupaten Banyumas</p>
            <div class="grid grid-cols-1 gap-6 p-5 mt-10 mb-12 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div
                    class="px-6 py-4 border-2 border-[#4C99AA] text-left hover:bg-slate-200 bg-white rounded-lg shadow-md transform hover:scale-105 transition duration-300 cursor-pointer">
                    <i class="mb-2 text-[#4287A0] fas fa-user-friends fa-3x"></i>
                    <p class="font-semibold"><strong>LAYANAN</strong><br>Umum</p>
                    {{-- buatkan divider --}}
                    <div class="border-t-2 border-[#4C99AA] my-2"></div>
                    {{-- buatkan list --}}
                    <ul class="pl-6 mt-4">

                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Daftar Perusahaan dan Ketenagakerjaan
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Alat Tera
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Kartu Penderes
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Kesejahteraan Sosial
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Peminjaman Aset Sekretariat Daerah
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Pengadaan
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Perlindungan Anak dan Perempuan
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Perpustakaan
                            </a>
                        </li>
                    </ul>
                </div>
                <div
                    class="px-6 py-4 border-2 border-[#4C99AA] text-left hover:bg-slate-200 bg-white rounded-lg shadow-md transform hover:scale-105 transition duration-300 cursor-pointer">
                    <i class="mb-2 text-[#4287A0] fas fa-leaf fa-3x"></i>
                    <p class="font-semibold"><strong>LAYANAN</strong><br>Lingkungan</p>
                    {{-- buatkan divider --}}
                    <div class="border-t-2 border-[#4C99AA] my-2"></div>
                    {{-- buatkan list --}}
                    <ul class="pl-6 mt-4">
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Analisis Mengenai Dampak Lingkungan (AMDAL)
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Informasi Jalan dan Jembatan
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Laboratorium Lingkungan Hidup Banyumas
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Penerangan Lampu Jalan Umum
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Pengelolaan Sampah
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Sedot WC dan Mobil Toilet
                            </a>
                        </li>
                    </ul>
                </div>
                <div
                    class="px-6 py-4 border-2 border-[#4C99AA] text-left hover:bg-slate-200 bg-white rounded-lg shadow-md transform hover:scale-105 transition duration-300 cursor-pointer">
                    <i class="mb-2 text-[#4287A0] fas fa-heartbeat fa-3x"></i>
                    <p class="font-semibold"><strong>LAYANAN</strong><br>Kesehatan</p>
                    {{-- buatkan divider --}}
                    <div class="border-t-2 border-[#4C99AA] my-2"></div>
                    {{-- buatkan list --}}
                    <ul class="pl-6 mt-4">
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Klinik Kesehatan Paru Masyarakat Purwokerto
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan JKN-KIS
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Puskesmas
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Rumah Sakit Khusus Mata Purwokerto
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Rumah Sakit Umum Daerah Ajibarang
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Rumah Sakit Umum Daerah Banyumas
                            </a>
                        </li>
                    </ul>
                </div>
                <div
                    class="px-6 py-4 border-2 border-[#4C99AA] text-left hover:bg-slate-200 bg-white rounded-lg shadow-md transform hover:scale-105 transition duration-300 cursor-pointer">
                    <i class="mb-2 text-[#4287A0] fas fa-building fa-3x"></i>
                    <p class="font-semibold"><strong>INFORMASI</strong><br>Pemerintahan</p>
                    {{-- buatkan divider --}}
                    <div class="border-t-2 border-[#4C99AA] my-2"></div>
                    {{-- buatkan list --}}
                    <ul class="pl-6 mt-4">
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Lapor ASN
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Aduan DPRD
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Dokumen Hukum
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Kearsipan
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Kepuasan Masyarakat
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Monitoring dan Evaluasi Kinerja Pemkab Banyumas
                            </a>
                        </li>
                    </ul>
                </div>
                <div
                    class="px-6 py-4 border-2 border-[#4C99AA] text-left hover:bg-slate-200 bg-white rounded-lg shadow-md transform hover:scale-105 transition duration-300 cursor-pointer">
                    <i class="mb-2 text-[#4287A0] fas fa-file-alt fa-3x"></i>
                    <p class="font-semibold"><strong>INFORMASI</strong><br>Publik</p>
                    {{-- buatkan divider --}}
                    <div class="border-t-2 border-[#4C99AA] my-2"></div>

                    <ul class="pl-6 mt-4">
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Daftar Website Desa
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Daftar Website OPD
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Informasi dan Dokumentasi
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Menara Telekomunikasi
                            </a>
                        </li>
                    </ul>
                </div>
                <div
                    class="px-6 py-4 border-2 border-[#4C99AA] text-left hover:bg-slate-200 bg-white rounded-lg shadow-md transform hover:scale-105 transition duration-300 cursor-pointer">
                    <i class="mb-2 text-[#4287A0] fas fa-calculator fa-3x"></i>
                    <p class="font-semibold"><strong>LAYANAN</strong><br>Pelaporan Pajak Daerah</p>
                    {{-- divider --}}
                    <div class="border-t-2 border-[#4C99AA] my-2"></div>
                    {{-- list --}}

                    <ul class="pl-6 mt-4">
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Pajak Bea Perolehan Hak atas Tanah dan
                                Bangunan (BPHTB)
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Pajak Bumi dan Bangunan (PBB)
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Pajak Daerah Non PBB & BPHTB
                            </a>
                        </li>
                    </ul>
                </div>
                <div
                    class="px-6 py-4 border-2 border-[#4C99AA] text-left hover:bg-slate-200 bg-white rounded-lg shadow-md transform hover:scale-105 transition duration-300 cursor-pointer">
                    <i class="mb-2 text-[#4287A0] fas fa-seedling fa-3x"></i>
                    <p class="font-semibold"><strong>LAYANAN</strong><br>Peternakan dan Pertanian</p>
                    {{-- divider --}}
                    <div class="border-t-2 border-[#4C99AA] my-2"></div>
                    {{-- list --}}
                    <ul class="pl-6 mt-4">
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Perikanan
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Peternakan dan Keswan
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Registrasi Pangan Segar Asal Tumbuhan Produksi Dalam
                                Negeri Usaha Kecil (PSAT PD UK)
                            </a>
                        </li>
                    </ul>
                </div>
                <div
                    class="px-6 py-4 border-2 border-[#4C99AA] text-left hover:bg-slate-200 bg-white rounded-lg shadow-md transform hover:scale-105 transition duration-300 cursor-pointer">
                    <i class="mb-2 text-[#4287A0] fas fa-bus fa-3x"></i>
                    <p class="font-semibold"><strong>LAYANAN</strong><br>Transportasi</p>
                    {{-- divider --}}
                    <div class="border-t-2 border-[#4C99AA] my-2"></div>
                    {{-- list --}}
                    <ul class="pl-6 mt-4">
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Fasilitas Kelengkapan Jalan
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan CCTV Area Traffic Control System Banyumas
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Uji KIR
                            </a>
                        </li>
                    </ul>
                </div>
                <div
                    class="px-6 py-4 border-2 border-[#4C99AA] text-left hover:bg-slate-200 bg-white rounded-lg shadow-md transform hover:scale-105 transition duration-300 cursor-pointer">
                    <i class="mb-2 text-[#4287A0] fas fa-graduation-cap fa-3x"></i>
                    <p class="font-semibold"><strong>LAYANAN</strong><br>Kependudukan dan Pendidikan</p>
                    {{-- divider --}}
                    <div class="border-t-2
                        border-[#4C99AA] my-2">
                    </div>
                    <ul class="pl-6 mt-4">
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Layanan Online Kependudukan
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Penerimaan Peserta Didik Baru SMP
                            </a>
                        </li>
                    </ul>
                </div>
                <div
                    class="px-6 py-4 border-2 border-[#4C99AA] text-left hover:bg-slate-200 bg-white rounded-lg shadow-md transform hover:scale-105 transition duration-300 cursor-pointer">
                    <i class="mb-2 text-[#4287A0] fas fa-umbrella-beach fa-3x"></i>
                    <p class="font-semibold"><strong>LAYANAN</strong><br>Wisata dan Budaya</p>
                    {{-- divider --}}
                    <div class="border-t-2 border-[#4C99AA] my-2"></div>
                    {{-- list --}}

                    <ul class="pl-6 mt-4">
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Pemesanan Tiket Wisata
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Wisata Sejarah
                            </a>
                        </li>
                    </ul>
                </div>
                <div
                    class="px-6 py-4 border-2 border-[#4C99AA] text-left hover:bg-slate-200 bg-white rounded-lg shadow-md transform hover:scale-105 transition duration-300 cursor-pointer">
                    <i class="mb-2 text-[#fd2f2f] fas fa-exclamation-triangle fa-3x"></i>
                    <p class="font-semibold"><strong>LAYANAN</strong><br>Gawat Darurat</p>
                    {{-- divider --}}
                    <div class="border-t-2 border-[#4C99AA] my-2"></div>
                    {{-- list --}}

                    <ul class="pl-6 mt-4">
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Ambulance
                            </a>
                        </li>
                        <li>
                            <a href="#" class="transition duration-300 hover:text-blue-500 hover:scale-110">
                                <i class="fas fa-angle-right"></i> Damkar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <h2 class="mb-5 font-semibold text-center text-md">LAYANAN STACKHOLDER SMARTCITY KAB. BANYUMAS</h2>
        <div class="grid w-3/4 grid-cols-1 gap-10 p-5 m-auto sm:grid-cols-2 md:grid-cols-4">
            <div class="px-4 py-2 text-left bg-[#4C99AA] rounded-lg shadow-lg card-container hover:bg-[#4287A0] transform hover:scale-105 transition duration-300 cursor-pointer"
                style="background-image: url('{{ asset('storage/1 Pojok Kampus.png') }}'); background-size: cover;">
                <span class="badge"><i class="fas fa-book"></i></span>
                <p class="text-white"><strong class="text-[2rem] ">Pojok</strong><br>Kampus</p>
            </div>
            <div class="px-4 py-2 text-left bg-[#4C99AA] rounded-lg shadow-lg card-container hover:bg-[#4287A0] transform hover:scale-105 transition duration-300 cursor-pointer"
                style="background-image: url('{{ asset('storage/2 Layanan BUMN.png') }}'); background-size: cover;">
                <span class="badge"><i class="fas fa-book"></i></span>
                <p class="text-white"><strong class="text-[2rem] ">Layanan</strong><br>BUMN dan BUMD</p>
            </div>
            <div class="px-4 py-2 text-left bg-[#4C99AA] rounded-lg shadow-lg card-container hover:bg-[#4287A0] transform hover:scale-105 transition duration-300 cursor-pointer"
                style="background-image: url('{{ asset('storage/3 Pojok Pelatihan.png') }}'); background-size: cover;">
                <span class="badge"><i class="fas fa-book"></i></span>
                <p class="text-white"><strong class="text-[2rem] ">Pojok</strong><br>Pelatihan Masyarakat</p>
            </div>
            <div class="px-4 py-2 text-left bg-[#4C99AA] rounded-lg shadow-lg card-container hover:bg-[#4287A0] transform hover:scale-105 transition duration-300 cursor-pointer"
                style="background-image: url('{{ asset('storage/4 Pojok Kreatifitas.png') }}'); background-size: cover;">
                <span class="badge"><i class="fas fa-book"></i></span>
                <p class="text-white"><strong class="text-[2rem] ">Pojok</strong><br>Kreatifitas Masyarakat</p>
            </div>
        </div>
        <div
            class="tab-section bg-gray-100 p-5 rounded-lg backdrop-filter backdrop-blur-lg bg-opacity-40 w-6/7 min-h-[400px] border-2 border-[#4C99AA] m-auto mt-10">
            <div class="flex flex-wrap gap-2">
                <button
                    class="flex-grow p-4 font-bold text-black inactive-button rounded-lg hover:bg-[#4C99AA] hover:bg-opacity-40 w-80 bg-custom"
                    data-tab-target="#tab1">Pojok Kampus</button>
                <button
                    class="flex-grow p-4 font-bold text-black inactive-button rounded-lg hover:bg-[#4C99AA] hover:bg-opacity-40 w-80 bg-custom"
                    data-tab-target="#tab2">Layanan BUMN dan BUMD</button>
                <button
                    class="flex-grow p-4 font-bold text-black inactive-button rounded-lg hover:bg-[#4C99AA] hover:bg-opacity-40 w-80 bg-custom"
                    data-tab-target="#tab3">Pojok Pelatihan Masyarakat</button>
                <button
                    class="flex-grow p-4 font-bold text-black inactive-button rounded-lg hover:bg-[#4C99AA] hover:bg-opacity-40 w-80 bg-custom"
                    data-tab-target="#tab4">Pojok Kreatifitas Masyarakat</button>
            </div>
            <div class="mt-4 max-h-[800px]">
                <div id="tab1" class="h-full text-black tab-content">
                    <h4 class="mb-4 text-2xl font-bold mt-9">Pojok Kampus</h4>
                    <div
                        class="w-full p-5 bg-white rounded-lg shadow-md border-2 border-[#4C99AA] h-full overflow-y-auto max-h-[600px] flex flex-col gap-3">
                        <div class="flex flex-col gap-4 p-4 bg-white rounded-md shadow-md md:flex-row">
                            <img src="https://unsoed.ac.id/sites/default/files/banner/Logo-UNSOED.png"
                                alt="Universitas Jenderal Soedirman" class="w-full h-auto md:w-1/5">
                            <div class="grid content">
                                <div class="font-semibold title text-[1.5rem] md:text-[2rem]">Universitas Jenderal
                                    Soedirman</div>
                                <p>Sesuai Dengan Amanat Yang Tersurat Dalam Pembukaan Uud 1945 Dan Desakan Masyarakat Banyumas Akan Kebutuhan Pendidikan Tinggi, Para Pemimpin Formal Dan Informal Banyumas Menggagas Perlunya Didirikan Pe...</p>
                                <div>
                                    <a href="#"
                                        class="btn bg-[#4C99AA] px-5 py-2 rounded-md text-white hover:bg-[#4287A0]">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4 p-4 bg-white rounded-md shadow-md md:flex-row">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Logo_Institut_Teknologi_Telkom_Purwokerto_Versi_Vertikal.png"
                                alt="ITTP" class="w-full h-auto md:w-1/5">
                            <div class="grid content">
                                <div class="font-semibold title text-[1.5rem] md:text-[2rem]">Institut Teknologi Telkom
                                    Purwokerto</div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero culpa assumenda
                                    itaque fuga totam porro, officiis, ratione quia inventore minus, dignissimos ducimus
                                    iusto eveniet tempora repellat a facilis neque unde?</p>
                                <div>
                                    <a href="#"
                                        class="btn bg-[#4C99AA] px-5 py-2 rounded-md text-white hover:bg-[#4287A0]">Lihat selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4 p-4 bg-white rounded-md shadow-md md:flex-row">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzbVU-m7hZ2pl1lpRWrUQZ5gGa-NIrjzHVWQ&s"
                                alt="UMP" class="w-full h-auto md:w-1/5">
                            <div class="grid content">
                                <div class="font-semibold title text-[1.5rem] md:text-[2rem]">Universitas Muhamadiyah
                                    Purwokerto</div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero culpa assumenda
                                    itaque fuga totam porro, officiis, ratione quia inventore minus, dignissimos ducimus
                                    iusto eveniet tempora repellat a facilis neque unde?</p>
                                <div>
                                    <a href="#"
                                        class="btn bg-[#4C99AA] px-5 py-2 rounded-md text-white hover:bg-[#4287A0]">Lihat selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab2" class="hidden h-full text-black tab-content">
                    <h4 class="mb-4 text-2xl font-bold mt-9">Layanan BUMN dan BUMD</h4>
                    <div
                        class="w-full p-5 bg-white rounded-lg shadow-md border-2 border-[#4C99AA] h-full overflow-y-auto max-h-[600px] flex flex-col gap-3">
                        <!-- Repeat the same structure for content here -->
                        <div class="flex flex-col gap-4 p-4 bg-white rounded-md shadow-md md:flex-row">
                            <img src="https://tse3.mm.bing.net/th?id=OIP.rh1bzEQab2hymAHsoc9FIgHaCW&pid=Api&P=0&h=220"
                                alt="BPR BKK PWT" class="w-full h-auto md:w-1/5">
                            <div class="grid content">
                                <div class="font-semibold title text-[1.5rem] md:text-[2rem]">PT BPR BKK
                                    Purwokerto</div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero culpa assumenda
                                    itaque fuga totam porro, officiis, ratione quia inventore minus, dignissimos ducimus
                                    iusto eveniet tempora repellat a facilis neque unde?</p>
                                <div>
                                    <br>
                                    <a href="#"
                                        class="btn bg-[#4C99AA] px-5 py-2 rounded-md text-white hover:bg-[#4287A0]">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 p-4 bg-white rounded-md shadow-md md:flex-row">
                            <img src="https://www.banyumaskab.go.id:8443/assets/icons_bsc/menu_layanan/78c47768a5730ad2c8b57315c39794dc.jpeg"
                                alt="PAM" class="w-full h-auto md:w-1/5">
                            <div class="grid content">
                                <div class="font-semibold title text-[1.5rem] md:text-[2rem]">
                                    Perusahaan Daerah Air Minum Kabupaten Banyumasr</div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero culpa assumenda
                                    itaque fuga totam porro, officiis, ratione quia inventore minus, dignissimos ducimus
                                    iusto eveniet tempora repellat a facilis neque unde?</p>
                                <div>
                                    <a href="#"
                                        class="btn bg-[#4C99AA] px-5 py-2 rounded-md text-white hover:bg-[#4287A0]">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 p-4 bg-white rounded-md shadow-md md:flex-row">
                            <img src="https://2.bp.blogspot.com/-Jc9ngLYw91M/WeglZOLafNI/AAAAAAAAEMg/BVjQWNrrcgYRZn1ql6G6lDO6u68reJhKwCLcBGAs/s1600/bank%2Bjateng.png"
                                alt="PAM" class="w-full h-auto md:w-1/5">
                            <div class="grid content">
                                <div class="font-semibold title text-[1.5rem] md:text-[2rem]">
                                    Bank JATENG</div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero culpa assumenda
                                    itaque fuga totam porro, officiis, ratione quia inventore minus, dignissimos ducimus
                                    iusto eveniet tempora repellat a facilis neque unde?</p>
                                <div>
                                    <a href="#"
                                        class="btn bg-[#4C99AA] px-5 py-2 rounded-md text-white hover:bg-[#4287A0]">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 p-4 bg-white rounded-md shadow-md md:flex-row">
                            <img src="https://4.bp.blogspot.com/-tPooVDDwTRs/W-PCHmjEFkI/AAAAAAAAPso/KN9kG4j8LtUxN4dERa8trpXcPxT-DJB4wCLcBGAs/s1600/Baznas.png"
                                alt="PAM" class="w-full h-auto md:w-1/5">
                            <div class="grid content">
                                <div class="font-semibold title text-[1.5rem] md:text-[2rem]">
                                    BAZNAS KABUPATEN BANYUMAS</div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero culpa assumenda
                                    itaque fuga totam porro, officiis, ratione quia inventore minus, dignissimos ducimus
                                    iusto eveniet tempora repellat a facilis neque unde?</p>
                                <div>
                                    <a href="#"
                                        class="btn bg-[#4C99AA] px-5 py-2 rounded-md text-white hover:bg-[#4287A0]">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab3" class="hidden h-full text-black tab-content">
                    <h4 class="mb-4 text-2xl font-bold mt-9">Pojok Pelatihan Masyarakat</h4>
                    <div
                        class="w-full p-5 bg-white rounded-lg shadow-md border-2 border-[#4C99AA] h-full overflow-y-auto h-[600px] flex flex-col gap-3">
                        <!-- Repeat the same structure for content here -->
                        <div class="flex flex-col gap-4 p-4 bg-white rounded-md shadow-md md:flex-row">
                            <img src="https://www.banyumaskab.go.id:8443/assets/icons_bsc/menu_layanan/b59a87a108a37a714b08ef43819bc01d.jpg"
                                alt="PAM" class="w-full h-auto md:w-1/5">
                            <div class="grid content">
                                <div class="font-semibold title text-[1.5rem] md:text-[2rem]">
                                    Karang Taruna Kelurahan Rejasari</div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero culpa assumenda
                                    itaque fuga totam porro, officiis, ratione quia inventore minus, dignissimos ducimus
                                    iusto eveniet tempora repellat a facilis neque unde?</p>
                                <div>
                                    <a href="#"
                                        class="btn bg-[#4C99AA] px-5 py-2 rounded-md text-white hover:bg-[#4287A0]">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab4" class="hidden h-full text-black tab-content">
                    <h4 class="mb-4 text-2xl font-bold mt-9">Pojok Kreatifitas Masyarakat</h4>
                    <div
                        class="w-full p-5 bg-white rounded-lg shadow-md border-2 border-[#4C99AA] h-full overflow-y-auto max-h-[600px] flex flex-col gap-3">
                        <!-- Repeat the same structure for content here -->
                        <div class="flex flex-col gap-4 p-4 bg-white rounded-md shadow-md md:flex-row">
                            <img src="https://www.banyumaskab.go.id:8443/assets/icons_bsc/menu_layanan/53dd4d41607c7a5ed5c358970094a012.jpeg"
                                alt="PAM" class="w-full h-auto md:w-1/5">
                            <div class="grid content">
                                <div class="font-semibold title text-[1.5rem] md:text-[2rem]">
                                    PRAMUKA KRAWATIR CABANG BANYUMAS</div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero culpa assumenda
                                    itaque fuga totam porro, officiis, ratione quia inventore minus, dignissimos ducimus
                                    iusto eveniet tempora repellat a facilis neque unde?</p>
                                <div>
                                    <a href="#"
                                        class="btn bg-[#4C99AA] px-5 py-2 rounded-md text-white hover:bg-[#4287A0]">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 p-4 bg-white rounded-md shadow-md md:flex-row">
                            <img src="https://www.banyumaskab.go.id:8443/assets/icons_bsc/menu_layanan/40903a28e07d9c87546b5072ee34b4df.png"
                                alt="PAM" class="w-full h-auto md:w-1/5">
                            <div class="grid content">
                                <div class="font-semibold title text-[1.5rem] md:text-[2rem]">
                                    CATAT MAK</div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero culpa assumenda
                                    itaque fuga totam porro, officiis, ratione quia inventore minus, dignissimos ducimus
                                    iusto eveniet tempora repellat a facilis neque unde?</p>
                                <div>
                                    <a href="#"
                                        class="btn bg-[#4C99AA] px-5 py-2 rounded-md text-white hover:bg-[#4287A0]">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                const tabs = document.querySelectorAll('[data-tab-target]');
                const activeClass = 'bg-[#4C99AA]';
                const activeTextColorClass = 'text-white';
                const inactiveTextColorClass = 'text-black';

                // Select first tab by default
                tabs[0].classList.add(activeClass, activeTextColorClass);
                tabs[0].classList.remove(inactiveTextColorClass);
                document.querySelector('#tab1').classList.remove('hidden');

                tabs.forEach(tab => {
                    tab.addEventListener('click', () => {
                        const targetContent = document.querySelector(tab.dataset.tabTarget);

                        document.querySelectorAll('.tab-content').forEach(content => content.classList.add(
                            'hidden'));
                        targetContent.classList.remove('hidden');

                        // Remove active class and set text color for all tabs
                        tabs.forEach(tab => {
                            tab.classList.remove(activeClass, activeTextColorClass);
                            tab.classList.add(inactiveTextColorClass);
                        });

                        // Add active class and set text color to clicked tab
                        tab.classList.add(activeClass, activeTextColorClass);
                        tab.classList.remove(inactiveTextColorClass);
                    });
                });
            </script>


    </section>
</section>

</body>

</html>
