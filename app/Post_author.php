<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_author extends Model
{
  public function post()
  {
    return $this->belongsTo('App\Post');
  }

  public function author()
  {
    return $this->belongsTo('App\Author');
  }
}
