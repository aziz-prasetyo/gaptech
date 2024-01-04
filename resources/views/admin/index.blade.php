<x-app-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <p class="text-black font-semibold text-3xl mb-2 dark:text-white">Users</p>
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
                            <input type="text" id="table-search"
                                class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for items">
                        </div>
                    </div>
                    <a href="{{ route('admin.create') }}"
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg focus:outline-none hover:bg-blue-500">Tambahkan
                        Baru</a>
                </div>

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Username
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Password
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                Laptop
                            </td>

                            <td class="px-6 py-4">
                                <a href="{{ 'editadmin' }}"
                                    class="mr-2 p-2 px-4 rounded-lg bg-blue-700 font-medium text-white hover:bg-blue-500">Edit</a>
                                <a href="#"
                                    class="font-medium p-2 px-4 rounded-lg bg-red-700 text-white dark:text-white hover:bg-red-500 delete-item">Delete</a>
                            </td>

                        </tr>
                    </tbody>
                </table>
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
                            container: 'dark:bg-gray-900 dark:text-white',
                            popup: 'dark:bg-gray-900 dark:text-white',
                            header: 'dark:text-white',
                            content: 'dark:text-white',
                            confirmButton: 'dark:bg-blue-600 dark:hover:bg-blue-700 dark:text-white',
                            cancelButton: 'dark:bg-red-600 dark:hover:bg-red-700 dark:text-white',
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Lakukan aksi penghapusan di sini
                            // Misalnya, Anda dapat mengarahkan ke URL penghapusan atau menjalankan permintaan AJAX penghapusan
                            // Jika penghapusan berhasil, Anda bisa menambahkan SweetAlert2 lainnya untuk memberi tahu pengguna
                            Swal.fire({
                                title: 'Terhapus!',
                                text: 'Item telah dihapus.',
                                icon: 'success',
                                customClass: {
                                    container: 'dark:bg-gray-900 dark:text-white',
                                    popup: 'dark:bg-gray-900 dark:text-white',
                                    header: 'dark:text-white',
                                    content: 'dark:text-white',
                                    confirmButton: 'dark:bg-blue-600 dark:hover:bg-blue-700 dark:text-white',
                                },
                            });
                        }
                    });
                }
            });
        });
    </script>

</x-app-layout>
