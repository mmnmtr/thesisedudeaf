@extends('layouts.layout_loginShowStudent')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="height:100vh">
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
                                <h2 >เข้าสู่ระบบนักเรียน</h2>
                                <h3>โรงเรียนเศรษฐเสถียร ในพระราชูปถัมภ์</h3>
                                <h3>ชั้นประถมศึกษาปีที่ 1</h3>
                                <br>
                                <h1>เลขที่ {{ Auth::user()-> studentNumber }} </h1>



                                <div class="col-md-10 offset-md-1">
                                    <div style="text-align:center"class="input_studentLoginShow">
                                        <p>{{ Auth::user()-> name }} <span> ({{ Auth::user()-> nickname }})</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="btnActionN">
                                <button class="btn btn-logoutStd text-center">

                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-edit"></i> แก้ไข
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </button>

                                <button type="submit" class="btn btn-nextStd text-center"><a href="/student/home">เริ่มเลย<i class="fas fa-arrow-right"></i></a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  <div class="col-md-2 offset-9">
    <img class="book" src="/../img/book.png" alt="" style="">
  </div>
</div>
@endsection
