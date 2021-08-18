<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    public function run()
    {
        DB::table('nivel')->insert(array (
            array (
                'name' => 'Administrator',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array (
                'name' => 'Cozinheiro',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array (
                'name' => 'gracom',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ));
    }
}
