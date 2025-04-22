<section class="bg-white shadow-lg mt-5 rounded-2xl overflow-hidden">
    <div class="bg-cover bg-center h-screen"
        style="background-image: url('{{ asset('assets/images/bg-hero-pages.png') }}');">
        <div
            class="flex flex-col justify-center items-center md:justify-center lg:justify-end md:items-start p-10 md:px-28 text-white bg-black bg-opacity-30 w-full h-full ">
            <h1 class="text-5xl md:text-8xl font-losta mt-14 md:mt-0 text-center md:text-left">
                <span class="block">Puncak</span>
                <span class="block">Rembangan.</span>
            </h1>
            <div class="grid grid-cols-1 gap-y-5 lg:flex md:space-x-3 md:w-full mt-7">
                <a href="/overview"
                    class="flex items-center justify-center md:text-lg text-white px-5 md:px-7 py-3 rounded-full h-full w-full bg-gray-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100 {{ Request::is('overview') ? 'active' : 'hover:bg-softPrimary hover:text-white hover:border-softPrimary' }}"><x-heroicon-o-globe-alt
                        class="size-5 mr-2" />Overview</a>
                <a href="/price"
                    class="flex items-center justify-center md:text-lg text-white px-5 md:px-7 py-3 rounded-full h-full w-full bg-gray-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100 {{ Request::is('price') ? 'active' : 'hover:bg-softPrimary hover:text-white hover:border-softPrimary' }}"><x-heroicon-o-currency-dollar
                        class="size-5 mr-2" />Price</a>
                <a href="/location"
                    class="flex items-center justify-center md:text-lg text-white px-5 md:px-7 py-3 rounded-full h-full w-full bg-gray-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100 {{ Request::is('location') ? 'active' : 'hover:bg-softPrimary hover:text-white hover:border-softPrimary' }}"><x-heroicon-o-map-pin
                        class="size-5 mr-2" />Location</a>
                <a href="/transportation"
                    class="flex items-center justify-center md:text-lg text-white px-5 md:px-7 py-3 rounded-full h-full w-full bg-gray-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100 {{ Request::is('transportation') ? 'active' : 'hover:bg-softPrimary hover:text-white hover:border-softPrimary' }}"><x-heroicon-o-paper-airplane
                        class="size-5 mr-2" />Transportation</a>
                <a href="/food"
                    class="flex items-center justify-center md:text-lg text-white px-5 md:px-7 py-3 rounded-full h-full w-full bg-gray-400 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-10 border border-gray-100 {{ Request::is('food') ? 'active' : 'hover:bg-softPrimary hover:text-white hover:border-softPrimary' }}"><x-heroicon-o-building-storefront
                        class="size-5 mr-2" />Food</a>
            </div>
        </div>
    </div>
</section>
