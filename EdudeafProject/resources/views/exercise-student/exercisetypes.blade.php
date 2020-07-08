@extends('layouts.appstudentExercise')
@section('content')
  <style>

    .categories_list_padding {
      padding-top: 10px;
    }


    .exType {
      padding: 15px;
    }
    .excersiceType {
      width: 100%;
    }



  </style>

  <div class="function">
    <div class="container">
      <div class="row">
        <div class="functitle col col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center">
                เลือกประเภทแบบฝึกหัด
              </h1>
            </div>
              <div class="categories_list_padding">
                <div class="excersiceType">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="exType">
                          <div class="text-center">
                            <button class="selectImg">
                            <img src="/../img/icon_frog.png" alt="">
                            </button>
                            <a href="/exercises/type/1"> <button class="btn btn-selectImgt">คำศัพท์ให้ตรงกับภาพ</button></a>

                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="exType">
                          <div class="text-center">
                            <button class="selectSign">
                              <img src="/../img/icon_finger.png" alt="">
                            </button>
                            <a href="/exercises/type/2"> <button class="btn btn-selectSign">คำศัพท์ให้ตรงกับสะกดนิ้วมือ </button></a>
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
