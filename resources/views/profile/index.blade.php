{{-- Profile --}}
<x-app-layout>
    {{-- Page header --}}
    <x-slot name="header">
        <x-layouts.group-header />
        @include('profile.partials.user-info')
    </x-slot>

    <x-slot name="section">
        <x-layouts.section class="mt-[80px] !p-0">
            <x-modals.modal :title="__('Ubah Profile')" class="!p-0">
                <x-slot name="trigger">
                    <x-list.item-action :label="__('Ubah Profile')" :icon="__('perm_identity')" type="button" @click="open = true" />
                </x-slot>
                <x-slot name="content">
                    @include('profile.partials.update-profile-form')
                </x-slot>
            </x-modals.modal>

            <x-modals.modal :title="__('Ubah Password')" class="!p-0">
                <x-slot name="trigger">
                    <x-list.item-action :label="__('Ubah Password')" :icon="__('key')" type="button" @click="open = true" />
                </x-slot>
                <x-slot name="content">
                    @include('profile.partials.update-password-form')
                </x-slot>
            </x-modals.modal>

            <x-list.item-action :label="__('Ubah No Hp')" :icon="__('settings_cell')" />
            <x-list.item-action :label="__('Profile Anda')" :icon="__('supervisor_account')" />
            <x-list.item-action :label="__('Profile Mitra')" :icon="__('corporate_fare')" />
            <x-list.item-action :label="__('Keluar Akun')" :icon="__('exit_to_app')" classGroup="text-red-600" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" />
        </x-layouts.section>

    </x-slot>

</x-app-layout>
