@extends('layouts.app')


@section('title', 'Welcome')


@section('content')
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel PWA Showcase
            </div>
            <div style="color:aqua;">
                Check top right browser Install the app icon - Desktop: Chrome, Edge only
            </div>
            <div style="color:aqua;">
                Mobile: Chrome, Edge, Safari, Firefox Also supported (Work in progress)
            </div>
            {{-- <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div> --}}
            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="ml-4 text-center text-lg text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0" style="font-weight:bold;"><a href='../laravel'>Back to Laravel</a></div>
                <div class="ml-4 text-center text-lg text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">I import PWA from <a href="https://github.com/silviolleite/laravel-pwa" target="_blank" style="font-weight:bold;">here</a></div>
            </div>
        </div>
    </div>
@endsection