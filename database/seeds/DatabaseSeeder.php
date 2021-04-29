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
        $this->call(RiceSeeder::class);
        $this->call(HerbsSeeder::class);
        $this->call(MeatsSeeder::class);
        $this->call(FruitsSeeder::class);
        $this->call(OthersSeeder::class);
    }
}
