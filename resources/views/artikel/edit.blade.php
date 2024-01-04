<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-3xl lg:py-20">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Artikel</h2>
            <form action="{{ route('artikel.update', $artikel->id) }}" enctype="multipart/form-data" method="POST"
                id="article-form">
                @csrf
                @method('PUT')
                <div class="grid gap-2 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                            Artikel</label>
                        <input type="text" name="judul" id="name" value="{{ $artikel->judul }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Judul Artikel" required="">
                    </div>
                    <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi
                            Artikel</label>
                        <textarea type="text" name="isi_artikel" id="brand"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Isi Artikel" required="">{{ $artikel->isi_artikel }}</textarea>
                    </div>
                    <div class="w-full">
                        <label for="tag" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tag
                            Jenis Artikel</label>
                        <input type="text" name="tag" id="tag" value="{{ $artikel->tag_jenis_artikel }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Tag Jenis Artikel" required="">
                    </div>
                    <div class="w-full">
                        <label for="tag" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                            Artikel</label>
                        <input type="file" name="foto_artikel" id="tag"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Tag Jenis Artikel">
                    </div>
                    <img src="{{ url('public/Image/' . $artikel->foto_artikel) }}" />
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
                    window.location.href = "{{ route('artikel.index') }}";
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
            title: 'Artikel Diperbarui!',
            text: 'Artikel Anda telah berhasil diperbarui.',
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
