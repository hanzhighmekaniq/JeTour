<x-layout>
    <div class="w-full p-4 sm:p-6 bg-gray-50 min-h-screen">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <!-- Card 1 -->
            <div class="rounded-2xl shadow-lg bg-gradient-to-br from-red-300 to-red-400 p-6 flex flex-col justify-between min-h-[150px]">
                <div class="flex justify-between items-center">
                    <div>
                        <div class="text-lg font-semibold text-white/90">Total Wisata</div>
                        <div class="text-4xl font-bold text-white mt-2">{{ $totalWisata ?? 0 }}</div>
                    </div>
                    <div class="text-5xl text-white/60">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-12 h-12"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A2 2 0 013 15.382V6.618a2 2 0 011.553-1.894L9 2m0 0l5.447 2.724A2 2 0 0115 6.618v8.764a2 2 0 01-1.553 1.894L9 20zm0 0v-8" /></svg>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="rounded-2xl shadow-lg bg-gradient-to-br from-green-300 to-green-400 p-6 flex flex-col justify-between min-h-[150px]">
                <div class="flex justify-between items-center">
                    <div>
                        <div class="text-lg font-semibold text-white/90">Total Pengunjung</div>
                        <div class="text-4xl font-bold text-white mt-2">{{ $totalPengunjung ?? 0 }}</div>
                    </div>
                    <div class="text-5xl text-white/60">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-12 h-12"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6 5.87v-2a4 4 0 00-3-3.87m6 5.87v-2a4 4 0 00-3-3.87M12 12a4 4 0 100-8 4 4 0 000 8z" /></svg>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="rounded-2xl shadow-lg bg-gradient-to-br from-blue-300 to-blue-400 p-6 flex flex-col justify-between min-h-[150px]">
                <div class="flex justify-between items-center">
                    <div>
                        <div class="text-lg font-semibold text-white/90">Pengunjung Aktif</div>
                        <div class="text-4xl font-bold text-white mt-2">{{ $pengunjungAktif ?? 0 }}</div>
                    </div>
                    <div class="text-5xl text-white/60">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-12 h-12"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 01-8 0m8 0a4 4 0 00-8 0m8 0V5a4 4 0 00-8 0v2m8 0v2a4 4 0 01-8 0V7m8 0a4 4 0 00-8 0" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v7m0 0H9m3 0h3" /></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
