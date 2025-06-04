{{-- @php
    use App\Models\Destination;

    $destination = Destination::where('name]', $name)->first();
@endphp --}}

<section class="bg-white shadow-lg mt-5 rounded-2xl overflow-hidden">
    <div class="bg-cover bg-center h-screen"
        style="background-image: url('{{ asset('storage/' . $destination->image) }}');">

        <div
            class="flex flex-col pt-20 h-screen  lg:pt-96 justify-center items-center md:justify-center lg:justify-end md:items-start p-10 md:px-28 text-white bg-black bg-opacity-30 w-full ">
            <div class="flex justify-center w-full">
                <div class="container">


                    <h1 class="text-5xl md:text-8xl font-losta mt-14 md:mt-0 text-center md:text-left">
                        {{ $destination->name ?? 'Nama Tempat Default' }}
                    </h1>


                    <div class="w-full mt-7">
                        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3 w-full">
                            <a href="{{ route('user.overview', ['name' => $destination->name]) }}"
                                class="flex items-center justify-center text-sm sm:text-base text-white px-5 py-3 rounded-full text-center bg-gray-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100 transition-all duration-300 {{ Request::is('overview/*') ? 'active' : 'hover:bg-softPrimary hover:text-white hover:border-softPrimary' }}">
                                <x-heroicon-o-globe-alt class="size-5 mr-2" />Overview
                            </a>

                            <a href="{{ route('user.ticketing', ['name' => $destination->name]) }}"
                                class="flex items-center justify-center text-sm sm:text-base text-white px-5 py-3 rounded-full text-center bg-gray-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100 transition-all duration-300 {{ Request::is('price/*') ? 'active' : 'hover:bg-softPrimary hover:text-white hover:border-softPrimary' }}">
                                <x-heroicon-o-currency-dollar class="size-5 mr-2" />Price
                            </a>

                            <a href="{{ route('user.location', ['name' => $destination->name]) }}"
                                class="flex items-center justify-center text-sm sm:text-base text-white px-5 py-3 rounded-full text-center bg-gray-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100 transition-all duration-300 {{ Request::is('location/*') ? 'active' : 'hover:bg-softPrimary hover:text-white hover:border-softPrimary' }}">
                                <x-heroicon-o-map-pin class="size-5 mr-2" />Location
                            </a>

                            <a href="{{ route('user.transportation', ['name' => $destination->name]) }}"
                                class="flex items-center justify-center text-sm sm:text-base text-white px-5 py-3 rounded-full text-center bg-gray-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100 transition-all duration-300 {{ Request::is('transportation/*') ? 'active' : 'hover:bg-softPrimary hover:text-white hover:border-softPrimary' }}">
                                <x-heroicon-o-paper-airplane class="size-5 mr-2" />Transportation
                            </a>

                            <a href="{{ route('user.food', ['name' => $destination->name]) }}"
                                class="flex items-center justify-center text-sm sm:text-base text-white px-5 py-3 rounded-full text-center bg-gray-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100 transition-all duration-300 {{ Request::is('food/*') ? 'active' : 'hover:bg-softPrimary hover:text-white hover:border-softPrimary' }}">
                                <x-heroicon-o-building-storefront class="size-5 mr-2" />Food
                            </a>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
