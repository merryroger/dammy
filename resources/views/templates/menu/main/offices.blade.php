@foreach($menu['main'] as $item)
    @if($item['section_id'] == $section_ids[count($section_ids) - 1]['section_id'])
        <p>{{ @trans("menu.$item[mnemo]") }}</p>
    @elseif($item['section_id'] == $section_ids[0]['section_id'])
        <a href="{{ $item['url'] }}" class="grey__link">{{ @trans("menu.$item[mnemo]") }}</a>
    @else
        <a href="{{ $item['url'] }}">{{ @trans("menu.$item[mnemo]") }}</a>
    @endif
@endforeach
