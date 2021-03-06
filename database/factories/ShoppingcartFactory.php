<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShoppingcartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => rand(1, 10),
            'product_id' => rand(1, 10),
            'count' => $this->faker->randomDigit()
        ];
    }
}
