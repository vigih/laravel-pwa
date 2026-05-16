@extends('layouts.blank')

@section('title', 'Halaman Tests')

@section('content')
<div class="tests-container">
    <x-button>Simpan</x-button>
    <x-button variant="danger">Hapus</x-button>
    <x-button variant="success">Simpan</x-button>
    <x-button variant="secondary">Simpan</x-button>
    <x-button variant="outline" class="relative ripple-effect">Simpan</x-button>
</div>

<div class="flex w-full items-center mt-4">
    <x-button size="sm" class="mr-3">Simpan</x-button>
    <x-button variant="danger" size="sm" class="mr-3">Hapus</x-button>
    <x-button variant="success" size="sm" class="mr-3">Simpan</x-button>
    <x-button variant="outline" class="mr-3" size="sm">Simpan</x-button>
</div>

<div class="flex w-full items-center">
    <span class="material-icons-outlined">account_circle</span>
    <span class="material-icons-outlined">map</span>
</div>

<div class="block">
    <p class="poppins-normal">Lorem Ipsum</p>
    <p class="poppins-medium">Lorem Ipsum</p>
    <p class="poppins-bold">Lorem Ipsum</p>
</div>

<div class="block mt-4 w-1/2">
    <div class="block mt-4">
        <x-date-picker.date-time-picker
            name="date_time_picker"
            label="Date Time Picker"
            type="text"
            icon="calendar_month"
            color="secondary" />
    </div>
</div>

<div class="block mt-4"></div>
<div class="block mt-4 w-1/2">
    <div class="block mt-4">
        <x-select2.select2-basic
            :dataOptions="$select2DataOptions"
            label="Pilih Warna"
            icon="calendar_month"
            data-option="{{ json_encode($select2AttributesOptions) }}"
            color="secondary" />
    </div>

    <div class="block mt-4">
        <x-select2.select2-notsearch
            :dataOptions="$itemPaketHarga"
            label="Pilih Paket"
            icon="directions_car"
            data-option="{{ json_encode($select2AttributesOptions) }}"
            color="secondary" />
    </div>

    <div class="block mt-4">
        <x-select2.select2-ajax
            label="Select2 ajax"
            icon="calendar_month"
            color="secondary"
            data-options="{{ json_encode($select2AjaxDataOptions) }}" />
    </div>
</div>

<div class="block mt-4 w-1/2">
    <div class="block mt-4">
        <x-typeahead.basic
            name="typeahead_basic"
            label="Typeahead basic"
            type="text"
            icon="location_citys"
            data-options="{{ json_encode($typeaheadBasicData) }}"
            color="secondary" />
    </div>

    <div class="block mt-4">
        <x-typeahead.ajax
            name="typeahead_ajax"
            label="Typeahead Ajax"
            type="text"
            icon="location_citys"
            data-options="{{ json_encode($typeaheadAjaxOptions) }}"
            color="secondary" />
    </div>
    <div class="block mt-4">
        <x-typeahead.prefetch
            name="typeahead_prefetch"
            label="Typeahead Prefetch"
            type="text"
            icon="location_citys"
            data-options="{{ json_encode($typeaheadPrefetchOptions) }}"
            color="secondary" />
    </div>
</div>

<div class="block mt-4 w-1/2">
    <div class="block mt-4">
        <x-textfield
            name="email"
            label="Alamat Email"
            type="email"
            icon="email"
            color="secondary" />
    </div>

    <div class="block mt-4">
        <x-textfield-multi-icon
            name="password"
            label="Password"
            type="password"
            iconPrepend="vpn_key"
            iconAppend="visibility"
            color="secondary" />
    </div>

    <div class="block mt-4">
        <x-textfield
            name="location_on"
            label="Location"
            icon="location_on"
            color="secondary" />
    </div>

    <div class="block mt-4">
        <x-textfield-number
            name="number"
            label="Number"
            icon="format_list_numbered_rtl"
            color="secondary" />
    </div>

    <div class="block mt-4">
        <x-textfield-currency
            name="currency"
            label="Currency"
            icon="money"
            color="secondary" />
    </div>

    <div class="block mt-4">
        <x-textfield-textarea
            name="textarea"
            label="Textarea"
            icon="description"
            color="secondary" />
    </div>


</div>
<div class="flex items-center mt-4">
    <x-checkbox-outline
        name="agree"
        label="Saya setuju"
        color="success"
        :checked="true" />
    <x-checkbox-outline
        name="dropoff"
        label="Dropoff"
        color="secondary" />
    <x-checkbox-outline
        name="layanan"
        label="Layanan"
        color="info" />
    <x-checkbox-outline
        name="lepas"
        label="Lepas Kunci"
        color="primary" />
</div>

<div class="flex items-center mt-4">
    <x-checkbox-switch
        name="option-tamu"
        label="Customer Tamu"
        color="primary" />
    <x-checkbox-switch
        name="all-data"
        label="Semua Data"
        color="secondary" />
    <x-checkbox-switch
        name="gender"
        label="Gender"
        color="info" />
</div>

<div class="radio-inline">
    <x-radio
        name="iditem_mobil"
        value="3"
        label="Mobil Dalam"
        :checked="true"
        toggle="collapse"
        target="#mobil--dalam" />
    <x-radio
        name="iditem_mobil"
        value="4"
        label="Mobil Luar"
        toggle="collapse"
        target="#mobil--luar" />
    <x-radio
        name="iditem_mobil"
        value="5"
        label="Mobil Rekanan"
        toggle="collapse"
        target="#mobil--rekanan" />
</div>


<div class="block w-1/2" style="height: 100px;"></div>

@push('scripts')
<!-- @vite('resources/js/route/tests/tests.js') -->
<script src="{{ asset('js/typeahead/typeahead-basic.js') }}"></script>
<script src="{{ asset('js/typeahead/typeahead-ajax.js') }}"></script>
<script src="{{ asset('js/typeahead/typeahead-prefetch.js') }}"></script>
<!-- Select2 Utils -->
<script src="{{ asset('js/select2/select2-basic.js') }}"></script>
<script src="{{ asset('js/select2/select2-ajax.js') }}"></script>
<script src="{{ asset('js/select2/select2-utils.js') }}"></script>
<script src="{{ asset('js/select2/select2-floating-label.js') }}"></script>
@endpush

@endsection
