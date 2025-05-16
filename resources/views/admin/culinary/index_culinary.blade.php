<x-layout>



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
                        <th class="py-3 px-4 sm:px-6">No</th>
                        <th class="py-3 px-4 sm:px-6">Gambar</th>
                        <th class="py-3 px-4 sm:px-6">Nama Kuliner</th>
                        <th class="py-3 px-4 sm:px-6">Lokasi</th>
                        <th class="py-3 px-4 sm:px-6">Jam Buka</th>
                        <th class="py-3 px-4 sm:px-6">Jam Tutup</th>
                        <th class="py-3 px-4 sm:px-6">Destinasi</th>
                        <th class="py-3 px-4 sm:px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($culinarys as $culinary)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4 sm:px-6">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4 sm:px-6">
                                <img src="{{ asset('storage/' . $culinary->image) }}" alt="{{ $culinary->title }}"
                                    class="rounded shadow w-20 h-14 object-cover">
                            </td>
                            <td class="py-3 px-4 sm:px-6">{{ $culinary->title }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $culinary->location }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $culinary->open }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $culinary->close }}</td>
                            <td class="py-3 px-4 sm:px-6">
                                {{ $culinary->destination->title ?? 'Tidak ada destinasi' }}
                            </td>
                            <td class="py-3 px-4 sm:px-6 text-center space-x-2">
                                <a href="{{ route('culinarys.edit', $culinary->id) }}"
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs transition">Edit</a>
                                <form action="{{ route('culinarys.destroy', $culinary->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Yakin ingin menghapus?')"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs transition">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-4">Data kuliner belum tersedia.</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

            <div class="py-4 border">
                {{ $culinarys->links() }}
            </div>
        </div>
    </div>

</x-layout>
