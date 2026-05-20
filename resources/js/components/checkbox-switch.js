
// chebox-switch
"use strict";
import $ from "jquery";
import { delay } from "../utils/async";

const TAG = 'Checkbox Switch'
const ELEMENT = '.checkbox-switch'
const INPUT_ELEMENT = 'input.checkbox-switch-form-control[type="checkbox"]';
const SWITCH_RIPPLE = 'switch-ripple';
const SWITCH_LABEL = '.checkbox-switch-label';
const CHECKED = 'checked';


export default class CheckboxSwitch {

    /**
     *
     * @param {Element} element
     */
    constructor(element) {

        this.$element = $(element);
        this.$inputCheckbox = $(element).find(INPUT_ELEMENT);

        const self = this;
        this.$inputCheckbox.on('change', function (e) {
            const context = $(e.target).closest(ELEMENT);
            self.addRipple(context);
            self.switchCollapseShow(e.target.checked);

            if (e.target.checked) {
                context.addClass(CHECKED);
            }
            else {
                context.removeClass(CHECKED)
            }
        });

        if (this.$inputCheckbox.is(':' + CHECKED)) {
            const context = this.$inputCheckbox.closest(ELEMENT);
            context.addClass(CHECKED);
            self.addRipple(context);
            this.switchCollapseShow(true);
        }

        this.#init()
    }

    #init() {
        const $switchLabel = this.$inputCheckbox.closest('.checkbox-switch-group').find(SWITCH_LABEL)

        if ($switchLabel.length > 0) {
            const self = this;

            $switchLabel.on('click', (event) => {
                event.preventDefault()
                const context = $(event.target).closest('.checkbox-switch-group').find(INPUT_ELEMENT);

                if (self.$inputCheckbox.is(':' + CHECKED)) {
                    self.$inputCheckbox.prop('checked', false)
                    context.removeClass(CHECKED)
                    self.$inputCheckbox.trigger('change')
                } else {
                    self.$inputCheckbox.prop('checked', true)
                    context.addClass(CHECKED);
                    self.$inputCheckbox.trigger('change')
                }

            })
        }
    }

    addRipple(context) {
        context.addClass(SWITCH_RIPPLE);
        delay(1000).then(() => context.removeClass(SWITCH_RIPPLE))
    }

    switchCollapseShow(bools) {
        if (this.#validateCollapse()) {
            delay(500).then(() => {
                $(this.$inputCheckbox.data('target')).collapse((bools ? 'show' : 'hide'))
            })
        }
    }

    #validateCollapse() {
        let validate = Object.keys(this.$inputCheckbox.data()).filter(v => ['target', 'toggle'].includes(v)).length === 2;
        return validate && this.$inputCheckbox.data('toggle') === 'collapse' && $(this.$inputCheckbox.data('target')).length > 0;
    }

    /**
     * @returns {boolean}
     */
    static validate() {
        return $(ELEMENT).length > 0;
    }

    /**
     * @returns {void}
     */
    static instance() {
        if (CheckboxSwitch.validate()) {
            $(ELEMENT).each((i, element) => {
                new CheckboxSwitch(element);
            });
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    CheckboxSwitch.instance();
});
