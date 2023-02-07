<?php

use Illuminate\Database\Seeder;

class AmountDiscountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('amount_discounts')->delete();
        
        \DB::table('amount_discounts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'from' => 0,
                'to' => 499999,
                'discount' => 0,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            1 => 
            array (
                'id' => 2,
                'from' => 500000,
                'to' => 999999,
                'discount' => 1,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            2 => 
            array (
                'id' => 3,
                'from' => 1000000,
                'to' => 1000000000,
                'discount' => 2,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
        ));
        
        
    }
}