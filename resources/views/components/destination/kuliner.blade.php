<div class="mt-28">
    <div class="flex justify-between my-5">
        <h1 class="text-primary text-2xl font-semibold">Beberapa Kulineran di Wisata Jember</h1>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-5">
        @forelse ($culinarys as $culinary)
            <div class="bg-white rounded-lg shadow-xl p-6 border border-gray-100">
                <img src="{{ asset('storage/' . $culinary->image) }}" alt="Kuliner" class="mx-auto rounded-md ">
                <p class="flex items-center text-[7pt] text-gray-500 my-3"><x-heroicon-o-map-pin
                        class="text-gray-500 size-5" />
                    {{ $culinary->location }}</p>
                <h5 class="text-xl font-semibold">{{ $culinary->title }}</h5>
                <div class="mt-4 text-softPrimary text-sm">
                    {{-- <div class="flex">
                        <x-heroicon-s-banknotes class="size-5" />
                        <p class="ml-3">Rp 25-50 rb per orang</p>
                    </div> --}}
                    <div class="flex mt-2">
                        <x-heroicon-s-clock class="size-5" />
                        <p class="ml-3">Buka {{ $culinary->open }} - Tutup {{ $culinary->close }}</p>
                    </div>

                </div>
                {{-- <div class="flex border-gray-50 border rounded-md shadow p-1 w-fit mt-10">
                    <x-heroicon-o-star class="size-5" />
                    <p class="text-sm">4,4 / 5</p>
                </div> --}}
                <button
                    class="bg-gradient-to-br from-accent to-primary text-white px-5 py-3 rounded-full mt-4 w-full">Selengkapnya</button>
            </div>
        @empty

            <div class="bg-white rounded-lg shadow-xl p-6 border border-gray-100">
                <img src="{{ asset('assets/images/destination/kuliner_2.png') }}" alt="Kuliner"
                    class="mx-auto rounded-md ">
                <p class="flex items-center text-[7pt] text-gray-500 my-3"><x-heroicon-o-map-pin
                        class="text-gray-500 size-5" />
                    Kec.
                    Patrang, Kabupaten Jember, Jawa Timur 68112</p>
                <h5 class="text-xl font-semibold">Angkringan Bos Ndut</h5>
                <div class="mt-4 text-softPrimary text-sm">
                    <div class="flex">
                        <x-heroicon-s-banknotes class="size-5" />
                        <p class="ml-3">Rp 25-50 rb per orang</p>
                    </div>
                    <div class="flex mt-2">
                        <x-heroicon-s-clock class="size-5" />
                        <p class="ml-3">Buka - Tutup pukul 22.00</p>
                    </div>

                </div>
                <div class="flex border-gray-50 border rounded-md shadow p-1 w-fit mt-10">
                    <x-heroicon-o-star class="size-5" />
                    <p class="text-sm">4,4 / 5</p>
                </div>
                <button
                    class="bg-gradient-to-br from-accent to-primary text-white px-5 py-3 rounded-full mt-4 w-full">Selengkapnya</button>
            </div>
        @endforelse

    </div>
</div>
