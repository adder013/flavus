<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Овен',
                'url' => 'owen',
                'image' => '/storage/uploads/brands/owen.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'Компания ОВЕН – ведущий российский разработчик и производитель контрольно-измерительных приборов и средств автоматизации для различных отраслей промышленности.',
                'header' => 'Овен',
                'body' => '<p>Компания ОВЕН – ведущий российский разработчик и производитель контрольно-измерительных приборов и средств автоматизации для различных отраслей промышленности.  </p>
<p>Компания работает с 1991 года. За 25 лет тысячи предприятий автоматизировали свои технологические процессы, используя компоненты автоматики ОВЕН. Продукция ОВЕН применяется в машиностроении и металлургии, химических и нефтехимических производствах, строительной и деревообрабатывающей отраслях, пищевой и упаковочной промышленностях, медицине, энергетике, ЖКХ, сельском хозяйстве и других сферах.  </p>
<p><strong>Компания Уралэнерготел является официальным дилером производителя Овен. На всю продукцию производства компании Овен распространяются специальные цены (МРЦ -3%), а также бесплатная доставка по всей территории России.</strong></p>
<p>В интернет-магазине Уралэнерготел вы можете купить <a href="https://uralenergotel.ru/category/automation/" target="_blank">оборудование автоматизации</a> Овен:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/automation/kip/" target="_blank">контрольно-измерительные приборы</a>:</li>
<ul>
<li><a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/" target="_blank">измерители, измерители-регуляторы, реле-регуляторы, ПИД-регуляторы, ON/OFF-регуляторы</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/temperature_controllers/" target="_blank">температурные контроллеры</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/control/" target="_blank">контроллеры для систем HVAC: отопления, горячего водоснабжения (ГВС), вентиляции</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/counters/" target="_blank">счётчики, тахометры, таймеры</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/pump_control/" target="_blank">приборы для управления насосами и сигнализаторы уровней</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/normiruyuschie_preobrazovateli/" target="_blank">приборы для работы с полевыми сигналами</li>
<li><a href="https://uralenergotel.ru/category/automation/kip/valve_control/" target="_blank">приборы для индикации и управления задвижками</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/manual_signal_adjustment/" target="_blank">ручные задатчики сигналов</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/electric/" target="_blank">измерители параметров электрической сети</a></li>
</ul>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/" target="_blank">программируемые устройства</a>:</li>
<ul>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/relays/" target="_blank">программируемые реле</a></li>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/plc/" target="_blank">программируемые логические контроллеры (ПЛК)</a></li>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/spc/" target="_blank">сенсорные панельные контроллеры</a></li>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/input_output/" target="_blank">модули ввода/вывода</a></li>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/operator_panel/" target="_blank">панели оператора</a></li>
</ul>
<li><a href="https://uralenergotel.ru/category/automation/sensors/" target="_blank">датчики</a>:</li>
<ul>
<li><a href="https://uralenergotel.ru/category/automation/sensors/temperature/" target="_blank">Датчики температуры</a></li>
<li><a href="https://uralenergotel.ru/category/automation/sensors/temperature_humidity/" target="_blank">Датчики влажности и температуры воздуха</a></li>
<li><a href="https://uralenergotel.ru/category/automation/sensors/pressure/" target="_blank">Преобразователи давления</a></li>
<li><a href="https://uralenergotel.ru/category/automation/sensors/level/" target="_blank">Датчики уровня</a></li>
<li><a href="https://uralenergotel.ru/category/automation/sensors/gas/" target="_blank">Сигнализаторы загазованности</a></li>
</ul>
<li><a href="https://uralenergotel.ru/category/frequency_converter/" target="_blank">приводную технику</a>:</li>
<ul>
<li><a href="https://uralenergotel.ru/category/frequency_converter/preobrazovatel_chastoty/" target="_blank">преобразователи частоты</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/accessories_pchv/" target="_blank">аксессуары для преобразователей частоты</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/soft_starters/" target="_blank">устройства плавного пуска</a></li>
<li>сетевые и моторные дроссели</li>
<li>тормозные резисторы</li>
</ul>
<li>коммутационные устройства:</li>
<ul>
<li>блоки питания</li>
<li>твердотельные реле</li>
<li>промежуточное реле</li>
<li>силовые реле</li>
<li>блоки управления и коммутации</li>
<li>устройства контроля и защиты</li>
<li>регулирующую арматуру</li>
</ul>
<li>программное обеспечение и устройства связи:</li>
<ul>
<li>SCADA-системы</li>
<li>OPC-серверы</li>
<li>конфигураторы</li>
<li>сетевые шлюзы</li>
<li>преобразователи интерфейсов и повторители</li>
<li>модемы</li>
</ul>
</ul>',
                'sort_position' => 1,
                'metaTitle' => 'Овен оборудование для автоматизации',
                'metaDescription' => 'Овен оборудование для автоматизации',
                'created_at' => '2018-08-13 23:11:56',
                'updated_at' => '2019-07-22 09:55:22',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Алгоритм',
                'url' => 'algoritm',
                'image' => '/storage/uploads/brands/алгоритм.png',
                'active' => 1,
                'filter' => 1,
                'info' => 'ЗАО «Алгоритм» - производитель счётчиков Binom3, инженерная компания, основанная в 2011 году. Уралэнерготел имеет статус партнёра ЗАО «Алгоритм».',
                'header' => 'Многофункциональные счётчики-измерители Бином3',
                'body' => '<h2>ЗАО «Алгоритм»</h2>
<p><strong>ЗАО «Алгоритм» - производитель счётчиков Binom3</strong>, инженерная компания, основанная в 2011 году, для разработки и продвижения новых технических решений по автоматизации объектов электроэнергетики, нефтегазового комплекса, энергохозяйств промышленных предприятий, железнодорожного и электрического транспорта. Главными продуктами компании являются комплексные решения, объединяющие в себе оборудование и программное обеспечение, предназначенные для решения задач оперативно-технологического управления, коммерческого и технического учета электроэнергии, мониторинга и контроля качества электроэнергии, регистрации аварийных событий, осциллографирования переходных процессов- многофункциональные счётчики Binom3.
</p>
<p>&nbsp;</p>
<p><strong>Уралэнерготел является партнёром компании ЗАО «Алгоритм»</strong>
</p>
<p>&nbsp;</p>
<p>В интернет-магазине Уралэнерготел вы можете <a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/binom3/" target="_blank">купить многофункциональные многотарифные счётчики - измерители показателей качества электроэнергии Бином 3</a> производства компании ЗАО «Алгоритм»</p>',
                'sort_position' => 1,
                'metaTitle' => 'продукцию ЗАО «Алгоритм»',
                'metaDescription' => 'счётчики Binom3',
                'created_at' => '2018-08-16 22:03:14',
                'updated_at' => '2019-07-19 10:57:23',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Уралэнерготел',
                'url' => 'uralenergotel',
                'image' => '/storage/uploads/brands/уралэнерготел_желтый2.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'Компания ООО "Уралэнерготел" с 2007 года предоставляет полный комплекс услуг по созданию высокотехнологичных систем, включающий в себя разработку проектной и рабочей документации, монтаж, пусконаладку, техобслуживание и производство оборудования.',
                'header' => 'Продукция компании Уралэнерготел',
                'body' => '<h2>Уралэнерготел</h2>
<p>ООО "Уралэнерготел" - российская инженерная компания с обширной географией работ по всей стране, которая с 2007 года предоставляет полный комплекс услуг по созданию высокотехнологичных систем связи, телемеханики и АСКУЭ, мониторинга, 

безопасности и оповещения и других, от проекта до пусконаладки и технического обслуживания. Среди клиентов крупные предприятия сферы энергетики и промышленности: МРСК Урала, ОДУ Урала, РусГидро,  УГМК и многие другие.</p>
<p>&nbsp;</p>
<p>Также компания занимается разработкой и производством собственной продукции, которую реализует через свой собственный сервис поставок - в интернет-магазине Уралэнерготел.</p>
<p>&nbsp;</p>
<p>В интернет-магазине Уралэнерготел можно купить продукцию собственного производства:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/" target="_blank">Подстанционные шкафы - низковольтные комплектные устройства</a>:
<ul>
<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-runn/" target="_blank">Шкафы распределительного устройства низкого напряжения РУНН</a></li>
<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-obogreva-vyklyuchatelei-shov/" target="_blank">Шкафы обогрева выключателей ШОВ</a></li>
<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-zazhimov-vyklyuchatelya_shzv/" target="_blank">Шкафы зажимов выключателя ШЗВ</a></li>
<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/klemmnye-yashchiki-zazhimov_yaz/" target="_blank">Ящики зажимов (клеммные шкафы) ЯЗ</a></li>
<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-zazhimov-tn_shn/">Шкафы зажимов трансформаторов напряжения (ТН) ШЗН</a></li>
<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-zazhimov-shin_shzsh">Шкафы зажимов шин ШЗШ</a></li>
<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-ip-videonablyudeniya/" target="_blank">Шкафы видеонаблюдения</a></li>
<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-raspredelitelnye-shrn/" target="_blank">Шкафы кроссовые телефонные ШРН</a></li>
</ul></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/termoshkafy/" target="_blank">Термошкафы для оборудования, укомплектованные цифровым, либо биметаллическим термостатом</a></li>
<li>Оборудование 19\'\':
<ul>
<li><a href="https://uralenergotel.ru/category/electric/avr/" target="_blank">Модульные блоки АВР 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/accessories/thermostat/" target="_blank">Цифровые термостаты 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/accessories/heating/" target="_blank">Обогреватели 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/accessories19/U-Energy-BOX/" target="_blank">Сборная монтоажная панель U-Energy Box под направляющие 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/accessories/distribution-panel/" target="_blank">Распределительные панели 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/accessories/shelves/" target="_blank">Полки 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/accessories/cases/" target="_blank">Ящики 19\'\'</a></li>
</ul></li></ul>
<p>Также вы можете заказать <a href="https://uralenergotel.ru/shkafy-individualnoi-sborki/" target="_blank">сборку шкафов под свой проект по собственной спецификации</a>.</p>',
                'sort_position' => 1,
                'metaTitle' => 'оборудование ООО Уралэнерготел',
                'metaDescription' => 'продукцию Уралэнерготел, оборудование',
                'created_at' => '2018-08-20 18:13:13',
                'updated_at' => '2019-07-19 11:15:33',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Lande',
                'url' => 'lande',
                'image' => '/storage/uploads/brands/lande.png',
                'active' => 1,
                'filter' => 1,
                'info' => '​LANDE A.S. - это хорошо известный в Турции производитель высокотехнологичных серверных и телекоммуникационных шкафов 19\'\' и аксессуаров. Комания Уралэнерготел является официальным дилером Lande на территории Российской Федерации.',
                'header' => 'Шкафы 19\'\' компании Lande',
                'body' => '<h2>Lande</h2>
