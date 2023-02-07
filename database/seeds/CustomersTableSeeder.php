<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'active' => 1,
                'created_at' => '2020-02-13 11:43:38',
                'id' => 1,
                'logo' => '/storage/customers/9osnRLMMdc6hR0jAduothpswSuUzwdxSXSjWoP2u.png',
                'name' => 'Системный оператор Единой энергетической системы',
                'sort_position' => 1,
                'updated_at' => '2020-02-13 11:46:03',
            ),
            1 => 
            array (
                'active' => 1,
                'created_at' => '2020-02-13 11:43:50',
                'id' => 2,
                'logo' => '/storage/customers/iPVN0CXgabUsQ2UBS9ExvFYTgViYhrprmywS9TVD.png',
                'name' => 'Тюменьэнерго',
                'sort_position' => 2,
                'updated_at' => '2020-02-13 11:46:03',
            ),
            2 => 
            array (
                'active' => 1,
                'created_at' => '2020-02-13 11:44:05',
                'id' => 3,
                'logo' => '/storage/customers/1AgOd7olcRQe1xhVhmgJAmuehgPdRLgbMQ5Bt2ZR.png',
                'name' => 'Краснодарнефтегаз',
                'sort_position' => 3,
                'updated_at' => '2020-02-13 11:46:04',
            ),
            3 => 
            array (
                'active' => 1,
                'created_at' => '2020-02-13 11:44:17',
                'id' => 4,
                'logo' => '/storage/customers/OghVys4HV7jym0VCXoTXwfe3QTCWDcH5Gu4vxZGS.png',
                'name' => 'МРСК Сибири',
                'sort_position' => 4,
                'updated_at' => '2020-02-13 11:46:04',
            ),
            4 => 
            array (
                'active' => 1,
                'created_at' => '2020-02-13 11:44:27',
                'id' => 5,
                'logo' => '/storage/customers/WpHTfsaBjeVNtRGwtmZAKljkYYB8ZOq74Bd4BSR1.png',
                'name' => 'Сетевая Компания',
                'sort_position' => 5,
                'updated_at' => '2020-02-13 11:46:06',
            ),
            5 => 
            array (
                'active' => 1,
                'created_at' => '2020-02-13 11:44:34',
                'id' => 6,
                'logo' => '/storage/customers/lIhRQhGjTnPFCXeis7TC8bcamIDaqHjkpKReFESs.png',
                'name' => 'МРСК Урала',
                'sort_position' => 6,
                'updated_at' => '2020-02-13 11:46:06',
            ),
            6 => 
            array (
                'active' => 1,
                'created_at' => '2020-02-13 11:44:43',
                'id' => 7,
                'logo' => '/storage/customers/8UsDHd61Rs0qb62M3KjbnHmVw1J6vlabajQOge3U.png',
                'name' => 'ФСК ЕЭС',
                'sort_position' => 7,
                'updated_at' => '2020-02-13 11:46:05',
            ),
            7 => 
            array (
                'active' => 1,
                'created_at' => '2020-02-13 11:44:50',
                'id' => 8,
                'logo' => '/storage/customers/zNVLZuOk2tCRPzUM1NRCRgvACV5h45HyjhPSCHUz.png',
                'name' => 'ОГК-1',
                'sort_position' => 8,
                'updated_at' => '2020-02-13 11:46:05',
            ),
            8 => 
            array (
                'active' => 1,
                'created_at' => '2020-02-13 11:44:57',
                'id' => 9,
                'logo' => '/storage/customers/keoLkQVMLeRdoOoMzK0mFrF5yewsbVlHUBRrRfFp.png',
                'name' => 'ОГК-2',
                'sort_position' => 9,
                'updated_at' => '2020-02-13 11:46:07',
            ),
            9 => 
            array (
                'active' => 1,
                'created_at' => '2020-02-13 11:45:16',
                'id' => 10,
                'logo' => '/storage/customers/QXYiWyH23q6rnjJHSVNpOlK8MvosAXyaGkalwKii.png',
                'name' => 'Интер РАО',
                'sort_position' => 10,
                'updated_at' => '2020-02-13 11:46:08',
            ),
            10 => 
            array (
                'active' => 1,
                'created_at' => '2020-02-13 11:45:24',
                'id' => 11,
                'logo' => '/storage/customers/vqFnWGDF7xF2bk4nICiUMu06ZW7pHQ109T5ISdlt.png',
                'name' => 'РусГидро',
                'sort_position' => 11,
                'updated_at' => '2020-02-13 11:46:08',
            ),
            11 => 
            array (
                'active' => 1,
                'created_at' => '2020-02-13 11:45:31',
                'id' => 12,
                'logo' => '/storage/customers/7BByTqYGfDMdKSoYzwdNNd6frzOpBhuwx6oTNTPj.png',
                'name' => 'УГМК',
                'sort_position' => 12,
                'updated_at' => '2020-02-13 11:46:09',
            ),
        ));
        
        
    }
}