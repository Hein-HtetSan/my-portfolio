@extends('layouts.app')


@section('content')

<!-- Include Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

<section class="grid grid-cols-6">
    <aside class="col-span-6 md:col-span-1 p-5 px-10">
        <small class="text-slate-700 dark:text-slate-200 uppercase text-sm font-rubik mb-3">Actions</small> <br>
        <!-- Content for aside -->
        <div class="flex md:flex-col flew-row mt-3 gap-3">
            <a href="{{ route('project.list') }}" class="px-4 py-2 rounded-lg bg-slate-200 dark:bg-slate-600 text-slate-800 dark:text-slate-200">
                <i class="bx bx-layer-plus"></i> <span class="text-sm uppercase font-semibold ml-2">Project</span>
            </a>
            <a href="{{ route('blog.list') }}" class="px-4 py-2 rounded-lg bg-slate-200 dark:bg-slate-600 text-slate-800 dark:text-slate-200">
                <i class="bx bx-book-content"></i> <span class="text-sm uppercase font-semibold ml-2">Blog</span>
            </a>
        </div>
    </aside>
    <main class="col-span-6  md:col-span-5  p-3">
        <!-- Content for main section -->
        @if (request()->routeIs('admin.project') || request()->routeIs('project.list'))
            @include('backend.project.index')
        @elseif (request()->routeIs('blog.list'))
            @include('backend.blog.index');
        @else
            @include('backend.project.index')
        @endif
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
