<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('partners')->delete();
        
        \DB::table('partners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Партнёр ООО «Инженерный центр «Энергосервис»',
                'body' => 'Компания Уралэнерготел является авторизованным поставщиком и интегратором ООО «Инженерный центр «Энергосервис»',
                'image' => '/storage/files/partners/previews/oKazDYjXljyQlCqnv8rV8Wx0IYCLTO0uuOkWgzSS.jpeg',
                'certificate' => '/storage/files/partners/certificates/3D2R7n7m4HTuI1DCT5bAjPzEydswNW9CW2DC8MNj.jpeg',
                'created_at' => '2018-09-21 08:04:48',
                'updated_at' => '2018-09-21 08:04:48',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Партнёр ООО "ПЛЦ АС"',
                'body' => 'Компания Уралэнерготел является официальным партнёром и дилером ООО "ПЛЦ АС", официального дистрибьютера компании Satec Ltd.',
                'image' => '/storage/files/partners/previews/8likfav7cH2w2mJoJcJJyWkz9m4eNV9f5TKE4w8h.png',
                'certificate' => '/storage/files/partners/certificates/UoPS9pVQnb1cqcaTPBKCsLRligEQHNw6Ge4LBE12.jpeg',
                'created_at' => '2018-09-21 10:33:57',
                'updated_at' => '2018-09-21 10:33:57',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Партнёр ООО КС-Трейдинг',
                'body' => 'Уралэнерготел является партнёром производителя ООО "КС-Трейдинг" и имеет необходимые полномочия на поставку и техническую поддержку приборов торговой марки',
                'image' => '/storage/files/partners/previews/lbnji5ozGrfHMEzfjRAfu718q9vGO6QFTL5Bxwvg.jpeg',
                'certificate' => '/storage/files/partners/certificates/nHnpgJmXe5b07VZQvqRlqG30OoYh0ex9TIIqRMPY.jpeg',
                'created_at' => '2018-09-21 08:58:13',
                'updated_at' => '2019-01-29 15:24:07',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Официальный дилер ЗАО "Радиус Автоматика"',
                'body' => 'Уралэнерготел является официальным дилером ЗАО "Радиус Автоматика"',
                'image' => '/storage/files/partners/previews/n9pRKVOp4l8ek7n1OUHTteMtAuDRcDkaZ2lXaW1Y.jpeg',
                'certificate' => '/storage/files/partners/certificates/kVuxVvNYQnoqtIDkANfyhEhfQNPs82edXDWphRYu.jpeg',
                'created_at' => '2018-09-21 11:24:03',
                'updated_at' => '2019-01-29 15:36:32',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Официальный дилер ООО "УЗНТех"',
                'body' => 'Компания Уралэнерготел является официальным партнёром ООО "Уральский завод новых технологий" по продаже оборудования присоединения ВЧ-трактов по высоковольтным линиям 6,3-750 кВ.',
                'image' => '/storage/files/partners/previews/dLuQu8OwqHQkqdptqmoH2qvNLm3HRHrYrN2cBMqI.jpeg',
                'certificate' => '/storage/files/partners/certificates/es9qlgC1Bt00AIgIoy6Zvseu7pTRr1LfpE3CqaJU.jpeg',
                'created_at' => '2018-09-21 10:46:10',
                'updated_at' => '2018-09-21 10:46:10',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Официальный партнёр Rittal',
                'body' => 'Компания Уралэнерготел является официальным партнёром ООО Риттал',
                'image' => '/storage/files/partners/previews/Ejf9kqM5coac0HLuXqtor6ri0fwGTI0O6nctIrpa.jpeg',
                'certificate' => '/storage/files/partners/certificates/ji4tUb6SNdsaZbpbROxbw6gsjoWs9VF8gWF2qEsq.jpeg',
                'created_at' => '2018-09-21 08:00:34',
                'updated_at' => '2018-09-21 08:00:34',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Партнёр НПО "Мир"',
                'body' => 'Уралэнерготел является официальным партнёром НПО "Мир"',
                'image' => '/storage/files/partners/previews/zwFr9jZyadwBlU25KC3DTZp24mg2TtTJqjBDTtVR.jpeg',
                'certificate' => '/storage/files/partners/certificates/PzdPvI6HqdVAigxNosLgcYo1osMSrL2fJDkQLvaV.jpeg',
                'created_at' => '2018-09-21 10:25:15',
                'updated_at' => '2018-09-21 11:18:47',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Официальный дистрибьютор ООО "НТК Приборэнерго"',
                'body' => 'Компания Уралэнерготел является официальным дистрибьютером компании ООО "НТК Приборэнерго"',
                'image' => '/storage/files/partners/previews/JIwJvR8iGbOlGHN6ZorrrvdNEOejIWUmVekcrOJT.jpeg',
                'certificate' => '/storage/files/partners/certificates/ELN4KEsa1aoy1vM1w6Sh5dFXAzPPv22A3jpgCr91.jpeg',
                'created_at' => '2018-09-21 11:17:20',
                'updated_at' => '2018-09-21 11:17:20',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Партнёр Luis+',
                'body' => 'Компания Уралэнерготел является партнёром компании Луис+ по системам безопасности',
                'image' => '/storage/files/partners/previews/5hCzXvgxg69Uy9BkOQflI7a53QGpvlszWNCkpSJe.jpeg',
                'certificate' => '/storage/files/partners/certificates/Q5zErFl7zcbXre8tbUceJSGM6ULQZMgwH9EqXiYW.jpeg',
                'created_at' => '2018-09-21 07:59:49',
                'updated_at' => '2018-09-21 07:59:49',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Eaton registered partner',
                'body' => 'Уралэнерготел - авторизованный партнёр по продаже оборудования качественного электропитания Eaton на территории Российской Федерации',
                'image' => '/storage/files/partners/previews/bMcAL1NHLsWetdyuoXZZ80KajZaqU4TodqowJZWB.jpeg',
                'certificate' => '/storage/files/partners/certificates/Febd7dB8S2Vz9IyIJTRBZHoScyIblbSk5buiNHrS.jpeg',
                'created_at' => '2018-09-21 07:58:55',
                'updated_at' => '2018-09-21 07:58:55',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'APC registered partner',
                'body' => 'Компания Уралэнерготел имеет статус зарегистрированного партнёра компании APC by Schneider Eletric',
                'image' => '/storage/files/partners/previews/WqFA1rAfJwpNEVdauJY7oVdbMBEPpgcsVhR6e8A3.jpeg',
                'certificate' => '/storage/files/partners/certificates/92yYKk1BgwvpxXXEVOxFwC1j7o52KNnSSDN0sRoR.jpeg',
                'created_at' => '2018-08-27 12:56:08',
                'updated_at' => '2018-09-21 07:57:25',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Huawei Enterprise Channel Partner',
                'body' => 'Компания Уралэнерготел имеет статус авторизованного партнёра Huawei в рамках программы Channel Partner Program',
                'image' => '/storage/files/partners/previews/NkLbnlbX7cddV2jMeFiib6Rc6v5tk759vCWI9YCH.jpeg',
                'certificate' => '/storage/files/partners/certificates/eIT8Gq2wdMbFLaS8zug48pBOF21nyrNJewQzc6yH.jpeg',
                'created_at' => '2018-09-21 07:59:25',
                'updated_at' => '2018-09-21 07:59:25',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Партнёр Rad Data Communications',
                'body' => 'Компания Уралэнерготел является официальным поставщиком RAD data communications',
                'image' => '/storage/files/partners/previews/nNcDyYOZKV89vVsSo1TiMH4ImS40f35Dr6qYrJRs.jpeg',
                'certificate' => '/storage/files/partners/certificates/ELHGjgq6V5e04VrHYZ4KIS8aL4Caij5qNRGW8M5u.jpeg',
                'created_at' => '2018-09-21 08:00:10',
                'updated_at' => '2018-09-21 08:00:10',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Авторизованный Бизнес-Партнер AVAYA',
                'body' => 'Уралэнерготел выполняет работы по проектированию, поставке, монтажу, инсталляции, а также сервисному обслуживанию телекоммуникационного оборудования Avaya',
                'image' => '/storage/files/partners/previews/98vXKA7zy7jS9z6hF1f1YhpQer9EMlRzsEzVpp2F.jpeg',
                'certificate' => '/storage/files/partners/certificates/gqw7XoP08Zl3YtFgs0Mut3RB54GM0sqaoUB0fSKG.jpeg',
                'created_at' => '2018-09-21 07:58:08',
                'updated_at' => '2018-09-21 07:58:08',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Cisco Select Partner',
                'body' => 'Компания Уралэнерготел является бизнес-партнёром компании Cisco Systems в России и имеет все необходимые полномочия на предложение и поставку оборудования Cisco Systems',
                'image' => '/storage/files/partners/previews/kD6Vqr9uhS4tugBaISra4kEzRqSSxXkRQ4tmMY9A.jpeg',
                'certificate' => '/storage/files/partners/certificates/V7zCmMNkC2WMC5BHY6TVscWRVHBPIFPdDDuH73Cn.jpeg',
                'created_at' => '2018-09-21 07:58:36',
                'updated_at' => '2018-09-21 07:58:36',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'ОВЕН',
                'body' => 'Уралэнерготел является официальным дилером ОВЕН',
                'image' => '/storage/files/partners/previews/E52ulSJpXS85QlmxPQaC6JWFY4N6GZxGEJTDQMKR.jpeg',
                'certificate' => '/storage/files/partners/certificates/pCU88CRCmq7ehcuZv6mpAzpYePVVYOS8ldxpa3hu.jpeg',
                'created_at' => '2019-01-29 16:15:18',
                'updated_at' => '2019-01-29 16:15:18',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'ЦМО',
                'body' => 'Уралэнерготел является авторизованным бронзовым партнёром Remer Group',
                'image' => '/storage/files/partners/previews/taOnnjl1h4RyZdVRDObKcORPQ9WkBdqbptpgsmQ9.jpeg',
                'certificate' => '/storage/files/partners/certificates/r1CWptQd6C6FSZShwFEeDGUYHmFGQyD6Mo3MGnmT.jpeg',
                'created_at' => '2019-01-29 16:17:23',
                'updated_at' => '2019-01-29 16:17:23',
            ),
        ));
        
        
    }
}