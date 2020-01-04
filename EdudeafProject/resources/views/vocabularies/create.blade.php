@extends('layouts.appteacher')
@section('content')
    <div class="container">
        <div class="row">
            <div class="functitle col col-md-12">
                <div class="row">
                    <div class="col col-md-9">
                        <span><div class="circke-blue"></div></span> <h1>  เพิ่มคำศัพท์หมวดหมู่ </h1>
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
                                <input  maxlength="10" size="10" id="fname" onkeyup="getVal()" type="text" class="createInput form-control" name="vocab_word" type="text" id="text" placeholder="กรุณากรอกคำศัพท์">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="due" class="padding40 categoryTitle control-label">| รูปภาพประกอบหน้าปก (ภาพการ์ตูน)</label>
                            <div class="padding40">
                                <div class="customFile rightBtn" data-display="right" data-label="&#xf093; &nbsp; อัพโหลด">
                                    <span class="selectedFile">อัพโหลดรูปภาพ .jpeg , .png </span>
                                    <input type="file" name="vocab_photo" value="Profession" />
                                </div>
                            </div>
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

                <div class="row">
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="due" class="padding40 categoryTitle control-label">| รูปภาพประกอบ</label>
                            <div class="padding40">
                                <div class="customFile rightBtn" data-display="right" data-label="&#xf093; &nbsp; อัพโหลด">
                                    <span class="selectedFile">อัพโหลดรูปภาพ .jpeg , .png </span>
                                    <input type="file" name="vocab_photoReal" value="Profession" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="form-group">
                            <label for="due" class="padding40 categoryTitle control-label">| วิดีโอภาษามือ</label>
                            <div class="padding40">
                                <div class="customFile rightBtn" data-display="right" data-label="&#xf093; &nbsp; อัพโหลด">
                                    <span class="selectedFile">อัพโหลดรูปภาพ .jpeg , .png </span>
                                    <input type="file" name="vocab_video" value="Profession" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="buttonAction row">
                    <div class="col-md-5 offset-2">
                        <button type="submit" value="Submit" class="btn btn-createCate"><i class="fas fa-plus-circle"></i> เพิ่มคำศัพท์</button>
                    </div>
                    <div class="col-md-5">

                        <a class="btn btn-teachBack"  href="/categories/{{$category_id}}"><i class="fas fa-times-circle"></i> ยกเลิก</a>

                        {{--<a href="/categories"><button class="btn-teachBack"><i class="fas fa-times-circle"></i> ยกเลิก</button></a>--}}
                    </div>
                </div>
            </form>
        </div>
    </div>





@endsection