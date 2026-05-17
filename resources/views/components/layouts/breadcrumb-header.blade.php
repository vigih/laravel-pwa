{{-- resources/views/components/layouts/breadcrumb-header.blade.php --}}

@props([
    'backUrl' => null,
    'pageTitle' => null,
    'class' => '',
])


<div class="header-breadcrumb absolute bottom-[4px] w-full">
	@if($backUrl)
	<a href="{{ $backUrl }}" class="breadcrumb-item absolute left-[4px] z-10">
		<span class="material-icons-outlined text-[28px] ripple-effect">keyboard_backspace</span>
	</a>
	@endif

	@if($pageTitle)
	<h2 class="page-title text-center select-none font-semibold text-gray-900">{{ $pageTitle }}</h2>
	@endif
</div>
