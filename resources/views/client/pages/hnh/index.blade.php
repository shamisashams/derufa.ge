@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.hnh_meta')</title>
    <meta name="description"
          content="@lang('client.hnh_meta_description')">
@endsection

@section('wrapper')
    <section class="hnh_section hnh_wrapper ">
        <div class="section flex center">
            <div class="text">
                <p>Представляем Вам серию дизайнерских красок H&H (Historie & Harmonie) - это новый эксклюзивный материал, который отметят и искушенный дизайнер,и профессиональный строитель.</p>
                <p>Краски имеют уникальные свойства:</p>
                <p>- особый <strong>светорассеивающий эффект</strong>  (благодаря своеобразному компоненту Diatom, структура которого подобна кристаллу, окрашенные поверхности обретают потрясающую глубину и насыщенность цвета)
                </p>
                <p>- волшебную <strong>метамерию</strong> , что дает широкое поле для экспериментов со светом
                </p>
                <p>- краски H&H - <strong>живые краски</strong>  (в основе концепции лежит неоднородность всего природного и сочетание глянцевости и матовости)</p>
            </div>
            <img src="img/hnh/1.webp" alt="">
        </div>
        <div class="section">
            <div class="head">Преимущества Красок H&H</div>
            <div class="grid">
                <div class="grid_item">
                    <span>1</span>
                    <div class="title">Эксплуатационные свойства</div>
                    <p>В краске важен не только цвет, но и ее долговечность. Поэтому краски H&H экстремально устойчивы к мытью, истиранию - это позволяет поверхности оставаться в первоначальном состоянии в течении долгих лет.</p>
                </div>
                <div class="grid_item">
                    <span>2</span>
                    <div class="title">Экологичность</div>
                    <p>Единственная краска в России получившая экологический сертификат на соответствие требованиям BREEAM. Это позволяет включать ее в дизайнерские проекты "Зеленый Дом" и использовать в детских и медицинских учреждениях</p>
                </div>
                <div class="grid_item">
                    <span>3</span>
                    <div class="title">Технологичность</div>
                    <p>Собственная уникальная колеровочная система и производственная база с лабораторией позволяет воплощать в своей продукции самые передовые технологические и дизайнерские решения. Программа ColorSystem позволяет задавать нужную метамерию и делать подбор цвета с высочайшей точностью.</p>
                </div>
                <div class="grid_item">
                    <span>4</span>
                    <div class="title">Новая цветовая коммуникация</div>
                    <p>Получить реальный образец краски в нужном оттенке теперь можно без проблем с нашей компанией. Мы внедрили новую уникальную технологию по подбору цвета с ваших цифровых носителей (фотографии, картинки), она позволяет воспроизвести с максимальной точностью ваш любимый цвет.</p>
                </div>
                <div class="grid_item">
                    <span>5</span>
                    <div class="title">Профессиональное сопровождение</div>
                    <p>На точке продаж серии H&H вы получите профессиональную консультацию по созданию правильного гармоничного цветового решения вашего пространства.</p>
                </div>
                <div class="grid_item">
                    <span>6</span>
                    <div class="title">Дизайнерская цветовая коллекция</div>
                    <p>Собственная уникальная колеровочная система и производственная база с лабораторией позволяет воплощать в своей продукции самые передовые технологические и дизайнерские решения. Программа ColorSystem позволяет задавать нужную метамерию и делать подбор цвета с высочайшей точностью.</p>
                </div>
            </div>
        </div>
        <div>
            <div class="head">Материалы Серии H&H</div>
            <div class="grid grid_seri">
                <div class="grid_item open_hnh_popup">
                    <div class="img">
                        <img src="img/hnh/2.webp" alt="">
                    </div>
                    <div class="title">H&H SATIN SM</div>
                    <p>Шелковисто-матовая краска для стен, подходит для любых поверхностей в доме с очень высокой эксплуатацией.</p>
                    <p>от 2580р.</p>
                    <button class="view">подробнее</button>
                </div>
                <div class="grid_item open_hnh_popup">
                    <div class="img">
                        <img src="img/hnh/3.webp" alt="">
                    </div>
                    <div class="title">H&H SATIN SM</div>
                    <p>Шелковисто-матовая краска для стен, подходит для любых поверхностей в доме с очень высокой эксплуатацией.</p>
                    <p>от 2580р.</p>
                    <button class="view">подробнее</button>
                </div>
                <div class="grid_item open_hnh_popup">
                    <div class="img">
                        <img src="img/hnh/2.webp" alt="">
                    </div>
                    <div class="title">H&H SATIN SM</div>
                    <p>Шелковисто-матовая краска для стен, подходит для любых поверхностей в доме с очень высокой эксплуатацией.</p>
                    <p>от 2580р.</p>
                    <button class="view">подробнее</button>
                </div>
                <div class="grid_item open_hnh_popup">
                    <div class="img">
                        <img src="img/hnh/3.webp" alt="">
                    </div>
                    <div class="title">H&H SATIN SM</div>
                    <p>Шелковисто-матовая краска для стен, подходит для любых поверхностей в доме с очень высокой эксплуатацией.</p>
                    <p>от 2580р.</p>
                    <button class="view">подробнее</button>
                </div>
                <div class="grid_item open_hnh_popup">
                    <div class="img">
                        <img src="img/hnh/4.webp" alt="">
                    </div>
                    <div class="title">H&H SATIN SM</div>
                    <p>Шелковисто-матовая краска для стен, подходит для любых поверхностей в доме с очень высокой эксплуатацией.</p>
                    <p>от 2580р.</p>
                    <button class="view">подробнее</button>
                </div>
                <div class="grid_item open_hnh_popup">
                    <div class="img">
                        <img src="img/hnh/5.webp" alt="">
                    </div>
                    <div class="title">H&H SATIN SM</div>
                    <p>Шелковисто-матовая краска для стен, подходит для любых поверхностей в доме с очень высокой эксплуатацией.</p>
                    <p>от 2580р.</p>
                    <button class="view">подробнее</button>
                </div>
            </div>
        </div>
    </section>

    <div id="hnh_popup">
        <div id="close_hnh_popup"><svg xmlns="http://www.w3.org/2000/svg" width="20.953" height="20.953" viewBox="0 0 20.953 20.953">
                <path id="Icon_ionic-md-close" data-name="Icon ionic-md-close" d="M28.477,9.619l-2.1-2.1L18,15.9,9.619,7.523l-2.1,2.1L15.9,18,7.523,26.381l2.1,2.1L18,20.1l8.381,8.381,2.1-2.1L20.1,18Z" transform="translate(-7.523 -7.523)"/>
            </svg>
        </div>
        <div class="content flex center">
            <div class="img">
                <img src="img/hnh/2.webp" alt="">
            </div>
            <div class="details">
                <div class="title">H&H SATIN SM</div>
                <p>2580р.</p>
                <p>Объем</p>
                <select name="hnh" id="">
                    <option value="">0.9 L (5-6 кв.м в два  слоя)</option>
                    <option value="">1.2 L (5-6 кв.м в два  слоя)</option>
                    <option value="">1.3 L (5-6 кв.м в два  слоя)</option>
                </select>
                <p>Шелковисто-матовая краска, подходит для любых поверхностей в доме с высокой эксплуатацией. Долговечна, допускает мытье и уборку любыми химическими средствами кроме абразивных. Особо экологична и экстремально устойчива. Возможно использование в ванных комнатах, кухнях, детских и медицинских учреждениях. Идеальна для безвоздушного нанесения. Проста в работе при нанесении валиком.</p>
            </div>
        </div>
    </div>
@endsection