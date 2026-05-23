@php
    $items = [
        ['label' => 'Pesanan', 'icon' => 'home', 'url' => null],
        ['label' => 'Cek Harga', 'icon' => 'taxi_alert', 'url' => null],
        ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => 'dashboard'],
        ['label' => 'Account', 'icon' => 'person_outline', 'url' => 'profile.index'],
        ['label' => 'Report', 'icon' => 'save_as', 'url' => null],
    ];
@endphp
<div
    class="footer-menu fixed overflow-x-auto scrollbar-hidden bottom-0 z-[1000] w-full bg-white shadow-md border-t-[1px] border-gray-200">
    <div class="flex items-center">
        @foreach ($items as $item)
            @php
                $url = $item['url'] ?? null;
                $label = $item['label'];
                $icon = $item['icon'];
                $active = $url == 'dashboard' ? ' text-yellow-400' : null;
            @endphp

            <div class="menu-item
        flex-[0_0_auto] flex flex-col justify-center items-center p-1 mr-3"
                @if ($url) onclick="location.href='{{ route($url) }}' @endif ">
            <span class="material-icons-outlined font-bold text-[28px] {{ $active }}">{{ $icon }}</span>
            <div class="menu-label font-bold text-sm {{ $active }}">{{ $label }}</div>
        </div>
 @endforeach
            </div>
    </div>
