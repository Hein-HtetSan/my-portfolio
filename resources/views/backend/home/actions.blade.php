<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- Bunch of buttons  --}}
<div class="flex flex-col md:flex-row gap-2">
    <a href="{{ route('project.create') }}"
        class="group block max-w-xs mx-auto rounded-lg p-6 bg-white ring-1 dark:bg-gray-800
         ring-slate-900/54 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
        <div class="flex items-center space-x-3">
            <i class="fa-solid fa-diagram-project group-hover:text-white dark:text-slate-300"></i>
            <h3 class="text-slate-900 group-hover:text-white text-sm font-semibold dark:text-slate-300">Add new project</h3>
        </div>
        <p class="text-slate-500 group-hover:text-white text-sm dark:text-gray-300">Create a new project from a variety of starting
            templates.</p>
    </a>
    <a href="#"
        class="group block max-w-xs mx-auto rounded-lg p-6 bg-white ring-1 ring-slate-900/54 dark:bg-gray-800
         shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
        <div class="flex items-center space-x-3">
            <i class="fas fa-shapes group-hover:text-white dark:text-slate-300"></i>
            <h3 class="text-slate-900 group-hover:text-white text-sm font-semibold dark:text-slate-300">Create new blog</h3>
        </div>
        <p class="text-slate-500 group-hover:text-white text-sm dark:text-gray-300">Create a new project from a variety of starting
            templates.</p>
    </a>
    <a href="{{ Auth::user()->github }}" target="_blank"
        @if (Auth::user()->github == null)
            style="pointer-events: none; cursor: not-allowed;"
        @endif
        class="group block max-w-xs mx-auto rounded-lg p-6  ring-1 ring-slate-900/54
        {{ Auth::user()->github ? 'bg-white dark:bg-gray-800' : 'bg-gray dark:bg-gray-600' }}
        shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
        <div class="flex items-center space-x-3 text-slate-600 dark:text-slate-400">
            <i class="fab fa-github group-hover:text-white dark:text-slate-300"></i>
            <h3 class="text-slate-900 dark:text-slate-300 group-hover:text-white text-sm font-semibold ">Explore Projects</h3>
        </div>
        <p class="text-slate-600 dark:text-slate-300 group-hover:text-white text-sm">Create a new project from a variety of starting
            templates.</p>
    </a>
</div>
{{-- end of bunch of buttons  --}}
