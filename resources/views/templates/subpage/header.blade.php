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
            <a href="/" class="go__home" title="На главную страницу">
                <div class="header">
                    <h2>ТИПОГРАФИЯ</h2>
                </div>
            </a>
            <nav class="menu">
                @switch(Route::currentRouteName())
                    @case('guest.lvl2.offices')
                        @include('templates.menu.main.offices')
                    @break
                    @default
                        @include('templates.menu.main.default')
                @endswitch
            </nav>
        </article>
    </section>
</header>