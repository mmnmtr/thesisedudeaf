<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        return view('admin');
//    }

    public function index()
    {
//        $categories = Category::with('Vocabularies')->get();

        $categories = DB::table('categories')
            ->select(array('vocabularies.category_id','categories.category_name','categories.category_image','categories.id',DB::raw('COUNT(vocabularies.category_id) as count')))
            ->leftjoin('vocabularies','vocabularies.category_id','=','categories.id')
            ->groupBy('categories.category_name')
            ->groupBy('categories.category_image')
            ->groupBy('categories.id')
            ->groupBy('vocabularies.category_id')
            ->orderBy('categories.id', 'asc')
            ->get();
        return view('categories.index',compact('categories'));

    }
    public function categoriesCreate(){
        return view('categories.create');
    }
}
