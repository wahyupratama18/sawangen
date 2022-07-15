<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-amber-500 border border-transparent rounded-md font-semibold text-xs text-white hover:bg-amber-700 active:bg-amber-800 focus:outline-none focus:border-amber-900 focus:ring focus:ring-amber-300 disabled:opacity-25 transition mb-2']) }}>
    {{ $slot }}
</button>
