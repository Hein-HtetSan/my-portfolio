<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">

<!-- Bxicons  -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">

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

{{-- editing componentes  --}}

@if (request()->routeIs('profile.intro'))
    {{-- intro edit page  --}}
    @include('backend.home.components.intro')
@elseif (request()->routeIs('profile.contact'))
    {{-- contact edit page  --}}
    @include('backend.home.components.contact')
@elseif (request()->routeIs('profile.github'))
    {{-- github edit page  --}}
    @include('backend.home.components.git')
@endif

{{-- end of editing components  --}}


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