<p><strong><a href="https://lande19.ru/" target="_blank">LANDE A.S.</a></strong> - это 

хорошо известный в Турции производитель высокотехнологичных серверных шкафов и 

аксессуаров. Компания в нынешнем своем виде была создана в 2012 году командой 

профессионалов и лидеров, обладающей более чем 20 летним опытом работы на рынке серверной 

техники с целью представить на рынок максимально современную, инновационную, эргономичную 

и функциональную продукцию в доступном ценовом сегменте. Это компания, которая предлагает 

высококачественные профессиональные решения на рынке IT технологий, такие как 19" 

серверные шкафы и аксессуары, шкафы для сетевого оборудования, серверные шкафы и стойки 

для Дата Центров.
</p>
<p>Созданное по последнему слову техники, обладающее новейшим оборудованием и большими 

мощностями, опытным руководящим и обслуживающим персоналом, наше производство было 

развернуто в 2012 году на площади 8 500 кв. метров в специальной индустриальной зоне 

Эскишехир. Система контроля качества (ERP) внедрена в каждом производственном процессе. 

Продукция и обслуживание LANDE сертифицированы по стандарту Quality Assurance System TS EN 

ISO 9001. Наши мощности позволяют производить до 2 000 единиц продукции ежедневно.
</p>
<h2>Lande в России = Уралэнерготел</h2>
<p>Уралэнерготел является официальным представителем <a href="https://lande19.ru/" 

target="_blank">компании Lande</a> в России. В интернет-магазине Уралэнреготел вы можете 

купить продукцию 19\'\' Lande:
</p>
<ul>
<li><a href="https://uralenergotel.ru/category/cabinets19/" 

target="_blank">телекоммуникационные, сетевые, серверные и электротехнические напольные 

шкафы с направляющими 19\'\' и монтажной панелью</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/wall_mounting/" 

target="_blank">настенные телекоммуникационные шкафы 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/accessories/">и 

аксессуары к ним</a></li>
</ul>
<p>серий
</p>
<ul>
<li>SOUNDproof</a>
<li>IP 55 Industrial</li>
<li>Dynamic Basic и Dynamic Basic Server</li>
<li>DYNAmax</li>
<li>PROline</li>
<li>NetBOX</li>
<li>Just1Minute</li>
<li>ECOframe</li>
</ul>
<p>	и других.
</p>',
                'sort_position' => 1,
                'metaTitle' => 'продукцию компании Lande',
                'metaDescription' => 'продукцию компании Lande',
                'created_at' => '2018-08-20 18:14:38',
                'updated_at' => '2019-07-22 10:05:16',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ЦМО',
                'url' => 'cmo',
                'image' => '/storage/uploads/brands/цмо.png',
                'active' => 1,
                'filter' => 1,
                'info' => 'Производственная компания ЦМО - один из лидеров в СНГ по производству монтажных шкафов и стоек, телекоммуникационных и серверных шкафов.',
                'header' => 'Шкафы, стойки и кронштейны 19\'\' от производителя ЦМО',
                'body' => '<h2>ЦМО</h2>
<p>Производственная компания ЦМО основана в 2001 году как профильное предприятие по 

обработке листового металла. Комплекс постоянно развивается и сегодня общая площадь 

производства составляет более 5000 квадратных метров. В 2007 году построен новый 

производственный комплекс, объединяющий весь технологический цикл от входа металла до 

выхода готовой продукции. Используя собственный опыт и сложившуюся мировую практику, 

компания построила структуру нового производственного комплекса по принципу оптимизации 

технологических процессов и контроля качества выпускаемой продукции.
</p>
<p>Система менеджмента качества компании сертифицирована по стандарту ISO 9001:2008.
</p>
<p>На сегодняшний день ЦМО — это 20% российского рынка монтажных шкафов и стоек, 

стабильный поставщик конструктивов в страны СНГ.
</p>
<p>В интернет-магазине Уралэнреготел вы можете <a 

href="https://uralenergotel.ru/category/cabinets19/" target="_blank">купить продукцию 19\'\' 

ЦМО</a>:
</p>
<ul>
<li><a href="https://uralenergotel.ru/category/cabinets19/freestanding/" 

target="_blank">телекоммуникационные, сетевые, серверные напольные шкафы 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/wall_mounting/" 

target="_blank">настенные шкафы 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/outdoor/" 

target="_blank">всепогодные уличные шкафы 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/termoshkafy/" 

target="_blank">термошкафы 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/racks/" 

target="_blank">стойки 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/brackets/" 

target="_blank">кронштейны 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/accessories/" 

target="_blank">и аксессуары к ним</a>: <a 

href="https://uralenergotel.ru/category/cabinets19/accessories/cases/" 

target="_blank">ящики 19\'\'</a>, <a 

href="https://uralenergotel.ru/category/cabinets19/accessories/shelves/" 

target="_blank">полки 19\'\'</a>, <a 

href="https://uralenergotel.ru/category/cabinets19/accessories/ventilation/" 

target="_blank">вентиляторные модули 19\'\'</a></li>
</ul>
<p>серий
</p>
<ul>
<li>ШТК-М (универсальные)</li>
<li>ШТК-С (серверные)</li>
<li>ШТК-С Проф (серверные)</li>
<li>ШРН (сварные)</li>
<li>ШРН-Э (разборные)</li>
<li>ШРН-М (рамные разборные)</li>
<li>ШРН-А (антивандальные)</li>
<li>ШТВ-Н (уличные всепогодные настенные)</li>
<li>ШТВ-1 (уличные всепогодные напольные)</li>
<li>СТК (универсальные)</li>
<li>СТК-2 (двухрамные универсальные)</li>
<li>СТК-С (двухрамные универсальные)</li>
<li>КНО-В (вертикальные)</li>
<li>КНО-М (с регулируемой глубиной)</li>
</ul>
<p>	и других.
</p>',
                'sort_position' => 1,
                'metaTitle' => 'шкафы 19\'\' ЦМО',
                'metaDescription' => 'шкафы 19\'\' дюймов телекоммуникационные и серверные',
                'created_at' => '2018-08-20 18:17:34',
                'updated_at' => '2019-07-22 10:13:00',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Энергосервис',
                'url' => 'energoservis',
                'image' => '/storage/uploads/brands/энергосервис.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'ООО «Инженерный центр «Энергосервис» - разработчик программно-аппаратных комплексов для построения АСДУ, АСУ ТП и АИИС КУЭ. В интернет-магазине Уралэнерготел представлены измерительные преобразователи ЭНИП-2 и модули индикации ЭНМИ.',
                'header' => 'Измерительные преобразователи ЭНИП-2 и модули индикации ЭНМИ от ИЦ Энергосервис',
                'body' => '<h1>ООО «Инженерный центр „Энергосервис“»</h1>
<p><strong>Уралэнерготел является партнёром компании ООО «Инженерный центр „Энергосервис“»</strong></p>
<p>Одним из основных направлений деятельности компании ООО «Инженерный центр „Энергосервис“» является разработка и внедрение программно-аппаратных комплексов 

для построения автоматизированных систем управления (АСДУ и АСУ ТП) и автоматизированных информационно-измерительных систем коммерческого учета электроэнергии 

(АИИС КУЭ). В 1999 году она начала производство микропроцессорных устройств.</p>
<p>В 2008 году был разработан и запущен в серийное производство многофункциональный измерительный преобразователь ЭНИП-2. К началу 2015 года произведено и 

установлено на объектах электроэнергетики более 20 000 приборов.</p>
<p>В интернет-магазине Уралэнерготел вы можете купить:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/enip2/" target="_blank">широкий ряд модификаций 

преобразователя ЭНИП-2, ЭНИП-2 PMU (УСВИ)</a>,
<li><a href="https://uralenergotel.ru/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/" target="_blank">преобразователи-счётчики 

ESM</a>,</li>
<li><a href="https://uralenergotel.ru/category/telemechanics/input_output_modules/" target="_blank">устройства ввода и вывода ЭНМВ-1, ЭНМВ-1W, ЭНМВ-2 и ЭНМВ-

3</a>,</li>
<li><a href="https://uralenergotel.ru/category/telemechanics/rtu/">устройства сбора данных ЭНКМ-3 и ЭНКС-3м</a>,</li>
<li><a href="https://uralenergotel.ru/category/telemechanics/time_sync/" target="_blank">блоки коррекции времени ЭНКС-2</a>,</li>
<li><a href="https://uralenergotel.ru/category/Elektroizmeritelnye-pribory/Tsifrovye-indikatory/" target="_blank">цифровые модули индикации ЭНМИ</a>,</li>
<li>а также <a href="https://uralenergotel.ru/category/accessories-metering/">аксессуары для систем измерения и учёта</a>: <a 

href="https://uralenergotel.ru/category/accessories-metering/antennas_sensors/">антенны и датчики</a> и <a 

href="https://uralenergotel.ru/category/accessories-metering/voltage_dividers/">делители напряжения</a>.
</li>
</ul>',
                'sort_position' => 1,
                'metaTitle' => 'продукцию Энергосервис, измерительные преобразователи ЭНИП-2',
                'metaDescription' => 'оборудование Энергосервис, электроизмерительные приборы ЭНИП-2',
                'created_at' => '2018-08-20 18:21:23',
                'updated_at' => '2019-04-04 04:32:02',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Satec - ПЛЦ АС',
                'url' => 'satec_plc_as',
                'image' => '/storage/uploads/brands/satec.png',
                'active' => 1,
                'filter' => 1,
                'info' => 'Компания ПЛЦ АС - официальный представитель израильской компании SATEC Ltd в России. Уралэнерготел является официальным партнёром ООО «ПЛЦ АС».',
                'header' => 'Приборы Satec производства «ПЛЦ АС»',
                'body' => '<h2>Satec / «ПЛЦ АС»</h2>
