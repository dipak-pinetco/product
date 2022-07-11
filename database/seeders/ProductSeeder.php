<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Option;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Value;
use App\Models\Variant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Facade;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $tags=Tag::pluck('id');
        $options=Option::pluck('id');
        Product::factory(10)
            ->has(Image::factory(rand(4,8)))
            ->has(Variant::factory(rand(4,8)))
            ->create()
            ->each(function (Product $product) use($tags,$options){
                $product->tags()->sync(array_random($tags->toArray(),rand(5,10)));
                $product->options()->sync(array_random($options->toArray(),rand(1,2)));
            });
        Option::get()->each(function (Option $option){
            Value::factory(rand(1,2))->create(['option_id'=>$option->id]);
        });
    }


}
