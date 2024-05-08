

<div class="w-full h-dvh bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
    <form action="{{ route('profile.intro.save') }}" class="w-4/12 bg-white dark:bg-gray-500 p-5 rounded-lg shadow-xl" method="POST" >
        @csrf
        <div class="mb-4  flex flex-col gap-3 items-start justify-center">
            {{-- back btn  --}}
            <a href="{{ route('dashboard') }}" class="text-slate-400 hover:text-sky-400">Back</a>
            {{-- input  --}}
            <label for="intro" class="text-lg font-rubik text-slate-700 dark:text-slate-300">Introduce Yourself</label>
            <textarea name="intro" id="intro" class="w-full rounded-lg text-slate-600 dark:text-slate-200 p-3
            bg-slate-200 dark:bg-slate-600 outline-sky-600" style="resize: none;" rows="7">{{ old('intro', $intro) }}</textarea>
            @error('intro')
                <span class="mt-2 text-red-500 text-sm font-rubik dark:text-red-300">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="px-5 py-2 rounded-lg bg-slate-300 hover:bg-slate-400 dark:hover:bg-sky-700
        text-slate-700 dark:text-slate-200 dark:bg-sky-600">Save</button>
    </form>

</div>
