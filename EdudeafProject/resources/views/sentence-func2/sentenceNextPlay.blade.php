@extends('layouts.appstudent')
@section('content')
  <div class="function">
    <div class="container">
      <form action="/sentences/play" method="post" >
        {{ csrf_field() }}
        <div class="row">
          <img class="bg" src="/../img/category_map.png" alt="">
          <div class="functitle col col-md-12">
            <div class="row">
              <div class="col-md-12">
                <h1 class="text-center">
                  ประธาน
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
                        <p>{{$testvocab->subject}}</p>
                      </div>
                    </div>
                    <div class="sentence col-md-4">
                      <div class="text-center">
                        <div class="sentenceTitle2">
                          <h2>กริยา</h2>

                        </div>
                        <p>{{$testvocab->verb}}</p>
                      </div>
                    </div>
                    <div class="sentence col-md-4">
                      <div class="sentenceTitle3">
                        <h2>กรรม</h2>
                      </div>

                      <p>{{$testvocab->object}}</p>
                    </div>

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

              <button type="submit" class="btn btn-primary">เล่นวิดีโอ</button>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>







@endsection
