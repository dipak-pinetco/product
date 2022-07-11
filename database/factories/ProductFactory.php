<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'title'=>fake()->userName,
            'bodyHtml'=>fake()->randomHtml,
            'vendor'=>fake()->streetName,
            'product_type'=>fake()->mimeType(),
            'handle'=>fake()->realText,
            'template_suffix'=>fake()->domainName,
            'status'=>fake()->randomElement(['active','block']),
            'admin_graphql_api_id'=>fake()->uuid,
            'published_at'=>fake()->dateTime,
            'published_scope'=>fake()->name,
        ];
    }
}
