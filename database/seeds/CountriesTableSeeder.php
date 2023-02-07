<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Россия',
                'currency_id' => 1,
                'vat' => 20,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Казахстан',
                'currency_id' => 15,
                'vat' => 0,
                'created_at' => '2019-05-28 11:04:30',
                'updated_at' => '2019-05-28 11:04:30',
            ),
        ));
        
        
    }
}