<?php

namespace Database\Seeders;

use App\Models\Salon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SalonSeeder extends Seeder
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
