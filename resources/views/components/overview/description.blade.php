<div class="my-10">
    <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 my-5">
        <div>
            <p class="flex items-center text-xs mb-5"><x-heroicon-o-map-pin class="text-black size-6" />Darungan,
                Kemuning
                Lor,
                Kec. Arjasa, Kabupaten
                Jember, Jawa
                Timur</p>
            <p>Puncak Rembangan, yang terletak di Desa Darungan,
                Kecamatan Arjasa, Jember, Jawa Timur, berjarak sekitar 25 km
                dari pusat kota dan mudah dijangkau. Buka 24 jam, tempat ini
                menawarkan pemandangan citylight Jember yang indah pada
                malam hari. Pengunjung bisa berenang, bermain di wahana,
                bersantap di kafe dan resto, serta berfoto di berbagaispot
                menarik. Fasilitas seperti toilet, mushola, gazebo, dan area
                berkemah juga tersedia untuk kenyamanan.</p>
            <h4 class="font-semibold text-lg mt-5 mb-3">Fasilitas</h4>
            <div class="flex flex-wrap gap-5">
                <div class="bg-gradient-to-r from-softPrimary to-primary text-white p-3 rounded-lg">
                    <p>Kolam Renang</p>
                </div>
                <div class="bg-gradient-to-r from-softPrimary to-primary text-white p-3 rounded-lg">
                    <p>Cafe</p>
                </div>
                <div class="bg-gradient-to-r from-softPrimary to-primary text-white p-3 rounded-lg">
                    <p>Camping Ground</p>
                </div>
                <div class="bg-gradient-to-r from-softPrimary to-primary text-white p-3 rounded-lg">
                    <p>Villa</p>
                </div>
                <div class="bg-gradient-to-r from-softPrimary to-primary text-white p-3 rounded-lg">
                    <p>Panahan</p>
                </div>
                <div class="bg-gradient-to-r from-softPrimary to-primary text-white p-3 rounded-lg">
                    <p>Petik Bunga</p>
                </div>
                <div class="bg-gradient-to-r from-softPrimary to-primary text-white p-3 rounded-lg">
                    <p>Sunrise Point</p>
                </div>
            </div>
        </div>
        <div>
            <a href="{{ asset('assets/images/overview/gallery_overview_1.jpg') }}" data-lightbox="gallery"><img
                    src="{{ asset('assets/images/overview/gallery_overview_1.jpg') }}" alt=""
                    class="mb-3 rounded-xl"></a>
            <div class="flex gap-3">
                <a href="{{ asset('assets/images/overview/gallery_overview_2.jpg') }}" data-lightbox="gallery"><img
                        src="{{ asset('assets/images/overview/gallery_overview_2.jpg') }}" alt=""
                        class="rounded-xl"></a>
                <a href="{{ asset('assets/images/overview/gallery_overview_3.jpg') }}" data-lightbox="gallery"><img
                        src="{{ asset('assets/images/overview/gallery_overview_3.jpg') }}" alt=""
                        class="rounded-xl"></a>
            </div>
        </div>
    </div>
    <div class="w-full my-10 lg:flex grid grid-cols-1">
        <div class="lg:w-4/12 w-full mb-5 lg:mb-0">
            <div class="shadow-[2px_0px_23.5px_0px_#00000025] rounded-xl px-7 py-5">
                <h1 class="font-semibold text-xl mb-3">Review & Rating</h1>
                <div class="flex">
                    <h1 class="font-semibold text-5xl">4.9</h1>
                    <div class="flex flex-col justify-center ml-3">
                        <div class="flex">
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                        </div>
                        <h4 class="text-xs">Review dari 1.6 Ribu Orang</h4>
                    </div>
                </div>
                <div class="mt-3">
                    <h4 class="text-xs">Kenyamanan</h4>
                    <div class="flex items-center">
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-200">
                            <div class="bg-softPrimary h-2.5 rounded-full" style="width: 95%"></div>
                        </div>
                        <p class="pl-5">4.9</p>
                    </div>
                </div>
                <div class="mt-1">
                    <h4 class="text-xs">Fasilitas</h4>
                    <div class="flex items-center">
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-200">
                            <div class="bg-softPrimary h-2.5 rounded-full" style="width: 90%"></div>
                        </div>
                        <p class="pl-5">4.8</p>
                    </div>
                </div>
                <div class="mt-1">
                    <h4 class="text-xs">Makanan</h4>
                    <div class="flex items-center">
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-200">
                            <div class="bg-softPrimary h-2.5 rounded-full" style="width: 100%"></div>
                        </div>
                        <p class="pl-5">5.0</p>
                    </div>
                </div>
                <button
                    class="bg-[#B8F8E3] text-softPrimary hover:bg-softPrimary hover:text-white p-1 rounded-full mt-4 w-full transition">
                    Berikan Ulasanmu Disini
                </button>
            </div>
        </div>
        <div class="lg:w-8/12 w-full lg:ml-3 grid lg:grid-cols-2 grid-cols-1 gap-3">
            <div class="shadow-[2px_0px_23.5px_0px_#00000025] rounded-xl px-5 py-5 flex items-center">
                <img src="{{ asset('assets/images/overview/review_1.png') }}" alt=""
                    class="rounded-full size-24">
                <div class="ml-3 flex flex-col justify-center">
                    <div class="flex">
                        <h1 class="font-semibold text-2xl">4.8</h1>
                        <div class="flex items-center">
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                        </div>
                    </div>
                    <h1 class="font-semibold text-sm">Rayasya Cahyana</h1>
                    <q class="text-[.65rem]">Tempatnya sangat nyaman dan <br>makanan disini enak - enak dan
                        murah</q>
                </div>
            </div>
            <div class="shadow-[2px_0px_23.5px_0px_#00000025] rounded-xl px-5 py-5 flex items-center">
                <img src="{{ asset('assets/images/overview/review_2.png') }}" alt=""
                    class="rounded-full size-24">
                <div class="ml-3 flex flex-col justify-center">
                    <div class="flex">
                        <h1 class="font-semibold text-2xl">4.7</h1>
                        <div class="flex items-center">
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                        </div>
                    </div>
                    <h1 class="font-semibold text-sm">Muhammad Aiman</h1>
                    <q class="text-[.65rem]">Sangat cocok saat sedang galau, asri<br>dan pemandangan sangat indah</q>
                </div>
            </div>
            <div class="shadow-[2px_0px_23.5px_0px_#00000025] rounded-xl px-5 py-5 flex items-center">
                <img src="{{ asset('assets/images/overview/review_3.png') }}" alt=""
                    class="rounded-full size-24">
                <div class="ml-3 flex flex-col justify-center">
                    <div class="flex">
                        <h1 class="font-semibold text-2xl">5.0</h1>
                        <div class="flex items-center">
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                        </div>
                    </div>
                    <h1 class="font-semibold text-sm">Rizky Asyam</h1>
                    <q class="text-[.65rem]">Vilanya sangat nyaman untuk staycation, dan pelayanan
                        sangat sangat terbaik...bestlahhh</q>
                </div>
            </div>
            <div class="shadow-[2px_0px_23.5px_0px_#00000025] rounded-xl px-5 py-5 flex items-center">
                <img src="{{ asset('assets/images/overview/review_4.jpg') }}" alt=""
                    class="rounded-full size-24">
                <div class="ml-3 flex flex-col justify-center">
                    <div class="flex">
                        <h1 class="font-semibold text-2xl">5.0</h1>
                        <div class="flex items-center">
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                            <x-heroicon-s-star class="text-yellow-500 size-5" />
                        </div>
                    </div>
                    <h1 class="font-semibold text-sm">Hendy Siswanto</h1>
                    <q class="text-[.65rem]">Selaku Bupati Jember, saya sangat bangga memiliki wisata yang
                        bisa dinikmati keindahan alamnya</q>
                </div>
            </div>
        </div>
    </div>
</div>
