<x-layout>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


    <div class="w-full p-6 bg-gray-50 min-h-screen">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Data Wisata</h1>

        <!-- Tombol Tambah Wisata -->
        <div class="mb-4">
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                + Tambah Wisata
            </button>
        </div>

        <!-- Tabel Wisata -->
        <div class="overflow-x-auto bg-white rounded-lg shadow w-full">
            <table class="w-full text-left text-sm">
                <thead class="bg-blue-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-6">#</th>
                        <th class="py-3 px-6">Nama Wisata</th>
                        <th class="py-3 px-6">Kategori</th>
                        <th class="py-3 px-6">Lokasi</th>
                        <th class="py-3 px-6">Harga Tiket</th>
                        <th class="py-3 px-6">Status</th>
                        <th class="py-3 px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-6">1</td>
                        <td class="py-3 px-6">Pantai Parangtritis</td>
                        <td class="py-3 px-6">Pantai</td>
                        <td class="py-3 px-6">Yogyakarta</td>
                        <td class="py-3 px-6">Rp 10.000</td>
                        <td class="py-3 px-6">
                            <span class="inline-block px-2 py-1 text-xs text-white bg-green-500 rounded">Aktif</span>
                        </td>
                        <td class="py-3 px-6 text-center space-x-2">
                            <button
                                class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
                            <button
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-6">2</td>
                        <td class="py-3 px-6">Gunung Bromo</td>
                        <td class="py-3 px-6">Gunung</td>
                        <td class="py-3 px-6">Jawa Timur</td>
                        <td class="py-3 px-6">Rp 35.000</td>
                        <td class="py-3 px-6">
                            <span class="inline-block px-2 py-1 text-xs text-white bg-green-500 rounded">Aktif</span>
                        </td>
                        <td class="py-3 px-6 text-center space-x-2">
                            <button
                                class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
                            <button
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-layout>
