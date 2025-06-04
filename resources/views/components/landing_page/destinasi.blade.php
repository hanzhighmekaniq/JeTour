<section class="section-wisata py-12 relative overflow-hidden" id="destinasi">
    <!-- Background Full Width -->
    <div class="absolute inset-0 w-screen h-[30rem] bg-cover top-32 z-[-1] "
        style="background-image: url({{ asset('assets/images/landing/bg-destinasi.png') }});"></div>

    <div class="container mx-auto px-4">
        <!-- Title (aligned to the left) -->
        <div class="text-left mb-10">
            <h1 class="text-4xl font-losta text-[#13372A] mb-4">Temukan Tujuan Liburan Kamu</h1>
            <p class="text-lg font-poppins text-black">Beberapa wisata Jember yang bisa kalian coba</p>
        </div>

        <div class="container mx-auto mt-10 ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:flex gap-8">
                <!-- Gambar Pertama dengan Teks dan Tombol -->
                @forelse ($destinations as $destination)
                    <div class="flex-1 rounded-2xl overflow-hidden ">
                        <div class="flex-1 rounded-2xl overflow-hidden">
                            <div class="relative h-[450px] bg-cover bg-center"
                                style="background-image: url('{{ asset('storage/' . $destination->image) }}');">
                            </div>
                        </div>
                        <div class="py-4 bg-white rounded-b-2xl overflow-hidden">
                            <h3 class="font-losta text-2xl font-medium mb-2">{{ $destination->name }}</h3>
                            <a href="{{ route('user.overview', $destination->name) }}"
                                class="mt-2 text-lg font-poppins inline-block text-white px-8 py-3 rounded-lg bg-gradient-to-r from-softPrimary to-primary hover:to-softPrimary">Selengkapnya</a>
                        </div>
                    </div>

                @empty
                    <div class="flex-1 rounded-2xl overflow-hidden ">
                        <div class="flex-1 rounded-2xl overflow-hidden">
                            <div class="relative h-[450px] bg-cover bg-center"
                                style="background-image: url('{{ asset('assets/images/landing/papuma.png') }}');">
                            </div>
                        </div>
                        <div class="py-4 bg-white rounded-b-2xl overflow-hidden">
                            <h3 class="font-losta text-2xl font-medium mb-2">Papuma Beach</h3>
                            <a href="/overview"
                                class="mt-2 text-lg font-poppins inline-block text-white px-8 py-3 rounded-lg bg-gradient-to-r from-softPrimary to-primary hover:to-softPrimary">halo</a>
                        </div>
                @endforelse


            </div>
        </div>
    </div>
</section>
