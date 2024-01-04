<section class="bg-gray-100 dark:bg-gray-900" id="contact">
    <div class="max-w-screen-md px-4 py-8 mx-auto sm:py-16">
        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-center text-gray-900 dark:text-white">Pojok Curhat
        </h2>
        <p class="mb-8 font-light text-center text-gray-500 lg:mb-16 dark:text-gray-400 sm:text-xl">Bagikan perasaan, pengalaman, dan cerita hidup. Temukan dukungan, kurangi beban emosional, dan jadilah inspirasi bagi sesama. Mari bersama membangun komunitas yang saling mendukung dan memberikan kekuatan pada setiap langkah hidup. Selamat curhat dan temukan inspirasi di sini!</p>
        <form action="{{ route('kontak.store') }}" class="space-y-8" method='POST'>
            @csrf
            <div>
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 after:content-['*'] after:ml-0.5 after:text-red-500">Nomor
                    Ponsel</label>
                <input type="number" id="email" name="no_telp"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="0812********" required>
            </div>
            <div>
                <label for="subject"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 after:content-['*'] after:ml-0.5 after:text-red-500">Nama
                    Lengkap</label>
                <input type="text" id="subject" name="nama"
                    class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg shadow-sm bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="Diny Rahmawati" required>
            </div>
            <div class="sm:col-span-2">
                <label for="message"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 after:content-['*'] after:ml-0.5 after:text-red-500">Pesan</label>
                <textarea id="message" rows="6" name="pesan"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Tinggalkan pesan..." required></textarea>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kirim
                Pesan</button>
        </form>
    </div>
</section>
