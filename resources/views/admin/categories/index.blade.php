<x-app-layout :title="__('forms.categories.index.title')">
    <div class="flex justify-end mb-3">
        <a href="{{ route('admin.categories.create') }}">
            <x-jet-button>
                {{ __('basic.create') }}
            </x-jet-button>
        </a>
    </div>

    <x-table
        :columns="[
            __('forms.name'),
            __('forms.categories.parent'),
            __('forms.action')
        ]"
        :route="route('admin.api.categories.index')"
        then="data => data.data.map(category => [
            category.name,
            category.parent,
            html(category.actions),
        ])"
    />
</x-app-layout>
