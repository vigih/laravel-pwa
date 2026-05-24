@props(['route', 'method' => 'POST'])
<form method="{{ $method }}" action="{{ route($route) }}" {{ $attributes->merge(['class' => '']) }}>
    @csrf
    {{ $slot }}
</form>
