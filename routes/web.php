<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'RecipesController@index');
Route::get('/recipes/{recipe}', 'RecipesController@show');