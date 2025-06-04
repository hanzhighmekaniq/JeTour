<div class="my-10">
    <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 my-5">
        <div>
            <p class="flex items-center text-xs mb-5"><x-heroicon-o-map-pin
                    class="text-black size-6" />{{ $destinations->location }}</p>
            <p>{{ $destinations->description }}</p>
            <h4 class="font-semibold text-lg mt-5 mb-3">Fasilitas</h4>
            <div class="flex flex-wrap gap-5">
                @foreach ($facilities as $item)
                    <div class="bg-gradient-to-r from-softPrimary to-primary text-white p-3 rounded-lg">
                        <p>{{ trim($item) }}</p>
                    </div>
                @endforeach
            </div>

        </div>
        @php
            $visibleImages = array_slice($multiple ?? [], 0, 3);
            $hiddenImages = array_slice($multiple ?? [], 3);
            $hasImages = !empty($multiple);
        @endphp

        <div>
            @if ($hasImages)
                {{-- 3 gambar pertama --}}
                @foreach ($visibleImages as $img)
                    <a href="{{ asset($img) }}" data-lightbox="gallery">
                        <img src="{{ asset($img) }}" alt="Gallery image" class="mb-3 rounded-xl" />
                    </a>
                @endforeach

                @if (count($hiddenImages) > 0)
                    <div class="relative inline-block">
                        <a href="{{ asset($hiddenImages[0]) }}" data-lightbox="gallery">
                            <img src="{{ asset($hiddenImages[0]) }}" alt="Gallery image"
                                class="rounded-xl opacity-70" />
                        </a>
                        <div
                            class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center rounded-xl cursor-pointer text-white text-2xl font-bold">
                            +{{ count($hiddenImages) }}
                        </div>
                    </div>

                    {{-- Sembunyikan sisanya untuk lightbox --}}
                    @foreach ($hiddenImages as $img)
                        <a href="{{ asset($img) }}" data-lightbox="gallery" class="hidden"></a>
                    @endforeach
                @endif
            @else
                {{-- Jika tidak ada gambar, tampilkan gambar default/fallback --}}
                <a href="{{ asset('assets/images/overview/gallery_overview_3.jpg') }}" data-lightbox="gallery">
                    <img src="{{ asset('assets/images/overview/gallery_overview_3.jpg') }}" alt="Default image"
                        class="mb-3 rounded-xl" />
                </a>
            @endif
        </div>
    </div>
    {{-- Rating Total --}}
    <div class="flex items-center mb-5 px-10">
        <h1 class="font-semibold text-5xl">
            {{ number_format($averageRating ?? 0, 1) }}
        </h1>
        <div class="flex items-center ml-3">
            @for ($i = 1; $i <= 5; $i++)
                <x-heroicon-s-star
                    class="size-6 {{ $i <= round($averageRating ?? 0) ? 'text-yellow-500' : 'text-gray-300' }}" />
            @endfor
        </div>
    </div>

    {{-- Daftar Komentar --}}
    <div class="lg:w-8/12 w-full lg:ml-3 grid lg:grid-cols-2 grid-cols-1 gap-4">
        @forelse ($comments as $comment)
            <div class="shadow-[2px_0px_23.5px_0px_#00000025] rounded-xl px-5 py-5 flex items-center bg-white">
                <img src="{{ url('assets/images/overview/review_1.png') }}" alt="Foto Profil"
                    class="rounded-full w-20 h-20 object-cover">
                <div class="ml-4 flex flex-col justify-center">
                    <div class="flex items-center mb-1">
                        <h1 class="font-semibold text-xl mr-2">{{ $comment->rating }}</h1>
                        <div class="flex items-center">
                            @for ($i = 1; $i <= 5; $i++)
                                <x-heroicon-s-star
                                    class="size-5 {{ $i <= $comment->rating ? 'text-yellow-500' : 'text-gray-300' }}" />
                            @endfor
                        </div>
                    </div>
                    <h1 class="font-semibold text-sm text-gray-800">{{ $comment->user->name ?? 'Anonim' }}</h1>
                    <p class="text-xs text-gray-600 mt-1 leading-snug italic">"{{ $comment->comment }}"</p>
                </div>
            </div>
        @empty
            <p class="col-span-2 text-center text-gray-500">Belum ada komentar.</p>
        @endforelse
    </div>


</div>
