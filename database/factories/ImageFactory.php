<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition(): array
    {
        return [
         'posittion'=>fake()->randomNumber(),
         'alt'=>fake()->realText,
         'width'=>fake()->numberBetween(1200,1600),
         'height'=>fake()->numberBetween(600,800),
         'src'=>fake()->imageUrl,
         'admin_graphql_api_id'=>fake()->uuid,
        ];
    }
}
