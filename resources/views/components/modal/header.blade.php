@props(['title', 'icon' => null, 'close' => false])
<div {{ $attributes->merge(['class' => 'modal-header flex items-center']) }}>
    @if ($icon)
        <x-ui.icon name="{{ $icon }}" class="mr-2" />
    @endif
    <h2 class="text-lg font-bold">{{ $title }}</h2>
    @if ((bool) $close)
    @endif
</div>
