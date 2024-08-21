@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center my-auto h-1/2 px-3 py-1 bg-gray-400 rounded-lg text-sm font-medium leading-5 text-white transition duration-150 ease-in-out'
            : 'inline-flex items-center my-auto h-1/2 px-3 py-1 rounded-lg text-sm font-medium leading-5 text-white hover:bg-gray-400 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
