<?php

namespace Database\Seeders;

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

//        $this->call(OptionSeeder::class);
//        $this->call(TagSeeder::class);
//        $this->call(ProductSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(UserSeeder::class);
    }
}
