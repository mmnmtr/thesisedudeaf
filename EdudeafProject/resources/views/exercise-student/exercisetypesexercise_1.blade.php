@extends('layouts.appstudentExercise')
@section('content')
  <style>

    .excersiceType {
      width: 100%;
      height: auto;
    }

    .categories_list_padding {
      padding: 0px 60px !important;
      padding-top: 60px !important;
    }

    button:focus {
      outline: none;
    }

    .footer img {
      display: none;
    }

    a:not([href]):not([tabindex]) {
      color: #ffffff;
    }

    .categories_list_padding {
      padding: 0px 80px;
      padding-top: 60px;
    }

    /*.excersiceType {*/
    /*  background: #5e5d5d;*/
    /*}*/

    .choice {
      padding-bottom: 50px;
    }


    .number {
      width: 80px;
      height: 80px;
      box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.16);
      border: solid 10px #54beee;
      background-color: #ffffff;
      border-radius: 50px;
      font-family: 'nattanan_tsl_fingerspellingRg';
      color: #5a5a5a;
      text-align: center;
      position: relative;
      margin-top: 50px;

    }

    .number h2 {
      font-size: 60px;
      position: relative;
      padding: 10px;
      margin-top: -20px;
    }

    .radio-tile-group {
      display: -webkit-box;
      display: flex;
      flex-wrap: wrap;
      -webkit-box-pack: center;
      justify-content: center;
    }

    button.opChoice1 {
      position: relative;
      height: 140px;
      width: 100%;
      margin: 0.5rem;
      border-radius: 20px;
      border: solid 10px #54beee;
      background-color: #ffffff;
      font-size: 48px;
      font-weight: bold;
      color: #313131;

    }

    /*red*/
    .radio-tile-groupR {
      display: -webkit-box;
      display: flex;
      flex-wrap: wrap;
      -webkit-box-pack: center;
      justify-content: center;
    }

    button.opChoice2 {
      position: relative;
      height: 140px;
      width: 100%;
      margin: 0.5rem;
      border-radius: 20px;
      border: solid 10px #ef5f61;
      background-color: #ffffff;
      font-size: 48px;
      font-weight: bold;
      color: #313131;
    }

    .radio-tile-groupR .input-containerR .radio-buttonR {
      opacity: 0;
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      margin: 0;
      cursor: pointer;
    }

    .radio-tile-groupR .input-containerR .radio-tileR {
      display: -webkit-box;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      flex-direction: column;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      width: 100%;
      height: 100%;
      /*border: 10px solid #079ad9;*/
      /*border-radius: 20px;*/
      padding: 1rem;
      -webkit-transition: -webkit-transform 300ms ease;
      transition: -webkit-transform 300ms ease;
      transition: transform 300ms ease;
      transition: transform 300ms ease, -webkit-transform 300ms ease;
    }

    .radio-tile-groupR .input-containerR .radio-tile-labelR {
      text-align: center;
      font-size: 0.75rem;
      font-family: 'Kodchasan';
      font-size: 48px;
      font-weight: bold;
      letter-spacing: normal;
      text-align: center;
      color: #313131;
    }

    .radio-tile-groupR .input-containerR .radio-buttonR:checked + .radio-tileR {
      background-color: #FDEDEF;
      border-radius: 10px;
      color: #313131;
      -webkit-transform: scale(1.0, 1.0);
      transform: scale(1.0, 1.0);
    }

    .radio-tile-groupR .input-containerR .radio-buttonR:checked + .radio-tileR .radio-tile-labelR {
      color: #313131;
    }

    .numberR {
      width: 80px;
      height: 80px;
      box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.16);
      border: solid 10px #3EBBAE;
      background-color: #ffffff;
      border-radius: 50px;
      font-family: 'nattanan_tsl_fingerspellingRg';
      color: #5a5a5a;
      text-align: center;
      position: relative;
      margin-top: 60px;
    }

    .numberR h2 {
      font-size: 60px;
      position: relative;
      padding: 10px;
      margin-top: -20px;
    }

    /*yellow*/

    button.opChoice3 {
      position: relative;
      height: 140px;
      width: 100%;
      margin: 0.5rem;
      border-radius: 20px;
      border: solid 10px #f6ce4f;
      background-color: #ffffff;
      font-size: 48px;
      font-weight: bold;
      color: #313131;
    }

    .numberY {
      width: 80px;
      height: 80px;
      box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.16);
      border: solid 10px #f6ce4f;
      background-color: #ffffff;
      border-radius: 50px;
      font-family: 'nattanan_tsl_fingerspellingRg';
      color: #5a5a5a;
      text-align: center;
      position: relative;
      margin-top: 60px;
    }

    .numberY h2 {
      font-size: 60px;
      position: relative;
      padding: 10px;
      margin-top: -20px;
    }


    .quiz_wrapper {
      width: 100%;
      /*padding: 30px;*/
    }

    .quiz_wrapper .question {
      padding: 15px;
      background-color: #673ab7;
      border-radius: 8px;
      color: #ffffff;
      font-size: 20px;
      float: left;
      width: 100%;

    }

    .quiz_wrapper .options {
      float: left;
      width: 100%;
    }

    .quiz_wrapper .options ul {
      list-style: none;
      padding: 0px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .quiz_wrapper .options ul li#op1 {
      display: inline-block;
      width: 100%;
      height: 100px;
      padding: 15px;
      margin-top: 40px;
      cursor: pointer;
      outline: none;
      text-align: center;
      border-radius: 20px;
      border: solid 10px #54beee;
      font-size: 32px;
      font-weight: bold;
      color: #313131;
    }

    .quiz_wrapper .options ul li#op2 {
      display: inline-block;
      /*background-color: #ffffff;*/
      width: 100%;
      height: 100px;
      padding: 15px;
      margin-top: 40px;
      cursor: pointer;
      outline: none;
      text-align: center;
      border-radius: 20px;
      border: solid 10px #3EBBAE;
      font-size: 32px;
      font-weight: bold;
      color: #313131;
    }

    .quiz_wrapper .options ul li#op3 {
      display: inline-block;
      /*background-color: #ffffff;*/
      width: 100%;
      height: 100px;
      padding: 15px;
      margin-top: 40px;
      cursor: pointer;
      outline: none;
      text-align: center;
      border-radius: 20px;
      border: solid 10px #f6ce4f;
      font-size: 32px;
      font-weight: bold;
      color: #313131;
    }

    .quiz_wrapper .options ul li:active {
      box-shadow: 0px 3px 0px transparent;

    }

    .correctA1 {
      width: 50px;
      height: 50px;
      color: #ffffff;
      background-color: #3ebbae;
      border-radius: 10px;
      position: absolute;
      right: -65px;
      top: 65px;
    }

    .wrongA1 {
      width: 50px;
      height: 50px;
      color: #ffffff;
      background-color: #ef5f61;
      border-radius: 10px;
      position: absolute;
      right: -65px;
      top: 65px;
    }

    .correctA2 {
      width: 50px;
      height: 50px;
      color: #ffffff;
      background-color: #3ebbae;
      border-radius: 10px;
      position: absolute;
      right: -65px;
      top: 205px;
    }

    .wrongA2 {
      width: 50px;
      height: 50px;
      color: #ffffff;
      background-color: #ef5f61;
      border-radius: 10px;
      position: absolute;
      right: -65px;
      top: 205px;
    }

    .correctA3 {
      width: 50px;
      height: 50px;
      color: #ffffff;
      background-color: #3ebbae;
      border-radius: 10px;
      position: absolute;
      right: -65px;
      top: 345px;
    }

    .wrongA3 {
      width: 50px;
      height: 50px;
      color: #ffffff;
      background-color: #ef5f61;
      border-radius: 10px;
      position: absolute;
      right: -65px;
      top: 345px;
    }

    /*correct Op1*/
    .correctOp1 {
      background-color: #e0f5ff;
    }

    /*correct Op2*/
    .correctOp2 {
      background-color: #E2EFED;
    }

    /*correct Op3*/
    .correctOp3 {
      background-color: #ffea9d;
    }

    .quiz_wrapper .options ul li.wrong {
      background-color: #FCCBD1;
      /*box-shadow: 0px 3px 0px #cb0b0b;*/
    }

    .quiz_wrapper .score {
      float: left;
      width: 100%;
      padding: 25px 0px;
    }

    .quiz_wrapper .score .next {
      width: 40%;
      float: left;
    }


    .quiz_wrapper .score .next button:active {
      box-shadow: 0px 3px 0px transparent;
    }

    .quiz_wrapper .score .score-card {
      width: 60%;
      float: left;
    }


    /*  show res*/
    .btn-score {
      font-size: 30px;
      font-weight: bold;
      text-align: center;
      color: #ffffff;
      cursor: pointer;
      outline: none;
      width: 100%;
      height: 90px;
      border-radius: 76px;
      box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.16);
      border: solid 7px #ffffff;
      background-color: #54beee;
      margin-top: 70px;
    }




  </style>

  <div class="function">
    <div class="container">
      <div class="row">
        <div class="functitle col col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center" id="qTitle">
                เลือกคำศัพท์ให้ตรงกับภาพ
              </h1>
              <div id="scoreShow">
                <div class="score-card">
                  <span id="scoreCard">0</span>
                </div>
              </div>
            </div>

            <div class="categories_list_paddingTop0">
              <div class="excersiceType">
                <div class="col-mg-12">
                  <div class="row">
                    <div class="col-md-5">
                      <center>
                        <div>
                          <div class="exerciseImg" id="questionBox">
                          </div>
                        </div>
                      </center>
                    </div>
                    <div class="col-md-6" style="padding-left: 70px;padding-top: 30px">
                      <div class="col-md-12">
                        <div class="choice">
                          <div class="quiz_wrapper">

                            <div class="options">
                              <ul id="ul">
                                <li id="op1" onclick="button(this)"></li>
                                <li id="op2" onclick="button(this)"></li>
                                <li id="op3" onclick="button(this)"></li>
                              </ul>
                            </div>
                            <div class="score"
                                 style="float:right;position: relative;margin-top: -65px;margin-right: -125px;">
                              <div class="score-card">
                                <span id="scoreCard2"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="numList" class="col-md-2" style="position: relative;margin-left: -430px;padding-top: 30px">
                      <div class="row">
                        <div class="number">
                          <h2>1</h2>
                        </div>
                      </div>
                      <div class="row">
                        <div class="numberR">
                          <h2>2</h2>
                        </div>
                      </div>
                      <div class="row">
                        <div class="numberY">
                          <h2>3</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="showResult">
                  <form action="/exercises/scoreT1" method="post">
                    {{ csrf_field() }}
                    <div class="categories_list_padding">
                      <div class="row">
                        <div class="col-md-6">
                          <center>
                            @foreach($exercises as $exercise)
                              <h3 class="exerciseTypeTitle">{{$exercise->exerciseType_name}}</h3>
                              <h2 class="exerciseTitle">{{$exercise->exercise_name}}</h2>
                            @endforeach
                            @foreach($users as $user)
                              <h2 class="stdNumber">เลขที่ &ensp;{{$user->studentNumber}}</h2>
                              <hr class="line">
                              <h1 class="stdNickname">{{$user->nickname}}</h1>
                            @endforeach
                          </center>
                        </div>


                        <div class="col-md-5 offset-1">
                          <center>
                            <h2 class="resultTitle">คะแนนที่ได้</h2>
                            <h3 class="pointTitle" id="pointTitle">ds</h3>
                            <div class="scoreBgStar" id="scoreBgStar">
                              <input type="hidden" name="percentage" id="percentage">
                              <h3 class="result" id="scoreResult"></h3>
                            </div>
                            <input type="hidden" name="score" id="total">
                            <input type="hidden" name="exercise_id" value="{{$exercise->id}}">
                            <h3 class="resultTitle">คะแนน</h3>
                          </center>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="" style="position: relative;position: relative;margin-top: 25px;z-index: 1;">
                        <div class="col-md-6 offset-md-3">
                          <div class="text-center">
                            <button type="submit" class="btn btn-score">สำเร็จ &ensp; <i
                                class="fas fas fa-arrow-right"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
            <div class="categories_list_paddingTop0">
              <div class="col-md-12">
                <div class="return" style="position: relative;position: relative;margin-top: 100px;z-index: 1;">
                  <div class="col-md-6 offset-md-3">
                    <div class="text-center">
                      <button class="btn next" type="button" onclick="next()" id="button">ต่อไป &ensp;<i
                          class="fas fa-arrow-right"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <img class="blackBoard" src="/../img/blackboard.png" alt="">
    </div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>
  <script>
    var ul = document.getElementById('ul');
    var btn = document.getElementById('button');
    var scoreCard = document.getElementById('scoreCard');
    var scoreShow = document.getElementById('scoreShow');
    var scoreCard2 = document.getElementById('scoreCard2');
    var quizBox = document.getElementById('questionBox');
    var op1 = document.getElementById('op1');
    var op2 = document.getElementById('op2');
    var op3 = document.getElementById('op3');
    var numList = document.getElementById('numList');
    var showResult = document.getElementById('showResult');
    var qTitle = document.getElementById('qTitle');
    var scoreResult = document.getElementById('scoreResult');
    var percentage = document.getElementById('percentage');


    var app = {
      questions: [
          @if(count($exercisechoices) > 0)
          @foreach($exercisechoices as $exercisechoice)
        {
          q: '<img src="/uploads/exercise_img/{{$exercisechoice->exercise_img}}" alt="">',
          options: ['{{$exercisechoice->choice_title1}}',
            '{{$exercisechoice->choice_title2}}',
            '{{$exercisechoice->choice_title3}}']
          , answer: '{{$exercisechoice->answer}}'
        },
        @endforeach
        @else
        @endif
      ],
      index: 0,

      load: function () {
        if (this.index <= this.questions.length - 1) {
          quizBox.innerHTML = this.index + 1 + ". " + this.questions[this.index].q;
          quizBox.innerHTML = this.questions[this.index].q;
          op1.innerHTML = this.questions[this.index].options[0];
          op2.innerHTML = this.questions[this.index].options[1];
          op3.innerHTML = this.questions[this.index].options[2];
          this.scoreCard();
          this.scoreCard2();
          scoreCard2.style.display = "none";
          showResult.style.display = "none";
          console.log(this.index);
          var selected = parseInt(this.index) + 1;
          var ex_id = '{{$exercise->id}}';
          var user_id = '{{Auth::id()}}';
          request = $.ajax({
            url: "/user-insert-choice",
            type: "post",
            data: {"_token": "{{ csrf_token() }}", selected: selected, ex_id: ex_id, user_id: user_id}
          });

          // Callback handler that will be called on success
          request.done(function (response, textStatus, jqXHR) {
            // Log a message to the console
            console.log("Hooray, it worked!");
          });

          // Callback handler that will be called on failure
          request.fail(function (jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            console.error(
              "The following error occurred: " +
              textStatus, errorThrown
            );
          });
        } else {
          quizBox.style.display = "none";
          op1.style.display = "none";
          op2.style.display = "none";
          op3.style.display = "none";
          btn.style.display = "none";
          numList.style.display = "none";
          scoreCard2.style.display = "none";
          // scoreCard.style.display = "none";
          scoreShow.style.display = "none";
          showResult.style.display = "block";
          qTitle.style.display = "none";
          this.scoreResult();

        }
      },
      next: function () {
        this.index++;
        this.load();
      },
      check: function (ele) {
        var id = ele.id.split('');
        var op1OldName = $('#op1').html();
        var op2OldName = $('#op2').html();
        var op3OldName = $('#op3').html();
        if (id[id.length - 1] == this.questions[this.index].answer) {
          this.score++;

          var oldInnerHtml = ele.innerHTML
          console.log(ele.id);

          if (ele.id == 'op1') {
            ele.className = "correctOp1";

            $('#op1').html("<div>" + op1OldName + "</div><div class='correctA1'><i class=\"fas fa-check\"></i></div>");
            $('#op2').html("<div>" + op2OldName + "</div><div class='wrongA2'><i class=\"fas fa-times\"></i></div>");
            $('#op3').html("<div>" + op3OldName + "</div><div class='wrongA3''><i class=\"fas fa-times\"></i></div>");
          }
          if (ele.id == 'op2') {
            ele.className = "correctOp2";

            $('#op1').html("<div>" + op1OldName + "</div><div class='wrongA1'><i class=\"fas fa-times\"></i></div>");
            $('#op2').html("<div>" + op2OldName + "</div><div class='correctA2'><i class=\"fas fa-check\"></i></div>");
            $('#op3').html("<div>" + op3OldName + "</div><div class='wrongA3''><i class=\"fas fa-times\"></i></div>");
          }
          if (ele.id == 'op3') {
            ele.className = "correctOp3";

            $('#op1').html("<div>" + op1OldName + "</div><div class='wrongA1'><i class=\"fas fa-times\"></i></div>");
            $('#op2').html("<div>" + op2OldName + "</div><div class='wrongA2'><i class=\"fas fa-times\"></i></div>");
            $('#op3').html("<div>" + op3OldName + "</div><div class='correctA3'><i class=\"fas fa-check\"></i></div>");
          }
          this.scoreCard();
          this.scoreCard2();
          this.scoreResult();
        } else {
          var isAnswer = this.questions[this.index].answer;
          if (isAnswer == 1) {
            ele.className = "wrong";
            $('#op1').html("<div>" + op1OldName + "</div><div class='correctA1'><i class=\"fas fa-check\"></i></div>");
            $('#op2').html("<div>" + op2OldName + "</div><div class='wrongA2'><i class=\"fas fa-times\"></i></div>");
            $('#op3').html("<div>" + op3OldName + "</div><div class='wrongA3'><i class=\"fas fa-times\"></i></div>");
          }
          if (isAnswer == 2) {
            ele.className = "wrong";

            $('#op1').html("<div>" + op1OldName + "</div><div class='wrongA1'><i class=\"fas fa-times\"></i></div>");
            $('#op2').html("<div>" + op2OldName + "</div><div class='correctA2'><i class=\"fas fa-check\"></i></div>");
            $('#op3').html("<div>" + op3OldName + "</div><div class='wrongA3'><i class=\"fas fa-times\"></i></div>");
          }
          if (isAnswer == 3) {
            ele.className = "wrong";

            $('#op1').html("<div>" + op1OldName + "</div><div class='wrongA1'><i class=\"fas fa-times\"></i></div>");
            $('#op2').html("<div>" + op2OldName + "</div><div class='wrongA2'><i class=\"fas fa-times\"></i></div>");
            $('#op3').html("<div>" + op3OldName + "</div><div class='correctA3'><i class=\"fas fa-check\"></i></div>");
          }
        }
      },
      notClickAble: function () {
        for (let i = 0; i < ul.children.length; i++) {
          ul.children[i].style.pointerEvents = "none";
        }
      },

      clickAble: function () {
        for (let i = 0; i < ul.children.length; i++) {
          ul.children[i].style.pointerEvents = "auto";
          ul.children[i].className = ''

        }
      },
      score: 0,
      scoreCard: function () {
        var qNumber = this.index + 1;
        scoreCard.innerHTML = qNumber + "/" + this.questions.length;
      },
      scoreCard2: function () {
        scoreCard2.innerHTML = this.score + "/" + this.questions.length;
      },
      scoreResult: function () {
        scoreResult.innerHTML = this.score;
        document.getElementById('total').value = this.score;

        var percentage = (this.score / this.questions.length) * 100;
        document.getElementById('percentage').value = percentage;

        if (percentage >= 70) {
          document.getElementById("scoreBgStar").style.backgroundImage = "url(/img/great_point.gif)";
          document.getElementById("pointTitle").innerHTML = "ยอดเยี่ยม";
        } else if (percentage >= 40) {
          document.getElementById("scoreBgStar").style.backgroundImage = "url(/img/middle_point.gif)";
          document.getElementById("pointTitle").innerHTML = "เกือบดีแล้ว";
        } else {
          document.getElementById("scoreBgStar").style.backgroundImage = "url(/img/bad_point.gif)";
          document.getElementById("pointTitle").innerHTML = "พยายามอีกครั้ง";
        }

      },
    }


    window.onload = app.load();

    function button(ele) {
      app.check(ele);
      app.notClickAble();
    }

    function next() {
      app.next();
      app.clickAble();
    }


  </script>

@endsection
