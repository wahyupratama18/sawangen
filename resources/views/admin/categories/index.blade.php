<x-app-layout>
    <div class="flex justify-end mb-3">
        <a href="{{ route('admin.categories.create') }}">
            <x-jet-button>
                {{ __('basic.create') }}
            </x-jet-button>
        </a>
    </div>

    <div
        x-data="{}"
        x-init="
        new Grid({
            columns: ['{{ __('forms.name') }}', '{{ __('Induk Kategori') }}', '{{ __('Tindakan') }}'],
            fixedHeader: true,
            height: '300px',
            pagination: {
                enabled: true,
                limit: 10,
                server: {
                    url: (prev, page, limit) => `${prev}${prev.includes('?') ? '&' : '?'}page=${1 + page}`
                }
            },
            search: {
                server: {
                    url: (prev, keyword) => `${prev}?search=${keyword}`
                }
            },
            server: {
                url: '{{ route('admin.api.categories.index') }}',
                then: data => data.data.map(category => [
                    category.name,
                    category.parent,
                    html(`<a href='${category.show}'>Lihat</a><br><a href='${category.show}/edit'>Edit</a>`),
                ]),
                total: data => data.meta.total
            }
        }).render(document.getElementById('categories'))
        "
    >
        <div id="categories"></div>
    </div>
</x-app-layout>
