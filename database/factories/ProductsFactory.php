<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   $product_slug = $this->faker->name;
        return [
            'name'=>$this->faker->sentence(),
            'slug'=>Str::slug($product_slug),
            'price'=>rand(100,15000),
            'color'=>$this->faker->sentence(),
        ];
    }
}