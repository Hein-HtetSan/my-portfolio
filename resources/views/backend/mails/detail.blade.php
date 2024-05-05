

<div class="p-3 md:p-5 h-auto ">

    <div class="flex flex-row items-center justify-between">
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

    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 border border-slate-400 shadow-md rounded-md overflow-hidden mt-10 font-rubik">
        <div class="px-6 py-4">
            <a href="{{ route('mail.list') }}" class="text-slate-400 dark:text-slate-500 hover:text-sky-500 dark:hover:text-sky-400">Back</a>
            <div class="text-xl mb-2 text-slate-600 dark:text-slate-400 flex flex-row items-center justify-between">
                <h4>Mail</h4>
                <div class="flex flex-row items-center justify-end gap-3">
                    @if ($mail->status >= 0)
                    {{-- star icon  --}}
                    <a href="{{ $mail->status != 1 ? route('mail.star', $mail->id) : route('mail.unstar', $mail->id) }}">
                        <i class="bx {{ $mail->status == 1 ? 'bxs-star text-yellow-600 dark:text-yellow-400' : 'bx-star text-slate-600 dark:text-slate-400' }} text-xl hover:text-yellow-500 dark:hover:text-yellow-300"></i>
                    </a>
                    @endif
                    {{-- archive icon  --}}
                    <a href="{{ $mail->status != -1 ? route('mail.archive', $mail->id) : route('mail.unstar', $mail->id) }}">
                        <i class="bx {{ $mail->status == -1 ? 'bxs-box text-green-600 dark:text-green-400' : 'bx-box text-slate-600 dark:text-slate-400' }} text-xl text-slate-600 dark:text-slate-400 hover:text-green-500 dark:hover:text-green-300"></i>
                    </a>
                    {{-- trash icon  --}}
                    @if($mail->status >= -1)
                    <a href="{{ $mail->status != -2 ? route('mail.trash', $mail->id) : route('mail.untrash', $mail->id) }}">
                        <i class="bx bx-trash text-xl text-slate-600 dark:text-slate-400 hover:text-red-500 dark:hover:text-red-300"></i>
                    </a>
                    @endif
                    {{-- Delete icon  --}}
                    @if ($mail->status == -2)
                    <a href="{{ route('mail.destroy', $mail->id) }}"
                        class="px-3 py-2 rounded-lg bg-red-400 dark:bg-red-300 text-slate-50 dark:text-slate-800 text-sm">
                        Delete
                    </a>
                    @endif
                </div>
            </div>
            <p class="text-gray-700 dark:text-gray-300 text-base">
                <!-- Mail content goes here -->
                {{ $mail->message }}
            </p>
        </div>
        <div class="px-6 py-4">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-gray-400"></div>
                <div class="ml-3">
                    <p class="text-gray-900 dark:text-gray-200 text-sm font-semibold">Subscriber</p>
                    <p class="text-gray-600 dark:text-gray-400 text-xs">{{ $mail->sender_mail }}</p>
                </div>
            </div>
        </div>
        {{-- <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 dark:bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-200 mr-2">#tag1</span>
            <span class="inline-block bg-gray-200 dark:bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-200">#tag2</span>
        </div> --}}
        <form id="replyForm" class="hidden px-6 py-4" method="POST" action="{{ route('mail.reply', $mail->id) }}">
            @csrf
            <!-- Your reply form content goes here -->
            <h3 class="text-sky-600 dark:text-sky-500">to: <span>{{ $mail->sender_mail }}</span></h3>
            <div class="mb-3">
                <textarea name="message" id="" rows="5" style="resize: none;"
                class="p-3 w-full mt-3 rounded-lg bg-gray-200 dark:bg-gray-700 text-slate-600 dark:text-slate-300"> </textarea>
            </div>
            <button type="submit" class="px-4 py-2 text-slate-600 dark:text-slate-400 bg-slate-300 dark:bg-gray-600 text-sm rounded-lg
            hover:bg-sky-700 hover:text-slate-200 hover:dark:bg-sky-400 hover:dark:text-slate-100">
                <i class="bx bx-send"></i> Send
            </button>
        </form>
        <div class="px-6 py-4">
            <button id="replyBtn" class="bg-slate-500 hover:bg-slate-700 text-white py-2 px-4 rounded">
               Reply
            </button>
            <a href="{{ route('mail.destroy', $mail->id) }}" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded ml-2">
                <i class="bx bx-trash"></i> Delete Permanently
            </a>
        </div>
    </div>


</div>

<script>

// display reply form
document.getElementById("replyBtn").addEventListener("click", function() {
    var replyBtn = document.getElementById("replyBtn");
    var replyForm = document.getElementById("replyForm");

    if (replyBtn.innerText.trim() === "Reply") {
        replyBtn.innerText = "Cancel";
        replyForm.classList.remove("hidden");
    } else {
        replyBtn.innerText = "Reply";
        replyForm.classList.add("hidden");
    }
});


    // Function to hide the alert box after a certain duration
    setTimeout(function () {
        document.getElementById("alertBox").style.display = "none";
    }, 5000); // Hide the alert after 5 seconds
</script>
