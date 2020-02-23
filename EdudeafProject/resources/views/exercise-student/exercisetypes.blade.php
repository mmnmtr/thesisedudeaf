@extends('layouts.appstudent')
@section('content')
  <style>
    body {
      font-family: 'Kodchasan', sans-serif;
      background-color: #FCFBF5;
      background-image: url(/../img/exercise_bg.png);
      background-repeat: no-repeat;
      background-position: 0px 0px;
      background-size: 100% auto;
    }

    .functitle {
      width: 100%;
      height: 900px;
      box-shadow: 0 0 99px 0 rgba(0, 0, 0, 0.08);
      border-left: solid 20px #3ebbae;
      border-right: solid 20px #3ebbae;
      background-color: #fcfbf5;
    }
    .excersiceType {
      width: 100%;
    }
    .categories_list_padding {
      padding-top: 60px;
    }
    .functitle h1 {
      margin-top: 80px;
    }
    .selectImg{
      margin-top: 30px;
      width: 321.9px;
      height: 321.9px;
      border-radius: 50px;
      box-shadow: 0 6px 9px 0 rgba(0, 0, 0, 0.16);
      border: solid 12px #3ebbae;
      background-color: #ffffff;
    }
    .selectSign {
      margin-top: 30px;
      width: 321.9px;
      height: 321.9px;
      border-radius: 50px;
      box-shadow: 0 6px 9px 0 rgba(0, 0, 0, 0.16);
      border: solid 12px #ffcd1a;
      background-color: #ffffff;
    }
    .btn-selectImgt {
      margin-top: 30px;
      padding: 25px;
      width: 353.3px;
      height: 126.4px;
      border-radius: 76px;
      box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.16);
      border: solid 7px #ffffff;
      background-color: #3ebbae;
      font-family: 'Kodchasan';
      font-size: 45px;
      font-weight: bold;
      color: #ffffff;
    }
    .btn-selectSign {
      margin-top: 30px;
      padding: 25px;
      width: 353.3px;
      height: 126.4px;
      border-radius: 76px;
      box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.16);
      border: solid 7px #ffffff;
      background-color: #f6ce4f;
      font-family: 'Kodchasan';
      font-size: 45px;
      font-weight: bold;
      color: #ffffff;
    }
    button:focus {
      outline: none;
    }
    .footer img {
      display: none;
    }
    img.blackBoard {
      margin-top: -150px;
      position: relative;
      width: 1510px;
    }
    a:not([href]):not([tabindex]) {
      color: #ffffff;
    }
  </style>

  <div class="function">
    <div class="container">
      <div class="row">
        <div class="functitle col col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center">
                เลือกแบบฝึกหัด
              </h1>
            </div>
              <div class="categories_list_padding">
                <div class="excersiceType">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="exType">
                          <div class="text-center">
                            <h2>คำศัพท์ให้ตรงกับภาพ </h2>
                            <button class="selectImg">
                            <img src="/../img/icon_frog.png" alt="">
                            </button>
                            <a href="/exercises/type/1" class="btn btn-selectImgt"><i class="fas fa-play"></i> เริ่มเลย</a>

                          </div>
                        </div>
                      </div>
                      <div class="col-md-5 offset-md-2">
                        <div class="exType">
                          <div class="text-center">
                            <h2>คำศัพท์ให้ตรงกับสะกดนิ้วมือ</h2>
                            <button class="selectSign">
                              <img src="/../img/icon_finger.png" alt="">
                            </button>
                            <a href="/exercises/type/1"  class="btn btn-selectSign"><i class="fas fa-play"></i> เริ่มเลย</a>
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
    <div class="text-center">
      <img class="blackBoard" src="/../img/blackboard.png" alt="">
    </div>

    </div>

@endsection
