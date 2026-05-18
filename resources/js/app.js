import './bootstrap';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import * as Utils from './utils/index.js';

import $ from 'jquery';
import moment from 'moment';
import * as popper from '@popperjs/core/dist/esm/popper.js';

import { TempusDominus } from '@eonasdan/tempus-dominus/dist/js/tempus-dominus.esm.js';

import TomSelect from 'tom-select';
import 'tom-select/dist/css/tom-select.css';

// Components
import TextfieldFloatingLabel from './components/textfield-floating-label.js';
import CheckboxOutline from './components/checkbox-outline.js';
import CheckboxSwitch from './components/checkbox-switch.js';
import Radio from './components/radio.js';
import PasswordVisibility from './components/password-visibility.js';
import TextareaFloatingLabel from './components/textarea-floating-label.js';
import InputNumber from './components/input-number.js';
import InputCurrency from './components/input-currency.js';

// Plugins
import Select2Basic from './plugins/select2/select2-basic.js';
import DateTimePicker from './plugins/date-picker/date-time-picker.js';

Alpine.plugin(collapse)
window.$ = window.jQuery = $
window.Alpine = Alpine;
window.popper = popper;
window.TempusDominus = TempusDominus;
window.moment = moment;
window.TomSelect = TomSelect;

// Components
window.Utils = Utils;
window.TextfieldFloatingLabel = TextfieldFloatingLabel;
window.CheckboxOutline = CheckboxOutline;
window.CheckboxSwitch = CheckboxSwitch;
window.RadioInput = Radio;
window.PasswordVisibility = PasswordVisibility;
window.Select2Basic = Select2Basic;
window.DateTimePicker = DateTimePicker;
window.TextareaFloatingLabel = TextareaFloatingLabel;
window.InputNumber = InputNumber;
window.InputCurrency = InputCurrency;


Alpine.start();
