<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-3xl lg:py-20">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambahkan Galeri</h2>
            <form id="article-form" action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-2 sm:grid-flex-2 sm:gap-6">
                    <div class="w-full">
                        <label for="tag" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                            Galeri</label>
                        <input type="file" name="foto_galeri" id="tag"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Galeri" required>
                    </div>
                    <div class="w-full">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                            Gambar</label>
                        <textarea id="message" rows="4" name="judul_foto"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your thoughts here..."></textarea>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('article-form').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        const form = e.target;

        // Use Laravel's built-in AJAX helper to submit the form
        axios.post(form.action, new FormData(form))
            .then(response => {
                // Handle the success response here
                showSweetAlert().then(() => {
                    // Redirect to the artikel.index route after SweetAlert "OK" click
                    window.location.href = "{{ route('galeri.index') }}";
                });
            })
            .catch(error => {
                // Handle the error response here
                console.error('Error:', error);
                // You can display an error message using SweetAlert here if needed
            });
    });

    // Function to show SweetAlert with dark theme
    function showSweetAlert() {
        return Swal.fire({
            title: 'Galeri Ditambahkan!',
            text: 'Galeri Anda telah berhasil ditambahkan.',
            icon: 'success',
            confirmButtonText: 'OK',
            background: 'white dark:black',
            customClass: {
                container: 'dark:text-white',
                popup: 'dark:bg-gray-900 dark:text-white',
                header: 'dark:text-white',
                content: 'dark:text-white',
                confirmButton: 'dark:bg-blue-600 dark:hover:bg-blue-700 dark:text-white',
                cancelButton: 'dark:bg-red-600 dark:hover:bg-red-700 dark:text-white',
            }
        });
    }
</script>
