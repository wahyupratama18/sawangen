<x-base-layout :title="$title">
    
    <x-navbar />
    
    <div class="min-h-screen bg-slate-50 bg-identity bg-repeat bg-bottom bg-contain mt-20">

        <x-jet-banner />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="px-8 py-6">
            {{ $slot }}
        </main>
    </div>

</x-base-layout>