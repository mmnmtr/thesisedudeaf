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
      width: 90%;
      height: auto;
      margin-top: 20px;
      border-radius: 50px 50px 50px 50px;
    }
    .customFile[data-display=right]:before {
      float: unset;
    }
    .customFile:before {
      width: 100%;
      height: 65px;
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
                style="color: #3078ff"> {{$exercise->exercise_name}}</span></label>
            <label for="text" class="padding40 categoryTitle control-label">&emsp;&emsp;&emsp; | ประเภท : <span
                style="color: #3078ff"> {{$exercise->exerciseType_name}}</span></label>
          </div>
        </div>
      @endforeach

      <form method="POST" action="/admin/exercises/choices" enctype="multipart/form-data">
        {{csrf_field()}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript">
          var index = 1;
          $(function () {
            $('.add').click(function () {
              index+=1;
              // var n = ($('.resultbody tr').length - 0) + 1;
              var tr = '<tr class="card">\n' +
                '<td class="col-md-12 row">\n' +
                '<div class="col-md-12">\n' +
                '<div class="row">\n' +
                '<div class="col-md-5">\n' +
                '<h3 class="qTitle">เลือกรูปภาพที่ต้องการ</h3>\n' +
                '</div>\n' +
                '<div class="col-md-7">\n' +
                '<div class="row">\n' +
                '<div class="col-md-8">\n' +
                '<h3 class="qTitle">กรอกตัวเลือก</h3>\n' +
                '</div>\n' +
                '<div class="col-md-4">\n' +
                '<h3 class="qTitle">เลือกคำตอบที่ถูก\n' +
                '<br>\n' +
                'เพียงข้อเดียว</h3>\n' +
                '</div>\n' +
                '</div>\n' +
                '</div>\n' +
                '</div>\n' +
                '</div>'+
                '<div class="col-md-5"  style="padding-left: 130px;">\n' +
                '<input type="hidden" name="exercise_number[]" value="1">\n' +
                '<input type="hidden" name="exercise_id[]" value="{{$exercise->id}}">\n' +
                ' <div class="cover">' +
                '<img class="view" id="preview_' + index + '" src="/../img/image_preview-01.png" alt="your image" />\n' +
                '</div>'+
                '<div class="customFile rightBtn" data-display="right" data-label="เลือกไฟล์">\n' +
                '<span class="selectedFile">อัพโหลดรูปภาพ .jpeg , .png </span>\n' +
                '<input type="file" class="images" data-id="preview_' + index + '" name="exercise_img[]"\n' +
                'onchange="handleChange(this)"/>\n' +
                '</div>' +
                // '<input type="file" name="exercise_img[]" onchange="handleChange(this)" data-id="preview_' + index + '">' +
                '</div>\n' +
                '<div class="col-md-7">\n' +
                '<div class="padding40 row">\n' +
                '<div class="col-md-8">\n' +
                '<input type="text" class="createInput form-control" name="choice_title1[]" placeholder="กรอกตัวเลือกที่ 1" required autofocus oninvalid="this.setCustomValidity(\'กรอกตัวเลือก\')" oninput="setCustomValidity(\'\')">\n' +
                '</div>\n' +
                '<div class="col-md-4">\n' +
                '<label class="check">\n' +
                '<input type="checkbox" name="answer[]" value="1">\n' +
                '<div class="box"></div>\n' +
                '</label>\n' +
                '</div>\n' +
                '</div>\n' +
                '<div class="row">\n' +
                '<div class="col-md-8">\n' +
                '<input type="text" class="createInput form-control" name="choice_title2[]" placeholder="กรอกตัวเลือกที่ 2" required autofocus oninvalid="this.setCustomValidity(\'กรอกตัวเลือก\')" oninput="setCustomValidity(\'\')">\n' +
                '</div>\n' +
                '<div class="col-md-4">\n' +
                '<label class="check">\n' +
                '<input type="checkbox" name="answer[]" value="2">\n' +
                '<div class="box"></div>\n' +
                '</label>\n' +
                '</div>\n' +
                '</div>\n' +
                '<div class="padding40 row">\n' +
                '<div class="col-md-8">\n' +
                '<input type="text" class="createInput form-control" name="choice_title3[]" placeholder="กรอกตัวเลือกที่ 3" required autofocus oninvalid="this.setCustomValidity(\'กรอกตัวเลือก\')" oninput="setCustomValidity(\'\')">\n' +
                '</div>\n' +
                '<div class="col-md-4">\n' +
                '<label class="check">\n' +
                '<input type="checkbox" name="answer[]" value="3">\n' +
                '<div class="box"></div>\n' +
                '</label>\n' +
                '</div>\n' +
                '</div>\n' +
                '</div>\n' +
                '<div class="col-md-5 offset-5" style="position: relative;margin-top: -60px;">\n' +
                '<div class="row">\n' +
                '<div class="col-md-11">\n' +
                '                          <input type="button" class="deleteDep btn btn-delete" value="ยกเลิก">\n' +
                '                        </div>'+
                '</div>\n' +
                '</div>\n' +
                '</td>\n' +
                '</tr>';
              $('.resultbody').append(tr);
              console.log(index);
            });

            $('body').on('click', 'input.deleteDep', function () {

              var last = $('tbody tr').length;
              if (last == 1) {
                alert("no")
              } else {
                $(this).parents('tr').remove();
              }
            });

          });
        </script>
        <script>
          function myFunction() {
            document.getElementById("resultbody").deleteRow(0);
          }
        </script>
        <script>
          var addNumeration = function (cl) {
            var table = document.querySelector('table.' + cl)
            var trs = table.querySelectorAll('tr')
            var counter = 1

            Array.prototype.forEach.call(trs, function (x, i) {
              var firstChild = x.children[0]
              if (firstChild.tagName === 'TD') {
                var cell = document.createElement('td')
                cell.textContent = counter++
                x.insertBefore(cell, firstChild)
              } else {
                firstChild.setAttribute('colspan', 2)
              }
            })
          }
          addNumeration("number")
        </script>

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
                              <h3 class="qTitle">กรอกตัวเลือก</h3>
                            </div>
                            <div class="col-md-4">
                              <h3 class="qTitle">เลือกคำตอบที่ถูก
                                <br>
                                เพียงข้อเดียว</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-5" style="padding-left: 100px;">
                      <input type="hidden" name="exercise_number[]" value="1">
                      <input type="hidden" name="exercise_id[]" value="{{$exercise->id}}">
                      <div class="cover">
                        <img class="view" id="preview_1" src="/../img/image_preview-01.png" />
                      </div>

                      <div class="customFile rightBtn" data-display="right" data-label="เลือกไฟล์">
                        <span class="selectedFile">อัพโหลดรูปภาพ .jpeg , .png </span>
                        <input type="file" class="images" data-id="preview_1" name="exercise_img[]"
                               onchange="handleChange(this)"/>
                      </div>
                    </div>

                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-8">
                          <input type="text" class="createInput form-control" name="choice_title1[]" placeholder="กรอกตัวเลือกที่ 1" required autofocus oninvalid="this.setCustomValidity('กรอกตัวเลือก')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-4">
                          <label class="check">
                            <input type="checkbox" name="answer[]" value="1">
                            <div class="box"></div>
                          </label>
                        </div>
                      </div>
                      <div class="padding40 row">
                        <div class="col-md-8">
                          <input type="text" class="createInput form-control" name="choice_title2[]" placeholder="กรอกตัวเลือกที่ 2" required autofocus oninvalid="this.setCustomValidity('กรอกตัวเลือก')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-4">
                          <label class="check">
                            <input type="checkbox" name="answer[]" value="2">
                            <div class="box"></div>
                          </label>
                        </div>

                      </div>
                      <div class="padding40 row">
                        <div class="col-md-8">
                          <input type="text" class="createInput form-control" name="choice_title3[]" placeholder="กรอกตัวเลือกที่ 3" required autofocus oninvalid="this.setCustomValidity('กรอกตัวเลือก')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-4">
                          <label class="check">
                            <input type="checkbox" name="answer[]" value="3">
                            <div class="box"></div>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5 offset-5" style="position: relative;margin-top: -60px;">
                      <div class="row">
                        <div class="col-md-11">
                          <input type="button" class="deleteDep btn btn-delete" value=" ยกเลิก">
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


  <script
    src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"
  ></script>
  <script>
    // find elements

    var index = 1;

    function handleChange(input) {
      var id = "#" + $(input).data("id");
      console.log(id);
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $(id).attr("src", e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>





@endsection
