<x-base-layout :title="$title">
    <x-navbar />

    <main class="mt-28">
        {{ $slot }}
    </main>
</x-base-layout>