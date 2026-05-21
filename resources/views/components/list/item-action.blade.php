{{-- resources/views/components/lists/list-item-action.blade.php --}}

@props([
    'label' => '',
    'icon' => '',
    'url' => '#',
    'classGroup' => '',
])

<div {{ $attributes->merge(['class' => 'flex w-full justify-between items-center shadow-sm bg-white border-b-[1px] border-solid border-gray-300 p-3 select-none']) }} {{ $attributes }}>
    <x-ui.icon name="{{ $icon }}" class="text-[28px]" />
    <div class="font-medium flex-auto pl-3 {{ $classGroup }}">{{ $label }}</div>
    <x-ui.icon name="arrow_forward_ios" class="!text-gray-300" />
</div>
