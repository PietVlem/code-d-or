<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('unit');
            $table->timestamps();
        });

        /* Tussentabel ingredients - recipes */
        Schema::create('ingredients_recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ingredients_id');
            $table->unsignedBigInteger('recipes_id');
            $table->double('quantity');
            $table->timestamps();

            $table->unique(['ingredients_id', 'recipes_id']);

            $table->foreign('ingredients_id')->references('id')->on('ingredients')->onDelete('cascade');
            $table->foreign('recipes_id')->references('id')->on('recipes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
}
