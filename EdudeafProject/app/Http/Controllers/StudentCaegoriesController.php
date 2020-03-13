<?php

namespace App\Http\Controllers;

use App\Category;
use DB;
use Illuminate\Http\Request;

class StudentCaegoriesController extends Controller
{
    //

    public function index()
    {
        $categories = Category::with('Vocabularies')->get();
//        $categories = DB::table('categories')
//          ->select(array('vocabularies.category_id','categories.category_name','categories.category_image','categories.id',DB::raw('COUNT(vocabularies.category_id) as count')))
//          ->leftjoin('vocabularies','vocabularies.category_id','=','categories.id')
//          ->groupBy('categories.category_name')
//          ->groupBy('categories.category_image')
//          ->groupBy('categories.id')
//          ->groupBy('vocabularies.category_id')
//          ->orderBy('categories.id', 'asc')
//          ->get();
//      return view('categories.index',compact('categories'));
        return view('student-categories.index',compact('categories'));
    }
    public function showvocab($id)
    {
         $category = Category::with('Vocabularies')->find($id);
      return view('student-categories.showvocab',compact('category'));

//      $categories = DB::table('Categories')
//        ->join('Vocabularies','Categories.id','=','Vocabularies.category_id')
//        ->select(array('vocabularies.category_id','categories.category_name','categories.category_image','categories.id',DB::raw('COUNT(vocabularies.category_id) as count')))
//        ->where('Categories.id', '=', $id)
//        ->groupBy('categories.category_name')
//        ->groupBy('categories.category_image')
//        ->groupBy('categories.id')
//        ->groupBy('vocabularies.category_id')
//        ->orderBy('categories.id', 'asc')
//        ->get();

//      return view('student-categories.showvocab',compact('categories'));


//
//      dd($categories);

    }

}
