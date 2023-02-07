<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Электроизмерительные приборы',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'elektroizmeritelnye-pribory',
                'body' => '<h2>Электроизмерительные приборы</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить стрелочные и цифровые электроизмерительные приборы для измерения

переменного и постоянного тока, напряжения, активной, реактивной и полной мощности, энергии, частоты, коэффициента мощности

по фазам и других измерений цепей для систем АСКУЭ, телемеханики на предприятиях энергетики и промышленных предприятиях.
</p>
<p><strong>В ассортименте представлены следующие типы измерительных приборов:</strong>
</p>
<ul>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/"

target="_blank">Многофункциональные приборы (мультиметры) и измерительные преобразователи</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/"

target="_blank">Амперметры, вольтметры, ампервольтметры (вольтамперметры)</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/"

target="_blank">Варметры, ваттметры</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/frequency_phase/"

target="_blank">Частотомеры, фазометры</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/tsifrovye-indikatory/"

target="_blank">Цифровые модули индикации</a></li>
<li><a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/logometry/" target="_blank">Логометры,

указатели РПН</a></li>
</ul>
<p>производства компаний-партнёров Уралэнерготел: <a href="https://uralenergotel.ru/brand/energoservis/"

target="_blank">Энергосервис (производитель ЭНИП-2)</a>, <a href="https://uralenergotel.ru/brand/electropribor/"

target="_blank">Электроприбор</a>, Энергоприбор, <a href="https://uralenergotel.ru/brand/k-s/" target="_blank">КС</a>, <a

href="https://uralenergotel.ru/brand/algoritm/" target="_blank">ЗАО "Алгоритм" (производитель Binom3)</a> и <a

href="https://uralenergotel.ru/brand/satec_plc_as/" target="_blank">Satec</a>.
</p>
<p>Вы можете выбрать измерительные приборы под любые ваши потребности с любым классом точности, в исполнениях щитовом, на

din-рейку; с функциями коммерческого учёта и анализа качества электроэнергии, с поддержкой векторных измерений; с

возможностью подключения напрямую к линиям, через трансформатор, или к шине процесса;  с аналоговыми, дискретными, релейными

