@extends('layouts.appteacher')
@section('content')



    <div class="container">
        <div class="row">
            <div class="functitle col col-md-12">
                <div class="row">
                    <div class="col col-md-9">
                        <span><div class="circke-blue"></div></span> <h1> แก้ไขหมวดหมู่คำศัพท์</h1>
                    </div>
                </div>
            </div>
            <div class="categories_list">
                <div class="col-md-12">
                    <form method="POST" action="/categories/{{$category->id}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="text" class="categoryTitle control-label">| ชื่อหมวดหมู่คำศัพท์</label>
                            <div class="padding40">
                                <input class="createInput form-control" name="category_name" type="text" id="text" value="{{$category->category_name}}">
                            {{--<input class="form-control" name="category_name" type="text" id="text" placeholder="กรุณากรอกชื่อหวมดหมู่คำศัพท์">--}}
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
                                <a class="btn btn-teachBack" href="/categories"><i class="fas fa-times-circle"></i> ยกเลิก</a>
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