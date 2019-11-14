<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Categories;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
        $categories = Categories::all();
        $width = 800;
        $height = 600;

        for ($i = 1; $i <= 50; $i ++) {
            $steps = array();
            for ($j = 1; $j <= rand(6,12); $j ++) {
                array_push($steps, $faker->sentence);
            }

            DB::table('recipes')->insert([
                'category_id' => $categories->random()->id,
                'name' => $faker->foodName,
                'steps' => json_encode($steps),
                'image_url' => $faker->imageUrl($width, $height, 'food'),
                'duration' => rand(20, 80),
                'show' => $faker->boolean,
            ]);
        }
    }
}
