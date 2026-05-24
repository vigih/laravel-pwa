{{-- resources/views/components/alert/base.blade.php --}}
<div
    x-data="{ open: true }"
    x-show="open"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    {{ $attributes->merge(['class' => '']) }}
    role="alert">

    {{ $slot }}

</div>
