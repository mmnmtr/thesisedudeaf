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
                        <a href="/admin/categories/create">
                            <button class="btn btn-create">
                                <i class="fas fa-plus-circle "></i>
                                เพิ่มหมวดหมู่คำศัพท์
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            {{--@if(count($albums) > 0)--}}
                {{--@foreach($albums as $album)--}}
            <div class="categories_list">
                <div class="col-md-12">
                    <table class="table number">
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
                                        <td scope="row" class="count"></td>
                                        <td width="15%" >{{$category->category_name}}</td>
                                        <td width="25%" style="text-align: center"><img src="uploads/catergorie_covers/{{$category->category_image}}"></td>
                                        <td width="20%" style="text-align: center">{{$category->count}}</td>
                                        <td width="25%" style="text-align: center">
                                            <form action="/admin/categories/{{$category->id}}" method="post">
                                                {{csrf_field()}}
                                                <a href="/admin/categories/{{$category->id}}/edit" class="btn btn-Edit mr-1"> <i class="fas fa-edit"></i></a>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-Red"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                        <td width="20%" style="text-align: center"><a href="/admin/categories/{{$category->id}}"><button class="btn btn-More"><i class="fas fa-clipboard-list"></i> ดูคำศัพท์</button></a></td>
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
