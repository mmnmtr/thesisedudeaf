<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    //
  protected $fillable = array('score', 'user_id', 'exercise_id','percentage');

}
