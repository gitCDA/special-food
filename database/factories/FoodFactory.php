<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence,

            'category_id' => $this->faker->numberBetween($min=1, $max=5),
            
            'content' => $this->faker->paragraph,
            
            'image' => $this->faker->imageUrl($width=800, $height=800),
            
            'price' => $this->faker->numberBetween($min=150, $max=300,),
            
            'created_at' => now()
        ];
    }
}