@extends('layouts.app_loginAdmin')

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
                <div class="col-md-4 offset-4 userShowIcon">
                    <img src="/../img/icon_teacher.png" alt="">
                </div>
                <div class="col-md-6 offset-3 login_inputTitle">
                    <h1>เข้าสู่ระบบคุณครู</h1>
                </div>
                <div class="col-12 offset-1 col-md-10">

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="login">
                                <i class="fas fa-envelope"></i>
                                <label>อีเมล์</label>
                                <div control="" class="form-group">
                                    <input id="email" type="email" class="login_input" name="email" value="{{ old('email') }}" placeholder="กรุณากรอกอีเมล์" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="login">
                                <i class="fas fa-lock"></i>
                                <label>รหัสผ่าน</label>
                                <div control="" class="form-group">
                                    <input id="password" type="password" class="login_input" name="password" placeholder="กรุณากรอกรหัสผ่าน" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-login text-center">เข้าสู่ระบบ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 footer-line">
        <div class="row">
            <div class="coppy-line">
                <div class="line">
                    <img src="img/line_big-01.png" alt="">
                    <img class="small-line" src="img/line_small-01.png" alt="">
                </div>
            </div>
            <div class="copyright text-center">
                <label>copyright © 2019 <span>eduDeaf.com</span></label>
            </div>
        </div>
    </div>
</div>





@endsection
