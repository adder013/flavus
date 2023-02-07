<?php

use Illuminate\Database\Seeder;

class FaqCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faq_categories')->delete();
        
        \DB::table('faq_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Вопросы по оплате/ценам на товары',
                'sort_position' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Какая минимальная стоимость заказа?',
                'sort_position' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Общие вопросы',
                'sort_position' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}