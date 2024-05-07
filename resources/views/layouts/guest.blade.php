<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">

        <!-- Styles -->
        @livewireStyles
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
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>

    <!-- Toggling Dark and light Theme  -->
    <script>
        var themeToggleDarkIcon = document.getElementById(
            "theme-toggle-dark-icon"
        );
        var themeToggleLightIcon = document.getElementById(
            "theme-toggle-light-icon"
        );

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

        var themeToggleBtn = document.getElementById("theme-toggle");

        themeToggleBtn.addEventListener("click", function() {
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
</html>
