@extends('layouts.appstudent')
@section('content')
    <div class="function">
        <div class="container">
            <div class="row">
                <img class="bg" src="/../img/category_map.png" alt="">
                <div class="functitle col col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center">
                                พจนานุกรมภาษามือไทย
                            </h1>
                        </div>
                        <div class="categories_list">
                            <div class="row">
                                @if(count($categories) > 0)
                                @foreach($categories as $category)

                                    <div class="col-md-4 ">
                                        <div class="card mb-4 box-shadow">
                                            <div class="text-center">

                                                <a href="/student/{{$category->id}}">
                                                    <img src="uploads/catergorie_covers/{{$category->category_image}}" alt="" class="card-img-top">
                                                </a>
                                                <div class="card-body">
                                                    <h4>{{$category->category_name}}</h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @else
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="return">
                <div class="col-md-12">
                    <div class="text-center">
                        <a href="/student">
                            <button class="btn btn-Stdback"><h2><i class="fas fa-redo-alt"></i> ย้อนกลับ</h2></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection