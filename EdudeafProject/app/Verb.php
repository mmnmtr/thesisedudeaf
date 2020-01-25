<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verb extends Model
{
    //
  public function vocabulary(){
    return $this->belongsTo('App\Vocabulary');
  }

  public function sentence()
  {
    return $this->hasOne('App\Sentence');
  }
}
