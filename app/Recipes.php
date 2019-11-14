<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $casts = [
        'steps' => 'array'
    ];

    public function category(){
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function ingredients(){
        return $this->belongsToMany(Ingredients::class)->withPivot('quantity');
    }
}
