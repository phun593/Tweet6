<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
     public function comments()
    {
    	return $this->hasMany('\App\Comment');
    }

     public function Like()
    {
    	return $this->hasMany('\App\Like');
    }


}
