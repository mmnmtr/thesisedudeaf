@extends('layouts.appstudent')
@section('content')
  <style>
    body {
      font-family: 'Kodchasan', sans-serif;
      background-color: #FCFBF5;
      background-image: url(/../img/exercise_bg.png);
      background-repeat: no-repeat;
      background-position: 0px 0px;
      background-size: 100% auto;
    }

    .functitle {
      width: 100%;
      height: 900px;
      box-shadow: 0 0 99px 0 rgba(0, 0, 0, 0.08);
      border-left: solid 20px #3ebbae;
      border-right: solid 20px #3ebbae;
      background-color: #FCFFFF;
    }

    .excersiceType {
      width: 100%;
    }

    .categories_list_padding {
      padding-top: 60px;
    }

    .functitle h1 {
      margin-top: 80px;
    }

    button:focus {
      outline: none;
    }

    .footer img {
      display: none;
    }

    img.blackBoard {
      margin-top: -150px;
      position: relative;
      width: 1510px;
    }
    a:not([href]):not([tabindex]) {
      color: #ffffff;
    }
    .categories_list_padding {
      padding: 0px 80px;
      padding-top: 60px;
    }
    .exerciseset {
      width: 100%;
      height: 145px;
      border-radius: 100px;
      border: solid 10px #ffffff;
      background-color: #ffffff;
    }
    .exerciseset h2 {
      font-family: 'Kodchasan';
      font-size: 48px;
      font-weight: bold;
      color: #464c51;
    }
    .circleStar {
      float: left;
      width: 145px;
      height: 145px;
      background-color: #edeff0;
      border: solid 10px #e2e2e2;
      border-radius: 100px;
      position: relative; margin-top: -15px;
      margin-left: -25px;
    }
    .btn-start {
      width: 353.3px;
      height: 126.4px;
      border-radius: 76px;
      box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.16);
      border: solid 10px #ffffff;
      background-color: #3ebbae;
    }
    .bbg {
      /*width: 100%;*/
      /*height: 110px;*/
      /*border-radius: 100px;*/
      /*box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.16);*/
      /*border: solid 6px #fcffff;*/
      /*background-color: #e2efed;*/
    }

  </style>

  <div class="function">
    <div class="container">
      <div class="row">
        <div class="functitle col col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center">
                เลือกแบบฝึกหัดคำศัพท์ให้ตรงกับภาพ
              </h1>
            </div>
            <div class="categories_list_padding">
              <div class="excersiceType">
                <div class="col-md-12">
                  <div class="categories_list_padding">
                    <div class="vertical">
                                              @if(count($exercises) > 0)
                                                @foreach($exercises as $exercise)

                      <div class="col-md-12 ">
                        <div class="text-center">
                          <div class="btn exerciseset mb-4 box-shadow">
                            <div class="row">

                              <div class="col-md-2">
                                <div class="circleStar"></div>
                              </div>
                              <div class="bbg col-md-6">
                                <h2>{{$exercise->exercise_name}}</h2>
                              </div>
                              <div class="col-md-4 " style="position: relative; margin-top: -8px;margin-left: -25px;">
                                <a href="/exercises/{{$exercise->id}}"><button class="btn btn-start" >เริ่มทำ</button></a>
                              </div>
                            </div>



                          </div>
                        </div>

                      </div>

                        @endforeach
                      @else
                      @endif


                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="text-center">
    <img class="blackBoard" src="/../img/blackboard.png" alt="">
  </div>

  </div>

@endsection
