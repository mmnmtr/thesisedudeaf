@extends('layouts.appstudent')
@section('content')
  <div class="function" xmlns="http://www.w3.org/1999/html">
        <div class="container">
          <form action="/sentences/subject" method="post">
            {{ csrf_field() }}
            <div class="row">
                <img class="bg" src="/../img/category_map.png" alt="">
                <div class="functitle col col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center">
                                ประโยค
                            </h1>
                        </div>
                        <div class="categories_list_padding">
                            <div class="col-md-12 ">
                                <div class="row">

                                        <div class="sentence col-md-4">
                                            <div class="sentenceTitle1">
                                                <h2>ประธาน</h2>

                                            </div>
                                            <div class="">

                                              <div id="textfield"></div>
                                              <input type="text" id="theinput" value="{{{ $testvocab->subject or '' }}}" class="form-control" id="taskTitle"  name="subject">
                                            </div>
                                        </div>
                                        <div class="sentence col-md-4">
                                            <div class="text-center">
                                              <div class="sentenceTitle2">
                                                  <h2>กริยา</h2>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="sentence col-md-4">
                                            <div class="sentenceTitle3">
                                                <h2>กรรม</h2>
                                            </div>
                                        </div>
                                    @foreach($testvocabs as $testvocab)
                                      <input type="button" class="button" value="{{$testvocab->subject}}"/>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="return">
                <div class="col-md-12">
                  <div class="text-center">



                    <a href="/student/home">
                      <button class="btn btn-Stdback"><h2><i class="fas fa-redo-alt"></i> ย้อนกลับ</h2></button>
                    </a>
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                    <button type="submit" class="btn btn-primary">ต่อไป</button>
                  </div>
                </div>
              </div>
          </form>

        </div>
    </div>
@endsection
