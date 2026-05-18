{{-- Dashboard --}}
<x-app-layout>
    {{-- Page header --}}
    <x-slot name="header">
        <x-layouts.group-header backUrl="{{ url('/') }}" pageTitle="{{ __('Dashboard') }}" />
    </x-slot>

    {{-- Page content --}}
    <x-slot name="section">
        <x-layouts.section>
            <div class="grid grid-cols-2 gap-4">
                <x-dashboard.menu-dashboard label="{{ __('User') }}" description="{{ __('100 User') }}" icon="person_add" />
                <x-dashboard.menu-dashboard label="{{ __('Notifications') }}" description="{{ __('100 Notifications') }}" icon="notifications_active" />
                <x-dashboard.menu-dashboard label="{{ __('Mobil') }}" description="{{ __('100 Mobil') }}" icon="local_taxi" />
                <x-dashboard.menu-dashboard label="{{ __('Pengaturan') }}" description="{{ __('100 Pengaturan') }}" icon="settings" />
                <x-dashboard.menu-dashboard label="{{ __('Driver') }}" description="{{ __('100 Driver') }}" icon="group_add" />
                <x-dashboard.menu-dashboard label="{{ __('Telephone Masuk') }}" description="{{ __('100 Telephone Masuk') }}" icon="phone_callback" />
                <x-dashboard.menu-dashboard label="{{ __('Pengaturan') }}" description="{{ __('100 Pengaturan') }}" icon="favorite_border" />
                <x-dashboard.menu-dashboard label="{{ __('Language') }}" description="{{ __('100 Pengaturan') }}" icon="language" />
            </div>
        </x-layouts.section>

        <!--  -->
            <div class="max-w-2xl mx-auto mt-10 p-4">
                <h2 class="text-2xl font-bold mb-5 text-slate-800">Frequently Asked Questions</h2>

                <!-- Accordion 1 (Default Tertutup) -->
                <x-accordions.item id="faq-1" title="Bagaimana cara integrasi Alpine.js di Laravel?">
                    Anda bisa menginstalnya melalui npm dengan menjalankan <code
                        class="bg-slate-100 px-1 rounded">npm i alpinejs</code> dan menambahkannya di file <code
                        class="bg-slate-100 px-1 rounded">app.js</code>, atau menggunakan plugin resmi Laravel Breeze/Jetstream yang
                    sudah menyediakannya secara otomatis.
                </x-accordions.item>

                <!-- Accordion 2 (Default Terbuka) -->
                <x-accordions.item id="faq-2" title="Apakah x-collapse wajib digunakan?" :open="true">
                    Tidak wajib, tetapi sangat direkomendasikan. Tanpa <code class="bg-slate-100 px-1 rounded">x-collapse</code>,
                    konten akan muncul dan hilang secara instan (kaku). Dengan plugin ini, transisi akan terlihat jauh lebih halus
                    dan profesional.
                </x-accordions.item>

                <!-- Accordion 3 -->
                <x-accordions.item id="faq-3" title="Bagaimana jika saya ingin membuat tipe Accordion Group (Hanya 1 yang bisa terbuka)?">
                    Untuk tipe *group/accordion* mandiri di mana membuka satu item akan menutup item lainnya, kita perlu memindahkan
                    *state* <code class="bg-slate-100 px-1 rounded">active</code> ke *parent container* menggunakan Alpine.js store
                    atau mentransfer data antar komponen menggunakan event.
                </x-accordions.item>
            </div>        
        <!--  -->
        
        <!--  -->
            <div class="max-w-2xl mx-auto mt-10 p-4">
                <h2 class="text-2xl font-bold mb-5 text-slate-800">Exclusive Accordion Group</h2>
        
                <!-- Atur default ke 'faq-1' jika ingin item pertama langsung terbuka saat load -->
                <x-accordions.group default="faq-1">
                    <x-accordions.item-group id="faq-1" title="Membuka Item Ini Akan Menutup Yang Lain?">
                        Ya, benar. Karena state 'activeItem' sekarang dikendalikan oleh komponen pembungkusnya (accordion-group).
                    </x-accordions.item-group>
                    <x-accordions.item-group id="faq-2" title="Bagaimana cara kerjanya di Alpine.js?">
                        Alpine.js memanfaatkan konsep scope data bersarang. Komponen anak (accordions.item-group) bisa membaca dan memodifikasi
                        variabel 'activeItem' yang berada di komponen induknya (accordions.item-group-group) secara langsung.
                    </x-accordions.item-group>

                    <x-accordions.item-group id="faq-3" title="Apakah ini memerlukan ID yang unik?">
                        Sangat wajib. Properti <code class="bg-slate-100 px-1 rounded">id</code> digunakan sebagai penanda unik.
                        Jika ada dua item memiliki ID yang sama, keduanya akan terbuka bersamaan.
                    </x-accordions.item-group>                    
                </x-accordions.group>
            </div>
        <!--  -->
    </x-slot>


</x-app-layout>
