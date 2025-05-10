<x-layout>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


    <div class="w-full p-4 sm:p-6 bg-gray-50 min-h-screen">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 sm:mb-6">Data Wisata</h1>
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 pb-4">
            <!-- Tombol Tambah Wisata -->
            <div>
                <a href="{{ route('destination.create') }}">
                    <button class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition">+ Tambah Wisata</button>
                </a>
            </div>
            <div class="w-full sm:w-auto">
                <!-- Filter dan Search -->
                <form method="GET" action="{{ route('destination.index') }}" class="flex flex-col sm:flex-row gap-2 items-stretch sm:items-center">
                    <select name="category" id="category"
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 w-full sm:w-auto">
                        <option value="">Semua Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <input type="text" name="search" id="search" value="{{ request('search') }}"
                        placeholder="Cari nama wisata..."
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 w-full sm:w-auto">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition w-full sm:w-auto">Filter</button>
                </form>
            </div>
        </div>

        <!-- Tabel Wisata -->
        <div class="overflow-x-auto bg-white rounded-lg shadow w-full">
            <table class="min-w-[600px] w-full text-left text-sm">
                <thead class="bg-blue-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 sm:px-6">#</th>
                        <th class="py-3 px-4 sm:px-6">Nama Wisata</th>
                        <th class="py-3 px-4 sm:px-6">Kategori</th>
                        <th class="py-3 px-4 sm:px-6">Lokasi</th>
                        <th class="py-3 px-4 sm:px-6">Harga Tiket</th>
                        <th class="py-3 px-4 sm:px-6">Status</th>
                        <th class="py-3 px-4 sm:px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($data as $index => $destination)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4 sm:px-6">{{ $data->firstItem() + $index }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $destination->name }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $destination->category->name ?? 'N/A' }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $destination->location }}</td>
                            <td class="py-3 px-4 sm:px-6">Rp {{ number_format($destination->price, 0, ',', '.') }}</td>
                            <td class="py-3 px-4 sm:px-6">
                                <span class="inline-block px-2 py-1 text-xs text-white bg-green-500 rounded">Aktif</span>
                            </td>
                            <td class="py-3 px-4 sm:px-6 text-center space-x-2">
                                <a href="{{ route('admin.destination.edit', $destination->id) }}" class="inline-block mb-1 sm:mb-0">
                                    <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs transition">Edit</button>
                                </a>
                                <form action="{{ route('admin.destination.destroy', $destination->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs transition">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination -->
            <div class="py-4">
                {{ $data->links() }}
            </div>
        </div>

    </div>

    {{-- <script>
        const categorySelect = document.querySelector('#category');
        categorySelect.addEventListener('change', (e) => {
            const category = e.target.value;
            const table = document.querySelector('table');
            const rows = table.rows;

            for (let i = 1; i < rows.length; i++) {
                const row = rows[i];
                const categoryCell = row.cells[2];
                const categoryText = categoryCell.textContent;

                if (category === '' || categoryText.includes(category)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    </script> --}}

</x-layout>
