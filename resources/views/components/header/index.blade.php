@props([
    'backUrl' => null,
    'pageTitle' => null,
])

<div {{ $attributes->merge(['class' => 'flex p-2 justify-between w-full items-center']) }}>
    <x-header.logo />
    <x-header.notifications />
</div>

<x-header.breadcrumb backUrl="{{ $backUrl }}" pageTitle="{{ $pageTitle }}" />
