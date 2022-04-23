<?php

namespace Database\Seeders;

use App\Models\Wish;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class WishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (app()->environment() !== 'production' && !Wish::query()->exists()) {
            $faker = Faker::create('ja_JP');
            for ($i = 1; $i <= 100; $i++) {
                Wish::query()->create([
                    'name' => $faker->name,
                    'part_id' => $faker->numberBetween(1, 100) //1~100の数字をランダムに出力
                ]);
            }
        }
    }
}
