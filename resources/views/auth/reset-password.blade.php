{{-- Reset Password --}}
<x-guest-layout>
    <x-slot name="section">
        <x-section.guest>
            <div class="p-3 w-full bg-white shadow-md rounded-lg">
                <div class="flex justify-center mt-4">
                    <x-ui.logo />
                </div>

                <x-form route="password.store">
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div class="block mt-4">
                        <x-field.floating name="email" label="Email" icon="email" variant="secondary"
                            :value="old('email', $request->email)" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="block w-full mt-4">
                        <x-field.floating.password name="password" label="Password" type="password"
                            variant="secondary" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="block w-full mt-4">
                        <x-field.floating.password name="password_confirmation" :label="__('Confirm Password')" type="password"
                            variant="secondary" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <x-button.flat class="w-full text-center mt-5" type="submit" variant="secondary"
                        label="Reset Password" />
                </x-form>
            </div>
        </x-section.guest>
    </x-slot>
</x-guest-layout>
