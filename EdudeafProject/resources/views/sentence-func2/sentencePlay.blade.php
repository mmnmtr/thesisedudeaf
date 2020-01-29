@extends('layouts.appstudent')
@section('content')


  <div class="function">
    <div class="container">
        <div class="row">
          <div class="functitle col col-md-12">
            <div class="row">
              @foreach($testvocabs as $testvocab)



                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <video id="my-video" class="video-js" controls preload="auto" width="100%" height="auto" data-setup="{}">
                        <source src="/uploads/vocabularies/{{$testvocab->subject_cid}}/{{$testvocab->subject_v}}" type='video/mp4'>
                      </video>
                    </div>
                    <div class="carousel-item">
                      <video id="my-video" class="video-js" controls preload="auto" width="100%" height="auto" data-setup="{}">
                        <source src="/uploads/vocabularies/{{$testvocab->verb_cid}}/{{$testvocab->verb_v}}" type='video/mp4'>
                      </video>
                    </div>
                    <div class="carousel-item">
                      <video id="my-video" class="video-js" controls preload="auto" width="100%" height="auto" data-setup="{}">
                        <source src="/uploads/vocabularies/{{$testvocab->obj_cid}}/{{$testvocab->obj_v}}" type='video/mp4'>
                      </video>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>


                <div class="main" onclick="start();">
                  <video loop="" class="video back">
                    <source src="/uploads/vocabularies/{{$testvocab->verb_cid}}/{{$testvocab->verb_v}}" type='video/mp4'>
                  </video>
                  <div class="top-container">
                    <video loop="" class="video top">
                      <source src="/uploads/vocabularies/{{$testvocab->verb_cid}}/{{$testvocab->verb_v}}" type='video/mp4'>
                    </video>
                    <div class="overlay"></div>
                  </div>
                  <div class="play">▶</div>
                </div>

{{--              <div class="categories_list_padding" style="margin-top: 195px;">--}}
{{--                <div class="col-md-12 ">--}}
{{--                  <div class="row">--}}

{{--                    <div class="sentence col-md-4">--}}
{{--                      <img class="tape" src="/../img/tape_yellow.png" alt="">--}}
{{--                      <div class="sentenceTitle1">--}}
{{--                        <h2>ประธาน</h2>--}}
{{--                        <p>{{$testvocab->subject}}</p>--}}
{{--                      </div>--}}
{{--                      <div class="fieldSpace">--}}
{{--                        <div id="textfield"></div>--}}

{{--                      </div>--}}
{{--                      <i class="fas fa-plus"></i>--}}
{{--                    </div>--}}

{{--                    <div class="sentence col-md-4">--}}
{{--                      <div class="text-center">--}}
{{--                        <img class="tapeBlue" src="/../img/tape_blue.png" alt="">--}}
{{--                        <div class="sentenceTitle2">--}}
{{--                          <h2>กริยา</h2>--}}
{{--                          <p>{{$testvocab->verb}}</p>--}}
{{--                        </div>--}}
{{--                        <div class="videoShow col-md-8">--}}
{{--                          <video id="my-video" class="video-js" controls preload="auto" width="100%" height="auto" data-setup="{}">--}}
{{--                            <source src="/uploads/vocabularies/{{$testvocab->verb_cid}}/{{$testvocab->verb_v}}" type='video/mp4'>--}}
{{--                          </video>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <i class="fas fa-plus" style="margin-right: -55px;"></i>--}}
{{--                    </div>--}}

{{--                    <div class="sentence col-md-4">--}}
{{--                      <div class="text-center">--}}
{{--                        <img class="tapeBlue" src="/../img/tape_blue.png" alt="">--}}
{{--                        <div class="sentenceTitle2">--}}
{{--                          <h2>กริยา</h2>--}}
{{--                          <p>{{$testvocab->object}}</p>--}}
{{--                        </div>--}}

{{--                        <div class="videoShow col-md-8">--}}
{{--                          --}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <i class="fas fa-plus" style="margin-right: -55px;"></i>--}}
{{--                    </div>--}}

{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}


              <div class="returnToPlay" style="padding-top: 94px;width: 100%">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-3 offset-md-3">
                      <a href="/student/home" class="btn btn-StdbackSen">
                        <h2><i class="fas fa-arrow-left"></i> ย้อนกลับ</h2>
                      </a>
                    </div>
                    <div class="col-md-3">
                      <button type="submit" class="btn btn-play"><h2>เล่นวิดีโอ <i class="fas fa-play"></i> </h2></button>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
    </div>
  </div>









@endsection
