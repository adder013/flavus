<?php

use Illuminate\Database\Seeder;

class BrandsTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands_tags')->delete();
        
        \DB::table('brands_tags')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'description' => '<a href="/category/automation/kip">Контрольно-измерительные приборы</a>, <a href="/category/elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli">измерительные преобразователи</a>, <a href="/category/schetchiki-energy/">счетчики электроэнергии</a>, <a href="/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/">амперметры цифровые</a>, <a href="/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/">амперметры стрелочные</a>, <a href="/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/">вольтметры цифровые</a>,  <a href="/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/">вольтметры стрелочные</a>',
                'id' => 1,
                'name' => 'Электроизмерительные приборы',
                'sort_position' => 1,
                'updated_at' => '2020-02-21 02:48:10',
                'url' => '/category/elektroizmeritelnye-pribory',
            ),
            1 => 
            array (
                'created_at' => NULL,
                'description' => '<a href="/category/schetchiki-energy/filters/brand=incotex/">Счетчики Меркурий</a>, <a href="/category/schetchiki-energy/filters/brand=elster/">счетчики Альфа</a>, <a href="/category/schetchiki-energy/filters/brand=nnpo-frunze/">счетчики завода им. Фрунзе</a>',
                'id' => 2,
                'name' => 'Счетчики',
                'sort_position' => 2,
                'updated_at' => '2020-02-21 02:47:12',
                'url' => '/category/schetchiki-energy/',
            ),
            2 => 
            array (
                'created_at' => NULL,
                'description' => '<a href="/category/automation/kip/izmeriteli-regulyatory/">Измерители-регуляторы</a>, <a href="/category/automation/kip/pump_control/">контрольно-измерительные приборы для управления насосами</a>, <a href="/category/automation/kip/control/">для ГВС</a>, <a href="/category/automation/kip/control/">отопления</a>, <a href="/category/automation/kip/control/">вентиляции</a>, и <a href="/category/automation/kip/furnace_controllers/">котельных</a>, <a href="/category/automation/kip/counters/">счетчики</a>, <a href="/category/automation/kip/counters/">таймеры</a>, <a href="/category/automation/kip/counters/">тахометры</a>, <a href="/category/automation/kip/temperature_controllers/">датчики температуры</a>, <a href="/category/automation/sensors/gas/">сигнализаторы загазованности</a>, <a href="/category/automation/sensors/pressure/">преобразователи давления</a>, <a href="/category/automation/kip/pump_control/">датчики уровня</a>',
                'id' => 3,
                'name' => 'Контрольно-измерительные приборы',
                'sort_position' => 3,
                'updated_at' => '2020-02-21 02:56:06',
                'url' => '/category/automation/',
            ),
            3 => 
            array (
                'created_at' => NULL,
                'description' => '<a href="/category/frequency_converter/preobrazovatel_chastoty/">Преобразователи частоты</a>, <a href="/category/frequency_converter/soft_starters/">устройства плавного пуска</a>, <a href="/category/frequency_converter/servo/">сервоприводы</a>,',
                'id' => 4,
                'name' => 'Приводная техника',
                'sort_position' => 4,
                'updated_at' => '2020-02-21 03:02:59',
                'url' => '/category/frequency_converter/',
            ),
            4 => 
            array (
                'created_at' => NULL,
                'description' => '<a href="/category/oborudovanie-vl/power_capacitors/">Силовые конденсаторы</a>, <a href="/category/oborudovanie-vl/surge_protector/">ограничители перенапряжения</a>, <a href="/category/oborudovanie-vl/insulators/">изоляторы</a>,',
                'id' => 5,
                'name' => 'Оборудование ВЧ связи и ВЛ',
                'sort_position' => 6,
                'updated_at' => '2020-02-21 03:16:55',
                'url' => '/category/oborudovanie-vl/',
            ),
            5 => 
            array (
                'created_at' => NULL,
                'description' => '<a href="/category/cabinets19/">Шкафы и стойки 19’’</a>, <a href="/category/cabinets19/termoshkafy/">термошкафы для оборудования</a>,',
                'id' => 6,
                'name' => 'Шкафы и стойки 19"',
                'sort_position' => 7,
                'updated_at' => '2020-02-21 03:12:33',
                'url' => '/category/cabinets19/',
            ),
            6 => 
            array (
                'created_at' => NULL,
                'description' => '<a href="/category/data_transfer/modem_routers/">Модемы</a>, <a href="/category/data_transfer/modem_routers/">роутеры</a>, <a href="/category/data_transfer/modem_routers/">маршрутизаторы</a>, <a href="/category/data_transfer/switches/">коммутаторы</a>, <a href="/category/automation/programmable_devices/input_output/">модули ввода и вывода</a>, <a href="/category/data_transfer/converters/">преобразователи интерфейсов</a>, <a href="/category/data_transfer/protocol_converters/">протоколов</a>, <a href="/category/data_transfer/accessories/">усилители и антенны</a>,',
                'id' => 7,
                'name' => 'Устройства передачи данных',
                'sort_position' => 5,
                'updated_at' => '2020-02-21 03:07:51',
                'url' => '/category/data_transfer/',
            ),
            7 => 
            array (
                'created_at' => '2019-10-28 15:56:03',
            'description' => '<a href="/category/electric/avr/">Оборудование автоматического ввода резерва (АВР)</a>, <a href="/category/electric/surge_guards/">УЗИП и грозозащита оборудования</a>, <a href="/category/electric/relay/">реле</a>, <a href="/category/electric/thyristor/">тиристорные регуляторы </a>',
                'id' => 15,
                'name' => 'Аксессуары',
                'sort_position' => 8,
                'updated_at' => '2020-02-21 03:15:28',
                'url' => '/category/electric/',
            ),
            8 => 
            array (
                'created_at' => '2019-10-28 15:57:15',
                'description' => '<a href="/category/electric/ups/">Источники бесперебойного питания</a> и <a href="/category/electric/batteries/">АКБ</a>',
                'id' => 16,
                'name' => 'Источники бесперебойного питания и АКБ',
                'sort_position' => 9,
                'updated_at' => '2020-02-21 03:11:38',
                'url' => '/category/electric/',
            ),
        ));
        
        
    }
}