выходами, а также с интерфейсами Ethernet, RS-485/442 и другими.
</p>',
                'image' => '/storage/uploads/categories/elektroizmeritelnye-pribory.png',
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'электроизмерительные приборы',
                'meta_description' => 'электроизмерительные приборы',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:06',
                'updated_at' => '2019-03-13 05:49:49',
            ),
            1 =>
            array (
                'id' => 2,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'Многофункциональные приборы и преобразователи',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'izmeritelnye-preobrazovateli',
                'body' => '<h2>Многофункциональные приборы и измерительные преобразователи</h2>
<p>Многофункциональные измерительные преобразователи (МИП) для измерения и индикации всех базовых параметрах в однофазных и трёхфазных электрических сетях и подключаются непосредственно к цепям измерения, через трансформаторы напряжения,

или к шине процесса.
</p>
<p>В отличие от электроизмерительных устройств узкой специализации, многофункциональные приборы могут одновременно измерять большое количество параметров:
</p>
<ul>
<li>действующие напряжение и силу тока фазные и междуфазные (линейные)</li>
<li>частоту входного напряжения</li>
</ul>
<p>А также предоставлять дорасчётные параметры, такие как:
</p>
<ul>
<li>активную, реактивную и полную мощность</li>
<li>коэффициент мощности (cos &phi;, sin &phi;, tg &phi;)</li>
<li>средние значения фазных и междуфазных (линейных) напряжения и силы тока</li>
<li>и другие</li>
</ul>
<p>Также такие приборы обладают функциями измерительного преобразователя, анализа качества и коммерческого учёта электроэнергии, могут регистрировать и передавать значения в системы телемеханики и АСКУЭ, мониторинга переходных режимов

(СМПР), технологического управления электрических сетей и подстанций, АСУ ТП и АИИС, противоаварийной автоматики энергосистем и другие системы.
</p>
<p>В интернет-магазине Уралэнерготел вы можете купить многофункциональные измерительные преобразователи <a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/enip2/" target="_blank">ЭНИП-2,

ЭНИП-2 PMU (УСВИ), ЭНИП-2 компакт</a> и <a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/" target="_blank">ESM</a> производства <a href="https://uralenergotel.ru/brand/energoservis/"

target="_blank">ИЦ Энергосервис</a>, <a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/satec/" target="_blank">приборы Satec</a>, приборы серий ЩМ, ЩМК и Е производства компании <a

href="https://uralenergotel.ru/brand/electropribor/" target="_blank">Электроприбор</a>, приборы серии PD производства <a href="https://uralenergotel.ru/brand/k-s/" target="_blank">ООО «Комплект-Сервис»</a>, ЕТ производителя ОДО

"Энергоприбор" и <a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/binom3/" target="_blank">Binom3</a> производства <a href="https://uralenergotel.ru/brand/algoritm/" target="_blank">ЗАО

"Алгоритм"</a>.
</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'многофункциональные измерительные приборы и преобразователи',
                'meta_description' => 'многофункциональные измерительные приборы и преобразователи, мультиметры',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:06',
                'updated_at' => '2019-03-13 05:49:49',
            ),
            2 =>
            array (
                'id' => 3,
                'parent_id' => 2,
                'depth' => 3,
                'name' => 'ESM',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 0,
                'url' => 'esm',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'ESM многофункциональные измерительные приборы и счётчики',
                'meta_description' => 'ESM многофункциональные измерительные приборы и трёхфазные многотарифные счётчики',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:06',
                'updated_at' => '2019-01-29 05:04:29',
            ),
            3 =>
            array (
                'id' => 4,
                'parent_id' => 2,
                'depth' => 3,
                'name' => 'Satec',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 0,
                'url' => 'satec',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'электроизмерительные приборы Satec',
                'meta_description' => 'электроизмерительные приборы Satec',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:06',
                'updated_at' => '2018-12-03 09:39:54',
            ),
            4 =>
            array (
                'id' => 5,
                'parent_id' => 2,
                'depth' => 3,
                'name' => 'Binom3',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 0,
                'url' => 'binom3',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'измерительные преобразователи-счётчики Binom3',
                'meta_description' => 'измерительные преобразователи, промышленные приборы учёта Binom3',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:06',
                'updated_at' => '2018-12-03 09:39:54',
            ),
            5 =>
            array (
                'id' => 6,
                'parent_id' => 2,
                'depth' => 3,
                'name' => 'ЭНИП-2',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 0,
                'url' => 'enip2',
                'body' => '<h2>ЭНИП-2</h2>
<p>Модификации ЭНИП‑2 отличаются друг от друга наборами дискретных входов и выходов, а также наличием и количеством

интерфейсов Ethernet, при наличии которого можно интегрировать ЭНИП-2 в цифровую подстанцию на базе протокола МЭК 61850.

Порт USB в ЭНИП‑2 облегчает настройку параметров интерфейсов, протоколов и объема передаваемых данных, обеспечивает просмотр

измерений. Обновление прошивки, а также изменение конфигурации, может быть осуществлено по USB без подключения внешнего

питания прибора. Для удаленной настройки прибора доступна web‑консоль. </p>
<p>В интернет-магазине Уралэнерготел вы можете купить все модификации прибора ЭНИП-2:</p>
<p><strong>"Только измерения"</strong></p>
<ul>
<li><strong>Код товара</strong>:ЭНИП-2-4X/X-X-А1Е0-01</li>
<li>Модификация предназначена только для измерения параметров режима электрической сети, которые могут быть переданы по

одному RS-485. Предназначается для систем телемеханики небольших подстанций и распределительных пунктов.</li>
</ul>
<p><strong>"Оптимальный"</strong></p>
<ul>
<li><strong>Код товара</strong>: ЭНИП-2-4X/X-X-А2Е0-21X, ЭНИП-2-4X/X-X-А2Е0-11X</li>
<li>Это исполнение ЭНИП‑2 помимо измерений обеспечивает дискретный ввод и вывод. Через второй RS-485 можно подключить

модуль индикации ЭНМИ, а также до 4 модулей ЭНМВ‑1‑0/3R, ЭНМВ‑1‑4/3R, ЭНМВ‑2‑4/3R, которые используются для расширения

количества дискретных входов и выдаче команд управления (релейные выходы).</li>
</ul>
<p><strong>"Расширенные коммуникации"</strong></p>
<ul>
<li><strong>Код товара</strong>: ЭНИП-2-4X/X-X-А3Е4-21X, ЭНИП-2-4X/X-X-А3Е4-11X</li>
<li>В отличии от «оптимальной» эта модификация имеет три порта RS‑485 и один порт Ethernet 100Base‑T. Наличие порта

Ethernet позволяет интегрировать ЭНИП-2 в «цифровую подстанцию» на базе  протокола МЭК 61850.</li>
</ul>
<p><strong>Максимум возможностей</strong></p>
<ul>
<li><strong>Код товара</strong>: ЭНИП-2-4X/X-X-А2Е4x2-21X, ЭНИП-2-4X/X-X-А2Е4x2-11X, ЭНИП-2-4X/X-X-А2Е4x2FX-21X, ЭНИП-2

-4X/X-X-А2Е4x2FX-11X</li>
<li>Наличие двух портов Ethernet 100Base‑T или 100Base‑FX (LC multi‑mode), которые работают в режиме коммутатора с

поддержкой RSTP и PRP, обеспечивает возможность резервирования передачи данных по сети Ethernet.</li>
</ul>
<p><strong>"SFP"</strong></p>
<ul>
<li><strong>Код товара</strong>: ЭНИП-2-4X/X-X-А2SFP-21X, ЭНИП-2-4X/X-X-А2SFP-11X</li>
<li>ЭНИП-2 этой модификации отличаются от всех остальных наличием 2 портов RS-485 и разъемом SFP с установленным модулем

GPON (пассивная оптическая сеть).</li>
</ul>
<p>а также сопутствующие товары к ним: <a href="https://uralenergotel.ru/category/telemechanics/input_output_modules/enmv-

1">модули ввода и вывода ЭНМВ-1</a>, <a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/tsifrovye-

indikatory/">цифровые модули индикации ЭНМИ</a>, <a href="https://uralenergotel.ru/category/accessories-

metering/razvetviteli/">разветвители интерфейсов</a>, <a href="https://uralenergotel.ru/category/accessories-

metering/surge_guards">устройства защиты от перенапряжений</a> и многие другие приборы для обеспечения систем телемеханики,

АСУ ТП электростанций и подстанций быстрыми и точными измерениями, а также выполнения функции телесигнализации и

телеуправления в электроустановках.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
            'meta_title' => 'многофункциональные измерительные преобразователи ЭНИП-2 и ЭНИП-2 PMU (УСВИ)',
            'meta_description' => 'многофункциональные измерительные преобразователи ЭНИП-2 и ЭНИП-2 PMU (УСВИ)',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:07',
                'updated_at' => '2019-03-13 05:49:49',
            ),
            6 =>
            array (
                'id' => 7,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'Амперметры, вольтметры, ампервольтметры',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'ampermetry-voltmetry',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'амперметры, вольтметры, ампервольтметры, вольтамперметры',
                'meta_description' => 'амперметры, вольтметры, ампервольтметры, вольтамперметры',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:07',
                'updated_at' => '2018-12-03 09:39:54',
            ),
            7 =>
            array (
                'id' => 10,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'Варметры, ваттметры',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'varmetry-vattmetry-chastotomery',
                'body' => '<h2>Варметры, ваттметры</h2>
<p>В интернет-магазине Уралэнерготел вы можете заказать стрелочные и цифровые измерители активной, реактивной и полной мощности, а также коэффициента мощности. В ассортименте представлены:</p>
<ul>
<li>варметры</li>
<li>ваттметры</li>
<li>ваттварметры (варваттметры)</li>
</ul>
<p>измеряющие параметры кВт, МВт, ГВт, кВар, МВар, ГВар, а также cos &phi; производства <a href="https://uralenergotel.ru/brand/k-s/" target="_blank">ООО "К-С"</a> и <a href="https://uralenergotel.ru/brand/electropribor/" target="_blank">ОАО "Электроприбор"</a></p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'ваттметры, варметры',
                'meta_description' => 'ваттметры, варметры',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:07',
                'updated_at' => '2019-03-13 05:31:32',
            ),
            8 =>
            array (
                'id' => 13,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'Частотомеры, фазометры',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'frequency_phase',
                'body' => '<h2>Частотомеры и фазометры</h2>
<p>В интернет-магазине Уралэнерготел вы можете заказать <strong>стрелочные и цифровые частотомеры</strong> для измерения частоты переменного тока и <strong>фазометры</strong> для измерения коэффициента мощности в трёхфазных трёхпроводных цепях переменного тока частотой 50 Гц с симметрией линейных напряжений и симметричной нагрузкой фаз, щитового исполнения, с различными размерами лицевой панели, производства компаний <a href="https://uralenergotel.ru/brand/k-s/" target="_blank">ООО «К-С»</a> и <a href="https://uralenergotel.ru/brand/electropribor/" target="_blank">ОАО «Электроприбор»</a></p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'частотомеры, фазометры',
                'meta_description' => 'частотомеры, фазометры',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:08',
                'updated_at' => '2019-02-06 05:14:17',
            ),
            9 =>
            array (
                'id' => 14,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'Модули индикации',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'tsifrovye-indikatory',
                'body' => '<h2>Модули индикации</h2>
<p>Модули индикации - это устройства, которые представляют собой цифровые индикаторы, служащие в качестве второго или выносного экрана для электроизмерительных приборов, их функция заключается в считывании и отображении полученных от приборов значений. У некоторых модулей индикации также реализована возможность просмотра переданных данных и настройки оборудования, а также возможность подключения нескольких модулей индикации разного типа к одному прибору, или вывод информации с нескольких приборов на один модуль индикации.</p>
<p>Модули индикации как правило выпускаются с размером дисплея 120x120 мм или 96x96 мм для монтажка (врезки) в окно щита 111x111 мм или 91x91 мм.</p>
<p>В интернет-магазине вы можете купить модули индикации <strong>ЭНМИ</strong>, совместимые с приборами компании <a href="https://uralenergotel.ru/brand/energoservis/" target="_blank">Энергосервис</a>: <a href="https://uralenergotel.ru/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/enip2/" target="_blank">ЭНИП-2, ЭНИП-2 PMU</a>, <a href="https://uralenergotel.ru/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/" target="_blank">ESM</a>, ЭНМВ-1, модули индикации, совместимые с приборами производства компании <a href="https://uralenergotel.ru/brand/k-s/" target="_blank">ООО "К-С"</a>, модули индикации <strong>МИ</strong> и табло серии <strong>Т</strong> производства <a href="https://uralenergotel.ru/brand/electropribor/" target="_blank">ОАО "Электроприбор"</a>, а также модули индикации <strong>RDM</strong>, совместимые с <a href="https://uralenergotel.ru/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/satec/" target="_blank">многофункциональными преобразователями Satec</a> и <a href="https://uralenergotel.ru/satec-pm180/" target="_blank">контроллером Satec PM180</a>.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'цифровые индикаторы для электроизмерительных приборов',
                'meta_description' => 'цифровые модули индикации для электроизмерительных приборов',
                'sort_position' => 6,
                'created_at' => '2018-11-30 11:35:08',
                'updated_at' => '2019-07-15 15:34:28',
            ),
            10 =>
            array (
                'id' => 15,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'Логометры, указатели РПН',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'logometry',
                'body' => '<h2>Логометры, указатели РПН</h2>
<p><strong>Логометры (указатели положения РПН)</strong> применяются на электрических

подстанциях для контроля состояния трансформаторов для поддержания нормального уровня

напряжения у потребителей энергии.
</p>
<p>В интернет-магазине Уралэнерготел можно купить<strong>указатели положения РПН</strong>,

предназначенные для преобразования сигналов датчиков переключающих устройств

трансформаторов под нагрузкой в цифровой сигнал для отображения номера положения на

цифровом индикаторе ведущего российского производителя <strong><a

href="https://uralenergotel.ru/brand/electropribor/"

target="_blank">Электроприбор</a></strong>
</p>',
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'логометры, указатели и регуляторы РПН',
                'meta_description' => 'логометры, указатели и регуляторы РПН',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:08',
                'updated_at' => '2019-07-15 15:34:28',
            ),
            11 =>
            array (
                'id' => 16,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Счетчики электроэнергии',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'schetchiki-energy',
                'body' => '<h2>Счетчики электроэнергии</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить электросчётчики для <a href="https://uralenergotel.ru/category/schetchiki-energy/odnofaznie/" target="_blank">однофазных</a> и <a href="https://uralenergotel.ru/category/schetchiki-energy/trehfaznie/" target="_blank">трёхфазных</a> электрических сетей с номинальным током 1А и 5А и номинабьным напряжением 100В, 230В и 380В, как однотарифные, так и многотарифные, прямого и трансформаторного подключения, подходящие для систем коммерческого и технического учёта (АСКУЭ, АИИС КУЭ и АСТУЭ), с различным классом точности и интерфейсами RS-485, RS-232, Ethernet, PLC, Zigbee, PLC, CAN и радиоинтерфейсом для наиболее удобной интерграции в системы измерения и учёта.</p>
<p>В ассортименте представлены счётчики российского производителя <a href="https://uralenergotel.ru/brand/nnpo-frunze/" target="_blank">ЗАО "ННПО имени М.В. Фрунзе"</a>, <a href="https://uralenergotel.ru/category/elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/" target="_blank">многофункциональные измерительные преобразователи</a> с функцией учёта электрической энергии производства компаний <a href="https://uralenergotel.ru/brand/satec_plc_as/" target="_blank">Satec</a>, <a href="https://uralenergotel.ru/brand/algoritm/" target="_blank">ЗАО "Алгоритм" (Binom3)</a> и <a href="https://uralenergotel.ru/brand/energoservis/" target="_blank">ООО "ИЦ Энергосервис"</a>, а также сопутствующие товары - <a href="https://uralenergotel.ru/category/accessories-metering/razvetviteli/" target="_blank">разветвители интерфейса</a> и <a href="https://uralenergotel.ru/category/accessories-metering/surge_guards/" target="_blank">устройства защиты от перенапряжений</a>.',
                'image' => '/storage/uploads/categories/metering.png',
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'счётчики электроэнергии',
                'meta_description' => 'счётчики электроэнергии, электросчётчик, электрический счётчик',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:08',
                'updated_at' => '2019-05-16 05:37:42',
            ),
            12 =>
            array (
                'id' => 17,
                'parent_id' => 16,
                'depth' => 2,
                'name' => 'Однофазные счетчики электроэнергии',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'odnofaznie',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'однофазные счётчики электроэнергии',
                'meta_description' => 'однофазные счётчики электроэнергии, электросчётчик, электрический счётчик',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:09',
                'updated_at' => '2018-11-30 13:59:53',
            ),
            13 =>
            array (
                'id' => 18,
                'parent_id' => 17,
                'depth' => 3,
                'name' => 'Однотарифные однофазные счетчики электроэнергии',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'odnotarifnie',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'однофазные однотарифные электроэнергии',
                'meta_description' => 'однофазные однотарифные счётчики электроэнергии, электросчётчик, электрический счётчик',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:09',
                'updated_at' => '2018-11-30 14:00:24',
            ),
            14 =>
            array (
                'id' => 19,
                'parent_id' => 17,
                'depth' => 3,
                'name' => 'Многотарифные однофазные счетчики электроэнергии',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'mnogotarifnie',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'многотарифные однофазные счетчики электроэнергии',
                'meta_description' => 'многотарифные однофазные счетчики электроэнергии',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:09',
                'updated_at' => '2018-12-03 09:39:54',
            ),
            15 =>
            array (
                'id' => 20,
                'parent_id' => 16,
                'depth' => 2,
                'name' => 'Трехфазные счетчики электроэнергии',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'trehfaznie',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'трехфазные счетчики электроэнергии',
                'meta_description' => 'трехфазные счетчики электроэнергии',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:09',
                'updated_at' => '2019-05-16 05:34:20',
            ),
            16 =>
            array (
                'id' => 21,
                'parent_id' => 20,
                'depth' => 3,
                'name' => 'Однотарифные трехфазные счетчики электроэнергии',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'odnotarifnie',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'трёхфазные однотарифные счётчики электроэнергии',
                'meta_description' => 'трёхфазные однотарифные счётчики электроэнергии, электросчётчик, электрический счётчик',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:09',
                'updated_at' => '2018-12-13 04:37:58',
            ),
            17 =>
            array (
                'id' => 22,
                'parent_id' => 20,
                'depth' => 3,
                'name' => 'Многотарифные трехфазные счетчики электроэнергии',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'mnogotarifnie',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'многотарифные трехфазные счетчики электроэнергии',
                'meta_description' => 'многотарифные трехфазные счетчики электроэнергии',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:09',
                'updated_at' => '2018-12-03 09:39:54',
            ),
            18 =>
            array (
                'id' => 23,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Оборудование телемеханики',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'telemechanics',
                'body' => '<h2>Оборудование систем телемеханики
</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить оборудование для применения в системах телемеханизации, САУ, СДТУ, ССПИ, СОТИ АССО, АСУ ТП, АСКУЭ и АИИСКУЭ для организации систем сбора и передачи информации с объектов энергетики, транспорта и промышленности.</p>
<p>В ассортименте представлены:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/telemechanics/rtu/" target="_blank">Устройства сбора данных</a></li>
<li><a href="https://uralenergotel.ru/category/telemechanics/input_output_modules/" target="_blank">Модули ввода и вывода, коммуникационные модули</a></li>
<li><a href="https://uralenergotel.ru/category/telemechanics/time_sync/" target="_blank">Блоки коррекции времени</a></li>
<li><a href="https://uralenergotel.ru/category/telemechanics/controllers/" target="_blank">Контроллеры телемеханики</a></li>
</ul>
<p>производства компаний-партнёров Уралэнерготел: <a href="https://uralenergotel.ru/brand/energoservis/">ИЦ Энергосервис</a>, <a href="https://uralenergotel.ru/brand/electropribor/" target="_blank">Электроприбор (г. Чебоксары)</a>, <a href="https://uralenergotel.ru/brand/k-s/" target="_blank">К-С</a> и <a href="https://uralenergotel.ru/brand/satec_plc_as/" target="_blank">Satec</a>.</p>',
                'image' => '/storage/uploads/categories/telemechanics.png',
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'оборудование телемеханики ТМ',
                'meta_description' => 'оборудование телемеханики ТМ',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:09',
                'updated_at' => '2019-03-13 05:31:34',
            ),
            19 =>
            array (
                'id' => 24,
                'parent_id' => 23,
                'depth' => 2,
                'name' => 'Устройства сбора данных',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'rtu',
                'body' => '<h2>Устройства сбора данных</h2>
<p><strong>Устройства сбора данных</strong> применяются в системах телемеханики для сбора технологической информации с энергетических объектов, типа подстанций или электростанций, различного уровня. Данные измерительных преобразователей, счётчиков электроэнергии, терминалов РЗА, контроллеров присоединения, модулей ввода и вывода дискретных и аналоговых сигналов и других приборов представляются устройству сбора данных, которое передаёт их на вышестоящий информационный уровень.</p>
<p>В интернет-магазине Уралэнерготел можно купить устройства сбора данных для применения в системах телемеханики, ССПИ, СОТИ АССО, АСУ ТП, АСКУЭ и АИИСКУЭ <strong>ЭНКС-3м</strong>, <strong>ЭНКМ-3</strong> производства <a href="https://uralenergotel.ru/brand/energoservis/" target="_blank">ИЦ "Энергосервис"</a>.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства сбора данных электроизмерительных приборов',
                'meta_description' => 'устройства сбора данных систем телемеханики ТМ',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:09',
                'updated_at' => '2018-11-30 14:03:54',
            ),
            20 =>
            array (
                'id' => 25,
                'parent_id' => 23,
                'depth' => 2,
                'name' => 'Устройства ввода и вывода',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'input_output_modules',
                'body' => '<h2>Модули ввода и вывода</h2>
<p><strong>Модули ввода/вывода</strong> применяются для ввода и вывода дискретных сигналов в системах сбора и передачи технологической информации энергетических объектов, типа подстанций или электростанций, различного уровня. Модули обеспечивают передачу обрабатываемой информации по различным интерфейсам (RS-485, Ethernet, 1-Wire) в автоматизированных системах.
</p>
<p>В интернет-магазине Уралэнерготел можно купить модули ввода и вывода для применения в системах телемеханики, ССПИ, СОТИ АССО, АСДУ, АСУ ТП, АСКУЭ и АИИСКУЭ <strong>ЭНМВ-1</strong>, <strong>ЭНМВ-2</strong>, <strong>ЭНМВ-3</strong> и <strong>ЭНМВ-1W</strong> производства <a href="https://uralenergotel.ru/brand/energoservis/" target="_blank">ИЦ "Энергосервис"</a> и модуль ЭЛМВ производства <a href="https://uralenergotel.ru/brand/electropribor/" target="_blank">ОАО "Электроприбор"</a>.
</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'модули ввода и вывода',
                'meta_description' => 'модули ввода и вывода систем телемеханики ТМ',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:10',
                'updated_at' => '2019-05-14 11:16:27',
            ),
            21 =>
            array (
                'id' => 26,
                'parent_id' => 25,
                'depth' => 3,
                'name' => 'ЭНМВ-1',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 0,
                'url' => 'enmv-1',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'ЭНМВ-1 модуль ввода и вывода Энергосервис',
                'meta_description' => 'ЭНМВ-1 модуль ввода и вывода Энергосервис',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:10',
                'updated_at' => '2019-01-28 05:32:21',
            ),
            22 =>
            array (
                'id' => 27,
                'parent_id' => 23,
                'depth' => 2,
                'name' => 'Блоки коррекции времени',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'time_sync',
                'body' => '<h2>Блоки коррекции времени</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить <strong>блоки коррекции времени</strong> для организации автоматизированной системы обеспечения единого времени (СОЕВ) с использованием глобальных навигационных систем (GPS, ГЛОНАСС) для точной синхронизации часов приёмников спутниковых сигналов.</p>
<p>В ассортименте представлены <a href="https://uralenergotel.ru/category/Elektroizmeritelnye-pribory/time_sync/" target="_blank">блоки синхронизации времени ЭНКС-2</a> от производителя <a href="https://uralenergotel.ru/about/brands/" target="_blank">Энергосервис</a>, а также <a href="https://uralenergotel.ru/category/Accessories-sistem-izmerenia-i-ucheta/antennas_sensors/" target="_blank">GPS/ГЛОНАСС-антенны</a> к ним.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'блоки коррекции времени',
                'meta_description' => 'блоки коррекции времени',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:10',
                'updated_at' => '2019-05-14 11:16:27',
            ),
            23 =>
            array (
                'id' => 28,
                'parent_id' => 23,
                'depth' => 2,
                'name' => 'Контроллеры телемеханики',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'controllers',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'контроллеры телемеханики',
                'meta_description' => 'контроллеры телемеханики',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:10',
                'updated_at' => '2019-05-14 11:16:27',
            ),
            24 =>
            array (
                'id' => 29,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Оборудование автоматизации',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'automation',
                'body' => '<h2>Оборудование для систем автоматизации</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить контрольно-измерительные приборы (КИП) и оборудование для автоматизации систем управления технологическими процессами (АСУ ТП) промышленных и производственных предприятий для автоматического изменения и регулирования технических параметров, сбора, обработки и хранения информации оборудования и дистанционного управления процессами для таких отраслей, как водоподготовка, пищевая промышленность, металлургия, машиностроение, стройматериалы, леспром, химическая промышленность, медицина, теплоснабжение, вентиляция, сельское хозяйство, и многих других.</p>
<p><strong>В ассортименте представлены:</strong></p>
<ul>
<li><a href="https://uralenergotel.ru/category/automation/kip/">Контрольно-измерительные приборы</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/control/">Контроллеры для систем отопления, ГВС, вентиляции и кондиционирования</a></li>
<li><a href="https://uralenergotel.ru/category/automation/sensors/">Датчики температуры, влажности, уровня, давления, загазованности как в общепромышленном, так и во взрывозащищённом исполнении</a></li>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/">Программируемые устройства</a></li>
<li><a href="https://uralenergotel.ru/category/automation/frequency_converter/">Приводная техника</a></li>
</ul>
<p>производства компаний <a href="https://uralenergotel.ru/brand/owen/">ОВЕН</a>, <a href="https://uralenergotel.ru/brand/vesper/">Веспер</a> и <a href="https://uralenergotel.ru/brand/delta_electronics/">Delta Electronics</a> по выгодным ценам.</p>',
                'image' => '/storage/uploads/categories/automation2.png',
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'оборудование автоматизации',
                'meta_description' => 'оборудование для автоматизации технологических процессов АСУ ТП, производства',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:10',
                'updated_at' => '2019-04-03 10:37:22',
            ),
            25 =>
            array (
                'id' => 30,
                'parent_id' => 29,
                'depth' => 2,
                'name' => 'Контрольно-измерительные приборы',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'kip',
            'body' => '<h2>Контрольно-измерительные приборы (КИП)</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить контрольно-измерительные приборы и средства автоматики (КИПиА) для решения любых задач автоматизации.</p>
<p>В ассортименте представлены общепромышленные и взрывозащищенные контрольно-измерительные приборы:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/" target="_blank">Измерители-регуляторы</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/pump_control/" target="_blank">Приборы для управления насосами, сигнализаторы уровней</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/control/" target="_blank">Контроллеры для систем отопления, ГВС, вентиляции</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/counters/" target="_blank">Счетчики, таймеры, тахометры</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/normiruyuschie_preobrazovateli/" target="_blank">Нормирующие преобразователи</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/valve_control/" target="_blank">Приборы для индикации и управления задвижками</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/manual_signal_adjustment/" target="_blank">Ручные задатчики сигналов</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/electric/" target="_blank">Измерители параметров электрической сети</a></li>
</ul>
<p>российского производителя аппаратуры КИПиА <a href="https://uralenergotel.ru/brand/owen/" target="_blank">ОВЕН</a>.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'контрольно-измерительные приборы КИП',
                'meta_description' => 'контрольно-измерительные приборы и устройства КИП',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:11',
                'updated_at' => '2018-12-20 12:00:42',
            ),
            26 =>
            array (
                'id' => 31,
                'parent_id' => 30,
                'depth' => 3,
                'name' => 'Измерители-регуляторы',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'izmeriteli-regulyatory',
                'body' => '<h2>Измерители-регуляторы</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить измерители-регуляторы: ON/OFF-регуляторы, ПИД-регуляторы, ПИД-регуляторы для управления задвижкой, а также измерительные приборы и приборы оснащённые таймером. В ассортименте

представлены общепромышленные приборы и взрывозащищённые, одноканальные и многоканальные, оснащённые аналоговыми, дискретными и релейными выходами, интерфейсами RS-232, RS-485 и Ethernet. Представленные у нас приборы подходят для

крепления на DIN-рейку, щитового, а также настенного.</p>
<p>У нас вы можете заказать:</p>
<ul>
<li>измерители: <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=2%D0%A2%D0%A0%D0%9C0/" target="_blank">2ТРМ0</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-

regulyatory/filters/series=%D0%A2%D0%A0%D0%9C200/" target="_blank">ТРМ200</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=%D0%A3%D0%9A%D0%A238/" target="_blank">УКТ38</a>, <a

href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=%D0%A3%D0%9A%D0%A238-%D0%92/" target="_blank">УКТ38-В</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-

regulyatory/filters/series=%D0%98%D0%A2%D0%9F/" target="_blank">ИТП</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=%D0%98%D0%94%D0%A6/" target="_blank">ИДЦ1</a></li>
<li>регуляторы: <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=%D0%A2%D0%A0%D0%9C500/" target="_blank">ТРМ500</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-

regulyatory/filters/series=%D0%A2%D0%A0%D0%9C501/" target="_blank">ТРМ501</a>, <a href="https://uralenergotel.ru/trm502/" target="_blank">ТРМ502</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-

regulyatory/filters/series=%D0%A2%D0%A0%D0%9C1/" target="_blank">ТРМ1</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=%D0%A2%D0%A0%D0%9C201/" target="_blank">ТРМ201</a>, <a

href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=2%D0%A2%D0%A0%D0%9C1/" target="_blank">2ТРМ1</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-

regulyatory/filters/series=%D0%A2%D0%A0%D0%9C202/" target="_blank">ТРМ202</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=%D0%A2%D0%A0%D0%9C136/" target="_blank">ТРМ136</a>, <a

href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=%D0%A2%D0%A0%D0%9C138/" target="_blank">ТРМ138</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-

regulyatory/filters/series=%D0%A2%D0%A0%D0%9C138%D0%92/" target="_blank">ТРМ138В</a></li>
<li>ПИД-регуляторы: <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=%D0%A2%D0%A0%D0%9C500/" target="_blank">ТРМ500</a>, <a

href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=%D0%A2%D0%A0%D0%9C10/" target="_blank">ТРМ10</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-

regulyatory/filters/series=%D0%A2%D0%A0%D0%9C101/" target="_blank">ТРМ101</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=%D0%A2%D0%A0%D0%9C210/" target="_blank">ТРМ210</a>, <a

href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=%D0%A2%D0%A0%D0%9C148/" target="_blank">ТРМ148</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-

regulyatory/filters/series=%D0%A2%D0%A0%D0%9C251/" target="_blank">ТРМ251</a>, <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=%D0%A2%D0%A0%D0%9C151/" target="_blank">ТРМ151</a>, <a href=""

target="_blank">МПР51</a></li>
<li>ПИД-регуляторы для управления задвижкой: <a href="https://uralenergotel.ru/category/automation/kip/izmeriteli-regulyatory/filters/series=%D0%9C%D0%9F%D0%A051/" target="_blank">ТРМ12</a>, <a href="" target="_blank">ТРМ212</a></li>
</ul>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'измерители-регуляторы общепромышленные',
                'meta_description' => 'измерители-регуляторы общепромышленные и взрывозащищенные',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:11',
                'updated_at' => '2018-12-21 08:51:55',
            ),
            27 =>
            array (
                'id' => 32,
                'parent_id' => 30,
                'depth' => 3,
                'name' => 'Счетчики, таймеры, тахометры',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'counters',
                'body' => '<h2>Счетчики, таймеры, тахометры</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить счетчики времени, импульсов, таймеры и тахометры для суммарного подсчета количество продукции на транспортере, числа посетителей, длины наматываемого кабеля, экструзионной пленки, управления системами дозирования и расхода жидкости и намоточными установками, подсчета импульсов, времени наработки, измерения скорости вращения вала, линейной скорости перемещения конвейера, времени наработки оборудования и решения других задач автоматизации на предприятии.</p>
<p>В ассортименте представлены счетчики, таймеры и тахометры одноканальные и многоканальные, работающие с датчиками n-p-n и p-n-p типа, а также с коммутационными устройствами ("сухой контакт"), с интерфейсом RS-485, а также с аналоговыми и дискретными и релейными выходами.</p>
<p>У нас вы можете заказать:</p>
<ul>
<li>Счетчики: <a href="https://uralenergotel.ru/si10_owen/" target="_blank">СИ10</a>, <a href="https://uralenergotel.ru/category/automation/kip/counters/filters/series=%D0%A1%D0%9820/" target="_blank">СИ20</a>, <a href="https://uralenergotel.ru/category/automation/kip/counters/filters/series=%D0%A1%D0%9830/" target="_blank">СИ30</a>, <a href="https://uralenergotel.ru/category/automation/kip/counters/filters/series=%D0%A1%D0%988/" target="_blank">СИ8</a></li>
<li>Таймеры: <a href="https://uralenergotel.ru/category/automation/kip/counters/filters/series=%D0%A1%D0%9201/" target="_blank">СВ01</a>, <a href="https://uralenergotel.ru/category/automation/kip/counters/filters/series=%D0%A3%D0%A224/" target="_blank">УТ24</a>, <a href="https://uralenergotel.ru/category/automation/kip/counters/filters/series=%D0%A3%D0%A21/" target="_blank">УТ1</a></li>
<li>Тахометры: <a href="https://uralenergotel.ru/category/automation/kip/counters/filters/series=%D0%A2%D0%A501-RS/" target="_blank">ТХ01-RS</a></li>
</ul>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'счетчики, таймеры, тахометры',
                'meta_description' => 'счетчики, таймеры, тахометры',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:11',
                'updated_at' => '2019-04-25 10:01:27',
            ),
            28 =>
            array (
                'id' => 33,
                'parent_id' => 30,
                'depth' => 3,
                'name' => 'Нормирующие преобразователи',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'normiruyuschie_preobrazovateli',
                'body' => '<h2>Нормирующие преобразователи</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить приборы для работы с полевыми сигналами - нормирующие преобразователи, преобразователи интерфейсов и барьеры искрозащиты, а также <a href="https://uralenergotel.ru/category/automation/sensors/" target="_blank">датчики</a> для работы с ними.</p>
<p>В ассортименте представлены универсальные нормирующие преобразователи для работы с датчиками с кабельным выводом, для установки на DIN-рейку в щит автоматики, и коммутационной головкой датчика как российской, так и в европейской конструкции в общепромышленном и взрывозащищенном (для измерения температуры во взрывоопасных зонах) исполнении с аналоговыми выходами.</p>
<p>У нас вы можете заказать оборудование для работы с полевыми сигналами:</p>
<ul>
<li>барьер искрозащиты Искра</li>
<li>нормирующие преобразователи: <a href="https://uralenergotel.ru/npt1_owen/" target="_blank">НПТ-1</a>, <a href="https://uralenergotel.ru/npt1ex_owen/" target="_blank">НПТ-1.Ех</a>, <a href="https://uralenergotel.ru/category/automation/kip/normiruyuschie_preobrazovateli/filters/series=%D0%9D%D0%9F%D0%A2-2/" target="_blank">НПТ-2</a>, <a href="https://uralenergotel.ru/npt3_owen/" target="_blank">НПТ-3</a>, <a href="https://uralenergotel.ru/npt3ex_owen/" target="_blank">НПТ-3.Ex</a>, НПТ-1К, НПТ-1К.Ex.</li>
<li>Универсальный преобразователь интерфейсов USB/UART НП-КП20</li>
</ul>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'нормирующие преобразователи',
                'meta_description' => 'нормирующие преобразователи, устройства для работы с полевыми сигналами',
                'sort_position' => 6,
                'created_at' => '2018-11-30 11:35:11',
                'updated_at' => '2019-04-25 10:01:27',
            ),
            29 =>
            array (
                'id' => 34,
                'parent_id' => 30,
                'depth' => 3,
                'name' => 'Приборы для управления насосами, сигнализаторы уровней',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'pump_control',
                'body' => '<h2>Приборы для управления насосами, сигнализаторы уровней</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить оборудование для управления группой насосов, контроля, поддержания и сигнализации уровней жидкости и сыпучих сред.</p>
<p>В ассортименте представлены сигнализаторы, регуляторы и контроллеры, работающие с кондуктометричесими и поплавковыми датчиками, датчиками с выходом 4..20 мА, ёмкостными и индуктивными датчиками с npn-выходом, устройства с интерфейсом RS-485.</p>
<p>У нас вы можете заказать оборудование для работы с полевыми сигналами:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/automation/kip/pump_control/filters/series=%D0%A1%D0%A3%D0%9D%D0%90-121/" target="_blank">СУНА-121</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/pump_control/filters/series=%D0%A1%D0%90%D0%A3-%D0%A3/" target="_blank">САУ-У</a></li>
<li><a href="https://uralenergotel.ru/sau_m6/" target="_blank">САУ-М6</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/pump_control/filters/series=%D0%91%D0%9A%D0%9A1/" target="_blank">БКК1</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/pump_control/filters/series=%D0%A1%D0%90%D0%A3-%D0%9C2/" target="_blank">САУ-М2</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/pump_control/filters/series=%D0%A1%D0%90%D0%A3-%D0%9C7%D0%95/" target="_blank">САУ-М7Е</a></li>
<li><a href="https://uralenergotel.ru/category/automation/kip/pump_control/filters/series=%D0%A1%D0%90%D0%A3-%D0%9C%D0%9F/" target="_blank">САУ-МП</a></li>
</ul>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'приборы для управления насосами, сигнализаторы уровней',
                'meta_description' => 'приборы для управления насосами, сигнализаторы уровней',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:11',
                'updated_at' => '2019-04-25 10:01:27',
            ),
            30 =>
            array (
                'id' => 35,
                'parent_id' => 30,
                'depth' => 3,
                'name' => 'Контроллеры для систем отопления, ГВС, вентиляции',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'control',
                'body' => '<h2>Контроллеры для систем отопления, ГВС, вентиляции</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить контрольно-измерительные приборы для систем горячего водоснабжения, отопления, вентиляции и котельных для решения таких задач, как регулирование температуры в системах отоплеия, ГВС, приточной и приточно-вытяжной вентиляции с водяным или фреоновым охладителем, управление насосными группами, и других.</p>
<p>В ассортименте представлены устройства для размещения на DIN-рейке и щитового крепления с различным количетсвом входов, с аналоговыми и дискретными входами и выходами, с интерфейсами RS-485 и RS-232.</p>
<p>У нас вы можете заказать оборудование:</p>
<ul>
<li>Для систем отопления и ГВС: <a href="https://uralenergotel.ru/category/automation/kip/control/filters/series=%D0%A2%D0%A0%D0%9C32/" target="_blank">ТРМ32</a>, <a href="https://uralenergotel.ru/category/automation/kip/control/filters/series=%D0%A2%D0%A0%D0%9C232%D0%9C/" target="_blank">ТРМ 232М</a></li>
<li>Для систем вентиляции: <a href="https://uralenergotel.ru/category/automation/kip/control/filters/series=%D0%A2%D0%A0%D0%9C1033/" target="_blank">ТРМ1033</a>, <a href="https://uralenergotel.ru/category/automation/kip/control/filters/series=%D0%A2%D0%A0%D0%9C133%D0%9C/" target="_blank">ТРМ133М</a>, <a href="https://uralenergotel.ru/category/automation/kip/control/filters/series=%D0%A2%D0%A0%D0%9C33/" target="_blank">ТРМ33</a>, МР 1</li>
<li>Для управления котлами: <a href="https://uralenergotel.ru/category/automation/kip/control/filters/series=%D0%9A%D0%A2%D0%A0-121/" target="_blank">КТР-121</a></li>
</ul>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'контроллеры для систем отопления, ГВС, вентиляции',
                'meta_description' => 'контроллеры для систем отопления, ГВС, вентиляции и кондиционирования для ЖКХ и котельных',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:12',
                'updated_at' => '2019-04-25 10:01:27',
            ),
            31 =>
            array (
                'id' => 36,
                'parent_id' => 29,
                'depth' => 2,
                'name' => 'Датчики',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'sensors',
                'body' => '<h2>Датчики</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить датчики для работы с контрольно-измерительными приборами в системах

автоматического регулирования и управления технологическими процессами (АСУ ТП) в различных областях промышленности и жилищно-

коммунального хозяйства.</p>
<p>В ассортименте представлены как общепромышленные, так и взрывозащищенные и искробезопасные датчики:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/automation/sensors/temperature/" target="_blank">Датчики температуры и

термосопротивления</a></li>
<li><a href="https://uralenergotel.ru/category/automation/sensors/temperature_humidity/" target="_blank">Датчики влажности и

температуры воздуха</a></li>
<li><a href="https://uralenergotel.ru/category/automation/sensors/pressure/" target="_blank">Преобразователи давления</a></li>
<li><a href="https://uralenergotel.ru/category/automation/sensors/level/" target="_blank">Датчики уровня</a></li>
<li><a href="https://uralenergotel.ru/category/automation/sensors/gas/" target="_blank">Сигнализаторы загазованности</a></li>
</ul>
<p>производства компании <a href="https://uralenergotel.ru/brand/owen/" target="_blank">ОВЕН</a>.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'датчики температуры, влажности, сопротивления',
                'meta_description' => 'датчики температуры, влажности, сопротивления',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:12',
                'updated_at' => '2019-07-15 14:02:29',
            ),
            32 =>
            array (
                'id' => 37,
                'parent_id' => 29,
                'depth' => 2,
                'name' => 'Программируемые устройства',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'programmable_devices',
                'body' => '<h2>Программируемые устройства</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить <a href="https://uralenergotel.ru/category/automation/programmable_devices/">программируемые устройства</a> для систем автоматизации:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/relays/">Программируемые реле</a></li>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/input_output/">Модули ввода и вывода</a></li>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/operator_panel/">Панели оператора</a></li>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/plc/">Программируемые логические контроллеры</a></li>
<li><a href="https://uralenergotel.ru/category/automation/programmable_devices/spc/">Сенсорные панельные контроллеры</a></li>
</ul>
<p>для разворачивания систем управления автоматизации и диспетчеризации инженерных систем и оборудования (АДИО), систем управления микроклиматом, вентиляцией, гидрации, полива, водоснабжения, управления котлов на различных площадках - от сферы ЖКХ, торговых, спортивных и бизнес-центров, до производственных предприятий и пищевой промышленности.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'программируемые устройства',
                'meta_description' => 'программируемые устройства',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:12',
                'updated_at' => '2019-03-12 05:20:18',
            ),
            33 =>
            array (
                'id' => 38,
                'parent_id' => 37,
                'depth' => 3,
                'name' => 'Программируемые реле',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'relays',
                'body' => '<h2>Программируемые реле</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить программируемые реле (ПР) для автоматизации технологических процессов на основе релейной логики. В ассортименте представлены программируемые реле для локальных систем как дискретных, так и с поддержкой аналоговых сигалов, с интерфейсами RS-485, а также с возможностью управлять прибором с экрана.</p>
<p>Алгоритм работы программируемого реле формируется непосредственно пользователем, что делает прибор универсальным и дает возможность широко использовать его в различных областях промышленности и транспорта, сельском хозяйстве, ЖКХ.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'программируемые реле',
                'meta_description' => 'программируемые реле',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:12',
                'updated_at' => '2018-12-06 08:51:32',
            ),
            34 =>
            array (
                'id' => 39,
                'parent_id' => 37,
                'depth' => 3,
                'name' => 'Модули ввода и вывода',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'input_output',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'модули ввода и вывода для сетей RS-485, Ethernet',
                'meta_description' => 'модули ввода и вывода для сетей RS-485, Ethernet',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:12',
                'updated_at' => '2018-12-06 06:05:08',
            ),
            35 =>
            array (
                'id' => 40,
                'parent_id' => 37,
                'depth' => 3,
                'name' => 'Панели оператора',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'operator_panel',
                'body' => '<h2>Панели оператора</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить панели оператора, используемые в системах

автоматизации на предприятиях, позволяющие отображать и редактировать данные, для распределенных систем

управления в сетях RS-485 и RS-232. Панели оператора внедряются в системы управления совместно с <a

href="https://uralenergotel.ru/category/automation/programmable_devices/input_output/"

target="_blank">модулями ввода и вывода</a>, <a

href="https://uralenergotel.ru/category/automation/programmable_devices/plc/"

target="_blank">программируемыми логическими контроллерами ПЛК</a> и <a

href="https://uralenergotel.ru/category/automation/programmable_devices/relays/"

target="_blank">программируемыми реле ПР</a>.</p>
<p>В ассортименте представлены панели оператора производства российского производителя <a

href="https://uralenergotel.ru/brand/owen/" target="_blank">Овен</a> серий СМИ, ИП, ИПП и СП3xx.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'панели оператора',
                'meta_description' => 'панели оператора',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:12',
                'updated_at' => '2018-12-06 06:29:08',
            ),
            36 =>
            array (
                'id' => 41,
                'parent_id' => 37,
                'depth' => 3,
                'name' => 'Программируемые логические контроллеры',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'plc',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'программируемые логические контроллеры',
                'meta_description' => 'программируемые логические контроллеры',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:13',
                'updated_at' => '2018-12-07 08:45:36',
            ),
            37 =>
            array (
                'id' => 42,
                'parent_id' => 37,
                'depth' => 3,
                'name' => 'Сенсорные панельные контроллеры',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'spc',
                'body' => '<h2>Сенсорные панельные контроллеры</h2>
<p>Сенсорные панельные контроллеры позволяют объединить функции <a href="https://uralenergotel.ru/category/automation/programmable_devices/plc/" target="_blank">программируемого логического контроллера ПЛК</a> и <a href="https://uralenergotel.ru/category/automation/programmable_devices/operator_panel/" target="_blank">графической панели оператора</a> в одном корпусе, таким образом разработка программ визуализации и алгоритмов управления происхоит в единой среде программирования, через сенсорный экран управления.</p>
<p>В интернет-магазине Уралэнерготел вы можете купить сенсорные панельные контроллеры СПК для использования в сетях RS-485 и RS-232 в локальных, автономных и мобильных системах, российского прозиводителя <a href="https://uralenergotel.ru/brand/owen" target="_blank">Овен</a>.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'сенсорные панельные контроллеры',
                'meta_description' => 'сенсорные панельные контроллеры',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:13',
                'updated_at' => '2019-03-04 15:31:37',
            ),
            38 =>
            array (
                'id' => 43,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Релейная защита и автоматика',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'rza',
            'body' => '<h2>Релейная защита и автоматика (РЗА)</h2>
<p>В интернет-магазине вы можете купить устройства релейной защиты и автоматики для быстрого автоматического выявления и отделения

повреждённых элементов от электроэнергетической системы в аварийных ситуациях с целью обеспечения нормальной работы всей системы, и

для осуществления непрерывного контроля состояния всех элементов системы.</p>
<p>У нас вы можете заказать:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/rza/power_transformers/" target="_blank">Устройства защиты и автоматики силовых

трансформаторов</a></li>
<li><a href="https://uralenergotel.ru/category/rza/bus_protection/" target="_blank">Защиты шин и ошиновок</a></li>
<li><a href="https://uralenergotel.ru/category/rza/110kv_220kv_line_protection/" target="_blank">Основные защиты линий 110-220

кВ</a></li>
<li><a href="https://uralenergotel.ru/category/rza/backup_protection_and_control_110_220_kv/" target="_blank">Резервные защиты и

АУВ присоединений 110-220 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/rza/protection_inductive_vt_110_500_kv/" target="_blank">Защита индуктивных ТН 110-

500 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/rza/operation_block/" target="_blank">Оперативная блокировка</a></li>
<li><a href="https://uralenergotel.ru/category/rza/connections_6_35kv/" target="_blank">Защита и автоматика присоединений 6-35

кВ</a></li>
<li><a href="https://uralenergotel.ru/category/rza/emergency_automatics/" target="_blank">Противоаварийная автоматика</a></li>
<li><a href="https://uralenergotel.ru/category/rza/central_alarm/" target="_blank">Центральная сигнализация</a></li>
<li><a href="https://uralenergotel.ru/category/rza/failure_location/" target="_blank">Определение места повреждения ЛЭП 6-750

кВ</a></li>
<li><a href="https://uralenergotel.ru/category/rza/04kv/" target="_blank">Защита и автоматика вводов собственных нужд 0,4

кВ</a></li>
<li><a href="https://uralenergotel.ru/category/rza/arc_protection/" target="_blank">Дуговая защита</a></li>
<li><a href="https://uralenergotel.ru/category/rza/proverochnoe_oborudovanie/" target="_blank">Проверочное оборудование</a></li>
</ul>
<p>от ведущего российского производителя устройств релейной защиты автоматики - <a href="https://uralenergotel.ru/brand/rza/"

target="_blank">АО «РАДИУС Автоматика»</a></p>',
                'image' => '/storage/uploads/categories/rza.png',
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства релейной защиты и автоматики',
                'meta_description' => 'устройства, аппаратуру релейной защиты и автоматики РЗА',
                'sort_position' => 12,
                'created_at' => '2018-11-30 11:35:13',
                'updated_at' => '2019-07-18 09:20:09',
            ),
            39 =>
            array (
                'id' => 44,
                'parent_id' => 43,
                'depth' => 2,
                'name' => 'Защита и автоматика силовых трансформаторов',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'power_transformers',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства защиты и автоматики силовых трансформаторов',
                'meta_description' => 'устройства защиты и автоматики силовых трансформаторов',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:13',
                'updated_at' => '2018-12-03 09:32:07',
            ),
            40 =>
            array (
                'id' => 45,
                'parent_id' => 43,
                'depth' => 2,
                'name' => 'Проверочное оборудование',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 1,
                'url' => 'proverochnoe_oborudovanie',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'проверочное оборудование',
                'meta_description' => 'проверочное оборудование',
                'sort_position' => 13,
                'created_at' => '2018-11-30 11:35:13',
                'updated_at' => '2018-12-05 10:11:53',
            ),
            41 =>
            array (
                'id' => 46,
                'parent_id' => 45,
                'depth' => 3,
                'name' => 'Поверочное оборудование',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'poverka',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'переносные поверочные устройства УПП Энергоприбор',
                'meta_description' => 'переносные поверочные устройства УПП Энергоприбор',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:14',
                'updated_at' => '2018-12-03 09:40:00',
            ),
            42 =>
            array (
                'id' => 47,
                'parent_id' => 45,
                'depth' => 3,
                'name' => 'Устройства проверки характеристик автоматических выключателей',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'avtomaticheskie_vyklyuchateli',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства проверки характеристик автоматических выключателей',
                'meta_description' => 'устройства проверки характеристик автоматических выключателей',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:14',
                'updated_at' => '2018-12-05 10:11:53',
            ),
            43 =>
            array (
                'id' => 48,
                'parent_id' => 45,
                'depth' => 3,
                'name' => 'Испытательное оборудование',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'ispytatelnoe_oborudovanie',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'испытательное оборудование',
                'meta_description' => 'испытательное оборудование',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:14',
                'updated_at' => '2018-12-05 10:11:53',
            ),
            44 =>
            array (
                'id' => 49,
                'parent_id' => 45,
                'depth' => 3,
                'name' => 'Приборы для поиска замыкания на землю',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'poisk_zamykania_na_zemlyu',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'приборы для поиска замыкания на землю',
                'meta_description' => 'приборы для поиска замыкания на землю',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:14',
                'updated_at' => '2018-12-05 10:11:53',
            ),
            45 =>
            array (
                'id' => 50,
                'parent_id' => 45,
                'depth' => 3,
                'name' => 'Устройства для проверки релейной защиты',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'relay',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства для проверки релейной защиты',
                'meta_description' => 'устройства для проверки релейной защиты',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:14',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            46 =>
            array (
                'id' => 51,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Оборудование электропитания',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'electric',
                'body' => NULL,
                'image' => '/storage/uploads/categories/electric.png',
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'оборудование электропитания',
                'meta_description' => 'оборудование электропитания',
                'sort_position' => 7,
                'created_at' => '2018-11-30 11:35:15',
                'updated_at' => '2019-07-17 13:38:26',
            ),
            47 =>
            array (
                'id' => 52,
                'parent_id' => 166,
                'depth' => 2,
                'name' => 'Разветвители интерфейса',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'interface_splitter',
                'body' => '<h2>Разветвители интерфейса RS-482/422</h2>
В интернет-магазине Уралэнерготел вы можете заказать <strong>разветвители интерфейса RS-482/422</strong> с высокой степенью защиты IP55 и IP65, которые можно устанавливать как на стену, так и на din-рейку с различным количеством точек подключения: 3 (ПР-3, РИ-3Л, РП-3, SI 4060), 4 (ПР-4, КРП-4, EX4TB, РИ-4Л-Г) и 6 (ПР-6, РИ-6, РК-3) из металла и пластика производства компаний <a href="https://uralenergotel.ru/brand/sapfir-st/" target="_blank">Сапфир СТ</a> и <a href="https://uralenergotel.ru/brand/ntk-priborenergo/" target="_blank">НТК Приборэнерго</a>.
<p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'разветвители интерфейса RS-485/422',
                'meta_description' => 'разветвители интерфейса RS-485/422',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:15',
                'updated_at' => '2019-07-15 15:38:05',
            ),
            48 =>
            array (
                'id' => 53,
                'parent_id' => 51,
                'depth' => 2,
                'name' => 'Грозозащита и УЗИП',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'surge_guards',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства защиты от перенапряжения',
                'meta_description' => 'устройства защиты от перенапряжения',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:15',
                'updated_at' => '2019-07-18 09:20:09',
            ),
            49 =>
            array (
                'id' => 54,
                'parent_id' => 23,
                'depth' => 2,
                'name' => 'Антенны и датчики',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'antennas_sensors',
                'body' => '<h2>Антенны и датчики</h2>
<p>В интернет-магазине Уралэнерготел представлены антенны и датчики для применения в системах измерения и автоматизированных системах мониторинга переходных режимов (СМПР), автоматизированных системах технологического управления электрических сетей и электростанций, АСУ ТП и АИИС подстанций, а также для реализации режимной и противоаварийной автоматики энергосистем.</p>
<p>GSM, GPS и ГЛОНАСС антенны и датчики температуры, давления и влажности используются вместе с <a href="https://uralenergotel.ru/category/telemechanics/time_sync/" target="_blank">блоками синхронизации времени</a>, <a href="https://uralenergotel.ru/category/telemechanics/input_output_modules/" target="_blank">модулями ввода и вывода</a> и <a href="https://uralenergotel.ru/category/telemechanics/rtu/" target="_blank">устройствами сбора данных</a>.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'антенны и датчики для электроизмерительных приборов и счётчиков',
                'meta_description' => 'антенны и датчики для электроизмерительных приборов и счётчиков',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:15',
                'updated_at' => '2019-07-15 15:34:27',
            ),
            50 =>
            array (
                'id' => 56,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'Коммуникационные модули для измерительных приборов',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'communication_modules',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'коммуникационные модули для измерительных приборов',
                'meta_description' => 'коммуникационные модули для измерительных приборов',
                'sort_position' => 8,
                'created_at' => '2018-11-30 11:35:15',
                'updated_at' => '2019-07-15 15:34:27',
            ),
            51 =>
            array (
                'id' => 57,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Высоковольтное оборудование',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'oborudovanie-vl',
                'body' => '<h2>Высоковольтное оборудование</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить высковольтное оборудование для размещения на подстанциях, воздушных линиях (ВЛ), ОРУ, ЗРУ и КРУ.</p>
<p>В ассортименте представлены:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/oborudovanie-vl/surge_protector/">ограничители перенапряжений ОПН</a></li>
<li><a href="https://uralenergotel.ru/category/oborudovanie-vl/insulators/">изоляторы и линейная арматура</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/">конденсаторы связи</a></li>
<li><a href="https://uralenergotel.ru/category/oborudovanie-vl/power_capacitors/">силовые конденсаторы</a></li>
</ul>
<p>производства заводов <a href="https://uralenergotel.ru/brand/tavrida/">Таврида Электрик</a>, <a href="https://uralenergotel.ru/brand/ukkz/">УККЗ</a> и <a href="https://uralenergotel.ru/brand/izolyator/">НПО Изолятор</a>.</p>',
                'image' => '/storage/uploads/categories/oborudovanie-vl_compressed.png',
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'высоковольтное оборудование, оборудование для ВЛ',
                'meta_description' => 'высоковольтное оборудование, оборудование для воздушных линий',
                'sort_position' => 8,
                'created_at' => '2018-11-30 11:35:16',
                'updated_at' => '2019-07-15 14:02:29',
            ),
            52 =>
            array (
                'id' => 59,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Оборудование ВЧ-связи',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'high_frequency',
                'body' => '<h2>Оборудование ВЧ-связи
</h2>
<p>В интернет-магазине Уралэнерготел вы можете <a href="https://uralenergotel.ru/category/high_frequency/">купить аппаратуру ВЧ (высокочастотной) обработки</a> для организации комплекса оборудования связи по линиям электропередачи (ЛЭП) для нужд электростанций и подстанций: для организации голосовой связи (телефонная и диспетчерская связь), передачи данных (АСУ ТП, телемеханика, АИИС КУЭ), организации работы систем РЗА и ПА (передача дискретных команд ускорения и блокировки защит, передача токового сигнала ДФЗЛ), определения места повреждения высоковольтных линий, организации работы автоматических систем.</p>
<p><strong>В ассортименте представлено оборудование ВЧ-связи</strong>:
<ul>
<li><a href="https://uralenergotel.ru/category/high_frequency/line_trap/">Высокочастотные заградители ВЗ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/fp/">Фильтры присоединения ФП (ФПЭ)</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/separatingfilter/">Разделительные фильтры РФ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/shon/">Шкафы отбора напряжений ШОН</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/">Конденсаторы связи</a></li>
</ul>
производитей оборудования ВЧ-связи по высоковольным линиям (ВЛ) <a href="https://uralenergotel.ru/brand/uznteh/">УЗНТех</a>, <a href="https://uralenergotel.ru/brand/kvar/">СКЗ "КВАР"</a> и <a href="https://uralenergotel.ru/brand/ukkz/">УККЗ</a>.</p>',
                'image' => '/storage/uploads/categories/high_frequency.png',
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'оборудование ВЧ-связи',
                'meta_description' => 'оборудование высокочастотной связи, ВЧ-связи',
                'sort_position' => 9,
                'created_at' => '2018-11-30 11:35:16',
                'updated_at' => '2019-07-15 14:02:29',
            ),
            53 =>
            array (
                'id' => 60,
                'parent_id' => 59,
                'depth' => 2,
                'name' => 'Высокочастотные заградители ВЗ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'line_trap',
                'body' => '<h2>Высокочастотные заградители ВЗ</h2>
<p>В интернет-магазине Уралэнерготел вы можете <a href="https://uralenergotel.ru/category/high_frequency/line_trap/">купить ВЧ-заградители</a> для монтажа на портал, опоры ЛЭП или пьедестал для различных классов линий электропередачи (35, 110, 220, 330, 500, 700 кВ), с различной индуктивностью и для любого значения номинального тока климатического исполнения УХЛ1.</p>
<p>В ассортименте интернет-магазина Уралэнерготел представлены ВЧ-заградители производства компании <a href="https://uralenergotel.ru/brand/uznteh/" target="_blank">УЗНТех</a>, аттестованные ПАО "Россети".</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'высокочастотные заградители ВЗ',
                'meta_description' => 'высокочастотные ВЧ заградители ВЗ 35, 110, 220, 330, 500, 750 кв',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:16',
                'updated_at' => '2018-12-03 09:32:10',
            ),
            54 =>
            array (
                'id' => 61,
                'parent_id' => 59,
                'depth' => 2,
                'name' => 'Разделительные фильтры РФ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'separatingfilter',
            'body' => '<h2>Разделительне фильтры (РФ)
</h2>
<p><strong>Разделительные фильтры</strong> предназначены для защиты приёмника аппаратуры противоаварийной автоматики или аппаратуры защит от прямого воздействия мощного сигнала передатчика аппаратуры связи, в случае их подключения в один высокочастотный тракт с использованием одно фильтра присоединения.</p>
<p>Разделительные фильтры должны включаться в тракт каждого канала при параллельном подключении аппаратуры специализированных каналов ВЧ-защиты и специализированных каналов РЗ и ПА, а также в тракт аппаратуры связи при параллельном подключении аппаратуры специализированных каналов ВЧ-защиты или специализированных каналов РЗ и ПА.</p>
<p>В интернет-магазине Уралэнерготел вы можете <a href="https://uralenergotel.ru/brand/uznteh/" target="_blank">купить разделительные фильтры производства компании УЗНТех</a>.</p>',
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'разделительные фильтры РФ УЗНТех, оборудование ВЧ-обратоки',
                'meta_description' => 'разделительные фильтры РФ УЗНТех, оборудование ВЧ-обратоки',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:17',
                'updated_at' => '2018-12-11 08:03:42',
            ),
            55 =>
            array (
                'id' => 62,
                'parent_id' => 59,
                'depth' => 2,
                'name' => 'Фильтры присоединения ФП',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'fp',
                'body' => '<h2>Фильтры присоединения ФП/ФПЭ</h2>
<p><strong>Фильтры присоединения</strong> совместно с <strong>конденсаторами связи</strong> предназначены для присоединения аппаратуры передачи информации (связь, телемеханика, релейная защита, противоаварийная автоматика) к высоковольтным линиям электропередач. Фильтры присоединения настраиваются под желаемый диапазон частоты полосы пропускания, в зависимости от класса линии электропередач, а также в зависимости от ёмкости (в пФ) конденсатора связи.</p>
<p>В интернет-магазине Уралэнерготел вы можете <a href="https://uralenergotel.ru/brand/uznteh/" target="_blank">купить фильтры присоединения от производителя УЗНТех</a>.</p>',
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'фильтры присоединения ФПЭ УЗНТех, оборудование ВЧ-обратоки',
                'meta_description' => 'фильтры присоединения ФПЭ УЗНТех, оборудование ВЧ-обратоки',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:17',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            56 =>
            array (
                'id' => 63,
                'parent_id' => 59,
                'depth' => 2,
                'name' => 'Шкафы отбора напряжения ШОН',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'shon',
            'body' => '<h2>Шкафы отбора напряжения (ШОН)</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить шкафы ШОН для отбора эквивалентного фазовому напряжения от конденсаторов

связи на линиях электропередачи с номинальным напряжением от 35 до 750 кВ для питания цепей, приборов и аппаратуры защиты,

автоматики, измерения и синхронизации, подключаемых к конденсаторам.</p>
<p>В ассортименте представлены шкафы отбора напряжения для различного номинального напряжения линии электропередачи, как для

фиксированного значения тока, так и с возможностью ступенчатой регулировки в пределах 5% или 10% от номинала:</p>
<ul>
<li>ШОН 301С</li>
<li>ШОН 302С</li>
<li>ШОН 303П</li>
<li>ШОН 304П</li>
<li>ШОН 305П</li>
<li>ШОН-311 Б</li>
<li>ШОН-312 Б</li>
<li>ШОН-313 Б</li>
<li>ШОН-314 Б</li>
</ul>
<p>российского производителя оборудования ВЧ-обработки <a href="https://uralenergotel.ru/brand/uznteh/"

target="_blank">УЗНТех</a>.</p>',
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'шкафы отбора напряжения ШОН',
                'meta_description' => 'шкафы отбора напряжения ШОН',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:17',
                'updated_at' => '2018-12-20 08:42:38',
            ),
            57 =>
            array (
                'id' => 64,
                'parent_id' => 59,
                'depth' => 2,
                'name' => 'Конденсаторы связи',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'coupling_capacitors',
                'body' => '<h2>Конденсаторы связи</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить конденсаторы связи фарфоровые и полимерные различной ёмкости в модификациях СМ, СМВ, СМП, СМПВ, СМА, СМАВ, СМАП, СМАПВ, а также колонки конденсаторов связи КСА - с изолирующей подставкой, выводом, с различными категориями по внешней изоляции, во взрывозащищенном исполнении и без взрывозащиты, для линий передач любого класса в различных климатических исполнениях.</p>
<p>В ассортименте представлены:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/35kv/">Конденсаторы связи для ЛЭП 35 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/110kv/">Конденсаторы связи для ЛЭП 110 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/150kv/">Конденсаторы связи для ЛЭП 150 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/220kv/">Конденсаторы связи для ЛЭП 220 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/330kv/">Конденсаторы связи для ЛЭП 330 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/500kv/">Конденсаторы связи для ЛЭП 500 кВ</a></li>
<li><a href="https://uralenergotel.ru/category/high_frequency/coupling_capacitors/insulation/">Изолирующие подставки</a></li>
</ul>
<p>производства <a href="https://uralenergotel.ru/brand/kvar/">Серпуховского конденсаторного завода «КВАР»</a> и <a href="https://uralenergotel.ru/brand/ukkz/">Усть-Каменогорского Конденсаторного Завода</a></p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'конденсаторы связи',
                'meta_description' => 'конденсаторы связи для линий 35, 110, 150, 220, 330, 500, 750 кв',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:17',
                'updated_at' => '2019-04-03 12:09:11',
            ),
            58 =>
            array (
                'id' => 65,
                'parent_id' => 64,
                'depth' => 3,
                'name' => 'Конденсаторы связи для ЛЭП 35 кВ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => '35kv',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'конденсаторы связи для ЛЭП напряжением 35 кВ',
                'meta_description' => 'конденсаторы связи для ЛЭП напряжением 35 кВ',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:18',
                'updated_at' => '2018-11-30 14:29:40',
            ),
            59 =>
            array (
                'id' => 66,
                'parent_id' => 64,
                'depth' => 3,
                'name' => 'Конденсаторы связи для ЛЭП 110 кВ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => '110kv',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'конденсаторы связи для ЛЭП напряжением 110 кВ',
                'meta_description' => 'конденсаторы связи для ЛЭП напряжением 110 кВ',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:18',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            60 =>
            array (
                'id' => 67,
                'parent_id' => 64,
                'depth' => 3,
                'name' => 'Конденсаторы связи для ЛЭП 150 кВ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => '150kv',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'конденсаторы связи для ЛЭП напряжением 150 кВ',
                'meta_description' => 'конденсаторы связи для ЛЭП напряжением 150 кВ',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:18',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            61 =>
            array (
                'id' => 68,
                'parent_id' => 64,
                'depth' => 3,
                'name' => 'Конденсаторы связи для ЛЭП 220 кВ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => '220kv',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'конденсаторы связи для ЛЭП напряжением 220 кВ',
                'meta_description' => 'конденсаторы связи для ЛЭП напряжением 220 кВ',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:18',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            62 =>
            array (
                'id' => 69,
                'parent_id' => 64,
                'depth' => 3,
                'name' => 'Конденсаторы связи для ЛЭП 330 кВ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => '330kv',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'конденсаторы связи для ЛЭП напряжением 330 кВ',
                'meta_description' => 'конденсаторы связи для ЛЭП напряжением 330 кВ',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:18',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            63 =>
            array (
                'id' => 70,
                'parent_id' => 64,
                'depth' => 3,
                'name' => 'Конденсаторы связи для ЛЭП 500 кВ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => '500kv',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'конденсаторы связи для ЛЭП напряжением 500 кВ',
                'meta_description' => 'конденсаторы связи для ЛЭП напряжением 500 кВ',
                'sort_position' => 6,
                'created_at' => '2018-11-30 11:35:19',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            64 =>
            array (
                'id' => 71,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Приводная техника',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'frequency_converter',
                'body' => '<h2>Приводная техника</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить преобразователи частоты и устройства плавного пуска, а также дополнительное к ним оборудование и аксессуары. В ассортименте представлены:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/frequency_converter/preobrazovatel_chastoty/">частотные преобразователи</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/accessories_pchv/">панели/пульты оператора, монтажные комплекты, модули расширения, кабели, шлейфы, тормозные модули и резисторы</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/soft_starters/">устройства плавного пуска</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/filter_reactors/">дроссели, реакторы и фильтры: РЧ/ЭМИ/ЭМС, входные и выходные</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/recuperators/">рекуператоры электроэнергии</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/encoders/">энкодеры</a></li>
<li><a href="https://uralenergotel.ru/category/frequency_converter/servo/">сервоприводы</a></li>
</ul>',
                'image' => '/storage/uploads/categories/preobrazovateli_chastoty.png',
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'приводную технику',
                'meta_description' => 'приводную технику, оборудование для двигателей',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:19',
                'updated_at' => '2019-07-19 15:54:41',
            ),
            65 =>
            array (
                'id' => 72,
                'parent_id' => 71,
                'depth' => 2,
                'name' => 'Преобразователи частоты',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'preobrazovatel_chastoty',
                'body' => '<h2>Преобразователи частоты</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить частотные преобразователи различной мощности (кВт) для контроля скорости двигателей бытовых и промышленных установок: насосов, кондиционеров и вентиляторов, системах отопления, конвейеров, кранов, компрессоров, дробилок, мельниц, сепараторов, центрифуг, экструдеров, элеваторов и другого оборудования.</p>
<p>В ассортименте представлены преобразователи частоты для управления частотой вращения асинхронных двигателей в составе приводов с мощностью от 0,04 до 630 кВт с возможностью подключения энкодеров, фильтров, тормозным транзистором, с такими опциями, как "спящий" и пожарный режим, контролем расхода и контролем натяжения ремня.</p>
<p>У нас вы можете купить преобразователи частоты ведущих производителей: <a href="https://uralenergotel.ru/brand/delta_electronics/">Delta Electronics</a>, <a href="https://uralenergotel.ru/brand/vesper/">Веспер</a> и <a href="https://uralenergotel.ru/brand/owen/">Овен</a>.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'преобразователи частоты, частотные преобразователи, частотники',
                'meta_description' => 'преобразователи частоты, частотные преобразователи, частотники, ПЧВ',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:19',
                'updated_at' => '2019-04-03 10:37:28',
            ),
            66 =>
            array (
                'id' => 73,
                'parent_id' => 71,
                'depth' => 2,
                'name' => 'Аксессуары для преобразователей частоты',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 1,
                'url' => 'accessories_pchv',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'аксессуары для преобразователей частоты ПЧВ',
                'meta_description' => 'аксессуары для преобразователей частоты ПЧВ',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:19',
                'updated_at' => '2019-04-25 10:01:27',
            ),
            67 =>
            array (
                'id' => 76,
                'parent_id' => 71,
                'depth' => 2,
                'name' => 'Устройства плавного пуска',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'soft_starters',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства плавного пуска, УПП',
                'meta_description' => 'устройства плавного пуска, УПП',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:19',
                'updated_at' => '2019-04-25 10:01:27',
            ),
            68 =>
            array (
                'id' => 79,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Низковольтные комплектные устройства',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'nizkovoltnye-ustroystva',
                'body' => '<h2>Низковольтные комплектные устройства</h2>

<p>В <strong>интернет-магазине Уралэнерготел</strong> вы можете купить низковольтные комплектные устройства (НКУ) собственного

производства Уралэнерготел для распределения электрической энергии, управления и защиты оборудования от перегрузок и коротких

замыканий.
</p>

<p><strong>В ассортименте представлены низковольтные комплектные устройства</strong>:
</p>

<ul>


<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-runn/" target="_blank">Шкафы распределительных

устройств низкого напряжения РУНН</a></li>

<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-zazhimov-vyklyuchatelya_shzv/" target="_blank">Шкафы

зажимов выключателя ШЗВ</a></li>


<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/klemmnye-yashchiki-zazhimov_yaz/" target="_blank">Ящики

зажимов (клеммные шкафы) ЯЗ</a></li>


<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-obogreva-vyklyuchatelei-shov/" target="_blank">Шкафы

оборгева выключателей (ШОВ)</a></li>

<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-zazhimov-tn_shn/" target="_blank">Шкафы зажимов

трансформаторов напряжения (ШЗН)</a></li>

<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/avr/" target="_blank">Блоки автоматического ввода резерва

АВР 19\'\' в модульном исполнении</a></li>
<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-raspredelitelnye-shrn/" target="_blank">Шкафы

распределительные ШРН</a></li>
<li><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-ip-videonablyudeniya/">Шкафы IP-

видеонаблюдения</a></li>
</ul>
<p>При сборке изделий мы используем отработанные технологии, применяем современные материалы и оборудование, включая установки для

прогрузки автоматов, контроля изоляции и качества заземления и другое оборудования контроля качества. Также нас отличает наличие

собственного конструкторского бюро.</p>
<p>Также у нас вы можете <strong>заказать сборку шкафов под свой проект по собственной спецификации</strong>. Мы собираем

шкафы:</p>
<ul>
<li><a href="https://uralenergotel.ru/shkafy-individualnoi-sborki/tm-i-askue/" target="_blank">телемеханики ТМ и автоматизированных

систем учета электроэнергии АСКУЭ и АСТУЭ</a></li>
<li><a href="https://uralenergotel.ru/shkafy-individualnoi-sborki/shkafy-svyazi/" target="_blank">шкафы связи, серверные

шкафы</a></li>
<li><a href="https://uralenergotel.ru/shkafy-individualnoi-sborki/ibp/" target="_blank">гарантированного питания и ИБП</a></li>
<li>видеонаблюдения, ОПС</li>
<li><a href="https://uralenergotel.ru/shkafy-individualnoi-sborki/nku/" target="_blank">шкафы и ящики собственных нужд, силовые,

освещения, учёта и другие низковольтные комплектные устройства</a></li>
<li>шкафы и пульты автоматики</li>
</ul>
<p>для предприятий энергетики, чёрной и цветной металлургии, нефтегазовой и нефтехимической промышленности, горно-обогатительных

комплексов и фабрик, лабораторий и медицинских учреждений, а также в сферах автоматизации инженерных систем, систем безопасности

зданий и сферы ЖКХ.</p>
<p>Наши инженеры занимаются как разработкой конструкторской документации, так и сборкой более 10 лет. Наши сотрудники обладают

высокой квалификацией. Шкафы нашей сборки стоят на различных объектах энергетики, нефтегазовой и атомной отраслей и на различных

промышленных предприятиях.</p>',
                'image' => '/storage/uploads/categories/low_voltage_equipment.png',
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'низковольтные комплектные устройства',
                'meta_description' => 'низковольтные комплектные устройства',
                'sort_position' => 10,
                'created_at' => '2018-11-30 11:35:19',
                'updated_at' => '2019-07-15 14:02:29',
            ),
            69 =>
            array (
                'id' => 80,
                'parent_id' => 79,
                'depth' => 2,
            'name' => 'Шкафы зажимов выключателя (ШЗВ)',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'shkafy-zazhimov-vyklyuchatelya_shzv',
            'body' => '<h2>Шкафы зажимов выключателей (ШЗВ)</h2>

<p>Шкаф промежуточных зажимов серии ШЗВ предназначены для организации электрических соединений вторичных цепей электростанций и подстанций. В зависимости от количества используемых соединений в ШЗВ может устанавливаться различное количество промежуточных и измерительных клемм.
</p>

<p>В ассортименте интернет-магазина Уралэнерготел представлены <a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-zazhimov-vyklyuchatelya_shzv/" target="_blank">шкафы зажимов выключателей (ШЗВ)</a> собственного производства Уралэнерготел с различным колличеством клемм:
</p>

<ul>

<li>с клеммами Klemsan</li>


<li>с клеммами российского производства</li>

</ul>

<p><a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/klemmnye-yashchiki-zazhimov_yaz/" target="_blank">а также ящики зажимов (клеммные шкафы) ЯЗ</a>
</p>

<ul>


<li>с клеммами Klemsan</li>


<li>с клеммами российского производства</li>

</ul>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
            'meta_title' => 'шкафы зажимов выключателя (ШЗВ)',
            'meta_description' => 'шкафы зажимов выключателя (ШЗВ) клеммные, промежуточных зажимов',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:20',
                'updated_at' => '2019-07-18 09:20:09',
            ),
            70 =>
            array (
                'id' => 81,
                'parent_id' => 79,
                'depth' => 2,
            'name' => 'Ящики зажимов (ЯЗ)',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'klemmnye-yashchiki-zazhimov_yaz',
            'body' => '<h2>Ящики зажимов (ЯЗ)</h2>

<p>Ящики зажимов (клеммные шкафы) ЯЗ или ЯЗМ предназначены для организации электрических соединений вторичных цепей электростанций и
подстанций. В зависимости от количества используемых соединений в ЯЗ может устанавливаться различное количество промежуточных и
измерительных клемм.
</p>

<p>В ассортименте интернет-магазина Уралэнерготел представлены <a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/klemmnye-yashchiki-zazhimov_yaz/" target="_blank">ящики зажимов (ЯЗ)</a> собственного производства
Уралэнерготел с различным колличеством клемм:
</p>
<ul>


<li>с
клеммами Klemsan
</li>


<li>с клеммами российского производства</li>

</ul>

<p>а также <a href="https://uralenergotel.ru/category/nizkovoltnye-ustroystva/shkafy-zazhimov-vyklyuchatelya_shzv/" target="_blank">шкафы зажимов выключателей ШЗВ</a>
</p>

<ul>


<li>с
клеммами Klemsan
</li>

<li>с клеммами российского производства</li>

</ul>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
            'meta_title' => 'ящики зажимов клеммные (ЯЗ)',
            'meta_description' => 'ящики зажимов (ЯЗ), клеммные шкафы, промежуточных зажимов',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:20',
                'updated_at' => '2019-07-18 09:20:09',
            ),
            71 =>
            array (
                'id' => 82,
                'parent_id' => 79,
                'depth' => 2,
            'name' => 'Шкафы зажимов трансформатора напряжения (ШЗН)',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'shkafy-zazhimov-tn_shn',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
            'meta_title' => 'шкафы зажимов трансформатора напряжения ТН (ШЗН)',
            'meta_description' => 'шкафы зажимов трансформатора напряжения ТН (ШЗН)',
                'sort_position' => 8,
                'created_at' => '2018-11-30 11:35:20',
                'updated_at' => '2019-07-18 09:20:09',
            ),
            72 =>
            array (
                'id' => 83,
                'parent_id' => 79,
                'depth' => 2,
                'name' => 'Шкафы распределительного устройства низкого напряжения РУНН',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'shkafy-runn',
                'body' => '<h2>Шкафы распределительного устройства низкого напряжения РУНН</h2>
<p>Шкафы распределительного устройства низкого напряжения РУНН предназначены для распределения напряжения 0.4 кв и потребителей по низкой стороне силового трансформатора, а также для защиты от перегрузок и токов короткого замыкания, замыкания на землю в трёхфазных электрических сетях с глухозаземлённой нейтралью напряжением 380/220В переменного тока частотой 50 Гц.</p>
<p>В интернет-магазине Уралэнерготел представлены шкафы (щиты) РУНН 160 кВА и 250 кВА собственного производства <a href="https://uralenergotel.ru/brand/uralenergotel/" target="_blank">Уралэнерготел</a>.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'шкафы РУНН',
                'meta_description' => 'шкафы распределительного устройства низкого напряжения РУНН',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:20',
                'updated_at' => '2019-07-18 09:20:09',
            ),
            73 =>
            array (
                'id' => 84,
                'parent_id' => 79,
                'depth' => 2,
                'name' => 'Шкафы видеонаблюдения ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'shkafy-ip-videonablyudeniya',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'шкафы IP-видеонаблюдения',
                'meta_description' => 'шкафы IP-видеонаблюдения',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:20',
                'updated_at' => '2019-07-18 09:20:09',
            ),
            74 =>
            array (
                'id' => 85,
                'parent_id' => 79,
                'depth' => 2,
            'name' => 'Шкафы обогрева выключателей (ШОВ)',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'shkafy-obogreva-vyklyuchatelei-shov',
            'body' => '<h2>Шкафы обогрева выключателей (ШОВ)</h2>
<p>Шкафы (ящики) обогрева выключателей ШОВ (ЯОВМ) предназначены для питания обогрева выключателей и их приводов с мощностью нагревателей до 10кВт на фазу для шкафов ШОВ-1 и ШОВ-2 при одновременном выключении баков и приводов и выше 10 кВт на фазу для шкафов ШОВ-3 и ШОВ-4.</p>
<p>В ассортименте интернет-магазина представлены шкафы ШОВ-1 и ШОВ-2 собственного производства компании <a href="https://uralenergotel.ru/brand/uralenergotel/" target="_blank">Уралэнерготел</a>.</p>',
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'шкафы обогрева выключателей ШОВ',
                'meta_description' => 'шкафы обогрева выключателей ШОВ, ящики ЯОВМ',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:20',
                'updated_at' => '2019-07-18 09:20:09',
            ),
            75 =>
            array (
                'id' => 86,
                'parent_id' => 79,
                'depth' => 2,
                'name' => 'Шкафы распределительные ШРН',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'shkafy-raspredelitelnye-shrn',
                'body' => '<h2>Шкафы кроссовые телефонные</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить навесные телефонные шкафы с медным кроссом под различное количество плинтов - от 10 до 60 (от 100 до 600 пар) для коммутации телефонных линий.</p>
<p>В ассортименте представлены кроссовые настенные распределительные шкафы ШРН <a href="https://uralenergotel.ru/brand/uralenergotel/" target="_blank">собственного производства Уралэнерготел</a> для уличного размещения (IP66/65), а также для установки в помещении (IP31) как с плинтами, так и без плинтов в комплекте.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'шкафы распределительные ШРН',
                'meta_description' => 'шкафы распределительные ШРН промежуточного распределения уличного и внутреннего размещения',
                'sort_position' => 6,
                'created_at' => '2018-11-30 11:35:21',
                'updated_at' => '2019-07-18 09:20:09',
            ),
            76 =>
            array (
                'id' => 87,
                'parent_id' => 51,
                'depth' => 2,
                'name' => 'Блоки АВР 19\'\' ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'avr',
                'body' => '<h2>Модульные блоки АВР для шкафов и стоек 19\'\'</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить модульные блоки автоматического ввода резерва для размещения в стойке или шкафу стандарта 19 дюймов для обеспечения бесперебойного питания оборудования. У нас вы можете заказать блоки АВР на 16А, 20А, 25А, 40А и 50А с приоритетом первого ввода однофазные (схема 1), однофазные с коммутацией нейтрали (схема 2), трёхфазные (схема 3), а также АВР 19\'\' с возможностью выбора приоритетного ввода (схема 4) собственного производства <a href="https://uralenergotel.ru/brand/uralenergotel" target="_blank">Уралэнерготел</a></p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'блоки автоматического ввода резерва АВР модульные для шкафов и стоек 19 дюймов',
                'meta_description' => 'блоки автоматического ввода резерва АВР модульные для шкафов и стоек 19 дюймов',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:21',
                'updated_at' => '2019-07-18 09:15:50',
            ),
            77 =>
            array (
                'id' => 93,
                'parent_id' => 94,
                'depth' => 2,
                'name' => 'Термошкафы',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'termoshkafy',
                'body' => '<h2>Термошкафы</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить уличные всепогодные настенные термошкафы собственного производства для размещения промежуточного активного оборудования, такого как оборудование связи (телекоммуникационное), систем видеонаблюдения, промежуточных усилителей видеосигнала, мини АТС, оборудование локальной сети, оптических медиаконвертеров, оборудование контроля доступа и других видов оборудования.
</p>
<p>Все термошкафы в интернет-магазине Уралэнерготел имеют высокую степень защиты от IP54 до IP65-66, укомплектованы биметаллическими и <a href="https://uralenergotel.ru/category/cabinets19/accessories/thermostat/" target="_blank">цифровыми термостатами</a>, монтажными панелями или направляющими 19\'\', обогревателями и, опционально, вентиляционными модулями. В любую погоду при падении температуры ниже программно указанного порога оборудование отключится автоматически, что позволит обеспечить его сохранность.</p>
<p>В ассортименте представлены:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/termoshkafy/heating/">термошкафы с обогревом</a></li>
<li><a href="https://uralenergotel.ru/category/termoshkafy/ventilation/">термошкафы с обогревом и вентиляцией</a></li>
<li><a href="https://uralenergotel.ru/category/termoshkafy/accessories/">аксессуары для термошкафов: крепление настенное и для опор, козырьки, постаменты для напольного использования настенных шкафов</a></li>
</ul>
<p>производства компаний <a href="https://uralenergotel.ru/brand/cmo/">ЦМО</a>, <a href="https://uralenergotel.ru/brand/tahion/">Тахион</a> и собственного производства <a href="https://uralenergotel.ru/brand/uralenergotel/">Уралэнерготел</a>.</p>',
                'image' => '/storage/uploads/categories/thermoshkafy_compressed.png',
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'термошкафы тш для оборудования связи уличные',
                'meta_description' => 'термошкафы тш для оборудования связи уличные всепогодные с монтажной панелью и направляющими 19 дюймов',
                'sort_position' => 7,
                'created_at' => '2019-05-14 12:14:03',
                'updated_at' => '2019-07-18 09:20:09',
            ),
            78 =>
            array (
                'id' => 94,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Шкафы и стойки',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'cabinets19',
                'body' => '<h2>Шкафы, стойки и кронштейны 19\'\' дюймов</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить монтажные шкафы, стойки и кронштейны стандарта 19 дюймов для размещения телекоммуникационного, сетевого, серверного и электротехнического оборудования различной высоты в юнитах (U).
</p>
<p><strong>В ассортименте представлены:</strong>
</p>
<ul>
<li><a href="https://uralenergotel.ru/category/cabinets19/freestanding/" target="_blank">Напольные телекоммуникационные, серверные и электротехнические шкафы 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/wall_mounting/" target="_blank">Настенные шкафы 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/outdoor/" target="_blank">Всепогодные уличные шкафы 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/cabinets19/racks/" target="_blank">Стойки 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/accessories19/brackets/" target="_blank">Кронштейны 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/accessories19/" target="_blank">Аксессуары 19\'\'</a></li>
</ul>
<p>и другие 19-дюймовые шкафы производства компаний <a href="https://uralenergotel.ru/brand/cmo/" target="_blank">ЦМО</a> и <a href="https://uralenergotel.ru/brand/lande/" target="_blank">Lande</a> - официального партнёра компании Уралэнерготел.
</p>
<p>Вы можете выбрать измерительные приборы под любые ваши потребности с любой степенью защиты от IP20 до IP55, для размещения внутри помещений и уличного, антивандальные, с различной сейсмостойкостью и ударопрочностью.
</p>',
                'image' => '/storage/uploads/categories/cabinets19.png',
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'шкафы 19\'\' телекоммуникационные, сетевые, электротехнические, серверные стойки',
                'meta_description' => 'шкафы 19\'\' напольные, настенные телекоммуникационные, сетевые, электротехнические, серверные стойки, кронштейны',
                'sort_position' => 11,
                'created_at' => '2018-11-30 11:35:22',
                'updated_at' => '2019-07-18 09:20:09',
            ),
            79 =>
            array (
                'id' => 95,
                'parent_id' => 94,
                'depth' => 2,
                'name' => 'Настенные шкафы 19\'\'',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'wall_mounting',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'настенные шкафы 19\'\' дюймов настенные телекоммуникационные, сетевые',
                'meta_description' => 'настенные шкафы 19\'\' дюймовые телекоммуникационные, сетевые, серверные, электротехнические',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:22',
                'updated_at' => '2018-12-10 11:25:02',
            ),
            80 =>
            array (
                'id' => 96,
                'parent_id' => 94,
                'depth' => 2,
                'name' => 'Напольные шкафы 19\'\'',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'freestanding',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'напольные шкафы 19\'\' дюймов телекоммуникационные, серверные, электротехнические',
                'meta_description' => 'напольные 19-дюймовые шкафы 19\'\' дюймов телекоммуникационные, серверные, электротехнические',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:22',
                'updated_at' => '2018-12-10 11:23:07',
            ),
            81 =>
            array (
                'id' => 97,
                'parent_id' => 94,
                'depth' => 2,
                'name' => 'Стойки для оборудования 19\'\'',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'racks',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'стойки для оборудования 19\'\' дюймов телекоммуникационные, кроссовые, серверные',
                'meta_description' => 'стойки для оборудования 19\'\' дюймов телекоммуникационные, кроссовые, серверные, сетевые, монтажные',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:23',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            82 =>
            array (
                'id' => 98,
                'parent_id' => 94,
                'depth' => 2,
                'name' => 'Утепленные уличные шкафы 19\'\'',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'outdoor',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'всепогодные уличные шкафы 19\'\' дюймов телекоммуникационные, сетевые, серверные ',
                'meta_description' => 'всепогодные уличные шкафы 19" дюймов телекоммуникационные, сетевые, серверные, электротехнические напольные, навесные и настенные для оборудования ',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:23',
                'updated_at' => '2019-05-15 06:14:00',
            ),
            83 =>
            array (
                'id' => 99,
                'parent_id' => 94,
                'depth' => 2,
                'name' => 'Аксессуары 19\'\'',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 1,
                'url' => 'accessories',
                'body' => '<h2>Аксессуары и элементы 19\'\'</h2>
<p>В <strong>интернет-магазине Уралэнерготел</strong> вы можете купить аксессуары и комплектующие для электротехнических, телекоммуникационных и серверных шкафов 19\'\', а также модульные элементы для размещения внутри шкафов 19\'\'.
</p>
<p><strong>В ассортименте представлены аксессуары и оборудование стандарта 19\'\'</strong>:
</p>
<ul>
<li><a href="https://uralenergotel.ru/category/accessories19/switchboard-panel/" target="_blank">Распределительные панели 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/accessories19/U-Energy-BOX/" target="_blank">Сборные монтажные панели 19\'\' U BOX</a></li>
<li><a href="https://uralenergotel.ru/category/accessories19/thermostat/" target="_blank">Термостаты 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/accessories19/heating/" target="_blank">Обогреватели 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/accessories19/ventilation/" target="_blank">Панели вентиляции и вентиляторные модули 19\'\'</a></li>
</ul>
<li><a href="https://uralenergotel.ru/category/accessories19/case-19/" target="_blank">Ящики 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/accessories19/shelf-19/" target="_blank">Полки 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/accessories19/cable-route/" target="_blank">Кабельные органайзеры, лотки и трассы 19\'\'</a></li>
<li><a href="https://uralenergotel.ru/category/accessories19/cross-dlya-plintov/" target="_blank">Медные кроссы для плинтов 19\'\'</a></li>
</ul>
<p>а также другие аксессуары, такие как освещение для 19-дюймовых шкафов, опоры и колёсики, цоколи производства Уралэнерготел и ЦМО.
</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'аксессуары для телекоммуникационных шкафов и серверных стоек 19’’',
                'meta_description' => 'аксессуары для телекоммуникационных шкафов и серверных стоек 19 дюймов',
                'sort_position' => 6,
                'created_at' => '2019-03-21 11:49:22',
                'updated_at' => '2019-03-21 12:04:20',
            ),
            84 =>
            array (
                'id' => 100,
                'parent_id' => 99,
                'depth' => 3,
                'name' => 'Распределительные панели 19\'\'',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'distribution-panel',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'распределительные панели для шкафов и стоек 19\'\'',
                'meta_description' => 'распределительные панели для шкафов и стоек 19\'\'',
                'sort_position' => 1,
                'created_at' => '2019-03-21 11:49:22',
                'updated_at' => '2019-03-21 11:49:22',
            ),
            85 =>
            array (
                'id' => 105,
                'parent_id' => 99,
                'depth' => 3,
                'name' => 'Сборные монтажные панели 19\'\' U Box',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'u-box',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'U Energy Box сборные распределительные панели 19\'\'',
                'meta_description' => 'U Energy Box сборные распределительные панели 19\'\'',
                'sort_position' => 2,
                'created_at' => '2019-03-21 11:49:22',
                'updated_at' => '2019-03-26 04:45:41',
            ),
            86 =>
            array (
                'id' => 110,
                'parent_id' => 99,
                'depth' => 3,
                'name' => 'Ящики 19\'\'',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'cases',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'ящики для шкафов и стоек 19\'\' дюймов',
                'meta_description' => 'ящики для шкафов и стоек 19\'\' дюймов',
                'sort_position' => 3,
                'created_at' => '2019-03-21 11:49:23',
                'updated_at' => '2019-03-21 12:04:26',
            ),
            87 =>
            array (
                'id' => 111,
                'parent_id' => 99,
                'depth' => 3,
                'name' => 'Полки 19\'\'',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'shelves',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'полки для шкафов и стоек 19\'\' дюймов',
                'meta_description' => 'полки для шкафов и стоек 19\'\' дюймов',
                'sort_position' => 4,
                'created_at' => '2019-03-21 11:49:23',
                'updated_at' => '2019-03-21 12:04:44',
            ),
            88 =>
            array (
                'id' => 113,
                'parent_id' => 99,
                'depth' => 3,
                'name' => 'Кроссы для плинтов 19\'\'',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'switching',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'кроссы для плинтов для шкафов и стоек 19\'\' дюймов',
                'meta_description' => 'кроссы для плинтов для шкафов и стоек 19\'\' дюймов',
                'sort_position' => 5,
                'created_at' => '2019-03-21 11:49:23',
                'updated_at' => '2019-03-21 11:49:51',
            ),
            89 =>
            array (
                'id' => 114,
                'parent_id' => 94,
                'depth' => 2,
                'name' => 'Кронштейны для оборудования 19\'\'',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 1,
                'url' => 'brackets',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'кронштейны для оборудования 19\'\' дюймов телекоммуникационные горизонтальные и вертикальные',
                'meta_description' => 'кронштейны для оборудования 19\'\' дюймов телекоммуникационные горизонтальные и вертикальные',
                'sort_position' => 5,
                'created_at' => '2019-03-21 08:51:27',
                'updated_at' => '2019-03-21 08:52:24',
            ),
            90 =>
            array (
                'id' => 122,
                'parent_id' => 43,
                'depth' => 2,
                'name' => 'Защиты шин и ошиновок',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'bus_protection',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства защиты шин и ошиновок',
                'meta_description' => 'устройства защиты шин и ошиновок',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:27',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            91 =>
            array (
                'id' => 123,
                'parent_id' => 43,
                'depth' => 2,
                'name' => 'Основные защиты линий 110-220 кВ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => '110kv_220kv_line_protection',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства основных защит линий 110-220 кВ',
                'meta_description' => 'устройства основных защит линий 110-220 кВ',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:27',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            92 =>
            array (
                'id' => 124,
                'parent_id' => 122,
                'depth' => 3,
                'name' => 'Сириус-2-ДЗМ',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-2-dzm',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-2-ДЗМ производства Радиус автоматика',
                'meta_description' => 'Сириус-2-ДЗМ производства Радиус автоматика',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:27',
                'updated_at' => '2018-11-30 14:23:00',
            ),
            93 =>
            array (
                'id' => 125,
                'parent_id' => 122,
                'depth' => 3,
                'name' => 'Сириус-3-ДЗО-01',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-3-dzo-01',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-3-ДЗО-01 производства Радиус автоматика',
                'meta_description' => 'Сириус-3-ДЗО-01 производства Радиус автоматика',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:28',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            94 =>
            array (
                'id' => 126,
                'parent_id' => 122,
                'depth' => 3,
                'name' => 'Сириус-3-ДЗО-02',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-3-dzo-02',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-3-ДЗО-02 производства Радиус автоматика',
                'meta_description' => 'Сириус-3-ДЗО-02 производства Радиус автоматика',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:28',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            95 =>
            array (
                'id' => 127,
                'parent_id' => 122,
                'depth' => 3,
                'name' => 'Сириус-3-ДЗШ-01',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-3-dzsh-01',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-3-ДЗШ-01 производства Радиус автоматика',
                'meta_description' => 'Сириус-3-ДЗШ-01 производства Радиус автоматика',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:28',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            96 =>
            array (
                'id' => 128,
                'parent_id' => 122,
                'depth' => 3,
                'name' => 'Сириус-3-ДЗШ-02',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-3-dzsh-02',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-3-ДЗШ-02 производства Радиус автоматика',
                'meta_description' => 'Сириус-3-ДЗШ-02 производства Радиус автоматика',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:28',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            97 =>
            array (
                'id' => 129,
                'parent_id' => 122,
                'depth' => 3,
                'name' => 'Сириус-3-ДЗШ-03',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-3-dzsh-03',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-3-ДЗШ-03 производства Радиус автоматика',
                'meta_description' => 'Сириус-3-ДЗШ-03 производства Радиус автоматика',
                'sort_position' => 6,
                'created_at' => '2018-11-30 11:35:29',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            98 =>
            array (
                'id' => 130,
                'parent_id' => 43,
                'depth' => 2,
                'name' => 'Резервные защиты и АУВ присоединений 110-220 кВ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'backup_protection_and_control_110_220_kv',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'резервные защиты и АУВ присоединений 110-220 кВ',
                'meta_description' => 'резервные защиты и автоматика управления выключателей присоединений 110-220 кВ',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:29',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            99 =>
            array (
                'id' => 131,
                'parent_id' => 43,
                'depth' => 2,
                'name' => 'Защита индуктивных ТН 110-500 кВ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'protection_inductive_vt_110_500_kv',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'защиту индуктивных ТН 110-500 кВ',
                'meta_description' => 'защиту индуктивных трансформаторов напряжения 110-500 кВ',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:29',
                'updated_at' => '2019-03-04 14:49:05',
            ),
            100 =>
            array (
                'id' => 132,
                'parent_id' => 43,
                'depth' => 2,
                'name' => 'Оперативная блокировка',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'operation_block',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства оперативной блокировки',
                'meta_description' => 'устройства оперативной блокировки',
                'sort_position' => 6,
                'created_at' => '2018-11-30 11:35:29',
                'updated_at' => '2019-03-04 14:50:49',
            ),
            101 =>
            array (
                'id' => 133,
                'parent_id' => 131,
                'depth' => 3,
                'name' => 'Сириус-2-ТН-Д',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-2-tn-d',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-2-ТН-Д производства Радиус автоматика',
                'meta_description' => 'Сириус-2-ТН-Д производства Радиус автоматика',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:29',
                'updated_at' => '2019-03-04 14:49:18',
            ),
            102 =>
            array (
                'id' => 134,
                'parent_id' => 132,
                'depth' => 3,
                'name' => 'Сириус-2-УБР',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-2-ubr',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-2-УБР производства Радиус автоматика',
                'meta_description' => 'Сириус-2-УБР производства Радиус автоматика',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:29',
                'updated_at' => '2019-03-04 14:50:57',
            ),
            103 =>
            array (
                'id' => 135,
                'parent_id' => 130,
                'depth' => 3,
                'name' => 'Сириус-3-УВ',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-3-uv',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-3-УВ производства Радиус автоматика',
                'meta_description' => 'Сириус-3-УВ производства Радиус автоматика',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:30',
                'updated_at' => '2018-11-30 14:24:41',
            ),
            104 =>
            array (
                'id' => 136,
                'parent_id' => 44,
                'depth' => 3,
                'name' => 'Сириус-Т-БПТ',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-t-bpt',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-Т-БПТ производства Радиус автоматика',
                'meta_description' => 'Сириус-Т-БПТ производства Радиус автоматика',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:30',
                'updated_at' => '2018-11-30 14:21:33',
            ),
            105 =>
            array (
                'id' => 137,
                'parent_id' => 44,
                'depth' => 3,
                'name' => 'Сириус-ААРТ',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-aart',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-ААРТ производства Радиус автоматика',
                'meta_description' => 'Сириус-ААРТ производства Радиус автоматика',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:30',
                'updated_at' => '2018-12-03 09:39:54',
            ),
            106 =>
            array (
                'id' => 138,
                'parent_id' => 43,
                'depth' => 2,
                'name' => 'Защита и автоматика присоединений 6-35 кВ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'connections_6_35kv',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства защиты и автоматики присоединений 6-35 кВ',
                'meta_description' => 'устройства защиты и автоматики присоединений 6-35 кВ',
                'sort_position' => 7,
                'created_at' => '2018-11-30 11:35:30',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            107 =>
            array (
                'id' => 139,
                'parent_id' => 138,
                'depth' => 3,
                'name' => 'Орион-РТЗ',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'orion-rtz',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Орион-РТЗ производства Радиус автоматика',
                'meta_description' => 'Орион-РТЗ производства Радиус автоматика',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:30',
                'updated_at' => '2018-11-30 14:26:00',
            ),
            108 =>
            array (
                'id' => 140,
                'parent_id' => 43,
                'depth' => 2,
                'name' => 'Противоаварийная автоматика',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'emergency_automatics',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства противоаварийной автоматики',
                'meta_description' => 'устройства противоаварийной автоматики',
                'sort_position' => 8,
                'created_at' => '2018-11-30 11:35:30',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            109 =>
            array (
                'id' => 141,
                'parent_id' => 43,
                'depth' => 2,
                'name' => 'Центральная сигнализация',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'central_alarm',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства центральной сигнализации',
                'meta_description' => 'устройства центральной сигнализации',
                'sort_position' => 9,
                'created_at' => '2018-11-30 11:35:31',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            110 =>
            array (
                'id' => 142,
                'parent_id' => 43,
                'depth' => 2,
                'name' => 'Определение места повреждения ЛЭП 6-750 кВ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'failure_location',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства определения места повреждения ЛЭП 6-750 кВ',
                'meta_description' => 'устройства определения места повреждения ЛЭП 6-750 кВ',
                'sort_position' => 10,
                'created_at' => '2018-11-30 11:35:31',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            111 =>
            array (
                'id' => 143,
                'parent_id' => 43,
                'depth' => 2,
                'name' => 'Защита и автоматика вводов собственных нужд 0,4 кВ',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => '04kv',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'микропроцессорные устройства защиты и автоматики вводов собственных нужд 0,4 кВ',
                'meta_description' => 'микропроцессорные устройства защиты и автоматики вводов собственных нужд 0,4 кВ',
                'sort_position' => 11,
                'created_at' => '2018-11-30 11:35:31',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            112 =>
            array (
                'id' => 144,
                'parent_id' => 43,
                'depth' => 2,
                'name' => 'Дуговая защита',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'arc_protection',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства дуговой защиты',
                'meta_description' => 'устройства дуговой защиты',
                'sort_position' => 12,
                'created_at' => '2018-11-30 11:35:31',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            113 =>
            array (
                'id' => 145,
                'parent_id' => 130,
                'depth' => 3,
                'name' => 'Сириус-УВ-БПТ',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-uv-bpt',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-УВ-БПТ производства Радиус автоматика',
                'meta_description' => 'Сириус-УВ-БПТ производства Радиус автоматика',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:31',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            114 =>
            array (
                'id' => 146,
                'parent_id' => 130,
                'depth' => 3,
                'name' => 'Сириус-3-СВ',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-3-sv',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-3-СВ производства Радиус автоматика',
                'meta_description' => 'Сириус-3-СВ производства Радиус автоматика',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:31',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            115 =>
            array (
                'id' => 147,
                'parent_id' => 130,
                'depth' => 3,
                'name' => 'Сириус-3-ЛВ-02',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-3-lv-02',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-3-ЛВ-02 производства Радиус автоматика',
                'meta_description' => 'Сириус-3-ЛВ-02 производства Радиус автоматика',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:31',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            116 =>
            array (
                'id' => 148,
                'parent_id' => 130,
                'depth' => 3,
                'name' => 'Сириус-3-ЛВ-03',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-3-lv-03',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-3-ЛВ-03 производства Радиус автоматика',
                'meta_description' => 'Сириус-3-ЛВ-03 производства Радиус автоматика',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:32',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            117 =>
            array (
                'id' => 149,
                'parent_id' => 130,
                'depth' => 3,
                'name' => 'Сириус-3-ЛВ-04',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-3-lv-04',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-3-ЛВ-04 производства Радиус автоматика',
                'meta_description' => 'Сириус-3-ЛВ-04 производства Радиус автоматика',
                'sort_position' => 6,
                'created_at' => '2018-11-30 11:35:32',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            118 =>
            array (
                'id' => 150,
                'parent_id' => 123,
                'depth' => 3,
                'name' => 'Сириус-2-ДЗЛ-01',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-2-dzl-01',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-2-ДЗЛ-01 производства Радиус автоматика',
                'meta_description' => 'Сириус-2-ДЗЛ-01 производства Радиус автоматика',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:32',
                'updated_at' => '2018-11-30 14:23:47',
            ),
            119 =>
            array (
                'id' => 151,
                'parent_id' => 123,
                'depth' => 3,
                'name' => 'Сириус-3-ВЧ-01',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-3-vch-01',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-3-ВЧ-01 производства Радиус автоматика',
                'meta_description' => 'Сириус-3-ВЧ-01 производства Радиус автоматика',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:32',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            120 =>
            array (
                'id' => 152,
                'parent_id' => 123,
                'depth' => 3,
                'name' => 'Сириус-3-ДФЗ-01',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-3-dfz-01',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-3-ДФЗ-01 производства Радиус автоматика',
                'meta_description' => 'Сириус-3-ДФЗ-01 производства Радиус автоматика',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:32',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            121 =>
            array (
                'id' => 153,
                'parent_id' => 123,
                'depth' => 3,
                'name' => 'Сириус-3-ДФЗ-02',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'sirius-3-dfz-02',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'Сириус-3-ДФЗ-02 производства Радиус автоматика',
                'meta_description' => 'Сириус-3-ДФЗ-02 производства Радиус автоматика',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:33',
                'updated_at' => '2018-12-03 09:39:55',
            ),
            122 =>
            array (
                'id' => 154,
                'parent_id' => 57,
                'depth' => 2,
                'name' => 'Изоляторы',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'insulators',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'изоляторы фарфоровые, керамические, стеклянные, полимерные, кремнийорганические для опор и ВЛ',
                'meta_description' => 'изоляторы фарфоровые, керамические, стеклянные, полимерные, кремнийорганические для опор и ВЛ',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:33',
                'updated_at' => '2019-05-20 12:04:20',
            ),
            123 =>
            array (
                'id' => 155,
                'parent_id' => 154,
                'depth' => 3,
                'name' => 'Линейные изоляторы',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'line_insulation',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'изоляторы линейные фарфоровые, керамические, стеклянные, полимерные, кремнийорганические',
                'meta_description' => 'изоляторы линейные фарфоровые, керамические, стеклянные, полимерные, кремнийорганические для ВЛ высоковольтных, воздушных линий',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:33',
                'updated_at' => '2018-12-06 12:16:24',
            ),
            124 =>
            array (
                'id' => 156,
                'parent_id' => 36,
                'depth' => 3,
                'name' => 'Датчики температуры',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'temperature',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'датчики температуры, термопары',
                'meta_description' => 'датчики температуры, термопары',
                'sort_position' => 1,
                'created_at' => '2018-11-30 11:35:33',
                'updated_at' => '2018-12-11 09:55:29',
            ),
            125 =>
            array (
                'id' => 157,
                'parent_id' => 36,
                'depth' => 3,
                'name' => 'Датчики влажности и температуры воздуха',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'temperature_humidity',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'датчики влажности и температуры воздуха',
                'meta_description' => 'датчики и преобразователи влажности и температуры воздуха',
                'sort_position' => 2,
                'created_at' => '2018-11-30 11:35:33',
                'updated_at' => '2018-12-03 09:39:54',
            ),
            126 =>
            array (
                'id' => 158,
                'parent_id' => 36,
                'depth' => 3,
                'name' => 'Преобразователи давления',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'pressure',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'преобразователи давления',
                'meta_description' => 'преобразователи давления',
                'sort_position' => 3,
                'created_at' => '2018-11-30 11:35:33',
                'updated_at' => '2018-12-11 06:46:58',
            ),
            127 =>
            array (
                'id' => 159,
                'parent_id' => 36,
                'depth' => 3,
                'name' => 'Датчики уровня',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'level',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'датчики уровня',
                'meta_description' => 'датчики уровня',
                'sort_position' => 4,
                'created_at' => '2018-11-30 11:35:34',
                'updated_at' => '2018-12-03 09:39:54',
            ),
            128 =>
            array (
                'id' => 160,
                'parent_id' => 36,
                'depth' => 3,
                'name' => 'Сигнализаторы загазованности',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'gas',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'сигнализаторы загазованности',
                'meta_description' => 'датчики газа, сигнализаторы загазованности',
                'sort_position' => 5,
                'created_at' => '2018-11-30 11:35:34',
                'updated_at' => '2018-12-10 08:49:13',
            ),
            129 =>
            array (
                'id' => 161,
                'parent_id' => 154,
                'depth' => 3,
                'name' => 'Опорные изоляторы',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'support_insulator',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'изоляторы опорные стеклянные, фарфоровые, полимерные',
                'meta_description' => 'изоляторы опорные стеклянные, фарфоровые, полимерные',
                'sort_position' => 2,
                'created_at' => '2018-12-03 09:32:24',
                'updated_at' => '2018-12-06 12:17:11',
            ),
            130 =>
            array (
                'id' => 163,
                'parent_id' => 30,
                'depth' => 3,
                'name' => 'Измерители параметров электрической сети',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'electric',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 1,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'измерители параметров электрической сети',
                'meta_description' => 'измерители параметров электрической сети',
                'sort_position' => 9,
                'created_at' => '2018-12-05 10:12:09',
                'updated_at' => '2019-04-25 10:01:27',
            ),
            131 =>
            array (
                'id' => 164,
                'parent_id' => 30,
                'depth' => 3,
                'name' => 'Приборы для индикации и управления задвижками',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'valve_control',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'приборы для индикации и управления задвижками ',
                'meta_description' => 'приборы для индикации и управления задвижками ',
                'sort_position' => 7,
                'created_at' => '2018-12-18 08:55:16',
                'updated_at' => '2019-07-19 15:54:51',
            ),
            132 =>
            array (
                'id' => 165,
                'parent_id' => 30,
                'depth' => 3,
                'name' => 'Ручные задатчики сигналов',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'manual_signal_adjustment ',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'ручные задатчики сигналов',
                'meta_description' => 'ручные задатчики сигналов',
                'sort_position' => 8,
                'created_at' => '2018-12-18 08:55:16',
                'updated_at' => '2019-04-25 10:01:27',
            ),
            133 =>
            array (
                'id' => 166,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Устройства передачи данных',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'data_transfer',
                'body' => '<h2>Устройства передачи данных</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить коммуникационные устройства:</p>
<ul>
<li><a href="https://uralenergotel.ru/category/data_transfer/modem_routers/">Модемы и роутеры</a></li>
<li><a href="https://uralenergotel.ru/category/data_transfer/switches/">Коммутаторы</a></li>
<li>Ethernet-конвертеры</li>
<li>Маршрутизаторы</li>
<li>SFP-модули</li>
<li><a href="https://uralenergotel.ru/category/data_transfer/accessories/">Аксессуары для устройств передачи данных</a></li>
</ul>
<p>производства компаний <a href="https://uralenergotel.ru/brand/irz/" target="_blank">iRZ</a> и <a href="https://uralenergotel.ru/brand/moxa/" target="_blank">MOXA</a>.</p>',
                'image' => '/storage/uploads/categories/data_transfer_compressed.png',
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства передачи данных',
                'meta_description' => 'устройства передачи данных',
                'sort_position' => 6,
                'created_at' => '2019-01-14 09:06:48',
                'updated_at' => '2019-07-15 14:02:29',
            ),
            134 =>
            array (
                'id' => 167,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'Трансформаторы',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'transformers',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'трансформаторы тока и напряжения',
                'meta_description' => 'трансформаторы тока и напряжения',
                'sort_position' => 7,
                'created_at' => '2019-01-22 10:35:30',
                'updated_at' => '2019-07-15 15:34:27',
            ),
            135 =>
            array (
                'id' => 168,
                'parent_id' => 23,
                'depth' => 2,
                'name' => 'Цифровые подстанции',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'digitalsubstation ',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'оборудование для цифровых подстанций',
                'meta_description' => 'оборудование для цифровых подстанций',
                'sort_position' => 6,
                'created_at' => '2019-01-28 09:51:03',
                'updated_at' => '2019-07-15 15:34:27',
            ),
            136 =>
            array (
                'id' => 169,
                'parent_id' => 166,
                'depth' => 2,
                'name' => 'Аксессуары',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 1,
                'url' => 'accessories',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'аксессуары для устройств передачи данных',
                'meta_description' => 'аксессуары для устройств передачи данных, антенны, кабели, блоки питания',
                'sort_position' => 8,
                'created_at' => '2019-01-28 10:13:33',
                'updated_at' => '2019-07-15 15:34:27',
            ),
            137 =>
            array (
                'id' => 170,
                'parent_id' => 24,
                'depth' => 3,
                'name' => 'ЭНКМ-3',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 0,
                'url' => 'enkm-3',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства сбора данных ЭНКМ-3',
                'meta_description' => 'устройства сбора данных ЭНКМ-3',
                'sort_position' => 2,
                'created_at' => '2019-01-28 11:44:13',
                'updated_at' => '2019-01-29 09:55:10',
            ),
            138 =>
            array (
                'id' => 171,
                'parent_id' => 24,
                'depth' => 3,
                'name' => 'ЭНКС-3м',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 0,
                'url' => 'enks-3m',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'устройства сбора данных ЭНКС-3м',
                'meta_description' => 'устройства сбора данных ЭНКС-3м',
                'sort_position' => 1,
                'created_at' => '2019-01-29 09:55:10',
                'updated_at' => '2019-06-20 15:03:04',
            ),
            139 =>
            array (
                'id' => 172,
                'parent_id' => 99,
                'depth' => 3,
                'name' => 'Вентиляторные модули 19\'\'',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'ventilation',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'вентиляционные панели, вентиляторные модули для шкафов 19’’',
                'meta_description' => 'вентиляционные панели, вентиляторные модули для шкафов 19’’',
                'sort_position' => 6,
                'created_at' => '2019-03-21 11:49:34',
                'updated_at' => '2019-03-21 11:49:51',
            ),
            140 =>
            array (
                'id' => 173,
                'parent_id' => 99,
                'depth' => 3,
                'name' => 'Обогреватели 19\'\'',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'heating',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'обогреватели для шкафов 19"',
                'meta_description' => 'обогреватели для шкафов 19 дюймов',
                'sort_position' => 7,
                'created_at' => '2019-03-21 11:49:34',
                'updated_at' => '2019-03-21 11:49:51',
            ),
            141 =>
            array (
                'id' => 174,
                'parent_id' => 99,
                'depth' => 3,
                'name' => 'Цифровые термостаты 19\'\'',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'thermostat',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'цифровые термостаты для шкафов 19’’',
                'meta_description' => 'цифровые термостаты для шкафов 19’’',
                'sort_position' => 8,
                'created_at' => '2019-03-21 11:49:34',
                'updated_at' => '2019-03-21 11:49:51',
            ),
            142 =>
            array (
                'id' => 175,
                'parent_id' => 64,
                'depth' => 3,
                'name' => 'Подставки изолирующие',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 1,
                'url' => 'insulation',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'изолирующие подставки ПИ под конденсаторы связи УККЗ, КВАР',
                'meta_description' => 'изолирующие подставки ПИ под конденсаторы связи УККЗ, КВАР',
                'sort_position' => 7,
                'created_at' => '2019-03-20 11:09:17',
                'updated_at' => '2019-03-20 12:28:45',
            ),
            143 =>
            array (
                'id' => 176,
                'parent_id' => 57,
                'depth' => 2,
                'name' => 'Ограничители перенапряжения',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'surge_protector',
                'body' => '<h2>Ограничители перенапряжения ОПН</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить ограничители перенапряжения 3-110 кВ серий ОПН-КР, ОПН-РВ, ОПН-РК,

ОПН-РТ, в том числе ОПН TEL для внутреннего размещения, а также основания к ним. </p>
<p>В ассортименте представлены полимерные ограничители ОПН для размещения на ОРУ и ЗРУ для распределительных и тяговых

подстанций для защиты как трансформаторов электродуговых печей, изоляции кабельных сетей, электрических генераторов,

двигателей, выпрямителей тяговых подстанций электрифицированных железных дорог, так и трансформаторов, пунктов

секционирования, мест перехода кабельных линий в воздушные и защиты изоляции разземленных нейтральей трансформаторов

производства компании <a href="https://uralenergotel.ru/brand/tavrida/" target="_blank">Таврида Электрик</a>.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'ограничители перенапряжений ОПН',
                'meta_description' => 'ограничители перенапряжений ОПН',
                'sort_position' => 2,
                'created_at' => '2019-02-12 05:18:22',
                'updated_at' => '2019-02-13 11:32:47',
            ),
            144 =>
            array (
                'id' => 177,
                'parent_id' => 57,
                'depth' => 2,
                'name' => 'Силовые конденсаторы',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'power_capacitors',
                'body' => '<h2>Силовые конденсаторы</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить силовые конденсаторы косинусные, импульсные, электротермические высоковольтные для повышения устройчивости работы энергосистемы, повышения передаваемой мощности по ЛЭП, комплектации фильтровых и шунтовых батарей на приёмном и передающем концах линии и для использования в качестве демпфирующих и выравнивающих элементов в преобразовательных устройствах.</p>
<p>В ассортименте представлены конденсаторы серий КПС, КЭП, КЭПФ, КЭС, КЭЭПВ, КЭЭС, ЭЭВП производства <a href="https://uralenergotel.ru/brand/ukkz/">Усть-Каменогорского Конденсаторного Завода</a>.</a></p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'силовые конденсаторы',
                'meta_description' => 'силовые конденсаторы: косинусные, высоковольтные, конденсаторные установки',
                'sort_position' => 1,
                'created_at' => '2019-03-28 06:42:11',
                'updated_at' => '2019-04-17 12:16:54',
            ),
            145 =>
            array (
                'id' => 178,
                'parent_id' => 71,
                'depth' => 2,
                'name' => 'Дроссели, реакторы, фильтры',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 1,
                'url' => 'filter_reactors',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'дроссели, реакторы, фильтры',
                'meta_description' => 'дроссели, реакторы, фильтры входные и выходные, радиочастотные РЧ, ЭМС и ЭМИ',
                'sort_position' => 6,
                'created_at' => '2019-04-03 09:32:51',
                'updated_at' => '2019-07-18 14:49:39',
            ),
            146 =>
            array (
                'id' => 179,
                'parent_id' => 71,
                'depth' => 2,
                'name' => 'Рекуператоры электроэнергии',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 1,
                'url' => 'recuperators',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'рекуператоры электроэнергии',
                'meta_description' => 'рекуператоры электроэнергии',
                'sort_position' => 7,
                'created_at' => '2019-04-03 09:32:51',
                'updated_at' => '2019-04-25 10:01:27',
            ),
            147 =>
            array (
                'id' => 180,
                'parent_id' => 79,
                'depth' => 2,
            'name' => 'Шкафы зажимов шин (ШЗШ)',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'shkafy-zazhimov-shin_shzsh',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
            'meta_title' => 'шкафы зажимов шин (ШЗШ)',
            'meta_description' => 'шкафы зажимов шин (ШЗШ)',
                'sort_position' => 7,
                'created_at' => '2019-04-23 04:56:05',
                'updated_at' => '2019-07-18 09:20:09',
            ),
            148 =>
            array (
                'id' => 181,
                'parent_id' => 30,
                'depth' => 3,
                'name' => 'Температурные контроллеры',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'temperature_controllers',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'температурные контроллеры',
                'meta_description' => 'температурные контроллеры',
                'sort_position' => 2,
                'created_at' => '2019-04-23 09:19:57',
                'updated_at' => '2019-04-25 10:01:27',
            ),
            149 =>
            array (
                'id' => 182,
                'parent_id' => 71,
                'depth' => 2,
                'name' => 'Энкодеры',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 1,
                'url' => 'encoders',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'энкодеры',
                'meta_description' => 'инкрементальные и абсолютные энкодеры',
                'sort_position' => 2,
                'created_at' => '2019-04-23 09:40:58',
                'updated_at' => '2019-04-25 10:01:27',
            ),
            150 =>
            array (
                'id' => 183,
                'parent_id' => 71,
                'depth' => 2,
                'name' => 'Сервоприводы',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 1,
                'url' => 'servo',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'сервоприводы ',
                'meta_description' => 'сервоприводы, серводвигатели и блоки управления к ним',
                'sort_position' => 3,
                'created_at' => '2019-04-23 09:53:41',
                'updated_at' => '2019-04-25 10:01:27',
            ),
            151 =>
            array (
                'id' => 184,
                'parent_id' => 166,
                'depth' => 2,
                'name' => 'Модемы, роутеры, маршрутизаторы',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'modem_routers',
                'body' => '<h2>Модемы и роутеры</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить устройства беспроводного доступа: модемы и роутеры, а также <a href="https://uralenergotel.ru/category/data_transfer/accessories/">аксессуары к ним</a>: антенны и блоки питания.</p>
<p>В ассортименте представлены промышленные устройства, поддерживающие все современные стандарты связи: 2G, 3G, 4G/LTE, с Wi-Fi и без, с различным количеством SIM-карт для резервирования каналов связи, работающие в сетях RS-232, RS-485, Ethernet, и других, производства российской компании <a href="https://uralenergotel.ru/brand/irz/" target="_blank">iRZ</a>.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'модемы и роутеры',
                'meta_description' => 'модемы и роутеры',
                'sort_position' => 3,
                'created_at' => '2019-04-25 10:52:50',
                'updated_at' => '2019-07-15 15:34:27',
            ),
            152 =>
            array (
                'id' => 185,
                'parent_id' => 166,
                'depth' => 2,
                'name' => 'Коммутаторы',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'switches',
                'body' => '<h2>Коммутаторы</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить коммутаторы Ethernet для помещений, уличные (с расширенным диапазоном рабочих температур), с поддержкой PoE (Power over Ethernet) и во взрывозащищенном исполнении.</p>
<p>В ассортименте представлены неуправляемые, управляемые и интеллектуальные коммутаторы, подходящие для использования в промышленных сетях передачи данных, например в системах видеонаблюдения, интеллектуальных транспортных системах и автоматизации производства, оснащенные различным количеством портов Ethernet 10/100 Base-T(X), 100 Base-FX, 100 Base-SFP, Gigabit Ethernet производства компании <a href="https://uralenergotel.ru/brand/moxa/">MOXA</a>.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'коммутаторы',
                'meta_description' => 'коммутаторы',
                'sort_position' => 2,
                'created_at' => '2019-04-25 12:29:15',
                'updated_at' => '2019-07-15 15:34:27',
            ),
            153 =>
            array (
                'id' => 186,
                'parent_id' => 93,
                'depth' => 3,
                'name' => 'Термошкафы с обогревом и вентиляцией',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'ventilation',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'термошкафы тш для оборудования связи уличные с обогревом и вентиляцией',
                'meta_description' => 'термошкафы тш для оборудования связи уличные с обогревом и вентиляцией',
                'sort_position' => 2,
                'created_at' => '2019-05-14 12:14:18',
                'updated_at' => '2019-07-16 16:55:09',
            ),
            154 =>
            array (
                'id' => 187,
                'parent_id' => 93,
                'depth' => 2,
                'name' => 'Аксессуары для термошкафов',
                'active' => 1,
                'show_content' => 0,
                'show_menu' => 0,
                'url' => 'accessories',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'крепление термошкафа на стену, опору, козырьки',
                'meta_description' => 'крепление термошкафа на стену, опору, козырьки',
                'sort_position' => 3,
                'created_at' => '2019-05-14 12:14:18',
                'updated_at' => '2019-07-16 16:11:54',
            ),
            155 =>
            array (
                'id' => 188,
                'parent_id' => 93,
                'depth' => 3,
                'name' => 'Термошкафы с обогревом',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'heating',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'термошкафы тш для оборудования связи уличные с обогревом',
                'meta_description' => 'термошкафы тш для оборудования связи уличные с обогревом',
                'sort_position' => 1,
                'created_at' => '2019-05-14 12:14:18',
                'updated_at' => '2019-07-16 16:55:09',
            ),
            156 =>
            array (
                'id' => 190,
                'parent_id' => 166,
                'depth' => 2,
                'name' => 'SFP-модули',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'sfp_modules',
                'body' => '<h2>SFP-модули</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить SFP-модули для передачи данных по меди и по оптике со скоростью от 100 Мбит до 10 Гбит в секунду, на расстояние от 300 метров до 120 км. В ассортименте представлены SFP-модули с разъёмами RJ-45, LC, работающие по одномодовому и многомодовому волокну, а также по технологии WDM.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'SFP-модули',
                'meta_description' => 'SFP-модули',
                'sort_position' => 4,
                'created_at' => '2019-05-17 08:57:36',
                'updated_at' => '2019-07-15 15:34:27',
            ),
            157 =>
            array (
                'id' => 191,
                'parent_id' => 166,
                'depth' => 2,
                'name' => 'Преобразователи интерфейсов',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'converters',
                'body' => '<h2>Преобразователи интерфейсов</h2>
<p>В интернет-магазине Уралэнерготел вы можете купить конвертеры интерфейсов, в том числе со встроенным коммутатором, медиаконвертеры, повторители, удлинители в общепромышленном исполнеии, а также во взрывозащищенном, с функцией изоляции и защитой от импульсных помех, и с расширенным диапазоном рабочих температур.</p>
<p>В ассортименте представлены: устройства, работающие с интерфейсами CAN, RS-232, RS-422, RS-485, PROFIBUS, Ethernet (медь, оптика одномодовая и многомодовая, wi-fi) производства компаний <a href="https://uralenergotel.ru/brand/icpdas/" target="_blank">ICP DAS</a> и <a href="https://uralenergotel.ru/brand/moxa/" target="_blank">Moxa</a>.</p>',
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'преобразователи интерфейсов',
                'meta_description' => 'преобразователи интерфейсов',
                'sort_position' => 5,
                'created_at' => '2019-06-03 11:12:17',
                'updated_at' => '2019-07-15 15:34:27',
            ),
            158 =>
            array (
                'id' => 192,
                'parent_id' => 166,
                'depth' => 2,
                'name' => 'Мультипортовые платы',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'port_boards',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'мультипортовые платы',
                'meta_description' => 'мультипортовые платы',
                'sort_position' => 7,
                'created_at' => '2019-06-13 17:12:59',
                'updated_at' => '2019-07-15 15:34:27',
            ),
            159 =>
            array (
                'id' => 193,
                'parent_id' => 166,
                'depth' => 2,
                'name' => 'Преобразователи протоколов',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'protocol_converters',
                'body' => NULL,
                'image' => NULL,
                'filter' => 0,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'преобразователи протоколов',
                'meta_description' => 'преобразователи протоколов',
                'sort_position' => 6,
                'created_at' => '2019-06-13 17:12:59',
                'updated_at' => '2019-07-15 15:34:27',
            ),
            160 =>
            array (
                'id' => 194,
                'parent_id' => 53,
                'depth' => 3,
                'name' => 'УЗИП для сетей переменного тока',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'alternating_current',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'УЗИП для сетей переменного тока',
                'meta_description' => 'УЗИП для сетей переменного тока',
                'sort_position' => 1,
                'created_at' => '2019-07-17 08:20:02',
                'updated_at' => '2019-07-17 13:47:06',
            ),
            161 =>
            array (
                'id' => 195,
                'parent_id' => 53,
                'depth' => 3,
                'name' => 'УЗИП для сетей постоянного тока',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'direct_current',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'УЗИП для сетей постоянного тока',
                'meta_description' => 'УЗИП для сетей постоянного тока',
                'sort_position' => 2,
                'created_at' => '2019-07-17 08:20:02',
                'updated_at' => '2019-07-18 09:20:09',
            ),
            162 =>
            array (
                'id' => 196,
                'parent_id' => 53,
                'depth' => 3,
                'name' => 'УЗИП для линий передачи данных',
                'active' => 1,
                'show_content' => 1,
                'show_menu' => 1,
                'url' => 'data_lines',
                'body' => NULL,
                'image' => NULL,
                'filter' => 1,
                'filter_price' => 0,
                'filter_instock' => 0,
                'moreinfo' => NULL,
                'meta_title' => 'УЗИП для телекоммуникаций, линий передачи данных',
                'meta_description' => 'УЗИП для телекоммуникаций, линий передачи данных',
                'sort_position' => 3,
                'created_at' => '2019-07-17 08:20:02',
                'updated_at' => '2019-07-18 15:21:57',
            ),
        ));


    }
}