<p>Компания ПЛЦ АС (ООО «Производственно-логистический центр автоматизированных систем») - официальный представитель израильской компании SATEC Ltd в России. Компания существует с 2007 года и занимается производством <a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/satec/" target="_blank">многофункциональных электроизмерительных приборов</a> в Вологде и имеет офис в Москве. ПЛЦ АС производит приборы для измерения, мониторинга, контроля, учёта и анализа качества электроэнергии и на выгодных и удобных для заказчика условиях поставляет приборы производства Satec (производство Израиль).</p>
<p>В интернет-магазине Уралэнерготел вы можете купить приборы производства «ПЛЦ АС» по лицензии Satec:</p>
<ul>
<li><a href="https://uralenergotel.ru/satec-pm130p/" target="_blank">Satec PM130P модульный прибор телемеханики</a></li>
<li><a href="https://uralenergotel.ru/satec-pm130e/" target="_blank">Satec PM130E модульный прибор телемеханики</a></li>
<li><a href="https://uralenergotel.ru/satec-pm130eh/" target="_blank">Satec PM130EH модульный прибор телемеханики</a></li>
<li><a href="https://uralenergotel.ru/satec-pm135eh/" target="_blank">Satec PM135EH модульный прибор телемеханики</a></li>
<li><a href="https://uralenergotel.ru/satec-bfm-2/" target="_blank">Satec BFM-II многоканальный счётчик и контроллер</a></li>
<li><a href="https://uralenergotel.ru/satec-em132/" target="_blank">Satec EM132 многофункциональный счётчик электроэнергии</a></li>
<li><a href="https://uralenergotel.ru/satec-em133/" target="_blank">Satec EM133 и EM133-AR многофункциональные счётчики электроэнергии</a></li>
</ul>
<p>а также производства компании Satec:
</p>
<ul>
<li><a href="https://uralenergotel.ru/satec-rpm172e/" target="_blank">Satec RPM072E многофункциональный прибор измерения</a></li>
<li><a href="https://uralenergotel.ru/satec-pm172E-n/" target="_blank">Satec PM172E-N многофункциональный прибор измерения</a></li>
<li><a href="https://uralenergotel.ru/satec-pm172eh-n/" target="_blank">Satec PM172EH-N многофункциональный прибор измерения</a></li>
<li><a href="https://uralenergotel.ru/satec-pm175/" target="_blank">Satec PM175 анализатор качества электроэнергии</a></li>
<li><a href="https://uralenergotel.ru/satec-rpm175/" target="_blank">Satec RPM075 анализатор качества электроэнергии</a></li>
<li><a href="https://uralenergotel.ru/satec-pm175-tft/" target="_blank">Satec PM175-TFT анализатор качества электроэнергии</a></li>
<li><a href="https://uralenergotel.ru/satec-pm180/" target="_blank">Satec PM180 контроллер присоединения</a></li>
</ul>
<p>и дополнительное оборудование:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/tsifrovye-indikatory/" target="_blank">дисплеи</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/transformers/" target="_blank">трансформаторы HACS</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/communication_modules/" target="_blank">коммуникационные модули для измерительных приборов</a></li>
</ul>',
                'sort_position' => 1,
                'metaTitle' => 'продукцию Satec / «ПЛЦ АС»',
                'metaDescription' => 'оборудование Satec / «ПЛЦ АС»',
                'created_at' => '2018-08-22 23:22:49',
                'updated_at' => '2019-07-22 10:31:26',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'К-С',
                'url' => 'k-s',
                'image' => '/storage/uploads/brands/КС.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'ООО «Комплект-Сервис» - российский производитель электроизмерительных приборов и сопутствующих товаров. Уралэнерготел является партнёром компании ООО «К-С».',
            'header' => 'ООО «Комплект-Сервис» (ООО «К-С»)',
                'body' => '<h2>ООО «К-С»</h2>
<p><strong>Уралэнерготел является партнёром компании ООО "Комплект-Сервис"</strong><br>
</p>
<p>ООО «Комплект-Сервис» (ООО «К-С») - российский производитель <a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/" target="_blank">электроизмерительных приборов</a> и сопутствующих товаров, на рынке с 2005 года.
</p>
<p>Продукцию компании используют на предприятиях в таких сферы деятельности, как электроэнергетика, химическая, металлургическая, нефтегазовая промышленность, машиностроение, агромпромышленный комплекс и многие другие, а в число клиентов входят такие организации, как ОАО «ФСК ЕЭС», ОАО «Российские сети», ОАО «РЖД», ОАО «Газпром», ОАО «Северсталь», ООО «ЛУКОЙЛ-ЭНЕРГОСЕТИ», ООО «АББ», ОАО «Московский Завод «Электрощит» и ГУП «Московский метрополитен».
</p>
<p><strong>Основные направления деятельности:</strong><br>
</p>
<ul>
<li>Проектирование, разработка и сборка современных приборов, электротехнической продукции собственной торговой марки КС.</li>
<li>Оптовая и розничная поставка электротехнической продукции: электроизмерительных приборов, КИПиА, высоковольтного и низковольтного оборудования.</li>
<li>Внешнеэкономическая деятельность (импорт/экспорт оборудования).</li>
<li>Сервисное сопровождение.</li>
</ul>
<p>В интернет-магазине Уралэнерготел вы можете <a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/" target="_blank">купить цифровые электроизмерительные приборы производства ООО «К-С»</a>:
</p>
<ul>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/" target="_blank">многофункциональные измерительные приборы и преобразователи</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/" target="_blank">амперметры, вольтметры, ампервольтметры</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/" target="_blank">ваттметры и варметры</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/frequency_phase/" target="_blank">частотомеры</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/tsifrovye-indikatory/" target="_blank">модули индикации (цифровые индикаторы)</a></li>
<li>логометры и указатели положения РПН силовых трансформаторов</li>
</ul>
<p>а также модули телемеханики и телесигнализации, импульсные блоки питания, высотомеры, мегаомметры, конденсаторные модули низкого напряжения, модульные системы многоточечного мониторинга электроэнергии</p>',
                'sort_position' => 1,
                'metaTitle' => 'продукцию ООО Комплект-Сервис',
                'metaDescription' => 'электроизмерительные приборы ООО Комплект-Сервис',
                'created_at' => '2018-08-27 17:48:57',
                'updated_at' => '2019-07-22 10:46:38',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'Электроприбор',
                'url' => 'electropribor',
                'image' => '/storage/uploads/brands/electropribor.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'ОАО «Электроприбор» г. Чебоксары является отечественным производителем электроизмерительных приборов, измерительных преобразователей, а также приборов для контроля показателей качества электрической энергии.',
                'header' => 'Стрелочные и цифровые электроизмерительные приборы ОАО «Электроприбор»',
                'body' => '<h2>ОАО «Электроприбор»</h2>
<p><strong>Уралэнерготел является дилером ОАО "Электроприбор"</strong>
</p>
<p>ОАО «Электроприбор» (г. Чебоксары) - отечественный разработчик и производитель широкого ассортимента щитовых электроизмерительных приборов,  измерительных преобразователей, цифровых многофункциональных приборов, а также приборов для контроля показателей качества электрической энергии с функциями технического и коммерческого учета.</p>
<p>Основные направления деятельности завода: Контрольно-измерительные приборы и средства автоматизации.</p>
<p><br>
</p>
<p>В интернет-магазине Уралэнерготел вы можете <a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/" target="_blank">купить электроизмерительные приборы производства Электроприбор</a>:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/" target="_blank">многофункциональные приборы и преобразователи ЩМ, ЩМК и Е</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/" target="_blank">амперметры, вольтметры, вольтамперметры стрелочные и цифровые, а также преобразователи тока, напряжения и частоты</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/pointing/" target="_blank">стрелочные и цифровые ваттметры, варметры, преобразователи активной и реактивной мощности</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/frequency_phase/" target="_blank">частотометры, фазометры и измерители коэффициента мощности</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/logometry/" target="_blank">логометры, указатели положения РПН</a>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/tsifrovye-indikatory/" target="_blank">модули индикации и табло</a></li>
</ul>
<p><a href="https://uralenergotel.ru/category/telemechanics/" target="_blank">оборудование телемеханики</a></p>
<ul>
<li><a href="https://uralenergotel.ru/category/telemechanics/input_output_modules/" target="_blank">модули дискретного ввода и вывода</a></li>
<li><a href="https://uralenergotel.ru/category/telemechanics/controllers/" target="_blank">контроллеры телемеханики</a></li>
</ul>
<p>а также преобразователи USB/RS-485, переносные приборы качества электроэнергии, приборы контроля качества электроэнергии</p>',
                'sort_position' => 1,
                'metaTitle' => 'продукцию ОАО Электроприбор',
                'metaDescription' => 'оборудование ОАО Электроприбор',
                'created_at' => '2018-08-27 17:50:44',
                'updated_at' => '2019-07-22 11:11:29',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'ННПО им. Фрунзе',
                'url' => 'nnpo-frunze',
                'image' => '/storage/uploads/brands/HЗИФ.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'АО «ННПО им. М.В. Фрунзе» - известный на российском рынке бренд электротехнического оборудования. В интернет-магазине Уралэнерготел представлены счётчики электроэнергии производства Нижегородского научно-производственного объединения имени М. В. Фрунзе.',
                'header' => 'Счётчики производства АО «Нижегородское НПО им. М.В. Фрунзе»',
                'body' => '<h2>АО «Нижегородское научно-производственное объединение имени М. В. Фрунзе» - АО "КРЭТ"</h2>
