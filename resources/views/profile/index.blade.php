{{-- Profile --}}
<x-app-layout>
    {{-- Page header --}}
    <x-slot name="header">
        <x-header />
        @include('profile.partials.user-info')
    </x-slot>

    {{-- Page section --}}
    <x-slot name="section">
        <x-section.app class="mt-[80px] !p-0">
            @include('profile.partials.profile-update')
            @include('profile.partials.password-update')

            <x-list.item-action label="Ubah No Hp" icon="settings_cell" />
            <x-list.item-action label="Profile Anda" icon="supervisor_account" />
            <x-list.item-action label="Profile Mitra" icon="corporate_fare" />
            <x-list.item-action label="Keluar Akun" icon="exit_to_app" classGroup="text-red-600"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();" />
        </x-section.app>
    </x-slot>

    {{-- Page footer --}}
    <x-slot name="footer">
        <x-modal.form.success reload="true" />
        <x-form.logout />
    </x-slot>

</x-app-layout>
