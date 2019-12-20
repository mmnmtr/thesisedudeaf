<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <title>Edudeaf Main</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree&display=swap" rel="stylesheet">
</head>
<body>
@include('inc.teacher_header')
<div class="container mt-10">
    {{--@include('inc.message')--}}

    @yield('content')
</div>
<div class="footer text-center">
    <p>copyright © 2019 | eduDeaf.com </p>
</div>

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

    function getVal() {
        var x = document.getElementById("fname");
        document.getElementById("icard").innerHTML = x.value.toUpperCase();
    }
</script>
<script>
    var addNumeration = function(cl){
        var table = document.querySelector('table.' + cl)
        var trs = table.querySelectorAll('tr')
        var counter = 1

        Array.prototype.forEach.call(trs, function(x,i){
            var firstChild = x.children[0]
            if (firstChild.tagName === 'TD') {
                var cell = document.createElement('td')
                cell.textContent = counter ++
                x.insertBefore(cell,firstChild)
            } else {
                firstChild.setAttribute('colspan',2)
            }
        })
    }

    addNumeration("number")
</script>
<script>
    (function($) {
        $.fn.mnFileInput = function(params) {
            this.change(function(e) {
                $valueDom = $(this).closest('.customFile').find('.selectedFile');
                // $valueDom.addClass('inProgress');
                var filename = $('.customFile').data('label');
                if(e.target){
                    var fullPath = e.target.value;
                    filename = fullPath.replace(/^.*[\\\/]/, '');
                    $valueDom.text(filename);

                    e.target.onprogress = function (e) {
                        if (e.lengthComputable) {
                            console.log(e.loaded+  " / " + e.total)
                        }
                    }

                    // $valueDom.removeClass('inProgress');
                    console.log('>>>', this, e);
                }
            });
        };
    })(jQuery);

    $(".customFile > input").mnFileInput();

</script>
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("menu");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
@include('sweetalert::alert')
</body>
</html>
