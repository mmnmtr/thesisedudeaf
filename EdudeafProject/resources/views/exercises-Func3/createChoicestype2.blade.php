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
    .card {
      height: 500px;
      margin-top: 30px;
      margin-bottom: 50px;
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
            <span><div class="circke-blue"></div></span> <h1>เพิ่มแบบฝึกหัด</h1>
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
            <label  for="text" class="padding40 categoryTitle control-label">| ชื่อแบบฝึกหัด :<span style="color: #3078ff">{{$exercise->exercise_name}}</span></label>
            <label  for="text" class="padding40 categoryTitle control-label">&emsp;&emsp;&emsp; | ประเภท : <span style="color: #3078ff">{{$exercise->exerciseType_name}}</span></label>
          </div>
        </div>
      @endforeach

      <form method="POST" action="/admin/exercises/choicesT" enctype="multipart/form-data">
        {{csrf_field()}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript">
          $(function () {
            $('.add').click(function () {
              var n = ($('.resultbody tr').length - 0) + 1;
              var tr = '<tr class="card">\n' +
                '<td class="col-md-12 row">\n' +
                '<div class="col-md-6">\n' +
                '<input type="hidden" name="exercise_number[]" value="1">\n' +
                '<input type="hidden" name="exercise_id[]" value="{{$exercise->id}}">\n' +
                '<input type="hidden" class="name form-control" name="exercise_img[]">\n' +
                '</div>\n' +
                '<div class="col-md-6">\n' +
                '<div class="padding40 row">\n' +
                '<div class="col-md-2">\n' +
                '<label class="check">\n' +
                '<input type="checkbox" name="answer[]" value="1">\n' +
                '<div class="box"></div>\n' +
                '</label>\n' +
                '</div>\n' +
                '<div class="col-md-10">\n' +
                '<input type="text" class="createInput form-control" name="choice_title1[]">\n' +
                '</div>\n' +
                '</div>\n' +
                '<div class="padding40 row">\n' +
                '<div class="col-md-2">\n' +
                '<label class="check">\n' +
                '<input type="checkbox" name="answer[]" value="2">\n' +
                '<div class="box"></div>\n' +
                '</label>\n' +
                '</div>\n' +
                '<div class="col-md-10">\n' +
                '<input type="text" class="createInput form-control" name="choice_title2[]">\n' +
                '</div>\n' +
                '</div>\n' +
                '<div class="padding40 row">\n' +
                '<div class="col-md-2">\n' +
                '<label class="check">\n' +
                '<input type="checkbox" name="answer[]" value="3">\n' +
                '<div class="box"></div>\n' +
                '</label>\n' +
                '</div>\n' +
                '<div class="col-md-10">\n' +
                '<input type="text" class="createInput form-control" name="choice_title3[]">\n' +
                '</div>\n' +
                '</div>\n' +
                '</div>\n' +
                '<div class="col-md-6 offset-6">\n' +
                '<div class="row">\n' +
                '<div class="col-md-10 offset-2">\n' +
                '<input type="button" class="btn btn-delete delete" value="x ลบ">\n' +
                '</div>\n' +
                '</div>\n' +
                '</div>\n' +
                '</td>\n' +
                '</tr>';
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
            <div class="col-md-11 col-md-offset-1">
              <table class="table">
                <tbody class="resultbody">
                <tr class="card">
                  <td class="col-md-12 row">
                    <div class="col-md-6">
                      <input type="hidden" name="exercise_number[]" value="1">
                      <input type="hidden" name="exercise_id[]" value="{{$exercise->id}}">
                      <input type="hidden" class="name form-control" name="exercise_img[]">
                    </div>
                    <div class="col-md-6">
                      <div class="padding40 row">
                        <div class="col-md-2">
                          <label class="check">
                            <input type="checkbox" name="answer[]" value="1">
                            <div class="box"></div>
                          </label>
                        </div>
                        <div class="col-md-10">
                          <input type="text" class="createInput form-control" name="choice_title1[]">
                        </div>
                      </div>
                      <div class="padding40 row">
                        <div class="col-md-2">
                          <label class="check">
                            <input type="checkbox" name="answer[]" value="2">
                            <div class="box"></div>
                          </label>
                        </div>
                        <div class="col-md-10">
                          <input type="text" class="createInput form-control" name="choice_title2[]">
                        </div>
                      </div>
                      <div class="padding40 row">
                        <div class="col-md-2">
                          <label class="check">
                            <input type="checkbox" name="answer[]" value="3">
                            <div class="box"></div>
                          </label>
                        </div>
                        <div class="col-md-10">
                          <input type="text" class="createInput form-control" name="choice_title3[]">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 offset-6">
                      <div class="row">
                        <div class="col-md-10 offset-2">
                          <input type="button" class="btn btn-delete delete" value="x ลบ">
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                </tbody>
              </table>
              <center>
                <button type="button" class="btn btn-lg add btn-createCate"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp; เพิ่มข้อต่อไป</button>
                <button type="submit" class="btn btn-createCateGreen"><i class="fas fa-save"></i>&nbsp;&nbsp; บันทึก</button>
              </center>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>





@endsection
