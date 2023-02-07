<?php

use Illuminate\Database\Seeder;

class BrandsIndustriesConnectionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands_industries_connection')->delete();
        
        \DB::table('brands_industries_connection')->insert(array (
            0 => 
            array (
                'id' => 3,
                'industry_id' => 1,
                'brand_id' => 12,
                'created_at' => '2019-10-28 15:53:23',
                'updated_at' => '2019-10-28 15:53:23',
            ),
            1 => 
            array (
                'id' => 4,
                'industry_id' => 1,
                'brand_id' => 1,
                'created_at' => '2019-10-28 15:54:02',
                'updated_at' => '2019-10-28 15:54:02',
            ),
            2 => 
            array (
                'id' => 5,
                'industry_id' => 2,
                'brand_id' => 1,
                'created_at' => '2019-10-28 15:54:02',
                'updated_at' => '2019-10-28 15:54:02',
            ),
            3 => 
            array (
                'id' => 6,
                'industry_id' => 3,
                'brand_id' => 1,
                'created_at' => '2019-10-28 15:54:02',
                'updated_at' => '2019-10-28 15:54:02',
            ),
            4 => 
            array (
                'id' => 7,
                'industry_id' => 4,
                'brand_id' => 1,
                'created_at' => '2019-10-28 15:54:02',
                'updated_at' => '2019-10-28 15:54:02',
            ),
            5 => 
            array (
                'id' => 8,
                'industry_id' => 1,
                'brand_id' => 21,
                'created_at' => '2019-10-28 15:55:00',
                'updated_at' => '2019-10-28 15:55:00',
            ),
            6 => 
            array (
                'id' => 9,
                'industry_id' => 1,
                'brand_id' => 20,
                'created_at' => '2019-10-28 15:55:10',
                'updated_at' => '2019-10-28 15:55:10',
            ),
            7 => 
            array (
                'id' => 15,
                'industry_id' => 1,
                'brand_id' => 11,
                'created_at' => '2019-10-28 15:58:02',
                'updated_at' => '2019-10-28 15:58:02',
            ),
            8 => 
            array (
                'id' => 16,
                'industry_id' => 2,
                'brand_id' => 11,
                'created_at' => '2019-10-28 15:58:02',
                'updated_at' => '2019-10-28 15:58:02',
            ),
            9 => 
            array (
                'id' => 17,
                'industry_id' => 1,
                'brand_id' => 10,
                'created_at' => '2019-10-28 15:58:10',
                'updated_at' => '2019-10-28 15:58:10',
            ),
            10 => 
            array (
                'id' => 18,
                'industry_id' => 1,
                'brand_id' => 8,
                'created_at' => '2019-10-28 15:58:20',
                'updated_at' => '2019-10-28 15:58:20',
            ),
            11 => 
            array (
                'id' => 19,
                'industry_id' => 1,
                'brand_id' => 7,
                'created_at' => '2019-10-28 15:58:29',
                'updated_at' => '2019-10-28 15:58:29',
            ),
            12 => 
            array (
                'id' => 20,
                'industry_id' => 1,
                'brand_id' => 5,
                'created_at' => '2019-10-28 15:58:37',
                'updated_at' => '2019-10-28 15:58:37',
            ),
            13 => 
            array (
                'id' => 21,
                'industry_id' => 2,
                'brand_id' => 5,
                'created_at' => '2019-10-28 15:58:37',
                'updated_at' => '2019-10-28 15:58:37',
            ),
            14 => 
            array (
                'id' => 22,
                'industry_id' => 3,
                'brand_id' => 5,
                'created_at' => '2019-10-28 15:58:37',
                'updated_at' => '2019-10-28 15:58:37',
            ),
            15 => 
            array (
                'id' => 23,
                'industry_id' => 1,
                'brand_id' => 4,
                'created_at' => '2019-10-28 15:58:45',
                'updated_at' => '2019-10-28 15:58:45',
            ),
            16 => 
            array (
                'id' => 24,
                'industry_id' => 2,
                'brand_id' => 4,
                'created_at' => '2019-10-28 15:58:45',
                'updated_at' => '2019-10-28 15:58:45',
            ),
            17 => 
            array (
                'id' => 25,
                'industry_id' => 3,
                'brand_id' => 4,
                'created_at' => '2019-10-28 15:58:45',
                'updated_at' => '2019-10-28 15:58:45',
            ),
            18 => 
            array (
                'id' => 26,
                'industry_id' => 1,
                'brand_id' => 3,
                'created_at' => '2019-10-28 15:59:20',
                'updated_at' => '2019-10-28 15:59:20',
            ),
            19 => 
            array (
                'id' => 27,
                'industry_id' => 2,
                'brand_id' => 3,
                'created_at' => '2019-10-28 15:59:20',
                'updated_at' => '2019-10-28 15:59:20',
            ),
            20 => 
            array (
                'id' => 28,
                'industry_id' => 3,
                'brand_id' => 3,
                'created_at' => '2019-10-28 15:59:20',
                'updated_at' => '2019-10-28 15:59:20',
            ),
            21 => 
            array (
                'id' => 29,
                'industry_id' => 1,
                'brand_id' => 2,
                'created_at' => '2019-10-28 15:59:28',
                'updated_at' => '2019-10-28 15:59:28',
            ),
            22 => 
            array (
                'id' => 30,
                'industry_id' => 2,
                'brand_id' => 2,
                'created_at' => '2019-10-28 15:59:28',
                'updated_at' => '2019-10-28 15:59:28',
            ),
            23 => 
            array (
                'id' => 31,
                'industry_id' => 1,
                'brand_id' => 25,
                'created_at' => '2019-10-28 15:59:36',
                'updated_at' => '2019-10-28 15:59:36',
            ),
            24 => 
            array (
                'id' => 32,
                'industry_id' => 2,
                'brand_id' => 25,
                'created_at' => '2019-10-28 15:59:36',
                'updated_at' => '2019-10-28 15:59:36',
            ),
            25 => 
            array (
                'id' => 33,
                'industry_id' => 3,
                'brand_id' => 25,
                'created_at' => '2019-10-28 15:59:36',
                'updated_at' => '2019-10-28 15:59:36',
            ),
            26 => 
            array (
                'id' => 34,
                'industry_id' => 4,
                'brand_id' => 25,
                'created_at' => '2019-10-28 15:59:36',
                'updated_at' => '2019-10-28 15:59:36',
            ),
            27 => 
            array (
                'id' => 35,
                'industry_id' => 1,
                'brand_id' => 26,
                'created_at' => '2019-10-28 15:59:50',
                'updated_at' => '2019-10-28 15:59:50',
            ),
            28 => 
            array (
                'id' => 36,
                'industry_id' => 2,
                'brand_id' => 26,
                'created_at' => '2019-10-28 15:59:50',
                'updated_at' => '2019-10-28 15:59:50',
            ),
            29 => 
            array (
                'id' => 37,
                'industry_id' => 3,
                'brand_id' => 26,
                'created_at' => '2019-10-28 15:59:50',
                'updated_at' => '2019-10-28 15:59:50',
            ),
            30 => 
            array (
                'id' => 38,
                'industry_id' => 4,
                'brand_id' => 26,
                'created_at' => '2019-10-28 15:59:50',
                'updated_at' => '2019-10-28 15:59:50',
            ),
            31 => 
            array (
                'id' => 39,
                'industry_id' => 1,
                'brand_id' => 27,
                'created_at' => '2019-10-28 16:00:00',
                'updated_at' => '2019-10-28 16:00:00',
            ),
            32 => 
            array (
                'id' => 40,
                'industry_id' => 1,
                'brand_id' => 28,
                'created_at' => '2019-10-28 16:00:12',
                'updated_at' => '2019-10-28 16:00:12',
            ),
            33 => 
            array (
                'id' => 41,
                'industry_id' => 2,
                'brand_id' => 28,
                'created_at' => '2019-10-28 16:00:12',
                'updated_at' => '2019-10-28 16:00:12',
            ),
            34 => 
            array (
                'id' => 42,
                'industry_id' => 1,
                'brand_id' => 29,
                'created_at' => '2019-10-28 16:00:25',
                'updated_at' => '2019-10-28 16:00:25',
            ),
            35 => 
            array (
                'id' => 43,
                'industry_id' => 2,
                'brand_id' => 29,
                'created_at' => '2019-10-28 16:00:25',
                'updated_at' => '2019-10-28 16:00:25',
            ),
            36 => 
            array (
                'id' => 44,
                'industry_id' => 1,
                'brand_id' => 30,
                'created_at' => '2019-10-28 16:00:31',
                'updated_at' => '2019-10-28 16:00:31',
            ),
            37 => 
            array (
                'id' => 51,
                'industry_id' => 1,
                'brand_id' => 34,
                'created_at' => '2019-10-28 16:00:54',
                'updated_at' => '2019-10-28 16:00:54',
            ),
            38 => 
            array (
                'id' => 52,
                'industry_id' => 1,
                'brand_id' => 35,
                'created_at' => '2019-10-28 16:01:00',
                'updated_at' => '2019-10-28 16:01:00',
            ),
            39 => 
            array (
                'id' => 53,
                'industry_id' => 2,
                'brand_id' => 35,
                'created_at' => '2019-10-28 16:01:00',
                'updated_at' => '2019-10-28 16:01:00',
            ),
            40 => 
            array (
                'id' => 58,
                'industry_id' => 1,
                'brand_id' => 33,
                'created_at' => '2019-10-28 16:01:18',
                'updated_at' => '2019-10-28 16:01:18',
            ),
            41 => 
            array (
                'id' => 59,
                'industry_id' => 2,
                'brand_id' => 33,
                'created_at' => '2019-10-28 16:01:18',
                'updated_at' => '2019-10-28 16:01:18',
            ),
            42 => 
            array (
                'id' => 60,
                'industry_id' => 3,
                'brand_id' => 33,
                'created_at' => '2019-10-28 16:01:18',
                'updated_at' => '2019-10-28 16:01:18',
            ),
            43 => 
            array (
                'id' => 61,
                'industry_id' => 1,
                'brand_id' => 37,
                'created_at' => '2019-10-28 16:01:24',
                'updated_at' => '2019-10-28 16:01:24',
            ),
            44 => 
            array (
                'id' => 62,
                'industry_id' => 2,
                'brand_id' => 37,
                'created_at' => '2019-10-28 16:01:24',
                'updated_at' => '2019-10-28 16:01:24',
            ),
            45 => 
            array (
                'id' => 67,
                'industry_id' => 1,
                'brand_id' => 38,
                'created_at' => '2019-10-28 16:03:14',
                'updated_at' => '2019-10-28 16:03:14',
            ),
            46 => 
            array (
                'id' => 68,
                'industry_id' => 2,
                'brand_id' => 38,
                'created_at' => '2019-10-28 16:03:14',
                'updated_at' => '2019-10-28 16:03:14',
            ),
            47 => 
            array (
                'id' => 69,
                'industry_id' => 3,
                'brand_id' => 38,
                'created_at' => '2019-10-28 16:03:14',
                'updated_at' => '2019-10-28 16:03:14',
            ),
            48 => 
            array (
                'id' => 70,
                'industry_id' => 4,
                'brand_id' => 38,
                'created_at' => '2019-10-28 16:03:14',
                'updated_at' => '2019-10-28 16:03:14',
            ),
            49 => 
            array (
                'id' => 71,
                'industry_id' => 3,
                'brand_id' => 39,
                'created_at' => '2019-10-28 16:03:31',
                'updated_at' => '2019-10-28 16:03:31',
            ),
            50 => 
            array (
                'id' => 72,
                'industry_id' => 2,
                'brand_id' => 40,
                'created_at' => '2019-10-28 16:03:46',
                'updated_at' => '2019-10-28 16:03:46',
            ),
            51 => 
            array (
                'id' => 73,
                'industry_id' => 2,
                'brand_id' => 41,
                'created_at' => '2019-10-28 16:03:53',
                'updated_at' => '2019-10-28 16:03:53',
            ),
            52 => 
            array (
                'id' => 74,
                'industry_id' => 1,
                'brand_id' => 42,
                'created_at' => '2019-10-28 16:04:04',
                'updated_at' => '2019-10-28 16:04:04',
            ),
            53 => 
            array (
                'id' => 75,
                'industry_id' => 2,
                'brand_id' => 42,
                'created_at' => '2019-10-28 16:04:04',
                'updated_at' => '2019-10-28 16:04:04',
            ),
            54 => 
            array (
                'id' => 76,
                'industry_id' => 3,
                'brand_id' => 42,
                'created_at' => '2019-10-28 16:04:04',
                'updated_at' => '2019-10-28 16:04:04',
            ),
            55 => 
            array (
                'id' => 77,
                'industry_id' => 4,
                'brand_id' => 42,
                'created_at' => '2019-10-28 16:04:04',
                'updated_at' => '2019-10-28 16:04:04',
            ),
            56 => 
            array (
                'id' => 80,
                'industry_id' => 1,
                'brand_id' => 31,
                'created_at' => '2019-10-28 16:06:07',
                'updated_at' => '2019-10-28 16:06:07',
            ),
            57 => 
            array (
                'id' => 81,
                'industry_id' => 2,
                'brand_id' => 31,
                'created_at' => '2019-10-28 16:06:07',
                'updated_at' => '2019-10-28 16:06:07',
            ),
            58 => 
            array (
                'id' => 82,
                'industry_id' => 1,
                'brand_id' => 13,
                'created_at' => '2019-10-28 16:06:36',
                'updated_at' => '2019-10-28 16:06:36',
            ),
            59 => 
            array (
                'id' => 83,
                'industry_id' => 1,
                'brand_id' => 18,
                'created_at' => '2019-10-28 16:07:25',
                'updated_at' => '2019-10-28 16:07:25',
            ),
            60 => 
            array (
                'id' => 84,
                'industry_id' => 2,
                'brand_id' => 18,
                'created_at' => '2019-10-28 16:07:25',
                'updated_at' => '2019-10-28 16:07:25',
            ),
            61 => 
            array (
                'id' => 85,
                'industry_id' => 1,
                'brand_id' => 17,
                'created_at' => '2019-10-28 16:07:30',
                'updated_at' => '2019-10-28 16:07:30',
            ),
            62 => 
            array (
                'id' => 86,
                'industry_id' => 2,
                'brand_id' => 17,
                'created_at' => '2019-10-28 16:07:30',
                'updated_at' => '2019-10-28 16:07:30',
            ),
            63 => 
            array (
                'id' => 87,
                'industry_id' => 1,
                'brand_id' => 36,
                'created_at' => '2019-10-28 16:07:52',
                'updated_at' => '2019-10-28 16:07:52',
            ),
            64 => 
            array (
                'id' => 88,
                'industry_id' => 2,
                'brand_id' => 36,
                'created_at' => '2019-10-28 16:07:52',
                'updated_at' => '2019-10-28 16:07:52',
            ),
            65 => 
            array (
                'id' => 89,
                'industry_id' => 3,
                'brand_id' => 36,
                'created_at' => '2019-10-28 16:07:52',
                'updated_at' => '2019-10-28 16:07:52',
            ),
            66 => 
            array (
                'id' => 90,
                'industry_id' => 4,
                'brand_id' => 36,
                'created_at' => '2019-10-28 16:07:52',
                'updated_at' => '2019-10-28 16:07:52',
            ),
            67 => 
            array (
                'id' => 95,
                'industry_id' => 1,
                'brand_id' => 32,
                'created_at' => '2019-10-28 16:08:10',
                'updated_at' => '2019-10-28 16:08:10',
            ),
            68 => 
            array (
                'id' => 96,
                'industry_id' => 2,
                'brand_id' => 32,
                'created_at' => '2019-10-28 16:08:10',
                'updated_at' => '2019-10-28 16:08:10',
            ),
            69 => 
            array (
                'id' => 97,
                'industry_id' => 3,
                'brand_id' => 32,
                'created_at' => '2019-10-28 16:08:10',
                'updated_at' => '2019-10-28 16:08:10',
            ),
            70 => 
            array (
                'id' => 98,
                'industry_id' => 4,
                'brand_id' => 32,
                'created_at' => '2019-10-28 16:08:10',
                'updated_at' => '2019-10-28 16:08:10',
            ),
        ));
        
        
    }
}