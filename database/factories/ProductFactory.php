<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->sentence(),
            'description'=> fake()->paragraph(),
            'price'=> fake()->randomNumber(2,100,1000000),
            'url_image'=> fake()->imageUrl(640,480,'products', null),
            'categories_id'=>Category::inRandomOrder()->first()->id
        ];
    }
}
