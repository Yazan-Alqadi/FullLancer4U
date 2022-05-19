<?php

namespace Database\Seeders;

use App\Models\Freelancer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->has(Freelancer::factory()->count(1))->create();
        // \App\Models\Category::factory(10)->create();
        \App\Models\Profession::factory(10)->create();
    }
}
