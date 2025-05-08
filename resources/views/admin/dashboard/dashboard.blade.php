<x-layout>



    <div class="p-6 bg-white  min-h-screen">
        <h1 class="text-3xl font-bold text-gray-900  mb-6">Dashboard</h1>

        <!-- Statistik Kartu -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            <div class="p-4 bg-blue-100  rounded-lg shadow">
                <h2 class="text-gray-700  text-sm">Total Wisata</h2>
                <p class="text-2xl font-semibold text-blue-800 ">128</p>
            </div>
            {{-- <div class="p-4 bg-green-100  rounded-lg shadow">
                        <h2 class="text-gray-700  text-sm">Transaksi Hari Ini</h2>
                        <p class="text-2xl font-semibold text-green-800 ">52</p>
                    </div> --}}
            <div class="p-4 bg-yellow-100  rounded-lg shadow">
                <h2 class="text-gray-700  text-sm">Tiket Terjual Bulan Ini</h2>
                <p class="text-2xl font-semibold text-yellow-800 ">1,340</p>
            </div>
            <div class="p-4 bg-red-100  rounded-lg shadow">
                <h2 class="text-gray-700  text-sm">User Aktif</h2>
                <p class="text-2xl font-semibold text-red-800 ">478</p>
            </div>
        </div>

        {{-- <!-- Grafik / Chart Dummy -->
                <div class="bg-white  rounded-lg shadow p-6 mb-6">
                    <h3 class="text-lg font-semibold text-gray-900  mb-4">Statistik Penjualan Tiket</h3>
                    <div class="h-64 bg-gray-100  flex items-center justify-center rounded">
                        <span class="text-gray-400 ">[Chart Placeholder]</span>
                    </div>
                </div> --}}

        <!-- Aktivitas Terbaru -->
        <div class="bg-white  rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900  mb-4">Aktivitas Terbaru</h3>
            <ul class="divide-y divide-gray-200 ">
                <li class="py-3 flex justify-between">
                    <span class="text-gray-700 ">User <strong>johndoe</strong> membeli tiket ke
                        <strong>Gunung Bromo</strong></span>
                    <span class="text-sm text-gray-400">2 jam yang lalu</span>
                </li>
                <li class="py-3 flex justify-between">
                    <span class="text-gray-700 ">Transaksi baru sebesar <strong>Rp
                            250.000</strong></span>
                    <span class="text-sm text-gray-400">5 jam yang lalu</span>
                </li>
                <li class="py-3 flex justify-between">
                    <span class="text-gray-700 ">Wisata <strong>Pantai Parangtritis</strong>
                        ditambahkan</span>
                    <span class="text-sm text-gray-400">Kemarin</span>
                </li>
            </ul>
        </div>
    </div>


</x-layout>
