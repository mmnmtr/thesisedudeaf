<?php

namespace App\Http\Controllers;

use App\User;
//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('studentHome');
    }

    public function sentenceStudent()
    {
        return view('sentence-func2.sentenceSubject');
    }



    public function studentList(Request $request)
    {
      $search = $request->get('search');
      $users = DB::table('users')
        ->select('*');
        if (!empty($search)){
          $users->where('users.name','like','%'.$search.'%')
            ->orWhere('users.lastname', 'like', '%' . $search . '%')
            ->orWhere('users.nickname', 'like', '%' . $search . '%');
        }
      $users = $users ->paginate(10);
      return view('student-list.index',compact('users',$users));
    }
    public function create(){
      return view('student-list.register');
    }

  public function store(Request $request){

    $this->validate($request,[
      'studentNumber'=>'required',
      'titleName'=>'required',
      'name'=>'required',
      'lastname'=>'required',
      'nickname'=>'required',
      'grade'=>'required',
      'password'=>'required',
    ]);
    $user = new User;
    $user->studentNumber = $request->input('studentNumber');
    $user->titleName = $request->input('titleName');
    $user->name = $request->input('name');
    $user->lastname = $request->input('lastname');
    $user->nickname = $request->input('nickname');
    $user->grade = $request->input('grade');
    $user->password = bcrypt(request('password'));
    $user->save();

    return redirect('/admin/students')->withSuccess('สร้างหมวดหมู่คำศัพท์เรียบร้อย');
  }

  public function destroy($id){
    $user = User::find($id);
    $user->delete();
    return redirect('/admin/students')->with('ลบหมวดหมู่คำศัพท์เรียบร้อย');
  }

  public function showExercise($id){

      $user = DB::table('users')
        ->where('users.id','=',$id)
        ->get();

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
      ->leftjoin('exercisechoices','exercises.id','=','exercisechoices.exercise_id')
      ->join('exercisetypes', 'exercises.type', '=', 'exercisetypes.id')
      ->join('scores','exercises.id','=','scores.exercise_id')
      ->join('users','scores.user_id','=','users.id')
      ->where('users.id','=',$id)
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
      ->orderBy('exercises.id','asc')
      ->paginate(10);
//    ->get();


//      dd($user,$scores);
    return view('student-list.stdScore',compact('user',$user,'scores',$scores));
//    $user = User::find($id);
//    $user->delete();
//    return redirect('/admin/students')->with('ลบหมวดหมู่คำศัพท์เรียบร้อย');
  }


//  public function show($id){
//    $user = User::find($id);
//    return view('student-categories.showword',compact('user'));
//  }


}
