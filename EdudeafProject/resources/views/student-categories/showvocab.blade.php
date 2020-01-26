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
                                {{$category->category_name}}
                            </h1>
                        </div>
                        <div class="categories_list_padding">
                            <div class="regular">
                                @if(count($category->vocabularies) > 0 )
                                    @foreach($category->vocabularies as $vocabulary)

                                        <div class="col-md-12">
                                            <div class="card mb-4 box-shadow">
                                                <div class="text-center">

                                                    <a href="/vocabularies/{{$vocabulary->id}}">
                                                        <img src="/uploads/vocabularies/{{$vocabulary->category_id}}/{{$vocabulary->vocab_photo}}" class="card-img-top" alt="">
                                                    </a>
                                                    <div class="card-body">
                                                        <h4>{{$vocabulary->vocab_word}}</h4>

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