<div class="lg:mt-12 mt-6">
    <p class="flex items-center font-medium lg:mb-16 mb-6"><x-heroicon-o-map-pin
            class="text-black size-10" />{{ $destination->location }}</p>
    <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 h-80">
        <div class="flex  flex-col">
            <h1 class="font-losta text-5xl mb-5">Lokasi Wisata {{ $destination->name }}</h1>
            <h5>{{ $destination->description }}</h5>
        </div>
        <div class="flex gap-4 h-60 lg:h-full">
            <div id="map" class="w-full h-full rounded-2xl z-0"></div>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const map = L.map('map').setView([{{ $destination->latitude }}, {{ $destination->longitude }}], 15);

                    // Tambahkan layer OpenStreetMap
                    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                        attribution: '&copy; OpenStreetMap contributors'
                    }).addTo(map);

                    // Tambahkan marker
                    L.marker([{{ $destination->latitude }}, {{ $destination->longitude }}])
                        .addTo(map)
                        .bindPopup("Lokasi Jember")
                        .openPopup();
                });
            </script>
        </div>
    </div>
</div>
