@extends('layouts.appstudenthome')

@section('content')
    <div class="container">
        <div class="container">
            <div class="bandner">
                <div class="row">
                    <div class="col-12 col-md-6 bandnerLeft ">
                        <img src="/../img/logo_edu.gif" alt="">
                        <div class="bandnerLeftText slide-right" >
                            <h3>ยินดีต้อนรับเข้าสู่โรงเรียน</h3>
                            <p>
                                มาสนุกกับการเรียนรู้คำศัพท์ภาษามือ
                              <br>
                                แต่งประโยคและแบบฝึกหัด พร้อมกันรึยัง?
                                <br>
                            </p>
                            <h4>มาเริ่มเรียนรู้กันเลย : - )</h4>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-1 bandnerRight">
                        <img src="/../img/welcome_model.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site" id="p1">
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
                                    <p>
                                        “ มาสนุกกับเรียนรู้คำศัพท์ด้วย
                                        <br>
                                        ตัวการ์ตูน  Animation 3D ”
                                    </p>
                                </div>
                            </div>
                            <div class="offset-8">
                                <img class="assBook" src="/../img/bookRed.png" alt="">
                            </div>
                            <div class="offset-4">
                                <a href="/student"><button class="btn btnfunc1content"> เริ่มเลย <i class="fas fa-arrow-right"></i></button></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>





        <div class="func2">
            <img src="/../img/bg_sentence.png" alt="">
            <div class="container">
                <div class="func2content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center func2Left">
                                <div class="func2LeftTittle">
                                    <button class="btn btn-func2LeftTittle"><h1>2</h1></button>
                                    <h2>แต่งประโยค</h2>
                                    <hr class="underTittle2">
                                    <p>“ เรียนรู้การแต่งประโยคภาษามือ
                                        <br>
                                        ไม่ยากอย่างที่คิด มาสนุกกันเลย ”
                                    </p>
                                </div>
                                <div class="offset-3">
                                    <a href="/sentences/subject"><button class="btn btnfunc2content"> เริ่มเลย <i class="fas fa-arrow-right"></i></button></a>
                                </div>
                            </div>
                            <div class="col-md-9 assPencil">
                                <img src="/../img/pencil.png" alt="">
                            </div>

                        </div>
                        <div class="col-md-7 offset-1">
                            <div class="text-center func2Right">
                                <img src="/../img/right_sentence.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="func3">
            <img src="/../img/bg_exam.png" alt="">
            <div class="container">
                <div class="func3content">
                    <div class="row">
                        <div class="col-md-5 offset-1 func3Left">
                            <img src="/../img/left_exam.png" alt="">
                        </div>
                        <div class="col-md-5">
                            <div class="text-center func3Right">
                                <div class="func1RfbgFooterightTittle">
                                    <button class="btn btn-func3RightTittle"><h1>3</h1></button>
                                    <h2>แบบฝึกหัด</h2>
                                    <hr class="underTittle3">
                                    <p>“ เติมเต็มพัฒนาการเรียนรู้ด้วย
                                        <br>
                                        แบบฝึกหัด มาลุยกันเลย ” </p>
                                </div>
                            </div>
                            <div class="offset-4">
                                <a href="/exercises"><button class="btn btnfunc3content"> เริ่มเลย <i class="fas fa-arrow-right"></i></button></a>
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
