<?php

namespace Database\Seeders;

use App\Models\Favorite;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class FavoritesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (app()->environment() !== 'production' && !Favorite::query()->exists()) {
            $faker = Faker::create('ja_JP');
            for ($i = 1; $i <= 100; $i++) {
                Favorite::query()->create([
                    'session_id' => $faker->numberBetween(1, 100),
                    'approach_id' => $faker->numberBetween(1, 100)
                ]);
            }
        }
    }
}
