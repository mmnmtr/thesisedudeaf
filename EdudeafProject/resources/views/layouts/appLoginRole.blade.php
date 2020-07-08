<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edu Deaf</title>
    <link rel="stylesheet" href="/css/loginRole.css">
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>
@include('layouts.inc.loginRole')
@yield('content')

{{--<script src="/js/jquery.min.js"></script>--}}
{{--<script src="/js/popper.min.js"></script>--}}
{{--<script src="/js/sweetalert.min.js"></script>--}}
{{--<script src="/js/messagebox.js"></script>--}}
{{--<script src="/js/app.js"></script>--}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script !src="">
  var width = screen.width;
  var height = screen.height;
  console.log(width);
  console.log(height);
  if (window.DeviceOrientationEvent) {
    window.addEventListener('orientationchange', function() { location.reload(); }, false);
    if (width < 769 || width < 1025) {
      if (height > 1020 ) {
        document.body.style.display = "none"
      }
      if (height < 815 && height > 770) {
        document.body.style.display = "none"
      }
      if (height < 815 && height < 500) {
        document.body.style.display = "none"
      }
      else {
        console.log('โขว์')
      }
    }
    else if (width > 1025 || height < 1025) {
      console.log('่โขว์;;;')
    }
  }
</script>


</body>
