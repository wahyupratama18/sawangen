<x-base-layout :title="$title">
    <x-navbar />

    <main class="pt-24 bg-slate-50 bg-identity bg-repeat bg-bottom bg-contain min-h-screen">
        {{ $slot }}
    </main>
</x-base-layout>