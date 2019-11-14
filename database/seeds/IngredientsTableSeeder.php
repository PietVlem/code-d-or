<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class IngredientsTableSeeder extends Seeder
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
        $random_ingredient = array($faker->vegetableName(), $faker->fruitName(), $faker->meatName(), $faker->sauceName());

        foreach($random_ingredient as $el){
            DB::table('ingredients')->insert([
                'name' => $el,
                'unit' => 'gram',
            ]);
        };

        for ($i = 1; $i <= 2; $i ++) {
            DB::table('ingredients')->insert([
                'name' => $faker->beverageName(),
                'unit' => 'centiliter',
            ]);
        }
    }
}
