<div class="flex flex-row items-center justify-start py-8 px-4 gap-10">
    <button id="navbar-toggler"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm bg-gray-200 dark:bg-gray-600 text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400
            dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="toggle-icon">
            <i class="bx bx-cog text-2xl"></i>
        </span>
    </button>

    <div id="navbar-menu"
        class="hidden flex justify-center items-center border-slate-4 00 dark:border-slate-700 border-2  p-2 px-5 rounded">
        <ul class="flex justify-center items-center space-x-8 md:text-sm md:font-medium">
            <!-- Menu items -->
            <li
                class="rounded-full px-3 md:hover:bg-gray-300 md:dark:hover:bg-sky-700 flex items-center justify-center {{ request()->routeIs('user.me') ? 'bg-sky-200' : '' }}">
                <a href="{{ route('user.me') }}"
                    class="flex items-center text-slate-700 gap-1 md:border-0 block py-2 md:hover:text-sky-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent">
                    <i
                        class="bx bx-user text-lg text-slate-700 {{ request()->routeIs('user.me') ? '' : 'dark:text-slate-300' }}"></i>
                </a>
            </li>
            <li
                class="rounded-full px-3 md:hover:bg-gray-300 md:dark:hover:bg-sky-700 flex items-center justify-center {{ request()->routeIs('user.works') ? 'bg-sky-200' : '' }}">
                <a href="{{ route('user.works') }}"
                    class="flex items-center text-slate-700 gap-2 md:border-0 block py-2 md:hover:textd-sky-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent">
                    <i
                        class="bx bx-code-curly text-slate-700 text-lg {{ request()->routeIs('user.works') ? '' : 'dark:text-slate-300' }}"></i>
                </a>
            </li>

            <!-- Dark mode switcher -->
            <li>
                <button id="theme-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 bg-gray-200 dark:bg-slate-800 dark:hover:bg-gray-700 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </li>
            <!-- End of Dark mode switcher -->
        </ul>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbarToggler = document.getElementById('navbar-toggler');
        const navbarMenu = document.getElementById('navbar-menu');
        const toggleIcon = document.getElementById('toggle-icon');

        navbarToggler.addEventListener('click', function() {
            navbarMenu.classList.toggle('hidden');
            toggleIcon.textContent = toggleIcon.textContent === '[ > ]' ? '[ < ]' : '[ > ]';
        });
    });
</script>
