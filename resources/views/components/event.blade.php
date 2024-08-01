<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section Event</title>
    <style>
        .fade {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .fade-active {
            opacity: 1;
        }

        .text-event{
      font-size: 21px;
      font-family: "Nunito", sans-serif;
  font-optical-sizing: auto;
  font-weight: 600;
  font-style: normal;
  color: rgb(84, 84, 84);
        }

        
        .text-card{
      font-size: 14px;
      font-family: "Nunito", sans-serif;
  font-optical-sizing: auto;
  font-weight: 600;
  font-style: normal;

        }

        .wrapper {
            width: 80%;
            /* Perbesar lebar wrapper sesuai kebutuhan */
        }

        /* Dot indicators */
        .dots {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .dot {
            width: 10px;
            height: 10px;
            margin: 0 5px;
            background-color: #bbb;
            border-radius: 50%;
            transition: background-color 0.3s;
        }

        .dot.active {
            background-color: #4287A0;
        }
    </style>
</head>

<body>
    <section class="py-20 bg-cover bg-center"
    style="background-image: url('{{ asset('storage/eventbg.png') }}');">
    <div class="max-w-6xl py-12 mx-auto">
        <h3 class="flex items-center w-full">
            <span class="flex-grow h-1 bg-gray-200 rounded"></span>
            <span class="mx-3  font-medium text-event">EVENT KABUPATEN BANYUMAS</span>
            <span class="flex-grow h-1 bg-gray-200 rounded"></span>
        </h3>
        <!-- Slider -->
        <div class="flex items-center justify-between px-4 m-auto mt-8">
            <button id="prevBtn" class="px-4 py-2 bg-[#4B97A9] rounded-full relative z-10">
                <i class="text-white fas fa-arrow-left"></i>
            </button>

            <div class="wrapper overflow-hidden w-full sm:w-3/4 md:w-2/3 lg:w-1/2 xl:w-[556px] m-auto relative shadow-md border-2 border-[#4B97A9] rounded-md">
                <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                    <!-- card for content slider -->
                    <div class="flex-shrink-0 w-full p-4 sm:p-8 overflow-hidden bg-white shadow-md card">
                        <div class="flex flex-col justify-between gap-4 md:flex-row lg:flex-row">
                            <div class="w-full md:w-1/2 lg:w-1/2">
                                <img class="object-cover w-full rounded-sm h-80" src="storage/event1.png"
                                    alt="event poster featuring various artists">
                            </div>
                            <div class="flex flex-col justify-between w-full md:w-1/2 lg:w-1/2">
                                <div class="flex flex-col gap-2 mb-4">
                                    <h2 class="text-xl font-semibold text-[#4287A0] truncate">Pemilihan Kakang Mbekayu 2024
                                    </h2>
                                    <p class="text-gray-600">Kamis, 01 Agustus 2024</p>
                                    <p class="overflow-hidden text-justify text-gray-600 text-ellipsis event-description">
                                        #RoadToPKMB2024



Dinas Pemuda, Olahraga, Kebudayaan dan Pariwisata Kabupaten Banyumas bekerjasama dengan Paguyuban Kakang Mbekayu Duta Wisata Banyumas (PAKEMAS)...




                                    </p>
                             
                                </div>
                                <div class="flex justify-between gap-2">
                                    <button class="px-4 py-2 text-white bg-[#4287A0] rounded hover:bg-teal-600">Detail Event</button>
                                    <button class="px-4 py-2 text-gray-700 bg-gray-300 rounded hover:bg-gray-400">Jadwal Event Lainnya</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Additional dummy cards for slider -->
                    <div class="flex-shrink-0 w-full p-4 sm:p-8 overflow-hidden bg-white shadow-md card">
                        <div class="flex flex-col justify-between gap-4 md:flex-row lg:flex-row">
                            <div class="w-full md:w-1/2 lg:w-1/2">
                                <img class="object-cover w-full rounded-sm h-80" src="storage/event2.jpeg"
                                    alt="event poster featuring various artists">
                            </div>
                            <div class="flex flex-col justify-between w-full md:w-1/2 lg:w-1/2">
                                <div class="flex flex-col gap-2 mb-4">
                                    <h2 class="text-xl font-semibold text-[#4287A0] truncate">Dolan Madhang Tour 2024
                                    </h2>
                                    <p class="text-gray-600">Sabtu, 03 Agustus 2024</p>
                                    <p class="overflow-hidden text-justify text-gray-600 text-ellipsis event-description">
                                        “DOLAN MADHANG TOUR”  merupakan sebuah konsep perjalanan yang unik dan menarik, tidak hanya fokus pada penawaran wisata kuliner di kawasan Baturraden...
                                    </p>
                       
                                </div>
                                <div class="flex justify-between gap-2">
                                    <button class="px-4 py-2 text-white bg-[#4287A0] rounded hover:bg-teal-600">Detail Event</button>
                                    <button class="px-4 py-2 text-gray-700 bg-gray-300 rounded hover:bg-gray-400">Jadwal Event Lainnya</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Repeat the above block for each additional card -->
                    <div class="flex-shrink-0 w-full p-4 sm:p-8 overflow-hidden bg-white shadow-md card">
                        <div class="flex flex-col justify-between gap-4 md:flex-row lg:flex-row">
                            <div class="w-full md:w-1/2 lg:w-1/2">
                                <img class="object-cover w-full rounded-sm h-80" src="storage/event3.jpeg"
                                    alt="event poster featuring various artists">
                            </div>
                            <div class="flex flex-col justify-between w-full md:w-1/2 lg:w-1/2">
                                <div class="flex flex-col gap-2 mb-4">
                                    <h2 class="text-xl font-semibold text-[#4287A0] truncate">Baturraden Trail Run</h2>
                                    <p class="text-gray-600">Minggu, 04 Agustus 2024</p>
                                    <p class="overflow-hidden text-justify text-gray-600 text-ellipsis event-description">
                                        Baturraden Trail Run merupakan salah satu bagian dari event Baturraden Festival 2024 diselenggarakan oleh DINPORABUDPAR Kabupaten Banyumas....
                                    </p>
                         
                                </div>
                                <div class="flex justify-between gap-2">
                                    <button class="px-4 py-2 text-white bg-[#4287A0] rounded hover:bg-teal-600">Detail Event</button>
                                    <button class="px-4 py-2 text-gray-700 bg-gray-300 rounded hover:bg-gray-400">Jadwal Event Lainnya</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <button id="nextBtn" class="px-4 py-2 bg-[#4B97A9] rounded-full relative z-10">
                <i class="text-white fas fa-arrow-right"></i>
            </button>
        </div>

        <!-- Dot indicators -->
        <div class="mt-10 dots" id="dotsContainer"></div>
    </div>
    <script>
        const slider = document.getElementById('slider');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dotsContainer = document.getElementById('dotsContainer');
        const slides = Array.from(slider.children);
        const totalSlides = slides.length;
        let currentSlide = 0;

        function createDots() {
            for (let i = 0; i < totalSlides; i++) {
                const dot = document.createElement('div');
                dot.classList.add('dot');
                dot.dataset.index = i;
                dot.addEventListener('click', () => {
                    clearInterval(autoSlide);
                    currentSlide = i;
                    updateSlideVisibility();
                    updateSliderPosition();
                    startAutoSlide();
                });
                dotsContainer.appendChild(dot);
            }
        }

        function updateDots() {
            const dots = dotsContainer.children;
            Array.from(dots).forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
        }

        function updateSlideVisibility() {
            slides.forEach((slide, index) => {
                if (index === currentSlide) {
                    slide.classList.add('fade-active');
                    slide.classList.remove('fade');
                } else {
                    slide.classList.add('fade');
                    slide.classList.remove('fade-active');
                }
            });
            updateDots();
        }

        function slideToPrev() {
            currentSlide = (currentSlide > 0) ? currentSlide - 1 : totalSlides - 1;
            updateSlideVisibility();
            updateSliderPosition();
        }

        function slideToNext() {
            currentSlide = (currentSlide < totalSlides - 1) ? currentSlide + 1 : 0;
            updateSlideVisibility();
            updateSliderPosition();
        }

        function updateSliderPosition() {
            const slideWidth = slides[0].clientWidth;
            const slideBorderWidth = parseFloat(getComputedStyle(slides[0]).borderWidth) + 1;
            const slideGap = 20;

            const totalSlideWidth = slideWidth + (2 * slideBorderWidth);

            const wrapperWidth = document.querySelector('.wrapper').offsetWidth;
            const centerOffset = (wrapperWidth - slideWidth) / 2;

            const offset = -(currentSlide * totalSlideWidth) + centerOffset;

            slider.style.transform = `translateX(${offset}px)`;
        }

        function startAutoSlide() {
            autoSlide = setInterval(() => {
                slideToNext();
            }, 3000); // Change the slide every 3 seconds
        }

        function truncateDescriptions(selector, maxSentences) {
            const descriptionElements = document.querySelectorAll(selector);
            descriptionElements.forEach(element => {
                const descriptionText = element.textContent;
                const sentences = descriptionText.split('.').filter(sentence => sentence.trim() !== '');
                const truncatedDescription = sentences.slice(0, maxSentences).join('. ') + '.';
                element.textContent = truncatedDescription;
            });
        }

        truncateDescriptions('.event-description', 2);

        prevBtn.addEventListener('click', () => {
            clearInterval(autoSlide);
            slideToPrev();
            startAutoSlide();
        });

        nextBtn.addEventListener('click', () => {
            clearInterval(autoSlide);
            slideToNext();
            startAutoSlide();
        });

        let autoSlide;
        createDots();
        updateSlideVisibility();
        startAutoSlide();
    </script>
</section>

</body>

</html>
