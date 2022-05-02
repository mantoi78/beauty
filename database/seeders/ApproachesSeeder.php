<?php

namespace Database\Seeders;

use App\Models\Approach;
use App\Models\Part;
use Carbon\Carbon;
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
            $array = [];
            $count = 1;
            $parts = Part::query()->with('wishes')->get()->all();
            $approaches = ['スタイリング', 'リフト', 'パーマ'];

            foreach ($parts as $part) {
                foreach ($part->wishes as $wish) {
                    foreach ($approaches as $approach) {
                        $record = [
                            'id' => $count,
                            'wish_id' => $wish->id,
                            'name' => $faker->realText(10),
                            'description' => $faker->realText(50),
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()
                        ];

                        $array[] = $record;
                        $count++;
                    }
                }
            }
            Approach::query()->insert($array);
        }
    }
}
