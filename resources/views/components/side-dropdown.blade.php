@props(['active', 'name'])



<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">   
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <ul x-show="open" x-cloak x-transition class="py-2 space-y-2">
        {{ $content }}
    </ul>
</div>