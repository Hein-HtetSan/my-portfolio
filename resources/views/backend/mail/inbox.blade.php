




<div class="p-3 md:p-5 h-auto ">

    <div class="flex flex-row items-center justify-between">
        {{-- Create button  --}}
        {{-- <a href="{{ route('project.create') }}"
            class="
    px-4 py-2 rounded-lg bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-200">
            <i class="bx bx-plus"></i> Create
        </a> --}}
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

    @if (count($mails) == 0)
        <h3 class="text-2xl uppercase font-rubik block text-center mt-10 text-slate-400">no messages.</h3>
    @endif

    <div class="grid grid-cols-12 gap-4 block mt-6 flex flex-col items-center justify-center ">
        {{-- list of message  --}}
        @foreach ($mails as $mail)
        <div class="col-span-12 md:col-span-9 px-6 py-4 bg-white shadow-xl dark:bg-gray-600 rounded-lg border border-slate-400" >
            <div class="grid grid-cols-12">
                <div class="col-span-8 flex flex-col items-start justify-center">
                    <h4 class="text-slate-700 dark:text-slate-300 text-md font-semibold">{{ $mail->sender_mail }}</h4>
                    <p class="text-slate-600 dark:text-slate-400">{{ Str::limit($mail->message, 60, '...') }}                    </p>
                </div>
                <div class="col-span-4 flex items-center justify-end gap-3">
                    <a href="" ><i class="bx bx-send text-xl text-slate-600 dark:text-slate-400 hover:text-sky-500 dark:hover:text-sky-300"></i></a>
                    <a href="{{ route('mail.star', $mail->id) }}"><i class="bx {{ $mail->status == 1 ? 'bxs-star text-yellow-600 dark:text-yellow-400' : 'bx-star text-slate-600 dark:text-slate-400' }} text-xl hover:text-yellow-500 dark:hover:text-yellow-300"></i></a>
                    <a href=""><i class="bx bx-box text-xl text-slate-600 dark:text-slate-400 hover:text-green-500 dark:hover:text-green-300"></i></a>
                    <a href=""><i class="bx bx-trash text-xl text-slate-600 dark:text-slate-400 hover:text-red-500 dark:hover:text-red-300"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination  -->
    {{ $mails->links() }}

</div>

<script>
    // Function to hide the alert box after a certain duration
    setTimeout(function () {
        document.getElementById("alertBox").style.display = "none";
    }, 5000); // Hide the alert after 5 seconds
</script>
