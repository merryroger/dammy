@if(count($bush) > 0)
    <div id="n{{ $item['node'] }}l{{ $level }}" class="submenu__lvl_{{ $level }} off" data-section="{{ $def_id }}">
    @foreach($bush as $subitem)
        @if($_item_ = $menu[$subitem[$item['id']]['purpose']][$subitem[$item['id']]['id']])
            <a href="{{ $_item_['url'] }}">{{ @trans("menu.$_item_[mnemo]") }}</a>
         @endif
    @endforeach
    </div>
@endif
