<nav class="fixed top-0 left-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-600"
    id="navbar">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="/" class="flex items-center">
            <x-gaptech-logo class="w-8 h-8 mr-3" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Gaptech</span>
        </a>
        <div id="tooltip-toggle-collapse" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Buka Menu Utama
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button data-tooltip-target="tooltip-toggle-collapse" data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:flex md:items-center md:gap-6 md:w-auto" id="navbar-default">
            <x-landing-page.navlink />
        </div>
    </div>
</nav>
