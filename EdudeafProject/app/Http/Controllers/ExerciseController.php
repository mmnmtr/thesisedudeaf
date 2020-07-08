<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Exercise;
use App\Exercisechoice;
use App\Score;
use Illuminate\Http\Request;
use DB;
use function Sodium\compare;

class ExerciseController extends Controller
{
  //
  public function index(Request $request)
  {
    $search    = $request->get('search');
    $search2   = $request->get('search2');
    $search3   = $request->get('search3');
    $exercises = DB::table('exercises')
      ->select(array('exercisechoices.exercise_id',
        'exercises.id',
        'exercises.exercise_name',
        'exercises.type',
        'exercisetypes.type as typeName',

        DB::raw('count(exercisechoices.exercise_id) as count')))
      ->leftjoin('exercisechoices', 'exercises.id', '=', 'exercisechoices.exercise_id')
      ->join('exercisetypes', 'exercises.type', '=', 'exercisetypes.id');

    if (!empty($search)) {
      $exercises->where('exercises.exercise_name', 'like', '%' . $search . '%');
    }
    if (!empty($search2)) {
      $exercises->where('exercisetypes.type', $search2);
    }

    $exercises->groupBy('exercises.id')
      ->groupBy('exercisechoices.exercise_id')
      ->groupBy('exercises.exercise_name')
      ->groupBy('exercises.type')
      ->groupBy('exercisetypes.type');
    if (empty($search3) || $search3 == 'asc') {
      $exercises->orderBy('exercises.id', 'asc');
    } else {
      $exercises->orderBy('exercises.id', 'desc');
    }

    $exercises = $exercises->paginate(10);
//    dd($exercises);

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
    $exercise = DB::table('exercises')
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
    if (count($request->exercise_number) > 0) {
      foreach ($request->exercise_number as $item => $v) {
        {
//          $filenameToStore = null ;
          if ($request->hasFile('exercise_img')) {

            $file            = $request->exercise_img[$item];
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
          'answer' => isset($request->answer[$item]) ? $request->answer[$item] : '',
        );
        DB::table('exercisechoices')->insert($data);
      }
    }
//    return $this->exerciseShow($request->exercise_id);

    return redirect('/admin/exercises/' . $request->exercise_id[$item] . '/1')->with('success','สร้างเรียบร้อยแล้ว');
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
            'exercise_img' => $request->exercise_img[$item],
            'choice_title1' => $request->choice_title1[$item],
            'choice_title2' => $request->choice_title2[$item],
            'choice_title3' => $request->choice_title3[$item],
            'answer' => $request->answer[$item],
          );

          DB::table('exercisechoices')->insert($data);
        }
      }
      return redirect('/admin/exercises/' . $request->exercise_id[$item] . '/2')->with('success','สร้างเรียบร้อยแล้ว');
    }
  }


//  Display excercise->all set page
  public function exerciseShow($id, $type)
  {


//    name and type of exercise set join
    $exercise = DB::table('exercises')
      ->join('exercisetypes', 'exercises.type', '=', 'exercisetypes.id')
      ->where('exercises.id', '=', $id)
      ->select('exercises.id',
        'exercises.exercise_name',
        'exercisetypes.type as exerciseType_name')
      ->where('exercises.id', "=", $id)
      ->get();

//    exercise all choices of exercise set
    $exercises = DB::table('exercises')
      ->join('exercisechoices', 'exercisechoices.exercise_id', '=', 'exercises.id')
//      ->join('exercisetypes', 'exercises.type', '=', 'exercisetypes.id')
      ->where('exercisechoices.exercise_id', '=', $id)
      ->select('*')
//      ->paginate(5);
      ->get();
//    dd($exercise,$exercises);
    if ($type == 1) {
      return view('exercises-Func3.exerciseShow', compact('exercises', $exercises, 'exercise', $exercise));

    }
    if ($type == 2) {
      return view('exercises-Func3.exerciseShowType2', compact('exercises', $exercises, 'exercise', $exercise));
    }
  }


