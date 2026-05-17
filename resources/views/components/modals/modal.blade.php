{{-- resources/views/components/modals/modal.blade.php --}}

@props([
    'class' => '',
    'title' => '',
    'position' => 'bottom',
])

<div x-data="{ open: false }" class="px-3 {{ $class }}">
    @isset($trigger)
        {{ $trigger }}
    @endisset
    <x-modals.base>
        {{-- Backdrop --}}
        <x-modals.transition />
        <x-modals.dialog :position="$position">
            <x-modals.header title="{{ $title }}" />
            @isset($content)
                {{ $content }}
            @endisset
        </x-modals.dialog>
    </x-modals.base>
</div>
