<x-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('lodging.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <div class="flex flex-col">
                                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                                @error('nama')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col">
                                <label for="tipe" class="block text-sm font-medium text-gray-700">Tipe</label>
                                <select name="tipe" id="tipe"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                                    <option value="">Pilih Tipe</option>
                                    <option value="hotel" {{ old('tipe') == 'hotel' ? 'selected' : '' }}>Hotel</option>
                                    <option value="villa" {{ old('tipe') == 'villa' ? 'selected' : '' }}>Villa</option>
                                    <option value="guesthouse" {{ old('tipe') == 'guesthouse' ? 'selected' : '' }}>Guesthouse</option>
                                </select>
                                @error('tipe')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col">
                                <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
                                <input type="text" name="lokasi" id="lokasi" value="{{ old('lokasi') }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                                @error('lokasi')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col">
                                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                                <input type="number" name="harga" id="harga" value="{{ old('harga') }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                                @error('harga')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col md:col-span-2">
                                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" rows="3"
                                    class="mt-1 block w-full border-gray-300 rounded-md"
                                    required>{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col md:col-span-2">
                                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                                <input type="file" name="gambar" id="gambar"
                                    class="mt-1 block w-full border-gray-300 rounded-md">
                                @error('gambar')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <div class="mt-6 flex justify-end gap-3">
                            <a href="{{ route('lodging.index') }}"
                                class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">
                                Cancel
                            </a>
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
