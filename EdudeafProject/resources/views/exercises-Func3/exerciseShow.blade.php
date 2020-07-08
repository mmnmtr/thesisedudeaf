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


    .padding40 {
      padding-top: 30px;
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
            <h1>แบบฝึกหัด</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="categories_list">
    <div class="col-md-12">
      @foreach($exercise as $exerciseName)
        <div class="col col-md-12">
          <div class="form-group">
            <label for="text" class="padding40 categoryTitle control-label">| ชื่อแบบฝึกหัด :<span
                style="color: #3078ff"> {{$exerciseName->exercise_name}}</span></label>
            <label for="text" class="padding40 categoryTitle control-label">&emsp;&emsp;&emsp; | ประเภท : <span
                style="color: #3078ff"> {{$exerciseName->exerciseType_name}}</span></label>
{{--            <h1 id="aa">Rows</h1>--}}
            <input type="hidden" id="aa" value="">
          </div>
        </div>
      @endforeach

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table" id="tblCustomers">
              <tbody class="resultbody">

              @foreach($exercises as $key => $exerciseChoice)


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
                      <input type="hidden" name="exercise_number[]" value="1">
                      <input type="hidden" name="exercise_id[]" value="{{$exerciseChoice->id}}">
                      <div class="cover">
                      <img class="view" src="/uploads/exercise_img/{{$exerciseChoice->exercise_img}}">
                      </div>
                      <input id="answer_{{$key}}" type="hidden" value="{{$exerciseChoice->answer}}">

                    </div>

                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="createInputShow createInput form-control">
                            <label>{{$exerciseChoice->choice_title1}}</label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label class="check">
                            <input type="checkbox" id="answer1_{{$key}}" name="answer[]" value="1">
                            <div class="box"></div>
                          </label>
                        </div>
                      </div>
                      <div class="padding40 row">
                        <div class="col-md-8">
                          <div class="createInputShow createInput form-control">
                            <label>{{$exerciseChoice->choice_title2}}</label>
                          </div>                        </div>
                        <div class="col-md-4">
                          <label class="check">
                            <input type="checkbox" id="answer2_{{$key}}" name="answer[]" value="2">
                            <div class="box"></div>
                          </label>
                        </div>

                      </div>
                      <div class="padding40 row">
                        <div class="col-md-8">
                          <div class="createInputShow createInput form-control">
                            <label>{{$exerciseChoice->choice_title3}}</label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label class="check">
                            <input type="checkbox" id="answer3_{{$key}}"  name="answer[]" value="3">
                            <div class="box"></div>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5 offset-5" style="position: relative;margin-top: -10px;">
                      <div class="row">


                          <div class="col-md-11">
                            <div class="row">
                              <div class="col-md-7">
                                @if( $exerciseChoice->type == 1 )
                                <a href="/admin/exerciseschoice/{{$exerciseChoice->id}}/editT1">
                                  <button class="btn btn-editExercise mr-1"> <i class="fas fa-edit"></i> แก้ไข</button></a>
                                @endif
                              </div>


                              <div class="col-md-5">


{{--                                <a href="/admin/exercises/{{$exercise->id}}/{{$exercise->type}}" class="btn btn-Edit mr-1"> <i--}}
{{--                                    class="fas fa-edit"></i></a>--}}
                                <button type="button" class="deleteDep btn btn-delete btn-click-del" data-del="#ex_{{$exerciseChoice->id}}"><i class="fas fa-times-circle"></i> ลบข้อนี้</button>
                                <form action="/admin/exerciseschoice/{{$exerciseChoice->id}}/deleteT1" id="ex_{{$exerciseChoice->id}}" method="post"style="width: 100%" >
                                  {{csrf_field()}}
                                  <input type="hidden" name="_method" value="DELETE">
                                </form>



{{--                                <form action="/admin/exerciseschoice/{{$exerciseChoice->id}}/deleteT1" method="post" style="width: 100%">--}}
{{--                                  {{csrf_field()}}--}}
{{--                                <input type="hidden" name="_method" value="DELETE">--}}
{{--                                <button  class="deleteDep btn btn-delete"><i class="fas fa-times-circle"></i> ลบข้อนี้</button>--}}
{{--                                </form>--}}


                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </td>
                </tr>



{{--                <tr class="card">--}}
{{--                  <td class="col-md-12 row">--}}
{{--                    <div class="col-md-6" style="padding-left: 190px;padding-top: 60px;">--}}

{{--                      <img class="view" src="/uploads/exercise_img/{{$exerciseChoice->exercise_img}}">--}}
{{--                      <input class="answer" type="text" value="{{$exerciseChoice->answer}}">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                      <div class="padding40 row">--}}

{{--                        <div class="col-md-10">--}}
{{--                          <div class="createInputShow createInput form-control">--}}
{{--                            <label>{{$exerciseChoice->choice_title1}}</label>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2">--}}
{{--                          <label class="check">--}}
{{--                            <input type="checkbox" id="answer1" >--}}
{{--                            <div class="box"></div>--}}
{{--                          </label>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="padding40 row">--}}

{{--                        <div class="col-md-10">--}}
{{--                          <div class="createInputShow createInput form-control">--}}
{{--                            <label>{{$exerciseChoice->choice_title2}}</label>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2">--}}
{{--                          <label class="check">--}}
{{--                            <input type="checkbox" id="answer2" >--}}
{{--                            <div class="box"></div>--}}
{{--                          </label>--}}
{{--                        </div>--}}
{{--                      </div>--}}

{{--                      <div class="padding40 row">--}}

{{--                        <div class="col-md-10">--}}
{{--                          <div class="createInputShow createInput form-control">--}}
{{--                            <label>{{$exerciseChoice->choice_title3}}</label>--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2">--}}
{{--                          <label class="check">--}}
{{--                            <input type="checkbox" id="answer2" >--}}
{{--                            <div class="box"></div>--}}
{{--                          </label>--}}
{{--                        </div>--}}

{{--                      </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 offset-6" style="position: relative;margin-top: -60px;">--}}
{{--                      <div class="row">--}}
{{--                        <div class="col-md-1">--}}
{{--                          <a href="/exercises/create/{id}/{type}" class="edit-modal btn btn-warning btn-sm">--}}
{{--                            <i class="fas fa-pencil-alt"></i>--}}
{{--                          </a>--}}

{{--                        </div>--}}

{{--                        <form action="/admin/exerciseschoice/{{$exerciseChoice->id}}" method="post">--}}
{{--                          {{csrf_field()}}--}}
{{--                          <a href="/admin/exerciseschoice/{{$exerciseChoice->id}}/edit" class="btn btn-Edit mr-1"> <i class="fas fa-edit"></i></a>--}}
{{--                          <input type="hidden" name="_method" value="DELETE">--}}
{{--                          <button class="btn btn-Red"><i class="fas fa-trash-alt"></i></button>--}}
{{--                        </form>--}}

{{--                        <div class="col-md-1">--}}
{{--                          <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="" data-title="" data-body="">--}}
{{--                            <i class="fas fa-trash"></i>--}}
{{--                          </a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--                  </td>--}}
{{--                </tr>--}}
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script !src="">
    var totalRowCount = 0;
    var rowCount = 0;
    var table = document.getElementById("tblCustomers");
    var rows = table.getElementsByTagName("tr")
    document.getElementById("aa").innerHTML = rows.length;

     for ( var i=0; i <= rows.length ; i++ ) {

       var answer = document.getElementById("answer_"+i);
       var ans = answer.value;
       var answer1_ = document.getElementById("answer1_"+i);
       var answer2_ = document.getElementById("answer2_"+i);
       var answer3_ = document.getElementById("answer3_"+i);
       console.log(ans);
       console.log(answer1_);
       console.log(answer2_);
       console.log(answer3_);
       if (ans == 1) {
         answer1_.checked = true;
       }
       else if (ans == 2) {
         answer2_.checked = true;
       }
       else if (ans == 3) {
         answer3_.checked = true;
       }
     }
  </script>

@endsection

@push('scripts')
  <script>
    $('.btn-click-del').on('click',function () {
      var target = $(this).attr('data-del');
      console.log(target);
      Swal.fire({
        title: 'คุณแน่ใจที่จะลบ',
        text: "แบบฝึกหัดข้อนี้ใช่ไหม?",
        imageUrl: '/../img/alert.gif',
        showCancelButton: true,
        confirmButtonColor: '#3078FF',
        cancelButtonColor: '#E86371',
        cancelButtonText: '<i class="fas fa-times-circle"></i>'+'ยกเลิก',//เพิ่มมา
        confirmButtonText: '<i class="fas fa-trash-alt"></i>'+'ต้องการลบ'
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            title:'Deleted!',
            text:'ลบแบบฝึกหัดข้อนี้',
            showCancelButton: false,
            showConfirmButton: false,
          });
          setTimeout(function () {
            $(target).submit();
          },2000)
        }
      })
    })
  </script>
@endpush

