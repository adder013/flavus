<?php

use Illuminate\Database\Seeder;

class LockerTablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locker_tables')->delete();
        
        \DB::table('locker_tables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'locker_id' => 1,
                'year' => '2018',
                'customer' => 'Электрощит самара',
                'object' => 'Оренбургская СЭС-1, Оренбургская СЭС-3',
                'item' => 'Шкаф системы автоматизированного управления блочно-модульной инверторной установкой САУ БМИУ',
                'sort_position' => 1,
                'created_at' => '2019-02-08 14:20:12',
                'updated_at' => '2019-02-13 17:52:09',
            ),
            1 => 
            array (
                'id' => 2,
                'locker_id' => 1,
                'year' => '2017',
                'customer' => 'Тюменьэнерго',
                'object' => 'Ноябрьские сети, Северные сети',
                'item' => 'Шкафы телемеханики и оперативной блокировки разъединителей ТМ и ОБР,<br>
Шкафы телемеханики ТМ,<br>
Шкафы оперативной блокировки разъединителей ОБР',
                'sort_position' => 2,
                'created_at' => '2019-02-08 14:21:19',
                'updated_at' => '2019-02-13 17:52:09',
            ),
            2 => 
            array (
                'id' => 3,
                'locker_id' => 1,
                'year' => '2017',
                'customer' => 'ООО «РН-Краснодарнефтегаз»',
                'object' => 'Строительство АСДТУ объектов энергетики',
                'item' => 'Шкаф телемеханики контроллируемого пункта телемеханики КП ТМ,<br>
Шкаф автоматизированной системы диспетчерско-технологического управления АСДТУ 110',
                'sort_position' => 3,
                'created_at' => '2019-02-08 16:09:10',
                'updated_at' => '2019-02-13 17:52:10',
            ),
            3 => 
            array (
                'id' => 4,
                'locker_id' => 1,
                'year' => '2016',
                'customer' => 'ОАО «МРСК Урала»',
                'object' => 'Модернизация каналов связи для ССПИ на ПС 110кВ Уфалей производственного отделения «Центральные электрические сети» филиала ОАО «МРСК Урала» - «Челябэнерго»',
                'item' => 'Шкафы телемеханики ТМ',
                'sort_position' => 4,
                'created_at' => '2019-02-08 16:09:35',
                'updated_at' => '2019-02-08 16:09:44',
            ),
            4 => 
            array (
                'id' => 5,
                'locker_id' => 1,
                'year' => '2016',
                'customer' => 'ООО «ЭнергоСК»',
                'object' => 'Модернизация ССПИ на ПС 500 кВ «Тарко-Сале» МЭС Западной Сибири',
                'item' => 'Шкафы телемеханики ТМ',
                'sort_position' => 5,
                'created_at' => '2019-02-08 16:09:52',
                'updated_at' => '2019-02-08 16:10:02',
            ),
            5 => 
            array (
                'id' => 6,
                'locker_id' => 1,
                'year' => '2016',
                'customer' => 'АО «Тюменьэнерго» Тюменские РС',
                'object' => 'Реконструкция объекта АСДУ ПС 110/35 кВ «Ушарово»',
                'item' => 'Шкафы телемеханики ТМ',
                'sort_position' => 6,
                'created_at' => '2019-02-08 16:10:11',
                'updated_at' => '2019-02-08 16:10:21',
            ),
            6 => 
            array (
                'id' => 7,
                'locker_id' => 1,
                'year' => '2016',
                'customer' => 'АО «ЕВРАЗ Качканарский горно-обогатительный комбинат»',
                'object' => 'Модернизация СОТИАССО Качканарской ТЭЦ',
                'item' => 'Шкаф системы обмена технологической информацией с автоматизированной системой системного оператора СОТИ АССО',
                'sort_position' => 7,
                'created_at' => '2019-02-08 16:10:29',
                'updated_at' => '2019-02-08 16:10:40',
            ),
            7 => 
            array (
                'id' => 8,
                'locker_id' => 1,
                'year' => '2011',
                'customer' => 'ОАО «Екатеринбургская электросетевая компания»',
            'object' => 'Создание системы сбора и управления подстанции (АСУ ТП) ПС 220/110 кВ «Рябина».',
                'item' => 'Шкафы телемеханики ТМ',
                'sort_position' => 8,
                'created_at' => '2019-02-08 16:10:49',
                'updated_at' => '2019-02-08 16:10:58',
            ),
            8 => 
            array (
                'id' => 9,
                'locker_id' => 1,
                'year' => '2011',
                'customer' => 'ОАО «Екатеринбургская электросетевая компания»',
                'object' => 'Модернизация ССПИ ПС 110кВ Ясная, ПС 110 кВ Академическая ОАО «ЕЭСК»',
                'item' => 'Шкаф системы обмена технологической информацией СОТИ',
                'sort_position' => 9,
                'created_at' => '2019-02-08 16:11:12',
                'updated_at' => '2019-02-08 16:11:21',
            ),
            9 => 
            array (
                'id' => 10,
                'locker_id' => 2,
                'year' => '2017',
                'customer' => 'Тюменьэнерго',
                'object' => 'Ноябрьские сети, Северные сети',
                'item' => 'Шкафы ВЧ-связи,<br>
Шкафы связи',
                'sort_position' => 10,
                'created_at' => '2019-02-11 08:55:30',
                'updated_at' => '2019-02-13 17:53:18',
            ),
            10 => 
            array (
                'id' => 11,
                'locker_id' => 2,
                'year' => '2017',
                'customer' => 'АО «Группа «СВЭЛ»',
                'object' => 'Система связи для ПС 110 кВ «Гринхаус»',
                'item' => 'Шкаф связи',
                'sort_position' => 11,
                'created_at' => '2019-02-11 08:55:57',
                'updated_at' => '2019-02-13 17:53:21',
            ),
            11 => 
            array (
                'id' => 12,
                'locker_id' => 2,
                'year' => '2017',
                'customer' => 'Филиал АО «Тюменьэнерго» - Тюменские распределительные сети',
                'object' => 'Реконструкция ССПД Омутнинский РЭС',
                'item' => 'Шкаф связи',
                'sort_position' => 12,
                'created_at' => '2019-02-11 08:56:13',
                'updated_at' => '2019-02-13 17:53:25',
            ),
            12 => 
            array (
                'id' => 13,
                'locker_id' => 2,
                'year' => '2017',
                'customer' => 'ООО «ИнвестРазвитие»',
                'object' => 'Система связи ПС 220/10 кВ «Обогатительная»',
                'item' => 'Шкаф связи',
                'sort_position' => 13,
                'created_at' => '2019-02-11 08:56:33',
                'updated_at' => '2019-02-13 17:53:29',
            ),
            13 => 
            array (
                'id' => 14,
                'locker_id' => 2,
                'year' => '2017',
                'customer' => 'Филиал ПАО «Русгидро» - Камская ГЭС',
                'object' => 'Модернизация серверной узла связи Камской ГЭС',
                'item' => 'Шкафы связи',
                'sort_position' => 14,
                'created_at' => '2019-02-11 08:56:52',
                'updated_at' => '2019-02-13 17:53:35',
            ),
            14 => 
            array (
                'id' => 15,
                'locker_id' => 2,
                'year' => '2017',
                'customer' => 'ЗАО ГК «Электрощит-ТМ Самара»',
                'object' => 'Системы связи ПС 110/35/10 кВ Русского м/р, ПС 110/10 кВ ПСП «Заполярное»',
                'item' => 'Шкафы связи',
                'sort_position' => 15,
                'created_at' => '2019-02-11 08:57:13',
                'updated_at' => '2019-02-13 17:53:38',
            ),
            15 => 
            array (
                'id' => 16,
                'locker_id' => 2,
                'year' => '2017',
                'customer' => 'ОАО «МРСК Урала»',
                'object' => 'Модернизации каналов связи для ССПИ на ПС 110 кВ Тургояк, Уйская, Юрюзань, Луговая производственного отделения «Златоустовские электрические сети» филиала ОАО «МРСК Урала» - «Челябэнерго»',
                'item' => 'Шкафы связи',
                'sort_position' => 16,
                'created_at' => '2019-02-11 08:57:36',
                'updated_at' => '2019-02-11 08:57:46',
            ),
            16 => 
            array (
                'id' => 17,
                'locker_id' => 2,
                'year' => '2017',
                'customer' => 'ОАО «МРСК Урала»',
                'object' => 'Модернизация каналов связи для ССПИ на ПС 110кВ Уфалей производственного отделения «Центральные электрические сети» филиала ОАО «МРСК Урала» - «Челябэнерго»',
                'item' => 'Шкафы связи',
                'sort_position' => 17,
                'created_at' => '2019-02-11 08:57:55',
                'updated_at' => '2019-02-11 08:58:04',
            ),
            17 => 
            array (
                'id' => 18,
                'locker_id' => 2,
                'year' => '2017',
                'customer' => 'ООО «ЭлектроСтрой»',
                'object' => 'Строительство ВЛ и ПС 110/10 кВ Алексеевка. Сети связи. Система оповещения',
                'item' => 'Шкафы связи,<br>
Шкаф систем громкоговорящей связи СГС',
                'sort_position' => 18,
                'created_at' => '2019-02-11 08:58:14',
                'updated_at' => '2019-02-14 16:57:45',
            ),
            18 => 
            array (
                'id' => 19,
                'locker_id' => 2,
                'year' => '2017',
            'customer' => 'АО «Востсибнефтегаз» (Роснефть)',
                'object' => 'Поставка оборудования связи',
                'item' => 'Шкаф связи',
                'sort_position' => 19,
                'created_at' => '2019-02-11 08:58:39',
                'updated_at' => '2019-02-13 17:53:50',
            ),
            19 => 
            array (
                'id' => 20,
                'locker_id' => 2,
                'year' => '2016',
            'customer' => 'ООО ПТК «ЭКРА-Урал» (для филиала АО «Тюменьэнерго» Тюменские РС)',
                'object' => 'Реконструкция ПС 35/10 кВ «Техническая». Сети связи',
                'item' => 'Шкафы связи',
                'sort_position' => 20,
                'created_at' => '2019-02-11 08:59:00',
                'updated_at' => '2019-02-13 17:53:51',
            ),
            20 => 
            array (
                'id' => 21,
                'locker_id' => 2,
                'year' => '2017',
                'customer' => 'Филиал ОАО «МРСК Урала» - «Свердловэнерго»',
                'object' => 'Перенос узла связи',
                'item' => 'Шкафы АТС',
                'sort_position' => 21,
                'created_at' => '2019-02-11 08:59:26',
                'updated_at' => '2019-02-11 08:59:36',
            ),
            21 => 
            array (
                'id' => 22,
                'locker_id' => 5,
                'year' => '2017',
                'customer' => 'ОАО «МРСК Урала»',
                'object' => 'Основной и резервный узлы связи филиала ОАО «МРСК Урала» - «Свердловэнерго»',
                'item' => 'Щит питания ЩП',
                'sort_position' => 22,
                'created_at' => '2019-02-11 09:25:09',
                'updated_at' => '2019-02-13 17:55:27',
            ),
            22 => 
            array (
                'id' => 23,
                'locker_id' => 5,
                'year' => '2017',
                'customer' => 'Филиал ПАО «Русгидро» - Камская ГЭС',
                'object' => 'Серверная узла связи Камской ГЭС',
                'item' => 'Шкаф автоматического ввода резерва АВР',
                'sort_position' => 23,
                'created_at' => '2019-02-11 09:25:26',
                'updated_at' => '2019-02-13 17:55:30',
            ),
            23 => 
            array (
                'id' => 24,
                'locker_id' => 5,
                'year' => '2016',
                'customer' => 'ОАО «МРСК Урала»',
                'object' => 'Филиал ОАО «МРСК Урала» - «Челябэнерго»',
                'item' => 'Шкафы распределительного устройства низкого напряжения РУНН, щит распределительный ЩРН, щит автоматического ввода резерва АВР, шкаф обогрева выключателей ШОВ-1',
                'sort_position' => 24,
                'created_at' => '2019-02-11 09:25:41',
                'updated_at' => '2019-02-11 09:25:50',
            ),
            24 => 
            array (
                'id' => 25,
                'locker_id' => 5,
                'year' => '2014',
                'customer' => 'Филиал ОАО «МРСК Урала» - «Свердловэнерго»',
                'object' => 'Перенос узла связи',
                'item' => 'Щиты автоматического ввода резерва АВР, Распределительные щиты РЩ, Щиты управления ЩУ',
                'sort_position' => 25,
                'created_at' => '2019-02-11 09:25:59',
                'updated_at' => '2019-02-11 09:26:07',
            ),
            25 => 
            array (
                'id' => 26,
                'locker_id' => 4,
                'year' => '2018',
                'customer' => 'ООО «Формула Безопасности- Урал»',
                'object' => '-',
                'item' => 'Шкаф ВН с обогревом',
                'sort_position' => 4,
                'created_at' => '2019-02-11 14:02:14',
                'updated_at' => '2019-02-13 17:55:59',
            ),
            26 => 
            array (
                'id' => 27,
                'locker_id' => 4,
                'year' => '2018',
                'customer' => 'ООО «Формула Безопасности- Урал»',
                'object' => 'Резервуарный парк ООО «Славнефть-Красноярскнефтегаз»',
                'item' => 'Шкафы ВН с обогревом',
                'sort_position' => 2,
                'created_at' => '2019-02-11 14:03:16',
                'updated_at' => '2019-02-13 17:55:52',
            ),
            27 => 
            array (
                'id' => 28,
                'locker_id' => 4,
                'year' => '2018',
                'customer' => 'Электрощит самара',
                'object' => 'ПС 150 кВ Белокаменка',
                'item' => 'Шкаф теленаблюдения ТН',
                'sort_position' => 1,
                'created_at' => '2019-02-11 17:13:35',
                'updated_at' => '2019-02-11 17:14:15',
            ),
            28 => 
            array (
                'id' => 29,
                'locker_id' => 4,
                'year' => '2018',
                'customer' => 'Электрощит самара',
                'object' => 'ПС 35 кВ Горная',
                'item' => 'Шкафы видеонаблюдения КУРС ВН',
                'sort_position' => 3,
                'created_at' => '2019-02-11 17:14:23',
                'updated_at' => '2019-02-13 17:55:55',
            ),
            29 => 
            array (
                'id' => 30,
                'locker_id' => 4,
                'year' => '2017',
                'customer' => 'Электрощит самара',
                'object' => 'ПС 35/6 кВ Михайловка',
                'item' => 'Шкафы видеонаблюдения КУРС ВН',
                'sort_position' => 5,
                'created_at' => '2019-02-11 17:15:36',
                'updated_at' => '2019-02-13 17:56:05',
            ),
            30 => 
            array (
                'id' => 31,
                'locker_id' => 3,
                'year' => '2017',
                'customer' => 'Филиал АО «Тюменьэнерго» - Тюменские распределительные сети',
                'object' => 'ПС 110/10 кВ Ишимского ТПО',
                'item' => 'Шкафы питания ТМ',
                'sort_position' => 26,
                'created_at' => '2019-02-14 08:59:57',
                'updated_at' => '2019-02-14 09:00:06',
            ),
            31 => 
            array (
                'id' => 32,
                'locker_id' => 3,
                'year' => '2017',
                'customer' => 'АО Тюменьэнерго',
                'object' => 'Ноябрьские сети, Северные сети',
                'item' => 'Шкафы гарантированного питания ГП',
                'sort_position' => 27,
                'created_at' => '2019-02-14 09:00:16',
                'updated_at' => '2019-02-14 09:00:24',
            ),
            32 => 
            array (
                'id' => 33,
                'locker_id' => 3,
                'year' => '2017',
                'customer' => 'ЗАО ГК «Электрощит-ТМ Самара»',
                'object' => 'ПС 110/35/10 кВ Русского м/р, ПС 110/10 кВ ПСП «Заполярное»',
                'item' => 'Шкаф гарантированного питания ГП',
                'sort_position' => 28,
                'created_at' => '2019-02-14 09:00:32',
                'updated_at' => '2019-02-14 09:00:32',
            ),
            33 => 
            array (
                'id' => 34,
                'locker_id' => 3,
                'year' => '2010',
                'customer' => 'ФСК ЕЭС - МЭС Урала',
                'object' => 'ПС 220/110 кВ МЭС Урала',
                'item' => 'Шкафы агрегатов бесперебойного питания СДТУ',
                'sort_position' => 29,
                'created_at' => '2019-02-14 09:00:53',
                'updated_at' => '2019-02-14 09:01:02',
            ),
            34 => 
            array (
                'id' => 35,
                'locker_id' => 3,
                'year' => '2010',
                'customer' => 'ПАО Тюменская магистральная сетевая компания',
                'object' => 'ПС 220/110 кВ Сургут',
                'item' => 'Шкафы гарантированного питания постоянного тока',
                'sort_position' => 30,
                'created_at' => '2019-02-14 09:01:11',
                'updated_at' => '2019-02-14 09:01:23',
            ),
            35 => 
            array (
                'id' => 36,
                'locker_id' => 6,
                'year' => '2019',
                'customer' => 'РДК "Электрические сети"',
                'object' => 'ПС 110/35/10 кВ Буньково',
                'item' => 'Щит управления подстанции в составе:<br> панель АЧР ГЩУ, <br>панель ТН 110, 35 кВ, <br>панель управления ВЛ ГЩУ, <br>панель управления СВ ГЩУ, <br>панель управления Т1 ГЩУ, <br>панель управления Т2 ГЩУ, <br>панель ЦС ГЩУ',
                'sort_position' => 31,
                'created_at' => '2019-03-05 14:49:03',
                'updated_at' => '2019-03-05 17:27:06',
            ),
        ));
        
        
    }
}