//  teacher show score
  public function exerciseStrScore(Request $request, $id)
  {
    $search = $request->get('search');
    $scores = DB::table('exercises')
      ->select(array('exercisechoices.exercise_id',
        'exercises.id',
        'exercises.exercise_name',
        'exercises.type',
        'exercisetypes.type as typeName',
        'scores.id as score_id',
        'scores.score as score',
        'scores.user_id as user_id',
        'users.studentNumber as stdNum',
        'users.titleName as stdTtName',
        'users.name as stdName',
        'users.lastname as lastname',
        'users.nickname as nickname',
        'users.grade',
        'scores.created_at',
        DB::raw('count(exercisechoices.exercise_id) as count')))
      ->leftjoin('exercisechoices', 'exercises.id', '=', 'exercisechoices.exercise_id')
      ->join('exercisetypes', 'exercises.type', '=', 'exercisetypes.id')
      ->join('scores', 'exercises.id', '=', 'scores.exercise_id')
      ->join('users', 'scores.user_id', '=', 'users.id');
    if (!empty($search)) {
      $scores->where('users.name', 'like', '%' . $search . '%')
        ->orWhere('users.lastname', 'like', '%' . $search . '%')
        ->orWhere('users.nickname', 'like', '%' . $search . '%');
    }
    $scores = $scores->where('exercises.id', '=', $id)
      ->groupBy('exercises.id')
      ->groupBy('exercisechoices.exercise_id')
      ->groupBy('exercises.exercise_name')
      ->groupBy('exercises.type')
      ->groupBy('exercisetypes.type')
      ->groupBy('scores.id')
      ->groupBy('scores.score')
      ->groupBy('scores.user_id')
      ->groupBy('users.studentNumber')
      ->groupBy('users.titleName')
      ->groupBy('users.name')
      ->groupBy('users.lastname')
      ->groupBy('users.nickname')
      ->groupBy('users.grade')
      ->groupBy('scores.created_at')
      ->orderBy('exercises.id', 'asc')
      ->paginate(10);

    $exercise = DB::table('exercises')
      ->join('exercisetypes', 'exercises.type', '=', 'exercisetypes.id')
      ->where('exercises.id', '=', $id)
      ->select('exercises.id',
        'exercises.exercise_name',
        'exercisetypes.type as exerciseType_name')
      ->where('exercises.id', "=", $id)
      ->get();

//    dd($scores,$exercise);
    return view('exercises-Func3.showScore', compact('exercise', $exercise, 'scores', $scores));

  }

  public function destroy($id)
  {
    //
    $exercise = Exercise::find($id);
    $exercise->delete();

    return redirect('/admin/exercises/')->with('success','ลบเรียบร้อย');;

  }


