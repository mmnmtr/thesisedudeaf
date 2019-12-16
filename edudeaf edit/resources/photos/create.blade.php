@extends('layouts.appteacher')
@section('content')
    <div class="container">
        <div class="row">
            <div class="functitle col col-md-12">
                <div class="row">
                    <div class="col col-md-9">
                        <span><div class="circke-blue"></div></span> <h1> เพิ่มหมวดหมู่คำศัพท์ <span style="color: black"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="categories_list">
        <div class="col-md-12">
            <form method="POST" action="/vocabularies/store" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="text" class="control-label">| ชื่อคำศัพท์</label>
                            <input class="form-control" name="title" type="text" id="text" placeholder="กรุณากรอกคำศัพท์">
                        </div>
                    </div>
                    <div class="col col-md-6">

                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="body" class="control-label">| กรุณาเลือกชนิดคำ</label>
                            <select class="form-control" name="">
                                <option value="1">นาม</option>
                                <option value="2">กริยา</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="due" class="control-label">| รูปภาพประกอบ</label>
                            <input class="form-control" name="category_image" type="file">
                            <input type="hidden" name="category_id" value="{{$category_id}}">
                        </div>
                    </div>
                    <div class="row col col-md-6">
                        <div class="form-group">
                            <label for="due" class="control-label">| วิดีโอภาษามือ</label>
                            <input class="form-control" name="category_video" type="file">
                            <input type="hidden" name="category_id" value="{{$category_id}}">
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