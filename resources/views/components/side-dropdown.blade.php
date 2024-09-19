@props(['active'])


@php
$classes = ($active)
            ? 'text-gray-700 font-semibold border-l-4 rounded-r-lg border-green-500 bg-white dark:text-white hover:text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 group'
            : 'text-gray-700 dark:text-white hover:text-gray-700 hover:bg-gray-200 dark:hover:bg-gray-700 group';
@endphp

<div class="relative" x-data="{ open: false }" wire:navigate>   
    <div {{ $attributes->merge(['class' => $classes]) }} x-on:click="open = !open">
        {{ $trigger }}
    </div>

    <ul x-show="open" x-cloak x-transition class="py-2 space-y-1">
        {{ $content }}
    </ul>
</div>