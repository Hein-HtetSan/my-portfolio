@extends('welcome')

@section('title', 'workshops')

@section('content')

    <section id="projects"
        class="flex font-rubik flex-col justify-center px-3 aligns-center px-0 lg:px-44 w-full h-auto md:mt-18 mb-44">

        <!-- TItle  -->
        <h1
            class="uppercase text-3xl mb-5 mt-2 md:mb-5 md:mt-0 font-rubik font-medium text-zinc-600 dark:text-zinc-300 text-center">
            Projects 🎨
        </h1>
        <span class="text-center block text-slate-400 dark:text-slate-500">Don't You Think The Projects Are Amazing</span>
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
                    class="w-full work mb-3 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                    {{-- image section  --}}
                    <img class="rounded-t-lg object-cover w-full h-36"
                        src="data:image/jpg;base64,{{ base64_encode($project->cover->getData()) }}" alt="" />
                    {{-- end of image  --}}
                    <div class="p-5">
                        {{-- tech stack  --}}
                        <div class="flex items-center justify-start gap-3 my-3">
                            @foreach ($project->languages as $language)
                                <span
                                    class="px-3 py-1 font-normal rounded-full uppercase bg-slate-200 text-slate-600 dark:bg-slate-700 dark:text-slate-500 text-xs">{{ $language->name }}</span>
                            @endforeach
                        </div>
                        {{-- Project title  --}}
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900 dark:text-white">
                                {{ $project->title }}</h5>
                        </a>
                        {{-- Project short description  --}}
                        <p class="mb-3 font-regular text-gray-700 dark:text-gray-400 text-sm    ">
                            {{ $project->short_desc }}
                        </p>
                        {{-- Readmore button  --}}
                        <a href="{{ $project->github }}"
                            class="inline-flex me-2 items-center px-3 py-1 text-sm font-regular text-center text-white bg-slate-700 rounded-lg hover:bg-slate-500 focus:ring-4 focus:outline-none focus:ring-slate-300 dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">
                            <i class="bx bxl-github me-2"></i>
                            Source Code
                        </a>
                        @if ($project->demo != null)
                            <a href="{{ $project->demo }}"
                                class="inline-flex items-center px-3 py-1 text-sm font-regular text-center text-white bg-sky-700 rounded-lg hover:bg-sky-500 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                                <i class="bx bx-play me-2"></i>
                                Demo
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination  -->
        {{ $projects->links() }}
        {{-- </x-splade-lazy> --}}


    </section>



@endsection
