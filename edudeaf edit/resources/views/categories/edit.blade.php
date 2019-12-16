@extends('layouts.appteacher')
@section('content')

    <h1>แก้</h1>
    <a class="btn btn-info" href="/categories"><i class="fas fa-chevron-left"></i> Go Back</a>
    <div class="card mt-2">
        <div class="card-body">
            <form method="POST" action="/categories/{{$category->id}}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label for="text" class="control-label">Text</label>
                    <input class="form-control" name="category_name" type="text" id="text" value="{{$category->category_name}}">
                    {{--<input class="form-control" name="category_name" type="text" id="text" placeholder="กรุณากรอกชื่อหวมดหมู่คำศัพท์">--}}
                </div>

                <div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>


@endsection