<nav class="lg:container bg-white shadow-md lg:mt-10 lg:mx-auto lg:rounded-full px-10 lg:pl-10 lg:pr-4  top-0 left-0 right-0 z-20 fixed">
    <div class=" mx-auto px-0 py-3 flex justify-between items-center">
        <div class="logo">
            <a href="/" class="flex items-center">
                <img src="{{ asset('assets/images/logo-nav.png') }}" alt="Logo" class="h-10 w-auto">
            </a>
        </div>
        <div class="block lg:hidden">
            <button id="hamburger" class="text-primary focus:outline-none">
                <x-heroicon-s-bars-3 class="size-10" />
            </button>
        </div>
        <!-- Menu Desktop -->
        <div class="hidden lg:justify-center lg:flex space-x-8 items-center">
            <ul class="flex space-x-8">
                <li>
                    <a href="{{ Request::is('/') ? '#hero' : url('/') }}"
                        class="nav-link text-primary text-lg font-medium pb-1 border-b-4 border-transparent hover:border-primary transition-all duration-300 ease-in-out">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ Request::is('/') ? '#tentang' : url('/') }}"
                        class="nav-link text-primary text-lg font-medium pb-1 border-b-4 border-transparent hover:border-primary transition-all duration-300 ease-in-out">
                        Tentang
                    </a>
                </li>
                <li>
                    <a href="{{ Request::is('/') ? '#destinasi' : url('/') }}"
                        class="nav-link text-primary text-lg font-medium pb-1 border-b-4 border-transparent hover:border-primary transition-all duration-300 ease-in-out">
                        Destinasi
                    </a>
                </li>
                <li>
                    <a href="{{ Request::is('/') ? '#kuliner' : url('/') }}"
                        class="nav-link text-primary text-lg font-medium pb-1 border-b-4 border-transparent hover:border-primary transition-all duration-300 ease-in-out">
                        Kuliner
                    </a>
                </li>
            </ul>
        </div>
        <a href="/destination" class="hidden lg:block bg-primary text-lg text-white px-7 py-3 rounded-full">Get Started</a>
    </div>
    <!-- Tombol Hamburger (mobile) -->


    <!-- Sidebar untuk Mobile -->
    <div id="sidebar"
        class="fixed inset-0 z-30 bg-black bg-opacity-50 hidden lg:hidden transition-opacity duration-300">
        <div class="relative w-4/5 max-w-xs h-full bg-white shadow-lg">
            <!-- Tombol Close -->
            <div class="flex justify-between p-4 px-10 border-b">
                <div class="logo">
                    <a href="/" class="flex items-center">
                        <img src="{{ asset('assets/images/logo-nav.png') }}" alt="Logo" class="h-10 w-auto">
                    </a>
                </div>
                <button id="close-sidebar" class="text-primary focus:outline-none">
                    <x-heroicon-s-x-mark class="size-7" />
                </button>
            </div>

            <!-- Menu -->
            <ul class="flex flex-col space-y-4 py-6 px-6">
                <li>
                    <a href="{{ Request::is('/') ? '#hero' : url('/') }}"
                        class="block text-primary text-base font-semibold border-b pb-2 hover:text-primary transition-all duration-200">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ Request::is('/') ? '#tentang' : url('/') }}"
                        class="block text-primary text-base font-semibold border-b pb-2 hover:text-primary transition-all duration-200">
                        Tentang
                    </a>
                </li>
                <li>
                    <a href="{{ Request::is('/') ? '#destinasi' : url('/') }}"
                        class="block text-primary text-base font-semibold border-b pb-2 hover:text-primary transition-all duration-200">
                        Destinasi
                    </a>
                </li>
                <li>
                    <a href="{{ Request::is('/') ? '#kuliner' : url('/') }}"
                        class="block text-primary text-base font-semibold border-b pb-2 hover:text-primary transition-all duration-200">
                        Kuliner
                    </a>
                </li>
                <li class="pt-4">
                    <a href="/destination"
                        class="w-full block text-center bg-primary text-white text-base font-semibold py-3 rounded-full hover:opacity-90 transition-all duration-200">
                        Get Started
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
