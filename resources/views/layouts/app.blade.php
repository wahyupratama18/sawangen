<x-base-layout :title="$title">
    <x-jet-banner />

    <x-navbar />

    <div class="min-h-screen bg-slate-50 bg-pattern bg-repeat-x bg-bottom bg-contain mt-20">

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

</x-base-layout>