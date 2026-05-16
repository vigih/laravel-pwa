<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Terima kasih telah mendaftar! Sebelum memulai, mohon verifikasi alamat email Anda dengan mengklik tautan yang baru saja kami kirimkan melalui email. Jika Anda tidak menerima email tersebut, kami akan dengan senang hati mengirimkan email lain kepada Anda.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Email baru verifikasi telah dikirimkan ke alamat email Anda. Silakan verifikasi email Anda.') }}
        </div>
    @endif

    <div class="mt-4">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-button class="w-full text-center mt-5" type="submit" variant="secondary">
                    {{ __('Resend Verification Email') }}
                </x-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-button class="w-full text-center mt-5" type="submit" variant="danger">
                {{ __('Log Out') }}
            </x-button>
        </form>
    </div>
</x-guest-layout>
