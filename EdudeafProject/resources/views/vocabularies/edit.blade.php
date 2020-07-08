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
  </style>

  <div class="container">
    <div class="row">
      <div class="functitle col col-md-12">
        <div class="row">
          <div class="col col-md-9">
            <span><div class="circke-blue"></div></span>
            <h1> แก้ไขคำศัพท์</h1>
          </div>
        </div>
      </div>
      <div class="categories_list">
        <div class="col-md-12">
          <form method="POST" action="/admin/vocabularies/{{$vocabulary->id}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
              <input type="hidden" name="_method" value="put">
              <div class="col col-md-6">
                <div class="form-group">
                  <input type="hidden" name="category_id" value="{{$vocabulary->category_id}}">
                  <label for="text" class="padding40 categoryTitle control-label">| ชื่อคำศัพท์</label>
                  <div class="padding40">
                    <input maxlength="10" size="10" id="fname" onkeyup="getVal()" type="text"
                           class="createInput form-control" name="vocab_word" type="text" id="text"
                           value="{{$vocabulary->vocab_word}}">
                  </div>
                </div>
                <div class="form-group" style="padding-top:50px">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="coverVocab">
                        <input class="createInput form-control" name="vocab_photo_old" type="hidden"
                               value="{{$vocabulary->vocab_photo}}">
                        <img id="category_image"
                             src="/uploads/vocabularies/{{$vocabulary->category_id}}/{{$vocabulary->vocab_photo}}"
                             alt="your image"/>
                      </div>
                    </div>
                    <div class="col-md-8" style=" display: flex;justify-content: center;align-items: center;">
                      <div class="form-group" style="width: 100%">
                        <label for="due" class="padding40 categoryTitle control-label">| รูปภาพประกอบหน้าปก
                          (ภาพการ์ตูน)</label>
                        <div class="padding40">
                          <div class="customFile rightBtn" data-display="right" data-label=" อัพโหลด">
                            <span class="selectedFile">อัพโหลดรูปภาพ .jpeg , .png </span>
                            <input type="file" name="vocab_photo" value="Profession" onchange="readURL(this);"/>
                            <input class="createInput form-control" name="vocab_photo_old" type="hidden" value="{{$vocabulary->vocab_photo}}">

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
                      <input class="createInput form-control" name="vocab_photoReal_old" type="hidden"
                             value="{{$vocabulary->vocab_photoReal}}">
                      <img id="real_image" src="/uploads/vocabularies/{{$vocabulary->category_id}}/{{$vocabulary->vocab_photoReal}}" alt="your image"/>
                    </div>
                  </div>
                  <div class="col-md-8" style=" display: flex;justify-content: center;align-items: center;">
                    <div class="form-group" style="width: 100%">
                      <label for="due" class="padding40 categoryTitle control-label">| รูปภาพประกอบ (ภาพจริง)</label>
                      <div class="padding40">
                        <div class="customFile rightBtn" data-display="right" data-label=" อัพโหลด">
                          <span class="selectedFile">อัพโหลดรูปภาพ .jpeg , .png </span>
                          <input type="file" name="vocab_photoReal" onchange="readImg(this);"/>
                          <input class="createInput form-control" name="vocab_photoReal_old" type="hidden" value="{{$vocabulary->vocab_photoReal}}">
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
                        <source src="/uploads/vocabularies/{{$vocabulary->category_id}}/{{$vocabulary->vocab_video}}" id="video_here">
                      </video>

                    </div>

                  </div>
                  <div class="col col-md-8" style=" display: flex;justify-content: center;align-items: center;">
                    <div class="form-group" style="width: 100%;">
                      <label for="due" class="padding40 categoryTitle control-label">| วิดีโอภาษามือ</label>
                      <div class="padding40">
                        <div class="customFile rightBtn" data-display="right" data-label="อัพโหลด">
                          <span class="selectedFile">อัพโหลดวีดีโอ </span>
                          <input type="file" name="vocab_video" value="Profession" class="file_multi_video" accept="video/*" />
                          <input class="createInput form-control" name="vocab_video_old" type="hidden"
                                 value="{{$vocabulary->vocab_video}}">

                        </div>
                      </div>
                    </div>
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
              <div class="col-md-4 offset-2">
                <button type="submit" class="btn btn-createCate"><i class="fas fa-plus-circle"></i> แก้ไข</button>
              </div>
              <div class="col-md-3">
                <a class="btn btn-teachBack" href="/admin/categories/{{$vocabulary->category_id}}"><i
                    class="fas fa-times-circle"></i> ยกเลิก</a>
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


  <script !src="">

    var word = document.getElementById('fname').value;
    var sign = document.getElementById('icard');
    console.log(word);
    console.log(sign);
    sign.innerHTML = word;

  </script>





@endsection
