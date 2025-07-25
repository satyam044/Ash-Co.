<nav>
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" aria-controls="mobile-menu" aria-expanded="false" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    
                    <!-- Menu Closed -->
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="block size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <!-- Menu Openend -->
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="hidden size-6">
                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="max-sm:ml-10 flex shrink-0 items-center">
                <img src="{{ asset('Assets/Logo-(2).png') }}" alt="Ash & Co." class="w-40 brightness-50 cursor-pointer" />
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch">
                <div class="hidden sm:block">
                    <div class="flex space-x-4">
                        <a href="#" aria-current="page" class="rounded-md bg-gray-900 px-3 py-2 text-sm text-center font-medium text-white">Home</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm text-center font-medium text-white hover:bg-gray-700 hover:text-white">Calvin Klein</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm text-center font-medium text-white hover:bg-gray-700 hover:text-white">Zara</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm text-center font-medium text-white hover:bg-gray-700 hover:text-white">Nike</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm text-center font-medium text-white hover:bg-gray-700 hover:text-white">Adidas</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm text-center font-medium text-white hover:bg-gray-700 hover:text-white">Shop</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <!-- Profile dropdown -->
                <div class="relative ml-3">
                    <button id="user-menu-button" type="button" aria-expanded="false" aria-haspopup="true" class="cursor-pointer relative flex rounded-full bg-white text-sm border-2 border-white hover:border-black">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Open user menu</span>
                        <img src="{{ asset('Assets/Avatar.svg') }}" alt="" class="size-8 rounded-full" />
                    </button>

                    <!-- Profile-Menu -->
                    <div id="profile-menu" role="menu" class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none">
                        <a id="user-menu-item-0" role="menuitem" href="#" tabindex="-1" class="block px-4 py-2 text-sm text-gray-700">Your Profile</a>
                        <a id="user-menu-item-2" role="menuitem" href="#" tabindex="-1" class="block px-4 py-2 text-sm text-gray-700">Log out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Toggle -->
    <div id="mobile-menu" class="hidden sm:hidden">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <a href="#" aria-current="page" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Home</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calvin Klein</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Zara</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Nike</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Adidas</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Shop</a>
        </div>
    </div>
</nav>