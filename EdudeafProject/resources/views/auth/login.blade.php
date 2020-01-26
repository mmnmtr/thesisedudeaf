@extends('layouts.layout_login')
@section('content')
<<<<<<< HEAD
  <div class="container">
    <div class=" row justify-content-center align-items-center" style="height:100vh">
      <div class="col-8">
        <div class="loginStd">
          <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                <div class="text-center">
                  <div class="col-md-4 offset-md-4 userShowIcon">
                    <img src="/../img/icon_student.png" alt="">
                  </div>
                  <h2>เข้าสู่ระบบนักเรียน</h2>
                  <h3>โรงเรียนเศรษฐเสถียร ในพระราชูปถัมภ์</h3>
                  <h3>ชั้นประถมศึกษาปีที่ 1</h3>
                  <br>
                  <h1>กรอกเลขที่นักเรียน</h1>
                  <div class="col-md-10 offset-md-1">
                    <input style="text-align:center" type="number" class="input_studentLogin" name="id"
                           value="{{ old('id') }}" required autofocus>
=======
<div class="container">
    <div class="row justify-content-center align-items-center" style="height:100vh">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
>>>>>>> parent of 05fc25f... [Css] new

                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <div class="text-center">
                                <div class="col-md-4 offset-md-4 userShowIcon">
                                    <img src="/../img/logo_studentLogin.png" alt="">
                                </div>
                                <h2 >เข้าสู่ระบบนักเรียน</h2>
                                <h3>โรงเรียนเศรษฐเสถียร ในพระราชูปถัมภ์</h3>
                                <h3>ชั้นประถมศึกษาปีที่ 1</h3>
                                <br>
                                <h1>กรอกเลขที่นักเรียน</h1>


                            <div class="col-md-10 offset-md-1">
                                <input style="text-align:center" type="text" class="input_studentLogin" name="id" value="{{ old('id') }}" required autofocus>

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
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
                            <div class="col text-center">
                                <button type="submit" class="btn btn-loginStd text-center"><i class="fas fa-check"></i> ตกลง</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
