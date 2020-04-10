<header>
    <nav class="services">
        <section>
            @foreach($menu['other'] as $item)
                @switch($item['mnemo'])
                    @case('news')
                        <span class="news__counter inv">0</span>
                    @default
                    <a href="{{ $item['url'] }}">{{ @trans("menu.$item[mnemo]") }}</a>
                @endswitch
            @endforeach
        </section>
        <section>
            <form id="search">
                <input type="text" id="search__text" name="search__text" value="" tabindex="1"/>
                <button type="button" tabindex="2">Найти</button>
            </form>
        </section>
    </nav>
    <section class="site__header">
        <article>
            <div class="header">
                <h2>ТИПОГРАФИЯ</h2>
            </div>
            <nav class="menu">
                @foreach($menu['main'] as $item)
                    @if(count($menu_tree[$item['node']]) > 1 && $bush = $menu_tree[$item['node']][$item['level'] + 1])
                        @include('templates.menu.main.sub_lvl_1', [
                            'level' => $item['level'] + 1,
                            'def_id' => isset($section_ids[$item['level'] + 1]) ? $section_ids[$item['level'] + 1]['id'] : -1
                        ])
                        <a href="{{ $item['url'] }}" onpointerover="return showsubmenu(this, $item['node'], {{ ($item['level'] + 1) }})">{{ @trans("menu.$item[mnemo]") }}</a>
                    @else
                        <a href="{{ $item['url'] }}">{{ @trans("menu.$item[mnemo]") }}</a>
                    @endif
                @endforeach
            </nav>
        </article>
    </section>
</header>