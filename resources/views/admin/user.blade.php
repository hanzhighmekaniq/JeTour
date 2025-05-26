<x-layout>

    <div class="w-full p-4 sm:p-6 bg-gray-50 min-h-screen">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 sm:mb-6">Data Pengguna</h1>
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 pb-4">
            <div>
               
            </div>
            <div class="w-full sm:w-auto">
                <!-- Filter dan Search -->
                <form method="GET" action="{{ route('datauser.index') }}"
                    class="flex flex-col sm:flex-row gap-2 items-stretch sm:items-center">
                    <input type="text" name="search" id="search" value="{{ request('search') }}"
                        placeholder="Cari nama pengguna..."
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 w-full sm:w-auto">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition w-full sm:w-auto"><i class="fa-solid fa-filter"></i></button>
                </form>
            </div>
        </div>

        <!-- Tabel Wisata -->
        <div class="overflow-x-auto bg-white rounded-lg shadow w-full">
            <table class="min-w-[600px] w-full text-left text-sm">
                <thead class="bg-blue-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 sm:px-6">No</th>
                        <th class="py-3 px-4 sm:px-6">Nama Pengguna</th>
                        <th class="py-3 px-4 sm:px-6">Email</th>
                        <th class="py-3 px-4 sm:px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4 sm:px-6"></td>
                            <td class="py-3 px-4 sm:px-6"></td>
                            <td class="py-3 px-4 sm:px-6"></td>
                            <td class="py-3 px-4 sm:px-6">
                                <span
                                    class="inline-block px-2 py-1 text-xs text-white bg-green-500 rounded">Aktif</span>
                            </td>
                            <td class="py-3 px-4 sm:px-6 text-center space-x-2">
                                <a href=""
                                    class="inline-block mb-1 sm:mb-0">
                                    <button
                                        class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs transition">Edit</button>
                                </a>
                                <form action=""
                                    method="POST" class="inline-block">
                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs transition">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8" class="text-center py-4">Data  belum tersedia.</td>
                        </tr>
                </tbody>
            </table>
            <!-- Pagination -->
            <div class="py-4 border">
            </div>
        </div>

    </div>


</x-layout>
