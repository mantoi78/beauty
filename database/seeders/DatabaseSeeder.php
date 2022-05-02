<?php

namespace Database\Seeders;

use App\Http\Controllers\ApproachController;
use App\Models\Wish;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PartsSeeder::class);
        $this->call(SalonsSeeder::class);
        $this->call(WishesSeeder::class);
        $this->call(ApproachesSeeder::class);
        $this->call(MenusSeeder::class);
//        $this->call(FavoritesSeeder::class);
    }
}
