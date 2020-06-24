<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /* 
    db relationships
    */

    //post
    public function posts() {
        return $this->belongsToMany('App\Post');
    }
}
