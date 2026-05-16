'use strict';

const TAG = 'Password Visibility';
const INPUT_PASSWORD = 'input.form-control[type="password"].password-visibility';

export default class PasswordVisibility {

    /**
     * 
     * @param {Element} element
     */
    constructor(element) {

        this.$element = $(element);
        this.toggle = this.$element.closest('.input-group')?.find('.input-group-append .material-icons-outlined')

        if (this.toggle.length === 0) {
            return;
        }

        const self = this;
        this.toggle.on('click', (event) => {
            event.preventDefault();
            const textContent = event.target.textContent?.trim()
            if (textContent === 'visibility') {
                self.transformto('password')
            }

            if (textContent === 'visibility_off') {
                self.transformto('text')
            }
        })

        if (this.$element.attr('type') === 'password') {
            this.transformto('password')
        } else {
            this.transformto('text')
        }

    }

    /** 
     * @param {string} type
     * @returns {void}
     */
    transformto(type) {
        if (type === 'text') {
            this.$element.attr('type', 'text')
            this.toggle.text('visibility')
            return;
        }

        if (type === 'password') {
            this.$element.attr('type', 'password')
            this.toggle.text('visibility_off')
            return;
        }
    }

    /**
     * 
     * @returns {boolean}
     */
    static #validate() {
        return $(INPUT_PASSWORD).length > 0;
    }

    /**
     * 
     * @returns {void}
     */
    static instance() {
        if (PasswordVisibility.#validate()) {
            $(INPUT_PASSWORD).each((i, input) => {
                new PasswordVisibility(input)
            });
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    PasswordVisibility.instance();
});
