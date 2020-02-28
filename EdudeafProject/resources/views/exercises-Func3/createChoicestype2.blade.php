@extends('layouts.appteacherExercise')
@section('content')

  <style>
    select.form-control:not([size]):not([multiple]) {
      height: 70px;
    }
  </style>
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-9">
            <span><div class="circke-blue"></div></span> <h1>เพิ่มแบบฝึกหัด แบบที่2</h1>
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
            <label  for="text" class="padding40 categoryTitle control-label">| ชื่อแบบฝึกหัด : <span>{{$exercise->exercise_name}}</span></label>
            <label  for="text" class="padding40 categoryTitle control-label">&emsp;&emsp;&emsp; | ประเภท : <span>{{$exercise->exercise_name}}</span></label>
          </div>
        </div>

      @endforeach
      <form method="POST" action="/admin/exercises/store" enctype="multipart/form-data">
        {{csrf_field()}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript">
          $(function () {
            $('.add').click(function () {
              var n = ($('.resultbody tr').length - 0) + 1;
              var tr = '<tr><td class="no"><input type="hidden" name="exercise_number[]" value='+n+'></td>' +
                '<td><input type="hidden"value="{{$exercise->id}}"><input type="text" class="name form-control" name="exercise_img[]" value="{{ old('exercise_img') }}"></td>'+
                '<td><input type="text" class="fname form-control" name="choice_title[]" value="{{ old('choice_title1') }}"></td>'+
                '<td><input type="text" class="rollno form-control" name="choice_title2[]" value="{{ old('choice_title2') }}"></td>'+
                '<td><input type="text" class="rollno form-control" name="choice_title3[]" value="{{ old('choice_title3') }}"></td>'+
                '<td><input type="button" class="btn btn-danger delete" value="x"></td></tr>';
              $('.resultbody').append(tr);
            });

            $('.resultbody').delegate('.delete', 'click', function () {
              var last=$('tbody tr').length;
                if(last==1){
                  alert("no")
                }
                else {
                  $(this).parent().parent().remove();
                }
            });

          });
        </script>
        <script>
          var addNumeration = function(cl){
            var table = document.querySelector('table.' + cl)
            var trs = table.querySelectorAll('tr')
            var counter = 1

            Array.prototype.forEach.call(trs, function(x,i){
              var firstChild = x.children[0]
              if (firstChild.tagName === 'TD') {
                var cell = document.createElement('td')
                cell.textContent = counter ++
                x.insertBefore(cell,firstChild)
              } else {
                firstChild.setAttribute('colspan',2)
              }
            })
          }

          addNumeration("number")
        </script>

        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
{{--                @if(count($errors) >0 )--}}
{{--                  <ul>--}}
{{--                    @foreach($errors->all() as $error)--}}
{{--                      <li>{{$error}}</li>--}}
{{--                    @endforeach--}}
{{--                  </ul>--}}
{{--                @endif--}}
                <div class="panel-body">
                  <form class="form-horizontal" method="POST" action="/admin/exercises/choices">
                    {{csrf_field()}}
                    <table class="table">
                      <thead>
                         <tr>
                           <th>ข้อที่</th>
                           <th>ima</th>
                           <th>ch1</th>
                           <th>ch2</th>
                           <th>ch3</th>
                         </tr>
                       </thead>
                      <tbody class="resultbody">
                        <tr>
                          <td class="no"><input type="hidden" name="exercise_number[]" value="1"></td>
                          <td>
                            <input type="hidden" name="exercise_id[]" value="{{$exercise->id}}">
                            <input type="text" class="name form-control" name="exercise_img[]">
                          </td>
                          <td>
                            <input type="checkbox" name="answer[]" value="1">
                            <input type="text" class="fname form-control" name="choice_title1[]">
                          </td>
                          <td>
                            <input type="checkbox" name="answer[]" value="2">
                            <input type="text" class="rollno form-control" name="choice_title2[]">
                          </td>
                          <td>
                            <input type="checkbox" name="answer[]" value="3">
                            <input type="text" class="rollno form-control" name="choice_title3[]">
                          </td>
                          <td>
                            <input type="button" class="btn btn-danger delete" value="x">
                          </td>
                        </tr>

                      </tbody>
                    </table>
                    <center><input type="button" class="btn btn-lg btn-primary add" value="Add New Item">
                      <input type="submit" class="btn btn-lg btn-default" value="บันทึกข้อสอบ"></center>
                  </form>
                </div>
              </div>
            </div>

          </div><!-- First Row End -->
        </div> <!-- Container End -->

        {{--        <section>--}}
{{--          <div class="panel panel-footer">--}}
{{--            <table class="table table-bordered">--}}
{{--             <thead>--}}
{{--               <tr>--}}
{{--                 <th>ima</th>--}}
{{--                 <th>ch1</th>--}}
{{--                 <th>ch2</th>--}}
{{--                 <th>ch3</th>--}}
{{--                 <th><a href="#" class="addRow btn btn-primary"><i class="glyphicon glyphicon-remove"></i></a></th>--}}
{{--               </tr>--}}
{{--             </thead>--}}
{{--              <tbody>--}}
{{--              <tr>--}}
{{--                <td><input type="text" name="item_name[]" class="form-control" required=""></td>--}}
{{--                <td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>--}}
{{--                <td><input type="text" name="band[]" class="form-control"></td>--}}
{{--                <td><input type="text" name="budget[]" class="form-control budget"></td>--}}
{{--                <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>--}}
{{--              </tr>--}}
{{--              </tbody>--}}
{{--            </table>--}}
{{--          </div>--}}
{{--        </section>--}}
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
{{--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>--}}
{{--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--        <script>--}}
{{--          $('.addRow').on('click',function(){--}}
{{--            addRow();--}}
{{--          });--}}
{{--          function addRow()--}}
{{--          {--}}
{{--            var tr='<tr>'+--}}
{{--              '<td><input type="text" name="item_name[]" class="form-control" required=""></td>'+--}}
{{--              '<td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>'+--}}
{{--              '<td><input type="text" name="band[]" class="form-control"></td>'+--}}
{{--              '<td><input type="text" name="budget[]" class="form-control budget"></td>'+--}}
{{--              '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>\n'+--}}

{{--              '</tr>';--}}
{{--            $('tbody').append(tr);--}}
{{--          };--}}
{{--          $('.remove').live('click',function(){--}}
{{--            var last=$('tbody tr').length;--}}
{{--            if(last==1){--}}
{{--              alert("no")--}}
{{--            }--}}
{{--            else {--}}
{{--              $(this).parent().parent().remove();--}}
{{--            }--}}
{{--          });--}}
{{--        </script>--}}
{{--        <div class="row">--}}
{{--          <div class="col col-md-6">--}}
{{--            <div class="form-group">--}}
{{--              <label  for="text" class="padding40 categoryTitle control-label">| ชื่อแบบฝึกหัด</label>--}}
{{--              <div class="padding40">--}}
{{--                <input class="createInput form-control" name="exercise_name" type="text" placeholder="กรุณากรอกชื่อแบบฝึกหัด">--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col col-md-6">--}}
{{--            <div class="form-group">--}}
{{--              <label  for="text" class="padding40 categoryTitle control-label">| ประเภทแบบฝึกหัด</label>--}}
{{--              <div class="padding40">--}}
{{--                <select  class="createInput" name="type">--}}
{{--                  <option value="1">เลือกคำศัพท์ให้ตรงกับภาพ </option>--}}
{{--                  <option value="2">เลือกคำศัพท์ให้ตรงกับสะกดนิ้วมือ</option>--}}
{{--                </select>--}}
{{--              </div>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--        </div>--}}


{{--        <div class="buttonAction row">--}}
{{--            <div class="col-md-5 offset-2">--}}
{{--              <button type="submit" class="btn btn-createCate"><i class="fas fa-plus-circle"></i> เพิ่มหมวดหมู่คำศัพท์</button>--}}
{{--            </div>--}}
{{--            <div class="col-md-5">--}}
{{--              <a class="btn btn-teachBack" href="/admin"><i class="fas fa-times-circle"></i> ยกเลิก</a>--}}
{{--            </div>--}}
{{--          </div>--}}

        </form>

      </div>
    </div>



@endsection
