<div class="mt-14">
    <div>
        <div class="flex justify-between my-5">
            <h1 class="text-primary text-2xl font-semibold">Wisata Cakep Rekomendasi Kita</h1>
            <a href="#" class="text-softPrimary">Lihat Semua</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 mb-36">
            @forelse ($destinations as $destinaion)
                <div>
                    <a href="{{ route('user.overview', $destinaion->name) }}">
                        <div class="h-96">
                            <img src="{{ asset('storage/' . $destinaion->image) }}" alt=""
                                class="object-cover h-full w-fit rounded-xl">
                            <h3 class="font-losta text-xl font-semibold text-center my-3">{{ $destinaion->name }}</h3>
                            <button
                                class="bg-gradient-to-br from-accent to-primary text-white px-5 py-3 rounded-full w-full">Selengkapnya</button>
                        </div>
                    </a>
                </div>
            @empty
                <div>
                    <a href="/overview">
                        <div class="h-96">
                            <img src="" alt="" class="object-cover h-full w-fit rounded-xl">
                            <h3 class="font-losta text-xl font-semibold text-center my-3">Pantain Papuma</h3>
                            <button
                                class="bg-gradient-to-br from-accent to-primary text-white px-5 py-3 rounded-full w-full">Selengkapnya</button>
                        </div>
                    </a>
                </div>
            @endforelse
        </div>
    </div>
</div>
