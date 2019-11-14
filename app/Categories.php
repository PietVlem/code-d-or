<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function recipes(){
        return $this->hasMany(Recipes::class, 'category_id');
    }
}
