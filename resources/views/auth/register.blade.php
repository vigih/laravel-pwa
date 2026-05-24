{{-- Register --}}
<x-guest-layout>
    <x-slot name="section">
        <x-section.guest>
            <div class="p-3 w-full bg-white shadow-md rounded-lg">
                <div class="flex justify-center mt-4">
                    <x-ui.logo />
                </div>
                <x-form route="register" class="mt-14">
                    <div class="block mt-4">
                        <x-field.floating name="name" label="Name" icon="account_circle" variant="secondary" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="block mt-4">
                        <x-field.floating name="email" label="Email" icon="email" variant="secondary" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="block w-full mt-4">
                        <x-field.floating.password name="password" label="Password" type="password"
                            variant="secondary" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-0 focus:ring-offset-0"
                            href="{{ route('login') }}">
                            {{ __('Sudah Punya Akun?') }}
                        </a>
                    </div>

                    <x-button.flat class="w-full text-center mt-5" type="submit" variant="secondary"
                        label="Register" />
                </x-form>
            </div>
        </x-section.guest>
    </x-slot>
</x-guest-layout>
