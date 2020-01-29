<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Sentence;
use Illuminate\Http\Request;
use App\Vocabulary;

use DB;

class SentencesController extends Controller
{
  public function index(Request $request)
  {
    $request->session()->forget('sentence');
    $sentences = Sentence::all();
    return view('sentence-func2.sentencePlay',compact('sentences',$sentences));
  }

  public function createStep1(Request $request)
  {



    $sentence = $request->session()->get('sentence');
    $vocabularies = DB::table('vocabularies')
//      ->join('subjects', 'vocabularies.id', '=', 'subjects.vocabulary_id')
//      ->join('sentences', 'subjects.id', '=', 'sentences.subject_id')
      ->select('vocabularies.*')
      ->get();

    return view('sentence-func2.sentenceSubject',compact('vocabularies',$vocabularies,'sentence',$sentence));





  }
  public function postCreateStep1(Request $request)
  {

    $this->validate($request,[
      'subject_id' => 'required'
    ]);

    if(empty($request->session()->get('sentence'))){
      $sentence = new Sentence();
      $sentence->subject_id = $request->input('subject_id');
      $request->session()->put('sentence', $sentence);
    }else{
      $sentence = $request->session()->get('sentence');
      $sentence->subject_id = $request->input('subject_id');
//      $testvocab->fill($fill1);
      $request->session()->put('sentence', $sentence);
    }
    return redirect('/sentences/verb');
  }
//
  public function createStep2(Request $request)
  {

    $sentence = $request->session()->get('sentence');
    return view('sentence-func2.sentenceVerb',compact('sentence', $sentence));
  }
  public function postCreateStep2(Request $request)
  {
    $sentence = $request->session()->get('sentence');
    if(!isset($sentence->verb_id)) {
      $this->validate($request,[
        'verb_id' => 'required'
      ]);

      $sentence = $request->session()->get('sentence');

      $sentence->verb_id = $request->input('verb_id');
      $request->session()->put('sentence', $sentence);
    }
    return redirect('/sentences/object');

  }
//
  public function createStep3(Request $request)
  {
    $sentence = $request->session()->get('sentence');
    return view('sentence-func2.sentenceObject',compact('sentence', $sentence));
  }
  public function postCreateStep3(Request $request)
  {
    $sentence = $request->session()->get('sentence');
    if(!isset($sentence->object_id)) {
      $this->validate($request,[
        'object_id' => 'required'
      ]);

      $sentence = $request->session()->get('sentence');

      $sentence->object_id = $request->input('object_id');
      $request->session()->put('sentence', $sentence);
    }

    return redirect('/sentences/nextPlay');

  }

  public function createStep4(Request $request)
  {
    $sentence = $request->session()->get('sentence');
    return view('sentence-func2.sentenceNextPlay',compact('sentence',$sentence));
  }

  public function store( Request $request)
  {
    $sentence = $request->session()->get('sentence');
    $sentence->user_id = Auth::id();
    $sentence->save();
    return redirect('/sentence/play');
  }

}
