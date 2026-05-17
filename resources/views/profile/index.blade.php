{{-- Profile --}}
<x-app-layout>
    {{-- Page header --}}
    <x-slot name="header">
        <x-layouts.group-header />
        @include('profile.partials.user-info')
    </x-slot>
        
    <x-slot name="section">
        <x-layouts.section class="mt-[80px] !p-0">
            <x-lists.list-item-action :label="__('Ubah Profile')" :icon="__('perm_identity')" />
            <x-lists.list-item-action :label="__('Ubah Password')" :icon="__('key')" />
            <x-lists.list-item-action :label="__('Ubah No Hp')" :icon="__('settings_cell')" />
            <x-lists.list-item-action :label="__('Profile Anda')" :icon="__('supervisor_account')" />
            <x-lists.list-item-action :label="__('Profile Mitra')" :icon="__('corporate_fare')" />
            <x-lists.list-item-action :label="__('Keluar Akun')" :icon="__('exit_to_app')" classGroup="text-red-600" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"/>
        </x-layouts.section>
    </x-slot>

</x-app-layout>
