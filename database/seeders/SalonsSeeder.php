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
        //サロン名を作成
        $alpha = range('A', 'Z');
        if (app()->environment() !== 'production' && !Salon::query()->exists()) {
            $faker = Faker::create('ja_JP');
            for ($i = 1; $i <= 4; $i++) {
                foreach ($alpha as $a) {
                    Salon::query()->create([
                        'name' => str_repeat($a, $i) . 'サロン',
                        'address' => $faker->address,
                        'assessment' => $faker->numberBetween(1, 5)
                    ]);
                }
            }
        }
    }
}
