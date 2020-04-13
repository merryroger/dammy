<header>
    <nav class="services">
        <section>
            @include('templates.menu.service.default')
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
                        @include('templates.menu.main.subpages')
                @endswitch
            </nav>
        </article>
    </section>
</header>