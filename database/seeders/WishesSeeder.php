<?php

namespace Database\Seeders;

use App\Models\Wish;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Models\Part;
use Carbon\Carbon;

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
            $parts = Part::query()->get()->all();
            $wishes = ['を綺麗な形にしたい', 'を足したい', 'のメイクをしたい'];
            $count = 1;
            $array = [];

            foreach ($parts as $part) {
                foreach ($wishes as $wish) {
                    $record = [
                        'id' => $count,
                        'part_id' => $part->id,
                        'name' => $part->name . $wish,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ];
                    $array[] = $record;
                    $count++;


//                $faker = Faker::create('ja_JP');
//                for($i = 1; $i <= 12; $i++) {
//                    Wish::query()->create([
//                        'name' => $faker->name,
//                    ]);

        }
            }

//            Wish::query()->insert($array);
        }
    }
}
