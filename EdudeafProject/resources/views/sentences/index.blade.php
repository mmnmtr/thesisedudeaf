@extends('layouts.appteacherSentence')
@section('content')
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-9">
            <span><div class="circke-blue"></div></span> <h1> แต่งประโยค</h1>
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
              <th scope="col">ชื่อ - นามสกุล </th>
              <th scope="col" >ชื่อเล่น </th>
              <th scope="col" style="text-align: center">จำนวนคำศัพท์ </th>
              <th scope="col" style="text-align: center">Action</th>

            </tr>
            </thead>
            @if(count($users) > 0)
              @foreach($users as $user)
                <tbody class="list">
                <tr>
                  {{--{{$category->id}}--}}
                  <td scope="row" class="count"></td>
                  <td width="35%" >{{$user->name}}</td>
                  <td width="20%" >{{$user->nickname}}</td>
                  <td width="20%" style="text-align: center">{{$user->count}}</td>
                  <td width="30%" style="text-align: center"><a href="/admin/sentences/{{$user->id}}"><button class="btn btn-sentenceMore"><i class="fas fa-eye"></i> ดูคำศัพท์</button></a></td>
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
