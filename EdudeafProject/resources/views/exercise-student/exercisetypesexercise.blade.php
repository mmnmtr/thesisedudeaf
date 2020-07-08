@extends('layouts.appstudentExercise')
@section('content')
  <style>
    body {
      font-family: 'Kodchasan', sans-serif;
      background-color: #FCFBF5;

    }

    .excersiceType {
      width: 100%;
    }

    .categories_list_padding {
      padding: 0px 0px;
      padding-top: 60px;
    }

    button:focus {
      outline: none;
    }

    .footer img {
      display: none;
    }

    a:not([href]):not([tabindex]) {
      color: #ffffff;
    }
    .exerciseset {
      width: 100%;
      height: 145px;
      border-radius: 100px;
      border: solid 10px #ffffff;
      background-color: #ffffff;
    }


    .slick-prev {
      left: -165px !important;
    }

    .slick-next {
      right: -165px !important;
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
                  <div class="categories_list_paddingt0">
                    <input type="hidden" id="countV" value="{{$exercises -> count()}}"  onchange>
                    <div class="vertical">
                      @if(count($exercises) > 0)
                        @foreach($exercises as $key => $exercise)

                          <div class="col-md-12 ">
                            <div class="text-center">
                              <div class="btn exerciseset mb-4 box-shadow">
                                <div class="row">

                                  <div class="col-md-2">
                                    <div class="circleStar" id="circleStar_{{$key}}">
                                      <input type="hidden" id="percentage_{{$key}}" value="{{$exercise->percentage}}">
                                      @if($exercise->percentage != null )

                                      <div id="emoji_{{$key}}"></div>

                                      @elseif($exercise->percentage == '')
                                        <i class="fas fa-star"></i>
                                      @endif
                                    </div>
                                  </div>
                                  <div class="bbg col-md-6">
                                    <h2>{{$exercise->exercise_name}}</h2>
                                  </div>
                                  <div class="col-md-4 "
                                       style="position: relative; margin-top: -8px;margin-left: -25px;">
                                    <a href="/exercises/type1/{{$exercise->id}}">
                                      <button class="btn btn-start">เริ่มทำ &nbsp; <i class="fas fa-arrow-right"></i>
                                      </button>
                                    </a>
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


  <script !src="">

    var countV = document.getElementById("countV");
    var count = countV.value;
    // console.log(countV);
    console.log(count);

    for (var i = 0 ; i < count ; i ++)
    {
      var percentage = document.getElementById("percentage_"+i);
      var percent = percentage.value;
      var emoji = document.getElementById("emoji_"+i);
      var circleStar = document.getElementById("circleStar_"+i)
      console.log(percent);
      console.log(circleStar);

      if (percent >= 70 )
      {
        circleStar.classList.add("circleGreen");
        emoji.innerHTML = "<i class=\"fas fa-grin-stars\"></i>";
      }
      else if (percent >= 40)
      {
        circleStar.classList.add("circleYellow");
        emoji.innerHTML = "<i class=\"fas fa-smile\"></i>";
      }
      else if (percent > 0) {
        circleStar.classList.add("circleRed");
       emoji.innerHTML = "<i class=\"fas fa-frown\"></i>";
      }
    }
  </script>

@endsection
