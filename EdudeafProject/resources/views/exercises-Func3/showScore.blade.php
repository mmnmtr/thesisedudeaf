@extends('layouts.appteacherExercise')
@section('content')
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          @foreach($exercise as $exerciseName)
            <div class="col-md-12">
              <span><div class="circke-blue"></div></span> <h1> คะแนนนักเรียน : <span style="color: black"> &nbsp;{{$exerciseName->exercise_name}}</span></h1>
            </div>
            <div class="col-md-12">
              <label for="text" class="padding40 categoryTitle control-label">| ประเภท : <span
                  style="">&nbsp; {{$exerciseName->exerciseType_name}}</span></label>
            </div>
          @endforeach
          </div>

        <div class="row" style="width: 100%;padding-top: 30px">
          <div class="col col-md-12">
            <form action="">
              <div class="sb-example-1">
                <div class="search">
                  <input type="text" class="searchInput100 form-control searchTerm" name="search" value="{{ Request::get('search') }}" placeholder="กรอกข้อมูลที่ต้องการค้นหา . . .">
                  <button class="searchButton">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

        </div>
      </div>
      <div class="categories_list">
        <div class="col-md-12 row">
          <table class="table number">
            <thead>
            <tr>
              <th scope="col"  style="text-align: center;color: #3078ff;">เลขที่</th>
              <th scope="col">คำนำหน้า</th>
              <th scope="col" >ชื่อ - นามสกุล</th>
              <th scope="col" style="text-align: center" >ชื่อเล่น </th>
              <th scope="col" style="text-align: center">ชั้นปีการศึกษา</th>
              <th scope="col" style="text-align: center">คะแนน</th>
              <th scope="col" style="text-align: center">วันที่ทำแบบฝึกหัด</th>

            </tr>
            </thead>
            @if(count($scores) > 0)
              @foreach($scores as $score)
                <tbody class="list">
                <tr>
                  <td width="8%"  style="text-align: center;color: #3078ff" >{{$score->stdNum}}</td>
                  <td width="12%" >{{$score->stdTtName}}</td>
                  <td width="23%" >{{$score->stdName}} &nbsp; {{$score->lastname}}</td>
                  <td width="13%" style="text-align: center">{{$score->nickname}}</td>
                  <td width="16%" style="text-align: center">{{$score->grade}}</td>
                  <td width="10%" style="text-align: center">{{$score->score}}</td>
                  <td width="30%" style="text-align: center;font-size: 14px">{{$score->created_at}}</td>
                </tr>
                </tbody>
              @endforeach
            @else
            @endif
          </table>
        </div>
      </div>
      <div class="col-md-12">
        {{ $scores->links( "pagination::bootstrap-4") }}
      </div>
    </div>
@endsection
