@extends('layouts.appstudent')
@section('content')

  <style>
    @media (min-width: 1200px) {
      .container {
        max-width: 1640px;
      }
    }
    .categories_list_padding {
      padding: 0px 0px;
    }
    img.tapeGreen {
      padding-left: 125px;
    }
    input.subjectField,  input.verbField,   input.objField {
      width: 200px;
      height: 160px;
      float: none;
    }
    .return{
      padding-top: 90px;
    }
  </style>


  <div class="function">
    <div class="container">
      <div class="row">
        @foreach($testvocabs as $testvocab)
        <div class="functitleRed col col-md-12">
          <div class="1" style="padding-top: 105px">
            <div class="row">
              <div class="col-md-5">
                <div class="videoShow col-md-12">
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
                </div>
              </div>
              <div class="col-md-7" style="padding: 15px">
                <div class="categories_list_padding" style="margin-top: 155px;">
                  <div class="col-md-12 ">
                    <div class="row">

                      <div class="sentence col-md-4">
                        <img class="tape" src="/../img/tape_yellow.png" alt="">
                        <div class="sentenceTitle1">
                          <h2>ประธาน</h2>
                        </div>
                        <div class="fieldSpace">
                          <div id="textfield"></div>
                          <div class="text-center">
                            <input type="button" value="{{$testvocab->subject}}" class="subjectField">
                          </div>
                        </div>
                      </div>

                      <div class="sentence col-md-4">
                        <div class="text-center">
                          <img class="tapeBlue" src="/../img/tape_blue.png" alt="">
                          <div class="sentenceTitle2">
                            <h2>กริยา</h2>
                          </div>
                          <div class="fieldSpace">
                            <div id="textfield"></div>
                            <div class="text-center">
                              <input type="button" value="{{$testvocab->verb}}" class="verbField">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="sentence col-md-4">
                        <img class="tapeGreen" src="/../img/tape_green.png" alt="">
                        <div class="sentenceTitle3">
                          <h2>กรรม</h2>
                        </div>
                        <div class="fieldSpace">
                          <div id="textfield" style="padding-top: 25px;"></div>
                          <div class="text-center">
                            <input type="button" value="{{$testvocab->object}}" class="objField">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="return col-md-12">
                    <div class="text-center">
                      <a href="/sentences/subject">
                        <button class="btn btn-Stdback"><h2><i class="fas fa-redo-alt"></i> ย้อนกลับ</h2></button>
                      </a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>












@endsection
