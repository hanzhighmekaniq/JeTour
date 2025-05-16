<x-layout>
    <div class="w-full p-4 sm:p-6 bg-gray-50 min-h-screen">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 sm:mb-6">Data Tiket</h1>

        <div class="flex justify-between items-center pb-4">
            <div>
                <button data-modal-target="modal_create_ticket" data-modal-toggle="modal_create_ticket"
                    class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition">
                    + Tambah Tiket
                </button>
            </div>

            <div>
                <form method="GET" action="" class="flex flex-col sm:flex-row gap-2 items-stretch sm:items-center">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama tiket..."
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 w-full sm:w-auto">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition w-full sm:w-auto">Filter</button>
                </form>
            </div>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto bg-white rounded-lg shadow w-full">
            <table class="min-w-[400px] w-full text-left text-sm">
                <thead class="bg-blue-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 sm:px-6">#</th>
                        <th class="py-3 px-4 sm:px-6">Nama Tiket</th>
                        <th class="py-3 px-4 sm:px-6">Harga</th>
                        <th class="py-3 px-4 sm:px-6">Deskripsi</th>
                        <th class="py-3 px-4 sm:px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($tickets as $index => $ticket)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4 sm:px-6">{{ $index + 1 }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $ticket->name }}</td>
                            <td class="py-3 px-4 sm:px-6">Rp {{ number_format($ticket->price, 0, ',', '.') }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $ticket->description }}</td>
                            <td class="py-3 px-4 sm:px-6 text-center space-x-2">
                                <button
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs transition">
                                    Edit
                                </button>
                                <button
                                    class="bg-red-400 hover:bg-red-500 text-white px-3 py-1 rounded text-xs transition">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-gray-500">Tidak ada tiket ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Modal Tambah Tiket --}}
    <div id="modal_create_ticket" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[1000] justify-center items-center w-full h-full bg-gray-500 bg-opacity-75">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow-sm">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Tambah Tiket
                    </h3>
                    <button type="button" data-modal-hide="modal_create_ticket"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center">
                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('ticket.store') }}" method="POST">
                    @csrf
                    <div class="p-4 md:p-5 space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Tiket</label>
                            <input type="text" name="name" id="name" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
                            <input type="number" name="price" id="price" required min="0"
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="destination_id"
                                class="block text-sm font-medium text-gray-700">Destinasi</label>
                            <select name="destination_id" id="destination_id" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="" disabled selected>Pilih Destinasi</option>
                                @foreach ($destination as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea name="description" id="description" rows="3" required
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                    </div>

                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                        <button type="button" data-modal-hide="modal_create_ticket"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700">
                            Batal
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>
