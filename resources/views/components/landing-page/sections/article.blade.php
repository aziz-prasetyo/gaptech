<section class="bg-gray-100 dark:bg-gray-900" id="article">
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16">
        <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">
            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl dark:text-white">Artikel
                Populer
            </h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Selamat datang di halaman "Artikel & Berita" Dahlia Senja! Temukan informasi terkini seputar kesehatan, gaya hidup, dan kegiatan komunitas kami. Dapatkan tips bermanfaat, wawasan inspiratif, dan berita terbaru untuk menjadikan masa tua Anda lebih bermakna. Tetap terhubung dengan kami untuk up-to-date mengenai kehidupan lansia yang dinamis!</p>
        </div>
        <div class="grid gap-8 md:grid-cols-1 xl:grid-cols-2" id="articleContainer">
            @foreach($artikel as $a)
            <div
                class="relative items-center overflow-hidden rounded-lg shadow bg-gray-50 sm:flex dark:bg-gray-800 dark:border-gray-700">
                <div class="sm:relative absolute w-full h-full sm:w-[280px] sm:h-[280px] flex-shrink-0">
                    <div class="absolute inset-0">
                        <x-cached-image imagePath="{{('public/Image/'.$a->foto_artikel)}}" alt="Sampul Artikel 1"
                            class="object-cover w-full h-full" />
                    </div>
                </div>
                <article class="relative p-5 sm:bg-white sm:dark:bg-gray-800">
                    <div class="flex items-center justify-between mb-5 text-gray-500">
                        <span
                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <!-- <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                </path>
                            </svg> -->
                            {{$a -> tag_jenis_artikel}}
                        </span>
                        <span class="text-sm">{{$a -> created_at ->diffForHumans()}}</span>
                    </div>
                    <div id="tooltip-article-1" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        {{$a -> judul}}
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <h2 data-tooltip-target="tooltip-article-1"
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-primary-800 dark:hover:text-primary-700 line-clamp-1">
                        <a href="{{route('artikel.show', $a->id)}}">{{$a -> judul}}</a>
                    </h2>
                    <p class="mb-5 font-light text-justify text-gray-500 dark:text-gray-400 line-clamp-4">
                       {{$a -> isi_artikel}}</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <x-cached-image imagePath="img/placeholder_avatar.png" alt="Avatar Penulis 1"
                                class="rounded-full w-7 h-7" />
                            <span class="font-medium dark:text-white">
                                Diny Rahmawati
                            </span>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
