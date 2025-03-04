<nav class="bg-white shadow-md mt-10 mx-14 rounded-full px-10 top-0 left-0 right-0 z-20 fixed">
    <div class="container mx-auto px-0 py-3 flex justify-between items-center">
        <div class="logo">
            <a href="/" class="flex items-center">
                <img src="{{ asset('assets/images/logo-nav.png') }}" alt="Logo" class="h-10 w-auto">
            </a>
        </div>
        <div class="block lg:hidden">
            <!-- Tombol Hamburger -->
            <button id="hamburger" class="text-primary focus:outline-none">
                <x-heroicon-s-bars-3 class="size-10" />
            </button>
        </div>
        <div class="menu hidden lg:block">
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
        <div class="hidden lg:block">
            <a href="/destination" class="bg-primary text-lg text-white px-7 py-3 rounded-full">Get Started</a>
        </div>
    </div>

    <!-- Sidebar untuk Mobile -->
    <div id="sidebar" class="fixed inset-0 z-30 bg-gray-800 bg-opacity-75 hidden lg:hidden"
        style="transition: opacity 0.3s ease;">
        <div class="relative w-64 bg-white h-full">
            <div class="flex justify-end p-4">
                <button id="close-sidebar" class="text-primary focus:outline-none">
                    <x-heroicon-s-x-mark class="size-7" />
                </button>
            </div>
            <ul class="flex flex-col space-y-5 py-4 px-6">
                <li>
                    <a href="{{ Request::is('/') ? '#hero' : url('/') }}"
                        class="text-primary text-lg font-medium border-b-2 border-transparent hover:border-primary transition-all duration-300 ease-in-out">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ Request::is('/') ? '#tentang' : url('/') }}"
                        class="text-primary text-lg font-medium border-b-2 border-transparent hover:border-primary transition-all duration-300 ease-in-out">
                        Tentang
                    </a>
                </li>
                <li>
                    <a href="{{ Request::is('/') ? '#destinasi' : url('/') }}"
                        class="text-primary text-lg font-medium border-b-2 border-transparent hover:border-primary transition-all duration-300 ease-in-out">
                        Destinasi
                    </a>
                </li>
                <li>
                    <a href="{{ Request::is('/') ? '#kuliner' : url('/') }}"
                        class="text-primary text-lg font-medium border-b-2 border-transparent hover:border-primary transition-all duration-300 ease-in-out">
                        Kuliner
                    </a>
                </li>
                <div>
                    <a href="/destination" class="bg-primary text-lg text-white px-7 py-3 rounded-full">Get Started</a>
                </div>
            </ul>
        </div>
    </div>
</nav>
