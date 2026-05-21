{{-- login --}}
<x-guest-layout>
    <x-slot name="section">
        <x-layouts.section-guest>
            @if (session('error'))
                <x-alert variant="error" message="{{ session('error') }}" class="mb-3" />
            @endif
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <div class="p-3 bg-white shadow-md rounded-lg">
                <div class="flex justify-center mt-4">
                    <x-ui.logo />
                </div>

                <x-form route="login" class="mt-14">
                    <x-field.floating name="email" label="Email" type="email" icon="email" variant="secondary" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <div class="block w-full mt-5">
                        <x-field.floating.password name="password" label="Password" type="password" variant="secondary" />
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

                    <x-button.flat class="w-full text-center mt-8" type="submit" variant="secondary" :label="__('Log in')" />

                    <div class="block w-full mt-5 text-center">
                        <span class="text-sm">Tidak punya akun?</span>
                        <a class="text-sm text-red-600 hover:text-gray-700 transition" href="{{ route('register') }}">
                            {{ __('Register di sini') }}
                        </a>
                    </div>
                </x-form>
            </div>
        </x-layouts.section-guest>
    </x-slot>
</x-guest-layout>
