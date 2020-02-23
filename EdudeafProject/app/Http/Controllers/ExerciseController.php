<?php

namespace App\Http\Controllers;

use App\Exercise;
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

    if ($request->type == 1) {
      return redirect('/admin/exercises/create/'.$exercise->id);

    } else {
      return redirect('/admin/exercises/create/'.$exercise->id);
    }
  }
    public function exerciceType1($id)
  {

    return view('exercises-Func3.createChoicestype1');
  }
  public function exerciceType2($id)
  {

    return view('exercises-Func3.createChoicestype2');
  }

}
