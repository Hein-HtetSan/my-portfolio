@extends('welcome')

@section('title', 'me')

@section('content')
    <!-- Dashboard Section  -->
    <section id="home" class="grid grid-cols-3 h-dvh items-center my-6 md:my-0">

        <!-- Image  -->
        <div class="col-span-4 md:col-span-1">
            <div class="flex items-center justify-center ml-0 md:ml-24">
                <img src="{{ asset('image/profile.jpg') }}" class="object-fill  rounded-full shadow-lg border-4 border-zinc-100 w-72 h-72"
                    alt="">
            </div>
        </div>

        <div class="text-center col-span-4 md:col-span-2">

            <!-- Name -->
            <h3 class="uppercase font-medium font-rubik text-3xl mb-5 md:mb-5 text-gray-700 dark:text-zinc-300">Hein Htet
                San</h3>

            <!-- What I do  -->
            <div class="h-10">
                <div class="word mb-6 font-rubik font-medium text-gray-800 text-xl dark:text-zinc-300"></div>
            </div>

            <!-- Introduction  -->
            <div class=" text-gray-800 font-rubik mb-8 md:mb-5 px-10 md:px-32  dark:text-slate-400">
                I'm a student at the University of Computer Studies Yangon, passionate about web development and Java
                Enterprise apps. I'm also interest in Maching Learning and Artificial Intelligence. Join me in the
                tech-creative blend!
            </div>

            <!-- Buttons  -->
            <div class="flex flex-col sm:flex-row items-center justify-center">
                <!-- Download cv  -->
                <a href="{{ route('download.cv') }}"
                    class="text-sm flex items-center bg-sky-700 rounded-full px-5 py-2 uppercase font-rubik text-gray-200  border-slate-500 hover:bg-sky-500 shadow-lg">
                    <i class="bx bx-file me-1 text-lg"></i> <span class="md:mt-1">Download CV</span>
                </a>

                <div class="mx-1 my-2"></div>

                <!-- Hire me  -->
                <button
                    class="text-sm bg-gray-600 rounded-full px-5 py-2 uppercase font-rubik text-gray-200 border-slate-500 hover:bg-gray-500 shadow-lg flex items-center">
                    <i class="bx bx-rocket me-1 text-lg"></i> <span class="md:mt-1">Hire me</span>
                </button>
            </div>
        </div>

    </section>
    <!-- End of Dashboard Section  -->

    <!-- About Section  -->
    <section id="about"
        class="flex flex-col justify-center aligns-center px-10 lg:px-64 w-full h-auto space-x-5 lg:h-dvh mb-24 lg:mb-0">

        <h1 class="uppercase text-3xl mb-10 font-rubik font-medium text-zinc-600 text-center  dark:text-zinc-300">Who Am I?
        </h1>

        <div class="flex flex-col lg:flex-row items-center justify-center">
            <!-- Content  -->
            <div class="content px-3 lg:px-10  dark:text-slate-400">
                <p class="indent-10 font-rubik text-gray-800 text-justify mb-2 dark:text-slate-400">
                    Hello, I'm a passionate Software Engineering student currently in my 4th semester at the University of
                    Computer
                    Studies Yangon. Proficient in HTML, CSS, JavaScript, PHP, Laravel, and MySQL, I specialize in creating
                    engaging
                    websites and robust Java Enterprise applications.
                </p>

                <p class="indent-10 font-rubik text-gray-800 text-justify mb-2 dark:text-slate-400">
                    My academic journey has equipped me with a solid foundation in data structures, algorithms, and
                    programming
                    languages like Java and C++. With a focus on Knowledge Engineering, I delve into the realms of
                    Artificial
                    Intelligence and Machine Learning, showcasing my continuous quest for knowledge.
                </p>

                <p class="indent-10 font-rubik text-gray-800 text-justify dark:text-slate-400">
                    Having honed my design skills using tools like Figma, I bring a creative touch to every web project.
                    Explore
                    my
                    portfolio to witness the fusion of coding expertise and design finesse. Let's build the future of
                    technology
                    together!
                </p>
            </div>
        </div>
    </section>
    <!-- End of About Section  -->
@endsection
