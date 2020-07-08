@extends('layouts.appteacher')
@section('content')
  <style>
    .customFile:before {
      content: attr(data-label);
      font-family: FontAwesome, 'Bai Jamjuree';
      /*content: "\f093 &nbsp อัพโหลด ";*/
      box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.16);
      background-color: #3078ff;
      color: #FFF;
      border-radius: 50px;
      padding: 20px 12px 20px 0;
      float: left;
      width: 182px;
      height: 70px;
      text-align: center;
      display: block;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
    }
    .categoryTitle{
      font-size: 20px;
    }
  </style>
  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-9">
            <span><div class="circke-blue"></div></span>
            <h1> เพิ่มคำศัพท์หมวดหมู่ : <span style="color:#000;"></span></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="categories_list">
    <div class="col-md-12">
      <form method="POST" action="/admin/vocabularies/store" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="category_id" value="{{$category_id}}">
        <div class="row">
          <div class="col col-md-6">
            <div class="form-group">
              <label for="text" class="padding40 categoryTitle control-label">| ชื่อคำศัพท์</label>
              <div class="padding40">
                <input maxlength="10" size="10" id="fname" onkeyup="getVal()" type="text"
                       class="createInput form-control" name="vocab_word" type="text" id="text"
                       placeholder="กรุณากรอกคำศัพท์" required autofocus oninvalid="this.setCustomValidity('กรุณากรอกคำศัพท์')" oninput="setCustomValidity('')">
              </div>
            </div>
            <div class="form-group" style="padding-top:50px">
              <div class="row">
                <div class="col-md-4">
                  <div class="coverVocab">
                    <img id="category_image" src="/../img/image_preview-01.png" alt="your image"/>
                  </div>
                </div>
                <div class="col-md-8" style=" display: flex;justify-content: center;align-items: center;">
                  <div class="form-group" style="width: 100%">
                    <label for="due" class="padding40 categoryTitle control-label">| รูปภาพประกอบหน้าปก
                      (ภาพการ์ตูน)</label>
                    <div class="padding40">
                      <div class="customFile rightBtn" data-display="right" data-label="อัพโหลด">
                        <span class="selectedFile">อัพโหลดรูปภาพ .jpeg , .png </span>
                        <input type="file" name="vocab_photo" value="Profession" onchange="readURL(this);" required autofocus oninvalid="this.setCustomValidity('กรุณาอัพโหลดรูปภาพประกอบหน้าปก (ภาพการ์ตูน)')" oninput="setCustomValidity('')"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>

          <div class="col col-md-6">
            <div class="form-group">
              <label for="text" class="padding40 categoryTitle control-label">| แบบสะกดนิ้วมือภาษาไทย</label>
              <div class="padding40">
                <button class="createSign">
                  <h1 id="icard" class="drag"></h1>
                </button>

              </div>
            </div>

          </div>
        </div>

        <div class="row" style="padding-top: 50px">
          <div class="col col-md-6">
            <div class="row">
              <div class="col-md-4">
                <div class="coverVocab">
                  <img id="real_image" src="/../img/image_preview-01.png" alt="your image"/>
                </div>

              </div>
              <div class="col-md-8" style=" display: flex;justify-content: center;align-items: center;">
                <div class="form-group" style="width: 100%">
                  <label for="due" class="padding40 categoryTitle control-label">| รูปภาพประกอบ (ภาพจริง)</label>
                  <div class="padding40">
                    <div class="customFile rightBtn" data-display="right" data-label="อัพโหลด">
                      <span class="selectedFile">อัพโหลดรูปภาพ .jpeg , .png </span>
                      <input type="file" name="vocab_photoReal" value="Profession" onchange="readImg(this);" required autofocus oninvalid="this.setCustomValidity('กรุณาอัพโหลดรูปภาพประกอบหน้าปก (ภาพจริง)')" oninput="setCustomValidity('')"/>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>


          <div class="col-md-6">
            <div class="row">
              <div class="col-md-4">
                <div class="coverVocab">
                  <video controls autoplay>
                    <source src="mov_bbb.mp4" id="video_here">
                  </video>

                  {{--                  <img id="real_image" src="/../img/image_preview-01.png" alt="your image"/>--}}
                </div>

              </div>
              <div class="col col-md-8" style=" display: flex;justify-content: center;align-items: center;">
                <div class="form-group" style="width: 100%;">
                  <label for="due" class="padding40 categoryTitle control-label">| วิดีโอภาษามือ</label>
                  <div class="padding40">
                    <div class="customFile rightBtn" data-display="right" data-label="อัพโหลด">
                      <span class="selectedFile">อัพโหลดวิดีโอ </span>
                      <input type="file" name="vocab_video" value="Profession" class="file_multi_video" accept="video/*" required autofocus oninvalid="this.setCustomValidity('กรุณาอัพโหลดวิดีโอภาษามือ')" oninput="setCustomValidity('')"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>


        <div class="buttonAction row">
          <div class="col-md-4 offset-2">
            <button type="submit" value="Submit" class="btn btn-createCate"><i class="fas fa-plus-circle"></i>
              เพิ่มคำศัพท์
            </button>
          </div>
          <div class="col-md-3">

            <a class="btn btn-teachBack" href="/admin/categories/{{$category_id}}"><i class="fas fa-times-circle"></i>
              ยกเลิก</a>

            {{--<a href="/categories"><button class="btn-teachBack"><i class="fas fa-times-circle"></i> ยกเลิก</button></a>--}}
          </div>
        </div>
      </form>
    </div>
  </div>





@endsection
