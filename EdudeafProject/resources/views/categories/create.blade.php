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
            <div class="col col-md-12">
                <form method="POST" action="/categories/store" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="text" class="categoryTitle control-label">| ชื่อหมวดหมู่คำศัพท์</label>
                        <div class="padding40">
                            <input class="createInput form-control" name="category_name" type="text" id="text" placeholder="กรุณากรอกชื่อหวมดหมู่คำศัพท์">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="due" class="padding40 categoryTitle control-label">| รูปภาพหน้าปกหมวดหมู่คำศัพท์</label>
                        <div class="padding40">

                            <div class="customFile rightBtn" data-display="right" data-label="&#xf093; &nbsp; อัพโหลด">
                                <span class="selectedFile">อัพโหลดรูปภาพ .jpeg , .png </span>
                                <input type="file" name="category_image" value="Profession" />
                            </div>
                        </div>
                    </div>
                    <div class="buttonAction row">
                        <div class="col-md-5 offset-2">
                            <button type="submit" class="btn btn-createCate"><i class="fas fa-plus-circle"></i> เพิ่มหมวดหมู่คำศัพท์</button>
                        </div>
                        <div class="col-md-5">

                                <a class="btn btn-teachBack" href="/categories"><i class="fas fa-times-circle"></i> ยกเลิก</a>

                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>



@endsection