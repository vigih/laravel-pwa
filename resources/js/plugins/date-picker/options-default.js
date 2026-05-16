
/** @param {import("moment")} moment */
export const optionsDefault = (moment) => {
    return {
        localization: {
            format: 'dd-MM-yyyy H:mm'
        },
        display: {
            icons: {
                type: 'icons',
                time: 'material-icons-outlined ripple-effect schedule',
                date: 'material-icons-outlined ripple-effect date_range',
                up: 'material-icons-outlined ripple-effect user-select-none keyboard_arrow_up',
                down: 'material-icons-outlined ripple-effect user-select-none keyboard_arrow_down',
                previous: 'material-icons-outlined ripple-effect chevron_left',
                next: 'material-icons-outlined ripple-effect chevron_right',
                today: 'material-icons-outlined ripple-effect date_range',
                clear: 'material-icons-outlined ripple-effect delete',
                close: 'material-icons-outlined ripple-effect close',
            },
            sideBySide: false,
            calendarWeeks: false,
            viewMode: 'calendar',
            toolbarPlacement: 'bottom',
            keepOpen: false,
            buttons: {
                today: false,
                clear: false,
                close: false,
            },
            components: {
                calendar: true,
                date: true,
                month: true,
                year: true,
                decades: true,
                clock: true,
                hours: true,
                minutes: true,
                seconds: false,
                useTwentyfourHour: undefined,
            },
            inline: false,
            theme: 'auto',
            placement: 'bottom',
        },
        defaultDate: new Date(Date.now()),
        restrictions: {
            minDate: new Date(Date.now())
        },
    }

}
