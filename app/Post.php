<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'body',
        'slug',
    ];

    //user (many to one)
    public function user() {
        return $this->belongsTo('App\User');
    }

    //comment (one to many)
    public function comments() {
        return $this->hasMany('App\Comment');
    }

    //tags (many to many)
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
