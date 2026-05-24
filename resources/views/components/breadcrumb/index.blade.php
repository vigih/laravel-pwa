@props(['items' => []])

<div {{ $attributes->merge(['class' => 'breadcrumbs']) }}>
    <ul class="flex items-center flex-wrap">
        @foreach ($items as $i => $item)
            @php
                $url = $item['url'] ?? null;
                $onclick = '';
                if ($url) {
                    if ($url === '/') {
                        $onclick = 'onclick=location.href="' . url('/') . '"';
                    } else {
                        $onclick = 'onclick=location.href="' . route($url) . '"';
                    }
                }
            @endphp
            @if (count($items) - 1 === $i)
                <li class="text-gray-900 font-medium">{{ $item['title'] }}</li>
            @else
                <li {{ $onclick }}
                    class="cursor-pointer text-base hover:text-blue-700 transition-colors duration-200 ease-in-out">
                    {{ $item['title'] }}
                </li>
                <x-ui.icon name="chevron_right" class="mx-1 text-gray-400" />
            @endif
        @endforeach
    </ul>
</div>
