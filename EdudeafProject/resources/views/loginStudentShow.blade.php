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
                  <br>
                  <h2>เข้าสู่ระบบนักเรียน</h2>
                  <h3>โรงเรียนเศรษฐเสถียร ในพระราชูปถัมภ์</h3>
                  <h3>ชั้นประถมศึกษา</h3>
                  <br>
                  <br>
                  <h1>เลขที่ {{ Auth::user()-> studentNumber }} </h1>


                  <div class="col-md-10 offset-md-1">
                    <div style="text-align:center" class="input_studentLoginShow">
                      <p>{{ Auth::user()-> titleName }} {{ Auth::user()-> name }} {{ Auth::user()-> lastname }} <span> ({{ Auth::user()-> nickname }})</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6">
                  <input type="hidden" class="form-control">

                </div>
              </div>

              <div class="form-group ">
                <div class="btnActionN">
                  <div class="row">
                    <div class="col-md-4  offset-md-2">
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
                    </div>
                    <div class="col-md-4 ">

                      <form action="/student/home" style="width: 100%">
                        <button type="submit" class="btn btn-nextStd text-center"><i class="fas fa-check"></i> ตกลง
                        </button>
                      </form>
                    </div>
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
