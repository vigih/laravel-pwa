{{-- verify-email --}}
<x-guest-layout>
    <x-slot name="section">
        <x-layouts.section-guest>
            <div class="p-3 bg-white shadow-md rounded-lg">
                <div class="flex justify-center mt-4">
                    <x-ui.logo />
                </div>

                <div class="mb-4 mt-10 text-sm text-gray-600">
                    {{ __('Terima kasih telah mendaftar! Sebelum memulai, mohon verifikasi alamat email Anda dengan mengklik tautan yang baru saja kami kirimkan melalui email. Jika Anda tidak menerima email tersebut, kami akan dengan senang hati mengirimkan email lain kepada Anda.') }}
                </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('Email baru verifikasi telah dikirimkan ke alamat email Anda. Silakan verifikasi email Anda.') }}
                    </div>
                @endif

                <div class="mt-4">
                    <x-form.logout />
                    <x-form route="verification.send">
                        <x-button.flat class="w-full text-center mt-5" type="submit" variant="secondary" label="Resend Verification Email" />
                    </x-form>
                    <x-form route="logout">
                        <x-button.flat class="w-full text-center mt-5" type="submit" variant="danger" label="Log Out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" />
                    </x-form>
                </div>

            </div>
        </x-layouts.section-guest>
    </x-slot>
</x-guest-layout>
