<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Color', 'position' => '1'],
            ['name' => 'Size', 'position' => '2'],
        ];
        Option::insert($data);
    }
}
