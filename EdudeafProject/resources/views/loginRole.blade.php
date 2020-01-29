@extends('layouts.appLoginRole')
@section('content')
    <div class="container">
        <div class="bandner">
            <div class="row">
                <div class="col-12 col-md-6 bandnerLeft ">
                    z
                    <p>ยินดีต้อนรับเข้าสู่ “ EduDeaf ”
                      <br>
                      มาสนุกเพลิดเพลินกับการเรียนรู้
                      <br>
                      มาเริ่มต้นกันเลย !
                    </p>
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <a href="/login"  class="logoLoginPhoto">
                                <img src="/../img/student-02.png" alt="">
                                <h1>นักเรียน</h1>
                            </a>
                        </div>
                        <div class="col-md-6 text-center">
                            <a href="/admin/login" class="logoLoginPhoto">
                                <img src="/../img/teacher-01.png" alt="">
                                <h1>คุณครู</h1>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 offset-1 bandnerRight">
                    <img src="/../img/welcome_model.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
