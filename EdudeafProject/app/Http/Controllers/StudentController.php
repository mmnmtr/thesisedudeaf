<?php

namespace App\Http\Controllers;

use App\User;
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

    public function create(){
      return view('student-list.register');
    }
  public function store(Request $request){

    $this->validate($request,[
      'studentNumber'=>'required|string',
      'name'=>'required|string',
      'nickname'=>'required|string',
      'password'=>'required|string',
    ]);
    $user = new User;
    $user->studentNumber = $request->input('studentNumber');
    $user->name = $request->input('name');
    $user->nickname = $request->input('nickname');
    $user->password = bcrypt(request('password'));
    $user->save();

    return redirect('/admin/categories/create')->withSuccess('สร้างหมวดหมู่คำศัพท์เรียบร้อย');
  }


}
