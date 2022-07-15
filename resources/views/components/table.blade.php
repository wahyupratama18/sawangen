@php
    $id = 'table-'.Str::random();
@endphp
<div
    x-data
    x-init="
    new Grid({
        columns: {{ json_encode($columns) }},
        fixedHeader: true,
        height: '450px',
        language: langID,
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
            url: '{{ $route }}',
            then: {{ $then }},
            total: data => data.meta.total
        }
    }).render(document.getElementById('{{ $id }}'))
    "
>
    <div id="{{ $id }}"></div>
</div>