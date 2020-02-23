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
      height: 211.7px;
      border-radius: 33px;
      border: solid 10px #3ebbae;
      background-color: #ffffff;
    }
    .exerciseset p {
      font-family: 'Kodchasan';
      font-size: 19px;
      font-weight: bold;
      color: #3ebbae;
    }
    .exerciseset h2 {
      font-family: 'Kodchasan';
      font-size: 98px;
      font-weight: bold;
      color: #464c51;
    }

  </style>

  <div class="function">
    <div class="container">
      <div class="row">
        <div class="functitle col col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center">
                เลือกแบบฝึกหัด
              </h1>
            </div>
            <div class="categories_list_padding">
              <div class="excersiceType">
                <div class="col-md-12">
                  <div class="categories_list_padding">
                    <div class="row">
                      {{--                        @if(count($categories) > 0)--}}
                      {{--                          @foreach($categories as $category)--}}

                      
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
