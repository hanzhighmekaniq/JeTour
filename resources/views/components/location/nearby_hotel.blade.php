<div class="md:mt-60 lg:mt-28 mt-96 mb-32">

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-9 mt-16">



        @forelse ($lodgings as $lodging)
            <div class="bg-white rounded-lg shadow-xl p-6 border border-gray-100">
                <img src="{{ asset('storage/' . $lodging->gambar) }}" alt="Hotel" class="mx-auto rounded-md">
                <p class="flex items-center text-[7pt] text-gray-500 my-3"><x-heroicon-o-map-pin
                        class="text-gray-500 size-5" />
                    {{ $lodging->lokasi }}</p>
                <h5 class="text-xl font-semibold">{{ $lodging->name }}</h5>
                <div class="flex mt-4 gap-4 text-[#888888]">
                    <div class="flex">

                        <p class="text-sm">{{ $lodging->name }}</p>
                    </div>

                </div>
                <div class="flex mt-10 justify-between items-center">
                    <p class="text-sm">From <span class="font-semibold">Rp. {{ $lodging->harga }}</span> / Malam</p>
                    <div class="flex border-gray-50 border rounded-md shadow p-1">
                        <x-heroicon-o-star class="size-5" />
                        <p class="text-sm">4,4 / 5</p>
                    </div>
                </div>
                <a href="/hotel-details">
                    <button
                        class="bg-gradient-to-br from-accent to-primary hover:from-primary hover:to-primary text-white px-5 py-3 rounded-full mt-4 w-full">Pesan
                        Sekarang</button></a>
            </div>
        @empty
        @endforelse
    </div>
</div>
