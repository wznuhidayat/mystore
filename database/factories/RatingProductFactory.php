<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RatingProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $id=1;
        $rand = mt_rand(10,50);
        return [
            'rate' => $rand/10,
            'count' => mt_rand(1,1000),
            'product_id' => $id++,
        ];
    }
}
