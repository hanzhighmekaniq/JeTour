<x-layout>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


    <div class="w-full p-6 bg-gray-50 min-h-screen">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Data Wisata</h1>
        <div class="flex justify-between items-center pb-4">
            <!-- Tombol Tambah Wisata -->
            <div>
                <a href="{{ route('admin.destination.create') }}">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                        + Tambah Wisata
                    </button>
                </a>
            </div>
            <div>
                <!-- Filter dan Search -->
                <form method="GET" action="{{ route('admin.destination.index') }}" class="flex gap-2 items-center">
                    <div>
                        <select name="category" id="category"
                            class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500">
                            <option value="">Semua Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ request('category') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <input type="text" name="search" id="search" value="{{ request('search') }}"
                            placeholder="Cari nama wisata..."
                            class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500">
                    </div>

                    <div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md ">Filter</button>
                    </div>
                </form>
            </div>

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
                    @foreach ($data as $index => $destination)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $data->firstItem() + $index }}</td>
                            <td class="py-3 px-6">{{ $destination->name }}</td>
                            <td class="py-3 px-6">{{ $destination->category->name ?? 'N/A' }}</td>
                            <td class="py-3 px-6">{{ $destination->location }}</td>
                            <td class="py-3 px-6">Rp {{ number_format($destination->price, 0, ',', '.') }}</td>
                            <td class="py-3 px-6">
                                <span
                                    class="inline-block px-2 py-1 text-xs text-white bg-green-500 rounded">Aktif</span>
                            </td>
                            <td class="py-3 px-6 text-center space-x-2">
                                <button
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
                                <button
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
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
