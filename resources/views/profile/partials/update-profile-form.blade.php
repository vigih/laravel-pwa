<x-modals.form-modal>
    <div class="p-3">
        <div class="block w-full mt-4">
            <x-textfield-multi-icon name="password" label="Password" type="password" iconPrepend="vpn_key" iconAppend="visibility" class="password-visibility" color="secondary" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
    
        <x-button class="w-full text-center mt-5" type="submit" variant="secondary">
            {{ __('Update Password') }}
        </x-button>
    </div>
</x-modals.form-modal>
