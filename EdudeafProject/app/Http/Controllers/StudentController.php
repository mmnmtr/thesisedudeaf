<?php

namespace App\Http\Controllers;

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


}
