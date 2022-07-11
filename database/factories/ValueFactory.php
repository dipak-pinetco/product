<?php

namespace Database\Factories;

use App\Models\Value;
use Illuminate\Database\Eloquent\Factories\Factory;

class ValueFactory extends Factory
{
    protected $model = Value::class;

    public function definition(): array
    {
        return [
            'value' => fake()->colorName(),
        ];
    }
}
