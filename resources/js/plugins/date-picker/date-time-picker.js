"use strict";

import { momentParse, updateIcon, btnClose, bodyBackdrop, toolbarPreset } from "./plugins.js";
import { optionsDefault } from "./options-default.js";
import { timeOut } from "../../utils/async.js";

const TAG = 'Date Time Picker'
const SELECTOR = '.form-control.date-time-picker';

const EVENT = {
    show: "show.td",
    hide: "hide.td",
    change: "change.td",
    update: "update.td",
}

export default class DateTimePicker {

    /** @type {import("moment")} */
    moment

    /** @type {JQuery} */
    $

    /** @type {JQuery<Element>} */
    $element

    /** @type {import("@eonasdan/tempus-dominus").TempusDominus} */
    tempus


    /**
     *
     * @param {Element} element
    */
    constructor(element) {


        /** @type {import("moment")} */
        const moment = window.moment
        /** @type {JQuery} */
        const $ = window.$

        this.$element = $(element)
        const options = $.extend({}, optionsDefault(moment), {})

        const TempusDominus = window.TempusDominus
        /** @type {import("@eonasdan/tempus-dominus")} */
        const tempus = new TempusDominus(element, options);

        this.tempus = tempus
        this.$ = $
        this.moment = moment

        const self = this
        this.$element
            .on(EVENT.show, (event) => {

                $(tempus.display.widget)
                    .removeClass('dark')
                    .addClass('bootstrap')

                updateIcon(tempus, $)
                btnClose(tempus, $)
                toolbarPreset(tempus, $)
            })
            .on(EVENT.hide, (event) => {
                self.#transformModeDate()
            })
            .on(EVENT.change, (event) => {
                event.preventDefault();

            })
            .on(EVENT.update, (event) => {
                updateIcon(tempus, $)
                toolbarPreset(tempus, $)
            })

    }


    /**
     *
     * @returns {void}
     */
    #transformModeDate() {
        const tempus = this.tempus;
        const $element = this.$element;

        tempus.optionsStore.currentView = 'calendar'
        $(tempus.display.widget)?.find('.date-container.td-collapse')?.addClass('show')
        $(tempus.display.widget)?.find('.time-container.td-collapse')?.removeClass('show')

    }

    /**
     *
     * @returns {boolean}
     */
    static validate() {
        return typeof $ === 'function' && $(SELECTOR).length > 0;
    }

    /**
     * @returns {void}
     */
    static instance() {
        if (DateTimePicker.validate()) {
            $(SELECTOR).each(function (i, input) {
                new DateTimePicker(input)
            });
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    DateTimePicker.instance();
});
