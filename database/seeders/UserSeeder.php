<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create(['email'=>'drgavali9@gmail.com']);
    }
}
