<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{

    protected $guarded = [
        'id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function sugers(){
        return $this->belongsMany('App\Models\Suger');
    }

    public function reviews() {

        return $this->hasMany(\App\Models\Review::class, 'recipe_id', 'id');
    }
}
