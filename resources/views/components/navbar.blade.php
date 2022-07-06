<nav class="fixed top-0 py-3 px-6 bg-gradient-to-br from-slate-100 to-slate-50 flex items-center justify-between w-full rounded-br-[2rem] border-b-4 border-b-sawangen h-20 z-20">

    <div class="flex justify-between md:w-48">
        <a href="{{ route('landing.welcome') }}" class="grow flex justify-center mr-4">
            <img src="{{ asset('contents/images/logo.png') }}" alt="Sawangen Logo">
        </a>

        @can('adminOrStoreOnly', Auth::user())
        <i @click="open = !open" class="mdi mdi-sort-variant mdi-24px cursor-pointer"></i>
        @endcan
    </div>

    @cannot('isAnAdministrator', Auth::user())
    <aside class="hidden sm:flex sm:justify-center sm:items-center sm:gap-x-4 grow text-slate-100 focus-within:text-slate-50">

        <a href="{{ route('landing.categories') }}" class="text-slate-700 text-sm">Kategori</a>

        <div>
            {{-- Search --}}
            <form action="{{ route('landing.search') }}" class="relative flex items-center md:w-[17.5rem] lg:w-[30rem]">
                <x-jet-input
                type="text"
                name="search"
                class="bg-sawangen/80 placeholder:text-slate-200 placeholder:pl-4 text-sm rounded-2xl peer w-full"
                autocomplete="off"
                aria-label="Cari layanan"
                placeholder="Cari layanan..." />
        
                <i class="mdi mdi-magnify absolute ml-3 pointer-events-none hidden peer-placeholder-shown:inline"></i>
            </form>
            
            <a href="{{ route('landing.corner') }}">
                <small class="text-sawangen hover:font-semibold">UMKM Corner</small>
            </a>
        </div>
    </aside>
    @endcannot

    <div class="flex items-center gap-x-4 ml-6">
        @auth
            <!-- Teams Dropdown -->
            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="60">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                    {{ Auth::user()->currentTeam->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <div class="w-60">
                                <!-- Team Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Team') }}
                                </div>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                    {{ __('Team Settings') }}
                                </x-jet-dropdown-link>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                        {{ __('Create New Team') }}
                                    </x-jet-dropdown-link>
                                @endcan

                                <div class="border-t border-gray-100"></div>

                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Switch Teams') }}
                                </div>

                                @foreach (Auth::user()->allTeams() as $team)
                                    <x-jet-switchable-team :team="$team" />
                                @endforeach
                            </div>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            @endif

            <!-- Settings Dropdown -->
            <div class="ml-3 relative">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex items-center gap-x-2 text-sm border-2 border-transparent rounded-full focus:outline-none transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                <span class="hidden sm:inline">
                                    {{ Auth::user()->name }}
                                </span>
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                        @else
                            <span class="inline-flex rounded-md">
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none transition">
                                    {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Atur Akun') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Pengaturan Profil') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('Token API Token') }}
                            </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                @click.prevent="
                                Swal.fire({
                                    confirmButtonText: 'Keluar',
                                    cancelButtonText: 'Kembali',
                                    reverseButtons: true,
                                    showCancelButton: true,
                                    title: 'Apakah anda yakin ingin keluar?',
                                }).then(val => {
                                    if (val.value) {
                                        $root.submit()
                                    }
                                })
                                ">
                                {{ __('Keluar') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            </div>
        @else
            <a href="{{ route('login') }}">
                <x-jet-invert-button>
                    Masuk
                </x-jet-invert-button>
            </a>
            <a href="{{ route('register') }}">
                <x-jet-button>Daftar</x-jet-button>
            </a>
        @endauth
    </div>
</nav>


<!-- Backdrop -->
<div x-show="open" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>

{{-- Aside --}}
<aside x-show="open" x-transition:enter="transition-all ease-in-out duration-1000" x-transition:enter-start="transform -translate-x-full" x-transition:enter-end="transform transform-x-0" x-transition:leave="transition-all ease-in-out duration-1000" x-transition:leave-start="transform transform-x-0" x-transition:leave-end="transform -translate-x-full" @click.away="open = false" @keydown.escape="open = false" class="bg-slate-200 fixed top-20 bottom-0 w-64 overflow-y-auto z-20">
    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 space-y-1">

        <x-dropdown icon="home-outline" title="Beranda" :href="route('dashboard')" />

        @can('isAnAdministrator', Auth::user())
        <x-dropdown icon="archive-outline" title="Daftar Kategori" :href="route('admin.categories.index')" />
        @endcan

        {{-- <x-dropdown icon="speedometer" title="Data Master" :subs="[
            (object) ['link' => route('alternatives.index'), 'icon' => 'circle', 'title' => 'Data Alternatif'],
            (object) ['link' => route('criterias.index'), 'icon' => 'circle', 'title' => 'Data Kriteria'],
            (object) ['link' => route('crisps.index'), 'icon' => 'circle', 'title' => 'Data Crisps'],
        ]" />
        @endcan
        

        <x-dropdown icon="book" title="Perhitungan" :href="route('report.index')" />

        <x-dropdown icon="cog" title="Pengaturan" :href="route('users.index')" /> --}}
        
    </div>
</aside>