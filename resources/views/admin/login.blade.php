@extends('Layouts.app')

@section('title', 'AdminLogin - Ash & Co.')

@section('content')
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-dvh lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-4 space-y-4">
                <h1 class="text-sm text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Admin - Log in
                </h1>

                @if (Session::has('success'))
                <div class="text-center text-green-400">{{ Session::get('success') }}</div>
                @endif

                @if (Session::has('error'))
                <div class="text-center text-red-400">{{ Session::get('error') }}</div>
                @endif

                <form class="space-y-4" action="{{ route('admin.authenticate') }}" method="post">
                    @csrf
                    <div>
                        <label for="email" class="block mb-1.5 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="text" name="email" id="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com">
                        @error('email')
                        <p class="mt-2 text-xs invalid text-red-300">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-1.5 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="@error('email') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('password')
                        <p class="mt-2 text-xs invalid text-red-300">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="w-full cursor-pointer text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection