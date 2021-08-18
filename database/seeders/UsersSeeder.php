<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('pt_BR');
        foreach (range(1,10) as $value) {
            $role = $value <= 5 ? 'cozinheiro' : 'garcom';

            if ($value === 1)
                $role = 'Administrator';

            $user = User::create([
                'name' => $faker->name,
                'email' => strtolower( ($value === 1 ? $role : $role . $value) . '@multiplier.com'),
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $user->assignRole($role);
        }
    }
}
