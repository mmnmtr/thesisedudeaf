@extends('layouts.appteacher')
@section('content')
  <style>
    input[type=radio] {
      border: 3px solid #3078ff;
      border-radius: 5px;
      width: 30px;
      height: 30px;
      -webkit-appearance: none;
    }
    input[type=radio]:checked {
      background: #3078ff;
      font-family: 'FontAwesome';
      display: inline-block;
      content: "\f1db";
    }
    input[type=radio]:focus {
      outline: none;
    }
    .nameTitle {
      width: 155px;
      height: 71.5px;
      margin-left: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.16);
      border: solid 2px #3078ff;
      background-color: #ffffff;
    }
    .nameTitle h1 {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      color: #393939;
      padding-top: 11%;
    }
  </style>
  <script>
    function onlyOne(checkbox) {
      var checkboxes = document.getElementsByName('check')
      checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
      })
    }
  </script>
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-9">
            <span><div class="circke-blue"></div></span> <h1>  ข้อมูลนักเรียน</h1>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="categories_list">
    <div class="col-md-12">

      <form method="POST" action="/admin/students/store" enctype="multipart/form-data">
        {{csrf_field()}}

      <div class="col col-md-12">
        <div class="row">
          <div class="col col-md-6">
            <div class="form-group" style="margin-top: 70px;">
              <input id="titleName" name="titleName" type="checkbox" value="ด.ช." name="check" onclick="onlyOne(this)"> <label class="nameTitle"><h1>ด.ช.</h1></label>
              <input id="titleName" name="titleName" type="checkbox" value="ด.ญ." name="check" onclick="onlyOne(this)"> <label class="nameTitle"><h1>ด.ญ.</h1></label>

            </div>
          </div>
          <div class="col col-md-6">
            <div class="form-group{{ $errors->has('studentNumber') ? ' has-error' : '' }}">
              <label for="due" class="padding40 categoryTitle control-label">| เลขที่</label>
              <input id="studentNumber" type="text" class="createInput form-control" name="studentNumber" value="{{ old('studentNumber') }}" required autofocus>
            </div>
          </div>
        </div>
      </div>

      <div class="col col-md-12">
        <div class="row">
          <div class="col col-md-6">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="due" class="padding40 categoryTitle control-label">| ชื่อ</label>
              <input id="name" type="text" class="createInput form-control" name="name" value="{{ old('name') }}" required>
            </div>
          </div>
          <div class="col col-md-6">
            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
              <label for="due" class="padding40 categoryTitle control-label">| นามสกุล</label>
              <input id="lastname" type="text" class="createInput form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>
            </div>
          </div>
        </div>
      </div>

      <div class="col col-md-12">
        <div class="row">
          <div class="col col-md-6">
            <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
              <label for="due" class="padding40 categoryTitle control-label">| ชื่อเล่น</label>
              <input id="nickname" type="text" class="createInput form-control" name="nickname" value="{{ old('nickname') }}" required>
            </div>
          </div>
          <div class="col col-md-6">
            <div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
              <label for="due" class="padding40 categoryTitle control-label">|  ชั้นปีการศึกษา</label>
              <input id="grade" type="text" class="createInput form-control" name="grade" value="{{ old('grade') }}" required autofocus>
            </div>
          </div>
        </div>
      </div>
        <input type="hidden" name="password" value="0">
      <div class="buttonAction row">
        <div class="col-md-5 offset-2">
          <div class="form-group">
          </div>
          <button type="submit" value="Submit" class="btn btn-createCate"><i class="fas fa-plus-circle"></i> เพิ่มคำศัพท์</button>
        </div>
        <div class="col-md-5">
          <a class="btn btn-teachBack"  href="/admin/students"><i class="fas fa-times-circle"></i> ยกเลิก</a>
        </div>
      </div>

        </form>


    </div>
  </div>

@endsection
