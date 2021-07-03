<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as an admin!
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-center text-3xl p-6 text-bold text-gray-600"> Analytics </div>
                <div class="grid grid-cols-4 gap-2">
                    <div class="flex flex-col items-center p-4 bg-white border rounded-lg border-green-200 m-4">
                        <!-- <img class="w-10 h-10" src="/img/stethoscope.png" alt=""> -->
                        <div class="text-5xl text-green-500 pb-4 text-bold">{{ count(app(App\Models\Appointment::class)->all()) }}</div>
                        <div class="text-lg text-semibold text-gray-600 py-2 text-center">
                            Upcoming doctors appointments
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4 bg-white border rounded-lg border-blue-200 m-4">
                        <div class="text-5xl text-blue-500 pb-4 text-bold">{{ count(app(App\Models\ChannelDate::class)->all()) }}</div>
                        <div class="text-lg text-semibold text-gray-600 py-2 text-center">
                            Channels open for reservations
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4 bg-white border rounded-lg border-yellow-200 m-4">
                        <div class="text-5xl text-yellow-500 pb-4 text-bold">{{ count(app(App\Models\Channel::class)->all()) }}</div>
                        <div class="text-lg text-semibold text-gray-600 py-2 text-center">
                            Registered doctors in all centers
                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4 bg-white border rounded-lg border-indigo-200 m-4">
                        <div class="text-5xl text-indigo-500 pb-4 text-bold">{{ count(app(App\Http\Controllers\CenterController::class)->getAll()) }}</div>
                        <div class="text-lg text-semibold text-gray-600 py-2 text-center">
                            Available centers within the country
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
            <div class="p-4 bg-white border border-gray-200 rounded-lg">
                <p class="ml-2 text-lg font-semibold text-gray-700 pb-4">All Appointments</p>

                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Patient Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date/Time
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Venue
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                Number
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach(app(App\Http\Controllers\ReservationController::class)->getAll() as $app)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                {{ $app->patientName}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ date('Y/m/d', strtotime($app->time))}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                {{ (App\Models\ChannelDate::find($app->channelDate_id))->channel->venue }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{ $app->queueNo}}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>