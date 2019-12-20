<?php

namespace App\Http\Controllers;

use App\Vocabulary;
use Illuminate\Http\Request;

class VocabulariesController extends Controller
{
    //
    public function create($category_id){
        if (empty($category_id) || !is_numeric($category_id)){
            abort('404');
        }
        return view('vocabularies.create',compact('category_id'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'vocab_word'=>'required',
            'vocab_photo'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vocab_photoReal'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vocab_video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);


        $filenameWithExt = $request->file('vocab_video')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        $extension = $request->file('vocab_video')->getClientOriginalName();
        //create new file name
        //$filenameToStore = $filename.'_'.time().'.'.$extension;
        $filenameToStore = Date('YmdHis').'_'.$extension;
        //upload
        $request->file('vocab_video')->move('uploads/vocabularies/'. $request->input('category_id'),$filenameToStore);



        // photo
        $filenameWithExt = $request->file('vocab_photo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        $extension = $request->file('vocab_photo')->getClientOriginalName();

        //create new file name
        //$filenameToStore = $filename.'_'.time().'.'.$extension;
        $filenameToStorePhoto = Date('YmdHis').'_'.$extension;
        //upload
        $request->file('vocab_photo')->move('uploads/vocabularies/'. $request->input('category_id'),$filenameToStorePhoto);

        // photoReal
        $filenameWithExt = $request->file('vocab_photoReal')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        $extension = $request->file('vocab_photoReal')->getClientOriginalName();

        //create new file name
        //$filenameToStore = $filename.'_'.time().'.'.$extension;
        $filenameToStorePhotoReal = Date('YmdHis').'_'.$extension;
        //upload
        $request->file('vocab_photoReal')->move('uploads/vocabularies/'. $request->input('category_id'),$filenameToStorePhotoReal);




        $category = new Vocabulary;
        $category->category_id = $request->input('category_id');
        $category->vocab_word = $request->input('vocab_word');
        $category->vocab_photo = $filenameToStorePhoto;
        $category->vocab_photoReal = $filenameToStorePhotoReal;
        $category->vocab_video = $filenameToStore;
        $category->save();

        return redirect('/categories/'. $request->input('category_id'))->with('เพิ่มคำศัพท์สำเร็จ');
    }
    public function edit($id)
    {

        $vocabulary = Vocabulary::find($id);
        return view('vocabularies.edit',compact('vocabulary'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'vocab_word'=>'required',
        ]);

        $vocabulary = Vocabulary::find($id);
        $vocabulary->vocab_word = $request->input('vocab_word');
        $vocabulary->save();

        return redirect('/categories/'.$vocabulary->category_id)->withWarning('แก้ไขเรียบร้อย');

    }
    public function show($id){
        $vocabulary = Vocabulary::find($id);
        return view('student-categories.showword',compact('vocabulary'));
    }
    public function destroy($id){
        $vocabulary = Vocabulary::find($id);
        $vocabulary->delete();
        return redirect('/categories/'.$vocabulary->category_id)->withError('ลบหมวดหมู่คำศัพท์เรียบร้อย');
    }
}
