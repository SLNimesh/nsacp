<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-title></x-title>
</head>

<body >
    <x-top-right-coner></x-top-right-coner>
    <div class="grid grid-cols-2 py-8 px-16 items-center w-screen h-screen bg-gray-100">
        
        <div class="flex flex-col mt-8 ml-12 bg-white border shadow-lg rounded-md px-6 py-8">
            <p class="text-2xl font-semibold text-gray-500 self-center mb-4">Channeling schedule</p>
            <div class="flex flex-col w-full h-full">
                <p class="font-semibold text-gray-600 text-white bg-gray-50 mb-1 px-2">Doctor</p>
                <p class="text-3xl font-bold text-gray-700 mb-2">{{$channel->doctor}}</p>
                <p class="font-semibold text-gray-600 bg-gray-50 mb-1 px-2">Time</p>
                <p class="text-3xl font-bold text-red-400 tracking-wider">{{ strtoupper($channel->dayOfWeek)}}</p>
                <p class="text-md font-semibold text-blue-400 mb-2 rounded-full">{{ date('h:i A', strtotime($channel->time)) }} onwards</p>
                <p class="font-semibold text-gray-600 bg-gray-50 mb-1 px-2">Venue</p>
                <div class="flex flex-col">
                    @foreach((app(App\Http\Controllers\CenterController::class)->show($channel->venue)) as $center)
                    <p class="text-2xl font-bold text-gray-500">{{$center->name}}</p>
                    <p class="text-sm font-semibold text-gray-500 mb-2">{{$center->address}}</p>

                    <x-models.small-map :center="$center"></x-models.small-map>
                    <div class="flex items-center mt-2">
                        <img src="/img/telephone.png" alt="tele" class="w-6 h-6">
                        <p class="text-sm font-semibold text-gray-500 p-1"> +94 {{$center->contactNumber}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="flex flex-col w-2/3 justify-self-center">
            <div class=" overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Reservations
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($channel->validChannelDates as $date)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ date('Y/m/d', strtotime($date->date))}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{ $date->status}}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                        {{ $date->currentAppointments}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="hover:bg-gray-700 rounded-full  bg-gray-800 inline-block text-sm font-medium text-white px-4 py-3 leading-none">Reserve</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>