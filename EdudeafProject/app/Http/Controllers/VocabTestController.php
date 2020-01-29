<?php

namespace App\Http\Controllers;
use App\Testvocab;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Vocabulary;
use Illuminate\Http\Request;


class VocabTestController extends Controller
{
    //
  public function index(Request $request)
  {
    $request->session()->forget('testvocab');
//    $testvocabs = Testvocab::all();

    $testvocabs = DB::table('testvocabs')
      ->select(['testvocabs.id',

        'testvocabs.subject_id',
        'subject.vocab_word as subject',
        'subject.vocab_video as subject_v',
        'subject.category_id as subject_cid',

        'testvocabs.verb_id',
        'verb.vocab_word as verb',
        'verb.vocab_video as verb_v',
        'verb.category_id as verb_cid',

        'testvocabs.object_id',
        'obj.vocab_word as object',
        'obj.vocab_video as obj_v',
        'obj.category_id as obj_cid',
      ])
      ->leftJoin('vocabularies as subject','testvocabs.subject_id','=','subject.id')
      ->leftJoin('vocabularies as verb','testvocabs.verb_id','=','verb.id')
      ->leftJoin('vocabularies as obj','testvocabs.object_id','=','obj.id')
      ->join('users','testvocabs.user_id','=','users.id')
      ->where('user_id','=',Auth::id())
      ->orderBy('id', 'desc')
      ->offset(0)
      ->limit(1)
      ->get();
//    dd($testvocabs);
//
//    $vocabularies = DB::table('vocabularies')
//      ->join('testvocabs as subject','vocabularies.id','=','subject.subject_id')
//      ->join('testvocabs as verb','vocabularies.id','=','verb.verb_id')
//      ->join('testvocabs as obj','vocabularies.id','=','obj.object_id')
////      ->select('$vocabularies.*')
//      ->get();
//    dd($vocabularies);

    return view('sentence-func2.sentencePlay',compact('testvocabs',$testvocabs));
  }

  public function createStep1(Request $request)
  {
    $vocabularies = DB::table('vocabularies')
      ->where('category_id', '=', 1)
      ->get();
    $testvocab = $request->session()->get('testvocab');
    return view('sentence-func2.sentenceSubject',compact('testvocab', $testvocab,'vocabularies', $vocabularies));
  }

  public function postCreateStep1(Request $request)
  {
     $this->validate($request,[
        'subject' => 'required',
        'subject_id' => 'required'
    ]);

    if(empty($request->session()->get('testvocab'))){
      $testvocab = new Testvocab();
      $testvocab->subject = $request->input('subject');
      $testvocab->subject_id = $request->input('subject_id');
      $request->session()->put('testvocab', $testvocab);
    }else{
      $testvocab = $request->session()->get('testvocab');
      $testvocab->subject = $request->input('subject');
      $testvocab->subject_id = $request->input('subject_id');
//      $testvocab->fill($fill1);
      $request->session()->put('testvocab', $testvocab);
    }
    return redirect('/sentences/verb');
  }

  public function createStep2(Request $request)
  {
    $vocabularies = DB::table('vocabularies')
      ->where('category_id', '=', 2)
      ->get();
    $testvocab = $request->session()->get('testvocab');
    return view('sentence-func2.sentenceVerb',compact('testvocab', $testvocab,'vocabularies', $vocabularies));
  }
  public function postCreateStep2(Request $request)
  {
    $testvocab = $request->session()->get('testvocab');
    if(!isset($testvocab->verb)) {
      $this->validate($request,[
        'verb' => 'required',
        'verb_id' => 'required'
      ]);
      $testvocab = $request->session()->get('testvocab');
      $testvocab->verb = $request->input('verb');
      $testvocab->verb_id = $request->input('verb_id');
      $request->session()->put('testvocab', $testvocab);
    }
    return redirect('/sentences/object');

  }

  public function createStep3(Request $request)
  {
    $vocabularies = DB::table('vocabularies')
      ->whereNotIn('category_id', array(1,2))
      ->orderBy('id', 'desc')
      ->take(10)
      ->get()
      ->random(2);
    $testvocab = $request->session()->get('testvocab');
    return view('sentence-func2.sentenceObject',compact('testvocab', $testvocab,'vocabularies', $vocabularies));
  }
  public function postCreateStep3(Request $request)
  {
    $testvocab = $request->session()->get('testvocab');
    if(!isset($testvocab->object)) {
      $this->validate($request,[
        'object' => 'required',
        'object_id' => 'required'
      ]);

      $testvocab = $request->session()->get('testvocab');
      $testvocab->object = $request->input('object');
      $testvocab->object_id = $request->input('object_id');
      $request->session()->put('testvocab', $testvocab);
    }

    return redirect('/sentences/nextPlay');

  }

  public function createStep4(Request $request)
  {
    $testvocab = $request->session()->get('testvocab');
    return view('sentence-func2.sentenceNextPlay',compact('testvocab',$testvocab));
  }

  public function store(Request $request)
  {
    $testvocab = $request->session()->get('testvocab');
    $testvocab->user_id = Auth::id();
    $testvocab->save();
    return redirect('/sentence/play');
  }



  public function backend()
  {
//    $users = DB::table('users')->get();
    $users = DB::table('users')
      ->select(array('testvocabs.user_id','users.name','users.nickname','users.id',DB::raw('COUNT(testvocabs.user_id) as count')))
      ->leftjoin('testvocabs','testvocabs.user_id','=','users.id')
      ->groupBy('users.name')
      ->groupBy('users.nickname')
      ->groupBy('users.id')
      ->groupBy('testvocabs.user_id')
      ->orderBy('users.id', 'asc')
      ->get();
//    dd($users);
    return view('sentences.index',['users' => $users,]);
  }
  public function backendShow( $id)
  {
    $testvocabs = DB::table('testvocabs')
      ->where('user_id','=',$id)
      ->get();
//    dd($testvocabs);


//    $user = DB::table('users')
//      ->select('testvocabs.user_id','testvocabs.subject','testvocabs.verb','testvocabs.object')
//      ->leftjoin('testvocabs','testvocabs.user_id','=','users.id')
//      ->get();
//    dd($user);
    return view('sentences.show',compact('testvocabs',$testvocabs));
  }

}
