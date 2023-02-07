<?php

use Illuminate\Database\Seeder;

class StickersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stickers')->delete();
        
        \DB::table('stickers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'color' => '#5ace63',
                'text' => 'бесплатная доставка по России',
                'created_at' => '2018-09-10 04:21:06',
                'updated_at' => '2018-09-10 04:21:06',
            ),
            1 => 
            array (
                'id' => 2,
                'color' => '#5ace63',
                'text' => 'новинка',
                'created_at' => '2018-09-21 12:53:04',
                'updated_at' => '2018-09-21 12:53:04',
            ),
            2 => 
            array (
                'id' => 3,
                'color' => '#9467bc',
                'text' => 'снят с производства',
                'created_at' => '2018-10-09 16:25:35',
                'updated_at' => '2018-10-17 06:15:33',
            ),
            3 => 
            array (
                'id' => 4,
                'color' => '#5ace63',
                'text' => 'бесплатная доставка по Уралу и Башкирии',
                'created_at' => '2018-11-08 04:58:19',
                'updated_at' => '2018-11-08 04:58:19',
            ),
        ));
        
        
    }
}