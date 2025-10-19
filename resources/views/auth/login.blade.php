@extends('layouts.authLayout')

@section('title', 'Login')

@section('content')

    <!-- Sign Up Form -->
    <form action="/login" method="POST" class="space-y-4">
        @csrf
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <!-- click logo to home -->
                <a href="{{ url('/') }}">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company" class="mx-auto h-10 w-auto" />
                </a>
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Login your account</h2>
            </div>

            <div class="mt-3 sm:mx-auto sm:w-full sm:max-w-sm">
                <div class="mt-3">
                    <label for="email" class="block text-sm/6 font-medium text-gray-100">Email address</label>

                    <input id="email" type="email" name="email" required autocomplete="email" value="{{ old('email') }}"
                        class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />

                </div>

                <div class="mt-3">
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-100">Password</label>
                    </div>

                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                </div>

                @if ($errors->any())
                    <div class="mt-4">
                        <ul class="list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif

                <div class="mt-8">
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Login</button>
                </div>

                <p class="mt-10 text-center text-sm/6 text-gray-400">
                    You have not an account?
                    <a href="/signup" class="font-semibold text-indigo-400 hover:text-indigo-300">Sign up</a>
                </p>
            </div>
        </div>

    </form>

@endsection