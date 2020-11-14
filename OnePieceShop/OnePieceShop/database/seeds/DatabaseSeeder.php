<?php

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
        $this->call([
            ModelSeeder::class,
            PosterSeeder::class,
            ClothSeeder::class,
            AccessoriesSeeder::class,
            SundrySeeder::class,
        ]);
    }
}
