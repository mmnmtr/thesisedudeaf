@extends('layouts.appteacherExercise')
@section('content')
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-9">
            @foreach($user as $user)
              <span><div class="circke-blue"></div></span> <h1> คะแนนแบบฝึกหัดทั้งหมด : <span style="color: #26335e">{{$user->name}}  {{$user->lastname}} ( {{$user->nickname}} )</span></h1>
            @endforeach
          </div>
          </div>

        </div>
      </div>
      {{--@if(count($albums) > 0)--}}
      {{--@foreach($albums as $album)--}}
      <div class="categories_list">
        <div class="col-md-12 row">
          <table class="table number">
            <thead>
            <tr>
              <th scope="col"  style="text-align: center;color: #3078ff;">ลำดับ</th>
              <th scope="col">ชื่อแบบฝึกหัด</th>
              <th scope="col" >ประเภทแบบฝึกหัด</th>
              <th scope="col" style="text-align: center" >จำนวนข้อ </th>
              <th scope="col" style="text-align: center">คะแนนที่ได้</th>
              <th scope="col" style="text-align: center">วันที่ทำแบบฝึกหัด</th>

            </tr>
            </thead>
            @if(count($scores) > 0)
              @foreach($scores as  $key => $score)
                <tbody class="list">
                <tr>
                  <td width="7%"  style="text-align: center;color: #3078ff">{{ $scores->firstItem() + $key }}</td>
                  <td width="20%" >{{$score->exercise_name}}</td>
                  <td width="30%" >{{$score->typeName}}</td>
                  <td width="12%" style="text-align: center">{{$score->count}}</td>
                  <td width="12%" style="text-align: center">{{$score->score}}</td>
                  <td width="30%" style="text-align: center">{{$score->created_at}}</td>
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
