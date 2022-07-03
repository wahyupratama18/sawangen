<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-sawangen rounded-md font-semibold text-xs text-sawangen hover:bg-sawangen/90 hover:text-slate-50 active:bg-sawangen/95 active:text-white focus:outline-none focus:border-sawangen/90 focus:text-white focus:ring focus:ring-sawangen/30 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
