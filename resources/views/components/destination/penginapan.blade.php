<div class="mt-52">
    <div class="flex justify-between my-5">
        <h1 class="text-primary text-2xl font-semibold">Penginapan Untuk Kalian Istirahat</h1>
        <a href="#" class="text-softPrimary">Lihat Semua</a>
    </div>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5">
        @forelse ($lodgings as $lodging)
            <div class="bg-white rounded-lg shadow-xl p-6 border border-gray-100">
                <img src="{{ asset('storage/' . $lodging->gambar) }}" alt="Hotel" class="mx-auto rounded-md">

                <p class="flex items-center text-[7pt] text-gray-500 my-3">
                    <x-heroicon-o-map-pin class="text-gray-500 size-5 mr-1" />
                    {{ $lodging->lokasi }}
                </p>

                <h5 class="text-xl font-semibold">{{ $lodging->nama }}</h5>

                <div class="flex text-[#888888]">
                    <div class="flex">
                        <p class="flex items-center text-gray-500 text-xs">
                            {{ $lodging->deskripsi }}
                        </p>
                    </div>
                </div>

                <div class="flex mt-10 justify-between items-center">
                    <p class="text-sm">From <span class="font-semibold">Rp.
                            {{ number_format($lodging->harga, 0, ',', '.') }}</span> / Malam</p>
                </div>

                <button class="bg-gradient-to-br from-accent to-primary text-white px-5 py-3 rounded-full mt-4 w-full">
                    Pesan Sekarang
                </button>
            </div>

        @empty
            <div class="bg-white rounded-lg shadow-xl p-6 border border-gray-100">
                <img src="{{ asset('assets/images/destination/hotel_1.png') }}" alt="Hotel"
                    class="mx-auto rounded-md ">
                <p class="flex items-center text-[7pt] text-gray-500 my-3"><x-heroicon-o-map-pin
                        class="text-gray-500 size-5" />
                    Kec.
                    Patrang, Kabupaten Jember, Jawa Timur 68112</p>
                <h5 class="text-xl font-semibold">Aston Jember Hotel</h5>
                <div class="flex  text-[#888888]">
                    <div class="flex">
                        <p class="flex items-center text-gray-500 text-xs">
                            Kec.
                            Patrang, Kabupaten Jember, Jawa Timur 68112</p>
                    </div>

                </div>
                <div class="flex mt-10 justify-between items-center">
                    <p class="text-sm">From <span class="font-semibold">Rp. 150.000</span> / Malam</p>

                </div>
                <button
                    class="bg-gradient-to-br from-accent to-primary text-white px-5 py-3 rounded-full mt-4 w-full">Pesan
                    Sekarang</button>
            </div>
        @endforelse

    </div>
</div>
