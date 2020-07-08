@extends('layouts.layout_login')
@section('content')
  <div class="container">
    <div class=" row justify-content-center align-items-center" style="height:100vh">
      <div class="col-8">
        <div class="loginStd">
          <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('studentNumber') ? ' has-error' : '' }}">
                <div class="text-center">
                  <div class="col-md-4 offset-md-4 userShowIcon">
                    <img src="/../img/icon_student.png" alt="">
                  </div>
                  <br>
                  <h2>เข้าสู่ระบบนักเรียน</h2>
                  <h3>โรงเรียนเศรษฐเสถียร ในพระราชูปถัมภ์</h3>
                  <br>
                  <h1>กรอกเลขที่นักเรียน</h1>
                  <div class="col-md-10 offset-md-1">
                    <input style="text-align:center" id="studentNumber" type="number" class="input_studentLogin" name="studentNumber"
                           value="{{ old('studentNumber') }}" required autofocus oninvalid="this.setCustomValidity('กรอกเลขที่เพื่อเข้าใช้งาน')" oninput="setCustomValidity('')">

                    @if ($errors->has('studentNumber'))
                      <span class="help-block">
                                        <strong>{{ $errors->first('studentNumber') }}</strong>
                                    </span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-md-6">
                  <input id="password" type="hidden" class="form-control" name="password" value="0">

                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6  offset-md-3">
                <div class="btnAction">
                  <button type="submit" class="btn btn-loginStd text-center"><i class="fas fa-check"></i> ตกลง</button>
                </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="offset-10">
          <img class="book" src="/../img/book.png" alt="" style="">
        </div>
      </div>
    </div>
  </div>
@endsection
