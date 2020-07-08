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

    .padding40 {
      padding-top: 30px;
    }

  </style>

  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-9">
            <span><div class="circke-blue"></div></span>
            <h1>เพิ่มแบบฝึกหัด</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="categories_list">
    <div class="col-md-12">
      @foreach($exercise as $exercise)
        <div class="col col-md-12">
          <div class="form-group">
            <label for="text" class="padding40 categoryTitle control-label">| ชื่อแบบฝึกหัด :<span
                style="color: #3078ff">{{$exercise->exercise_name}}</span></label>
            <label for="text" class="padding40 categoryTitle control-label">&emsp;&emsp;&emsp; | ประเภท : <span
                style="color: #3078ff">{{$exercise->exerciseType_name}}</span></label>
          </div>
        </div>
      @endforeach

      <form method="POST" action="/admin/exercises/choicesT" enctype="multipart/form-data">
        {{csrf_field()}}

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
          $(document).on('click', 'input[type=checkbox]', function () {
            var value = $(this).parent().parent().parent().find('.choice_title').val();
            console.log($(this).parent().parent().parent().parent().parent());
            $(this).parent().parent().parent().parent().parent().parent().find('.questionShow').text(value);
            $(this).parent().parent().parent().parent().parent().find('.example').css("display","none");
            $(this).parent().parent().parent().parent().parent().find('.question').val(value);
          });
        </script>

        <script>
          $(document).ready(function () {
            $("#add").click(function () {
              var tr = $('.resultbody').html();
              $("#body").append(tr);
              $(".questionShow").val("");
            });
          });
          $(document).on('click', 'input.deleteDep', function () {
            var last = $('tbody tr').length;
            if (last == 1) {
              alert("no")
            } else {
              $(this).parents('tr').remove();
            }
          });
        </script>


        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <table class="table">
                <tbody class="resultbody" id="body">
                <tr class="card">
                  <td class="col-md-12 row">
                    <div class="col-md-12" style="height: 138px">
                      <div class="row">

                        <div class="col-md-7">
                          <div class="row">
                            <div class="col-md-7 offset-md-1">
                              <h3 class="qTitle">กรอกตัวเลือก</h3>
                            </div>
                            <div class="col-md-4">
                              <h3 class="qTitle">เลือกคำตอบที่ถูก
                                <br>
                                เพียงข้อเดียว</h3>
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

                        <div class="col-md-7 offset-md-1">
                          <input type="text" class="createInput  form-control choice_title" name="choice_title1[]" required autofocus oninvalid="this.setCustomValidity('กรอกตัวเลือก')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-4">
                          <label class="check">
                            <input type="checkbox" name="answer[]" value="1">
                            <div class="box"></div>
                          </label>
                        </div>
                      </div>

                      <div class="padding40 row">

                        <div class="col-md-7 offset-md-1">
                          <input type="text" class="createInput form-control choice_title" name="choice_title2[]" required autofocus oninvalid="this.setCustomValidity('กรอกตัวเลือก')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-4">
                          <label class="check">
                            <input type="checkbox" name="answer[]" value="2">
                            <div class="box"></div>
                          </label>
                        </div>
                      </div>

                      <div class="padding40 row">
                        <div class="col-md-7 offset-md-1">
                          <input type="text" class="createInput form-control choice_title" name="choice_title3[]" required autofocus oninvalid="this.setCustomValidity('กรอกตัวเลือก')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-4">
                          <label class="check">
                            <input type="checkbox" name="answer[]" value="3">
                            <div class="box"></div>
                          </label>
                        </div>

                      </div>
                    </div>

                    <div class="col-md-5" style="margin-top: 0px">
                      <center>
                      <input type="hidden" name="exercise_number[]" value="1">
                      <input type="hidden" name="exercise_id[]" value="{{$exercise->id}}">
                      <div class="questionBox" >
                        <div class="example">
                          <h1>ตัวอย่าง</h1>
                          <h2>ตัวอย่าง</h2>
                        </div>
                        <div class="showQ">
                          <h1 class="questionShow"></h1>
                        </div>

                      </div>
                      <input  name="exercise_img[]" type="hidden" class="question">
                      </center>
                    </div>

                    <div class="col-md-5 offset-7" style="position: relative;margin-top: 30px;">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="text-center">
                          <input type="button" class="deleteDep btn btn-delete" value="ยกเลิก">
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                </tbody>
              </table>
              <div class="col-md-12" style="padding-bottom: 50px;">
                <div class="row">
                  <div class="col-md-4 offset-md-2">
                    <button type="button" class="btn btn-lg add btn-createCate"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;
                      เพิ่มข้อต่อไป
                    </button>
                  </div>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-createCateGreen"><i class="fas fa-save"></i>&nbsp;&nbsp; บันทึก
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script !src="">
    $(function() {
      $('.showQ h1').css('font-size', '1em');

      while( $('.showQ h1').height() > $('.showQ').height() ) {
        $('.showQ h1').css('font-size', (parseInt($('.showQ h1').css('font-size')) - 1) + "px" );
      }

    });
  </script>


@endsection
