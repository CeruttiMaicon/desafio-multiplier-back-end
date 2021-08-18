<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CardapioSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new Restaurant($faker));

        foreach (range(1,50) as $value) {
            DB::table('cardapio')->insert([
                'name' => $faker->foodName(),
                'price' => $faker->randomDigit + 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
