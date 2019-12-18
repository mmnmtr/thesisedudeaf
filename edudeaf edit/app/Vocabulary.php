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
}



