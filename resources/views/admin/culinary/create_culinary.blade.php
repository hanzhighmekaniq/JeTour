<x-layout>
    <div class="w-full py-4 bg-gray-50 min-h-screen">
        <h1 class="text-2xl font-bold mb-4">Tambah Banyak Kuliner</h1>

        <form action="{{ route('culinary.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Pilih Destinasi Sekali --}}
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Pilih Destinasi</label>
                <select name="destination_id" class="mt-1 w-full border rounded-md p-2">
                    <option value="">-- Pilih Destinasi --</option>
                    @foreach ($destinations as $destination)
                        <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                    @endforeach
                </select>
            </div>

            <div id="culinary-forms">
                {{-- Form Kuliner Pertama --}}
                <div class="culinary-form border p-4 rounded-md mb-4 bg-white shadow">
                    <div class="grid gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nama Kuliner</label>
                            <input type="text" name="culinaries[0][title]" class="mt-1 w-full border rounded-md p-2">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea name="culinaries[0][description]" rows="2" class="mt-1 w-full border rounded-md p-2"></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Alamat</label>
                            <input type="text" name="culinaries[0][location]"
                                class="mt-1 w-full border rounded-md p-2">
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Jam Buka</label>
                                <input type="time" name="culinaries[0][open]"
                                    class="mt-1 w-full border rounded-md p-2">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Jam Tutup</label>
                                <input type="time" name="culinaries[0][close]"
                                    class="mt-1 w-full border rounded-md p-2">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Gambar Utama</label>
                            <input type="file" name="culinaries[0][image]" class="mt-1 w-full">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Gambar Tambahan</label>
                            <input type="file" name="culinaries[0][multiple_images][]" multiple class="mt-1 w-full">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between items-center mb-4">
                <button type="button" onclick="addForm()" class="bg-green-500 text-white px-4 py-2 rounded-md">+ Tambah
                    Form Kuliner</button>
            </div>

            <div class="flex justify-end space-x-2">
                <a href="{{ route('culinary.index') }}"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold px-4 py-2 rounded-md transition">Batal</a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md transition">Simpan</button>
            </div>
        </form>
    </div>

    <script>
        let index = 1;

        function addForm() {
            const container = document.getElementById('culinary-forms');
            const div = document.createElement('div');
            div.className = "culinary-form border p-4 rounded-md mb-4 bg-white shadow";
            div.innerHTML = `
                <div class="grid gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Kuliner</label>
                        <input type="text" name="culinaries[${index}][title]" class="mt-1 w-full border rounded-md p-2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="culinaries[${index}][description]" rows="2" class="mt-1 w-full border rounded-md p-2"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Alamat</label>
                        <input type="text" name="culinaries[${index}][location]" class="mt-1 w-full border rounded-md p-2">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Jam Buka</label>
                            <input type="time" name="culinaries[${index}][open]" class="mt-1 w-full border rounded-md p-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Jam Tutup</label>
                            <input type="time" name="culinaries[${index}][close]" class="mt-1 w-full border rounded-md p-2">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Gambar Utama</label>
                        <input type="file" name="culinaries[${index}][image]" class="mt-1 w-full">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Gambar Tambahan</label>
                        <input type="file" name="culinaries[${index}][multiple_images][]" multiple class="mt-1 w-full">
                    </div>
                </div>
            `;
            container.appendChild(div);
            index++;
        }
    </script>
</x-layout>
