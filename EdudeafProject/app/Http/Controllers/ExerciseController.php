<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\Exercisechoice;
use Illuminate\Http\Request;
use DB;
use function Sodium\compare;

class ExerciseController extends Controller
{
    //
  public function index()
  {
    $exercisetypes = DB::table('exercisetypes')
      ->get();
//    dd($exercisetypes);

    return view('exercises-Func3.index',['exercisetypes' => $exercisetypes]);
  }

  public function create()
  {
    return view('exercises-Func3.create');
  }
  public function store(Request $request)
  {
    $this->validate($request, [
      'exercise_name' => 'required',
      'type' => 'required',
    ]);

    $exercise                = new Exercise;
    $exercise->exercise_name = $request->input('exercise_name');
    $exercise->type          = $request->input('type');
    $exercise->save();

//    if ($request->type == 1) {
//      return view('exercises-Func3.createChoicestype1');
//      return redirect('/admin/exercises/create/'.$exercise->id);

//    } else {
//      return view('exercises-Func3.createChoicestype2');
      return redirect('/admin/exercises/create/'.$exercise->id.'/'.$exercise->type);
//    }
  }
    public function exerciceType($id, $type)
  {
    $exercise = DB::table('Exercises')
      ->join('exercisetypes','exercises.type','=','exercisetypes.id')
      ->where('exercises.id','=',$id)
      ->select('exercises.id',
        'exercises.exercise_name')
      ->get();
    if($type == 1) {
//      dd($exercise);
//      return view('exercises-Func3.createChoicestype1',compact('exercise',$exercise));
    }
    if($type = 2) {
//      dd($exercise);
      return view('exercises-Func3.createChoicestype2',compact('exercise',$exercise));
    }
  }

  public function storeChoice(Request $request)
  {
    $data = $request->all();
    $lastid = Exercisechoices::create($data)->id;
    if (count($request->exercise_number) > 0)
    {
      foreach ($request->exercise_number as $item => $v)
        $data2 = array(
          
        )
    }
//    $this->validate($request,[
//      'exercise_id'=>'required',
//      'exercise_number'=>'required',
//      'exercise_img'=>'required',
//      'choice_title1'=>'required',
//      'choice_title2'=>'required',
//      'choice_title3'=>'required',
//      'answer'=>'required'
//
//    ]);
//
//    $exercisechoice = new Exercisechoices;
//    $exercisechoice->exercise_id = $request->input('exercise_id');
//    $exercisechoice->exercise_number = $request->input('exercise_number');
//    $exercisechoice->exercise_img = $request->input('exercise_img');
//    $exercisechoice->choice_title1 = $request->input('choice_title1');
//    $exercisechoice->choice_title2 = $request->input('choice_title2');
//    $exercisechoice->choice_title3 = $request->input('choice_title3');
//    $exercisechoice->answer = $request->input('answer');
//    $exercisechoice->save();

//    dd($exercisechoice);
//    return $request;

//    return redirect('/admin/')->withSuccess('สร้างหมวดหมู่คำศัพท์เรียบร้อย');

  }

}
