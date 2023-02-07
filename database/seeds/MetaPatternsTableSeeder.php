<?php

use Illuminate\Database\Seeder;

class MetaPatternsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('meta_patterns')->delete();
        
        \DB::table('meta_patterns')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'Категории',
                'metaTitleStartPoint' => 'Купить',
                'metaTitleEndPoint' => 'в интернет-магазине Уралэнерготел',
                'metaDescriptionStartPoint' => 'Купить',
                'metaDescriptionEndPoint' => 'в интернет-магазине Уралэнерготел по выгодной цене с доставкой по Екатеринбургу, Уралу, России, Казахстану, Беларуси, Армении и Киргизии',
                'created_at' => '2018-09-16 07:41:38',
                'updated_at' => '2018-12-10 09:08:42',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'Товары',
                'metaTitleStartPoint' => NULL,
                'metaTitleEndPoint' => 'купить в интернет-магазине Уралэнерготел',
                'metaDescriptionStartPoint' => NULL,
                'metaDescriptionEndPoint' => 'купить в интернет-магазине Уралэнерготел по выгодной цене с доставкой по Екатеринбургу, Уралу, России, Казахстану, Беларуси, Армении и Киргизии',
                'created_at' => '2018-09-16 07:41:38',
                'updated_at' => '2018-12-10 09:08:35',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'Бренды',
                'metaTitleStartPoint' => 'Купить',
                'metaTitleEndPoint' => 'в интернет-магазине Уралэнерготел',
                'metaDescriptionStartPoint' => 'Купить',
                'metaDescriptionEndPoint' => 'в интернет-магазине Уралэнерготел по выгодной цене с доставкой по Екатеринбургу, Уралу, России, Казахстану, Беларуси, Армении и Киргизии',
                'created_at' => '2018-09-16 07:41:38',
                'updated_at' => '2018-12-10 09:08:52',
            ),
        ));
        
        
    }
}