<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use App\Category;
use App\Vocabulary;
use Illuminate\Http\Request;

use DB;

class CategoriesController extends Controller
{

    public function index(Request $request)
    {
//        $categories = Category::with('Vocabularies')->get();
        $search = $request->get('search');

        $categories = DB::table('categories')
            ->select(array('vocabularies.category_id','categories.category_name','categories.category_image','categories.id',DB::raw('COUNT(vocabularies.category_id) as count')))
            ->leftjoin('vocabularies','vocabularies.category_id','=','categories.id');
        if (!empty($search)){
          $categories->where('categories.category_name','like','%'.$search.'%');
        }

        $categories = $categories->groupBy('categories.category_name')
            ->groupBy('categories.category_image')
            ->groupBy('categories.id')
            ->groupBy('vocabularies.category_id')
            ->orderBy('categories.id', 'asc')
            ->paginate(10);
        return view('categories.index',compact('categories'));

    }

    public function create(){
        return view('categories.create');
    }

    public function show(Request $request ,$id)
    {
      $search = $request->get('search');
      $vocabularies = DB::table('vocabularies')
        ->select('*');
        if (!empty($search)){
          $vocabularies->where('vocabularies.vocab_word','like','%'.$search.'%');
        }

        $vocabularies = $vocabularies->where('vocabularies.category_id','=',$id)
        ->paginate(10);

        $category = Category::with('Vocabularies')->find($id);
//        dd($vocabularies,$category);
        return view('categories.show',compact('category',$category,'vocabularies',$vocabularies));
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

        return redirect('/admin')->with('success','เพิ่มหมวดหมู่คำศัพท์เรียบร้อยแล้ว');
;

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
        ]);

        if ($request->hasFile('category_image')) {
          $extension = $request->file('category_image')->getClientOriginalName();

          //create new file namehj
          $filenameToStore = Date('YmdHis').'_'.$extension;

          //upload
          $request->file('category_image')->move('uploads/catergorie_covers',$filenameToStore);
        }else {
          $filenameToStore = $request->get('category_image_old');
        }

        $category = Category::find($id);
        $category->category_name = $request->input('category_name');
        $category->category_image = $filenameToStore;
        $category->save();

        return redirect('/admin')->with('success','แก้ไขเรียบร้อย');

    }


    public function destroy($id)
    {
        //
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin');
    }

}
