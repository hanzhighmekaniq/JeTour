<x-layout>
    <div class="w-full p-4 sm:p-6 bg-gray-50 min-h-screen">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 sm:mb-6">Data Penginapan</h1>

        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 pb-4">
            <!-- Tombol Tambah -->
            <div>
                <a href="{{ route('lodging.create') }}"
                    class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition">
                    + Tambah Penginapan
                </a>
            </div>

            <!-- Filter dan Search -->
            <div class="w-full sm:w-auto">
                <form action="{{ route('lodging.index') }}" method="GET" class="flex flex-col sm:flex-row gap-2 items-stretch sm:items-center">
                    <select name="tipe"
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 w-full sm:w-auto">
                        <option value="">Semua Tipe</option>
                        <option value="hotel" {{ request('tipe') == 'hotel' ? 'selected' : '' }}>Hotel</option>
                        <option value="villa" {{ request('tipe') == 'villa' ? 'selected' : '' }}>Villa</option>
                        <option value="guesthouse" {{ request('tipe') == 'guesthouse' ? 'selected' : '' }}>Guesthouse</option>
                    </select>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama penginapan..."
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 w-full sm:w-auto">
                    <input type="number" name="harga_min" value="{{ request('harga_min') }}" placeholder="Harga Min"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full sm:w-auto">
                    <input type="number" name="harga_max" value="{{ request('harga_max') }}" placeholder="Harga Max"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full sm:w-auto">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition w-full sm:w-auto">Filter</button>
                </form>
            </div>
        </div>

        <!-- Tabel Data -->
        <div class="overflow-x-auto bg-white rounded-lg shadow w-full">
            <table class="min-w-[800px] w-full text-left text-sm">
                <thead class="bg-blue-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 sm:px-6">No</th>
                        <th class="py-3 px-4 sm:px-6">Nama Penginapan</th>
                        <th class="py-3 px-4 sm:px-6">Tipe</th>
                        <th class="py-3 px-4 sm:px-6">Lokasi</th>
                        <th class="py-3 px-4 sm:px-6">Harga</th>
                        <th class="py-3 px-4 sm:px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($lodgings as $lodging)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4 sm:px-6">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $lodging->nama }}</td>
                            <td class="py-3 px-4 sm:px-6 capitalize">{{ $lodging->tipe }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $lodging->lokasi }}</td>
                            <td class="py-3 px-4 sm:px-6">Rp {{ number_format($lodging->harga, 0, ',', '.') }}</td>
                            <td class="py-3 px-4 sm:px-6 text-center space-x-2">
                                <a href="{{ route('admin.lodging.edit', $lodging) }}"
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs transition">Edit</a>
                                <form action="{{ route('admin.lodging.destroy', $lodging) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Yakin ingin menghapus?')"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs transition">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">Data penginapan belum tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="py-4 border">
                {{ $lodgings->links() }}
            </div>
        </div>
    </div>
</x-layout>
