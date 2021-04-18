@if (Route::has('login'))
<div class="hidden font-bold fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
    <a href="{{ url('/home') }}">
        <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-blue-400 to-blue-600 transform hover:shadow-md">
            My Account
        </button>
    </a>
    <form method="POST" action="{{ route('logout') }}" class="inline">
        @csrf

        <a :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
            <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-gray-600 to-gray-900 transform hover:shadow-md">
                Log out
            </button>
        </a>
    </form>

    @else
    <a href="{{ route('login') }}">
        <button type="button" class="mr-1 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-blue-400 to-blue-600 transform hover:shadow-md">
            Log in
        </button>
    </a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}">
        <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-gray-600 to-gray-900 transform hover:shadow-md">
            Register
        </button>
    </a>
    @endif
    @endauth
</div>
@endif