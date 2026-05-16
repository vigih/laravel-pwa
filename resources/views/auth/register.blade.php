<x-guest-layout>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="block mt-4">
            <x-textfield name="name" label="Name" icon="account_circle" color="secondary" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <x-textfield name="email" label="Email" icon="email" color="secondary" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

       <div class="block w-full mt-4">
            <x-textfield-multi-icon name="password" label="Password" type="password" iconPrepend="vpn_key" iconAppend="visibility" class="password-visibility" color="secondary" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-0 focus:ring-offset-0" href="{{ route('login') }}">
                {{ __('Sudah Punya Akun?') }}
            </a>
        </div>
        
        <x-button class="w-full text-center mt-5" type="submit" variant="secondary">
            {{ __('Register') }}
        </x-button>
    </form>
</x-guest-layout>
