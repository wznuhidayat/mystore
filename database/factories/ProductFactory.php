<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3,7)),
            'price' => $this->faker->numberBetween(10000, 10000000),
            'category_id' => mt_rand(1,6),
            'description' => $this->faker->paragraph(mt_rand(1,3),true),
            'image' => $this->faker->imageUrl(640, 480, 'products', true),
        ];
    }
}
