<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-title></x-title>
</head>

<body>
    <div class="grid grid-cols-2 gap-2 py-8 px-16 items-center w-screen h-screen bg-gray-100">
        <div class="m-4 flex flex-col items-center bg-white b-2 rounded-lg shadow-lg w-9/12 h-1/2 justify-self-end">
            <div class="flex flex-col items-center mt-2">
                <p class="text-xl font-bold text-gray-700 pt-4">E - Channelling</p>
                <p class="text-md font-semibold text-gray-500 pt-1">Channel Information</p>
            </div>
            <div class="flex flex-col w-full h-full p-4">
                <p class="font-semibold text-gray-600 text-white bg-gray-50 mb-2 px-2">Doctor</p>
                <p class="text-xl font-bold text-gray-700 mb-2">{{$channel->doctor}}</p>
                <p class="font-semibold text-gray-600 bg-gray-50 mb-2 px-2">Date/Time</p>
                <p class="text-xl font-bold text-red-400 mb-2">{{ date('Y/m/d', strtotime($date->date)) }}</p>
                <p class="text-md font-semibold text-blue-400 mb-2 rounded-full">{{ date('h:i A', strtotime($channel->time)) }} onwards</p>
                <p class="font-semibold text-gray-600 bg-gray-50 mb-2 px-2">Venue</p>
                <p class="text-lg font-bold text-gray-500 mb-2">{{$channel->venue}}</p>
                <p class="font-semibold text-gray-600 bg-gray-50 mb-2 px-2">You will be placed</p>
                <p class="text-xl font-bold text-green-400">{{ ($date->currentAppointments)+1 }} in queue.</p>
            </div>
        </div>
        <div class="m-4 flex flex-col items-center bg-white b-2 rounded-lg shadow-lg w-9/12 h-1/2 justify-self-start">
            <div class="flex flex-col items-center mt-2">
                <p class="text-xl font-bold text-gray-700 pt-4">Make a reservation</p>
                <p class="text-md font-semibold text-gray-500 pt-1">Patient's Information</p>
            </div>
            <form method="POST" action="{{ route('reservations.update', $date->id) }}" class="mt-4 p-2 w-10/12">
                @method('PATCH')
                @csrf
                <div class="pt-2">
                    <x-label for="patient" :value="__('Name')" />

                    <x-input id="patient" class="block mt-1 w-full" type="text" name="patient" :value="old('patient')" required autofocus />
                </div>

                <div class="pt-2">
                    <x-label for="age" :value="__('Age')" />

                    <x-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus />
                </div>

                <div class="pt-2">
                    <x-label for="specialNote" :value="__('Special Notes')" />

                    <x-input id="specialNote" class="block mt-1 w-full" type="text" name="specialNote" :value="old('specialNote')" autofocus />
                </div>

                <div class="pt-2">
                    <x-label for="contactNumber" :value="__('Contact Number')" />

                    <x-input id="contactNumber" class="block mt-1 w-full" type="text" name="contactNumber" :value="Auth::user()->contactNumber" required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="ml-3 mb-2 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-green-400 to-green-600 transform hover:shadow-md">
                        Reserve
                    </button>
                </div>
            </form>
        </div>
        <!-- <h1>{{ $date }}</h1>
        <h1>{{ Auth::user() }}</h1> -->
    </div>
</body>

</html>