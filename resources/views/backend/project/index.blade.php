


<div class="p-3 md:p-5 h-auto ">

    <div class="flex flex-row items-center justify-between">
        {{-- Create button  --}}
        <a href="{{ route('project.create') }}"
            class="
    px-4 py-2 rounded-lg bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-200">
            <i class="bx bx-plus"></i> Create
        </a>
        {{-- Search Button  --}}
        <div class="relative">
            <input type="text" placeholder="Search..." class="w-full h-10 px-4 py-2 text-gray-700 text-slate-700 dark:text-slate-200
            bg-slate-100 dark:bg-slate-700 border border-gray-300 rounded-md focus:outline-none focus:border-slate-500 ">
            <button class="absolute top-0 right-0 mt-3 mr-4 focus:outline-none">
                <i class='bx bx-search text-slate-600 dark:text-slate-200'></i>
            </button>
        </div>

    </div>

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

    @if (count($projects) == 0)
        <h3 class="text-2xl uppercase font-rubik block text-center mt-10 text-slate-400">There's no project.</h3>
    @endif

    <div class="grid grid-cols-12 gap-4 block mt-6">

        @foreach ($projects as $project)
        <div class="col-span-12 md:col-span-4 text-slate-700 dark:text-slate-600">
            <div class=" rounded-lg shadow-2xl bg-white dark:bg-gray-800 overflow-hidden border-2
            border-slate-300 dark:border-slate-600">
                {{-- {{ $project }} --}}
                {{-- <img src="{{ asset('storage/' . $project['covers'][0]->name) }}" alt="" class="mb-3 w-full rounded-t-lg"
                style="width: 100% !important; height: 25vh !important;"> --}}
                {{-- card-body  --}}
                <div class="p-3">
                    {{-- Tech Stack  --}}
                    @foreach ($project['languages'] as $language)
                        <span class="px-5 py-1 font-normal rounded-full bg-sky-200 text-sky-600 dark:bg-sky-500
                        dark:text-sky-800 text-xs">{{ $language['name'] }}</span>
                    @endforeach
                    <h2 class="text-slate-700 mt-3 dark:text-slate-300 uppercase font-rubik font-semibold text-lg flex items-center justify-start gap-2">
                        {{ $project->title }}
                    </h2>
                    {{-- sub heading  --}}
                    <span class="text-slate-600 dark:text-slate-300 font-rubik font-regular text-md">
                        {{ $project->short_desc }}
                    </span>

                    {{-- links  --}}
                    <div class="flex items-center justify-between mt-5">
                        {{-- detail button  --}}
                        <div class="flex items-center justify-start gap-2">
                            <a href="{{ route('project.get', $project->id) }}" class="px-2 py-1 rounded-lg bg-sky-800 dark:bg-sky-600 text-slate-200 shadow">
                            <i class="bx bx-detail"></i> Detail
                            </a>
                            <a href="{{ route('project.destroy', $project->id) }}" class="px-2 py-1 rounded-lg
                                bg-red-600 dark:bg-red-400 text-slate-200 shadow
                            ">
                                <i class="bx bx-trash-alt"></i>
                            </a>
                        </div>

                        <div class="flex items-center justify-center gap-2">
                            {{-- demo link or github --}} {{-- github  --}}
                            @if ($project->github)
                                <a href="{{ $project->github }}" class="text-slate-300 dark:text-slate-500">
                                    <i class="bx bxl-github text-2xl"></i>
                                </a>
                            @endif
                            @if ($project->demo)
                                <a href="{{ $project->demo }}" class="">
                                    <i class="bx bx-play-circle text-md text-slate-300 dark:text-slate-500 text-2xl"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination  -->
    {{ $projects->links() }}

</div>

<script>
    // Function to hide the alert box after a certain duration
    setTimeout(function () {
        document.getElementById("alertBox").style.display = "none";
    }, 5000); // Hide the alert after 5 seconds
</script>
