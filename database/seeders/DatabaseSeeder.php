<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(ProgressSeeder::class);
        $this->call(MesasSeeder::class);
        $this->call(CardapioSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(PedidosSeeder::class);
    }
}
