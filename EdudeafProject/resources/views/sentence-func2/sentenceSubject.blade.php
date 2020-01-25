@extends('layouts.appstudent')
@section('content')
  <div class="function" xmlns="http://www.w3.org/1999/html">
    <div class="container">
      <form action="/sentences/subject" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="functitle col col-md-12">
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
                        <input type="text" id="theinput" value="{{{ $testvocab->subject or '' }}}" class="subjectField"
                               id="taskTitle" name="subject">
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
                          <input class="verbField">
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
                        <input class="objField">
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @foreach($vocabularies as $vocabulary)
          <input type="button" class="button" value="{{$vocabulary->vocab_word}}"/>
        @endforeach
        <div class="return">
          <div class="col-md-12">
            <div class="text-center">


              <a href="/student/home">
                <button class="btn btn-Stdback"><h2><i class="fas fa-redo-alt"></i> ย้อนกลับ</h2></button>
              </a>
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <button type="submit" class="btn btn-primary">ต่อไป</button>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
@endsection
