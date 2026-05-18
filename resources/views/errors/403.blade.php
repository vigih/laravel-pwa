{{-- Error 403 - Forbidden Access Denied --}}
<x-error-layout>
    <div class="text-center">
        <img src="{{ asset('images/error/403-error.png') }}" alt="403" class="w-full mb-4" />
        <h1 class="font-bold text-lg">403 - Forbidden Access Denied</h1>
        <p class="pt-3 mb-8">Maaf, akses ditolak.</p>
        <a href="{{ url(route('dashboard')) }}" class="bg-yellow-400 hover:bg-yellow-500 w-full py-2 text-black inline-flex items-center shadow-md justify-center font-medium rounded-lg transition-all duration-200">Kembali ke Beranda</a>
    </div>
</x-error-layout>
