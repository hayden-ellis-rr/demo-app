@props(['active'])

@php
$classes = ($active)
            ? 'flex items-center p-2 text-gray-700 font-semibold border-l-4 border-green-500 bg-white dark:text-white hover:text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 group'
            : 'flex items-center p-2 text-gray-700 dark:text-white hover:text-gray-700 hover:bg-gray-200 dark:hover:bg-gray-700 group';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
