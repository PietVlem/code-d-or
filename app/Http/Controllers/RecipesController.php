<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipes;

class RecipesController extends Controller
{
    public function index(){
        $recipes = Recipes::latest()->where('show', true)->paginate(15);
        return view('recipes.show', compact('recipes'));
    }

    public function show(Recipes $recipe){
        $related_recipes = Recipes::latest()->where('category_id', $recipe->category_id)->limit(4)->get();
        return view('recipes.single', [
            'recipe' => $recipe,
            'related_recipes' => $related_recipes
        ]);
    }
}
