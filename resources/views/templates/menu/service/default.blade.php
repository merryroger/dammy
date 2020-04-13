@foreach($menu['other'] as $item)
    @switch($item['mnemo'])
        @case('news')
        <span class="news__counter inv">0</span>
        @default
            @if($item['section_id'] == $section_ids[0]['section_id'])
                <p>{{ @trans("menu.$item[mnemo]") }}</p>
            @else
                <a href="{{ $item['url'] }}">{{ @trans("menu.$item[mnemo]") }}</a>
            @endif
    @endswitch
@endforeach
