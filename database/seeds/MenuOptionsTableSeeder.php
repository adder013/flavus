<?php

use Illuminate\Database\Seeder;

class MenuOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_options')->delete();
        
        \DB::table('menu_options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'О компании',
                'url' => 'about',
                'sort_position' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'Бренды',
                'url' => 'brands',
                'sort_position' => 2,
                'created_at' => NULL,
                'updated_at' => '2020-02-21 03:00:59',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'Новости Уралэнерготел',
                'url' => 'news',
                'sort_position' => 4,
                'created_at' => NULL,
                'updated_at' => '2020-03-03 18:50:12',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'Лицензии',
                'url' => 'licenses',
                'sort_position' => 6,
                'created_at' => NULL,
                'updated_at' => '2020-03-03 18:50:12',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'Наши партнеры',
                'url' => 'partners',
                'sort_position' => 9,
                'created_at' => NULL,
                'updated_at' => '2020-03-03 18:50:12',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'Новости производителей',
                'url' => 'deals',
                'sort_position' => 5,
                'created_at' => NULL,
                'updated_at' => '2020-03-03 18:50:12',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Покупателям',
                'url' => 'customers',
                'sort_position' => 4,
                'created_at' => NULL,
                'updated_at' => '2020-03-03 18:52:08',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 7,
                'depth' => 2,
                'name' => 'Как сделать заказ',
                'url' => 'howtobuy',
                'sort_position' => 3,
                'created_at' => NULL,
                'updated_at' => '2020-02-21 03:00:59',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 7,
                'depth' => 2,
                'name' => 'Оплата',
                'url' => 'howtopay',
                'sort_position' => 7,
                'created_at' => NULL,
                'updated_at' => '2020-03-03 18:50:12',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 7,
                'depth' => 2,
                'name' => 'Гарантия',
                'url' => 'warranty',
                'sort_position' => 10,
                'created_at' => NULL,
                'updated_at' => '2020-03-03 18:50:12',
            ),
            10 => 
            array (
                'id' => 13,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Контакты',
                'url' => 'contacts',
                'sort_position' => 5,
                'created_at' => NULL,
                'updated_at' => '2020-03-03 18:50:58',
            ),
            11 => 
            array (
                'id' => 15,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Каталог',
                'url' => 'catalog',
                'sort_position' => 2,
                'created_at' => '2018-08-27 18:02:57',
                'updated_at' => '2018-09-20 17:56:12',
            ),
            12 => 
            array (
                'id' => 18,
                'parent_id' => 1,
                'depth' => 2,
                'name' => 'О компании',
                'url' => '/',
                'sort_position' => 1,
                'created_at' => '2019-03-19 12:50:28',
                'updated_at' => '2019-03-19 12:50:56',
            ),
            13 => 
            array (
                'id' => 20,
                'parent_id' => 7,
                'depth' => 2,
                'name' => 'Доставка',
                'url' => 'delivery',
                'sort_position' => 8,
                'created_at' => '2019-03-19 16:25:17',
                'updated_at' => '2020-03-03 18:50:12',
            ),
            14 => 
            array (
                'id' => 22,
                'parent_id' => 7,
                'depth' => 2,
                'name' => 'Частые вопросы',
                'url' => 'faq',
                'sort_position' => 11,
                'created_at' => '2019-03-19 16:27:08',
                'updated_at' => '2020-03-03 18:50:12',
            ),
            15 => 
            array (
                'id' => 25,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Стать партнером',
                'url' => '/about/supply',
                'sort_position' => 3,
                'created_at' => '2020-03-03 18:51:58',
                'updated_at' => '2020-03-03 18:52:08',
            ),
            16 => 
            array (
                'id' => 26,
                'parent_id' => NULL,
                'depth' => 1,
                'name' => 'Контейнеры',
                'url' => 'containers',
                'sort_position' => 6,
                'created_at' => '2020-03-20 10:18:33',
                'updated_at' => '2020-03-20 10:18:33',
            ),
        ));
        
        
    }
}