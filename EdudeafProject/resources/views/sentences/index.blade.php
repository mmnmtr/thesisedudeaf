@extends('layouts.appteacherSentence')
@section('content')
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-12">
            <span><div class="circke-blue"></div></span> <h1> แต่งประโยค</h1>
          </div>
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
      {{--@if(count($albums) > 0)--}}
      {{--@foreach($albums as $album)--}}
      <div class="categories_list">
        <div class="col-md-12">
          <table class="table number">
            <thead>
            <tr>
              <th scope="col"  style="text-align: center;color: #3078ff;">เลขที่</th>
              <th scope="col">คำนำหน้า </th>
              <th scope="col">ชื่อ - นามสกุล </th>
              <th scope="col" >ชื่อเล่น </th>
              <th scope="col" style="text-align: center">จำนวนประโยค </th>
              <th scope="col" style="text-align: center">Action</th>

            </tr>
            </thead>
            @if(count($users) > 0)
              @foreach($users as $key => $user)
                <tbody class="list">
                <tr>
                  {{--{{$category->id}}--}}
                  <td width="10%"  style="text-align: center;color: #3078ff">{{  $users->firstItem() + $key }}</td>
                  <td width="15%" >{{$user->titleName}}</td>
                  <td width="35%" >{{$user->name}} {{$user->lastname}}</td>
                  <td width="17%" >{{$user->nickname}}</td>
                  <td width="20%" style="text-align: center">{{$user->count}}</td>
                  <td width="30%" style="text-align: center"><a href="/admin/sentences/{{$user->id}}"><button class="btn btn-sentenceMore"><i class="fas fa-eye"></i> ดูประโยค</button></a></td>
                </tr>
                </tbody>
              @endforeach
            @else
            @endif
          </table>
        </div>
      </div>
      <div class="col-md-12">
        {{ $users->links( "pagination::bootstrap-4") }}
      </div>
    </div>
  </div>
@endsection
