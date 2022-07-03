<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-sawangen border border-transparent rounded-md font-semibold text-xs text-white hover:bg-sawangen/70 active:bg-sawangen/95 focus:outline-none focus:border-sawangen/90 focus:ring focus:ring-sawangen/30 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
