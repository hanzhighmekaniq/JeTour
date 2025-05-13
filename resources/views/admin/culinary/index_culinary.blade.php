<x-layout>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <div class="w-full p-4 sm:p-6 bg-gray-50 min-h-screen">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 sm:mb-6">Data Kuliner</h1>

        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 pb-4">
            <!-- Tombol Tambah Kuliner -->
            <div>
                <button
                    class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition">
                    + Tambah Kuliner
                </button>
            </div>

            <!-- Filter dan Search -->
            <div class="w-full sm:w-auto">
                <form class="flex flex-col sm:flex-row gap-2 items-stretch sm:items-center">
                    <select
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 w-full sm:w-auto">
                        <option value="">Semua Destinasi</option>
                        <option value="1">Kota A</option>
                        <option value="2">Kota B</option>
                        <option value="3">Kota C</option>
                    </select>
                    <input type="text" placeholder="Cari nama kuliner..."
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 w-full sm:w-auto">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition w-full sm:w-auto">Filter</button>
                </form>
            </div>
        </div>

        <!-- Tabel Dummy Kuliner -->
        <div class="overflow-x-auto bg-white rounded-lg shadow w-full">
            <table class="min-w-[800px] w-full text-left text-sm">
                <thead class="bg-blue-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 sm:px-6">#</th>
                        <th class="py-3 px-4 sm:px-6">Gambar</th>
                        <th class="py-3 px-4 sm:px-6">Nama Kuliner</th>
                        <th class="py-3 px-4 sm:px-6">Deskripsi</th>
                        <th class="py-3 px-4 sm:px-6">Lokasi</th>
                        <th class="py-3 px-4 sm:px-6">Jam Buka</th>
                        <th class="py-3 px-4 sm:px-6">Jam Tutup</th>
                        <th class="py-3 px-4 sm:px-6">Destinasi</th>
                        <th class="py-3 px-4 sm:px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @for ($i = 1; $i <= 5; $i++)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4 sm:px-6">{{ $i }}</td>
                            <td class="py-3 px-4 sm:px-6">
                                <img src="https://source.unsplash.com/100x70/?food&sig={{ $i }}"
                                    alt="Kuliner" class="rounded shadow w-20 h-14 object-cover">
                            </td>
                            <td class="py-3 px-4 sm:px-6">Kuliner Enak {{ $i }}</td>
                            <td class="py-3 px-4 sm:px-6">Ini adalah deskripsi singkat tentang kuliner enak
                                ke-{{ $i }}.</td>
                            <td class="py-3 px-4 sm:px-6">Jl. Contoh No. {{ $i }}, Kota Contoh</td>
                            <td class="py-3 px-4 sm:px-6">08:00</td>
                            <td class="py-3 px-4 sm:px-6">21:00</td>
                            <td class="py-3 px-4 sm:px-6">Destinasi {{ $i }}</td>
                            <td class="py-3 px-4 sm:px-6 text-center space-x-2">
                                <button
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs transition">Edit</button>
                                <button onclick="return confirm('Yakin ingin menghapus?')"
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs transition">Hapus</button>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>

            <!-- Dummy Pagination -->
            <div class="p-4 flex justify-end space-x-2 text-sm text-gray-600">
                <span class="px-3 py-1 border border-gray-300 rounded bg-white cursor-not-allowed">«</span>
                <span class="px-3 py-1 border border-blue-500 text-blue-600 rounded bg-blue-100">1</span>
                <span class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100 cursor-pointer">2</span>
                <span class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100 cursor-pointer">3</span>
                <span class="px-3 py-1 border border-gray-300 rounded bg-white cursor-pointer">»</span>
            </div>
        </div>
    </div>

</x-layout>
