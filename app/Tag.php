<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  public function post_tags()
  {
    return $this->hasMany('App\Post_tag');
  }
  public function posts()
  {
      return $this->belongsToMany('App\Post')->using('App\Post_tag');
  }
}
