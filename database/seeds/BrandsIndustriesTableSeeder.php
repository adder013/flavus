<?php

use Illuminate\Database\Seeder;

class BrandsIndustriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands_industries')->delete();
        
        \DB::table('brands_industries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Энергетика',
                'sort_position' => 1,
                'created_at' => NULL,
                'updated_at' => '2019-10-28 13:16:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Промышленность',
                'sort_position' => 2,
                'created_at' => NULL,
                'updated_at' => '2019-10-28 13:16:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Нефтегаз',
                'sort_position' => 3,
                'created_at' => NULL,
                'updated_at' => '2019-10-28 13:16:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ЖКХ',
                'sort_position' => 4,
                'created_at' => NULL,
                'updated_at' => '2019-10-28 13:16:13',
            ),
        ));
        
        
    }
}