<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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



    public function studentList()
    {
      $users = DB::table('users')
        ->get();
      return view('student-list.index',compact('users'));
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

    return redirect('/admin/students/create')->withSuccess('สร้างหมวดหมู่คำศัพท์เรียบร้อย');
  }

  public function destroy($id){
    $user = User::find($id);
    $user->delete();
    return redirect('/admin/students')->with('ลบหมวดหมู่คำศัพท์เรียบร้อย');
  }

//  public function show($id){
//    $user = User::find($id);
//    return view('student-categories.showword',compact('user'));
//  }


}
