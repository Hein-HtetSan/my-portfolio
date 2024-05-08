@extends('layouts.app')


@section('content')

<!-- Include Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

@if(session('error'))
        <div id="alertBox" class="bg-red-200 px-4 py-3 rounded shadow-md mx-auto w-max z-100 fixed bottom-5 left-0 right-0  mx-auto w-max">
            <div class="max-w-xl mx-auto">
                <p class="text-red-800">{{ session('error') }}</p>
            </div>
        </div>
    @endif
    @if(session('success'))
        <div id="alertBox" class="bg-green-200 px-4 py-3 rounded shadow-md mx-auto w-max z-100 fixed bottom-5 left-0 right-0  mx-auto w-max">
            <div class="max-w-xl mx-auto">
                <p class="text-green-800">{{ session('success') }}</p>
            </div>
        </div>
    @endif


<div class="grid grid-cols-12 gap-3 p-3">

    {{-- connect with github  --}}
    @if (Auth::user()->github == null)
    <div class="col-span-12 w-100 bg-yellow-100 dark:bg-green-100 dark:bg-opacity-80 flex items-center justify-between px-10 py-2 rounded-xl bg-opacity-70 gap-8">
        <span class="text-slate-600">
            <i class="bx bx-error"></i> Attention, we recommand you to connect with your GitHub to get full experiences.
        </span>
        <a href="{{ route('profile.github') }}" class="text-yellow-500 font-bold fontr-rubik hover:text-yellow-600 dark:text-green-600 dark:hover:text-green-500">Connect</a>
    </div>
    @endif

    <div class="col-span-4 p-2 hidden md:block">
        {{-- Profile start  --}}
        @include('backend.home.profile')
        {{-- profile end  --}}
    </div>
    <div class="col-span-12 md:col-span-8 p-2">
        {{-- action buttons start  --}}
        @include('backend.home.actions')
        {{-- action buttons end  --}}

        <div class="grid grid-cols-12 gap-4">
            {{-- title  --}}
            <div class="col-span-12">
                <h3 class="mt-5 text-bold text-2xl text-slate-500"> Template</h3>
            </div>
            {{-- left side  --}}
            <div class="col-span-12 md:col-span-6">
                {{-- cv uploader  --}}
                {{-- cv file uploder  --}}
                @if (Auth::user()->cv_form == null)
                    <button class="px-5 py-2 rounded-lg text-slate-100 bg-sky-500 hover:bg-sky-400 my-3 text-sm font-semibold shadow">
                        Insert CV form
                    </button>
                    <small class="bg-yellow-100 rounded-xl p-2 text-yellow-600">Recommended</small>
                @else
                    {{-- cv file  --}}
                    <div class="file-container flex flex-col bg-white rounded-lg border px-5 py-2 dark:bg-gray-800 shadow-xl
                    border-blue-500 hover:border-sky-500">
                        <div class="file-container flex items-center space-x-4">
                            <div
                                class="file-icon flex-shrink-0 w-12 h-12 flex items-center justify-center bg-gray-200 rounded-lg">
                                <i class="far fa-file text-2xl"></i>
                            </div>
                            <div class="file-info flex-1 ml-4">
                                <div class="file-name text-slate-600 dark:text-slate-400">cvform.png</div>
                                <div class="file-size text-sm text-gray-500">File Size: 2.5 MB</div>
                            </div>
                            <div
                                class="eye-icon flex-shrink-0 cursor-pointer w-8 h-8 flex items-center justify-center bg-gray-100 rounded-lg hover:bg-gray-200">
                                <i class="far fa-eye text-sm"></i>
                            </div>
                        </div>
                        <div class="mt-5 flex items-center justify-end">
                            <button
                                class="px-3 py-1 text-sky-600 rounded-lg bg-sky-100 dark:bg-opacity-90 text-sm hover:bg-sky-200 hover:text-sky-600 focus:outline-none focus:ring focus:ring-sky-300">
                                <i class="fas fa-download mr-1"></i> Download
                            </button>
                            <button
                                class="px-3 py-1 text-red-600 rounded-lg bg-red-100 text-sm hover:bg-red-200 hover:text-red-600 focus:outline-none focus:ring focus:ring-red-300 ml-2">
                                <i class="fas fa-trash mr-1"></i> Delete
                            </button>
                        </div>
                    </div>
                @endif
            </div>

            {{-- right side --}}
            <div class="col-span-12 md:col-span-6">
                {{-- calendar  --}}
            </div>
        </div>

    </div>

</div>


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



<script>
    // Function to hide the alert box after a certain duration
    setTimeout(function () {
        document.getElementById("alertBox").style.display = "none";
    }, 5000); // Hide the alert after 5 seconds
</script>


@endsection
