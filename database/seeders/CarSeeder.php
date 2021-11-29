<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('cars')->insert([
                'brand' => Str::random(5),
                'model' => Str::random(5),
                'year' => rand(1984, 2021),
                'jogging' => date('Y-m-d', mt_rand(1, time())),
                'color' => '#' . dechex(rand(0, 10000000)),   //substr(md5(rand()), 0, 6),
            ]);
        }
    }
}
