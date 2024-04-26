<div class="p-3 md:p-5 h-auto ">

    <div class="flex flex-row items-center justify-between">
        <a href="{{ route('project.create') }}"
            class="
    px-4 py-2 rounded-lg bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-200">
            <i class="bx bx-plus"></i> Create
        </a>
        <div class="relative">
            <input type="text" placeholder="Search..." class="w-full h-10 px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            <button class="absolute top-0 right-0 mt-3 mr-4 focus:outline-none">
                <i class='bx bx-search text-gray-600'></i>
            </button>
        </div>

    </div>

    <div class="grid grid-cols-6 gap-4 block mt-6">
        <div class="col-span-3 md:col-span-2 text-slate-600 dark:text-slate-500">
            <div class="p-5 border-2 rounded-lg border-slate-400 shadow-2xl">
                {{-- header  --}}
                <h2 class="text-slate-700 dark:text-slate-200 uppercase font-rubik font-semibold text-2xl">
                    Header
                </h2>
                {{-- sub heading  --}}
                <span class="text-slate-600 dark:text-slate-300 font-rubik font-regular">
                    Lorem ipsum dolor sit amet consecte
                </span>
                {{-- tech stack  --}}
                <ul class="flex gap-3 mt-3">
                    <li class="px-5 py-1 rounded-full bg-sky-200 text-sky-600 dark:bg-sky-500 dark:text-sky-800 text-sm font-semibold">Css</li>
                    <li class="px-5 py-1 rounded-full bg-sky-200 text-sky-600 dark:bg-sky-500 dark:text-sky-800 text-sm font-semibold">JavaScript</li>
                </ul>
                {{-- links  --}}
                <div class="flex items-center justify-between mt-5">
                    {{-- detail button  --}}
                    <a href="" class="px-3 py-2 rounded-lg bg-slate-200 dark:bg-slate-600 text-slate-600 dark:text-slate-400">
                        <i class="bx bx-detail"></i> Detail
                    </a>

                    {{-- demo link or github --}} {{-- github  --}}
                    <a href="" class="pt-3 text-slate-600 dark:text-slate-300">
                        <i class="bx bxl-github text-3xl"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-span-3 md:col-span-2"></div>
        <div class="col-span-3 md:col-span-2"></div>
    </div>

</div>
