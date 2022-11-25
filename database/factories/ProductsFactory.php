<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\SubCategory;
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
            'category_id'=>Category::select('id')->get()->random()->id,
            'subcategory_id'=>SubCategory::select('id')->get()->random()->id,
            'price'=>rand(100,15000),
            'description'=>$this->faker->sentence(),
            'color'=>$this->faker->sentence(),
        ];
    }
}