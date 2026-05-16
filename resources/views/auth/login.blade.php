<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <x-textfield name="email" label="Email" type="email" icon="email" color="secondary" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />

        <div class="block w-full mt-5">
            <x-textfield-multi-icon name="password" label="Password" type="password" iconPrepend="vpn_key" iconAppend="visibility" class="password-visibility" color="secondary" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center w-full mt-4">
            <x-checkbox-outline name="remember_me" label="{{ __('Remember me') }}" color="success" />

            <div class="flex flex-auto items-center justify-end">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-0 focus:ring-offset-0" href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                @endif
            </div>
        </div>

        <x-button class="w-full text-center mt-5" type="submit" variant="secondary">
            {{ __('Log in') }}
        </x-button>

        <div class="block w-full mt-5 text-center">
            <span class="text-sm">Tidak punya akun?</span>
            <a class="text-sm text-red-600 hover:text-gray-700 transition" href="{{ route('register') }}">
                {{ __('Register di sini') }}
            </a>
        </div>

    </form>
</x-guest-layout>
