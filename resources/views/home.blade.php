<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-title></x-title>
</head>

<body class="flex flex-col items-center">
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf

            <a :href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();">
                <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-gray-600 to-gray-900 transform hover:shadow-md">
                    Log out
                </button>
            </a>
        </form>
    </div>
    <div class="py-12 w-2/3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-lg font-semibold text-gray-700 pt-4">Welcome {{ Auth::user()->name }}.</p>
                    <p class="text-sm font-semibold text-gray-500 pt-1">You're logged as a user!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="p-4 bg-white border border-gray-200 rounded-lg">
            <p class="text-lg font-semibold text-gray-700 pb-4">Your appointments</p>

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
                    @foreach(Auth::user()->appointments as $app)
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

</body>

</html>