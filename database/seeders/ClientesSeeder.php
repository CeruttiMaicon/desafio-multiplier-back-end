<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('pt_BR');
        $max_value = (env('MAX_CLIENTES') ? env('MAX_CLIENTES') : 100);

        foreach (range(1, $max_value) as $value) {
            $cpf = preg_replace('/[^0-9]/', '', $faker->unique()->cpf);

            $user = [
                'name' => $faker->name,
                'cpf' => $cpf,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];

            DB::table('clientes')->insert($user);
        }
    }
}
