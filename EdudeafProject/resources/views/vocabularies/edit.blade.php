@extends('layouts.appteacher')
@section('content')

    <div class="container">
        <div class="row">
            <div class="functitle col col-md-12">
                <div class="row">
                    <div class="col col-md-9">
                        <span><div class="circke-blue"></div></span> <h1> แก้ไขคำศัพท์</h1>
                    </div>
                </div>
            </div>
            <div class="categories_list">
                <div class="col-md-12">
                    <form method="POST" action="/admin/vocabularies/{{$vocabulary->id}}">
                        {{ csrf_field() }}
                        <div class="row">
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group col-md-6">
                                <label  for="text" class="padding40 categoryTitle control-label">| ชื่อคำศัพท์</label>
                                <div class="padding40">
                                    <input class="createInput form-control" name="vocab_word" type="text" id="text" value="{{$vocabulary->vocab_word}}">
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
                        {{--<div class="form-group">--}}
                        {{--<label for="due" class="padding40 categoryTitle control-label">| รูปภาพหน้าปกหมวดหมู่คำศัพท์</label>--}}
                        {{--<div class="padding40">--}}
                        {{--<input class="createInput form-control" name="category_image" type="file">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<input class="createInput form-control" name="category_name" type="file" value="{{$category->category_image}}">--}}
                        <div class="buttonAction row">
                            <div class="col-md-5 offset-2">
                                <button type="submit" class="btn btn-createCate"><i class="fas fa-plus-circle"></i> แก้ไข</button>
                            </div>
                            <div class="col-md-5">
                                <a class="btn btn-teachBack" href="/admin/categories/{{$vocabulary->category_id}}"><i class="fas fa-times-circle"></i> ยกเลิก</a>
                                {{--<a href="/categories"><button class="btn-teachBack"><i class="fas fa-times-circle"></i> ยกเลิก</button></a>--}}
                            </div>
                        </div>

                        {{--<div class="row">--}}
                        {{--<input class="btn btn-primary" type="submit" value="Submit">--}}
                        {{--</div>--}}
                    </form>


                    {{--<a class="btn btn-danger" href="/categories"><i class="fas fa-chevron-left"></i> ยกเลิก</a>--}}
                </div>
            </div>
        </div>
    </div>





@endsection