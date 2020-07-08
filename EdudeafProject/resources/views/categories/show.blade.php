@extends('layouts.appteacher')
@section('content')
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-9">
            <span><div class="circke-blue"></div></span>
            <h1> เพิ่มหมวดหมู่คำศัพท์ : <span style="color: black">{{$category->category_name}}</span></h1>
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
              <a href="/admin/vocabularies/create/{{$category->id}}">
                <button class="btn btn-create">
                  <i class="fas fa-plus-circle "></i>
                  เพิ่มคำศัพท์
                </button>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="categories_list">
    <div class="col-md-12">
      <table class="table number">
        <thead>
        <tr>
          <th scope="col" style="text-align: center;color: #3078ff;">ลำดับ</th>
          <th scope="col">คำศัพท์</th>
          <th scope="col" style="text-align: center">รูปภาพ</th>
          <th scope="col" style="text-align: center">วิดีโอภาษามือ</th>
          <th scope="col" style="text-align: center">Action</th>

        </tr>
        </thead>
        @if(count($vocabularies) > 0 )
          @foreach($vocabularies as  $key =>  $vocabulary)
            <tbody class="list">
            <tr>
              <td width="7%"  style="text-align: center;color: #3078ff">{{  $vocabularies ->firstItem() + $key }}</td>
              <td width="15%">{{$vocabulary->vocab_word}}</td>
              <td width="25%" style="text-align: center">
                {{--<img class="img-responsive" alt="" src="/uploads/photos/{{ $photo->photo }}" />--}}
                <img src="/uploads/vocabularies/{{$vocabulary->category_id}}/{{$vocabulary->vocab_photo}}"
                     class="card-img-top" alt="">
              </td>

              <td width="20%" class="videoAnimate" style="text-align: center">
                <video id="my-video" class="video-js" controls preload="auto" width="100%" height="auto"
                       data-setup="{}">
                  <source src="/uploads/vocabularies/{{$vocabulary->category_id}}/{{$vocabulary->vocab_video}}"
                          type='video/mp4'>
                </video>
              </td>
              <td width="25%" style="text-align: center">

                <a href="/admin/vocabularies/{{$vocabulary->id}}/edit" class="btn btn-Edit mr-1"> <i
                    class="fas fa-edit"></i></a>
                <button type="button" class="btn btn-Red btn-click-del" data-del="#ex_{{$vocabulary->id}}"><i class="fas fa-trash-alt"></i></button>
                <form action="/admin/vocabularies/{{$vocabulary->id}}" id="ex_{{$vocabulary->id}}" method="post"style="width: 100%" >
                  {{csrf_field()}}
                  <input type="hidden" name="_method" value="DELETE">
                </form>


{{--                                <form action="/admin/vocabularies/{{$vocabulary->id}}" method="post">--}}
{{--                  {{csrf_field()}}--}}
{{--                  <a href="/admin/vocabularies/{{$vocabulary->id}}/edit" class="btn btn-Edit mr-1"> <i--}}
{{--                      class="fas fa-edit"></i></a>--}}
{{--                  <input type="hidden" name="_method" value="DELETE">--}}
{{--                  <button class="btn btn-Red"><i class="fas fa-trash-alt"></i></button>--}}
{{--                </form>--}}
              </td>

            </tr>
            </tbody>
          @endforeach
        @else
        @endif
      </table>
      <div class="col-md-12" style="
    margin-bottom: 30px;
">
        {{ $vocabularies->links( "pagination::bootstrap-4") }}
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
        text: "คำศัพท์นี้ใช่ไหม?",
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
            text:'ลบคำศัพท์เรียบร้อยแล้ว',
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
