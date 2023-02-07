<?php

use Illuminate\Database\Seeder;

class HomeBrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home_brands')->delete();
        
        \DB::table('home_brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'block_id' => 1,
                'brand_id' => 3,
                'created_at' => '2018-08-29 06:47:14',
                'updated_at' => '2018-08-29 06:47:14',
            ),
            1 => 
            array (
                'id' => 2,
                'block_id' => 2,
                'brand_id' => 1,
                'created_at' => '2018-08-29 06:47:17',
                'updated_at' => '2019-02-14 08:32:07',
            ),
            2 => 
            array (
                'id' => 3,
                'block_id' => 3,
                'brand_id' => 25,
                'created_at' => '2018-08-29 06:47:19',
                'updated_at' => '2019-02-14 08:32:16',
            ),
            3 => 
            array (
                'id' => 4,
                'block_id' => 4,
                'brand_id' => 32,
                'created_at' => '2018-08-29 06:47:21',
                'updated_at' => '2019-04-29 09:53:04',
            ),
            4 => 
            array (
                'id' => 5,
                'block_id' => 5,
                'brand_id' => 5,
                'created_at' => '2018-08-29 06:47:25',
                'updated_at' => '2019-02-14 08:32:34',
            ),
            5 => 
            array (
                'id' => 6,
                'block_id' => 6,
                'brand_id' => 4,
                'created_at' => '2018-08-29 06:47:30',
                'updated_at' => '2019-02-14 08:32:40',
            ),
            6 => 
            array (
                'id' => 7,
                'block_id' => 7,
                'brand_id' => 10,
                'created_at' => '2018-08-29 06:47:33',
                'updated_at' => '2018-08-29 06:47:33',
            ),
            7 => 
            array (
                'id' => 8,
                'block_id' => 8,
                'brand_id' => 11,
                'created_at' => '2018-08-29 06:47:38',
                'updated_at' => '2018-08-29 06:47:38',
            ),
            8 => 
            array (
                'id' => 9,
                'block_id' => 9,
                'brand_id' => 8,
                'created_at' => '2018-08-29 06:47:41',
                'updated_at' => '2018-08-29 06:47:41',
            ),
            9 => 
            array (
                'id' => 10,
                'block_id' => 10,
                'brand_id' => 12,
                'created_at' => '2018-08-29 06:47:45',
                'updated_at' => '2018-08-29 06:47:45',
            ),
            10 => 
            array (
                'id' => 11,
                'block_id' => 11,
                'brand_id' => 7,
                'created_at' => '2018-08-29 06:47:50',
                'updated_at' => '2019-02-14 08:32:53',
            ),
            11 => 
            array (
                'id' => 12,
                'block_id' => 12,
                'brand_id' => 2,
                'created_at' => '2018-08-29 06:47:53',
                'updated_at' => '2019-02-14 08:32:59',
            ),
            12 => 
            array (
                'id' => 13,
                'block_id' => 13,
                'brand_id' => 20,
                'created_at' => '2018-11-13 05:52:20',
                'updated_at' => '2018-11-13 05:52:20',
            ),
            13 => 
            array (
                'id' => 14,
                'block_id' => 14,
                'brand_id' => 13,
                'created_at' => '2018-11-13 05:52:24',
                'updated_at' => '2019-02-14 08:33:04',
            ),
            14 => 
            array (
                'id' => 16,
                'block_id' => 16,
                'brand_id' => 27,
                'created_at' => '2018-11-13 05:52:47',
                'updated_at' => '2019-02-14 08:33:16',
            ),
            15 => 
            array (
                'id' => 17,
                'block_id' => 17,
                'brand_id' => 33,
                'created_at' => '2018-11-13 05:52:51',
                'updated_at' => '2019-05-15 04:22:45',
            ),
            16 => 
            array (
                'id' => 18,
                'block_id' => 15,
                'brand_id' => 34,
                'created_at' => '2019-05-20 12:04:55',
                'updated_at' => '2019-05-20 12:04:55',
            ),
        ));
        
        
    }
}