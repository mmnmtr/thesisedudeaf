<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    //

    public function index()
    {
        Alert::success('สำเร็จ', 'Success Message');
        return view('home');
    }
}
