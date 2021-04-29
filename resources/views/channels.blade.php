<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-title></x-title>
</head>

<body class="bg-gray-100 flex flex-col items-center">
    <div class="flex flex-col items-center m-12">
        <x-top-right-coner></x-top-right-coner>
        @if(Auth::user() != null && Auth::user()->type == 'SUPER_ADMIN')
        <div class="flex flex-col items-center m-4  bg-white b-2 rounded-lg shadow-lg py-8 border">
            <p class="text-lg font-semibold text-gray-500">Create a new channeling schedule</p>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="/channels" class="grid grid-cols-2 mt-4 p-2 w-10/12 gap-4">
                @csrf
                <div class="pt-2">
                    <x-label for="dayOfWeek" :value="__('Day Of Week')" />

                    <select name="dayOfWeek" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md border-gray-300">
                        <option value="Sunday">Sunday</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                    </select>
                </div>

                <div class="pt-2 mt-1">
                    <x-label for="time" :value="__('Time')" />

                    <x-input id="time" class="block mt-1 w-full" type="time" name="time" value="16:00" required autofocus />
                </div>

                <div class="pt-2">
                    <x-label for="venue" :value="__('Center')" />

                    <select name="venue" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md border-gray-300">
                        @foreach ($centers as $center)
                        <option value="{{ $center->name }}" class="text-gray-700 block px-4 py-2">
                            {{ $center->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="pt-2 mt-1">
                    <x-label for="doctor" :value="__('Doctor')" />

                    <x-input id="doctor" class="block mt-1 w-full" type="text" name="doctor" :value="old('doctor')" required autofocus />
                </div>

                <div class="pt-2">
                    <x-label for="maximumCap" :value="__('Capacity on premises')" />

                    <x-input id="maximumCap" class="block mt-1 w-full" type="number" name="maximumCap" :value="old('maximumCap')" required autofocus />
                </div>

                <div class="pt-3 flex items-center justify-end mt-6 justify-self-end">
                    <button type="submit" class="ml-3 mb-2 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-blue-400 to-blue-600 transform hover:shadow-md">
                        Create Schedule
                    </button>
                </div>
            </form>
        </div>
        @endif
    </div>
    <p class="text-3xl font-bold text-gray-600 mb-4">Meet You Doctor</p>
    <p class="text-lg font-semibold text-gray-500 mb-12 mx-56 text-center">Welcome to e-channeling section of NSACP. It's never too early to get in touch with experienced medical personnel. Our services provides you the opportunity to contact a doctor of your choice and have your spot reserved on a day of your choice.</p>
    <div class="grid grid-cols-6 w-10/12 mx-20 gap-2">
        @foreach($channels as $cha)
        <div class="m-1 flex flex-col items-center bg-white b-2 rounded-lg shadow-lg w-auto h-60 p-4 text-center border">
            <p class="text-md font-bold text-gray-700 p-1">{{$cha->doctor}}</p>
            <p class="text-sm font-bold text-gray-500 p-1">{{$cha->venue}}</p>
            <p class="text-xl font-bold text-indigo-500 mt-auto">{{ strtoupper($cha->dayOfWeek)}}</p>
            <p class="text-sm font-semibold text-blue-500 mt-1 p-1 rounded-full">{{ date('h:i A', strtotime($cha->time)) }}</p>
            @if(Auth::user() != null && Auth::user()->type == 'SUPER_ADMIN')
                <div class="p-1 pb-2 self-center mt-auto">
                    <div>
                        <button type="submit" class="ml-3 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-gray-600 to-gray-900 transform hover:shadow-md">Edit</button>

                        <button type="submit" class="ml-1 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-red-400 to-red-600 transform hover:shadow-md">Delete</button>
                    </div>
                </div>
            @else
            @if($cha->status == "ACTIVE")
            <a class="bg-green-500 hover:shadow-md hover:bg-green-600 text-white px-3 py-2 rounded-full text-md font-semibold mt-auto" href="/centers">
                Reserve
            </a>
            @else
            <p class="bg-green-700 hover:text-white px-3 py-2 rounded-full text-md font-semibold">Out of order</p>
            @endif
            @endif
        </div>
        @endforeach
    </div>
</body>

</html>