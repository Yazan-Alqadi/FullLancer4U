<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Freelancer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessionFactory extends Factory
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
            'category_id'=>Category::inRandomOrder()->first()->id,
            'freelancer_id'=>Freelancer::factory(),




        ];
    }
}
