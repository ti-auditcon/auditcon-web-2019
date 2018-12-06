<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social_network extends Model
{
  public function author_networks()
  {
    return $this->hasMany('App\Author_network');
  }
  public function authors()
  {
    return $this->belongsToMany('App\Author')->using('App\Author_network');
  }
}
