<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProgressSeeder extends Seeder
{
    public function run()
    {
        DB::table('progress')->insert(array (
            array (
                'name' => 'Na fila',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array (
                'name' => 'Em realização',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array (
                'name' => 'Finalizado',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array (
                'name' => 'Cancelado',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ));
    }
}
