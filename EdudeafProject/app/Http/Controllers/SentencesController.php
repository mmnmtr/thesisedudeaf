<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vocabulary;

use DB;

class SentencesController extends Controller
{
  public function index(Request $request)
  {
//    $request->session()->forget('testvocab');
//    $testvocabs = Testvocab::all();
//    return view('sentence-func2.sentencePlay',compact('testvocabs',$testvocabs));
  }

  public function createStep1(Request $request)
  {
//    $testvocab = $request->session()->get('testvocab');

//    $testvocabs = Testvocab::all();
//    return view('sentence-func2.sentenceSubject',compact('testvocabs', $testvocabs));


    $vocabularies = Vocabulary::with('Subjects')->get();
//    return view('student-categories.index',compact('Vocabularies'));

//    $vocabularies = DB::table('vocabularies')
//      ->join('subjects', 'vocabularies.id', '=', 'subjects.vocabulary_id')
//      ->join('sentences', 'subjects.id', '=', 'sentences.subject_id')
//      ->select('vocabularies.vocab_word')
//      ->get();

    return view('sentence-func2.sentenceSubject',compact('vocabularies'));





  }
////$vocabulary = Vocabulary::all();
//////    $testvocab = $request->session()->get('testvocab');
////return view('',compact('vocabulary');
//
  public function postCreateStep1(Request $request)
  {

    $this->validate($request,[
      'subject' => 'required'
    ]);

    if(empty($request->session()->get('testvocab'))){
      $testvocab = new Testvocab();
      $testvocab->subject = $request->input('subject');
      $request->session()->put('testvocab', $testvocab);
    }else{
      $testvocab = $request->session()->get('testvocab');
      $testvocab->subject = $request->input('subject');
//      $testvocab->fill($fill1);
      $request->session()->put('testvocab', $testvocab);
    }
    return redirect('/sentences/verb');
  }
//
//  public function createStep2(Request $request)
//  {
//    $testvocab = $request->session()->get('testvocab');
//    return view('sentence-func2.sentenceVerb',compact('testvocab', $testvocab));
//  }
//  public function postCreateStep2(Request $request)
//  {
//    $testvocab = $request->session()->get('testvocab');
//    if(!isset($testvocab->varb)) {
//      $this->validate($request,[
//        'verb' => 'required'
//      ]);
//
//      $testvocab = $request->session()->get('testvocab');
//
//      $testvocab->verb = $request->input('verb');
//      $request->session()->put('testvocab', $testvocab);
//    }
//    return redirect('/sentences/object');
//
//  }
//
//  public function createStep3(Request $request)
//  {
//    $testvocab = $request->session()->get('testvocab');
//    return view('sentence-func2.sentenceObject',compact('testvocab', $testvocab));
//  }
//  public function postCreateStep3(Request $request)
//  {
//    $testvocab = $request->session()->get('testvocab');
//    if(!isset($testvocab->varb)) {
//      $this->validate($request,[
//        'object' => 'required'
//      ]);
//
//      $testvocab = $request->session()->get('testvocab');
//
//      $testvocab->object = $request->input('object');
//      $request->session()->put('testvocab', $testvocab);
//    }
//
//    return redirect('/sentences/nextPlay');
//
//  }
//
//  public function createStep4(Request $request)
//  {
//    $testvocab = $request->session()->get('testvocab');
//    return view('sentence-func2.sentenceNextPlay',compact('testvocab',$testvocab));
//  }
//
//  public function store(Request $request)
//  {
//    $testvocab = $request->session()->get('testvocab');
//    $testvocab->save();
//    return redirect('/sentence/play');
//  }

}
