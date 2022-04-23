<?php

namespace Database\Seeders;

use App\Models\Menu;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MenusSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        if (app()->environment() !== 'production' && !Menu::query()->exists()) {
            $faker = Faker::create('ja_JP');
            for ($i = 1; $i <= 100; $i++) {
                Menu::query()->create([
                    'salon_id' => $faker->numberBetween(1, 100),
                    'name' => $faker->name
                ]);
            }
        }
    }
}
