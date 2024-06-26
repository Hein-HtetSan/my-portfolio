@extends('welcome')

@section('title', 'me')

@section('content')

    <!-- Dashboard Section  -->
    <section id="home" class="grid grid-cols-3 space-y-5 h-auto items-center my-10 mb-20 mt-10 md:mb-48 md:mt-28">

        <!-- Image  -->
        <div class="col-span-3 md:col-span-1 mb-20 md:mb-0">
            <div class="flex image items-center justify-center ml-0 md:ml-24">
                <img src="data:image/jpg;base64,{{ base64_encode($user->profile_photo->getData()) }}"
                    class="object-fill rounded-full
                shadow-lg border-4 border-zinc-100 w-64 h-64 md:w-80 md:h-80"
                    alt="">
            </div>
        </div>

        <div class="text-center col-span-3 md:col-span-2">

            <!-- Name -->
            <h3 class="uppercase font-medium me-title font-rubik text-3xl mb-5 md:mb-5 text-gray-700 dark:text-zinc-300">I'm
                <span class="text-sky-600 dark:text-sky-400">{{ $user->name }} 👋</span>
            </h3>

            <!-- What I do  -->
            <div class="h-10">
                <div class="word mb-6 font-rubik font-medium text-gray-800 text-xl dark:text-zinc-300"></div>
            </div>

            <!-- Introduction  -->
            <div class="me-content text-gray-800 font-rubik mb-8 md:mb-5 px-6 md:px-32  dark:text-slate-400">
                I'm a student at the University of
                Computer Studies
                Yangon, passionate about Software Engineering.
                I'm also interest in Maching Learning and Artificial Intelligence. <span class="bg-sky-200 dark:bg-sky-800">
                    Join me in the
                    tech-creative blend! </span> 📌
            </div>

            <!-- Buttons  -->
            <div class="flex me-buttons flex-col sm:flex-row items-center justify-center">
                <!-- Download cv  -->
                <a href="{{ $user->cv_form != null ? route('download.cv') : '' }}"
                    @if ($user->cv_form == null) style="pointer-events: none; cursor: not-allowed;" alt="No file found!" @endif
                    class="text-sm flex items-center {{ $user->cv_form == null ? 'bg-red-500' : 'bg-sky-700' }} rounded-full px-5 py-2
                    uppercase font-rubik text-gray-200  border-slate-500 hover:bg-sky-500 shadow-lg">
                    <i class="bx bx-file me-1 text-lg"></i> <span class="md:mt-1">
                        {{ $user->cv_form == null ? 'Sorry, Not uploaded!' : 'Download CV' }}
                    </span>
                </a>

                <div class="mx-1 my-2"></div>

                <!-- Hire me  -->
                <a href="tel:+959761349721"
                    class="text-sm bg-gray-600 rounded-full px-5 py-2 uppercase font-rubik text-gray-200 border-slate-500 hover:bg-gray-500 shadow-lg flex items-center">
                    <i class="bx bx-rocket me-1 text-lg"></i> <span class="md:mt-1">Hire me</span>
                </a>
            </div>
        </div>

    </section>
    <!-- End of Dashboard Section  -->

    {{-- divider  --}}
    <div class="my-20 md:my-0"></div>


    <!-- About Section  -->
    <section id="about"
        class="flex flex-col mt-12 md:mt-0 justify-center aligns-center px-5 lg:px-64 w-full h-auto mb-20">

        <h1 class="uppercase  text-3xl mb-10 font-rubik font-medium text-zinc-600 text-center  dark:text-zinc-300">
            Who Am I? 🙂
        </h1>

        <div class="flex flex-col md:flex-row items-center justify-center">
            <!-- Content  -->
            <div class="me-about-content content md:px-10  dark:text-slate-400">
                <p class="indent-10 font-rubik text-gray-800 text-justify mb-2 dark:text-slate-400">
                    Hello! I'm a passionate Software Engineering student in my 4th semester
                    at the University of Computer Studies Yangon. I specialize in creating engaging
                    websites and robust Java Enterprise applications using HTML, CSS, JavaScript, PHP,
                    Laravel, and MySQL. My academic journey has provided me with a strong foundation in
                    data structures, algorithms, and programming languages like Java and C++. I also focus
                    on Knowledge Engineering, delving into Artificial Intelligence and Machine Learning.
                    With design skills honed using Figma, I bring a creative touch to every project.
                    Explore my portfolio to see the fusion of coding expertise and design finesse
                </p>
            </div>
        </div>
    </section>
    <!-- End of About Section  -->


    {{-- language logo  --}}
    <div class="w-full mb-24 md:mb-20">
        <div class="text-center me-about-icons">
            <i
                class="mx-1 bx bxl-html5 text-orange-600 dark:text-orange-400 text-3xl bg-orange-200 bg-opacity-50 dark:bg-opacity-30 rounded-full p-3"></i>
            <i
                class="mx-1 bx bxl-css3 text-blue-600 dark:text-blue-400 text-3xl bg-blue-200 bg-opacity-50 dark:bg-opacity-30 rounded-full p-3"></i>
            <i
                class="mx-1 bx bxl-java text-red-600 dark:text-red-400 text-3xl bg-red-200 bg-opacity-50 dark:bg-opacity-30 rounded-full p-3"></i>
            <i
                class="mx-1 bx bxl-python text-sky-600 dark:text-sky-400 text-3xl bg-sky-200 bg-opacity-50 dark:bg-opacity-30 rounded-full p-3"></i>
            <i
                class="mx-1 bx bxl-php text-indigo-600 dark:text-indigo-400 text-3xl bg-indigo-200 bg-opacity-50 dark:bg-opacity-30 rounded-full p-3"></i>
            <i
                class="mx-1 bx bxl-c-plus-plus text-purple-600 dark:text-purple-400 text-3xl bg-purple-200 bg-opacity-50 dark:bg-opacity-30 rounded-full p-3"></i>
            <i
                class="mx-1 bx bxl-javascript text-yellow-600 dark:text-yellow-400 text-3xl bg-yellow-200 bg-opacity-50 dark:bg-opacity-30 rounded-full p-3"></i>
            <i
                class="mx-1 bx bxl-bootstrap text-blue-600 dark:text-blue-400 text-3xl bg-blue-200 bg-opacity-50 dark:bg-opacity-30 rounded-full p-3"></i>
            <i
                class="mx-1 bx bxl-tailwind-css text-sky-600 dark:text-sky-400 text-3xl bg-sky-200 bg-opacity-50 dark:bg-opacity-30 rounded-full p-3"></i>
        </div>
    </div>

    <!-- Contact Information  -->
    <div class="w-full mb-28 lg:mb-0">
        <div class="flex flex-col md:flex-row items-center gap-0 md:gap-12 justify-center me-contact">
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
        </div>
    </div>

    <!-- Contact Form  -->
    <div class="w-full mb-24 lg:mb-0">
        <!-- Social Media Link  -->
        <div class="text-sm ms-1  mt-8 mb-5 dark:text-cyan-700 text-slate-400 text-center underline decoration-sky-500">
            Follow me on - </div>

        <div class="flex flex-row items-center justify-center gap-4 mb-16 me-follow-more">
            <a href="https://x.com/heinhtetsamm?t=-qUK-HPpHf2ZZPAzlqb5IA&s=09"
                class="me-4 bg-zinc-400 dark:bg-sky-400 bg-opacity-50 hover:bg-opacity-30 hover:scale-110 transition ease-in-out delay-150 dark:hover:bg-opacity-30 shadow dark:bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center"><i
                    class="bx text-2xl text-zinc-600 dark:text-cyan-400 bxl-twitter"></i></a>
            <a href="https://www.linkedin.com/in/hein-htet-san-849b332a7"
                class="me-4 bg-zinc-400 dark:bg-sky-400 bg-opacity-50 hover:bg-opacity-30 hover:scale-110 transition ease-in-out delay-150 dark:hover:bg-opacity-30 shadow dark:bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center"><i
                    class="bx text-2xl text-zinc-600 dark:text-cyan-400 bxl-linkedin"></i></a>
            <a href="https://github.com/Hein-HtetSan"
                class="me-4 bg-zinc-400 dark:bg-sky-400 bg-opacity-50 hover:bg-opacity-30 hover:scale-110 transition ease-in-out delay-150 dark:hover:bg-opacity-30 shadow dark:bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center"><i
                    class="bx text-2xl text-zinc-600 dark:text-cyan-400 bxl-github"></i></a>
            <a href="https://www.instagram.com/heinhtetsamm?igsh=NmM2bGd3Z2swZDk3"
                class="me-4 bg-zinc-400 dark:bg-sky-400 bg-opacity-50 hover:bg-opacity-30 hover:scale-110 transition ease-in-out delay-150 dark:hover:bg-opacity-30 shadow dark:bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center"><i
                    class="bx text-2xl text-zinc-600 dark:text-cyan-400 bxl-instagram"></i></a>
        </div>

    </div>
    </div>


@endsection
