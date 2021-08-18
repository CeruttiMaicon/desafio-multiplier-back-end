<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PedidosSeeder extends Seeder
{
    public function run()
    {
        ini_set('memory_limit', '512M');    // Allocate memory
        DB::disableQueryLog();                          // Disable log

        $faker = Faker::create('pt_BR');

        $max_clientes = (env('MAX_CLIENTES') ? env('MAX_CLIENTES') : 100);
        $max_mesas = (env('MAX_MESAS') ? env('MAX_MESAS') : 10);
        $max_cardapio = (env('MAX_CARDAPIO') ? env('MAX_CARDAPIO') : 50);
        $max_users = (env('MAX_USERS') ? env('MAX_USERS') : 10);

        $max_orders = (env('MAX_PEDIDOS') ? env('MAX_PEDIDOS') : 100);
        foreach (range(1, $max_orders) as $value) {

            $rangeDates = $faker->dateTimeBetween('-30 days', '+0 days');
            $startDate = Carbon::createFromTimeStamp($rangeDates->getTimestamp());
            $endDate = Carbon::createFromFormat('Y-m-d H:i:s', $startDate)->addHour();

            DB::table('pedidos')->insert([
                'mesas_id' => rand(1, $max_mesas),
                'cardapio_id' => rand(1, $max_cardapio),
                'clientes_id' => rand(1, $max_clientes),
                'user_id' => rand(6, $max_users),
                'progress_id' => rand(1, 4),
                'created_at' => $startDate,
                'updated_at' => $endDate
            ]);
        }
    }
}
