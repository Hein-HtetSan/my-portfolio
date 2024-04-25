<nav
    class="md:fixed top-0 w-full left-0 bg-slate-50 shadow border-b-1 border-gray-300  py-4 px-4 md:px-20  dark:bg-gray-600">
    <div class="container mx-auto flex flex-wrap items-center justify-between">

      <!-- Navbar Items  -->
      <div class="hidden md:flex justify-between items-center w-full md:w-auto md:order-1" id="mobile-menu-4">
        <ul class="flex-col md:flex-row flex md:space-x-4 mt-4 md:mt-0 md:text-sm md:font-medium">
          <li class="rounded-full px-6 py-1 md:hover:bg-gray-300 md:dark:hover:bg-sky-700 {{ request()->routeIs('user.me') ? 'bg-sky-200 ' : '' }}">
            <a href="{{ route('user.me') }}"
              class="flex items-center text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:textd-sky-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent">
              <i class="bx bx-user text-lg "></i>
            </a>
          </li>
          <li class="rounded-full px-6 py-1 md:hover:bg-gray-300 md:dark:hover:bg-sky-700 {{ request()->routeIs('user.works') ? 'bg-sky-200 ' : '' }}">
            <a href="{{ route('user.works') }}"
              class="flex items-center text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:textd-sky-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent">
              <i class="bx bx-code-curly text-lg "></i>
            </a>
          </li>
          <li class="rounded-full px-6 py-1 md:hover:bg-gray-300 md:dark:hover:bg-sky-700 {{ request()->routeIs('user.contact') ? 'bg-sky-200 ' : '' }}">
            <a href="{{ route('user.contact') }}"
              class="flex items-center text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:textd-sky-700 md:p-0 md:dark:hover:text-white md:dark:hover:bg-transparent">
              <i class="bx bx-envelope text-lg "></i>
            </a>
          </li>

          <!-- Dark mode switcher -->
            <button id="theme-toggle" type="button"
            class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
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
            <!-- Dark mode switcher end -->
        </ul>


      </div>
      <!-- End of Navbar Items  -->

      {{-- Darkmode btn  --}}

      {{-- end of darkmode btn  --}}

      {{-- name  --}}
      <a href="#" class="flex">
        <span
          class="self-center text-lg font-medium font-rubik whitespace-nowrap text-gray-500 subpixel-antialiased">
           <span class="text-sky-600 text-2xl mr-6">Hein Htet San</span> <br> <span class="text-slate-300 mt-10 font-regular text-sm">$ ~/heinhtetsan/@yield('title')  </span>
        </span>
      </a>
      {{-- end of name  --}}

    </div>
  </nav>
