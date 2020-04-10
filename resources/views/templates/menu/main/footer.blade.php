@foreach($menu as $mgroupkey => $menugroup)
    <nav class="foot__menu">
        <h6>{{ @trans("menu.$mgroupkey") }}</h6>
        @foreach($menugroup as $item)
            @if(!strcmp($item['mnemo'], 'regime'))
                @continue
            @endif

            @if($item['section_id'] == $section_ids[count($section_ids) - 1]['section_id'])
                <dl>
                    <dt>{!! @trans("menu.$item[mnemo]") !!}</dt>
                </dl>
            @elseif($item['section_id'] == $section_ids[0]['section_id'])
                <dl>
                    <dt>✓&nbsp;<a href="{{ $item['url'] }}">{{ @trans("menu.$item[mnemo]") }}</a></dt>
                </dl>
            @else
                <a href="{{ $item['url'] }}">{!! @trans("menu.$item[mnemo]") !!}</a>
            @endif
        @endforeach
    </nav>
@endforeach
