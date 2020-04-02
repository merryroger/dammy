<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Типография «ДАММИ»</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/favicon.ico" rel="shortcut icon">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <style>@include('styles/fonts')@include('styles/media/default')@include('styles/default')</style>
</head>
<body>
    <a name="top"></a>
    <main>
        @include('header')

        @yield($template)

        <!-- Dynamic page building to be added -->

        <section class="body announce">
            <article>
                <h1>Весь спектр полиграфической продукции в&nbsp;Кургане</h1>
                <nav>
					<span>
						<a href="/printing">Печать</a>
						<div class="blk">
							<p>Цифровая</p>
							<p>Офсетная</p>
							<p>Инженерно-техническая</p>
							<p>Тиражирование</p>
							<p>Постпечатная обработка</p>
						</div>
					</span>
                    <span>
						<a href="/advert_making">Производство рекламы</a>
						<div class="blk">
							<p>Наружная реклама</p>
							<p>Широкоформатная печать</p>
							<p>Интерьерная печать</p>
							<p>Ультрафиолетовая печать</p>
							<p>Постпечатная обработка</p>
						</div>
					</span>
                    <span>
						<a href="/book_printing">Изготовление книг</a>
					</span>
                    <span>
						<a href="/souvenirs">Сувенирная продукция</a>
						<div class="blk">
							<p>Для бизнеса</p>
							<p>Промо-сувениры</p>
						</div>
            		</span>
                </nav>
            </article>
        </section>

        <section class="body orders">
            <h1>Сделайте заказ</h1>
            <section class="columns">
                <article class="one__of">
                    <p>В&nbsp;типографии «ДАММИ» вы&nbsp;можете сделать заказ любым удобным способом.</p>
                    <p>Заказы принимаются в&nbsp;<a href="/offices#central">Центральном офисе</a> и&nbsp;четырёх <a href="/offices#other">филиалах</a>, расположенных в&nbsp;разных частях города.</p>
                    <p>Дизайнеры типографии помогут вам разработать макет. Но&nbsp;если он у&nbsp;вас уже есть, вы можете принести его на&nbsp;флэшке, диске или лучше всего переслать по&nbsp;электронной почте на&nbsp;адрес выбранного вами филиала. Главное&nbsp;— чтобы макет соответствовал определенным <a href="/requirements">требованиям</a>.</p>
                </article>
                <article class="one__of">
                    <p>Кроме того, заказ можно сделать прямо на&nbsp;сайте в&nbsp;соответствующем <a href="/make_order">разделе</a>.</p>
                </article>
            </section>
        </section>

        <section class="body about">
            <a name="about"></a>
            <h1>О компании</h1>
            <section class="columns">
                <article class="one__of">
                    <p>Типография «ДАММИ» ведет свою историю с&nbsp;30&nbsp;января 1993&nbsp;года. Становление предприятия проходило в&nbsp;сложных экономических условиях. Однако за&nbsp;это время его удалось сделать не&nbsp;только успешным, а&nbsp;вывести на&nbsp;лидирующие позиции в&nbsp;регионе.</p>
                    <p>Сегодня «ДАММИ» работает по&nbsp;нескольким направлениям, предоставляя широкий спектр услуг&nbsp;&#151; изготовление бланочной, журнальной, сувенирной продукции, наружной и&nbsp;интерьерной рекламы, ксерокопирование, ламинирование, изготовление и&nbsp;издательство книг. Будучи оснащенной по&nbsp;последнему слову техники, компания гарантирует заказчику высокое качество изготовляемой продукции, а&nbsp;также оперативность, что играет большую роль в&nbsp;нашем вечно &laquo;бегущем&raquo; ритме жизни.</p>
                </article>
                <article class="one__of">
                    <p>Без совершенствования производственно-технической базы и&nbsp;расширения производственных мощностей конкурировать на&nbsp;рынке печатных технологий достаточно трудно. Поэтому развитие предприятия не&nbsp;прекращается ни&nbsp;на&nbsp;день&nbsp;— приобретается современное дорогостоящее <a href="/equipment">оборудование</a>, применяются новые технологии, отвечающие запросам даже самых требовательных и&nbsp;взыскательных заказчиков.</p>
                    <p>«Не&nbsp;останавливаться на&nbsp;достигнутом!»&nbsp;— вот принцип, по которому работает «ДАММИ» уже более двух десятков лет. Он не&nbsp;давал сбоев, и&nbsp;позволяет предприятию продвигаться вперед и&nbsp;в&nbsp;дальнейшем, обеспечивая своих клиентов продукцией современных технологий в&nbsp;области полиграфии и&nbsp;визуальных коммуникаций.</p>
                </article>
            </section>
        </section>

        <!-- Dynamic page building to be added -->

        @include('footer')
    </main>
</body>
</html>
