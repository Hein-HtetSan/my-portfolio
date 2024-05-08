@extends('welcome')

@section('title', 'projects/')


@section('content')

<section class="flex items-center justify-center w-full h-auto py-10 md:py-20 mt-6 md:mt-20">

    <main class="bg-white dark:bg-slate-900 p-5 rounded-lg w-full md:w-3/4 shadow-xl">

        {{-- <x-splade-lazy> --}}


            {{-- back button  --}}
            <a href="{{ route('user.works') }}" class="text-slate-400 font-rubik hover:text-sky-400"
            > <i class="bx bx-arrow-left"></i> Back</a>

            {{-- Project title  --}}
            <div class="flex items-center justify-between mb-5">
                <h1 class="text-sky-700 font-rubik text-3xl dark:text-sky-300
                fw-500">
                    {{ $project->title }}
                </h1>
            </div>

            {{-- image section  --}}
            @if (count($project['covers']) == 3)
                <div class="grid grid-cols-12 flex flex-col md:flex-row gap-2 mb-5">
                    <img src="{{ asset('storage/'.$project['covers'][0]->name) }}" alt="" class="col-span-12 rounded-lg"
                    style="width: 100%; height: 40vh;">
                    <img src="{{ asset('storage/'.$project['covers'][1]->name) }}" alt="" class="col-span-12 md:col-span-6 rounded-lg"
                    style="width: 100%; height: 40vh;">
                    <img src="{{ asset('storage/'.$project['covers'][2]->name) }}" alt="" class="col-span-12 md:col-span-6 rounded-lg"
                    style="width: 100%; height: 40vh;">
                </div>
            @elseif(count($project['covers']) == 2)
                <div class="grid grid-cols-12 flex flex-col md:flex-row gap-2 mb-5">
                    <img src="{{ asset('storage/'.$project['covers'][0]->name) }}" alt="" class="col-span-12 md:col-span-6 rounded-lg"
                    style="width: 100%; height: 40vh;">
                    <img src="{{ asset('storage/'.$project['covers'][1]->name) }}" alt="" class="col-span-12 md:col-span-6 rounded-lg"
                    style="width: 100%; height: 40vh;">
                </div>
            @else
                <div class="grid grid-cols-12 flex flex-col md:flex-row gap-2 mb-5">
                    <img src="{{ asset('storage/'.$project['covers'][0]->name) }}" alt="" class="col-span-12 rounded-lg"
                    style="width: 100%; height: 54vh;">
                </div>
            @endif

            {{-- sub title  --}}
            <span class="text-lg text-slate-500 font-rubik dark:text-slate-400 ">
                {{ $project->short_desc }}
            </span>

            {{-- tech stack  --}}
            <div class="flex items-center justify-start gap-3 my-3">
                @foreach ($project['languages'] as $language)
                    <span class="px-5 py-1 font-normal rounded-full uppercase bg-sky-200 text-sky-600 dark:bg-sky-300 dark:text-sky-800 text-sm">{{ $language['name'] }}</span>
                @endforeach
            </div>

            {{-- content title  --}}
            <div class="my-6">
                <span class="text-slate-500 font-rubik text-md uppercase font-semibold">Content</span>
            </div>
            {{-- content text --}}
            <div class="font-rubik text-xl text-slate-700 dark:text-slate-400">
                {!! html_entity_decode($project->content) !!}
            </div>


            {{-- more info title  --}}
            <div class="mt-6 mb-1">
                <span class="text-slate-500 font-rubik text-md uppercase font-semibold">More Info</span>
            </div>
            {{-- links  --}}
            <div class="flex items-center justify-start gap-2">
                <div class="flex flex-col gap-3 ">
                    <div class="flex items-center justify-start gap-3">
                        <span class="text-slate-500 font-rubik uppercase">Get the source code here: </span><a href="{{ $project->github }}" class="px-4 py-2 text-slate-300 bg-slate-700 font-rubik rounded-lg "> <i class="bx bxl-github"></i> GitHub</a>
                    </div>
                    @if ($project->demo)
                    <div class="flex items-center justify-start gap-3">
                        <span class="text-slate-500 font-rubik uppercase">Check Demo: </span><a href="{{ $project->demo }}" class="text-sky-400 dark:text-sky-500"> <i class="bx bx-play"></i> Demo</a>
                    </div>
                    @endif
                    <div class="flex items-center justify-start gap-3">
                        <!-- Facebook Share Button -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $currentUrl }}" class="px-4 py-2 text-slate-500 dark:text-slate-300 bg-slate-200 rounded-lg dark:bg-slate-700 font-rubik" target="_blank">
                            <i class="bx bxl-facebook"></i>
                        </a>

                        <!-- LinkedIn Share Button -->
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $currentUrl }}" class="px-4 py-2 text-slate-500 dark:text-slate-300 bg-slate-200 rounded-lg dark:bg-slate-700 font-rubik" target="_blank">
                            <i class="bx bxl-linkedin"></i>
                        </a>
                        <!-- Generic Share Button (e.g., via email) -->
                        <a href="mailto:?subject=Check out this project&body={{ $currentUrl }}" class="px-4 py-2 text-slate-500 dark:text-slate-300 bg-slate-200 rounded-lg dark:bg-slate-700 font-rubik">
                            <i class="bx bx-envelope"></i>
                        </a>
                        <a href="https://x.com/intent/tweet?url={{ $currentUrl }}&text={{ urlencode($project->name) }}" class="px-4 py-2 text-slate-500 dark:text-slate-300 bg-slate-200 rounded-lg dark:bg-slate-700 font-rubik" target="_blank">
                            <i class="bx bxl-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        {{-- </x-splade-lazy> --}}

    </main>
</section>




@endsection
