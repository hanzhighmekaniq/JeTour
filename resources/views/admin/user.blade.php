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
                    <input type="text" name="search" id="search" value="{{ $keyword ?? '' }}"
                        placeholder="Cari nama pengguna..."
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 w-full sm:w-auto">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition w-full sm:w-auto">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Tabel Data User -->
        <div class="overflow-x-auto bg-white rounded-lg shadow w-full">
            <table class="min-w-[600px] w-full text-left text-sm">
                <thead class="bg-blue-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4">No</th>
                        <th class="py-3 px-4">Nama</th>
                        <th class="py-3 px-4">Email</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($users as $index => $user)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4 sm:px-6">
                                {{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $user->name }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $user->email }}</td>
                            <td class="py-3 px-4 sm:px-6 text-center space-x-2">
                                <a href="#" class="inline-block mb-1 sm:mb-0">
                                    <button
                                        class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs">Edit</button>
                                </a>
                                <form action="{{ route('datauser.destroy', $user->id) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin hapus?')"
                                        class="bg-red-500 text-white px-3 py-1 rounded text-xs">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4">Data tidak ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-4 mb-2 mx-4">
                {{ $users->withQueryString()->links() }}
            </div>
        </div>

    </div>

</x-layout>
