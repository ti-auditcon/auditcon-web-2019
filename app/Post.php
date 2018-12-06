<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $visible = ['id', 'title'];

  public function post_authors()
  {
    return $this->hasMany('App\Post_author');
  }
  public function post_tags()
  {
    return $this->hasMany('App\Post_tag');
  }
  public function category()
  {
    return $this->belongsTo('App\Category');
  }
  public function post_state()
  {
    return $this->belongsTo('App\Post_state');
  }
  public function tags()
  {
    return $this->belongsToMany('App\Tag')->using('App\Post_tag');
  }
  public function authors()
  {
    return $this->belongsToMany('App\Author')->using('App\Post_author');
  }
}
