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
      return $this->belongsTo('App\Subject','subject_id');
    }
    public function verbs(){
      return $this->belongsTo('App\Verb','verb_id');
    }
    public function objects(){
      return $this->belongsTo('App\Object','verb_id');
    }
}



