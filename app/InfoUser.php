<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    //Mass assign
    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'avatar'
    ];

    public $timestamps = false;

    /* 
    Db relationships
    */
    public function user() {

        return $this->belongsTo('App\User');

    }

}
