<section class="py-16 bg-white">
    <!-- Heading -->
    <div class="text-center mb-12">
        <h1 class="text-5xl font-losta text-black">
            <span class="block">
                Kunjungi Jember dengan
            </span>
            <span class="block">
                Berbagai Pilihan
            </span>
            <span class="block">
                Transportasi
            </span>

        </h1>
    </div>

    <!-- Cards Container -->
    <div class=" justify-center flex px-4 lg:px-0">

        <div class="container justify-center grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Card 1 -->
            @forelse ($transport as $transportation)
                <div class="bg-[#F0FFFA] p-6 rounded-xl shadow-lg w-full flex flex-col justify-between">
                    <!-- Label Stasiun Central -->
                    <div
                        class="bg-gradient-to-r from-[#60BC9D] to-[#12372A] text-white py-1 px-3 rounded-lg inline-block mb-4 w-fit">
                        {{ $transportation->type }}
                    </div>

                    <!-- Heading dan Deskripsi -->
                    <div>
                        <h2 class="text-3xl font-losta mb-2">{{ $transportation->name }}</h2>
                        {{-- <p class="text-sm text-gray-700 font-poppins">{{ $transportation->operational }}/p>
                        <p class="text-sm text-gray-700 font-poppins">{{ $transportation->close }}</p> --}}
                    </div>

                    <!-- Gambar Kereta -->
                    <div class="mt-4">
                        <img src="{{ asset('storage/' . $transportation->image) }}" alt="{{ $transportation->name }}"
                            class="w-full object-contain">
                    </div>

                </div>

            @empty
                <div class="bg-[#F0FFFA] p-6 rounded-xl shadow-lg w-full flex flex-col justify-between">
                    <!-- Label Stasiun Central -->
                    <div
                        class="bg-gradient-to-r from-[#60BC9D] to-[#12372A] text-white py-1 px-3 rounded-lg inline-block mb-4 w-fit">
                        Stasiun Central
                    </div>

                    <!-- Heading dan Deskripsi -->
                    <div>
                        <h2 class="text-3xl font-losta mb-2">Kereta Api</h2>

                    </div>

                    <!-- Gambar Kereta -->
                    <div class="mt-4">
                        <img src="{{ URL::asset('assets/images/landing/kereta-api.png') }}" alt="Kereta Api"
                            class="w-full object-contain">

                    </div>

                </div>
            @endforelse


        </div>
    </div>

</section>
