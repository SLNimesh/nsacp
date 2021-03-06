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
                                <a class="text-black-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-full text-sm font-medium" href="/centers">
                                    Help Centers
                                </a>
                                <a class="text-black-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-full text-sm font-medium" href="/#">
                                    Clinics
                                </a>
                                <a class="text-black-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-full text-sm font-medium" href="/forum">
                                    Forum
                                </a>
                                <a class="text-black-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-full text-sm font-medium" href="/about-us" target="_blank">
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
                        <p class="text-gray-600 text-center">"The National STD/AIDS Control Programme (NSACP) of the Ministry of Health is the main government organization which coordinates the national response to sexually transmitted infections including HIV/AIDS in Sri Lanka. It collaborates with many national and international organizations such as the Global Fund to Fight Against AIDS, TB, and Malaria (GFATM) and UN organizations while providing leadership and technical support to 34 islandwide STD clinics and 23 ART centers"</p>
                    </div>
                    <div class="mt-6">
                        <a href="/about-us" target="_blank">
                            <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-red-400 to-red-600 transform hover:shadow-md">
                                Read More
                            </button></a>
                    </div>
                    <div class="pt-4">
                        <x-models.simple-gallery></x-models.simple-gallery>
                    </div>
                </div>

                <div class="flex h-full w-full flex-col items-center justify-center">
                    <!-- stat - component -->
                    <div class="px-16 text-gray-600 mt-2">
                        <p class="text-lg font-semibold">Local statistics on STDs</p>
                        <p class="text-sm">by the end of 2020</p>
                    </div>
                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto mb-4">
                        <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                            <div class="flex flex-col justify-center px-8 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <div>
                                        <p class="flex items-center justify-end text-red-500 text-md">
                                            <span class="font-bold">4%</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                                <path class="heroicon-ui" d="M20 15a1 1 0 002 0V7a1 1 0 00-1-1h-8a1 1 0 000 2h5.59L13 13.59l-3.3-3.3a1 1 0 00-1.4 0l-6 6a1 1 0 001.4 1.42L9 12.4l3.3 3.3a1 1 0 001.4 0L20 9.4V15z" /></svg>
                                        </p>
                                    </div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">3600</p>
                                    <p class="text-lg text-center text-gray-500">Adults</p>
                                </div>
                            </div>

                            <div class="flex flex-col justify-center px-8 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <div>
                                        <p class="flex items-center justify-end text-green-500 text-md">
                                            <span class="font-bold">11%</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                                <path class="heroicon-ui" d="M20 9a1 1 0 012 0v8a1 1 0 01-1 1h-8a1 1 0 010-2h5.59L13 10.41l-3.3 3.3a1 1 0 01-1.4 0l-6-6a1 1 0 011.4-1.42L9 11.6l3.3-3.3a1 1 0 011.4 0l6.3 6.3V9z" /></svg>
                                        </p>
                                    </div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">97</p>
                                    <p class="text-lg text-center text-gray-500">Children</p>
                                </div>
                            </div>

                            <div class="flex flex-col items-center justify-center px-6 py-4 mt-4 pt-8 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <div>
                                        <p class="flex items-center justify-end text-red-500 text-md">
                                            <span class="font-bold">2%</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                                <path class="heroicon-ui" d="M20 15a1 1 0 002 0V7a1 1 0 00-1-1h-8a1 1 0 000 2h5.59L13 13.59l-3.3-3.3a1 1 0 00-1.4 0l-6 6a1 1 0 001.4 1.42L9 12.4l3.3 3.3a1 1 0 001.4 0L20 9.4V15z" /></svg>
                                        </p>
                                    </div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">173</p>
                                    <p class="text-lg text-center text-gray-500">Deaths</p>

                                </div>
                                <p class="text-xs text-gray-500">2019 - 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-16 text-gray-600 mt-4">
                        <p class="text-lg font-semibold">Annual Reports</p>
                        <p class="text-sm">courtesy of aidscontrol.gov.lk</p>
                    </div>
                    <div class="flex mt-4 items-center px-3 py-2 rounded-lg">
                        <div class="h-28 w-24 relative cursor-pointer mx-2">
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-600 to-gray-800 opacity-25 rounded-lg shadow-2xl"></div>
                            <div class="absolute inset-0 transform  hover:scale-75 transition duration-300">
                                <div class="h-full w-full bg-gradient-to-r from-gray-600 to-gray-800 rounded-lg shadow-2xl flex items-center justify-center">
                                    <a href="https://aidscontrol.gov.lk/images/pdfs/publications/NSACP_Annual-Report_2019.pdf">
                                        <p class="text-2xl font-semibold text-white p-2">2020</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="h-28 w-24 relative cursor-pointer mx-2">
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-600 to-gray-800 opacity-25 rounded-lg shadow-2xl"></div>
                            <div class="absolute inset-0 transform  hover:scale-75 transition duration-300">
                                <div class="h-full w-full bg-gradient-to-r from-gray-600 to-gray-800 rounded-lg shadow-2xl flex items-center justify-center">
                                    <a href="https://aidscontrol.gov.lk/images/pdfs/publications/NSACP_Annual-report_-2018_updated-PDF-8.8.2019.pdf">
                                        <p class="text-2xl font-semibold text-white p-2">2019</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="h-28 w-24 relative cursor-pointer mx-2">
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-600 to-gray-800 opacity-25 rounded-lg shadow-2xl"></div>
                            <div class="absolute inset-0 transform  hover:scale-75 transition duration-300">
                                <div class="h-full w-full bg-gradient-to-r from-gray-600 to-gray-800 rounded-lg shadow-2xl flex items-center justify-center">
                                    <a href="https://aidscontrol.gov.lk/images/pdfs/publications/Annual.report_NSACP.2017updated_July23.pdf">
                                        <p class="text-2xl font-semibold text-white p-2">2018</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="h-28 w-24 relative cursor-pointer mx-2">
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-600 to-gray-800 opacity-25 rounded-lg shadow-2xl"></div>
                            <div class="absolute inset-0 transform  hover:scale-75 transition duration-300">
                                <div class="h-full w-full bg-gradient-to-r from-gray-600 to-gray-800 rounded-lg shadow-2xl flex items-center justify-center">
                                    <a href="https://aidscontrol.gov.lk/images/pdfs/publications/Annual.report_NSACP.2017updated_July23.pdf">
                                        <p class="text-2xl font-semibold text-white p-2">2017</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="mt-2 mr-24 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl  bg-gradient-to-r from-blue-400 to-blue-600 transform hover:shadow-md self-end">
                        View All
                    </button>
                    <!-- E-channeling component -->
                    <div class="flex w-10/12 h-56 bg-white border border-blue-500 shadow-lg rounded-lg mt-8 items-center py-8 px-4">
                        <div class="w-1/3 mb-auto">
                            <img class="p-4 w-full" src="/img/stethoscope.png" alt="">
                        </div>
                        <div class="flex flex-col w-2/3 h-4/5 mb-auto p-1">
                            <p class="text-4xl font-bold text-blue-900 rounded-full mb-1">E-Channeling</p>
                            <p class="text-sm text-gray-600  w-full">Channel your doctor online. You can make appointments on a doctor of your choice. We guarantee to always maintain your privacy. This service is free of charge.</p>
                            <a href="/channeling" target="_blank" class="mt-auto self-end">
                                <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-green-400 to-green-600 transform hover:shadow-md">
                                    Meet Your Doctor
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end w-full">
                    <x-models.map></x-models.map>
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