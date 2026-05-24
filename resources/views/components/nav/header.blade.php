@props(['backUrl' => null, 'title' => null])

<div
    {{ $attributes->merge(['class' => 'relative flex items-center justify-center select-none pb-2 border-b border-gray-400']) }}>
    @if ($backUrl)
        @if ($backUrl === '/')
            <a href="{{ url('/') }}" class="flex items-center absolute left-[4px] z-10">
                <span class="material-icons-outlined text-[28px]">keyboard_backspace</span>
            </a>
        @else
            <a href="{{ route($backUrl) }}" class="flex items-center absolute left-[4px] z-10">
                <span class="material-icons-outlined text-[28px]">keyboard_backspace</span>
            </a>
        @endif
    @endif

    @if ($title)
        <h2 class="flex-auto text-center select-none font-semibold text-gray-900">{{ $title }}</h2>
    @endif
</div>
