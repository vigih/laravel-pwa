
// checkbox-outline
"use strict";
import $ from "jquery";
import { delay } from "../utils/async";

const TAG = 'CheckboxOutline'
const ELEMENT = '.checkbox-outline';
const INPUT_ELEMENT = 'input.checkbox-outline-form-control[type="checkbox"]';
const CHECKED = 'checked';
const CHECKBOX_RIPPLE = 'checkbox-outline-ripple';


export default class CheckboxOutline {

    /** @type {JQuery<Element>} */
    $inputCheckbox

    /**
     *
     * @param {Element} inputCheckbox
     */
    constructor(inputCheckbox) {
        this.$inputCheckbox = $(inputCheckbox);
        const self = this;
        this.$inputCheckbox.on('change', function (e) {
            const context = $(e.target).closest(ELEMENT);
            if (e.target.checked) {
                context.addClass(CHECKED).addClass(CHECKBOX_RIPPLE);
                delay(1000).then(() => context.removeClass(CHECKBOX_RIPPLE));
            }
            else {
                context.removeClass(CHECKED).addClass(CHECKBOX_RIPPLE);
                delay(1000).then(() => context.removeClass(CHECKBOX_RIPPLE));
            }
        });

        if (this.$inputCheckbox.is(':' + CHECKED)) {
            this.$inputCheckbox.closest(ELEMENT).addClass(CHECKED).addClass(CHECKBOX_RIPPLE);
            delay(1000).then(() => this.$inputCheckbox.closest(ELEMENT).removeClass(CHECKBOX_RIPPLE));
        }

    }

    #controlLabel() {
        $(ELEMENT).on('click', 'label', function (e) {
            console.log(e);
        })
    }

    /**
     *
     * @returns {boolean}
     */
    static validate() {
        return $(ELEMENT).length > 0;
    }

    /**
     * @returns {void}
     */
    static instance() {
        if (CheckboxOutline.validate()) {
            $(ELEMENT).find(INPUT_ELEMENT).each(function (i, inputCheckbox) {
                new CheckboxOutline(inputCheckbox)
            });
        }
    }
}

CheckboxOutline.instance();
