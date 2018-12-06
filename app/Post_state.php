<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_state extends Model
{
  public function posts()
  {
    return $this->hasMany('App\Post');
  }
}
