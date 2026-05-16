/**
 *
 * @typedef {import("@eonasdan/tempus-dominus").TempusDominus} TempusDominusInstance
 * @typedef {import("jquery")} JqueryInstance
 *
 */

import { timeOut } from "../../utils/async"

/**
 * Parse tanggal dari Tempus Dominus ke format string
 *
 * @param {TempusDominusInstance} tempus
 * @returns {string|null}
 */
export const momentParse = (tempus) => {

}

/**
 *
 * @param {TempusDominusInstance} tempus
 * @param {JqueryInstance} $
 * @returns {void}
 */
export const updateIcon = (tempus) => {

    const widget = 'body .tempus-dominus-widget.show'
    $(widget)
        .find('.material-icons-outlined')
        ?.each((i, element) => {
            const icon = $(element).attr('class')?.split(' ').pop()
            if (icon && $(element).text().length === 0) {
                $(element).text(icon)
            }
        })
}


/**
 *
 * @param {TempusDominusInstance} tempus
 * @param {JqueryInstance} $
 * @returns {void}
 */
export const btnClose = (tempus, $) => {

    const selector = '.btn-action-date-time-picker'
    const btnAction = $(`<div/>`).addClass(selector.slice(1))
    const $element = $(tempus.optionsStore.input)

    const $toolbar = $(tempus.display.widget).find('.toolbar')
    if ($toolbar.length > 0 && $toolbar.find(selector)?.length === 0) {
        $toolbar.append([
            btnAction.append([
                $(`<div/>`).addClass('btn btn-close btn-sm btn-outline-primary ripple-effect')
                    .text('Close')
            ])
        ])

        btnAction.find('.btn-close')
            .on('click', (event) => {
                event.preventDefault();
                tempus.hide()
            })
    }
}


/**
 *
 * @param {TempusDominusInstance} tempus
 * @param {JqueryInstance} $
 * @returns {void}
 */
export const bodyBackdrop = (tempus, $) => {
}


/**
 *
 * @param {TempusDominusInstance} tempus
 * @param {JqueryInstance} $
 * @returns {void}
 */
export const toolbarPreset = (tempus, $) => {

    const widget = 'body .tempus-dominus-widget.show'
    const $toolbar = $(widget)?.find('.toolbar div[data-action="togglePicker"]')?.find('.material-icons-outlined')
    const $togglePicker = $(widget).find('.toolbar [data-action="togglePicker"]')
    const currentView = tempus.optionsStore.currentView

    timeOut(1000, () => {
        const $dateContainer = $(widget)?.find('.date-container.show')
        const $timeContainer = $(widget)?.find('.time-container.show')
        if ($dateContainer.length === 1) {
            $toolbar.addClass('schedule').text('schedule')
            tempus.optionsStore.currentView = 'calendar'
        }

        if ($timeContainer.length === 1) {
            $toolbar.addClass('date_range').text('date_range')
            tempus.optionsStore.currentView = 'clock'
        }
    })

}

