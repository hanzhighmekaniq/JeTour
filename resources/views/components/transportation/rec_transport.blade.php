<div class="my-10 px-5 lg:px-14 py-10 rounded-lg shadow-[0px_0px_40px_10px_#00000024]">
    <div id="map" class="w-full h-[30rem] z-0 rounded-2xl"></div>

    <h1 class="font-losta text-3xl text-center my-7">Rekomendasi Transportasi Untuk Anda</h1>

    {{-- Gojek --}}
    <div class="px-3 lg:px-14 py-10 rounded-lg border-2 border-gray-100">
        <div class="flex">
            <img src="{{ asset('assets/images/transportation/gojek.png') }}" alt="" class="h-8 mr-5">
            <div class="bg-red-500 rounded-md justify-center items-center flex px-3 text-xs md:text-base text-white">
                <p>Paling banyak diminati</p>
            </div>
        </div>
        <div class="my-5 grid md:grid-cols-2 xl:grid-cols-3 grid-cols-1 gap-5">
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <div class="flex justify-between font-semibold text-sm mb-2">
                    <h4>GoRide Hemat</h4>
                    <div class="flex">
                        <x-heroicon-s-check-badge class="size-5 text-green-500 mr-1" />
                        <p>Rp 29.000,-</p>
                    </div>
                </div>
                <div class="flex justify-between text-xs">
                    <div class="flex items-center">
                        <p>9 - 10 Menit</p>
                        <x-heroicon-s-user class="size-4 ml-2" />1
                    </div>
                    <p class="line-through">Rp. 32.000,-</p>
                </div>
                <p class="text-xs mt-2 text-green-700">Paling Hemat di Jember</p>
            </div>
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <div class="flex justify-between font-semibold text-sm mb-2">
                    <h4>GoRide</h4>
                    <div class="flex">
                        <x-heroicon-s-check-badge class="size-5 text-green-500 mr-1" />
                        <p>Rp 32.000,-</p>
                    </div>
                </div>
                <div class="flex justify-between text-xs">
                    <div class="flex items-center">
                        <p>9 - 10 Menit</p>
                        <x-heroicon-s-user class="size-4 ml-2" />1
                    </div>
                    <p class="line-through">Rp. 32.500,-</p>
                </div>
                <p class="text-xs mt-2 text-gray-500">Teman jalan sehari-hari</p>
            </div>
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <div class="flex justify-between font-semibold text-sm mb-2">
                    <h4>GoRide Comfort</h4>
                    <div class="flex">
                        <x-heroicon-s-check-badge class="size-5 text-green-500 mr-1" />
                        <p>Rp 35.000,-</p>
                    </div>
                </div>
                <div class="flex justify-between text-xs">
                    <div class="flex items-center">
                        <p>9 - 10 Menit</p>
                        <x-heroicon-s-user class="size-4 ml-2" />1
                    </div>
                </div>
                <p class="text-xs mt-2 text-gray-500">Teman jalan sehari-hari</p>
            </div>
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <div class="flex justify-between font-semibold text-sm mb-2">
                    <h4>GoCar</h4>
                    <div class="flex">
                        <x-heroicon-s-check-badge class="size-5 text-green-500 mr-1" />
                        <p>Rp 52.500,-</p>
                    </div>
                </div>
                <div class="flex justify-between text-xs">
                    <div class="flex items-center">
                        <p>10 - 20 Menit</p>
                        <x-heroicon-s-user class="size-4 ml-2" />4
                    </div>
                    <p class="line-through">Rp. 62.500,-</p>
                </div>
                <p class="text-xs mt-2 text-gray-500">Mobil terdekat dari kamu</p>
            </div>
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <div class="flex justify-between font-semibold text-sm mb-2">
                    <h4>GoCar XL</h4>
                    <div class="flex">
                        <x-heroicon-s-check-badge class="size-5 text-green-500 mr-1" />
                        <p>Rp 52.500,-</p>
                    </div>
                </div>
                <div class="flex justify-between text-xs">
                    <div class="flex items-center">
                        <p>10 - 20 Menit</p>
                        <x-heroicon-s-user class="size-4 ml-2" />6
                    </div>
                    <p class="line-through">Rp. 62.500,-</p>
                </div>
                <p class="text-xs mt-2 text-gray-500">Mobil lebih luas, kursi lebih luas</p>
            </div>
        </div>
    </div>

    {{-- Kemenhub --}}
    <div class="mt-10 px-3 lg:px-14 py-10 rounded-lg border-2 border-gray-100">
        <div class="flex">
            <img src="{{ asset('assets/images/transportation/kemenhub.png') }}" alt=""
                class="h-auto lg:h-14 mr-5">
        </div>
        <div class="my-5 grid md:grid-cols-2 grid-cols-1 2xl:grid-cols-3 gap-5">
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <p class="text-right text-sm mb-3">Rp 15.000,-</p>
                <h1 class="text-center font-semibold text-lg">Angkutan Lin</h1>
                <div class="flex mt-5 justify-center">
                    <div class="text-center">
                        <h1 class="font-semibold">07.30 WIB</h1>
                        <p class="text-[.6rem]">Stasiun KA Jember</p>
                    </div>
                    <div class="flex items-center mx-5">
                        <hr class="w-7 border-gray-200">
                        <div class="bg-none border flex items-center border-gray-200 rounded-full p-2">
                            <p class="text-xs">45 Menit</p>
                        </div>
                        <hr class="w-7 border-gray-200">
                    </div>
                    <div class="text-center">
                        <h1 class="font-semibold">08.15 WIB</h1>
                        <p class="text-[.6rem]">Puncak Rembangan</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <p class="text-right text-sm mb-3">Rp 10.000,-</p>
                <h1 class="text-center font-semibold text-lg">Bus Jember Indah</h1>
                <div class="flex mt-5 justify-center">
                    <div class="text-center">
                        <h1 class="font-semibold">07.30 WIB</h1>
                        <p class="text-[.6rem]">Stasiun KA Jember</p>
                    </div>
                    <div class="flex items-center mx-5">
                        <hr class="w-7 border-gray-200">
                        <div class="bg-none border flex items-center border-gray-200 rounded-full p-2">
                            <p class="text-xs">45 Menit</p>
                        </div>
                        <hr class="w-7 border-gray-200">
                    </div>
                    <div class="text-center">
                        <h1 class="font-semibold">08.15 WIB</h1>
                        <p class="text-[.6rem]">Puncak Rembangan</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <p class="text-right text-sm mb-3">Rp 15.000,-</p>
                <h1 class="text-center font-semibold text-lg">Angkutan Lin</h1>
                <div class="flex mt-5 justify-center">
                    <div class="text-center">
                        <h1 class="font-semibold">09.30 WIB</h1>
                        <p class="text-[.6rem]">Stasiun KA Jember</p>
                    </div>
                    <div class="flex items-center mx-5">
                        <hr class="w-7 border-gray-200">
                        <div class="bg-none border flex items-center border-gray-200 rounded-full p-2">
                            <p class="text-xs">45 Menit</p>
                        </div>
                        <hr class="w-7 border-gray-200">
                    </div>
                    <div class="text-center">
                        <h1 class="font-semibold">10.15 WIB</h1>
                        <p class="text-[.6rem]">Puncak Rembangan</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <p class="text-right text-sm mb-3">Rp 15.000,-</p>
                <h1 class="text-center font-semibold text-lg">Angkutan Lin</h1>
                <div class="flex mt-5 justify-center">
                    <div class="text-center">
                        <h1 class="font-semibold">16.30 WIB</h1>
                        <p class="text-[.6rem]">Stasiun KA Jember</p>
                    </div>
                    <div class="flex items-center mx-5">
                        <hr class="w-7 border-gray-200">
                        <div class="bg-none border flex items-center border-gray-200 rounded-full p-2">
                            <p class="text-xs">45 Menit</p>
                        </div>
                        <hr class="w-7 border-gray-200">
                    </div>
                    <div class="text-center">
                        <h1 class="font-semibold">17.15 WIB</h1>
                        <p class="text-[.6rem]">Puncak Rembangan</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <p class="text-right text-sm mb-3">Rp 10.000,-</p>
                <h1 class="text-center font-semibold text-lg">Bus Jember Indah</h1>
                <div class="flex mt-5 justify-center">
                    <div class="text-center">
                        <h1 class="font-semibold">14.30 WIB</h1>
                        <p class="text-[.6rem]">Stasiun KA Jember</p>
                    </div>
                    <div class="flex items-center mx-5">
                        <hr class="w-7 border-gray-200">
                        <div class="bg-none border flex items-center border-gray-200 rounded-full p-2">
                            <p class="text-xs">45 Menit</p>
                        </div>
                        <hr class="w-7 border-gray-200">
                    </div>
                    <div class="text-center">
                        <h1 class="font-semibold">15.15 WIB</h1>
                        <p class="text-[.6rem]">Puncak Rembangan</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <p class="text-right text-sm mb-3">Rp 15.000,-</p>
                <h1 class="text-center font-semibold text-lg">Angkutan Lin</h1>
                <div class="flex mt-5 justify-center">
                    <div class="text-center">
                        <h1 class="font-semibold">13.00 WIB</h1>
                        <p class="text-[.6rem]">Stasiun KA Jember</p>
                    </div>
                    <div class="flex items-center mx-5">
                        <hr class="w-7 border-gray-200">
                        <div class="bg-none border flex items-center border-gray-200 rounded-full p-2">
                            <p class="text-xs">45 Menit</p>
                        </div>
                        <hr class="w-7 border-gray-200">
                    </div>
                    <div class="text-center">
                        <h1 class="font-semibold">13.45 WIB</h1>
                        <p class="text-[.6rem]">Puncak Rembangan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Grab --}}
    <div class="mt-10 px-3 md:px-6 lg:px-14 py-10 rounded-lg border-2 border-gray-100">
        <div class="flex">
            <img src="{{ asset('assets/images/transportation/grab.png') }}" alt="" class="h-8 mr-5">
        </div>
        <div class="my-5 grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-5">
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <p class="font-semibold">GrabBike</p>
                        <x-heroicon-s-user class="size-4 ml-2 text-gray-400" />
                        <p class="text-gray-400">1</p>
                    </div>
                    <p class="font-semibold">Rp. 34.000,-</p>
                </div>
                <p class="text-xs mt-1">9 - 10 Menit</p>
            </div>
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <p class="font-semibold">GrabBike</p>
                        <x-heroicon-s-user class="size-4 ml-2 text-gray-400" />
                        <p class="text-gray-400">1</p>
                    </div>
                    <p class="font-semibold">Rp. 34.000,-</p>
                </div>
                <p class="text-xs mt-1">9 - 10 Menit</p>
            </div>
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <p class="font-semibold">GrabBike</p>
                        <x-heroicon-s-user class="size-4 ml-2 text-gray-400" />
                        <p class="text-gray-400">1</p>
                    </div>
                    <p class="font-semibold">Rp. 34.000,-</p>
                </div>
                <p class="text-xs mt-1">9 - 10 Menit</p>
            </div>
            <div class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5">
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <p class="font-semibold">GrabBike</p>
                        <x-heroicon-s-user class="size-4 ml-2 text-gray-400" />
                        <p class="text-gray-400">1</p>
                    </div>
                    <p class="font-semibold">Rp. 34.000,-</p>
                </div>
                <p class="text-xs mt-1">9 - 10 Menit</p>
            </div>
        </div>
    </div>
</div>
