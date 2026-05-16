'use strict';

const TAG = 'Input Currency';
const SELECTOR = 'input.form-control[type="tel"].input-currency';

export default class InputCurrency {

    /** @type {JQuery<Element>} */
    $element;

    /**
     * 
     * @param {Element} element
     */
    constructor(element) {

        this.$element = $(element);

        this.$element
            .on('input', (event) => {
                const value = event.target.value.replace(/[^0-9]/g)
                event.target.value = this.numberFormat(value)
            })
    }

    /**
     * @param {number|string} value
     * @param {number} decimals
     * @param {string} dec_point
     * @param {string} thousands_sep
     */
    numberFormat(value, decimals = 0, dec_point = '.', thousands_sep = '.') {
        if (typeof value === 'string') {
            value = value.replace(/[^0-9.-]/g, '');
        }
        let num = parseFloat(value);
        if (isNaN(num)) return '0';
        const parts = num.toFixed(decimals).split('.');
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_sep);

        return parts.join(dec_point);
    }

    /**
     * 
     * @returns {boolean}
     */
    static #validate() {
        return $(SELECTOR).length > 0;
    }

    /**
     * 
     * @returns {void}
     */
    static instance() {
        if (InputCurrency.#validate()) {
            $(SELECTOR).each((i, input) => {
                new InputCurrency(input)
            });
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    InputCurrency.instance();
});
