@extends('layouts.master')
@section('title','Login')
@section('links')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('styles')
<style>
    body {
        font-family: 'Nunito', sans-serif;
    }

    .bg-unsplash {
        background-image: url(https://images.unsplash.com/photo-1519681393784-d120267933ba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1124&q=100);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .card {
        backdrop-filter: blur(25px) saturate(200%);
        -webkit-backdrop-filter: blur(25px) saturate(200%);
        background-color: rgba(17, 25, 40, 0.4);
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.125);
    }
</style>
@endsection
@section('content')
<div class="flex items-center min-h-screen p-4 bg-gray-100 lg:justify-center bg-unsplash">
    <div
        class="card flex flex-col overflow-hidden bg-white rounded-md shadow-lg max md:flex-row md:flex-1 lg:max-w-screen-md">
        <div
            class="p-4 py-6 text-white  md:w-80 md:flex-shrink-0 md:flex md:flex-col md:items-center md:justify-evenly">
            <div class="my-3 text-4xl font-bold tracking-wider text-center">
                <a href="#">K-WD</a>
            </div>
            <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">
                With the power of K-WD, you can now focus only on functionaries for your digital products, while leaving
                the
                UI design on us!
            </p>
            <p class="flex flex-col items-center justify-center mt-10 text-center">
                <span>Don't have an account?</span>
                <a href="#" class="underline">Get Started!</a>
            </p>
            <p class="mt-6 text-sm text-center text-gray-300">
                Read our <a href="#" class="underline">terms</a> and <a href="#" class="underline">conditions</a>
            </p>
        </div>
        <div class="p-5 md:flex-1">
            <h3 class="my-4 text-2xl font-semibold text-white">Account Login</h3>
            @if (count($errors))
            <div class="flex gap-4 bg-red-500 p-4 rounded-md">
                <div class="w-max">
                    <div class="h-10 w-10 flex rounded-full bg-gradient-to-b from-red-100 to-red-300 text-red-700">
                        <span class="material-icons material-icons-outlined m-auto"
                            style="font-size:20px">gpp_bad</span>
                    </div>
                </div>
                <div class="space-y-1 text-sm">
                    <h6 class="font-medium text-white">Holy mole guacamole</h6>
                    @error('email')
                    <p class="text-red-100 leading-tight">{{ $message }}</p>
                    @enderror
                    @error('password')
                    <p class="text-red-100 leading-tight">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            @endif
            <form action="{{ route('signin.store') }}" method="POST" class="flex flex-col space-y-5">
                @csrf
                <div class="flex flex-col space-y-1">
                    <label for="email" class="text-sm font-semibold text-white">Email address</label>
                    <input type="email" name="email" id="email" autofocus
                        class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
                </div>
                <div class="flex flex-col space-y-1">
                    <div class="flex items-center justify-between">
                        <label for="password" class="text-sm font-semibold text-white">Password</label>
                        <a href="#" class="text-sm text-white hover:underline focus:text-white">Forgot Password?</a>
                    </div>
                    <input type="password" name="password" id="password"
                        class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
                </div>
                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="remember"
                        class="w-4 h-4 transition duration-300 rounded focus:ring-2 focus:ring-offset-0 focus:outline-none focus:ring-blue-200" />
                    <label for="remember" class="text-sm font-semibold text-white">Remember me</label>
                </div>
                <div>
                    <button type="submit"
                        class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-4">
                        Log in
                    </button>
                </div>
                <div class="flex flex-col space-y-5">
                    <span class="flex items-center justify-center space-x-2">
                        <span class="h-px bg-gray-400 w-14"></span>
                        <span class="font-normal text-white">or login with</span>
                        <span class="h-px bg-gray-400 w-14"></span>
                    </span>
                    <div class="flex flex-col space-y-4">
                        <a href="{{ route('signin.github') }}"
                            class="bg-white flex items-center justify-center px-4 py-2 space-x-2 transition-colors duration-300 border border-gray-800 rounded-md group hover:bg-gray-800 focus:outline-none">
                            <span>
                                <svg class="w-5 h-5 text-gray-800 fill-current group-hover:text-white"
                                    viewBox="0 0 16 16" version="1.1" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z">
                                    </path>
                                </svg>
                            </span>
                            <span class="text-sm font-medium text-gray-800 group-hover:text-white">Github</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
