<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-title></x-title>
</head>

<body>
    <div class="flex flex-col mt-20 py-8 items-center">
        @guest
        <div class="flex flex-col items-center">
            <p class="text-xl font-bold text-gray-600"> Please register or sign in to make an appointment.</p>
            <div class="py-4">
                <a href="{{ route('login') }}">
                    <button type="button" class="mr-1 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-blue-400 to-blue-600 transform hover:shadow-md">
                        Log in
                    </button>
                </a>

                <a href="{{ route('register') }}">
                    <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-gray-600 to-gray-900 transform hover:shadow-md">
                        Register
                    </button>
                </a>
            </div>
        </div>
        @endguest
        @auth
        <x-top-right-coner></x-top-right-coner>
        <div class="m-4 flex flex-col items-center bg-white b-2 rounded-lg shadow-lg w-9/12">
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
        @endauth
    </div>
</body>

</html>