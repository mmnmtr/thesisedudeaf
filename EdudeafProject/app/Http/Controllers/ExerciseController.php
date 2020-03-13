<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
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
    $exercises = DB::table('Exercises')
      ->join('exercisetypes', 'exercises.type', '=', 'exercisetypes.id')
      ->select('exercises.id',
        'exercises.exercise_name',
        'exercisetypes.type as exerciseType_name'
      )
      ->get();
//    dd($exercisetypes);

    return view('exercises-Func3.index', ['exercises' => $exercises]);
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
    return redirect('/admin/exercises/create/' . $exercise->id . '/' . $exercise->type);
//    }
  }

  public function exerciceType($id, $type)
  {
    $exercise = DB::table('Exercises')
      ->join('exercisetypes', 'exercises.type', '=', 'exercisetypes.id')
      ->where('exercises.id', '=', $id)
      ->select('exercises.id',
        'exercises.exercise_name',
        'exercisetypes.type as exerciseType_name'
      )
      ->get();
    if ($type == 1) {
//      dd($exercise);
      return view('exercises-Func3.createChoicestype1', compact('exercise', $exercise));
    }
    if ($type = 2) {
//      dd($exercise);
      return view('exercises-Func3.createChoicestype2', compact('exercise', $exercise));
    }
  }

  public function type1Choice(Request $request)
  {
//    dd($request->all());
      if(count($request->exercise_number) > 0 )
      {
        foreach ($request->exercise_number as $item => $v) {
          {
//          $filenameToStore = null ;
            if ($request->hasFile('exercise_img')) {

                $file = $request->exercise_img[$item];
                $filename        = $file->getClientOriginalName();
                $filenameToStore = Date('YmdHis') . '_' . $filename;
                $file->move('uploads/exercise_img', $filenameToStore);
            }
          }
          $data = array(
            'exercise_id' => $request->exercise_id[$item],
            'exercise_number' => $request->exercise_number[$item],
            'exercise_img' => $filenameToStore,
            'choice_title1' => $request->choice_title1[$item],
            'choice_title2' => $request->choice_title2[$item],
            'choice_title3' => $request->choice_title3[$item],
            'answer' => $request->answer[$item],
          );
          DB::table('Exercisechoices')->insert($data);
        }
      }
      return redirect('/admin/exercises/create')->withSuccess('สร้างหมวดหมู่คำศัพท์เรียบร้อย');
    }


  public function type2Choice(Request $request)
  {
//    dd($request->all());
    if (count($request->exercise_number) > 0) {
      foreach ($request->exercise_number as $item => $v) {
        {
          $filename = null;
          $data     = array(

            'exercise_id' => $request->exercise_id[$item],
            'exercise_number' => $request->exercise_number[$item],
            'exercise_img' => $filename,
            'choice_title1' => $request->choice_title1[$item],
            'choice_title2' => $request->choice_title2[$item],
            'choice_title3' => $request->choice_title3[$item],
            'answer' => $request->answer[$item],
          );
          DB::table('Exercisechoices')->insert($data);
        }
      }
      return redirect('/admin/exercises/create')->withSuccess('สร้างหมวดหมู่คำศัพท์เรียบร้อย');
    }
  }
  public  function Exceshow($id)
  {
//    $exercise = exercise::with('exercisechoice')->find($id);
    $exercises = DB::table('Exercises')
      ->join('exercisechoices','exercisechoices.exercise_id','=','exercises.id')
      ->where('exercisechoices.exercise_id','=',$id)
//      ->select('exercisechoices.exercise_img as exercise_img ')
//      ->paginate(1);
      ->get();

//    dd($exercises);
    return view('exercises-Func3.exerciseShow',compact('exercises',$exercises));
  }



//  student exercise controller
  public function stdExcerT1()
  {
    $exercises = DB::table('Exercises')
      ->where('exercises.type','=',1)
    ->get();
//    dd($exercise);
    return view('exercise-student.exercisetypesexercise',compact('exercises', $exercises));
  }

  public function stdExcerT2()
  {
    $exercises = DB::table('Exercises')
      ->where('exercises.type','=',2)
      ->get();
//    dd($exercise);
    return view('exercise-student.exercisetypesexercise2',compact('exercises', $exercises));

  }

  public  function stdExceshow($id)
  {
//    $exercise = exercise::with('exercisechoice')->find($id);
    $exercises = DB::table('Exercises')
      ->join('exercisechoices','exercisechoices.exercise_id','=','exercises.id')
      ->where('exercisechoices.exercise_id','=',$id)
//      ->select('exercisechoices.exercise_img as exercise_img ')
//      ->paginate(1);
    ->get();

//    dd($exercises);
    return view('exercise-student.exercisetypesexercise_1',compact('exercises',$exercises));
  }
}
