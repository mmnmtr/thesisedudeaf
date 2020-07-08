@extends('layouts.appteacherExercise')
@section('content')

  <style>
    select.form-control:not([size]):not([multiple]) {
      height: 70px;
    }
    .buttonAction {
      margin-top: 50px;
    }
  </style>
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-9">
            <span><div class="circke-blue"></div></span> <h1>  เพิ่มแบบฝึกหัด</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="categories_list">
    <div class="col-md-12">
      <form method="POST" action="/admin/exercises/store" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
          <div class="col col-md-12">
            <div class="form-group">
              <label  for="text" class="padding40 categoryTitle control-label">| ชื่อแบบฝึกหัด</label>
              <div class="padding40">
                <input class="createInput form-control" name="exercise_name" type="text" placeholder="กรุณากรอกชื่อแบบฝึกหัด" required autofocus oninvalid="this.setCustomValidity('กรุณากรอกชื่อแบบฝึกหัด')" oninput="setCustomValidity('')">
              </div>
            </div>
          </div>
          <div class="col col-md-12">
            <div class="form-group">
              <label  for="text" class="padding40 categoryTitle control-label">| ประเภทแบบฝึกหัด</label>
              <div class="padding40">
                <select  class="createInput" name="type" required autofocus oninvalid="this.setCustomValidity('กรุณาเลือกประเภทแบบฝึกหัด')" oninput="setCustomValidity('')">
                  <option value="" disabled selected hidden>กรุณาเลือกประเภทแบบฝึกหัด...</option>
                  <option value="1">เลือกคำศัพท์ให้ตรงกับภาพ </option>
                  <option value="2">เลือกคำศัพท์ให้ตรงกับสะกดนิ้วมือ</option>
                </select>
              </div>
            </div>

          </div>
        </div>


        <div class="buttonAction row">
            <div class="col-md-4 offset-2">
              <button type="submit" class="btn btn-createCate"><i class="fas fa-plus-circle"></i> เพิ่มแบบฝึกหัด</button>
            </div>
            <div class="col-md-3">
              <a class="btn btn-teachBack" href="/admin/exercises"><i class="fas fa-times-circle"></i> ยกเลิก</a>
            </div>
          </div>

        </form>

      </div>
    </div>
  <style>
    select:required:invalid {
      color: gray;
    }
    option[value=""][disabled] {
      display: none;
    }
    option {
      color: black;
    }
  </style>



@endsection
