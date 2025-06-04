<x-layout>
    <div class="w-full p-4 sm:p-6 bg-gray-50 min-h-screen">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 font-poppins">
            <!-- Card 1 -->
            <div
                class="  mb-4 rounded-2xl shadow-lg bg-gradient-to-br from-red-300 to-red-400 p-6 flex flex-col justify-between min-h-[150px]">
                <div class="flex justify-between items-center">
                    <div>
                        <div class="text-lg font-semibold text-white/90">Total Wisata</div>
                        <div class="text-4xl font-bold text-white mt-2">{{ $totalWisata ?? 0 }}</div>
                    </div>
                    <div class="text-5xl text-white/60">
                        <i class="fa-solid fa-mountain-sun"></i>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div
                class="mb-4 rounded-2xl shadow-lg bg-gradient-to-br from-green-300 to-green-400 p-6 flex flex-col justify-between min-h-[150px]">
                <div class="flex justify-between items-center">
                    <div>
                        <div class="text-lg font-semibold text-white/90">Total Pengunjung</div>
                        <div class="text-4xl font-bold text-white mt-2">{{ $totalPengunjung ?? 0 }}</div>
                    </div>
                    <div class="text-5xl text-white/60">
                        <i class="fas fa-plane-arrival"></i>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div
                class="mb-4 rounded-2xl shadow-lg bg-gradient-to-br from-blue-300 to-blue-400 p-6 flex flex-col justify-between min-h-[150px]">
                <div class="flex justify-between items-center">
                    <div>
                        <div class="text-lg font-semibold text-white/90">Total Kuliner</div>
                        <div class="text-4xl font-bold text-white mt-2">{{ $totalKuliner ?? 0 }}</div>
                    </div>
                    <div class="text-5xl text-white/60">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-md p-4 mt-4 shadow-lg">
            <p class="text-xl text-gray-600 mb-4 font-poppins">Tempat populer wisata</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- card ye-->
                @forelse ($popularDestination as $wisata)
                    <div class="rounded-xl overflow-hidden">
                        <img src="https://storage.googleapis.com/a1aa/image/ae85c8a6-321d-4528-bcb5-1f825a6f6b20.jpg"
                            alt="Pantai Papuma" class="w-full h-24 sm:h-28 object-cover rounded-t-xl" />
                        <div class="bg-[#e8f0fe] rounded-b-xl px-3 py-2">
                            <h3 class="font-semibold text-black text-sm leading-tight">{{ $wisata->name }}</h3>
                            <p class="text-xs text-gray-500 flex items-center space-x-1">
                                <i class="fas fa-map-marker-alt text-xs"></i>
                                <span>{{ $wisata->location }}</span>
                            </p>
                        </div>
                    </div>
                @empty
                @endforelse

                {{-- end card --}}
            </div>
        </div>
        <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg mt-8">
            <div class="p-6 text-gray-900">
                <p class="text-xl text-gray-600 mb-4 font-poppins">Aktivitas terbaru</p>

                <!-- Table -->
                <div class="overflow-x-auto bg-white rounded-lg w-full">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-teal-600 text-white">
                            <tr>
                                <th scope="col" class="py-3 px-4 sm:px-6 text-left">
                                    Nama Pengunjung
                                </th>
                                <th scope="col" class="py-3 px-4 sm:px-6 text-left">
                                    Nama Tiket
                                </th>
                                <th scope="col" class="py-3 px-4 sm:px-6 text-left">
                                    Lokasi
                                </th>
                                <th scope="col" class="py-3 px-4 sm:px-6 text-left">
                                    Total Harga
                                </th>
                                <th scope="col" class="py-3 px-4 sm:px-6 text-left text-center">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            {{-- @foreach ($penginapans as $penginapan) --}}
                            <tr class="bg-white hover:bg-gray-100 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">fgfdgdfg</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">tgyerter</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">rtgert</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Rp
                                        retret</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                                    <div
                                        class="text-white bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-400 font-medium rounded text-sm px-3 py-1.5 focus:outline-none">
                                        <i class="fa-solid fa-circle-check"></i> Selesai
                                    </div>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-4">
                    {{-- {{ $penginapans->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</x-layout>
