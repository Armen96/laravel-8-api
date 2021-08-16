<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Brandin Pettersen',
                'email' => 'brandin.pettersen@realofferscash.com',
                'password' => Hash::make('Password1@'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Armen Barsegyan',
                'email' => 'armen@investorfuse.com',
                'password' => Hash::make('asdasd'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
