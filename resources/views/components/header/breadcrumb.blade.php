@props([
    'backUrl' => null,
    'pageTitle' => null,
])

<div {{ $attributes->merge(['class' => 'header-breadcrumb absolute bottom-[4px] w-full']) }}>
    @if ($backUrl)
        @if ($backUrl === '/')
            <a href="{{ url('/') }}" class="breadcrumb-item absolute left-[4px] z-10">
                <span class="material-icons-outlined text-[28px] ripple-effect">keyboard_backspace</span>
            </a>
        @else
            <a href="{{ route($backUrl) }}" class="breadcrumb-item absolute left-[4px] z-10">
                <span class="material-icons-outlined text-[28px] ripple-effect">keyboard_backspace</span>
            </a>
        @endif
    @endif

    @if ($pageTitle)
        <h2 class="page-title text-center select-none font-semibold text-gray-900">{{ $pageTitle }}</h2>
    @endif
</div>
