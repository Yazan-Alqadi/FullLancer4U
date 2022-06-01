<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Client;
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
            'client_id'=>Client::factory(),
        ];
    }
}
