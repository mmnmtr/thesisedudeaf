@extends('layouts.appteacher')
@section('content')
  <style>
    .col-md-8 {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>

    <div class="container">
        <div class="row">
            <div class="functitle col col-md-12">
                <div class="row">
                    <div class="col col-md-6">
                        <span><div class="circke-blue"></div></span> <h1>เพิ่มหมวดหมู่คำศัพท์</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="categories_list">
        <div class="col-md-12">
            <div class="col col-md-12">
                <form method="POST" action="/admin/categories/store" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="text" class="categoryTitle control-label">| ชื่อหมวดหมู่คำศัพท์</label>
                        <div class="padding40">
                            <input class="createInput form-control" name="category_name" type="text" id="text" placeholder="กรุณากรอกชื่อหมวดหมู่คำศัพท์" required autofocus oninvalid="this.setCustomValidity('กรุณากรอกชื่อหมวดหมู่คำศัพท์')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="due" class="padding40 categoryTitle control-label">| รูปภาพหน้าปกหมวดหมู่คำศัพท์</label>
                        <div class="padding40">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="cover">
                                <img id="category_image" src="/../img/image_preview-01.png" alt="your image" />
                              </div>
                            </div>
                            <div class="col-md-8">



                              <div class="customFile rightBtn" data-display="right" data-label="อัพโหลด">
                                <span class="selectedFile">อัพโหลดรูปภาพ .jpeg , .png </span>
                                <input type="file" class="createInput form-control" name="category_image" value="Profession"  onchange="readURL(this);" required autofocus oninvalid="this.setCustomValidity('อัพโหลดรูปภาพ .jpeg , .png ')" oninput="setCustomValidity('')" />
                              </div>
                            </div>
                          </div>


                        </div>
                    </div>
                    <div class="buttonAction row">
                        <div class="col-md-4 offset-2">
                            <button type="submit" class="btn btn-createCate"><i class="fas fa-plus-circle"></i> เพิ่มหมวดหมู่คำศัพท์</button>
                        </div>
                        <div class="col-md-3">

                                <a class="btn btn-teachBack" href="/admin"><i class="fas fa-times-circle"></i> ยกเลิก</a>

                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script>
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
            $('#category_image')
              .attr('src', e.target.result);
          };

          reader.readAsDataURL(input.files[0]);
        }
      }     function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
            $('#category_image')
              .attr('src', e.target.result);
          };

          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>



@endsection
