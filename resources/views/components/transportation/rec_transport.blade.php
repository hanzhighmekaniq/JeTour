<div class="my-10 px-5 lg:px-14 py-10 rounded-lg shadow-[0_0_40px_10px_#00000024] bg-white">
    <h1 class="font-bold text-3xl text-center mb-10">
        Rekomendasi Transportasi di {{ $destination->name }}
    </h1>

    @if ($transportation->count())
        <div class="grid md:grid-cols-2 xl:grid-cols-3 grid-cols-1 gap-6">
            @foreach ($transportation as $item)
                <div
                    class="bg-[#F2FFFD] border-2 border-[#C5E0DC] rounded-lg p-5 hover:shadow-lg transition duration-300">
                    <div class="flex justify-between items-center font-semibold text-sm mb-2">
                        <h4>{{ $item->name }}</h4>
                        <p class="text-green-600 font-bold">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                    </div>
                    <div class="text-xs text-gray-700 mb-2">
                        <p><strong>Jam Operasional:</strong>
                            {{ \Carbon\Carbon::parse($item->operational)->format('H:i') }} -
                            {{ \Carbon\Carbon::parse($item->close)->format('H:i') }}
                        </p>
                    </div>
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                        class="w-full h-40 object-cover rounded-lg mt-2">
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-8">
            {{ $transportation->links() }}
        </div>
    @else
        <p class="text-center text-gray-500">Belum ada data transportasi tersedia.</p>
    @endif
</div>
