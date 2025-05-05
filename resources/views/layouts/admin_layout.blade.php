@include('components.head')

<body>


    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 ">
        @include('admin.partials.navbar_admin')
        @include('admin.partials.sidebar_admin')
    </nav>

    <div class="p-4 sm:ml-64">
        <div class="p-4  rounded-lg  mt-14">
            {{ $slot }}
        </div>
    </div>

</body>
