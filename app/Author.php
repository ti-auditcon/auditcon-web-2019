<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  public function post_authors()
  {
    return $this->hasMany('App\Post_author');
  }

  public function posts()
  {
    return $this->belongsToMany('App\Post')->using('App\Post_author');
  }

  public function social_networks()
  {
    return $this->belongsToMany('App\Social_network')->using('App\Author_network');
  }

  public function author_networks()
  {
    return $this->hasMany('App\Author_network');
  }
}
