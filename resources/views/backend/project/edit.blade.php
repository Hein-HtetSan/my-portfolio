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

        <a href="{{ route('project.get', $project->id) }}" class="text-slate-400 hover:text-sky-400 font-rubik">
            Back
        </a>

        <!-- Content for main section -->
        <form action="{{ route('project.update', $project->id) }}" method="POST" class="mt-3" enctype="multipart/form-data">
            @csrf
            {{-- Image Field  --}}
            <div class="mb-3 relative">
                {{-- project id  --}}
                <input type="hidden" name="id" value="{{ $project->id }}">
                <label for="file" class="text-xs  font-rubik uppercase text-slate-400 w-full mb-3">Cover Photo</label>
                {{-- image count  --}}
                <input type="hidden" value="{{ count($project['covers']) }}" id="image_count">
                {{-- showing image  --}}
                @if (count($project['covers']) == 3)
                    <div class="grid grid-cols-12 flex flex-col md:flex-row gap-2 mb-5">
                        <img src="{{ asset('storage/'.$project['covers'][0]->name) }}" alt="" class="col-span-12 rounded-lg"
                        style="width: 100%; height: 40vh;">
                        <img src="{{ asset('storage/'.$project['covers'][1]->name) }}" alt="" class="col-span-12 md:col-span-6 rounded-lg"
                        style="width: 100%; height: 25vh;">
                        <img src="{{ asset('storage/'.$project['covers'][2]->name) }}" alt="" class="col-span-12 md:col-span-6 rounded-lg"
                        style="width: 100%; height: 25vh;">
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
                {{-- image picker  --}}
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
                <input type="text" class="w-full rounded-lg pt-6 @error('title') border-red-500 @enderror" name="title"
                value="{{ $project->title }}">
                @error('title')
                    <span class="text-red-600 text-sm font-rubik"><i class='bx bxs-error-circle'></i> {{ $message }} </span>
                @enderror
            </div>
            {{-- Short Desc Field  --}}
            <div class="mb-3 relative">
                <label for="" class="absolute top-2 left-3 text-xs  font-rubik uppercase text-slate-400">Short Description </label>
                <input type="text" class="w-full rounded-lg pt-6  @error('short_desc') border-red-500 @enderror" name="short_desc"
                value="{{ $project->short_desc }}">
                @error('short_desc')
                    <span class="text-red-600 text-sm font-rubik"><i class='bx bxs-error-circle'></i> {{ $message }} </span>
                @enderror
            </div>
            {{-- Tech stack field  --}}
            <div class="mb-3 relative">
                <label for="" class="absolute top-2 left-3 text-xs  font-rubik uppercase text-slate-400">Tech Stack</label>
                <select name="lang" id="lang" class="w-full rounded-lg pt-7 px-3 pb-2  @error('lang') border-red-500 @enderror">
                    <option value=""  class="font-rubik">Choose Language</option>
                    @foreach ($languages as $lang)
                        <option value="{{ $lang->id }}" class="font-rubik" @if ( $project['languages'][0]->pivot->lang_id == $lang->id)
                            selected
                        @endif>{{ $lang->name }}</option>
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
                <textarea id="summernote" class="w-full rounded-lg text-slate-700 dark:text-slate-300  @error('content') border-red-500 @enderror" name="content">
                    {{ $project->content }}
                </textarea>
                @error('content')
                    <span class="text-red-600 text-sm font-rubik"><i class='bx bxs-error-circle'></i> {{ $message }} </span>
                @enderror
            </div>
            {{-- Github field  --}}
            <div class="mb-3 relative">
                <label for="" class="absolute top-2 left-3 text-xs  font-rubik uppercase text-slate-400">GitHub</label>
                <input type="text" class="w-full rounded-lg pt-6  @error('github') border-red-500 @enderror" name="github"
                value="{{ $project->github }}">
                @error('github')
                    <span class="text-red-600 text-sm font-rubik"><i class='bx bxs-error-circle'></i> {{ $message }} </span>
                @enderror
            </div>
            {{-- Demo field  --}}
            <div class="mb-3 relative">
                <label for="" class="absolute top-2 left-3 text-xs  font-rubik uppercase text-slate-400">Demo (Optional) </label>
                <input type="text" class="w-full rounded-lg pt-6" name="demo" value="{{ $project->demo }}">
            </div>
            <button type="submit" class="px-4 py-2 bg-sky-500 text-slate-200 dark:bg-sky-800 dark:text-slate-300
            font-rubik uppercase rounded-lg">Update</button>
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

        // Define a JavaScript variable to hold the data
        var covers = {!! json_encode($project['covers']) !!};
        var image_count = $('#image_count').val(); // get the image count
        var max = 3; // max of image count
        console.log(`image count = ${image_count}`)

        // Transform the data into the format required by SpartanMultiImagePicker
        var coverData = covers.map(function(cover) {
            return {
                id: cover.id,
                src: "{{ asset('storage') }}" + '/' + cover.name,
                name: cover.name
            };
        });
        console.log(coverData)

        // for multi image picker config
        $("#demo").spartanMultiImagePicker({
            fieldName:  'fileUpload[]',
            rowHeight :'200px',
            maxCount : max - parseInt(image_count),
            groupClassName :'col-span-12 md:col-span-4 ',
            data: coverData,
        });

        // for summernote config
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
