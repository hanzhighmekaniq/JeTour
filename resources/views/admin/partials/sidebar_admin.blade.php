<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-10 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 "
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white ">
        <ul class="space-y-2 font-medium">
            <li class="px-5">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-500">Menu</div>
                </div>
            </li>
            <li>
                <a href="{{ route('dashboard.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('dashboard.index') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-gauge-high"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('destination.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('destination.index') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-mountain"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Wisata</span>
                </a>
            </li>

            <li>
                <a href="{{ route('culinary.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('culinary.index') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-utensils"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Kuliner</span>
                </a>
            </li>
            <li>
                <a href="{{ route('lodging.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('lodging.index') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-hotel"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Penginapan</span>
                </a>
            </li>


            <li>
                <a href="{{ route('ticket.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('ticket.index') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-ticket"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Tiket</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaction.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('transaction.index') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Transaksi</span>
                </a>
            </li>
            <li class="px-5">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-500">Settings</div>
                </div>
            </li>

            <li>
                <a href="{{ route('datauser.index') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none 
                    {{ Request::routeIs('datauser.index') ? 'bg-emerald-50 text-emerald-700 border-emerald-500' : 'hover:bg-gray-50 text-gray-600 hover:text-gray-800' }}
                        border-l-4 border-transparent pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fa-solid fa-users-gear"></i>
                    </span>

                    <span class="ml-2 text-sm tracking-wide truncate">Data User</span>
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                    @csrf
                    <button type="button" onclick="logoutConfirm()"
                        class="w-full text-left relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Keluar</span>
                    </button>
                </form>
            </li>
            <script>
                function logoutConfirm() {
                    Swal.fire({
                        title: 'Keluar Aplikasi?',
                        text: "Apakah Anda yakin ingin keluar?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, keluar',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('logout-form').submit();
                        }
                    });
                }
            </script>
        </ul>
    </div>
</aside>
