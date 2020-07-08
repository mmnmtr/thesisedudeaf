@extends('layouts.appstudentSbject')
@section('content')

  <style>
    @media (min-width: 992px) {
      .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        max-width: 1140px;
      }
    }
    @media (min-width: 1200px) {
      .container {
        max-width: 1340px;
      }
    }
    .videoShow video {
      margin-left: 24px;
      margin-top: 60px;
    }
    .categories_list_padding {
      padding: 0px 0px;
    }
    .fieldSpace input {
      height: 185px;
      font-size: 35px;
      color: #52341c;
      padding: 50px 0;
    }
    .sentence i {
      margin-top: -105px;
    }
    .return{
      padding-top: 60px;
    }
    .btn-Stdback {
      border-radius: 60px;
      font-size: 30px;
    }
    .btn-Stdback h2 {
      font-size: 36px;
    }
    .footer img {
      display: none;
    }

  </style>


  <div class="function">
    <div class="container">
      <div class="row">
        @foreach($testvocabs as $testvocab)
        <div class="functitleRed col col-md-12">
          <div class="1" style="padding-top: 105px">

{{--            <input id="file" type="file" multiple />--}}

{{--            <button onclick="play()">play</button>--}}


{{--            <video width="100%" height="auto">--}}
{{--              <source src="/uploads/vocabularies/{{$testvocab->subject_cid}}/{{$testvocab->subject_v}}" type='video/mp4'>--}}
{{--            </video>--}}
{{--            <video width="100%" height="auto">--}}
{{--              <source src="/uploads/vocabularies/{{$testvocab->verb_cid}}/{{$testvocab->verb_v}}" type='video/mp4'>--}}
{{--            </video>--}}
{{--            <video width="100%" height="auto">--}}
{{--              <source src="/uploads/vocabularies/{{$testvocab->obj_cid}}/{{$testvocab->obj_v}}" type='video/mp4'>--}}
{{--            </video>--}}

            <div class="row">
              <div class="col-md-5">
                <div class="videoShow col-md-12">

                  <video id="video" src="/uploads/vocabularies/{{$testvocab->subject_cid}}/{{$testvocab->subject_v}}" autoplay controls  width="100%" height="auto" ></video>
                  <script>
                    var video = document.getElementById("video");
                    var index = 0;
                    var videoPath = [
                        '/uploads/vocabularies/{{$testvocab->subject_cid}}/{{$testvocab->subject_v}}',
                        '/uploads/vocabularies/{{$testvocab->verb_cid}}/{{$testvocab->verb_v}}',
                        '/uploads/vocabularies/{{$testvocab->obj_cid}}/{{$testvocab->obj_v}}']
                    video.onended = function () {
                      index++;
                      if (index <= videoPath.length) {
                        video.src = videoPath[index]
                        video.load()
                      }
                      if( index == 3){
                        index = 0;
                        if (index <= videoPath.length) {
                          video.src = videoPath[index]
                          video.load()
                        }
                      }
                      video.addEventListener('ended', play, false)
                    };
                  </script>
                </div>
              </div>
              <div class="col-md-7" style="padding: 15px">
                <div class="categories_list_padding" style="margin-top: 60px;">
                  <h2 class="sentenceTitle">ประโยคที่นักเรียนแต่ง</h2>
                  <div class="col-md-12 "  style="padding-top: 50px;">
                    <div class="row">

                      <span id="myVid"></span>
                      <div class="col-md-4">
                      <div class="sentence col-md-12">
                        <center>
                          <img class="tape" src="/../img/tape_yellow.png" alt="">
                          <div class="sentenceTitle1">
                            <h2>ประธาน</h2>
                          </div>
                        </center>
                        <div class="fieldSpace">
                          <div id="textfield"></div>
                          <div class="text-center">
                            <input type="button" value="{{$testvocab->subject}}" class="subjectField">
                          </div>
                        </div>
                        <i class="fas fa-plus"></i>
                      </div>
                      </div>

                      <div class="col-md-4">
                      <div class="sentence col-md-12">
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
                        <i class="fas fa-plus" ></i>
                      </div>
                      </div>

                      <div class="col-md-4">
                      <div class="sentence col-md-12">
                        <center>
                          <img class="tapeGreen" src="/../img/tape_green.png" alt="">
                          <div class="sentenceTitle3">
                            <h2>กรรม</h2>
                          </div>
                        </center>
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
                </div>
                  <div class="return col-md-8 offset-md-2">
                    <div class="text-center">
                      <a href="/sentences/subject">
                        <button class="btn btn-Stdback" style="width:100%; height: 105px;"><h2><i class="fas fa-sync-alt"></i> เริ่มแต่งประโยคใหม่</h2></button>
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
