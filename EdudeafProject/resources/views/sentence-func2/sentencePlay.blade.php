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
    .footer img {
      display: none;
    }

  </style>
  <script !src="">

  </script>

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
                <div class="categories_list_padding" style="margin-top: 155px;">
                  <div class="col-md-12 ">
                    <div class="row">

                      <span id="myVid"></span>
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
                        <button class="btn btn-Stdback"><h2><i class="fas fa-arrow-left"></i> เริ่มเล่นใหม่</h2></button>
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
