<?php

use Illuminate\Database\Seeder;
use App\Recipes;
use App\Ingredients;

class IngredientsRecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private function insertToDb($i, $recipeId){
        DB::table('ingredients_recipes')->insert([
            'ingredients_id' => $i,
            'recipes_id' => $recipeId,
            'quantity' => rand(1,4)*100,
        ]);
    }
    
    public function run()
    {
        $recipes = Recipes::all();
        $ingredients_count = count(Ingredients::all());
        $i = 0;
        foreach($recipes as $recipe){
            $i ++;
            if($i > $ingredients_count){
                $i = 1;
            }
            $this->insertToDb($i, $recipe->id);
            $i ++;
            $this->insertToDb($i, $recipe->id);
            $i ++;
            $this->insertToDb($i, $recipe->id);
        }
    }
}
