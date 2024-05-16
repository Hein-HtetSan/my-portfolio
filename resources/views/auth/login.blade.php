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

{{-- greeting section  --}}
<?php
$currentTime = date("H");

if ($currentTime < 12) {
    $greeting = "Good morning";
} elseif ($currentTime < 17) {
    $greeting = "Good afternoon";
} elseif ($currentTime < 20) {
    $greeting = "Good evening";
} else {
    $greeting = "Good night";
}
?>

<x-guest-layout>

    {{-- tailwindcss cdn  --}}
    <script src="https://cdn.tailwindcss.com"></script>

        <x-slot name="logo">
            {{-- <x-authentication-card-logo /> --}}
        </x-slot>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form id="signUpForm" action="{{ route('user.login') }}" class="p-10 shadow-md rounded-2xl bg-white mx-auto border-solid border-2 mt-10
        border-gray-100 mb-8" method="POST">
            @csrf
            <h1 class="text-xl text-center mb-2 font-semibold text-sky-700 capitalize font-rubik">
                Hello Sir, <?= $greeting ?>
            </h1>
            <h3 class="mb-5 text-center text-slate-400 font-semibold text-sm">Welcome back, please login to enter dashboard page!</h3>

            <div class="mb-6">
                <input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200 mb-2" />
                @error('email')
                    <small class="text-red-500 font-rubik font-semibold">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-6">
                <input type="password" placeholder="Password" name="password" value="{{ old('password') }}"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200 mb-2" />
                @error('password')
                    <small class="text-red-500 font-rubik font-semibold">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-6 flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <button type="submit" class="bg-blue-500 text-slate-50 rounded-lg px-5 py-2">Login</button>
            </div>

            <a href="{{ route('register') }}" class="text-center block text-sky-500 hover:text-sky-400 text-md underline">Register new account!</a>
        </form>

</x-guest-layout>
