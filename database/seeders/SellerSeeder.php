<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seller')->insert([
            [
                'seller_first_name' => 'Brandin',
                'seller_last_name' => 'Pettersen',
                'seller_full_name' => 'Brandin Pettersen',
                'seller_middle_name' => 'brandin',
                'seller_mailing_address' => 'brandin.pettersen@realofferscash.com',
                'seller_mailing_city' => 'RandomCity',
                'seller_mailing_state' => 'LA',
                'seller_mailing_zip' => '2213',
                'seller_company_owned' => null,
                'total_subjects' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'seller_first_name' => 'Brandin v2',
                'seller_last_name' => 'Pettersen v2',
                'seller_full_name' => 'Brandin Pettersen v2',
                'seller_middle_name' => 'brandin v2',
                'seller_mailing_address' => 'brandin.pettersen@realofferscash.com',
                'seller_mailing_city' => 'RandomCityV2',
                'seller_mailing_state' => 'LA',
                'seller_mailing_zip' => '2214',
                'seller_company_owned' => null,
                'total_subjects' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'seller_first_name' => 'Brandin v3',
                'seller_last_name' => 'Pettersen v3',
                'seller_full_name' => 'Brandin Pettersen v3',
                'seller_middle_name' => 'brandin v3',
                'seller_mailing_address' => 'brandin.pettersen@realofferscashv3.com',
                'seller_mailing_city' => 'RandomCityV3',
                'seller_mailing_state' => 'LA',
                'seller_mailing_zip' => '2215',
                'seller_company_owned' => null,
                'total_subjects' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
