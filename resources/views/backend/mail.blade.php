@extends('layouts.app')


@section('content')

<!-- Include Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

<section class="grid grid-cols-6">
    <aside class="col-span-6 md:col-span-1 p-5 px-10">
        <small class="text-slate-700 dark:text-slate-200 uppercase text-sm font-rubik mb-3">Actions</small> <br>
        <!-- Content for aside -->
        <div class="flex md:flex-col flew-row mt-3 gap-3 mb-3">
            <a href="{{ route('mail.list') }}" class="px-4 py-2 rounded-lg
            {{ request()->routeIs('mail.list') || request()->routeIs('admin.mail') ? 'bg-sky-200 dark:bg-sky-600' : 'bg-slate-200 dark:bg-slate-600' }}
            text-slate-800 dark:text-slate-200">
                <i class="bx bx-paperclip"></i> <span class="text-sm uppercase font-semibold ml-2">Inbox</span>
            </a>
            <a href="{{ route('mail.send.list') }}" class="px-4 py-2 rounded-lg bg-slate-200 dark:bg-slate-600 text-slate-800 dark:text-slate-200">
                <i class="bx bx-send"></i> <span class="text-sm uppercase font-semibold ml-2">Send</span>
            </a>
        </div>
        {{-- others  --}}
        <small class="text-slate-700 dark:text-slate-200 uppercase text-sm font-rubik mb-3 ">Others</small> <br>
        <div class="flex md:flex-col flex-row mt-3 gap-3">
            <a href="{{ route('mail.send.list') }}" class="px-4 py-2 rounded-lg bg-slate-200 dark:bg-slate-600 text-slate-800 dark:text-slate-200">
                <i class="bx bx-star"></i> <span class="text-sm uppercase font-semibold ml-2">Stared</span>
            </a>
            <a href="{{ route('mail.send.list') }}" class="px-4 py-2 rounded-lg bg-slate-200 dark:bg-slate-600 text-slate-800 dark:text-slate-200">
                <i class="bx bx-box"></i> <span class="text-sm uppercase font-semibold ml-2">Archieved</span>
            </a>
            <a href="{{ route('mail.send.list') }}" class="px-4 py-2 rounded-lg bg-slate-200 dark:bg-slate-600 text-slate-800 dark:text-slate-200">
                <i class="bx bx-trash"></i> <span class="text-sm uppercase font-semibold ml-2">Trash</span>
            </a>
        </div>
    </aside>
    <main class="col-span-6  md:col-span-5  p-3">
        <!-- Content for main section -->
        @if (request()->routeIs('admin.mail') || request()->routeIs('mail.list'))
            @include('backend.mail.inbox')
        @elseif (request()->routeIs('blog.list'))
            @include('backend.mail.send');
        @else
            @include('backend.mail.inbox')
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