//  student exercise controller
//  public function stdExcerT1()
//  {
//    $exercises = DB::table('exercises')
//      ->leftJoin('scores', 'scores.exercise_id', '=', 'exercises.id')
////      ->select('exercises.id')
//      ->where('exercises.type', '=', 1)
//      ->get();
//
//
////    return  $exercises ;
//
//    dd($exercises);
//    return view('exercise-student.exercisetypesexercise', compact('exercises', $exercises));
//  }

  public function stdExcerT1()
  {
    $exercises = DB::table('exercises')
      ->leftJoin('scores', 'scores.exercise_id', '=', 'exercises.id')
      ->where('exercises.type', '=', 1)
      ->OrderBy('scores.created_at', 'desc')
      ->get();

    $exercises = DB::table('scores')
      ->rightJoin('exercises', 'exercises.id', '=', 'scores.exercise_id')
      ->where('exercises.type', '=', 1)
      ->OrderBy('scores.percentage', 'desc')
      ->get()->groupBy('exercise_name');


    $exercises = $exercises->map(function ($item, $key) {
      foreach ($item as $key => $data) {
        if ($key == 0) {
          return $data;
        }

      }
    })->values();

//    return $exercises;


//    dd($exercises);

//     return $exercises->values();


    return view('exercise-student.exercisetypesexercise', compact('exercises', $exercises));
  }

  public function stdExcerT2()
  {
    $exercises = DB::table('exercises')
      ->leftJoin('scores', 'scores.exercise_id', '=', 'exercises.id')
      ->where('exercises.type', '=', 2)
      ->OrderBy('scores.created_at', 'desc')
      ->get();

    $exercises = DB::table('scores')
      ->rightJoin('exercises', 'exercises.id', '=', 'scores.exercise_id')
      ->where('exercises.type', '=', 2)
      ->OrderBy('scores.percentage', 'desc')
      ->get()->groupBy('exercise_name');


    $exercises = $exercises->map(function ($item, $key) {
      foreach ($item as $key => $data) {
        if ($key == 0) {
          return $data;
        }

      }
    })->values();
//    dd($exercises);
    return view('exercise-student.exercisetypesexercise2', compact('exercises', $exercises));

  }

  public function stdExceshowType1($id)
  {
    $users           = DB::table('users')
      ->where('users.id', '=', Auth::id())
      ->select('*')
      ->get();
    $exercises       = DB::table('exercises')
      ->join('exercisetypes', 'exercises.type', '=', 'exercisetypes.id')
      ->where('exercises.id', '=', $id)
      ->select('exercises.id',
        'exercises.exercise_name',
        'exercisetypes.type as exerciseType_name'
      )
      ->where('exercises.id', "=", $id)
      ->get();
    $exercisechoices = DB::table('exercisechoices')
      ->join('exercises', 'exercisechoices.exercise_id', '=', 'exercises.id')
      ->where('exercisechoices.exercise_id', "=", $id)
      ->get();
//    $scores = DB::table('scores')
//      ->where('scores.exercise_id', '=', $id)
//      ->get();
//    dd($exercisechoices,$exercises,$users,$scores);
    return view('exercise-student.exercisetypesexercise_1',
      array('users' => $users,
        'exercises' => $exercises,
        'exercisechoices' => $exercisechoices));
  }

  public function stdExceshowType2($id)
  {
    $users           = DB::table('users')
      ->where('users.id', '=', Auth::id())
      ->select('*')
      ->get();
    $exercises       = DB::table('exercises')
      ->join('exercisetypes', 'exercises.type', '=', 'exercisetypes.id')
      ->where('exercises.id', '=', $id)
      ->select('exercises.id',
        'exercises.exercise_name',
        'exercisetypes.type as exerciseType_name'
      )
      ->where('exercises.id', "=", $id)
      ->get();
    $exercisechoices = DB::table('exercisechoices')
      ->join('exercises', 'exercisechoices.exercise_id', '=', 'exercises.id')
      ->where('exercisechoices.exercise_id', "=", $id)
      ->get();
//    dd($exercisechoices,$exercise,$user);
    return view('exercise-student.exercisetypesexercise_2',
      array('users' => $users,
        'exercises' => $exercises,
        'exercisechoices' => $exercisechoices));
  }


  public function scoreT1(Request $request)
  {
    $this->validate($request, [
      'score' => 'required',
      'exercise_id' => 'required',
      'percentage' => 'required'
    ]);
    $score              = new Score;
    $score->score       = $request->input('score');
    $score->exercise_id = $request->input('exercise_id');
    $score->percentage  = $request->input('percentage');
    $score->user_id     = Auth::id();
    $score->save();
    return redirect('/exercises/type/1');

  }
  public function scoreT2(Request $request)
  {
    $this->validate($request, [
      'score' => 'required',
      'exercise_id' => 'required',
      'percentage' => 'required'
    ]);
    $score              = new Score;
    $score->score       = $request->input('score');
    $score->exercise_id = $request->input('exercise_id');
    $score->percentage  = $request->input('percentage');
    $score->user_id     = Auth::id();
    $score->save();
    return redirect('/exercises/type/2');

  }


}
