
<div class="w-full h-dvh bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
    <form action="{{ route('profile.contact.save') }}" class="w-4/12 bg-white dark:bg-gray-500 p-5 rounded-lg shadow-xl" method="POST" >
        @csrf
        <div class="mb-4  flex flex-col gap-3 items-start justify-center">
            {{-- back btn  --}}
            <a href="{{ route('dashboard') }}" class="text-slate-400 hover:text-sky-400">Back</a>
            {{-- input  --}}
            <label for="phone" class="text-lg font-rubik text-slate-700 dark:text-slate-300">Phone</label>
            <input type="number" class="w-full rounded-lg text-slate-600 dark:text-slate-200 p-3
            bg-slate-200 dark:bg-slate-600 outline-sky-600" name="phone" value="{{ old('phone', $contact->phone) }}">
            @error('phone')
                <span class="mt-2 text-red-500 text-sm font-rubik dark:text-red-300">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4  flex flex-col gap-3 items-start justify-center">
            {{-- input  --}}
            <label for="address" class="text-lg font-rubik text-slate-700 dark:text-slate-300">Address</label>
            <input type="text" class="w-full rounded-lg text-slate-600 dark:text-slate-200 p-3
            bg-slate-200 dark:bg-slate-600 outline-sky-600" name="address" value="{{ old('address', $contact->address) }}">
            @error('address')
                <span class="mt-2 text-red-500 text-sm font-rubik dark:text-red-300">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="px-5 py-2 rounded-lg bg-slate-300 hover:bg-slate-400 dark:hover:bg-sky-700
        text-slate-700 dark:text-slate-200 dark:bg-sky-600">Save</button>
    </form>

</div>
