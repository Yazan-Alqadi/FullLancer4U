<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Freelancer;
use App\Models\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [];

        // Open the CSV file
        $file = fopen('/home/yazan/Documents/fullancer4You/database/seeders/data.csv', 'r');

        // Read each line of the CSV file
        while (($data = fgetcsv($file)) !== false) {
            
            $jobs[] = $data[0];

            Profession::create([
                'title' => $data[0],
                'price' => $data[2],
                'category_id' => Category::inRandomOrder()->first()->id,
                'description' => $data[1],
                'freelancer_id' => Freelancer::inRandomOrder()->first()->id,
            ]);
        }

        // Close the CSV file
        fclose($file);
    }
}
