<?php

namespace Database\Seeders;

use App\Models\Part;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (app()->environment() !== 'production' && !Part::query()->exists()) {
            $faker = Faker::create('ja_JP');
            for ($i = 1; $i <= 100; $i++) {
                Part::query()->create([
                    'name' => $faker->name
                ]);
            }
        }
    }
}
