'use strict';

const TAG = 'Input Number';
const SELECTOR = 'input.form-control[type="number"].input-number';

export default class InputNumber {

    /** @type {JQuery<Element>} */
    $element;

    /**
     * 
     * @param {Element} element
     */
    constructor(element) {

        this.$element = $(element);
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
        if (InputNumber.#validate()) {
            $(SELECTOR).each((i, input) => {
                new InputNumber(input)
            });
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    InputNumber.instance();
});
