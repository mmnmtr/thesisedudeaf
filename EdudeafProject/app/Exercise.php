<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    //

  protected $fillable = [
    'exercise_name','type'
  ];

  public function exercisechoice(){
    return $this->hasMany('App\Exercisechoice');
  }

}
