"use strict";

import { timeOut } from "../utils/async";
import $ from 'jquery';

const ELEMENT_INPUT = '.form-control'
const TEXTFIELD_FLOATING = 'textfield-floating-label'
const TEXTFIELD_FLOATING_ACTIVE = 'textfield-floating-label-active'
const TEXTFIELD_FLOATING_COMPLETED = 'textfield-floating-label-completed'
const EVENT = {
    floating_active: 'floatingActive.textfield',
    floating_completed: 'floatingCompleted.textfield',
}

export default class TextfieldFloatingLabel {

    /** @type {JQuery<Element>} */
    textfield;

    /** @type {JQuery<Element>} */
    textInput;

    /**
     * @param {Element} textfield
     */
    constructor(textfield) {

        this.textfield = $(textfield);

        this.textInput = this.textfield.find('input.form-control[id]');
        if (this.textInput?.length > 0) {

            this.textInput
                .on('focus', (event) => {
                    $(event.target).closest('.' + TEXTFIELD_FLOATING)
                        .addClass(TEXTFIELD_FLOATING_ACTIVE)
                        .addClass(TEXTFIELD_FLOATING_COMPLETED)
                })
                .on('focusout', (event) => {
                    $(event.target).closest('.' + TEXTFIELD_FLOATING).removeClass(TEXTFIELD_FLOATING_ACTIVE);
                    let value = $(event.target)?.val();
                    if (value?.length === 0) {
                        $(event.target).closest('.' + TEXTFIELD_FLOATING).removeClass(TEXTFIELD_FLOATING_COMPLETED);
                    }
                })
                .on(EVENT.floating_active, (event) => {
                    $(event.target).closest('.' + TEXTFIELD_FLOATING)
                        .addClass(TEXTFIELD_FLOATING_ACTIVE)
                        .addClass(TEXTFIELD_FLOATING_COMPLETED)
                })
                .on(EVENT.floating_completed, (event) => {
                    $(event.target).closest('.' + TEXTFIELD_FLOATING).removeClass(TEXTFIELD_FLOATING_ACTIVE);
                    let value = $(event.target)?.val();
                    if (value?.length === 0) {
                        $(event.target).closest('.' + TEXTFIELD_FLOATING).removeClass(TEXTFIELD_FLOATING_COMPLETED);
                    }
                })

            timeOut(300, () => {
                if (this.textInput.val().length > 0) {
                    this.textInput.closest('.' + TEXTFIELD_FLOATING).addClass(TEXTFIELD_FLOATING_COMPLETED)
                }
            })

        }
    }

    /**
     * @returns {boolean}
     */
    static validate() {
        return $(ELEMENT_INPUT).length > 0;
    }

    /**
     * @returns {void}
     */
    static instance() {
        if (TextfieldFloatingLabel.validate()) {
            $(`.${TEXTFIELD_FLOATING}`).each((i, element) => {
                new TextfieldFloatingLabel(element);
            });
        }
    }
}

TextfieldFloatingLabel.instance();
