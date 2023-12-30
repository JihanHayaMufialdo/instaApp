<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800 mt-5">
        <ul class="space-y-2 font-medium">
        <li>
            <a href="{{route('home')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="iconify" data-width="30" data-icon="ant-design:home-filled"></span>
                <span class="ms-3">
                    Home
                </span>
            </a>
        </li>
        <li>
            <a href="{{route('post')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="iconify" data-width="30" data-icon="ph:plus-fill"></span>
                <span class="flex-1 ms-3 whitespace-nowrap">
                    Create
                </span>
            </a>
        </li>
        <li>
            {{-- <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="iconify" data-width="30" data-icon="mdi:user"></span>
                <span class="flex-1 ms-3 whitespace-nowrap">
                    Profile
                </span>
            </a> --}}
        </li>
        <li>
            <a href="{{route('logout')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="iconify" data-width="30" data-icon="solar:logout-2-bold"></span>
                <span class="flex-1 ms-3 whitespace-nowrap">
                    Logout
                </span>
            </a>
        </li>
        </ul>
    </div>
</aside>


