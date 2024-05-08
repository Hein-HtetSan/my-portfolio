@extends('welcome')

@section('title', 'contact')

@section('content')
    <section id="projects"
        class="flex font-rubik flex-col justify-center aligns-start px-10 lg:px-36 w-full h-auto  lg:h-dvh mb-24 lg:mb-0">

        <!-- TItle  -->
        <h1 class="block uppercase text-3xl mb-6 mt-14 mb:mt-0 md:mb-14 font-rubik font-medium text-zinc-600 dark:text-zinc-300 text-center">
            Contact 💌
        </h1>

        {{-- <x-splade-lazy> --}}
        <x-slot:placeholder>
            <div class="flex items-center justify-center w-full">
                <img src="{{ asset('image/Pulse@1x-0.9s-200px-200px.svg') }}" width="70" alt="">
                <h1 class="text-slate-600 dark:text-slate-500 text-xl">Loading contact information...</h1>
            </div>
        </x-slot:placeholder>

        <div class="flex flex-col lg:flex-row w-full items-start justify-center mb-5">
            <!-- Contact Information  -->
            <div class="w-full mb-24 lg:mb-0">
                <!-- Title  -->
                <span class="font-medium text-zinc-700 dark:text-zinc-400 text-2xl">Contact Information</span>
                <!-- Infor  -->
                <div class="mt-5 group text-slate-600 dark:text-zinc-400 flex aligns-center">
                    <i class="bx bx-envelope text-3xl me-3 text-zinc-600 dark:text-sky-400"></i> <span
                        class="text-zinc-700 text-slate-600 dark:text-zinc-400 mt-2">heinhtetsan33455@gmail.com</span>
                </div>
                <div class="mt-5 group text-slate-600 dark:text-zinc-400 flex aligns-center">
                    <i class="bx bx-phone text-3xl me-3 text-zinc-600 dark:text-sky-400"></i> <span
                        class="text-zinc-700 text-slate-600 dark:text-zinc-400 mt-2">+959 761 349 721</span>
                </div>
                <div class="mt-5 group text-slate-600 dark:text-zinc-400 flex aligns-center">
                    <i class="bx bx-map text-3xl me-3 text-zinc-600 dark:text-sky-400"></i> <span
                        class="text-zinc-700 text-slate-600 dark:text-zinc-400 mt-2">Yangon, Thongwa Township</span>
                </div>

                <div class="text-sm ms-1  mt-8 mb-5 dark:text-cyan-700 text-slate-400">Follow me on - </div>
                <!-- Social Media Link  -->
                <div class="flex flex-row items-center justify-start">
                    <a href=""
                        class="me-4 bg-zinc-400 dark:bg-sky-400 bg-opacity-50 hover:bg-opacity-30 hover:scale-110 transition ease-in-out delay-150 dark:hover:bg-opacity-30 shadow dark:bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center"><i
                            class="bx text-4xl text-zinc-600 dark:text-cyan-400 bxl-facebook"></i></a>
                    <a href=""
                        class="me-4 bg-zinc-400 dark:bg-sky-400 bg-opacity-50 hover:bg-opacity-30 hover:scale-110 transition ease-in-out delay-150 dark:hover:bg-opacity-30 shadow dark:bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center"><i
                            class="bx text-2xl text-zinc-600 dark:text-cyan-400 bxl-messenger"></i></a>
                    <a href=""
                        class="me-4 bg-zinc-400 dark:bg-sky-400 bg-opacity-50 hover:bg-opacity-30 hover:scale-110 transition ease-in-out delay-150 dark:hover:bg-opacity-30 shadow dark:bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center"><i
                            class="bx text-2xl text-zinc-600 dark:text-cyan-400 bxl-twitter"></i></a>
                    <a href=""
                        class="me-4 bg-zinc-400 dark:bg-sky-400 bg-opacity-50 hover:bg-opacity-30 hover:scale-110 transition ease-in-out delay-150 dark:hover:bg-opacity-30 shadow dark:bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center"><i
                            class="bx text-2xl text-zinc-600 dark:text-cyan-400 bxl-linkedin"></i></a>
                    <a href=""
                        class="me-4 bg-zinc-400 dark:bg-sky-400 bg-opacity-50 hover:bg-opacity-30 hover:scale-110 transition ease-in-out delay-150 dark:hover:bg-opacity-30 shadow dark:bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center"><i
                            class="bx text-2xl text-zinc-600 dark:text-cyan-400 bxl-github"></i></a>
                </div>
            </div>

            <!-- Contact Form  -->
            <div class="w-full">
                <!-- Message Form  -->
                <form action="{{ route('mail.send') }}" method="POST" class="">
                    @csrf
                    <!-- name -->
                    <div class=" mb-5">
                        <label for="email-address-icon"
                            class="block mb-2 text-sm font-medium text-gray-700 dark:text-zinc-300">Your
                            Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path
                                        d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                    <path
                                        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                </svg>
                            </div>
                            <input type="text" id="email-address-icon" name="sender_mail"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                focus:ring-sky-500 focus:border-sky-00 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                placeholder="name@example.com">
                        </div>
                    </div>
                    <!-- message  -->
                    <div class=" mb-5">
                        <label for="message" class="bldock mb-2 text-sm font-medium text-gray-700 dark:text-zinc-300 ">Your
                            message
                        </label>
                        <textarea id="message" rows="5" style="resize: none;" name="message"
                            class="mt-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-blue-500"
                            placeholder="Leave a comment..."></textarea>
                    </div>
                    <!-- Buttons  -->
                    <!-- send button  -->
                    <button id="sendButton"
                        class="text-sm flex items-center md:items-start bg-sky-700 rounded-full px-5 py-2 uppercase font-rubik text-gray-200 dark:bg-sky-900 dark:hover:bg-sky-700  dark:border-2 border-slate-500 hover:bg-sky-500 shadow-lg">
                        <span class="">Send</span> <i class="bx bx-send ml-1 text-lg"></i>
                    </button>
                </form>
            </div>

        </div>
        {{-- </x-splade-lazy> --}}
    </section>

<script>
    console.log('runing')
    document.getElementById('sendButton').addEventListener('click', function() {
    var button = this;
    var buttonText = button.querySelector('span');
    var icon = button.querySelector('i');

    console.log('clicked')

    // Disable button to prevent multiple clicks
    button.disabled = true;

    // Change button text to "Sending..."
    buttonText.textContent = 'Sending...';

    // Remove existing icon and replace with a spinning icon
    icon.classList.remove('bx-send');
    icon.classList.add('bx bx-loader bx-spin');

    // Perform the sending operation (e.g., AJAX request)
    // Once the operation is complete, re-enable the button and restore the original content
    setTimeout(function() {
        // Simulate sending operation completion
        // Remove spinner and restore original icon
        icon.classList.remove('bx-loader', 'bx-spin');
        icon.classList.add('bx-send');

        // Restore original button text
        buttonText.textContent = 'Send';

        // Re-enable the button
        button.disabled = false;
    }, 2000); // Replace 2000 with the duration of your sending operation in milliseconds
});
</script>


@endsection
