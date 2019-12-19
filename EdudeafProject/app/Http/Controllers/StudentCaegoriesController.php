<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class StudentCaegoriesController extends Controller
{
    //

    public function index()
    {
        $categories = Category::with('Vocabularies')->get();
        return view('student-categories.index',compact('categories'));
    }
    public function showvocab($id)
    {
        $category = Category::with('Vocabularies')->find($id);
        return view('student-categories.showvocab',compact('category'));
    }

}
