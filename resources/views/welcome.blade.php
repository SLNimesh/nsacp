<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden font-bold fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}">
                            <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-blue-400 to-blue-600 transform hover:shadow-md">
                                My Account
                            </button>
                        </a>
                    @else
                        <a href="{{ route('login') }}">
                            <button type="button" class="mr-1 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-blue-400 to-blue-600 transform hover:shadow-md">
                                    Log in
                            </button>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-gray-600 to-gray-900 transform hover:shadow-md">
                                    Register
                                </button>
                            </a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-sm bg-white border-2 p-6 rounded-md tracking-wide shadow-lg">
                <div id="header" class="flex items-center mb-4"> 
                    <div class="flex items-center w-20 h-20 rounded-full border-2">
                        <img alt="avatar" class="h-16 w-16 m-1" src="\img\logo.png" />
                    </div>
                    <div id="header-text" class="leading-5 ml-6 sm">
                        <h3 id="name" class="text-xl font-semibold text-gray-800 leading-tight">Welcome!</h4>
                    </div>
                </div>
                <div id="quote">
                    <q class="text-gray-600">Landing page for NSACP. Site is currently undergoing changes. We'll be back soon!</q>
                </div>
                <div class="mt-4 text-center text-sm font-semibold text-red-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
           
        </div>
    </body>
</html>
