@php
    $options = array_merge([
        'allowEmptyOption' => true,
	    // 'create' => true
        'items' => [],
    ], ($attributes['options'] ?: []))
@endphp

<select
id="{{ $id = 'select-'.Str::random() }}"
{!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}
x-data="{}"
x-init="new TomSelect('#{{ $id }}', {{ json_encode($options) }})">
    {{ $slot }}
</select>