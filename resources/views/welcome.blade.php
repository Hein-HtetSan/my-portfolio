<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hein Htet San | @yield('title')</title>
    {{-- icon  --}}
    <link rel="icon" href="{{ asset('image/tab-icon.svg') }}">
    <!-- Bxicons  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- text animated  -->
    {{-- <script src="./js/text-animate.js"></script> --}}
    @vite('resources/js/direct.js')

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwindcss Config  -->
    <script>
        tailwind.config = {
            content: ["./*.blade.php"],
            theme: {
                extend: {
                    colors: {
                        primary: {
                            blue: {
                                light: "#00ccdd"
                            }
                        }
                    },
                    fontFamily: {
                        rubik: ["Rubik", 'sans-serif']
                    }
                }
            },
            darkMode: "class",
        };
    </script>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>

    <!-- More style  -->
    <style>
        * {
            scroll-behavior: smooth;
        }
    </style>

</head>

<body class="bg-gray-100 dark:bg-slate-800 scrollbar-thin">

    <!-- Modal backdrop -->
    <div id="modalBackdrop"
        class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 hidden font-rubik">
        <!-- Modal container -->
        <div class="bg-slate-50 dark:bg-slate-800 border-slate-300 border-2 p-8 rounded-lg shadow-lg w-full max-w-md">
            <!-- Modal content -->
            <h2 class="text-xl font-regular text-slate-600 mb-2 dark:text-slate-200 font-rubik">Welcome Back! <span
                    class="text-sky-600 font-semibold">Lucas Hein</span> </h2>

            <!-- Your form content -->
            <form class="mb-3" method="POST" action="{{ route('user.check') }}">
                @csrf
                <input type="text"
                    class="w-full border-r-4 border-slate-300 border-1 font-rubik text-slate-700 p-3
                rounded bg-slate-200 dark:bg-slate-500 dark:focus:border-slate-100 dark:text-slate-200"
                    name="route" placeholder="example cd me">
            </form>
            <small class="block text-sm text-red-600 dark:text-yellow-200 font-rubik"> <b class="">Ctrl+B:</b> to
                open terminal <br> <b class="">Ctrl+X:</b> to exit </small>
        </div>
    </div>


    <!-- Navbar  -->
    @include('parts.navbar')
    <!-- End of Navbar  -->

    <main class="p-4">

        {{-- main section  --}}
        @yield('content')


        {{-- session error  --}}
        @if (session('error'))
            <div id="alertBox"
                class="bg-red-200 px-4 py-3 rounded shadow-md mx-auto w-max z-100 fixed bottom-5 left-0 right-0  mx-auto w-max">
                <div class="max-w-xl mx-auto">
                    <p class="text-red-800">{{ session('error') }}</p>
                </div>
            </div>
        @endif

        {{-- session success  --}}
        @if (session('success'))
            <div id="alertBox"
                class="bg-green-200 px-4 py-3 rounded shadow-md mx-auto w-max z-100 fixed bottom-5 left-0 right-0  mx-auto w-max">
                <div class="max-w-xl mx-auto">
                    <p class="text-green-800">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        {{-- validation error  --}}
        @if ($errors->any())
            <div id="alertBox"
                class="bg-red-200 px-4 py-3 rounded shadow-md mx-auto w-max z-100 fixed bottom-5 left-0 right-0 mx-auto w-max">
                <div class="max-w-xl mx-auto">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-800">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <!-- Footer  -->
        @include('parts.footer')

    </main>

    <!-- Scroll reveal section -->
    <script>
        let Reveal = ScrollReveal();
        Reveal.reveal('.image', {
            duration: 1000,
            scale: 0.8,
            distance: '20px',
            reset: true
        });
        Reveal.reveal('.me-content', {
            duration: 800,
            scale: 0.6,
            distance: '30px',
            reset: true
        });
        Reveal.reveal('.me-title', {
            duration: 1000,
            distance: '20px',
            origin: 'top',
            reset: true
        });
        Reveal.reveal('.me-buttons', {
            duration: 1000,
            distance: '30px',
            origin: 'bottom',
            reset: true
        });
        Reveal.reveal('.me-about-content', {
            duration: 2000,
            distance: '50px',
            origin: 'left',
            opacity: 0,
            reset: true
        });
        Reveal.reveal('.me-about-icons', {
            duration: 1000,
            distance: '20px',
            origin: 'top',
            opacity: 0,
            reset: true
        });
        Reveal.reveal('.me-contact', {
            duration: 2000,
            distance: '30px',
            origin: 'top',
            opacity: 0,
            reset: true
        });
        Reveal.reveal('.me-follow-more', {
            duration: 2000,
            distance: '50px',
            origin: 'bottom',
            opacity: 0,
            reset: true
        });
        Reveal.reveal('.work', {
            duration: 2000,
            distance: '30px',
            origin: 'top',
            opacity: 0,
            reset: true
        });
    </script>

    <!-- Toggling Dark and light Theme  -->
    <script>
        var themeToggleDarkIcon = document.getElementById(
            "theme-toggle-dark-icon"
        );
        var themeToggleLightIcon = document.getElementById(
            "theme-toggle-light-icon"
        );
        console.log('theme section')
        // Change the icons inside the button based on previous settings
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            themeToggleLightIcon.classList.remove("hidden");
        } else {
            themeToggleDarkIcon.classList.remove("hidden");
        }

        var themeToggleBtn = document.querySelector("#theme-toggle");

        themeToggleBtn.addEventListener("click", function() {
            console.log('clicked')
            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle("hidden");
            themeToggleLightIcon.classList.toggle("hidden");

            // if set via local storage previously
            if (localStorage.getItem("color-theme")) {
                if (localStorage.getItem("color-theme") === "light") {
                    document.documentElement.classList.add("dark");
                    localStorage.setItem("color-theme", "dark");
                } else {
                    document.documentElement.classList.remove("dark");
                    localStorage.setItem("color-theme", "light");
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains("dark")) {
                    document.documentElement.classList.remove("dark");
                    localStorage.setItem("color-theme", "light");
                } else {
                    document.documentElement.classList.add("dark");
                    localStorage.setItem("color-theme", "dark");
                }
            }
        });
    </script>

    <!-- Type writer effect  -->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

    <!-- Flowbite js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

    <!-- Jquery Cdn js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- text animation  -->
    <script>
        var words = ['Web Developer', 'Software Engineer Student'],
            part,
            i = 0,
            offset = 0,
            len = words.length,
            forwards = true,
            skip_count = 0,
            skip_delay = 15,
            speed = 50;
        var wordflick = function() {
            setInterval(function() {
                if (forwards) { 
                    if (offset >= words[i].length) {
                        ++skip_count;
                        if (skip_count == skip_delay) {
                            forwards = false;
                            skip_count = 0;
                        }
                    }
                } else {
                    if (offset == 0) {
                        forwards = true;
                        i++;
                        offset = 0;
                        if (i >= len) {
                            i = 0;
                        }
                    }
                }
                part = words[i].substr(0, offset);
                if (skip_count == 0) {
                    if (forwards) {
                        offset++;
                    } else {
                        offset--;
                    }
                }
                $('.word').text(part);
            }, speed);
        };

        $(document).ready(function() {
            wordflick();
        });
    </script>

</body>

</html>
