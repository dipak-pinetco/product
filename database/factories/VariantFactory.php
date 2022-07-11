<?php

namespace Database\Factories;

use App\Models\Variant;
use Illuminate\Database\Eloquent\Factories\Factory;

class VariantFactory extends Factory
{
    protected $model = Variant::class;

    public function definition(): array
    {
        return [
            'title'                  => fake()->title,
            'price'                  => fake()->numberBetween(100, 1000),
            'sku'                    => fake()->numberBetween(1000000, 9999999),
            'position'               => fake()->randomNumber(),
            'inventory_policy'       => 'deny',
            'fulfillment_service'    => 'manual',
            'shopify'                => 'shopify',
            'taxable'                => fake()->boolean,
            'barcode'                => fake()->postcode,
            'grams'                  => fake()->numberBetween(50, 500),
            'image_id'               => fake()->imageUrl,
            'weight'                 => fake()->numberBetween(1200, 1600),
            'weight_unit'            => fake()->numberBetween(800, 1000),
            'inventory_item_id'      => fake()->uuid,
            'inventory_quantity'     => fake()->numberBetween(100, 200),
            'old_inventory_quantity' => fake()->numberBetween(50, 90),
            'requires_shipping'      => fake()->boolean,
            'admin_graphql_api_id'   => fake()->uuid,
            'compare_at_price'       => fake()->randomDigitNotNull,
        ];
    }
}
