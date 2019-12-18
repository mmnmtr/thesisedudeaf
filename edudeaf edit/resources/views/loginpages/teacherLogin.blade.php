@extends('loginpages.layout_teacherLogin')
@section('content')
    <div class="container">
        <div class="col-12 teacher-logo">
            <img src="/../img/logo_edudeaf.png" alt="">
        </div>

        <div  class="col-12 col-md-11 offset-1 teacher-login">
            <div class="row">
                <div class="login-img col-12 col-md-5">
                    <img src="/../img/icon_login.png" alt="">
                </div>
                <div class="login-from col-12 col-md-7">
                    <h1>เข้าสู่ระบบคุณครู</h1>
                    <div class="col-12 offset-1 col-md-10">
                        <div class="login">
                            <i class="fas fa-envelope"></i>
                            <label>อีเมล์</label>

                            <form control="" class="form-group">
                                <input type="text" name="username" id="username" class="login_input" placeholder="กรุณากรอกอีเมล์">
                            </form>
                        </div>
                        <div class="login">
                            <i class="fas fa-lock"></i>
                            <label>รหัสผ่าน</label>

                            <form control="" class="form-group">
                                <input type="password" value="" name="password" id="password" class="login_input" placeholder="กรุณากรอกรหัสผ่าน">
                            </form>
                        </div>
                        <div class="col text-center">
                            <button type="submit" class="btn btn-login text-center">เข้าสู่ระบบ</button>
                        </div>
                    </div>
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
@endsection