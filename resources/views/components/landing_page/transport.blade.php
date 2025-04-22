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
    <div class="grid grid-cols-1 gap-y-5 mx-5 md:mx-0 md:flex md:justify-center md:space-x-8">
        <!-- Card 1 -->
        <div class="bg-[#F0FFFA] p-6 rounded-xl shadow-lg w-full max-w-sm flex flex-col justify-between">
            <!-- Label Stasiun Central -->
            <div
                class="bg-gradient-to-r from-[#60BC9D] to-[#12372A] text-white py-1 px-3 rounded-lg inline-block mb-4 w-fit">
                Stasiun Central
            </div>

            <!-- Heading dan Deskripsi -->
            <div>
                <h2 class="text-3xl font-losta mb-2">Stasiun Jember</h2>
                <p class="text-sm text-gray-700 font-poppins">Jarak: 1Km (Dari Alun Alun)</p>
            </div>

            <!-- Gambar Kereta -->
            <div class="mt-4">
                <img src="{{ URL::asset('assets/images/landing/kereta-api.png') }}" alt="Kereta Api"
                    class="w-full object-contain">
            </div>
        </div>
        <!-- Card 2 -->
        <div class="bg-[#F0FFFA] p-6 rounded-xl shadow-lg w-full max-w-sm flex flex-col justify-between">
            <!-- Label Stasiun Central -->
            <div
                class="bg-gradient-to-r from-[#60BC9D] to-[#12372A] text-white py-1 px-3 rounded-lg inline-block mb-4 w-fit">
                Bus Station Central
            </div>

            <!-- Heading dan Deskripsi -->
            <div>
                <h2 class="text-3xl font-losta mb-2">Terminal Tawang Alun</h2>
                <p class="text-sm text-gray-700 font-poppins">Jarak: 10Km (Dari Alun Alun)</p>
            </div>

            <!-- Gambar Kereta -->
            <div class="mt-4">
                <img src="{{ URL::asset('assets/images/landing/bus.png') }}" alt="Bus"
                    class="w-full object-contain">
            </div>
        </div>
        <!-- Card 3 -->
        <div class="bg-[#F0FFFA] p-6 rounded-xl shadow-lg w-full max-w-sm flex flex-col justify-between">
            <!-- Label Stasiun Central -->
            <div
                class="bg-gradient-to-r from-[#60BC9D] to-[#12372A] text-white py-1 px-3 rounded-lg inline-block mb-4 w-fit">
                Public Transportation
            </div>

            <!-- Heading dan Deskripsi -->
            <div>
                <h2 class="text-3xl font-losta mb-2">Angkutan Kota</h2>
                <p class="text-sm text-gray-700 font-poppins">Jarak: - (Dari Alun Alun)</p>
            </div>

            <!-- Gambar Kereta -->
            <div class="mt-4">
                <img src="{{ URL::asset('assets/images/landing/lin.png') }}" alt="Lin"
                    class="w-full object-contain">
            </div>
        </div>
    </div>
</section>
