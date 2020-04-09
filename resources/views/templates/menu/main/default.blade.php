@foreach($menu['main'] as $item)
    @if($item['section_id'] == $section_ids[0]['section_id'])
        <p>{{ @trans("menu.$item[mnemo]") }}</p>
    @else
        <a href="{{ $item['url'] }}">{{ @trans("menu.$item[mnemo]") }}</a>
    @endif
@endforeach
