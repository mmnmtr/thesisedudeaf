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

    .cover {
      width: 90%;
      height: 250px;
      padding: 15px;
      border-radius: 10px;
      box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.16);
      background-color: #ffffff;
    }
    img.view {
      width: 100%;
      height: 100%;
      object-fit: scale-down;
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
    .buttonAction {
      margin-top: -50px;
      padding-bottom: 100px;
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
  <form method="POST" action="/admin/exerciseschoiceT1/{{$exercisechoice->id}}" enctype="multipart/form-data">
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
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-5">
                          <h3 class="qTitle">เลือกรูปภาพที่ต้องการ</h3>
                        </div>
                        <div class="col-md-7">
                          <div class="row">
                            <div class="col-md-8">
                              <h3 class="qTitle">ตัวเลือก</h3>
                            </div>
                            <div class="col-md-4">
                              <h3 class="qTitle">คำตอบที่ถูก
                              </h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-5" style="padding-left: 100px;">
                      <input type="hidden" name="exercise_number" value="1">
                      <input type="hidden" name="exercise_id" value="{{$exercisechoice->exercise_id}}">
                      <div class="cover">
                        <img class="view" id="real_image" src="/uploads/exercise_img/{{$exercisechoice->exercise_img}}">
                      </div>
                      <input class="createInput form-control" name="exercise_img_old" type="hidden"
                             value="{{$exercisechoice->exercise_img}}">
                      <div class="customFile rightBtn" data-display="right" data-label="&#xf093; &nbsp; เลือกไฟล์">
                        <span class="selectedFile">อัพโหลดรูปภาพ .jpeg , .png </span>
                        <input type="file" class="images" data-id="preview_1" name="exercise_img"
                               onchange="readImg(this)"/>
                      </div>
                    </div>


                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-8">
                          <input class="createInput  form-control" name="choice_title1" type="text"
                                 value="{{$exercisechoice->choice_title1}}">
                        </div>
                        <div class="col-md-4">
                          <label class="check">
                            <input type="checkbox" id="answer1_" name="answer" value="1">
                            <div class="box"></div>
                          </label>
                        </div>
                      </div>
                      <div class="padding40 row">
                        <div class="col-md-8">
                          <input class="createInput  form-control" name="choice_title2" type="text"
                                 value="{{$exercisechoice->choice_title2}}">
                        </div>
                        <div class="col-md-4">
                          <label class="check">
                            <input type="checkbox" id="answer2_" name="answer" value="2">
                            <div class="box"></div>
                          </label>
                        </div>

                      </div>
                      <div class="padding40 row">
                        <div class="col-md-8">
                          <input class="createInput  form-control" name="choice_title3" type="text"
                                 value="{{$exercisechoice->choice_title3}}">
                        </div>
                        <div class="col-md-4">
                          <label class="check">
                            <input type="checkbox" id="answer3_" name="answer" value="3">
                            <div class="box"></div>
                          </label>
                        </div>
                      </div>
                    </div>
                    {{--                  <div class="col-md-5 offset-5" style="position: relative;margin-top: -10px;">--}}
                    {{--                    <div class="row">--}}

                    {{--                      <div class="col-md-11">--}}
                    {{--                        <div class="row">--}}
                    {{--                          <div class="col-md-7">--}}
                    {{--                            <a href="/admin/exerciseschoice/{{$exercisechoice->id}}/edit">--}}
                    {{--                              <button class="btn btn-delete mr-1"> <i class="fas fa-edit"></i> แก้ไข</button></a>--}}
                    {{--                          </div>--}}
                    {{--                          <div class="col-md-5">--}}
                    {{--                            <form action="/admin/exerciseschoice/{{$exercisechoice->id}}" method="post" style="width: 100%">--}}
                    {{--                              {{csrf_field()}}--}}
                    {{--                              <input type="hidden" name="_method" value="DELETE">--}}
                    {{--                              <button  class="deleteDep btn btn-delete"><i class="fas fa-times-circle"></i> ลบข้อนี้</button>--}}
                    {{--                            </form>--}}
                    {{--                          </div>--}}
                    {{--                        </div>--}}
                    {{--                      </div>--}}
                    {{--                    </div>--}}
                    {{--                  </div>--}}
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
    function check() {
      var op1 = $("#op1").val();
      var op2 = $("#op2").val();
      var op3 = $("#op3").val();

      if ($('#op1').is(":checked")) {
        $("#ans").val(op1);
      } else if ($('#op2').is(":checked")) {
        $("#ans").val(op2);
      } else if ($('#op3').is(":checked")) {
        $("#ans").val(op3);
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
