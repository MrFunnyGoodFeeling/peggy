@extends('layouts.wrapper')

@section('page_title')
Log in
@endsection

@section('content')

<!-- Main -->
<div class="bg-gray-900">
    <div class="flex flex-col justify-between min-h-screen">

        <!-- Navbar -->
        <x-navbar />

        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img src="/img/workflow/indigo-500.svg" alt="Your Company" class="mx-auto h-10 w-auto" />
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Log in</h2>
            </div>
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form action="{{ route('login') }}" method="post" class="space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-gray-100">E-mail</label>
                        <div class="mt-2">
                            <input id="email" type="email" name="email" required autocomplete="email" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm/6 font-medium text-gray-100">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" type="password" name="password" required autocomplete="current-password" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                            @error('password')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign in</button>
                    </div>
                </form>
                <p class="mt-10 text-center text-sm/6 text-gray-400">
                    Not a member? <a href="{{ route('register') }}" class="font-semibold text-indigo-400 hover:text-indigo-300">Sign up here</a>
                </p>
            </div>
        </div>

        <div>
            <!-- Touch Nothing -->
        </div>

    </div>
</div>

@endsection
