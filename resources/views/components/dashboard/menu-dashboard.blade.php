{{-- resources/views/components/dashboard/menu-dashboard.blade.php --}}
@props([
    'label' => '',
    'description' => '',
    'icon' => '',
    'url' => '',
    'class' => '',
])

<div class="flex flex-col justify-center items-center shadow-sm bg-white rounded-lg mb-4">
    <div class="flex justify-center items-center m-4 mb-0">
        <span class="material-icons-outlined font-bold text-[28px]">{{ $icon }}</span>
    </div>
    <h3 class="font-semibold text-gray-800 leading-tight text-center pt-2">
            {{ $label }}
    </h3>
    <h3 class="text-green-600 leading-tight text-sm text-center pb-2">
        {{ $description }}
    </h3>
</div>