<p>ННПО имени М.В. Фрунзе - это известный бренд на рынке электротехнического оборудования, который занимается разработкой, производством и внедрением АИИС КУЭ на базе комплекса технических средств «Микрон», широкого спектра однофазных и трехфазных счетчиков электрической энергии, в том числе многофункциональных,  автоматизированных установок для поверки счетчиков электроэнергии, коммуникаторов GSM, модемов PLC, Ethernet, RF и другого периферийного оборудования. Входит в АО «Концерн «Радиоэлектронные технологии».</p>
<p>Современные разработки ННПО имени М.В. Фрунзе отвечают высоким требованиям, соответствующим мировому уровню развития. Сертификация системы менеджмента качества предприятия подтверждена сертификатом Системы сертификации «Военный регистр» о соответствии стандартам ГОСТ Р ISO 9001-2011 и ГОСТ РВ 0015-002-2012.<br>
</p>
<p>В интернет-магазине Уралэнерготел вы можете <a href="https://uralenergotel.ru/category/schetchiki-energy/" target="_blank">купить счетчики электроэнергии</a> АО «Нижегородское НПО им. М.В. Фрунзе»:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/odnofaznie/" target="_blank">однофазные</a></li>
<ul>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/odnofaznie/odnotarifnie/" target="_blank">однофазные однотарифные</a></li>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/odnofaznie/mnogotarifnie/" target="_blank">однофазные многотарифные</a></li>
</ul>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/trehfaznie/" target="_blank">трёхфазные</a></li>
<ul>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/trehfaznie/odnotarifnie/" target="_blank">трёхфазные однотарифные</a></li>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/trehfaznie/mnogotarifnie/" target="_blank">трёхфазные многотарифные</a></li>
</ul>
</ul>
<p>серий:</p>
<ul>
<li>ПСЧ</li>
<li>СЭО</li>
<li>СЭБ</li>
<li>СЭТ</li>
<li>МАЯК</li>
</ul>',
                'sort_position' => 1,
                'metaTitle' => 'счётчики ННПО им. Фрунзе',
                'metaDescription' => 'счётчики электричества АО «ННПО им. М.В. Фрунзе»',
                'created_at' => '2018-08-27 17:52:13',
                'updated_at' => '2019-07-22 11:32:07',
            ),
            10 => 
            array (
                'id' => 13,
                'name' => 'УЗНТех',
                'url' => 'uznteh',
                'image' => '/storage/uploads/brands/uznteh.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'специализируется на разработке и изготовлении оборудования присоединения аппаратуры защит, противоаварийной автоматики и телефонной связи к фазе либо грозотросам воздушных линий электропередачи.',
                'header' => 'ООО «Уральский Завод Новых Технологий»',
                'body' => '<p>ООО «УЗНТех» специализируется на разработке и изготовлении оборудования присоединения аппаратуры защит, противоаварийной 

автоматики и телефонной связи к фазе либо грозотросам воздушных линий электропередачи.
</p>
<p> На всех этапах производства используются современные технологии и новейшее оборудование, что обеспечивает высокое качество 

выпускаемой продукции и позволяет минимизировать время на изготовление изделий. Многолетний опыт разработчиков и конструкторов 

позволяет подобрать оптимальное решение для задач любого уровня сложности.
</p>
<p>  Производство оборудования присоединения осуществляется на основании ГОСТ, отраслевых стандартов и рекомендаций МЭК, что 

подтверждено соответствующими сертификатами.  Служба контроля качества выпускаемой продукции проверяет все конструкции на точность 

и соответствие конструкторской документации, диагностирует работоспособность каждого комплектующего узла. Гарантия на все 

оборудование составляет не менее 5 лет.
</p>
<p>Компания Уралэнерготел является официальным дилером продукции ООО "УЗНТех". В интернет-магазине можно купить:
</p>
<ul>
<li><a href="https://uralenergotel.ru/category/high_frequency/" target="_blank">Оборудование ВЧ-связи</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/line_trap/" target="_blank">Высокочастотные заградители (ВЗ)

</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/fp/" target="_blank">Фильтры присоединения</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/separatingfilter/" target="_blank">Разделительные 

фильтры</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/shon/" target="_blank">Шкафы отбора напряжений (ШОН)</a></li>
</ul>',
                'sort_position' => 1,
                'metaTitle' => 'оборудование ВЧ-связи ООО УЗНТех',
                'metaDescription' => 'оборудование ВЧ-связи ООО Уральский Завод Новых Технологий',
                'created_at' => '2018-08-27 17:54:36',
                'updated_at' => '2018-12-20 08:44:26',
            ),
            11 => 
            array (
                'id' => 14,
                'name' => 'Радиус Автоматика',
                'url' => 'rza',
                'image' => '/storage/uploads/brands/radius_avtomatika.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'ЗАО «РАДИУС Автоматика» - это российское предприятие, реализующее полный цикл работ от научных изысканий до серийного производства всего комплекса оборудования релейной защиты и автоматики, а также средств испытания и диагностики.',
                'header' => 'ЗАО "Радиус Автоматика"',
                'body' => '<h2>Радиус Автоматика</h2>
<p>ЗАО «РАДИУС Автоматика» - это российское научно производственное предприятие, реализующее полный цикл работ от научных изысканий до серийного производства всего комплекса оборудования релейной защиты и автоматики для сетей от 0,4кВ до 220кВ, а также средств испытания и диагностики оборудования и линий электропередачи.</p>
<p>В интернет-магазине Уралэнерготел вы можете купить весь ассортимент оборудования компании Радиус Автоматика</a>:</p>
<p><strong><a href="https://uralenergotel.ru/category/rza/power_transformers/" target="_blank">Защита и автоматика силовых трансформаторов</a></strong></p>
<ul>
<li><a href="https://uralenergotel.ru/sirius-t-bpt/" target="_blank">Сириус-Т-БПТ</a></li>
<li><a href="https://uralenergotel.ru/sirius-aart" target="_blank">Сириус-ААРТ</a></li>
<li><a href="https://uralenergotel.ru/sirius-t" target="_blank">Сириус-Т</a></li>
<li><a href="https://uralenergotel.ru/sirius-t3/" target="_blank">Сириус-Т3</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-rn/" target="_blank">Сириус-2-РН</a></li>
</ul>
<p><strong><a href="https://uralenergotel.ru/category/rza/bus_protection/" target="_blank">Защиты шин и ошиновок</a></strong></p>
<ul>
<li><a href="https://uralenergotel.ru/sirius-2-dzm/" target="_blank">Сириус-2-ДЗМ</a></li>
<li><a href="https://uralenergotel.ru/sirius-3-dzo-01/" target="_blank">Сириус-3-ДЗО-01</a></li>
<li><a href="https://uralenergotel.ru/sirius-3-dzo-02/" target="_blank">Сириус-3-ДЗО-02</a></li>
<li><a href="https://uralenergotel.ru/sirius-3-dzsh-01/" target="_blank">Сириус-3-ДЗШ-01</a></li>
<li><a href="https://uralenergotel.ru/sirius-3-dzsh-02/" target="_blank">Сириус-3-ДЗШ-02</a></li>
<li><a href="https://uralenergotel.ru/sirius-3-dzsh-03/" target="_blank">Сириус-3-ДЗШ-03</a></li>
</ul>
<p><strong><a href="https://uralenergotel.ru/category/rza/110kv_220kv_line_protection/" target="_blank">Основные защиты линий 110-220 кВ</a></strong></p>
<ul>
<li><a href="https://uralenergotel.ru/sirius-2-dzl-01/" target="_blank">Сириус-2-ДЗЛ-01</a></li>
<li><a href="https://uralenergotel.ru/sirius-3-vch-01/" target="_blank">Сириус-3-ВЧ-01</a></li>
<li><a href="https://uralenergotel.ru/sirius-3-vch-02/" target="_blank">Сириус-3-ВЧ-02</a></li>
<li><a href="https://uralenergotel.ru/sirius-3-dfz-01/" target="_blank">Сириус-3-ДФЗ-01</a></li>
<li><a href="https://uralenergotel.ru/sirius-3-dfz-02/" target="_blank">Сириус-3-ДФЗ-02</a></li>
</ul>
<p><strong><a href="https://uralenergotel.ru/category/rza/backup_protection_and_control_110_220_kv/" target="_blank">Резервные защиты и АУВ присоединений 110-220 кВ</a></strong></p>
<ul>
<li><a href="https://uralenergotel.ru/sirius-3-uv/" target="_blank">Сириус-3-УВ</a></li>
<li><a href="https://uralenergotel.ru/sirius-uv/" target="_blank">Сириус-УВ</a></li>
<li><a href="https://uralenergotel.ru/sirius-uv-bpt/" target="_blank">Сириус-УВ-БПТ</a></li>
<li><a href="https://uralenergotel.ru/sirius-3-sv/" target="_blank">Сириус-3-СВ</a></li>
<li><a href="https://uralenergotel.ru/sirius-3-lv-03" target="_blank">Сириус-3-ЛВ-03</a></li>
<li><a href="https://uralenergotel.ru/sirius-3-lv-02/" target="_blank">Сириус-3-ЛВ-02</a></li>
<li><a href="https://uralenergotel.ru/sirius-3-lv-04/" target="_blank">Сириус-3-ЛВ-04</a></li>
</ul>
<p><strong><a href="https://uralenergotel.ru/category/rza/protection_inductive_vt_110_500_kv/" target="_blank">Защита индуктивных ТН 110-500 кВ</a></strong></p>
<ul>
<li><a href="https://uralenergotel.ru/sirius-2-tn-d/" target="_blank">Сириус-2-ТН-Д</a></li>
</ul>
<p><strong><a href="https://uralenergotel.ru/category/rza/operation_block/" target="_blank">Оперативная блокировка</a></strong></p>
<ul>
<li><a href="https://uralenergotel.ru/sirius-2-ob-i1/" target="_blank">Сириус-2-ОБ</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-ubr/" target="_blank">Сириус-2-УБР</a></li>
</ul>
<p><strong><a href="https://uralenergotel.ru/category/rza/connections_6_35kv/" target="_blank">Защита и автоматика присоединений 6-35 кВ</a></strong></p>
<ul>
<li><a href="https://uralenergotel.ru/sirius-avr/" target="_blank">Сириус-АВР</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-l" target="_blank">Сириус-2-Л</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-bpt/" target="_blank">Сириус-2-Л-БПТ</a></li>
<li><a href="https://uralenergotel.ru/sirius-21-l/" target="_blank">Сириус-21-Л</a></li>
<li><a href="https://uralenergotel.ru/sirius-21-l-k/" target="_blank">Сириус-2-Л-К</a></li>
<li><a href="https://uralenergotel.ru/sirius-21-tn-k" target="_blank">Сириус-2-ТН-К</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-ml/" target="_blank">Сириус-2-МЛ</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-ml-bpt/" target="_blank">Сириус-2-МЛ-БПТ</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-v/" target="_blank">Сириус-2-В</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-v-bpt/" target="_blank">Сириус-2-В-БПТ</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-vb/" target="_blank">Сириус-2-ВБ</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-s/" target="_blank">Сириус-2-С</a></li>
<li><a href="https://uralenergotel.ru/sirius-21-s/" target="_blank">Сириус-21-С</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-s-bpt/" target="_blank">Сириус-2-С-БПТ</a></li>
<li><a href="https://uralenergotel.ru/sirius-d" target="_blank">Сириус-Д</a></li>
<li><a href="https://uralenergotel.ru/sirius-21-d/" target="_blank">Сириус-21-Д</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-dm/" target="_blank">Сириус-2-ДМ</a></li>
<li><a href="https://uralenergotel.ru/sirius-dz-35/" target="_blank">Сириус-ДЗ-35</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-bsk/" target="_blank">Сириус-2-БСК</a></li>
<li><a href="https://uralenergotel.ru/sirius-tn/" target="_blank">Сириус-ТН</a></li>
<li><a href="https://uralenergotel.ru/sirius-ozz/" target="_blank">Сириус-ОЗЗ</a></li>
<li><a href="https://uralenergotel.ru/orion-rtz/" target="_blank">Орион-РТЗ</a></li>
</ul>
<p><strong><a href="https://uralenergotel.ru/category/rza/emergency_automatics/" target="_blank">Противоаварийная автоматика</a></strong></p>
<ul>
<li><a href="https://uralenergotel.ru/sirius-2-rchn" target="_blank">Сириус-2-РЧН</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-achr" target="_blank">Сириус-2-АЧР</a></li>
</ul>
<p><strong><a href="https://uralenergotel.ru/category/rza/central_alarm/" target="_blank">Центральная сигнализация</a></strong></p>
<ul>
<li><a href="https://uralenergotel.ru/sirius-cs/" target="_blank">Сириус-ЦС</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-cs/" target="_blank">Сириус-2-ЦС</a></li>
</ul>
<p><strong><a href="https://uralenergotel.ru/category/rza/failure_location/" target="_blank">Определение места повреждения ЛЭП 6-750 кВ</a></strong></p>
<ul>
<li><a href="https://uralenergotel.ru/sirius-2-omp/" target="_blank">Сириус-2-ОМП</a></li>
</ul>
<p><strong><a href="https://uralenergotel.ru/category/rza/04kv/" target="_blank">Защита и автоматика вводов собственных нужд 0,4 кВ</a></strong></p>
<ul>
<li><a href="https://uralenergotel.ru/sirius-2-04-vv/" target="_blank">Сириус-2-0,4 ВВ</a></li>
<li><a href="https://uralenergotel.ru/sirius-2-04-av/" target="_blank">Сириус-2-0,4 АВ</a></li>
</ul>
<p><strong><a href="https://uralenergotel.ru/category/rza/arc_protection/" target="_blank">Дуговая защита</a></strong></p>
<ul>
<li><a href="https://uralenergotel.ru/orion-zdz/" target="_blank">Орион-ЗДЗ</a></li>
<li><a href="https://uralenergotel.ru/orion-dz/" target="_blank">Орион-ДЗ</a></li>
</ul>
<p><strong><a href="https://uralenergotel.ru/category/rza/proverochnoe_oborudovanie/" target="_blank">Проверочное оборудование</a></strong></p>
<ul>
<li><a href="https://uralenergotel.ru/category/rza/proverochnoe_oborudovanie/avtomaticheskie_vyklyuchateli/" target="_blank">Устройства проверки характеристик автоматических выключателей</a></li>
<li><a href="https://uralenergotel.ru/category/rza/proverochnoe_oborudovanie/ispytatelnoe_oborudovanie/" target="_blank">Испытательное оборудование</a></li>
<li><a href="https://uralenergotel.ru/category/rza/proverochnoe_oborudovanie/poisk_zamykania_na_zemlyu/" target="_blank">Приборы для поиска замыкания на землю</a></li>
<li><a href="https://uralenergotel.ru/category/rza/proverochnoe_oborudovanie/relay/" target="_blank">Устройства для проверки релейной защиты</a></li>
</ul>',
                'sort_position' => 1,
                'metaTitle' => 'оборудование Радиус Автоматика',
                'metaDescription' => 'оборудование Радиус Автоматика',
                'created_at' => '2018-08-27 17:56:03',
                'updated_at' => '2019-07-23 11:36:01',
            ),
            12 => 
            array (
                'id' => 17,
                'name' => 'Сапфир СТ',
                'url' => 'sapfir-st',
                'image' => '/storage/uploads/brands/сапфир.png',
                'active' => 1,
                'filter' => 0,
            'info' => 'ООО "Сапфир СТ" - екатеринбургский производитель аксессуаров для систем измерения и учёта и для защиты от импульсных перенапряжений (грозозащита) локальных сетей. Уралэнерготел является партнёром компании ООО "Сапфир СТ".',
                'header' => 'Разветвители интерфейса и защита от перенапряжений ООО "Сапфир СТ"',
                'body' => '<h2>ООО "Сапфир СТ"</h2>
<p>Компания ООО "Сапфир СТ" - российский производитель беспроводного оборудования, преобразователей и разветвителей интерфейса, блоков питания для измерительных преобразователей, защиты от импульсных перенапряжений локальных сетей, сторожевых таймеров для платежных терминалов и «зависания» серверов и других видов оборудования.</p>
<p><strong>Уралэнерготел является партнёром компании ООО "Сапфир СТ"</strong>
</p>
<p>В интернет-магазине Уралэнерготел вы можете купить оборудование Сапфир СТ:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/data_transfer/interface_splitter/" target="_blank">разветвители интерфейса RS-485/422</a></li>
<li><a href="https://uralenergotel.ru/category/electric/surge_guards/data_lines/" target="_blank">блоки защиты от перенапряжений для интерфейсов 4-20 мА и RS-485</a></li>
<li>УЗИП для сетей переменного и постоянного тока</li>
<li>преобразователи и повторители интерфейсов</li>
<li>радиомодемы</li>
<li>блоки питания</li>
</ul>',
                'sort_position' => 1,
                'metaTitle' => 'продукцию Сапфир СТ',
                'metaDescription' => 'продукцию производителя Сапфир СТ',
                'created_at' => '2018-08-27 18:07:34',
                'updated_at' => '2019-07-22 11:51:43',
            ),
            13 => 
            array (
                'id' => 18,
                'name' => 'НТК Приборэнерго',
                'url' => 'ntk-priborenergo',
                'image' => '/storage/uploads/brands/priborenergo.png',
                'active' => 1,
                'filter' => 0,
            'info' => 'НТК Приборэнерго (г. Чебоксары) - научно-техническа компания, которая занимается разработкой и производством приборов для предприятий, выпускающих низковольтное и высоковольтное оборудование (для сборки шкафов релейной защиты и автоматизации).',
                'header' => 'OOO "НТК Приборэнерго"',
                'body' => '<h2>НТК Приборэнерго</h2>
<p><strong>НТК Приборэнерго</strong> (г. Чебоксары) - научно-техническа компания, которая занимается разработкой и производством приборов для предприятий, выпускающих низковольтное и высоковольтное оборудование (для сборки шкафов релейной защиты и автоматизации), также для организаций использующих соответствующие приборы.</p>
<p>В интернет-магазине Уралэнерготел можно купить оборудование производства компании НТК Приборэнерго:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/data_transfer/interface_splitter/" target="_blank">Разветвители интерфейса RS-485/422</a></li>
<li><a href="https://uralenergotel.ru/category/electric/surge_guards/data_lines/" target="_blank">УЗИП для линий передачи данных</a></li>
<li>Преобразователи и повторители RS-485, RS-422, RS-232</li>
<li>Фильтры подавления помех</li>
<li>Блоки питания</li>
<li>Индикаторы тока и напряжения</li>
<li>УЗД устройства защиты электродвигателя</li>
<li>Переключатели фаз</li>
<li>Реле контроля фаз</li>
<li>Реле напряжения</li>
<li>Реле времени</li>
</ul>',
                'sort_position' => 1,
                'metaTitle' => 'разветвители интерфейса НТК Приборэнерго',
                'metaDescription' => 'разветвители интерфейса RS-482/422, БЗИ НТК Приборэнерго',
                'created_at' => '2018-08-27 18:08:57',
                'updated_at' => '2019-07-22 13:24:02',
            ),
            14 => 
            array (
                'id' => 20,
                'name' => 'КВАР',
                'url' => 'kvar',
                'image' => '/storage/uploads/brands/kvar.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'Серпуховский конденсаторный завод «КВАР» с 1944 выпускает силовые конденсаторы, а также более 60 лет конденсаторы связи.',
                'header' => 'ООО «СКЗ «КВАР»',
                'body' => '<h2>Серпуховский конденсаторный завод «КВАР»</h2>
<p>Серпуховский конденсаторный завод «КВАР» с 1944 выпускает силовые конденсаторы, а также более 60 лет конденсаторы связи.</p>
<p>За это время завод смог наладить эффективное производство и довести качество и надежность до самого высокого уровняю. Конденсаторы связи предназначены для эксплуатации в районах с умеренным и холодным климатом на открытом воздухе (вид климатического исполнения У1 и ХЛ1 соответственно), с тропическим климатом на открытом воздухе (вид климатического исполнения Т1).</p>
<p>В интернет-магазине Уралэнерготел вы можете <a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/" target="_blank">купить фарфоровые и полимерные конденсаторы связи</a> производства завода КВАР для ЛЭП напряжением</p>
<ul>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/35kv/" target="_blank">35 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/110kv/" target="_blank">110 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/150kv/" target="_blank">150 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/220kv/" target="_blank">220 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/330kv/" target="_blank">330 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/500kv/" target="_blank">500 кВ</a></li>
</ul>',
                'sort_position' => 1,
                'metaTitle' => 'конденсаторы связи производства КВАР',
                'metaDescription' => 'конденсаторы связи производства КВАР',
                'created_at' => '2018-08-27 18:11:58',
                'updated_at' => '2019-07-22 13:35:33',
            ),
            15 => 
            array (
                'id' => 21,
                'name' => 'Энергоприбор',
                'url' => 'odo-energopribor',
                'image' => '/storage/uploads/brands/energopribor.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'Приборостроительное предприятие «Энергоприбор» является одним из ведущих разработчиков и производителей средств измерений электрических величин - от датчиков до эталонных средств измерений',
                'header' => 'ОДО «Энергоприбор»',
                'body' => '<h2>ОДО "Энергоприбор"</h2>
<p>Приборостроительное предприятие «Энергоприбор» является одним из ведущих разработчиков и производителей средств измерений электрических величин - от датчиков до эталонных средств измерений. </p>
<p>«Энергоприбор» сегодня - динамично развивающаяся клиентоориентированная компания, добивающаяся успеха на пути инноваций – инноваций в разработке новой продукции, в технологии производства, в организации сбыта готовой продукции.</p>
<p>В интернет-магазине Уралэнерготел вы можете купить электроизмерительные приборы производства ОДО "Энергоприбор":</p>
<ul>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/" target="_blank">многофункциональные измерительные преобразователи (МИП)</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/" target="_blank">измерительные преобразователи тока и напряжения</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/" target="_blank">измерительные преобразователи мощности</a></li>
</ul>
<p>а также <a href="https://uralenergotel.ru/category/rza/proverochnoe_oborudovanie/poverka/" target="_blank">поверочное оборудование</a>.</p>',
                'sort_position' => 1,
                'metaTitle' => 'продукцию ОДО Энергоприбор',
                'metaDescription' => 'продукцию ОДО Энергоприбор',
                'created_at' => '2018-08-28 22:44:48',
                'updated_at' => '2019-07-22 13:49:10',
            ),
            16 => 
            array (
                'id' => 25,
                'name' => 'IRZ',
                'url' => 'irz',
                'image' => '/storage/uploads/brands/IRZ_2.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'Компания IRZ – международный производитель беспроводных продуктов и комплексных решений передачи данных.',
                'header' => 'Устройства передачи данных IRZ',
                'body' => '<h2>iRZ</h2>
<p>Компания IRZ – производитель беспроводных продуктов и комплексных решений в сфере передачи данных.</p>
<p>Компания располагает собственными производственными комплексами в России и Китае. Уникальность политики IRZ заключается в гибкости архитектуры продуктов и решений, высокоэффективном использовании новейших технологий и чуткости к динамике развития рынка.</p>
<p>Модельный ряд IRZ отличается высоким качеством комплектующих, поддержкой новейших технологий и умеренной стоимостью. Продукция компании не уступает по характеристикам изделиям ведущих мировых производителей.</p>
<br>
<p><strong>Компания Уралэнерготел является официальным дилером производителя IRZ. На продукцию компании IRZ действует срочная доставка грузов.</strong></p>
<br>
<p>В интернет-магазине Уралэнерготел вы можете купить:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/data_transfer/modem_routers/" target="_blank">модемы и роутеры</a></li>
<li><a href="https://uralenergotel.ru/category/data_transfer/accessories/" target="_blank">аксессуары для модемов и роутеров: антенны, блоки питания, кабели</a></li>
</ul>
<p>производства компании IRZ.</p>',
                'sort_position' => 22,
                'metaTitle' => 'устройства передачи данных IRZ',
                'metaDescription' => 'устройства передачи данных IRZ',
                'created_at' => '2019-01-25 09:34:13',
                'updated_at' => '2019-07-22 14:14:14',
            ),
            17 => 
            array (
                'id' => 26,
                'name' => 'Antey',
                'url' => 'antey',
                'image' => '/storage/uploads/brands/antey_3.png',
                'active' => 1,
                'filter' => 0,
            'info' => 'Antey – российский производитель антенн для всех типов мобильной связи (CDMA, GSM, SkyLink).',
                'header' => 'Антенны Antey',
                'body' => '<h2>Antey</h2>
<p>Antey – российский производитель антенн для всех типов мобильной связи (CDMA, GSM, SkyLink).</p>
<p>Все антенны компании собираются вручную и проходят индивидуальное тестирование. В производстве антенн используется специальное полимерное покрытие, превосходящее обычную краску по всем параметрам. </p>
<p>Антенны компании Антей оснащаются особой резиновой подошвой на основании, защищающей поверхность от повреждений, а также мощным магнитом, который способен удерживать антенну на высоких скоростях при езде по любому дорожному покрытию в различных условиях.</p>
<p><strong>Компания Уралэнерготел является официальным дилером производителя Antey.</strong></p>
<p>В интернет-магазине Уралэнерготел вы можете <a href="https://uralenergotel.ru/category/data_transfer/accessories/" target="_blank">купить антенны производства компании Antey.</a></p>',
                'sort_position' => 23,
                'metaTitle' => 'Антенны Antey',
                'metaDescription' => 'Антенны Antey',
                'created_at' => '2019-02-11 04:29:27',
                'updated_at' => '2019-07-22 14:37:05',
            ),
            18 => 
            array (
                'id' => 27,
                'name' => 'Таврида Электрик',
                'url' => 'tavrida',
                'image' => '/storage/uploads/brands/tavrida.png',
                'active' => 1,
                'filter' => 1,
                'info' => '«Таврида Электрик» предлагает инновационные продукты и решения для электроэнергетической отрасли, технологии «умных сетей» — Smart Grid, которые способствуют повышению надежности электроснабжения потребителей.',
                'header' => 'Таврида Электрик',
                'body' => '<h2>Таврида Электрик</h2>
<p><strong>Компания Уралэнерготел является официальным дилером производителя «Таврида Электрик».</strong></p>
<p>«Таврида Электрик» специализируется на разработке и производстве инновационной вакуумной коммутационной техники, 

интеллектуальных аппаратов для автоматизации сетей и подстанций, алгоритмов защит и автоматики распределительных сетей, 

комплектных распределительных устройств в классе напряжений до 35 кВ.</p>
<p>Ключевые приоритеты деятельности компании — глубокое изучение проблем потребителей и предложение своим клиентам 

комплексного подхода, основанного на уникальных технических решениях.</p>
<p>Таврида электрик предлагает комплексные интеллектуальные решения по строительству и реконструкции подстанций 10-35 кВ, а 

также автоматизации распределительных сетей 10-35 кВ (включая проекты Smart Grid), основанные на применении инновационных 

продуктов TEL и Plug&Play инжиниринга:
<ul>
<li>Вакуумные выключатели 6-20 кВ</li>
<li>Комплексы БАВР 6-10 кВ</li>
<li>Распределительные устройства 6-35 кВ</li>
<li>Реклоузеры 6-20 кВ</li>
<li>Реклоузеры 35 кВ</li>
<li>Комплексные решения по созданию современных подстанций 35/6 (10) кВ</li>
<li>Ограничители перенапряжений 3-110 кВ</li>
</ul>
<p>В Уралэнерготел вы можете купить <a href="https://uralenergotel.ru/category/oborudovanie-vl/surge_protector/" 

target="_blank">ограничители перенапряжений (ОПН)</a> производства Таврида Электрик.</p>',
                'sort_position' => 23,
                'metaTitle' => 'Таврида Электрик',
                'metaDescription' => 'Таврида Электрик',
                'created_at' => '2019-02-12 04:59:51',
                'updated_at' => '2019-03-29 05:20:55',
            ),
            19 => 
            array (
                'id' => 28,
                'name' => 'Citel',
                'url' => 'citel',
                'image' => '/storage/uploads/brands/citel.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'CITEL - это промышленная группа, которая разрабатывает, создает и продает решения по защите от импульсных перенапряжений',
                'header' => 'Citel',
                'body' => '<h2>Citel</h2>
<p>Citel - французская компания, основанная в 1937. Сегодня это промышленная группа, которая разрабатывает, создает и продает решения по защите от импульсных перенапряжений (УЗИП) для электрического, информационного и телефонного оборудования, а также для фотогальванических установок.</p>
<p>Эти решения были разработаны на основе исследований и разработок компонентов (например, газовых разрядников) и всех серий устройств защиты от импульсных перенапряжений, чтобы всегда отвечать требованиям рынка.</p>
<p>Компания CITEL является мировым лидером в области молниезащиты. CITEL имеет собственные заводы во Франции и Китае, а также коммерческие филиалы в Германии, США, Китае и Восточной Европе.</p>
<p>В интернет-магазине Уралэнерготел вы можете купить <a href="https://uralenergotel.ru/category/electric/surge_guards/" target="_blank">устройства защиты от перенапряжений производства Citel</a>:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/electric/surge_guards/alternating_current/" target="_blank">УЗИП для сетей переменного тока</a></li>
<li><a href="https://uralenergotel.ru/category/electric/surge_guards/direct_current/" target="_blank">УЗИП для сетей постоянного тока</a></li>
<li><a href="https://uralenergotel.ru/category/electric/surge_guards/data_lines/" target="_blank">УЗИП для линий передачи данных</a></li>
</ul>',
                'sort_position' => 24,
                'metaTitle' => 'Citel УЗИП',
                'metaDescription' => 'Citel УЗИП',
                'created_at' => '2019-02-28 12:07:01',
                'updated_at' => '2019-07-22 14:47:29',
            ),
            20 => 
            array (
                'id' => 29,
                'name' => 'Веспер',
                'url' => 'vesper',
                'image' => '/storage/uploads/brands/vesper_compressed.png',
                'active' => 1,
                'filter' => 1,
                'info' => 'Завод «ВЕСПЕР» - российский производитель силовой преобразовательной техники',
                'header' => 'Веспер',
                'body' => '<h2>Веспер</h2>
<p>Российский производитель силовой преобразовательной техники завод «ВЕСПЕР» серийно выпускает частотные преобразователи для управления асинхронными трехфазными электродвигателями.</p>
<p>Срок службы изделий составляет 12 лет. Гарантийный срок - 3 года вне зависимости, где и как было приобретено изделие. Частотные производители Веспер используются на свыше 30 тыс. предприятий всех отраслей.</p>
<p>В интернет-магазине Уралэнерготел вы можете купить оборудование Веспер:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/frequency_converter/preobrazovatel_chastoty/" target="_blank">Преобразователи частоты</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/accessories_pchv/" target="_blank">Аксессуары для преобразователей частоты - пульты управления, кабели, тормозные резисторы</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/recuperators/" target="_blank">Рекуператоры электроэнергии</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/filter_reactors/" target="_blank">Входные и выходные фильтры, согласующие реакторы</a></li>
</ul>',
                'sort_position' => 25,
                'metaTitle' => 'частотные преобразователи Веспер',
                'metaDescription' => 'частотники Веспер, фильтры',
                'created_at' => '2019-03-04 06:00:43',
                'updated_at' => '2019-07-22 15:48:43',
            ),
            21 => 
            array (
                'id' => 30,
                'name' => 'УККЗ',
                'url' => 'ukkz',
                'image' => '/storage/uploads/brands/ukkz_compressed.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'УККЗ - производитель конденсаторов связи, силовых конденсаторов и другой электротехнической продукции с 50-летним опытом.',
                'header' => 'Усть-Каменогорский Конденсаторный Завод',
                'body' => '<h2>ТОО "Усть-Каменогорский Конденсаторный Завод"</h2>
<p><strong>Усть-Каменогорский Конденсаторный Завод (УККЗ)</strong> - производитель конденсаторов связи, силовых конденсаторов и другой электротехнической продукции с 50-летним опытом: в 1959 году завод выпустил первые конденсаторы, а в 1962 - конденсаторные установки и конденсаторы связи.</p>
<p>В интернет-магазине Уралэнерготел вы можете купить весь ассортимент изделий производства ТОО "УККЗ", включая:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/oborudovanie-vl/power_capacitors/" target="_blank">высоковольтные и силовые конденсаторы серий КПС, КЭПФ, КЭС, КЭЭПВ, КЭЭС, ЭЭВП</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/" target="_blank">конденсаторы связи:</a></li>
<ul>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/35kv/" target="_blank">для ЛЭП 35 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/110kv/" target="_blank">для ЛЭП 110 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/150kv/" target="_blank">для ЛЭП 150 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/220kv/" target="_blank">для ЛЭП 220 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/330kv/" target="_blank">для ЛЭП 330 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/550kv/" target="_blank">для ЛЭП 500 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/110kv/" target="_blank">подставки изолирующие для конденсаторов связи</a></li>
</ul>
</ul>',
                'sort_position' => 26,
                'metaTitle' => 'УККЗ конденсаторы связи, силовые конденсаторы',
                'metaDescription' => 'конденсаторы связи, силовые конденсаторы Усть-Каменогорского Конденсаторного Завода',
                'created_at' => '2019-03-15 06:42:11',
                'updated_at' => '2019-07-22 16:42:45',
            ),
            22 => 
            array (
                'id' => 31,
                'name' => 'Delta Electronics',
                'url' => 'delta_electronics',
                'image' => '/storage/uploads/brands/delta_compressed.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'Delta Electronics – крупнейший международный концерн, разрабатывающий широчайший спектр интеллектуальных решений в области силовой электроники.',
                'header' => 'Delta Electronics',
                'body' => '<h2>Delta Electronics</h2>
<p><strong>Delta Electronics</strong> - крупнейший международный концерн, разрабатывающий широчайший спектр интеллектуальных решений в области силовой электроники, главный офис которого находится в Тайване. </p>
<p>Delta Electronics является ведущим производителем <a href="https://uralenergotel.ru/category/automation/" target="_blank">оборудования промышленной автоматизации</a>.</p>
<p>В интернет-магазине Уралэнерготел вы можете купить продукцию Delta Electronics:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/frequency_converter/preobrazovatel_chastoty/" target="_blank">преобразователи частоты и аксессуары к ним</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/servo/" target="_blank">сервоприводы</a></li>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/operator_panel/" target="_blank">панели оператора</a></li>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/plc/" target="_blank">программируемые логические контроллеры</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/temperature_controllers/" target="_blank">температурные контроллеры</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/encoders/" target="_blank">энкодеры</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/recuperators/" target="_blank">рекуператоры электроэнергии</a></li>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/input_output/" target="_blank">модули ввода и вывода</a></li>
</ul>',
                'sort_position' => 27,
                'metaTitle' => 'продукцию Delta Electronics',
                'metaDescription' => 'продукцию Delta Electronics, преобразователи частоты, ПЛК, панели оператора',
                'created_at' => '2019-03-25 10:30:25',
                'updated_at' => '2019-07-22 17:19:31',
            ),
            23 => 
            array (
                'id' => 32,
                'name' => 'Moxa',
                'url' => 'moxa',
                'image' => '/storage/uploads/brands/moxa_compressed.png',
                'active' => 1,
                'filter' => 1,
                'info' => 'Moxa предлагает своим клиентам комплексные технические решения для энергетической, нефтегазовой и горнодобывающей отраслей и для интеллектуальных систем транспорта.',
                'header' => 'Moxa',
                'body' => '<h2>MOXA</h2>
<p>Основанная в 1987 году в Тайване и представленная в настоящее время более чем в 70 странах мира, компания Moxa предлагает клиентам комплексные технические решения для энергетической, нефтегазовой и горнодобывающей отраслей, для интеллектуальных систем железнодорожного, морского и наземного транспорта, и многих других важных сфер.</p>
<p>В интернет-магазине вы можете купить весь ассортимент коммуникационного оборудования Moxa:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/data_transfer/switches/" target="_blank">Коммутаторы</a></li>
<li><a href="https://uralenergotel.ru/category/data_transfer/modem_routers/" target="_blank">Маршрутизаторы, модемы, роутеры</a></li>
<li><a href="https://uralenergotel.ru/category/data_transfer/sfp_modules/" target="_blank">SFP-модули</a></li>
<li><a href="https://uralenergotel.ru/category/data_transfer/port_boards/" target="_blank">Мультипортовые платы интерфейсов RS-232, RS-422/485</a></li>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/input_output/" target="_blank">Модули коммуникационные, дискретного и аналогового ввода и вывода</a></li>
<li>Модули измерения температуры с терморезисторных датчиков или термопар</li>
<li><a href="https://uralenergotel.ru/category/data_transfer/converters/" target="_blank">Преобразователи интерфейсов, конвертеры, повторители, медиаконвертеры, серверы</a></li>
<li><a href="https://uralenergotel.ru/category/data_transfer/protocol_converters/" target="_blank">Преобразователи протоколов</a></li>
<li>Встраиваемые компьютеры</li>
<li>Системы видеонаблюдения</li>
<li><a href="https://uralenergotel.ru/category/data_transfer/accessories/" target="_blank">Аксессуары: антенны, кабели, блоки и разветвители питания, терминальные блоки, крепежные наборы</a></li>
</ul>',
                'sort_position' => 28,
                'metaTitle' => 'Moxa - оборудование передачи данных',
                'metaDescription' => 'Moxa - оборудование передачи данных',
                'created_at' => '2019-04-25 12:19:20',
                'updated_at' => '2019-07-23 09:52:06',
            ),
            24 => 
            array (
                'id' => 33,
                'name' => 'Тахион',
                'url' => 'tahion',
                'image' => '/storage/uploads/brands/tahion compressed.png',
                'active' => 1,
                'filter' => 1,
                'info' => 'Тахион - российское научно-производственное предприятие, производитель систем видеонаблюдения, термошкафов и термобоксов, УЗИП, и оборудования микроклимата.',
                'header' => 'Тахион',
                'body' => '<h2>Тахион</h2>
<p>Тахион - российское научно-производственное предприятие, производитель систем 

видеонаблюдения, термошкафов и термобоксов, УЗИП, и оборудования микроклимата.</p>
<p>В интернет-магазине Уралэнерготел вы можете <a 

href="https://uralenergotel.ru/category/cabinets19/termoshkafy/" target="_blank">купить 

термошкафы Тахион c монтажными панелями и направляющими 19\'\', а также аксессуары к 

ним.</a></p>',
                'sort_position' => 29,
                'metaTitle' => 'продукцию Тахион',
                'metaDescription' => 'продукцию Тахион',
                'created_at' => '2019-05-14 08:35:55',
                'updated_at' => '2019-07-23 10:31:21',
            ),
            25 => 
            array (
                'id' => 34,
                'name' => 'НПО Изолятор',
                'url' => 'izolyator',
                'image' => '/storage/uploads/brands/npo_izolyator_compressed.png',
                'active' => 1,
                'filter' => 1,
                'info' => '«НПО «Изолятор» разрабатывает и серийно выпускает высоковольтные изоляторы с цельнолитой защитной оболочкой из кремнийорганической резины.',
                'header' => 'НПО Изолятор',
                'body' => '<h2>НПО Изолятор</h2>
<p>«НПО «Изолятор» разрабатывает и серийно выпускает высоковольтные изоляторы с цельнолитой защитной оболочкой из кремнийорганической резины.</p>
<p>Предприятие серийно выпускает линейные изоляторы от 10 кВ до 500 кВ, опорные изоляторы от 3кВ до 220 кВ, изоляторы для контактных сетей железных дорог, трамвая и троллейбуса. Всего предприятием освоено в серийном производстве более 800 типов полимерных изоляторов.</p>
<p>В интернет-магазина Уралэнерготел вы можете купить полимерные изоляторы производства НПО Изолятор:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/oborudovanie-vl/insulators/line_insulation/">линейные изоляторы</a></li>
<li><a href="https://uralenergotel.ru/category/oborudovanie-vl/insulators/support_insulator/">опорные изоляторы</a></li>
</ul>',
                'sort_position' => 28,
                'metaTitle' => 'продукцию НПО Изолятор',
                'metaDescription' => 'продукцию НПО Изолятор',
                'created_at' => '2019-05-15 08:58:55',
                'updated_at' => '2019-05-15 09:10:26',
            ),
            26 => 
            array (
                'id' => 35,
                'name' => 'Elster',
                'url' => 'elster',
                'image' => '/storage/uploads/brands/elster.png',
                'active' => 1,
                'filter' => 0,
            'info' => 'Эльстер Метроника (ранее АББ ВЭИ Метроника) - российское предприятие, входящее в группу ELSTER, которая объединяет крупнейших в мире производителей приборов и систем учета электрической энергии, тепла, воды и газа, производитель оборудования для автоматизированных систем учета электроэнергии.',
                'header' => 'Эльстер Метроника',
                'body' => '<h2>Эльстер Метроника</h2>
<p>Эльстер Метроника (ранее АББ ВЭИ Метроника) - российское предприятие, входящее в группу ELSTER, которая объединяет крупнейших в мире производителей приборов и систем учета электрической энергии, тепла, воды и газа, производитель оборудования для автоматизированных систем учета электроэнергии.</p>
<p>Компания Эльстер Метроника производит многофункциональные счетчики электроэнергии - трехфазные счетчики для перетоков, генерации, высоковольтных подстанций, распределительных сетей и промышленных потребителей, а также бытовые однофазные электросчетчики серии АЛЬФА.</p>
<p>В интернет-магазине Уралэнерготел вы можете <a href="https://uralenergotel.ru/category/schetchiki-energy/">купить счётчики электроэнергии Эльстер Метроника</a>:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/odnofaznie/mnogotarifnie/">однофазные многотарифные счётчики электрической энергии</a></li>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/trehfaznie/mnogotarifnie/">трёхфазные многотарифные счётчики электрической энергии</a></li>
</ul>',
                'sort_position' => 28,
                'metaTitle' => 'продукцию Эльстер Метроника, Elster Solutions',
                'metaDescription' => 'счётчики Эльстер Метроника, Elster Solutions',
                'created_at' => '2019-05-20 05:10:56',
                'updated_at' => '2019-05-20 06:27:34',
            ),
            27 => 
            array (
                'id' => 36,
                'name' => 'ICP DAS',
                'url' => 'icpdas',
                'image' => '/storage/uploads/brands/ipcdas.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'ICP DAS - известный производитель аппаратных средств для автоматизации технологических процессов предприятия',
                'header' => 'ICP DAS',
                'body' => '<h2>ICP DAS</h2>
<p>ICP DAS - известный производитель аппаратных средств для автоматизации технологических процессов предприятия. Компания была основана в Тайване в 1993 году. Менее чем за 10 лет уровень разработок ICP DAS вырос от элементарных плат ввода/вывода до PC-совместимых контроллеров и беспроводных систем сбора данных.</p>
<p>Сегодня компанию можно назвать бесспорным лидером на мировом рынке систем промышленной автоматизации. Важные составляющие успеха ICP DAS – универсальность техники, а также ее надежность и невысокая цена.</p>
<p>В интернет-магазине Уралэнерготел вы можете купить продукцию ICP DAS:</p>
<p><strong>Устройства ввода и вывода</strong>:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/input_output/" target="_blank">Модули аналогового и дискретного ввода и вывода</a></li>
<li>АЦП и ЦАП для шин ISA, PCI и изолированные, выносные (дочерние) платы</li>
<li>Платы аналогового и цифрового ввода вывода для шин ISA, PCI</li>
<li>Дочерние платы и крепежные панели для плат цифрового и аналогового ввода и вывода</li>
<li>Адаптеры и преходные колодки, кабели и разъемы для систем сбора данных</li>
<li>Платы CAN интерфейса</li>
</ul>
<p><strong>Устройства для систем безопасности</strong>:</p>
<ul>
<li>Платы Watchdog, счетчики/таймеры</li>
<li>Серверы IP-видео наблюдения</li>
<li>Интеркомы</li>
<li>Видеокамеры ICP DAS</li>
</ul>
<p><strong>Устройства HMI</strong>:</p>
<ul>
<li>Сенсорные LCD мониторы</li>
<li>TouchPAD</li>
</ul>
<p><strong>Оборудования систем автоматизации</strong></p>
<ul>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/plc/" target="_blank">Программируемые логические контроллеры</a></li>
<li>Концентраторы данных</li>
<li>Нормирующие преобразователи</li>
<li>Интеллектуальные измерители тока/напряжения</li>
<li>Регистратор данных по шине CAN</li>
<li>Датчики движения и температуры</li>
<li><a href="https://uralenergotel.ru/category/data_transfer/converters/" target="_blank">Конвертеры и повторители</a></li>
<li><a href="https://uralenergotel.ru/category/data_transfer/protocol_converters/" target="_blank">Преобразователи протоколов</a></li>
<li><a href="https://uralenergotel.ru/category/data_transfer/interface_splitter/" target="_blank">Разветвители интерфейсов</a></li>
</ul>
<p><strong>Беспроводное оборудование Радио/GSM/GPRS/GPS</strong></p>
<ul>
<li>GSM/GPRS Модемы</li>
<li>Контроллеры с GSM/GPRS</li>
<li>IR Wireless Solutions</li>
<li>Серия M2M (GSM/GPRS)</li>
<li>WiFi-модули</li>
<li>Антенны и усилители</li>
<li>Точки доступа</li>
<li>Bluetooth</li>
</ul>
<p><strong>Устройства передачи данных:</strong></p>
<ul>
<li>Неуправляемые коммутаторы</li>
<li>Управляемые коммутаторы</li>
<li>Коммутаторы с PoE</li>
<li>Ethernet-конвертеры</li>
<li>Разъемы</li>
</ul>',
                'sort_position' => 28,
                'metaTitle' => 'оборудование ICP DAS',
                'metaDescription' => 'продукцию ICP DAS',
                'created_at' => '2019-06-11 08:38:56',
                'updated_at' => '2019-07-23 10:26:17',
            ),
            28 => 
            array (
                'id' => 37,
                'name' => 'Инкотекс',
                'url' => 'incotex',
                'image' => '/storage/uploads/brands/incotex.png',
                'active' => 1,
                'filter' => 0,
            'info' => 'Incotex Electronics Group (IEGroup) - производитель счётчиков Меркурий',
                'header' => 'Инкотекс / Incotex',
                'body' => '<h2>Инкотекс</h2>
<p><strong>Incotex Electronics Group (IEGroup) - производитель счётчиков Меркурий</strong>, крупнейший в России разработчик и производитель уникальной радиотехнической продукции.</p>
<p>Инкотекс производит более 200 типов счётичокв электроэнергии, системы учёта, торговое оборудование, включая онлайн-фискализацию данных, LED-экраны и медиафасады, комплексные системы для транспортных узлов, стадионов и т.д, оборудование для головных станций цифрового телевидения, системы видеонаблюдения, системы безопасности использования GSM и Wi-Fi, источники вторичного питания, ситстемы питания от трёхфазной сети.</p>
<p>В интернет-магазине Уралэнерготел вы можете купить счётчики электроэнергии Меркурий производства Инкотекс:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/odnofaznie/" target="_blank">однофазные счётчики</a>:</li>
<ul>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/odnofaznie/odnotarifnie/" target="_blank">однофазные однотарифные</a></li>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/odnofaznie/mnogotarifnie/" target="_blank">однофазные многотарифные</a></li>
</ul>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/trehfaznie/" target="_blank">трёхфазные счётчики</a>:</li>
<ul>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/trehfaznie/odnotarifnie/" target="_blank">трёхфазные однотарифные</a></li>
<li><a href="https://uralenergotel.ru/category/schetchiki-energy/trehfaznie/mnogotarifnie/" target="_blank">трёхфазные многотарифные</a></li>
</ul>
</ul>
<p>а также сопутствующее оборудование - <a href="https://uralenergotel.ru/category/data_transfer/modem_routers/" target="_blank">GSM-шлюзы, устройства сбора и передачи данных для систем АСКУЭ/АСТУЭ, концентраторы и т.д.</a></p>',
                'sort_position' => 29,
                'metaTitle' => 'счётчики Меркурий производства Инкотекс',
                'metaDescription' => 'счётчики Меркурий производства Инкотекс',
                'created_at' => '2019-07-22 10:34:20',
                'updated_at' => '2019-07-22 16:25:03',
            ),
            29 => 
            array (
                'id' => 38,
                'name' => 'Меандр',
                'url' => 'meandr',
                'image' => '/storage/uploads/brands/meandr.png',
                'active' => 0,
                'filter' => 0,
                'info' => NULL,
                'header' => NULL,
                'body' => NULL,
                'sort_position' => 30,
                'metaTitle' => NULL,
                'metaDescription' => NULL,
                'created_at' => '2019-08-09 10:51:01',
                'updated_at' => '2019-08-09 10:51:13',
            ),
            30 => 
            array (
                'id' => 39,
                'name' => 'НПО Саров-Волгогаз',
                'url' => 'volgogaz',
                'image' => '/storage/uploads/brands/volgogaz.png',
                'active' => 1,
                'filter' => 1,
                'info' => 'ООО «НПО САРОВ-ВОЛГОГАЗ» – одно из ведущих предприятий, разрабатывающих и изготавливающих оборудование для топливно-энергетического комплекса.',
                'header' => 'НПО Саров-Волгогаз',
                'body' => '<h2>ООО «НПО САРОВ-ВОЛГОГАЗ»</h2>',
                'sort_position' => 31,
                'metaTitle' => 'НПО Саров-Волгогаз оборудование для нефтегазовой промышленности',
                'metaDescription' => 'НПО Саров-Волгогаз оборудование для нефтегазовой промышленности',
                'created_at' => '2019-08-15 16:18:32',
                'updated_at' => '2019-08-20 16:55:04',
            ),
            31 => 
            array (
                'id' => 40,
                'name' => 'Контэл',
                'url' => 'kontel',
                'image' => '/storage/uploads/brands/kontel.png',
                'active' => 1,
                'filter' => 1,
                'info' => 'Компания ООО "Контэл" специализируется на разработке и производстве аппаратных и программных средств автоматизации систем управления технологическими процессами и объектами.',
                'header' => 'Программируемые логические контроллеры Контэл',
                'body' => '<h2>ООО "Контэл"</h2>',
                'sort_position' => 32,
                'metaTitle' => 'ПЛК Контэл',
                'metaDescription' => 'контроллеры Контэл',
                'created_at' => '2019-08-25 15:24:16',
                'updated_at' => '2019-08-25 15:24:16',
            ),
            32 => 
            array (
                'id' => 41,
                'name' => 'INSTART',
                'url' => 'instart',
                'image' => '/storage/uploads/brands/instart.png',
                'active' => 1,
                'filter' => 0,
                'info' => 'INSTART – это высококачественные преобразователи частоты и устройства плавного пуска',
                'header' => 'INSTART',
                'body' => '<h2>Instart</h2>',
                'sort_position' => 33,
                'metaTitle' => 'INSTART',
                'metaDescription' => 'INSTART преобразователи частоты, частотные преобразователи, устройства плавного пуска, УПП',
                'created_at' => '2019-09-03 10:28:52',
                'updated_at' => '2019-09-03 10:28:52',
            ),
            33 => 
            array (
                'id' => 42,
                'name' => 'Бастион',
                'url' => 'bastion',
                'image' => '/storage/uploads/brands/bastion.png',
                'active' => 1,
                'filter' => 0,
                'info' => NULL,
                'header' => NULL,
                'body' => NULL,
                'sort_position' => 34,
                'metaTitle' => NULL,
                'metaDescription' => NULL,
                'created_at' => '2019-09-12 10:33:43',
                'updated_at' => '2019-10-28 08:27:36',
            ),
        ));
        
        
    }
}