<?php

namespace Database\Seeders;

use App\Models\Part;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            $parts = ['眉毛', 'まつ毛', '目'];
            $count = 1;
            $array = [];

            foreach ($parts as $part) {
                $record = [
                    'id' => $count,
                    'name' => $part,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];

                $array[] = $record;
                $count++;
            }

            Part::query()->insert($array);
        }
    }
}
