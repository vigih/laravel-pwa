{{-- Form POST tersembunyi yang mengeksekusi logout --}}
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
    @csrf
</form>
