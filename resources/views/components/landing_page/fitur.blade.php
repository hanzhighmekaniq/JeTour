<section class="relative bg-white py-12">
    <!-- Bagian Atas: Logo, Heading, dan Deskripsi -->
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between text-left">
            <!-- Logo -->
            <img src="{{ asset('assets/images/landing/logo-fitur.png') }}" alt="Logo" class="h-16 mr-6">

            <!-- Heading dan Deskripsi dibungkus div dengan flex -->
            <div class="flex items-start justify-center">
                <!-- Heading -->
                <div>
                    <h2 class="text-4xl font-losta text-gray-900 mb-2 text-left">
                        <span class="block">Rencanakan</span>
                        <span class="block">Liburan Kamu</span>
                        <span class="block">dengan Berbagai</span>
                        <span class="block">Fitur Menarik Kita</span>
                    </h2>
                </div>
            </div>

            <!-- Deskripsi (terbagi menjadi beberapa baris) -->
            <div class="hidden md:block">
                <p class="text-lg text-gray-600 text-left">
                    <span class="block">Kami sediakan beberapa fitur menarik</span>
                    <span class="block">yang dapat membantu kamu dalam</span>
                    <span class="block">mencari dan menemukan wisata</span>
                    <span class="block">yang kalian inginkan</span>
                </p>
            </div>
        </div>
    </div>
    <!-- Bagian Bawah: Fitur Card -->
    <div class="container mx-auto px-4 mt-10">
        <div class="grid grid-cols-2 md:flex gap-8 items-end">
            <!-- Card Pertama (tinggi sendiri) -->
            <div class="md:flex-1 md:row-span-2 bg-gray-100 rounded-2xl shadow-lg overflow-hidden">
                <div class="relative h-[500px] bg-cover bg-center"
                    style="background-image: url('{{ asset('assets/images/landing/bg-card1.png') }}');">
                    <div class="absolute inset-0 flex items-end justify-content-start p-4 text-white">
                        <p class="font-losta text-3xl font-medium text-left">
                            <span class="block">See a true</span>
                            <span class="block">location</span>
                        </p>
                        <a href="/destination" class="cursor-pointer"><button
                                class="absolute top-2 right-2 w-10 h-10 bg-white bg-opacity-50 hover:bg-opacity-100 rounded-full flex items-center justify-center">
                                <x-heroicon-s-arrows-pointing-out class="w-5 h-5 text-gray-800" />
                            </button></a>
                    </div>
                </div>
            </div>
            <!-- Card Kedua -->
            <div class="md:flex-1 bg-gray-100 rounded-2xl shadow-lg overflow-hidden">
                <div class="relative h-[450px] bg-cover bg-center"
                    style="background-image: url('{{ asset('assets/images/landing/bg-card2.png') }}');">
                    <div class="absolute inset-0 flex flex-col justify-end p-4 text-white">
                        <a href="/destination" class="cursor-pointer"><button
                                class="absolute top-2 right-2 w-10 h-10 bg-white bg-opacity-50 hover:bg-opacity-100 rounded-full flex items-center justify-center">
                                <x-heroicon-s-arrows-pointing-out class="w-5 h-5 text-gray-800" />
                            </button></a>
                        <x-heroicon-s-sun class="w-16 h-16" />
                        <p class="font-losta text-3xl">32° Cerah</p>
                        <p class="font-losta text-2xl">Temukan suhu cuaca saat itu juga</p>
                    </div>
                </div>
            </div>
            <!-- Card Ketiga -->
            <div class="md:flex-1 bg-gray-100 rounded-2xl shadow-lg overflow-hidden">
                <div class="relative h-[450px] bg-secondary">
                    <div class="absolute inset-0 flex flex-col justify-end p-4 text-black-300">
                        <div class="flex items-center space-x-2">
                            <!-- Menambahkan icon star di samping text -->
                            <x-heroicon-s-star class="text-yellow-400 w-6 h-6" />
                            <p class="font-losta text-3xl font-bold">1000/10</p>
                        </div>
                        <p class="font-losta text-2xl text-black">Temukan review menarik pada destinasi wisata</p>
                    </div>
                </div>
            </div>
            <!-- Card Keempat -->
            <div class="md:flex-1 bg-gray-100 rounded-2xl shadow-lg overflow-hidden relative">
                <div class="swiper mySwiper relative">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="relative h-[450px] bg-cover bg-center"
                                style="background-image: url('{{ asset('assets/images/landing/bg-card4.png') }}');">
                                <!-- Teks di kiri bawah -->
                                <div class="absolute bottom-4 left-4 text-white">
                                    <p class="font-losta text-2xl font-medium">Spot Destinasi Wisata yang Menarik</p>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="relative h-[450px] bg-cover bg-center"
                                style="background-image: url('{{ asset('assets/images/landing/bg-card4.png') }}');">
                                <!-- Teks di kiri bawah -->
                                <div class="absolute bottom-4 left-4 text-white">
                                    <p class="font-losta text-2xl font-medium">Spot Destinasi Wisata yang Menarik</p>
                                </div>
                            </div>
                        </div>
                        <!-- Tambahkan slide lainnya sesuai kebutuhan -->
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination element-pagination" style="top: 10px; pointer-events: none;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
