@props(['name'])
<template x-if="errors[@js($name)]?.length">
    <div x-text="errors[@js($name)][0]" {{ $attributes->merge(['class' => 'text-red-500 mt-2']) }}>
    </div>
</template>
