<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-3xl lg:py-20">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambahkan User</h2>
            <form id="article-form" action="#" method="POST">
                <div class="grid gap-2 sm:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Username" required="">
                    </div>
                    <div class="w-full">
                        <label for="brand"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="text" name="brand" id="brand"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Password" required="">
                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Submit
                </button>
            </form>
        </div>
    </section>
</x-app-layout>

<!-- Tambahkan SweetAlert Library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Fungsi untuk menampilkan SweetAlert dengan tema gelap
    function showSweetAlert() {
        Swal.fire({
            title: 'User Ditambahkan!',
            text: 'User Anda telah berhasil ditambahkan.',
            icon: 'success',
            confirmButtonText: 'OK',
            background: 'white dark:black', // Ganti latar belakang dengan warna gelap
            customClass: {
                container: 'dark:bg-gray-900 dark:text-white',
                popup: 'dark:bg-gray-900 dark:text-white',
                header: 'dark:text-white',
                content: 'dark:text-white',
                confirmButton: 'dark:bg-blue-600 dark:hover:bg-blue-700 dark:text-white',
                cancelButton: 'dark:bg-red-600 dark:hover:bg-red-700 dark:text-white',
            }
        });
    }

    // Tangkap form submit event
    document.getElementById('article-form').addEventListener('submit', function(e) {
        e.preventDefault(); // Mencegah pengiriman form bawaan

        // Di sini, Anda dapat menambahkan kode untuk mengirim data form ke server jika diperlukan.

        // Tampilkan SweetAlert dengan tema gelap setelah data berhasil dikirim
        showSweetAlert();
    });
</script>
