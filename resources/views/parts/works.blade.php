@extends('welcome')

@section('title', 'workshops')

@section('content')
    <section id="projects"
        class="flex font-rubik flex-col justify-center aligns-center px-10 lg:px-44 w-full h-auto space-x-5 lg:h-dvh mb-24 md:mb-0">

        <!-- TItle  -->
        <h1 class="block uppercase text-3xl mb-14 font-rubik font-medium text-zinc-600 dark:text-zinc-300 text-center">
            Projects</h1>

        <!-- Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-5">
            <!-- Items  -->
            <div
                class="w-full mb-3 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                {{-- <a href="#">
                    <img class="rounded-t-lg object-cover w-full" src="./image/images.jpg" alt="" />
                </a> --}}
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900 dark:text-white">Noteworthy
                            technology
                            acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-regular text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-regular text-center text-white bg-sky-700 rounded-lg hover:bg-sky-500 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pagination  -->
        <div
            class="flex items-center justify-between border border-gray-200 bg-zinc-100 dark:bg-slate-800 dark:border-gray-700 rounded-lg px-4 py-3 sm:px-6">
            <div class="flex flex-1 justify-between sm:hidden">
                <a href="#"
                    class="inline-flex items-center px-3 py-1 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 rounded-md">Previous</a>
                <a href="#"
                    class="ml-3 inline-flex items-center px-3 py-1 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 rounded-md">Next</a>
            </div>
            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700 dark:text-gray-400">
                        Showing
                        <span class="font-medium">1</span>
                        to
                        <span class="font-medium">10</span>
                        of
                        <span class="font-medium">97</span>
                        results
                    </p>
                </div>
                <div>
                    <nav class="inline-flex -space-x-px">
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-gray-400 bg-transparent border border-slate-600 rounded-l-md hover:bg-slate-700 focus:outline-none focus:ring focus:ring-sky-600 focus:ring-opacity-50">Previous</a>
                        <a href="#" aria-current="page"
                            class="inline-flex items-center px-4 py-2 text-sm font-semibold text-white bg-sky-600 rounded-md hover:bg-sky-700 focus:outline-none focus:ring focus:ring-sky-600 focus:ring-opacity-50">1</a>
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 bg-transparent hover:bg-sky-700 focus:outline-none focus:ring focus:ring-sky-600 focus:ring-opacity-50">2</a>
                        <span
                            class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 bg-transparent">...</span>
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 bg-transparent hover:bg-sky-700 focus:outline-none focus:ring focus:ring-sky-600 focus:ring-opacity-50">10</a>
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-gray-400 bg-transparent border border-slate-600 rounded-r-md hover:bg-slate-700 focus:outline-none focus:ring focus:ring-sky-600 focus:ring-opacity-50">Next</a>
                    </nav>
                </div>
            </div>
        </div>

    </section>

    </section>
    <!-- End of project sections  -->
@endsection
