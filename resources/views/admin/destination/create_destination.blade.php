<x-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('destination.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <div class="flex flex-col">
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama Wisata</label>
                                <input type="text" name="name" id="name"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>
                            <div class="flex flex-col">
                                <label for="category_id"
                                    class="block text-sm font-medium text-gray-700">Kategori</label>
                                <select name="category_id" id="category_id"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex flex-col">
                                <label for="location" class="block text-sm font-medium text-gray-700">Lokasi</label>
                                <input type="text" name="location" id="location"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>

                            <div class="flex flex-col md:col-span-2">
                                <label for="description"
                                    class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <textarea name="description" id="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md"
                                    required></textarea>
                            </div>

                            <div class="flex flex-col">
                                <label for="fasility" class="block text-sm font-medium text-gray-700">Fasilitas</label>
                                <input type="text" name="fasility" id="fasility"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="latitude" class="block text-sm font-medium text-gray-700">Latitude</label>
                                <input type="text" name="latitude" id="latitude"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude</label>
                                <input type="text" name="longitude" id="longitude"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="price" class="block text-sm font-medium text-gray-700">Harga
                                    Masuk</label>
                                <input type="number" name="price" id="price"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>
                            <div class="flex flex-col">
                                <label for="regionCode" class="block text-sm font-medium text-gray-700">Kode
                                    Wilayah</label>
                                <input type="text" name="regionCode" id="regionCode"
                                    class="mt-1 block w-full border-gray-300 rounded-md">
                            </div>

                            <div class="flex flex-col md:col-span-2">
                                <label for="multiple_images" class="block text-sm font-medium text-gray-700">Gambar
                                    Tambahan</label>
                                <input type="file" name="multiple_images[]" id="multiple_images" multiple
                                    class="mt-1 block w-full border-gray-300 rounded-md">
                                <p class="text-xs text-gray-500 mt-1">Pilih lebih dari satu gambar jika perlu.</p>
                            </div>




                            <div class="flex flex-col md:col-span-2">
                                <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
                                <input type="file" name="image" id="image"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>

                        </div>

                        <div class="mt-6">
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
