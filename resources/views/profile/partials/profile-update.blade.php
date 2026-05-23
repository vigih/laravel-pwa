<x-modal.form route="profile.update">
    <x-slot name="trigger">
        <x-list.item-action label="Update Profile" icon="perm_identity" type="button" @click="open = true" />
    </x-slot>

    <x-slot name="backdrop">
        <x-modal.backdrop :click=true />
    </x-slot>

    <x-slot name="dialog">
        <x-modal.dialog.bottom>
            <x-modal.header title="Update Profile" icon="settings" />
            <x-modal.body class="mt-4">
                <x-field.floating name="name" label="User" icon="perm_identity" variant="secondary"
                    x-model="form.name" class="mt-4" />
                <x-modal.form.error name="name" />
            </x-modal.body>

            <x-modal.footer-action class="mt-6">
                <x-button.flat variant="info" label="Close" @click="open = false" />
                <x-button.flat type="submit" variant="secondary" label="Update" />
            </x-modal.footer-action>
        </x-modal.dialog.bottom>
    </x-slot>

</x-modal.form>
