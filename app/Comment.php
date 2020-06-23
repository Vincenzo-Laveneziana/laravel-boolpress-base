<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'body',
    ];

    /* 
    db relationships
    */
    //(one to many)
    public function post() {
        return $this->belongsTo('App\Post');
    }
}
