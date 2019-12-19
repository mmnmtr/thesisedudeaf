@extends('loginpages.layout_teacherLogin')
@section('content')
    <div class="container">
        <div class="col-12 teacher-logo">
            <img src="/../img/logo_edudef_teacher.png" alt="">
        </div>

        <div  class="col-12 col-md-11 offset-1 teacher-login">
            <div class="row">
                <div class="login-img col-12 col-md-5">
                    <img src="/../img/icon_login.png" alt="">
                </div>
                <div class="login-from col-12 col-md-7">
                    <h1>เข้าสู่ระบบคุณครู</h1>
                    <div class="col-12 offset-1 col-md-10">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="login form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <i class="fas fa-envelope"></i>
                                <label>อีเมล์</label>

                                <div class="col-md-12">
                                    <div class="row">
                                        <input id="email" placeholder="กรุณากรอกอีเมล์" type="email" class="login_input form-control" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="login form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <i class="fas fa-lock"></i>
                                <label>รหัสผ่าน</label>


                                <div class="col-md-12">
                                    <div class="row">
                                        <input id="password" type="password" class="form-control login_input" placeholder="กรุณากรอกรหัสผ่าน" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col text-center">

                                    <button type="submit" class="btn btn-login text-center">เข้าสู่ระบบ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 footer">
        <div class="row">

            <div class="copyright text-center">
                <label>copyright © 2019 <span>eduDeaf.com</span></label>
            </div>

        </div>
    </div>
@endsection
