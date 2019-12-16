@extends('layouts.appteacher')
@section('content')
    <div class="container">
        <div class="row">
            <div class="functitle col col-md-12">
                <div class="row">
                    <div class="col col-md-9">
                        <span><div class="circke-blue"></div></span> <h1> เพิ่มหมวดหมู่คำศัพท์</h1>
                    </div>
                    <div class="createCate col-md-3">
                        <button class="btn btn-create">
                            <a href="/categories/create">
                                <i class="fas fa-plus-circle "></i>
                                เพิ่มหมวดหมู่คำศัพท์
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            {{--@if(count($albums) > 0)--}}
                {{--@foreach($albums as $album)--}}
            <div class="categories_list">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ชื่อหมวดหมู่ </th>
                            <th scope="col" style="text-align: center">รูปภาพ</th>
                            <th scope="col" style="text-align: center">จำนวนคำศัพท์ </th>
                            <th scope="col" style="text-align: center">Action</th>
                            <th scope="col" style="text-align: center">คลังคำศัพท์</th>

                        </tr>
                        </thead>
                        @if(count($categories) > 0)
                            @foreach($categories as $category)
                                <tbody class="list">
                                    <tr>
                                        {{--{{$category->id}}--}}
                                        <th scope="row"></th>
                                        <td width="15%" >{{$category->category_name}}</td>
                                        <td width="25%" style="text-align: center"><img src="uploads/catergorie_covers/{{$category->category_image}}"></td>
                                        <td width="20%" style="text-align: center">{{$category->count}}</td>
                                        <td width="25%" style="text-align: center">
                                            <form action="/categories/{{$category->id}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger">delete</button>
                                                
                                                <a href="/categories/{{$category->id}}/edit" class="btn btn-info mr-1"> <i class="fas fa-edit"></i> edit</a>
                                            </form>
                                        </td>
                                        <td width="20%" style="text-align: center"><button><a href="/categories/{{$category->id}}">ดูคำศัพท์</a></button></td>
                                    </tr>
                                </tbody>
                            @endforeach
                            @else
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection