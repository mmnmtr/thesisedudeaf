@extends('layouts.appteacherStd')
@section('content')
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-12">
            <span><div class="circke-blue"></div></span> <h1> ข้อมูลนักเรียน</h1>
          </div>
          <div class="row" style="width: 100%;padding-top: 30px">
            <div class="col col-md-9">
              <form action="">
                <div class="sb-example-1">
                  <div class="search">
                    <input type="text" class="searchInput form-control searchTerm" name="search" value="{{ Request::get('search') }}" placeholder="กรอกข้อมูลที่ต้องการค้นหา . . .">
                    <button class="searchButton">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
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
              <th scope="col" style="text-align: center">ชั้นปีการศึกษา </th>
              <th scope="col" style="text-align: center">Action</th>

            </tr>
            </thead>
            @if(count($users) > 0)
              @foreach($users as  $key =>  $user)
                <tbody class="list">
                <tr>
                  {{--{{$category->id}}--}}
                  <td width="8%"  style="text-align: center;color: #3078ff">{{ $user->studentNumber}}</td>
                  <td width="13%" >{{$user->titleName}}</td>
                  <td width="27%" >{{$user->name}} {{$user->lastname}}</td>
                  <td width="15%" >{{$user->nickname}}</td>
                  <td width="17%"style="text-align: center" >{{$user->grade}}</td>
{{--                  <td width="20%" style="text-align: center">{{$user->count}}</td>--}}
                  <td width="30%" style="text-align: center">

                    <a href="/admin/sentences/{{$user->id}}" class="btn btn-ex mr-1"> <i class="fas fa-pencil-alt"></i></a>
                    <a href="/admin/students/{{$user->id}}/exercises" class="btn btn-sen mr-1"> <i class="fas fa-user-edit"></i></a>
                    <button type="button" class="btn btn-Red btn-click-del" data-del="#ex_{{$user->id}}"><i class="fas fa-trash-alt"></i></button>
                    <form action="/admin/students/{{$user->id}}" id="ex_{{$user->id}}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE">
                    </form>

{{--                    <form action="/admin/students/{{$user->id}}" method="post">--}}
{{--                      {{csrf_field()}}--}}
{{--                      <a href="/admin/sentences/{{$user->id}}" class="btn btn-ex mr-1"> <i class="fas fa-pencil-alt"></i></a>--}}
{{--                      <a href="/admin/students/{{$user->id}}/exercises" class="btn btn-sen mr-1"> <i class="fas fa-user-edit"></i></a>--}}
{{--                      <a href="/admin/students/{{$user->id}}/edit" class="btn btn-Edit mr-1"> <i class="fas fa-edit"></i></a>--}}
{{--                      <input type="hidden" name="_method" value="DELETE">--}}
{{--                      <button class="btn btn-Red"><i class="fas fa-trash-alt"></i></button>--}}
{{--                    </form>--}}

                  </td>
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

@push('scripts')
  <script>
    $('.btn-click-del').on('click',function () {
      var target = $(this).attr('data-del');
      console.log(target);
      Swal.fire({
        title: 'คุณแน่ใจที่จะลบ',
        text: "ข้อมูลนักเรียนนี้ใช่ไหม?",
        imageUrl: '../img/alert.gif',
        showCancelButton: true,
        confirmButtonColor: '#3078FF',
        cancelButtonColor: '#E86371',
        cancelButtonText: '<i class="fas fa-times-circle"></i> &nbsp;'+'ยกเลิก',//เพิ่มมา
        confirmButtonText: '<i class="fas fa-trash-alt"></i> &nbsp;'+'ต้องการลบ'
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            title:'Deleted!',
            text:'ลบข้อมูลนักเรียนเรียบร้อยแล้ว',
            showCancelButton: false,
            showConfirmButton: false,
          });
          setTimeout(function () {
            $(target).submit();
          },2000)
        }
      })
    })
  </script>
@endpush

