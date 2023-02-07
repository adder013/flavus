<?php

use Illuminate\Database\Seeder;

class DiscountLevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('discount_levels')->delete();
        
        \DB::table('discount_levels')->insert(array (
            0 => 
            array (
                'base_discount' => 0,
                'color' => 'green accent-1',
                'created_at' => '2019-05-28 11:04:30',
                'id' => 1,
                'name' => 'Base',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            1 => 
            array (
                'base_discount' => 1,
                'color' => 'amber accent-4',
                'created_at' => '2019-05-28 11:04:30',
                'id' => 2,
                'name' => 'Bronze',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            2 => 
            array (
                'base_discount' => 2,
                'color' => 'blue-grey lighten-4',
                'created_at' => '2019-05-28 11:04:30',
                'id' => 3,
                'name' => 'Silver',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            3 => 
            array (
                'base_discount' => 3,
                'color' => 'yellow accent-4',
                'created_at' => '2019-05-28 11:04:30',
                'id' => 4,
                'name' => 'Gold',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            4 => 
            array (
                'base_discount' => 5,
                'color' => 'grey lighten-4',
                'created_at' => '2019-05-28 11:04:30',
                'id' => 5,
                'name' => 'Platinum',
                'updated_at' => '2019-05-28 11:04:30',
            ),
        ));
        
        
    }
}