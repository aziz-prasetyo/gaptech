<x-landing-page-layout :artikel=$artikel :galeri=$galeri>
    <main class="pt-8 pb-16 mt-[72px] antialiased bg-white lg:pt-16 lg:pb-24 dark:bg-gray-900">
        <div class="flex justify-between max-w-screen-xl px-4 mx-auto ">
            <article
                class="w-full max-w-2xl mx-auto format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <!-- <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="w-16 h-16 mr-4 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="#" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">Jese Leos</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">Graphic Designer, educator & CEO
                                    Flowbite</p>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                        datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time></p>
                            </div>
                        </div>
                    </address> -->
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{$artikel->judul}}</h1>
                </header>
                <figure><img src="{{URL('public/Image/'.$artikel->foto_artikel)}}"
                        alt="">
                    <figcaption>Foto Ilustrasi</figcaption>
                </figure>
                <p class="lead">{{$artikel->isi_artikel}}</p>
            </article>
        </div>
    </main>
</x-landing-page-layout>
