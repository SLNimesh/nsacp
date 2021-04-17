<button {{ $attributes->merge(['type' => 'submit', 'class' => 'focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-gray-600 to-gray-900 transform hover:shadow-md']) }}>
    {{ $slot }}
</button>
