<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Exercise;
use App\Exercisechoice;
use App\Score;
use Illuminate\Http\Request;
use DB;

class ExerciseChoicesController extends Controller
{
  //



  public function editT1($id)
  {
    //
    $exercisechoice = DB::table('exercisechoices')
      ->join('exercises','exercisechoices.exercise_id','=','exercises.id')
      ->where('exercisechoices.id','=',$id)
      ->get();

//    dd($exercisechoice);
    return view('exercises-Func3.createChoicestype1Edit',compact('exercisechoice'));
  }
//
  public function editT2($id)
  {
    //
    $exercisechoice = DB::table('exercisechoices')
      ->join('exercises','exercisechoices.exercise_id','=','exercises.id')
      ->where('exercisechoices.id','=',$id)
      ->get();
//    dd($exercisechoice);
    return view('exercises-Func3.createChoicestype2Edit',compact('exercisechoice'));
  }


  public function updateT1(Request $request, $id)
  {
    $this->validate($request,[
      'choice_title1'=>'required',
      'choice_title2'=>'required',
      'choice_title3'=>'required',
      'answer'=>'required',
    ]);

    if ($request->hasFile('exercise_img')) {
      $extension = $request->file('exercise_img')->getClientOriginalName();

      //create new file namehj
      $filenameToStore = Date('YmdHis').'_'.$extension;

      //upload
      $request->file('exercise_img')->move('uploads/exercise_img',$filenameToStore);
    }else {
      $filenameToStore = $request->get('exercise_img_old');
    }


    $exercisechoice = Exercisechoice::find($id);
    $exercisechoice->choice_title1 = $request->input('choice_title1');
    $exercisechoice->choice_title2 = $request->input('choice_title2');
    $exercisechoice->choice_title3 = $request->input('choice_title3');
    $exercisechoice->answer = $request->input('answer');
    $exercisechoice->exercise_img = $filenameToStore;
    $exercisechoice->save();

    return redirect('/admin/exercises/'.$exercisechoice->exercise_id.'/1')->with('success','แก้ไขเรียบร้อย');

  }

  public function updateT2(Request $request, $id)
  {
    $this->validate($request,[
      'choice_title1'=>'required',
      'choice_title2'=>'required',
      'choice_title3'=>'required',
      'answer'=>'required',
    ]);

    if ($request->hasFile('exercise_img')) {
      $extension = $request->file('exercise_img')->getClientOriginalName();

      //create new file namehj
      $filenameToStore = Date('YmdHis').'_'.$extension;

      //upload
      $request->file('exercise_img')->move('uploads/exercise_img',$filenameToStore);
    }else {
      $filenameToStore = $request->get('exercise_img_old');
    }


    $exercisechoice = Exercisechoice::find($id);
    $exercisechoice->choice_title1 = $request->input('choice_title1');
    $exercisechoice->choice_title2 = $request->input('choice_title2');
    $exercisechoice->choice_title3 = $request->input('choice_title3');
    $exercisechoice->answer = $request->input('answer');
    $exercisechoice->exercise_img = $filenameToStore;
    $exercisechoice->save();

    return redirect('/admin/exercises/'.$exercisechoice->exercise_id.'/2')->with('success','แก้ไขเรียบร้อย');
  }


  public function destroyT1($id)
  {

    $exercisechoice = Exercisechoice::find($id);
    $exercisechoice->delete();
    return redirect('/admin/exercises/'.$exercisechoice->exercise_id.'/1')->with('แก้ไขเรียบร้อย');

  }
  public function destroyT2($id)
  {

    $exercisechoice = Exercisechoice::find($id);
    $exercisechoice->delete();
    return redirect('/admin/exercises/'.$exercisechoice->exercise_id.'/2')->with('แก้ไขเรียบร้อย');

  }

  public function  destroyReturn($id) {
//    $exercise  = DB::table('exercises')
      $exercise = Exercises::find($id);
//      ->where('exercises.id','=',$id)
//      ->get();
    dd($exercise);
    //
//    if ($exercise->type == 1)
//    {
//      dd('dad');
//    }
//    if ($exercise->type == 2)
//    {
//      dd('dad2');
//    }
  }






}
