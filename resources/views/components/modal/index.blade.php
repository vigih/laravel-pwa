<div x-data="{ open: false }" {{ $attributes->merge(['class' => '']) }}>
    @isset($trigger)
        {{ $trigger }}
    @endisset

    <div x-show="open"
        class="fixed inset-0 z-50 flex items-center justify-center">

        {{-- Backdrop --}}
        @isset($backdrop)
            {{ $backdrop }}
        @endisset

        @isset($dialog)
            {{ $dialog }}
        @endisset
    </div>
</div>
