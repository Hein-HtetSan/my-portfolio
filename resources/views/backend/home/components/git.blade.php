
<div class="w-full h-dvh bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
    <form action="{{ route('profile.github.save') }}" class="w-4/12 bg-white dark:bg-gray-500 p-5 rounded-lg shadow-xl" method="POST" >
        @csrf
        <div class="mb-4  flex flex-col gap-3 items-start justify-center">
            {{-- back btn  --}}
            <a href="{{ route('dashboard') }}" class="text-slate-400 hover:text-sky-400">Back</a>
            {{-- input  --}}
            <label for="git_uname" class="text-md font-rubik text-slate-700 dark:text-slate-200">GitHub Username</label>
            <small class="text-yellow-500 dark:text-yellow-300 font-rubik">If your github profile is like this <b>https://github.com/lucas-henry.git</b>, your username is '<b>lucas-henry</b>'.</small>
            <input type="text" class="w-full rounded-lg text-slate-600 dark:text-slate-200 p-3
            bg-slate-200 dark:bg-slate-600 outline-sky-600" name="git_uname" value="{{ old('git_uname', $github->github) }}">
            @error('git_uname')
                <span class="mt-2 text-red-500 text-sm font-rubik dark:text-red-300">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4  flex flex-col gap-3 items-start justify-center">
            {{-- input  --}}
            <label for="git_api" class="text-md font-rubik text-slate-700 dark:text-slate-200">API Key</label>
            <small class="text-yellow-500 dark:text-yellow-300 font-rubik">To access your repo, use your github api key which is under
            <b>'profile > setting > Developer Setting > Personal Access Token'</b> and create one and paste it here</small>
            <input type="text" class="w-full rounded-lg text-slate-600 dark:text-slate-200 p-3
            bg-slate-200 dark:bg-slate-600 outline-sky-600" name="git_api" value="{{ old('git_api', $github->git_api) }}">
            @error('git_api')
                <span class="mt-2 text-red-500 text-sm font-rubik dark:text-red-300">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="px-5 py-2 rounded-lg bg-slate-300 hover:bg-slate-400 dark:hover:bg-sky-700
        text-slate-700 dark:text-slate-200 dark:bg-sky-600">Save</button>
    </form>

</div>
