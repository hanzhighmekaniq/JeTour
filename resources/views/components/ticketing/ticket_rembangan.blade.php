<div class="container mx-auto mt-10 mb-10">
    <div class="bg-white p-10 rounded-lg shadow-md">
        <h2 class="text-4xl font-semibold text-left mb-6">Tiket Masuk <span class="text-green-500 font-losta">Puncak
                Rembangan</span></h2>

        <!-- Date Picker -->
        <div class="mb-4">
            <label for="date-picker" class="block font-semibold">Pilih Tanggal:</label>
            <input type="date" id="date-picker" class="border border-gray-300 rounded-lg p-2 mt-1">
        </div>

        <!-- Ticket Items -->
        <div class="space-y-5 mt-5">
            <!-- Ticket 1 -->
            <div class="bg-white p-4 rounded-lg shadow-[2px_0px_10px_0px_#00000025] flex flex-col justify-between">
                <div class="flex-grow">
                    <h3 class="font-semibold text-xl md:text-3xl">Tiket Orang Masuk Puncak Rembangan (Reguler)</h3>
                    <p class="text-gray-600 flex items-center my-5">
                        <x-heroicon-s-clock class="w-5 h-5 mr-2" />
                        28 September 2024, 05.00 - 00.00 WIB
                    </p>

                    <!-- Syarat dan Ketentuan -->
                    <h4 class="font-medium">Syarat dan Ketentuan</h4>
                    <ul class="text-sm text-gray-500">
                        <li>1. E - ticket hanya berlaku pada tanggal kunjungan yang dipilih saat pembelian.</li>
                        <li>2. Jam operasional Puncak Rembangan . . .</li>
                        <div id="more-terms-1" class="hidden"> <!-- Elemen tersembunyi -->
                            <li>3. Menunjukkan STNK Motor /Mobil</li>
                            <li>4. Dilarang Membawa Senjata Tajam</li>
                            <li>5. Parkir sesuai dengan tempat yang diberikan petugas</li>
                            <li>6. Karcis tidak boleh hilang, jika hilang dikenakan denda Rp. 25.000</li>
                            <li>7. Barang Pribadi dijaga dengan baik, kehilangan setelah meninggalkan wisata bukan
                                tanggung jawab pengelola</li>
                        </div>
                    </ul>
                    <a href="javascript:void(0)" id="load-more-btn-1" class="text-blue-600 hover:underline"
                        onclick="toggleTerms('1')">Load More...</a>
                </div>

                <!-- Harga di bagian bawah dengan ukuran besar -->
                <div class="text-green-600 font-semibold text-3xl mt-4 text-right">
                    Rp. 10.000
                </div>
            </div>

            <!-- Ticket 2 -->
            <div class="bg-white p-4 rounded-lg shadow-[2px_0px_10px_0px_#00000025] flex flex-col justify-between">
                <div class="flex-grow">
                    <h3 class="font-semibold text-xl md:text-3xl">Camping Ground</h3>
                    <p class="text-gray-600 flex items-center">
                        <x-heroicon-s-clock class="w-5 h-5 mr-2 my-5" />
                        28 September 2024, 05.00 - 00.00 WIB
                    </p>

                    <!-- Syarat dan Ketentuan -->
                    <h4 class="font-medium">Syarat dan Ketentuan</h4>
                    <ul class="text-sm text-gray-500">
                        <li>1. Tenda disediakan oleh pengunjung.</li>
                        <li>2. Tidak diperkenankan membuat api unggun tanpa izin.</li>
                        <div id="more-terms-2" class="hidden"> <!-- Elemen tersembunyi -->
                            <li>3. Area camping dijaga kebersihannya, sampah dibuang pada tempatnya.</li>
                            <li>4. Pengunjung bertanggung jawab atas barang bawaan pribadi.</li>
                        </div>
                    </ul>
                    <a href="javascript:void(0)" id="load-more-btn-2" class="text-blue-600 hover:underline"
                        onclick="toggleTerms('2')">Load More...</a>
                </div>

                <!-- Harga di bagian bawah dengan ukuran besar -->
                <div class="text-green-600 font-semibold text-3xl mt-4 text-right">
                    Rp. 300.000
                </div>
            </div>

            <!-- Ticket 3 -->
            <div class="bg-white p-4 rounded-lg shadow-[2px_0px_10px_0px_#00000025] flex flex-col justify-between">
                <div class="flex-grow">
                    <h3 class="font-semibold text-xl md:text-3xl">Tiket Parkir Kendaraan Mobil</h3>
                    <p class="text-gray-600 flex items-center">
                        <x-heroicon-s-clock class="w-5 h-5 mr-2 my-5" />
                        28 September 2024, 05.00 - 00.00 WIB
                    </p>

                    <!-- Syarat dan Ketentuan -->
                    <h4 class="font-medium">Syarat dan Ketentuan</h4>
                    <ul class="text-sm text-gray-500">
                        <li>1. Karcis harus dibawa saat meninggalkan area parkir.</li>
                        <div id="more-terms-3" class="hidden"> <!-- Elemen tersembunyi -->
                            <li>2. Kendaraan diparkir sesuai dengan arahan petugas.</li>
                        </div>
                    </ul>
                    <a href="javascript:void(0)" id="load-more-btn-3" class="text-blue-600 hover:underline"
                        onclick="toggleTerms('3')">Load More...</a>
                </div>

                <!-- Harga di bagian bawah dengan ukuran besar -->
                <div class="text-green-600 font-semibold text-3xl mt-4 text-right">
                    Rp. 2.000
                </div>
            </div>

            <!-- Ticket 4 -->
            <div class="bg-white p-4 rounded-lg shadow-[2px_0px_10px_0px_#00000025] flex flex-col justify-between">
                <div class="flex-grow">
                    <h3 class="font-semibold text-xl md:text-3xl">Tiket Parkir Kendaraan Motor</h3>
                    <p class="text-gray-600 flex items-center">
                        <x-heroicon-s-clock class="w-5 h-5 mr-2 my-5" />
                        28 September 2024, 05.00 - 00.00 WIB
                    </p>

                    <!-- Syarat dan Ketentuan -->
                    <h4 class="font-medium">Syarat dan Ketentuan</h4>
                    <ul class="text-sm text-gray-500">
                        <li>1. Menunjukkan STNK Motor.</li>
                        <li>2. Dilarang membuang sampah sembarangan di area parkir.</li>
                        <div id="more-terms-4" class="hidden"> <!-- Elemen tersembunyi -->
                            <li>3. Parkir sesuai dengan tempat yang diberikan petugas.</li>
                        </div>
                    </ul>
                    <a href="javascript:void(0)" id="load-more-btn-4" class="text-blue-600 hover:underline"
                        onclick="toggleTerms('4')">Load More...</a>
                </div>

                <!-- Harga di bagian bawah dengan ukuran besar -->
                <div class="text-green-600 font-semibold text-3xl mt-4 text-right">
                    Rp. 1.000
                </div>
            </div>

            <!-- Ticket 5 -->
            <div class="bg-white p-4 rounded-lg shadow-md flex flex-col justify-between">
                <div class="flex-grow">
                    <h3 class="font-semibold text-xl md:text-3xl">Panahan</h3>
                    <p class="text-gray-600 flex items-center">
                        <x-heroicon-s-clock class="w-5 h-5 mr-2 my-5" />
                        28 September 2024, 05.00 - 00.00 WIB
                    </p>

                    <!-- Syarat dan Ketentuan -->
                    <h4 class="font-medium">Syarat dan Ketentuan</h4>
                    <ul class="text-sm text-gray-500">
                        <li>1. Panahan disediakan oleh pengelola.</li>
                        <div id="more-terms-5" class="hidden"> <!-- Elemen tersembunyi -->
                            <li>2. Pengunjung dilarang menembakkan panah ke arah yang tidak ditentukan.</li>
                        </div>
                    </ul>
                    <a href="javascript:void(0)" id="load-more-btn-5" class="text-blue-600 hover:underline"
                        onclick="toggleTerms('5')">Load More...</a>
                </div>

                <!-- Harga di bagian bawah dengan ukuran besar -->
                <div class="text-green-600 font-semibold text-3xl mt-4 text-right">
                    Rp. 10.000
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleTerms(ticketNumber) {
        var moreText = document.getElementById("more-terms-" + ticketNumber);
        var btnText = document.getElementById("load-more-btn-" + ticketNumber);

        if (moreText.classList.contains("hidden")) {
            moreText.classList.remove("hidden");
            btnText.innerHTML = "Show Less...";
        } else {
            moreText.classList.add("hidden");
            btnText.innerHTML = "Load More...";
        }
    }
</script>
