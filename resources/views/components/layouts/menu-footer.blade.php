{{-- resources/views/components/layouts/menu-footer.blade.php --}}
@props([
    'label' => '',
    'icon' => '',
    'url' => '#',
    'class' => '',
    'active' => '',
])

<div class="menu-item flex-[0_0_auto] flex flex-col justify-center items-center p-1 mr-3" onclick="location.href='{{ $url }}'">
    <span class="material-icons-outlined font-bold text-[28px] {{ $active }}">{{ $icon }}</span>
    <div class="menu-label font-bold text-sm {{ $active }}">{{ $label }}</div>
</div>
