<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
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
            'title' => $this->faker->jobTitle(),
            'price' => $this->faker->randomFloat,
            'description' =>$this->faker->text,
            'deadline'=>$this->faker->date(),
            'category_id'=>Category::factory(),
            'user_id'=>User::factory(),
        ];
    }
}
