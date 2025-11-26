@props(['items' => []])

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @foreach ($items as $item)
            @if (!empty($item['href']))
                <li class="breadcrumb-item">
                    <a href="{{ $item['href'] }}">{{ $item['text'] }}</a>
                </li>
            @else
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $item['text'] }}
                </li>
            @endif
        @endforeach
    </ol>
</nav>
