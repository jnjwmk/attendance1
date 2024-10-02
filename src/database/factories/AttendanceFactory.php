<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => '2024-09-30',
            'work_start_time' => $this->faker->dateTimeThisMonth,
            'work_end_time' => $this->faker->dateTimeThisMonth,
        ];
    }
}