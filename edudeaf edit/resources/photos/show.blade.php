@extends('layouts.app')
@section('content')
    <h1>{{$vocabulary->title}}</h1>
    <a class="btn btn-info" href="/albums/{{$vocabulary->categories_id}}">
        <i class="fas fa-chevron-left"></i> Go Back</a>

    <hr>
    <div class="row">

                <div class="col-md-4">
                    <div class="card md-4 box-shadow">

                            <img src="/uploads/photos/{{$vocabulary->categories_id}}/{{$vocabulary->vocab_photo}}" class="card-img-top" alt="">
                        <div class="card-body">

                            <form action="/photos/{{$vocabulary->id}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger">delete</button>
                            </form>

                        </div>
                    </div>
                </div>
    </div>

@endsection
