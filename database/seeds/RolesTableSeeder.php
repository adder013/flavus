<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => '2018-01-01 00:00:00',
                'description' => NULL,
                'id' => 1,
                'name' => 'Разработчик',
                'updated_at' => '2018-01-01 00:00:00',
            ),
            1 => 
            array (
                'created_at' => '2018-01-01 00:00:00',
                'description' => NULL,
                'id' => 2,
                'name' => 'Администратор',
                'updated_at' => '2018-01-01 00:00:00',
            ),
            2 => 
            array (
                'created_at' => '2018-01-01 00:00:00',
                'description' => NULL,
                'id' => 3,
                'name' => 'Редактор',
                'updated_at' => '2018-01-01 00:00:00',
            ),
            3 => 
            array (
                'created_at' => '2018-01-01 00:00:00',
                'description' => NULL,
                'id' => 4,
                'name' => 'Менеджер',
                'updated_at' => '2018-01-01 00:00:00',
            ),
            4 => 
            array (
                'created_at' => '2018-01-01 00:00:00',
                'description' => NULL,
                'id' => 5,
                'name' => 'Пользователь',
                'updated_at' => '2018-01-01 00:00:00',
            ),
        ));
        
        
    }
}