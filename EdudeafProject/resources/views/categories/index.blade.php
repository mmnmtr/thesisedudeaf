@extends('layouts.appteacher')
@section('content')
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-12">
            <span><div class="circke-blue"></div></span>
            <h1> เพิ่มหมวดหมู่คำศัพท์</h1>
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
              <a href="/admin/categories/create">
                <button class="btn btn-create">
                  <i class="fas fa-plus-circle"></i>
                  &nbsp;&nbsp;เพิ่มหมวดหมู่คำศัพท์
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
              <th scope="col"  style="text-align: center;color: #3078ff;">ลำดับ</th>
              <th scope="col">ชื่อหมวดหมู่</th>
              <th scope="col" style="text-align: center">รูปภาพ</th>
              <th scope="col" style="text-align: center">จำนวนคำศัพท์</th>
              <th scope="col" style="text-align: center">Action</th>
              <th scope="col" style="text-align: center">คลังคำศัพท์</th>

            </tr>
            </thead>
            @if(count($categories) > 0)
              @foreach($categories as $key => $category)
                <tbody class="list">
                <tr>
                  {{--{{$category->id}}--}}
                  <td width="10%"  style="text-align: center;color: #3078ff">{{  $categories->firstItem() + $key }}</td>
                  <td width="20%">{{$category->category_name}}</td>
                  <td width="25%" style="text-align: center"><img
                      src="uploads/catergorie_covers/{{$category->category_image}}"></td>
                  <td width="20%" style="text-align: center">{{$category->count}}</td>
                  <td width="20%" style="text-align: center">


                    <a href="/admin/categories/{{$category->id}}/edit" class="btn btn-Edit mr-1">
                      <i class="fas fa-edit"></i></a>
                    <button type="button" class="btn btn-Red btn-click-del" data-del="#ex_{{$category->id}}"><i class="fas fa-trash-alt"></i></button>
                    <form action="/admin/categories/{{$category->id}}" id="ex_{{$category->id}}" method="post"style="width: 100%" >
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE">
                    </form>

{{--

{{--                    <form action="/admin/categories/{{$category->id}}" method="post">--}}
{{--                      {{csrf_field()}}--}}
{{--                      <a href="/admin/categories/{{$category->id}}/edit" class="btn btn-Edit mr-1"> <i--}}
{{--                          class="fas fa-edit"></i></a>--}}
{{--                      <input type="hidden" name="_method" value="DELETE">--}}
{{--                      <button class="btn btn-Red"><i class="fas fa-trash-alt"></i></button>--}}
{{--                    </form>--}}
                  </td>
                  <td width="20%" style="text-align: center"><a href="/admin/categories/{{$category->id}}">
                      <button class="btn btn-More"><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;เพิ่มคำศัพท์</button>
                    </a></td>
                </tr>
                </tbody>
              @endforeach
            @else
            @endif
          </table>
        </div>
      </div>
      <div class="col-md-12" style="
    margin-bottom: 30px;
">
        {{ $categories->links( "pagination::bootstrap-4") }}
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
        text: "หมวดหมู่คำศัพท์นี้ใช่ไหม?",
        imageUrl: '../img/alert.gif',
        showCancelButton: true,
        confirmButtonColor: '#3078FF',
        cancelButtonColor: '#E86371',
        cancelButtonText: '<i class="fas fa-times-circle"></i> &nbsp;'+'ยกเลิก',
        confirmButtonText: '<i class="fas fa-trash-alt"></i> &nbsp;'+'ต้องการลบ',
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            title:'Deleted!',
            text:'ลบหมวดหมู่คำศัพท์เรียบร้อยแล้ว',
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
