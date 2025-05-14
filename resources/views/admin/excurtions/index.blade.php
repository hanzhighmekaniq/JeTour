<x-layout>
    <div class="w-full p-4 sm:p-6 bg-gray-50 min-h-screen">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 sm:mb-6">Data Wisata</h1>
        <div class="flex justify-between items-center pb-4">
            <div>
                <button data-modal-target="modal_create_excurtion" data-modal-toggle="modal_create_excurtion"
                    class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition">+
                    Tambah Wisata</button>
                <div id="modal_create_excurtion" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[1000] justify-center items-center w-full h-full bg-gray-500 bg-opacity-75">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-sm">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                                <h3 class="text-xl font-semibold text-gray-900">
                                    Tambah Data Tamasya
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                    data-modal-hide="modal_create_excurtion">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form action="{{ route('excurtion.store') }}" method="POST">
                                @csrf
                                <div class="p-4 md:p-5 space-y-4">
                                    <div>
                                        <label for="name"
                                            class="block text-sm font-medium text-gray-700">Kategori</label>
                                        <input type="text" name="name" id="name" required
                                            placeholder="Masukan Nama Tamasya"
                                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label for="rules"
                                            class="block text-sm font-medium text-gray-700">Aturan</label>
                                        <input type="text" name="rules" id="rules" required
                                            placeholder="Enter rules"
                                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label for="open"
                                            class="block text-sm font-medium text-gray-700">Jam Buka</label>
                                            <div class="relative">
                                                <input type="time" name="open" id="open" required
                                                       placeholder="Enter open time"
                                                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                <i class="fas fa-clock absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                                              </div>
                                    </div>
                                    <div class="relative">
                                        <input type="time" name="close" id="close" required
                                               placeholder="Enter open time"
                                               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <i class="fas fa-clock absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                                      </div>
                                      <div>
                                        <label for="destination_id"
                                            class="block text-sm font-medium text-gray-700">Kategori Wisata</label>
                                        <select name="destination_id" id="destination_id" required
                                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                            @foreach ($destinations as $destination)
                                                <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
                                    <button type="button"
                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100"
                                        data-modal-hide="static-modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
            <div>
                <form method="GET" action=""
                    class="flex flex-col sm:flex-row gap-2 items-stretch sm:items-center">
                    <input type="text" name="search" id="search" value="{{ request('search') }}"
                        placeholder="Cari nama kategori..."
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 w-full sm:w-auto">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition w-full sm:w-auto">Filter</button>
                </form>
            </div>
        </div>

        <div class="overflow-x-auto bg-white rounded-lg shadow w-full">
            <table class="min-w-[400px] w-full text-left text-sm">
                <thead class="bg-blue-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 sm:px-6">#</th>
                        <th class="py-3 px-4 sm:px-6">Nama Tamasya</th>
                        <th class="py-3 px-4 sm:px-6">Aturan</th>
                        <th class="py-3 px-4 sm:px-6">Jam Buka</th>
                        <th class="py-3 px-4 sm:px-6">Jam Tutup</th>
                        <th class="py-3 px-4 sm:px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($excurtions as $index => $excurtion)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4 sm:px-6">{{ $index + 1 }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $excurtion->name }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $excurtion->rules }}</td>
                            <td class="py-3 px-4 sm:px-6">
                                {{ Carbon\Carbon::parse($excurtion->open)->format('g:i A') == 'AM' ? Carbon\Carbon::parse($excurtion->open)->format('g:i') . ' Pagi' : Carbon\Carbon::parse($excurtion->open)->format('g:i') . ' Siang' }}
                            </td>
                            <td class="py-3 px-4 sm:px-6">
                                {{ Carbon\Carbon::parse($excurtion->close)->format('g:i A') == 'AM' ? Carbon\Carbon::parse($excurtion->close)->format('g:i') . ' Pagi' : Carbon\Carbon::parse($excurtion->close)->format('g:i') . ' Siang' }}
                            </td>

                            <td class="py-3 px-4 sm:px-6 text-center space-x-2">
                                <button data-modal-target="modal_edit_{{ $excurtion->id }}"
                                    data-modal-toggle="modal_edit_{{ $excurtion->id }}"
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-xs transition">Edit</button>
                                <button data-modal-target="modal_delete_{{ $excurtion->id }}"
                                    data-modal-toggle="modal_delete_{{ $excurtion->id }}"
                                    class="bg-red-400 hover:bg-red-500 text-white px-3 py-1 rounded text-xs transition">
                                    Hapus
                                </button>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-4 text-gray-500">Tidak ada Tamasya ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- MODAL EDIT excurtion --}}
    @foreach ($excurtions as $excurtion)
        <div id="modal_edit_{{ $excurtion->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden fixed inset-0 z-[1000] flex items-center justify-center bg-gray-500 bg-opacity-75">
            <div class="relative w-full max-w-md p-4">
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal Header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">Edit Tamasya</h3>
                        <button type="button" data-modal-hide="modal_edit_{{ $excurtion->id }}"
                            class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 flex items-center justify-center">
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <!-- Modal Body -->
                    <form action="{{ route('excurtion.update', $excurtion->id) }}" method="POST"
                        class="px-4 py-5 space-y-4">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="name_{{ $excurtion->id }}" class="block text-sm font-medium text-gray-700">
                                Nama Tamasya
                            </label>
                            <input type="text" name="name" id="name_{{ $excurtion->id }}"
                                value="{{ $excurtion->name }}" required
                                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="rules_{{ $excurtion->id }}" class="block text-sm font-medium text-gray-700">
                                Aturan
                            </label>
                            <div class="summernote">
                                <textarea name="rules" id="summernote" required
                                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $excurtion->rules }}</textarea>
                            </div>
                        </div>
                        <div>
                            <label for="open_{{ $excurtion->id }}" class="block text-sm font-medium text-gray-700">
                                Jam Buka
                            </label>
                            <input type="time" name="open" id="open_{{ $excurtion->id }}"
                                value="{{ $excurtion->open }}" required
                                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="close_{{ $excurtion->id }}" class="block text-sm font-medium text-gray-700">
                                Jam Tutup
                            </label>
                            <input type="time" name="close" id="close_{{ $excurtion->id }}"
                                value="{{ $excurtion->close }}" required
                                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="destination_id_{{ $excurtion->id }}" class="block text-sm font-medium text-gray-700">
                                Kategori Wisata
                            </label>
                            <select name="destination_id" id="destination_id_{{ $excurtion->id }}" required
                                class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                @foreach ($destinations as $destination)
                                    <option value="{{ $destination->id }}" {{ $excurtion->destination_id == $destination->id ? 'selected' : '' }}>
                                        {{ $destination->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Modal Footer -->
                        <div class="flex justify-end space-x-2 border-t pt-4">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg text-sm px-5 py-2.5">
                                Simpan
                            </button>
                            <button type="button" data-modal-hide="modal_edit_{{ $excurtion->id }}"
                                class="text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 font-medium rounded-lg text-sm px-5 py-2.5">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach


    {{-- MODAL DELETE excurtion --}}
    @foreach ($excurtions as $excurtion)
        <div id="modal_delete_{{ $excurtion->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[1000] justify-center items-center w-full h-full bg-gray-500 bg-opacity-75">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Hapus Kategori
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="modal_delete_{{ $excurtion->id }}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <p class="text-base leading-relaxed text-gray-500">
                            Apakah Anda yakin ingin menghapus kategori ini? Tindakan ini tidak dapat dibatalkan.
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <!-- Yes button -->
                        <form action="{{ route('excurtion.destroy', $excurtion->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Ya, Hapus
                            </button>
                        </form>
                        <!-- No button -->
                        <button type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100"
                            data-modal-hide="modal_delete_{{ $excurtion->id }}">
                            Tidak
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</x-layout>
