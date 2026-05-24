{{-- Dashboard --}}
@php
    $items = [
        ['label' => 'User', 'description' => '100 User', 'icon' => 'person_add'],
        ['label' => 'Notifications', 'description' => '100 Notifications', 'icon' => 'notifications_active'],
        ['label' => 'Mobil', 'description' => '100 Mobil', 'icon' => 'local_taxi'],
        ['label' => 'Pengaturan', 'description' => '100 Pengaturan', 'icon' => 'settings'],
        ['label' => 'Driver', 'description' => '100 Driver', 'icon' => 'group_add'],
        ['label' => 'Report', 'description' => '100 Report', 'icon' => 'favorite_border'],
        ['label' => 'Language', 'description' => '100 Language', 'icon' => 'language'],
    ];
@endphp
<x-app-layout>
    {{-- Page header --}}
    <x-slot name="header">
        <x-header backUrl="/" pageTitle="Dashboard" />
    </x-slot>

    {{-- Page content --}}
    <x-slot name="section">
        <x-section.app>
            <div class="grid grid-cols-2 gap-4">
                @foreach ($items as $item)
                    <x-dashboard.item label="{{ $item['label'] }}" description="{{ $item['description'] }}"
                        icon="{{ $item['icon'] }}" url="#" />
                @endforeach
            </div>
        </x-section.app>
    </x-slot>
</x-app-layout>
