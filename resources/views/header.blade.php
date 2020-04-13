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
            <div class="header">
                <h2>ТИПОГРАФИЯ</h2>
            </div>
            <nav class="menu">
                @include('templates.menu.main.default')
            </nav>
        </article>
    </section>
</header>