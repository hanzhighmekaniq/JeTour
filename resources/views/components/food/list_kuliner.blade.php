<div class="mb-10">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-5">

        @forelse ($foods as $culinary)
            <div class="bg-white rounded-lg shadow-xl p-6 border border-gray-100">
                {{-- Gambar utama kuliner --}}
                @if ($culinary->image)
                    <img src="{{ asset('storage/' . $culinary->image) }}" alt="{{ $culinary->title }}"
                        class="mx-auto rounded-md">
                @else
                    <img src="{{ asset('assets/images/destination/kuliner_1.png') }}" alt="Kuliner"
                        class="mx-auto rounded-md">
                @endif

                {{-- Lokasi --}}
                <p class="flex items-center text-[7pt] text-gray-500 my-3">
                    <x-heroicon-o-map-pin class="text-gray-500 size-5" />
                    {{ $culinary->location ?? 'Lokasi belum tersedia' }}
                </p>

                {{-- Judul kuliner --}}
                <h5 class="text-xl font-semibold">{{ $culinary->title }}</h5>

                {{-- Deskripsi (bisa kamu tampilkan kalau perlu) --}}
                <p class="text-sm mt-2 text-gray-700">{{ Str::limit($culinary->description, 100) }}</p>

                {{-- Jam operasional --}}
                <div class="mt-4 text-softPrimary text-sm">
                    <div class="flex">
                        <x-heroicon-s-banknotes class="size-5" />
                        {{-- Contoh harga tetap, kamu bisa sesuaikan jika ada field harga --}}
                        <p class="ml-3">Harga sesuai menu</p>
                    </div>
                    <div class="flex mt-2">
                        <x-heroicon-s-clock class="size-5" />
                        <p class="ml-3">
                            Buka: {{ $culinary->open ?? 'Tidak diketahui' }} - Tutup:
                            {{ $culinary->close ?? 'Tidak diketahui' }}
                        </p>
                    </div>
                </div>

                {{-- Rating (kalau ada field rating bisa diubah, sekarang fixed) --}}
                <div class="flex border-gray-50 border rounded-md shadow p-1 w-fit mt-10">
                    <x-heroicon-o-star class="size-5" />
                    <p class="text-sm">4,4 / 5</p>
                </div>

                <button class="bg-gradient-to-br from-accent to-primary text-white px-5 py-3 rounded-full mt-4 w-full"
                    onclick="openModal('{{ $culinary->id }}')">
                    Selengkapnya
                </button>
            </div>
        @empty
            <p class="text-center text-gray-400">Belum ada kuliner untuk destinasi ini.</p>
        @endforelse

        @foreach ($foods as $culinary)
            <!-- Modal -->
            <div id="modal-{{ $culinary->id }}"
                class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden justify-center items-center">
                <div class="bg-white rounded-xl shadow-xl max-w-2xl w-full p-6 relative">
                    <!-- Tombol Close -->
                    <button onclick="closeModal('{{ $culinary->id }}')"
                        class="absolute top-3 right-3 text-gray-600 hover:text-red-500">
                        ✕
                    </button>

                    <h2 class="text-xl font-semibold mb-4">Galeri Kuliner: {{ $culinary->title }}</h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-h-[60vh] overflow-y-auto">
                        @php
                            $images = json_decode($culinary->multiple_images, true) ?? [];
                        @endphp

                        @forelse ($images as $img)
                            <img src="{{ asset('storage/' . $img) }}" alt="Foto {{ $culinary->title }}"
                                class="rounded-md object-cover w-full h-48">
                        @empty
                            <p class="text-gray-500">Tidak ada gambar tambahan.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        @endforeach

        <script>
            function openModal(id) {
                document.getElementById(`modal-${id}`).classList.remove('hidden');
                document.getElementById(`modal-${id}`).classList.add('flex');
            }

            function closeModal(id) {
                document.getElementById(`modal-${id}`).classList.add('hidden');
                document.getElementById(`modal-${id}`).classList.remove('flex');
            }
        </script>

    </div>
</div>
