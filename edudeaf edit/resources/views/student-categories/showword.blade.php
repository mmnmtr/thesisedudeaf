@extends('layouts.appstudent')
@section('content')


    <div class="function">
        <div class="container">
            <div class="row">
                <img class="bg" src="/../img/category_map.png" alt="">
                <div class="functitle col col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center">
                                {{--{{$category->category_name}}--}}
                            </h1>
                        </div>
                        <div class="categories_list">
                            <div class="row">

                                <div class="col-md-4 ">
                                    <div class="wordPhoto mb-4 box-shadow">
                                        <div class="text-center">
                                            <img src="/uploads/vocabularies/{{$vocabulary->category_id}}/{{$vocabulary->vocab_photo}}" class="card-img-top" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="videoShow col-md-8">
                                    {{--<img class="videoBg" src="/../img/video_wood.png" alt="">--}}
                                    <video id="my-video" class="video-js" controls preload="auto" width="100%" height="auto" data-setup="{}">
                                        <source src="/uploads/vocabularies/{{$vocabulary->category_id}}/{{$vocabulary->vocab_video}}" type='video/mp4'>
                                    </video>
                                </div>

                            </div>
                            <div class="wordShow">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <button class="showTextWord">
                                                <h2 class="textLang">{{$vocabulary->vocab_word}}</h2>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <button class="showTextWord">
                                                <h2 class="signLang">{{$vocabulary->vocab_word}}</h2>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox row">
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <button class="btn btn-titleTh">คำภาษาไทย</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <button class="btn btn-titleSign">แบบสะกดนิ้วมือ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="return" style="margin-top: 215px;">
                        <div class="col-md-12">
                            <div class="text-center">
                                <a href="/student">
                                    <button class="btn btn-Stdback"><h2><i class="fas fa-redo-alt"></i> ย้อนกลับ</h2></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection