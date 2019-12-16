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



        $category = new Vocabulary;
        $category->category_id = $request->input('category_id');
        $category->vocab_word = $request->input('vocab_word');
        $category->vocab_photo = $filenameToStorePhoto;
        $category->vocab_video = $filenameToStore;
        $category->save();

        return redirect('/categories/'. $request->input('category_id'))->with('success','photo created');
    }
    public function show($id){
        $vocabulary = Vocabulary::find($id);
        return view('student-categories.showword',compact('vocabulary'));
    }
    public function destroy($id){
        $vocabulary = Vocabulary::find($id);
        $vocabulary->delete();
        return redirect('/categories/'.$vocabulary->category_id)->with('success','Photo Delete');
    }
}
