<?php

namespace Database\Seeders;

use App\Models\Approach;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ApproachesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (app()->environment() !== 'production' && !Approach::query()->exists()) {
            $faker = Faker::create('ja_JP');
            for ($i =1; $i <= 100; $i++) {
                Approach::query()->create([
                    'wish_id' => $faker->numberBetween(1, 100),
                    'name' => $faker->name,
                    'description' => $faker->realText(1000)
                ]);
            }
            }
    }
}
