<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Recipe extends Model
{
    use SoftDeletes;

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
}
