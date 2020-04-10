@foreach($menu['main'] as $item)
    @if($item['section_id'] == $section_ids[$item['level']]['section_id'])
        <p>{{ @trans("menu.$item[mnemo]") }}</p>
    @elseif(count($menu_tree[$item['node']]) > 1 && $bush = $menu_tree[$item['node']][$item['level'] + 1])
        @include('templates.menu.main.sub_lvl_1', [
            'level' => $item['level'] + 1,
            'def_id' => isset($section_ids[$item['level'] + 1]) ? $section_ids[$item['level'] + 1]['id'] : -1
        ])
        <a href="{{ $item['url'] }}" onpointerover="return showsubmenu(this, $item['node'], {{ ($item['level'] + 1) }})">{{ @trans("menu.$item[mnemo]") }}</a>
    @else
        <a href="{{ $item['url'] }}">{{ @trans("menu.$item[mnemo]") }}</a>
    @endif
@endforeach
