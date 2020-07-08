@extends('layouts.appstudentSbject')
@section('content')
  <style>
    .footer img {
      display: none;
    }
  </style>

  <form action="/sentences/subject" method="post">
    {{ csrf_field() }}
    <div class="function">
      <div class="container">

        <div class="row">
          <div class="functitleSentence col col-md-12">
            <div class="row">
              <div class="categories_list_padding" style="margin-top: 115px;">
                <div class="col-md-12 ">
                  <div class="row">
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
                          <div class="subjectField">
                            <h1 id="showSubject"></h1>
                          </div>
                          <input type="hidden" id="theinput" value="{{{ $testvocab->subject or '' }}}"
                                 class="subjectField" name="subject">
                          <input type="hidden" id="theid" value="{{{ $testvocab->subject_id or '' }}}"
                                 class="subjectField" name="subject_id">
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
                            <div class="verbGrayField"></div>
                          </div>
                        </div>
                        <i class="fas fa-plus"></i>
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
                          <div class="objGrayField"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="returnSentence">
      <div class="container">

        <div class="actionBtn">
          <div class="row">
{{--            <div class="col-md-6">--}}
{{--              <a href="/student/home" class="btn btn-StdbackSen">--}}
{{--                <h2><i class="fas fa-arrow-left"></i> ย้อนกลับ</h2>--}}
{{--              </a>--}}
{{--            </div>--}}
            <div class="col-md-3 offset-md-9">
              {{--            @if ($errors->any())--}}
              {{--              <div class="alert alert-danger">--}}
              {{--                <ul>--}}
              {{--                  @foreach ($errors->all() as $error)--}}
              {{--                    <li>{{ $error }}</li>--}}
              {{--                  @endforeach--}}
              {{--                </ul>--}}
              {{--              </div>--}}
              {{--            @endif--}}
              <button type="submit" class="btn btn-sentenceNext"><h2> กริยา <i class="fas fa-arrow-right"></i></h2>
              </button>
            </div>
          </div>
        </div>

        <h2 class="sentenceTitle">เลือกคำศัพท์ประธาน</h2>
        {{--        <div class="vocapPad">--}}
        {{--          <div class="text-center">--}}
        {{--            <div class="filtering">--}}


        <div class="row">

          @foreach($vocabularies as $key =>  $vocabulary)

            <div id="addCol{{$key+1}}" class="col-md-2" style="padding-bottom:20px; ">
              <div class="mb-2 box-shadow">
                <div class="text-center">
                  <input type="hidden" id="num{{$key+1}}" value="{{$key+1}}">
                  <input type="button" class="button btn-vocabS" value="{{$vocabulary->vocab_word}}"
                         data-id="{{$vocabulary->id}}"/>
                </div>
              </div>
            </div>
          @endforeach

          {{--            </div>--}}
          {{--          </div>--}}
          {{--        </div>--}}

        </div>
      </div>
    </div>
  </form>

  <script !src="">
    for (var i = 1; i >= 1; i++) {
      var classL = document.getElementById("addCol" + i);
      var num = document.getElementById("num" + i).value;
      var mod = num % 5;
      console.log(num);
      console.log(mod);
      if (mod == 1) {
        classL.classList.add("offset-1");
        // console.log(num+'นี่จ้า');
      }
    }
  </script>
  <script !src="">
    var showText = document.getElementById("theinput");
    var textVal = showText.value;
    var showSubject = document.getElementById("showSubject");
    showSubject.innerHTML = textVal;
  </script>
@endsection
