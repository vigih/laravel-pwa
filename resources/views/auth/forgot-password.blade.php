<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Lupa kata sandi Anda? Tidak masalah. Cukup beri tahu kami alamat email Anda dan kami akan mengirimkan tautan pengaturan ulang kata sandi melalui email yang memungkinkan Anda memilih kata sandi baru.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="block mt-4">
            <x-textfield name="email" label="Email" type="email" icon="email" color="secondary" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button class="w-full text-center mt-5" type="submit" variant="secondary">
                 {{ __('Email Password Reset Link') }}
            </x-button>
        </div>
    </form>
</x-guest-layout>
