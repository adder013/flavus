<?php

use Illuminate\Database\Seeder;

class LockerSlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locker_sliders')->delete();
        
        \DB::table('locker_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'locker_id' => 1,
                'name' => 'Шкаф ТИ',
                'customer' => NULL,
            'description' => 'Шкаф предназначен для измерения значений тока и напряжения во вторичных обмотках трансформаторов тока (ТТ) и напряжения (ТН) основного оборудования электроэнергетического объекта и передачи информации об измеренных и расчетных величинах в цифровом виде в контроллеры или серверы телемеханики, системы технического учета или мониторинга.',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/tm_and_askue/ti.jpg',
                'sort_position' => '1',
                'created_at' => '2019-02-08 14:27:28',
                'updated_at' => '2019-02-08 15:24:14',
            ),
            1 => 
            array (
                'id' => 2,
                'locker_id' => 1,
                'name' => 'Шкаф САУ БМИУ',
                'customer' => 'Электрощит самара',
            'description' => 'Шкаф Системы Автоматизированного Управления Блочно-Модульной Инверторной Установкой (далее Шкаф САУ БМИУ) обеспечивает сбор телеметрических данных о состоянии оборудования объекта по цифровым линиям связи (RS485) и по сигналам положения типа «сухой контакт», вывод команд дистанционного управления коммутационными аппаратами установки, учет электрической энергии. Шкаф функционально состоит из двух подсистем: учета электрической энергии и мониторинга и управления оборудованием.',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/tm_and_askue/sau_bmiu.jpg',
                'sort_position' => '2',
                'created_at' => '2019-02-08 14:45:39',
                'updated_at' => '2019-02-08 14:46:06',
            ),
            2 => 
            array (
                'id' => 3,
                'locker_id' => 1,
                'name' => 'Шкаф СОТИ АССО',
                'customer' => 'Филиал "Качканарская ТЭЦ", ОАО "ЕВРАЗ КГОК"',
            'description' => 'Шкаф предназначен для измерения значений тока и напряжения во вторичных обмотках трансформаторов тока (ТТ) и напряжения (ТН) основного оборудования электроэнергетического объекта, сбора дискретных сигналов с контролируемых объектов и передачи информации об измеренных и расчетных величинах в цифровом виде в контроллеры телемеханики, системы технического учета или мониторинга. В качестве источника сигнала используются датчики типа «сухой контакт».',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/tm_and_askue/sotiasso.jpg',
                'sort_position' => '3',
                'created_at' => '2019-02-08 16:07:51',
                'updated_at' => '2019-02-08 16:08:27',
            ),
            3 => 
            array (
                'id' => 4,
                'locker_id' => 1,
                'name' => 'Шкаф ТМ и ОБРМ',
                'customer' => 'Тюменьэнерго',
                'description' => 'Шкаф телемеханики и оперативной блокировки разъединителей обеспечивает сбор информации о положении коммутационного оборудования объекта, обработку полученной информации, выдачу разрешения на выполнение операции переключения на подконтрольном оборудовании. Полученные данные, логические схемы и другая необходимая информация о работе шкафа, выводится на встроенную сенсорную панель.',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/tm_and_askue/tm_2.jpg',
                'sort_position' => '4',
                'created_at' => '2019-02-08 16:08:36',
                'updated_at' => '2019-02-08 16:08:50',
            ),
            4 => 
            array (
                'id' => 5,
                'locker_id' => 2,
                'name' => 'Шкаф связи',
                'customer' => NULL,
                'description' => 'Шкаф связи предназначен для передачи данных, обработки информации и организации диспетчерской связи объекта. Шкаф представляет собой напольный конструктив с расположенным внутри телекоммуникационным оборудованием. Шкаф выполнен в металлическом корпусе размерами 2000x800x800 мм, и имеет стеклянную переднюю дверь и металлическую заднюю дверь.',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/svyaz/svyazi.jpg',
                'sort_position' => '5',
                'created_at' => '2019-02-11 09:07:01',
                'updated_at' => '2019-02-11 09:07:01',
            ),
            5 => 
            array (
                'id' => 6,
                'locker_id' => 2,
                'name' => 'Шкаф ВЧ',
                'customer' => 'Тюменьэнерго',
                'description' => 'Шкаф ВЧ-связи предназначен для передачи данных, обработки информации и организации диспетчерской связи объекта.',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/svyaz/vch.jpg',
                'sort_position' => '6',
                'created_at' => '2019-02-11 09:07:37',
                'updated_at' => '2019-02-11 09:07:51',
            ),
            6 => 
            array (
                'id' => 7,
                'locker_id' => 2,
                'name' => 'Шкаф серверный',
                'customer' => 'РН-Снабжение-Нефтеюганск',
                'description' => 'Шкаф представляет собой напольный конструктив с расположенным внутри телекоммуникационным оборудованием и устройствами обеспечения питания. Шкаф выполнен в металлическом корпусе размерами 2100x600x800 мм, и имеет стеклянную переднюю дверь и металлическую заднюю дверь.',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/svyaz/server.jpg',
                'sort_position' => '7',
                'created_at' => '2019-02-11 09:08:04',
                'updated_at' => '2019-02-11 09:08:20',
            ),
            7 => 
            array (
                'id' => 8,
                'locker_id' => 5,
                'name' => 'Щит автоматического ввода резерва АВР',
                'customer' => 'ПАО Россети, ОАО МРСК Урала',
                'description' => 'Данный щит электропитания с устройством АВР предназначен для обеспечения гарантированного электропитания подключенных потребителей, автоматического переключение нагрузки с основного ввода на резервный и обратно, а также выдачи сигнала тревоги в случае аварийного события с оборудованием системы электроснабжения',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/nku/avr.jpg',
                'sort_position' => '8',
                'created_at' => '2019-02-11 09:22:34',
                'updated_at' => '2019-02-11 09:22:52',
            ),
            8 => 
            array (
                'id' => 9,
                'locker_id' => 5,
                'name' => 'Шкаф распределительных устройств низкого напряжения РУНН',
                'customer' => 'ПАО Россети, ОАО МРСК Урала, филиал Челябэнерго',
                'description' => 'Данный шкаф распределительного устройства низкого напряжения РУНН предназначен для комплектования мачтовой трансформаторной подстанции и подключения потребителей по низкой стороне силового трансформатора, а также для защиты от перегрузок и токов короткого замыкания, замыкания на землю в трехфазных электрических сетях с глухозаземленной нейтралью напряжением 380/220В переменного тока частотой 50Гц.',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/nku/runn.png',
                'sort_position' => '9',
                'created_at' => '2019-02-11 09:23:03',
                'updated_at' => '2019-02-11 09:23:03',
            ),
            9 => 
            array (
                'id' => 10,
                'locker_id' => 5,
                'name' => 'Шкаф ШОВ-1',
                'customer' => 'ПАО Россети, ОАО МРСК Урала, филиал Челябэнерго',
                'description' => 'Данный шкаф обогрева выключателей предназначен для питания обогрева выключателей и их приводов с мощностью нагревателей до 10 кВт на фазу при одновременном выключении баков и приводов.',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/nku/shov.jpg',
                'sort_position' => '10',
                'created_at' => '2019-02-11 09:23:25',
                'updated_at' => '2019-02-11 09:23:38',
            ),
            10 => 
            array (
                'id' => 11,
                'locker_id' => 5,
                'name' => 'Шкаф зажимов трансформатора напряжения ТН ШЗН',
                'customer' => 'филиал АО «Электросетьсервис ЕНЭС» - Западно-Сибирская СПБ',
                'description' => 'Данный шкаф зажимов трансформаторов напряжения ШЗН-1А предназначен для подключения и распределения вторичных цепей измерительных трансформаторов напряжения, устанавливаемых на ЛЭП 330-500 кВ, на шинах 110-500кВ. Шкаф ШЗН-1А выполнен во всепогодном корпусе.',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/nku/shzn.jpg',
                'sort_position' => '10',
                'created_at' => '2019-02-11 09:23:46',
                'updated_at' => '2019-02-11 09:24:03',
            ),
            11 => 
            array (
                'id' => 12,
                'locker_id' => 4,
                'name' => 'Шкаф ВН',
                'customer' => 'Формула Безопасности',
                'description' => 'Шкаф системы видеонаблюдения  служит для сбора видеоданных с группы видеокамер и передачи полученных видеоданных на центральные устройства регистрации.',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/surveillance/kurs.png',
                'sort_position' => '10',
                'created_at' => '2019-02-11 11:51:46',
                'updated_at' => '2019-02-11 11:51:46',
            ),
            12 => 
            array (
                'id' => 13,
                'locker_id' => 3,
                'name' => 'Шкаф ИБП ТМ',
                'customer' => 'Prosoft',
            'description' => 'Данный шкаф предназначен для снабжения питанием однофазной нагрузки в соответствии с требованиями ПТЭ (ПТЭП) к электроснабжению потребителей по первой особой категории надежности, а также обеспечивает постоянным оперативным током цепи сигнализации и управления. В шкаф установлен источник бесперебойного питания APC.',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/ibp/ibp.png',
                'sort_position' => '10',
                'created_at' => '2019-02-14 09:04:19',
                'updated_at' => '2019-02-14 09:04:36',
            ),
            13 => 
            array (
                'id' => 14,
                'locker_id' => 3,
                'name' => 'Шкаф ГП',
                'customer' => 'ПАО Россети, АО Тюменьэнерго',
                'description' => 'Данный шкаф гарантированного питания предназначен для обеспечения электропитанием оборудования телемеханики, а также цепей телесигналов и электромагнитной блокировки. Шкаф имеет в своем составе источник гарантированного питания. Шкаф обеспечивает питание нагрузки переменным и постоянным током, номинальным напряжением 230 и 220 Вольт, соответственно. В шкаф установлен источник бесперебойного питания Eaton.',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/ibp/shgp.jpg',
                'sort_position' => '10',
                'created_at' => '2019-02-14 09:04:45',
                'updated_at' => '2019-02-14 09:04:45',
            ),
            14 => 
            array (
                'id' => 15,
                'locker_id' => 6,
                'name' => 'Щит управления подстанцией',
                'customer' => 'РДК "Электрические сети"',
            'description' => 'Панель управления предназначена для управления коммутационными аппаратами,  разъединителями и заземляющими ножами, а также измерения по присоединениям, и аварийной и предупредительной сигнализации. На фасаде выполнена мнемосхема в цветах RAl-2005 (красный), RAL-5017 (синий) из долговечного ультрафиолетостойкого пластика. Металлокаркас собственного производства Уралэнерготел.',
                'image' => '/storage/uploads/shkafy-individualnoi-sborki/substation/schu.png',
                'sort_position' => '10',
                'created_at' => '2019-03-05 14:44:22',
                'updated_at' => '2019-03-05 18:46:21',
            ),
        ));
        
        
    }
}