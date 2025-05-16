<x-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('destination.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <div class="flex flex-col">
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama Wisata</label>
                                <input type="text" name="name" id="name" value="{{ $data->name }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>
                            <div class="flex flex-col">
                                <label for="category_id"
                                    class="block text-sm font-medium text-gray-700">Kategori</label>
                                <select name="category_id" id="category_id"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $data->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex flex-col">
                                <label for="location" class="block text-sm font-medium text-gray-700">Lokasi</label>
                                <input type="text" name="location" id="location" value="{{ $data->location }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>

                            <div class="flex flex-col md:col-span-2">
                                <label for="description"
                                    class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <textarea name="description" id="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md"
                                    required>{{ $data->description }}</textarea>
                            </div>

                            <div class="flex flex-col">
                                <label for="fasility" class="block text-sm font-medium text-gray-700">Fasilitas</label>
                                <input type="text" name="fasility" id="fasility" value="{{ $data->fasility }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="latitude" class="block text-sm font-medium text-gray-700">Latitude</label>
                                <input type="text" name="latitude" id="latitude" value="{{ $data->latitude }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude</label>
                                <input type="text" name="longitude" id="longitude" value="{{ $data->longitude }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="price" class="block text-sm font-medium text-gray-700">Harga Masuk</label>
                                <input type="number" name="price" id="price" value="{{ $data->price }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md" required>
                            </div>

                            <div class="flex flex-col md:col-span-2">
                                <label for="content" class="block text-sm font-medium text-gray-700">Konten
                                    Tambahan</label>
                                <textarea name="content" id="content" rows="3" class="mt-1 block w-full border-gray-300 rounded-md">{{ $data->content }}</textarea>
                            </div>

                            <div class="flex flex-col md:col-span-2">
                                <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
                                @if($data->image)
                                    <div class="mb-2">
                                        <img src="{{ asset('images/' . $data->image) }}" alt="Current Image" class="w-32 h-32 object-cover rounded">
                                    </div>
                                @endif
                                <input type="file" name="image" id="image"
                                    class="mt-1 block w-full border-gray-300 rounded-md">
                                <p class="mt-1 text-sm text-gray-500">Biarkan kosong jika tidak ingin mengubah gambar</p>
                            </div>

                        </div>

                        <div class="mt-6">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
