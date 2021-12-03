<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([

//            'id' => 1,
            'title' => Str::random(10),
            'user_id' => 1
        ]);
        DB::table('companies')->insert([
//            'id'=>2,
            'title' => Str::random(10),
            'user_id' => 3,
        ]);
        DB::table('companies')->insert([
//            'id'=>2,
            'title' => Str::random(10),
            'user_id' => 4,
        ]);
        DB::table('companies')->insert([

            'title' => Str::random(10),
            'user_id' => 2,
        ]);
        DB::table('companies')->insert([

            'title' => Str::random(10),
            'user_id' => 1,
        ]);
    }
}
