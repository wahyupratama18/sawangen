<div class="inline md:grid md:grid-cols-2 min-h-screen [&_aside]:p-16">
    <aside class="hidden md:flex md:items-center md:justify-center bg-sawangen">
        <img src="{{ asset('contents/images/authorize.png') }}" alt="Authorization">
    </aside>

    <aside class="flex items-center justify-center bg-identity bg-repeat bg-bottom bg-contain min-h-screen">
        <div class="w-full">
            <div class="flex items-center justify-center mb-4">
                {{ $logo }}
            </div>

            {{ $slot }}
        </div>
    </aside>
</div>