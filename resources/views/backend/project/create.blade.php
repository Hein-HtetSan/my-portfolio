@extends('layouts.app')


@section('content')

<!-- Include Summernote CSS -->
<!-- include libraries(jQuery, bootstrap) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<section class="flex items-center justify-center w-full h-auto py-20">
    <main class="bg-white p-5 rounded-lg w-full md:w-1/2 shadow-lg">

        <a href="{{ route('project.list') }}" class="text-slate-400 hover:text-sky-400 font-rubik">
            Back
        </a>

        <!-- Content for main section -->
        <form action="{{ route('project.store') }}" method="POST" class="mt-3" enctype="multipart/form-data">
            @csrf
            {{-- Image Field  --}}
            <div class="mb-3 relative">
                <label for="file" class="text-xs  font-rubik uppercase text-slate-400 w-full mb-3">Cover Photo</label>
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="row">
                            <div id="demo" class="grid grid-cols-12 gap-2"></div>
                          </div>
                    </div>
                </div>
                @error('fileUpload')
                    <span class="text-red-600 text-sm font-rubik"><i class='bx bxs-error-circle'></i> {{ $message }} </span>
                @enderror
            </div>
            {{-- Title Field  --}}
            <div class="mb-3 relative">
                <label for="" class="absolute top-2 left-3 text-xs  font-rubik uppercase text-slate-400">Project Title</label>
                <input type="text" class="w-full rounded-lg pt-6 @error('title') border-red-500 @enderror" name="title" value="{{ old('title') }}">
                @error('title')
                    <span class="text-red-600 text-sm font-rubik"><i class='bx bxs-error-circle'></i> {{ $message }} </span>
                @enderror
            </div>
            {{-- Short Desc Field  --}}
            <div class="mb-3 relative">
                <label for="" class="absolute top-2 left-3 text-xs  font-rubik uppercase text-slate-400">Short Description </label>
                <input type="text" class="w-full rounded-lg pt-6  @error('short_desc') border-red-500 @enderror" name="short_desc">
                @error('short_desc')
                    <span class="text-red-600 text-sm font-rubik"><i class='bx bxs-error-circle'></i> {{ $message }} </span>
                @enderror
            </div>
            {{-- Tech stack field  --}}
            <div class="mb-3 relative">
                <label for="" class="absolute top-2 left-3 text-xs  font-rubik uppercase text-slate-400">Tech Stack</label>
                <select name="lang" id="lang" class="w-full rounded-lg pt-7 px-3  @error('lang') border-red-500 @enderror">
                    <option value=""  class="font-rubik">Choose Language</option>
                    @foreach ($languages as $lang)
                        <option value="{{ $lang->id }}" class="font-rubik">{{ $lang->name }}</option>
                    @endforeach
                </select>
                @error('lang')
                    <span class="text-red-600 text-sm font-rubik"><i class='bx bxs-error-circle'></i> {{ $message }} </span>
                @enderror
            </div>
            {{-- Detail of project field  --}}
            <div class="mb-3 relative">
                <label for="" class="text-xs  font-rubik uppercase text-slate-400 mb-2 ">Details of Project</label>
                <div class="mb-1">
                </div>
                <textarea rows="5" style="resize: none;" class="w-full rounded-lg text-slate-700 dark:text-slate-300  @error('content') border-red-500 @enderror" name="content"></textarea>
                @error('content')
                    <span class="text-red-600 text-sm font-rubik"><i class='bx bxs-error-circle'></i> {{ $message }} </span>
                @enderror
            </div>
            {{-- Github field  --}}
            <div class="mb-3 relative">
                <label for="" class="absolute top-2 left-3 text-xs  font-rubik uppercase text-slate-400">GitHub</label>
                <input type="text" class="w-full rounded-lg pt-6  @error('github') border-red-500 @enderror" name="github">
                @error('github')
                    <span class="text-red-600 text-sm font-rubik"><i class='bx bxs-error-circle'></i> {{ $message }} </span>
                @enderror
            </div>
            {{-- Demo field  --}}
            <div class="mb-3 relative">
                <label for="" class="absolute top-2 left-3 text-xs  font-rubik uppercase text-slate-400">Demo (Optional) </label>
                <input type="text" class="w-full rounded-lg pt-6" name="demo">
            </div>
            <button type="submit" class="px-4 py-2 bg-sky-500 text-slate-200 dark:bg-sky-800 dark:text-slate-300
            font-rubik uppercase rounded-lg">Create</button>
        </form>
    </main>
</section>


<!-- Include Summernote JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

{{-- Image picker plusgin  --}}
<script src="{{ asset('js/Multiple-Image-Picker-jQuery-Spartan/dist/js/spartan-multi-image-picker-min.js') }}"></script>

<script>
    // Initialize Summernote
    $(document).ready(function() {

        $("#demo").spartanMultiImagePicker({
            fieldName:  'fileUpload[]',
            rowHeight :'200px',
            maxCount : 3,
            groupClassName :'col-span-12 md:col-span-4 ',
        });

        $('#summernote').summernote({
            height: 220,
        });

        var noteBar = $('.note-toolbar');
        noteBar.find('[data-toggle]').each(function() {
            $(this).attr('data-bs-toggle', $(this).attr('data-toggle')).removeAttr('data-toggle');
        });
    });
</script>


@endsection
