<x-app-layout>
    <div class="p-8">
        
        <a href="{{ route('admin.categories.index') }}">
            <i class="mdi mdi-chevron-left"></i>
            {{ __('basic.back') }}
        </a>

        <x-jet-normal-form method="PUT" :action="route('admin.categories.update', $category)" class="mt-3">
            <x-slot:title>
                {{ __('forms.categories.edit.title') }}
            </x-slot>
        
            <x-slot:description>
                {{ __('forms.categories.edit.description') }}
            </x-slot>
        
            <x-slot:form>
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="name" value="{{ __('forms.name') }}" />
                    <x-jet-input id="name" type="text" class="mt-1 block w-full" name="name" :value="old('name', $category->name)" />
                    <x-jet-input-error for="name" class="mt-2" />
                </div>
                
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="category_id" value="{{ __('forms.categories.parent') }}" />
                    <x-select
                    id="category_id"
                    class="mt-1 block w-full"
                    name="category_id"
                    placeholder="Pilih kategori (opsional)"
                    title="Pilih subkategori"
                    :options="['items' => $category->category_id]"
                    >
                        @foreach ($categories as $sub)
                            <option value="{{ $sub->id }}" @selected( old('category_id', $category->category_id) === $sub->id )>{{ $sub->name }}</option>
                        @endforeach
                    </x-select>
                    <x-jet-input-error for="category_id" class="mt-2" />
                </div>

            </x-slot>

            <x-slot:actions>
                <x-jet-button>
                    {{ __('basic.Save') }}
                </x-jet-button>
            </x-slot>
        </x-jet-normal-form>

    </div>
</x-app-layout>
