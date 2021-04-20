<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-title></x-title>
</head>

<body class="bg-gray-100 flex flex-col">
    <x-top-right-coner></x-top-right-coner>
    <div class="grid grid-cols-4 gap-4 mt-20">
        <!-- First Column -->
        <div class="flex flex-col items-center pt-12"> 

            @if(Auth::user() != null && Auth::user()->type == 'SUPER_ADMIN')
            <div class="m-4 flex flex-col items-center bg-white b-2 rounded-lg shadow-lg w-9/12">
                <!-- Add New Center -->
                <form method="POST" action="/centers" class="mt-4 p-2 w-10/12">
                    @csrf
                    <div class="pt-2">
                        <x-label for="name" :value="__('Center Name')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>

                    <div class="pt-2">
                        <x-label for="address" :value="__('Address')" />

                        <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
                    </div>

                    <div class="pt-2">
                        <x-label for="contactNumber" :value="__('Contact Number')" />

                        <x-input id="contactNumber" class="block mt-1 w-full" type="text" name="contactNumber" :value="old('contactNumber')" required autofocus />
                    </div>

                    <div class="flex flex-col items-center mt-2">
                        <p class="text-lg font-semibold text-gray-500 p-2">Geo Location Data</p>
                    </div>

                    <div>
                        <x-label for="latitude" :value="__('Latitiude')" />

                        <x-input id="latitude" class="block mt-1 w-full" type="number" step="any" name="latitude" :value="old('latitude')" required autofocus />
                    </div>

                    <div class="pt-2">
                        <x-label for="longitude" :value="__('Longitude')" />

                        <x-input id="longitude" class="block mt-1 w-full" type="number" step="any" name="longitude" :value="old('longitude')" required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="ml-3 mb-2 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-blue-400 to-blue-600 transform hover:shadow-md">
                            Add Center
                        </button>
                    </div>
                </form>
            </div>
            @else
            <div class="m-4 flex flex-col items-center bg-white b-2 rounded-lg shadow-lg w-11/12">
                <p class="text-lg font-bold text-gray-700 p-2 pt-6">Services provided by the help centers</p>

                <p class="text-md font-bold text-red-400 pt-4 pb-2">Management of Sexually Transmitted Infections (STI)</p>
                <div class="self-start ml-12">
                    <ul class="list-disc text-sm font-semibold text-gray-500">
                        <li>Counselling services and health education for STI</li>
                        <li>Clinical services for diagnosis and management of STI</li>
                        <li>Screening for other STIs</li>
                        <li>Partner management and follow up</li>
                        <li>Condom promotion</li>
                    </ul>
                </div>

                <p class="text-md font-bold text-red-400 pt-4 pb-2">Laboratory Testing Services</p>
                <div class="self-start ml-12">
                    <ul class="list-disc text-sm font-semibold text-gray-500">
                        <li>HIV ELISA</li>
                        <li>HIV Particle Agglutination</li>
                        <li>HIV Rapid test</li>
                        <li>Gonococcal Culture & ABST</li>
                        <li>DNA PCR</li>
                        <li>Alkaline phosphatase</li>
                        <li>Bilirubin (Total/Direct /Indirect)</li>
                    </ul>
                </div>

                <p class="text-md font-bold text-red-400 pt-4 pb-2">HIV Services</p>
                <div class="self-start ml-12">
                    <ul class="list-disc text-sm font-semibold text-gray-500">
                        <li>Pre and post-test counselling for HIV testing</li>
                        <li>Screening and Confirmation of HIV infection</li>
                        <li>Immunological assessment for eligibility for ART</li>
                        <li>Provision of micro-nutrients for PLHIV</li>
                        <li>Prevention of mother to child transmission of HIV</li>
                    </ul>
                </div>

                <div class="m-6">
                    <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-red-400 to-red-600 transform hover:shadow-md">
                        More Details
                    </button>
                </div>
            </div>
            @endif
        </div>
        <div class="flex flex-col items-center mt-4 w-full col-span-3">
            <p class="text-md font-semibold text-gray-700 p-4">All the govenrment help centers under NSACP</p>
            <div class="grid grid-cols-4 gap-2 mr-16">
                @foreach(app(App\Http\Controllers\CenterController::class)->getAll() as $center)
                <div class="m-1 flex flex-col items-center bg-white b-2 rounded-lg shadow-lg w-auto h-60 p-4 text-center">
                    @auth
                    @if(Auth::user()->type == 'SUPER_ADMIN')
                    <div class="p-1 pb-4 self-end">
                        <div>
                            <button type="submit" class="ml-3 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-gray-600 to-gray-900 transform hover:shadow-md">Edit</button>

                            <button type="submit" class="ml-1 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-red-400 to-red-600 transform hover:shadow-md">Delete</button>
                        </div>
                    </div>
                    @endif
                    @endauth
                    <p class="text-md font-bold text-gray-700 p-1">{{$center->name}}</p>
                    @if(Auth::user() == null || Auth::user()->type != 'SUPER_ADMIN')
                    <div class="p-1">
                        <a href="https://www.google.com/maps/search/?api=1&query={{$center->latitude}},{{$center->longitude}}" target="_blank">
                            <img src="/img/google-maps.png" alt="map" class="w-8 h-8">
                        </a>
                    </div>
                    @endif
                    <p class="text-sm font-semibold text-gray-500 p-1">{{$center->address}}</p>
                    <div class="flex items-center mt-3">
                        <img src="/img/telephone.png" alt="tele" class="w-10 h-10">
                        <p class="text-2xl font-semibold text-gray-500 p-1"> +94 {{$center->contactNumber}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>