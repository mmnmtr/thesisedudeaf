<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Select;

class ExampleKKController extends Controller
{
  //
  public function index()
  {


  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $select = new Select;
    $select->selected = $request->selected;
    $select->ex_id = $request->ex_id;
    $select->user_id = $request->user_id;
    $select->save();
    dd($request->all());

  }

}
