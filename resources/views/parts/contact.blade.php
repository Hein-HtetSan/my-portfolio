@extends('welcome')

@section('title', 'contact')

@section('content')
    <section id="projects"
        class="flex font-rubik flex-col justify-center aligns-start px-10 lg:px-36 w-full h-auto  lg:h-dvh mb-24 lg:mb-0">

        <!-- TItle  -->
        <h1 class="block uppercase text-3xl mb-6 mt-14 mb:mt-0 md:mb-14 font-rubik font-medium text-zinc-600 dark:text-zinc-300 text-center">
            Contact 💌
        </h1>

        <div class="flex flex-col lg:flex-row w-full items-start justify-center mb-5">
            <!-- Contact Information  -->
            <div class="w-full mb-24 lg:mb-0">
                <!-- Title  -->
                <span class="font-medium text-zinc-700 dark:text-zinc-400 text-2xl">Contact Information</span>
                <!-- Infor  -->
                <div class="mt-5 group text-slate-600 dark:text-zinc-400 flex aligns-center">
                    <i class="bx bx-envelope text-3xl me-3 text-zinc-600 dark:text-sky-400"></i> <span
                        class="text-zinc-700 text-slate-600 dark:text-zinc-400 mt-2">heinhtetsan33455@gmail.com</span>
                </div>
                <div class="mt-5 group text-slate-600 dark:text-zinc-400 flex aligns-center">
                    <i class="bx bx-phone text-3xl me-3 text-zinc-600 dark:text-sky-400"></i> <span
                        class="text-zinc-700 text-slate-600 dark:text-zinc-400 mt-2">+959 761 349 721</span>
                </div>
                <div class="mt-5 group text-slate-600 dark:text-zinc-400 flex aligns-center">
                    <i class="bx bx-map text-3xl me-3 text-zinc-600 dark:text-sky-400"></i> <span
                        class="text-zinc-700 text-slate-600 dark:text-zinc-400 mt-2">Yangon, Thongwa Township</span>
                </div>

            <!-- Contact Form  -->
            <div class="w-full mb-24 lg:mb-0">
                <!-- Social Media Link  -->
                <div class="text-sm ms-1  mt-8 mb-5 dark:text-cyan-700 text-slate-400">Follow me on - </div>

                <div class="flex flex-row items-center justify-start">
                    <a href=""
                        class="me-4 bg-zinc-400 dark:bg-sky-400 bg-opacity-50 hover:bg-opacity-30 hover:scale-110 transition ease-in-out delay-150 dark:hover:bg-opacity-30 shadow dark:bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center"><i
                            class="bx text-2xl text-zinc-600 dark:text-cyan-400 bxl-twitter"></i></a>
                    <a href=""
                        class="me-4 bg-zinc-400 dark:bg-sky-400 bg-opacity-50 hover:bg-opacity-30 hover:scale-110 transition ease-in-out delay-150 dark:hover:bg-opacity-30 shadow dark:bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center"><i
                            class="bx text-2xl text-zinc-600 dark:text-cyan-400 bxl-linkedin"></i></a>
                    <a href=""
                        class="me-4 bg-zinc-400 dark:bg-sky-400 bg-opacity-50 hover:bg-opacity-30 hover:scale-110 transition ease-in-out delay-150 dark:hover:bg-opacity-30 shadow dark:bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center"><i
                            class="bx text-2xl text-zinc-600 dark:text-cyan-400 bxl-github"></i></a>
                </div>

                </div>
            </div>

        </div>
        {{-- </x-splade-lazy> --}}
    </section>

@endsection
