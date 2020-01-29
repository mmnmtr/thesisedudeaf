@extends('layouts.appstudent')
@section('content')
  <div class="function">
    <div class="container">
      <form action="/sentences/play" method="post" >
        {{ csrf_field() }}
        <div class="row">
          <div class="functitle col col-md-12">
            <div class="row">
              <div class="categories_list_padding" style="margin-top: 195px;">
                <div class="col-md-12 ">
                  <div class="row">

                    <div class="sentence col-md-4">
                      <img class="tape" src="/../img/tape_yellow.png" alt="">
                      <div class="sentenceTitle1">
                        <h2>ประธาน</h2>
                      </div>
                      <div class="fieldSpace">
                        <div id="textfield"></div>
                        <input type="button" value="{{$testvocab->subject}}" class="subjectField">
                        <input type="hidden" value="{{$testvocab->subject_id}}" class="subjectField">
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
                          <input type="button" value="{{$testvocab->verb}}" class="verbField">
                          <input type="hidden" value="{{$testvocab->verb_id}}" class="verbField">
                          {{--                            <button class="verbField">{{$testvocab->verb}}</button>--}}
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
                        <input type="button" value="{{$testvocab->object}}" class="objField">
                        <input type="hidden" value="{{$testvocab->object_id}}" class="objField">
                      </div>
                    </div>
                  </div>
                </div>
              </div>


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

            </div>
          </div>
        </div>

      </form>
    </div>
  </div>







@endsection
