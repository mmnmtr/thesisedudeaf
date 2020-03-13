@extends('layouts.appstudent')
@section('content')
  <style>
    .footer img {
      display: none;
    }
    .functitleSentence {
      border-left: solid 20px #f15f61;
      border-right: solid 20px #f15f61;
    }
    /*.btn-StdbackSen {*/
    /*  display: none;*/
    /*}*/
  </style>
  <form action="/sentences/subject" method="post">
    {{ csrf_field() }}
  <div class="function">
    <div class="container">

        <div class="row">
          <div class="functitleSentence col col-md-12">
            <div class="row">
              <div class="categories_list_padding" style="margin-top: 110px;">
                <div class="col-md-12 ">
                  <div class="row">
                    <div class="sentence col-md-4">
                        <img class="tape" src="/../img/tape_yellow.png" alt="">
                      <div class="sentenceTitle1">
                        <h2>ประธาน</h2>
                      </div>
                      <div class="fieldSpace">
                        <div id="textfield"></div>
                        <input type="text" id="theinput" value="{{{ $testvocab->subject or '' }}}" class="subjectField"  name="subject">
                        <input type="hidden" id="theid" value="{{{ $testvocab->subject_id or '' }}}" class="subjectField"  name="subject_id">
                      </div>
                      <i class="fas fa-plus"></i>
                    </div>
                    <div class="sentence col-md-4">
                      <div class="text-center">
                        <img class="tapeBlue" src="/../img/tape_blue.png" alt="">
                        <div class="sentenceTitle2">
                          <h2>กริยา</h2>
                        </div>
                        <div class="fieldSpace">
                          <div id="textfield"></div>
                          <input class="verbGrayField">
                        </div>
                      </div>
                      <i class="fas fa-plus" style="margin-right: -55px;"></i>
                    </div>
                    <div class="sentence col-md-4">
                      <img class="tapeGreen" src="/../img/tape_green.png" alt="">
                      <div class="sentenceTitle3">
                        <h2>กรรม</h2>
                      </div>
                      <div class="fieldSpace">
                        <div id="textfield" style="padding-top: 25px;"></div>
                        <input class="objGrayField">
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


  <div class="">
    <div class="actionBtn">
      <div class="row justify-content-between">
        <div class="col-md-5 offset-md-1" style="margin-left: 300px">
{{--          <a href="/student/home" class="btn btn-StdbackSen">--}}
{{--            <h2><i class="fas fa-arrow-left"></i> ย้อนกลับ</h2>--}}
{{--          </a>--}}
        </div>
        <div class="col-4">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <button type="submit" class="btn btn-sentenceNext"><h2>ถัดไป <i class="fas fa-arrow-right"></i></h2></button>
        </div>
      </div>
    </div>
  </div>

  <div class="returnSentence">
    <div class="container">
      <div class="vocapPad">
        <div class="text-center">
          <div class="filtering">

            @foreach($vocabularies as $vocabulary)

                <div class="col-md-12" style="padding-bottom:20px; ">
                  <div class="mb-2 box-shadow">
                    <div class="text-center">

                      <input type="button" class="button btn-vocabS" value="{{$vocabulary->vocab_word}}" data-id="{{$vocabulary->id}}"/>
                    </div>
                  </div>
                </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
   </div>
  </form>
@endsection
