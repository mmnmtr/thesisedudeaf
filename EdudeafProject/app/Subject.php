<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
  public function vocabularys(){
    return $this->belongsToMany('App\Vocabulary');
  }

  public function sentence()
  {
    return $this->hasOne('App\Sentence');
  }

}
