@extends('layouts.appteacher')
@section('content')
    <div class="container">
        <div class="row">
            <div class="functitle col col-md-12">
                <div class="row">
                    <div class="col col-md-9">
                        <span><div class="circke-blue"></div></span> <h1> เพิ่มหมวดหมู่คำศัพท์ : <span style="color: black">{{$category->category_name}}</span></h1>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-create">
                            <a href="/admin/vocabularies/create/{{$category->id}}">
                                <i class="fas fa-plus-circle "></i>
                                เพิ่มคำศัพท์
                            </a>
                        </button>
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
                    <th scope="col">#</th>
                    <th scope="col">คำศัพท์ </th>
                    <th scope="col" style="text-align: center">รูปภาพ</th>
                    <th scope="col" style="text-align: center">วิดีโอภาษามือ</th>
                    <th scope="col" style="text-align: center">Action</th>

                </tr>
                </thead>
                @if(count($category->vocabularies) > 0 )
                    @foreach($category->vocabularies as $vocabulary)
                        <tbody class="list">
                        <tr>
                            <td scope="row"></td>
                            <td width="15%" >{{$vocabulary->vocab_word}}</td>
                            <td width="25%" style="text-align: center">
                                {{--<img class="img-responsive" alt="" src="/uploads/photos/{{ $photo->photo }}" />--}}
                                <img src="/uploads/vocabularies/{{$vocabulary->category_id}}/{{$vocabulary->vocab_photo}}" class="card-img-top" alt="">
                            </td>

                            <td width="20%" class="videoAnimate" style="text-align: center">
                                <video id="my-video" class="video-js" controls preload="auto" width="100%" height="auto" data-setup="{}">
                                    <source src="/uploads/vocabularies/{{$vocabulary->category_id}}/{{$vocabulary->vocab_video}}" type='video/mp4'>
                                </video>
                            </td>
                            <td width="25%" style="text-align: center">
                                <form action="/admin/vocabularies/{{$vocabulary->id}}" method="post">
                                    {{csrf_field()}}
                                    <a href="/admin/vocabularies/{{$vocabulary->id}}/edit" class="btn btn-Edit mr-1"> <i class="fas fa-edit"></i></a>
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
            <div class="offset-4">
                <div class="buttonAction row">
                    <a href="/admin"><button class="btn btn-createCate"> ย้อนกลับ</button></a>
                </div>
            </div>






        </div>
    </div>





@endsection
