@props(['route', 'method' => 'POST'])
<form method="POST" action="{{ route($route) }}" {{ $attributes->merge(['class' => '']) }}>
    @csrf
    {{ $slot }}
</form>
