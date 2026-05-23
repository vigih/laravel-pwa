{{-- index.blade --}}
@props(['route'])
<div
    x-data="formModal(@js(route($route)))"
    x-on:open-modal.window="open = true"
    {{ $attributes->merge(['class' => '']) }}>

    @isset($trigger)
        {{ $trigger }}
    @endisset

    <div x-show="open"
        class="fixed inset-0 z-[10000] flex items-center justify-center">

        {{-- Backdrop --}}
        @isset($backdrop)
            {{ $backdrop }}
        @endisset

        @isset($dialog)
            <form @submit.prevent="submit" class="flex justify-center">
                {{ $dialog }}
            </form>
        @endisset
    </div>
</div>
