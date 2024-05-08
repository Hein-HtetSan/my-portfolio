<style>
    body {
        font-family: 'Open Sans', sans-serif;
    }

    #signUpForm {
        max-width: 500px;
    }

    #signUpForm .form-header .stepIndicator.active {
        font-weight: 600;
    }

    #signUpForm .form-header .stepIndicator.finish {
        font-weight: 600;
        color: #5a67d8;
    }

    #signUpForm .form-header .stepIndicator::before {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        z-index: 9;
        width: 20px;
        height: 20px;
        background-color: #c3dafe;
        border-radius: 50%;
        border: 3px solid #ebf4ff;
    }

    #signUpForm .form-header .stepIndicator.active::before {
        background-color: #a3bffa;
        border: 3px solid #c3dafe;
    }

    #signUpForm .form-header .stepIndicator.finish::before {
        background-color: #5a67d8;
        border: 3px solid #c3dafe;
    }

    #signUpForm .form-header .stepIndicator::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 8px;
        width: 100%;
        height: 3px;
        background-color: #f3f3f3;
    }

    #signUpForm .form-header .stepIndicator.active::after {
        background-color: #a3bffa;
    }

    #signUpForm .form-header .stepIndicator.finish::after {
        background-color: #5a67d8;
    }

    #signUpForm .form-header .stepIndicator:last-child:after {
        display: none;
    }

    #signUpForm input.invalid {
        border: 2px solid #ffaba5;
    }

    #signUpForm .step {
        display: none;
    }
</style>

<x-guest-layout>


        <form id="signUpForm" class="p-10 shadow-md rounded-2xl bg-white mx-auto border-solid border-2 mt-10
            border-gray-100 mb-8"
            action="{{ route('register') }}" method="POST">
            @csrf
            <!-- start step indicators -->
            <div class="form-header flex gap-3 mb-4 text-xs text-center">
                <span class="stepIndicator flex-1 pb-8 relative">Personal Detail</span>
                <span class="stepIndicator flex-1 pb-8 relative">Account Setup</span>
                <span class="stepIndicator flex-1 pb-8 relative">Done</span>
            </div>
            <!-- end step indicators -->
            <!-- step one -->
            <div class="step">
                <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5">Personal Detail</p>

                <div class="mb-6">
                    <input type="text" placeholder="Name" name="name" value="{{ old('name') }}"
                        class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                        oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
                    @error('name')
                        <small class="text-red-500 font-rubik font-semibold">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-6">
                    <input type="number" placeholder="Age" name="age" value="{{ old('age') }}"
                        class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                        oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
                    @error('age')
                        <small class="text-red-500 font-rubik font-semibold">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-6">
                    <input type="date" placeholder="Birthday (eg. month-day-year)" name="date_of_birth" value="{{ old('birth') }}"
                        class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                        oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
                    @error('date_of_birth')
                        <small class="text-red-500 font-rubik font-semibold">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <!-- step two -->
            <div class="step">
                <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5">Account Setup</p>
                <div class="mb-6">
                    <input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}"
                        class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                        oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
                    @error('email')
                        <small class="text-red-500 font-rubik font-semibold">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-6">
                    <input type="password" placeholder="Password" name="password" value="{{ old('password') }}"
                        class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                        oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
                    @error('password')
                        <small class="text-red-500 font-rubik font-semibold">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-6">
                    <input type="password" placeholder="Confirm Password" name="password_confirmation" value="{{ old('password_confirmation') }}"
                        class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                        oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
                    @error('password_confirmation')
                        <small class="text-red-500 font-rubik font-semibold">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <!-- step three -->
            <div class="step py-10">
                <i class="fa-regular fa-check-circle text-8xl text-sky-500 block text-center mb-5"></i>
                <h1 class="text-2xl text-center text-sky-600 font-bold">Perfect, Done</h1>
                <span class="text-gray-400 mb-10 block text-center">You are good to go now!</span>
            </div>

            <div class="hidden flex items-center justify-center text-slate-600 py-14" id="loading">
                <img src="{{ asset('image/Pulse@1x-0.9s-200px-200px.svg') }}" alt="" width="60"> Loading...
            </div>

            <!-- start previous / next buttons -->
            <div class="form-footer flex gap-3"> <button type="button" id="prevBtn"
                    class="flex-1 focus:outline-none border border-gray-300 py-2 px-5 rounded-lg shadow-sm text-center text-gray-700 bg-white hover:bg-gray-100 text-lg"
                    onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn"
                    class="flex-1 border border-transparent focus:outline-none p-3 rounded-md text-center text-white bg-indigo-600 hover:bg-indigo-700 text-lg"
                    onclick="nextPrev(1)">Next</button>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' =>
                                            '<a target="_blank" href="' .
                                            route('terms.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                            __('Terms of Service') .
                                            '</a>',
                                        'privacy_policy' =>
                                            '<a target="_blank" href="' .
                                            route('policy.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                            __('Privacy Policy') .
                                            '</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

            </div>
            <!-- end previous / next buttons -->
            <a href="{{ route('login') }}" class="block text-center mt-4 text-slate-400 hover:text-sky-400">Already have an account?</a>

        </form>
        <!-- tailwind css -->
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" /><!-- google font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

        <script>
            var currentTab =
                0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab
            function showTab(n) {
                // This function will display the specified tab of the form...
                var x = document.getElementsByClassName("step");
                x[n].style.display = "block";
                //... and fix the Previous/Next buttons:
                if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) {
                    document.getElementById("nextBtn").innerHTML = "Submit";
                } else {
                    document.getElementById("nextBtn").innerHTML = "Next";
                }
                //... and run a function that will display the correct step indicator:
                fixStepIndicator(n)
            }

            function nextPrev(n) {
                // This function will figure out which tab to display
                var x = document.getElementsByClassName("step");
                // Exit the function if any field in the current tab is invalid:
                if (n == 1 && !validateForm()) return false;
                // Hide the current tab:
                x[currentTab].style.display = "none";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                // if you have reached the end of the form...
                if (currentTab >= x.length) {
                    // ... the form gets submitted:
                    document.getElementById("signUpForm").submit();
                    // then loading
                    document.getElementById('loading').classList.remove('hidden');
                    return false;
                } // Otherwise, display the correct tab:
                showTab(currentTab);
            }

            function validateForm() {
                // This function deals with validation of the form fields
                var x, y, i, valid = true;
                x = document.getElementsByClassName("step");
                y = x[currentTab].getElementsByTagName(
                    "input"); // A loop that checks every input field in the current tab:
                for (i = 0; i < y.length; i++) {
                    // If a field is empty...
                    if (y[i].value == "") {
                        // add an "invalid" class to the field:
                        y[i].className += " invalid";
                        // and set the current valid status to false
                        valid = false;
                    }
                } // If the valid status is true, mark the step as finished and valid:
                if (valid) {
                    document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
                }
                return valid; // return the valid status
            }

            function fixStepIndicator(n) {
                // This function removes the "active" class of all steps...
                var i, x = document.getElementsByClassName("stepIndicator");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" active", "");
                }
                //... and adds the "active" class on the current step:
                x[n].className += " active";
            }

        </script>

</x-guest-layout>
