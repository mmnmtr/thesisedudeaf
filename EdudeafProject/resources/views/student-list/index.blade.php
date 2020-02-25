@extends('layouts.appteacherSentence')
@section('content')
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-9">
            <span><div class="circke-blue"></div></span> <h1> ข้อมูลนักเรียน</h1>
          </div>
          <div class="createCate col-md-3">
            <a href="/admin/students/create">
              <button class="btn btn-create">
                <i class="fas fa-plus-circle "></i>
                เพิ่มข้อมูลนักเรียน
              </button>
            </a>
          </div>
        </div>
      </div>
      {{--@if(count($albums) > 0)--}}
      {{--@foreach($albums as $album)--}}
      <div class="categories_list">
        <div class="col-md-12">
          <table class="table number">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">คำนำหน้า </th>
              <th scope="col">ชื่อ - นามสกุล </th>
              <th scope="col" >ชื่อเล่น </th>
              <th scope="col" style="text-align: left">ชั้นปีการศึกษา </th>
              <th scope="col" style="text-align: center">Action</th>

            </tr>
            </thead>
            @if(count($users) > 0)
              @foreach($users as $user)
                <tbody class="list">
                <tr>
                  {{--{{$category->id}}--}}
                  <td scope="row" class="count"></td>
                  <td width="10%" >{{$user->titleName}}</td>
                  <td width="30%" >{{$user->name}} {{$user->lastname}}</td>
                  <td width="20%" >{{$user->nickname}}</td>
                  <td width="25%" >{{$user->grade}}</td>
{{--                  <td width="20%" style="text-align: center">{{$user->count}}</td>--}}
                  <td width="35%" style="text-align: center">
                    <form action="/admin/students/{{$user->id}}" method="post">
                      {{csrf_field()}}
                      <a href="/admin/students/{{$user->id}}/edit" class="btn btn-Edit mr-1"> <i class="fas fa-edit"></i></a>
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-Red"><i class="fas fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                </tbody>
              @endforeach
            @else
            @endif
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
