<?php

namespace Database\Seeders;

use App\Models\Salon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SalonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (app()->environment() !== 'production' && !Salon::query()->exists()) {
            $faker = Faker::create('ja_JP');
            //iが１から100まで表示する、1ずつ増やしていく
            for ($i = 1; $i <= 100; $i++) {
                Salon::query()->create([
                    'name' => $faker->name,
                    'address' => $faker->address,
                    'assessment' => $faker->randomFloat(1, 0, 5)
                ]);
            }
        }
    }
}
