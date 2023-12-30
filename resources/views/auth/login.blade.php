@extends('layout.app')

@section('content')


<section class="bg-gray-50 dark:bg-gray-200" id="login-wrapper">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-100 dark:border-gray-100">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <img class="w-24 h-24 mx-auto">
                {{-- src="assets/img/logo.png" alt="logo" --}}
                <h1 class="text-sm text-center font-semibold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-black">
                    InstaApp
                </h1>
                {{-- @if (session('error'))
                <x-alert.error-alert message="{{session('error')}}"/>
                @endif --}}
                <form class="space-y-4 md:space-y-6" action="{{route('login-attempt')}}" method="POST">
                    @csrf
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                            Username
                        </label>
                        <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-300 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter username" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">
                            Password
                        </label>
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-300 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter password" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember" class="text-gray-500 dark:text-gray-500">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Login
                        </button>
                        <a href="{{ route('register') }}" class="font-small text-blue-600 dark:text-blue-500 hover:underline">
                            Register
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>

@endsection
