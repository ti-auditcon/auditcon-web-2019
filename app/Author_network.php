<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author_network extends Model
{
  public function author()
  {
    return $this->belongsTo('App\Author');
  }

  public function social_network()
  {
    return $this->belongsTo('App\Social_network');
  }
}
