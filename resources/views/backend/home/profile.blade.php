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

<div class="p-6 bg-white dark:bg-slate-800 rounded-lg shadow-xl">
    {{-- Title  --}}
    <h2 class="text-2xl mb-5 text-bold text-slate-400 dark:text-slate-300 font-rubik"> Profile</h2>
    <div class="flex items-center">
        <img src="{{ asset('image/profile.jpg') }}" alt="Profile Picture" class="w-12 h-12 rounded-full mr-4">
        <div>
            <h2 class="text-lg font-semibold text-sky-600 ml-2">{{ Auth::user()->name }}</h2>
            <p class="text-gray-500 px-4 py-1 bg-gray-100 text-sm rounded-3xl dark:bg-sky-200">Software Engineer Student</p>
        </div>
    </div>

    <div class="mb-5"></div>

    {{-- about description  --}}
    <span class="text-bold text-sky-600 text-md mt-5">Introduction <a href="{{ route('profile.intro') }}"><i class="bx bx-pencil"></i></a></span>
    @if (Auth::user()->introduce == null)
        <p class="text-slate-500 text-md capitalize">no message</p>
    @else
        <p class="text-slate-600 dark:text-slate-300">{{ Auth::user()->introduce }}</p>
    @endif

    <div class="mb-5"></div>

    {{-- contact information  --}}
    <span class="text-bold text-sky-600 text-md block ">Contact Information <a href="{{ route('profile.contact') }}"><i class="bx bx-pencil"></i></a> </span>
    <div class="mb-b">
        <p class="text-sm text-gray-400">Email: {{ Auth::user()->email }}</p>
        <p class="text-sm text-gray-400">Phone: {{ Auth::user()->phone ? Auth::user()->phone : 'Unknown' }}</p>
        <p class="text-sm text-gray-400">Address: {{ Auth::user()->address ? Auth::user()->address : 'Unknown' }}</p>
        <!-- Add more information here as needed -->
    </div>

    <div class="mb-5"></div>

    {{-- github --}}
    <span class="text-bold text-sky-600 text-md block ">Link <a href="{{ route('profile.github') }}"><i class="bx bx-pencil"></i></a> </span>
    @if (Auth::user()->github)
    <div class="mt-2 flex items-center justify-start">
        <a href="{{ Auth::user()->github }}" class="px-3 py-1 rounded-lg bg-slate-200 flex items-center gap-2 font-rubik hover:bg-slate-400">
            <i class="bx bxl-github"></i> <span class="text-md text-slate-600">GitHub</span>
        </a>
    </div>
    @endif
</div>

