<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    //
    protected $fillable = array('category_id', 'vocab_word', 'vocab_photo','vocab_photoReal', 'vocab_video');
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function subjects(){
      return $this->hasMany('App\Subject');
    }
    public function verbs(){
      return $this->hasMany('App\Verb');
    }
    public function objects(){
      return $this->hasMany('App\Object');
    }
}



