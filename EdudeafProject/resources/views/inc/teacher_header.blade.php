<header>

    <nav class="navbar navbar navbar-expand-lg no-margin">
        <div class="navbar-header fixed-brand">
            <a class="navbar-brand" href="/user"><img src="/../img/logo_edudef_teacher.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    {{--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
                </li>
                <li class="nav-item">
                    {{--<a class="nav-link" href="#">Link</a>--}}
                </li>
                <li class="nav-item">
                    {{--<a class="nav-link disabled" href="#">Disabled</a>--}}
                </li>
            </ul>

            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else

                <div role="menu">
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
            @endif
        </div>
    </nav>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">

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
                    <a href="/"><span class="icon-menu fa-stack fa-lg pull-left"><i class="fas fa-home "></i></span> หน้าหลัก</a>
                </li>
                <li>
                    <a href="/categories"><span class="icon-menu fa-stack fa-lg pull-left"><i class="fas fa-plus-circle"></i></span> เพิ่มหมวดหมู่คำศัพท์</a>
                </li>
                <li>
                    <a href="#"><span class="icon-menu fa-stack fa-lg pull-left"><i class="fas fa-plus-circle "></i></span> ตัวสะกดนิ้วมือไทย</a>
                </li>
                <li>
                    <a href="#"> <span class="icon-menu fa-stack fa-lg pull-left"><i class="fas fa-plus-circle "></i></span> เพิ่มแบบฝึกหัด</a>
                </li>
                <li>
                    <a href="#"><span class="icon-menu fa-stack fa-lg pull-left"><i class="fas fa-plus-circle "></i></span> จัดการแต่งประโยค</a>
                </li>
                <li>
                    <a href="#"><span class="icon-menu fa-stack fa-lg pull-left"><i class="fas fa-user-graduate "></i></span> ข้อมูลนักเรียน</a>
                </li>
            </ul>
        </div>
    </div><!-- /#sidebar-wrapper -->
</header>