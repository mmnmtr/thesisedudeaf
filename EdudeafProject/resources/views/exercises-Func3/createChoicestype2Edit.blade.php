@extends('layouts.appteacherExercise')
@section('content')

  <style>
    select.form-control:not([size]):not([multiple]) {
      height: 70px;
    }

    .btn-createCate {
      margin-right: 15px;
    }

    .btn-createCateGreen {
      margin-left: 15px;
    }

    .table td, .table th {
      padding: .75rem;
      border-top: 0px solid #dee2e6;
    }

    .createInput {
      font-size: 24px;
      font-weight: bold;
      color: #3078ff;
    }

    .createInputShow {
      font-size: 24px;
      font-weight: bold;
      color: #3078ff;
      display: flex;
      align-items: center;
    }

    .card {
      height: 590px;
      margin-top: 30px;
      margin-bottom: 50px;
    }

    .padding40 {
      padding-top: 30px;
    }
    .buttonAction {
      margin-top: -50px;
      padding-bottom: 100px;
    }
    img.view {
      width: 282.4px;
      height: 282.4px;
      border-radius: 10px;
      box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.16);
      background-color: #ffffff;
      object-fit: cover;
    }

    .customFile .selectedFile {
      display: none;
    }

    .customFile {
      width: 285.9px;
      height: auto;
      margin-top: 30px;
      border-radius: 50px 50px 50px 50px;
    }

    .customFile[data-display=right]:before {
      float: unset;
    }

    .customFile:before {
      width: 285.9px;
      height: 73.9px;
    }
  </style>

  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-9">
            <span><div class="circke-blue"></div></span>
            <h1>แก้ไขแบบฝึกหัด</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  @foreach($exercisechoice as  $key =>  $exercisechoice)
  <form method="POST" action="/admin/exerciseschoiceT2/{{$exercisechoice->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="put">


    <div class="categories_list">
      <div class="col-md-12">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <table class="table">
                <tbody class="resultbody">

                <tr class="card">
                  <td class="col-md-12 row">
                    <div class="col-md-12" style="height: 138px">
                      <div class="row">

                        <div class="col-md-7">
                          <div class="row">
                            <div class="col-md-8 offset-md-1">
                              <h3 class="qTitle">กรอกตัวเลือก</h3>
                            </div>
                            <div class="col-md-3">
                              <h3 class="qTitle">เลือกคำตอบที่ถูก
                                </h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <h3 class="qTitle">แสดงแบบตัวสะกดนิ้วมือภาษาไทย
                          </h3>
                        </div>
                      </div>
                    </div>


                    <div class="col-md-7" style="margin-top: 0px">
                      <div class="row">

                        <div class="col-md-8 offset-md-1">
                          <input class="createInput  form-control" name="choice_title1" id="choice_title1" type="text"
                                 value="{{$exercisechoice->choice_title1}}">
                        </div>
                        <div class="col-md-3">
                          <label class="check">
                            <input type="checkbox" name="answer" id="answer1" value="1" onclick="answerCheck()">
                            <div class="box"></div>
                          </label>
                        </div>
                      </div>

                      <div class="padding40 row">

                        <div class="col-md-8 offset-md-1">
                          <input class="createInput  form-control" name="choice_title2" id="choice_title2" type="text"
                                 value="{{$exercisechoice->choice_title2}}">
                        </div>
                        <div class="col-md-3">
                          <label class="check">
                            <input type="checkbox" name="answer" id="answer2" value="2" onclick="answerCheck()">
                            <div class="box"></div>
                          </label>
                        </div>
                      </div>

                      <div class="padding40 row">
                        <div class="col-md-8 offset-md-1">
                          <input class="createInput  form-control" name="choice_title3" id="choice_title3" type="text"
                                 value="{{$exercisechoice->choice_title3}}">
                        </div>
                        <div class="col-md-3">
                          <label class="check">
                            <input type="checkbox" name="answer" id="answer3" value="3" onclick="answerCheck()">
                            <div class="box"></div>
                          </label>
                        </div>

                      </div>
                    </div>

                    <div class="col-md-5" style="margin-top: 0px">
                      <center>
                        <input type="hidden" name="exercise_number" value="1">
                        <input type="hidden" name="exercise_id" value="{{$exercisechoice->exercise_id}}">
                        <div class="questionBox" >
                          <div class="example" id="example">
                            <h1>ตัวอย่าง</h1>
                            <h2>ตัวอย่าง</h2>
                          </div>
                          <div class="showQ" id="showQ">
                            <h1 class="questionShow" id="questionShow"></h1>
                          </div>

                        </div>
                        <input  name="exercise_img" type="hidden" class="question" id="question">
                      </center>
                    </div>


                  </td>
                </tr>

                </tbody>
              </table>


            </div>

          </div>
        </div>
      </div>


      <div class="buttonAction row">
        <div class="col-md-4 offset-2">
          <button type="submit" class="btn btn-createCate"><i class="fas fa-plus-circle"></i> แก้ไข</button>
        </div>
        <div class="col-md-3">
          <a class="btn btn-teachBack" href="/admin/exercises/{{$exercisechoice->exercise_id}}/{{$exercisechoice->type}}"><i class="fas fa-times-circle"></i> ยกเลิก</a>
          {{--<a href="/categories"><button class="btn-teachBack"><i class="fas fa-times-circle"></i> ยกเลิก</button></a>--}}
        </div>
      </div>

    </div>
  </form>
  @endforeach

  <script>
    function answerCheck() {
      var choice_title1 = document.getElementById("choice_title1");
      var choice1 = choice_title1.value;
      var choice_title2 = document.getElementById("choice_title2");
      var choice2 = choice_title2.value;
      var choice_title3 = document.getElementById("choice_title3");
      var choice3 = choice_title3.value;
      var questionShow = document.getElementById("questionShow");
      var question = document.getElementById("question");
      var example = document.getElementById("example");
      var answer = document.getElementById("answer");
      var answer1 = document.getElementById("answer1");
      var ans1 = answer1.value;
      var answer2 = document.getElementById("answer2");
      var ans2 = answer2.value;
      var answer3 = document.getElementById("answer3");
      var ans3 = answer3.value;
      console.log(ans1);
      console.log(ans2);
      console.log(ans3);
      console.log(choice1);
      console.log(choice2);
      console.log(choice3);

      if (answer1.checked == true){
        question.value = choice1;
        questionShow.innerHTML = choice1;
        example.style.display = "none";
      }
      if (answer2.checked == true){
        question.value = choice2;
        questionShow.innerHTML = choice2;
        example.style.display = "none";
      }
      if (answer3.checked == true){
        question.value = choice3;
        questionShow.innerHTML = choice3;
        example.style.display = "none";
      }
    }

  </script>



  {{--  <div class="form-group">--}}
  {{--    <label for="due" class="padding40 categoryTitle control-label">| รูปภาพหน้าปกหมวดหมู่คำศัพท์</label>--}}
  {{--    <div class="padding40">--}}
  {{--      <input class="createInput form-control" name="category_image" type="file">--}}
  {{--    </div>--}}
  {{--  </div>--}}
  {{--  <input class="createInput form-control" name="category_image_old" type="hidden" value="{{$category->category_image}}">--}}
  {{--  <img src="/uploads/catergorie_covers/{{$category->category_image}}" class="img-responsive">--}}

  {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
  {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>--}}
  {{--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>--}}



@endsection
