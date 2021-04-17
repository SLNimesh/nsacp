<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-title></x-title>
</head>
<body>
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
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
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged as a user!
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>