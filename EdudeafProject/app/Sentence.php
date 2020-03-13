<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sentence extends Model
{
    //
  public function subject()
  {
    return $this->belongsTo('App\Subject');
  }
  public function verb()
  {
    return $this->belongsTo('App\Verb');
  }
  public function object()
  {
    return $this->belongsTo('App\Object');
  }
}
