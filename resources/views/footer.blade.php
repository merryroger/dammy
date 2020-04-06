<footer>
    <section class="footer">
        <section class="foot__pair ent__data">
            <nav class="footer">
                <div class="footer">
                    <h2>ТИПОГРАФИЯ</h2>
                </div>
            </nav>
            <nav class="footer">
                <nav class="foot__menu">
                    <a name="regime"></a>
                    <h6>Режимы работы</h6>
                    <dl>
                        <dd>Центральный офис: c&nbsp;8-00 до&nbsp;17-00.</dd>
                    </dl>
                    <dl>
                        <dd>Филиалы: c&nbsp;9-00 до&nbsp;18-00.</dd>
                    </dl>
                    <dl>
                        <dd>Выходные: cуббота, воскресенье.</dd>
                    </dl>
                </nav>
                <nav class="foot__menu">
                    <h6>Телефоны приемной</h6>
                    <dl>
                        <dd>+7 (3522) 255-540</dd>
                        <dd>+7 (3522) 255-545</dd>
                    </dl>
                </nav>
            </nav>
        </section>
        <section class="foot__pair navigation">
            <nav class="footer">
                @foreach($menu as $mgroupkey => $menugroup)
                    <nav class="foot__menu">
                        <h6>{{ @trans("menu.$mgroupkey") }}</h6>
                        @foreach($menugroup as $item)
                            @if(!strcmp($item['mnemo'], 'regime'))
                                @continue
                            @endif

                            <a href="{{ $item['url'] }}">{!! @trans("menu.$item[mnemo]") !!}</a>
                        @endforeach
                    </nav>
                @endforeach
            </nav>
            <nav class="footer">
                <nav class="foot__menu go__top">
                    <h6>↑&nbsp;<a href="#top">Наверх</a></h6>
                </nav>
            </nav>
        </section>
    </section>
</footer>