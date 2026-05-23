// resources/js/components/formModal.js
export default function formModal(url = '', method = 'POST') {
    return {
        open: false,
        url: url,
        loading: false,
        form: {},
        errors: {},

        async submit() {

            this.loading = true
            this.errors = {}

            const response = await fetch(this.url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document
                        .querySelector('meta[name=csrf-token]')
                        .content
                },
                body: JSON.stringify(this.form)
            })

            const data = await response.json()

            // VALIDATION ERROR
            if (response.status === 422) {
                this.errors = data.errors
                this.loading = false
                return
            }

            // SUCCESS
            this.open = false
            this.loading = false
            this.form = {}

            // ALERT
            window.dispatchEvent(new CustomEvent('notify', {
                detail: {
                    type: 'success',
                    message: data.message ?? 'Success'
                }
            }))

        }
    }
}
