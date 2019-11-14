<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Ovenschotes'],
            ['name' => 'Stoofpotjes'],
            ['name' => 'Soep'],
            ['name' => 'Pasta'],
            ['name' => 'Snel & Simpel'],
            ['name' => 'Klassiekers'],
            ['name' => 'Salade'],
            ['name' => 'Veggie']
        ]);
    }
}
