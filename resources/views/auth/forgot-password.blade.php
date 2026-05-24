{{-- forget passwrod --}}
<x-guest-layout>
    <x-slot name="section">
        <x-section.guest>
            <div class="p-3 bg-white shadow-md rounded-lg">
                <div class="flex justify-center mt-4">
                    <x-ui.logo />
                </div>

                <div class="mb-10 mt-10 text-sm text-gray-600">
                    {{ __('Lupa kata sandi Anda? Tidak masalah. Cukup beri tahu kami alamat email Anda dan kami akan mengirimkan tautan pengaturan ulang kata sandi melalui email yang memungkinkan Anda memilih kata sandi baru.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="block mt-4">
                        <x-field.floating name="email" label="Email" type="email" icon="email"
                            variant="secondary" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button.flat class="w-full text-center mt-5" type="submit" variant="secondary"
                            label="Email Password Reset Link" />
                    </div>
                </form>
            </div>
        </x-section.guest>
    </x-slot>
</x-guest-layout>
