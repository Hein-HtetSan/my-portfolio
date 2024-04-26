@extends('layouts.app')


@section('content')

<!-- Include Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

<section class="grid grid-cols-5 gap-4 flex items-center justify-center w-full h-dvh p-5 mb-24">
    <div class="md:col-span-1"></div>
    <main class="col-span-5 md:col-span-2 order-1 md:order-2 bg-red-400 p-4 rounded-lg">
        <!-- Content for main section -->
        <form action="" method="POST" class="">
            @csrf
            <div class="mb-3 relative">
                <label for="" class="absolute top-2 left-3 text-xs font-semibold font-rubik uppercase text-slate-400">Project Title</label>
                <input type="text" class="w-full rounded-lg pt-6">
            </div>
            <div class="mb-3 relative">
                <label for="" class="absolute top-2 left-3 text-xs font-semibold font-rubik uppercase text-slate-400">Short Description </label>
                <input type="text" class="w-full rounded-lg pt-6">
            </div>
            <div class="mb-3 relative">
                <label for="" class="absolute top-2 left-3 text-xs font-semibold font-rubik uppercase text-slate-400">Tech Stack</label>
                <input type="text" class="w-full rounded-lg pt-6">
            </div>
            <div class="mb-3 relative">
                <label for="" class="text-xs font-semibold font-rubik uppercase text-slate-400 mb-2">Details of Project</label>
                <div class="mb-1">
                    <small class="text-green-500 font-semibold">Markdown format is available.</small>
                </div>
                <div id="summernote" class="w-full rounded-lg text-slate-700 dark:text-slate-300"></div>
            </div>
        </form>
    </main>
</section>


<!-- Include Summernote JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
    // Initialize Summernote
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 150, // Adjust the height as needed
            toolbar: [
                ['height', ['height']]
            ],
            callbacks: {
                onInit: function() {
                    // Add custom classes to elements
                    $('.note-editable').addClass('text-slate-700 dark:text-slate-300');
                }
            }
        });
        });
</script>


@endsection
