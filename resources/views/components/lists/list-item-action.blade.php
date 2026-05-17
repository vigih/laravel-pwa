{{-- resources/views/components/lists/list-item.blade.php --}}
@props([
    'label' => '',
    'icon' => '',
    'url' => '#',
    'class' => '',
    'classGroup' => '',
])

<div {{ $attributes }} class="flex w-full justify-between items-center shadow-sm bg-white border-b-[1px] border-solid border-gray-300 p-3 select-none">
    <span class="material-icons-outlined font-bold text-[28px] {{ $classGroup }}">{{ $icon }}</span>
    <div class="font-bold flex-auto pl-3 {{ $classGroup }}">{{ $label }}</div>
    <span class="material-icons-outlined text-gray-300">arrow_forward_ios</span>
</div>
