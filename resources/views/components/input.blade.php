<!-- input.blade.php -->
@props(['name', 'label', 'type' => 'text'])

<div class="form-group flex flex-col mb-8">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name) }}" {{ $attributes->merge([
            'class' => 'block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-black outline-1 outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6'
        ]) }}>

    @error($name)
        <p class="mt-1 text-xs text-red-600 italic">{{ $message }}</p>
    @enderror

</div>
