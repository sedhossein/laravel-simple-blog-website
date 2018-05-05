<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    protected $table = 'posts';

    protected $guard = ['id'];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo('App/User');
    }

}
