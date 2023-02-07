@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('about') }}"><span itemprop="name">Контейнеры</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<div class="containers-page">
    <div class="top">
        <h1>Блок-контейнеры для телекоммуникационного<br>оборудования типа «Север»</h1>
        <div class="white-blue">
            <div class="white">
                <p>Блок-контейнеры типа «Север»</p>
                <img src="{{ url('img/static/containers/pattern_top_left.png') }}">
            </div>
            <div class="blue">
                <p>по ГОСТ 22853-86 производства ООО «Уралэнерготел» позволяют разместить активное оборудование на объектах энергетики и промышленных предприятиях.</p>
                <img src="{{ url('img/static/containers/pattern_top_right.png') }}">
            </div>
            <img src="{{ url('img/static/containers/block_sever.png') }}">
        </div>
    </div>
    <div class="complection">
        <div class="left">
            <h2>Типовая комплектация блок-контейнера для оборудования «Север» производства ООО «Уралэнерготел»:</h2>
            <ul>
                <li>Каркас с утеплением и отделкой</li>
                <li>Система вентиляции и обогрева</li>
                <li>Охранно-пожарная сигнализация</li>
                <li>Рабочее и аварийное освещение</li>
                <li>Металлические двери с замками сейфового типа</li>
                <li>Датчики температуры, метеостанция</li>
                <li>Закладные технологических вводов</li>
            </ul>
        </div>
        <div class="right">
            <img src="{{ url('img/static/containers/container.jpg') }}">
        </div>
    </div>
    <div class="properties">
        <h2>Характеристики контейнеров «Север» от ООО «Уралэнерготел»</h2>
        <div class="block">
            <div class="text">
                <h3>«Северное исполнение»</h3>
                <p>пригоден для эксплуатации в любой<br>климатической зоне строительно-климатических<br>подрайонах (по СНиП 2.01.01-82*) IA, IБ, IГ, IД</p>
            </div>
            <div class="img-wrap">
                <img src="{{ url('img/static/containers/photo_character_1.jpg') }}">
            </div>
        </div>
        <div class="block">
            <div class="img-wrap">
                <img src="{{ url('img/static/containers/photo_character_2.jpg') }}">
            </div>
            <div class="text">
                <h3>Удобный размер для транспортировки</h3>
                <p>Д:4.7 м х В:2.8 м х Ш:2.7 м<br>масса не более 4 тонн<sup> </sup><br>площадь помещений 11м<sup>3</sup></p>
            </div>
        </div>
        <div class="tiles">
            <img src="{{ url('img/static/containers/pattern_table.png') }}">
            <h3>Полная инженерная подготовка всех систем «под ключ»<br>для установки оборудования</h3>
            <div class="tiles-wrap">
                <div class="tile">
                    <img src="{{ url('/img/static/containers/table-1.jpg') }}">
                    <div class="text">
                        <h4>Электроснабжение</h4>
                        <p>два ввода, 63 А, АВР и щит<br>распределения, розеточная сеть</p>
                    </div>
                </div>
                <div class="tile">
                    <img src="{{ url('/img/static/containers/ing.jpg') }}">
                    <div class="text">
                        <h4>Кабельные системы</h4>
                        <p>монтаж кабельных лотков<br>любой сложности</p>
                    </div>
                </div>
                <div class="tile">
                    <img src="{{ url('/img/static/containers/table-2.jpg') }}">
                    <div class="text">
                        <h4>Вентиляция</h4>
                        <p>естественная сплит система<br>охлаждения 2 кВт с резервированием<br>(опционально)</p>
                    </div>
                </div>
                <div class="tile">
                    <img src="{{ url('/img/static/containers/table-3.jpg') }}">
                    <div class="text">
                        <h4>Отопление</h4>
                        <p>электрическое отопление<br>с резервированием 2 кВт</p>
                    </div>
                </div>
                <div class="tile">
                    <img src="{{ url('/img/static/containers/table-4.jpg') }}">
                        <div class="text">
                            <h4>Индивидуальное исполнение</h4>
                            <p>покраска по заданию заказчика</p>
                        </div>
                </div>
                <div class="tile">
                    <img src="{{ url('/img/static/containers/table-5.jpg') }}">
                    <div class="text">
                        <h4>Охранно-пожарная сигнализация</h4>
                        <p>датчики дыма, датчики движения,<br>датчики взлома, светозвуковой<br>оповещатель пожарный</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="construction">
        <h2>Конструкция и состав оборудования контейнера<br>типа «Север» производства Уралэнерготел</h2>
        <div class="table-block">
            <h3>Состав контейнера</h3>
            <table class="bg-white">
                <tbody>
                    <tr>
                        <td>Помещения</td>
                        <td colspan="2">Аппаратная связи, тамбур, отсек внешних блоков кондиционеров</td>
                    </tr>
                    <tr>
                        <td>Несущий каркас</td>
                        <td colspan="2">Пространственная рама с односкатной крышей из холоднокатаного металлопроката. Обеспечивает высокую прочность, жесткость контейнера при транспортировке, погрузочных работах, эксплуатации совместно с оборудованием связи и вспомогательными системами</td>
                    </tr>
                    <tr>
                        <td>Обшивка стен внутренняя</td>
                        <td colspan="2">Стальной лист 1,0мм</td>
                    </tr>
                    <tr>
                        <td>Обшивка стен внешняя</td>
                        <td colspan="2">Профилированный окрашенный (белый) стальной лист профиль С10 толщиной 0,55мм</td>
                    </tr>
                    <tr>
                        <td>Обшивка кровли внутренняя</td>
                        <td colspan="2">Стальной лист 1,0мм</td>
                    </tr>
                    <tr>
                        <td>Обшивка кровли внешняя</td>
                        <td colspan="2">Профилированный окрашенный (синий) стальной лист профиль С10 толщиной 0,55мм</td>
                    </tr>
                    <tr>
                        <td>Обшивка днища</td>
                        <td colspan="2">Стальной лист 2,0мм</td>
                    </tr>
                    <tr>
                        <td>Утеплитель</td>
                        <td colspan="2">Негорючий минеральный утеплитель типа «ISOVER»</td>
                    </tr>
                    <tr>
                        <td>Пароизоляция, гидроизоляция</td>
                        <td colspan="2">Изоспан</td>
                    </tr>
                    <tr>
                        <td>Внутренние направляющие и закладные для отделочных материалов и навесных комплектующих</td>
                        <td colspan="2">Стальной оцинкованный профиль типа ПП, ПН, ПС</td>
                    </tr>
                    <tr>
                        <td>Внутренняя отделка аппаратного отсека</td>
                        <td colspan="2">Стекломагниевый лист, стеклообои, окраска водоэмульсионным составом белого цвета. </td>
                    </tr>
                    <tr>
                        <td>Пол аппаратного отсека</td>
                        <td colspan="2">Влагостойкая хвойная фанера толщиной 18мм обработанная огне био-защитным составом</td>
                    </tr>
                    <tr>
                        <td>Напольное покрытие аппаратного отсека</td>
                        <td colspan="2">Линолеум антистатический «Tarket»</td>
                    </tr>
                    <tr>
                        <td>Антикоррозийная защита</td>
                        <td colspan="2">алкидная эмаль «Локомотив» синего, белого и черного цвета</td>
                    </tr>
                    <tr>
                        <td rowspan="3">Закладные технологических вводов</td>
                        <td>Внешнего блока кондиционера</td>
                        <td>50x50 -2шт</td>
                    </tr>
                    <tr>
                        <td>Фидера электроснабжения</td>
                        <td>100х100-2шт</td>
                    </tr>
                    <tr>
                        <td>Кабеля связи и ВЧ –фидера</td>
                        <td>100x100 –5шт</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-block">
            <h3>Инженерные системы</h3>
            <table class="bg-yellow">
                <tbody>
                    <tr>
                        <td>Проводка</td>
                        <td>Открытого типа, в пластмассовых коробах типа «Элекор» </td>
                    </tr>
                    <tr>
                        <td>Освещение рабочее</td>
                        <td>Выполнено светодиодными светильниками. В аппаратном отсеке два, в тамбуре один</td>
                    </tr>
                    <tr>
                        <td>Аварийное освещение</td>
                        <td>Два плафона со встроенным АКБ</td>
                    </tr>
                    <tr>
                        <td>Розеточная часть</td>
                        <td>Для подключения приборов КИП, розетка открытой установки, двухместная - РС6-23-ЗГБ и РС6-20-3-ГБ</td>
                    </tr>
                    <tr>
                        <td>Щит электрораспределительный</td>
                        <td>Вводно-распределительный щит 63А на 2 ввода</td>
                    </tr>
                    <tr>
                        <td>Охранно-пожарная сигнализация</td>
                        <td>Выполнено на базе ППКОП «Гранит-5» с АКБ 7 А/ч.<br>В составе пожарного шлейфа:<br>оптические дымовые извещатели ИП212-45 «Марко» -4 шт, извещатель пожарный ручной ИПР-513-10 -1шт. <br>В составе охранного шлейфа:<br>датчик магнитоконтактный ИО-Ю2-2б-1шт, извещатель оптико-электронный ИО-409 «Фотон-9».</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-block">
            <h3>Дополнительные опции</h3>
            <table class="bg-blue">
                <tbody>
                    <tr>
                        <td>Отопление (в базовую стоимость не входит, модель по выбору заказчика)</td>
                        <td>Типовой обогреватель конвекторного типа мощностью 2,0 кВт BALLU BEC/HMM 2000 с термостатом для автоматического поддержания температуры.</td>
                    </tr>
                    <tr>
                        <td>Кондиционирование (в базовую стоимость не входит, модель по выбору заказчика)</td>
                        <td>Типовая сплит-система в составе: внутренний блок кондиционера FTXS20K, наружный блок кондиционера RXS20L3/-30, адаптер для пульта управления KRP980B1, адаптер KRP413A1S </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="buy">
        <h2>Купить блок-контейнеры «Север»</h2>
        <div class="text-wrap">
            <p>В торговом доме УЭТ вы можете купить типовые блок-контейнеры типа «Север», которые подходят для размещения на территории электростанций, и других промышленных предприятий.</p>
            <p>Типовые размеры контейнеров по ширине и высоте позволяют легко установить внутрь стандартные 19-дюймовые шкафы высотой 42U, укомплектованные оборудованием связи, телемеханики и управления, а также осуществлять их обслуживание.</p>
            <p>Также мы можем изготовить блок-контейнеры другой длины, а также любого цвета RAL, с нанесением на стенки логотипов, подходящие для размещения ДГУ, и других возможностей для эксплуатации.</p>
        </div>
        <img src="{{ url('/img/static/containers/down.png') }}">
    </div>
    <div class="prices-block">
        <div class="yellow-brick"></div>
        <h2>Размеры и цены на блок-контейнеры «Север»</h2>
        <table class="prices">
            <thead>
                <tr>
                    <th colspan="3">Снаружи, максимальные</th>
                    <th rowspan="2">Цена с НДС</th>
                </tr>
                <tr>
                    <th>Длинна, мм</th>
                    <th>Ширина, мм</th>
                    <th>Высота, мм</th>
                </tr>
                <tr>
                    <th colspan="4">Изготовление блок-контейнера по размеру заказчика</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>4700</td>
                    <td>2700</td>
                    <td>2800</td>
                    <td>по запросу</td>
                </tr>
                <tr>
                    <td>5300</td>
                    <td>2700</td>
                    <td>2800</td>
                    <td>по запросу</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="producing">
        <div class="svg-wrap"><img src="{{ url('/img/static/delivery/geo.svg') }}"></div>
        <div class="text-wrap">
            <p>Производство блок-контейнеров находится в центре<br>г. Екатеринбурга, по адресу ул. Малышева, 164 лит. О</p>
            <p>Мы доставляем блок-контейнеры по России, а также в страны ТС (Казахстан, Беларусь, Киргизия, Армения)<br>стоимость доставки рассчитывается дополнительно.</p>
        </div>
    </div>
    <div class="advantages">
        <h2>Преимущества</h2>
        <div class="tiles">
            <div class="tile">
                <div class="img-wrap">
                    <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}"
                        data-src="{{ url('/img/static/supply/icon3.svg') }}" alt="icon">
                </div>
                <span>Высокое качество контейнера и инженерных систем</span>
            </div>
            <div class="tile">
                <div class="img-wrap">
                    <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}"
                        data-src="{{ url('/img/static/supply/icon4.svg') }}" alt="icon">
                </div>
                <span>Быстрая сборка</span>
            </div>
            <div class="tile">
                <div class="img-wrap">
                    <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}"
                        data-src="{{ url('/img/static/supply/icon5.svg') }}" alt="icon">
                </div>
                <span>Возможность нанесения логотипов на стены контейнера</span>
            </div>
            <div class="tile">
                <div class="img-wrap">
                    <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}"
                        data-src="{{ url('/img/static/supply/icon6.svg') }}" alt="icon">
                </div>
                <span>Поставки по России</span>
            </div>
        </div>
    </div>
    {{-- <div class="ind-clients">
        <div class="title-clients">Наши клиенты</div>
        <div class="img-clients">
            <img src="{{ url('/img/static/ind_lockers/logo/1.png') }}" alt="Системный оператор Единой энергетической системы">
            <img src="{{ url('/img/static/ind_lockers/logo/2.png') }}" alt="Тюмень Энерго">
            <img src="{{ url('/img/static/ind_lockers/logo/3.png') }}" alt="Краснодарнефтегаз">
            <img src="{{ url('/img/static/ind_lockers/logo/4.png') }}" alt="МРСК Сибири">
            <img src="{{ url('/img/static/ind_lockers/logo/5.png') }}" alt="Сетевая компания ">
            <img src="{{ url('/img/static/ind_lockers/logo/6.png') }}" alt="МРСК Урала">
            <img src="{{ url('/img/static/ind_lockers/logo/7.png') }}" alt="ФСК ЕЭС">
            <img src="{{ url('/img/static/ind_lockers/logo/8.png') }}" alt="ГК-1">
            <img src="{{ url('/img/static/ind_lockers/logo/9.png') }}" alt="ОГК-2">
            <img src="{{ url('/img/static/ind_lockers/logo/10.png') }}" alt="Электрогенерация Интер РАО ">
            <img src="{{ url('/img/static/ind_lockers/logo/11.png') }}" alt="РусГидро">
            <img src="{{ url('/img/static/ind_lockers/logo/12.png') }}" alt="УГМК">
        </div>
    </div> --}}
    <div class="order">
        <div class="block">
            <h2>Заказать контейнеры «Север»<br>в ТД УЭТ</h2>
            <span>По поставкам оборудования свяжитесь<br>с нашими менеджерами по телефону</span>
            <span><a href="tel:+73432281862">+7 (343) 228-18-62</a></span>
            <span>или оставьте заявку по e-maill: <b><a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a></b></span>
        </div>
    </div>
</div>
@endsection
