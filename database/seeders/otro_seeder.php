<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class otros_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Otros')->insert([
            'nomOtros'=>'Batman',
            'precio'=>201.59,
        ]);

        DB::table('Otros')->insert([
            'nomOtros'=>'iwachu',
            'precio'=>666
        ]);
    }
}
