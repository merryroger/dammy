@foreach($menu['main'] as $item)
    @if($item['section_id'] == $section_ids[count($section_ids) - 1]['section_id'])
        <p>{{ @trans("menu.$item[mnemo]") }}</p>
    @elseif(count($menu_tree[$item['node']]) > 1 && $bush = $menu_tree[$item['node']][$item['level'] + 1])
        @include('templates.menu.main.sub_lvl_' . ($item['level'] + 1), [
            'level' => $item['level'] + 1,
            'def_id' => isset($section_ids[$item['level'] + 1]) ? $section_ids[$item['level'] + 1]['id'] : -1
        ])

        @if($item['section_id'] == $section_ids[0]['section_id'])
            <a href="{{ $item['url'] }}" class="grey__link"
               onpointerover="return showsubmenu(this, {{ $item['node'] }}, {{ $item['level'] }}, {{ $item['mode'] }}, {{ $item['parent'] }})">{{ @trans("menu.$item[mnemo]") }}</a>
        @else
            <a href="{{ $item['url'] }}"
               onpointerover="return showsubmenu(this, $item['node'], {{ ($item['level'] + 1) }})">{{ @trans("menu.$item[mnemo]") }}</a>
        @endif

    @else
        <a href="{{ $item['url'] }}">{{ @trans("menu.$item[mnemo]") }}</a>
    @endif
@endforeach
