<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $path=\Storage::disk('public')->path('shopify.json');
        $itemData = json_decode(file_get_contents($path), true);

        for ($x = 0; $x <= 10000; $x++) {
            $data=Arr::except($itemData[rand(0,21)]['product'],['id','published_at']) ;
            Item::query()->create($data);
        }
    }
}
