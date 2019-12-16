@extends('layouts.appstudenthome')

@section('content')
<div class="container">
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}




    <div class="container">
        <div class="bandner">
            <div class="row">
                <div class="col-12 col-md-6 bandnerLeft ">
                    <img src="img/logo_edudeaf.png" alt="">
                    <p>Lorem ipsum is placeholder text commonly
                        used in the graphic, print, and publishing
                        industries for previewing layouts.
                    </p>

                </div>
                <div class="col-12 col-md-5 offset-1 bandnerRight">
                    <img src="img/character.png" alt="">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="site">
    <div class="func1">
        <img src="/../img/bg_category.jpg" alt="">
        <div class="container">
            <div class="func1content">
               <div class="row">
                   <div class="col-md-5 offset-1 func1Left">
                       <img src="/../img/left_category.png" alt="">
                   </div>
                   <div class="col-md-5">
                       <div class="text-center func1Right">
                           <div class="func1RightTittle">
                               <button class="btn btn-func1RightTittle"><h1>1</h1></button>
                               <h2>หมวดหมู่คำศัพท์</h2>
                               <hr class="underTittle">
                               <p>Lorem Ipsum is simply dummy text
                                   and typesetting industry.</p>
                           </div>
                       </div>
                       <div class="offset-7">
                           <img class="assBook" src="/../img/book.png" alt="">
                       </div>
                       <div class="offset-4">
                            <a href="/student"><button class="btn btnfunc1content">เริ่มเลย <i class="fas fa-arrow-circle-right"></i></button></a>
                       </div>
                   </div>

               </div>
            </div>
        </div>
    </div>





    <div class="func2">
        <img src="/../img/bg_sentence.jpg" alt="">
        <div class="container">
            <div class="func2content">
                <div class="row">
                    <div class="col-md-5" style="margin-left: 80px">
                        <div class="text-center func2Left">
                            <div class="func2LeftTittle">
                                <button class="btn btn-func2LeftTittle"><h1>2</h1></button>
                                <h2>หมวดหมู่คำศัพท์</h2>
                                <hr class="underTittle2">
                                <p>Lorem Ipsum is simply dummy text
                                    and typesetting industry.</p>
                            </div>
                            <div class="offset-3">
                                <a href="/student"><button class="btn btnfunc2content">เริ่มเลย <i class="fas fa-arrow-circle-right"></i></button></a>
                            </div>
                        </div>
                        <div class="col-md-9 assPencil">
                            <img src="/../img/pencil.png" alt="">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="text-center func2Right">
                            <img src="/../img/right_sentence.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="func3">
        <img src="/../img/bg_exam.jpg" alt="">
        <div class="container">
            <div class="func3content">
                <div class="row">
                    <div class="col-md-4 offset-2 func3Left">
                        <img src="/../img/left_exam.png" alt="">
                    </div>
                    <div class="col-md-5">
                        <div class="text-center func3Right">
                            <div class="func1RightTittle">
                                <button class="btn btn-func3RightTittle"><h1>3</h1></button>
                                <h2>หมวดหมู่คำศัพท์</h2>
                                <hr class="underTittle3">
                                <p>Lorem Ipsum is simply dummy text
                                    and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="offset-4">
                            <a href="/student"><button class="btn btnfunc3content">เริ่มเลย <i class="fas fa-arrow-circle-right"></i></button></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3 assPaper">
            <img src="/../img/paper-01.png" alt="">
        </div>
    </div>
</div>

@endsection
