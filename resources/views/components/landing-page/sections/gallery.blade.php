<section class="bg-white dark:bg-gray-800" id="gallery">
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16">
        <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">
            <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Galeri Berharga</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Kenangan Indah sepaputnya diabadikan supaya dapat dikenang Bersama, nikmati momen-momen tak terlupakan dari kegiatan seru komunitas lansia kami. Jelajahi galeri foto yang penuh tawa, kebersamaan, dan kebahagiaan. Setiap gambar merefleksikan semangat komunitas dan kekompakan di antara kita. Bersama-sama mari rayakan keindahan perjalanan ini!</p>
        </div>
        <div class="relative grid w-full gap-8" data-carousel="slide" data-carousel-interval="7000">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                @foreach ($galeri as $g)
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <x-cached-image imagePath="{{ 'public/Image/' . $g->foto_galeri }}" alt="{{ $g->judul_foto }}"
                            class="absolute block h-auto max-w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" />

                    </div>
                @endforeach
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-20 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/20 dark:bg-gray-800/30 group-hover:bg-gray-800/30 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-gray-800/40 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-20 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/20 dark:bg-gray-800/30 group-hover:bg-gray-800/30 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-gray-800/40 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
</section>
