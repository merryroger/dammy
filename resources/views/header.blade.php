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
                    <a href="{{ $item['url'] }}">{{ @trans("menu.$item[mnemo]") }}</a>
                @endforeach
            </nav>
        </article>
    </section>
</header>