@extends('welcome')

@section('title', 'workshops')

@section('content')

    <section id="projects"
        class="flex font-rubik flex-col justify-center px-3 aligns-center px-0 lg:px-44 w-full h-auto md:mt-18 mb-36">

        <!-- TItle  -->
        <h1
            class="uppercase text-3xl mb-5 mt-2 md:mb-14 md:mt-0 font-rubik font-medium text-zinc-600 dark:text-zinc-300 text-center">
            Projects 🎨
        </h1>
        <span class="text-center block">Here is branche of projects have been developed</span>
        <div class="mb-10"></div>

        <!-- Content -->
        <!-- Items  -->

        {{-- <x-splade-lazy> --}}

        @if (count($projects) == 0)
            <h1 class="text-center text-lg text-slate-600 dark:text-slate-500 uppercase"> <i class="bx bx-error"></i> There is
                no projects!</h1>
        @endif


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-5">
            @foreach ($projects as $project)
                <div
                    class="w-full mb-3 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                    {{-- <a href="#">
                            <img class="rounded-t-lg object-cover w-full" src="./image/images.jpg" alt="" />
                        </a> --}}
                    <div class="p-5">
                        {{-- tech stack  --}}
                        <div class="flex items-center justify-start gap-3 my-3">
                            @foreach ($project['languages'] as $language)
                                <span
                                    class="px-5 py-1 font-normal rounded-full uppercase bg-sky-200 text-sky-600 dark:bg-sky-300 dark:text-sky-800 text-sm">{{ $language['name'] }}</span>
                            @endforeach
                        </div>
                        {{-- Project title  --}}
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900 dark:text-white">
                                {{ $project->title }}</h5>
                        </a>
                        {{-- Project short description  --}}
                        <p class="mb-3 font-regular text-gray-700 dark:text-gray-400">
                            {{ $project->short_desc }}
                        </p>
                        {{-- Readmore button  --}}
                        <a href="{{ route('project.detail', $project->id) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-regular text-center text-white bg-sky-700 rounded-lg hover:bg-sky-500 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination  -->
        {{ $projects->links() }}
        {{-- </x-splade-lazy> --}}


    </section>



@endsection
