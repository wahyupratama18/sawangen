<x-app-layout>
    <div class="p-8">
        
        <a href="{{ route('admin.categories.index') }}">
            <i class="mdi mdi-chevron-left"></i>
            {{ __('basic.back') }}
        </a>

        <x-jet-action-section class="mt-3">
            <x-slot name="title">
                {{ __('forms.categories.create.title') }}
            </x-slot>
        
            <x-slot name="description">
                {{ __('forms.categories.create.description') }}
            </x-slot>
        
            <x-slot name="content">
                {{-- <div class="max-w-xl text-sm text-gray-600">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                </div>
        
                <div class="mt-5">
                    <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                        {{ __('Delete Account') }}
                    </x-jet-danger-button>
                </div> --}}
            </x-slot>
        </x-jet-action-section>

    </div>
</x-app-layout>
