{{-- Dashboard --}}
<x-app-layout>
    {{-- Page header --}}
    <x-slot name="header">
        <x-layouts.group-header backUrl="{{ url('/') }}" pageTitle="{{ __('Dashboard') }}" />
    </x-slot>

    {{-- Page content --}}
    <x-slot name="section">
        <x-layouts.section>
            <div class="grid grid-cols-2 gap-4">
                <x-dashboard.menu-dashboard label="{{ __('User') }}" description="{{ __('100 User') }}" icon="person_add" />
                <x-dashboard.menu-dashboard label="{{ __('Notifications') }}" description="{{ __('100 Notifications') }}" icon="notifications_active" />
                <x-dashboard.menu-dashboard label="{{ __('Mobil') }}" description="{{ __('100 Mobil') }}" icon="local_taxi" />
                <x-dashboard.menu-dashboard label="{{ __('Pengaturan') }}" description="{{ __('100 Pengaturan') }}" icon="settings" />
                <x-dashboard.menu-dashboard label="{{ __('Driver') }}" description="{{ __('100 Driver') }}" icon="group_add" />
                <x-dashboard.menu-dashboard label="{{ __('Telephone Masuk') }}" description="{{ __('100 Telephone Masuk') }}" icon="phone_callback" />
                <x-dashboard.menu-dashboard label="{{ __('Pengaturan') }}" description="{{ __('100 Pengaturan') }}" icon="favorite_border" />
                <x-dashboard.menu-dashboard label="{{ __('Language') }}" description="{{ __('100 Pengaturan') }}" icon="language" />
            </div>
        </x-layouts.section>
    </x-slot>
</x-app-layout>
