<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentExcersiceController extends Controller
{
    //
    public function index()
    {
        return view('student-exercises.index');
    }
}
