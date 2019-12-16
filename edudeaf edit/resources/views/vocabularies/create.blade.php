@extends('layouts.appteacher')
@section('content')
    <div class="container">
        <div class="row">
            <div class="functitle col col-md-12">
                <div class="row">
                    <div class="col col-md-9">
                        <span><div class="circke-blue"></div></span> <h1>  เพิ่มหมวดหมู่คำศัพท์</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="categories_list">
        <div class="col-md-12">
            <form method="POST" action="/vocabularies/store" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="category_id" value="{{$category_id}}">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label  for="text" class="padding40 categoryTitle control-label">| ชื่อคำศัพท์</label>
                            <div class="padding40">
                                <input id="fname" onkeyup="getVal()" type="text" class="createInput form-control" name="vocab_word" type="text" id="text" placeholder="กรุณากรอกคำศัพท์">
                            </div>
                        </div>
                        <div class="form-group">
                            {{--<label for="due" class="padding40 categoryTitle control-label">| รูปภาพประกอบ</label>--}}
                            {{--<div class="padding40">--}}
                                {{--<input class="createInput form-control" name="vocab_photo" type="file">--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label  for="text" class="padding40 categoryTitle control-label">| แบบสะกดนิ้วมือภาษาไทย</label>
                            <div class="padding40">
                                <button class="createSign">
                                    <h1 id="icard" class="drag" ></h1>
                                </button>

                            </div>
                        </div>

                    </div>
                </div>
                {{--<div class="row">--}}
                    {{--<div class="col col-md-6">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="due" class="padding40 categoryTitle control-label">| รูปภาพประกอบ</label>--}}
                            {{--<div class="padding40">--}}
                                {{--<input class="createInput form-control" name="vocab_photo" type="file">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="row">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="due" class="padding40 categoryTitle control-label">| รูปภาพประกอบ</label>
                            <div class="padding40">
                                <input class="createInput form-control" name="vocab_photo" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="due" class="padding40 categoryTitle control-label">| วิดีโอภาษามือ</label>
                            <div class="padding40">
                                <input class="createInput form-control" name="vocab_video" type="file">
                            </div>
                        </div>
                    </div>
                </div>





                <div>
                    <button class="btn btn-primary" type="submit" value="Submit">เพิ่มหมวดหมู่คำศัพท์</button>
                    <a class="btn btn-info" href="/categories/{{$category_id}}"><i class="fas fa-chevron-left"></i> ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>





@endsection