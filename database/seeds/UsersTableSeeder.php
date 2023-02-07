<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'country_id' => 1,
                'discount_level_id' => 1,
                'discount' => 0,
                'name' => 'Павел Сергеев',
                'email' => 'pasha_sergeev@live.ru',
                'phone' => NULL,
                'password' => '$2y$10$BCxlOGrEBvYapEyQBredau6W.nM4S8ve4TBO6VECTaYNADwgBGMw2',
                'registration_token' => NULL,
                'image' => '/storage/users/1/KN92EpOst6j7StmTl9gkGVChOOwXHgJt2fZg7bu2.png',
                'remember_token' => 'bCPWoKw9VAq8VRMexkauKWbGmsrEF3qBHuyrkYFx9qcqsZUvZxh8dOJYFqYw',
                'created_at' => '2018-01-01 00:00:00',
                'updated_at' => '2019-07-29 13:05:22',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'country_id' => 1,
                'discount_level_id' => 1,
                'discount' => 0,
                'name' => 'Роман Гуркин',
                'email' => 'gurkin-ra@uetel.ru',
                'phone' => NULL,
                'password' => '$2a$12$NENzs6DrvuFpZxhyFh1sgevFJtkbN33VCkfdNIaBvgn/vhvS0OqNa',
                'registration_token' => NULL,
                'image' => '/storage/users/2/EOlUhuci4jkwTgKM9tBLqSehACUWpGQdHNIUqfwk.jpeg',
                'remember_token' => NULL,
                'created_at' => '2018-08-22 15:07:28',
                'updated_at' => '2018-08-23 13:08:13',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'country_id' => 1,
                'discount_level_id' => 1,
                'discount' => 0,
                'name' => 'Дарья Ладонина',
                'email' => 'ladonina-ds@uralenergotel.ru',
                'phone' => NULL,
                'password' => '$2y$10$HsUe95YaIhu3PKQBSjcaUOPmZYPqaGZ4K3fVH/WFkYY9VnQ5wDjYO',
                'registration_token' => NULL,
                'image' => '/storage/users/3/YTdlS1KbLkfRv6TR9D2CuTY06ZGNn6AQUQMIkY76.jpeg',
                'remember_token' => 'FWP6gosLb1EUK4whyU2EegGR1l0LgLFVDUHiwOyqnUqHd13AGooKF1b6Yugw',
                'created_at' => '2018-08-22 15:07:28',
                'updated_at' => '2018-08-23 12:57:58',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'country_id' => 1,
                'discount_level_id' => 1,
                'discount' => 0,
                'name' => 'Марина Федосеева',
                'email' => 'fedoseeva@uralenergotel.ru',
                'phone' => NULL,
                'password' => '$2y$10$Gyu5xstThu7N1ThC6F6CHOqWUlHX69rGLJQbvIyzRHlLMrjy/OHLO',
                'registration_token' => NULL,
                'image' => '/storage/users/4/kwju2yR1aIjwYtvse4KbbEMx1h5vUs9k4BBirCoK.jpeg',
                'remember_token' => 'wQYtG4VGUkD9bP2QQY0Fy6YtIht9eqUKBqEXO2WWO35Jmu2WbaD0g8nozUje',
                'created_at' => '2018-08-23 10:21:30',
                'updated_at' => '2018-08-23 12:57:50',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 3,
                'country_id' => 1,
                'discount_level_id' => 1,
                'discount' => 0,
                'name' => 'Дарья Лукьянченко',
                'email' => 'lukyanchenko-dv@uralenergotel.ru',
                'phone' => NULL,
                'password' => '$2y$10$S0r9BL/lztSqCXn2WwvuAuH2W4xmOHEnJAM5ksj9hS5bsR2PbpuEm',
                'registration_token' => NULL,
                'image' => NULL,
                'remember_token' => '9O8ki8vQfzgLdX9hiHB9dUuOc7ki6rrgDJH79RCfO5I2TEB1CC3Dsae8FU7F',
                'created_at' => '2018-08-27 13:16:58',
                'updated_at' => '2018-08-27 13:16:58',
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 3,
                'country_id' => 1,
                'discount_level_id' => 1,
                'discount' => 0,
                'name' => 'Контент-менеджер',
                'email' => 'contentmanager@uralenergotel.ru',
                'phone' => NULL,
                'password' => '$2y$10$tz.sxPBLOQSc38X0sfQaPOjwFka/bfMdJoOXLgB7Ml8iCtUhgQicq',
                'registration_token' => NULL,
                'image' => NULL,
                'remember_token' => 'eN8XOYezJQtj6Ljb3jXxGv21VofINCc3iyziArcHDgyZ5w80ZFaKNwqtSH4w',
                'created_at' => '2019-05-24 14:13:03',
                'updated_at' => '2019-05-28 14:54:30',
            ),
            6 => 
            array (
                'id' => 7,
                'role_id' => 1,
                'country_id' => 1,
                'discount_level_id' => 1,
                'discount' => 0,
                'name' => 'Владислав Панфилов',
                'email' => 'panfilov-vv@uralenergotel.ru',
                'phone' => NULL,
                'password' => '$2y$10$7lB1I1v2nDLEVDZDN5NH/.OT5IlKzqmQEAWRLAH8HHroJr8l71UGS',
                'registration_token' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-29 13:05:24',
                'updated_at' => '2019-07-29 13:05:24',
            ),
        ));
        
        
    }
}