@extends('layouts.appstudent')
@section('content')

  <style>
    header {
      display: none;
    }
    .function {
       padding-top: 0px;
    }
    .functitle{
      height: 100vh;
    }
  </style>

  <div class="function">
    <div class="container">
      <div class="row">
        <div class="functitle col col-md-12">
          <div class="1">
            <div class="row" style="padding-top: 50px">
              <div class="col-md-6">
                <div class="videoShow col-md-8">
                   <video id="my-video" class="video-js" controls preload="auto" width="675" height="858px" data-setup="{}">
                      <source src="/uploads/vocabularies/{{$vocabulary->category_id}}/{{$vocabulary->vocab_video}}" type='video/mp4'>
                    </video>
                </div>
              </div>
              <div class="col-md-6" style="padding: 15px">
                <div class="cardImg box-shadow">
                  <div class="text-center">
                    <div class="wordPhoto">
                      <div class="text-center">
                        <img src="/uploads/vocabularies/{{$vocabulary->category_id}}/{{$vocabulary->vocab_photoReal}}" class="card-img-top" alt="">
                      </div>
                    </div>
                    <div class="cardWord">
                      <h4>{{$vocabulary->vocab_word}}</h4>
                    </div>
                  </div>
                </div>
                  <div class="showTextWord">
                    <h2 class="signLang">{{$vocabulary->vocab_word}}</h2>
                  </div>
                </div>

              </div>
            </div>
          <div class="return">
            <div class="col-md-12">
              <div class="text-center">
                <a href="/student/{{$vocabulary->category_id}}">
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
