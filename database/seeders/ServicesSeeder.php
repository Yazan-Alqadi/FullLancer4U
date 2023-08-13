<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Freelancer;
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
        $file = fopen('/var/www/html/fullancer4You/database/seeders/data.csv', 'r');

        // Read each line of the CSV file
        while (($data = fgetcsv($file)) !== false) {
            // Store the job in the $jobs array
            $jobs[] = $data[0]; // Assuming the job title is in the first column of the CSV file

            // Insert the job into the database
            DB::table('professions')->insert([
                'title' => $data[0], // Assuming the job title is in the first column of the CSV file
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
