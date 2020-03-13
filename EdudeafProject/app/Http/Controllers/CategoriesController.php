<?php

namespace App\Http\Controllers;

use App\Category;
use App\Vocabulary;
use Illuminate\Http\Request;

use DB;

class CategoriesController extends Controller
{

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

    public function create(){
        return view('categories.create');
    }

    public function show($id)
    {

        $category = Category::with('Vocabularies')->find($id);
        return view('categories.show',compact('category'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'category_name'=>'required',
            'category_image'=>'image|max:1999'
        ]);


//        $filenameWithExt = $request->file('category_image')->getClientOriginalName();
//        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

        $extension = $request->file('category_image')->getClientOriginalName();

        //create new file namehj
        $filenameToStore = Date('YmdHis').'_'.$extension;

        //upload
        $request->file('category_image')->move('uploads/catergorie_covers',$filenameToStore);

        $category = new Category;
        $category->category_name = $request->input('category_name');
        $category->category_image = $filenameToStore;
        $category->save();

        return redirect('/admin')->withSuccess('สร้างหมวดหมู่คำศัพท์เรียบร้อย');

    }

    public function edit($id)
    {
        //
        $category = Category::find($id);
        return view('categories.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'category_name'=>'required',
            'category_image'=>'image|max:1999'
        ]);
//        $filenameWithExtNew = $request->file('category_image')->getClientOriginalName();
//        $filename = pathinfo($filenameWithExtNew,PATHINFO_FILENAME);
////
//        $extension = $request->file('category_image')->getClientOriginalName();
//
//        //create new file name
//        $filenameToStore = Date('YmdHis').'_'.$extension;
//
//        //upload
//        $request->file('category_image')->move('uploads/catergorie_covers',$filenameToStore);

        $category = Category::find($id);
        $category->category_name = $request->input('category_name');
//        $category->category_image = $filenameToStore;
        $category->save();

        return redirect('/admin')->with('แก้ไขเรียบร้อย');

    }


    public function destroy($id)
    {
        //
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin')->with('ลบหมวดหมู่คำศัพท์เรียบร้อย');
    }

}
