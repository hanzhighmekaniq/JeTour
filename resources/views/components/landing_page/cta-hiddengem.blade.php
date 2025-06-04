@forelse ($jelajah as $jelajahi)
    <section class="bg-[#F0FFFA] h-[550px] flex items-center mt-20 gap-12 mb-20">
        <!-- Left Side: Image -->
        <div class="hidden md:block w-1/2 h-full">
            <img src="{{ asset('storage/' . $jelajahi->image) }}" alt="Pantai Nanggelan"
                class="object-cover h-full w-full rounded-l-2xl">
        </div>

        <!-- Right Side: Text and Button -->
        <div class="w-full md:w-1/2 p-12 flex flex-col justify-center">
            <h1 class="text-6xl font-medium text-black mb-4 font-losta">
                <span class="block mb-2">
                    Jelajahi Keindahan
                </span>
                <span class="block mb-2">
                    Tersembunyi Di
                </span>
                <span class="block mb-2">
                    {{ $jelajahi->name }}
                </span>
            </h1>
            <p class="text-lg text-gray-600 mb-6">
                <span class="block">
                    {{ $jelajahi->description }}
                </span>
            </p>
            <a href="{{ route('user.overview', $jelajahi->name) }}"
                class="text-xl font-medium text-white px-8 py-3 rounded-full w-fit self-start bg-gradient-to-r from-softPrimary to-primary hover:to-softPrimary">
                Jelajahi Sekarang
            </a>
        </div>
    </section>

@empty
@endforelse
