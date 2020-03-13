<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = array('category_name','category_image');
    public function vocabularies(){
        return $this->hasMany('App\Vocabulary');
    }
}
