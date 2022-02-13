<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->title(),
            'description'=> $this->faker->sentence(5),
            'status_id'=> $this->faker->numberBetween(1, 3)
        ];
    }
}
