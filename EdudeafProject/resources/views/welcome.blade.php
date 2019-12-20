@extends('layouts.appLoginWith')
@section('content')
    <div class="container">
        <div class="bandner">
            <div class="row">
                <div class="col-12 col-md-6 bandnerLeft ">
                    <p>ยินดีต้อนรับเข้าสู่ EduDeafe
                        <br>
                        มาสนุกเพลิดเพลินกับการเรียนรู้
                        <br>
                        มาเริ่มต้นกันเลย :-)
                    </p>
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <a href="/"  class="logoLoginPhoto">
                                <img src="/../img/student-02.png" alt="">
                                <h1>นักเรียน</h1>
                            </a>
                        </div>
                        <div class="col-md-6 text-center">
                            <a href="/categories" class="logoLoginPhoto">
                                <img src="/../img/teacher-01.png" alt="">
                                <h1>คุณครู</h1>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 offset-1 bandnerRight">
                    <img src="img/character.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection