<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $SubCategory = $this->faker->name;
        return [
            'category_id' => Category::select('id')->get()->random()->id,
            'name' => $SubCategory,
            'slug' => Str::slug($SubCategory),
            'is_active' => $this->faker->boolean(),
        ];
    }
}