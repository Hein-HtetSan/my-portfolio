@extends('layouts.app')


@section('content')

<!-- Include Summernote CSS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<section class="flex items-center justify-center w-full h-auto py-10">

    <main class="bg-white dark:bg-slate-800 p-5 rounded-lg w-full md:w-3/4 shadow-xl">

                {{-- back button  --}}
                <a href="{{ route('project.list') }}" class="text-slate-400 font-rubik hover:text-sky-400"
                > <i class="bx bx-arrow-left"></i> Back</a>

        {{-- Project title  --}}
        <div class="flex items-center justify-between mb-5">
            <h1 class="text-sky-700 font-rubik text-3xl dark:text-sky-300
            fw-500">
                {{ $project->title }}
            </h1>
            <a href="" class="px-4 py-2 text-slate-500 dark:text-slate-300 bg-slate-200 rounded-lg dark:bg-slate-700 font-rubik">
                <i class="bx bx-share"></i> Share
            </a>
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
        <div class="text-slate-700 dark:text-slate-300 font-rubik">
            {!! $content !!}
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
                    <span class="text-slate-500 font-rubik uppercase">Check Demo: </span><a href="{{ $project->demo }}" class="px-4 py-2 text-slate-300 bg-slate-500 font-rubik rounded-lg "> <i class="bx bx-play"></i> Demo</a>
                </div>
                @endif
            </div>
        </div>

        {{-- action title  --}}
        <div class="mt-6 mb-3">
            <span class="text-md font-rubik uppercase text-slate-500 font-semibold">Actions</span>
        </div>
        {{-- button  --}}
        <div class="flex items-center justify-start gap-2">
            <a href="" class="px-4 py-2 text-slate-300 bg-sky-700 font-rubik rounded-lg "> <i class="bx bx-edit"></i> Edit</a>
            <a href="" class="px-4 py-2 text-slate-300 bg-red-700 font-rubik rounded-lg "> <i class="bx bx-trash-alt"></i> Remove</a>
        </div>

    </main>
</section>


<!-- Include Summernote JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


<script>
    // Initialize Summernote
    $(document).ready(function() {


        $('#summernote').summernote({
            height: 150, // Adjust the height as needed
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onInit: function() {
                    // Add custom classes to elements
                    $('.note-editable').addClass('text-slate-700 dark:text-slate-300 ');
                }
            }
        });
    });
</script>


@endsection
