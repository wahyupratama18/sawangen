<div x-data="{open:false}">
    <div :class="{'bg-sawangen': open}">
        <a
        href="{{ $href ?: 'javascript:void(0)' }}"
        @if (!$href)
        @click="open = !open"
        @click.away="open = false"
        @close.stop="open = false"
        @endif
        class="pl-3 pr-4 py-2 border-l-4 border-transparent font-medium text-slate-700 hover:text-sawangen/80 hover:bg-sawangen/30 hover:border-sawangen/40 focus:outline-none focus:text-sawangen focus:bg-sawangen/40 focus:border-sawangen/40 transition flex items-center"
        >
            <i class="mdi mdi-{{ $icon }} mr-4"></i>
            <span>{{ __($title) }}</span>
    
            @if (!$href)
            <span class="ml-auto">
                <svg class="w-4 h-4 transition-transform transform rotate-180" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </span>
            @endif
        </a>
    
        <div x-show="open" class="mt-2 space-y-2 px-4 pb-2">
            @forelse ($subs ?? [] as $key)
            <a href="{{ $key->link }}" class="block px-4 text-sm text-white transition-colors duration-200 rounded-md hover:text-slate-50">
                <i class="mdi mdi-{{ $key->icon }} mr-4 align-middle"></i>
                <span>{{ __($key->title) }}</span>
            </a>
            @empty
            @endforelse
        </div>
    </div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>