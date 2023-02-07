<?php

use Illuminate\Database\Seeder;

class RedirectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('redirects')->delete();
        
        \DB::table('redirects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status_code' => '301',
                'from' => '/wa-data/*',
                'to' => '/catalog/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2018-09-28 04:17:25',
            ),
            1 => 
            array (
                'id' => 2,
                'status_code' => '301',
                'from' => '/category/Accessories-sistem-izmerenia-i-ucheta/',
                'to' => '/category/accessories-metering/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2018-09-28 04:17:25',
            ),
            2 => 
            array (
                'id' => 3,
                'status_code' => '301',
                'from' => '/category/Accessories-sistem-izmerenia-i-ucheta/razvetviteli/',
                'to' => '/category/accessories-metering/razvetviteli/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2018-09-28 04:17:25',
            ),
            3 => 
            array (
                'id' => 4,
                'status_code' => '301',
                'from' => '/category/Accessories-sistem-izmerenia-i-ucheta/Zaschita-ot-perenapryazhenii/',
                'to' => '/category/accessories-metering/surge_guards/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2018-09-28 04:17:25',
            ),
            4 => 
            array (
                'id' => 5,
                'status_code' => '301',
                'from' => '/category/Accessories-sistem-izmerenia-i-ucheta/antennas_sensors/',
                'to' => '/category/accessories-metering/antennas_sensors/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2018-09-28 04:17:25',
            ),
            5 => 
            array (
                'id' => 6,
                'status_code' => '301',
                'from' => '/category/Accessories-sistem-izmerenia-i-ucheta/communication_modules/',
                'to' => '/category/accessories-metering/communication_modules/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2018-09-28 04:17:25',
            ),
            6 => 
            array (
                'id' => 7,
                'status_code' => '301',
                'from' => '/category/schetchiki-energy/Accessories-sistem-izmerenia-i-ucheta/razvetviteli/',
                'to' => '/category/data_transfer/interface_splitter/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2019-07-16 12:00:37',
            ),
            7 => 
            array (
                'id' => 8,
                'status_code' => '301',
                'from' => '/category/schetchiki-energy/Accessories-sistem-izmerenia-i-ucheta/Zaschita-ot-perenapryazhenii/',
                'to' => '/category/electric/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2019-07-16 11:59:48',
            ),
            8 => 
            array (
                'id' => 9,
                'status_code' => '301',
                'from' => '/category/schetchiki-energy/Accessories-sistem-izmerenia-i-ucheta/antennas_sensors/',
                'to' => '/category/telemechanics/antennas_sensors/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2019-07-16 12:00:24',
            ),
            9 => 
            array (
                'id' => 10,
                'status_code' => '301',
                'from' => '/category/schetchiki-energy/Accessories-sistem-izmerenia-i-ucheta/voltage_dividers/',
                'to' => '/category/electric/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2019-07-16 11:59:39',
            ),
            10 => 
            array (
                'id' => 11,
                'status_code' => '301',
                'from' => '/category/Accessories-sistem-izmerenia-i-ucheta/voltage_dividers/',
                'to' => '/category/electric/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2019-07-16 11:59:33',
            ),
            11 => 
            array (
                'id' => 12,
                'status_code' => '301',
                'from' => '/category/schetchiki-energy/Accessories-sistem-izmerenia-i-ucheta/',
                'to' => '/category/electric/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2019-07-16 11:59:27',
            ),
            12 => 
            array (
                'id' => 13,
                'status_code' => '301',
                'from' => '/Konverter-interfeysa-10-100-Base-T-G-703-704/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2018-09-28 04:17:25',
            ),
            13 => 
            array (
                'id' => 15,
                'status_code' => '301',
                'from' => '/brand/speechpro/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2018-09-28 04:17:25',
            ),
            14 => 
            array (
                'id' => 16,
                'status_code' => '301',
                'from' => '/STC-H205/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2018-09-28 04:17:25',
            ),
            15 => 
            array (
                'id' => 17,
                'status_code' => '301',
                'from' => '/STC-H219/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2018-09-28 04:17:25',
            ),
            16 => 
            array (
                'id' => 18,
                'status_code' => '301',
                'from' => '/STC-H433/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2018-09-28 04:17:25',
            ),
            17 => 
            array (
                'id' => 19,
                'status_code' => '301',
                'from' => '/STC-H537/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2018-09-28 04:17:25',
            ),
            18 => 
            array (
                'id' => 20,
                'status_code' => '301',
                'from' => '/STC-H199/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:25',
                'updated_at' => '2018-09-28 04:17:25',
            ),
            19 => 
            array (
                'id' => 21,
                'status_code' => '301',
                'from' => '/STC-S437/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            20 => 
            array (
                'id' => 22,
                'status_code' => '301',
                'from' => '/STC-S692/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            21 => 
            array (
                'id' => 23,
                'status_code' => '301',
                'from' => '/STC-S614/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            22 => 
            array (
                'id' => 24,
                'status_code' => '301',
                'from' => '/STC-S352/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            23 => 
            array (
                'id' => 25,
                'status_code' => '301',
                'from' => '/STC-H605-132/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            24 => 
            array (
                'id' => 26,
                'status_code' => '301',
                'from' => '/STC-H606-404/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            25 => 
            array (
                'id' => 27,
                'status_code' => '301',
                'from' => '/STC-H730-402-404/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            26 => 
            array (
                'id' => 28,
                'status_code' => '301',
                'from' => '/STC-H605-133/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            27 => 
            array (
                'id' => 29,
                'status_code' => '301',
                'from' => '/STC-H606-408-1/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            28 => 
            array (
                'id' => 30,
                'status_code' => '301',
                'from' => '/STC-H605-134/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            29 => 
            array (
                'id' => 31,
                'status_code' => '301',
                'from' => '/STC-H730-409/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            30 => 
            array (
                'id' => 32,
                'status_code' => '301',
                'from' => '/STC-H606-405/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            31 => 
            array (
                'id' => 33,
                'status_code' => '301',
                'from' => '/STC-H730-405/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            32 => 
            array (
                'id' => 34,
                'status_code' => '301',
                'from' => '/STC-H605/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            33 => 
            array (
                'id' => 35,
                'status_code' => '301',
                'from' => '/STC-H606/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            34 => 
            array (
                'id' => 36,
                'status_code' => '301',
                'from' => '/STC-H656/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            35 => 
            array (
                'id' => 37,
                'status_code' => '301',
                'from' => '/STC-H730/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            36 => 
            array (
                'id' => 38,
                'status_code' => '301',
                'from' => '/STC-H732/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            37 => 
            array (
                'id' => 39,
                'status_code' => '301',
                'from' => '/STC-H465/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            38 => 
            array (
                'id' => 40,
                'status_code' => '301',
                'from' => '/STC-H529/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            39 => 
            array (
                'id' => 41,
                'status_code' => '301',
                'from' => '/STC-H597/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            40 => 
            array (
                'id' => 42,
                'status_code' => '301',
                'from' => '/smartloggerbox_hdd/',
                'to' => '/category/oborudovanie-svyazi/call_recording/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            41 => 
            array (
                'id' => 43,
                'status_code' => '301',
                'from' => '/price/',
                'to' => '/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            42 => 
            array (
                'id' => 44,
                'status_code' => '301',
                'from' => '/price/price/',
                'to' => '/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            43 => 
            array (
                'id' => 45,
                'status_code' => '301',
                'from' => '/category/Elektroizmeritelnye-pribory/rtu/',
                'to' => '/category/telemechanics/rtu/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            44 => 
            array (
                'id' => 46,
                'status_code' => '301',
                'from' => '/category/Elektroizmeritelnye-pribory/input_output_modules/',
                'to' => '/category/telemechanics/input_output_modules/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            45 => 
            array (
                'id' => 47,
                'status_code' => '301',
                'from' => '/category/Elektroizmeritelnye-pribory/time_sync/',
                'to' => '/category/telemechanics/time_sync/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            46 => 
            array (
                'id' => 48,
                'status_code' => '301',
                'from' => '/category/Elektroizmeritelnye-pribory/controllers/',
                'to' => '/category/telemechanics/controllers/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            47 => 
            array (
                'id' => 49,
                'status_code' => '301',
                'from' => '/category/projects_special_order/avaya_equipment/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            48 => 
            array (
                'id' => 50,
                'status_code' => '301',
                'from' => '/category/projects_special_order/avaya_equipment/phones_dect/',
                'to' => '/category/oborudovanie-svyazi/phones_dect/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            49 => 
            array (
                'id' => 51,
                'status_code' => '301',
                'from' => '/category/projects_special_order/avaya_equipment/phones_dect/ip-phones/',
                'to' => '/category/oborudovanie-svyazi/phones_dect/ip-phones/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            50 => 
            array (
                'id' => 52,
                'status_code' => '301',
                'from' => '/category/projects_special_order/avaya_equipment/phones_dect/digital_phones/',
                'to' => '/category/oborudovanie-svyazi/phones_dect/digital_phones/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            51 => 
            array (
                'id' => 53,
                'status_code' => '301',
                'from' => '/category/projects_special_order/avaya_equipment/phones_dect/conference_phones/',
                'to' => '/category/oborudovanie-svyazi/phones_dect/conference_phones/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            52 => 
            array (
                'id' => 54,
                'status_code' => '301',
                'from' => '/category/projects_special_order/avaya_equipment/phones_dect/ip_dect/',
                'to' => '/category/oborudovanie-svyazi/phones_dect/ip_dect/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            53 => 
            array (
                'id' => 55,
                'status_code' => '301',
                'from' => '/category/projects_special_order/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            54 => 
            array (
                'id' => 56,
                'status_code' => '301',
                'from' => '/category/projects_special_order/energopribor/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            55 => 
            array (
                'id' => 57,
                'status_code' => '301',
                'from' => '/category/projects_special_order/energopribor/multifunctional_transducer/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            56 => 
            array (
                'id' => 58,
                'status_code' => '301',
                'from' => '/category/projects_special_order/energopribor/verification_devices/',
                'to' => '/category/proverochnoe_oborudovanie/poverka/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            57 => 
            array (
                'id' => 59,
                'status_code' => '301',
                'from' => '/MES1124M/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            58 => 
            array (
                'id' => 60,
                'status_code' => '301',
                'from' => '/MES1124MB/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            59 => 
            array (
                'id' => 61,
                'status_code' => '301',
                'from' => '/MES2124M/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            60 => 
            array (
                'id' => 62,
                'status_code' => '301',
                'from' => '/MES2124MB/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            61 => 
            array (
                'id' => 63,
                'status_code' => '301',
                'from' => '/MES2124F/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            62 => 
            array (
                'id' => 64,
                'status_code' => '301',
                'from' => '/MES2308/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            63 => 
            array (
                'id' => 65,
                'status_code' => '301',
                'from' => '/MES2324/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            64 => 
            array (
                'id' => 66,
                'status_code' => '301',
                'from' => '/MES2324B/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            65 => 
            array (
                'id' => 67,
                'status_code' => '301',
                'from' => '/MES2324FB/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            66 => 
            array (
                'id' => 68,
                'status_code' => '301',
                'from' => '/MES2348B/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            67 => 
            array (
                'id' => 69,
                'status_code' => '301',
                'from' => '/MES2124P/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            68 => 
            array (
                'id' => 70,
                'status_code' => '301',
                'from' => '/MES2208P/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            69 => 
            array (
                'id' => 71,
                'status_code' => '301',
                'from' => '/MES2308P/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            70 => 
            array (
                'id' => 72,
                'status_code' => '301',
                'from' => '/MES3124/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            71 => 
            array (
                'id' => 73,
                'status_code' => '301',
                'from' => '/MES3116F/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            72 => 
            array (
                'id' => 74,
                'status_code' => '301',
                'from' => '/MES3108F/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            73 => 
            array (
                'id' => 75,
                'status_code' => '301',
                'from' => '/MES3348/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            74 => 
            array (
                'id' => 76,
                'status_code' => '301',
                'from' => '/MES3324F/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            75 => 
            array (
                'id' => 77,
                'status_code' => '301',
                'from' => '/MES5324/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            76 => 
            array (
                'id' => 78,
                'status_code' => '301',
                'from' => '/MES5448/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            77 => 
            array (
                'id' => 79,
                'status_code' => '301',
                'from' => '/ESR-10/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            78 => 
            array (
                'id' => 80,
                'status_code' => '301',
                'from' => '/ESR-12V/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            79 => 
            array (
                'id' => 81,
                'status_code' => '301',
                'from' => '/ESR-100/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            80 => 
            array (
                'id' => 82,
                'status_code' => '301',
                'from' => '/ESR-200/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            81 => 
            array (
                'id' => 83,
                'status_code' => '301',
                'from' => '/ESR-1000/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            82 => 
            array (
                'id' => 84,
                'status_code' => '301',
                'from' => '/ESR-wiSLA/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            83 => 
            array (
                'id' => 85,
                'status_code' => '301',
                'from' => '/WEP-2ac/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            84 => 
            array (
                'id' => 86,
                'status_code' => '301',
                'from' => '/WOP-2ac DC/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            85 => 
            array (
                'id' => 87,
                'status_code' => '301',
                'from' => '/WEP-12ac/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            86 => 
            array (
                'id' => 88,
                'status_code' => '301',
                'from' => '/WOP-12ac DC/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            87 => 
            array (
                'id' => 89,
                'status_code' => '301',
                'from' => '/WOP-12ac-LR DC/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            88 => 
            array (
                'id' => 90,
                'status_code' => '301',
                'from' => '/WB-1P-LR/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            89 => 
            array (
                'id' => 91,
                'status_code' => '301',
                'from' => '/w-injector-poe/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            90 => 
            array (
                'id' => 92,
                'status_code' => '301',
                'from' => '/WLC/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            91 => 
            array (
                'id' => 93,
                'status_code' => '301',
                'from' => '/RG-34-WAC/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            92 => 
            array (
                'id' => 94,
                'status_code' => '301',
                'from' => '/TAU-1M-IP/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            93 => 
            array (
                'id' => 95,
                'status_code' => '301',
                'from' => '/TAU-2M-IP/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            94 => 
            array (
                'id' => 96,
                'status_code' => '301',
                'from' => '/TAU-4-IP/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            95 => 
            array (
                'id' => 97,
                'status_code' => '301',
                'from' => '/TAU-8-IP/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            96 => 
            array (
                'id' => 98,
                'status_code' => '301',
                'from' => '/RG-1404GF-W/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            97 => 
            array (
                'id' => 99,
                'status_code' => '301',
                'from' => '/RG-5421G-WAC/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            98 => 
            array (
                'id' => 100,
                'status_code' => '301',
                'from' => '/TAU-16-IP/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            99 => 
            array (
                'id' => 101,
                'status_code' => '301',
                'from' => '/TAU-24-IP/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            100 => 
            array (
                'id' => 102,
                'status_code' => '301',
                'from' => '/TAU-32M-IP/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            101 => 
            array (
                'id' => 103,
                'status_code' => '301',
                'from' => '/TAU-36-IP/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            102 => 
            array (
                'id' => 104,
                'status_code' => '301',
                'from' => '/TAU-72-IP/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            103 => 
            array (
                'id' => 105,
                'status_code' => '301',
                'from' => '/ToPGATE-SFP/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            104 => 
            array (
                'id' => 106,
                'status_code' => '301',
                'from' => '/ToPGATE-1E1-1FG/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            105 => 
            array (
                'id' => 107,
                'status_code' => '301',
                'from' => '/ToPGATE-2E1-1F/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            106 => 
            array (
                'id' => 108,
                'status_code' => '301',
                'from' => '/ToPGATE-4E1-2FG/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            107 => 
            array (
                'id' => 109,
                'status_code' => '301',
                'from' => '/ToPGATE-8E1-2FG/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            108 => 
            array (
                'id' => 110,
                'status_code' => '301',
                'from' => '/ToPGATE-16E1-2FG/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            109 => 
            array (
                'id' => 111,
                'status_code' => '301',
                'from' => '/ToPGATE-24E1-2FG/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            110 => 
            array (
                'id' => 112,
                'status_code' => '301',
                'from' => '/ToPGATE-STM.2STM1.2GE.2SFP/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            111 => 
            array (
                'id' => 113,
                'status_code' => '301',
                'from' => '/MXL2-2/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            112 => 
            array (
                'id' => 114,
                'status_code' => '301',
                'from' => '/MXL2E-2/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            113 => 
            array (
                'id' => 115,
                'status_code' => '301',
                'from' => '/MXL2E-4/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            114 => 
            array (
                'id' => 116,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/Ethernet-switches/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            115 => 
            array (
                'id' => 117,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/Service-gateways/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            116 => 
            array (
                'id' => 118,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/wireless/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            117 => 
            array (
                'id' => 119,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/voip/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            118 => 
            array (
                'id' => 120,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/optical_transport/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            119 => 
            array (
                'id' => 121,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/dsl/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            120 => 
            array (
                'id' => 122,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/Ethernet-switches/access_switch_100m/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            121 => 
            array (
                'id' => 123,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/Ethernet-switches/access_switch_10g/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            122 => 
            array (
                'id' => 124,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/Ethernet-switches/access_switch_poe/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            123 => 
            array (
                'id' => 125,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/Ethernet-switches/aggregation_switch_10g/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            124 => 
            array (
                'id' => 126,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/Ethernet-switches/aggregation_switch_40g/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            125 => 
            array (
                'id' => 127,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/voip/voip_gateways/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            126 => 
            array (
                'id' => 128,
                'status_code' => '301',
                'from' => '/Setevaya-karta-BPW-116750221-001/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            127 => 
            array (
                'id' => 129,
                'status_code' => '301',
                'from' => '/category/shkafy-svyazi/',
                'to' => '/category/nizkovoltnye-ustroystva/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            128 => 
            array (
                'id' => 130,
                'status_code' => '301',
                'from' => '/category/shkafy-svyazi/shkafy-ip-videonablyudeniya/',
                'to' => '/category/nizkovoltnye-ustroystva/shkafy-ip-videonablyudeniya/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            129 => 
            array (
                'id' => 131,
                'status_code' => '301',
                'from' => '/category/shkafy-svyazi/shkafy-raspredelitelnye-shrn/',
                'to' => '/category/nizkovoltnye-ustroystva/shkafy-raspredelitelnye-shrn/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            130 => 
            array (
                'id' => 132,
                'status_code' => '301',
                'from' => '/category/accessories19/Modulnyy-AVR-19/',
                'to' => '/category/electric/avr/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2019-07-18 09:19:37',
            ),
            131 => 
            array (
                'id' => 133,
                'status_code' => '301',
                'from' => '/category/Termoshkafy-U-Therm/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2019-07-16 15:55:11',
            ),
            132 => 
            array (
                'id' => 134,
                'status_code' => '301',
                'from' => '/category/Termoshkafy-U-Therm/termoshkafy-mounting-panel/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2019-07-16 15:55:08',
            ),
            133 => 
            array (
                'id' => 135,
                'status_code' => '301',
                'from' => '/category/Termoshkafy-U-Therm/termoshkafy-19inch/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2019-07-16 15:55:04',
            ),
            134 => 
            array (
                'id' => 136,
                'status_code' => '301',
                'from' => '/category/automation/pump_control/',
                'to' => '/category/automation/kip/pump_control/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            135 => 
            array (
                'id' => 137,
                'status_code' => '301',
                'from' => '/category/frequency_converter/pchv1/',
                'to' => '/category/frequency_converter/preobrazovatel_chastoty/pchv1/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            136 => 
            array (
                'id' => 138,
                'status_code' => '301',
                'from' => '/category/frequency_converter/pchv2/',
                'to' => '/category/frequency_converter/preobrazovatel_chastoty/pchv2/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            137 => 
            array (
                'id' => 139,
                'status_code' => '301',
                'from' => '/category/frequency_converter/pchv3/',
                'to' => '/category/frequency_converter/preobrazovatel_chastoty/pchv3/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            138 => 
            array (
                'id' => 140,
                'status_code' => '301',
                'from' => '/category/frequency_converter/upp1/',
                'to' => '/category/frequency_converter/soft_starters/upp1/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            139 => 
            array (
                'id' => 141,
                'status_code' => '301',
                'from' => '/category/frequency_converter/upp2/',
                'to' => '/category/frequency_converter/soft_starters/upp2/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            140 => 
            array (
                'id' => 142,
                'status_code' => '302',
                'from' => '/lande_ip55_freestandning_42u_set05/',
                'to' => '/de_ip55_freestandning_42u_set04/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            141 => 
            array (
                'id' => 143,
                'status_code' => '301',
                'from' => '/Blok-pitaniya-Cisco-RWR-2821-51-AC-/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            142 => 
            array (
                'id' => 144,
                'status_code' => '301',
                'from' => '/CISCO_SFP-10G-LR/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            143 => 
            array (
                'id' => 145,
                'status_code' => '301',
                'from' => '/Cisco_WS-C2960-48TC-L/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            144 => 
            array (
                'id' => 146,
                'status_code' => '301',
                'from' => '/Kommutator-EDS-508A-MM-ST/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            145 => 
            array (
                'id' => 147,
                'status_code' => '301',
                'from' => '/Konverter-interfeysa-10-100-Base-T-G-703-704/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            146 => 
            array (
                'id' => 148,
                'status_code' => '301',
                'from' => '/Bosch_LBB1968_00/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            147 => 
            array (
                'id' => 149,
                'status_code' => '301',
                'from' => '/Karkas-raspredelitel-nyy-City-80/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            148 => 
            array (
                'id' => 150,
                'status_code' => '301',
                'from' => '/Karkas-raspredelitel-nyy-HVt-COM-91-2/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            149 => 
            array (
                'id' => 151,
                'status_code' => '301',
                'from' => '/Mediakonverter-D-link-DMC-920R/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            150 => 
            array (
                'id' => 152,
                'status_code' => '301',
                'from' => '/Mediakonverter-D-link-DMC-920T/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            151 => 
            array (
                'id' => 153,
                'status_code' => '301',
                'from' => '/DLK-DMC-1002/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            152 => 
            array (
                'id' => 154,
                'status_code' => '301',
                'from' => '/Shassi-DLK-DMC-1000/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            153 => 
            array (
                'id' => 155,
                'status_code' => '301',
                'from' => '/Planet_GT_806_A15/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            154 => 
            array (
                'id' => 156,
                'status_code' => '301',
                'from' => '/Planet_GT_806_B15/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            155 => 
            array (
                'id' => 157,
                'status_code' => '301',
                'from' => '/EtherWAN_EL900-A-R-1-A/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            156 => 
            array (
                'id' => 158,
                'status_code' => '301',
                'from' => '/Jedia_JRG-220AR2/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            157 => 
            array (
                'id' => 159,
                'status_code' => '301',
                'from' => '/Nortel_OME_6110/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:26',
                'updated_at' => '2018-09-28 04:17:26',
            ),
            158 => 
            array (
                'id' => 160,
                'status_code' => '301',
                'from' => '/Ip 101-10m_v-a2r/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            159 => 
            array (
                'id' => 161,
                'status_code' => '301',
                'from' => '/cable_svyazstroy/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            160 => 
            array (
                'id' => 162,
                'status_code' => '301',
                'from' => '/cable_elix/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            161 => 
            array (
                'id' => 163,
                'status_code' => '301',
                'from' => '/cable_inkab/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            162 => 
            array (
                'id' => 164,
                'status_code' => '301',
                'from' => '/Kabel-opticheskiy-vnutriob-ektovyy-InLAN-Distribution-16-OV/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            163 => 
            array (
                'id' => 165,
                'status_code' => '301',
                'from' => '/Kabel-opticheskiy-vnutriob-ektovyy-InLAN-Distribution-32-OV/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            164 => 
            array (
                'id' => 166,
                'status_code' => '301',
                'from' => '/Kabel-opticheskiy-vnutriob-ektovyy-InLAN-Distribution-8-OV/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            165 => 
            array (
                'id' => 167,
                'status_code' => '301',
                'from' => '/cable_fireproof_als14x10_01/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            166 => 
            array (
                'id' => 168,
                'status_code' => '301',
                'from' => '/cable_fireproof_als14x10_02/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            167 => 
            array (
                'id' => 169,
                'status_code' => '301',
                'from' => '/cable_fireproof_als19x10_01/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            168 => 
            array (
                'id' => 170,
                'status_code' => '301',
                'from' => '/cable_fireproof_als19x10_02/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            169 => 
            array (
                'id' => 171,
                'status_code' => '301',
                'from' => '/cable_fireproof_als27x10_01/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            170 => 
            array (
                'id' => 172,
                'status_code' => '301',
                'from' => '/cable_fireproof_als27x10_02/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            171 => 
            array (
                'id' => 173,
                'status_code' => '301',
                'from' => '/cable_fireproof_als27x15_01/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            172 => 
            array (
                'id' => 174,
                'status_code' => '301',
                'from' => '/cable_fireproof_als27x15_02/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            173 => 
            array (
                'id' => 175,
                'status_code' => '301',
                'from' => '/cable_fireproof_als4x05/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            174 => 
            array (
                'id' => 176,
                'status_code' => '301',
                'from' => '/IBP-APC-Smart-UPS-VT-10kVA-400V-bez-batareynykh-moduley/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            175 => 
            array (
                'id' => 177,
                'status_code' => '301',
                'from' => '/X-slot relay/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            176 => 
            array (
                'id' => 178,
                'status_code' => '301',
                'from' => '/Invertor-Shtil-PS48-400-19-/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            177 => 
            array (
                'id' => 179,
                'status_code' => '301',
                'from' => '/Raspredelitel-pitaniya-Energenie-EG-PDU-001-Switched-/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            178 => 
            array (
                'id' => 180,
                'status_code' => '301',
                'from' => '/Rittal_1035500/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            179 => 
            array (
                'id' => 181,
                'status_code' => '301',
                'from' => '/Skat1200/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            180 => 
            array (
                'id' => 182,
                'status_code' => '301',
                'from' => '/YKM-40-662-54/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            181 => 
            array (
                'id' => 183,
                'status_code' => '301',
                'from' => '/HP-600W-Rack-Top-Cable-Mgmt-Tray/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            182 => 
            array (
                'id' => 184,
                'status_code' => '301',
                'from' => '/cable_organizator 19/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            183 => 
            array (
                'id' => 185,
                'status_code' => '301',
                'from' => '/cable_organizator 19 koltco/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            184 => 
            array (
                'id' => 186,
                'status_code' => '301',
                'from' => '/Alcatel_8DG60349AA/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            185 => 
            array (
                'id' => 187,
                'status_code' => '301',
                'from' => '/Alcatel_8DG59241AD_03/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            186 => 
            array (
                'id' => 188,
                'status_code' => '301',
                'from' => '/Alcatel_8DG60175BB_03/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            187 => 
            array (
                'id' => 189,
                'status_code' => '301',
                'from' => '/Alcatel_8DG59245AA_04/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            188 => 
            array (
                'id' => 190,
                'status_code' => '301',
                'from' => '/Alcatel_8DG59859AA_03/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            189 => 
            array (
                'id' => 191,
                'status_code' => '301',
                'from' => '/Alcatel_8DG59912AA/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            190 => 
            array (
                'id' => 192,
                'status_code' => '301',
                'from' => '/Alcatel_1AD151940001/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            191 => 
            array (
                'id' => 193,
                'status_code' => '301',
                'from' => '/Alcatel_1AD151930001/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            192 => 
            array (
                'id' => 194,
                'status_code' => '301',
                'from' => '/Alcatel_8DG59437AC_01/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            193 => 
            array (
                'id' => 195,
                'status_code' => '301',
                'from' => '/Alcatel_8DG60210AB_01/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            194 => 
            array (
                'id' => 196,
                'status_code' => '301',
                'from' => '/Alcatel_8DG59443AA/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            195 => 
            array (
                'id' => 197,
                'status_code' => '301',
                'from' => '/Alcatel_8DG60131AA/',
                'to' => '/category/rasprodazha/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            196 => 
            array (
                'id' => 198,
                'status_code' => '301',
                'from' => '/СЕE_1R1-1-01-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            197 => 
            array (
                'id' => 199,
                'status_code' => '301',
                'from' => '/СЕE_1R1-1-01-2/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            198 => 
            array (
                'id' => 200,
                'status_code' => '301',
                'from' => '/СЕE_1R1-1-02-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            199 => 
            array (
                'id' => 201,
                'status_code' => '301',
                'from' => '/СЕE_1R1-1-02-2/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            200 => 
            array (
                'id' => 202,
                'status_code' => '301',
                'from' => '/СЕE_1C1-1-01-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            201 => 
            array (
                'id' => 203,
                'status_code' => '301',
                'from' => '/СЕE_1C1-2-01-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            202 => 
            array (
                'id' => 204,
                'status_code' => '301',
                'from' => '/СЕE_1C1-1-02-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            203 => 
            array (
                'id' => 205,
                'status_code' => '301',
                'from' => '/СЕE_1C1-2-02-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            204 => 
            array (
                'id' => 206,
                'status_code' => '301',
                'from' => '/СЕE_1R4-1-02-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            205 => 
            array (
                'id' => 207,
                'status_code' => '301',
                'from' => '/СЕE_1C4-1-12-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            206 => 
            array (
                'id' => 208,
                'status_code' => '301',
                'from' => '/СЕE_1C4-1-02-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            207 => 
            array (
                'id' => 209,
                'status_code' => '301',
                'from' => '/СЕE_3R1-1-01-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            208 => 
            array (
                'id' => 210,
                'status_code' => '301',
                'from' => '/СЕE_3R1-2-01-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            209 => 
            array (
                'id' => 211,
                'status_code' => '301',
                'from' => '/СЕE_3R1-1-02-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            210 => 
            array (
                'id' => 212,
                'status_code' => '301',
                'from' => '/СЕE_3R1-2-02-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            211 => 
            array (
                'id' => 213,
                'status_code' => '301',
                'from' => '/СЕE_3C1-1-01-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            212 => 
            array (
                'id' => 214,
                'status_code' => '301',
                'from' => '/СЕE_3C1-2-01-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            213 => 
            array (
                'id' => 215,
                'status_code' => '301',
                'from' => '/СЕE_3C1-1-02-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            214 => 
            array (
                'id' => 216,
                'status_code' => '301',
                'from' => '/СЕE_3C1-2-02-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            215 => 
            array (
                'id' => 217,
                'status_code' => '301',
                'from' => '/СЕE_3C1-3-02-3/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            216 => 
            array (
                'id' => 218,
                'status_code' => '301',
                'from' => '/9369/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            217 => 
            array (
                'id' => 219,
                'status_code' => '301',
                'from' => '/СЕE_3R4-1-02-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            218 => 
            array (
                'id' => 220,
                'status_code' => '301',
                'from' => '/СЕE_3R4-2-02-1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            219 => 
            array (
                'id' => 221,
                'status_code' => '301',
                'from' => '/brand/enron-energo/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            220 => 
            array (
                'id' => 222,
                'status_code' => '301',
                'from' => '/sprut7a/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            221 => 
            array (
                'id' => 223,
                'status_code' => '301',
                'from' => '/sprut7nr/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            222 => 
            array (
                'id' => 224,
                'status_code' => '301',
                'from' => '/sprut-sr1000/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            223 => 
            array (
                'id' => 225,
                'status_code' => '301',
                'from' => '/sprut7-isdn/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            224 => 
            array (
                'id' => 226,
                'status_code' => '301',
                'from' => '/sprut7-e1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            225 => 
            array (
                'id' => 227,
                'status_code' => '301',
                'from' => '/sprut7ip/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            226 => 
            array (
                'id' => 228,
                'status_code' => '301',
                'from' => '/sprut-web-1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            227 => 
            array (
                'id' => 229,
                'status_code' => '301',
                'from' => '/sprut-web-3/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            228 => 
            array (
                'id' => 230,
                'status_code' => '301',
                'from' => '/sprut-web-unlimited/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            229 => 
            array (
                'id' => 231,
                'status_code' => '301',
                'from' => '/agatanalyze1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            230 => 
            array (
                'id' => 232,
                'status_code' => '301',
                'from' => '/agatanalyze4/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            231 => 
            array (
                'id' => 233,
                'status_code' => '301',
                'from' => '/agatanalyze8/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            232 => 
            array (
                'id' => 234,
                'status_code' => '301',
                'from' => '/agatanalyze16/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            233 => 
            array (
                'id' => 235,
                'status_code' => '301',
                'from' => '/agatanalyze30/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            234 => 
            array (
                'id' => 236,
                'status_code' => '301',
                'from' => '/agatanalyze60/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            235 => 
            array (
                'id' => 237,
                'status_code' => '301',
                'from' => '/sprut-sr4000-base/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            236 => 
            array (
                'id' => 238,
                'status_code' => '301',
                'from' => '/sprut-sr4000-professional/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            237 => 
            array (
                'id' => 239,
                'status_code' => '301',
                'from' => '/sprut-sr-fxom4/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            238 => 
            array (
                'id' => 240,
                'status_code' => '301',
                'from' => '/sprut-sr-fxom8/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            239 => 
            array (
                'id' => 241,
                'status_code' => '301',
                'from' => '/sprut-sr-fxom16/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            240 => 
            array (
                'id' => 242,
                'status_code' => '301',
                'from' => '/sprut-sr-isdn4/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            241 => 
            array (
                'id' => 243,
                'status_code' => '301',
                'from' => '/sprut-sr-isdn8/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            242 => 
            array (
                'id' => 244,
                'status_code' => '301',
                'from' => '/sprut-sr-e1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            243 => 
            array (
                'id' => 245,
                'status_code' => '301',
                'from' => '/sprut-sr-2e1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            244 => 
            array (
                'id' => 246,
                'status_code' => '301',
                'from' => '/sprut-sr-5ip/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            245 => 
            array (
                'id' => 247,
                'status_code' => '301',
                'from' => '/sprut-sr-10ip/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            246 => 
            array (
                'id' => 248,
                'status_code' => '301',
                'from' => '/sprut-inform-analog/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            247 => 
            array (
                'id' => 249,
                'status_code' => '301',
                'from' => '/sprut-inform-e1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            248 => 
            array (
                'id' => 250,
                'status_code' => '301',
                'from' => '/olha-9p-c-isdn/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            249 => 
            array (
                'id' => 251,
                'status_code' => '301',
                'from' => '/olha-9p-i-e1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            250 => 
            array (
                'id' => 252,
                'status_code' => '301',
                'from' => '/olha-9p-e-e1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            251 => 
            array (
                'id' => 253,
                'status_code' => '301',
                'from' => '/olha-9p-c-e1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            252 => 
            array (
                'id' => 254,
                'status_code' => '301',
                'from' => '/olha-9p-ec-e1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            253 => 
            array (
                'id' => 255,
                'status_code' => '301',
                'from' => '/olha-9p-ecx-e1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            254 => 
            array (
                'id' => 256,
                'status_code' => '301',
                'from' => '/olha-9p-i-e1m/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            255 => 
            array (
                'id' => 257,
                'status_code' => '301',
                'from' => '/olha-9p-c-e1m/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            256 => 
            array (
                'id' => 258,
                'status_code' => '301',
                'from' => '/olha-9p-i-ok-ak/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            257 => 
            array (
                'id' => 259,
                'status_code' => '301',
                'from' => '/olha-9p-e-ok-ak/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            258 => 
            array (
                'id' => 260,
                'status_code' => '301',
                'from' => '/olha-9p-c-ok-ak/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            259 => 
            array (
                'id' => 261,
                'status_code' => '301',
                'from' => '/olha-9p-ec-ok-ak/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            260 => 
            array (
                'id' => 262,
                'status_code' => '301',
                'from' => '/olha-9p-ecx-ok-ak/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            261 => 
            array (
                'id' => 263,
                'status_code' => '301',
                'from' => '/olha-21-ok/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            262 => 
            array (
                'id' => 264,
                'status_code' => '301',
                'from' => '/olha-14-lpx/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            263 => 
            array (
                'id' => 265,
                'status_code' => '301',
                'from' => '/olha-14-lpe/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            264 => 
            array (
                'id' => 266,
                'status_code' => '301',
                'from' => '/ma14-fxom-4/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            265 => 
            array (
                'id' => 267,
                'status_code' => '301',
                'from' => '/ma14-fxom-8/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            266 => 
            array (
                'id' => 268,
                'status_code' => '301',
                'from' => '/ma14-fxs-4/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            267 => 
            array (
                'id' => 269,
                'status_code' => '301',
                'from' => '/ma14-fxs-8/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            268 => 
            array (
                'id' => 270,
                'status_code' => '301',
                'from' => '/ma14-isdn-4/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            269 => 
            array (
                'id' => 271,
                'status_code' => '301',
                'from' => '/ma14-e1-1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            270 => 
            array (
                'id' => 272,
                'status_code' => '301',
                'from' => '/ma14-e1-2/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            271 => 
            array (
                'id' => 273,
                'status_code' => '301',
                'from' => '/ma14-t64/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            272 => 
            array (
                'id' => 274,
                'status_code' => '301',
                'from' => '/olha-14-lpx-fx_/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            273 => 
            array (
                'id' => 275,
                'status_code' => '301',
                'from' => '/olha-14-lpe-fx_/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            274 => 
            array (
                'id' => 276,
                'status_code' => '301',
                'from' => '/olha-14-lpx-fx_e1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            275 => 
            array (
                'id' => 277,
                'status_code' => '301',
                'from' => '/olha-14-lpx-e1/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            276 => 
            array (
                'id' => 278,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/call_recording/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            277 => 
            array (
                'id' => 279,
                'status_code' => '301',
                'from' => '/brand/agat-rt/',
                'to' => '/about/partners/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            278 => 
            array (
                'id' => 280,
                'status_code' => '301',
                'from' => '/category/accessories19/sistema_opovescheniya/',
                'to' => '/category/accessories19/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            279 => 
            array (
                'id' => 281,
                'status_code' => '301',
                'from' => '/Selector-zon-sz-1108/',
                'to' => '/category/accessories19/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            280 => 
            array (
                'id' => 282,
                'status_code' => '301',
                'from' => '/lande_dynamax_server_12u_600_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            281 => 
            array (
                'id' => 283,
                'status_code' => '301',
                'from' => '/lande_dynamax_server_26u_600_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            282 => 
            array (
                'id' => 284,
                'status_code' => '301',
                'from' => '/lande_dynamax_server_36u_600_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            283 => 
            array (
                'id' => 285,
                'status_code' => '301',
                'from' => '/lande_dynamax_server_42u_600_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            284 => 
            array (
                'id' => 286,
                'status_code' => '301',
                'from' => '/lande_dynamax_server_45u_600_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            285 => 
            array (
                'id' => 287,
                'status_code' => '301',
                'from' => '/lande_dynamax_server_47u_600_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            286 => 
            array (
                'id' => 288,
                'status_code' => '301',
                'from' => '/lande_dynamax_server_42u_800_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            287 => 
            array (
                'id' => 289,
                'status_code' => '301',
                'from' => '/lande_dynamax_server_45u_800_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:27',
                'updated_at' => '2018-09-28 04:17:27',
            ),
            288 => 
            array (
                'id' => 290,
                'status_code' => '301',
                'from' => '/lande_dynamax_server_47u_800_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            289 => 
            array (
                'id' => 291,
                'status_code' => '301',
                'from' => '/lande_proline_7u_600/',
                'to' => '/category/cabinets19/wall_mounting/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            290 => 
            array (
                'id' => 292,
                'status_code' => '301',
                'from' => '/lande_proline_7u_450/',
                'to' => '/category/cabinets19/wall_mounting/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            291 => 
            array (
                'id' => 293,
                'status_code' => '301',
                'from' => '/lande_proline_9u_600/',
                'to' => '/category/cabinets19/wall_mounting/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            292 => 
            array (
                'id' => 294,
                'status_code' => '301',
                'from' => '/lande_proline_9u_450/',
                'to' => '/category/cabinets19/wall_mounting/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            293 => 
            array (
                'id' => 295,
                'status_code' => '301',
                'from' => '/lande_proline_12u_600/',
                'to' => '/category/cabinets19/wall_mounting/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            294 => 
            array (
                'id' => 296,
                'status_code' => '301',
                'from' => '/lande_proline_12u_450/',
                'to' => '/category/cabinets19/wall_mounting/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            295 => 
            array (
                'id' => 297,
                'status_code' => '301',
                'from' => '/lande_proline_16u_600/',
                'to' => '/category/cabinets19/wall_mounting/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            296 => 
            array (
                'id' => 298,
                'status_code' => '301',
                'from' => '/lande_proline_16u_450/',
                'to' => '/category/cabinets19/wall_mounting/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            297 => 
            array (
                'id' => 299,
                'status_code' => '301',
                'from' => '/lande_proline_20u_600/',
                'to' => '/category/cabinets19/wall_mounting/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            298 => 
            array (
                'id' => 300,
                'status_code' => '301',
                'from' => '/lande_proline_20u_450/',
                'to' => '/category/cabinets19/wall_mounting/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            299 => 
            array (
                'id' => 301,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_22u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            300 => 
            array (
                'id' => 302,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_26u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            301 => 
            array (
                'id' => 303,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_32u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            302 => 
            array (
                'id' => 304,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_36u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            303 => 
            array (
                'id' => 305,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_42u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            304 => 
            array (
                'id' => 306,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_47u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            305 => 
            array (
                'id' => 307,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_22u_600_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            306 => 
            array (
                'id' => 308,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_26u_600_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            307 => 
            array (
                'id' => 309,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_32u_600_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            308 => 
            array (
                'id' => 310,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_36u_600_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            309 => 
            array (
                'id' => 311,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_42u_600_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            310 => 
            array (
                'id' => 312,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_47u_600_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            311 => 
            array (
                'id' => 313,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_26u_600_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            312 => 
            array (
                'id' => 314,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_26u_600_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            313 => 
            array (
                'id' => 315,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_42u_600_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            314 => 
            array (
                'id' => 316,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_42u_600_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            315 => 
            array (
                'id' => 317,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_32u_800_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            316 => 
            array (
                'id' => 318,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_36u_800_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            317 => 
            array (
                'id' => 319,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_42u_800_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            318 => 
            array (
                'id' => 320,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_47u_800_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            319 => 
            array (
                'id' => 321,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_42u_800_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            320 => 
            array (
                'id' => 322,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_42u_800_1000/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            321 => 
            array (
                'id' => 323,
                'status_code' => '301',
                'from' => '/lande_just1minute_12u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            322 => 
            array (
                'id' => 324,
                'status_code' => '301',
                'from' => '/lande_just1minute_16u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            323 => 
            array (
                'id' => 325,
                'status_code' => '301',
                'from' => '/lande_just1minute_20u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            324 => 
            array (
                'id' => 326,
                'status_code' => '301',
                'from' => '/lande_just1minute_22u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            325 => 
            array (
                'id' => 327,
                'status_code' => '301',
                'from' => '/lande_just1minute_26u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            326 => 
            array (
                'id' => 328,
                'status_code' => '301',
                'from' => '/lande_just1minute_32u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            327 => 
            array (
                'id' => 329,
                'status_code' => '301',
                'from' => '/lande_just1minute_36u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            328 => 
            array (
                'id' => 330,
                'status_code' => '301',
                'from' => '/lande_just1minute_42u_600_600/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            329 => 
            array (
                'id' => 331,
                'status_code' => '301',
                'from' => '/lande_just1minute_12u_600_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            330 => 
            array (
                'id' => 332,
                'status_code' => '301',
                'from' => '/lande_just1minute_16u_600_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            331 => 
            array (
                'id' => 333,
                'status_code' => '301',
                'from' => '/lande_just1minute_20u_600_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            332 => 
            array (
                'id' => 334,
                'status_code' => '301',
                'from' => '/lande_just1minute_22u_600_800/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            333 => 
            array (
                'id' => 335,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/2trm1/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            334 => 
            array (
                'id' => 336,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm1/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            335 => 
            array (
                'id' => 337,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm210/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            336 => 
            array (
                'id' => 338,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm101/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            337 => 
            array (
                'id' => 339,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm200/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            338 => 
            array (
                'id' => 340,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm201/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            339 => 
            array (
                'id' => 341,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm202/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            340 => 
            array (
                'id' => 342,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm10/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            341 => 
            array (
                'id' => 343,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm12/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            342 => 
            array (
                'id' => 344,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm151/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            343 => 
            array (
                'id' => 345,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/mpr51/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            344 => 
            array (
                'id' => 346,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm251/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            345 => 
            array (
                'id' => 347,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm148/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            346 => 
            array (
                'id' => 348,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm136/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            347 => 
            array (
                'id' => 349,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm138/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            348 => 
            array (
                'id' => 350,
                'status_code' => '302',
                'from' => '/category/automation/kip/izmeriteli-regulyatory/trm138v/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            349 => 
            array (
                'id' => 351,
                'status_code' => '302',
                'from' => '/category/automation/kip/counters/si20/',
                'to' => '/category/automation/kip/counters/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            350 => 
            array (
                'id' => 352,
                'status_code' => '302',
                'from' => '/category/automation/kip/counters/si30/',
                'to' => '/category/automation/kip/counters/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            351 => 
            array (
                'id' => 353,
                'status_code' => '302',
                'from' => '/category/automation/kip/counters/si8/',
                'to' => '/category/automation/kip/counters/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            352 => 
            array (
                'id' => 354,
                'status_code' => '302',
                'from' => '/category/automation/kip/counters/tx01-rs/',
                'to' => '/category/automation/kip/counters/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            353 => 
            array (
                'id' => 355,
                'status_code' => '302',
                'from' => '/category/automation/kip/counters/sv01/',
                'to' => '/category/automation/kip/counters/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            354 => 
            array (
                'id' => 356,
                'status_code' => '302',
                'from' => '/category/automation/kip/counters/ut1/',
                'to' => '/category/automation/kip/counters/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            355 => 
            array (
                'id' => 357,
                'status_code' => '302',
                'from' => '/category/automation/kip/counters/ut24/',
                'to' => '/category/automation/kip/counters/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            356 => 
            array (
                'id' => 358,
                'status_code' => '302',
                'from' => '/category/automation/kip/control/trm33/',
                'to' => '/category/automation/kip/control/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            357 => 
            array (
                'id' => 359,
                'status_code' => '302',
                'from' => '/category/automation/kip/control/trm133m/',
                'to' => '/category/automation/kip/control/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            358 => 
            array (
                'id' => 360,
                'status_code' => '302',
                'from' => '/category/automation/kip/normiruyuschie_preobrazovateli/npt2/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            359 => 
            array (
                'id' => 361,
                'status_code' => '302',
                'from' => '/category/automation/programmable_devices/relays/pr110/',
                'to' => '/category/automation/programmable_devices/relays/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            360 => 
            array (
                'id' => 362,
                'status_code' => '302',
                'from' => '/category/automation/programmable_devices/relays/pr114/',
                'to' => '/category/automation/programmable_devices/relays/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            361 => 
            array (
                'id' => 363,
                'status_code' => '302',
                'from' => '/category/automation/programmable_devices/relays/pr200/',
                'to' => '/category/automation/programmable_devices/relays/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            362 => 
            array (
                'id' => 364,
                'status_code' => '302',
                'from' => '/category/automation/programmable_devices/plc/plk63/',
                'to' => '/category/automation/programmable_devices/plc/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            363 => 
            array (
                'id' => 365,
                'status_code' => '302',
                'from' => '/category/automation/programmable_devices/plc/plk73/',
                'to' => '/category/automation/programmable_devices/plc/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            364 => 
            array (
                'id' => 366,
                'status_code' => '302',
                'from' => '/category/automation/programmable_devices/plc/plk100/',
                'to' => '/category/automation/programmable_devices/plc/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            365 => 
            array (
                'id' => 367,
                'status_code' => '302',
                'from' => '/category/automation/programmable_devices/plc/plk150/',
                'to' => '/category/automation/programmable_devices/plc/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            366 => 
            array (
                'id' => 368,
                'status_code' => '302',
                'from' => '/category/automation/programmable_devices/plc/plk154/',
                'to' => '/category/automation/programmable_devices/plc/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            367 => 
            array (
                'id' => 369,
                'status_code' => '301',
                'from' => '/contacts/samovyvoz/',
                'to' => '/samovyvoz/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            368 => 
            array (
                'id' => 370,
                'status_code' => '301',
                'from' => '/customers/delivery/',
                'to' => '/delivery/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            369 => 
            array (
                'id' => 371,
                'status_code' => '301',
                'from' => '/dts015_100m/howtoorder/',
                'to' => '/dts015_100m/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            370 => 
            array (
                'id' => 372,
                'status_code' => '301',
                'from' => '/dts015_100m/modifikations/',
                'to' => '/dts015_100m/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            371 => 
            array (
                'id' => 373,
                'status_code' => '301',
                'from' => '/dts015_100p/howtoorder/',
                'to' => '/dts015_100p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            372 => 
            array (
                'id' => 374,
                'status_code' => '301',
                'from' => '/dts015_100p/modifikations/',
                'to' => '/dts015_100p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            373 => 
            array (
                'id' => 375,
                'status_code' => '301',
                'from' => '/dts014_pt1000/howtoorder/',
                'to' => '/dts014_pt1000/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            374 => 
            array (
                'id' => 376,
                'status_code' => '301',
                'from' => '/dts014_pt1000/modifications/',
                'to' => '/dts014_pt1000/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            375 => 
            array (
                'id' => 377,
                'status_code' => '301',
                'from' => '/dts014_pt500/howtoorder/',
                'to' => '/dts014_pt500/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            376 => 
            array (
                'id' => 378,
                'status_code' => '301',
                'from' => '/dts014_pt500/modifications/',
                'to' => '/dts014_pt500/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            377 => 
            array (
                'id' => 379,
                'status_code' => '301',
                'from' => '/dts015_50m/howtoorder/',
                'to' => '/dts015_50m/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            378 => 
            array (
                'id' => 380,
                'status_code' => '301',
                'from' => '/dts015_50m/modifikations/',
                'to' => '/dts015_50m/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            379 => 
            array (
                'id' => 381,
                'status_code' => '301',
                'from' => '/dts015_pt1000/howtoorder/',
                'to' => '/dts015_pt1000/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            380 => 
            array (
                'id' => 382,
                'status_code' => '301',
                'from' => '/dts015_pt1000/modifikations/',
                'to' => '/dts015_pt1000/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            381 => 
            array (
                'id' => 383,
                'status_code' => '301',
                'from' => '/dts015_pt500/howtoorder/',
                'to' => '/dts015_pt500/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            382 => 
            array (
                'id' => 384,
                'status_code' => '301',
                'from' => '/dts214_50p/howtoorder/',
                'to' => '/dts214_50p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            383 => 
            array (
                'id' => 385,
                'status_code' => '301',
                'from' => '/dts214_50p/modifications/',
                'to' => '/dts214_50p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            384 => 
            array (
                'id' => 386,
                'status_code' => '301',
                'from' => '/dts214_pt100/howtoorder/',
                'to' => '/dts214_pt100/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            385 => 
            array (
                'id' => 387,
                'status_code' => '301',
                'from' => '/dts214_pt100/modifications/',
                'to' => '/dts214_pt100/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            386 => 
            array (
                'id' => 388,
                'status_code' => '301',
                'from' => '/dts214_100p/howtoorder/',
                'to' => '/dts214_100p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            387 => 
            array (
                'id' => 389,
                'status_code' => '301',
                'from' => '/dts214_100p/modifications/',
                'to' => '/dts214_100p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            388 => 
            array (
                'id' => 390,
                'status_code' => '301',
                'from' => '/dts214_100m/howtoorder/',
                'to' => '/dts214_100m/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            389 => 
            array (
                'id' => 391,
                'status_code' => '301',
                'from' => '/dts214_100m/modifications/',
                'to' => '/dts214_100m/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            390 => 
            array (
                'id' => 392,
                'status_code' => '301',
                'from' => '/dts214_50m/howtoorder/',
                'to' => '/dts214_50m/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            391 => 
            array (
                'id' => 393,
                'status_code' => '301',
                'from' => '/dts214_50m/modifications/',
                'to' => '/dts214_50m/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            392 => 
            array (
                'id' => 394,
                'status_code' => '301',
                'from' => '/dts024_50p/howtoorder/',
                'to' => '/dts024_50p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            393 => 
            array (
                'id' => 395,
                'status_code' => '301',
                'from' => '/dts024_50p/modifications/',
                'to' => '/dts024_50p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            394 => 
            array (
                'id' => 396,
                'status_code' => '301',
                'from' => '/dts034_100p/howtoorder/',
                'to' => '/dts034_100p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            395 => 
            array (
                'id' => 397,
                'status_code' => '301',
                'from' => '/dts034_100p/modifications/',
                'to' => '/dts034_100p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            396 => 
            array (
                'id' => 398,
                'status_code' => '301',
                'from' => '/dts024_100p/howtoorder/',
                'to' => '/dts024_100p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            397 => 
            array (
                'id' => 399,
                'status_code' => '301',
                'from' => '/dts024_100p/modifications/',
                'to' => '/dts024_100p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            398 => 
            array (
                'id' => 400,
                'status_code' => '301',
                'from' => '/dts024_100m/howtoorder/',
                'to' => '/dts024_100m/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            399 => 
            array (
                'id' => 401,
                'status_code' => '301',
                'from' => '/dts024_100m/modifications/',
                'to' => '/dts024_100m/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            400 => 
            array (
                'id' => 402,
                'status_code' => '301',
                'from' => '/dts024_50m/howtoorder/',
                'to' => '/dts024_50m/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            401 => 
            array (
                'id' => 403,
                'status_code' => '301',
                'from' => '/dts024_50m/modifications/',
                'to' => '/dts024_50m/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            402 => 
            array (
                'id' => 404,
                'status_code' => '301',
                'from' => '/dts024_pt1000/howtoorder/',
                'to' => '/dts024_pt1000/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            403 => 
            array (
                'id' => 405,
                'status_code' => '301',
                'from' => '/dts024_pt1000/modifications/',
                'to' => '/dts024_pt1000/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            404 => 
            array (
                'id' => 406,
                'status_code' => '301',
                'from' => '/dts024_pt100/howtoorder/',
                'to' => '/dts024_pt100/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            405 => 
            array (
                'id' => 407,
                'status_code' => '301',
                'from' => '/dts024_pt100/modifications/',
                'to' => '/dts024_pt100/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            406 => 
            array (
                'id' => 408,
                'status_code' => '301',
                'from' => '/dts015_pt100/howtoorder/',
                'to' => '/dts015_pt100/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            407 => 
            array (
                'id' => 409,
                'status_code' => '301',
                'from' => '/dts015_pt100/modifikations/',
                'to' => '/dts015_pt100/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            408 => 
            array (
                'id' => 410,
                'status_code' => '301',
                'from' => '/dts015_50p/howtoorder/',
                'to' => '/dts015_50p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            409 => 
            array (
                'id' => 411,
                'status_code' => '301',
                'from' => '/dts015_50p/modifikations/',
                'to' => '/dts015_50p/',
                'created_at' => '2018-09-28 04:17:28',
                'updated_at' => '2018-09-28 04:17:28',
            ),
            410 => 
            array (
                'id' => 412,
                'status_code' => '301',
                'from' => '/dts014_100m/howtoorder/',
                'to' => '/dts014_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            411 => 
            array (
                'id' => 413,
                'status_code' => '301',
                'from' => '/dts014_100m/modifications/',
                'to' => '/dts014_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            412 => 
            array (
                'id' => 414,
                'status_code' => '301',
                'from' => '/dts014_50m/howtoorder/',
                'to' => '/dts014_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            413 => 
            array (
                'id' => 415,
                'status_code' => '301',
                'from' => '/dts014_50m/modifications/',
                'to' => '/dts014_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            414 => 
            array (
                'id' => 416,
                'status_code' => '301',
                'from' => '/dts014_50p/howtoorder/',
                'to' => '/dts014_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            415 => 
            array (
                'id' => 417,
                'status_code' => '301',
                'from' => '/dts014_50p/modifications/',
                'to' => '/dts014_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            416 => 
            array (
                'id' => 418,
                'status_code' => '301',
                'from' => '/dts014_pt100/howtoorder/',
                'to' => '/dts014_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            417 => 
            array (
                'id' => 419,
                'status_code' => '301',
                'from' => '/dts014_pt100/modifications/',
                'to' => '/dts014_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            418 => 
            array (
                'id' => 420,
                'status_code' => '301',
                'from' => '/dts014_100p/howtoorder/',
                'to' => '/dts014_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            419 => 
            array (
                'id' => 421,
                'status_code' => '301',
                'from' => '/dts014_100p/modifications/',
                'to' => '/dts014_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            420 => 
            array (
                'id' => 422,
                'status_code' => '301',
                'from' => '/schmk120/questionnaire/',
                'to' => '/schmk120/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            421 => 
            array (
                'id' => 423,
                'status_code' => '301',
                'from' => '/e900el/questionnaire/',
                'to' => '/e900el/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            422 => 
            array (
                'id' => 424,
                'status_code' => '301',
                'from' => '/Satec-EM132/questionnaire/',
                'to' => '/Satec-EM132/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            423 => 
            array (
                'id' => 425,
                'status_code' => '301',
                'from' => '/Satec-PM135EH/questionnaire/',
                'to' => '/Satec-PM135EH/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            424 => 
            array (
                'id' => 426,
                'status_code' => '301',
                'from' => '/Satec-PM130EH/questionnaire/',
                'to' => '/Satec-PM130EH/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            425 => 
            array (
                'id' => 427,
                'status_code' => '301',
                'from' => '/Satec-PM130E/questionnaire/',
                'to' => '/Satec-PM130E/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            426 => 
            array (
                'id' => 428,
                'status_code' => '301',
                'from' => '/Satec-PM130P/questionnaire/',
                'to' => '/Satec-PM130P/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            427 => 
            array (
                'id' => 429,
                'status_code' => '301',
                'from' => '/Satec-EM133/questionnaire/',
                'to' => '/Satec-EM133/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            428 => 
            array (
                'id' => 430,
                'status_code' => '301',
                'from' => '/Satec-PM172E-N/questionnaire/',
                'to' => '/Satec-PM172E-N/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            429 => 
            array (
                'id' => 431,
                'status_code' => '301',
                'from' => '/t74/questionnaire/',
                'to' => '/t74/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            430 => 
            array (
                'id' => 432,
                'status_code' => '301',
                'from' => '/Satec-PM172EH-N/questionnaire/',
                'to' => '/Satec-PM172EH-N/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            431 => 
            array (
                'id' => 433,
                'status_code' => '301',
                'from' => '/t54/questionnaire/',
                'to' => '/t54/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            432 => 
            array (
                'id' => 434,
                'status_code' => '301',
                'from' => '/dts145_pt500/modifications/',
                'to' => '/dts145_pt500/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            433 => 
            array (
                'id' => 435,
                'status_code' => '301',
                'from' => '/dts145_pt500/howtoorder/',
                'to' => '/dts145_pt500/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            434 => 
            array (
                'id' => 436,
                'status_code' => '301',
                'from' => '/dts145_pt1000/modifications/',
                'to' => '/dts145_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            435 => 
            array (
                'id' => 437,
                'status_code' => '301',
                'from' => '/dts145_pt1000/howtoorder/',
                'to' => '/dts145_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            436 => 
            array (
                'id' => 438,
                'status_code' => '301',
                'from' => '/dts145_pt100/modifications/',
                'to' => '/dts145_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            437 => 
            array (
                'id' => 439,
                'status_code' => '301',
                'from' => '/dts145_pt100/howtoorder/',
                'to' => '/dts145_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            438 => 
            array (
                'id' => 440,
                'status_code' => '301',
                'from' => '/dts145_50p/modifications/',
                'to' => '/dts145_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            439 => 
            array (
                'id' => 441,
                'status_code' => '301',
                'from' => '/dts145_50p/howtoorder/',
                'to' => '/dts145_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            440 => 
            array (
                'id' => 442,
                'status_code' => '301',
                'from' => '/dts145_50m/modifications/',
                'to' => '/dts145_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            441 => 
            array (
                'id' => 443,
                'status_code' => '301',
                'from' => '/dts145_50m/howtoorder/',
                'to' => '/dts145_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            442 => 
            array (
                'id' => 444,
                'status_code' => '301',
                'from' => '/dts145_100m/modifications/',
                'to' => '/dts145_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            443 => 
            array (
                'id' => 445,
                'status_code' => '301',
                'from' => '/dts145_100m/howtoorder/',
                'to' => '/dts145_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            444 => 
            array (
                'id' => 446,
                'status_code' => '301',
                'from' => '/dts145_100p/modifications/',
                'to' => '/dts145_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            445 => 
            array (
                'id' => 447,
                'status_code' => '301',
                'from' => '/dts145_100p/howtoorder/',
                'to' => '/dts145_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            446 => 
            array (
                'id' => 448,
                'status_code' => '301',
                'from' => '/dts125l_100m/modifications/',
                'to' => '/dts125l_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            447 => 
            array (
                'id' => 449,
                'status_code' => '301',
                'from' => '/dts125l_100m/howtoorder/',
                'to' => '/dts125l_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            448 => 
            array (
                'id' => 450,
                'status_code' => '301',
                'from' => '/dts125l_100p/modifications/',
                'to' => '/dts125l_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            449 => 
            array (
                'id' => 451,
                'status_code' => '301',
                'from' => '/dts125l_100p/howtoorder/',
                'to' => '/dts125l_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            450 => 
            array (
                'id' => 452,
                'status_code' => '301',
                'from' => '/dts125l_50m/modifications/',
                'to' => '/dts125l_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            451 => 
            array (
                'id' => 453,
                'status_code' => '301',
                'from' => '/dts125l_50m/howtoorder/',
                'to' => '/dts125l_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            452 => 
            array (
                'id' => 454,
                'status_code' => '301',
                'from' => '/dts125l_50p/modifications/',
                'to' => '/dts125l_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            453 => 
            array (
                'id' => 455,
                'status_code' => '301',
                'from' => '/dts125l_50p/howtoorder/',
                'to' => '/dts125l_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            454 => 
            array (
                'id' => 456,
                'status_code' => '301',
                'from' => '/dts125l_pt100/modifications/',
                'to' => '/dts125l_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            455 => 
            array (
                'id' => 457,
                'status_code' => '301',
                'from' => '/dts125l_pt100/howtoorder/',
                'to' => '/dts125l_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            456 => 
            array (
                'id' => 458,
                'status_code' => '301',
                'from' => '/dts125l_pt1000/modifications/',
                'to' => '/dts125l_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            457 => 
            array (
                'id' => 459,
                'status_code' => '301',
                'from' => '/dts125l_pt1000/howtoorder/',
                'to' => '/dts125l_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            458 => 
            array (
                'id' => 460,
                'status_code' => '301',
                'from' => '/dts125l_pt500/modifications/',
                'to' => '/dts125l_pt500/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            459 => 
            array (
                'id' => 461,
                'status_code' => '301',
                'from' => '/dts125l_pt500/howtoorder/',
                'to' => '/dts125l_pt500/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            460 => 
            array (
                'id' => 462,
                'status_code' => '301',
                'from' => '/dts105_pt500/modifications/',
                'to' => '/dts105_pt500/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            461 => 
            array (
                'id' => 463,
                'status_code' => '301',
                'from' => '/dts105_pt500/howtoorder/',
                'to' => '/dts105_pt500/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            462 => 
            array (
                'id' => 464,
                'status_code' => '301',
                'from' => '/dts105_pt1000/modifications/',
                'to' => '/dts105_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            463 => 
            array (
                'id' => 465,
                'status_code' => '301',
                'from' => '/dts105_pt1000/howtoorder/',
                'to' => '/dts105_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            464 => 
            array (
                'id' => 466,
                'status_code' => '301',
                'from' => '/dts105_pt100/modifications/',
                'to' => '/dts105_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            465 => 
            array (
                'id' => 467,
                'status_code' => '301',
                'from' => '/dts105_pt100/howtoorder/',
                'to' => '/dts105_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            466 => 
            array (
                'id' => 468,
                'status_code' => '301',
                'from' => '/dts105_50p/modifications/',
                'to' => '/dts105_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            467 => 
            array (
                'id' => 469,
                'status_code' => '301',
                'from' => '/dts105_50p/howtoorder/',
                'to' => '/dts105_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            468 => 
            array (
                'id' => 470,
                'status_code' => '301',
                'from' => '/dts105_50m/modifications/',
                'to' => '/dts105_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            469 => 
            array (
                'id' => 471,
                'status_code' => '301',
                'from' => '/dts105_50m/howtoorder/',
                'to' => '/dts105_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            470 => 
            array (
                'id' => 472,
                'status_code' => '301',
                'from' => '/dts105_100m/modifications/',
                'to' => '/dts105_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            471 => 
            array (
                'id' => 473,
                'status_code' => '301',
                'from' => '/dts105_100m/howtoorder/',
                'to' => '/dts105_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            472 => 
            array (
                'id' => 474,
                'status_code' => '301',
                'from' => '/dts105_100p/modifications/',
                'to' => '/dts105_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            473 => 
            array (
                'id' => 475,
                'status_code' => '301',
                'from' => '/dts105_100p/howtoorder/',
                'to' => '/dts105_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            474 => 
            array (
                'id' => 476,
                'status_code' => '301',
                'from' => '/dts095_pt1000/modifications/',
                'to' => '/dts095_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            475 => 
            array (
                'id' => 477,
                'status_code' => '301',
                'from' => '/dts095_pt1000/howtoorder/',
                'to' => '/dts095_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            476 => 
            array (
                'id' => 478,
                'status_code' => '301',
                'from' => '/dts095_pt100/modifications/',
                'to' => '/dts095_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            477 => 
            array (
                'id' => 479,
                'status_code' => '301',
                'from' => '/dts095_pt100/howtoorder/',
                'to' => '/dts095_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            478 => 
            array (
                'id' => 480,
                'status_code' => '301',
                'from' => '/dts095_50p/modifications/',
                'to' => '/dts095_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            479 => 
            array (
                'id' => 481,
                'status_code' => '301',
                'from' => '/dts095_50p/howtoorder/',
                'to' => '/dts095_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            480 => 
            array (
                'id' => 482,
                'status_code' => '301',
                'from' => '/dts095_50m/modifications/',
                'to' => '/dts095_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            481 => 
            array (
                'id' => 483,
                'status_code' => '301',
                'from' => '/dts095_50m/howtoorder/',
                'to' => '/dts095_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            482 => 
            array (
                'id' => 484,
                'status_code' => '301',
                'from' => '/dts095_100m/modifications/',
                'to' => '/dts095_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            483 => 
            array (
                'id' => 485,
                'status_code' => '301',
                'from' => '/dts095_100m/howtoorder/',
                'to' => '/dts095_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            484 => 
            array (
                'id' => 486,
                'status_code' => '301',
                'from' => '/dts095_100p/modifications/',
                'to' => '/dts095_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            485 => 
            array (
                'id' => 487,
                'status_code' => '301',
                'from' => '/dts095_100p/howtoorder/',
                'to' => '/dts095_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            486 => 
            array (
                'id' => 488,
                'status_code' => '301',
                'from' => '/dts085_pt500/modifications/',
                'to' => '/dts085_pt500/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            487 => 
            array (
                'id' => 489,
                'status_code' => '301',
                'from' => '/dts085_pt500/howtoorder/',
                'to' => '/dts085_pt500/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            488 => 
            array (
                'id' => 490,
                'status_code' => '301',
                'from' => '/dts085_pt100/modifications/',
                'to' => '/dts085_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            489 => 
            array (
                'id' => 491,
                'status_code' => '301',
                'from' => '/dts085_pt100/howtoorder/',
                'to' => '/dts085_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            490 => 
            array (
                'id' => 492,
                'status_code' => '301',
                'from' => '/dts085_50p/modifications/',
                'to' => '/dts085_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            491 => 
            array (
                'id' => 493,
                'status_code' => '301',
                'from' => '/dts085_50p/howtoorder/',
                'to' => '/dts085_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            492 => 
            array (
                'id' => 494,
                'status_code' => '301',
                'from' => '/dts085_50m/modifications/',
                'to' => '/dts085_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            493 => 
            array (
                'id' => 495,
                'status_code' => '301',
                'from' => '/dts085_50m/howtoorder/',
                'to' => '/dts085_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            494 => 
            array (
                'id' => 496,
                'status_code' => '301',
                'from' => '/dts085_100m/modifications/',
                'to' => '/dts085_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            495 => 
            array (
                'id' => 497,
                'status_code' => '301',
                'from' => '/dts085_100m/howtoorder/',
                'to' => '/dts085_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            496 => 
            array (
                'id' => 498,
                'status_code' => '301',
                'from' => '/dts085_100p/modifications/',
                'to' => '/dts085_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            497 => 
            array (
                'id' => 499,
                'status_code' => '301',
                'from' => '/dts085_100p/howtoorder/',
                'to' => '/dts085_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            498 => 
            array (
                'id' => 500,
                'status_code' => '301',
                'from' => '/dts075_pt1000/modifications/',
                'to' => '/dts075_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            499 => 
            array (
                'id' => 501,
                'status_code' => '301',
                'from' => '/dts075_pt1000/howtoorder/',
                'to' => '/dts075_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
        ));
        \DB::table('redirects')->insert(array (
            0 => 
            array (
                'id' => 502,
                'status_code' => '301',
                'from' => '/dts075_pt100/modifications/',
                'to' => '/dts075_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            1 => 
            array (
                'id' => 503,
                'status_code' => '301',
                'from' => '/dts075_pt100/howtoorder/',
                'to' => '/dts075_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            2 => 
            array (
                'id' => 504,
                'status_code' => '301',
                'from' => '/dts075_50p/modifications/',
                'to' => '/dts075_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            3 => 
            array (
                'id' => 505,
                'status_code' => '301',
                'from' => '/dts075_50p/howtoorder/',
                'to' => '/dts075_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            4 => 
            array (
                'id' => 506,
                'status_code' => '301',
                'from' => '/dts075_50m/modifications/',
                'to' => '/dts075_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            5 => 
            array (
                'id' => 507,
                'status_code' => '301',
                'from' => '/dts075_50m/howtoorder/',
                'to' => '/dts075_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            6 => 
            array (
                'id' => 508,
                'status_code' => '301',
                'from' => '/dts075_100m/modifications/',
                'to' => '/dts075_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            7 => 
            array (
                'id' => 509,
                'status_code' => '301',
                'from' => '/dts075_100m/howtoorder/',
                'to' => '/dts075_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            8 => 
            array (
                'id' => 510,
                'status_code' => '301',
                'from' => '/dts065_100p/modifications/',
                'to' => '/dts065_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            9 => 
            array (
                'id' => 511,
                'status_code' => '301',
                'from' => '/dts065_100p/howtoorder/',
                'to' => '/dts065_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            10 => 
            array (
                'id' => 512,
                'status_code' => '301',
                'from' => '/dts065_50m/modifications/',
                'to' => '/dts065_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            11 => 
            array (
                'id' => 513,
                'status_code' => '301',
                'from' => '/dts065_50m/howtoorder/',
                'to' => '/dts065_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            12 => 
            array (
                'id' => 514,
                'status_code' => '301',
                'from' => '/dts065_100m/modifications/',
                'to' => '/dts065_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            13 => 
            array (
                'id' => 515,
                'status_code' => '301',
                'from' => '/dts065_100m/howtoorder/',
                'to' => '/dts065_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            14 => 
            array (
                'id' => 516,
                'status_code' => '301',
                'from' => '/dts065_50p/modifications/',
                'to' => '/dts065_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            15 => 
            array (
                'id' => 517,
                'status_code' => '301',
                'from' => '/dts065_50p/howtoorder/',
                'to' => '/dts065_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            16 => 
            array (
                'id' => 518,
                'status_code' => '301',
                'from' => '/dts065_pt100/modifications/',
                'to' => '/dts065_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            17 => 
            array (
                'id' => 519,
                'status_code' => '301',
                'from' => '/dts065_pt100/howtoorder/',
                'to' => '/dts065_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            18 => 
            array (
                'id' => 520,
                'status_code' => '301',
                'from' => '/dts065_pt1000/modifications/',
                'to' => '/dts065_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            19 => 
            array (
                'id' => 521,
                'status_code' => '301',
                'from' => '/dts065_pt1000/howtoorder/',
                'to' => '/dts065_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            20 => 
            array (
                'id' => 522,
                'status_code' => '301',
                'from' => '/dts075_100p/modifications/',
                'to' => '/dts075_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            21 => 
            array (
                'id' => 523,
                'status_code' => '301',
                'from' => '/dts075_100p/howtoorder/',
                'to' => '/dts075_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            22 => 
            array (
                'id' => 524,
                'status_code' => '301',
                'from' => '/dts055_pt500/modifications/',
                'to' => '/dts055_pt500/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            23 => 
            array (
                'id' => 525,
                'status_code' => '301',
                'from' => '/dts055_pt500/howtoorder/',
                'to' => '/dts055_pt500/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            24 => 
            array (
                'id' => 526,
                'status_code' => '301',
                'from' => '/dts055_pt1000/modifications/',
                'to' => '/dts055_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            25 => 
            array (
                'id' => 527,
                'status_code' => '301',
                'from' => '/dts055_pt1000/howtoorder/',
                'to' => '/dts055_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            26 => 
            array (
                'id' => 528,
                'status_code' => '301',
                'from' => '/dts055_pt100/modifications/',
                'to' => '/dts055_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            27 => 
            array (
                'id' => 529,
                'status_code' => '301',
                'from' => '/dts055_pt100/howtoorder/',
                'to' => '/dts055_pt100/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            28 => 
            array (
                'id' => 530,
                'status_code' => '301',
                'from' => '/dts055_50p/modifications/',
                'to' => '/dts055_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            29 => 
            array (
                'id' => 531,
                'status_code' => '301',
                'from' => '/dts055_50p/howtoorder/',
                'to' => '/dts055_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            30 => 
            array (
                'id' => 532,
                'status_code' => '301',
                'from' => '/dts055_50m/modifications/',
                'to' => '/dts055_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            31 => 
            array (
                'id' => 533,
                'status_code' => '301',
                'from' => '/dts055_50m/howtoorder/',
                'to' => '/dts055_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            32 => 
            array (
                'id' => 534,
                'status_code' => '301',
                'from' => '/dts055_100m/modifications/',
                'to' => '/dts055_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            33 => 
            array (
                'id' => 535,
                'status_code' => '301',
                'from' => '/dts055_100m/howtoorder/',
                'to' => '/dts055_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            34 => 
            array (
                'id' => 536,
                'status_code' => '301',
                'from' => '/dts055_100p/modifications/',
                'to' => '/dts055_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            35 => 
            array (
                'id' => 537,
                'status_code' => '301',
                'from' => '/dts055_100p/howtoorder/',
                'to' => '/dts055_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            36 => 
            array (
                'id' => 538,
                'status_code' => '301',
                'from' => '/dts214_pt1000/modifications/',
                'to' => '/dts214_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            37 => 
            array (
                'id' => 539,
                'status_code' => '301',
                'from' => '/dts214_pt1000/howtoorder/',
                'to' => '/dts214_pt1000/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            38 => 
            array (
                'id' => 540,
                'status_code' => '301',
                'from' => '/dts214_pt500/howtoorder/',
                'to' => '/dts214_pt500/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            39 => 
            array (
                'id' => 541,
                'status_code' => '301',
                'from' => '/dts214_pt500/modifications/',
                'to' => '/dts214_pt500/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            40 => 
            array (
                'id' => 542,
                'status_code' => '301',
                'from' => '/dts025_100p/howtoorder/',
                'to' => '/dts025_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            41 => 
            array (
                'id' => 543,
                'status_code' => '301',
                'from' => '/dts025_100p/modifikations/',
                'to' => '/dts025_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            42 => 
            array (
                'id' => 544,
                'status_code' => '301',
                'from' => '/dts414_100p/howtoorder/',
                'to' => '/dts414_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            43 => 
            array (
                'id' => 545,
                'status_code' => '301',
                'from' => '/dts414_100p/modifications/',
                'to' => '/dts414_100p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            44 => 
            array (
                'id' => 546,
                'status_code' => '301',
                'from' => '/dts025_100m/howtoorder/',
                'to' => '/dts025_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            45 => 
            array (
                'id' => 547,
                'status_code' => '301',
                'from' => '/dts025_100m/modifikations/',
                'to' => '/dts025_100m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            46 => 
            array (
                'id' => 548,
                'status_code' => '301',
                'from' => '/dts025_50m/howtoorder/',
                'to' => '/dts025_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            47 => 
            array (
                'id' => 549,
                'status_code' => '301',
                'from' => '/dts025_50m/modifikations/',
                'to' => '/dts025_50m/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            48 => 
            array (
                'id' => 550,
                'status_code' => '301',
                'from' => '/dts025_50p/howtoorder/',
                'to' => '/dts025_50p/',
                'created_at' => '2018-09-28 04:17:29',
                'updated_at' => '2018-09-28 04:17:29',
            ),
            49 => 
            array (
                'id' => 551,
                'status_code' => '301',
                'from' => '/dts025_50p/modifikations/',
                'to' => '/dts025_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            50 => 
            array (
                'id' => 552,
                'status_code' => '301',
                'from' => '/dts025_pt100/howtoorder/',
                'to' => '/dts025_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            51 => 
            array (
                'id' => 553,
                'status_code' => '301',
                'from' => '/dts025_pt100/modifikations/',
                'to' => '/dts025_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            52 => 
            array (
                'id' => 554,
                'status_code' => '301',
                'from' => '/dts025_pt1000/howtoorder/',
                'to' => '/dts025_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            53 => 
            array (
                'id' => 555,
                'status_code' => '301',
                'from' => '/dts025_pt1000/modifikations/',
                'to' => '/dts025_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            54 => 
            array (
                'id' => 556,
                'status_code' => '301',
                'from' => '/dts414_100m/howtoorder/',
                'to' => '/dts414_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            55 => 
            array (
                'id' => 557,
                'status_code' => '301',
                'from' => '/dts414_100m/modifications/',
                'to' => '/dts414_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            56 => 
            array (
                'id' => 558,
                'status_code' => '301',
                'from' => '/dts414_50m/howtoorder/',
                'to' => '/dts414_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            57 => 
            array (
                'id' => 559,
                'status_code' => '301',
                'from' => '/dts414_50m/modifications/',
                'to' => '/dts414_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            58 => 
            array (
                'id' => 560,
                'status_code' => '301',
                'from' => '/dts414_50p/howtoorder/',
                'to' => '/dts414_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            59 => 
            array (
                'id' => 561,
                'status_code' => '301',
                'from' => '/dts414_pt100/howtoorder/',
                'to' => '/dts414_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            60 => 
            array (
                'id' => 562,
                'status_code' => '301',
                'from' => '/dts414_pt100/modifications/',
                'to' => '/dts414_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            61 => 
            array (
                'id' => 563,
                'status_code' => '301',
                'from' => '/dts414_pt1000/howtoorder/',
                'to' => '/dts414_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            62 => 
            array (
                'id' => 564,
                'status_code' => '301',
                'from' => '/dts414_pt1000/modifications/',
                'to' => '/dts414_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            63 => 
            array (
                'id' => 565,
                'status_code' => '301',
                'from' => '/dts045_100p/howtoorder/',
                'to' => '/dts045_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            64 => 
            array (
                'id' => 566,
                'status_code' => '301',
                'from' => '/dts045_100p/modifikations/',
                'to' => '/dts045_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            65 => 
            array (
                'id' => 567,
                'status_code' => '301',
                'from' => '/dts034_100m/howtoorder/',
                'to' => '/dts034_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            66 => 
            array (
                'id' => 568,
                'status_code' => '301',
                'from' => '/dts034_100m/modifications/',
                'to' => '/dts034_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            67 => 
            array (
                'id' => 569,
                'status_code' => '301',
                'from' => '/dts324_pt100/modifications/',
                'to' => '/dts324_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            68 => 
            array (
                'id' => 570,
                'status_code' => '301',
                'from' => '/dts324_pt100/howtoorder/',
                'to' => '/dts324_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            69 => 
            array (
                'id' => 571,
                'status_code' => '301',
                'from' => '/dts324_50p/modifications/',
                'to' => '/dts324_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            70 => 
            array (
                'id' => 572,
                'status_code' => '301',
                'from' => '/dts324_50p/howtoorder/',
                'to' => '/dts324_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            71 => 
            array (
                'id' => 573,
                'status_code' => '301',
                'from' => '/dts324_50m/howtoorder/',
                'to' => '/dts324_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            72 => 
            array (
                'id' => 574,
                'status_code' => '301',
                'from' => '/dts324_50m/modifications/',
                'to' => '/dts324_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            73 => 
            array (
                'id' => 575,
                'status_code' => '301',
                'from' => '/dts324_100m/modifications/',
                'to' => '/dts324_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            74 => 
            array (
                'id' => 576,
                'status_code' => '301',
                'from' => '/dts324_100m/howtoorder/',
                'to' => '/dts324_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            75 => 
            array (
                'id' => 577,
                'status_code' => '301',
                'from' => '/dts324_100p/modifications/',
                'to' => '/dts324_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            76 => 
            array (
                'id' => 578,
                'status_code' => '301',
                'from' => '/dts324_100p/howtoorder/',
                'to' => '/dts324_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            77 => 
            array (
                'id' => 579,
                'status_code' => '301',
                'from' => '/dts224_pt500/modifications/',
                'to' => '/dts224_pt500/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            78 => 
            array (
                'id' => 580,
                'status_code' => '301',
                'from' => '/dts224_pt500/howtoorder/',
                'to' => '/dts224_pt500/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            79 => 
            array (
                'id' => 581,
                'status_code' => '301',
                'from' => '/dts224_pt1000/modifications/',
                'to' => '/dts224_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            80 => 
            array (
                'id' => 582,
                'status_code' => '301',
                'from' => '/dts224_pt1000/howtoorder/',
                'to' => '/dts224_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            81 => 
            array (
                'id' => 583,
                'status_code' => '301',
                'from' => '/dts224_pt100/modifications/',
                'to' => '/dts224_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            82 => 
            array (
                'id' => 584,
                'status_code' => '301',
                'from' => '/dts224_pt100/howtoorder/',
                'to' => '/dts224_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            83 => 
            array (
                'id' => 585,
                'status_code' => '301',
                'from' => '/dts224_50p/modifications/',
                'to' => '/dts224_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            84 => 
            array (
                'id' => 586,
                'status_code' => '301',
                'from' => '/dts224_50p/howtoorder/',
                'to' => '/dts224_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            85 => 
            array (
                'id' => 587,
                'status_code' => '301',
                'from' => '/dts224_50m/modifications/',
                'to' => '/dts224_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            86 => 
            array (
                'id' => 588,
                'status_code' => '301',
                'from' => '/dts224_50m/howtoorder/',
                'to' => '/dts224_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            87 => 
            array (
                'id' => 589,
                'status_code' => '301',
                'from' => '/dts224_100m/modifications/',
                'to' => '/dts224_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            88 => 
            array (
                'id' => 590,
                'status_code' => '301',
                'from' => '/dts224_100m/howtoorder/',
                'to' => '/dts224_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            89 => 
            array (
                'id' => 591,
                'status_code' => '301',
                'from' => '/dts224_100p/modifications/',
                'to' => '/dts224_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            90 => 
            array (
                'id' => 592,
                'status_code' => '301',
                'from' => '/dts224_100p/howtoorder/',
                'to' => '/dts224_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            91 => 
            array (
                'id' => 593,
                'status_code' => '301',
                'from' => '/dts204_pt1000/howtoorder/',
                'to' => '/dts204_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            92 => 
            array (
                'id' => 594,
                'status_code' => '301',
                'from' => '/dts204_pt1000/modifications/',
                'to' => '/dts204_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            93 => 
            array (
                'id' => 595,
                'status_code' => '301',
                'from' => '/dts204_pt100/modifications/',
                'to' => '/dts204_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            94 => 
            array (
                'id' => 596,
                'status_code' => '301',
                'from' => '/dts204_pt100/howtoorder/',
                'to' => '/dts204_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            95 => 
            array (
                'id' => 597,
                'status_code' => '301',
                'from' => '/dts204_50p/modifications/',
                'to' => '/dts204_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            96 => 
            array (
                'id' => 598,
                'status_code' => '301',
                'from' => '/dts204_50p/howtoorder/',
                'to' => '/dts204_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            97 => 
            array (
                'id' => 599,
                'status_code' => '301',
                'from' => '/dts204_50m/modifications/',
                'to' => '/dts204_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            98 => 
            array (
                'id' => 600,
                'status_code' => '301',
                'from' => '/dts204_50m/howtoorder/',
                'to' => '/dts204_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            99 => 
            array (
                'id' => 601,
                'status_code' => '301',
                'from' => '/dts204_100m/modifications/',
                'to' => '/dts204_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            100 => 
            array (
                'id' => 602,
                'status_code' => '301',
                'from' => '/dts204_100m/howtoorder/',
                'to' => '/dts204_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            101 => 
            array (
                'id' => 603,
                'status_code' => '301',
                'from' => '/dts204_100p/modifications/',
                'to' => '/dts204_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            102 => 
            array (
                'id' => 604,
                'status_code' => '301',
                'from' => '/dts204_100p/howtoorder/',
                'to' => '/dts204_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            103 => 
            array (
                'id' => 605,
                'status_code' => '301',
                'from' => '/dts184_pt1000/modifications/',
                'to' => '/dts184_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            104 => 
            array (
                'id' => 606,
                'status_code' => '301',
                'from' => '/dts184_pt1000/howtoorder/',
                'to' => '/dts184_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            105 => 
            array (
                'id' => 607,
                'status_code' => '301',
                'from' => '/dts184_pt100/modifications/',
                'to' => '/dts184_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            106 => 
            array (
                'id' => 608,
                'status_code' => '301',
                'from' => '/dts184_pt100/howtoorder/',
                'to' => '/dts184_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            107 => 
            array (
                'id' => 609,
                'status_code' => '301',
                'from' => '/dts184_50p/modifications/',
                'to' => '/dts184_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            108 => 
            array (
                'id' => 610,
                'status_code' => '301',
                'from' => '/dts184_50p/howtoorder/',
                'to' => '/dts184_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            109 => 
            array (
                'id' => 611,
                'status_code' => '301',
                'from' => '/dts184_50m/modifications/',
                'to' => '/dts184_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            110 => 
            array (
                'id' => 612,
                'status_code' => '301',
                'from' => '/dts184_50m/howtoorder/',
                'to' => '/dts184_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            111 => 
            array (
                'id' => 613,
                'status_code' => '301',
                'from' => '/dts184_100m/modifications/',
                'to' => '/dts184_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            112 => 
            array (
                'id' => 614,
                'status_code' => '301',
                'from' => '/dts184_100m/howtoorder/',
                'to' => '/dts184_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            113 => 
            array (
                'id' => 615,
                'status_code' => '301',
                'from' => '/dts184_100p/modifications/',
                'to' => '/dts184_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            114 => 
            array (
                'id' => 616,
                'status_code' => '301',
                'from' => '/dts184_100p/howtoorder/',
                'to' => '/dts184_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            115 => 
            array (
                'id' => 617,
                'status_code' => '301',
                'from' => '/dts174_pt1000/howtoorder/',
                'to' => '/dts174_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            116 => 
            array (
                'id' => 618,
                'status_code' => '301',
                'from' => '/dts174_pt1000/modifications/',
                'to' => '/dts174_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            117 => 
            array (
                'id' => 619,
                'status_code' => '301',
                'from' => '/dts174_pt100/modifications/',
                'to' => '/dts174_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            118 => 
            array (
                'id' => 620,
                'status_code' => '301',
                'from' => '/dts174_pt100/howtoorder/',
                'to' => '/dts174_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            119 => 
            array (
                'id' => 621,
                'status_code' => '301',
                'from' => '/dts174_50p/modifications/',
                'to' => '/dts174_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            120 => 
            array (
                'id' => 622,
                'status_code' => '301',
                'from' => '/dts174_50p/howtoorder/',
                'to' => '/dts174_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            121 => 
            array (
                'id' => 623,
                'status_code' => '301',
                'from' => '/dts174_50m/modifications/',
                'to' => '/dts174_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            122 => 
            array (
                'id' => 624,
                'status_code' => '301',
                'from' => '/dts174_50m/howtoorder/',
                'to' => '/dts174_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            123 => 
            array (
                'id' => 625,
                'status_code' => '301',
                'from' => '/dts174_100m/modifications/',
                'to' => '/dts174_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            124 => 
            array (
                'id' => 626,
                'status_code' => '301',
                'from' => '/dts174_100m/howtoorder/',
                'to' => '/dts174_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            125 => 
            array (
                'id' => 627,
                'status_code' => '301',
                'from' => '/dts174_100p/modifications/',
                'to' => '/dts174_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            126 => 
            array (
                'id' => 628,
                'status_code' => '301',
                'from' => '/dts174_100p/howtoorder/',
                'to' => '/dts174_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            127 => 
            array (
                'id' => 629,
                'status_code' => '301',
                'from' => '/dts164_pt1000/modifications/',
                'to' => '/dts164_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            128 => 
            array (
                'id' => 630,
                'status_code' => '301',
                'from' => '/dts164_pt1000/howtoorder/',
                'to' => '/dts164_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            129 => 
            array (
                'id' => 631,
                'status_code' => '301',
                'from' => '/dts164_pt100/modifications/',
                'to' => '/dts164_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            130 => 
            array (
                'id' => 632,
                'status_code' => '301',
                'from' => '/dts164_pt100/howtoorder/',
                'to' => '/dts164_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            131 => 
            array (
                'id' => 633,
                'status_code' => '301',
                'from' => '/dts154_pt100/modifications/',
                'to' => '/dts154_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            132 => 
            array (
                'id' => 634,
                'status_code' => '301',
                'from' => '/dts154_pt100/howtoorder/',
                'to' => '/dts154_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            133 => 
            array (
                'id' => 635,
                'status_code' => '301',
                'from' => '/dts154_50p/modifications/',
                'to' => '/dts154_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            134 => 
            array (
                'id' => 636,
                'status_code' => '301',
                'from' => '/dts154_50p/howtoorder/',
                'to' => '/dts154_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            135 => 
            array (
                'id' => 637,
                'status_code' => '301',
                'from' => '/dts154_50m/modifications/',
                'to' => '/dts154_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            136 => 
            array (
                'id' => 638,
                'status_code' => '301',
                'from' => '/dts154_50m/howtoorder/',
                'to' => '/dts154_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            137 => 
            array (
                'id' => 639,
                'status_code' => '301',
                'from' => '/dts154_100m/modifications/',
                'to' => '/dts154_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            138 => 
            array (
                'id' => 640,
                'status_code' => '301',
                'from' => '/dts154_100m/howtoorder/',
                'to' => '/dts154_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            139 => 
            array (
                'id' => 641,
                'status_code' => '301',
                'from' => '/dts154_100p/howtoorder/',
                'to' => '/dts154_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            140 => 
            array (
                'id' => 642,
                'status_code' => '301',
                'from' => '/dts154_100p/modifications/',
                'to' => '/dts154_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            141 => 
            array (
                'id' => 643,
                'status_code' => '301',
                'from' => '/dts144_pt100/modifications/',
                'to' => '/dts144_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            142 => 
            array (
                'id' => 644,
                'status_code' => '301',
                'from' => '/dts144_pt100/howtoorder/',
                'to' => '/dts144_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            143 => 
            array (
                'id' => 645,
                'status_code' => '301',
                'from' => '/dts144_50p/modifications/',
                'to' => '/dts144_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            144 => 
            array (
                'id' => 646,
                'status_code' => '301',
                'from' => '/dts144_50p/howtoorder/',
                'to' => '/dts144_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            145 => 
            array (
                'id' => 647,
                'status_code' => '301',
                'from' => '/dts144_50m/modifications/',
                'to' => '/dts144_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            146 => 
            array (
                'id' => 648,
                'status_code' => '301',
                'from' => '/dts144_50m/howtoorder/',
                'to' => '/dts144_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            147 => 
            array (
                'id' => 649,
                'status_code' => '301',
                'from' => '/dts144_100m/howtoorder/',
                'to' => '/dts144_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            148 => 
            array (
                'id' => 650,
                'status_code' => '301',
                'from' => '/dts144_100m/modifications/',
                'to' => '/dts144_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            149 => 
            array (
                'id' => 651,
                'status_code' => '301',
                'from' => '/dts144_100p/modifications/',
                'to' => '/dts144_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            150 => 
            array (
                'id' => 652,
                'status_code' => '301',
                'from' => '/dts144_100p/howtoorder/',
                'to' => '/dts144_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            151 => 
            array (
                'id' => 653,
                'status_code' => '301',
                'from' => '/dts134_pt100/modifications/',
                'to' => '/dts134_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            152 => 
            array (
                'id' => 654,
                'status_code' => '301',
                'from' => '/dts134_pt100/howtoorder/',
                'to' => '/dts134_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            153 => 
            array (
                'id' => 655,
                'status_code' => '301',
                'from' => '/dts134_50p/modifications/',
                'to' => '/dts134_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            154 => 
            array (
                'id' => 656,
                'status_code' => '301',
                'from' => '/dts134_50p/howtoorder/',
                'to' => '/dts134_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            155 => 
            array (
                'id' => 657,
                'status_code' => '301',
                'from' => '/dts134_50m/modifications/',
                'to' => '/dts134_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            156 => 
            array (
                'id' => 658,
                'status_code' => '301',
                'from' => '/dts134_50m/howtoorder/',
                'to' => '/dts134_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            157 => 
            array (
                'id' => 659,
                'status_code' => '301',
                'from' => '/dts134_100m/howtoorder/',
                'to' => '/dts134_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            158 => 
            array (
                'id' => 660,
                'status_code' => '301',
                'from' => '/dts134_100m/modifications/',
                'to' => '/dts134_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            159 => 
            array (
                'id' => 661,
                'status_code' => '301',
                'from' => '/dts134_100p/modifications/',
                'to' => '/dts134_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            160 => 
            array (
                'id' => 662,
                'status_code' => '301',
                'from' => '/dts134_100p/howtoorder/',
                'to' => '/dts134_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            161 => 
            array (
                'id' => 663,
                'status_code' => '301',
                'from' => '/dts124_pt1000/modifications/',
                'to' => '/dts124_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            162 => 
            array (
                'id' => 664,
                'status_code' => '301',
                'from' => '/dts124_pt1000/howtoorder/',
                'to' => '/dts124_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            163 => 
            array (
                'id' => 665,
                'status_code' => '301',
                'from' => '/dts124_pt100/modifications/',
                'to' => '/dts124_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            164 => 
            array (
                'id' => 666,
                'status_code' => '301',
                'from' => '/dts124_pt100/howtoorder/',
                'to' => '/dts124_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            165 => 
            array (
                'id' => 667,
                'status_code' => '301',
                'from' => '/dts124_50p/modifications/',
                'to' => '/dts124_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            166 => 
            array (
                'id' => 668,
                'status_code' => '301',
                'from' => '/dts124_50p/howtoorder/',
                'to' => '/dts124_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            167 => 
            array (
                'id' => 669,
                'status_code' => '301',
                'from' => '/dts124_50m/modifications/',
                'to' => '/dts124_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            168 => 
            array (
                'id' => 670,
                'status_code' => '301',
                'from' => '/dts124_50m/howtoorder/',
                'to' => '/dts124_50m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            169 => 
            array (
                'id' => 671,
                'status_code' => '301',
                'from' => '/dts124_100m/modifications/',
                'to' => '/dts124_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            170 => 
            array (
                'id' => 672,
                'status_code' => '301',
                'from' => '/dts124_100m/howtoorder/',
                'to' => '/dts124_100m/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            171 => 
            array (
                'id' => 673,
                'status_code' => '301',
                'from' => '/dts124_100p/modifications/',
                'to' => '/dts124_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            172 => 
            array (
                'id' => 674,
                'status_code' => '301',
                'from' => '/dts124_100p/howtoorder/',
                'to' => '/dts124_100p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            173 => 
            array (
                'id' => 675,
                'status_code' => '301',
                'from' => '/dts114_pt500/modifications/',
                'to' => '/dts114_pt500/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            174 => 
            array (
                'id' => 676,
                'status_code' => '301',
                'from' => '/dts114_pt500/howtoorder/',
                'to' => '/dts114_pt500/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            175 => 
            array (
                'id' => 677,
                'status_code' => '301',
                'from' => '/dts114_pt1000/modifications/',
                'to' => '/dts114_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            176 => 
            array (
                'id' => 678,
                'status_code' => '301',
                'from' => '/dts114_pt1000/howtoorder/',
                'to' => '/dts114_pt1000/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            177 => 
            array (
                'id' => 679,
                'status_code' => '301',
                'from' => '/dts114_pt100/modifications/',
                'to' => '/dts114_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            178 => 
            array (
                'id' => 680,
                'status_code' => '301',
                'from' => '/dts114_pt100/howtoorder/',
                'to' => '/dts114_pt100/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            179 => 
            array (
                'id' => 681,
                'status_code' => '301',
                'from' => '/dts114_50p/modifications/',
                'to' => '/dts114_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            180 => 
            array (
                'id' => 682,
                'status_code' => '301',
                'from' => '/dts114_50p/howtoorder/',
                'to' => '/dts114_50p/',
                'created_at' => '2018-09-28 04:17:30',
                'updated_at' => '2018-09-28 04:17:30',
            ),
            181 => 
            array (
                'id' => 683,
                'status_code' => '301',
                'from' => '/dts114_50m/howtoorder/',
                'to' => '/dts114_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            182 => 
            array (
                'id' => 684,
                'status_code' => '301',
                'from' => '/dts114_50m/modifications/',
                'to' => '/dts114_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            183 => 
            array (
                'id' => 685,
                'status_code' => '301',
                'from' => '/dts044_pt1000/modifications/',
                'to' => '/dts044_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            184 => 
            array (
                'id' => 686,
                'status_code' => '301',
                'from' => '/dts044_pt1000/howtoorder/',
                'to' => '/dts044_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            185 => 
            array (
                'id' => 687,
                'status_code' => '301',
                'from' => '/dts044_pt100/modifications/',
                'to' => '/dts044_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            186 => 
            array (
                'id' => 688,
                'status_code' => '301',
                'from' => '/dts044_pt100/howtoorder/',
                'to' => '/dts044_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            187 => 
            array (
                'id' => 689,
                'status_code' => '301',
                'from' => '/dts044_50p/modifications/',
                'to' => '/dts044_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            188 => 
            array (
                'id' => 690,
                'status_code' => '301',
                'from' => '/dts044_50p/howtoorder/',
                'to' => '/dts044_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            189 => 
            array (
                'id' => 691,
                'status_code' => '301',
                'from' => '/dts044_50m/modifications/',
                'to' => '/dts044_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            190 => 
            array (
                'id' => 692,
                'status_code' => '301',
                'from' => '/dts044_50m/howtoorder/',
                'to' => '/dts044_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            191 => 
            array (
                'id' => 693,
                'status_code' => '301',
                'from' => '/dts044_100m/modifications/',
                'to' => '/dts044_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            192 => 
            array (
                'id' => 694,
                'status_code' => '301',
                'from' => '/dts044_100m/howtoorder/',
                'to' => '/dts044_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            193 => 
            array (
                'id' => 695,
                'status_code' => '301',
                'from' => '/dts044_100p/modifications/',
                'to' => '/dts044_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            194 => 
            array (
                'id' => 696,
                'status_code' => '301',
                'from' => '/dts044_100p/howtoorder/',
                'to' => '/dts044_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            195 => 
            array (
                'id' => 697,
                'status_code' => '301',
                'from' => '/dts045_pt500/modifikations/',
                'to' => '/dts045_pt500/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            196 => 
            array (
                'id' => 698,
                'status_code' => '301',
                'from' => '/dts045_pt500/howtoorder/',
                'to' => '/dts045_pt500/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            197 => 
            array (
                'id' => 699,
                'status_code' => '301',
                'from' => '/dts045_pt1000/modifikations/',
                'to' => '/dts045_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            198 => 
            array (
                'id' => 700,
                'status_code' => '301',
                'from' => '/dts045_pt1000/howtoorder/',
                'to' => '/dts045_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            199 => 
            array (
                'id' => 701,
                'status_code' => '301',
                'from' => '/dts045_pt100/modifikations/',
                'to' => '/dts045_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            200 => 
            array (
                'id' => 702,
                'status_code' => '301',
                'from' => '/dts045_pt100/howtoorder/',
                'to' => '/dts045_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            201 => 
            array (
                'id' => 703,
                'status_code' => '301',
                'from' => '/dts045_50p/modifikations/',
                'to' => '/dts045_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            202 => 
            array (
                'id' => 704,
                'status_code' => '301',
                'from' => '/dts045_50p/howtoorder/',
                'to' => '/dts045_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            203 => 
            array (
                'id' => 705,
                'status_code' => '301',
                'from' => '/dts045_50m/modifikations/',
                'to' => '/dts045_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            204 => 
            array (
                'id' => 706,
                'status_code' => '301',
                'from' => '/dts045_50m/howtoorder/',
                'to' => '/dts045_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            205 => 
            array (
                'id' => 707,
                'status_code' => '301',
                'from' => '/dts045_100m/modifikations/',
                'to' => '/dts045_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            206 => 
            array (
                'id' => 708,
                'status_code' => '301',
                'from' => '/dts045_100m/howtoorder/',
                'to' => '/dts045_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            207 => 
            array (
                'id' => 709,
                'status_code' => '301',
                'from' => '/dts034_pt500/howtoorder/',
                'to' => '/dts034_pt500/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            208 => 
            array (
                'id' => 710,
                'status_code' => '301',
                'from' => '/dts034_pt1000/modifications/',
                'to' => '/dts034_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            209 => 
            array (
                'id' => 711,
                'status_code' => '301',
                'from' => '/dts034_pt1000/howtoorder/',
                'to' => '/dts034_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            210 => 
            array (
                'id' => 712,
                'status_code' => '301',
                'from' => '/dts034_pt100/modifications/',
                'to' => '/dts034_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            211 => 
            array (
                'id' => 713,
                'status_code' => '301',
                'from' => '/dts034_pt100/howtoorder/',
                'to' => '/dts034_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            212 => 
            array (
                'id' => 714,
                'status_code' => '301',
                'from' => '/dts034_50p/howtoorder/',
                'to' => '/dts034_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            213 => 
            array (
                'id' => 715,
                'status_code' => '301',
                'from' => '/dts034_50p/modifications/',
                'to' => '/dts034_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            214 => 
            array (
                'id' => 716,
                'status_code' => '301',
                'from' => '/dts034_50m/modifications/',
                'to' => '/dts034_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            215 => 
            array (
                'id' => 717,
                'status_code' => '301',
                'from' => '/dts034_50m/howtoorder/',
                'to' => '/dts034_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            216 => 
            array (
                'id' => 718,
                'status_code' => '301',
                'from' => '/dts035_pt500/modifications/',
                'to' => '/dts035_pt500/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            217 => 
            array (
                'id' => 719,
                'status_code' => '301',
                'from' => '/dts035_pt500/howtoorder/',
                'to' => '/dts035_pt500/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            218 => 
            array (
                'id' => 720,
                'status_code' => '301',
                'from' => '/dts035_pt1000/modifications/',
                'to' => '/dts035_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            219 => 
            array (
                'id' => 721,
                'status_code' => '301',
                'from' => '/dts035_pt1000/howtoorder/',
                'to' => '/dts035_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            220 => 
            array (
                'id' => 722,
                'status_code' => '301',
                'from' => '/dts035_pt100/modifications/',
                'to' => '/dts035_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            221 => 
            array (
                'id' => 723,
                'status_code' => '301',
                'from' => '/dts035_pt100/howtoorder/',
                'to' => '/dts035_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            222 => 
            array (
                'id' => 724,
                'status_code' => '301',
                'from' => '/dts035_50p/modifications/',
                'to' => '/dts035_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            223 => 
            array (
                'id' => 725,
                'status_code' => '301',
                'from' => '/dts035_50p/howtoorder/',
                'to' => '/dts035_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            224 => 
            array (
                'id' => 726,
                'status_code' => '301',
                'from' => '/dts035_50m/modifications/',
                'to' => '/dts035_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            225 => 
            array (
                'id' => 727,
                'status_code' => '301',
                'from' => '/dts035_50m/howtoorder/',
                'to' => '/dts035_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            226 => 
            array (
                'id' => 728,
                'status_code' => '301',
                'from' => '/dts035_100m/modifications/',
                'to' => '/dts035_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            227 => 
            array (
                'id' => 729,
                'status_code' => '301',
                'from' => '/dts035_100m/howtoorder/',
                'to' => '/dts035_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            228 => 
            array (
                'id' => 730,
                'status_code' => '301',
                'from' => '/dts035_100p/modifications/',
                'to' => '/dts035_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            229 => 
            array (
                'id' => 731,
                'status_code' => '301',
                'from' => '/dts035_100p/howtoorder/',
                'to' => '/dts035_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            230 => 
            array (
                'id' => 732,
                'status_code' => '301',
                'from' => '/dts114_100m/modifications/',
                'to' => '/dts114_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            231 => 
            array (
                'id' => 733,
                'status_code' => '301',
                'from' => '/dts114_100m/howtoorder/',
                'to' => '/dts114_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            232 => 
            array (
                'id' => 734,
                'status_code' => '301',
                'from' => '/dts114_100p/howtoorder/',
                'to' => '/dts114_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            233 => 
            array (
                'id' => 735,
                'status_code' => '301',
                'from' => '/dts114_100p/modifications/',
                'to' => '/dts114_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            234 => 
            array (
                'id' => 736,
                'status_code' => '301',
                'from' => '/dts104_pt1000/modifications/',
                'to' => '/dts104_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            235 => 
            array (
                'id' => 737,
                'status_code' => '301',
                'from' => '/dts104_pt1000/howtoorder/',
                'to' => '/dts104_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            236 => 
            array (
                'id' => 738,
                'status_code' => '301',
                'from' => '/dts104_pt100/modifications/',
                'to' => '/dts104_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            237 => 
            array (
                'id' => 739,
                'status_code' => '301',
                'from' => '/dts104_pt100/modifications/',
                'to' => '/dts104_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            238 => 
            array (
                'id' => 740,
                'status_code' => '301',
                'from' => '/dts104_50p/modifications/',
                'to' => '/dts104_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            239 => 
            array (
                'id' => 741,
                'status_code' => '301',
                'from' => '/dts104_50p/howtoorder/',
                'to' => '/dts104_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            240 => 
            array (
                'id' => 742,
                'status_code' => '301',
                'from' => '/dts104_50m/modifications/',
                'to' => '/dts104_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            241 => 
            array (
                'id' => 743,
                'status_code' => '301',
                'from' => '/dts104_50m/howtoorder/',
                'to' => '/dts104_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            242 => 
            array (
                'id' => 744,
                'status_code' => '301',
                'from' => '/dts104_100m/modifications/',
                'to' => '/dts104_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            243 => 
            array (
                'id' => 745,
                'status_code' => '301',
                'from' => '/dts104_100m/howtoorder/',
                'to' => '/dts104_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            244 => 
            array (
                'id' => 746,
                'status_code' => '301',
                'from' => '/dts054_100p/howtoorder/',
                'to' => '/dts054_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            245 => 
            array (
                'id' => 747,
                'status_code' => '301',
                'from' => '/dts054_100p/modifications/',
                'to' => '/dts054_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            246 => 
            array (
                'id' => 748,
                'status_code' => '301',
                'from' => '/dts054_100m/howtoorder/',
                'to' => '/dts054_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            247 => 
            array (
                'id' => 749,
                'status_code' => '301',
                'from' => '/dts054_100m/modifications/',
                'to' => '/dts054_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            248 => 
            array (
                'id' => 750,
                'status_code' => '301',
                'from' => '/dts054_50m/howtoorder/',
                'to' => '/dts054_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            249 => 
            array (
                'id' => 751,
                'status_code' => '301',
                'from' => '/dts054_50m/modifications/',
                'to' => '/dts054_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            250 => 
            array (
                'id' => 752,
                'status_code' => '301',
                'from' => '/dts054_50p/howtoorder/',
                'to' => '/dts054_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            251 => 
            array (
                'id' => 753,
                'status_code' => '301',
                'from' => '/dts054_50p/modifications/',
                'to' => '/dts054_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            252 => 
            array (
                'id' => 754,
                'status_code' => '301',
                'from' => '/dts054_pt100/howtoorder/',
                'to' => '/dts054_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            253 => 
            array (
                'id' => 755,
                'status_code' => '301',
                'from' => '/dts054_pt100/modifications/',
                'to' => '/dts054_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            254 => 
            array (
                'id' => 756,
                'status_code' => '301',
                'from' => '/dts054_pt1000/howtoorder/',
                'to' => '/dts054_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            255 => 
            array (
                'id' => 757,
                'status_code' => '301',
                'from' => '/dts054_pt1000/modifications/',
                'to' => '/dts054_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            256 => 
            array (
                'id' => 758,
                'status_code' => '301',
                'from' => '/dts054_pt500/howtoorder/',
                'to' => '/dts054_pt500/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            257 => 
            array (
                'id' => 759,
                'status_code' => '301',
                'from' => '/dts054_pt500/modifications/',
                'to' => '/dts054_pt500/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            258 => 
            array (
                'id' => 760,
                'status_code' => '301',
                'from' => '/dts074_100p/howtoorder/',
                'to' => '/dts074_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            259 => 
            array (
                'id' => 761,
                'status_code' => '301',
                'from' => '/dts074_100p/modifications/',
                'to' => '/dts074_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            260 => 
            array (
                'id' => 762,
                'status_code' => '301',
                'from' => '/dts064_100p/howtoorder/',
                'to' => '/dts064_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            261 => 
            array (
                'id' => 763,
                'status_code' => '301',
                'from' => '/dts064_100p/modifications/',
                'to' => '/dts064_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            262 => 
            array (
                'id' => 764,
                'status_code' => '301',
                'from' => '/dts064_100m/howtoorder/',
                'to' => '/dts064_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            263 => 
            array (
                'id' => 765,
                'status_code' => '301',
                'from' => '/dts064_100m/modifications/',
                'to' => '/dts064_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            264 => 
            array (
                'id' => 766,
                'status_code' => '301',
                'from' => '/dts064_50m/howtoorder/',
                'to' => '/dts064_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            265 => 
            array (
                'id' => 767,
                'status_code' => '301',
                'from' => '/dts064_50m/modifications/',
                'to' => '/dts064_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            266 => 
            array (
                'id' => 768,
                'status_code' => '301',
                'from' => '/dts064_50p/howtoorder/',
                'to' => '/dts064_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            267 => 
            array (
                'id' => 769,
                'status_code' => '301',
                'from' => '/dts064_50p/modifications/',
                'to' => '/dts064_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            268 => 
            array (
                'id' => 770,
                'status_code' => '301',
                'from' => '/dts064_pt100/howtoorder/',
                'to' => '/dts064_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            269 => 
            array (
                'id' => 771,
                'status_code' => '301',
                'from' => '/dts064_pt100/modifications/',
                'to' => '/dts064_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            270 => 
            array (
                'id' => 772,
                'status_code' => '301',
                'from' => '/dts064_pt1000/howtoorder/',
                'to' => '/dts064_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            271 => 
            array (
                'id' => 773,
                'status_code' => '301',
                'from' => '/dts064_pt1000/modifications/',
                'to' => '/dts064_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            272 => 
            array (
                'id' => 774,
                'status_code' => '301',
                'from' => '/dts074_100m/howtoorder/',
                'to' => '/dts074_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            273 => 
            array (
                'id' => 775,
                'status_code' => '301',
                'from' => '/dts074_100m/modifications/',
                'to' => '/dts074_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            274 => 
            array (
                'id' => 776,
                'status_code' => '301',
                'from' => '/dts074_50m/howtoorder/',
                'to' => '/dts074_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            275 => 
            array (
                'id' => 777,
                'status_code' => '301',
                'from' => '/dts074_50m/modifications/',
                'to' => '/dts074_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            276 => 
            array (
                'id' => 778,
                'status_code' => '301',
                'from' => '/dts074_50p/howtoorder/',
                'to' => '/dts074_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            277 => 
            array (
                'id' => 779,
                'status_code' => '301',
                'from' => '/dts074_50p/modifications/',
                'to' => '/dts074_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            278 => 
            array (
                'id' => 780,
                'status_code' => '301',
                'from' => '/dts074_pt100/howtoorder/',
                'to' => '/dts074_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            279 => 
            array (
                'id' => 781,
                'status_code' => '301',
                'from' => '/dts074_pt100/modifications/',
                'to' => '/dts074_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            280 => 
            array (
                'id' => 782,
                'status_code' => '301',
                'from' => '/dts074_pt1000/howtoorder/',
                'to' => '/dts074_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            281 => 
            array (
                'id' => 783,
                'status_code' => '301',
                'from' => '/dts074_pt1000/modifications/',
                'to' => '/dts074_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            282 => 
            array (
                'id' => 784,
                'status_code' => '301',
                'from' => '/dts194_100p/howtoorder/',
                'to' => '/dts194_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            283 => 
            array (
                'id' => 785,
                'status_code' => '301',
                'from' => '/dts194_100p/modifications/',
                'to' => '/dts194_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            284 => 
            array (
                'id' => 786,
                'status_code' => '301',
                'from' => '/dts194_100m/modifications/',
                'to' => '/dts194_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            285 => 
            array (
                'id' => 787,
                'status_code' => '301',
                'from' => '/dts194_100m/howtoorder/',
                'to' => '/dts194_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            286 => 
            array (
                'id' => 788,
                'status_code' => '301',
                'from' => '/dts194_50m/howtoorder/',
                'to' => '/dts194_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            287 => 
            array (
                'id' => 789,
                'status_code' => '301',
                'from' => '/dts194_50m/modifications/',
                'to' => '/dts194_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            288 => 
            array (
                'id' => 790,
                'status_code' => '301',
                'from' => '/dts194_50p/howtoorder/',
                'to' => '/dts194_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            289 => 
            array (
                'id' => 791,
                'status_code' => '301',
                'from' => '/dts194_50p/modifications/',
                'to' => '/dts194_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            290 => 
            array (
                'id' => 792,
                'status_code' => '301',
                'from' => '/dts194_pt100/howtoorder/',
                'to' => '/dts194_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            291 => 
            array (
                'id' => 793,
                'status_code' => '301',
                'from' => '/dts194_pt100/modifications/',
                'to' => '/dts194_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            292 => 
            array (
                'id' => 794,
                'status_code' => '301',
                'from' => '/dts194_pt1000/howtoorder/',
                'to' => '/dts194_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            293 => 
            array (
                'id' => 795,
                'status_code' => '301',
                'from' => '/dts194_pt1000/modifications/',
                'to' => '/dts194_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            294 => 
            array (
                'id' => 796,
                'status_code' => '301',
                'from' => '/dts194_pt500/howtoorder/',
                'to' => '/dts194_pt500/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            295 => 
            array (
                'id' => 797,
                'status_code' => '301',
                'from' => '/dts194_pt500/modifications/',
                'to' => '/dts194_pt500/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            296 => 
            array (
                'id' => 798,
                'status_code' => '301',
                'from' => '/dts084_100p/howtoorder/',
                'to' => '/dts084_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            297 => 
            array (
                'id' => 799,
                'status_code' => '301',
                'from' => '/dts084_100p/modifications/',
                'to' => '/dts084_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            298 => 
            array (
                'id' => 800,
                'status_code' => '301',
                'from' => '/dts084_50m/howtoorder/',
                'to' => '/dts084_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            299 => 
            array (
                'id' => 801,
                'status_code' => '301',
                'from' => '/dts084_50m/modifications/',
                'to' => '/dts084_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            300 => 
            array (
                'id' => 802,
                'status_code' => '301',
                'from' => '/dts084_50p/howtoorder/',
                'to' => '/dts084_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            301 => 
            array (
                'id' => 803,
                'status_code' => '301',
                'from' => '/dts084_50p/modifications/',
                'to' => '/dts084_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            302 => 
            array (
                'id' => 804,
                'status_code' => '301',
                'from' => '/dts084_pt100/howtoorder/',
                'to' => '/dts084_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            303 => 
            array (
                'id' => 805,
                'status_code' => '301',
                'from' => '/dts084_pt100/modifications/',
                'to' => '/dts084_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            304 => 
            array (
                'id' => 806,
                'status_code' => '301',
                'from' => '/dts084_pt1000/howtoorder/',
                'to' => '/dts084_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            305 => 
            array (
                'id' => 807,
                'status_code' => '301',
                'from' => '/dts084_pt1000/modifications/',
                'to' => '/dts084_pt1000/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            306 => 
            array (
                'id' => 808,
                'status_code' => '301',
                'from' => '/dts094_100p/howtoorder/',
                'to' => '/dts094_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            307 => 
            array (
                'id' => 809,
                'status_code' => '301',
                'from' => '/dts094_100p/modifications/',
                'to' => '/dts094_100p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            308 => 
            array (
                'id' => 810,
                'status_code' => '301',
                'from' => '/dts094_100m/howtoorder/',
                'to' => '/dts094_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            309 => 
            array (
                'id' => 811,
                'status_code' => '301',
                'from' => '/dts094_100m/modifications/',
                'to' => '/dts094_100m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            310 => 
            array (
                'id' => 812,
                'status_code' => '301',
                'from' => '/dts094_50m/howtoorder/',
                'to' => '/dts094_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            311 => 
            array (
                'id' => 813,
                'status_code' => '301',
                'from' => '/dts094_50m/modifications/',
                'to' => '/dts094_50m/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            312 => 
            array (
                'id' => 814,
                'status_code' => '301',
                'from' => '/dts094_50p/howtoorder/',
                'to' => '/dts094_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            313 => 
            array (
                'id' => 815,
                'status_code' => '301',
                'from' => '/dts094_50p/modifications/',
                'to' => '/dts094_50p/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            314 => 
            array (
                'id' => 816,
                'status_code' => '301',
                'from' => '/dts094_pt100/howtoorder/',
                'to' => '/dts094_pt100/',
                'created_at' => '2018-09-28 04:17:31',
                'updated_at' => '2018-09-28 04:17:31',
            ),
            315 => 
            array (
                'id' => 817,
                'status_code' => '301',
                'from' => '/dts094_pt100/modifications/',
                'to' => '/dts094_pt100/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            316 => 
            array (
                'id' => 818,
                'status_code' => '301',
                'from' => '/dts094_pt1000/howtoorder/',
                'to' => '/dts094_pt1000/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            317 => 
            array (
                'id' => 819,
                'status_code' => '301',
                'from' => '/dts094_pt1000/modifications/',
                'to' => '/dts094_pt1000/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            318 => 
            array (
                'id' => 820,
                'status_code' => '301',
                'from' => '/dts104_100p/howtoorder/',
                'to' => '/dts104_100p/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            319 => 
            array (
                'id' => 821,
                'status_code' => '301',
                'from' => '/dts104_100p/modifications/',
                'to' => '/dts104_100p/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            320 => 
            array (
                'id' => 822,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-uu/modifications/',
                'to' => '/2trm1-sch2-u-uu/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            321 => 
            array (
                'id' => 823,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-ui/modifications/',
                'to' => '/2trm1-sch2-u-ui/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            322 => 
            array (
                'id' => 824,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-tu/modifications/',
                'to' => '/2trm1-sch2-u-tu/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            323 => 
            array (
                'id' => 825,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-tt/modifications/',
                'to' => '/2trm1-sch2-u-tt/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            324 => 
            array (
                'id' => 826,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-tr/modifications/',
                'to' => '/2trm1-sch2-u-tr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            325 => 
            array (
                'id' => 827,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-ti/modifications/',
                'to' => '/2trm1-sch2-u-ti/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            326 => 
            array (
                'id' => 828,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-su/modifications/',
                'to' => '/2trm1-sch2-u-su/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            327 => 
            array (
                'id' => 829,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-st/modifications/',
                'to' => '/2trm1-sch2-u-st/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            328 => 
            array (
                'id' => 830,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-ss/modifications/',
                'to' => '/2trm1-sch2-u-ss/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            329 => 
            array (
                'id' => 831,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-si/modifications/',
                'to' => '/2trm1-sch2-u-si/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            330 => 
            array (
                'id' => 832,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-ru/modifications/',
                'to' => '/2trm1-sch2-u-ru/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            331 => 
            array (
                'id' => 833,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-rs/modifications/',
                'to' => '/2trm1-sch2-u-rs/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            332 => 
            array (
                'id' => 834,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-rr/modifications/',
                'to' => '/2trm1-sch2-u-rr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            333 => 
            array (
                'id' => 835,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-rk/modifications/',
                'to' => '/2trm1-sch2-u-rk/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            334 => 
            array (
                'id' => 836,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-ii/modifications/',
                'to' => '/2trm1-sch11-u-ii/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            335 => 
            array (
                'id' => 837,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-iu/modifications/',
                'to' => '/2trm1-sch11-u-iu/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            336 => 
            array (
                'id' => 838,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-kk/modifications/',
                'to' => '/2trm1-sch11-u-kk/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            337 => 
            array (
                'id' => 839,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-kr/modifications/',
                'to' => '/2trm1-sch11-u-kr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            338 => 
            array (
                'id' => 840,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-ri/modifications/',
                'to' => '/2trm1-sch11-u-ri/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            339 => 
            array (
                'id' => 841,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-rr/modifications/',
                'to' => '/2trm1-sch11-u-rr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            340 => 
            array (
                'id' => 842,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-ru/modifications/',
                'to' => '/2trm1-sch11-u-ru/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            341 => 
            array (
                'id' => 843,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-sr/modifications/',
                'to' => '/2trm1-sch11-u-sr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            342 => 
            array (
                'id' => 844,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-su/modifications/',
                'to' => '/2trm1-sch11-u-su/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            343 => 
            array (
                'id' => 845,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-ti/modifications/',
                'to' => '/2trm1-sch11-u-ti/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            344 => 
            array (
                'id' => 846,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-tr/modifications/',
                'to' => '/2trm1-sch11-u-tr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            345 => 
            array (
                'id' => 847,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-ts/modifications/',
                'to' => '/2trm1-sch11-u-ts/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            346 => 
            array (
                'id' => 848,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-tt/modifications/',
                'to' => '/2trm1-sch11-u-tt/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            347 => 
            array (
                'id' => 849,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-tu/modifications/',
                'to' => '/2trm1-sch11-u-tu/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            348 => 
            array (
                'id' => 850,
                'status_code' => '301',
                'from' => '/2trm1-sch11-u-uu/modifications/',
                'to' => '/2trm1-sch11-u-uu/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            349 => 
            array (
                'id' => 851,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-ii/modifications/',
                'to' => '/2trm1-sch2-u-ii/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            350 => 
            array (
                'id' => 852,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-ki/modifications/',
                'to' => '/2trm1-sch2-u-ki/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            351 => 
            array (
                'id' => 853,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-kk/modifications/',
                'to' => '/2trm1-sch2-u-kk/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            352 => 
            array (
                'id' => 854,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-ks/modifications/',
                'to' => '/2trm1-sch2-u-ks/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            353 => 
            array (
                'id' => 855,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-ku/modifications/',
                'to' => '/2trm1-sch2-u-ku/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            354 => 
            array (
                'id' => 856,
                'status_code' => '301',
                'from' => '/2trm1-sch2-u-ri/modifications/',
                'to' => '/2trm1-sch2-u-ri/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            355 => 
            array (
                'id' => 857,
                'status_code' => '301',
                'from' => '/2trm1-d-u-iu/modifications/',
                'to' => '/2trm1-d-u-iu/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            356 => 
            array (
                'id' => 858,
                'status_code' => '301',
                'from' => '/2trm1-d-u-ki/modifications/',
                'to' => '/2trm1-d-u-ki/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            357 => 
            array (
                'id' => 859,
                'status_code' => '301',
                'from' => '/2trm1-d-u-kk/modifications/',
                'to' => '/2trm1-d-u-kk/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            358 => 
            array (
                'id' => 860,
                'status_code' => '301',
                'from' => '/2trm1-d-u-ks/modifications/',
                'to' => '/2trm1-d-u-ks/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            359 => 
            array (
                'id' => 861,
                'status_code' => '301',
                'from' => '/2trm1-d-u-ri/modifications/',
                'to' => '/2trm1-d-u-ri/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            360 => 
            array (
                'id' => 862,
                'status_code' => '301',
                'from' => '/2trm1-d-u-rr/modifications/',
                'to' => '/2trm1-d-u-rr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            361 => 
            array (
                'id' => 863,
                'status_code' => '301',
                'from' => '/2trm1-d-u-ru/modifications/',
                'to' => '/2trm1-d-u-ru/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            362 => 
            array (
                'id' => 864,
                'status_code' => '301',
                'from' => '/2trm1-d-u-si/modifications/',
                'to' => '/2trm1-d-u-si/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            363 => 
            array (
                'id' => 865,
                'status_code' => '301',
                'from' => '/2trm1-d-u-sr/modifications/',
                'to' => '/2trm1-d-u-sr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            364 => 
            array (
                'id' => 866,
                'status_code' => '301',
                'from' => '/2trm1-d-u-ti/modifications/',
                'to' => '/2trm1-d-u-ti/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            365 => 
            array (
                'id' => 867,
                'status_code' => '301',
                'from' => '/2trm1-d-u-tr/modifications/',
                'to' => '/2trm1-d-u-tr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            366 => 
            array (
                'id' => 868,
                'status_code' => '301',
                'from' => '/2trm1-d-u-tt/modifications/',
                'to' => '/2trm1-d-u-tt/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            367 => 
            array (
                'id' => 869,
                'status_code' => '301',
                'from' => '/2trm1-d-u-tu/modifications/',
                'to' => '/2trm1-d-u-tu/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            368 => 
            array (
                'id' => 870,
                'status_code' => '301',
                'from' => '/2trm1-d-u-uu/modifications/',
                'to' => '/2trm1-d-u-uu/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            369 => 
            array (
                'id' => 871,
                'status_code' => '301',
                'from' => '/2trm1-d-u-ss/modifications/',
                'to' => '/2trm1-d-u-ss/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            370 => 
            array (
                'id' => 872,
                'status_code' => '301',
                'from' => '/2trm1-d-u-st/modifications/',
                'to' => '/2trm1-d-u-st/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            371 => 
            array (
                'id' => 873,
                'status_code' => '301',
                'from' => '/2trm1-n-u-ii/modifications/',
                'to' => '/2trm1-n-u-ii/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            372 => 
            array (
                'id' => 874,
                'status_code' => '301',
                'from' => '/2trm1-n-u-kk/modifications/',
                'to' => '/2trm1-n-u-kk/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            373 => 
            array (
                'id' => 875,
                'status_code' => '301',
                'from' => '/2trm1-n-u-ku/modifications/',
                'to' => '/2trm1-n-u-ku/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            374 => 
            array (
                'id' => 876,
                'status_code' => '301',
                'from' => '/2trm1-n-u-iu/modifications/',
                'to' => '/2trm1-n-u-iu/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            375 => 
            array (
                'id' => 877,
                'status_code' => '301',
                'from' => '/2trm1-n-u-ki/modifications/',
                'to' => '/2trm1-n-u-ki/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            376 => 
            array (
                'id' => 878,
                'status_code' => '301',
                'from' => '/2trm1-n-u-ri/modifications/',
                'to' => '/2trm1-n-u-ri/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            377 => 
            array (
                'id' => 879,
                'status_code' => '301',
                'from' => '/2trm1-n-u-rr/modifications/',
                'to' => '/2trm1-n-u-rr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            378 => 
            array (
                'id' => 880,
                'status_code' => '301',
                'from' => '/2trm1-n-u-rk/modifications/',
                'to' => '/2trm1-n-u-rk/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            379 => 
            array (
                'id' => 881,
                'status_code' => '301',
                'from' => '/2trm1-n-u-ik/modifications/',
                'to' => '/2trm1-n-u-ik/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            380 => 
            array (
                'id' => 882,
                'status_code' => '301',
                'from' => '/2trm1-n-u-rs/modifications/',
                'to' => '/2trm1-n-u-rs/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            381 => 
            array (
                'id' => 883,
                'status_code' => '301',
                'from' => '/2trm1-n-u-rt/modifications/',
                'to' => '/2trm1-n-u-rt/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            382 => 
            array (
                'id' => 884,
                'status_code' => '301',
                'from' => '/2trm1-n-u-ru/modifications/',
                'to' => '/2trm1-n-u-ru/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            383 => 
            array (
                'id' => 885,
                'status_code' => '301',
                'from' => '/2trm1-n-u-sr/modifications/',
                'to' => '/2trm1-n-u-sr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            384 => 
            array (
                'id' => 886,
                'status_code' => '301',
                'from' => '/2trm1-n-u-ss/modifications/',
                'to' => '/2trm1-n-u-ss/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            385 => 
            array (
                'id' => 887,
                'status_code' => '301',
                'from' => '/2trm1-n-u-st/modifications/',
                'to' => '/2trm1-n-u-st/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            386 => 
            array (
                'id' => 888,
                'status_code' => '301',
                'from' => '/2trm1-n-u-su/modifications/',
                'to' => '/2trm1-n-u-su/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            387 => 
            array (
                'id' => 889,
                'status_code' => '301',
                'from' => '/2trm1-n-u-ti/modifications/',
                'to' => '/2trm1-n-u-ti/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            388 => 
            array (
                'id' => 890,
                'status_code' => '301',
                'from' => '/2trm1-n-u-tr/modifications/',
                'to' => '/2trm1-n-u-tr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            389 => 
            array (
                'id' => 891,
                'status_code' => '301',
                'from' => '/2trm1-n-u-ts/modifications/',
                'to' => '/2trm1-n-u-ts/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            390 => 
            array (
                'id' => 892,
                'status_code' => '301',
                'from' => '/2trm1-n-u-tt/modifications/',
                'to' => '/2trm1-n-u-tt/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            391 => 
            array (
                'id' => 893,
                'status_code' => '301',
                'from' => '/2trm1-n-u-tu/modifications/',
                'to' => '/2trm1-n-u-tu/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            392 => 
            array (
                'id' => 894,
                'status_code' => '301',
                'from' => '/2trm1-n-u-uu/modifications/',
                'to' => '/2trm1-n-u-uu/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            393 => 
            array (
                'id' => 895,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-ii/modifications/',
                'to' => '/2trm1-sch1-u-ii/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            394 => 
            array (
                'id' => 896,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-iu/modifications/',
                'to' => '/2trm1-sch1-u-iu/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            395 => 
            array (
                'id' => 897,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-ki/modifications/',
                'to' => '/2trm1-sch1-u-ki/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            396 => 
            array (
                'id' => 898,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-kk/modifications/',
                'to' => '/2trm1-sch1-u-kk/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            397 => 
            array (
                'id' => 899,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-ks/modifications/',
                'to' => '/2trm1-sch1-u-ks/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            398 => 
            array (
                'id' => 900,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-ku/modifications/',
                'to' => '/2trm1-sch1-u-ku/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            399 => 
            array (
                'id' => 901,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-ri/modifications/',
                'to' => '/2trm1-sch1-u-ri/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            400 => 
            array (
                'id' => 902,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-rk/modifications/',
                'to' => '/2trm1-sch1-u-rk/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            401 => 
            array (
                'id' => 903,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-rr/modifications/',
                'to' => '/2trm1-sch1-u-rr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            402 => 
            array (
                'id' => 904,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-rs/modifications/',
                'to' => '/2trm1-sch1-u-rs/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            403 => 
            array (
                'id' => 905,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-ru/modifications/',
                'to' => '/2trm1-sch1-u-ru/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            404 => 
            array (
                'id' => 906,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-si/modifications/',
                'to' => '/2trm1-sch1-u-si/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            405 => 
            array (
                'id' => 907,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-sr/modifications/',
                'to' => '/2trm1-sch1-u-sr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            406 => 
            array (
                'id' => 908,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-ss/modifications/',
                'to' => '/2trm1-sch1-u-ss/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            407 => 
            array (
                'id' => 909,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-su/modifications/',
                'to' => '/2trm1-sch1-u-su/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            408 => 
            array (
                'id' => 910,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-ti/modifications/',
                'to' => '/2trm1-sch1-u-ti/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            409 => 
            array (
                'id' => 911,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-tr/modifications/',
                'to' => '/2trm1-sch1-u-tr/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            410 => 
            array (
                'id' => 912,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-ts/modifications/',
                'to' => '/2trm1-sch1-u-ts/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            411 => 
            array (
                'id' => 913,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-tt/modifications/',
                'to' => '/2trm1-sch1-u-tt/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            412 => 
            array (
                'id' => 914,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-ui/modifications/',
                'to' => '/2trm1-sch1-u-ui/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            413 => 
            array (
                'id' => 915,
                'status_code' => '301',
                'from' => '/2trm1-sch1-u-uu/modifications/',
                'to' => '/2trm1-sch1-u-uu/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            414 => 
            array (
                'id' => 916,
                'status_code' => '301',
                'from' => '/trm33-shh4-01/howtoorder/',
                'to' => '/trm33-shh4-01/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            415 => 
            array (
                'id' => 917,
                'status_code' => '301',
                'from' => '/trm33-shh4-01-rs/howtoorder/',
                'to' => '/trm33-shh4-01-rs/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            416 => 
            array (
                'id' => 918,
                'status_code' => '301',
                'from' => '/trm33-shh4-03/howtoorder/',
                'to' => '/trm33-shh4-03/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            417 => 
            array (
                'id' => 919,
                'status_code' => '301',
                'from' => '/trm33-shh4-03-rs/howtoorder/',
                'to' => '/trm33-shh4-03-rs/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            418 => 
            array (
                'id' => 920,
                'status_code' => '301',
                'from' => '/trm33-shh7-tc/howtoorder/',
                'to' => '/trm33-shh7-tc/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            419 => 
            array (
                'id' => 921,
                'status_code' => '301',
                'from' => '/trm33-shh7-tc-rs/howtoorder/',
                'to' => '/trm33-shh7-tc-rs/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            420 => 
            array (
                'id' => 922,
                'status_code' => '301',
                'from' => '/trm133m-oirrro-04/howtoorder/',
                'to' => '/trm133m-oirrro-04/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            421 => 
            array (
                'id' => 923,
                'status_code' => '301',
                'from' => '/trm133m-ourrro-04/howtoorder/',
                'to' => '/trm133m-ourrro-04/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            422 => 
            array (
                'id' => 924,
                'status_code' => '301',
                'from' => '/trm133m-ouruoo-04/howtoorder/',
                'to' => '/trm133m-ouruoo-04/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            423 => 
            array (
                'id' => 925,
                'status_code' => '301',
                'from' => '/trm133m-ouurrr-04/howtoorder/',
                'to' => '/trm133m-ouurrr-04/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            424 => 
            array (
                'id' => 926,
                'status_code' => '301',
                'from' => '/trm133m-ouuuoo-04/howtoorder/',
                'to' => '/trm133m-ouuuoo-04/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            425 => 
            array (
                'id' => 927,
                'status_code' => '301',
                'from' => '/trm133m-rioior-02/howtoorder/',
                'to' => '/trm133m-rioior-02/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            426 => 
            array (
                'id' => 928,
                'status_code' => '301',
                'from' => '/trm133m-riorrr-02/howtoorder/',
                'to' => '/trm133m-riorrr-02/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            427 => 
            array (
                'id' => 929,
                'status_code' => '301',
                'from' => '/trm133m-riouor-02/howtoorder/',
                'to' => '/trm133m-riouor-02/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            428 => 
            array (
                'id' => 930,
                'status_code' => '301',
                'from' => '/trm133m-rrirrr-04/howtoorder/',
                'to' => '/trm133m-rrirrr-04/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            429 => 
            array (
                'id' => 931,
                'status_code' => '301',
                'from' => '/trm133m-rrrior-02/howtoorder/',
                'to' => '/trm133m-rrrior-02/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            430 => 
            array (
                'id' => 932,
                'status_code' => '301',
                'from' => '/trm133m-rrrrrr-02/howtoorder/',
                'to' => '/trm133m-rrrrrr-02/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            431 => 
            array (
                'id' => 933,
                'status_code' => '301',
                'from' => '/trm133m-rrrrrr-04/howtoorder/',
                'to' => '/trm133m-rrrrrr-04/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            432 => 
            array (
                'id' => 934,
                'status_code' => '301',
                'from' => '/trm133m-rrruor-02/howtoorder/',
                'to' => '/trm133m-rrruor-02/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            433 => 
            array (
                'id' => 935,
                'status_code' => '301',
                'from' => '/trm133m-rrruor-04/howtoorder/',
                'to' => '/trm133m-rrruor-04/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            434 => 
            array (
                'id' => 936,
                'status_code' => '301',
                'from' => '/trm133m-rrurrr-04/howtoorder/',
                'to' => '/trm133m-rrurrr-04/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            435 => 
            array (
                'id' => 937,
                'status_code' => '301',
                'from' => '/trm133m-rruuor-04/howtoorder/',
                'to' => '/trm133m-rruuor-04/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            436 => 
            array (
                'id' => 938,
                'status_code' => '301',
                'from' => '/trm133m-rtirrr-04/howtoorder/',
                'to' => '/trm133m-rtirrr-04/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            437 => 
            array (
                'id' => 939,
                'status_code' => '301',
                'from' => '/trm133m-rtrrrr-04/howtoorder/',
                'to' => '/trm133m-rtrrrr-04/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            438 => 
            array (
                'id' => 940,
                'status_code' => '301',
                'from' => '/trm133m-rttttt-04/howtoorder/',
                'to' => '/trm133m-rttttt-04/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            439 => 
            array (
                'id' => 941,
                'status_code' => '301',
                'from' => '/trm133m-ruorrr-02/howtoorder/',
                'to' => '/trm133m-ruorrr-02/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            440 => 
            array (
                'id' => 942,
                'status_code' => '301',
                'from' => '/trm133m-ruouor-02/howtoorder/',
                'to' => '/trm133m-ruouor-02/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            441 => 
            array (
                'id' => 943,
                'status_code' => '301',
                'from' => '/Satec-RPM172E/questionnaire/',
                'to' => '/Satec-RPM172E/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            442 => 
            array (
                'id' => 944,
                'status_code' => '301',
                'from' => '/Satec-PM175/questionnaire/',
                'to' => '/Satec-PM175/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            443 => 
            array (
                'id' => 945,
                'status_code' => '301',
                'from' => '/t44/questionnaire/',
                'to' => '/t44/',
                'created_at' => '2018-09-28 04:17:32',
                'updated_at' => '2018-09-28 04:17:32',
            ),
            444 => 
            array (
                'id' => 946,
                'status_code' => '301',
                'from' => '/ut1-d/howtoorder/',
                'to' => '/ut1-d/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            445 => 
            array (
                'id' => 947,
                'status_code' => '301',
                'from' => '/ut1-n/howtoorder/',
                'to' => '/ut1-n/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            446 => 
            array (
                'id' => 948,
                'status_code' => '301',
                'from' => '/ut1-sch1/howtoorder/',
                'to' => '/ut1-sch1/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            447 => 
            array (
                'id' => 949,
                'status_code' => '301',
                'from' => '/ut1-sch2/howtoorder/',
                'to' => '/ut1-sch2/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            448 => 
            array (
                'id' => 950,
                'status_code' => '301',
                'from' => '/ut24-d-k/howtoorder/',
                'to' => '/ut24-d-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            449 => 
            array (
                'id' => 951,
                'status_code' => '301',
                'from' => '/ut24-d-r/howtoorder/',
                'to' => '/ut24-d-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            450 => 
            array (
                'id' => 952,
                'status_code' => '301',
                'from' => '/ut24-d-s/howtoorder/',
                'to' => '/ut24-d-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            451 => 
            array (
                'id' => 953,
                'status_code' => '301',
                'from' => '/ut24-n-k/howtoorder/',
                'to' => '/ut24-n-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            452 => 
            array (
                'id' => 954,
                'status_code' => '301',
                'from' => '/ut24-n-r/howtoorder/',
                'to' => '/ut24-n-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            453 => 
            array (
                'id' => 955,
                'status_code' => '301',
                'from' => '/ut24-n-s/howtoorder/',
                'to' => '/ut24-n-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            454 => 
            array (
                'id' => 956,
                'status_code' => '301',
                'from' => '/ut24-sch1-k/howtoorder/',
                'to' => '/ut24-sch1-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            455 => 
            array (
                'id' => 957,
                'status_code' => '301',
                'from' => '/ut24-sch1-r/howtoorder/',
                'to' => '/ut24-sch1-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            456 => 
            array (
                'id' => 958,
                'status_code' => '301',
                'from' => '/ut24-sch1-s/howtoorder/',
                'to' => '/ut24-sch1-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            457 => 
            array (
                'id' => 959,
                'status_code' => '301',
                'from' => '/ut24-sch2-k/howtoorder/',
                'to' => '/ut24-sch2-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            458 => 
            array (
                'id' => 960,
                'status_code' => '301',
                'from' => '/ut24-sch2-r/howtoorder/',
                'to' => '/ut24-sch2-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            459 => 
            array (
                'id' => 961,
                'status_code' => '301',
                'from' => '/ut24-sch2-s/howtoorder/',
                'to' => '/ut24-sch2-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            460 => 
            array (
                'id' => 962,
                'status_code' => '301',
                'from' => '/plk304-24-ss/howtoorder/',
                'to' => '/plk304-24-ss/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            461 => 
            array (
                'id' => 963,
                'status_code' => '301',
                'from' => '/sv01-220n/howtoorder/',
                'to' => '/sv01-220n/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            462 => 
            array (
                'id' => 964,
                'status_code' => '301',
                'from' => '/sv01-220n-r/howtoorder/',
                'to' => '/sv01-220n-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            463 => 
            array (
                'id' => 965,
                'status_code' => '301',
                'from' => '/sv01-220n-r-rs/howtoorder/',
                'to' => '/sv01-220n-r-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            464 => 
            array (
                'id' => 966,
                'status_code' => '301',
                'from' => '/sv01-220sch1/howtoorder/',
                'to' => '/sv01-220sch1/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            465 => 
            array (
                'id' => 967,
                'status_code' => '301',
                'from' => '/sv01-220sch1-r/howtoorder/',
                'to' => '/sv01-220sch1-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            466 => 
            array (
                'id' => 968,
                'status_code' => '301',
                'from' => '/sv01-220sch1-r-rs/howtoorder/',
                'to' => '/sv01-220sch1-r-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            467 => 
            array (
                'id' => 969,
                'status_code' => '301',
                'from' => '/sv01-220sch2/howtoorder/',
                'to' => '/sv01-220sch2/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            468 => 
            array (
                'id' => 970,
                'status_code' => '301',
                'from' => '/sv01-220sch2-r/howtoorder/',
                'to' => '/sv01-220sch2-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            469 => 
            array (
                'id' => 971,
                'status_code' => '301',
                'from' => '/sv01-220sch2-r-rs/howtoorder/',
                'to' => '/sv01-220sch2-r-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            470 => 
            array (
                'id' => 972,
                'status_code' => '301',
                'from' => '/sv01-24n/howtoorder/',
                'to' => '/sv01-24n/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            471 => 
            array (
                'id' => 973,
                'status_code' => '301',
                'from' => '/sv01-24n-r/howtoorder/',
                'to' => '/sv01-24n-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            472 => 
            array (
                'id' => 974,
                'status_code' => '301',
                'from' => '/sv01-24n-r-rs/howtoorder/',
                'to' => '/sv01-24n-r-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            473 => 
            array (
                'id' => 975,
                'status_code' => '301',
                'from' => '/sv01-24sch1/howtoorder/',
                'to' => '/sv01-24sch1/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            474 => 
            array (
                'id' => 976,
                'status_code' => '301',
                'from' => '/sv01-24sch1-r/howtoorder/',
                'to' => '/sv01-24sch1-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            475 => 
            array (
                'id' => 977,
                'status_code' => '301',
                'from' => '/sv01-24sch1-r-rs/howtoorder/',
                'to' => '/sv01-24sch1-r-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            476 => 
            array (
                'id' => 978,
                'status_code' => '301',
                'from' => '/sv01-24sch2/howtoorder/',
                'to' => '/sv01-24sch2/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            477 => 
            array (
                'id' => 979,
                'status_code' => '301',
                'from' => '/sv01-24sch2-r/howtoorder/',
                'to' => '/sv01-24sch2-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            478 => 
            array (
                'id' => 980,
                'status_code' => '301',
                'from' => '/sv01-24sch2-r-rs/howtoorder/',
                'to' => '/sv01-24sch2-r-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            479 => 
            array (
                'id' => 981,
                'status_code' => '301',
                'from' => '/si8-n-k/howtoorder/',
                'to' => '/si8-n-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            480 => 
            array (
                'id' => 982,
                'status_code' => '301',
                'from' => '/si8-n-k-rs/howtoorder/',
                'to' => '/si8-n-k-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            481 => 
            array (
                'id' => 983,
                'status_code' => '301',
                'from' => '/si8-n-r/howtoorder/',
                'to' => '/si8-n-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            482 => 
            array (
                'id' => 984,
                'status_code' => '301',
                'from' => '/si8-n-r-rs/howtoorder/',
                'to' => '/si8-n-r-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            483 => 
            array (
                'id' => 985,
                'status_code' => '301',
                'from' => '/si8-n-s/howtoorder/',
                'to' => '/si8-n-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            484 => 
            array (
                'id' => 986,
                'status_code' => '301',
                'from' => '/si8-n-s-rs/howtoorder/',
                'to' => '/si8-n-s-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            485 => 
            array (
                'id' => 987,
                'status_code' => '301',
                'from' => '/si8-sch1-k/howtoorder/',
                'to' => '/si8-sch1-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            486 => 
            array (
                'id' => 988,
                'status_code' => '301',
                'from' => '/si8-sch1-k-rs/howtoorder/',
                'to' => '/si8-sch1-k-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            487 => 
            array (
                'id' => 989,
                'status_code' => '301',
                'from' => '/si8-sch1-r/howtoorder/',
                'to' => '/si8-sch1-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            488 => 
            array (
                'id' => 990,
                'status_code' => '301',
                'from' => '/si8-sch1-r-rs/howtoorder/',
                'to' => '/si8-sch1-r-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            489 => 
            array (
                'id' => 991,
                'status_code' => '301',
                'from' => '/si8-sch1-s/howtoorder/',
                'to' => '/si8-sch1-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            490 => 
            array (
                'id' => 992,
                'status_code' => '301',
                'from' => '/si8-sch1-s-rs/howtoorder/',
                'to' => '/si8-sch1-s-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            491 => 
            array (
                'id' => 993,
                'status_code' => '301',
                'from' => '/si8-sch2-k/howtoorder/',
                'to' => '/si8-sch2-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            492 => 
            array (
                'id' => 994,
                'status_code' => '301',
                'from' => '/si8-sch2-k-rs/howtoorder/',
                'to' => '/si8-sch2-k-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            493 => 
            array (
                'id' => 995,
                'status_code' => '301',
                'from' => '/si8-sch2-r/howtoorder/',
                'to' => '/si8-sch2-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            494 => 
            array (
                'id' => 996,
                'status_code' => '301',
                'from' => '/si8-sch2-r-rs/howtoorder/',
                'to' => '/si8-sch2-r-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            495 => 
            array (
                'id' => 997,
                'status_code' => '301',
                'from' => '/si8-sch2-s/howtoorder/',
                'to' => '/si8-sch2-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            496 => 
            array (
                'id' => 998,
                'status_code' => '301',
                'from' => '/si8-sch2-s-rs/howtoorder/',
                'to' => '/si8-sch2-s-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            497 => 
            array (
                'id' => 999,
                'status_code' => '301',
                'from' => '/tx01-224-n-ir-rs/howtoorder/',
                'to' => '/tx01-224-n-ir-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            498 => 
            array (
                'id' => 1000,
                'status_code' => '301',
                'from' => '/tx01-224-n-r-rs/howtoorder/',
                'to' => '/tx01-224-n-r-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            499 => 
            array (
                'id' => 1001,
                'status_code' => '301',
                'from' => '/tx01-224-n-ur-rs/howtoorder/',
                'to' => '/tx01-224-n-ur-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
        ));
        \DB::table('redirects')->insert(array (
            0 => 
            array (
                'id' => 1002,
                'status_code' => '301',
                'from' => '/tx01-224-sch2-ir-rs/howtoorder/',
                'to' => '/tx01-224-sch2-ir-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            1 => 
            array (
                'id' => 1003,
                'status_code' => '301',
                'from' => '/tx01-224-sch2-r-rs/howtoorder/',
                'to' => '/tx01-224-sch2-r-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            2 => 
            array (
                'id' => 1004,
                'status_code' => '301',
                'from' => '/tx01-224-sch2-ur-rs/howtoorder/',
                'to' => '/tx01-224-sch2-ur-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            3 => 
            array (
                'id' => 1005,
                'status_code' => '301',
                'from' => '/tx01-24-n-ir-rs/howtoorder/',
                'to' => '/tx01-24-n-ir-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            4 => 
            array (
                'id' => 1006,
                'status_code' => '301',
                'from' => '/tx01-24-n-r-rs/howtoorder/',
                'to' => '/tx01-24-n-r-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            5 => 
            array (
                'id' => 1007,
                'status_code' => '301',
                'from' => '/tx01-24-n-ur-rs/howtoorder/',
                'to' => '/tx01-24-n-ur-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            6 => 
            array (
                'id' => 1008,
                'status_code' => '301',
                'from' => '/tx01-24-sch2-ir-rs/howtoorder/',
                'to' => '/tx01-24-sch2-ir-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            7 => 
            array (
                'id' => 1009,
                'status_code' => '301',
                'from' => '/tx01-24-sch2-r-rs/howtoorder/',
                'to' => '/tx01-24-sch2-r-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            8 => 
            array (
                'id' => 1010,
                'status_code' => '301',
                'from' => '/tx01-24-sch2-ur-rs/howtoorder/',
                'to' => '/tx01-24-sch2-ur-rs/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            9 => 
            array (
                'id' => 1011,
                'status_code' => '301',
                'from' => '/si20-unk/howtoorder/',
                'to' => '/si20-unk/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            10 => 
            array (
                'id' => 1012,
                'status_code' => '301',
                'from' => '/si20-unr/howtoorder/',
                'to' => '/si20-unr/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            11 => 
            array (
                'id' => 1013,
                'status_code' => '301',
                'from' => '/si20-uns/howtoorder/',
                'to' => '/si20-uns/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            12 => 
            array (
                'id' => 1014,
                'status_code' => '301',
                'from' => '/si20-usch1-k/howtoorder/',
                'to' => '/si20-usch1-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            13 => 
            array (
                'id' => 1015,
                'status_code' => '301',
                'from' => '/si20-usch1-r/howtoorder/',
                'to' => '/si20-usch1-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            14 => 
            array (
                'id' => 1016,
                'status_code' => '301',
                'from' => '/si20-usch1-s/howtoorder/',
                'to' => '/si20-usch1-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            15 => 
            array (
                'id' => 1017,
                'status_code' => '301',
                'from' => '/si20-usch2-k/howtoorder/',
                'to' => '/si20-usch2-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            16 => 
            array (
                'id' => 1018,
                'status_code' => '301',
                'from' => '/si20-usch2-r/howtoorder/',
                'to' => '/si20-usch2-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            17 => 
            array (
                'id' => 1019,
                'status_code' => '301',
                'from' => '/si20-usch2-s/howtoorder/',
                'to' => '/si20-usch2-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            18 => 
            array (
                'id' => 1020,
                'status_code' => '301',
                'from' => '/si30-220-n-k/howtoorder/',
                'to' => '/si30-220-n-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            19 => 
            array (
                'id' => 1021,
                'status_code' => '301',
                'from' => '/si30-220-n-r/howtoorder/',
                'to' => '/si30-220-n-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            20 => 
            array (
                'id' => 1022,
                'status_code' => '301',
                'from' => '/si30-220-n-s/howtoorder/',
                'to' => '/si30-220-n-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            21 => 
            array (
                'id' => 1023,
                'status_code' => '301',
                'from' => '/si30-220-sch1-k/howtoorder/',
                'to' => '/si30-220-sch1-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            22 => 
            array (
                'id' => 1024,
                'status_code' => '301',
                'from' => '/si30-220-sch1-r/howtoorder/',
                'to' => '/si30-220-sch1-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            23 => 
            array (
                'id' => 1025,
                'status_code' => '301',
                'from' => '/si30-220-sch1-s/howtoorder/',
                'to' => '/si30-220-sch1-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            24 => 
            array (
                'id' => 1026,
                'status_code' => '301',
                'from' => '/si30-220-sch2-k/howtoorder/',
                'to' => '/si30-220-sch2-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            25 => 
            array (
                'id' => 1027,
                'status_code' => '301',
                'from' => '/si30-220-sch2-r/howtoorder/',
                'to' => '/si30-220-sch2-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            26 => 
            array (
                'id' => 1028,
                'status_code' => '301',
                'from' => '/si30-220-sch2-s/howtoorder/',
                'to' => '/si30-220-sch2-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            27 => 
            array (
                'id' => 1029,
                'status_code' => '301',
                'from' => '/si30-24-n-k/howtoorder/',
                'to' => '/si30-24-n-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            28 => 
            array (
                'id' => 1030,
                'status_code' => '301',
                'from' => '/si30-24-n-r/howtoorder/',
                'to' => '/si30-24-n-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            29 => 
            array (
                'id' => 1031,
                'status_code' => '301',
                'from' => '/si30-24-n-s/howtoorder/',
                'to' => '/si30-24-n-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            30 => 
            array (
                'id' => 1032,
                'status_code' => '301',
                'from' => '/si30-24-sch1-k/howtoorder/',
                'to' => '/si30-24-sch1-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            31 => 
            array (
                'id' => 1033,
                'status_code' => '301',
                'from' => '/si30-24-sch1-r/howtoorder/',
                'to' => '/si30-24-sch1-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            32 => 
            array (
                'id' => 1034,
                'status_code' => '301',
                'from' => '/si30-24-sch1-s/howtoorder/',
                'to' => '/si30-24-sch1-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            33 => 
            array (
                'id' => 1035,
                'status_code' => '301',
                'from' => '/si30-24-sch2-k/howtoorder/',
                'to' => '/si30-24-sch2-k/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            34 => 
            array (
                'id' => 1036,
                'status_code' => '301',
                'from' => '/si30-24-sch2-r/howtoorder/',
                'to' => '/si30-24-sch2-r/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            35 => 
            array (
                'id' => 1037,
                'status_code' => '301',
                'from' => '/si30-24-sch2-s/howtoorder/',
                'to' => '/si30-24-sch2-s/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            36 => 
            array (
                'id' => 1038,
                'status_code' => '301',
                'from' => '/bkk1_24/functionalschema/',
                'to' => '/bkk1_24/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            37 => 
            array (
                'id' => 1039,
                'status_code' => '301',
                'from' => '/bkk1_24/howtoorder/',
                'to' => '/bkk1_24/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            38 => 
            array (
                'id' => 1040,
                'status_code' => '301',
                'from' => '/bkk1_220/functionalschema/',
                'to' => '/bkk1_220/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            39 => 
            array (
                'id' => 1041,
                'status_code' => '301',
                'from' => '/bkk1_220/howtoorder/',
                'to' => '/bkk1_220/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            40 => 
            array (
                'id' => 1042,
                'status_code' => '301',
                'from' => '/suna_121_220_02/functionalschema/',
                'to' => '/suna_121_220_02/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            41 => 
            array (
                'id' => 1043,
                'status_code' => '301',
                'from' => '/suna_121_220_02/howtoorder/',
                'to' => '/suna_121_220_02/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            42 => 
            array (
                'id' => 1044,
                'status_code' => '301',
                'from' => '/suna_121_220_03/functionalschema/',
                'to' => '/suna_121_220_03/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            43 => 
            array (
                'id' => 1045,
                'status_code' => '301',
                'from' => '/suna_121_220_03/howtoorder/',
                'to' => '/suna_121_220_03/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            44 => 
            array (
                'id' => 1046,
                'status_code' => '301',
                'from' => '/suna_121_220_04/functionalschema/',
                'to' => '/suna_121_220_04/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            45 => 
            array (
                'id' => 1047,
                'status_code' => '301',
                'from' => '/suna_121_220_04/howtoorder/',
                'to' => '/suna_121_220_04/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            46 => 
            array (
                'id' => 1048,
                'status_code' => '301',
                'from' => '/suna_121_220_05/functionalschema/',
                'to' => '/suna_121_220_05/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            47 => 
            array (
                'id' => 1049,
                'status_code' => '301',
                'from' => '/suna_121_220_05/howtoorder/',
                'to' => '/suna_121_220_05/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            48 => 
            array (
                'id' => 1050,
                'status_code' => '301',
                'from' => '/suna_121_220_06/functionalschema/',
                'to' => '/suna_121_220_06/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            49 => 
            array (
                'id' => 1051,
                'status_code' => '301',
                'from' => '/suna_121_220_06/howtoorder/',
                'to' => '/suna_121_220_06/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            50 => 
            array (
                'id' => 1052,
                'status_code' => '301',
                'from' => '/suna_121_220_07/functionalschema/',
                'to' => '/suna_121_220_07/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            51 => 
            array (
                'id' => 1053,
                'status_code' => '301',
                'from' => '/suna_121_220_07/howtoorder/',
                'to' => '/suna_121_220_07/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            52 => 
            array (
                'id' => 1054,
                'status_code' => '301',
                'from' => '/suna_121_220_08/functionalschema/',
                'to' => '/suna_121_220_08/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            53 => 
            array (
                'id' => 1055,
                'status_code' => '301',
                'from' => '/suna_121_220_08/howtoorder/',
                'to' => '/suna_121_220_08/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            54 => 
            array (
                'id' => 1056,
                'status_code' => '301',
                'from' => '/suna_121_24_01/functionalschema/',
                'to' => '/suna_121_24_01/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            55 => 
            array (
                'id' => 1057,
                'status_code' => '301',
                'from' => '/suna_121_24_01/howtoorder/',
                'to' => '/suna_121_24_01/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            56 => 
            array (
                'id' => 1058,
                'status_code' => '301',
                'from' => '/suna_121_24_02/functionalschema/',
                'to' => '/suna_121_24_02/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            57 => 
            array (
                'id' => 1059,
                'status_code' => '301',
                'from' => '/suna_121_24_02/howtoorder/',
                'to' => '/suna_121_24_02/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            58 => 
            array (
                'id' => 1060,
                'status_code' => '301',
                'from' => '/suna_121_24_03/functionalschema/',
                'to' => '/suna_121_24_03/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            59 => 
            array (
                'id' => 1061,
                'status_code' => '301',
                'from' => '/suna_121_24_03/howtoorder/',
                'to' => '/suna_121_24_03/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            60 => 
            array (
                'id' => 1062,
                'status_code' => '301',
                'from' => '/suna_121_24_04/functionalschema/',
                'to' => '/suna_121_24_04/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            61 => 
            array (
                'id' => 1063,
                'status_code' => '301',
                'from' => '/suna_121_24_04/howtoorder/',
                'to' => '/suna_121_24_04/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            62 => 
            array (
                'id' => 1064,
                'status_code' => '301',
                'from' => '/suna_121_24_05/functionalschema/',
                'to' => '/suna_121_24_05/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            63 => 
            array (
                'id' => 1065,
                'status_code' => '301',
                'from' => '/suna_121_24_05/howtoorder/',
                'to' => '/suna_121_24_05/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            64 => 
            array (
                'id' => 1066,
                'status_code' => '301',
                'from' => '/suna_121_24_06/functionalschema/',
                'to' => '/suna_121_24_06/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            65 => 
            array (
                'id' => 1067,
                'status_code' => '301',
                'from' => '/suna_121_24_06/howtoorder/',
                'to' => '/suna_121_24_06/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            66 => 
            array (
                'id' => 1068,
                'status_code' => '301',
                'from' => '/suna_121_24_07/functionalschema/',
                'to' => '/suna_121_24_07/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            67 => 
            array (
                'id' => 1069,
                'status_code' => '301',
                'from' => '/suna_121_24_07/howtoorder/',
                'to' => '/suna_121_24_07/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            68 => 
            array (
                'id' => 1070,
                'status_code' => '301',
                'from' => '/suna_121_24_08/functionalschema/',
                'to' => '/suna_121_24_08/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            69 => 
            array (
                'id' => 1071,
                'status_code' => '301',
                'from' => '/suna_121_24_08/howtoorder/',
                'to' => '/suna_121_24_08/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            70 => 
            array (
                'id' => 1072,
                'status_code' => '301',
                'from' => '/suna_121_220_01/functionalschema/',
                'to' => '/suna_121_220_01/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            71 => 
            array (
                'id' => 1073,
                'status_code' => '301',
                'from' => '/suna_121_220_01/howtoorder/',
                'to' => '/suna_121_220_01/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            72 => 
            array (
                'id' => 1074,
                'status_code' => '301',
                'from' => '/sau_u_d/howtoorder/',
                'to' => '/sau_u_d/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            73 => 
            array (
                'id' => 1075,
                'status_code' => '301',
                'from' => '/sau_u_sch11/howtoorder/',
                'to' => '/sau_u_sch11/',
                'created_at' => '2018-09-28 04:17:33',
                'updated_at' => '2018-09-28 04:17:33',
            ),
            74 => 
            array (
                'id' => 1076,
                'status_code' => '301',
                'from' => '/sau_u_n/howtoorder/',
                'to' => '/sau_u_n/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            75 => 
            array (
                'id' => 1077,
                'status_code' => '301',
                'from' => '/sau_m7e_sch1/functionalschema/',
                'to' => '/sau_m7e_sch1/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            76 => 
            array (
                'id' => 1078,
                'status_code' => '301',
                'from' => '/sau_m7e_sch1/howtoorder/',
                'to' => '/sau_m7e_sch1/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            77 => 
            array (
                'id' => 1079,
                'status_code' => '301',
                'from' => '/sau_m2/functionalschema/',
                'to' => '/sau_m2/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            78 => 
            array (
                'id' => 1080,
                'status_code' => '301',
                'from' => '/sau_m7e_n/functionalschema/',
                'to' => '/sau_m7e_n/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            79 => 
            array (
                'id' => 1081,
                'status_code' => '301',
                'from' => '/sau_m7e_n/howtoorder/',
                'to' => '/sau_m7e_n/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            80 => 
            array (
                'id' => 1082,
                'status_code' => '301',
                'from' => '/sau_m6/functionalschema/',
                'to' => '/sau_m6/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            81 => 
            array (
                'id' => 1083,
                'status_code' => '301',
                'from' => '/Satec-PM175-TFT/questionnaire/',
                'to' => '/Satec-PM175-TFT/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            82 => 
            array (
                'id' => 1084,
                'status_code' => '301',
                'from' => '/mi120_5/questionnaire/',
                'to' => '/mi120_5/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            83 => 
            array (
                'id' => 1085,
                'status_code' => '301',
                'from' => '/Satec-RPM175/questionnaire/',
                'to' => '/Satec-RPM175/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            84 => 
            array (
                'id' => 1086,
                'status_code' => '301',
                'from' => '/mi120_3/questionnaire/',
                'to' => '/mi120_3/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            85 => 
            array (
                'id' => 1087,
                'status_code' => '301',
                'from' => '/Satec-BFM-2/questionnaire/',
                'to' => '/Satec-BFM-2/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            86 => 
            array (
                'id' => 1088,
                'status_code' => '301',
                'from' => '/sp315-r/howtoorder/',
                'to' => '/sp315-r/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            87 => 
            array (
                'id' => 1089,
                'status_code' => '301',
                'from' => '/sp310-r/howtoorder/',
                'to' => '/sp310-r/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            88 => 
            array (
                'id' => 1090,
                'status_code' => '301',
                'from' => '/sp310-b/howtoorder/',
                'to' => '/sp310-b/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            89 => 
            array (
                'id' => 1091,
                'status_code' => '301',
                'from' => '/sp307-r/howtoorder/',
                'to' => '/sp307-r/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            90 => 
            array (
                'id' => 1092,
                'status_code' => '301',
                'from' => '/sp307-b/howtoorder/',
                'to' => '/sp307-b/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            91 => 
            array (
                'id' => 1093,
                'status_code' => '301',
                'from' => '/smi1-220/howtoorder/',
                'to' => '/smi1-220/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            92 => 
            array (
                'id' => 1094,
                'status_code' => '301',
                'from' => '/smi1-24/howtoorder/',
                'to' => '/smi1-24/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            93 => 
            array (
                'id' => 1095,
                'status_code' => '301',
                'from' => '/spk207-24-03-00-cs-web/howtoorder/',
                'to' => '/spk207-24-03-00-cs-web/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            94 => 
            array (
                'id' => 1096,
                'status_code' => '301',
                'from' => '/spk207-220-03-00-cs-web/howtoorder/',
                'to' => '/spk207-220-03-00-cs-web/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            95 => 
            array (
                'id' => 1097,
                'status_code' => '301',
                'from' => '/plk323-24-03-01-tl/howtoorder/',
                'to' => '/plk323-24-03-01-tl/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            96 => 
            array (
                'id' => 1098,
                'status_code' => '301',
                'from' => '/schmk96/questionnaire/',
                'to' => '/schmk96/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            97 => 
            array (
                'id' => 1099,
                'status_code' => '301',
                'from' => '/e849el/questionnaire/',
                'to' => '/e849el/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            98 => 
            array (
                'id' => 1100,
                'status_code' => '301',
                'from' => '/schm120/questionnaire/',
                'to' => '/schm120/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            99 => 
            array (
                'id' => 1101,
                'status_code' => '301',
                'from' => '/schm96/questionnaire/',
                'to' => '/schm96/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            100 => 
            array (
                'id' => 1102,
                'status_code' => '301',
                'from' => '/up-2/questionnaire/',
                'to' => '/up-2/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            101 => 
            array (
                'id' => 1103,
                'status_code' => '301',
                'from' => '/up-23/questionnaire/',
                'to' => '/up-23/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            102 => 
            array (
                'id' => 1104,
                'status_code' => '301',
                'from' => '/up-25/questionnaire/',
                'to' => '/up-25/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            103 => 
            array (
                'id' => 1105,
                'status_code' => '301',
                'from' => '/up-31/questionnaire/',
                'to' => '/up-31/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            104 => 
            array (
                'id' => 1106,
                'status_code' => '301',
                'from' => '/separatingfilter_uznteh/order-form/',
                'to' => '/separatingfilter_uznteh/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            105 => 
            array (
                'id' => 1107,
                'status_code' => '301',
                'from' => '/mi120_2/questionnaire/',
                'to' => '/mi120_2/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            106 => 
            array (
                'id' => 1108,
                'status_code' => '301',
                'from' => '/schmk129sp/questionnaire/',
                'to' => '/schmk129sp/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            107 => 
            array (
                'id' => 1109,
                'status_code' => '301',
                'from' => '/schv021/questionnaire/',
                'to' => '/schv021/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            108 => 
            array (
                'id' => 1110,
                'status_code' => '301',
                'from' => '/schv961/questionnaire/',
                'to' => '/schv961/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            109 => 
            array (
                'id' => 1111,
                'status_code' => '301',
                'from' => '/schv1201/questionnaire/',
                'to' => '/schv1201/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            110 => 
            array (
                'id' => 1112,
                'status_code' => '301',
                'from' => '/schv721/questionnaire/',
                'to' => '/schv721/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            111 => 
            array (
                'id' => 1113,
                'status_code' => '301',
                'from' => '/schp02/questionnaire/',
                'to' => '/schp02/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            112 => 
            array (
                'id' => 1114,
                'status_code' => '301',
                'from' => '/schp72/questionnaire/',
                'to' => '/schp72/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            113 => 
            array (
                'id' => 1115,
                'status_code' => '301',
                'from' => '/schp96/questionnaire/',
                'to' => '/schp96/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            114 => 
            array (
                'id' => 1116,
                'status_code' => '301',
                'from' => '/schp120/questionnaire/',
                'to' => '/schp120/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            115 => 
            array (
                'id' => 1117,
                'status_code' => '301',
                'from' => '/sch02/questionnaire/',
                'to' => '/sch02/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            116 => 
            array (
                'id' => 1118,
                'status_code' => '301',
                'from' => '/sch72/questionnaire/',
                'to' => '/sch72/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            117 => 
            array (
                'id' => 1119,
                'status_code' => '301',
                'from' => '/sch96/questionnaire/',
                'to' => '/sch96/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            118 => 
            array (
                'id' => 1120,
                'status_code' => '301',
                'from' => '/sch120/questionnaire/',
                'to' => '/sch120/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            119 => 
            array (
                'id' => 1121,
                'status_code' => '301',
                'from' => '/schk96/questionnaire/',
                'to' => '/schk96/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            120 => 
            array (
                'id' => 1122,
                'status_code' => '301',
                'from' => '/schk120/questionnaire/',
                'to' => '/schk120/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            121 => 
            array (
                'id' => 1123,
                'status_code' => '301',
                'from' => '/e856el/questionnaire/',
                'to' => '/e856el/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            122 => 
            array (
                'id' => 1124,
                'status_code' => '301',
                'from' => '/e1856el/questionnaire/',
                'to' => '/e1856el/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            123 => 
            array (
                'id' => 1125,
                'status_code' => '301',
                'from' => '/upp1-11k-v/howtoorder/',
                'to' => '/upp1-11k-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            124 => 
            array (
                'id' => 1126,
                'status_code' => '301',
                'from' => '/upp1-1k5-v/howtoorder/',
                'to' => '/upp1-1k5-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            125 => 
            array (
                'id' => 1127,
                'status_code' => '301',
                'from' => '/upp1-7k5-v/howtoorder/',
                'to' => '/upp1-7k5-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            126 => 
            array (
                'id' => 1128,
                'status_code' => '301',
                'from' => '/upp2-7k5-v/howtoorder/',
                'to' => '/upp2-7k5-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            127 => 
            array (
                'id' => 1129,
                'status_code' => '301',
                'from' => '/upp2-15k-v/howtoorder/',
                'to' => '/upp2-15k-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            128 => 
            array (
                'id' => 1130,
                'status_code' => '301',
                'from' => '/upp2-18k-v/howtoorder/',
                'to' => '/upp2-18k-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            129 => 
            array (
                'id' => 1131,
                'status_code' => '301',
                'from' => '/upp2-22k-v/howtoorder/',
                'to' => '/upp2-22k-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            130 => 
            array (
                'id' => 1132,
                'status_code' => '301',
                'from' => '/upp2-30k-v/howtoorder/',
                'to' => '/upp2-30k-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            131 => 
            array (
                'id' => 1133,
                'status_code' => '301',
                'from' => '/upp2-37k-v/howtoorder/',
                'to' => '/upp2-37k-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            132 => 
            array (
                'id' => 1134,
                'status_code' => '301',
                'from' => '/upp2-45k-v/howtoorder/',
                'to' => '/upp2-45k-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            133 => 
            array (
                'id' => 1135,
                'status_code' => '301',
                'from' => '/upp2-55k-v/howtoorder/',
                'to' => '/upp2-55k-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            134 => 
            array (
                'id' => 1136,
                'status_code' => '301',
                'from' => '/upp2-75k-v/howtoorder/',
                'to' => '/upp2-75k-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            135 => 
            array (
                'id' => 1137,
                'status_code' => '301',
                'from' => '/upp2-90k-v/howtoorder/',
                'to' => '/upp2-90k-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            136 => 
            array (
                'id' => 1138,
                'status_code' => '301',
                'from' => '/upp2-110k-v/howtoorder/',
                'to' => '/upp2-110k-v/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            137 => 
            array (
                'id' => 1139,
                'status_code' => '301',
                'from' => '/trm136/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            138 => 
            array (
                'id' => 1140,
                'status_code' => '301',
                'from' => '/trm136/modifications/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            139 => 
            array (
                'id' => 1141,
                'status_code' => '301',
                'from' => '/trm136/howtoorder/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            140 => 
            array (
                'id' => 1142,
                'status_code' => '301',
                'from' => '/trm138/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            141 => 
            array (
                'id' => 1143,
                'status_code' => '301',
                'from' => '/trm138/modifications/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            142 => 
            array (
                'id' => 1144,
                'status_code' => '301',
                'from' => '/trm138/howtoorder/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            143 => 
            array (
                'id' => 1145,
                'status_code' => '301',
                'from' => '/trm151/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            144 => 
            array (
                'id' => 1146,
                'status_code' => '301',
                'from' => '/trm151/modifications/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            145 => 
            array (
                'id' => 1148,
                'status_code' => '301',
                'from' => '/trm232_owen/howtoorder/',
                'to' => '/trm232_owen/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-12-03 10:45:00',
            ),
            146 => 
            array (
                'id' => 1149,
                'status_code' => '301',
                'from' => '/trm138v/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            147 => 
            array (
                'id' => 1150,
                'status_code' => '301',
                'from' => '/trm138v/modifications/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            148 => 
            array (
                'id' => 1151,
                'status_code' => '301',
                'from' => '/trm138v/howtoorder/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            149 => 
            array (
                'id' => 1152,
                'status_code' => '301',
                'from' => '/plk323-220-03-01-tl/howtoorder/',
                'to' => '/plk323-220-03-01-tl/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            150 => 
            array (
                'id' => 1153,
                'status_code' => '301',
                'from' => '/trm148/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            151 => 
            array (
                'id' => 1154,
                'status_code' => '301',
                'from' => '/trm148/howtoorder/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            152 => 
            array (
                'id' => 1155,
                'status_code' => '301',
                'from' => '/trm148/modifications/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            153 => 
            array (
                'id' => 1156,
                'status_code' => '301',
                'from' => '/mpr51_owen/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            154 => 
            array (
                'id' => 1157,
                'status_code' => '301',
                'from' => '/trm251_owen/',
                'to' => '/category/automation/kip/izmeriteli-regulyatory/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            155 => 
            array (
                'id' => 1158,
                'status_code' => '301',
                'from' => '/sh932-1m1-op-ac2-220v-k/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            156 => 
            array (
                'id' => 1159,
                'status_code' => '301',
                'from' => '/sh932-1m1-op-paz-ac2-220v-k/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            157 => 
            array (
                'id' => 1160,
                'status_code' => '301',
                'from' => '/sh932-1m1-op-ac2-220v-p/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            158 => 
            array (
                'id' => 1161,
                'status_code' => '301',
                'from' => '/sh932-1m1-op-paz-ac2-220v-p/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            159 => 
            array (
                'id' => 1162,
                'status_code' => '301',
                'from' => '/sh932-1m1-op-ac2-24v-k/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            160 => 
            array (
                'id' => 1163,
                'status_code' => '301',
                'from' => '/sh932-1m1-op-paz-ac2-24v-k/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            161 => 
            array (
                'id' => 1164,
                'status_code' => '301',
                'from' => '/sh932-1m1-op-ac2-24v-p/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            162 => 
            array (
                'id' => 1165,
                'status_code' => '301',
                'from' => '/sh932-1m1-op-paz-ac2-24v-p/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            163 => 
            array (
                'id' => 1166,
                'status_code' => '301',
                'from' => '/sh932-1m2-op-ac2-220v-k/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            164 => 
            array (
                'id' => 1167,
                'status_code' => '301',
                'from' => '/sh932-1m2-op-paz-ac2-220v-k/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            165 => 
            array (
                'id' => 1168,
                'status_code' => '301',
                'from' => '/sh932-1m2-op-ac2-220v-p/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            166 => 
            array (
                'id' => 1169,
                'status_code' => '301',
                'from' => '/sh932-1m2-op-paz-ac2-220v-p/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            167 => 
            array (
                'id' => 1170,
                'status_code' => '301',
                'from' => '/sh932-1m2-op-ac2-24v-k/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            168 => 
            array (
                'id' => 1171,
                'status_code' => '301',
                'from' => '/sh932-1m2-op-paz-ac2-24v-k/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            169 => 
            array (
                'id' => 1172,
                'status_code' => '301',
                'from' => '/sh932-1m2-op-ac2-24v-p/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            170 => 
            array (
                'id' => 1173,
                'status_code' => '301',
                'from' => '/sh932-1m2-op-paz-ac2-24v-p/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            171 => 
            array (
                'id' => 1174,
                'status_code' => '301',
                'from' => '/sh932-1-01/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            172 => 
            array (
                'id' => 1175,
                'status_code' => '301',
                'from' => '/sh932-1-02/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            173 => 
            array (
                'id' => 1176,
                'status_code' => '301',
                'from' => '/sh932-1ex-01/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            174 => 
            array (
                'id' => 1177,
                'status_code' => '301',
                'from' => '/sh932-1ex/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            175 => 
            array (
                'id' => 1178,
                'status_code' => '301',
                'from' => '/sh932-2ex/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            176 => 
            array (
                'id' => 1179,
                'status_code' => '301',
                'from' => '/brand/sensorika/',
                'to' => '/category/automation/kip/normiruyuschie_preobrazovateli/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            177 => 
            array (
                'id' => 1180,
                'status_code' => '301',
                'from' => '/upp1/',
                'to' => '/category/frequency_converter/soft_starters/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            178 => 
            array (
                'id' => 1181,
                'status_code' => '301',
                'from' => '/upp1/howtoorder/',
                'to' => '/category/frequency_converter/soft_starters/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            179 => 
            array (
                'id' => 1182,
                'status_code' => '301',
                'from' => '/upp2/',
                'to' => '/category/frequency_converter/soft_starters/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            180 => 
            array (
                'id' => 1183,
                'status_code' => '301',
                'from' => '/upp2/howtoorder/',
                'to' => '/category/frequency_converter/soft_starters/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            181 => 
            array (
                'id' => 1184,
                'status_code' => '301',
                'from' => '/pchv1/',
                'to' => '/category/frequency_converter/preobrazovatel_chastoty/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            182 => 
            array (
                'id' => 1185,
                'status_code' => '301',
                'from' => '/pchv2/',
                'to' => '/category/frequency_converter/preobrazovatel_chastoty/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            183 => 
            array (
                'id' => 1186,
                'status_code' => '301',
                'from' => '/pchv3/',
                'to' => '/category/frequency_converter/preobrazovatel_chastoty/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            184 => 
            array (
                'id' => 1187,
                'status_code' => '301',
                'from' => '/about/contacts/',
                'to' => '/contacts/',
                'created_at' => '2018-09-28 04:17:34',
                'updated_at' => '2018-09-28 04:17:34',
            ),
            185 => 
            array (
                'id' => 1188,
                'status_code' => '301',
                'from' => '/category/proverochnoe_oborudovanie/',
                'to' => '/category/rza/proverochnoe_oborudovanie/',
                'created_at' => '2018-10-03 00:51:28',
                'updated_at' => '2018-10-03 00:51:28',
            ),
            186 => 
            array (
                'id' => 1189,
                'status_code' => '301',
                'from' => '/category/proverochnoe_oborudovanie/poverka/',
                'to' => '/category/rza/proverochnoe_oborudovanie/poverka/',
                'created_at' => '2018-10-03 00:51:57',
                'updated_at' => '2018-10-03 00:51:57',
            ),
            187 => 
            array (
                'id' => 1190,
                'status_code' => '301',
                'from' => '/category/proverochnoe_oborudovanie/avtomaticheskie_vyklyuchateli/',
                'to' => '/category/rza/proverochnoe_oborudovanie/avtomaticheskie_vyklyuchateli/',
                'created_at' => '2018-10-03 00:52:15',
                'updated_at' => '2018-10-03 00:52:15',
            ),
            188 => 
            array (
                'id' => 1191,
                'status_code' => '301',
                'from' => '/category/proverochnoe_oborudovanie/ispytatelnoe_oborudovanie/',
                'to' => '/category/rza/proverochnoe_oborudovanie/ispytatelnoe_oborudovanie/',
                'created_at' => '2018-10-03 00:52:36',
                'updated_at' => '2018-10-03 00:52:36',
            ),
            189 => 
            array (
                'id' => 1192,
                'status_code' => '301',
                'from' => '/category/proverochnoe_oborudovanie/poisk_zamykania_na_zemlyu/',
                'to' => '/category/rza/proverochnoe_oborudovanie/poisk_zamykania_na_zemlyu/',
                'created_at' => '2018-10-03 00:52:51',
                'updated_at' => '2018-10-03 00:52:51',
            ),
            190 => 
            array (
                'id' => 1193,
                'status_code' => '301',
                'from' => '/category/proverochnoe_oborudovanie/relay/',
                'to' => '/category/rza/proverochnoe_oborudovanie/relay/',
                'created_at' => '2018-10-03 00:53:05',
                'updated_at' => '2018-10-03 00:53:05',
            ),
            191 => 
            array (
                'id' => 1194,
                'status_code' => '301',
                'from' => '/pr110_owen/',
                'to' => '/category/automation/programmable_devices/relays/',
                'created_at' => '2018-10-03 23:12:06',
                'updated_at' => '2018-10-03 23:12:06',
            ),
            192 => 
            array (
                'id' => 1199,
                'status_code' => '301',
                'from' => '/category/frequency_converter/preobrazovatel_chastoty/pchv1/',
                'to' => '/category/frequency_converter/preobrazovatel_chastoty/',
                'created_at' => '2018-10-17 03:31:26',
                'updated_at' => '2019-07-15 14:01:00',
            ),
            193 => 
            array (
                'id' => 1200,
                'status_code' => '301',
                'from' => '/category/frequency_converter/preobrazovatel_chastoty/pchv2/',
                'to' => '/category/frequency_converter/preobrazovatel_chastoty/',
                'created_at' => '2018-10-17 03:31:39',
                'updated_at' => '2019-07-15 14:00:53',
            ),
            194 => 
            array (
                'id' => 1201,
                'status_code' => '301',
                'from' => '/category/frequency_converter/preobrazovatel_chastoty/pchv3/',
                'to' => '/category/frequency_converter/preobrazovatel_chastoty/',
                'created_at' => '2018-10-17 03:31:49',
                'updated_at' => '2019-07-15 14:00:42',
            ),
            195 => 
            array (
                'id' => 1202,
                'status_code' => '301',
                'from' => '/category/frequency_converter/soft_starters/upp1/',
                'to' => '/category/frequency_converter/soft_starters/',
                'created_at' => '2018-10-17 03:32:10',
                'updated_at' => '2019-07-15 14:00:26',
            ),
            196 => 
            array (
                'id' => 1203,
                'status_code' => '301',
                'from' => '/category/frequency_converter/soft_starters/upp2/',
                'to' => '/category/frequency_converter/soft_starters/',
                'created_at' => '2018-10-17 03:32:20',
                'updated_at' => '2019-07-15 14:00:19',
            ),
            197 => 
            array (
                'id' => 1204,
                'status_code' => '301',
                'from' => '/brand/satec/',
                'to' => '/brand/satec_plc_as/',
                'created_at' => '2018-10-28 23:31:10',
                'updated_at' => '2018-10-28 23:31:19',
            ),
            198 => 
            array (
                'id' => 1205,
                'status_code' => '301',
                'from' => '/Shkaf-zazhimov-vyklyuchatelya-ShZV-35-35-klemm-25-prokhodnykh-10-izmeritel-nykh/',
                'to' => '/shzv30/',
                'created_at' => '2018-12-03 08:57:33',
                'updated_at' => '2018-12-03 08:58:35',
            ),
            199 => 
            array (
                'id' => 1206,
                'status_code' => '301',
                'from' => '/Shkaf-zazhimov-vyklyuchatelya-ShZV-60-40-prokhodnykh-20-izmeritel-nykh-klemm-paketnyy-raz-edinitel-zashchita-ot-kondensata/',
                'to' => '/shzv60/',
                'created_at' => '2018-12-03 08:58:25',
                'updated_at' => '2018-12-03 08:58:25',
            ),
            200 => 
            array (
                'id' => 1207,
                'status_code' => '301',
                'from' => '/Shkaf-zazhimov-vyklyuchatelya-ShZV-90-45-prokhodnykh-45-izmeritel-nykh-klemm-paketnyy-raz-edinitel-zashchita-ot-kondensata/',
                'to' => '/shzv90/',
                'created_at' => '2018-12-03 08:59:01',
                'updated_at' => '2018-12-03 08:59:01',
            ),
            201 => 
            array (
                'id' => 1208,
                'status_code' => '301',
                'from' => '/Shkaf-zazhimov-vyklyuchatelya-ShZV-120-70-prokhodnykh-50-izmeritel-nykh-klemm-raz-ediniteli-zashchita-ot-kondensata/',
                'to' => '/shzv120/',
                'created_at' => '2018-12-03 08:59:26',
                'updated_at' => '2018-12-03 08:59:26',
            ),
            202 => 
            array (
                'id' => 1209,
                'status_code' => '301',
                'from' => '/Shkaf-zazhimov-vyklyuchatelya-ShZV-150-70-prokhodnykh-80-izmeritel-nykh-klemm-raz-ediniteli-zashchita-ot-kondensata/',
                'to' => '/shzv150/',
                'created_at' => '2018-12-03 08:59:37',
                'updated_at' => '2018-12-03 08:59:37',
            ),
            203 => 
            array (
                'id' => 1210,
                'status_code' => '301',
                'from' => '/Shkaf-zazhimov-vyklyuchatelya-ShZV-190/',
                'to' => '/shzv200/',
                'created_at' => '2018-12-03 08:59:57',
                'updated_at' => '2018-12-03 09:00:03',
            ),
            204 => 
            array (
                'id' => 1211,
                'status_code' => '301',
                'from' => '/Shkaf-klemmnyy-yashchik-zazhimov-YaZ-35/',
                'to' => '/yaz30/',
                'created_at' => '2018-12-03 09:00:29',
                'updated_at' => '2018-12-03 09:00:29',
            ),
            205 => 
            array (
                'id' => 1212,
                'status_code' => '301',
                'from' => '/Shkaf-klemmnyy-yashchik-zazhimov-YaZ-60/',
                'to' => '/yaz60/',
                'created_at' => '2018-12-03 09:00:41',
                'updated_at' => '2018-12-03 09:00:41',
            ),
            206 => 
            array (
                'id' => 1213,
                'status_code' => '301',
                'from' => '/Shkaf-klemmnyy-yashchik-zazhimov-YaZ-90/',
                'to' => '/yaz90/',
                'created_at' => '2018-12-03 09:00:51',
                'updated_at' => '2018-12-03 09:00:51',
            ),
            207 => 
            array (
                'id' => 1214,
                'status_code' => '301',
                'from' => '/Shkaf-klemmnyy-yashchik-zazhimov-YaZ-120/',
                'to' => '/yaz120/',
                'created_at' => '2018-12-03 09:01:00',
                'updated_at' => '2018-12-03 09:01:00',
            ),
            208 => 
            array (
                'id' => 1215,
                'status_code' => '301',
                'from' => '/Shkaf-klemmnyy-yashchik-zazhimov-YaZ-150/',
                'to' => '/yaz150/',
                'created_at' => '2018-12-03 09:01:12',
                'updated_at' => '2018-12-03 09:01:12',
            ),
            209 => 
            array (
                'id' => 1216,
                'status_code' => '301',
                'from' => '/Shkaf-klemmnyy-yashchik-zazhimov-YaZ-200/',
                'to' => '/yaz200/',
                'created_at' => '2018-12-03 09:01:23',
                'updated_at' => '2018-12-03 09:01:23',
            ),
            210 => 
            array (
                'id' => 1217,
                'status_code' => '301',
                'from' => '/Termoshkaf-TSh-505020-500kh500kh200/',
                'to' => '/termoshkaf-tsh-u-therm-505020/',
                'created_at' => '2018-12-07 05:22:14',
                'updated_at' => '2018-12-07 05:22:14',
            ),
            211 => 
            array (
                'id' => 1218,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-506020-500kh600kh200/',
                'to' => '/termoshkaf-tsh-u-therm-506020/',
                'created_at' => '2018-12-07 05:22:24',
                'updated_at' => '2018-12-07 05:22:24',
            ),
            212 => 
            array (
                'id' => 1219,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-6010030-600kh1000kh300-/',
                'to' => '/termoshkaf-tsh-u-therm-601030/',
                'created_at' => '2018-12-07 05:22:36',
                'updated_at' => '2018-12-07 05:22:36',
            ),
            213 => 
            array (
                'id' => 1220,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-6010040-600kh1000kh400/',
                'to' => '/termoshkaf-tsh-u-therm-601040/',
                'created_at' => '2018-12-07 05:22:44',
                'updated_at' => '2018-12-07 05:22:44',
            ),
            214 => 
            array (
                'id' => 1221,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-605020-600kh500kh200/',
                'to' => '/termoshkaf-tsh-u-therm-605020/',
                'created_at' => '2018-12-07 05:22:54',
                'updated_at' => '2018-12-07 05:22:54',
            ),
            215 => 
            array (
                'id' => 1222,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-606025-600kh600kh250/',
                'to' => '/termoshkaf-tsh-u-therm-606025/',
                'created_at' => '2018-12-07 05:23:02',
                'updated_at' => '2018-12-07 05:23:02',
            ),
            216 => 
            array (
                'id' => 1223,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-608025-600kh800kh250/',
                'to' => '/termoshkaf-tsh-u-therm-608025/',
                'created_at' => '2018-12-07 05:23:12',
                'updated_at' => '2018-12-07 05:23:12',
            ),
            217 => 
            array (
                'id' => 1224,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-608030-600kh800kh300-/',
                'to' => '/termoshkaf-tsh-u-therm-608030/',
                'created_at' => '2018-12-07 05:23:21',
                'updated_at' => '2018-12-07 05:23:21',
            ),
            218 => 
            array (
                'id' => 1225,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-608040-600kh800kh400/',
                'to' => '/termoshkaf-tsh-u-therm-608040/',
                'created_at' => '2018-12-07 05:23:30',
                'updated_at' => '2018-12-07 05:23:30',
            ),
            219 => 
            array (
                'id' => 1226,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-8010030-800kh1000kh300/',
                'to' => '/termoshkaf-tsh-u-therm-801030/',
                'created_at' => '2018-12-07 05:23:40',
                'updated_at' => '2018-12-07 05:23:40',
            ),
            220 => 
            array (
                'id' => 1227,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-8010040-800kh1000kh400-/',
                'to' => '/termoshkaf-tsh-u-therm-801040/',
                'created_at' => '2018-12-07 05:23:50',
                'updated_at' => '2018-12-07 05:23:50',
            ),
            221 => 
            array (
                'id' => 1228,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-808030-800kh800kh300/',
                'to' => '/termoshkaf-tsh-u-therm-808030/',
                'created_at' => '2018-12-07 05:24:00',
                'updated_at' => '2018-12-07 05:24:00',
            ),
            222 => 
            array (
                'id' => 1229,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-808040-800kh800kh400-/',
                'to' => '/termoshkaf-tsh-u-therm-808040/',
                'created_at' => '2018-12-07 05:24:11',
                'updated_at' => '2018-12-07 05:24:11',
            ),
            223 => 
            array (
                'id' => 1230,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-505020-V-500kh500kh200-/',
                'to' => '/termoshkaf-tsh-u-therm-505020-v/',
                'created_at' => '2018-12-07 05:24:19',
                'updated_at' => '2018-12-07 05:24:19',
            ),
            224 => 
            array (
                'id' => 1231,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-506020-V-500kh600kh200/',
                'to' => '/termoshkaf-tsh-u-therm-506020-v/',
                'created_at' => '2018-12-07 05:24:30',
                'updated_at' => '2018-12-07 05:24:30',
            ),
            225 => 
            array (
                'id' => 1232,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-601030-V-600kh100kh300/',
                'to' => '/termoshkaf-tsh-u-therm-601030-v/',
                'created_at' => '2018-12-07 05:24:40',
                'updated_at' => '2018-12-07 05:24:40',
            ),
            226 => 
            array (
                'id' => 1233,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-601040-V-600kh1000kh400/',
                'to' => '/termoshkaf-tsh-u-therm-601040-v/',
                'created_at' => '2018-12-07 05:24:49',
                'updated_at' => '2018-12-07 05:24:49',
            ),
            227 => 
            array (
                'id' => 1234,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-605020-V-600kh500kh200/',
                'to' => '/termoshkaf-tsh-u-therm-605020-v/',
                'created_at' => '2018-12-07 05:24:58',
                'updated_at' => '2018-12-07 05:24:58',
            ),
            228 => 
            array (
                'id' => 1235,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-606025-V-600kh600kh250/',
                'to' => '/termoshkaf-tsh-u-therm-606025-v/',
                'created_at' => '2018-12-07 05:25:07',
                'updated_at' => '2018-12-07 05:25:07',
            ),
            229 => 
            array (
                'id' => 1236,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-608025-V-600kh800kh250/',
                'to' => '/termoshkaf-tsh-u-therm-608025-v/',
                'created_at' => '2018-12-07 05:25:15',
                'updated_at' => '2018-12-07 05:25:15',
            ),
            230 => 
            array (
                'id' => 1237,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-608030-V-600kh800kh300/',
                'to' => '/termoshkaf-tsh-u-therm-608030-v/',
                'created_at' => '2018-12-07 05:25:23',
                'updated_at' => '2018-12-07 05:25:23',
            ),
            231 => 
            array (
                'id' => 1238,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-608040-V-600kh800kh400/',
                'to' => '/termoshkaf-tsh-u-therm-608040-v/',
                'created_at' => '2018-12-07 05:25:33',
                'updated_at' => '2018-12-07 05:25:33',
            ),
            232 => 
            array (
                'id' => 1239,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-801030-V-800kh1000kh300/',
                'to' => '/termoshkaf-tsh-u-therm-801030-v/',
                'created_at' => '2018-12-07 05:25:43',
                'updated_at' => '2018-12-07 05:25:43',
            ),
            233 => 
            array (
                'id' => 1240,
                'status_code' => '301',
                'from' => '/Termoshkaf-TSh-801040-V-800kh1000kh400/',
                'to' => '/termoshkaf-tsh-u-therm-801040-v/',
                'created_at' => '2018-12-07 05:25:53',
                'updated_at' => '2018-12-07 05:25:53',
            ),
            234 => 
            array (
                'id' => 1241,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-808030-V-800kh800kh300/',
                'to' => '/termoshkaf-tsh-u-therm-808030-v/',
                'created_at' => '2018-12-07 05:26:06',
                'updated_at' => '2018-12-07 05:26:06',
            ),
            235 => 
            array (
                'id' => 1242,
                'status_code' => '301',
                'from' => '/Termoshkaf-Tsh-808040-V-800kh800kh400/',
                'to' => '/termoshkaf-tsh-u-therm-808040-v/',
                'created_at' => '2018-12-07 05:26:15',
                'updated_at' => '2018-12-07 05:26:15',
            ),
            236 => 
            array (
                'id' => 1243,
                'status_code' => '302',
                'from' => '/category/oborudovanie-svyazi/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:01:40',
                'updated_at' => '2018-12-10 09:01:40',
            ),
            237 => 
            array (
                'id' => 1244,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/phones_dect/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:09:49',
                'updated_at' => '2018-12-10 09:10:13',
            ),
            238 => 
            array (
                'id' => 1245,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/phones_dect/ip-phones/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:09:59',
                'updated_at' => '2018-12-10 09:10:08',
            ),
            239 => 
            array (
                'id' => 1246,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/phones_dect/digital_phones/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:10:34',
                'updated_at' => '2018-12-10 09:10:34',
            ),
            240 => 
            array (
                'id' => 1247,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/phones_dect/conference_phones/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:11:02',
                'updated_at' => '2018-12-10 09:11:02',
            ),
            241 => 
            array (
                'id' => 1248,
                'status_code' => '301',
                'from' => '/category/oborudovanie-svyazi/phones_dect/ip_dect/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:11:13',
                'updated_at' => '2018-12-10 09:11:13',
            ),
            242 => 
            array (
                'id' => 1249,
                'status_code' => '301',
                'from' => '/Avaya_700508259/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:12:36',
                'updated_at' => '2018-12-10 09:12:36',
            ),
            243 => 
            array (
                'id' => 1250,
                'status_code' => '301',
                'from' => '/Avaya_700508258/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:12:50',
                'updated_at' => '2018-12-10 09:12:50',
            ),
            244 => 
            array (
                'id' => 1251,
                'status_code' => '301',
                'from' => '/Avaya_700508260/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:13:00',
                'updated_at' => '2018-12-10 09:13:00',
            ),
            245 => 
            array (
                'id' => 1252,
                'status_code' => '301',
                'from' => '/Avaya_700510907/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:13:08',
                'updated_at' => '2018-12-10 09:13:08',
            ),
            246 => 
            array (
                'id' => 1253,
                'status_code' => '301',
                'from' => '/Avaya_700504843/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:13:18',
                'updated_at' => '2018-12-10 09:13:18',
            ),
            247 => 
            array (
                'id' => 1254,
                'status_code' => '301',
                'from' => '/Avaya_700510908/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:13:26',
                'updated_at' => '2018-12-10 09:13:26',
            ),
            248 => 
            array (
                'id' => 1255,
                'status_code' => '301',
                'from' => '/Avaya_700451255/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:13:36',
                'updated_at' => '2018-12-10 09:13:36',
            ),
            249 => 
            array (
                'id' => 1256,
                'status_code' => '301',
                'from' => '/Avaya_700415607/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:13:47',
                'updated_at' => '2018-12-10 09:13:47',
            ),
            250 => 
            array (
                'id' => 1257,
                'status_code' => '301',
                'from' => '/Avaya_700415573/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:13:58',
                'updated_at' => '2018-12-10 09:13:58',
            ),
            251 => 
            array (
                'id' => 1258,
                'status_code' => '301',
                'from' => '/Avaya_700505424/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:14:09',
                'updated_at' => '2018-12-10 09:14:09',
            ),
            252 => 
            array (
                'id' => 1259,
                'status_code' => '301',
                'from' => '/Avaya_700510905/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:14:20',
                'updated_at' => '2018-12-10 09:14:20',
            ),
            253 => 
            array (
                'id' => 1260,
                'status_code' => '301',
                'from' => '/Avaya_700504845/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:14:30',
                'updated_at' => '2018-12-10 09:14:30',
            ),
            254 => 
            array (
                'id' => 1261,
                'status_code' => '301',
                'from' => '/Avaya_700510904/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:14:44',
                'updated_at' => '2018-12-10 09:14:44',
            ),
            255 => 
            array (
                'id' => 1262,
                'status_code' => '301',
                'from' => '/Avaya_700505992/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:14:53',
                'updated_at' => '2018-12-10 09:14:53',
            ),
            256 => 
            array (
                'id' => 1263,
                'status_code' => '301',
                'from' => '/Avaya_700383326/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:15:03',
                'updated_at' => '2018-12-10 09:15:03',
            ),
            257 => 
            array (
                'id' => 1264,
                'status_code' => '301',
                'from' => '/Avaya_700480643/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:15:13',
                'updated_at' => '2018-12-10 09:15:13',
            ),
            258 => 
            array (
                'id' => 1265,
                'status_code' => '301',
                'from' => '/Avaya_700500725/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:15:22',
                'updated_at' => '2018-12-10 09:15:22',
            ),
            259 => 
            array (
                'id' => 1266,
                'status_code' => '301',
                'from' => '/Avaya_700507151/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:15:32',
                'updated_at' => '2018-12-10 09:15:32',
            ),
            260 => 
            array (
                'id' => 1267,
                'status_code' => '301',
                'from' => '/Avaya_700508002/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:15:42',
                'updated_at' => '2018-12-10 09:15:42',
            ),
            261 => 
            array (
                'id' => 1268,
                'status_code' => '301',
                'from' => '/Avaya_700508193/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:15:52',
                'updated_at' => '2018-12-10 09:15:52',
            ),
            262 => 
            array (
                'id' => 1269,
                'status_code' => '301',
                'from' => '/Avaya_700504841/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:16:03',
                'updated_at' => '2018-12-10 09:16:03',
            ),
            263 => 
            array (
                'id' => 1270,
                'status_code' => '301',
                'from' => '/Avaya_700510909/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:16:12',
                'updated_at' => '2018-12-10 09:16:12',
            ),
            264 => 
            array (
                'id' => 1271,
                'status_code' => '301',
                'from' => '/Avaya_700508194/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:16:24',
                'updated_at' => '2018-12-10 09:16:24',
            ),
            265 => 
            array (
                'id' => 1272,
                'status_code' => '301',
                'from' => '/Avaya_700510910/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:16:33',
                'updated_at' => '2018-12-10 09:16:33',
            ),
            266 => 
            array (
                'id' => 1273,
                'status_code' => '301',
                'from' => '/Avaya_700469968/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:16:44',
                'updated_at' => '2018-12-10 09:16:44',
            ),
            267 => 
            array (
                'id' => 1274,
                'status_code' => '301',
                'from' => '/Avaya_700356447/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:16:54',
                'updated_at' => '2018-12-10 09:16:54',
            ),
            268 => 
            array (
                'id' => 1275,
                'status_code' => '301',
                'from' => '/Avaya_700501533/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:17:04',
                'updated_at' => '2018-12-10 09:17:04',
            ),
            269 => 
            array (
                'id' => 1276,
                'status_code' => '301',
                'from' => '/Avaya_700501530/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:17:14',
                'updated_at' => '2018-12-10 09:17:14',
            ),
            270 => 
            array (
                'id' => 1277,
                'status_code' => '301',
                'from' => '/Avaya_700508892/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:17:23',
                'updated_at' => '2018-12-10 09:17:23',
            ),
            271 => 
            array (
                'id' => 1278,
                'status_code' => '301',
                'from' => '/Avaya_700504740/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:17:33',
                'updated_at' => '2018-12-10 09:17:33',
            ),
            272 => 
            array (
                'id' => 1279,
                'status_code' => '301',
                'from' => '/Avaya_700503700/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:17:45',
                'updated_at' => '2018-12-10 09:17:45',
            ),
            273 => 
            array (
                'id' => 1280,
                'status_code' => '301',
                'from' => '/Avaya_700501534/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:17:55',
                'updated_at' => '2018-12-10 09:17:55',
            ),
            274 => 
            array (
                'id' => 1281,
                'status_code' => '301',
                'from' => '/Avaya_700466105/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:18:05',
                'updated_at' => '2018-12-10 09:18:05',
            ),
            275 => 
            array (
                'id' => 1282,
                'status_code' => '301',
                'from' => '/Avaya_700466683/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:18:15',
                'updated_at' => '2018-12-10 09:18:15',
            ),
            276 => 
            array (
                'id' => 1283,
                'status_code' => '301',
                'from' => '/Avaya_700466139/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:18:24',
                'updated_at' => '2018-12-10 09:18:24',
            ),
            277 => 
            array (
                'id' => 1284,
                'status_code' => '301',
                'from' => '/Avaya_700466691/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:18:34',
                'updated_at' => '2018-12-10 09:18:34',
            ),
            278 => 
            array (
                'id' => 1285,
                'status_code' => '301',
                'from' => '/Avaya_700466253/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:18:44',
                'updated_at' => '2018-12-10 09:18:44',
            ),
            279 => 
            array (
                'id' => 1286,
                'status_code' => '301',
                'from' => '/Avaya_700466279/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:18:55',
                'updated_at' => '2018-12-10 09:18:55',
            ),
            280 => 
            array (
                'id' => 1287,
                'status_code' => '301',
                'from' => '/Avaya_700502016/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:19:03',
                'updated_at' => '2018-12-10 09:19:03',
            ),
            281 => 
            array (
                'id' => 1288,
                'status_code' => '301',
                'from' => '/Avaya_700502015/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:19:11',
                'updated_at' => '2018-12-10 09:19:11',
            ),
            282 => 
            array (
                'id' => 1289,
                'status_code' => '301',
                'from' => '/Avaya_700511086/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:19:22',
                'updated_at' => '2018-12-10 09:19:22',
            ),
            283 => 
            array (
                'id' => 1290,
                'status_code' => '301',
                'from' => '/Avaya_700511087/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:19:32',
                'updated_at' => '2018-12-10 09:19:32',
            ),
            284 => 
            array (
                'id' => 1291,
                'status_code' => '301',
                'from' => '/Avaya_700466550/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:19:44',
                'updated_at' => '2018-12-10 09:19:44',
            ),
            285 => 
            array (
                'id' => 1292,
                'status_code' => '301',
                'from' => '/Avaya_700466543/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:19:53',
                'updated_at' => '2018-12-10 09:19:53',
            ),
            286 => 
            array (
                'id' => 1293,
                'status_code' => '301',
                'from' => '/Avaya_700466535/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:20:03',
                'updated_at' => '2018-12-10 09:20:03',
            ),
            287 => 
            array (
                'id' => 1294,
                'status_code' => '301',
                'from' => '/Avaya_700466444/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:20:14',
                'updated_at' => '2018-12-10 09:20:14',
            ),
            288 => 
            array (
                'id' => 1295,
                'status_code' => '301',
                'from' => '/Avaya_700501200/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:20:23',
                'updated_at' => '2018-12-10 09:20:23',
            ),
            289 => 
            array (
                'id' => 1296,
                'status_code' => '301',
                'from' => '/avaya_700471568/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:20:35',
                'updated_at' => '2018-12-10 09:20:35',
            ),
            290 => 
            array (
                'id' => 1297,
                'status_code' => '301',
                'from' => '/brand/avaya/',
                'to' => '/shkafy-individualnoi-sborki/shkafy-svyazi/',
                'created_at' => '2018-12-10 09:21:01',
                'updated_at' => '2018-12-10 09:21:01',
            ),
            291 => 
            array (
                'id' => 1298,
                'status_code' => '301',
                'from' => '/Enip-2-41100-220-A1E0-01/',
                'to' => '/enip-2-41-100-220-a1e0-01/',
                'created_at' => '2019-01-15 05:32:36',
                'updated_at' => '2019-01-16 08:43:34',
            ),
            292 => 
            array (
                'id' => 1299,
                'status_code' => '301',
                'from' => '/Enip-2-41100-24-A1E0-01/',
                'to' => '/enip-2-41-100-24-a1e0-01/',
                'created_at' => '2019-01-15 05:32:45',
                'updated_at' => '2019-01-16 08:43:30',
            ),
            293 => 
            array (
                'id' => 1300,
                'status_code' => '301',
                'from' => '/Enip-2-41380-220-A1E0-01/',
                'to' => '/enip-2-41-380-220-a1e0-01/',
                'created_at' => '2019-01-15 05:32:53',
                'updated_at' => '2019-01-15 05:32:53',
            ),
            294 => 
            array (
                'id' => 1301,
                'status_code' => '301',
                'from' => '/Enip-2-41380-24-A1E0-01/',
                'to' => '/enip-2-41-380-24-a1e0-01/',
                'created_at' => '2019-01-15 05:33:01',
                'updated_at' => '2019-01-15 05:33:01',
            ),
            295 => 
            array (
                'id' => 1302,
                'status_code' => '301',
                'from' => '/Enip-2-45100-220-A1E0-01/',
                'to' => '/enip-2-45-100-220-a1e0-01/',
                'created_at' => '2019-01-15 05:33:10',
                'updated_at' => '2019-01-15 05:33:10',
            ),
            296 => 
            array (
                'id' => 1303,
                'status_code' => '301',
                'from' => '/Enip-2-45380-220-A1E0-01/',
                'to' => '/enip-2-45-380-220-a1e0-01/',
                'created_at' => '2019-01-15 05:33:19',
                'updated_at' => '2019-01-15 05:33:19',
            ),
            297 => 
            array (
                'id' => 1304,
                'status_code' => '301',
                'from' => '/Enip-2-45100-24-A1E0-01/',
                'to' => '/enip-2-45-100-24-a1e0-01/',
                'created_at' => '2019-01-15 05:33:27',
                'updated_at' => '2019-01-15 05:33:27',
            ),
            298 => 
            array (
                'id' => 1305,
                'status_code' => '301',
                'from' => '/Enip-2-45380-24-A1E0-01/',
                'to' => '/enip-2-45-380-24-a1e0-01/',
                'created_at' => '2019-01-15 05:33:35',
                'updated_at' => '2019-01-15 05:33:35',
            ),
            299 => 
            array (
                'id' => 1306,
                'status_code' => '301',
                'from' => '/Enip-2-41100-220-A2E0-11/',
                'to' => '/enip-2-41-100-220-a2e0-11/',
                'created_at' => '2019-01-15 05:33:44',
                'updated_at' => '2019-01-16 08:43:21',
            ),
            300 => 
            array (
                'id' => 1307,
                'status_code' => '301',
                'from' => '/Enip-2-41100-24-A2E0-11/',
                'to' => '/enip-2-41-100-24-a2e0-11/',
                'created_at' => '2019-01-15 05:33:51',
                'updated_at' => '2019-01-16 08:43:16',
            ),
            301 => 
            array (
                'id' => 1308,
                'status_code' => '301',
                'from' => '/Enip-2-41380-220-A2E0-11/',
                'to' => '/enip-2-41-380-220-a2e0-11/',
                'created_at' => '2019-01-15 05:33:59',
                'updated_at' => '2019-01-15 05:33:59',
            ),
            302 => 
            array (
                'id' => 1309,
                'status_code' => '301',
                'from' => '/Enip-2-41380-24-A2E0-11/',
                'to' => '/enip-2-41-380-24-a2e0-11/',
                'created_at' => '2019-01-15 05:34:08',
                'updated_at' => '2019-01-15 05:34:08',
            ),
            303 => 
            array (
                'id' => 1310,
                'status_code' => '301',
                'from' => '/Enip-2-45100-220-A2E0-11/',
                'to' => '/enip-2-45-100-220-a2e0-11/',
                'created_at' => '2019-01-15 05:35:40',
                'updated_at' => '2019-01-15 05:35:40',
            ),
            304 => 
            array (
                'id' => 1311,
                'status_code' => '301',
                'from' => '/Enip-2-45100-24-A2E0-11/',
                'to' => '/enip-2-45-100-24-a2e0-11/',
                'created_at' => '2019-01-15 05:35:48',
                'updated_at' => '2019-01-15 05:35:48',
            ),
            305 => 
            array (
                'id' => 1312,
                'status_code' => '301',
                'from' => '/Enip-2-45380-220-A2E0-11/',
                'to' => '/enip-2-45-380-220-a2e0-11/',
                'created_at' => '2019-01-15 05:35:56',
                'updated_at' => '2019-01-15 05:35:56',
            ),
            306 => 
            array (
                'id' => 1313,
                'status_code' => '301',
                'from' => '/Enip-2-45380-24-A2E0-11/',
                'to' => '/enip-2-45-380-24-a2e0-11/',
                'created_at' => '2019-01-15 05:36:03',
                'updated_at' => '2019-01-15 05:36:03',
            ),
            307 => 
            array (
                'id' => 1314,
                'status_code' => '301',
                'from' => '/Enip-2-41100-220-A2E0-21/',
                'to' => '/enip-2-41-100-220-a2e0-21/',
                'created_at' => '2019-01-15 05:36:11',
                'updated_at' => '2019-01-16 08:43:08',
            ),
            308 => 
            array (
                'id' => 1315,
                'status_code' => '301',
                'from' => '/Enip-2-41100-24-A2E0-21/',
                'to' => '/enip-2-41-100-24-a2e0-21/',
                'created_at' => '2019-01-15 05:36:19',
                'updated_at' => '2019-01-16 08:43:04',
            ),
            309 => 
            array (
                'id' => 1316,
                'status_code' => '301',
                'from' => '/Enip-2-41380-220-A2E0-21/',
                'to' => '/enip-2-41-380-220-a2e0-21/',
                'created_at' => '2019-01-15 05:36:27',
                'updated_at' => '2019-01-15 05:36:27',
            ),
            310 => 
            array (
                'id' => 1317,
                'status_code' => '301',
                'from' => '/Enip-2-41380-24-A2E0-21/',
                'to' => '/enip-2-41-380-24-a2e0-21/',
                'created_at' => '2019-01-15 05:36:34',
                'updated_at' => '2019-01-15 05:36:34',
            ),
            311 => 
            array (
                'id' => 1318,
                'status_code' => '301',
                'from' => '/Enip-2-45100-220-A2E0-21/',
                'to' => '/enip-2-45-100-220-a2e0-21/',
                'created_at' => '2019-01-15 05:36:49',
                'updated_at' => '2019-01-15 05:36:49',
            ),
            312 => 
            array (
                'id' => 1319,
                'status_code' => '301',
                'from' => '/Enip-2-45100-24-A2E0-21/',
                'to' => '/enip-2-45-100-24-a2e0-21/',
                'created_at' => '2019-01-15 05:37:02',
                'updated_at' => '2019-01-15 05:37:02',
            ),
            313 => 
            array (
                'id' => 1320,
                'status_code' => '301',
                'from' => '/Enip-2-45380-220-A2E0-21/',
                'to' => '/enip-2-45-380-220-a2e0-21/',
                'created_at' => '2019-01-15 05:37:11',
                'updated_at' => '2019-01-15 05:37:11',
            ),
            314 => 
            array (
                'id' => 1321,
                'status_code' => '301',
                'from' => '/Enip-2-45380-24-A2E0-21/',
                'to' => '/enip-2-45-380-24-a2e0-21/',
                'created_at' => '2019-01-15 05:37:17',
                'updated_at' => '2019-01-15 05:37:17',
            ),
            315 => 
            array (
                'id' => 1322,
                'status_code' => '301',
                'from' => '/Enip-2-41100-220-A3E4-21/',
                'to' => '/enip-2-41-100-220-a3e4-21/',
                'created_at' => '2019-01-15 05:37:26',
                'updated_at' => '2019-01-16 08:42:55',
            ),
            316 => 
            array (
                'id' => 1323,
                'status_code' => '301',
                'from' => '/Enip-2-41100-24-A3E4-21/',
                'to' => '/enip-2-41-100-24-a3e4-21/',
                'created_at' => '2019-01-15 05:37:33',
                'updated_at' => '2019-01-16 08:42:49',
            ),
            317 => 
            array (
                'id' => 1324,
                'status_code' => '301',
                'from' => '/Enip-2-41380-220-A3E4-21/',
                'to' => '/enip-2-41-380-220-a3e4-21/',
                'created_at' => '2019-01-15 05:37:41',
                'updated_at' => '2019-01-15 05:37:41',
            ),
            318 => 
            array (
                'id' => 1325,
                'status_code' => '301',
                'from' => '/Enip-2-41380-24-A3E4-21/',
                'to' => '/enip-2-41-380-24-a3e4-21/',
                'created_at' => '2019-01-15 05:37:49',
                'updated_at' => '2019-01-15 05:37:49',
            ),
            319 => 
            array (
                'id' => 1326,
                'status_code' => '301',
                'from' => '/Enip-2-45100-220-A3E4-21/',
                'to' => '/enip-2-45-100-220-a3e4-21/',
                'created_at' => '2019-01-15 05:37:56',
                'updated_at' => '2019-01-15 05:37:56',
            ),
            320 => 
            array (
                'id' => 1327,
                'status_code' => '301',
                'from' => '/Enip-2-45100-24-A3E4-21/',
                'to' => '/enip-2-45-100-24-a3e4-21/',
                'created_at' => '2019-01-15 05:38:04',
                'updated_at' => '2019-01-15 05:38:04',
            ),
            321 => 
            array (
                'id' => 1328,
                'status_code' => '301',
                'from' => '/Enip-2-45380-220-A3E4-21/',
                'to' => '/enip-2-45-380-220-a3e4-21/',
                'created_at' => '2019-01-15 05:38:12',
                'updated_at' => '2019-01-15 05:38:12',
            ),
            322 => 
            array (
                'id' => 1329,
                'status_code' => '301',
                'from' => '/Enip-2-45380-24-A3E4-21/',
                'to' => '/enip-2-45-380-24-a3e4-21/',
                'created_at' => '2019-01-15 05:38:20',
                'updated_at' => '2019-01-15 05:38:20',
            ),
            323 => 
            array (
                'id' => 1330,
                'status_code' => '301',
                'from' => '/Enip-2-41100-220-A3E4-11/',
                'to' => '/enip-2-41-100-220-a3e4-11/',
                'created_at' => '2019-01-15 05:38:28',
                'updated_at' => '2019-01-16 08:42:42',
            ),
            324 => 
            array (
                'id' => 1331,
                'status_code' => '301',
                'from' => '/Enip-2-41100-24-A3E4-11/',
                'to' => '/enip-2-41-100-24-a3e4-11/',
                'created_at' => '2019-01-15 05:38:35',
                'updated_at' => '2019-01-16 08:42:36',
            ),
            325 => 
            array (
                'id' => 1332,
                'status_code' => '301',
                'from' => '/Enip-2-41380-220-A3E4-11/',
                'to' => '/enip-2-41-380-220-a3e4-11/',
                'created_at' => '2019-01-15 05:38:41',
                'updated_at' => '2019-01-15 05:38:41',
            ),
            326 => 
            array (
                'id' => 1333,
                'status_code' => '301',
                'from' => '/Enip-2-41380-24-A3E4-11/',
                'to' => '/enip-2-41-380-24-a3e4-11/',
                'created_at' => '2019-01-15 05:38:49',
                'updated_at' => '2019-01-15 05:38:49',
            ),
            327 => 
            array (
                'id' => 1334,
                'status_code' => '301',
                'from' => '/Enip-2-45100-220-A3E4-11/',
                'to' => '/enip-2-45-100-220-a3e4-11/',
                'created_at' => '2019-01-15 05:38:56',
                'updated_at' => '2019-01-15 05:38:56',
            ),
            328 => 
            array (
                'id' => 1335,
                'status_code' => '301',
                'from' => '/Enip-2-45100-24-A3E4-11/',
                'to' => '/enip-2-45-100-24-a3e4-11/',
                'created_at' => '2019-01-15 05:39:09',
                'updated_at' => '2019-01-15 05:39:09',
            ),
            329 => 
            array (
                'id' => 1336,
                'status_code' => '301',
                'from' => '/Enip-2-45380-220-A3E4-11/',
                'to' => '/enip-2-45-380-220-a3e4-11/',
                'created_at' => '2019-01-15 05:39:17',
                'updated_at' => '2019-01-15 05:39:17',
            ),
            330 => 
            array (
                'id' => 1337,
                'status_code' => '301',
                'from' => '/Enip-2-45380-24-A3E4-11/',
                'to' => '/enip-2-45-380-24-a3e4-11/',
                'created_at' => '2019-01-15 05:39:25',
                'updated_at' => '2019-01-15 05:39:25',
            ),
            331 => 
            array (
                'id' => 1339,
                'status_code' => '301',
                'from' => '/Enip-2-41100-24-A2E4%D1%852-21/',
                'to' => '/enip-2-41-100-24-a2e4x2-21/',
                'created_at' => '2019-01-15 05:39:40',
                'updated_at' => '2019-01-16 08:42:24',
            ),
            332 => 
            array (
                'id' => 1340,
                'status_code' => '301',
                'from' => '/Enip-2-41380-220-A2E4%D1%852-21/',
                'to' => '/enip-2-41-380-220-a2e4x2-21/',
                'created_at' => '2019-01-15 05:39:48',
                'updated_at' => '2019-01-16 11:11:18',
            ),
            333 => 
            array (
                'id' => 1341,
                'status_code' => '301',
                'from' => 'https://uralenergotel.ru/Enip-2-41100-24-A2E4%D1%852-21/',
                'to' => '/enip-2-41-380-24-a2e4x2-21/',
                'created_at' => '2019-01-15 05:39:56',
                'updated_at' => '2019-01-16 10:02:53',
            ),
            334 => 
            array (
                'id' => 1342,
                'status_code' => '301',
                'from' => '/Enip-2-45100-220-A2E4%D1%852-21/',
                'to' => '/enip-2-45-100-220-a2e4x2-21/',
                'created_at' => '2019-01-15 05:40:05',
                'updated_at' => '2019-01-16 11:14:39',
            ),
            335 => 
            array (
                'id' => 1343,
                'status_code' => '301',
                'from' => '/Enip-2-45100-24-A2E4%D1%852-21/',
                'to' => '/enip-2-45-100-24-a2e4x2-21/',
                'created_at' => '2019-01-15 05:40:13',
                'updated_at' => '2019-01-16 11:15:04',
            ),
            336 => 
            array (
                'id' => 1344,
                'status_code' => '301',
                'from' => '/Enip-2-45380-220-A2E4%D1%852-21/',
                'to' => '/enip-2-45-380-220-a2e4x2-21/',
                'created_at' => '2019-01-15 05:40:22',
                'updated_at' => '2019-01-16 11:15:27',
            ),
            337 => 
            array (
                'id' => 1345,
                'status_code' => '301',
                'from' => '/Enip-2-45380-24-A2E4%D1%852-21/',
                'to' => '/enip-2-45-380-24-a2e4x2-21/',
                'created_at' => '2019-01-15 05:40:32',
                'updated_at' => '2019-01-16 11:20:49',
            ),
            338 => 
            array (
                'id' => 1346,
                'status_code' => '301',
                'from' => '/Enip-2-41100-220-A2E4%D1%852FX-21/',
                'to' => '/enip-2-41-100-220-a2e4x2fx-21/',
                'created_at' => '2019-01-15 05:40:40',
                'updated_at' => '2019-01-16 11:21:06',
            ),
            339 => 
            array (
                'id' => 1347,
                'status_code' => '301',
                'from' => '/Enip-2-41100-24-A2E4%D1%852FX-21/',
                'to' => '/enip-2-41-100-24-a2e4x2fx-21/',
                'created_at' => '2019-01-15 05:40:48',
                'updated_at' => '2019-01-16 11:21:43',
            ),
            340 => 
            array (
                'id' => 1348,
                'status_code' => '301',
                'from' => '/Enip-2-41380-220-A2E4%D1%852FX-21/',
                'to' => '/enip-2-41-380-220-a2e4x2fx-21/',
                'created_at' => '2019-01-15 05:40:57',
                'updated_at' => '2019-01-16 11:23:14',
            ),
            341 => 
            array (
                'id' => 1349,
                'status_code' => '301',
                'from' => '/Enip-2-41380-24-A2E4%D1%852FX-21/',
                'to' => '/enip-2-41-380-24-a2e4x2fx-21/',
                'created_at' => '2019-01-15 05:41:05',
                'updated_at' => '2019-01-16 11:23:41',
            ),
            342 => 
            array (
                'id' => 1351,
                'status_code' => '301',
                'from' => '/Enip-2-45100-24-A2E4%D1%852FX-21/',
                'to' => '/enip-2-45-100-24-a2e4x2fx-21/',
                'created_at' => '2019-01-15 05:41:21',
                'updated_at' => '2019-01-16 11:31:14',
            ),
            343 => 
            array (
                'id' => 1352,
                'status_code' => '301',
                'from' => '/Enip-2-45380-220-A2E4%D1%852FX-21/',
                'to' => '/enip-2-45-380-220-a2e4x2fx-21/',
                'created_at' => '2019-01-15 05:41:29',
                'updated_at' => '2019-01-16 11:31:38',
            ),
            344 => 
            array (
                'id' => 1353,
                'status_code' => '301',
                'from' => '/Enip-2-45380-24-A2E4%D1%852FX-21/',
                'to' => '/enip-2-45-380-24-a2e4x2fx-21/',
                'created_at' => '2019-01-15 05:41:36',
                'updated_at' => '2019-01-16 11:32:01',
            ),
            345 => 
            array (
                'id' => 1354,
                'status_code' => '301',
                'from' => '/Enip-2-41100-220-a2sfp-21/',
                'to' => '/enip-2-41-100-220-a2sfp-21/',
                'created_at' => '2019-01-15 05:41:44',
                'updated_at' => '2019-01-16 08:41:53',
            ),
            346 => 
            array (
                'id' => 1355,
                'status_code' => '301',
                'from' => '/Enip-2-41100-24-a2sfp-21/',
                'to' => '/enip-2-41-100-24-a2sfp-21/',
                'created_at' => '2019-01-15 05:41:52',
                'updated_at' => '2019-01-16 08:41:48',
            ),
            347 => 
            array (
                'id' => 1356,
                'status_code' => '301',
                'from' => '/Enip-2-41380-220-a2sfp-21/',
                'to' => '/enip-2-41-380-220-a2sfp-21/',
                'created_at' => '2019-01-15 05:42:12',
                'updated_at' => '2019-01-15 05:42:12',
            ),
            348 => 
            array (
                'id' => 1357,
                'status_code' => '301',
                'from' => '/Enip-2-41380-24-a2sfp-21/',
                'to' => '/enip-2-41-380-24-a2sfp-21/',
                'created_at' => '2019-01-15 05:42:26',
                'updated_at' => '2019-01-15 05:42:26',
            ),
            349 => 
            array (
                'id' => 1358,
                'status_code' => '301',
                'from' => '/Enip-2-45100-220-a2sfp-21/',
                'to' => '/enip-2-45-100-220-a2sfp-21/',
                'created_at' => '2019-01-15 05:42:33',
                'updated_at' => '2019-01-15 05:42:33',
            ),
            350 => 
            array (
                'id' => 1359,
                'status_code' => '301',
                'from' => '/Enip-2-45100-24-a2sfp-21/',
                'to' => '/enip-2-45-100-24-a2sfp-21/',
                'created_at' => '2019-01-15 05:42:41',
                'updated_at' => '2019-01-15 05:42:41',
            ),
            351 => 
            array (
                'id' => 1360,
                'status_code' => '301',
                'from' => '/Enip-2-45380-220-a2sfp-21/',
                'to' => '/enip-2-45-380-220-a2sfp-21/',
                'created_at' => '2019-01-15 05:42:49',
                'updated_at' => '2019-01-15 05:42:49',
            ),
            352 => 
            array (
                'id' => 1361,
                'status_code' => '301',
                'from' => '/Enip-2-45380-24-a2sfp-21/',
                'to' => '/enip-2-45-380-24-a2sfp-21/',
                'created_at' => '2019-01-15 05:42:56',
                'updated_at' => '2019-01-15 05:42:56',
            ),
            353 => 
            array (
                'id' => 1362,
                'status_code' => '301',
                'from' => '/Enip-2-110-24-A2E0-32/',
                'to' => '/enip-2-11-0-24-a2e0-32/',
                'created_at' => '2019-01-15 05:43:13',
                'updated_at' => '2019-01-16 08:41:25',
            ),
            354 => 
            array (
                'id' => 1363,
                'status_code' => '301',
                'from' => '/Enip-2-150-24-A2E0-32/',
                'to' => '/enip-2-15-0-24-a2e0-32/',
                'created_at' => '2019-01-15 05:43:23',
                'updated_at' => '2019-01-15 05:45:16',
            ),
            355 => 
            array (
                'id' => 1364,
                'status_code' => '301',
                'from' => '/Enip-2-410-24-A2E0-32/',
                'to' => '/enip-2-41-0-24-a2e0-32/',
                'created_at' => '2019-01-15 05:43:30',
                'updated_at' => '2019-01-15 05:45:18',
            ),
            356 => 
            array (
                'id' => 1365,
                'status_code' => '301',
                'from' => '/Enip-2-41100-24-A2E0-32/',
                'to' => '/enip-2-41-100-24-a2e0-32/',
                'created_at' => '2019-01-15 05:43:38',
                'updated_at' => '2019-01-16 08:41:13',
            ),
            357 => 
            array (
                'id' => 1366,
                'status_code' => '301',
                'from' => '/Enip-2-41380-24-A2E0-32/',
                'to' => '/enip-2-41-380-24-a2e0-32/',
                'created_at' => '2019-01-15 05:43:46',
                'updated_at' => '2019-01-15 05:45:22',
            ),
            358 => 
            array (
                'id' => 1367,
                'status_code' => '301',
                'from' => '/Enip-2-450-24-A2E0-32/',
                'to' => '/enip-2-45-0-24-a2e0-32/',
                'created_at' => '2019-01-15 05:44:48',
                'updated_at' => '2019-01-15 05:45:24',
            ),
            359 => 
            array (
                'id' => 1368,
                'status_code' => '301',
                'from' => '/Enip-2-45100-24-A2E0-32/',
                'to' => '/enip-2-45-100-24-a2e0-32/',
                'created_at' => '2019-01-15 05:44:56',
                'updated_at' => '2019-01-15 05:45:26',
            ),
            360 => 
            array (
                'id' => 1369,
                'status_code' => '301',
                'from' => '/Enip-2-45380-24-A2E0-32/',
                'to' => '/enip-2-45-380-24-a2e0-32/',
                'created_at' => '2019-01-15 05:45:07',
                'updated_at' => '2019-01-15 05:45:07',
            ),
            361 => 
            array (
                'id' => 1370,
                'status_code' => '301',
                'from' => '/Enip-2-41100-220-A1E0-01/',
                'to' => '/enip-2-41-100-220-a1e0-01/',
                'created_at' => '2019-01-15 09:01:24',
                'updated_at' => '2019-01-15 09:01:37',
            ),
            362 => 
            array (
                'id' => 1371,
                'status_code' => '301',
                'from' => '/Enip-2-41100-220-A3E4-21/',
                'to' => '/enip-2-41-100-220-a3e4-21/',
                'created_at' => '2019-01-16 08:37:35',
                'updated_at' => '2019-01-16 08:37:43',
            ),
            363 => 
            array (
                'id' => 1374,
                'status_code' => '301',
                'from' => '/Enip-2-41100-220-A2E4%D1%852-21/',
                'to' => '/enip-2-41-100-220-a2e4x2-21/',
                'created_at' => '2019-01-16 10:04:14',
                'updated_at' => '2019-01-16 10:05:05',
            ),
            364 => 
            array (
                'id' => 1375,
                'status_code' => '301',
                'from' => '/Enip-2-41380-24-A2E4%D1%852-21/',
                'to' => '/enip-2-41-380-24-a2e4x2-21/',
                'created_at' => '2019-01-16 11:12:29',
                'updated_at' => '2019-01-16 11:12:46',
            ),
            365 => 
            array (
                'id' => 1376,
                'status_code' => '301',
                'from' => '/Enip-2-45100-220-A2E4%D1%852FX-21/',
                'to' => '/enip-2-45-100-220-a2e4x2fx-21/',
                'created_at' => '2019-01-16 11:26:13',
                'updated_at' => '2019-01-16 11:30:28',
            ),
            366 => 
            array (
                'id' => 1377,
                'status_code' => '301',
                'from' => '/Envm-1-24-220-0-220-a2e0/',
                'to' => '/enmv-1-24-220-0-220-a2e0/',
                'created_at' => '2019-01-22 09:42:35',
                'updated_at' => '2019-01-22 09:42:35',
            ),
            367 => 
            array (
                'id' => 1378,
                'status_code' => '301',
                'from' => '/Envm-1-24-220-0-24-a2e0/',
                'to' => '/enmv-1-24-220-0-24-a2e0/',
                'created_at' => '2019-01-22 09:42:44',
                'updated_at' => '2019-01-22 09:42:44',
            ),
            368 => 
            array (
                'id' => 1379,
                'status_code' => '301',
                'from' => '/Envm-1-24-24-0-220-a2e0/',
                'to' => '/enmv-1-24-24-0-220-a2e0/',
                'created_at' => '2019-01-22 09:42:58',
                'updated_at' => '2019-01-22 09:42:58',
            ),
            369 => 
            array (
                'id' => 1380,
                'status_code' => '301',
                'from' => '/Envm-1-24-24-0-24-a2e0/',
                'to' => '/enmv-1-24-24-0-24-a2e0/',
                'created_at' => '2019-01-22 09:43:06',
                'updated_at' => '2019-01-22 09:43:06',
            ),
            370 => 
            array (
                'id' => 1381,
                'status_code' => '301',
                'from' => '/Envm-1-24-220-0-220-a2e4/',
                'to' => '/enmv-1-24-220-0-220-a2e4/',
                'created_at' => '2019-01-22 09:43:15',
                'updated_at' => '2019-01-22 09:43:15',
            ),
            371 => 
            array (
                'id' => 1382,
                'status_code' => '301',
                'from' => '/Envm-1-24-220-0-24-a2e4/',
                'to' => '/enmv-1-24-220-0-24-a2e4/',
                'created_at' => '2019-01-22 09:43:23',
                'updated_at' => '2019-01-22 09:43:23',
            ),
            372 => 
            array (
                'id' => 1383,
                'status_code' => '301',
                'from' => '/Envm-1-24-24-0-220-a2e4/',
                'to' => '/enmv-1-24-24-0-220-a2e4/',
                'created_at' => '2019-01-22 09:43:31',
                'updated_at' => '2019-01-22 09:43:31',
            ),
            373 => 
            array (
                'id' => 1384,
                'status_code' => '301',
                'from' => '/Envm-1-24-24-0-24-a2e4/',
                'to' => '/enmv-1-24-24-0-24-a2e4/',
                'created_at' => '2019-01-22 09:43:39',
                'updated_at' => '2019-01-22 09:43:39',
            ),
            374 => 
            array (
                'id' => 1385,
                'status_code' => '301',
                'from' => '/Envm-1-0-20-220-a2e0/',
                'to' => '/enmv-1-0-20-220-a2e0/',
                'created_at' => '2019-01-22 09:43:47',
                'updated_at' => '2019-01-22 09:43:47',
            ),
            375 => 
            array (
                'id' => 1386,
                'status_code' => '301',
                'from' => '/Envm-1-0-20-24-a2e0/',
                'to' => '/enmv-1-0-20-24-a2e0/',
                'created_at' => '2019-01-22 09:43:55',
                'updated_at' => '2019-01-22 09:43:55',
            ),
            376 => 
            array (
                'id' => 1387,
                'status_code' => '301',
                'from' => '/Envm-1-0-20-220-a2e4/',
                'to' => '/enmv-1-0-20-220-a2e4/',
                'created_at' => '2019-01-22 09:44:03',
                'updated_at' => '2019-01-22 09:44:03',
            ),
            377 => 
            array (
                'id' => 1388,
                'status_code' => '301',
                'from' => '/Envm-1-0-20-24-a2e4/',
                'to' => '/enmv-1-0-20-24-a2e4/',
                'created_at' => '2019-01-22 09:44:11',
                'updated_at' => '2019-01-22 09:44:11',
            ),
            378 => 
            array (
                'id' => 1389,
                'status_code' => '301',
                'from' => '/Envm-1-0-22-220-a2e0/',
                'to' => '/enmv-1-0-22-220-a2e0/',
                'created_at' => '2019-01-22 09:44:19',
                'updated_at' => '2019-01-22 09:44:19',
            ),
            379 => 
            array (
                'id' => 1390,
                'status_code' => '301',
                'from' => '/Envm-1-0-22-24-a2e0/',
                'to' => '/enmv-1-0-22-24-a2e0/',
                'created_at' => '2019-01-22 09:44:28',
                'updated_at' => '2019-01-22 09:44:28',
            ),
            380 => 
            array (
                'id' => 1391,
                'status_code' => '301',
                'from' => '/Envm-1-0-22-220-a2e4/',
                'to' => '/enmv-1-0-22-220-a2e4/',
                'created_at' => '2019-01-22 09:44:38',
                'updated_at' => '2019-01-22 09:44:38',
            ),
            381 => 
            array (
                'id' => 1392,
                'status_code' => '301',
                'from' => '/Envm-1-0-22-24-a2e4/',
                'to' => '/enmv-1-0-22-24-a2e4/',
                'created_at' => '2019-01-22 09:44:50',
                'updated_at' => '2019-01-22 09:44:50',
            ),
            382 => 
            array (
                'id' => 1393,
                'status_code' => '301',
                'from' => '/Envm-1-16-24-6-220-a2e0/',
                'to' => '/enmv-1-16-24-6-220-a2e0/',
                'created_at' => '2019-01-22 09:44:57',
                'updated_at' => '2019-01-22 09:44:57',
            ),
            383 => 
            array (
                'id' => 1394,
                'status_code' => '301',
                'from' => '/Envm-1-16-24-6-24-a2e0/',
                'to' => '/enmv-1-16-24-6-24-a2e0/',
                'created_at' => '2019-01-22 09:45:04',
                'updated_at' => '2019-01-22 09:45:04',
            ),
            384 => 
            array (
                'id' => 1395,
                'status_code' => '301',
                'from' => '/Envm-1-16-220-6-220-a2e0/',
                'to' => '/enmv-1-16-220-6-220-a2e0/',
                'created_at' => '2019-01-22 09:45:12',
                'updated_at' => '2019-01-22 09:45:12',
            ),
            385 => 
            array (
                'id' => 1396,
                'status_code' => '301',
                'from' => '/Envm-1-16-220-6-24-a2e0/',
                'to' => '/enmv-1-16-220-6-24-a2e0/',
                'created_at' => '2019-01-22 09:46:06',
                'updated_at' => '2019-01-22 09:46:06',
            ),
            386 => 
            array (
                'id' => 1397,
                'status_code' => '301',
                'from' => '/Envm-1-16-24-6-220-a2e4/',
                'to' => '/enmv-1-16-24-6-220-a2e4/',
                'created_at' => '2019-01-22 09:46:13',
                'updated_at' => '2019-01-22 09:46:13',
            ),
            387 => 
            array (
                'id' => 1398,
                'status_code' => '301',
                'from' => '/Envm-1-16-24-6-24-a2e4/',
                'to' => '/enmv-1-16-24-6-24-a2e4/',
                'created_at' => '2019-01-22 09:46:22',
                'updated_at' => '2019-01-22 09:46:22',
            ),
            388 => 
            array (
                'id' => 1399,
                'status_code' => '301',
                'from' => '/Envm-1-16-220-6-220-a2e4/',
                'to' => '/enmv-1-16-220-6-220-a2e4/',
                'created_at' => '2019-01-22 09:46:30',
                'updated_at' => '2019-01-22 09:46:30',
            ),
            389 => 
            array (
                'id' => 1400,
                'status_code' => '301',
                'from' => '/Envm-1-16-220-6-24-a2e4/',
                'to' => '/enmv-1-16-220-6-24-a2e4/',
                'created_at' => '2019-01-22 09:46:38',
                'updated_at' => '2019-01-22 09:46:38',
            ),
            390 => 
            array (
                'id' => 1401,
                'status_code' => '301',
                'from' => '/Envm-1-16-24-3r-220-a2e0/',
                'to' => '/enmv-1-16-24-3r-220-a2e0/',
                'created_at' => '2019-01-22 09:46:49',
                'updated_at' => '2019-01-22 09:46:49',
            ),
            391 => 
            array (
                'id' => 1402,
                'status_code' => '301',
                'from' => '/Envm-1-16-24-3r-24-a2e0/',
                'to' => '/enmv-1-16-24-3r-24-a2e0/',
                'created_at' => '2019-01-22 09:46:58',
                'updated_at' => '2019-01-22 09:46:58',
            ),
            392 => 
            array (
                'id' => 1403,
                'status_code' => '301',
                'from' => '/Envm-1-16-220-3r-220-a2e0/',
                'to' => '/enmv-1-16-220-3r-220-a2e0/',
                'created_at' => '2019-01-22 09:47:07',
                'updated_at' => '2019-01-22 09:47:07',
            ),
            393 => 
            array (
                'id' => 1404,
                'status_code' => '301',
                'from' => '/Envm-1-16-220-3r-24-a2e0/',
                'to' => '/enmv-1-16-220-3r-24-a2e0/',
                'created_at' => '2019-01-22 09:47:19',
                'updated_at' => '2019-01-22 09:47:19',
            ),
            394 => 
            array (
                'id' => 1405,
                'status_code' => '301',
                'from' => '/Envm-1-16-24-3r-220-a2e4/',
                'to' => '/enmv-1-16-24-3r-220-a2e4/',
                'created_at' => '2019-01-22 09:47:27',
                'updated_at' => '2019-01-22 09:47:27',
            ),
            395 => 
            array (
                'id' => 1406,
                'status_code' => '301',
                'from' => '/Envm-1-16-24-3r-24-a2e4/',
                'to' => '/enmv-1-16-24-3r-24-a2e4/',
                'created_at' => '2019-01-22 09:47:34',
                'updated_at' => '2019-01-22 09:47:34',
            ),
            396 => 
            array (
                'id' => 1407,
                'status_code' => '301',
                'from' => '/Envm-1-16-220-3r-220-a2e4/',
                'to' => '/enmv-1-16-220-3r-220-a2e4/',
                'created_at' => '2019-01-22 09:47:41',
                'updated_at' => '2019-01-22 09:47:41',
            ),
            397 => 
            array (
                'id' => 1408,
                'status_code' => '301',
                'from' => '/Envm-1-16-220-3r-24-a2e4/',
                'to' => '/enmv-1-16-220-3r-24-a2e4/',
                'created_at' => '2019-01-22 09:47:48',
                'updated_at' => '2019-01-22 09:47:48',
            ),
            398 => 
            array (
                'id' => 1409,
                'status_code' => '301',
                'from' => '/Envm-1-0-3r-220-a1/',
                'to' => '/enmv-1-0-3r-220-a1/',
                'created_at' => '2019-01-22 09:47:55',
                'updated_at' => '2019-01-22 09:47:55',
            ),
            399 => 
            array (
                'id' => 1410,
                'status_code' => '301',
                'from' => '/Envm-1-0-3r-24-a1/',
                'to' => '/enmv-1-0-3r-24-a1/',
                'created_at' => '2019-01-22 09:48:04',
                'updated_at' => '2019-01-22 09:48:04',
            ),
            400 => 
            array (
                'id' => 1411,
                'status_code' => '301',
                'from' => '/Envm-1-4-3r-220-a1/',
                'to' => '/enmv-1-4-3r-220-a1/',
                'created_at' => '2019-01-22 09:48:13',
                'updated_at' => '2019-01-22 09:48:13',
            ),
            401 => 
            array (
                'id' => 1412,
                'status_code' => '301',
                'from' => '/Envm-1-4-3r-24-a1/',
                'to' => '/enmv-1-4-3r-24-a1/',
                'created_at' => '2019-01-22 09:48:20',
                'updated_at' => '2019-01-22 09:48:20',
            ),
            402 => 
            array (
                'id' => 1413,
                'status_code' => '301',
                'from' => '/Envm-1-6-3r-220-a1/',
                'to' => '/enmv-1-6-3r-220-a1/',
                'created_at' => '2019-01-22 09:48:28',
                'updated_at' => '2019-01-22 09:48:28',
            ),
            403 => 
            array (
                'id' => 1414,
                'status_code' => '301',
                'from' => '/Envm-1-6-3r-24-a1/',
                'to' => '/enmv-1-6-3r-24-a1/',
                'created_at' => '2019-01-22 09:48:36',
                'updated_at' => '2019-01-22 09:48:36',
            ),
            404 => 
            array (
                'id' => 1415,
                'status_code' => '301',
                'from' => '/enmv-1-8ab8-24-0-220-A2E0/',
                'to' => '/enmv-1-8a8-24-0-220-a2e0/',
                'created_at' => '2019-01-22 09:48:47',
                'updated_at' => '2019-01-22 09:48:47',
            ),
            405 => 
            array (
                'id' => 1416,
                'status_code' => '301',
                'from' => '/enmv-1-8ac8-24-0-220-A2E0/',
                'to' => '/enmv-1-8b8-24-0-220-a2e0/',
                'created_at' => '2019-01-22 09:48:57',
                'updated_at' => '2019-01-22 09:48:57',
            ),
            406 => 
            array (
                'id' => 1417,
                'status_code' => '301',
                'from' => '/enmv-1-8ad8-24-0-220-A2E0/',
                'to' => '/enmv-1-8c8-24-0-220-a2e0/',
                'created_at' => '2019-01-22 09:49:05',
                'updated_at' => '2019-01-22 09:49:05',
            ),
            407 => 
            array (
                'id' => 1418,
                'status_code' => '301',
                'from' => '/enmv-1-8ae8-24-0-220-A2E0/',
                'to' => '/enmv-1-8d8-24-0-220-a2e0/',
                'created_at' => '2019-01-22 09:49:14',
                'updated_at' => '2019-01-22 09:49:14',
            ),
            408 => 
            array (
                'id' => 1419,
                'status_code' => '301',
                'from' => '/enmv-1-8af8-24-0-220-A2E0/',
                'to' => '/enmv-1-8e8-24-0-220-a2e0/',
                'created_at' => '2019-01-22 09:49:22',
                'updated_at' => '2019-01-22 09:49:22',
            ),
            409 => 
            array (
                'id' => 1420,
                'status_code' => '301',
                'from' => '/enmv-1-8bb8-24-0-220-A2E0/',
                'to' => '/enmv-1-8f8-24-0-220-a2e0/',
                'created_at' => '2019-01-22 09:49:30',
                'updated_at' => '2019-01-22 09:49:30',
            ),
            410 => 
            array (
                'id' => 1421,
                'status_code' => '301',
                'from' => '/enmv-1-8ab8-24-0-24-A2E0/',
                'to' => '/enmv-1-8a8-24-0-24-a2e0/',
                'created_at' => '2019-01-22 09:49:38',
                'updated_at' => '2019-01-22 09:49:38',
            ),
            411 => 
            array (
                'id' => 1422,
                'status_code' => '301',
                'from' => '/enmv-1-8ac8-24-0-24-A2E0/',
                'to' => '/enmv-1-8b8-24-0-24-a2e0/',
                'created_at' => '2019-01-22 09:49:45',
                'updated_at' => '2019-01-22 09:49:45',
            ),
            412 => 
            array (
                'id' => 1423,
                'status_code' => '301',
                'from' => '/enmv-1-8ad8-24-0-24-A2E0/',
                'to' => '/enmv-1-8c8-24-0-24-a2e0/',
                'created_at' => '2019-01-22 09:49:53',
                'updated_at' => '2019-01-22 09:49:53',
            ),
            413 => 
            array (
                'id' => 1424,
                'status_code' => '301',
                'from' => '/enmv-1-8ae8-24-0-24-A2E0/',
                'to' => '/enmv-1-8d8-24-0-24-a2e0/',
                'created_at' => '2019-01-22 09:50:01',
                'updated_at' => '2019-01-22 09:50:01',
            ),
            414 => 
            array (
                'id' => 1425,
                'status_code' => '301',
                'from' => '/enmv-1-8af8-24-0-24-A2E0/',
                'to' => '/enmv-1-8e8-24-0-24-a2e0/',
                'created_at' => '2019-01-22 09:50:10',
                'updated_at' => '2019-01-22 09:50:10',
            ),
            415 => 
            array (
                'id' => 1426,
                'status_code' => '301',
                'from' => '/enmv-1-8bb8-24-0-24-A2E0/',
                'to' => '/enmv-1-8f8-24-0-24-a2e0/',
                'created_at' => '2019-01-22 09:50:17',
                'updated_at' => '2019-01-22 09:50:17',
            ),
            416 => 
            array (
                'id' => 1427,
                'status_code' => '301',
                'from' => '/enmv-1-8ab8-220-0-220-A2E0/',
                'to' => '/enmv-1-8a8-220-0-220-a2e0/',
                'created_at' => '2019-01-22 09:50:26',
                'updated_at' => '2019-01-22 09:50:26',
            ),
            417 => 
            array (
                'id' => 1428,
                'status_code' => '301',
                'from' => '/enmv-1-8ac8-220-0-220-A2E0/',
                'to' => '/enmv-1-8b8-220-0-220-a2e0/',
                'created_at' => '2019-01-22 09:50:35',
                'updated_at' => '2019-01-22 09:50:35',
            ),
            418 => 
            array (
                'id' => 1429,
                'status_code' => '301',
                'from' => '/enmv-1-8ad8-220-0-220-A2E0/',
                'to' => '/enmv-1-8c8-220-0-220-a2e0/',
                'created_at' => '2019-01-22 09:50:44',
                'updated_at' => '2019-01-22 09:50:44',
            ),
            419 => 
            array (
                'id' => 1430,
                'status_code' => '301',
                'from' => '/enmv-1-8ae8-220-0-220-A2E0/',
                'to' => '/enmv-1-8d8-220-0-220-a2e0/',
                'created_at' => '2019-01-22 09:50:53',
                'updated_at' => '2019-01-22 09:50:53',
            ),
            420 => 
            array (
                'id' => 1431,
                'status_code' => '301',
                'from' => '/enmv-1-8af8-220-0-220-A2E0/',
                'to' => '/enmv-1-8e8-220-0-220-a2e0/',
                'created_at' => '2019-01-22 09:51:03',
                'updated_at' => '2019-01-22 09:51:03',
            ),
            421 => 
            array (
                'id' => 1432,
                'status_code' => '301',
                'from' => '/enmv-1-8bb8-220-0-220-A2E0/',
                'to' => '/enmv-1-8f8-220-0-220-a2e0/',
                'created_at' => '2019-01-22 09:51:18',
                'updated_at' => '2019-01-22 09:51:18',
            ),
            422 => 
            array (
                'id' => 1433,
                'status_code' => '301',
                'from' => '/enmv-1-8ab8-220-0-24-A2E0/',
                'to' => '/enmv-1-8a8-220-0-24-a2e0/',
                'created_at' => '2019-01-22 09:51:28',
                'updated_at' => '2019-01-22 09:51:28',
            ),
            423 => 
            array (
                'id' => 1434,
                'status_code' => '301',
                'from' => '/enmv-1-8ac8-220-0-24-A2E0/',
                'to' => '/enmv-1-8b8-220-0-24-a2e0/',
                'created_at' => '2019-01-22 09:51:45',
                'updated_at' => '2019-01-22 09:51:45',
            ),
            424 => 
            array (
                'id' => 1435,
                'status_code' => '301',
                'from' => '/enmv-1-8ad8-220-0-24-A2E0/',
                'to' => '/enmv-1-8c8-220-0-24-a2e0/',
                'created_at' => '2019-01-22 09:51:54',
                'updated_at' => '2019-01-22 09:51:54',
            ),
            425 => 
            array (
                'id' => 1436,
                'status_code' => '301',
                'from' => '/enmv-1-8ae8-220-0-24-A2E0/',
                'to' => '/enmv-1-8d8-220-0-24-a2e0/',
                'created_at' => '2019-01-22 09:52:03',
                'updated_at' => '2019-01-22 09:52:03',
            ),
            426 => 
            array (
                'id' => 1437,
                'status_code' => '301',
                'from' => '/enmv-1-8af8-220-0-24-A2E0/',
                'to' => '/enmv-1-8e8-220-0-24-a2e0/',
                'created_at' => '2019-01-22 09:52:10',
                'updated_at' => '2019-01-22 09:52:10',
            ),
            427 => 
            array (
                'id' => 1438,
                'status_code' => '301',
                'from' => '/enmv-1-8bb8-220-0-24-A2E0/',
                'to' => '/enmv-1-8f8-220-0-24-a2e0/',
                'created_at' => '2019-01-22 09:52:19',
                'updated_at' => '2019-01-22 09:52:19',
            ),
            428 => 
            array (
                'id' => 1439,
                'status_code' => '301',
                'from' => '/enmv-1-8ab8-24-0-220-A2E4/',
                'to' => '/enmv-1-8a8-24-0-220-a2e4/',
                'created_at' => '2019-01-22 09:52:27',
                'updated_at' => '2019-01-22 09:52:27',
            ),
            429 => 
            array (
                'id' => 1440,
                'status_code' => '301',
                'from' => '/enmv-1-8ac8-24-0-220-A2E4/',
                'to' => '/enmv-1-8b8-24-0-220-a2e4/',
                'created_at' => '2019-01-22 09:52:35',
                'updated_at' => '2019-01-22 09:52:35',
            ),
            430 => 
            array (
                'id' => 1441,
                'status_code' => '301',
                'from' => '/enmv-1-8ad8-24-0-220-A2E4/',
                'to' => '/enmv-1-8c8-24-0-220-a2e4/',
                'created_at' => '2019-01-22 09:52:42',
                'updated_at' => '2019-01-22 09:52:42',
            ),
            431 => 
            array (
                'id' => 1442,
                'status_code' => '301',
                'from' => '/enmv-1-8ae8-24-0-220-A2E4/',
                'to' => '/enmv-1-8d8-24-0-220-a2e4/',
                'created_at' => '2019-01-22 09:52:50',
                'updated_at' => '2019-01-22 09:52:50',
            ),
            432 => 
            array (
                'id' => 1443,
                'status_code' => '301',
                'from' => '/enmv-1-8af8-24-0-220-A2E4/',
                'to' => '/enmv-1-8e8-24-0-220-a2e4/',
                'created_at' => '2019-01-22 09:52:57',
                'updated_at' => '2019-01-22 09:52:57',
            ),
            433 => 
            array (
                'id' => 1444,
                'status_code' => '301',
                'from' => '/enmv-1-8bb8-24-0-220-A2E4/',
                'to' => '/enmv-1-8f8-24-0-220-a2e4/',
                'created_at' => '2019-01-22 09:53:13',
                'updated_at' => '2019-01-22 09:53:13',
            ),
            434 => 
            array (
                'id' => 1445,
                'status_code' => '301',
                'from' => '/enmv-1-8ab8-24-0-24-A2E4/',
                'to' => '/enmv-1-8a8-24-0-24-a2e4/',
                'created_at' => '2019-01-22 09:53:20',
                'updated_at' => '2019-01-22 09:53:20',
            ),
            435 => 
            array (
                'id' => 1446,
                'status_code' => '301',
                'from' => '/enmv-1-8ac8-24-0-24-A2E4/',
                'to' => '/enmv-1-8b8-24-0-24-a2e4/',
                'created_at' => '2019-01-22 09:53:29',
                'updated_at' => '2019-01-22 09:53:29',
            ),
            436 => 
            array (
                'id' => 1447,
                'status_code' => '301',
                'from' => '/enmv-1-8ad8-24-0-24-A2E4/',
                'to' => '/enmv-1-8c8-24-0-24-a2e4/',
                'created_at' => '2019-01-22 09:53:38',
                'updated_at' => '2019-01-22 09:53:38',
            ),
            437 => 
            array (
                'id' => 1448,
                'status_code' => '301',
                'from' => '/enmv-1-8ae8-24-0-24-A2E4/',
                'to' => '/enmv-1-8d8-24-0-24-a2e4/',
                'created_at' => '2019-01-22 09:53:46',
                'updated_at' => '2019-01-22 09:53:46',
            ),
            438 => 
            array (
                'id' => 1449,
                'status_code' => '301',
                'from' => '/enmv-1-8af8-24-0-24-A2E4/',
                'to' => '/enmv-1-8e8-24-0-24-a2e4/',
                'created_at' => '2019-01-22 09:53:53',
                'updated_at' => '2019-01-22 09:53:53',
            ),
            439 => 
            array (
                'id' => 1450,
                'status_code' => '301',
                'from' => '/enmv-1-8bb8-24-0-24-A2E4/',
                'to' => '/enmv-1-8f8-24-0-24-a2e4/',
                'created_at' => '2019-01-22 09:54:02',
                'updated_at' => '2019-01-22 09:54:02',
            ),
            440 => 
            array (
                'id' => 1451,
                'status_code' => '301',
                'from' => '/enmv-1-8ab8-220-0-220-A2E4/',
                'to' => '/enmv-1-8a8-220-0-220-a2e4/',
                'created_at' => '2019-01-22 09:54:09',
                'updated_at' => '2019-01-22 09:54:09',
            ),
            441 => 
            array (
                'id' => 1452,
                'status_code' => '301',
                'from' => '/enmv-1-8ac8-220-0-220-A2E4/',
                'to' => '/enmv-1-8b8-220-0-220-a2e4/',
                'created_at' => '2019-01-22 09:54:17',
                'updated_at' => '2019-01-22 09:54:17',
            ),
            442 => 
            array (
                'id' => 1453,
                'status_code' => '301',
                'from' => '/enmv-1-8ad8-220-0-220-A2E4/',
                'to' => '/enmv-1-8c8-220-0-220-a2e4/',
                'created_at' => '2019-01-22 09:54:25',
                'updated_at' => '2019-01-22 09:54:25',
            ),
            443 => 
            array (
                'id' => 1454,
                'status_code' => '301',
                'from' => '/enmv-1-8ae8-220-0-220-A2E4/',
                'to' => '/enmv-1-8d8-220-0-220-a2e4/',
                'created_at' => '2019-01-22 09:54:32',
                'updated_at' => '2019-01-22 09:54:32',
            ),
            444 => 
            array (
                'id' => 1455,
                'status_code' => '301',
                'from' => '/enmv-1-8af8-220-0-220-A2E4/',
                'to' => '/enmv-1-8e8-220-0-220-a2e4/',
                'created_at' => '2019-01-22 09:54:41',
                'updated_at' => '2019-01-22 09:54:41',
            ),
            445 => 
            array (
                'id' => 1456,
                'status_code' => '301',
                'from' => '/enmv-1-8bb8-220-0-220-A2E4/',
                'to' => '/enmv-1-8f8-220-0-220-a2e4/',
                'created_at' => '2019-01-22 09:54:49',
                'updated_at' => '2019-01-22 09:54:49',
            ),
            446 => 
            array (
                'id' => 1457,
                'status_code' => '301',
                'from' => '/enmv-1-8ab8-220-0-24-A2E4/',
                'to' => '/enmv-1-8a8-220-0-24-a2e4/',
                'created_at' => '2019-01-22 09:54:56',
                'updated_at' => '2019-01-22 09:54:56',
            ),
            447 => 
            array (
                'id' => 1458,
                'status_code' => '301',
                'from' => '/enmv-1-8ac8-220-0-24-A2E4/',
                'to' => '/enmv-1-8b8-220-0-24-a2e4/',
                'created_at' => '2019-01-22 09:55:04',
                'updated_at' => '2019-01-22 09:55:04',
            ),
            448 => 
            array (
                'id' => 1459,
                'status_code' => '301',
                'from' => '/enmv-1-8ad8-220-0-24-A2E4/',
                'to' => '/enmv-1-8c8-220-0-24-a2e4/',
                'created_at' => '2019-01-22 09:55:12',
                'updated_at' => '2019-01-22 09:55:12',
            ),
            449 => 
            array (
                'id' => 1460,
                'status_code' => '301',
                'from' => '/enmv-1-8ae8-220-0-24-A2E4/',
                'to' => '/enmv-1-8d8-220-0-24-a2e4/',
                'created_at' => '2019-01-22 09:55:20',
                'updated_at' => '2019-01-22 09:55:20',
            ),
            450 => 
            array (
                'id' => 1461,
                'status_code' => '301',
                'from' => '/enmv-1-8af8-220-0-24-A2E4/',
                'to' => '/enmv-1-8e8-220-0-24-a2e4/',
                'created_at' => '2019-01-22 09:55:28',
                'updated_at' => '2019-01-22 09:55:28',
            ),
            451 => 
            array (
                'id' => 1462,
                'status_code' => '301',
                'from' => '/enmv-1-8bb8-220-0-24-A2E4/',
                'to' => '/enmv-1-8f8-220-0-24-a2e4/',
                'created_at' => '2019-01-22 09:55:35',
                'updated_at' => '2019-01-22 09:55:35',
            ),
            452 => 
            array (
                'id' => 1463,
                'status_code' => '301',
                'from' => '/Enkm-3-24-a2b1e1gt-430/',
                'to' => '/enkm-3-24-a2v1e1gt-430/',
                'created_at' => '2019-01-29 04:11:56',
                'updated_at' => '2019-01-29 04:11:56',
            ),
            453 => 
            array (
                'id' => 1464,
                'status_code' => '301',
                'from' => '/Enkm-3-24-a2b1e1gt-422/',
                'to' => '/enkm-3-24-a2v1e1gt-422/',
                'created_at' => '2019-01-29 04:12:09',
                'updated_at' => '2019-01-29 04:12:09',
            ),
            454 => 
            array (
                'id' => 1465,
                'status_code' => '301',
                'from' => '/Enkm-3-24-a2b1e1gt-421/',
                'to' => '/enkm-3-24-a2v1e1gt-421/',
                'created_at' => '2019-01-29 04:12:18',
                'updated_at' => '2019-01-29 04:12:18',
            ),
            455 => 
            array (
                'id' => 1466,
                'status_code' => '301',
                'from' => '/Enkm-3-24-a2b1e1gt-400/',
                'to' => '/enkm-3-24-a2v1e1gt-400/',
                'created_at' => '2019-01-29 04:12:29',
                'updated_at' => '2019-01-29 04:12:29',
            ),
            456 => 
            array (
                'id' => 1467,
                'status_code' => '301',
                'from' => '/Enkm-3-24-a2b1e1gt-000/',
                'to' => '/enkm-3-24-a2v1e1gt-000/',
                'created_at' => '2019-01-29 04:12:39',
                'updated_at' => '2019-01-29 04:12:39',
            ),
            457 => 
            array (
                'id' => 1468,
                'status_code' => '301',
                'from' => '/Enkm-3-24-a2b1e1g-000/',
                'to' => '/enkm-3-24-a2v1e1g-000/',
                'created_at' => '2019-01-29 04:12:49',
                'updated_at' => '2019-01-29 04:12:49',
            ),
            458 => 
            array (
                'id' => 1469,
                'status_code' => '301',
                'from' => '/Enkm-3-24-a2b1e1-000/',
                'to' => '/enkm-3-24-a2v1e1-000/',
                'created_at' => '2019-01-29 04:13:01',
                'updated_at' => '2019-01-29 04:13:01',
            ),
            459 => 
            array (
                'id' => 1470,
                'status_code' => '301',
                'from' => '/Enkm-3-220-a2b1e1gt-430/',
                'to' => '/enkm-3-220-a2v1e1gt-430/',
                'created_at' => '2019-01-29 04:13:10',
                'updated_at' => '2019-01-29 04:13:10',
            ),
            460 => 
            array (
                'id' => 1471,
                'status_code' => '301',
                'from' => '/Enkm-3-220-a2b1e1gt-422/',
                'to' => '/enkm-3-220-a2v1e1gt-422/',
                'created_at' => '2019-01-29 04:13:21',
                'updated_at' => '2019-01-29 04:13:21',
            ),
            461 => 
            array (
                'id' => 1472,
                'status_code' => '301',
                'from' => '/Enkm-3-220-a2b1e1gt-421/',
                'to' => '/enkm-3-220-a2v1e1gt-421/',
                'created_at' => '2019-01-29 04:13:32',
                'updated_at' => '2019-01-29 04:13:32',
            ),
            462 => 
            array (
                'id' => 1473,
                'status_code' => '301',
                'from' => '/Enkm-3-220-a2b1e1gt-400/',
                'to' => '/enkm-3-220-a2v1e1gt-400/',
                'created_at' => '2019-01-29 04:13:42',
                'updated_at' => '2019-01-29 04:13:42',
            ),
            463 => 
            array (
                'id' => 1474,
                'status_code' => '301',
                'from' => '/Enkm-3-220-a2b1e1gt-000/',
                'to' => '/enkm-3-220-a2v1e1gt-000/',
                'created_at' => '2019-01-29 04:13:55',
                'updated_at' => '2019-01-29 04:13:55',
            ),
            464 => 
            array (
                'id' => 1475,
                'status_code' => '301',
                'from' => '/Enkm-3-220-a2b1e1g-000/',
                'to' => '/enkm-3-220-a2v1e1g-000/',
                'created_at' => '2019-01-29 04:14:05',
                'updated_at' => '2019-01-29 04:14:05',
            ),
            465 => 
            array (
                'id' => 1476,
                'status_code' => '301',
                'from' => '/Enkm-3-220-a2b1e1-000/',
                'to' => '/enkm-3-220-a2v1e1-000/',
                'created_at' => '2019-01-29 04:14:20',
                'updated_at' => '2019-01-29 04:14:20',
            ),
            466 => 
            array (
                'id' => 1477,
                'status_code' => '301',
                'from' => '/esm-hv100-220-a2e2f2-05s/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:44:42',
                'updated_at' => '2019-01-29 04:44:42',
            ),
            467 => 
            array (
                'id' => 1478,
                'status_code' => '301',
                'from' => '/esm-hv400-220-a2e2f2-05s/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:44:54',
                'updated_at' => '2019-01-29 04:44:54',
            ),
            468 => 
            array (
                'id' => 1479,
                'status_code' => '301',
                'from' => '/esm-hv690-220-a2e2f2-05s/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:45:04',
                'updated_at' => '2019-01-29 04:45:04',
            ),
            469 => 
            array (
                'id' => 1480,
                'status_code' => '301',
                'from' => '/esm-hv100-24-a2e2f2-05s/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:45:15',
                'updated_at' => '2019-01-29 04:45:15',
            ),
            470 => 
            array (
                'id' => 1481,
                'status_code' => '301',
                'from' => '/esm-hv400-24-a2e2f2-05s/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:45:27',
                'updated_at' => '2019-01-29 04:45:27',
            ),
            471 => 
            array (
                'id' => 1482,
                'status_code' => '301',
                'from' => '/esm-hv690-24-a2e2f2-05s/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:45:39',
                'updated_at' => '2019-01-29 04:45:39',
            ),
            472 => 
            array (
                'id' => 1483,
                'status_code' => '301',
                'from' => '/esm-hv100-220-a2e2f2-05a/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:45:49',
                'updated_at' => '2019-01-29 04:45:49',
            ),
            473 => 
            array (
                'id' => 1484,
                'status_code' => '301',
                'from' => '/esm-hv400-220-a2e2f2-05a/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:46:02',
                'updated_at' => '2019-01-29 04:46:02',
            ),
            474 => 
            array (
                'id' => 1485,
                'status_code' => '301',
                'from' => '/esm-hv690-220-a2e2f2-05a/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:46:15',
                'updated_at' => '2019-01-29 04:46:15',
            ),
            475 => 
            array (
                'id' => 1486,
                'status_code' => '301',
                'from' => '/esm-hv100-24-a2e2f2-05a/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:46:23',
                'updated_at' => '2019-01-29 04:46:23',
            ),
            476 => 
            array (
                'id' => 1487,
                'status_code' => '301',
                'from' => '/esm-hv400-24-a2e2f2-05a/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:46:33',
                'updated_at' => '2019-01-29 04:46:33',
            ),
            477 => 
            array (
                'id' => 1488,
                'status_code' => '301',
                'from' => '/esm-hv690-24-a2e2f2-05a/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:46:44',
                'updated_at' => '2019-01-29 04:46:44',
            ),
            478 => 
            array (
                'id' => 1489,
                'status_code' => '301',
                'from' => '/esm-hv100-220-a2e2f2-02s/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:46:54',
                'updated_at' => '2019-01-29 04:46:54',
            ),
            479 => 
            array (
                'id' => 1490,
                'status_code' => '301',
                'from' => '/esm-hv400-220-a2e2f2-02s/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:47:03',
                'updated_at' => '2019-01-29 04:47:03',
            ),
            480 => 
            array (
                'id' => 1491,
                'status_code' => '301',
                'from' => '/esm-hv690-220-a2e2f2-02s/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:47:13',
                'updated_at' => '2019-01-29 04:47:13',
            ),
            481 => 
            array (
                'id' => 1492,
                'status_code' => '301',
                'from' => '/esm-hv100-24-a2e2f2-02s/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:47:22',
                'updated_at' => '2019-01-29 04:47:22',
            ),
            482 => 
            array (
                'id' => 1493,
                'status_code' => '301',
                'from' => '/esm-hv400-24-a2e2f2-02s/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:47:35',
                'updated_at' => '2019-01-29 04:47:35',
            ),
            483 => 
            array (
                'id' => 1494,
                'status_code' => '301',
                'from' => '/esm-hv690-24-a2e2f2-02s/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:47:44',
                'updated_at' => '2019-01-29 04:47:44',
            ),
            484 => 
            array (
                'id' => 1495,
                'status_code' => '301',
                'from' => '/esm-hv100-220-a2e2f2-02a/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:47:55',
                'updated_at' => '2019-01-29 04:47:55',
            ),
            485 => 
            array (
                'id' => 1496,
                'status_code' => '301',
                'from' => '/esm-hv400-220-a2e2f2-02a/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:48:05',
                'updated_at' => '2019-01-29 04:48:05',
            ),
            486 => 
            array (
                'id' => 1497,
                'status_code' => '301',
                'from' => '/esm-hv690-220-a2e2f2-02a/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:48:14',
                'updated_at' => '2019-01-29 04:48:14',
            ),
            487 => 
            array (
                'id' => 1498,
                'status_code' => '301',
                'from' => '/esm-hv100-24-a2e2f2-02a/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:48:24',
                'updated_at' => '2019-01-29 04:48:24',
            ),
            488 => 
            array (
                'id' => 1499,
                'status_code' => '301',
                'from' => '/esm-hv400-24-a2e2f2-02a/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:48:34',
                'updated_at' => '2019-01-29 04:48:34',
            ),
            489 => 
            array (
                'id' => 1500,
                'status_code' => '301',
                'from' => '/esm-hv690-24-a2e2f2-02a/',
                'to' => '/category/Elektroizmeritelnye-pribory/izmeritelnye-preobrazovateli/esm/',
                'created_at' => '2019-01-29 04:48:44',
                'updated_at' => '2019-01-29 04:48:44',
            ),
            490 => 
            array (
                'id' => 1501,
                'status_code' => '301',
                'from' => '/Enks-2-1-1-1/',
                'to' => '/enks-2-1-1-1-a2b2e1/',
                'created_at' => '2019-01-29 09:50:13',
                'updated_at' => '2019-01-29 09:50:13',
            ),
            491 => 
            array (
                'id' => 1502,
                'status_code' => '301',
                'from' => '/Enks-2-2-1-1/',
                'to' => '/enks-2-2-1-1-a2b2e1/',
                'created_at' => '2019-01-29 09:50:22',
                'updated_at' => '2019-01-29 09:50:22',
            ),
            492 => 
            array (
                'id' => 1503,
                'status_code' => '301',
                'from' => '/category/Elektroizmeritelnye-pribory/ampermetry-voltmetry/pointing/',
                'to' => '/category/Elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-01-31 04:39:36',
                'updated_at' => '2019-01-31 04:39:36',
            ),
            493 => 
            array (
                'id' => 1504,
                'status_code' => '301',
                'from' => '/category/Elektroizmeritelnye-pribory/ampermetry-voltmetry/digital/',
                'to' => '/category/Elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-01-31 04:39:48',
                'updated_at' => '2019-01-31 04:39:48',
            ),
            494 => 
            array (
                'id' => 1505,
                'status_code' => '301',
                'from' => '/category/Elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/digital/',
                'to' => '/category/Elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-01-31 04:39:59',
                'updated_at' => '2019-01-31 04:39:59',
            ),
            495 => 
            array (
                'id' => 1506,
                'status_code' => '301',
                'from' => '/category/Elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/pointing/',
                'to' => '/category/Elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-01-31 04:40:11',
                'updated_at' => '2019-01-31 04:40:11',
            ),
            496 => 
            array (
                'id' => 1507,
                'status_code' => '301',
                'from' => '/category/accessories19/Oborudovaniya-kontrolya-mikroklimatom/panel-ventilyatsii/',
                'to' => '/category/accessories19/ventilation/',
                'created_at' => '2019-01-31 05:46:52',
                'updated_at' => '2019-01-31 05:46:52',
            ),
            497 => 
            array (
                'id' => 1508,
                'status_code' => '301',
                'from' => '/category/accessories19/Oborudovaniya-kontrolya-mikroklimatom/',
                'to' => '/category/accessories19/ventilation/',
                'created_at' => '2019-01-31 05:47:10',
                'updated_at' => '2019-01-31 05:47:10',
            ),
            498 => 
            array (
                'id' => 1509,
                'status_code' => '301',
                'from' => '/category/accessories19/Oborudovaniya-kontrolya-mikroklimatom/tsifrovoy-termostat-19/',
                'to' => '/category/cabinets19/accessories/thermostat/',
                'created_at' => '2019-01-31 05:47:43',
                'updated_at' => '2019-07-16 15:54:40',
            ),
            499 => 
            array (
                'id' => 1510,
                'status_code' => '301',
                'from' => '/category/accessories19/Oborudovaniya-kontrolya-mikroklimatom/obogrevatel-19/',
                'to' => '/category/accessories19/heating/',
                'created_at' => '2019-01-31 05:48:05',
                'updated_at' => '2019-01-31 05:48:05',
            ),
        ));
        \DB::table('redirects')->insert(array (
            0 => 
            array (
                'id' => 1513,
                'status_code' => '301',
                'from' => '/up-2/',
                'to' => '/category/Elektroizmeritelnye-pribory/logometry/',
                'created_at' => '2019-02-06 04:25:18',
                'updated_at' => '2019-02-06 04:25:18',
            ),
            1 => 
            array (
                'id' => 1514,
                'status_code' => '301',
                'from' => '/up-23/',
                'to' => '/category/Elektroizmeritelnye-pribory/logometry/',
                'created_at' => '2019-02-06 04:25:27',
                'updated_at' => '2019-02-06 04:25:27',
            ),
            2 => 
            array (
                'id' => 1515,
                'status_code' => '301',
                'from' => '/up-25/',
                'to' => '/category/Elektroizmeritelnye-pribory/logometry/',
                'created_at' => '2019-02-06 04:25:38',
                'updated_at' => '2019-02-06 04:25:38',
            ),
            3 => 
            array (
                'id' => 1516,
                'status_code' => '301',
                'from' => '/up-31/',
                'to' => '/category/Elektroizmeritelnye-pribory/logometry/',
                'created_at' => '2019-02-06 04:25:50',
                'updated_at' => '2019-02-06 04:25:50',
            ),
            4 => 
            array (
                'id' => 1517,
                'status_code' => '301',
                'from' => '/up-100/',
                'to' => '/category/Elektroizmeritelnye-pribory/logometry/',
                'created_at' => '2019-02-06 04:26:04',
                'updated_at' => '2019-02-06 04:26:04',
            ),
            5 => 
            array (
                'id' => 1518,
                'status_code' => '301',
                'from' => '/up-200/',
                'to' => '/category/Elektroizmeritelnye-pribory/logometry/',
                'created_at' => '2019-02-06 04:26:15',
                'updated_at' => '2019-02-06 04:26:15',
            ),
            6 => 
            array (
                'id' => 1519,
                'status_code' => '301',
                'from' => '/dp-2/',
                'to' => '/category/Elektroizmeritelnye-pribory/logometry/',
                'created_at' => '2019-02-06 04:26:25',
                'updated_at' => '2019-02-06 04:26:25',
            ),
            7 => 
            array (
                'id' => 1520,
                'status_code' => '301',
                'from' => '/dp-3/',
                'to' => '/category/Elektroizmeritelnye-pribory/logometry/',
                'created_at' => '2019-02-06 04:26:37',
                'updated_at' => '2019-02-06 04:26:37',
            ),
            8 => 
            array (
                'id' => 1521,
                'status_code' => '301',
                'from' => '/dp-3-u-tp/',
                'to' => '/category/Elektroizmeritelnye-pribory/logometry/',
                'created_at' => '2019-02-06 04:26:50',
                'updated_at' => '2019-02-06 04:26:50',
            ),
            9 => 
            array (
                'id' => 1522,
                'status_code' => '301',
                'from' => '/dp-4/',
                'to' => '/category/Elektroizmeritelnye-pribory/logometry/',
                'created_at' => '2019-02-06 04:27:01',
                'updated_at' => '2019-02-06 04:27:01',
            ),
            10 => 
            array (
                'id' => 1523,
                'status_code' => '301',
                'from' => '/dp-4-u-tp/',
                'to' => '/category/Elektroizmeritelnye-pribory/logometry/',
                'created_at' => '2019-02-06 04:27:11',
                'updated_at' => '2019-02-06 04:27:11',
            ),
            11 => 
            array (
                'id' => 1524,
                'status_code' => '301',
                'from' => '/dp-5/',
                'to' => '/category/Elektroizmeritelnye-pribory/logometry/',
                'created_at' => '2019-02-06 04:27:21',
                'updated_at' => '2019-02-06 04:27:21',
            ),
            12 => 
            array (
                'id' => 1525,
                'status_code' => '301',
                'from' => '/ikz-b1/',
                'to' => '/category/oborudovanie-vl/',
                'created_at' => '2019-02-06 04:46:02',
                'updated_at' => '2019-02-06 04:46:02',
            ),
            13 => 
            array (
                'id' => 1526,
                'status_code' => '301',
                'from' => '/ikz-b21/',
                'to' => '/category/oborudovanie-vl/',
                'created_at' => '2019-02-06 04:46:25',
                'updated_at' => '2019-02-06 04:46:25',
            ),
            14 => 
            array (
                'id' => 1527,
                'status_code' => '301',
                'from' => '/ikz-b21m/',
                'to' => '/category/oborudovanie-vl/',
                'created_at' => '2019-02-06 04:46:43',
                'updated_at' => '2019-02-06 04:46:43',
            ),
            15 => 
            array (
                'id' => 1528,
                'status_code' => '301',
                'from' => '/ikz-b23/',
                'to' => '/category/oborudovanie-vl/',
                'created_at' => '2019-02-06 04:47:27',
                'updated_at' => '2019-02-06 04:47:27',
            ),
            16 => 
            array (
                'id' => 1529,
                'status_code' => '301',
                'from' => '/ikz-b23m/',
                'to' => '/category/oborudovanie-vl/',
                'created_at' => '2019-02-06 04:47:40',
                'updated_at' => '2019-02-06 04:47:40',
            ),
            17 => 
            array (
                'id' => 1530,
                'status_code' => '301',
                'from' => '/ikz-b31/',
                'to' => '/category/oborudovanie-vl/',
                'created_at' => '2019-02-06 04:47:59',
                'updated_at' => '2019-02-06 04:47:59',
            ),
            18 => 
            array (
                'id' => 1531,
                'status_code' => '301',
                'from' => '/ikz-b31-b3/',
                'to' => '/category/oborudovanie-vl/',
                'created_at' => '2019-02-06 04:48:10',
                'updated_at' => '2019-02-06 04:48:10',
            ),
            19 => 
            array (
                'id' => 1532,
                'status_code' => '301',
                'from' => '/ikz-b33/',
                'to' => '/category/oborudovanie-vl/',
                'created_at' => '2019-02-06 04:48:21',
                'updated_at' => '2019-02-06 04:48:21',
            ),
            20 => 
            array (
                'id' => 1533,
                'status_code' => '301',
                'from' => '/ikz-b33-mr3/',
                'to' => '/category/oborudovanie-vl/',
                'created_at' => '2019-02-06 04:48:32',
                'updated_at' => '2019-02-06 04:48:32',
            ),
            21 => 
            array (
                'id' => 1534,
                'status_code' => '301',
                'from' => '/ikz-b34/',
                'to' => '/category/oborudovanie-vl/',
                'created_at' => '2019-02-06 04:48:43',
                'updated_at' => '2019-02-06 04:48:43',
            ),
            22 => 
            array (
                'id' => 1535,
                'status_code' => '301',
                'from' => '/ikz-b34-mr3/',
                'to' => '/category/oborudovanie-vl/',
                'created_at' => '2019-02-06 04:48:55',
                'updated_at' => '2019-02-06 04:48:55',
            ),
            23 => 
            array (
                'id' => 1536,
                'status_code' => '301',
                'from' => '/ppi-2/',
                'to' => '/category/oborudovanie-vl/',
                'created_at' => '2019-02-06 04:49:06',
                'updated_at' => '2019-02-06 04:49:06',
            ),
            24 => 
            array (
                'id' => 1537,
                'status_code' => '302',
                'from' => '/category/oborudovanie-vl/short_circuit_indicator/',
                'to' => '/category/oborudovanie-vl/',
                'created_at' => '2019-02-06 04:49:21',
                'updated_at' => '2019-02-06 04:49:21',
            ),
            25 => 
            array (
                'id' => 1538,
                'status_code' => '301',
                'from' => '/brand/antrax/',
                'to' => '/about/brands/',
                'created_at' => '2019-02-06 04:50:06',
                'updated_at' => '2019-02-06 04:50:06',
            ),
            26 => 
            array (
                'id' => 1539,
                'status_code' => '301',
                'from' => '/category/accessories19/brackets/',
                'to' => '/category/cabinets19/brackets/',
                'created_at' => '2019-03-21 08:53:00',
                'updated_at' => '2019-03-21 08:53:00',
            ),
            27 => 
            array (
                'id' => 1540,
                'status_code' => '301',
                'from' => '/U-CAB-COVER-3U-Kryshka-3U/',
                'to' => '/u-cab-cover-3-u/',
                'created_at' => '2019-03-21 10:56:27',
                'updated_at' => '2019-03-21 10:56:27',
            ),
            28 => 
            array (
                'id' => 1541,
                'status_code' => '301',
                'from' => '/U-CL-C-Komplekt-krepleniya-DIN/',
                'to' => '/u-cl-d/',
                'created_at' => '2019-03-21 10:57:39',
                'updated_at' => '2019-03-21 10:57:39',
            ),
            29 => 
            array (
                'id' => 1542,
                'status_code' => '301',
                'from' => '/category/accessories19/cable-route/',
                'to' => '/category/cabinets19/accessories/',
                'created_at' => '2019-03-21 11:00:46',
                'updated_at' => '2019-03-21 11:00:46',
            ),
            30 => 
            array (
                'id' => 1543,
                'status_code' => '301',
                'from' => '/category/accessories19/u-energy-box/',
                'to' => '/category/cabinets19/accessories/u-box/',
                'created_at' => '2019-03-21 11:01:03',
                'updated_at' => '2019-03-21 11:01:03',
            ),
            31 => 
            array (
                'id' => 1544,
                'status_code' => '301',
                'from' => '/category/accessories19/u-energy-box/moduli/',
                'to' => '/category/cabinets19/accessories/u-box/',
                'created_at' => '2019-03-21 11:01:13',
                'updated_at' => '2019-03-21 11:01:13',
            ),
            32 => 
            array (
                'id' => 1545,
                'status_code' => '301',
                'from' => '/category/accessories19/u-energy-box/zaglushki/',
                'to' => '/category/cabinets19/accessories/u-box/',
                'created_at' => '2019-03-21 11:01:24',
                'updated_at' => '2019-03-21 11:01:24',
            ),
            33 => 
            array (
                'id' => 1546,
                'status_code' => '301',
                'from' => '/category/accessories19/u-energy-box/kryshki/',
                'to' => '/category/cabinets19/accessories/u-box/',
                'created_at' => '2019-03-21 11:01:36',
                'updated_at' => '2019-03-21 11:01:36',
            ),
            34 => 
            array (
                'id' => 1547,
                'status_code' => '301',
                'from' => '/category/accessories19/u-energy-box/komplekty/',
                'to' => '/category/cabinets19/accessories/u-box/',
                'created_at' => '2019-03-21 11:01:46',
                'updated_at' => '2019-03-21 11:01:46',
            ),
            35 => 
            array (
                'id' => 1548,
                'status_code' => '301',
                'from' => '/Kabel-naya-trassa/',
                'to' => '/category/cabinets19/accessories/',
                'created_at' => '2019-03-21 11:02:14',
                'updated_at' => '2019-03-21 11:02:14',
            ),
            36 => 
            array (
                'id' => 1549,
                'status_code' => '301',
                'from' => '/Raspredelitel-naya-panel-3U-19-teleskopicheskaya/',
                'to' => '/category/cabinets19/accessories/distribution-panel/',
                'created_at' => '2019-03-21 11:55:27',
                'updated_at' => '2019-03-21 11:55:27',
            ),
            37 => 
            array (
                'id' => 1550,
                'status_code' => '301',
                'from' => '/category/accessories19/switchboard-panel/',
                'to' => '/category/cabinets19/accessories/distribution-panel/',
                'created_at' => '2019-03-21 11:56:52',
                'updated_at' => '2019-03-21 11:56:52',
            ),
            38 => 
            array (
                'id' => 1551,
                'status_code' => '301',
                'from' => '/Raspredelitelnaya-panel-3U-otkrytaya/',
                'to' => '/category/cabinets19/accessories/distribution-panel/',
                'created_at' => '2019-03-21 11:58:03',
                'updated_at' => '2019-03-21 11:58:03',
            ),
            39 => 
            array (
                'id' => 1552,
                'status_code' => '301',
                'from' => '/Raspredelitelnaya-panel-3U-19-chernaya/',
                'to' => '/distribution-panel-19-3u-ral9005/',
                'created_at' => '2019-03-21 11:58:24',
                'updated_at' => '2019-03-21 11:58:24',
            ),
            40 => 
            array (
                'id' => 1553,
                'status_code' => '301',
                'from' => '/Raspredelitel-naya-panel-6U-19-chernaya/',
                'to' => '/distribution-panel-19-6u-ral9005/',
                'created_at' => '2019-03-21 11:58:50',
                'updated_at' => '2019-03-21 11:58:50',
            ),
            41 => 
            array (
                'id' => 1554,
                'status_code' => '301',
                'from' => '/category/accessories19/cross-dlya-plintov/',
                'to' => '/category/cabinets19/accessories/switching/',
                'created_at' => '2019-03-21 11:59:48',
                'updated_at' => '2019-03-21 11:59:48',
            ),
            42 => 
            array (
                'id' => 1555,
                'status_code' => '301',
                'from' => '/Panel-venilyacii-FP-2301/',
                'to' => '/category/cabinets19/accessories/ventilation/',
                'created_at' => '2019-03-21 12:00:38',
                'updated_at' => '2019-03-21 12:00:38',
            ),
            43 => 
            array (
                'id' => 1556,
                'status_code' => '301',
                'from' => '/Panel-venilyacii-FP-2401/',
                'to' => '/category/cabinets19/accessories/ventilation/',
                'created_at' => '2019-03-21 12:00:48',
                'updated_at' => '2019-03-21 12:00:48',
            ),
            44 => 
            array (
                'id' => 1557,
                'status_code' => '301',
                'from' => '/Panel-venilyacii-FP-2601/',
                'to' => '/category/cabinets19/accessories/ventilation/',
                'created_at' => '2019-03-21 12:00:57',
                'updated_at' => '2019-03-21 12:00:57',
            ),
            45 => 
            array (
                'id' => 1558,
                'status_code' => '301',
                'from' => '/category/accessories19/ventilation/',
                'to' => '/category/cabinets19/accessories/ventilation/',
                'created_at' => '2019-03-21 12:01:20',
                'updated_at' => '2019-03-21 12:01:20',
            ),
            46 => 
            array (
                'id' => 1559,
                'status_code' => '301',
                'from' => '/hp-1201-obogrevatel-19/',
                'to' => '/hp-1201-19-ral9005/',
                'created_at' => '2019-03-21 12:01:35',
                'updated_at' => '2019-03-21 12:01:35',
            ),
            47 => 
            array (
                'id' => 1560,
                'status_code' => '301',
                'from' => '/category/accessories19/heating/',
                'to' => '/category/cabinets19/accessories/heating/',
                'created_at' => '2019-03-21 12:02:12',
                'updated_at' => '2019-03-21 12:02:12',
            ),
            48 => 
            array (
                'id' => 1561,
                'status_code' => '301',
                'from' => '/category/accessories19/shelf-19/',
                'to' => '/category/cabinets19/accessories/shelves/',
                'created_at' => '2019-03-21 12:03:24',
                'updated_at' => '2019-03-21 12:03:24',
            ),
            49 => 
            array (
                'id' => 1562,
                'status_code' => '301',
                'from' => '/category/accessories19/case-19/',
                'to' => '/category/cabinets19/accessories/cases/',
                'created_at' => '2019-03-21 12:03:44',
                'updated_at' => '2019-03-21 12:03:44',
            ),
            50 => 
            array (
                'id' => 1563,
                'status_code' => '301',
                'from' => '/Yashchik-19-4U/',
                'to' => '/case19-4u-ral9005/',
                'created_at' => '2019-03-21 12:05:47',
                'updated_at' => '2019-03-21 12:05:47',
            ),
            51 => 
            array (
                'id' => 1564,
                'status_code' => '301',
                'from' => '/Yashchik-vydvizhnoy-19-2U/',
                'to' => '/case19-4u-sliding-ral9005/',
                'created_at' => '2019-03-21 12:05:58',
                'updated_at' => '2019-03-21 12:05:58',
            ),
            52 => 
            array (
                'id' => 1565,
                'status_code' => '301',
                'from' => '/Polka-19-1U-G-200mm-/',
                'to' => '/shelf-19-1u-200-ral9005/',
                'created_at' => '2019-03-21 12:07:18',
                'updated_at' => '2019-03-21 12:07:18',
            ),
            53 => 
            array (
                'id' => 1566,
                'status_code' => '301',
                'from' => '/Polka-19-1U-G-300mm-/',
                'to' => '/shelf-19-1u-300-ral9005/',
                'created_at' => '2019-03-21 12:07:27',
                'updated_at' => '2019-03-21 12:07:27',
            ),
            54 => 
            array (
                'id' => 1567,
                'status_code' => '301',
                'from' => '/Polka-19-2U-G-450mm-/',
                'to' => '/shelf-19-2u-450-ral9005/',
                'created_at' => '2019-03-21 12:07:37',
                'updated_at' => '2019-03-21 12:07:37',
            ),
            55 => 
            array (
                'id' => 1568,
                'status_code' => '301',
                'from' => '/Polka-19-s-perforatsiey-1U-G-200mm/',
                'to' => '/shelf-19-1u-200-ral9005_perforated/',
                'created_at' => '2019-03-21 12:07:45',
                'updated_at' => '2019-03-21 12:07:45',
            ),
            56 => 
            array (
                'id' => 1569,
                'status_code' => '301',
                'from' => '/Polka-19-s-perforatsiey-1U-G-300mm-/',
                'to' => '/shelf-19-1u-300-ral9005_perforated/',
                'created_at' => '2019-03-21 12:07:53',
                'updated_at' => '2019-03-21 12:07:53',
            ),
            57 => 
            array (
                'id' => 1570,
                'status_code' => '301',
                'from' => '/Polka-19-s-perforatsiey-2U-G-450mm-/',
                'to' => '/shelf-19-2u-450-ral9005_perforated/',
                'created_at' => '2019-03-21 12:08:02',
                'updated_at' => '2019-03-21 12:08:02',
            ),
            58 => 
            array (
                'id' => 1572,
                'status_code' => '301',
                'from' => '/cable-ez/',
                'to' => '/cable-ez_430/',
                'created_at' => '2019-03-21 12:11:23',
                'updated_at' => '2019-03-21 12:11:23',
            ),
            59 => 
            array (
                'id' => 1573,
                'status_code' => '301',
                'from' => '/din-plank/',
                'to' => '/din-plank_430/',
                'created_at' => '2019-03-21 12:11:29',
                'updated_at' => '2019-03-21 12:11:29',
            ),
            60 => 
            array (
                'id' => 1574,
                'status_code' => '301',
                'from' => '/kross-medniy-200/',
                'to' => '/copper_cross/',
                'created_at' => '2019-03-25 11:18:27',
                'updated_at' => '2019-03-25 11:18:27',
            ),
            61 => 
            array (
                'id' => 1575,
                'status_code' => '301',
                'from' => '/distribution-panel-19-3u-open-ral7035/',
                'to' => '/category/cabinets19/accessories/distribution-panel/',
                'created_at' => '2019-03-29 05:17:02',
                'updated_at' => '2019-03-29 05:17:02',
            ),
            62 => 
            array (
                'id' => 1576,
                'status_code' => '301',
                'from' => '/om-11.00/',
                'to' => '/om-11-00/',
                'created_at' => '2019-04-25 08:35:30',
                'updated_at' => '2019-04-25 08:35:30',
            ),
            63 => 
            array (
                'id' => 1577,
                'status_code' => '301',
                'from' => '/om-11.01/',
                'to' => '/om-11-01/',
                'created_at' => '2019-04-25 08:35:41',
                'updated_at' => '2019-04-25 08:35:41',
            ),
            64 => 
            array (
                'id' => 1578,
                'status_code' => '301',
                'from' => '/om-11.02/',
                'to' => '/om-11-02/',
                'created_at' => '2019-04-25 08:35:52',
                'updated_at' => '2019-04-25 08:35:52',
            ),
            65 => 
            array (
                'id' => 1579,
                'status_code' => '301',
                'from' => '/om-11.03/',
                'to' => '/om-11-03/',
                'created_at' => '2019-04-25 08:36:04',
                'updated_at' => '2019-04-25 08:36:04',
            ),
            66 => 
            array (
                'id' => 1580,
                'status_code' => '301',
                'from' => '/om-11.04/',
                'to' => '/om-11-04/',
                'created_at' => '2019-04-25 08:36:13',
                'updated_at' => '2019-04-25 08:36:13',
            ),
            67 => 
            array (
                'id' => 1581,
                'status_code' => '301',
                'from' => '/om-11.05/',
                'to' => '/om-11-05/',
                'created_at' => '2019-04-25 08:36:22',
                'updated_at' => '2019-04-25 08:36:22',
            ),
            68 => 
            array (
                'id' => 1582,
                'status_code' => '301',
                'from' => '/om-11.06/',
                'to' => '/om-11-06/',
                'created_at' => '2019-04-25 08:36:31',
                'updated_at' => '2019-04-25 08:36:31',
            ),
            69 => 
            array (
                'id' => 1583,
                'status_code' => '301',
                'from' => '/om-11.07/',
                'to' => '/om-11-07/',
                'created_at' => '2019-04-25 08:36:39',
                'updated_at' => '2019-04-25 08:36:39',
            ),
            70 => 
            array (
                'id' => 1584,
                'status_code' => '301',
                'from' => '/om-11.08/',
                'to' => '/om-11-08/',
                'created_at' => '2019-04-25 08:36:48',
                'updated_at' => '2019-04-25 08:36:48',
            ),
            71 => 
            array (
                'id' => 1585,
                'status_code' => '301',
                'from' => '/om-11.09/',
                'to' => '/om-11-09/',
                'created_at' => '2019-04-25 08:36:58',
                'updated_at' => '2019-04-25 08:36:58',
            ),
            72 => 
            array (
                'id' => 1586,
                'status_code' => '301',
                'from' => '/om-11.10/',
                'to' => '/om-11-10/',
                'created_at' => '2019-04-25 08:37:09',
                'updated_at' => '2019-04-25 08:37:09',
            ),
            73 => 
            array (
                'id' => 1587,
                'status_code' => '301',
                'from' => '/om-11.11/',
                'to' => '/om-11-11/',
                'created_at' => '2019-04-25 08:37:18',
                'updated_at' => '2019-04-25 08:37:18',
            ),
            74 => 
            array (
                'id' => 1588,
                'status_code' => '301',
                'from' => '/om-11.12/',
                'to' => '/om-11-12/',
                'created_at' => '2019-04-25 08:37:26',
                'updated_at' => '2019-04-25 08:37:26',
            ),
            75 => 
            array (
                'id' => 1589,
                'status_code' => '301',
                'from' => '/om-11.13/',
                'to' => '/om-11-13/',
                'created_at' => '2019-04-25 08:37:34',
                'updated_at' => '2019-04-25 08:37:34',
            ),
            76 => 
            array (
                'id' => 1590,
                'status_code' => '301',
                'from' => '/om-11.14/',
                'to' => '/om-11-14/',
                'created_at' => '2019-04-25 08:37:43',
                'updated_at' => '2019-04-25 08:37:43',
            ),
            77 => 
            array (
                'id' => 1591,
                'status_code' => '301',
                'from' => '/om-11.15/',
                'to' => '/om-11-15/',
                'created_at' => '2019-04-25 08:37:51',
                'updated_at' => '2019-04-25 08:37:51',
            ),
            78 => 
            array (
                'id' => 1592,
                'status_code' => '301',
                'from' => '/mir-pt-02.00/',
                'to' => '/mir-pt-02-00/',
                'created_at' => '2019-04-25 08:38:00',
                'updated_at' => '2019-04-25 08:38:00',
            ),
            79 => 
            array (
                'id' => 1593,
                'status_code' => '301',
                'from' => '/mir-pt-02.01/',
                'to' => '/mir-pt-02-01/',
                'created_at' => '2019-04-25 08:38:08',
                'updated_at' => '2019-04-25 08:38:08',
            ),
            80 => 
            array (
                'id' => 1594,
                'status_code' => '301',
                'from' => '/mir-pt-02.02/',
                'to' => '/mir-pt-02-02/',
                'created_at' => '2019-04-25 08:38:17',
                'updated_at' => '2019-04-25 08:38:17',
            ),
            81 => 
            array (
                'id' => 1595,
                'status_code' => '301',
                'from' => '/mir-pt-02.03/',
                'to' => '/mir-pt-02-03/',
                'created_at' => '2019-04-25 08:38:25',
                'updated_at' => '2019-04-25 08:38:25',
            ),
            82 => 
            array (
                'id' => 1596,
                'status_code' => '301',
                'from' => '/mir-pt-02.04/',
                'to' => '/mir-pt-02-04/',
                'created_at' => '2019-04-25 08:38:33',
                'updated_at' => '2019-04-25 08:38:33',
            ),
            83 => 
            array (
                'id' => 1597,
                'status_code' => '301',
                'from' => '/mir-pt-23.000/',
                'to' => '/mir-pt-23-000/',
                'created_at' => '2019-04-25 08:38:41',
                'updated_at' => '2019-04-25 08:38:41',
            ),
            84 => 
            array (
                'id' => 1598,
                'status_code' => '301',
                'from' => '/mir-pt-23.002/',
                'to' => '/mir-pt-23-002/',
                'created_at' => '2019-04-25 08:38:55',
                'updated_at' => '2019-04-25 08:38:55',
            ),
            85 => 
            array (
                'id' => 1599,
                'status_code' => '301',
                'from' => '/mir-pt-23.004/',
                'to' => '/mir-pt-23-004/',
                'created_at' => '2019-04-25 08:39:03',
                'updated_at' => '2019-04-25 08:39:03',
            ),
            86 => 
            array (
                'id' => 1600,
                'status_code' => '301',
                'from' => '/mir-pt-23.006/',
                'to' => '/mir-pt-23-006/',
                'created_at' => '2019-04-25 08:39:11',
                'updated_at' => '2019-04-25 08:39:11',
            ),
            87 => 
            array (
                'id' => 1601,
                'status_code' => '301',
                'from' => '/mir-pt-23.008/',
                'to' => '/mir-pt-23-008/',
                'created_at' => '2019-04-25 08:39:19',
                'updated_at' => '2019-04-25 08:39:19',
            ),
            88 => 
            array (
                'id' => 1602,
                'status_code' => '301',
                'from' => '/mir-pt-23.010/',
                'to' => '/mir-pt-23-010/',
                'created_at' => '2019-04-25 08:39:29',
                'updated_at' => '2019-04-25 08:39:29',
            ),
            89 => 
            array (
                'id' => 1603,
                'status_code' => '301',
                'from' => '/mir-pt-23.012/',
                'to' => '/mir-pt-23-012/',
                'created_at' => '2019-04-25 08:39:37',
                'updated_at' => '2019-04-25 08:39:37',
            ),
            90 => 
            array (
                'id' => 1604,
                'status_code' => '301',
                'from' => '/mir-pt-23.014/',
                'to' => '/mir-pt-23-014/',
                'created_at' => '2019-04-25 08:39:45',
                'updated_at' => '2019-04-25 08:39:45',
            ),
            91 => 
            array (
                'id' => 1605,
                'status_code' => '301',
                'from' => '/mir-pt-23.016/',
                'to' => '/mir-pt-23-016/',
                'created_at' => '2019-04-25 08:39:53',
                'updated_at' => '2019-04-25 08:39:53',
            ),
            92 => 
            array (
                'id' => 1606,
                'status_code' => '301',
                'from' => '/mir-pt-23.018/',
                'to' => '/mir-pt-23-018/',
                'created_at' => '2019-04-25 08:40:02',
                'updated_at' => '2019-04-25 08:40:02',
            ),
            93 => 
            array (
                'id' => 1607,
                'status_code' => '301',
                'from' => '/mir-pt-23.001/',
                'to' => '/mir-pt-23-001/',
                'created_at' => '2019-04-25 08:40:11',
                'updated_at' => '2019-04-25 08:40:11',
            ),
            94 => 
            array (
                'id' => 1608,
                'status_code' => '301',
                'from' => '/mir-pt-23.003/',
                'to' => '/mir-pt-23-003/',
                'created_at' => '2019-04-25 08:40:19',
                'updated_at' => '2019-04-25 08:40:19',
            ),
            95 => 
            array (
                'id' => 1609,
                'status_code' => '301',
                'from' => '/mir-pt-23.005/',
                'to' => '/mir-pt-23-005/',
                'created_at' => '2019-04-25 08:40:29',
                'updated_at' => '2019-04-25 08:40:29',
            ),
            96 => 
            array (
                'id' => 1610,
                'status_code' => '301',
                'from' => '/mir-pt-23.007/',
                'to' => '/mir-pt-23-007/',
                'created_at' => '2019-04-25 08:40:38',
                'updated_at' => '2019-04-25 08:40:38',
            ),
            97 => 
            array (
                'id' => 1611,
                'status_code' => '301',
                'from' => '/mir-pt-23.009/',
                'to' => '/mir-pt-23-009/',
                'created_at' => '2019-04-25 08:40:50',
                'updated_at' => '2019-04-25 08:40:50',
            ),
            98 => 
            array (
                'id' => 1612,
                'status_code' => '301',
                'from' => '/mir-pt-23.011/',
                'to' => '/mir-pt-23-011/',
                'created_at' => '2019-04-25 08:40:58',
                'updated_at' => '2019-04-25 08:40:58',
            ),
            99 => 
            array (
                'id' => 1613,
                'status_code' => '301',
                'from' => '/mir-pt-23.013/',
                'to' => '/mir-pt-23-013/',
                'created_at' => '2019-04-25 08:41:06',
                'updated_at' => '2019-04-25 08:41:06',
            ),
            100 => 
            array (
                'id' => 1614,
                'status_code' => '301',
                'from' => '/mir-pt-23.015/',
                'to' => '/mir-pt-23-015/',
                'created_at' => '2019-04-25 08:41:14',
                'updated_at' => '2019-04-25 08:41:14',
            ),
            101 => 
            array (
                'id' => 1615,
                'status_code' => '301',
                'from' => '/mir-pt-23.017/',
                'to' => '/mir-pt-23-017/',
                'created_at' => '2019-04-25 08:41:21',
                'updated_at' => '2019-04-25 08:41:21',
            ),
            102 => 
            array (
                'id' => 1616,
                'status_code' => '301',
                'from' => '/mir-pt-23.019/',
                'to' => '/mir-pt-23-019/',
                'created_at' => '2019-04-25 08:41:29',
                'updated_at' => '2019-04-25 08:41:29',
            ),
            103 => 
            array (
                'id' => 1617,
                'status_code' => '301',
                'from' => '/mir-pt-23.080/',
                'to' => '/mir-pt-23-080/',
                'created_at' => '2019-04-25 08:41:38',
                'updated_at' => '2019-04-25 08:41:38',
            ),
            104 => 
            array (
                'id' => 1618,
                'status_code' => '301',
                'from' => '/mir-pt-23.081/',
                'to' => '/mir-pt-23-081/',
                'created_at' => '2019-04-25 08:41:48',
                'updated_at' => '2019-04-25 08:41:48',
            ),
            105 => 
            array (
                'id' => 1619,
                'status_code' => '301',
                'from' => '/mir-pt-23.082/',
                'to' => '/mir-pt-23-082/',
                'created_at' => '2019-04-25 08:41:57',
                'updated_at' => '2019-04-25 08:41:57',
            ),
            106 => 
            array (
                'id' => 1620,
                'status_code' => '301',
                'from' => '/mir-pt-23.083/',
                'to' => '/mir-pt-23-083/',
                'created_at' => '2019-04-25 08:42:06',
                'updated_at' => '2019-04-25 08:42:06',
            ),
            107 => 
            array (
                'id' => 1621,
                'status_code' => '301',
                'from' => '/mir-pt-23.084/',
                'to' => '/mir-pt-23-084/',
                'created_at' => '2019-04-25 08:42:16',
                'updated_at' => '2019-04-25 08:42:16',
            ),
            108 => 
            array (
                'id' => 1622,
                'status_code' => '301',
                'from' => '/mir-pt-23.085/',
                'to' => '/mir-pt-23-085/',
                'created_at' => '2019-04-25 08:42:24',
                'updated_at' => '2019-04-25 08:42:24',
            ),
            109 => 
            array (
                'id' => 1623,
                'status_code' => '301',
                'from' => '/mir-pt-23.086/',
                'to' => '/mir-pt-23-086/',
                'created_at' => '2019-04-25 08:42:33',
                'updated_at' => '2019-04-25 08:42:33',
            ),
            110 => 
            array (
                'id' => 1624,
                'status_code' => '301',
                'from' => '/mir-pt-23.087/',
                'to' => '/mir-pt-23-087/',
                'created_at' => '2019-04-25 08:42:42',
                'updated_at' => '2019-04-25 08:42:42',
            ),
            111 => 
            array (
                'id' => 1625,
                'status_code' => '301',
                'from' => '/mir-pt-23.088/',
                'to' => '/mir-pt-23-088/',
                'created_at' => '2019-04-25 08:42:49',
                'updated_at' => '2019-04-25 08:42:49',
            ),
            112 => 
            array (
                'id' => 1626,
                'status_code' => '301',
                'from' => '/mir-pt-23.089/',
                'to' => '/mir-pt-23-089/',
                'created_at' => '2019-04-25 08:42:58',
                'updated_at' => '2019-04-25 08:42:58',
            ),
            113 => 
            array (
                'id' => 1627,
                'status_code' => '301',
                'from' => '/mir-pt-24.000/',
                'to' => '/mir-pt-24-000/',
                'created_at' => '2019-04-25 08:43:07',
                'updated_at' => '2019-04-25 08:43:07',
            ),
            114 => 
            array (
                'id' => 1628,
                'status_code' => '301',
                'from' => '/mir-pt-24.001/',
                'to' => '/mir-pt-24-001/',
                'created_at' => '2019-04-25 08:43:17',
                'updated_at' => '2019-04-25 08:43:17',
            ),
            115 => 
            array (
                'id' => 1629,
                'status_code' => '301',
                'from' => '/mir-pt-24.002/',
                'to' => '/mir-pt-24-002/',
                'created_at' => '2019-04-25 08:43:26',
                'updated_at' => '2019-04-25 08:43:26',
            ),
            116 => 
            array (
                'id' => 1630,
                'status_code' => '301',
                'from' => '/mir-pt-24.003/',
                'to' => '/mir-pt-24-003/',
                'created_at' => '2019-04-25 08:43:34',
                'updated_at' => '2019-04-25 08:43:34',
            ),
            117 => 
            array (
                'id' => 1631,
                'status_code' => '301',
                'from' => '/mir-pt-24.004/',
                'to' => '/mir-pt-24-004/',
                'created_at' => '2019-04-25 08:43:42',
                'updated_at' => '2019-04-25 08:43:42',
            ),
            118 => 
            array (
                'id' => 1632,
                'status_code' => '301',
                'from' => '/mir-pt-24.005/',
                'to' => '/mir-pt-24-005/',
                'created_at' => '2019-04-25 08:43:50',
                'updated_at' => '2019-04-25 08:43:50',
            ),
            119 => 
            array (
                'id' => 1633,
                'status_code' => '301',
                'from' => '/mir-pt-24.006/',
                'to' => '/mir-pt-24-006/',
                'created_at' => '2019-04-25 08:43:58',
                'updated_at' => '2019-04-25 08:43:58',
            ),
            120 => 
            array (
                'id' => 1634,
                'status_code' => '301',
                'from' => '/mir-pt-24.007/',
                'to' => '/mir-pt-24-007/',
                'created_at' => '2019-04-25 08:44:10',
                'updated_at' => '2019-04-25 08:44:10',
            ),
            121 => 
            array (
                'id' => 1635,
                'status_code' => '301',
                'from' => '/mir-pt-26.000/',
                'to' => '/mir-pt-26-000/',
                'created_at' => '2019-04-25 08:44:21',
                'updated_at' => '2019-04-25 08:44:21',
            ),
            122 => 
            array (
                'id' => 1636,
                'status_code' => '301',
                'from' => '/mir-pt-26.001/',
                'to' => '/mir-pt-26-001/',
                'created_at' => '2019-04-25 08:44:29',
                'updated_at' => '2019-04-25 08:44:29',
            ),
            123 => 
            array (
                'id' => 1637,
                'status_code' => '301',
                'from' => '/mir-pt-26.002/',
                'to' => '/mir-pt-26-002/',
                'created_at' => '2019-04-25 08:44:38',
                'updated_at' => '2019-04-25 08:44:38',
            ),
            124 => 
            array (
                'id' => 1638,
                'status_code' => '301',
                'from' => '/mir-pt-26.003/',
                'to' => '/mir-pt-26-003/',
                'created_at' => '2019-04-25 08:44:47',
                'updated_at' => '2019-04-25 08:44:47',
            ),
            125 => 
            array (
                'id' => 1639,
                'status_code' => '301',
                'from' => '/mir-pt-26.004/',
                'to' => '/mir-pt-26-004/',
                'created_at' => '2019-04-25 08:44:56',
                'updated_at' => '2019-04-25 08:44:56',
            ),
            126 => 
            array (
                'id' => 1640,
                'status_code' => '301',
                'from' => '/mir-pt-26.005/',
                'to' => '/mir-pt-26-005/',
                'created_at' => '2019-04-25 08:45:04',
                'updated_at' => '2019-04-25 08:45:04',
            ),
            127 => 
            array (
                'id' => 1641,
                'status_code' => '301',
                'from' => '/mir-pt-26.006/',
                'to' => '/mir-pt-26-006/',
                'created_at' => '2019-04-25 08:45:13',
                'updated_at' => '2019-04-25 08:45:13',
            ),
            128 => 
            array (
                'id' => 1642,
                'status_code' => '301',
                'from' => '/mir-pt-26.007/',
                'to' => '/mir-pt-26-007/',
                'created_at' => '2019-04-25 08:45:25',
                'updated_at' => '2019-04-25 08:45:25',
            ),
            129 => 
            array (
                'id' => 1643,
                'status_code' => '301',
                'from' => '/mir-pt-26.008/',
                'to' => '/mir-pt-26-008/',
                'created_at' => '2019-04-25 08:45:37',
                'updated_at' => '2019-04-25 08:45:37',
            ),
            130 => 
            array (
                'id' => 1644,
                'status_code' => '301',
                'from' => '/mir-pt-26.009/',
                'to' => '/mir-pt-26-009/',
                'created_at' => '2019-04-25 08:45:45',
                'updated_at' => '2019-04-25 08:45:45',
            ),
            131 => 
            array (
                'id' => 1645,
                'status_code' => '301',
                'from' => '/mir-pt-26.010/',
                'to' => '/mir-pt-26-010/',
                'created_at' => '2019-04-25 08:45:52',
                'updated_at' => '2019-04-25 08:45:52',
            ),
            132 => 
            array (
                'id' => 1646,
                'status_code' => '301',
                'from' => '/mir-pt-26.011/',
                'to' => '/mir-pt-26-011/',
                'created_at' => '2019-04-25 08:46:01',
                'updated_at' => '2019-04-25 08:46:01',
            ),
            133 => 
            array (
                'id' => 1647,
                'status_code' => '301',
                'from' => '/mir-pt-26.012/',
                'to' => '/mir-pt-26-012/',
                'created_at' => '2019-04-25 08:46:24',
                'updated_at' => '2019-04-25 08:46:24',
            ),
            134 => 
            array (
                'id' => 1648,
                'status_code' => '301',
                'from' => '/mir-pt-26.013/',
                'to' => '/mir-pt-26-013/',
                'created_at' => '2019-04-25 08:50:04',
                'updated_at' => '2019-04-25 08:50:04',
            ),
            135 => 
            array (
                'id' => 1649,
                'status_code' => '301',
                'from' => '/mir-pt-26.014/',
                'to' => '/mir-pt-26-014/',
                'created_at' => '2019-04-25 08:50:12',
                'updated_at' => '2019-04-25 08:50:12',
            ),
            136 => 
            array (
                'id' => 1650,
                'status_code' => '301',
                'from' => '/mir-pt-26.015/',
                'to' => '/mir-pt-26-015/',
                'created_at' => '2019-04-25 08:50:19',
                'updated_at' => '2019-04-25 08:50:19',
            ),
            137 => 
            array (
                'id' => 1651,
                'status_code' => '301',
                'from' => '/mir-pt-26.016/',
                'to' => '/mir-pt-26-016/',
                'created_at' => '2019-04-25 08:50:27',
                'updated_at' => '2019-04-25 08:50:27',
            ),
            138 => 
            array (
                'id' => 1652,
                'status_code' => '301',
                'from' => '/mir-pt-26.017/',
                'to' => '/mir-pt-26-017/',
                'created_at' => '2019-04-25 08:50:33',
                'updated_at' => '2019-04-25 08:50:33',
            ),
            139 => 
            array (
                'id' => 1653,
                'status_code' => '301',
                'from' => '/mir-pt-26.018/',
                'to' => '/mir-pt-26-018/',
                'created_at' => '2019-04-25 08:50:43',
                'updated_at' => '2019-04-25 08:50:43',
            ),
            140 => 
            array (
                'id' => 1654,
                'status_code' => '301',
                'from' => '/mir-pt-26.019/',
                'to' => '/mir-pt-26-019/',
                'created_at' => '2019-04-25 08:50:50',
                'updated_at' => '2019-04-25 08:50:50',
            ),
            141 => 
            array (
                'id' => 1655,
                'status_code' => '301',
                'from' => '/mir-pt-26.020/',
                'to' => '/mir-pt-26-020/',
                'created_at' => '2019-04-25 08:50:57',
                'updated_at' => '2019-04-25 08:50:57',
            ),
            142 => 
            array (
                'id' => 1656,
                'status_code' => '301',
                'from' => '/mir-pt-26.021/',
                'to' => '/mir-pt-26-021/',
                'created_at' => '2019-04-25 08:51:04',
                'updated_at' => '2019-04-25 08:51:04',
            ),
            143 => 
            array (
                'id' => 1657,
                'status_code' => '301',
                'from' => '/mir-pt-26.022/',
                'to' => '/mir-pt-26-022/',
                'created_at' => '2019-04-25 08:51:12',
                'updated_at' => '2019-04-25 08:51:12',
            ),
            144 => 
            array (
                'id' => 1658,
                'status_code' => '301',
                'from' => '/mir-pt-26.023/',
                'to' => '/mir-pt-26-023/',
                'created_at' => '2019-04-25 08:51:21',
                'updated_at' => '2019-04-25 08:51:21',
            ),
            145 => 
            array (
                'id' => 1659,
                'status_code' => '301',
                'from' => '/mir-pt-26.024/',
                'to' => '/mir-pt-26-024/',
                'created_at' => '2019-04-25 08:51:33',
                'updated_at' => '2019-04-25 08:51:33',
            ),
            146 => 
            array (
                'id' => 1660,
                'status_code' => '301',
                'from' => '/mir-pt-26.025/',
                'to' => '/mir-pt-26-025/',
                'created_at' => '2019-04-25 08:51:43',
                'updated_at' => '2019-04-25 08:51:43',
            ),
            147 => 
            array (
                'id' => 1661,
                'status_code' => '301',
                'from' => '/mir-pt-26.026/',
                'to' => '/mir-pt-26-026/',
                'created_at' => '2019-04-25 08:51:52',
                'updated_at' => '2019-04-25 08:51:52',
            ),
            148 => 
            array (
                'id' => 1662,
                'status_code' => '301',
                'from' => '/mir-pt-26.027/',
                'to' => '/mir-pt-26-027/',
                'created_at' => '2019-04-25 08:52:00',
                'updated_at' => '2019-04-25 08:52:00',
            ),
            149 => 
            array (
                'id' => 1663,
                'status_code' => '301',
                'from' => '/mir-pt-26.028/',
                'to' => '/mir-pt-26-028/',
                'created_at' => '2019-04-25 08:52:08',
                'updated_at' => '2019-04-25 08:52:08',
            ),
            150 => 
            array (
                'id' => 1664,
                'status_code' => '301',
                'from' => '/mir-pt-26.029/',
                'to' => '/mir-pt-26-029/',
                'created_at' => '2019-04-25 08:52:16',
                'updated_at' => '2019-04-25 08:52:16',
            ),
            151 => 
            array (
                'id' => 1665,
                'status_code' => '301',
                'from' => '/mir-pt-26.030/',
                'to' => '/mir-pt-26-030/',
                'created_at' => '2019-04-25 08:52:24',
                'updated_at' => '2019-04-25 08:52:24',
            ),
            152 => 
            array (
                'id' => 1666,
                'status_code' => '301',
                'from' => '/mir-pt-26.031/',
                'to' => '/mir-pt-26-031/',
                'created_at' => '2019-04-25 08:52:31',
                'updated_at' => '2019-04-25 08:52:31',
            ),
            153 => 
            array (
                'id' => 1667,
                'status_code' => '301',
                'from' => '/mir-pt-26.032/',
                'to' => '/mir-pt-26-032/',
                'created_at' => '2019-04-25 08:52:42',
                'updated_at' => '2019-04-25 08:52:42',
            ),
            154 => 
            array (
                'id' => 1668,
                'status_code' => '301',
                'from' => '/mir-pt-26.033/',
                'to' => '/mir-pt-26-033/',
                'created_at' => '2019-04-25 08:52:50',
                'updated_at' => '2019-04-25 08:52:50',
            ),
            155 => 
            array (
                'id' => 1669,
                'status_code' => '301',
                'from' => '/mir-pt-26.034/',
                'to' => '/mir-pt-26-034/',
                'created_at' => '2019-04-25 08:52:58',
                'updated_at' => '2019-04-25 08:52:58',
            ),
            156 => 
            array (
                'id' => 1670,
                'status_code' => '301',
                'from' => '/mir-pt-26.035/',
                'to' => '/mir-pt-26-035/',
                'created_at' => '2019-04-25 08:53:06',
                'updated_at' => '2019-04-25 08:53:06',
            ),
            157 => 
            array (
                'id' => 1671,
                'status_code' => '301',
                'from' => '/about/deals/cabinets19_new_prices/',
                'to' => '/category/cabinets19/',
                'created_at' => '2019-04-25 09:54:30',
                'updated_at' => '2019-04-25 09:54:30',
            ),
            158 => 
            array (
                'id' => 1672,
                'status_code' => '302',
                'from' => '/category/rasprodazha/',
                'to' => '/category/cabinets19/',
                'created_at' => '2019-04-25 09:56:27',
                'updated_at' => '2019-04-25 09:56:27',
            ),
            159 => 
            array (
                'id' => 1673,
                'status_code' => '301',
                'from' => '/lande_ip55_freestandning_42u_8080_sale/',
                'to' => '/category/cabinets19/',
                'created_at' => '2019-04-25 09:56:38',
                'updated_at' => '2019-04-25 09:56:38',
            ),
            160 => 
            array (
                'id' => 1674,
                'status_code' => '301',
                'from' => '/lande_j1m_42u_6080_sale/',
                'to' => '/category/cabinets19/',
                'created_at' => '2019-04-25 09:56:47',
                'updated_at' => '2019-04-25 09:56:47',
            ),
            161 => 
            array (
                'id' => 1675,
                'status_code' => '301',
                'from' => '/lande_j1m_42u_8080_sale/',
                'to' => '/category/cabinets19/',
                'created_at' => '2019-04-25 09:56:58',
                'updated_at' => '2019-04-25 09:56:58',
            ),
            162 => 
            array (
                'id' => 1676,
                'status_code' => '301',
                'from' => '/lande_dynamicbasic_42u_6060_sale/',
                'to' => '/category/cabinets19/',
                'created_at' => '2019-04-25 09:57:08',
                'updated_at' => '2019-04-25 09:57:08',
            ),
            163 => 
            array (
                'id' => 1677,
                'status_code' => '301',
                'from' => '/category/telemechanics/data_transfer/',
                'to' => '/category/data_transfer/',
                'created_at' => '2019-04-25 10:02:33',
                'updated_at' => '2019-04-25 10:02:45',
            ),
            164 => 
            array (
                'id' => 1678,
                'status_code' => '301',
                'from' => '/category/telemechanics/data_transfer/accessories/',
                'to' => '/category/data_transfer/accessories/',
                'created_at' => '2019-04-25 10:03:24',
                'updated_at' => '2019-04-25 10:03:24',
            ),
            165 => 
            array (
                'id' => 1679,
                'status_code' => '301',
                'from' => '/category/shell/freestanding/',
                'to' => '/category/cabinets19/freestanding/',
                'created_at' => '2019-05-14 10:23:15',
                'updated_at' => '2019-05-14 10:23:15',
            ),
            166 => 
            array (
                'id' => 1680,
                'status_code' => '301',
                'from' => '/category/shell/termoshkafy/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:24:29',
                'updated_at' => '2019-07-16 15:54:18',
            ),
            167 => 
            array (
                'id' => 1681,
                'status_code' => '301',
                'from' => '/category/shell/kshu/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:24:40',
                'updated_at' => '2019-07-16 15:54:16',
            ),
            168 => 
            array (
                'id' => 1682,
                'status_code' => '301',
                'from' => '/category/shell/obolochki/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:24:58',
                'updated_at' => '2019-07-16 15:54:14',
            ),
            169 => 
            array (
                'id' => 1683,
                'status_code' => '301',
                'from' => '/category/shell/accessories/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:25:09',
                'updated_at' => '2019-07-16 15:54:09',
            ),
            170 => 
            array (
                'id' => 1684,
                'status_code' => '302',
                'from' => '/brand/dkc/',
                'to' => '/about/brands/',
                'created_at' => '2019-05-14 11:26:25',
                'updated_at' => '2019-05-14 11:26:25',
            ),
            171 => 
            array (
                'id' => 1685,
                'status_code' => '302',
                'from' => '/brand/asd-electric/',
                'to' => '/about/brands/',
                'created_at' => '2019-05-14 11:26:41',
                'updated_at' => '2019-05-14 11:26:41',
            ),
            172 => 
            array (
                'id' => 1686,
                'status_code' => '301',
                'from' => '/schmp-01-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:27:18',
                'updated_at' => '2019-07-16 15:54:07',
            ),
            173 => 
            array (
                'id' => 1687,
                'status_code' => '301',
                'from' => '/schmp-01-1-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:27:28',
                'updated_at' => '2019-07-16 15:54:01',
            ),
            174 => 
            array (
                'id' => 1688,
                'status_code' => '301',
                'from' => '/schmp-02-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:27:39',
                'updated_at' => '2019-07-16 15:53:59',
            ),
            175 => 
            array (
                'id' => 1689,
                'status_code' => '301',
                'from' => '/schmp-02-1-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:27:48',
                'updated_at' => '2019-07-16 15:53:56',
            ),
            176 => 
            array (
                'id' => 1690,
                'status_code' => '301',
                'from' => '/schmp-03-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:27:58',
                'updated_at' => '2019-07-16 15:53:53',
            ),
            177 => 
            array (
                'id' => 1691,
                'status_code' => '301',
                'from' => '/schmp-03-1-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:28:08',
                'updated_at' => '2019-07-16 15:53:51',
            ),
            178 => 
            array (
                'id' => 1692,
                'status_code' => '301',
                'from' => '/schmp-04-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:28:19',
                'updated_at' => '2019-07-16 15:53:43',
            ),
            179 => 
            array (
                'id' => 1693,
                'status_code' => '301',
                'from' => '/schmp-05-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:28:29',
                'updated_at' => '2019-07-16 15:53:40',
            ),
            180 => 
            array (
                'id' => 1694,
                'status_code' => '301',
                'from' => '/schmp-06-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:28:37',
                'updated_at' => '2019-07-16 15:53:37',
            ),
            181 => 
            array (
                'id' => 1695,
                'status_code' => '301',
                'from' => '/schmp-07-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:28:46',
                'updated_at' => '2019-07-16 15:53:35',
            ),
            182 => 
            array (
                'id' => 1696,
                'status_code' => '301',
                'from' => '/schmp-231-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:28:55',
                'updated_at' => '2019-07-16 15:53:33',
            ),
            183 => 
            array (
                'id' => 1697,
                'status_code' => '301',
                'from' => '/schmp-321-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:29:04',
                'updated_at' => '2019-07-16 15:53:31',
            ),
            184 => 
            array (
                'id' => 1698,
                'status_code' => '301',
                'from' => '/schmp-421-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:29:13',
                'updated_at' => '2019-07-16 15:53:27',
            ),
            185 => 
            array (
                'id' => 1699,
                'status_code' => '301',
                'from' => '/schmp-441-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:29:22',
                'updated_at' => '2019-07-16 15:53:14',
            ),
            186 => 
            array (
                'id' => 1700,
                'status_code' => '301',
                'from' => '/schmp-442-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:29:31',
                'updated_at' => '2019-07-16 15:53:12',
            ),
            187 => 
            array (
                'id' => 1701,
                'status_code' => '301',
                'from' => '/schmp-461-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:30:43',
                'updated_at' => '2019-07-16 15:53:10',
            ),
            188 => 
            array (
                'id' => 1702,
                'status_code' => '301',
                'from' => '/schmp-462-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:30:53',
                'updated_at' => '2019-07-16 15:53:08',
            ),
            189 => 
            array (
                'id' => 1703,
                'status_code' => '301',
                'from' => '/schmp-661-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:31:01',
                'updated_at' => '2019-07-16 15:53:06',
            ),
            190 => 
            array (
                'id' => 1704,
                'status_code' => '301',
                'from' => '/schmp-662-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:31:09',
                'updated_at' => '2019-07-16 15:53:03',
            ),
            191 => 
            array (
                'id' => 1705,
                'status_code' => '301',
                'from' => '/schmp-01-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:31:21',
                'updated_at' => '2019-07-16 15:53:01',
            ),
            192 => 
            array (
                'id' => 1706,
                'status_code' => '301',
                'from' => '/schmp-01-1-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:31:30',
                'updated_at' => '2019-07-16 15:52:59',
            ),
            193 => 
            array (
                'id' => 1707,
                'status_code' => '301',
                'from' => '/schmp-02-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:31:40',
                'updated_at' => '2019-07-16 15:52:56',
            ),
            194 => 
            array (
                'id' => 1708,
                'status_code' => '301',
                'from' => '/schmp-02-1-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:31:51',
                'updated_at' => '2019-07-16 15:52:53',
            ),
            195 => 
            array (
                'id' => 1709,
                'status_code' => '301',
                'from' => '/schmp-03-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:32:04',
                'updated_at' => '2019-07-16 15:52:51',
            ),
            196 => 
            array (
                'id' => 1710,
                'status_code' => '301',
                'from' => '/schmp-03-1-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:32:13',
                'updated_at' => '2019-07-16 15:52:49',
            ),
            197 => 
            array (
                'id' => 1711,
                'status_code' => '301',
                'from' => '/schmp-04-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:32:22',
                'updated_at' => '2019-07-16 15:52:47',
            ),
            198 => 
            array (
                'id' => 1712,
                'status_code' => '301',
                'from' => '/schmp-05-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:32:33',
                'updated_at' => '2019-07-16 15:52:43',
            ),
            199 => 
            array (
                'id' => 1713,
                'status_code' => '301',
                'from' => '/schmp-06-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:32:43',
                'updated_at' => '2019-07-16 15:52:40',
            ),
            200 => 
            array (
                'id' => 1714,
                'status_code' => '301',
                'from' => '/schmp-07-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:32:52',
                'updated_at' => '2019-07-16 15:52:38',
            ),
            201 => 
            array (
                'id' => 1715,
                'status_code' => '301',
                'from' => '/schmp-231-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:33:01',
                'updated_at' => '2019-07-16 15:52:36',
            ),
            202 => 
            array (
                'id' => 1716,
                'status_code' => '301',
                'from' => '/schmp-321-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:33:10',
                'updated_at' => '2019-07-16 15:52:33',
            ),
            203 => 
            array (
                'id' => 1717,
                'status_code' => '301',
                'from' => '/schmp-421-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:33:20',
                'updated_at' => '2019-07-16 15:52:31',
            ),
            204 => 
            array (
                'id' => 1718,
                'status_code' => '301',
                'from' => '/schmp-441-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:33:28',
                'updated_at' => '2019-07-16 15:52:29',
            ),
            205 => 
            array (
                'id' => 1719,
                'status_code' => '301',
                'from' => '/schmp-442-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:33:37',
                'updated_at' => '2019-07-16 15:52:27',
            ),
            206 => 
            array (
                'id' => 1720,
                'status_code' => '301',
                'from' => '/schmp-461-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:33:48',
                'updated_at' => '2019-07-16 15:52:24',
            ),
            207 => 
            array (
                'id' => 1721,
                'status_code' => '301',
                'from' => '/schmp-462-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:33:57',
                'updated_at' => '2019-07-16 15:52:21',
            ),
            208 => 
            array (
                'id' => 1722,
                'status_code' => '301',
                'from' => '/schmp-661-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:34:06',
                'updated_at' => '2019-07-16 15:52:18',
            ),
            209 => 
            array (
                'id' => 1723,
                'status_code' => '301',
                'from' => '/schmp-662-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:34:15',
                'updated_at' => '2019-07-16 15:52:16',
            ),
            210 => 
            array (
                'id' => 1724,
                'status_code' => '301',
                'from' => '/kshu-1000x600x400/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:34:24',
                'updated_at' => '2019-07-16 15:52:13',
            ),
            211 => 
            array (
                'id' => 1725,
                'status_code' => '301',
                'from' => '/kshu-1000x600x600/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:34:32',
                'updated_at' => '2019-07-16 15:52:11',
            ),
            212 => 
            array (
                'id' => 1726,
                'status_code' => '301',
                'from' => '/kshu-1000x800x400/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:34:39',
                'updated_at' => '2019-07-16 15:52:09',
            ),
            213 => 
            array (
                'id' => 1727,
                'status_code' => '301',
                'from' => '/kshu-1200x600x400/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:34:47',
                'updated_at' => '2019-07-16 15:52:07',
            ),
            214 => 
            array (
                'id' => 1728,
                'status_code' => '301',
                'from' => '/kshu-1200x600x600/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:34:59',
                'updated_at' => '2019-07-16 15:52:05',
            ),
            215 => 
            array (
                'id' => 1729,
                'status_code' => '301',
                'from' => '/kshu-1200x800x400/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:35:08',
                'updated_at' => '2019-07-16 15:52:04',
            ),
            216 => 
            array (
                'id' => 1730,
                'status_code' => '301',
                'from' => '/kshu-800x600x400/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:35:17',
                'updated_at' => '2019-07-16 15:52:01',
            ),
            217 => 
            array (
                'id' => 1731,
                'status_code' => '301',
                'from' => '/kshu-800x600x600/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:35:25',
                'updated_at' => '2019-07-16 15:51:57',
            ),
            218 => 
            array (
                'id' => 1732,
                'status_code' => '301',
                'from' => '/kshu-800x800x400/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:35:34',
                'updated_at' => '2019-07-16 15:51:31',
            ),
            219 => 
            array (
                'id' => 1733,
                'status_code' => '301',
                'from' => '/tcokol-schmp-3-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:35:51',
                'updated_at' => '2019-07-16 15:51:54',
            ),
            220 => 
            array (
                'id' => 1734,
                'status_code' => '301',
                'from' => '/tcokol-schmp-3-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:36:00',
                'updated_at' => '2019-07-16 15:51:52',
            ),
            221 => 
            array (
                'id' => 1735,
                'status_code' => '301',
                'from' => '/tcokol-schmp-4-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:36:08',
                'updated_at' => '2019-07-16 15:51:49',
            ),
            222 => 
            array (
                'id' => 1736,
                'status_code' => '301',
                'from' => '/tcokol-schmp-4-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:36:17',
                'updated_at' => '2019-07-16 15:51:47',
            ),
            223 => 
            array (
                'id' => 1737,
                'status_code' => '301',
                'from' => '/tcokol-schmp-57-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:36:25',
                'updated_at' => '2019-07-16 15:51:46',
            ),
            224 => 
            array (
                'id' => 1738,
                'status_code' => '301',
                'from' => '/tcokol-schmp-5-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:36:37',
                'updated_at' => '2019-07-16 15:51:43',
            ),
            225 => 
            array (
                'id' => 1739,
                'status_code' => '301',
                'from' => '/tcokol-schmp-67-ip31/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:36:46',
                'updated_at' => '2019-07-16 15:51:40',
            ),
            226 => 
            array (
                'id' => 1740,
                'status_code' => '301',
                'from' => '/tcokol-schmp-6-ip54/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:36:56',
                'updated_at' => '2019-07-16 15:51:39',
            ),
            227 => 
            array (
                'id' => 1741,
                'status_code' => '301',
                'from' => '/postament-kshu-600x400/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:37:07',
                'updated_at' => '2019-07-16 15:51:37',
            ),
            228 => 
            array (
                'id' => 1742,
                'status_code' => '301',
                'from' => '/postament-kshu-600x600/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:37:15',
                'updated_at' => '2019-07-16 15:51:35',
            ),
            229 => 
            array (
                'id' => 1743,
                'status_code' => '301',
                'from' => '/postament-kshu-800x400/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:37:26',
                'updated_at' => '2019-07-16 15:51:08',
            ),
            230 => 
            array (
                'id' => 1744,
                'status_code' => '301',
                'from' => '/r5st0231/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:37:52',
                'updated_at' => '2019-07-16 15:51:10',
            ),
            231 => 
            array (
                'id' => 1745,
                'status_code' => '301',
                'from' => '/r5st0331/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:38:01',
                'updated_at' => '2019-07-16 15:51:13',
            ),
            232 => 
            array (
                'id' => 1746,
                'status_code' => '301',
                'from' => '/r5st0341/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:38:11',
                'updated_at' => '2019-07-16 15:51:15',
            ),
            233 => 
            array (
                'id' => 1747,
                'status_code' => '301',
                'from' => '/r5st0342/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:38:20',
                'updated_at' => '2019-07-16 15:51:17',
            ),
            234 => 
            array (
                'id' => 1748,
                'status_code' => '301',
                'from' => '/r5st0391/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:38:29',
                'updated_at' => '2019-07-16 15:51:19',
            ),
            235 => 
            array (
                'id' => 1749,
                'status_code' => '301',
                'from' => '/r5st0431/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:38:37',
                'updated_at' => '2019-07-16 15:51:26',
            ),
            236 => 
            array (
                'id' => 1750,
                'status_code' => '301',
                'from' => '/r5st0432/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:38:47',
                'updated_at' => '2019-07-16 15:51:25',
            ),
            237 => 
            array (
                'id' => 1751,
                'status_code' => '301',
                'from' => '/r5st0442/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:38:56',
                'updated_at' => '2019-07-16 15:49:31',
            ),
            238 => 
            array (
                'id' => 1752,
                'status_code' => '301',
                'from' => '/r5st0462/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:39:06',
                'updated_at' => '2019-07-16 15:49:30',
            ),
            239 => 
            array (
                'id' => 1753,
                'status_code' => '301',
                'from' => '/r5st0531/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:39:15',
                'updated_at' => '2019-07-16 15:49:28',
            ),
            240 => 
            array (
                'id' => 1754,
                'status_code' => '301',
                'from' => '/r5st0532/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:39:24',
                'updated_at' => '2019-07-16 15:49:26',
            ),
            241 => 
            array (
                'id' => 1755,
                'status_code' => '301',
                'from' => '/r5st0542/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:39:31',
                'updated_at' => '2019-07-16 15:49:23',
            ),
            242 => 
            array (
                'id' => 1756,
                'status_code' => '301',
                'from' => '/r5st0549/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:39:39',
                'updated_at' => '2019-07-16 15:49:16',
            ),
            243 => 
            array (
                'id' => 1757,
                'status_code' => '301',
                'from' => '/r5st0552/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:39:48',
                'updated_at' => '2019-07-16 15:49:14',
            ),
            244 => 
            array (
                'id' => 1758,
                'status_code' => '301',
                'from' => '/dkc_r5st0553/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:39:59',
                'updated_at' => '2019-07-16 15:49:12',
            ),
            245 => 
            array (
                'id' => 1759,
                'status_code' => '301',
                'from' => '/r5st0562/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:40:10',
                'updated_at' => '2019-07-16 15:49:09',
            ),
            246 => 
            array (
                'id' => 1760,
                'status_code' => '301',
                'from' => '/dkc_r5st0563/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:40:19',
                'updated_at' => '2019-07-16 15:49:07',
            ),
            247 => 
            array (
                'id' => 1761,
                'status_code' => '301',
                'from' => '/r5st0642/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:40:30',
                'updated_at' => '2019-07-16 15:49:05',
            ),
            248 => 
            array (
                'id' => 1762,
                'status_code' => '301',
                'from' => '/dkc_r5st0644/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:40:39',
                'updated_at' => '2019-07-16 15:49:03',
            ),
            249 => 
            array (
                'id' => 1763,
                'status_code' => '301',
                'from' => '/dkc_r5st0649/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:40:47',
                'updated_at' => '2019-07-16 15:49:02',
            ),
            250 => 
            array (
                'id' => 1764,
                'status_code' => '301',
                'from' => '/r5st0652/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:40:55',
                'updated_at' => '2019-07-16 15:49:00',
            ),
            251 => 
            array (
                'id' => 1765,
                'status_code' => '301',
                'from' => '/dkc_r5st0664/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:41:04',
                'updated_at' => '2019-07-16 15:48:58',
            ),
            252 => 
            array (
                'id' => 1766,
                'status_code' => '301',
                'from' => '/dkc_r5st0669/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:41:12',
                'updated_at' => '2019-07-16 15:48:53',
            ),
            253 => 
            array (
                'id' => 1767,
                'status_code' => '301',
                'from' => '/r5st0752/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:41:21',
                'updated_at' => '2019-07-16 15:48:51',
            ),
            254 => 
            array (
                'id' => 1768,
                'status_code' => '301',
                'from' => '/dkc_r5st0759/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:41:29',
                'updated_at' => '2019-07-16 15:48:47',
            ),
            255 => 
            array (
                'id' => 1769,
                'status_code' => '301',
                'from' => '/r5st0862/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:41:38',
                'updated_at' => '2019-07-16 15:48:44',
            ),
            256 => 
            array (
                'id' => 1770,
                'status_code' => '301',
                'from' => '/dkc_r5st0863/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:41:46',
                'updated_at' => '2019-07-16 15:48:41',
            ),
            257 => 
            array (
                'id' => 1771,
                'status_code' => '301',
                'from' => '/dkc_r5st0864/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:41:57',
                'updated_at' => '2019-07-16 15:48:39',
            ),
            258 => 
            array (
                'id' => 1772,
                'status_code' => '301',
                'from' => '/dkc_r5st0869/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:42:06',
                'updated_at' => '2019-07-16 15:48:37',
            ),
            259 => 
            array (
                'id' => 1773,
                'status_code' => '301',
                'from' => '/r5st0882/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:42:17',
                'updated_at' => '2019-07-16 15:48:35',
            ),
            260 => 
            array (
                'id' => 1774,
                'status_code' => '301',
                'from' => '/dkc_r5st0883/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:42:30',
                'updated_at' => '2019-07-16 15:48:33',
            ),
            261 => 
            array (
                'id' => 1775,
                'status_code' => '301',
                'from' => '/dkc_r5st0884/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:42:38',
                'updated_at' => '2019-07-16 15:48:31',
            ),
            262 => 
            array (
                'id' => 1776,
                'status_code' => '301',
                'from' => '/dkc_r5st1063/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:42:46',
                'updated_at' => '2019-07-16 15:48:27',
            ),
            263 => 
            array (
                'id' => 1777,
                'status_code' => '301',
                'from' => '/dkc_r5st1064/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:42:56',
                'updated_at' => '2019-07-16 15:48:26',
            ),
            264 => 
            array (
                'id' => 1778,
                'status_code' => '301',
                'from' => '/dkc_r5st1069/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:43:04',
                'updated_at' => '2019-07-16 15:48:23',
            ),
            265 => 
            array (
                'id' => 1779,
                'status_code' => '301',
                'from' => '/dkc_r5st1083/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:43:11',
                'updated_at' => '2019-07-16 15:48:21',
            ),
            266 => 
            array (
                'id' => 1780,
                'status_code' => '301',
                'from' => '/dkc_r5st1084/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:43:24',
                'updated_at' => '2019-07-16 15:48:17',
            ),
            267 => 
            array (
                'id' => 1781,
                'status_code' => '301',
                'from' => '/r5st1262/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:43:33',
                'updated_at' => '2019-07-16 15:48:14',
            ),
            268 => 
            array (
                'id' => 1782,
                'status_code' => '301',
                'from' => '/dkc_r5st1263/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:43:42',
                'updated_at' => '2019-07-16 15:48:12',
            ),
            269 => 
            array (
                'id' => 1783,
                'status_code' => '301',
                'from' => '/dkc_r5st1264/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:43:50',
                'updated_at' => '2019-07-16 15:48:11',
            ),
            270 => 
            array (
                'id' => 1784,
                'status_code' => '301',
                'from' => '/dkc_r5st1283/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:44:04',
                'updated_at' => '2019-07-16 15:48:08',
            ),
            271 => 
            array (
                'id' => 1785,
                'status_code' => '301',
                'from' => '/dkc_r5st1284/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:44:16',
                'updated_at' => '2019-07-16 15:48:06',
            ),
            272 => 
            array (
                'id' => 1786,
                'status_code' => '301',
                'from' => '/dkc_r5st1463/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:44:26',
                'updated_at' => '2019-07-16 15:48:01',
            ),
            273 => 
            array (
                'id' => 1787,
                'status_code' => '301',
                'from' => '/dkc_r5st1483/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:44:36',
                'updated_at' => '2019-07-16 15:47:58',
            ),
            274 => 
            array (
                'id' => 1788,
                'status_code' => '301',
                'from' => '/dkc_r5fb300/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:44:50',
                'updated_at' => '2019-07-16 15:47:43',
            ),
            275 => 
            array (
                'id' => 1789,
                'status_code' => '301',
                'from' => '/dkc_r5fb400/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:44:58',
                'updated_at' => '2019-07-16 15:47:37',
            ),
            276 => 
            array (
                'id' => 1790,
                'status_code' => '301',
                'from' => '/dkc_r5fb500/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:45:09',
                'updated_at' => '2019-07-16 15:47:32',
            ),
            277 => 
            array (
                'id' => 1791,
                'status_code' => '301',
                'from' => '/dkc_r5fb600/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:45:19',
                'updated_at' => '2019-07-16 15:47:29',
            ),
            278 => 
            array (
                'id' => 1792,
                'status_code' => '301',
                'from' => '/dkc_r5fb800/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:45:28',
                'updated_at' => '2019-07-16 15:47:27',
            ),
            279 => 
            array (
                'id' => 1793,
                'status_code' => '301',
                'from' => '/dkc_r5a50/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:45:36',
                'updated_at' => '2019-07-16 15:47:25',
            ),
            280 => 
            array (
                'id' => 1794,
                'status_code' => '301',
                'from' => '/dkc_r5a55/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-14 11:45:46',
                'updated_at' => '2019-07-16 15:47:22',
            ),
            281 => 
            array (
                'id' => 1795,
                'status_code' => '301',
                'from' => '/mir-rch-02/',
                'to' => '/category/telemechanics/time_sync/',
                'created_at' => '2019-05-16 04:13:28',
                'updated_at' => '2019-05-16 04:13:28',
            ),
            282 => 
            array (
                'id' => 1796,
                'status_code' => '301',
                'from' => '/mir-rch-02_p/',
                'to' => '/category/telemechanics/time_sync/',
                'created_at' => '2019-05-16 04:13:38',
                'updated_at' => '2019-05-16 04:13:38',
            ),
            283 => 
            array (
                'id' => 1797,
                'status_code' => '301',
                'from' => '/mir-rch-02-01/',
                'to' => '/category/telemechanics/time_sync/',
                'created_at' => '2019-05-16 04:13:47',
                'updated_at' => '2019-05-16 04:13:47',
            ),
            284 => 
            array (
                'id' => 1798,
                'status_code' => '301',
                'from' => '/mir-rch-02-01_p/',
                'to' => '/category/telemechanics/time_sync/',
                'created_at' => '2019-05-16 04:13:56',
                'updated_at' => '2019-05-16 04:13:56',
            ),
            285 => 
            array (
                'id' => 1799,
                'status_code' => '301',
                'from' => '/mir-mr-02-00/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:17:11',
                'updated_at' => '2019-05-16 04:17:11',
            ),
            286 => 
            array (
                'id' => 1800,
                'status_code' => '301',
                'from' => '/mir-mr-02-01/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:17:21',
                'updated_at' => '2019-05-16 04:17:21',
            ),
            287 => 
            array (
                'id' => 1801,
                'status_code' => '301',
                'from' => '/mir-mr-02-02/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:17:30',
                'updated_at' => '2019-05-16 04:17:30',
            ),
            288 => 
            array (
                'id' => 1802,
                'status_code' => '301',
                'from' => '/mir-mr-04-00/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:17:39',
                'updated_at' => '2019-05-16 04:17:39',
            ),
            289 => 
            array (
                'id' => 1803,
                'status_code' => '301',
                'from' => '/mir-mr-04-01/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:17:48',
                'updated_at' => '2019-05-16 04:17:48',
            ),
            290 => 
            array (
                'id' => 1804,
                'status_code' => '301',
                'from' => '/mir-mr-04-02/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:17:56',
                'updated_at' => '2019-05-16 04:17:56',
            ),
            291 => 
            array (
                'id' => 1805,
                'status_code' => '301',
                'from' => '/mir-mb-01/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:18:05',
                'updated_at' => '2019-05-16 04:18:05',
            ),
            292 => 
            array (
                'id' => 1806,
                'status_code' => '301',
                'from' => '/mir-mb-01-v/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:18:16',
                'updated_at' => '2019-05-16 04:18:16',
            ),
            293 => 
            array (
                'id' => 1807,
                'status_code' => '301',
                'from' => '/mir-mb-01-d/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:18:25',
                'updated_at' => '2019-05-16 04:18:25',
            ),
            294 => 
            array (
                'id' => 1808,
                'status_code' => '301',
                'from' => '/mir-mb-01-vd/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:18:34',
                'updated_at' => '2019-05-16 04:18:34',
            ),
            295 => 
            array (
                'id' => 1809,
                'status_code' => '301',
                'from' => '/mir-mk-01-e-pr/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:18:42',
                'updated_at' => '2019-05-16 04:18:42',
            ),
            296 => 
            array (
                'id' => 1810,
                'status_code' => '301',
                'from' => '/mir-mk-01-e-pz/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:18:52',
                'updated_at' => '2019-05-16 04:18:52',
            ),
            297 => 
            array (
                'id' => 1811,
                'status_code' => '301',
                'from' => '/mir-mk-01-e-rf/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:19:04',
                'updated_at' => '2019-05-16 04:19:04',
            ),
            298 => 
            array (
                'id' => 1812,
                'status_code' => '301',
                'from' => '/mir-mk-01-g-p/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:19:13',
                'updated_at' => '2019-05-16 04:19:13',
            ),
            299 => 
            array (
                'id' => 1813,
                'status_code' => '301',
                'from' => '/mir-mk-01-g-pr/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:19:22',
                'updated_at' => '2019-05-16 04:19:22',
            ),
            300 => 
            array (
                'id' => 1814,
                'status_code' => '301',
                'from' => '/mir-mk-01-g-prf/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:19:31',
                'updated_at' => '2019-05-16 04:19:31',
            ),
            301 => 
            array (
                'id' => 1815,
                'status_code' => '301',
                'from' => '/mir-mk-01-g-prfz/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:19:40',
                'updated_at' => '2019-05-16 04:19:40',
            ),
            302 => 
            array (
                'id' => 1816,
                'status_code' => '301',
                'from' => '/mir-mk-01-g-prz/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:19:47',
                'updated_at' => '2019-05-16 04:19:47',
            ),
            303 => 
            array (
                'id' => 1817,
                'status_code' => '301',
                'from' => '/mir-mk-01-g-pz/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:19:55',
                'updated_at' => '2019-05-16 04:19:55',
            ),
            304 => 
            array (
                'id' => 1818,
                'status_code' => '301',
                'from' => '/mir-mk-01-g-rf/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:20:04',
                'updated_at' => '2019-05-16 04:20:04',
            ),
            305 => 
            array (
                'id' => 1819,
                'status_code' => '301',
                'from' => '/mir-mk-01-g-rf-24/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:20:12',
                'updated_at' => '2019-05-16 04:20:12',
            ),
            306 => 
            array (
                'id' => 1820,
                'status_code' => '301',
                'from' => '/mir-mk-01-g-rrf-24/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:20:22',
                'updated_at' => '2019-05-16 04:20:22',
            ),
            307 => 
            array (
                'id' => 1821,
                'status_code' => '301',
                'from' => '/mir-mk-01-g-z/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:20:31',
                'updated_at' => '2019-05-16 04:20:31',
            ),
            308 => 
            array (
                'id' => 1822,
                'status_code' => '301',
                'from' => '/mir-mk-01-r-p/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:20:41',
                'updated_at' => '2019-05-16 04:20:41',
            ),
            309 => 
            array (
                'id' => 1823,
                'status_code' => '301',
                'from' => '/mir-mk-01-r-pz/',
                'to' => '/category/data_transfer/modem_routers/',
                'created_at' => '2019-05-16 04:20:50',
                'updated_at' => '2019-05-16 04:20:50',
            ),
            310 => 
            array (
                'id' => 1824,
                'status_code' => '301',
                'from' => '/om-11-00/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:30:44',
                'updated_at' => '2019-05-16 04:30:44',
            ),
            311 => 
            array (
                'id' => 1825,
                'status_code' => '301',
                'from' => '/om-11-01/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:31:00',
                'updated_at' => '2019-05-16 04:31:00',
            ),
            312 => 
            array (
                'id' => 1826,
                'status_code' => '301',
                'from' => '/om-11-02/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:31:10',
                'updated_at' => '2019-05-16 04:31:10',
            ),
            313 => 
            array (
                'id' => 1827,
                'status_code' => '301',
                'from' => '/om-11-03/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:31:20',
                'updated_at' => '2019-05-16 04:31:20',
            ),
            314 => 
            array (
                'id' => 1828,
                'status_code' => '301',
                'from' => '/om-11-04/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:31:28',
                'updated_at' => '2019-05-16 04:31:28',
            ),
            315 => 
            array (
                'id' => 1829,
                'status_code' => '301',
                'from' => '/om-11-05/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:31:37',
                'updated_at' => '2019-05-16 04:31:37',
            ),
            316 => 
            array (
                'id' => 1830,
                'status_code' => '301',
                'from' => '/om-11-06/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:31:46',
                'updated_at' => '2019-05-16 04:31:46',
            ),
            317 => 
            array (
                'id' => 1831,
                'status_code' => '301',
                'from' => '/om-11-07/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:31:55',
                'updated_at' => '2019-05-16 04:31:55',
            ),
            318 => 
            array (
                'id' => 1832,
                'status_code' => '301',
                'from' => '/om-11-08/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:32:03',
                'updated_at' => '2019-05-16 04:32:03',
            ),
            319 => 
            array (
                'id' => 1833,
                'status_code' => '301',
                'from' => '/om-11-09/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:32:12',
                'updated_at' => '2019-05-16 04:32:12',
            ),
            320 => 
            array (
                'id' => 1834,
                'status_code' => '301',
                'from' => '/om-11-10/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:32:28',
                'updated_at' => '2019-05-16 04:32:28',
            ),
            321 => 
            array (
                'id' => 1835,
                'status_code' => '301',
                'from' => '/om-11-11/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:32:39',
                'updated_at' => '2019-05-16 04:32:39',
            ),
            322 => 
            array (
                'id' => 1836,
                'status_code' => '301',
                'from' => '/om-11-12/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:32:49',
                'updated_at' => '2019-05-16 04:32:49',
            ),
            323 => 
            array (
                'id' => 1837,
                'status_code' => '301',
                'from' => '/om-11-13/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:32:58',
                'updated_at' => '2019-05-16 04:32:58',
            ),
            324 => 
            array (
                'id' => 1838,
                'status_code' => '301',
                'from' => '/om-11-14/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:33:06',
                'updated_at' => '2019-05-16 04:33:06',
            ),
            325 => 
            array (
                'id' => 1839,
                'status_code' => '301',
                'from' => '/om-11-15/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:33:17',
                'updated_at' => '2019-05-16 04:33:17',
            ),
            326 => 
            array (
                'id' => 1840,
                'status_code' => '301',
                'from' => '/mir-pt-02-00/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:33:27',
                'updated_at' => '2019-05-16 04:33:27',
            ),
            327 => 
            array (
                'id' => 1841,
                'status_code' => '301',
                'from' => '/mir-pt-02-01/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:33:40',
                'updated_at' => '2019-05-16 04:33:40',
            ),
            328 => 
            array (
                'id' => 1842,
                'status_code' => '301',
                'from' => '/mir-pt-02-02/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:33:51',
                'updated_at' => '2019-05-16 04:33:51',
            ),
            329 => 
            array (
                'id' => 1843,
                'status_code' => '301',
                'from' => '/mir-pt-02-03/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:34:01',
                'updated_at' => '2019-05-16 04:34:01',
            ),
            330 => 
            array (
                'id' => 1844,
                'status_code' => '301',
                'from' => '/mir-pt-02-04/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:34:14',
                'updated_at' => '2019-05-16 04:34:14',
            ),
            331 => 
            array (
                'id' => 1845,
                'status_code' => '301',
                'from' => '/mir-pt-23-000/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:34:29',
                'updated_at' => '2019-05-16 04:34:29',
            ),
            332 => 
            array (
                'id' => 1846,
                'status_code' => '301',
                'from' => '/mir-pt-23-002/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:34:39',
                'updated_at' => '2019-05-16 04:34:39',
            ),
            333 => 
            array (
                'id' => 1847,
                'status_code' => '301',
                'from' => '/mir-pt-23-004/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:35:02',
                'updated_at' => '2019-05-16 04:35:02',
            ),
            334 => 
            array (
                'id' => 1848,
                'status_code' => '301',
                'from' => '/mir-pt-23-006/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:35:11',
                'updated_at' => '2019-05-16 04:35:11',
            ),
            335 => 
            array (
                'id' => 1849,
                'status_code' => '301',
                'from' => '/mir-pt-23-008/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:35:21',
                'updated_at' => '2019-05-16 04:35:21',
            ),
            336 => 
            array (
                'id' => 1850,
                'status_code' => '301',
                'from' => '/mir-pt-23-010/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:35:35',
                'updated_at' => '2019-05-16 04:35:35',
            ),
            337 => 
            array (
                'id' => 1851,
                'status_code' => '301',
                'from' => '/mir-pt-23-012/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:35:46',
                'updated_at' => '2019-05-16 04:35:46',
            ),
            338 => 
            array (
                'id' => 1852,
                'status_code' => '301',
                'from' => '/mir-pt-23-014/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:36:03',
                'updated_at' => '2019-05-16 04:36:03',
            ),
            339 => 
            array (
                'id' => 1853,
                'status_code' => '301',
                'from' => '/mir-pt-23-016/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:36:13',
                'updated_at' => '2019-05-16 04:36:13',
            ),
            340 => 
            array (
                'id' => 1854,
                'status_code' => '301',
                'from' => '/mir-pt-23-018/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:36:22',
                'updated_at' => '2019-05-16 04:36:22',
            ),
            341 => 
            array (
                'id' => 1855,
                'status_code' => '301',
                'from' => '/mir-pt-23-001/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:36:34',
                'updated_at' => '2019-05-16 04:36:34',
            ),
            342 => 
            array (
                'id' => 1856,
                'status_code' => '301',
                'from' => '/mir-pt-23-003/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:36:44',
                'updated_at' => '2019-05-16 04:36:44',
            ),
            343 => 
            array (
                'id' => 1857,
                'status_code' => '301',
                'from' => '/mir-pt-23-005/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:36:54',
                'updated_at' => '2019-05-16 04:36:54',
            ),
            344 => 
            array (
                'id' => 1858,
                'status_code' => '301',
                'from' => '/mir-pt-23-007/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:37:05',
                'updated_at' => '2019-05-16 04:37:05',
            ),
            345 => 
            array (
                'id' => 1859,
                'status_code' => '301',
                'from' => '/mir-pt-23-009/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:37:14',
                'updated_at' => '2019-05-16 04:37:14',
            ),
            346 => 
            array (
                'id' => 1860,
                'status_code' => '301',
                'from' => '/mir-pt-23-011/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:37:23',
                'updated_at' => '2019-05-16 04:37:23',
            ),
            347 => 
            array (
                'id' => 1861,
                'status_code' => '301',
                'from' => '/mir-pt-23-013/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:37:36',
                'updated_at' => '2019-05-16 04:37:36',
            ),
            348 => 
            array (
                'id' => 1862,
                'status_code' => '301',
                'from' => '/mir-pt-23-015/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:37:44',
                'updated_at' => '2019-05-16 04:37:44',
            ),
            349 => 
            array (
                'id' => 1863,
                'status_code' => '301',
                'from' => '/mir-pt-23-019/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:41:59',
                'updated_at' => '2019-05-16 04:41:59',
            ),
            350 => 
            array (
                'id' => 1864,
                'status_code' => '301',
                'from' => '/mir-pt-23-080/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:42:08',
                'updated_at' => '2019-05-16 04:42:08',
            ),
            351 => 
            array (
                'id' => 1865,
                'status_code' => '301',
                'from' => '/mir-pt-23-081/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:42:18',
                'updated_at' => '2019-05-16 04:42:18',
            ),
            352 => 
            array (
                'id' => 1866,
                'status_code' => '301',
                'from' => '/mir-pt-23-082/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:42:28',
                'updated_at' => '2019-05-16 04:42:28',
            ),
            353 => 
            array (
                'id' => 1867,
                'status_code' => '301',
                'from' => '/mir-pt-23-083/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:42:39',
                'updated_at' => '2019-05-16 04:42:39',
            ),
            354 => 
            array (
                'id' => 1868,
                'status_code' => '301',
                'from' => '/mir-pt-23-084/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:42:49',
                'updated_at' => '2019-05-16 04:42:49',
            ),
            355 => 
            array (
                'id' => 1869,
                'status_code' => '301',
                'from' => '/mir-pt-23-085/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:43:01',
                'updated_at' => '2019-05-16 04:43:01',
            ),
            356 => 
            array (
                'id' => 1870,
                'status_code' => '301',
                'from' => '/mir-pt-23-086/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:43:11',
                'updated_at' => '2019-05-16 04:43:11',
            ),
            357 => 
            array (
                'id' => 1871,
                'status_code' => '301',
                'from' => '/mir-pt-23-087/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:43:21',
                'updated_at' => '2019-05-16 04:43:21',
            ),
            358 => 
            array (
                'id' => 1872,
                'status_code' => '301',
                'from' => '/mir-pt-23-088/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:43:29',
                'updated_at' => '2019-05-16 04:43:29',
            ),
            359 => 
            array (
                'id' => 1873,
                'status_code' => '301',
                'from' => '/mir-pt-23-089/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:43:41',
                'updated_at' => '2019-05-16 04:43:41',
            ),
            360 => 
            array (
                'id' => 1874,
                'status_code' => '301',
                'from' => '/mir-pt-24-000/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:43:52',
                'updated_at' => '2019-05-16 04:43:52',
            ),
            361 => 
            array (
                'id' => 1875,
                'status_code' => '301',
                'from' => '/mir-pt-24-001/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:44:03',
                'updated_at' => '2019-05-16 04:44:03',
            ),
            362 => 
            array (
                'id' => 1876,
                'status_code' => '301',
                'from' => '/mir-pt-24-002/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:44:13',
                'updated_at' => '2019-05-16 04:44:13',
            ),
            363 => 
            array (
                'id' => 1877,
                'status_code' => '301',
                'from' => '/mir-pt-24-003/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:44:22',
                'updated_at' => '2019-05-16 04:44:22',
            ),
            364 => 
            array (
                'id' => 1878,
                'status_code' => '301',
                'from' => '/mir-pt-24-004/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:44:31',
                'updated_at' => '2019-05-16 04:44:31',
            ),
            365 => 
            array (
                'id' => 1879,
                'status_code' => '301',
                'from' => '/mir-pt-24-005/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:44:42',
                'updated_at' => '2019-05-16 04:44:42',
            ),
            366 => 
            array (
                'id' => 1880,
                'status_code' => '301',
                'from' => '/mir-pt-24-006/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:44:51',
                'updated_at' => '2019-05-16 04:44:51',
            ),
            367 => 
            array (
                'id' => 1881,
                'status_code' => '301',
                'from' => '/mir-pt-24-007/',
                'to' => '/category/elektroizmeritelnye-pribory/ampermetry-voltmetry/',
                'created_at' => '2019-05-16 04:45:00',
                'updated_at' => '2019-05-16 04:45:00',
            ),
            368 => 
            array (
                'id' => 1882,
                'status_code' => '301',
                'from' => '/mir-pt-26-000/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:45:34',
                'updated_at' => '2019-05-16 04:45:34',
            ),
            369 => 
            array (
                'id' => 1883,
                'status_code' => '301',
                'from' => '/mir-pt-26-001/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:45:44',
                'updated_at' => '2019-05-16 04:45:44',
            ),
            370 => 
            array (
                'id' => 1884,
                'status_code' => '301',
                'from' => '/mir-pt-26-002/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:45:53',
                'updated_at' => '2019-05-16 04:45:53',
            ),
            371 => 
            array (
                'id' => 1885,
                'status_code' => '301',
                'from' => '/mir-pt-26-003/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:46:04',
                'updated_at' => '2019-05-16 04:46:04',
            ),
            372 => 
            array (
                'id' => 1886,
                'status_code' => '301',
                'from' => '/mir-pt-26-004/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:46:14',
                'updated_at' => '2019-05-16 04:46:14',
            ),
            373 => 
            array (
                'id' => 1887,
                'status_code' => '301',
                'from' => '/mir-pt-26-005/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:46:23',
                'updated_at' => '2019-05-16 04:46:23',
            ),
            374 => 
            array (
                'id' => 1888,
                'status_code' => '301',
                'from' => '/mir-pt-26-006/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:46:33',
                'updated_at' => '2019-05-16 04:46:33',
            ),
            375 => 
            array (
                'id' => 1889,
                'status_code' => '301',
                'from' => '/mir-pt-26-007/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:46:44',
                'updated_at' => '2019-05-16 04:46:44',
            ),
            376 => 
            array (
                'id' => 1890,
                'status_code' => '301',
                'from' => '/mir-pt-26-008/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:46:54',
                'updated_at' => '2019-05-16 04:46:54',
            ),
            377 => 
            array (
                'id' => 1891,
                'status_code' => '301',
                'from' => '/mir-pt-26-009/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:47:03',
                'updated_at' => '2019-05-16 04:47:03',
            ),
            378 => 
            array (
                'id' => 1892,
                'status_code' => '301',
                'from' => '/mir-pt-26-010/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:47:14',
                'updated_at' => '2019-05-16 04:47:14',
            ),
            379 => 
            array (
                'id' => 1893,
                'status_code' => '301',
                'from' => '/mir-pt-26-011/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:47:25',
                'updated_at' => '2019-05-16 04:47:25',
            ),
            380 => 
            array (
                'id' => 1894,
                'status_code' => '301',
                'from' => '/mir-pt-26-012/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:47:38',
                'updated_at' => '2019-05-16 04:47:38',
            ),
            381 => 
            array (
                'id' => 1895,
                'status_code' => '301',
                'from' => '/mir-pt-26-013/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:47:47',
                'updated_at' => '2019-05-16 04:47:47',
            ),
            382 => 
            array (
                'id' => 1896,
                'status_code' => '301',
                'from' => '/mir-pt-26-014/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:47:57',
                'updated_at' => '2019-05-16 04:47:57',
            ),
            383 => 
            array (
                'id' => 1897,
                'status_code' => '301',
                'from' => '/mir-pt-26-015/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:48:06',
                'updated_at' => '2019-05-16 04:48:06',
            ),
            384 => 
            array (
                'id' => 1898,
                'status_code' => '301',
                'from' => '/mir-pt-26-016/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:48:15',
                'updated_at' => '2019-05-16 04:48:15',
            ),
            385 => 
            array (
                'id' => 1899,
                'status_code' => '301',
                'from' => '/mir-pt-26-017/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:48:27',
                'updated_at' => '2019-05-16 04:48:27',
            ),
            386 => 
            array (
                'id' => 1900,
                'status_code' => '301',
                'from' => '/mir-pt-26-018/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:48:39',
                'updated_at' => '2019-05-16 04:48:39',
            ),
            387 => 
            array (
                'id' => 1901,
                'status_code' => '301',
                'from' => '/mir-pt-26-019/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:48:51',
                'updated_at' => '2019-05-16 04:48:51',
            ),
            388 => 
            array (
                'id' => 1902,
                'status_code' => '301',
                'from' => '/mir-pt-26-020/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:49:00',
                'updated_at' => '2019-05-16 04:49:00',
            ),
            389 => 
            array (
                'id' => 1903,
                'status_code' => '301',
                'from' => '/mir-pt-26-021/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:49:15',
                'updated_at' => '2019-05-16 04:49:15',
            ),
            390 => 
            array (
                'id' => 1904,
                'status_code' => '301',
                'from' => '/mir-pt-26-022/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:49:25',
                'updated_at' => '2019-05-16 04:49:25',
            ),
            391 => 
            array (
                'id' => 1905,
                'status_code' => '301',
                'from' => '/mir-pt-26-023/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:49:38',
                'updated_at' => '2019-05-16 04:49:38',
            ),
            392 => 
            array (
                'id' => 1906,
                'status_code' => '301',
                'from' => '/mir-pt-26-024/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:49:49',
                'updated_at' => '2019-05-16 04:49:49',
            ),
            393 => 
            array (
                'id' => 1907,
                'status_code' => '301',
                'from' => '/mir-pt-26-025/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:49:59',
                'updated_at' => '2019-05-16 04:49:59',
            ),
            394 => 
            array (
                'id' => 1908,
                'status_code' => '301',
                'from' => '/mir-pt-26-026/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:50:09',
                'updated_at' => '2019-05-16 04:50:09',
            ),
            395 => 
            array (
                'id' => 1909,
                'status_code' => '301',
                'from' => '/mir-pt-26-027/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:50:19',
                'updated_at' => '2019-05-16 04:50:19',
            ),
            396 => 
            array (
                'id' => 1910,
                'status_code' => '301',
                'from' => '/mir-pt-26-028/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:50:30',
                'updated_at' => '2019-05-16 04:50:30',
            ),
            397 => 
            array (
                'id' => 1911,
                'status_code' => '301',
                'from' => '/mir-pt-26-029/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:50:40',
                'updated_at' => '2019-05-16 04:50:40',
            ),
            398 => 
            array (
                'id' => 1912,
                'status_code' => '301',
                'from' => '/mir-pt-26-030/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:50:50',
                'updated_at' => '2019-05-16 04:50:50',
            ),
            399 => 
            array (
                'id' => 1913,
                'status_code' => '301',
                'from' => '/mir-pt-26-031/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:51:02',
                'updated_at' => '2019-05-16 04:51:02',
            ),
            400 => 
            array (
                'id' => 1914,
                'status_code' => '301',
                'from' => '/mir-pt-26-032/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:51:12',
                'updated_at' => '2019-05-16 04:51:12',
            ),
            401 => 
            array (
                'id' => 1915,
                'status_code' => '301',
                'from' => '/mir-pt-26-033/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:51:22',
                'updated_at' => '2019-05-16 04:51:22',
            ),
            402 => 
            array (
                'id' => 1916,
                'status_code' => '301',
                'from' => '/mir-pt-26-034/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:51:35',
                'updated_at' => '2019-05-16 04:51:35',
            ),
            403 => 
            array (
                'id' => 1917,
                'status_code' => '301',
                'from' => '/mir-pt-26-035/',
                'to' => '/category/elektroizmeritelnye-pribory/varmetry-vattmetry-chastotomery/',
                'created_at' => '2019-05-16 04:51:46',
                'updated_at' => '2019-05-16 04:51:46',
            ),
            404 => 
            array (
                'id' => 1918,
                'status_code' => '301',
                'from' => '/mir-c-03/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:54:40',
                'updated_at' => '2019-05-16 04:54:40',
            ),
            405 => 
            array (
                'id' => 1919,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-r-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:57:22',
                'updated_at' => '2019-05-16 04:57:22',
            ),
            406 => 
            array (
                'id' => 1920,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-r-k-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:57:32',
                'updated_at' => '2019-05-16 04:57:32',
            ),
            407 => 
            array (
                'id' => 1921,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-r-s1-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:57:41',
                'updated_at' => '2019-05-16 04:57:41',
            ),
            408 => 
            array (
                'id' => 1922,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-r-s1-dt1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:57:49',
                'updated_at' => '2019-05-16 04:57:49',
            ),
            409 => 
            array (
                'id' => 1923,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-r-s3-dt1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:57:58',
                'updated_at' => '2019-05-16 04:57:58',
            ),
            410 => 
            array (
                'id' => 1924,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:58:07',
                'updated_at' => '2019-05-16 04:58:07',
            ),
            411 => 
            array (
                'id' => 1925,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-k-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:58:15',
                'updated_at' => '2019-05-16 04:58:15',
            ),
            412 => 
            array (
                'id' => 1926,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-s1d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:58:23',
                'updated_at' => '2019-05-16 04:58:23',
            ),
            413 => 
            array (
                'id' => 1927,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-s1dt1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:58:31',
                'updated_at' => '2019-05-16 04:58:31',
            ),
            414 => 
            array (
                'id' => 1928,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-z-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:58:41',
                'updated_at' => '2019-05-16 04:58:41',
            ),
            415 => 
            array (
                'id' => 1929,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-z-k-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:58:51',
                'updated_at' => '2019-05-16 04:58:51',
            ),
            416 => 
            array (
                'id' => 1930,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-z-z-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:59:01',
                'updated_at' => '2019-05-16 04:59:01',
            ),
            417 => 
            array (
                'id' => 1931,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-z-k-z-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:59:13',
                'updated_at' => '2019-05-16 04:59:13',
            ),
            418 => 
            array (
                'id' => 1932,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-z-s1-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:59:23',
                'updated_at' => '2019-05-16 04:59:23',
            ),
            419 => 
            array (
                'id' => 1933,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-z-s1-z-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:59:34',
                'updated_at' => '2019-05-16 04:59:34',
            ),
            420 => 
            array (
                'id' => 1934,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-z-s1-dt1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:59:44',
                'updated_at' => '2019-05-16 04:59:44',
            ),
            421 => 
            array (
                'id' => 1935,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-z-s1-z-dt1/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 04:59:54',
                'updated_at' => '2019-05-16 04:59:54',
            ),
            422 => 
            array (
                'id' => 1936,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-z-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:00:04',
                'updated_at' => '2019-05-16 05:00:04',
            ),
            423 => 
            array (
                'id' => 1937,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-z-k-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:00:13',
                'updated_at' => '2019-05-16 05:00:13',
            ),
            424 => 
            array (
                'id' => 1938,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-z-z-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:00:23',
                'updated_at' => '2019-05-16 05:00:23',
            ),
            425 => 
            array (
                'id' => 1939,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-z-k-z-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:00:32',
                'updated_at' => '2019-05-16 05:00:32',
            ),
            426 => 
            array (
                'id' => 1940,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-f-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:00:40',
                'updated_at' => '2019-05-16 05:00:40',
            ),
            427 => 
            array (
                'id' => 1941,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-f-k-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:00:49',
                'updated_at' => '2019-05-16 05:00:49',
            ),
            428 => 
            array (
                'id' => 1942,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-f-fd/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:01:00',
                'updated_at' => '2019-05-16 05:01:00',
            ),
            429 => 
            array (
                'id' => 1943,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-f-k-fd/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:01:09',
                'updated_at' => '2019-05-16 05:01:09',
            ),
            430 => 
            array (
                'id' => 1944,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-z-f-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:01:20',
                'updated_at' => '2019-05-16 05:01:20',
            ),
            431 => 
            array (
                'id' => 1945,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-z-f-k-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:01:30',
                'updated_at' => '2019-05-16 05:01:30',
            ),
            432 => 
            array (
                'id' => 1946,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-f-ed/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:01:40',
                'updated_at' => '2019-05-16 05:01:40',
            ),
            433 => 
            array (
                'id' => 1947,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-f-k-ed/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:01:49',
                'updated_at' => '2019-05-16 05:01:49',
            ),
            434 => 
            array (
                'id' => 1948,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-f-k-ed/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:01:58',
                'updated_at' => '2019-05-16 05:01:58',
            ),
            435 => 
            array (
                'id' => 1949,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-f-k-ned/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:02:07',
                'updated_at' => '2019-05-16 05:02:07',
            ),
            436 => 
            array (
                'id' => 1950,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-z-f-k-ed/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:02:17',
                'updated_at' => '2019-05-16 05:02:17',
            ),
            437 => 
            array (
                'id' => 1951,
                'status_code' => '301',
                'from' => '/mir-s-04-10-230-5100-p-z-f-k-ned/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:02:27',
                'updated_at' => '2019-05-16 05:02:27',
            ),
            438 => 
            array (
                'id' => 1952,
                'status_code' => '301',
                'from' => '/mir-s-04-02-230-5100-r-p/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:02:36',
                'updated_at' => '2019-05-16 05:02:36',
            ),
            439 => 
            array (
                'id' => 1953,
                'status_code' => '301',
                'from' => '/mir-s-05-10-230-580-p-k-n-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:02:59',
                'updated_at' => '2019-05-16 05:02:59',
            ),
            440 => 
            array (
                'id' => 1954,
                'status_code' => '301',
                'from' => '/mir-s-05-10-230-580-p-k-n-v-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:03:09',
                'updated_at' => '2019-05-16 05:03:09',
            ),
            441 => 
            array (
                'id' => 1955,
                'status_code' => '301',
                'from' => '/mir-s-05-10-230-580-p-z-k-n-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:03:18',
                'updated_at' => '2019-05-16 05:03:18',
            ),
            442 => 
            array (
                'id' => 1956,
                'status_code' => '301',
                'from' => '/mir-s-05-10-230-580-z-k-n-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:03:27',
                'updated_at' => '2019-05-16 05:03:27',
            ),
            443 => 
            array (
                'id' => 1957,
                'status_code' => '301',
                'from' => '/mir-s-05-10-230-580-p-f-k-n-ed/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:03:37',
                'updated_at' => '2019-05-16 05:03:37',
            ),
            444 => 
            array (
                'id' => 1958,
                'status_code' => '301',
                'from' => '/mir-s-05-10-230-580-p-z-f-k-n-ed/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:03:47',
                'updated_at' => '2019-05-16 05:03:47',
            ),
            445 => 
            array (
                'id' => 1959,
                'status_code' => '301',
                'from' => '/mir-s-05-10-230-580-z-f-k-n-ed/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:03:55',
                'updated_at' => '2019-05-16 05:03:55',
            ),
            446 => 
            array (
                'id' => 1960,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-12-r-p/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:04:05',
                'updated_at' => '2019-05-16 05:04:05',
            ),
            447 => 
            array (
                'id' => 1961,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-r-p/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:04:14',
                'updated_at' => '2019-05-16 05:04:14',
            ),
            448 => 
            array (
                'id' => 1962,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-57-12-r-p/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:04:24',
                'updated_at' => '2019-05-16 05:04:24',
            ),
            449 => 
            array (
                'id' => 1963,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-57-510-r-p/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:04:34',
                'updated_at' => '2019-05-16 05:04:34',
            ),
            450 => 
            array (
                'id' => 1964,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-12-r-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:04:44',
                'updated_at' => '2019-05-16 05:04:44',
            ),
            451 => 
            array (
                'id' => 1965,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-r-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:04:54',
                'updated_at' => '2019-05-16 05:04:54',
            ),
            452 => 
            array (
                'id' => 1966,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-r-p-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:05:05',
                'updated_at' => '2019-05-16 05:05:05',
            ),
            453 => 
            array (
                'id' => 1967,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-r-s1-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:05:15',
                'updated_at' => '2019-05-16 05:05:15',
            ),
            454 => 
            array (
                'id' => 1968,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-r-bd/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:05:24',
                'updated_at' => '2019-05-16 05:05:24',
            ),
            455 => 
            array (
                'id' => 1969,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-r-hd/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:05:34',
                'updated_at' => '2019-05-16 05:05:34',
            ),
            456 => 
            array (
                'id' => 1970,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-57-12-r-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:05:42',
                'updated_at' => '2019-05-16 05:05:42',
            ),
            457 => 
            array (
                'id' => 1971,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-57-510-r-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:05:51',
                'updated_at' => '2019-05-16 05:05:51',
            ),
            458 => 
            array (
                'id' => 1972,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-12-r-m/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:06:03',
                'updated_at' => '2019-05-16 05:06:03',
            ),
            459 => 
            array (
                'id' => 1973,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-r-m/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:06:12',
                'updated_at' => '2019-05-16 05:06:12',
            ),
            460 => 
            array (
                'id' => 1974,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-r-p-m/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:06:22',
                'updated_at' => '2019-05-16 05:06:22',
            ),
            461 => 
            array (
                'id' => 1975,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-57-12-r-m/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:06:31',
                'updated_at' => '2019-05-16 05:06:31',
            ),
            462 => 
            array (
                'id' => 1976,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-57-510-r-m/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:06:40',
                'updated_at' => '2019-05-16 05:06:40',
            ),
            463 => 
            array (
                'id' => 1977,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-p-p/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:07:09',
                'updated_at' => '2019-05-16 05:07:09',
            ),
            464 => 
            array (
                'id' => 1978,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-p-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:07:18',
                'updated_at' => '2019-05-16 05:07:18',
            ),
            465 => 
            array (
                'id' => 1979,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-p-s1-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:07:26',
                'updated_at' => '2019-05-16 05:07:26',
            ),
            466 => 
            array (
                'id' => 1980,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-z-p/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:07:34',
                'updated_at' => '2019-05-16 05:07:34',
            ),
            467 => 
            array (
                'id' => 1981,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-p-z-p/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:07:43',
                'updated_at' => '2019-05-16 05:07:43',
            ),
            468 => 
            array (
                'id' => 1982,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-z-z-p/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:07:51',
                'updated_at' => '2019-05-16 05:07:51',
            ),
            469 => 
            array (
                'id' => 1983,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-p-z-z-p/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:07:59',
                'updated_at' => '2019-05-16 05:07:59',
            ),
            470 => 
            array (
                'id' => 1984,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-p-z-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:08:08',
                'updated_at' => '2019-05-16 05:08:08',
            ),
            471 => 
            array (
                'id' => 1985,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-p-z-s1-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:08:18',
                'updated_at' => '2019-05-16 05:08:18',
            ),
            472 => 
            array (
                'id' => 1986,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-p-z-bd/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:08:26',
                'updated_at' => '2019-05-16 05:08:26',
            ),
            473 => 
            array (
                'id' => 1987,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-p-z-hd/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:08:35',
                'updated_at' => '2019-05-16 05:08:35',
            ),
            474 => 
            array (
                'id' => 1988,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-p-z-s1-vhd/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:08:44',
                'updated_at' => '2019-05-16 05:08:44',
            ),
            475 => 
            array (
                'id' => 1989,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-p-z-z-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:08:51',
                'updated_at' => '2019-05-16 05:08:51',
            ),
            476 => 
            array (
                'id' => 1990,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-p-z-s1-z-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:08:59',
                'updated_at' => '2019-05-16 05:08:59',
            ),
            477 => 
            array (
                'id' => 1991,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-p-f-fd/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:09:07',
                'updated_at' => '2019-05-16 05:09:07',
            ),
            478 => 
            array (
                'id' => 1992,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-z-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:09:28',
                'updated_at' => '2019-05-16 05:09:28',
            ),
            479 => 
            array (
                'id' => 1993,
                'status_code' => '301',
                'from' => '/mir-s-07-05s-230-510-z-z-d/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:09:36',
                'updated_at' => '2019-05-16 05:09:36',
            ),
            480 => 
            array (
                'id' => 1994,
                'status_code' => '302',
                'from' => '/brand/mir-omsk/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:11:11',
                'updated_at' => '2019-05-16 05:11:11',
            ),
            481 => 
            array (
                'id' => 1995,
                'status_code' => '301',
                'from' => '/about/news/mir-metering/',
                'to' => '/category/schetchiki-energy/',
                'created_at' => '2019-05-16 05:47:04',
                'updated_at' => '2019-05-16 05:47:04',
            ),
            482 => 
            array (
                'id' => 1996,
                'status_code' => '301',
                'from' => '/zps-35-3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:06:39',
                'updated_at' => '2019-05-20 10:06:39',
            ),
            483 => 
            array (
                'id' => 1997,
                'status_code' => '301',
                'from' => '/zps-50-3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:06:48',
                'updated_at' => '2019-05-20 10:06:48',
            ),
            484 => 
            array (
                'id' => 1998,
                'status_code' => '301',
                'from' => '/nb-2-6/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:06:57',
                'updated_at' => '2019-05-20 10:06:57',
            ),
            485 => 
            array (
                'id' => 1999,
                'status_code' => '301',
                'from' => '/nz-2-7/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:07:05',
                'updated_at' => '2019-05-20 10:07:05',
            ),
            486 => 
            array (
                'id' => 2000,
                'status_code' => '301',
                'from' => '/nkk-1-1b-n1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:07:13',
                'updated_at' => '2019-05-20 10:07:13',
            ),
            487 => 
            array (
                'id' => 2001,
                'status_code' => '301',
                'from' => '/nkk-1-1b-n2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:07:23',
                'updated_at' => '2019-05-20 10:07:23',
            ),
            488 => 
            array (
                'id' => 2002,
                'status_code' => '301',
                'from' => '/pgn-2-6/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:07:33',
                'updated_at' => '2019-05-20 10:07:33',
            ),
            489 => 
            array (
                'id' => 2003,
                'status_code' => '301',
                'from' => '/pgn-2-6a/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:07:41',
                'updated_at' => '2019-05-20 10:07:41',
            ),
            490 => 
            array (
                'id' => 2004,
                'status_code' => '301',
                'from' => '/pgn-3-5/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:07:50',
                'updated_at' => '2019-05-20 10:07:50',
            ),
            491 => 
            array (
                'id' => 2005,
                'status_code' => '301',
                'from' => '/pgn-5-3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:07:59',
                'updated_at' => '2019-05-20 10:07:59',
            ),
            492 => 
            array (
                'id' => 2006,
                'status_code' => '301',
                'from' => '/ps-1-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:08:08',
                'updated_at' => '2019-05-20 10:08:08',
            ),
            493 => 
            array (
                'id' => 2007,
                'status_code' => '301',
                'from' => '/ps-2-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:08:17',
                'updated_at' => '2019-05-20 10:08:17',
            ),
            494 => 
            array (
                'id' => 2008,
                'status_code' => '301',
                'from' => '/pa-1-4/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:08:25',
                'updated_at' => '2019-05-20 10:08:25',
            ),
            495 => 
            array (
                'id' => 2009,
                'status_code' => '301',
                'from' => '/pr-7-6/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:08:33',
                'updated_at' => '2019-05-20 10:08:33',
            ),
            496 => 
            array (
                'id' => 2010,
                'status_code' => '301',
                'from' => '/pr-12-6/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:08:41',
                'updated_at' => '2019-05-20 10:08:41',
            ),
            497 => 
            array (
                'id' => 2011,
                'status_code' => '301',
                'from' => '/2pr-7-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:08:49',
                'updated_at' => '2019-05-20 10:08:49',
            ),
            498 => 
            array (
                'id' => 2012,
                'status_code' => '301',
                'from' => '/2pr-12-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:08:57',
                'updated_at' => '2019-05-20 10:08:57',
            ),
            499 => 
            array (
                'id' => 2013,
                'status_code' => '301',
                'from' => '/2prr-7-2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:09:06',
                'updated_at' => '2019-05-20 10:09:06',
            ),
        ));
        \DB::table('redirects')->insert(array (
            0 => 
            array (
                'id' => 2014,
                'status_code' => '301',
                'from' => '/2prr-12-2a/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:09:17',
                'updated_at' => '2019-05-20 10:09:17',
            ),
            1 => 
            array (
                'id' => 2015,
                'status_code' => '301',
                'from' => '/2prr-12-2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:09:25',
                'updated_at' => '2019-05-20 10:09:25',
            ),
            2 => 
            array (
                'id' => 2016,
                'status_code' => '301',
                'from' => '/prr-7-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:09:33',
                'updated_at' => '2019-05-20 10:09:33',
            ),
            3 => 
            array (
                'id' => 2017,
                'status_code' => '301',
                'from' => '/prr-12-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:09:42',
                'updated_at' => '2019-05-20 10:09:42',
            ),
            4 => 
            array (
                'id' => 2018,
                'status_code' => '301',
                'from' => '/prr-12-1a/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:09:51',
                'updated_at' => '2019-05-20 10:09:51',
            ),
            5 => 
            array (
                'id' => 2019,
                'status_code' => '301',
                'from' => '/prt-7-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:09:59',
                'updated_at' => '2019-05-20 10:09:59',
            ),
            6 => 
            array (
                'id' => 2020,
                'status_code' => '301',
                'from' => '/prt-12-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:10:09',
                'updated_at' => '2019-05-20 10:10:09',
            ),
            7 => 
            array (
                'id' => 2021,
                'status_code' => '301',
                'from' => '/prv-7-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:10:19',
                'updated_at' => '2019-05-20 10:10:19',
            ),
            8 => 
            array (
                'id' => 2022,
                'status_code' => '301',
                'from' => '/prv-12-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:10:29',
                'updated_at' => '2019-05-20 10:10:29',
            ),
            9 => 
            array (
                'id' => 2023,
                'status_code' => '301',
                'from' => '/ptm-7-2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:10:37',
                'updated_at' => '2019-05-20 10:10:37',
            ),
            10 => 
            array (
                'id' => 2024,
                'status_code' => '301',
                'from' => '/ptm-12-2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:10:46',
                'updated_at' => '2019-05-20 10:10:46',
            ),
            11 => 
            array (
                'id' => 2025,
                'status_code' => '301',
                'from' => '/ptm-7-3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:10:56',
                'updated_at' => '2019-05-20 10:10:56',
            ),
            12 => 
            array (
                'id' => 2026,
                'status_code' => '301',
                'from' => '/ptm-7-3a/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:11:06',
                'updated_at' => '2019-05-20 10:11:06',
            ),
            13 => 
            array (
                'id' => 2027,
                'status_code' => '301',
                'from' => '/ptm-12-3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:11:15',
                'updated_at' => '2019-05-20 10:11:15',
            ),
            14 => 
            array (
                'id' => 2028,
                'status_code' => '301',
                'from' => '/ptm-12-3a/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:11:24',
                'updated_at' => '2019-05-20 10:11:24',
            ),
            15 => 
            array (
                'id' => 2029,
                'status_code' => '301',
                'from' => '/ptr-7-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:11:35',
                'updated_at' => '2019-05-20 10:11:35',
            ),
            16 => 
            array (
                'id' => 2030,
                'status_code' => '301',
                'from' => '/sr-7-16/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:11:43',
                'updated_at' => '2019-05-20 10:11:43',
            ),
            17 => 
            array (
                'id' => 2031,
                'status_code' => '301',
                'from' => '/sr-12-16/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:11:53',
                'updated_at' => '2019-05-20 10:11:53',
            ),
            18 => 
            array (
                'id' => 2032,
                'status_code' => '301',
                'from' => '/srs-7-16/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:12:01',
                'updated_at' => '2019-05-20 10:12:01',
            ),
            19 => 
            array (
                'id' => 2033,
                'status_code' => '301',
                'from' => '/sk-7-1a/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:12:10',
                'updated_at' => '2019-05-20 10:12:10',
            ),
            20 => 
            array (
                'id' => 2034,
                'status_code' => '301',
                'from' => '/sk-12-1a/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:12:18',
                'updated_at' => '2019-05-20 10:12:18',
            ),
            21 => 
            array (
                'id' => 2035,
                'status_code' => '301',
                'from' => '/kg-12-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:12:27',
                'updated_at' => '2019-05-20 10:12:27',
            ),
            22 => 
            array (
                'id' => 2036,
                'status_code' => '301',
                'from' => '/kg-12-3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:12:34',
                'updated_at' => '2019-05-20 10:12:34',
            ),
            23 => 
            array (
                'id' => 2037,
                'status_code' => '301',
                'from' => '/kgt-7-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:12:42',
                'updated_at' => '2019-05-20 10:12:42',
            ),
            24 => 
            array (
                'id' => 2038,
                'status_code' => '301',
                'from' => '/kgp-7-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:12:52',
                'updated_at' => '2019-05-20 10:12:52',
            ),
            25 => 
            array (
                'id' => 2039,
                'status_code' => '301',
                'from' => '/kgp-7-1b/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:13:03',
                'updated_at' => '2019-05-20 10:13:03',
            ),
            26 => 
            array (
                'id' => 2040,
                'status_code' => '301',
                'from' => '/kgp-7-1e/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:13:13',
                'updated_at' => '2019-05-20 10:13:13',
            ),
            27 => 
            array (
                'id' => 2041,
                'status_code' => '301',
                'from' => '/kgp-7-1a/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:13:23',
                'updated_at' => '2019-05-20 10:13:23',
            ),
            28 => 
            array (
                'id' => 2042,
                'status_code' => '301',
                'from' => '/kgp-7-2b/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:13:32',
                'updated_at' => '2019-05-20 10:13:32',
            ),
            29 => 
            array (
                'id' => 2043,
                'status_code' => '301',
                'from' => '/kgp-7-2v/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:13:40',
                'updated_at' => '2019-05-20 10:13:40',
            ),
            30 => 
            array (
                'id' => 2044,
                'status_code' => '301',
                'from' => '/kgp-7-2d/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:13:48',
                'updated_at' => '2019-05-20 10:13:48',
            ),
            31 => 
            array (
                'id' => 2045,
                'status_code' => '301',
                'from' => '/kgp-7-3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:13:57',
                'updated_at' => '2019-05-20 10:13:57',
            ),
            32 => 
            array (
                'id' => 2046,
                'status_code' => '301',
                'from' => '/u1-7-16/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:14:06',
                'updated_at' => '2019-05-20 10:14:06',
            ),
            33 => 
            array (
                'id' => 2047,
                'status_code' => '301',
                'from' => '/u2-12-16/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:14:14',
                'updated_at' => '2019-05-20 10:14:14',
            ),
            34 => 
            array (
                'id' => 2048,
                'status_code' => '301',
                'from' => '/u1k-7-16/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:14:23',
                'updated_at' => '2019-05-20 10:14:23',
            ),
            35 => 
            array (
                'id' => 2049,
                'status_code' => '301',
                'from' => '/u2-7-16/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:14:31',
                'updated_at' => '2019-05-20 10:14:31',
            ),
            36 => 
            array (
                'id' => 2050,
                'status_code' => '301',
                'from' => '/u2k-7-16/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:14:38',
                'updated_at' => '2019-05-20 10:14:38',
            ),
            37 => 
            array (
                'id' => 2051,
                'status_code' => '301',
                'from' => '/uc-7-16/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:14:46',
                'updated_at' => '2019-05-20 10:14:46',
            ),
            38 => 
            array (
                'id' => 2052,
                'status_code' => '301',
                'from' => '/skd-10-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:14:55',
                'updated_at' => '2019-05-20 10:14:55',
            ),
            39 => 
            array (
                'id' => 2053,
                'status_code' => '301',
                'from' => '/skd-12-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:15:03',
                'updated_at' => '2019-05-20 10:15:03',
            ),
            40 => 
            array (
                'id' => 2054,
                'status_code' => '301',
                'from' => '/prt-12-7-2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:15:12',
                'updated_at' => '2019-05-20 10:15:12',
            ),
            41 => 
            array (
                'id' => 2055,
                'status_code' => '301',
                'from' => '/2ku-12-1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:15:19',
                'updated_at' => '2019-05-20 10:15:19',
            ),
            42 => 
            array (
                'id' => 2056,
                'status_code' => '302',
                'from' => '/category/oborudovanie-vl/insulators/fittings/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 10:15:40',
                'updated_at' => '2019-05-20 10:15:40',
            ),
            43 => 
            array (
                'id' => 2057,
                'status_code' => '301',
                'from' => '/lk_70_10_2_gp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:04:06',
                'updated_at' => '2019-05-20 11:04:06',
            ),
            44 => 
            array (
                'id' => 2058,
                'status_code' => '301',
                'from' => '/lk_70_10_2_gs/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:04:16',
                'updated_at' => '2019-05-20 11:04:16',
            ),
            45 => 
            array (
                'id' => 2059,
                'status_code' => '301',
                'from' => '/lk_70_10_2_sp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:04:25',
                'updated_at' => '2019-05-20 11:04:25',
            ),
            46 => 
            array (
                'id' => 2060,
                'status_code' => '301',
                'from' => '/lk_70_10_2_ss/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:04:34',
                'updated_at' => '2019-05-20 11:04:34',
            ),
            47 => 
            array (
                'id' => 2061,
                'status_code' => '301',
                'from' => '/lk_70_10_3_gp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:04:43',
                'updated_at' => '2019-05-20 11:04:43',
            ),
            48 => 
            array (
                'id' => 2062,
                'status_code' => '301',
                'from' => '/lk_70_10_3_gs/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:04:52',
                'updated_at' => '2019-05-20 11:04:52',
            ),
            49 => 
            array (
                'id' => 2063,
                'status_code' => '301',
                'from' => '/lk_70_10_3_sp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:05:01',
                'updated_at' => '2019-05-20 11:05:01',
            ),
            50 => 
            array (
                'id' => 2064,
                'status_code' => '301',
                'from' => '/lk_70_10_3_ss/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:05:11',
                'updated_at' => '2019-05-20 11:05:11',
            ),
            51 => 
            array (
                'id' => 2065,
                'status_code' => '301',
                'from' => '/lk_70_10_4_gp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:05:19',
                'updated_at' => '2019-05-20 11:05:19',
            ),
            52 => 
            array (
                'id' => 2066,
                'status_code' => '301',
                'from' => '/lk_70_10_4_gs/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:05:28',
                'updated_at' => '2019-05-20 11:05:28',
            ),
            53 => 
            array (
                'id' => 2067,
                'status_code' => '301',
                'from' => '/lk_70_10_4_sp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:05:37',
                'updated_at' => '2019-05-20 11:05:37',
            ),
            54 => 
            array (
                'id' => 2068,
                'status_code' => '301',
                'from' => '/lk_70_10_4_ss/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:05:47',
                'updated_at' => '2019-05-20 11:05:47',
            ),
            55 => 
            array (
                'id' => 2069,
                'status_code' => '301',
                'from' => '/lk_70_15_4_gp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:05:56',
                'updated_at' => '2019-05-20 11:05:56',
            ),
            56 => 
            array (
                'id' => 2070,
                'status_code' => '301',
                'from' => '/lk_70_15_4_gs/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:06:05',
                'updated_at' => '2019-05-20 11:06:05',
            ),
            57 => 
            array (
                'id' => 2071,
                'status_code' => '301',
                'from' => '/lk_70_15_4_sp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:06:15',
                'updated_at' => '2019-05-20 11:06:15',
            ),
            58 => 
            array (
                'id' => 2072,
                'status_code' => '301',
                'from' => '/lk_70_15_4_ss/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:06:27',
                'updated_at' => '2019-05-20 11:06:27',
            ),
            59 => 
            array (
                'id' => 2073,
                'status_code' => '301',
                'from' => '/lk_70_20_2_gp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:06:36',
                'updated_at' => '2019-05-20 11:06:36',
            ),
            60 => 
            array (
                'id' => 2074,
                'status_code' => '301',
                'from' => '/lk_70_20_2_gs/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:06:44',
                'updated_at' => '2019-05-20 11:06:44',
            ),
            61 => 
            array (
                'id' => 2075,
                'status_code' => '301',
                'from' => '/lk_70_20_2_sp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:06:53',
                'updated_at' => '2019-05-20 11:06:53',
            ),
            62 => 
            array (
                'id' => 2076,
                'status_code' => '301',
                'from' => '/lk_70_20_2_ss/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:07:03',
                'updated_at' => '2019-05-20 11:07:03',
            ),
            63 => 
            array (
                'id' => 2077,
                'status_code' => '301',
                'from' => '/lk_70_20_3_gp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:07:12',
                'updated_at' => '2019-05-20 11:07:12',
            ),
            64 => 
            array (
                'id' => 2078,
                'status_code' => '301',
                'from' => '/lk_70_20_3_gs/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:07:22',
                'updated_at' => '2019-05-20 11:07:22',
            ),
            65 => 
            array (
                'id' => 2079,
                'status_code' => '301',
                'from' => '/lk_70_20_3_sp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:07:30',
                'updated_at' => '2019-05-20 11:07:30',
            ),
            66 => 
            array (
                'id' => 2080,
                'status_code' => '301',
                'from' => '/lk_70_20_3_ss/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:07:38',
                'updated_at' => '2019-05-20 11:07:38',
            ),
            67 => 
            array (
                'id' => 2081,
                'status_code' => '301',
                'from' => '/lk_70_20_4_gp_765/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:07:48',
                'updated_at' => '2019-05-20 11:07:48',
            ),
            68 => 
            array (
                'id' => 2082,
                'status_code' => '301',
                'from' => '/lk_70_20_4_gs_765/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:07:55',
                'updated_at' => '2019-05-20 11:07:55',
            ),
            69 => 
            array (
                'id' => 2083,
                'status_code' => '301',
                'from' => '/lk_70_20_4_sp_765/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:08:23',
                'updated_at' => '2019-05-20 11:08:23',
            ),
            70 => 
            array (
                'id' => 2084,
                'status_code' => '301',
                'from' => '/lk_70_20_4_ss_765/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:08:32',
                'updated_at' => '2019-05-20 11:08:32',
            ),
            71 => 
            array (
                'id' => 2085,
                'status_code' => '301',
                'from' => '/lk_70_20_4_gp_890/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:08:40',
                'updated_at' => '2019-05-20 11:08:40',
            ),
            72 => 
            array (
                'id' => 2086,
                'status_code' => '301',
                'from' => '/lk_70_20_4_gs_890/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:08:51',
                'updated_at' => '2019-05-20 11:08:51',
            ),
            73 => 
            array (
                'id' => 2087,
                'status_code' => '301',
                'from' => '/lk_70_20_4_sp_890/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:09:00',
                'updated_at' => '2019-05-20 11:09:00',
            ),
            74 => 
            array (
                'id' => 2088,
                'status_code' => '301',
                'from' => '/lk_70_20_4_ss_890/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:09:08',
                'updated_at' => '2019-05-20 11:09:08',
            ),
            75 => 
            array (
                'id' => 2089,
                'status_code' => '301',
                'from' => '/lk_70_35_2_gp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:09:17',
                'updated_at' => '2019-05-20 11:09:17',
            ),
            76 => 
            array (
                'id' => 2090,
                'status_code' => '301',
                'from' => '/lk_70_35_2_gs/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:09:25',
                'updated_at' => '2019-05-20 11:09:25',
            ),
            77 => 
            array (
                'id' => 2091,
                'status_code' => '301',
                'from' => '/lk_70_35_2_sp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:09:33',
                'updated_at' => '2019-05-20 11:09:33',
            ),
            78 => 
            array (
                'id' => 2092,
                'status_code' => '301',
                'from' => '/lk_70_35_2_ss/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:09:42',
                'updated_at' => '2019-05-20 11:09:42',
            ),
            79 => 
            array (
                'id' => 2093,
                'status_code' => '301',
                'from' => '/lk_70_35_3_gp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:09:51',
                'updated_at' => '2019-05-20 11:09:51',
            ),
            80 => 
            array (
                'id' => 2094,
                'status_code' => '301',
                'from' => '/lk_70_35_3_gs/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:10:00',
                'updated_at' => '2019-05-20 11:10:00',
            ),
            81 => 
            array (
                'id' => 2095,
                'status_code' => '301',
                'from' => '/lk_70_35_3_sp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:10:08',
                'updated_at' => '2019-05-20 11:10:08',
            ),
            82 => 
            array (
                'id' => 2096,
                'status_code' => '301',
                'from' => '/lk_70_35_3_ss/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:10:17',
                'updated_at' => '2019-05-20 11:10:17',
            ),
            83 => 
            array (
                'id' => 2097,
                'status_code' => '301',
                'from' => '/lk_70_35_4_gp_1115/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:10:25',
                'updated_at' => '2019-05-20 11:10:25',
            ),
            84 => 
            array (
                'id' => 2098,
                'status_code' => '301',
                'from' => '/lk_70_35_4_gs_1115/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:10:35',
                'updated_at' => '2019-05-20 11:10:35',
            ),
            85 => 
            array (
                'id' => 2099,
                'status_code' => '301',
                'from' => '/lk_70_35_4_sp_1115/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:10:45',
                'updated_at' => '2019-05-20 11:10:45',
            ),
            86 => 
            array (
                'id' => 2100,
                'status_code' => '301',
                'from' => '/lk_70_35_4_ss_1115/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:10:54',
                'updated_at' => '2019-05-20 11:10:54',
            ),
            87 => 
            array (
                'id' => 2101,
                'status_code' => '301',
                'from' => '/lk_70_35_4_gp_1300/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:11:07',
                'updated_at' => '2019-05-20 11:11:07',
            ),
            88 => 
            array (
                'id' => 2102,
                'status_code' => '301',
                'from' => '/lk_70_35_4_gs_1300/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:11:25',
                'updated_at' => '2019-05-20 11:11:25',
            ),
            89 => 
            array (
                'id' => 2103,
                'status_code' => '301',
                'from' => '/lk_70_35_4_sp_1300/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:11:34',
                'updated_at' => '2019-05-20 11:11:34',
            ),
            90 => 
            array (
                'id' => 2104,
                'status_code' => '301',
                'from' => '/lk_70_35_4_ss_1300/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:11:47',
                'updated_at' => '2019-05-20 11:11:47',
            ),
            91 => 
            array (
                'id' => 2105,
                'status_code' => '301',
                'from' => '/lk_70_110_2_gp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:11:55',
                'updated_at' => '2019-05-20 11:11:55',
            ),
            92 => 
            array (
                'id' => 2106,
                'status_code' => '301',
                'from' => '/lk_70_110_2_gs/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:12:07',
                'updated_at' => '2019-05-20 11:12:07',
            ),
            93 => 
            array (
                'id' => 2107,
                'status_code' => '301',
                'from' => '/lk_70_110_2_sp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:12:17',
                'updated_at' => '2019-05-20 11:12:17',
            ),
            94 => 
            array (
                'id' => 2108,
                'status_code' => '301',
                'from' => '/lk_70_110_2_ss/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:12:24',
                'updated_at' => '2019-05-20 11:12:24',
            ),
            95 => 
            array (
                'id' => 2109,
                'status_code' => '301',
                'from' => '/lk_70_110_3_gp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:12:36',
                'updated_at' => '2019-05-20 11:12:36',
            ),
            96 => 
            array (
                'id' => 2110,
                'status_code' => '301',
                'from' => '/lk_70_110_3_gs/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:12:45',
                'updated_at' => '2019-05-20 11:12:45',
            ),
            97 => 
            array (
                'id' => 2111,
                'status_code' => '301',
                'from' => '/lk_70_110_3_sp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:12:54',
                'updated_at' => '2019-05-20 11:12:54',
            ),
            98 => 
            array (
                'id' => 2112,
                'status_code' => '301',
                'from' => '/lk_70_110_3_ss/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:13:01',
                'updated_at' => '2019-05-20 11:13:01',
            ),
            99 => 
            array (
                'id' => 2113,
                'status_code' => '301',
                'from' => '/lk_70_110_4_gp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:13:10',
                'updated_at' => '2019-05-20 11:13:10',
            ),
            100 => 
            array (
                'id' => 2114,
                'status_code' => '301',
                'from' => '/lk_70_110_4_gs/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:13:17',
                'updated_at' => '2019-05-20 11:13:17',
            ),
            101 => 
            array (
                'id' => 2115,
                'status_code' => '301',
                'from' => '/lk_70_110_4_sp/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:13:25',
                'updated_at' => '2019-05-20 11:13:25',
            ),
            102 => 
            array (
                'id' => 2116,
                'status_code' => '301',
                'from' => '/lk_70_110_4_ss/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:13:32',
                'updated_at' => '2019-05-20 11:13:32',
            ),
            103 => 
            array (
                'id' => 2117,
                'status_code' => '301',
                'from' => '/ps_70e_112w/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:40:32',
                'updated_at' => '2019-05-20 11:40:32',
            ),
            104 => 
            array (
                'id' => 2118,
                'status_code' => '301',
                'from' => '/ps_70e_112v/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:40:40',
                'updated_at' => '2019-05-20 11:40:40',
            ),
            105 => 
            array (
                'id' => 2119,
                'status_code' => '301',
                'from' => '/ps_70e_212w/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:40:51',
                'updated_at' => '2019-05-20 11:40:51',
            ),
            106 => 
            array (
                'id' => 2120,
                'status_code' => '301',
                'from' => '/ps_70e_212v/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:41:00',
                'updated_at' => '2019-05-20 11:41:00',
            ),
            107 => 
            array (
                'id' => 2121,
                'status_code' => '301',
                'from' => '/ps_70i/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:41:09',
                'updated_at' => '2019-05-20 11:41:09',
            ),
            108 => 
            array (
                'id' => 2122,
                'status_code' => '301',
                'from' => '/psd_70e_112w/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:41:16',
                'updated_at' => '2019-05-20 11:41:16',
            ),
            109 => 
            array (
                'id' => 2123,
                'status_code' => '301',
                'from' => '/psd_70e_112v/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:41:24',
                'updated_at' => '2019-05-20 11:41:24',
            ),
            110 => 
            array (
                'id' => 2124,
                'status_code' => '301',
                'from' => '/psd_70e_212w/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:41:32',
                'updated_at' => '2019-05-20 11:41:32',
            ),
            111 => 
            array (
                'id' => 2125,
                'status_code' => '301',
                'from' => '/psd_70e_212v/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:41:40',
                'updated_at' => '2019-05-20 11:41:40',
            ),
            112 => 
            array (
                'id' => 2126,
                'status_code' => '301',
                'from' => '/ps_120b_112w/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:41:48',
                'updated_at' => '2019-05-20 11:41:48',
            ),
            113 => 
            array (
                'id' => 2127,
                'status_code' => '301',
                'from' => '/ps_120b_112v/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:41:56',
                'updated_at' => '2019-05-20 11:41:56',
            ),
            114 => 
            array (
                'id' => 2128,
                'status_code' => '301',
                'from' => '/ps_120b_212w/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:42:06',
                'updated_at' => '2019-05-20 11:42:06',
            ),
            115 => 
            array (
                'id' => 2129,
                'status_code' => '301',
                'from' => '/ps_120b_212v/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:42:14',
                'updated_at' => '2019-05-20 11:42:14',
            ),
            116 => 
            array (
                'id' => 2130,
                'status_code' => '301',
                'from' => '/sh_10e/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:42:23',
                'updated_at' => '2019-05-20 11:42:23',
            ),
            117 => 
            array (
                'id' => 2131,
                'status_code' => '301',
                'from' => '/sh_10i/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:42:30',
                'updated_at' => '2019-05-20 11:42:30',
            ),
            118 => 
            array (
                'id' => 2132,
                'status_code' => '301',
                'from' => '/sh_10i1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:42:38',
                'updated_at' => '2019-05-20 11:42:38',
            ),
            119 => 
            array (
                'id' => 2133,
                'status_code' => '301',
                'from' => '/ps-120v/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:42:45',
                'updated_at' => '2019-05-20 11:42:45',
            ),
            120 => 
            array (
                'id' => 2134,
                'status_code' => '301',
                'from' => '/shf-10g2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:42:58',
                'updated_at' => '2019-05-20 11:42:58',
            ),
            121 => 
            array (
                'id' => 2135,
                'status_code' => '301',
                'from' => '/shf-20g/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:43:07',
                'updated_at' => '2019-05-20 11:43:07',
            ),
            122 => 
            array (
                'id' => 2136,
                'status_code' => '301',
                'from' => '/shf-20g1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:43:19',
                'updated_at' => '2019-05-20 11:43:19',
            ),
            123 => 
            array (
                'id' => 2137,
                'status_code' => '301',
                'from' => '/shf-20g1_2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:43:27',
                'updated_at' => '2019-05-20 11:43:27',
            ),
            124 => 
            array (
                'id' => 2138,
                'status_code' => '301',
                'from' => '/shf-20gm/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:43:36',
                'updated_at' => '2019-05-20 11:43:36',
            ),
            125 => 
            array (
                'id' => 2139,
                'status_code' => '301',
                'from' => '/shf-20g1m/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:43:44',
                'updated_at' => '2019-05-20 11:43:44',
            ),
            126 => 
            array (
                'id' => 2140,
                'status_code' => '301',
                'from' => '/i4-80-i-uhl2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:43:52',
                'updated_at' => '2019-05-20 11:43:52',
            ),
            127 => 
            array (
                'id' => 2141,
                'status_code' => '301',
                'from' => '/i4-80-ii-uhl2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:44:05',
                'updated_at' => '2019-05-20 11:44:05',
            ),
            128 => 
            array (
                'id' => 2142,
                'status_code' => '301',
                'from' => '/i-1-8-u2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:44:16',
                'updated_at' => '2019-05-20 11:44:16',
            ),
            129 => 
            array (
                'id' => 2143,
                'status_code' => '301',
                'from' => '/i8-125-uhl3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:44:28',
                'updated_at' => '2019-05-20 11:44:28',
            ),
            130 => 
            array (
                'id' => 2144,
                'status_code' => '301',
                'from' => '/io-1-2-5-u3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:44:37',
                'updated_at' => '2019-05-20 11:44:37',
            ),
            131 => 
            array (
                'id' => 2145,
                'status_code' => '301',
                'from' => '/io-10-3-75-i-u3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:44:46',
                'updated_at' => '2019-05-20 11:44:46',
            ),
            132 => 
            array (
                'id' => 2146,
                'status_code' => '301',
                'from' => '/io-10-3-75-ii-u3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:45:17',
                'updated_at' => '2019-05-20 11:45:17',
            ),
            133 => 
            array (
                'id' => 2147,
                'status_code' => '301',
                'from' => '/io-10-7-50-u3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:45:25',
                'updated_at' => '2019-05-20 11:45:25',
            ),
            134 => 
            array (
                'id' => 2148,
                'status_code' => '301',
                'from' => '/io-20-3-75-u3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:45:34',
                'updated_at' => '2019-05-20 11:45:34',
            ),
            135 => 
            array (
                'id' => 2149,
                'status_code' => '301',
                'from' => '/io-25-uhl1-3133/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:45:42',
                'updated_at' => '2019-05-20 11:45:42',
            ),
            136 => 
            array (
                'id' => 2150,
                'status_code' => '301',
                'from' => '/io-30-uhl1/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:45:52',
                'updated_at' => '2019-05-20 11:45:52',
            ),
            137 => 
            array (
                'id' => 2151,
                'status_code' => '301',
                'from' => '/io-6-3-75-i-u3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:46:02',
                'updated_at' => '2019-05-20 11:46:02',
            ),
            138 => 
            array (
                'id' => 2152,
                'status_code' => '301',
                'from' => '/io-6-3-75-ii-u3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:46:12',
                'updated_at' => '2019-05-20 11:46:12',
            ),
            139 => 
            array (
                'id' => 2153,
                'status_code' => '301',
                'from' => '/ioov-1-750-3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:46:21',
                'updated_at' => '2019-05-20 11:46:21',
            ),
            140 => 
            array (
                'id' => 2154,
                'status_code' => '301',
                'from' => '/ior-10-20-uhl2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:46:32',
                'updated_at' => '2019-05-20 11:46:32',
            ),
            141 => 
            array (
                'id' => 2155,
                'status_code' => '301',
                'from' => '/ior-10-3-75-i-u3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:46:41',
                'updated_at' => '2019-05-20 11:46:41',
            ),
            142 => 
            array (
                'id' => 2156,
                'status_code' => '301',
                'from' => '/ior-10-3-75-ii-u3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:46:50',
                'updated_at' => '2019-05-20 11:46:50',
            ),
            143 => 
            array (
                'id' => 2157,
                'status_code' => '301',
                'from' => '/ior-10-7-5-ii-m-uhl2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:47:02',
                'updated_at' => '2019-05-20 11:47:02',
            ),
            144 => 
            array (
                'id' => 2158,
                'status_code' => '301',
                'from' => '/ior-10-7-5-iii-uhl2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:47:11',
                'updated_at' => '2019-05-20 11:47:11',
            ),
            145 => 
            array (
                'id' => 2159,
                'status_code' => '301',
                'from' => '/ior-10-7-5-iii-m-uhl2/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:47:40',
                'updated_at' => '2019-05-20 11:47:40',
            ),
            146 => 
            array (
                'id' => 2160,
                'status_code' => '301',
                'from' => '/ior-20-7-5-u3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:47:49',
                'updated_at' => '2019-05-20 11:47:49',
            ),
            147 => 
            array (
                'id' => 2161,
                'status_code' => '301',
                'from' => '/ior-6-3-75-i-u3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:47:59',
                'updated_at' => '2019-05-20 11:47:59',
            ),
            148 => 
            array (
                'id' => 2162,
                'status_code' => '301',
                'from' => '/ior-6-3-75-ii-u3/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:48:08',
                'updated_at' => '2019-05-20 11:48:08',
            ),
            149 => 
            array (
                'id' => 2163,
                'status_code' => '302',
                'from' => '/brand/uaiz/',
                'to' => '/category/oborudovanie-vl/insulators/',
                'created_at' => '2019-05-20 11:48:42',
                'updated_at' => '2019-05-20 11:48:42',
            ),
            150 => 
            array (
                'id' => 2164,
                'status_code' => '302',
                'from' => '/category/termoshkafy/accessories/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-05-22 04:53:52',
                'updated_at' => '2019-07-16 15:47:15',
            ),
            151 => 
            array (
                'id' => 2165,
                'status_code' => '301',
                'from' => '/category/data_transfer/interface_converters/',
                'to' => '/category/data_transfer/converters/',
                'created_at' => '2019-06-11 04:07:15',
                'updated_at' => '2019-06-11 04:07:15',
            ),
            152 => 
            array (
                'id' => 2166,
                'status_code' => '301',
                'from' => '/category/accessories-metering/voltage_dividers/',
                'to' => '/category/electric/',
                'created_at' => '2019-07-15 14:11:12',
                'updated_at' => '2019-07-16 11:58:10',
            ),
            153 => 
            array (
                'id' => 2167,
                'status_code' => '301',
                'from' => '/category/accessories-metering/antennas_sensors/',
                'to' => '/category/telemechanics/antennas_sensors/',
                'created_at' => '2019-07-15 14:23:19',
                'updated_at' => '2019-07-15 14:23:19',
            ),
            154 => 
            array (
                'id' => 2168,
                'status_code' => '301',
                'from' => '/category/automation/frequency_converter/recuperators/',
                'to' => '/category/frequency_converter/recuperators/',
                'created_at' => '2019-07-15 14:27:59',
                'updated_at' => '2019-07-15 14:27:59',
            ),
            155 => 
            array (
                'id' => 2169,
                'status_code' => '301',
                'from' => '/category/automation/frequency_converter/encoders/',
                'to' => '/category/frequency_converter/encoders/',
                'created_at' => '2019-07-15 14:28:18',
                'updated_at' => '2019-07-15 14:28:18',
            ),
            156 => 
            array (
                'id' => 2170,
                'status_code' => '301',
                'from' => '/category/automation/frequency_converter/servo/',
                'to' => '/category/frequency_converter/servo/',
                'created_at' => '2019-07-15 14:28:31',
                'updated_at' => '2019-07-15 14:28:31',
            ),
            157 => 
            array (
                'id' => 2171,
                'status_code' => '301',
                'from' => '/category/automation/frequency_converter/accessories_pchv/',
                'to' => '/category/frequency_converter/accessories_pchv/',
                'created_at' => '2019-07-15 14:28:42',
                'updated_at' => '2019-07-15 14:28:42',
            ),
            158 => 
            array (
                'id' => 2172,
                'status_code' => '301',
                'from' => '/category/automation/frequency_converter/',
                'to' => '/category/frequency_converter/',
                'created_at' => '2019-07-15 14:29:57',
                'updated_at' => '2019-07-15 14:29:57',
            ),
            159 => 
            array (
                'id' => 2173,
                'status_code' => '301',
                'from' => '/category/automation/frequency_converter/soft_starters/',
                'to' => '/category/frequency_converter/soft_starters/',
                'created_at' => '2019-07-15 14:30:10',
                'updated_at' => '2019-07-15 14:30:10',
            ),
            160 => 
            array (
                'id' => 2174,
                'status_code' => '301',
                'from' => '/category/accessories-metering/razvetviteli/',
                'to' => '/category/data_transfer/interface_splitter/',
                'created_at' => '2019-07-15 15:37:52',
                'updated_at' => '2019-07-15 15:37:52',
            ),
            161 => 
            array (
                'id' => 2175,
                'status_code' => '301',
                'from' => '/category/accessories-metering/',
                'to' => '/category/electric/',
                'created_at' => '2019-07-16 11:59:13',
                'updated_at' => '2019-07-16 11:59:13',
            ),
            162 => 
            array (
                'id' => 2176,
                'status_code' => '301',
                'from' => '/es_ddi220ex/',
                'to' => '/category/electric/',
                'created_at' => '2019-07-16 12:59:24',
                'updated_at' => '2019-07-16 12:59:24',
            ),
            163 => 
            array (
                'id' => 2177,
                'status_code' => '301',
                'from' => '/es_ddi220em/',
                'to' => '/category/electric/',
                'created_at' => '2019-07-16 12:59:37',
                'updated_at' => '2019-07-16 12:59:37',
            ),
            164 => 
            array (
                'id' => 2178,
                'status_code' => '301',
                'from' => '/category/termoshkafy/',
                'to' => '/category/cabinets19/termoshkafy/',
                'created_at' => '2019-07-16 15:49:44',
                'updated_at' => '2019-07-16 15:49:44',
            ),
            165 => 
            array (
                'id' => 2179,
                'status_code' => '301',
                'from' => '/category/termoshkafy/heating/',
                'to' => '/category/cabinets19/termoshkafy/heating/',
                'created_at' => '2019-07-16 15:50:01',
                'updated_at' => '2019-07-16 15:50:08',
            ),
            166 => 
            array (
                'id' => 2180,
                'status_code' => '301',
                'from' => '/category/termoshkafy/ventilation/',
                'to' => '/category/cabinets19/termoshkafy/ventilation/',
                'created_at' => '2019-07-16 15:50:16',
                'updated_at' => '2019-07-16 15:50:16',
            ),
            167 => 
            array (
                'id' => 2181,
                'status_code' => '301',
                'from' => '/category/nizkovoltnye-ustroystva/avr/',
                'to' => '/category/electric/avr/',
                'created_at' => '2019-07-18 09:19:27',
                'updated_at' => '2019-07-18 09:19:27',
            ),
            168 => 
            array (
                'id' => 2182,
                'status_code' => '301',
                'from' => '/category/accessories19/',
                'to' => '/category/cabinets19/accessories/',
                'created_at' => '2019-07-19 11:23:17',
                'updated_at' => '2019-07-19 11:23:17',
            ),
        ));
        
        
    }
}