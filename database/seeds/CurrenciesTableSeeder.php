<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currencies')->delete();
        
        \DB::table('currencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Российский рубль',
                'nominal' => 1,
                'char_code' => 'RUB',
                'value' => 1.0,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Австралийский доллар',
                'nominal' => 1,
                'char_code' => 'AUD',
                'value' => 44.6282,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Азербайджанский манат',
                'nominal' => 1,
                'char_code' => 'AZN',
                'value' => 37.998,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Фунт стерлингов Соединенного королевства',
                'nominal' => 1,
                'char_code' => 'GBP',
                'value' => 81.9848,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Армянских драмов',
                'nominal' => 100,
                'char_code' => 'AMD',
                'value' => 13.4299,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Белорусский рубль',
                'nominal' => 1,
                'char_code' => 'BYN',
                'value' => 31.0264,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Болгарский лев',
                'nominal' => 1,
                'char_code' => 'BGN',
                'value' => 36.889,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Бразильский реал',
                'nominal' => 1,
                'char_code' => 'BRL',
                'value' => 16.0254,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Венгерских форинтов',
                'nominal' => 100,
                'char_code' => 'HUF',
                'value' => 22.1597,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Гонконгских долларов',
                'nominal' => 10,
                'char_code' => 'HKD',
                'value' => 82.1245,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Датских крон',
                'nominal' => 10,
                'char_code' => 'DKK',
                'value' => 96.6065,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Доллар США',
                'nominal' => 1,
                'char_code' => 'USD',
                'value' => 64.4636,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Евро',
                'nominal' => 1,
                'char_code' => 'EUR',
                'value' => 72.1863,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Индийских рупий',
                'nominal' => 100,
                'char_code' => 'INR',
                'value' => 92.6534,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Казахстанских тенге',
                'nominal' => 100,
                'char_code' => 'KZT',
                'value' => 16.963,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Канадский доллар',
                'nominal' => 1,
                'char_code' => 'CAD',
                'value' => 47.9426,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Киргизских сомов',
                'nominal' => 100,
                'char_code' => 'KGS',
                'value' => 92.2886,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Китайских юаней',
                'nominal' => 10,
                'char_code' => 'CNY',
                'value' => 93.4716,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Молдавских леев',
                'nominal' => 10,
                'char_code' => 'MDL',
                'value' => 35.6645,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Норвежских крон',
                'nominal' => 10,
                'char_code' => 'NOK',
                'value' => 74.0799,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Польский злотый',
                'nominal' => 1,
                'char_code' => 'PLN',
                'value' => 16.8031,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Румынский лей',
                'nominal' => 1,
                'char_code' => 'RON',
                'value' => 15.1526,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            22 => 
            array (
                'id' => 23,
            'name' => 'СДР (специальные права заимствования)',
                'nominal' => 1,
                'char_code' => 'XDR',
                'value' => 88.9482,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Сингапурский доллар',
                'nominal' => 1,
                'char_code' => 'SGD',
                'value' => 46.8963,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Таджикских сомони',
                'nominal' => 10,
                'char_code' => 'TJS',
                'value' => 68.3239,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Турецкая лира',
                'nominal' => 1,
                'char_code' => 'TRY',
                'value' => 10.6463,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Новый туркменский манат',
                'nominal' => 1,
                'char_code' => 'TMT',
                'value' => 18.4445,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Узбекских сумов',
                'nominal' => 10000,
                'char_code' => 'UZS',
                'value' => 76.2123,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Украинских гривен',
                'nominal' => 10,
                'char_code' => 'UAH',
                'value' => 24.4922,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Чешских крон',
                'nominal' => 10,
                'char_code' => 'CZK',
                'value' => 27.9245,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Шведских крон',
                'nominal' => 10,
                'char_code' => 'SEK',
                'value' => 67.4778,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Швейцарский франк',
                'nominal' => 1,
                'char_code' => 'CHF',
                'value' => 64.0791,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Южноафриканских рэндов',
                'nominal' => 10,
                'char_code' => 'ZAR',
                'value' => 44.682,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Вон Республики Корея',
                'nominal' => 1000,
                'char_code' => 'KRW',
                'value' => 54.3753,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Японских иен',
                'nominal' => 100,
                'char_code' => 'JPY',
                'value' => 58.8521,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
        ));
        
        
    }
}