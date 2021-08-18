<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MesasSeeder extends Seeder
{
    public function run()
    {
        $max_value = (env('MAX_MESAS') ? env('MAX_MESAS') : 10);

        foreach (range(1, $max_value) as $value) {

            DB::table('mesas')->insert([
                'number' => $value,
                'description' => 'Mesa nº ' . $value,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
