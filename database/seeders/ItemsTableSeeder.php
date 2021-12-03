<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'user_id' => 1,
            'company_id' => 1,

        ]);
        DB::table('items')->insert([
            'user_id' => 1,
            'company_id' => 2,
        ]);
        DB::table('items')->insert([
            'user_id' =>2,
            'company_id' => 2,
        ]);
        DB::table('items')->insert([
            'user_id' => 1,
            'company_id' => 3,
        ]);
        DB::table('items')->insert([
            'user_id' => 4,
            'company_id' => 2,
        ]);
    }
}
