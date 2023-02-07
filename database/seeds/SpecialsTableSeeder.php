<?php

use Illuminate\Database\Seeder;

class SpecialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('specials')->delete();
        
        \DB::table('specials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Снижение цен на шкафы 19\'\' в наличии',
                'url' => 'cabinets19_new_prices',
                'active' => 1,
                'sticker_id' => 0,
                'h2' => 'Снижение цен на шкафы 19\'\'',
                'short_description' => 'С апреля 2018 года в интернет-магазине Уралэнерготел действуют новые цены на 19-дюймовые шкафы производства турецкой компании Lande как в наличии на складе в Екатеринбурге, так и под заказ из Турции.',
                'description' => '<p>С апреля 2018 года в интернет-магазине Уралэнерготел действуют новые цены на 19-дюймовые шкафы производства турецкой компании Lande.</p><p>Новые цены на продукцию Lande распространяются как в наличии на складе в Екатеринбурге, так и под заказ из Турции.</p>',
                'image' => '/storage/specials/1/kQ0T0pnbFleiBulj7p2377lxQ5CFqIXH2lzeDrk0.png',
                'metaTitle' => 'Снижение цен на шкафы 19\'\' Lande в наличии в интернет-магазине Уралэнерготел',
                'metaDescription' => 'Низкие цены на шкафы 19 дюймов Lande в наличии в интернет-магазине Уралэнерготел',
                'created_at' => '2018-08-02 04:15:12',
                'updated_at' => '2018-08-02 04:17:52',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Снижение цен на продукцию ИЦ Энергосервис',
                'url' => 'enip2',
                'active' => 1,
                'sticker_id' => 0,
                'h2' => NULL,
                'short_description' => 'Снижение цен на продукцию ИЦ Энергосервис в интернет-магазине Уралэнерготел с 3 квартала 2018: ЭНИП-2, ЭНМВ, ЭНКС, ЭНКМ и многое другое',
                'description' => '<p>С 3 квартала 2018 в интернет-магазине Уралэнерготел на продукцию ИЦ Энергосервис действуют новые цены. По сниженным ценам вы можете купить электроизмерительные приборы и оборудование для систем телемеханики:
</p>
<ul>
<li><a href="https://uralenergotel.ru/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/enip2/" target="_blank">многофункциональные измерительные преобразователи ЭНИП-2 и ЭНИП-2 УСВИ/PMU (с поддержкой векторых измерений)</a></li>
<li><a href="https://uralenergotel.ru/category/Elektroizmeritelnye-pribory/Tsifrovye-indikatory/" target="_blank">модули индикации ЭНМИ</a></li>
<li><a href="https://uralenergotel.ru/category/telemechanics/input_output_modules/" target="_blank">устройства ввода/вывода ЭНМВ-1, ЭНМВ-2, ЭНМВ-1w, ЭНМВ-3</a></li>
<li><a href="https://uralenergotel.ru/category/telemechanics/rtu/" target="_blank">устройства сбора данных ЭНКС-3м, ЭНКМ-3</a></li>
<li><a href="https://uralenergotel.ru/category/accessories-metering/antennas_sensors/" target="_blank">антенны и датчики</a></li>
<li><a href="https://uralenergotel.ru/category/accessories-metering/voltage_dividers/" target="_blank">делители напряжения</a>
</li>
</ul>
<p>и другие товары производства <a href="https://uralenergotel.ru/brand/energoservis/" target="_blank">ООО "ИЦ Энергосервис".</a>
</p>
<p>Для заказа шкафа свяжитесь с нашими менеджерами по телефону  <a href="tel:+73432281862">+7 (343) 228-18-62</a> или оставьте заявку по e-mail <a href="mailto:sale@uralenergotel.ru">sale@uralenergotel.ru</a>
</p>',
                'image' => '/storage/specials/2/52jsw9av49EDrQW9x0V3UVfmJeBuZ3qGMBL9FQ1B.jpeg',
                'metaTitle' => 'Снижение цен на продукцию ИЦ Энергосервис в интернет-магазине Уралэнерготел',
                'metaDescription' => 'Снижение цен на ЭНИП-2, УСВИ, ЭНКС, ЭНКМ, ЭНМВ в интернет-магазине Уралэнерготел',
                'created_at' => '2018-08-02 04:17:06',
                'updated_at' => '2018-08-02 04:17:15',
            ),
        ));
        
        
    }
}