<x-app-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <p class="text-black font-semibold text-3xl mb-2 dark:text-white">Galeri</p>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="p-4 bg-white dark:bg-gray-900 relative flex items-center justify-between">
                    <div class="flex items-center">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative mt-1">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <form action="{{ route('galeri.search') }}" method="POST">
                                @csrf
                                <input name="cari" type="text" id="table-search"
                                class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for items">
                            </form>
                        </div>
                    </div>
                    <a href="{{ route('galeri.create') }}"
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg focus:outline-none hover:bg-blue-500">Tambahkan
                        Baru</a>
                </div>

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            {{-- <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th> --}}
                            <th scope="col" class="px-6 py-4 text-center font-bold text-gray-400  ">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-4 text-center font-bold text-gray-400  ">
                                Gambar
                            </th>
                            <th scope="col" class="px-6 py-4 text-center font-bold text-gray-400  ">
                                Deskripsi
                            </th>

                            <th scope="col" class="px-6 py-4 text-center font-bold text-gray-400  ">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galeri as $g)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                {{-- <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td> --}}
                                <th scope="row"
                                    class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $g->id }}
                                </th>
                                <td
                                    class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{ url('public/Image/' . $g->foto_galeri) }}"
                                        class="w-20 h-12 object-contain mx-auto">
                                </td>
                                <td
                                    class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $g->judul_foto }}
                                </td>

                                <td class="px-6 py-4 space-x-2 text-center">
                                    <a href="{{ route('galeri.edit', $g->id) }}"
                                        class="p-2 px-4 rounded-lg bg-blue-500 text-white hover:bg-blue-600">Edit</a>
                                    <form method="POST" action="{{ route('galeri.destroy', $g->id) }}"
                                        class="mt-2.5 inline-block">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="p-2 px-4 rounded-lg bg-red-500 text-white hover:bg-red-600 delete-item">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="px-6 py-2">
                    {{ $galeri->links() }}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menggunakan event delegation untuk menangani semua tombol "Delete"
            document.body.addEventListener('click', (e) => {
                if (e.target.classList.contains('delete-item')) {
                    e.preventDefault();

                    const form = e.target.closest('form');
                    const id = form.id.split('-')[1];

                    // Menampilkan konfirmasi SweetAlert2 dalam mode gelap
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: 'Anda tidak akan dapat mengembalikan tindakan ini!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!',
                        customClass: {
                            container: 'dark:text-white',
                            popup: 'dark:bg-gray-900 dark:text-white',
                            header: 'dark:text-white',
                            content: 'dark:text-white',
                            confirmButton: 'dark:bg-blue-600 dark:hover:bg-blue-700 dark:text-white',
                            cancelButton: 'dark:bg-red-600 dark:hover:bg-red-700 dark:text-white',
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: 'Terhapus!',
                                text: 'Item telah dihapus.',
                                icon: 'success',
                                customClass: {
                                    container: 'dark:text-white',
                                    popup: 'dark:bg-gray-900 dark:text-white',
                                    header: 'dark:text-white',
                                    content: 'dark:text-white',
                                    confirmButton: 'dark:bg-blue-600 dark:hover:bg-blue-700 dark:text-white',
                                },
                            });
                            // Set the _method field to DELETE
                            const methodInput = document.createElement('input');
                            methodInput.type = 'hidden';
                            methodInput.name = '_method';
                            methodInput.value = 'DELETE';
                            form.appendChild(methodInput);

                            // Submit the form using POST method
                            form.method = 'POST';
                            form.submit();
                        }
                    });
                }
            });
        });
    </script>


</x-app-layout>
