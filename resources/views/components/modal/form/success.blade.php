@props(['timeout' => 3000, 'reload' => false])

<div
    x-data="{
        show: false,
        message: '',
        type: 'success'
    }"

    x-on:notify.window="
        show = true
        message = $event.detail.message
        type = $event.detail.type

        setTimeout(() => show = false, @js($timeout))
        if(@js($reload)){
            setTimeout(() => location.reload(),@js($timeout))
        }
    "
    class="flex justify-center items-center">

    <x-footer.fixed
        x-show="show"
        x-transition
        class="bottom-1 z-[99999] flex justify-center">

        <div class="bg-green-500 text-white px-4 py-3 rounded-md flex-auto shadow-md flex items-center">
            <x-ui.icon name="check_circle" class="text-white mr-2" />
            <span x-text="message"></span>
        </div>

    </x-footer.fixed>

</div>
