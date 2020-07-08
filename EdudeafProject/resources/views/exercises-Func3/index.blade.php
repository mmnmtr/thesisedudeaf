@extends('layouts.appteacherExercise')
@section('content')
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-9">
            <span><div class="circke-blue"></div></span>
            <h1> เพิ่มแบบฝึกหัด</h1>
{{--            <form action="">--}}
{{--              <input type="text" name="search" value="{{ Request::get('search') }}">--}}

{{--              <select name="search2" id="">--}}
{{--                <option value="" @if(Request::get('search2')=='') selected @endif>ทั้งหมด</option>--}}
{{--                <option value="เลือกคำศัพท์ให้ตรงกับภาพ" @if(Request::get('search2')=='เลือกคำศัพท์ให้ตรงกับภาพ') selected @endif>เลือกคำศัพท์ให้ตรงกับภาพ</option>--}}
{{--                <option value="เลือกคำศัพท์ให้ตรงกับสะกดนิ้วมือ" @if(Request::get('search2')=='เลือกคำศัพท์ให้ตรงกับสะกดนิ้วมือ') selected @endif>เลือกคำศัพท์ให้ตรงกับสะกดนิ้วมือ</option>--}}
{{--              </select>--}}

{{--              <select name="search3" id="">--}}
{{--                <option value="asc" @if(Request::get('search3')=='asc') selected @endif>น้อยไปมาก</option>--}}
{{--                <option value="desc" @if(Request::get('search3')=='desc') selected @endif>มากไปน้อย</option>--}}
{{--              </select>--}}
{{--              <button style="display: none;">search</button>--}}
{{--            </form>--}}
          </div>
          <div class="row" style="width: 100%;padding-top: 30px">
            <div class="col col-md-9">
              <form action="">
                <div class="row">
                  <div class="col-md-6">
                    <div class="sb-example-1">
                      <div class="search">
                        <input type="text" class="searchInput100 form-control searchTerm" name="search" value="{{ Request::get('search') }}" placeholder="กรอกข้อมูลที่ต้องการค้นหา . . .">
                        <button class="searchButton">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <select class="searchSelect form-control"  name="search2" id="">
                      <option value="" @if(Request::get('search2')=='') selected @endif>เลือกประเภทแบบฝึกหัด</option>
                      <option value="เลือกคำศัพท์ให้ตรงกับภาพ" @if(Request::get('search2')=='เลือกคำศัพท์ให้ตรงกับภาพ') selected @endif>เลือกคำศัพท์ให้ตรงกับภาพ</option>
                      <option value="เลือกคำศัพท์ให้ตรงกับสะกดนิ้วมือ" @if(Request::get('search2')=='เลือกคำศัพท์ให้ตรงกับสะกดนิ้วมือ') selected @endif>เลือกคำศัพท์ให้ตรงกับสะกดนิ้วมือ</option>
                    </select>
                  </div>

                </div>
              </form>
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
      </div>
      {{--@if(count($albums) > 0)--}}
      {{--@foreach($albums as $album)--}}
      <div class="categories_list">
        <div class="col-md-12">
          <table class="table number">
            <thead>
            <tr>
              <th scope="col" style="text-align: center;color: #3078ff;">ลำดับ</th>
              <th scope="col">ชื่อแบบฝึกหัด</th>
              <th scope="col">ประเภทแบบฝึกหัด</th>
              <th scope="col" style="text-align: center">จำนวนข้อ</th>
              <th scope="col" style="text-align: center">Action</th>
              <th scope="col" style="text-align: center">คะแนนของนักเรียน</th>

            </tr>
            </thead>
            @if(count($exercises) > 0)
              @foreach($exercises as $key => $exercise)
                <tbody class="list">
                <tr>
                  {{--{{$category->id}}--}}
                  <td width="8"  style="text-align: center;color: #3078ff">{{  $exercises->firstItem() + $key }}</td>
                  <td width="20%">{{$exercise->exercise_name}}</td>
                  <td width="35%">{{$exercise->typeName}}</td>
                  <td width="13%" style="text-align: center">{{$exercise->count}}</td>
                  <td width="17%" style="text-align: center">

                      <a href="/admin/exercises/{{$exercise->id}}/{{$exercise->type}}" class="btn btn-Edit mr-1"> <i
                          class="fas fa-edit"></i></a>
                      <button type="button" class="btn btn-Red btn-click-del" data-del="#ex_{{$exercise->id}}"><i class="fas fa-trash-alt"></i></button>
                      <form action="/admin/exercises/{{$exercise->id}}/delete" id="ex_{{$exercise->id}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                      </form>

                  </td>
                  <td width="30%" style="text-align: center">
                    <a href="/admin/exercisesScore/{{$exercise->id}}">
                      <button class="btn btn-sentenceMore"><i class="fas fa-eye"></i> ดูคะแนน</button>
                    </a></td>
                </tr>
                </tbody>
              @endforeach
            @else
            @endif
          </table>
        </div>
      </div>
      <div class="col-md-12">
          {{ $exercises->links( "pagination::bootstrap-4") }}
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
        text: "แบบฝึกหัดนี้ใช่ไหม?",
        imageUrl: '../img/alert.gif',
        showCancelButton: true,
        confirmButtonColor: '#3078FF',
        cancelButtonColor: '#E86371',
        cancelButtonText: '<i class="fas fa-times-circle"></i> &nbsp;'+'ยกเลิก',
        confirmButtonText: '<i class="fas fa-trash-alt"></i> &nbsp;'+'ต้องการลบ'
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            title:'Deleted!',
            text:'ลบแบบฝึกหัดเรียบร้อยแล้ว',
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
