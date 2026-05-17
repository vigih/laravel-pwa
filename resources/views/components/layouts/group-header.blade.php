{{-- resources/views/components/layouts/group-header.blade.php --}}

@props([
    'backUrl' => null,
    'pageTitle' => null,
])

<div class="flex p-2 justify-between w-full items-center">
    <x-layouts.brand-header />
    <x-layouts.notifications-header />
</div>

<x-layouts.breadcrumb-header backUrl="{{ $backUrl }}" pageTitle="{{ $pageTitle }}" />
 
