
<footer class="bg-white rounded-lg shadow m-4 font-rubik dark:bg-gray-900">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8 ">
      <div class="sm:flex sm:items-center sm:justify-between ">
        <a href="{{ route('user.me') }}" class="flex items-center  mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
          <span class="text-2xl text-zinc-700 font-medium dark:text-slate-400">Hein Htet San 👋</span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
          <li>
            <a href="{{ route('user.me') }}" class=" hover:underline me-4 md:me-6">Me</a>
          </li>
          <li>
            <a href="{{ route('user.works') }}" class=" hover:underline me-4 md:me-6">Workshops</a>
          </li>
          <li>
            <a href="{{ route('user.contact') }}" class="  hover:underline">Contact</a>
          </li>
        </ul>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8 dark:border-gray-700" />
      <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href=""
          class="hover:underline ">Hein Htet San™</a>. All Rights Reserved.</span>
    </div>
  </footer>

  <!-- end of Footer  -->
