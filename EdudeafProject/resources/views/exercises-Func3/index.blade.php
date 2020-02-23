@extends('layouts.appteacherExercise')
@section('content')
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-9">
            <span><div class="circke-blue"></div></span> <h1> แต่งประโยค</h1>
          </div>
          <div class="createCate col-md-3">
            <a href="/admin/exercises/create">
              <button class="btn btn-create">
                <i class="fas fa-plus-circle "></i>
                เพิ่มแบบฝึกหัด
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
              <th scope="col">ชื่อแบบฝึกหัด</th>
              <th scope="col" >ประเภทแบบฝึกหัด</th>
              <th scope="col" style="text-align: center">Action</th>
              <th scope="col" style="text-align: center">คะแนนของนักเรียน</th>

            </tr>
            </thead>
            @if(count($exercisetypes) > 0)
              @foreach($exercisetypes as $exercisetype)
                <tbody class="list">
                <tr>
                  {{--{{$category->id}}--}}
                  <td scope="row" class="count"></td>
                  <td width="25%" >{{$exercisetype->name}}</td>
                  <td width="25%" >{{$exercisetype->type}}</td>
                  <td width="20%" style="text-align: center">
                    <form action="/admin/categories/" method="post">
                      {{csrf_field()}}
                      <a href="/admin/exercises//edit" class="btn btn-Edit mr-1"> <i class="fas fa-edit"></i></a>
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-Red"><i class="fas fa-trash-alt"></i></button>
                    </form>
                  </td>
                  <td width="30%" style="text-align: center"><a href="/admin/sentences/"><button class="btn btn-sentenceMore"><i class="fas fa-eye"></i> ดูคำศัพท์</button></a></td>
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