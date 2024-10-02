<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BreaksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'break_start_time' => $this->faker->dateTimeThisMonth,
            'break_end_time' => $this->faker->dateTimeThisMonth,
        ];
    }
}