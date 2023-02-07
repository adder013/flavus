<?php

use Illuminate\Database\Seeder;

class LockerOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locker_orders')->delete();
        
        \DB::table('locker_orders')->insert(array (
            0 => 
            array (
                'id' => 2,
                'locker_id' => 1,
            'order_option' => 'шкафы телемеханики (ТМ)',
                'sort_position' => 1,
                'created_at' => '2019-02-08 14:25:20',
                'updated_at' => '2019-02-08 14:25:20',
            ),
            1 => 
            array (
                'id' => 3,
                'locker_id' => 1,
            'order_option' => 'шкафы телеизмерений (ТИ)',
                'sort_position' => 2,
                'created_at' => '2019-02-08 14:25:24',
                'updated_at' => '2019-02-08 14:25:24',
            ),
            2 => 
            array (
                'id' => 4,
                'locker_id' => 1,
            'order_option' => 'шкафы системы автоматизированного управления (САУ)',
                'sort_position' => 3,
                'created_at' => '2019-02-08 14:25:28',
                'updated_at' => '2019-02-08 14:25:28',
            ),
            3 => 
            array (
                'id' => 5,
                'locker_id' => 1,
            'order_option' => 'шкафы телесигнализации (ТС)',
                'sort_position' => 4,
                'created_at' => '2019-02-08 14:25:33',
                'updated_at' => '2019-02-08 14:25:33',
            ),
            4 => 
            array (
                'id' => 6,
                'locker_id' => 1,
            'order_option' => 'шкафы систем сбора и передачи информации (ССПИ)',
                'sort_position' => 5,
                'created_at' => '2019-02-08 14:25:37',
                'updated_at' => '2019-02-08 14:25:37',
            ),
            5 => 
            array (
                'id' => 7,
                'locker_id' => 1,
            'order_option' => 'шкафы систем обмена технологической информацией с автоматизированной системой системного оператора (СОТИ АССО)',
                'sort_position' => 6,
                'created_at' => '2019-02-08 14:25:41',
                'updated_at' => '2019-02-08 14:25:41',
            ),
            6 => 
            array (
                'id' => 8,
                'locker_id' => 1,
            'order_option' => 'шкафы автоматизированных систем управления технологическим процессом (АСУ ТП)',
                'sort_position' => 7,
                'created_at' => '2019-02-08 14:25:45',
                'updated_at' => '2019-02-08 14:25:45',
            ),
            7 => 
            array (
                'id' => 9,
                'locker_id' => 1,
            'order_option' => 'шкафы автоматизированных систем коммерческого учёта электроэнергии (АСКУЭ)',
                'sort_position' => 8,
                'created_at' => '2019-02-08 14:25:49',
                'updated_at' => '2019-02-08 14:25:49',
            ),
            8 => 
            array (
                'id' => 10,
                'locker_id' => 2,
                'order_option' => 'шкафы связи',
                'sort_position' => 9,
                'created_at' => '2019-02-08 16:26:46',
                'updated_at' => '2019-02-08 16:26:46',
            ),
            9 => 
            array (
                'id' => 11,
                'locker_id' => 2,
                'order_option' => 'шкафы ВЧ-связи',
                'sort_position' => 10,
                'created_at' => '2019-02-08 16:26:50',
                'updated_at' => '2019-02-08 16:26:50',
            ),
            10 => 
            array (
                'id' => 12,
                'locker_id' => 2,
            'order_option' => 'шкафы АТС (УПАТС)',
                'sort_position' => 11,
                'created_at' => '2019-02-08 16:26:54',
                'updated_at' => '2019-02-08 16:26:54',
            ),
            11 => 
            array (
                'id' => 13,
                'locker_id' => 2,
            'order_option' => 'шкафы оповещений и громкоговорящей связи (ГГС, СГС)',
                'sort_position' => 12,
                'created_at' => '2019-02-08 16:26:58',
                'updated_at' => '2019-02-08 16:26:58',
            ),
            12 => 
            array (
                'id' => 14,
                'locker_id' => 2,
                'order_option' => 'шкафы сетей передачи данных',
                'sort_position' => 13,
                'created_at' => '2019-02-08 16:27:02',
                'updated_at' => '2019-02-08 16:27:02',
            ),
            13 => 
            array (
                'id' => 15,
                'locker_id' => 2,
                'order_option' => 'шкафы локальных вычислительных сетей',
                'sort_position' => 14,
                'created_at' => '2019-02-08 16:27:06',
                'updated_at' => '2019-02-08 16:27:06',
            ),
            14 => 
            array (
                'id' => 16,
                'locker_id' => 2,
                'order_option' => 'шкафы серверного оборудования',
                'sort_position' => 15,
                'created_at' => '2019-02-08 16:27:11',
                'updated_at' => '2019-02-08 16:27:11',
            ),
            15 => 
            array (
                'id' => 17,
                'locker_id' => 2,
                'order_option' => 'шкафы систем широкополосного доступа',
                'sort_position' => 16,
                'created_at' => '2019-02-08 16:27:16',
                'updated_at' => '2019-02-08 16:27:16',
            ),
            16 => 
            array (
                'id' => 18,
                'locker_id' => 2,
                'order_option' => 'шкафы радиорелейной связи',
                'sort_position' => 17,
                'created_at' => '2019-02-08 16:27:22',
                'updated_at' => '2019-02-08 16:27:22',
            ),
            17 => 
            array (
                'id' => 19,
                'locker_id' => 2,
                'order_option' => 'шкафы внутриобъектовой связи',
                'sort_position' => 18,
                'created_at' => '2019-02-08 16:27:26',
                'updated_at' => '2019-02-08 16:27:26',
            ),
            18 => 
            array (
                'id' => 20,
                'locker_id' => 2,
                'order_option' => 'шкафы связи по ВОЛС',
                'sort_position' => 19,
                'created_at' => '2019-02-08 16:27:30',
                'updated_at' => '2019-02-08 16:27:30',
            ),
            19 => 
            array (
                'id' => 21,
                'locker_id' => 5,
                'order_option' => 'шкафы распределительные РУНН, РУСМ, ЩРН, ЩР, РЩ, ВРУ, ШРОТ, ЩСН, ЩПТ',
                'sort_position' => 1,
                'created_at' => '2019-02-11 09:24:15',
                'updated_at' => '2019-02-11 09:24:57',
            ),
            20 => 
            array (
                'id' => 22,
                'locker_id' => 5,
                'order_option' => 'шкафы управления КРУЗА, ЩУ, ЩУН, ППУ, ШАУ, ЯОВ, ЯТП, ЯУР, ЯУО',
                'sort_position' => 2,
                'created_at' => '2019-02-11 09:24:19',
                'updated_at' => '2019-02-11 09:24:57',
            ),
            21 => 
            array (
                'id' => 23,
                'locker_id' => 5,
                'order_option' => 'шкафы учёта ШУ, ШУЭ',
                'sort_position' => 3,
                'created_at' => '2019-02-11 09:24:24',
                'updated_at' => '2019-02-11 09:24:57',
            ),
            22 => 
            array (
                'id' => 24,
                'locker_id' => 5,
                'order_option' => 'ящики силовые ЯРВ, ЯБПВУ, ЯРВ, ЯТП, ГЗШ, ЯБ',
                'sort_position' => 4,
                'created_at' => '2019-02-11 09:24:28',
                'updated_at' => '2019-02-11 09:24:57',
            ),
            23 => 
            array (
                'id' => 25,
                'locker_id' => 5,
                'order_option' => 'шкафы обогрева ШОВ, ЯОВМ',
                'sort_position' => 5,
                'created_at' => '2019-02-11 09:24:33',
                'updated_at' => '2019-02-11 09:24:57',
            ),
            24 => 
            array (
                'id' => 26,
                'locker_id' => 5,
                'order_option' => 'шкафы клеммные ШЗВ',
                'sort_position' => 6,
                'created_at' => '2019-02-11 09:24:37',
                'updated_at' => '2019-02-11 09:24:57',
            ),
            25 => 
            array (
                'id' => 27,
                'locker_id' => 5,
                'order_option' => 'шкафы питания приводов и выключателей ШПП и ШПВ',
                'sort_position' => 7,
                'created_at' => '2019-02-11 09:24:42',
                'updated_at' => '2019-02-11 09:24:57',
            ),
            26 => 
            array (
                'id' => 28,
                'locker_id' => 5,
                'order_option' => 'шкафы зажимов трансформаторов напряжения ШЗН',
                'sort_position' => 8,
                'created_at' => '2019-02-11 09:24:46',
                'updated_at' => '2019-02-11 09:24:57',
            ),
            27 => 
            array (
                'id' => 29,
                'locker_id' => 5,
                'order_option' => 'щиты освещения ЩО, ОЩВ, ЩО, УОЩВ, ЩО, ОЩВ, ЩОВР, ЩЭО',
                'sort_position' => 9,
                'created_at' => '2019-02-11 09:24:50',
                'updated_at' => '2019-02-11 09:24:57',
            ),
            28 => 
            array (
                'id' => 30,
                'locker_id' => 5,
                'order_option' => 'шкафы собственных нужд ШСН, ЩСН',
                'sort_position' => 10,
                'created_at' => '2019-02-11 09:24:54',
                'updated_at' => '2019-02-11 09:24:57',
            ),
            29 => 
            array (
                'id' => 31,
                'locker_id' => 4,
                'order_option' => 'шкафы видеонаблюдения ВН',
                'sort_position' => 1,
                'created_at' => '2019-02-11 11:53:32',
                'updated_at' => '2019-02-11 15:23:12',
            ),
            30 => 
            array (
                'id' => 32,
                'locker_id' => 4,
                'order_option' => 'шкафы пожарные ОПС',
                'sort_position' => 2,
                'created_at' => '2019-02-11 11:53:45',
                'updated_at' => '2019-02-11 15:23:12',
            ),
            31 => 
            array (
                'id' => 33,
                'locker_id' => 4,
                'order_option' => 'шкафы теленаблюдения ТН',
                'sort_position' => 20,
                'created_at' => '2019-02-11 17:13:07',
                'updated_at' => '2019-02-11 17:13:07',
            ),
            32 => 
            array (
                'id' => 34,
                'locker_id' => 3,
                'order_option' => 'шкафы гарантированного питания ГП',
                'sort_position' => 21,
                'created_at' => '2019-02-14 08:59:03',
                'updated_at' => '2019-02-14 08:59:03',
            ),
            33 => 
            array (
                'id' => 36,
                'locker_id' => 3,
                'order_option' => 'шкафы автоматического ввода резерва АВР',
                'sort_position' => 23,
                'created_at' => '2019-02-14 08:59:14',
                'updated_at' => '2019-02-14 08:59:14',
            ),
            34 => 
            array (
                'id' => 37,
                'locker_id' => 3,
                'order_option' => 'шкафы источников бесперебойного питания ИБП',
                'sort_position' => 24,
                'created_at' => '2019-02-14 08:59:28',
                'updated_at' => '2019-02-14 08:59:28',
            ),
            35 => 
            array (
                'id' => 47,
                'locker_id' => 6,
                'order_option' => 'панели управления и автоматики УА',
                'sort_position' => 25,
                'created_at' => '2019-03-05 18:22:37',
                'updated_at' => '2019-03-05 18:22:37',
            ),
            36 => 
            array (
                'id' => 48,
                'locker_id' => 6,
                'order_option' => 'панели автоматической частотной разгрузки АЧР',
                'sort_position' => 26,
                'created_at' => '2019-03-05 18:22:43',
                'updated_at' => '2019-03-05 18:22:43',
            ),
            37 => 
            array (
                'id' => 49,
                'locker_id' => 6,
                'order_option' => 'панели управления воздушными линиями ВЛ',
                'sort_position' => 27,
                'created_at' => '2019-03-05 18:22:46',
                'updated_at' => '2019-03-05 18:22:46',
            ),
            38 => 
            array (
                'id' => 50,
                'locker_id' => 6,
                'order_option' => 'панели секционного выключателя СВ',
                'sort_position' => 28,
                'created_at' => '2019-03-05 18:22:50',
                'updated_at' => '2019-03-05 18:22:50',
            ),
            39 => 
            array (
                'id' => 51,
                'locker_id' => 6,
                'order_option' => 'панели центральной сигнализации ЦС',
                'sort_position' => 29,
                'created_at' => '2019-03-05 18:22:54',
                'updated_at' => '2019-03-05 18:22:54',
            ),
            40 => 
            array (
                'id' => 52,
                'locker_id' => 6,
                'order_option' => 'панели трансформаторов напряжения ТН 110 кВ/35 кВ/10 кВ',
                'sort_position' => 30,
                'created_at' => '2019-03-05 18:22:57',
                'updated_at' => '2019-03-05 18:22:57',
            ),
            41 => 
            array (
                'id' => 53,
                'locker_id' => 6,
                'order_option' => 'панели управления трансформаторами Т1, Т2 и т.д.',
                'sort_position' => 31,
                'created_at' => '2019-03-05 18:23:01',
                'updated_at' => '2019-03-05 18:23:01',
            ),
        ));
        
        
    }
}