<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="block mt-4">
            <x-textfield name="email" label="Email" icon="email" color="secondary" :value="old('email', $request->email)" required autofocus autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="block w-full mt-4">
            <x-textfield-multi-icon name="password" label="Password" type="password" iconPrepend="vpn_key" iconAppend="visibility" class="password-visibility" color="secondary" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
         <div class="block w-full mt-4">
            <x-textfield-multi-icon name="password_confirmation" :label="__('Confirm Password')" type="password" iconPrepend="vpn_key" iconAppend="visibility" class="password-visibility" color="secondary" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-button class="w-full text-center mt-5" type="submit" variant="secondary">
            {{ __('Reset Password') }}
        </x-button>
    </form>
</x-guest-layout>
