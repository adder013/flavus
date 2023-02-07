<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Уралэнерготел',
                'legal_address' => 'РФ, 620078, г. Екатеринбург, ул. Малышева, 164',
                'post_address' => 'РФ, 620078, г. Екатеринбург, ул. Малышева, 164',
                'main_address' => 'г. Екатеринбург, ул. Малышева, 164',
                'storage_address' => 'г. Екатеринбург, ул. Малышева, 164 литер О',
                'email' => 'sale@uralenergotel.ru',
            'phone' => '+7 (343) 228-18-62',
            'storage_phone' => '+7 (343) 228-04-74',
                'bank_info' => 'ИНН: 6670171718<br>КПП: 667001001<br>ОГРН: 1076670013089<br>р/с: 40702810262200000054<br>ПАО КБ «УБРиР» г. Екатеринбург<br>к/с: 30101810900000000795<br>БИК: 046577795<br>',
                'work_hours' => 'Пн - Пт 9:00 - 17:00<br>обед 12:00 - 13:00<br>в другое время - по предварительной договоренности.',
                'created_at' => '2018-09-11 03:50:19',
                'updated_at' => '2018-11-27 09:42:01',
                'phone_msk' => '+7 (495) 745-18-62',
            ),
        ));
        
        
    }
}