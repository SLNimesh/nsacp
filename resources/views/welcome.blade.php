<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <x-title></x-title>
    </head>
    <body class="antialiased">
        <div class="flex flex-col h-screen">
            <header class="bg-white dark:bg-gray-800">
                <div class="max-w-7xl mx-auto px-8">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex items-center mt-2">
                            <a class="flex-shrink-0" href="/">
                                <img class="h-8 w-8" src="/img/red-ribbon.svg" alt="Image"/>
                            </a>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <a class="text-gray-800 dark:text-white hover:text-gray-800 dark:hover:text-white py-2.5 px-5 rounded-md text-base font-semibold" href="/#">
                                        Home
                                    </a>
                                    <a class="text-gray-300  hover:text-gray-800 dark:hover:text-white py-2.5 px-5 rounded-md text-base font-medium" href="/#">
                                        Help Centers
                                    </a>
                                    <a class="text-gray-300  hover:text-gray-800 dark:hover:text-white py-2.5 px-5 rounded-md text-base font-medium" href="/#">
                                        Clinics
                                    </a>
                                    <a class="text-gray-300  hover:text-gray-800 dark:hover:text-white py-2.5 px-5 rounded-md text-base font-medium" href="/#">
                                        Forum
                                    </a>
                                    <a class="text-gray-300  hover:text-gray-800 dark:hover:text-white py-2.5 px-5 rounded-md text-base font-medium" href="/#">
                                        About us
                                    </a>
                                </div>
                            </div>
                        </div>   
                </div>
            </header>
            <main class="flex-1 overflow-y-auto p-5">
                <div class="relative flex items-top justify-center dark:bg-gray-900 sm:items-center py-2 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden font-bold fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}">
                                <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-blue-400 to-blue-600 transform hover:shadow-md">
                                    My Account
                                </button>
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                
                                <a :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-gray-600 to-gray-900 transform hover:shadow-md" >
                                        Log out
                                    </button>
                                </a>
                            </form>

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
            </main>
            <footer class="py-2 bg-white text-right text-white">
                <div class="mr-4 text-center text-sm font-semibold text-red-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </footer>
        </div>
    </body>
</html>
