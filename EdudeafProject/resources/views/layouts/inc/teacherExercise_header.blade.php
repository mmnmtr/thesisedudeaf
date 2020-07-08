<header>

{{--    <nav class="navbar navbar navbar-expand-lg no-margin">--}}
{{--        <div class="navbar-header fixed-brand">--}}
{{--            <a class="navbar-brand" href="/user"><img src="/../img/logo_edudef_teacher.png" alt=""></a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--        </div>--}}

{{--        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">--}}
{{--            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">--}}
{{--                <li class="nav-item active">--}}
{{--                    --}}{{--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    --}}{{--<a class="nav-link" href="#">Link</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    --}}{{--<a class="nav-link disabled" href="#">Disabled</a>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--                <div role="menu">--}}
{{--                    <div>--}}
{{--                        <a href="{{ route('logout') }}"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                                                 document.getElementById('logout-form').submit();">--}}
{{--                            <button class="btn btn-logout my-2 my-sm-0">ออกจากระบบ</button>--}}
{{--                        </a>--}}

{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                            {{ csrf_field() }}--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
          <div class="col-md-12">
            <div class="text-center">
              <a class="navbar-brand" href="/"><img src="/../img/logo_edudef_teacher.png" alt=""></a>
            </div>
          </div>

            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                <div class="col-md-12">
                    <div class="row userShow">
                        <div class="col-md-5 userShowIcon">
                            <img src="/../img/icon_teacher.png" alt="">
                        </div>
                        <div class="col-md-7 row TeacherEdudeaf">
                            <h3>TeacherEdudeaf</h3>
                            <p>Admin</p>
                        </div>

                    </div>
                </div>

                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>

                <li >
                    <a href="/"><span class="icon-menu fa-stack fa-lg pull-left"><i class="fas fa-home "></i></span>&nbsp;&nbsp; หน้าหลัก</a>
                </li>
              <li>
                <a href="/admin/students"><span class="icon-menu fa-stack fa-lg pull-left"><i class="fas fa-user-graduate "></i></span>&nbsp;&nbsp; ข้อมูลนักเรียน</a>
              </li>
                <li>
                    <a  href="/admin"><span class="icon-menu fa-stack fa-lg pull-left"><i class="fas fa-align-justify"></i></span>&nbsp;&nbsp; เพิ่มหมวดหมู่คำศัพท์</a>
                </li>
                <li>
                    <a href="/admin/sentences"><span class="icon-menu fa-stack fa-lg pull-left"><i class="fas fa-pencil-alt"></i></span>&nbsp;&nbsp; แต่งประโยค</a>
                </li>
                <li>
                    <a  class="active" href="/admin/exercises"> <span class="icon-menu fa-stack fa-lg pull-left"><i class="fas fa-user-edit"></i></span>&nbsp;&nbsp; เพิ่มแบบฝึกหัด</a>
                </li>


            </ul>
          <div role="menu" class="menuu">
            <div>
              <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                <button class="btn btn-logout my-2 my-sm-0">ออกจากระบบ</button>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </div>
          </div>
        </div>
    </div><!-- /#sidebar-wrapper -->
</header>
