<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercisechoice extends Model
{
    //
  protected $fillable = [
    'exercise_id','exercise_number','exercise_img','choice_title1','choice_title2','choice_title3','answer'
  ];
  public function exercise(){
    return $this->belongsTo('App\Exercise');
  }
}
