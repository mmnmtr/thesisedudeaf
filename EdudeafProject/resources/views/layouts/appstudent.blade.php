<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edudeaf Main</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/style_student.css">

    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
</head>
<body>
@include('inc.student_header')
<div class=" mt-10">
    @include('inc.message')
    @yield('content')
</div>
<div class="content_bg">
    <img src="/../img/fakeface_bg2.png" alt="">
</div>
<footer>
    <div class="footer">
        <div class="copyright">
            <div class="text-center">
                <h3> copyright © 2019 | eduDeaf.com</h3>
            </div>
        </div>
        <div class="container">
            {{--<hr>--}}
        </div>
    </div>

</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"  type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"  type="text/javascript"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
    $(".regular").slick({
        dots: false,
        infinite: true,
        slidesPerRow: 3,
        rows: 2,
        responsive: [
            {
                breakpoint: 478,
                settings: {
                    slidesPerRow: 1,
                    rows: 1,
                }
            }
        ],
        prevArrow:"<img class='a-left control-c prev slick-prev' src='/../img/left.png'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='/../img/right.png'>"
    });
</script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $("#menu-toggle-2").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled-2");
        $('#menu ul').hide();
    });

    function initMenu() {
        $('#menu ul').hide();
        $('#menu ul').children('.current').parent().show();
        //$('#menu ul:first').show();
        $('#menu li a').click(
            function() {
                var checkElement = $(this).next();
                if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                    return false;
                }
                if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                    $('#menu ul:visible').slideUp('normal');
                    checkElement.slideDown('normal');
                    return false;
                }
            }
        );
    }
    $(document).ready(function() {
        initMenu();
    });
</script>
<script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function(){
        /*เมื่อปุ่มปิด หรือ เปิด เมนูด้านซ้ายถูกคลิก*/
        $(".close-l-sidenav,.open-l-sidenav").on("click",function(){
            $("html").css("overflow-x","hidden"); /*ป้องกันการแสดง scroolbar ในแนวนอน*/
            $(document.body).css({"position":"relative","overflow-x":"hidden"});    /*ป้องกันการแสดง scroolbar ในแนวนอน*/
            var toggleWidth = ($(".l-sidenav").width()==0)?250:0;
            $(".l-sidenav").width(toggleWidth);
            var toggleMarginLeft = toggleWidth; /*ให้ขยับส่วนของคลุมดำออกไปเท่ากับความกว้างของเมนูที่ขยับเข้ามา*/
            var toggleOverlayWidth = ($(".page-overlay-bg").width()==0)?"100%":0; /*ซ่อนหรือแสดงโดยการกำหนดค่าความกว้าง*/
            var fullHeight = $(".page-main").height(); /* ความสูงของเนื้อหา*/
            $(".page-main").css("margin-left",toggleMarginLeft); /*ขยับส่วนของเนื้อหาตามการแสดงของเมนูด้านซ้าย*/
            $(".page-overlay-bg").height(fullHeight); /*ให้ความสูงของพื้นที่คลุมดำเท่ากับเนื้อหา*/
            $(".page-overlay-bg").width(toggleOverlayWidth); /*ให้ความกว้างของพื้นที่คลุมดำเท่ากับ 100% หรือ 0*/
        });

        /*เมื่อปุ่มปิด หรือ เปิด เมนูด้านขวาถูกคลิก*/
        $(".close-r-sidenav,.open-r-sidenav").on("click",function(){
            /*กำหนดเงื่อนไข กรณีแสดงแบบเต็มจอ ถ้าความกว้างเริ่มต้นเป็น 0 ให้แสดง 100% */
            var toggleWidth = ($(".r-sidenav").width()==0)?"100%":0;
            $(".r-sidenav").width(toggleWidth);
        });

    });
</script>
<script>
    var ppbutton = document.getElementById("vidbutton");
    ppbutton.addEventListener("click", playPause);
    myVideo = document.getElementById("myvid");
    function playPause() {

            myVideo.pause();
            ppbutton.innerHTML = "<i class=\"fa fa-play-circle\">";

    }

</script>
</body>
</html>
