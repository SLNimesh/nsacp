<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <x-title></x-title>
</head>

<body class="antialiased">
    <div class="flex flex-col h-screen">
        <header class="bg-white">
            <div class="max-w-7xl mx-auto px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center mt-2">
                        <a class="flex-shrink-0" href="/">
                            <img class="h-10 w-30" src="/img/horizontal_logo.png" alt="Image" />
                        </a>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a class="hover:bg-gray-700 rounded-full  bg-gray-800 inline-block text-sm font-medium text-white px-4 py-3 leading-none" href="/">
                                    Home
                                </a>
                                <a class="hover:bg-gray-700 rounded-full  bg-gray-500 inline-block text-sm font-medium text-white px-4 py-3 leading-none" href="/centers">
                                    Help Centers
                                </a>
                                <a class="hover:bg-gray-700 rounded-full  bg-gray-500 inline-block text-sm font-medium text-white px-4 py-3 leading-none" href="/#">
                                    Clinics
                                </a>
                                <a class="hover:bg-gray-700 rounded-full  bg-gray-500 inline-block text-sm font-medium text-white px-4 py-3 leading-none" href="/forum">
                                    Forum
                                </a>
                                <a class="hover:bg-gray-700 rounded-full  bg-gray-500 inline-block text-sm font-medium text-white px-4 py-3 leading-none" href="/#">
                                    About us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="flex-1 overflow-y-auto p-2">
            <x-top-right-coner></x-top-right-coner>
            <div class="grid grid-cols-3 gap-4 items-center justify-center py-2 sm:pt-0 h-5/6">

                <div class="flex flex-col items-center justify-center bg-white p-6 tracking-wide w-full h-full">
                    <div class="flex flex-col items-center p-4">
                        <div class="flex items-center w-20 h-20">
                            <img alt="avatar" class="h-20 w-20 mb-6" src="/img/red-ribbon.svg" />
                        </div>
                        <div class="leading-5 sm px-12">
                            <h3 id="name" class="text-2xl font-semibold text-gray-800 leading-tight text-center">Welcome to the National STD/AIDS Control Programme!</h4>
                        </div>
                    </div>
                    <div class="px-16">
                        <q class="text-gray-600">The National STD/AIDS Control Programme (NSACP) of the Ministry of Health is the main government organization which coordinates the national response to sexually transmitted infections including HIV/AIDS in Sri Lanka. It collaborates with many national and international organizations such as the Global Fund to Fight Against AIDS, TB, and Malaria (GFATM) and UN organizations while providing leadership and technical support to 34 islandwide STD clinics and 23 ART centers</q>
                    </div>
                    <div class="mt-6">
                        <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-red-400 to-red-600 transform hover:shadow-md">
                            Read More 
                        </button>
                    </div>
                </div>

                <div class="flex w-full flex-col items-end justify-center">

                </div>

                <div class="flex justify-end w-full">
                    <x-models.map></x-models.map>
                </div>

            </div>
            <!-- <x-models.services></x-models.services> -->
        </main>
        <footer class="py-2 bg-white text-right text-white">
            <div class="mr-4 text-center text-sm font-semibold text-red-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </footer>
    </div>
</body>

</html>