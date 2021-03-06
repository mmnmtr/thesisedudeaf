<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edudeaf Main</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/homeStudenr.css">
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
</head>
<body>
@include('layouts.inc.studentHome_header')
<div class="mt-10">
    @yield('content')
</div>
<footer>
    <div class="footer">
        <img class="bgFooter" src="/../img/BG_Footer_01.gif" alt="">
        <div class="copyright">
            <div class="text-center">
                <h3> copyright © 2019 | eduDeaf.com</h3>
            </div>
        </div>
        <div class="container">
          <center>
            <div class="talkBox">

              {{--                    <h3>สนุกกันเปล่า ?</h3>--}}

              {{--                    <p>--}}
              {{--                        หวังว่าการผจญภัยในครั้งนี้--}}
              {{--                        <br>--}}
              {{--                        จะทำให้ทุกคนสนุกกับการเรียนรู้--}}
              {{--                        <br>--}}
              {{--                        ไว้มาเจอกันใหม่นะ : - )--}}
              {{--                    </p>--}}
              <img class="bgFooter" src="/../img/logo_edu.gif" alt="">
            </div>
          </center>



            {{--<hr>--}}
        </div>

    </div>

</footer>

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
</body>
</html>
