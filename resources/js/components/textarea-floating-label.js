"use strict";

const TAG = 'Textarea Floating Label'
const SELECTOR = 'textarea.form-control-textarea.input-textarea'
const TEXTFIELD_FLOATING = 'textfield-floating-label'
const TEXTFIELD_FLOATING_ACTIVE = 'textfield-floating-label-active'
const TEXTFIELD_FLOATING_COMPLETED = 'textfield-floating-label-completed'

export default class TextareaFloatingLabel {

    /** @type {JQuery<Element>} */
    $element;


    /**
     * @param {Element} element
     */
    constructor(element) {

        this.$element = $(element);

        this.$element
            .on('focus', (event) => {
                event.target.textContent = event.target.textContent.trim().replace(/\\n/g, '')
                $(event.target).closest(`.${TEXTFIELD_FLOATING}`)
                    ?.addClass(TEXTFIELD_FLOATING_ACTIVE)
                    ?.addClass(TEXTFIELD_FLOATING_COMPLETED)
            })
            .on('focusout', (event) => {
                event.target.textContent = event.target.textContent.trim().replace(/\\n/g, '')
                $(event.target).closest(`.${TEXTFIELD_FLOATING}`).removeClass(TEXTFIELD_FLOATING_ACTIVE);
                let value = $(event.target)?.val();
                if (value?.length === 0) {
                    $(event.target).closest(`.${TEXTFIELD_FLOATING}`).removeClass(TEXTFIELD_FLOATING_COMPLETED);
                }
            })


        if (this.$element.val().length > 0) {
            this.$element.closest(`.${TEXTFIELD_FLOATING}`).addClass(TEXTFIELD_FLOATING_COMPLETED);
        }
    }

    /**
     * @returns {boolean}
     */
    static validate() {
        return $(SELECTOR).length > 0;
    }

    /**
     * @returns {void}
     */
    static instance() {
        if (TextareaFloatingLabel.validate()) {
            $(SELECTOR).each((i, element) => {
                new TextareaFloatingLabel(element);
            });
        }
    }
}


document.addEventListener('DOMContentLoaded', () => {
    TextareaFloatingLabel.instance();
});

