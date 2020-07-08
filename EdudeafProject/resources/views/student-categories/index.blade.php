@extends('layouts.appstudent')
@section('content')
{{--  <style>--}}
{{--    .loader {--}}
{{--      position: fixed;--}}
{{--      z-index: 99;--}}
{{--      top: 0;--}}
{{--      left: 0;--}}
{{--      width: 100%;--}}
{{--      height: 100%;--}}
{{--      background: black;--}}
{{--      display: flex;--}}
{{--      justify-content: center;--}}
{{--      align-items: center;--}}
{{--    }--}}

{{--    .loader > img {--}}
{{--      width: 100px;--}}
{{--    }--}}

{{--    .loader.hidden {--}}
{{--      animation: fadeOut 2s;--}}
{{--      animation-fill-mode: forwards;--}}
{{--    }--}}

{{--    @keyframes fadeOut {--}}
{{--      100% {--}}
{{--        opacity: 0;--}}
{{--        visibility: hidden;--}}
{{--      }--}}
{{--    }--}}

{{--    .thumb {--}}
{{--      height: 100px;--}}
{{--      border: 1px solid black;--}}
{{--      margin: 10px;--}}
{{--    }--}}
{{--  </style>--}}

{{--  <div class="loader">--}}
{{--    <img src="../img/logo_edu.gif" alt="Loading..." />--}}
{{--  </div>--}}
    <div class="function">
        <div class="container">
            <div class="row">
{{--                <div class="bg">--}}
                <div class="functitle col col-md-12">
                    <div class="row">
                         <div class="col-md-12">
                            <h1 class="text-center">
                                หมวดหมู่คำศัพท์
                            </h1>
                        </div>
                        <div class="categories_list_padding">
                            <div class="regular">
                                @if(count($categories) > 0)
                                @foreach($categories as $category)

                                    <div class="col-md-12 ">
                                        <div class="card mb-4 box-shadow">
                                            <div class="text-center">

                                                <a href="/student/{{$category->id}}">
                                                  <div class="card-img-top">
                                                    <img src="uploads/catergorie_covers/{{$category->category_image}}" alt="">
                                                  </div>

                                                <div class="card-body">
                                                    <h4>{{$category->category_name}}</h4>
{{--                                                  <h4>{{$category->count}}</h4>--}}

                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @else
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="return">
                      <div class="col-md-4 offset-4">
                        <div class="text-center">
                          <a href="/student/home">
                            <button class="btn btn-Stdback"><h2><i class="fas fa-arrow-left"></i> ย้อนกลับ</h2></button>
                          </a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


{{--  <script !src="">--}}
{{--    window.addEventListener("load", function () {--}}
{{--      const loader = document.querySelector(".loader");--}}
{{--      loader.className += " hidden"; // class "loader hidden"--}}
{{--    });--}}
{{--  </script>--}}
@endsection
