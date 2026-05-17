{{-- resources/views/components/modals/form-modal.blade.php --}}

@props([
    'class' => '',
])

<form action="#" method="POST">
    @csrf
    {{ $slot }}
</form>
